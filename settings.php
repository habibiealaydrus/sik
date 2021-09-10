<?php
/*title dinamis start*/
$halaman = "Settings";
/*title dinamis end*/
include('konfig/koneksi.php');
$urut = 1;
$poli = "SELECT * FROM setting";
$poli_query = mysqli_query($connect, $poli);
$poli_jadwal = mysqli_fetch_assoc($poli_query);
?>
<span class="badge bg-primary"><?php echo $halaman ?></span> <br />
<div>
    <h1>Settings</h1>
</div>
<div class="container-fluid">
    <div class="row users">
        <div class="col-sm-9 m-3">
            <div class="settingpoli" style=" 
                    background-color: white;
                    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
                    padding:2%;
                ">
                <div class="table-responsive-sm">
                    <button class="btn btn-success"><a href="dashboard.php?menu=addpoli" style="text-decoration: none;color:white;">Tambah Poli</a></button>
                    <span><strong>Pengaturan Waktu Poli</strong></span>
                    <table class="table tableusers display">
                        <thead>
                            <tr style="text-align: center;">
                                <th scope="col" width="5%">No.</th>
                                <th scope="col" width="15%">Nama Poli</th>
                                <th scope="col" width="5%">Mulai</th>
                                <th scope="col" width="5%">Tutup</th>
                                <th scope="col" width="10%">Maksimum Offline</th>
                                <th scope="col" width="10%">Maksimum Online</th>
                                <th scope="col" width="20%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php do { ?>
                                <tr style="text-align: center;">
                                    <td width="5%" scope="row"><?php echo $urut++; ?></td>
                                    <td width="5%"><?php echo $poli_jadwal['nama_poli']; ?></td>
                                    <td width="15%"><?php echo date("h:i A", strtotime($poli_jadwal["mulai"])); ?></td>
                                    <td width="15%"><?php echo date("h:i A", strtotime($poli_jadwal['tutup'])); ?></td>
                                    <td width="10%"><?php echo $poli_jadwal['maksimum_offline']; ?></td>
                                    <td width="10%"><?php echo $poli_jadwal['maksimum_online']; ?></td>
                                    <th width="20%" scope="col" style="text-align: center;">
                                        <button type="button" class="btn btn-warning"><a href="dashboard.php?menu=settings&id=<?php echo $poli_jadwal['id']; ?>">Edit</a></button>
                                        <button type="button" class="btn btn-danger"><a href="dashboard.php?menu=settings&id=<?php echo $poli_jadwal['id']; ?>">Hapus</a></button>
                                    </th>
                                </tr>
                            <?php } while ($poli_jadwal = mysqli_fetch_assoc($poli_query)); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>