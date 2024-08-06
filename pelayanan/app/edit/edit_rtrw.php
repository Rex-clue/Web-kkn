<?php 
$id     = $_GET['id'];
$query  = mysqli_query($koneksi,"SELECT * FROM rtrw WHERE id='$id'");
$view   = mysqli_fetch_array($query);

?>
<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
            <div class="modal-header">
              <h4 class="modal-title">Edit RT/RW</h4>
              <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
                <!-- <span aria-hidden="true">&times;</span> -->
              </button>
            </div>
            <form method="post" action="update/update_rtrw.php" enctype="multipart/form-data">
            <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputName">Nama</label>
                    <input type="text" class="form-control" id="exampleInputName" placeholder="Masukan Nama" name="nama" value="<?php echo $view['nama'];?>">
                    <input type="text" class="form-control"  name="id" value="<?php echo $view['id'];?>" hidden>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputRW">RW</label>
                    <input type="text" class="form-control" id="exampleInputRW" placeholder="Masukan RW" name="rw" value="<?php echo $view['rw'];?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputRT">RT</label>
                    <input type="text" class="form-control" id="exampleInputRT" placeholder="Masukan RT" name="rt" value="<?php echo $view['rt'];?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputAlamat">Alamat</label>
                    <input type="text" class="form-control" id="exampleInputAlamat" placeholder="Masukan Alamat" name="alamat" value="<?php echo $view['alamat'];?>">
                  </div>
               
                  <br></br>
                  <button type="submit" class="btn btn-sm btn-info">Simpan</button>
            </div>
            
        </div>
    </div>
</section>