<?php
include "connect.php";
if(isset($_GET['jenis_pakan'])){
	$jenis_pakan=$_GET['jenis_pakan'];
}else{
	$jenis_pakan='';
}
if(isset($_GET['jumlah_pakan'])){
	$jumlah_pakan=$_GET['jumlah_pakan'];
}else{
	$jumlah_pakan='';
}	
if(isset($_GET['pakan_perhari'])){
	$pakan_perhari=$_GET['pakan_perhari'];
}else{
	$pakan_perhari='';
}	
//echo "$menu $link $id_induk $urutan $target";

$sql="insert into tbdaftarpakan (jenis_pakan, jumlah_pakan, pakan_perhari)
		value ('$jenis_pakan', '$jumlah_pakan', '$pakan_perhari')";
$simpan = $db->query($sql); 
if($simpan){
	echo "<script>alert('Data berhasil disimpan'); window.history.back();</script>";
} else {
	echo "<script>alert('Data gagal disimpan'); window.history.back();</script>";
}
?>