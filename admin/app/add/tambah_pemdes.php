<?php 
include ('../../conf/config.php');
$nama   =  $_GET['nama'];
$jabatan = $_GET['jabatan'];

$query      = mysqli_query($koneksi,"INSERT INTO pemdes (id,nama,jabatan) VALUES('','$nama','$jabatan')");
header('Location: ../index.php?page=pemdes');