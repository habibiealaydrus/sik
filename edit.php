<?php
include('konfig/koneksi.php');
$id = $_GET["id"];
//query edit
$edit = "SELECT * FROM users WHERE id=$id";
$edit_query = mysqli_query($connect, $edit);
$edituser = mysqli_fetch_assoc($edit_query);

//action update
if (isset($_POST['update'])) {
    $id = $_GET["id"];
    $nama_lengkap = $_POST['nama_lengkap'];
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $leveluser = $_POST['leveluser'];
    $divisi = $_POST['divisi'];
    $bagian = $_POST['bagian'];
    $jabatan = $_POST['jabatan'];
    $update = $connect->query("UPDATE users SET nama_lengkap='$nama_lengkap',username='$username',pass='$pass',leveluser='$leveluser',divisi='$divisi',bagian='$bagian',jabatan='$jabatan' WHERE id='$id'");
    if ($update) {
        $msg = "Berhasil Di Update";
        header('Location:dashboard.php?menu=users');
    }
}
?>
<div class="row edit">
    <div class="col-sm-6">
        <div class="table-responsive-sm ">
            <h1>Detail User</h1>
            <form method="POST">
                <table class="table table-primary">
                    <tbody>
                        <tr>
                            <td>Nama</td>
                            <td><input type="text" name="nama_lengkap" class="form-control" aria-label="Username" placeholder="<?php echo $edituser['nama_lengkap']; ?>" value="<?php echo $edituser['nama_lengkap']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td><input type="text" name="username" class="form-control" placeholder="<?php echo $edituser['nama_lengkap']; ?>" value="<?php echo $edituser['username']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="text" name="pass" class="form-control" placeholder="<?php echo $edituser['pass']; ?>" value="<?php echo $edituser['pass']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Leveluser</td>
                            <td>
                                <select name="leveluser" class="form-control">
                                    <?php
                                    $terpilih = $edituser['leveluser'];
                                    switch ($terpilih) {
                                        case 'admin':
                                            echo '<option value="Admin" placeholder="admin">Admin</option>;
                                              <option>user</option>';
                                            break;
                                        case 'user':
                                            echo '<option value="User" placeholder="user">User</option>
                                                <option>admin</option>';
                                            break;
                                        default:
                                            echo '<option value="Admin">Admin</option>
                                              <option value="User">User</option>';
                                            break;
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Divisi</td>
                            <td>
                                <select name="divisi" class="form-control">
                                    <option value="medis">Medis</option>
                                    <option value="non medis">Non Medis</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Bagian</td>
                            <td>
                                <select name="bagian" class="form-control">
                                    <option value="UGD">UGD</option>
                                    <option value="Poli Umum">Poli Umum</option>
                                    <option value="Poli Gigi">Poli Gigi</option>
                                    <option value="Poli Anak">Poli Anak</option>
                                    <option value="Poli Gizi">Poli Gizi</option>
                                    <option value="Poli Tindakan">Poli Tindakan</option>
                                    <option value="Poli KIA">Poli KIA</option>
                                    <option value="Apotek">Apotek</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td>
                                <select name="jabatan" class="form-control">
                                    <option value="pendaftaran">Pendaftaran</option>
                                    <option value="dokter">Dokter</option>
                                    <option value="dokter gigi">Dokter Gigi</option>
                                    <option value="dokter spesialis">Dokter Spesialis</option>
                                    <option value="perawat">Perawat</option>
                                    <option value="perawat gigi">Perawat Gigi</option>
                                    <option value="apoteker">Apoteker</option>
                                    <option value="bidan">Bidan</option>
                                    <option value="tata usaha">Tata Usaha</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" name="update" value="Update" class="btn btn-primary"></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>
</div>