<?php
include("konfig/koneksi.php");
$urut = 1;
$users = "SELECT * FROM users";
$users_query = mysqli_query($connect, $users);
$listusers = mysqli_fetch_assoc($users_query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Users</title>
</head>

<body>
    <table border="1" cellpadding="1">
        <tr>
            <td style="width: 20%;text-align:center;"><img src="https://img.freepik.com/free-vector/health-care-logo_18099-31.jpg?size=338&ext=jpg" width="50%"></td>
            <td style="width: 60%;text-align:center;">
                <h1>DAFTAR USERS</h1>
            </td>
            <td style="width: 20%;font-size:100%;text-align:center;">
                <p>Dicetak pada tanggal<strong> <?php echo date("d/m/Y") ?></strong></p>
                <p>Pukul : <strong><?php echo date("G:h:s") ?></strong></p>
            </td>
        </tr>
    </table>
    <table border="1" cellpadding="1" width="100%" style="text-align: center;" ;>
        <tr>
            <th scope="col" style="width: 10%;">No.Urut</th>
            <th scope="col" style="width: 20%;">Nama</th>
            <th scope="col" style="width: 30%;">Jenis User</th>
            <th scope="col" style="width: 20%;">Jabatan</th>
            <th scope="col" style="width: 20%;">Bagian</th>
        </tr>
        <tbody>
            <?php do { ?>
                <tr>
                    <td><?php echo $urut++; ?></td>
                    <td><?php echo $listusers["nama_lengkap"]; ?></td>
                    <td><?php echo $listusers["leveluser"]; ?></td>
                    <td><?php echo $listusers["jabatan"]; ?></td>
                    <td><?php echo $listusers["bagian"]; ?></td>
                </tr>
            <?php } while ($listusers = mysqli_fetch_assoc($users_query)); ?>
        </tbody>
    </table>
</body>

</html>