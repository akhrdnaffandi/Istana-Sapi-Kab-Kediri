<?php
include "connect.php";

if (isset($_GET['id_sapi'])) {
    $id_sapi = $_GET['id_sapi'];
    $sql = "DELETE FROM tbdaftarsapi WHERE id_sapi = ?";
    $result = $db->prepare($sql);

    if ($result->execute([$id_sapi])) {
        echo "<script>alert('Data berhasil dihapus'); window.history.back();</script>";
    } else {
        echo "<script>alert('Data gagal dihapus'); window.history.back();</script>";
    }
}
?>
