<?php 
$id     = $_GET['id'];
$query  = mysqli_query($koneksi,"SELECT * FROM beranda WHERE id='$id'");
$view   = mysqli_fetch_array($query);

?>
<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
            <div class="modal-header">
              <h4 class="modal-title">Edit Artikel Terkini</h4>
              </button>
            </div>
            <form method="post" action="update/update_artikel.php" enctype="multipart/form-data">
            <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputJudul">Judul</label>
                    <input type="text" class="form-control" id="exampleInputJudul" placeholder="Masukan Judul" name="judul" value="<?php echo $view['judul'];?>">
                    <input type="text" class="form-control"  name="id" value="<?php echo $view['id'];?>" hidden>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputArtikel">Artikel</label>
                    <input type="text" class="form-control" id="exampleInputArtikel" placeholder="Masukan Artikel" name="artikel"  value="<?php echo $view['artikel'];?>">
                    <!-- <textarea class="form-control" rows="3" id="exampleInputArtikel" placeholder="Masukan Artikel" name="artikel" value="<?php echo $view['artikel'];?>"></textarea> -->

                  </div>
                  <div class="form-gruop">
                    <label class="form-label" for="customFile">Masukan Foto</label>
                    <input type="file" class="form-control" id="customFile" name="gambar" value="<?php echo $view['gambar'];?>"/>
                  </div>
                  
                  <br></br>
                  <button type="submit" class="btn btn-sm btn-info">Simpan</button>
            </div>
        </div>
    </div>
</section>