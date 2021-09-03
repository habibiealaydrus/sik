<?php
$username   = $_POST['username'];
$pass       = md5($_POST['pass']);

include 'konfig/koneksi.php';

$user = mysqli_query($connect, "select * from users where username='$username' and pass='$pass'");
$chek = mysqli_num_rows($user);
if ($chek > 0) {
    session_start();
    $row = mysqli_fetch_array($user);
    $_SESSION['nama_lengkap'] = $row['nama_lengkap'];
    $_SESSION['divisi'] = $row['divisi'];
    $_SESSION['bagian'] = $row['bagian'];
    $_SESSION['jabatan'] = $row['jabatan'];
    header("location:dashboard.php?menu=");
} else {
    header("location:index.php");
}
