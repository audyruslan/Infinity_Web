<?php
$title = "Presensi - Absen Infinity";
require 'layouts/header.php';
require 'layouts/navbar.php';
?>

<div class="content-header mt-5 mb-5">
    <div class="container">
        <h3 class="text-center">Scan Barcode Absen</h3>
         <div class="row">
            <div class="col">
                <h5 class="float-left"><b>Selamat <?= $salam; ?></b></h5>
                <h5 class="float-right"><b><?= date("H:i"); ?>, WITA</b></h5>
            </div>
        </div>
        <div class="row text-center">
            <form action="config/add_presensi.php" method="POST">
                <input type="hidden" name="id_user" value="<?= $admin["id"]; ?>">
                <input type="hidden" name="id_jabatan" value="<?= $jabatan["id"]; ?>">
                <input type="hidden" class="form-control" name="ket_presensi" id="texts">
                <input type="hidden" name="hadir" value="1">
                <div class="col">
                    <video id="preview" width="100%"></video>
                </div>
            </form>
        </div>

    </div>
</div>
</div>


<?php
require 'layouts/menu_bottom.php';
?>
<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<script src="../dist/js/script.js"></script>
<!-- Sweetalert -->
<script src="../plugins/sweetalert2/sweetalert2.all.min.js"></script>
<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
    integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
    crossorigin=""></script>
<!-- Webcamejs -->
<script src="../assets/js/instascan.js/adapter.min.js"></script>
<script src="../assets/js/instascan.js/instascan.min.js"></script>
<script src="../assets/js/instascan.js/vue.min.js"></script>
<!-- SweatAlert -->
<?php
if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
?>
<script>
Swal.fire({
    title: '<?= $_SESSION['status'];  ?>',
    icon: '<?= $_SESSION['status_icon'];  ?>',
    text: '<?= $_SESSION['status_info'];  ?>'
});
</script>
<?php
    unset($_SESSION['status']);
}
?>
<!-- Instscan.js -->
<script type="text/javascript">
let scanner = new Instascan.Scanner({
    video: document.getElementById('preview'),
     mirror: false
});
scanner.addListener('scan', function(content) {
    document.getElementById('texts').value = content;
    document.forms[0].submit();
});
Instascan.Camera.getCameras().then(function(cameras) {
    if (cameras.length > 0) {
        scanner.start(cameras[1]);
    } else {
        console.error('No cameras found.');
    }
}).catch(function(e) {
    console.error(e);
});
</script>
</body>

</html>