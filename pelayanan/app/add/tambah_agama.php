<?php 
include ('../../conf/config.php');
$agama     =  $_GET['agama'];
$semua          = $_GET['semua'];

$query      = mysqli_query($koneksi,"INSERT INTO agama (id,nama_agama,jumlah) VALUES('','$agama','$semua')");
header('Location: ../index.php?page=agama');
?>