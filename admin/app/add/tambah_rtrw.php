<?php 
include ('../../conf/config.php');
$nama   =  $_GET['nama'];
$rw = $_GET['rw'];
$rt   =  $_GET['rt'];
$alamat = $_GET['alamat'];

$query      = mysqli_query($koneksi,"INSERT INTO rtrw (id,nama,rw,rt,alamat) VALUES('','$nama','$rw','$rt','$alamat')");
header('Location: ../index.php?page=rtrw');