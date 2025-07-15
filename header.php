<?php
    include "connect.php";
    session_start();
    
    // Mendapatkan halaman saat ini berdasarkan URL
    $current_page = isset($_GET['page']) ? $_GET['page'] : 'home';
    $current_page_param = isset($_GET['page']) ? $_GET['page'] : '';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Istana Sapi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/logois2.png">

    <style>
        .navbar-nav .nav-item {
            margin-right: 15px;
        }
        .navbar-nav .nav-link {
            transition: color 0.3s ease-in-out, background-color 0.3s ease-in-out;
            padding: 10px 15px;
            border-radius: 5px;
            color: white;
        }
        .navbar-nav .nav-link:hover, .navbar-nav .nav-link.active {
            color: white;
            background-color: rgba(91, 155, 240, 1);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/logois2.png" alt="Logo" width="50" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse fw-semibold text-light" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'home') ? 'active' : ''; ?>" href="index.php?page=home">Home</a>                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page_param == 'about') ? 'active' : ''; ?>" href="index.php?page=about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page_param == 'data_sapi') ? 'active' : ''; ?>" href="index.php?page=data_sapi">Data Sapi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page_param == 'data_pakan') ? 'active' : ''; ?>" href="index.php?page=data_pakan">Data Pakan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
