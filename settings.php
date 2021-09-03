<?php
/*title dinamis start*/
$halaman = "Settings";
/*title dinamis end*/
include('konfig/koneksi.php');
$urut = 1;
$poli = "SELECT * FROM setingswaktu";
$poli_query = mysqli_query($connect, $poli);
$poli_jadwal = mysqli_fetch_assoc($poli_query);

?>
<span class="badge bg-primary"><?php echo $halaman ?></span> <br />
<div>
    <h1>Settings</h1>
</div>
<div class="container-fluid">
    <div class="row users">
        <div class="col-sm-6 m-3">
            <div class="table-responsive-sm settingpoli">
                <button class="btn btn-success"><a href="dashboard.php?menu=addpoli" style="text-decoration: none;color:white;">Tambah Poli</a></button>
                <table class="table tableusers display settingpoli">
                    <thead>
                        <tr style="text-align: center;">
                            <th scope="col">No.</th>
                            <th scope="col">Nama Poli</th>
                            <th scope="col">Mulai</th>
                            <th scope="col">Tutup</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php do { ?>
                            <tr>
                                <th scope="row"><?php echo $urut++; ?></th>
                                <td><?php echo $poli_jadwal['nama_poli']; ?></td>
                                <td><?php echo date("h:i A", strtotime($poli_jadwal["mulai"])); ?></td>
                                <td><?php echo date("h:i A", strtotime($poli_jadwal['tutup'])); ?></td>
                                <th scope="col" style="text-align: center;">
                                    <button type="button" class="btn btn-warning"><a href="dashboard.php?menu=settings&id=<?php echo $poli_jadwal['id']; ?>">Edit</a></button>
                                    <button type="button" class="btn btn-danger"><a href="dashboard.php?menu=settings&id=<?php echo $poli_jadwal['id']; ?>">Hapus</a></button>
                                </th>
                            </tr>
                        <?php } while ($poli_jadwal = mysqli_fetch_assoc($poli_query)); ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-6">
        </div>
    </div>
</div>