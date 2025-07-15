<?php
include "connect.php";
if(isset($_GET['nama_sapi'])){
	$nama_sapi=$_GET['nama_sapi'];
}else{
	$nama_sapi='';
}
if(isset($_GET['berat_sebelum'])){
	$berat_sebelum=$_GET['berat_sebelum'];
}else{
	$berat_sebelum='';
}		
if(isset($_GET['berat_sesudah'])){
	$berat_sesudah=$_GET['berat_sesudah'];
}else{
	$berat_sesudah='';
}	
if(isset($_GET['grade_sapi'])){
	$grade_sapi=$_GET['grade_sapi'];
}else{
	$grade_sapi='';
}	
//echo "$menu $link $id_induk $urutan $target";

$sql="insert into tbdaftarsapi (nama_sapi, berat_sebelum, berat_sesudah, grade_sapi)
		value ('$nama_sapi', '$berat_sebelum', '$berat_sesudah', '$grade_sapi')";
$simpan = $db->query($sql);
if($simpan){
	echo "<script>alert('Data berhasil disimpan'); window.history.back();</script>";
} else {
	echo "<script>alert('Data gagal disimpan'); window.history.back();</script>";
}
?>
