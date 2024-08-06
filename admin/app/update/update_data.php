<?php 
include ('../../conf/config.php');
$id             = $_POST['id'];
$username       = $_POST['username'];
$email          = $_POST['email'];
$nama           = $_POST['nama'];

// Nama Gambar
$nama_file      = $_FILES['foto']['name'];
// echo $nama_file;

// Lokasi gambar
$file_tmp       = $_FILES['foto']['tmp_name'];
move_uploaded_file($file_tmp,'../img/'.$nama_file);
$query= mysqli_query($koneksi,"UPDATE user SET user_name='$username',email='$email',nama='$nama',foto='$nama_file' WHERE id='$id'");
header('Location: ../index.php?page=datauser');
?>