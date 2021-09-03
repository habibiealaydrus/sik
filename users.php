<?php
/*title dinamis start*/
$halaman = "Users";
/*title dinamis end*/
//query users
include('konfig/koneksi.php');
$urut1 = 1;
$urut2 = 1;
//query administrator
$admin = "SELECT * FROM users WHERE leveluser='admin'";
$admin_query = mysqli_query($connect, $admin);
$administrator = mysqli_fetch_assoc($admin_query);
//query users
$users = "SELECT * FROM users WHERE leveluser='user'";
$users_query = mysqli_query($connect, $users);
$user = mysqli_fetch_assoc($users_query);

?>
<span class="badge bg-primary"><?php echo $halaman ?></span>
<div class="container-fluid">
    <div class="row users">
        <div class="col-sm-6 table-responsive-sm">
            <span class="badge bg-primary"><a class="buttontext" href="dashboard.php?menu=add&leveluser=admin">Tambah</a></span>
            <h5>Administrator</h5>
            <table class="table tableusers display" id="example1">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php do {
                    ?>
                        <tr>
                            <td><?php echo $urut1++; ?></td>
                            <td><?php echo $administrator['nama_lengkap']; ?></td>
                            <td><button type="button" class="btn btn-warning"><a href="dashboard.php?menu=edit&id=<?php echo $administrator['id']; ?>">Edit</a></button></td>
                            <td><button type="button" class="btn btn-danger"><a href="deleteuser.php?id=<?php echo $administrator['id']; ?>">Hapus</a></button></td>
                        </tr>
                    <?php
                    } while ($administrator = mysqli_fetch_assoc($admin_query)); ?>
                </tbody>
            </table>
            <span class="badge bg-primary"><a class="buttontext" target="_blank" href="cetakusers.php">Cetak</a></span>
        </div>
        <div class="col-sm-6 table-responsive-sm">
            <span class="badge bg-primary"><a class="buttontext" href="dashboard.php?menu=add&leveluser=admin">Tambah</a></span>
            <h5>Users</h5>
            <table class="table tableusers display" id="example">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php do {
                    ?>
                        <tr>
                            <td><?php echo $urut2++; ?></td>
                            <td><?php echo $user['nama_lengkap']; ?> </td>
                            <td><?php echo $user['jabatan']; ?></td>
                            <td><button type="button" class="btn btn-warning"><a href="dashboard.php?menu=edit&id=<?php echo $user['id']; ?>">Edit</a></button></td>
                            <td><button type="button text-white" class="btn btn-danger"><a href="deleteuser.php?id=<?php echo $user['id']; ?>">Hapus</a></button></td>
                        </tr>
                    <?php
                    } while ($user = mysqli_fetch_assoc($users_query)) ?>
                </tbody>
            </table>
            <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script>
                $(document).ready(function() {
                    $('#example').DataTable();
                });
            </script>
            <script>
                $(document).ready(function() {
                    $('#example1').DataTable();
                });
            </script>
            <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
        </div>
    </div>
</div>