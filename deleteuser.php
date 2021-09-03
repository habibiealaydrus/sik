<?php
$mysqli = new mysqli("localhost", "root", "", "sik");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

if(isset($_GET['id'])!="")
  {
   $id=$_GET['id'];
   $hapus=$mysqli->query("DELETE FROM users WHERE id='$id'");
   if($hapus)
   {
       header("Location:dashboard.php?menu=users");
   }
}

$mysqli->close();
