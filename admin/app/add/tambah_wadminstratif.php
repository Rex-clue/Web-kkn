<?php 
include ('../../conf/config.php');
$kk   =  $_GET['kk'];
$laki = $_GET['laki'];
$perempuan   =  $_GET['perempuan'];
$jumlah = $_GET['jumlah'];


$query      = mysqli_query($koneksi,"INSERT INTO w_administratif (id,jumlah_kk,jumlah_lakilaki,jumlah_perempuan,jumlah_jiwa) VALUES('','$kk','$laki','$perempuan','$jumlah')");
header('Location: ../index.php?page=administratif');