
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
                <h3 class="card-title">DATA EVENT</h3>
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
                    <th>Judul</th>
                    <th>Keterangan</th>
                    <th>Tanggal</th>
                    <th>Gambar</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no = 0;
                    if(!ISSET($_POST['submit'])){

                      $sql = "SELECT * FROM event";
                      $query = mysqli_query($koneksi, $sql);
                      while ($user= mysqli_fetch_array($query)){
                      $no++;
                    ?>
                  <tr>
                    <td width='5%'><?php echo $no ?></td>
                    <td><?php echo $user['judul'] ?></td>
                    <td><?php echo $user['keterangan'] ?></td>
                    <td><?php echo $user['tanggal'] ?></td>
                    <td><?php echo $user['gambar'] ?></td>
                    <td>
                      <a onclick="hapus_data(<?php echo $user['id'] ?>)" class="btn btn-sm btn-danger">Hapus</a>
                      <a href="index.php?page=edit-event&& id=<?php echo $user['id'] ?>" class="btn btn-sm btn-success">Edit</a>
                    </td>
                  </tr>
                  <?php } } ?>
                  </tbody>
                
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
              <h4 class="modal-title">TAMBAH EVENT </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="post" action="add/tambah_event.php" enctype="multipart/form-data" >
            <div class="card-body">
            <div class="form-group">
                    <label >Judul</label>
                    <input type="text" class="form-control"  placeholder="Masukan Judul" name="judul" required>
                  </div>
                  <div class="form-group">
                    <label >Keterangan</label>
                    <input type="text" class="form-control"  placeholder="Masukan Keterangan" name="keterangan" required>
                  </div>
                  <div class="form-group">
                    <label >Tanggal</label>
                    <input type="date" class="form-control"  name="tanggal" required>
                  </div>
                  <label class="form-label" for="customFile">Gambar</label>
                  <input type="file" name="gambar" class="form-control" id="customFile" >
                 </div>

            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<script>
  function hapus_data(data_id){
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
        window.location=("delete/hapus_kegiatan.php?id="+data_id);
      } 
    })
  }
</script>
  