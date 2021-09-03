<?php
include 'konfig/koneksi.php';
$urut = 1;
//query Kegiatan
$kegiatan = "SELECT * FROM kegiatan";
$jadwalkegiatan_query = mysqli_query($connect, $kegiatan);
$jadwalkegiatan = mysqli_fetch_assoc($jadwalkegiatan_query);
//query Pengumuman
$pengumuman = "SELECT * FROM pengumuman";
$pengumuman_query = mysqli_query($connect, $pengumuman);
$pengumumanpublish = mysqli_fetch_assoc($pengumuman_query);
//jumlah pasien berdasarkan cara bayar
// $jumlahpasienbulanan = "SELECT * FROM rekam_medis";
// $jumlahpasienquery = mysqli_query($connect, $jumlahpasienbulanan);
// $pasien = mysqli_fetch_assoc($jumlahpasienquery);


?>
<span class="badge bg-primary"><?php echo $halaman ?></span> <br />
<div class="row status ">
    <div class="col-sm-2">
        <div class="card info coklat">
            <div class="card-body">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOPQ8wqHFXeNMS4YqOECLtZuTfqDSqaAbVvg&usqp=CAU" alt="Avatar" style="width:30%"> <br>
                <h5 class="card-title"><?php echo $_SESSION["nama_lengkap"] ?></h5>
                <span class="card-text">Divisi: <?php echo $_SESSION["divisi"] ?></span><br />
                <span class="card-text">Bagian: <?php echo $_SESSION["bagian"] ?></span><br />
                <span class="card-text">Jabatan: <?php echo $_SESSION["jabatan"] ?></span><br />
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="card info greenbg">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th col span="2" scope="col">Jumlah Pasien</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>BPJS</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <td>Asurasni</td>
                            <td>30</td>
                        </tr>
                        <tr>
                            <td>Tunai</td>
                            <td>20</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card info peach">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Kegiatan</th>
                            <th scope="col">Pukul</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php do {
                        ?>
                            <tr>
                                <td><?php echo $jadwalkegiatan['nama_kegiatan']; ?> </td>
                                <td><?php echo date("G:i", strtotime($jadwalkegiatan['pukul'])); ?> WIB</td>
                            </tr>
                        <?php
                        } while ($jadwalkegiatan = mysqli_fetch_assoc($jadwalkegiatan_query));
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="card info pengumuman">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Pengumuman</th>
                            <th scope="col">Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php do { ?>
                            <tr>
                                <td><?php echo $pengumumanpublish['nama_pengumuman']; ?></td>
                                <td><?php echo date('d/m/Y', strtotime($pengumumanpublish['tanggal_pengumuman'])); ?></td>
                            </tr>
                        <?php } while ($pengumumanpublish = mysqli_fetch_assoc($pengumuman_query)); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>