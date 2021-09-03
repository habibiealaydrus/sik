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
<?php include 'required/header.php'; ?>
<!-- Side-Nav -->
<?php include 'required/sidenav.php'; ?>
<!-- Main Wrapper -->
<div class="p-1 my-container active-cont bg-light">
  <!-- Top Nav -->
  <nav class="navbar top-navbar navbar-light bg-light px-5">
    <a class="btn border-0" id="menu-btn"><i class="bx bx-menu"></i></a>
  </nav>
  <!--End Top Nav -->
  <!-- Profile  Start-->

  <?php
  if (!isset($_GET['menu'])) {
    header("location:dashboard.php?menu=");
  } else {
    $bagian = $_GET['menu'];
    switch ($bagian) {
      case "users":
        include('users.php');
        break;
      case "settings":
        include('settings.php');
        break;
      case "pelayanan":
        include("pelayanan.php");
        break;
      case "manajemen":
        include("manajemen.php");
        break;
      case "add":
        include("add.php");
        break;
      case "edit":
        include("edit.php");
        break;
      case "addpoli":
        include("addpoli.php");
        break;
      default:
        include("status/datalogin.php");
        include("statistik.php");
        break;
    }
  }
  ?>
</div>

<?php include 'required/footer.php'; ?>