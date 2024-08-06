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
            <h3 class="card-title">Data Tabel Jumlah Penduduk</h3>
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
                  <th>Jumlah KK</th>
                  <th>Jumlah Laki-Laki</th>
                  <th>Jumlah Perempuan</th>
                  <th>Jumlah Warga</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 0;
                $query = mysqli_query($koneksi, "SELECT * FROM w_administratif");
                while ($user = mysqli_fetch_array($query)) {
                  $no++
                ?>
                  <tr>
                    <td width='5%'><?php echo $no ?></td>
                    <td><?php echo $user['jumlah_kk'] ?></td>
                    <td><?php echo $user['jumlah_lakilaki'] ?></td>
                    <td><?php echo $user['jumlah_perempuan'] ?></td>
                    <td><?php echo $user['jumlah_jiwa'] ?></td>
                    <td>
                      <a onclick="hapus_data(<?php echo $user['id'] ?>)" class="btn btn-sm btn-danger">Hapus</a> 
                     <a href="index.php?page=edit-administratif&& id=<?php echo $user['id'] ?>" class="btn btn-sm btn-success">Edit</a>
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
      <form method="get" action="add/tambah_wadminstratif.php">
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputNama">Jumlah KK</label>
            <input type="text" class="form-control" id="exampleInputJumlahKK" placeholder="Masukan Jumlah KK" name="kk" required>
          </div>
          <div class="form-group">
            <label for="exampleInputNama">Jumlah Laki-Laki</label>
            <input type="text" class="form-control" id="exampleInputJumlahLaki" placeholder="Masukan Jumlah Laki-Laki" name="laki" required>
          </div>
          <div class="form-group">
            <label for="exampleInputNama">Jumlah Perempuan</label>
            <input type="text" class="form-control" id="exampleInputJumlahPerempuan" placeholder="Masukan Jumlah Perempuan" name="perempuan" required>
          </div>
          <div class="form-group">
            <label for="exampleInputNama">Jumlah Warga</label>
            <input type="text" class="form-control" id="exampleInputJumlahWarga" placeholder="Masukan Jumlah Warga" name="jumlah" required>
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
        window.location = ("delete/hapus_wadminstratif.php?id=" + data_id);
      }
    })
  }
</script>