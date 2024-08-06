<?php 
$id     = $_GET['id'];
$query  = mysqli_query($koneksi,"SELECT * FROM user WHERE id='$id'");
$view   = mysqli_fetch_array($query);

?>
<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
            <div class="modal-header">
              <h4 class="modal-title">Edit Data User</h4>
              </button>
            </div>
            <form method="post" action="update/update_data.php" enctype="multipart/form-data">
            <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputUsername">Username</label>
                    <input type="text" class="form-control" id="exampleInputUsername"  name="username" value="<?php echo $view['user_name'];?>">
                    <input type="text" class="form-control"  name="id" value="<?php echo $view['id'];?>" hidden>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail"  name="email" value="<?php echo $view['email'];?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNama">Nama</label>
                    <input type="text" class="form-control" id="exampleInputNama"  name="nama" value="<?php echo $view['nama'];?>">
                  </div>
                  <div class="form-gruop">
                    <label class="form-label" for="customFile">Masukan Foto</label>
                    <input type="file" class="form-control" id="customFile" name="foto" />
                  </div>
                  <br></br>
                  <button type="submit" class="btn btn-sm btn-info">Simpan</button>
            </div>
            
        </div>
    </div>
</section>