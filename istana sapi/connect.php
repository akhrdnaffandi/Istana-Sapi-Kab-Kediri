<?php
$dsn="mysql:dbname=istana_sapi;host=localhost";
$user="root";
$pass="";
try{
    $db= new PDO($dsn,$user,$pass);
} catch(PDOException $e){
    echo "Gagal ".$e->getMessage();
}
?>