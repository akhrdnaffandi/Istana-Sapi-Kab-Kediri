<?php
include "connect.php"; // Pastikan file koneksi database sudah benar

// Query untuk menghitung jumlah data sapi
$sql = "SELECT COUNT(*) AS total FROM tbdaftarsapi";
$stmt = $db->prepare($sql);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
$total_sapi = $result['total']; // Mengambil nilai total sapi dari hasil query

// Query untuk menghitung jumlah data pakan
$sql = "SELECT COUNT(*) AS total FROM tbdaftarpakan";
$stmt = $db->prepare($sql);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
$total_pakan = $result['total']; // Mengambil nilai total sapi dari hasil query

?>

<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Dashboard</h3>
                </div>
            </div>
        </div>
    </div>
    <!--end::App Content Header-->

    <!--begin::App Content-->
    <div class="app-content">
        <div class="container-fluid">
            <div class="row">
                <!-- Data Sapi -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-primary bg-opacity-25 p-0 rounded border border-primary">
                        <div class="inner">
                            <h3 class="text-primary"><?php echo $total_sapi; ?></h3>
                            <h5 class="fw-bold text-primary">Data Sapi</h5>
                        </div>
                        <svg class="small-box-icon text-primary" fill="currentColor" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M448 80l0 48c0 44.2-100.3 80-224 80S0 172.2 0 128L0 80C0 35.8 100.3 0 224 0S448 35.8 448 80zM393.2 214.7c20.8-7.4 39.9-16.9 54.8-28.6L448 288c0 44.2-100.3 80-224 80S0 332.2 0 288L0 186.1c14.9 11.8 34 21.2 54.8 28.6C99.7 230.7 159.5 240 224 240s124.3-9.3 169.2-25.3zM0 346.1c14.9 11.8 34 21.2 54.8 28.6C99.7 390.7 159.5 400 224 400s124.3-9.3 169.2-25.3c20.8-7.4 39.9-16.9 54.8-28.6l0 85.9c0 44.2-100.3 80-224 80S0 476.2 0 432l0-85.9z"></path>
                        </svg>
                        <a href="?page=daftar_sapi" class="small-box-footer rounded bg-light text-primary link-primary link-underline-opacity-0 d-flex justify-content-between align-items-center p-2">
                            View Detail <i class="bi bi-arrow-right-square fs-5"></i>
                        </a>
                    </div>
                </div>

                <!-- Data Pakan -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success bg-opacity-25 p-0 rounded border border-success">
                        <div class="inner">
                            <h3 class="text-success"><?php echo $total_pakan; ?></h3>
                            <h5 class="fw-bold text-success">Data Pakan</h5>
                        </div>
                        <svg class="small-box-icon text-success" fill="currentColor" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M448 80l0 48c0 44.2-100.3 80-224 80S0 172.2 0 128L0 80C0 35.8 100.3 0 224 0S448 35.8 448 80zM393.2 214.7c20.8-7.4 39.9-16.9 54.8-28.6L448 288c0 44.2-100.3 80-224 80S0 332.2 0 288L0 186.1c14.9 11.8 34 21.2 54.8 28.6C99.7 230.7 159.5 240 224 240s124.3-9.3 169.2-25.3zM0 346.1c14.9 11.8 34 21.2 54.8 28.6C99.7 390.7 159.5 400 224 400s124.3-9.3 169.2-25.3c20.8-7.4 39.9-16.9 54.8-28.6l0 85.9c0 44.2-100.3 80-224 80S0 476.2 0 432l0-85.9z"></path>
                        </svg>
                        <a href="?page=daftar_pakan" class="small-box-footer rounded bg-light text-success link-success link-underline-opacity-0 d-flex justify-content-between align-items-center p-2">
                            View Detail <i class="bi bi-arrow-right-square fs-5"></i>
                        </a>
                    </div>
                </div>

                <!-- Kalender di Sisi Kanan -->
                <div class="col-lg-4 col-md-3 mt-6 ms-auto">
                    <div class="card p-3 m-1 shadow">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0"><i class="bi bi-calendar3 me-2"></i> Kalender</h5>
                        </div>
                        <div class="card-body">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</main>

<!-- Tambahkan jQuery UI untuk Kalender -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(document).ready(function () {
        $("#calendar").datepicker();
    });
</script>
