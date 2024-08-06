<?php
$id     = $_GET['id'];
$query  = mysqli_query($koneksi, "SELECT * FROM agama WHERE id='$id'");
$view   = mysqli_fetch_array($query);

?>
<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
            <div class="modal-header">
                <h4 class="modal-title">Edit Agama</h4>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
                <!-- <span aria-hidden="true">&times;</span> -->
                </button>
            </div>
            <form method="post" action="update/update_agama.php" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" class="form-control" name="id" value="<?php echo $view['id']; ?>" hidden>
                        <label for="exampleInputAgama">Nama Agama</label>
                        <div><select name="agama" class="form-control select" value="<?php echo $view['nama_agama']; ?>">
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
                        <input type="text" class="form-control" id="exampleInputSemua" placeholder="Masukan Jumlah Semua" name="semua" value="<?php echo $view['jumlah']; ?>">
                    </div>

                    <br></br>
                    <button type="submit" class="btn btn-sm btn-info">Simpan</button>
                </div>

        </div>
    </div>
</section>