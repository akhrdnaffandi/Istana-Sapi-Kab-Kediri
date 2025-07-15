<?php
session_start();
if (empty($_SESSION['user'])){
    echo "<h1><font color='red'>Access Denied</font></h1>";
} else {
    include "header.php";
    include "sidebar.php";
    if (isset($_GET['page'])){
        $page = $_GET['page'];
    } else {
        $page = '';
    }
    switch ($page) {
        case "data_sapi":
            include "tambah_data_sapi.php";
            break;
        case "data_pakan":
            include "tambah_data_pakan.php";
            break;
        case "daftar_sapi":
            include "daftar_data_sapi.php";
            break;
        case "daftar_pakan":
            include "daftar_data_pakan.php";
            break;
        case "dashboard":
            include "home.php";
            break;
        default:
            include "home.php";
            break;
    }
        include "footer.php";
}
?> 