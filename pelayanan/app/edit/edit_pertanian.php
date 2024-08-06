<?php 
$id     = $_GET['id'];
$query  = mysqli_query($koneksi,"SELECT * FROM umkm WHERE id='$id'");
$user   = mysqli_fetch_array($query);

?>
<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
            <div class="modal-header">
              <h4 class="modal-title">Edit UMKM</h4>
              <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
                <!-- <span aria-hidden="true">&times;</span> -->
              </button>
            </div>
            <form method="post" action="update/update_umkm.php" enctype="multipart/form-data">
            <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputName">Nama</label>
                    <input type="text" class="form-control" id="exampleInputName" placeholder="Masukan Nama" name="nama" value="<?php echo $user['judul'];?>">
                    <input type="text" class="form-control"  name="id" value="<?php echo $user['id'];?>" hidden>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputDeskripsi">Deskripsi</label>
                    <input type="text" class="form-control" id="exampleInputDeskripsi" placeholder="Masukan Deskripsi" name="deskripsi" value="<?php echo $user['deskripsi'];?>">
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