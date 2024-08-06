<?php 
include ('../../conf/config.php');
$id         = $_POST['id'];
$nam        = $_POST['nama'];
$deskripsi  = $_POST['deskripsi'];

// Nama Gambar
$nama_file  = $_FILES['foto']['name'];
// echo $nama_file;

// Lokasi gambar
$file_tmp       = $_FILES['foto']['tmp_name'];
move_uploaded_file($file_tmp,'../img/'.$nama_file);
$query= mysqli_query($koneksi,"UPDATE umkm SET judul='$nama',deskripsi='$deskripsi',gambar='$nama_file' WHERE id='$id'");
header('Location: ../index.php?page=umkm');
?>