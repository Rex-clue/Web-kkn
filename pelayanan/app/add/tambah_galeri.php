<?php 
include ('../../conf/config.php');

$gambar  = $_FILES['gambar']['name'];
$file_tmp       = $_FILES['gambar']['tmp_name'];
move_uploaded_file($file_tmp,'../img/'.$gambar);
$query = mysqli_query($koneksi,"INSERT INTO galeri (id,gambar) VALUES('','$gambar')");
header('Location: ../index.php?page=galeri');