<?php 
include ('../../conf/config.php');


$judul          =  $_POST['judul'];
$deskripsi      = $_POST['deskripsi'];

$gambar = $_FILES['gambar']['name'];
$file_tmp = $_FILES['gambar']['tmp_name'] ;
move_uploaded_file($file_tmp, "../img/".$gambar);





$query      = mysqli_query($koneksi,"INSERT INTO pertanian (id,judul,deskripsi,gambar) VALUES('','$judul','$deskripsi','$gambar')");
header('Location: ../index.php?page=pertanian');
?>
