<?php 
include ('../../conf/config.php');
$id         = $_POST['id'];
$judul      = $_POST['judul'];
$artikel    = $_POST['artikel'];


// Nama Gambar
$nama_file      = $_FILES['gambar']['name'];
// echo $nama_file;

// Lokasi gambar
$file_tmp       = $_FILES['gambar']['tmp_name'];
move_uploaded_file($file_tmp,'../img/'.$nama_file);
$query= mysqli_query($koneksi,"UPDATE beranda SET judul='$judul',artikel='$artikel',gambar='$nama_file' WHERE id='$id'");
header('Location: ../index.php?page=beranda');
?>