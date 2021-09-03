<div class="row edit">
    <div class="col-sm-6">
        <div class="table-responsive-sm ">
            <h1>Detail User</h1>
            <form action="adduser.php" method="POST">
                <table class="table table-primary">
                    <tbody>
                        <tr>
                            <td>Nama</td>
                            <td><input type="text" name="nama_lengkap" class="form-control" aria-label="Username"></td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td><input type="text" name="username" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="text" name="pass" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Leveluser</td>
                            <td>
                                <select name="leveluser" class="form-control">
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
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
                                    <option value="Administrasi">Administrasi</option>
                                    <option value="UGD">UGD</option>
                                    <option value="Poli Umum">Poli Umum</option>
                                    <option value="Poli Gigi">Poli Gigi</option>
                                    <option value="Poli Spesialis">Poli Spesialis</option>
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
                            <td colspan="2"><input type="submit" name="tambah" value="Tambah" class="btn btn-primary"></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>
</div>