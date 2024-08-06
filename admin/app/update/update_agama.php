<?php 
include ('../../conf/config.php');
$id = $_POST['id'];
$agama     =  $_POST['agama'];
$semua          = $_POST['semua'];

$query= mysqli_query($koneksi,"UPDATE agama SET nama_agama='$agama',jumlah='$semua' WHERE id='$id'");
header('Location: ../index.php?page=agama');
?>