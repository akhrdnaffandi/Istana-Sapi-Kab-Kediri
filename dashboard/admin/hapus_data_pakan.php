<?php
include "connect.php";

if (isset($_GET['id_pakan'])) {
    $id_pakan = $_GET['id_pakan'];
    $sql = "DELETE FROM tbdaftarpakan WHERE id_pakan = ?";
    $result = $db->prepare($sql);

    if ($result->execute([$id_pakan])) {
        echo "<script>alert('Data berhasil dihapus'); window.history.back();</script>";
    } else {
        echo "<script>alert('Data gagal dihapus'); window.history.back();</script>";
    }
}
?>

