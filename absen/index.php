<?php
$title = "Home - Absen Infinity";
require 'layouts/header.php';
require 'layouts/navbar.php';
?>

<div class="content-header mt-5 mb-5">
    <div class="container">
          <div class="row text-center">
            <div class="col-12">
                <p><b>السلام عليكم ورحمة الله وبركاته</b></p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h5 class="float-left"><b>Selamat <?= $salam; ?></b></h5>
                <h5 class="float-right"><b><?= date("H:i"); ?>, WITA</b></h5>
            </div>
            <div class="col-12">
                <div class="card card-widget widget-user-2">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-dark">
                        <div class="widget-user-image">
                            <img class="img-circle elevation-2" src="../assets/img/avatar.png" alt="Image">
                        </div>
                        <!-- /.widget-user-image -->
                        <h3 class="widget-user-username"><?= $admin["nama_lengkap"]; ?></h3>
                        <h5 class="widget-user-desc"><?= $jabatan["nama_jabatan"]; ?></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- THE CALENDAR -->
                <div class="card card-primary">
                    <div class="card-body p-0">
                        <!-- THE CALENDAR -->
                        <div id="calendar"></div>
                        <!-- /.card-body -->
                        <!-- Modal -->
                        <div class="modal fade" id="CalendarModal" tabindex="-1" role="dialog"
                            aria-labelledby="CalendarModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="CalendarModalLabel">Detail Absensi</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="time_presensi">DWaktu</label>
                                                    <input type="time" class="form-control" name="time_presensi"
                                                        id="time_presensi">
                                                </div>
                                            </div>  
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="time_presensi">Detail Tanggal</label>
                                                    <input type="time" class="form-control" name="time_presensi"
                                                        id="time_presensi">
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="form-group">
                                            <label for="keterangan">Keterangan</label>
                                            <textarea class="form-control" name="keterangan" id="keteranganP" cols="30"
                                                readonly></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Kembali</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
require 'layouts/menu_bottom.php';
require 'layouts/footer.php';
?>