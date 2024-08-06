<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <!-- /.card-header -->

                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Tabel Agama</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                            Tambah Data
                        </button>
                        <br></br>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Agama</th>
                                    <th>Jumlah</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 0;
                                $query = mysqli_query($koneksi, "SELECT * FROM agama");
                                while ($user = mysqli_fetch_array($query)) {
                                    $no++
                                ?>
                                    <tr>
                                        <td width='5%'><?php echo $no ?></td>
                                        <td><?php echo $user['nama_agama'] ?></td>
                                        <td><?php echo $user['jumlah'] ?></td>
                                        <td>
                                            <a onclick="hapus_data(<?php echo $user['id'] ?>)" class="btn btn-sm btn-danger">Hapus</a>
                                            <a href="index.php?page=edit-agama&& id=<?php echo $user['id'] ?>" class="btn btn-sm btn-success">Edit</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="get" action="add/tambah_agama.php">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputAgama">Nama Agama</label>
                        <div><select name="agama" class="form-control select">
                                <option class="form-control" id="exampleInputAgama" value="User" selected="selected">-- Pilih Salah Satu -- </option>
                                <option value="Islam">Islam</option>
                                <option value="Katholik">Katholik</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Khonghucu">Khonghucu</option>
                                <option value="Kepercayaan">Kepercayaan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputSemua">Jumlah Semua</label>
                        <input type="text" class="form-control" id="exampleInputSemua" placeholder="Masukan Jumlah Semua" name="semua" required>
                    </div>
                </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
        </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<script>
    function hapus_data(data_id) {
        // alert('ok');
        // window.location=("delete/hapus_data.php?id="+data_id);
        Swal.fire({
            title: 'Apakah Data Akan Dihapus?',
            // showDenyButton: false,
            showCancelButton: true,
            confirmButtonText: 'Hapus Data',
            confirmButtonColor: '#CD5C5C',
            // denyButtonText: `Don't save`,
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                window.location = ("delete/hapus_agama.php?id=" + data_id);
            }
        })
    }
</script>