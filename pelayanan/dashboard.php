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
<?php include('./../konfig/constant.php'); ?>
<?php include '../required/header.php'; ?>
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
    <?php include 'include/layanan.php'; ?>
</div>
<?php include '../required/footer.php'; ?>