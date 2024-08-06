<?php 
include ('../../conf/config.php');
$nama   =  $_GET['nama'];
$jabatan = $_GET['jabatan'];
$alamat = $_GET['alamat'];

$query      = mysqli_query($koneksi,"INSERT INTO linmas (id,nama,jabatan,alamat) VALUES('','$nama','$jabatan','$alamat')");
header('Location: ../index.php?page=linmas');