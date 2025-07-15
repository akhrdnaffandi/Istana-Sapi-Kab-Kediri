<?php
include "connect.php";
header("Content-Type: application/json");

$input = json_decode(file_get_contents("php://input"), true);

if (isset($input['id_sapi'])) {
    $id_sapi = $input['id_sapi'];
    $nama_sapi = $input['nama_sapi'];
    $berat_sebelum = $input['berat_sebelum'];
    $berat_sesudah = $input['berat_sesudah'];
    $grade_sapi = $input['grade_sapi'];

    $sql = "UPDATE tbdaftarsapi SET 
            nama_sapi = :nama_sapi, 
            berat_sebelum = :berat_sebelum, 
            berat_sesudah = :berat_sesudah, 
            grade_sapi = :grade_sapi 
            WHERE id_sapi = :id_sapi";

    $stmt = $db->prepare($sql);
    $result = $stmt->execute([
        ':nama_sapi' => $nama_sapi,
        ':berat_sebelum' => $berat_sebelum,
        ':berat_sesudah' => $berat_sesudah,
        ':grade_sapi' => $grade_sapi,
        ':id_sapi' => $id_sapi
    ]);

    if ($result) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false]);
    }
} else {
    echo json_encode(["success" => false, "message" => "Data tidak lengkap"]);
}
?>
