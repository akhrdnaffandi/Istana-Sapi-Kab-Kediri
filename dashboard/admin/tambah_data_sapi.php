<?php
include "connect.php";


?>

<main class="app-main"> <!--begin::App Content Header-->
            <div class="app-content-header"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0 fw-semibold">Tambah Data Sapi</h3>
                        </div>
                    </div> <!--end::Row-->
                </div> <!--end::Container-->
            </div> <!--end::App Content Header--> <!--begin::App Content-->
            <div class="card mb-4 mx-4"> <!--begin::Header-->
                <form method="GET" action="simpan_data_sapi.php"> <!--begin::Body-->
                    <div class="card-body">
                        <div class="row mb-3"> <label class="col-sm-2 col-form-label fw-bold">Nama Sapi</label>
                            <div class="col-sm-10"> <input type="text" class="form-control" name="nama_sapi" required> </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label fw-bold">Berat Sebelum</label>
                            <div class="col-sm-10 d-flex">
                                <input type="number" class="form-control" name="berat_sebelum" min="0" required>
                                <span class="ms-2 align-self-center fw-bold">Kilogram</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label fw-bold">Berat Sesudah</label>
                            <div class="col-sm-10 d-flex">
                                <input type="number" class="form-control" name="berat_sesudah" min="0" required>
                                <span class="ms-2 align-self-center fw-bold">Kilogram</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label fw-bold">Grade Sapi</label>
                            <div class="col-sm-10 d-flex align-items-center">
                                <div class="form-check me-3">
                                    <input class="form-check-input" type="radio" name="grade_sapi" id="belum_poel" value="Belum Poel" required>
                                    <label class="form-check-label" for="belum_poel">Belum Poel</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="grade_sapi" id="sudah_poel" value="Sudah Poel" required>
                                    <label class="form-check-label" for="sudah_poel">Sudah Poel</label>
                                </div>
                            </div>
                        </div>


                    </div> <!--end::Body--> <!--begin::Footer-->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <button type="reset" class="btn float-end btn-danger">Batal</button>
                    </div> <!--end::Footer-->
                </form> <!--end::Form-->
            </div> <!--end::Horizontal Form-->
            <div class="app-content"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    <div class="row"> <!--begin::Col-->
                    </div> <!-- /.row (main row) -->
                </div> <!--end::Container-->
            </div> <!--end::App Content-->
</main> <!--end::App Main--> <!--begin::Footer-->

