<?php 
include ('../../conf/config.php');


$judul         =  $_POST['judul'];
$keterangan    = $_POST['keterangan'];
$tanggal     = $_POST['tanggal'];
$gambar = $_FILES['gambar']['name'];
$file_tmp = $_FILES['gambar']['tmp_name'] ;
move_uploaded_file($file_tmp, "../img/".$gambar);





$query      = mysqli_query($koneksi,"INSERT INTO event (id,judul,keterangan,tanggal,gambar) VALUES('','$judul','$keterangan','$tanggal','$gambar')");
header('Location: ../index.php?page=event');
?>