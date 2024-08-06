<?php 
$id     = $_GET['id'];
$query  = mysqli_query($koneksi,"SELECT * FROM user WHERE id='$id'");
$view   = mysqli_fetch_array($query);

?>
<section class="content">
    <div class="container-fluid">
        <!-- <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <!-- <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="username">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="email" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6"> -->
                      <!-- textarea -->
                      <!-- <div class="form-group">
                        <label>Nama</label>
                        <input class="form-control" rows="3" placeholder="nama">
                      </div>
                    </div>
                  </div>

                  
                </form>
              </div>
              <!-- /.card-body -->
            <!-- </div> -->
            
        <div class="card card-warning">
            <div class="modal-header">
              <h4 class="modal-title">Edit Data User</h4>
              <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
                <!-- <span aria-hidden="true">&times;</span> -->
              </button>
            </div>
            <form method="post" action="update/update_data.php" enctype="multipart/form-data">
            <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputUsername">Username</label>
                    <input type="text" class="form-control" id="exampleInputUsername" placeholder="Masukan Username" name="username" value="<?php echo $view['user_name'];?>">
                    <input type="text" class="form-control"  name="id" value="<?php echo $view['id'];?>" hidden>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail" placeholder="Masukan Email" name="email" value="<?php echo $view['email'];?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNama">Nama</label>
                    <input type="text" class="form-control" id="exampleInputNama" placeholder="Masukan Nama" name="nama" value="<?php echo $view['nama'];?>">
                  </div>
                  <div class="form-gruop">
                    <label class="form-label" for="customFile">Masukan Foto</label>
                    <input type="file" class="form-control" id="customFile" name="foto" />
                  </div>
                  <!-- <div class="form-group">
                    <label for="exampleInputFile">Masukan Gambar</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="gambar">
                        <label class="custom-file-label" for="exampleInputFile"></label>
                      </div>
                    </div>
                  </div> -->
                  <br></br>
                  <button type="submit" class="btn btn-sm btn-info">Simpan</button>
            </div>
            
        </div>
    </div>
</section>