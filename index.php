<?php
include "connect.php";
if (isset($_GET['page'])){
    $page=$_GET['page'];
}else {
    $page='';
}
include "header.php";
switch($page){
    case "home":
        include "home.php";
        break;
    case "about":
        include "about.php";
        break;
    case "data_sapi":
        include "data_sapi.php";
        break;
    case "data_pakan":
        include "data_pakan.php";
        break;
    default:
        include "home.php";
        break;
}
include "footer.php";
?>