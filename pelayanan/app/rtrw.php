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
                        <h3 class="card-title">DATA TABEL RT/RW DESA GUNUNGSARI</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                            Tambah Data
                        </button>
                        <br></br>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr align="center">
                                    <th rowspan="2">No</th>
                                    <th rowspan="2">Nama</th>
                                    <th colspan="2">Jabatan</th>
                                    <th rowspan="2">Alamat</th>
                                    <th rowspan="2">Action</th>
                                </tr>
                                <tr align="center">
                                    <th>RW</th>
                                    <th>RT</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 0;
                                $query = mysqli_query($koneksi, "SELECT * FROM rtrw");
                                while ($user = mysqli_fetch_array($query)) {
                                    $no++
                                ?>
                                    <tr>
                                        <td width='5%'><?php echo $no ?></td>
                                        <td><?php echo $user['nama'] ?></td>
                                        <td><?php echo $user['rw'] ?></td>
                                        <td><?php echo $user['rt'] ?></td>
                                        <td><?php echo $user['alamat'] ?></td>
                                        <td>
                                            <a onclick="hapus_data(<?php echo $user['id'] ?>)" class="btn btn-sm btn-danger">Hapus</a>
                                            <a href="index.php?page=edit-rtrw&& id=<?php echo $user['id'] ?>" class="btn btn-sm btn-success">Edit</a>
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
                <h4 class="modal-title">Masukkan Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="get" action="add/tambah_rtrw.php">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputNama">Nama</label>
                        <input type="text" class="form-control" id="exampleInputNama" placeholder="Masukan Nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputRW">RW</label>
                        <input type="text" class="form-control" id="exampleInputRW" placeholder="Masukan RW" name="rw" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputRT">RT</label>
                        <input type="text" class="form-control" id="exampleInputRT" placeholder="Masukan RT" name="rt" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputAlamat">Alamat</label>
                        <input type="text" class="form-control" id="exampleInputAlamat" placeholder="Masukan Alamat" name="alamat" required>
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
                window.location = ("delete/hapus_rtrw.php?id=" + data_id);
            }
        })
    }
</script>