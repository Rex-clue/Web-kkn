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
            <h3 class="card-title">Data Tabel Pendidikan</h3>
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
                  <th>Tingkat Pendidikan</th>
                  <th>Jumlah</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 0;
                $query = mysqli_query($koneksi, "SELECT * FROM pendidikan");
                while ($user = mysqli_fetch_array($query)) {
                  $no++
                ?>
                  <tr>
                    <td width='5%'><?php echo $no ?></td>
                    <td><?php echo $user['tingkat_pendidikan'] ?></td>
                    <td><?php echo $user['jumlah_semua'] ?></td>
                    <td>
                      <a onclick="hapus_data(<?php echo $user['id_pendidikan'] ?>)" class="btn btn-sm btn-danger">Hapus</a>
                      <a href="index.php?page=edit-pendidikan&& id=<?php echo $user['id_pendidikan'] ?>" class="btn btn-sm btn-success">Edit</a>
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
        <h4 class="modal-title">Tambah Pendidikan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="get" action="add/tambah_pendidikan.php" >
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputPendidikan">Tingkat Pendidikan</label>
            <div><select name="pendidikan" class="form-control select">
                <option class="form-control" id="exampleInputPendidikan" value="User" selected="selected">-- Pilih Salah Satu -- </option>
                <option value="Tidak / Belum Sekolah">Tidak / Belum Sekolah</option>
                <option value="Belum Tamat SD / Sederajat">Belum Tamat SD / Sederajat</option>
                <option value="SD / Sederajat">SD / Sederajat</option>
                <option value="SMP / Sederajat">SMP / Sederajat</option>
                <option value="SMA / Sederajat">SMA / Sederajat</option>
                <option value="D1 / Sederajat">D1 / Sederajat</option>
                <option value="D2 / Sederajat">D2 / Sederajat</option>
                <option value="D3 / Sederajat">D3 / Sederajat</option>
                <option value="D4 / Sederajat">D4 / Sederajat</option>
                <option value="S1 / Sederajat">S1 / Sederajat</option>
                <option value="S2 / Sederajat">S2 / Sederajat</option>
                <option value="S3 / Sederajat">S3 / Sederajat</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputSemua">Jumlah</label>
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
        window.location = ("delete/hapus_pendidikan.php?id=" + data_id);
      }
    })
  }
</script>