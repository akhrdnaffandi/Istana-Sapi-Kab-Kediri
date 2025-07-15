<?php
include "connect.php";
header("Content-Type: application/json");

$input = json_decode(file_get_contents("php://input"), true);

if (isset($input['id_pakan'])) {
    $id_pakan = $input['id_pakan'];
    $jenis_pakan = $input['jenis_pakan'];
    $jumlah_pakan = $input['jumlah_pakan'];
    $pakan_perhari = $input['pakan_perhari'];

    $sql = "UPDATE tbdaftarpakan SET 
            jenis_pakan = :jenis_pakan, 
            jumlah_pakan = :jumlah_pakan, 
            pakan_perhari = :pakan_perhari
            WHERE id_pakan = :id_pakan";

    $stmt = $db->prepare($sql);
    $result = $stmt->execute([
        ':jenis_pakan' => $jenis_pakan,
        ':jumlah_pakan' => $jumlah_pakan,
        ':pakan_perhari' => $pakan_perhari,
        ':id_pakan' => $id_pakan
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