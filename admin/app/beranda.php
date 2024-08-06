<!DOCTYPE html>
<html lang="en">

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Beranda</h3>
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
                                    <th>Judul</th>
                                    <th>Artikel</th>
                                    <th>Gambar</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 0;
                                if(!ISSET($_POST['submit'])){
            
                                  $sql = "SELECT * FROM beranda";
                                  $query = mysqli_query($koneksi, $sql);
                                  while ($user= mysqli_fetch_array($query)){
                                  $no++;
                                ?>

                                    <tr>
                                        <td><?php echo $no; ?></td>

                                        <td><?php echo $user['judul']; ?></td>
                                        <td><?php echo $user['artikel']; ?></td>
                                        <td><?php echo $user['gambar']; ?></td>
                                        <td>
                                            <a onclick="hapus_data(<?php echo $user['id']; ?>)" class="btn btn-sm btn-danger">Hapus</a>
                                            <!-- <a href="../../edit/edit_data" class="btn btn-sm btn-success">Edit</a> -->
                                        </td>

                                    </tr>
                                <?php } } ?>
                            </tbody>

                          
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

            <form method="post" action="add/tambah_beranda.php" enctype="multipart/form-data">
                <div class="modal-body">

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Data</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="form-group">
                            <form method="post" action="add/tambah_beranda.php" enctype="multipart/form-data">
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Judul</label>
                                        <input type="text" class="form-control" placeholder="Judul" name="judul" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Artikel</label>
                                        <input type="text" class="form-control" placeholder="Artikel" name="artikel" required>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="customFile">Gambar</label>
                                        <input type="file" name="gambar" class="form-control" id="customFile" />

                                    </div>

                                </div>
                            </div>

                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
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
            //alert('ok');
            //window.location = ("delete/hapus_data.php?id=" + data_id)
            Swal.fire({
                title: 'Apakah Datanya Akan Di Hapus?',
                //showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: 'Hapus Data',
                confirmButtonColor: 'red',
                //denyButtonText: `Don't save`,
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    window.location = ("delete/hapus_beranda.php?id=" + data_id)
                    //Swal.fire('Saved!', '', 'success')
                }
            })
        }
    </script>