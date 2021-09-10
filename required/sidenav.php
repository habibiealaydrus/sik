<div class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column" id="sidebar">
  <ul class="nav flex-column text-white w-100">
    <a href="dashboard.php?menu=" class="nav-link h3 text-white my-2 textmenu">
      Sistem Informasi </br>RS/ Klinik
    </a>
    <li href="dashboard.php?menu=" class="nav-link">
      <i class="bx bxs-dashboard"></i>
      <a class="mx-2 textmenu" href="dashboard.php?menu=">Dasboard</a>
    </li>
    <li class="nav-link">
      <i class="bx bx-user-check"></i>
      <a class="mx-2 textmenu" href="dashboard.php?menu=users">Users</a>
    </li>
    <li href="#" class="nav-link">
      <i class="bx bx-cog"></i>
      <a class="mx-2 textmenu" href="dashboard.php?menu=settings">Settings</a>
    </li>
    <li href="#" class="nav-link">
      <i class="bx bx-clinic"></i>
      <a class="mx-2 textmenu" href="pelayanan/dashboard.php">Pelayanan</a>
    </li>
    <li href="#" class="nav-link">
      <i class='bx bxs-business'></i>
      <a class="mx-2 textmenu" href="dashboard.php?menu=manajemen">Manajemen</a>
    </li>
    <li href="#" class="nav-link ">
      <i class="bx bx-log-out"></i>
      <a class="mx-2 textmenu" href="logout.php">Log out</a>
    </li>
  </ul>
  <?php include 'required/footermenu.php'; ?>
</div>