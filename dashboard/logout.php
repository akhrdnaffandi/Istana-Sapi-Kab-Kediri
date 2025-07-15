<?php
session_start();
$_SESSION['user']='';
echo "<script>window.location='http://localhost/web-istana-sapi/dashboard/login.php'</script>";
?>