<?php
include "connect.php";
session_start();
if (isset($_POST['user'])){
    $user=$_POST['user'];
} else {
    $user="";
}

if (isset($_POST['pass'])){
    $pass=$_POST['pass'];
} else {
    $pass="";
}
$qr="select*from tbuser where username='".$user."' AND password='".$pass."'";
$result = $db->query($qr);
$n = $result->rowCount();
if ($n<>0){ $_SESSION['user']=$user;
    echo "<script>window.location='http://localhost/web-istana-sapi/dashboard/admin/'</script>";
} else {
    echo "<script>window.location='http://localhost/web-istana-sapi/dashboard/login.php'</script>";
}

?>