<?php 
include ('../../conf/config.php');
$nama   =  $_GET['nama'];
$jabatan = $_GET['jabatan'];

$query      = mysqli_query($koneksi,"INSERT INTO forum_anak (id,nama,jabatan) VALUES('','$nama','$jabatan')");
header('Location: ../index.php?page=forum_anak');