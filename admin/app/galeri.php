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

        <?php
        if (isset($_GET['gambar'])) {
          if ($_GET['gambar'] == "kosong") {
            echo "<h4 style='color:red'>Gambar Belum Di Masukkan !</h4>";
          }
        }
        ?>

        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Galeri Desa Gunungsari</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form method="post" action="add/tambah_galeri.php" enctype="multipart/form-data">
            <div class="card-body">

              <div class="form-group">
                <label for="formFileMultiple" class="form-label" for="customFile">Tambah Gambar</label>
                <input action="cek.php" method="post" id="customFile" class="form-control" type="file" name="gambar" id="formFileMultiple" multiple />
              </div>

              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
              <br></br>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Nama Gambar</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 0;
                  $query = mysqli_query($koneksi, "SELECT * FROM galeri");
                  while ($user = mysqli_fetch_array($query)) {
                    $no++
                  ?>
                    <tr>
                      <td width='5%'><?php echo $no ?></td>
                      <td><img src="img/<?php echo $user['gambar'] ?>" alt="" width="150" height="100"></td>
                      <td><?php echo $user['gambar'] ?></td>
                      <td>
                        <a onclick="hapus_data(<?php echo $user['id'] ?>)" class="btn btn-sm btn-danger">Hapus</a>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
                <tfoot>
                </tfoot>
              </table>
          </form>
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>

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
        window.location = ("delete/hapus_galeri.php?id=" + data_id);
      }
    })
  }
</script>