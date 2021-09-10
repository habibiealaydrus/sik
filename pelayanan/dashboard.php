<?php
session_start();
/*title dinamis start*/
$halaman = "Dashboard";
/*title dinamis end*/
/*title pengamanan halaman start*/
if ($_SESSION['nama_lengkap'] == '') {
    header("location:index.php");
}
/*title pengamanan halaman end*/

?>
<?php include 'include/header.php'; ?>
<!-- Side-Nav -->
<?php include 'include/sidenav.php'; ?>
<!-- Main Wrapper -->
<div class="p-1 my-container active-cont bg-light">
    <!-- Top Nav -->
    <nav class="navbar top-navbar navbar-light bg-light px-5">
        <a class="btn border-0" id="menu-btn"><i class="bx bx-menu"></i></a>
    </nav>
    <!--End Top Nav -->
    <!-- Profile  Start-->
    <h1>
        Pelayanan Kesehatan
    </h1>
    <div class="layanan">
        <button type="button" class="btn btn-primary">ANTRIAN</button>
        <button type="button" class="btn btn-secondary">PENDAFTARAN</button>
        <button type="button" class="btn btn btn-outline-danger">KASIR</button>
        <button type="button" class="btn btn-success">PERAWAT</button>
        <button type="button" class="btn btn-outline-success">
            <p>PERAWAT GIGI</p>
        </button>
        <button type="button" class="btn btn-danger">BIDAN</button>
        <button type="button" class="btn btn-warning">DOKTER</button>
        <button type="button" class="btn btn-info">APOTEKER</button>
    </div>
</div>

<?php include 'include/footer.php'; ?>