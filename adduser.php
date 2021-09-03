<?php
$mysqli = new mysqli("localhost", "root", "", "sik");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

if(isset($_POST['tambah'])!="")
  {
    $id = $_POST[''];
    $nama_lengkap = $_POST['nama_lengkap'];
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $leveluser = $_POST['leveluser'];
    $divisi = $_POST['divisi'];
    $bagian = $_POST['bagian'];
    $jabatan = $_POST['jabatan'];
    $insert= $mysqli->query("INSERT INTO users (nama_lengkap,username,pass,leveluser,divisi,bagian,jabatan) VALUE ('$nama_lengkap','$username',md5('$pass'),'$leveluser','$divisi','$bagian','$jabatan') ");
  
  if($insert)
  {
      $msg="Tambah Data Berhasil";
      echo "<script type='text/javascript'>alert('$msg');</script>";
      header('Location:dashboard.php?menu=users');
  }
  }
  else
  {
     $errormsg="Tambah Data Gagal !!! Coba Lagi !!";
      echo "<script type='text/javascript'>alert('$errormsg');</script>";
      header('Location:dashboard.php?menu=add&leveluser=admin');
  }

$mysqli->close();
