<?php 
include ('../../conf/config.php');


$nama          =  $_POST['nama'];
$alamat    = $_POST['alamat'];
$waktu     = $_POST['waktu'];




$query      = mysqli_query($koneksi,"INSERT INTO kegiatandesa (id,nama,alamat,waktu) VALUES('','$nama','$alamat','$waktu')");
header('Location: ../index.php?page=kegiatan');
?>