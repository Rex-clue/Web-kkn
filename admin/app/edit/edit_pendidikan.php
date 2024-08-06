<?php
$id     = $_GET['id'];
$query  = mysqli_query($koneksi, "SELECT * FROM pendidikan WHERE id_pendidikan='$id'");
$view   = mysqli_fetch_array($query);

?>
<section class="content">
  <div class="container-fluid">
    <div class="card card-warning">
      <div class="modal-header">
        <h4 class="modal-title">Edit Pendidikan</h4>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
        <!-- <span aria-hidden="true">&times;</span> -->
        </button>
      </div>
      <form method="post" action="update/update_pendidikan.php" enctype="multipart/form-data">
        <div class="card-body">
          <div class="form-group">
          <input type="text" class="form-control" name="id" value="<?php echo $view['id_pendidikan']; ?>" hidden>
            <label for="exampleInputPendidikan">Tingkat Pendidikan</label>
            <div><select name="pendidikan" class="form-control select" value="<?php echo $view['tingkat_pendidikan']; ?>">
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
            <label for="exampleInputSemua">Jumlah Semua</label>
            <input type="text" class="form-control" id="exampleInputSemua" placeholder="Masukan Jumlah Semua" name="semua" value="<?php echo $view['jumlah_semua']; ?>">
          </div>

          <br></br>
          <button type="submit" class="btn btn-sm btn-info">Simpan</button>
        </div>

    </div>
  </div>
</section>