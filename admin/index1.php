<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LOGIN SIM DESA</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="app/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="app/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="app/dist/css/adminlte.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="app/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css" />
</head>

<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <p class="h1"><b>Registrasi</b><br> Gunung Sari</p>
    </div>
    <div class="card-body">
      

    <form method="post" action="add/tambah_data.php">
            <div class="card-body">
            <div class="form-group">
                    <label for="exampleInputNama">Nama</label>
                    <input type="text" class="form-control" id="exampleInputNama" placeholder="Masukan Nama" name="nama" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputUsername">Username</label>
                    <input type="text" class="form-control" id="exampleInputUsername" placeholder="Masukan Username" name="username" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword" placeholder="Masukan Password" name="password" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputLevel">Level</label>
                    <select name="level" class="form-control" id="exampleInputLevel">
	                  <option>--pilih--</option>
                    <?php
	include "../../conf/config.php";
	$po = mysqli_query($koneksi,"select * from role");
	?>
	<?php if (mysqli_num_rows($po)) {?>
	<?php while($y= mysqli_fetch_array($po)){ ?>
	<option value="<?php echo $y["level"] ?>"> <?php echo $y["level"]?></option>
	<?php } } ?>
	</select>
                  </div>
            </div>
            
        <div class="row">
          <!-- <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div> -->
          <!-- /.col -->
          <div class="col-4">
          <a href="index.php" class="btn btn-primary btn-block">Register</a> 
          </div>
          <div class="col-4">
          <a href="index.php" class="btn btn-primary btn-block">Back</a> 
          </div>
         
          <!-- /.col -->
        </div>
      </form>

      <!-- <div class="social-auth-links text-center mt-2 mb-3">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->

      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="app/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="app/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="app/dist/js/adminlte.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="app/plugins/sweetalert2/sweetalert2.min.js"></script>
</body>
<?php 
if(isset ($_GET['error'])){
  $x =$_GET['error'];
  if($x==1){
    echo "
    <script>
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
    Toast.fire({
      icon: 'warning',
      title: 'Login Gagal!!!' 
    });
    </script>";
  }
  else if($x==2){
    echo "
    <script>
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
    Toast.fire({
      icon: 'warning',
      title: 'Masukan Username Dan Password!!!' 
    });
    </script>";
  }
  else{
    echo '';
  }
}
?>
</html>
