<?php 
include ('../../conf/config.php');


$judul          =  $_POST['judul'];
$artikel     = $_POST['artikel'];

$gambar = $_FILES['gambar']['name'];
$file_tmp = $_FILES['gambar']['tmp_name'] ;
move_uploaded_file($file_tmp, "../img/".$gambar);


$query      = mysqli_query($koneksi,"INSERT INTO beranda (id,judul,artikel,gambar) VALUES('','$judul','$artikel','$gambar')");
header('Location: ../index.php?page=beranda');
?>
