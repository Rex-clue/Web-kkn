<?php 
$id     = $_GET['id'];
$query  = mysqli_query($koneksi,"SELECT * FROM w_administratif WHERE id='$id'");
$view   = mysqli_fetch_array($query);

?>
<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
            <div class="modal-header">
              <h4 class="modal-title">Edit Jumlah Penduduk</h4>
              <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
                <!-- <span aria-hidden="true">&times;</span> -->
              </button>
            </div>
            <form method="post" action="update/update_wadminstratif.php" enctype="multipart/form-data">
            <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputKK">Jumlah KK</label>
                    <input type="text" class="form-control" id="exampleInputKK"  name="kk" value="<?php echo $view['jumlah_kk'];?>">
                    <input type="text" class="form-control"  name="id" value="<?php echo $view['id'];?>" hidden>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputLakilaki">Laki-Laki</label>
                    <input type="text" class="form-control" id="exampleInputLakilaki"  name="laki" value="<?php echo $view['jumlah_lakilaki'];?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPerempuan">Perempuan</label>
                    <input type="text" class="form-control" id="exampleInputPerempuan"  name="perempuan" value="<?php echo $view['jumlah_perempuan'];?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputWarga">Jumlah Warga</label>
                    <input type="text" class="form-control" id="exampleInputWarga"  name="jiwa" value="<?php echo $view['jumlah_jiwa'];?>">
                  </div>
               
                  <br></br>
                  <button type="submit" class="btn btn-sm btn-info">Simpan</button>
            </div>         
        </div>
    </div>
</section>