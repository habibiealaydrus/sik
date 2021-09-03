<?php
include 'konfig/koneksi.php';
$urut = 1;
$poli = "SELECT * FROM setingswaktu";
$poli_query = mysqli_query($connect, $poli);
$poli_jadwal = mysqli_fetch_assoc($poli_query);
?>
<div class="addpoli">
    <h1>Tambah Poli</h1>
    <div>
        <div class="row edit">
            <div class="col-sm-6">
                <div class="table-responsive-sm">
                    <h1>Detail Poli</h1>
                    <form action="addpoli.php" method="POST">
                        <table class="table table-primary">
                            <tbody style="padding: 10%;">
                                <tr>
                                    <td>Nama Poli</td>
                                    <td><input type="text" name="nama_poli" class="form-control" aria-label="Username"></td>
                                </tr>
                                <tr>
                                    <td>Mulai</td>
                                    <td><input type="time" name="mulai" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Tutup</td>
                                    <td><input type="time" name="tutup" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Keterangan</td>
                                    <td><input type="text" name="keterangan" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><input type="submit" name="tambah" value="Tambah" class="btn btn-primary"></td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div>
    <div class="table-responsive-sm">
        <table class="table table-primary display responsive nowrap">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No.</th>
                    <th scope="col">Nama Poli</th>
                    <th scope="col">Mulai</th>
                    <th scope="col">Tutup</th>
                    <th scope="col">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php do { ?>
                    <tr style="text-align: center;">
                        <th scope="row"><?php echo $urut++; ?></th>
                        <td><?php echo $poli_jadwal['nama_poli']; ?></td>
                        <td><?php echo date("h:i A", strtotime($poli_jadwal["mulai"])); ?></td>
                        <td><?php echo date("h:i A", strtotime($poli_jadwal['tutup'])); ?></td>
                        <td><?php echo $poli_jadwal['keterangan']; ?></td>
                    </tr>
                <?php } while ($poli_jadwal = mysqli_fetch_assoc($poli_query)); ?>
            </tbody>
        </table>
    </div>
</div>
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            responsive: true
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#example1').DataTable();
    });
</script>