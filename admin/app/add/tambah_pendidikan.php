<?php 
include ('../../conf/config.php');
$pendidikan     =  $_GET['pendidikan'];
$semua          = $_GET['semua'];

$query      = mysqli_query($koneksi,"INSERT INTO pendidikan (id_pendidikan,tingkat_pendidikan,jumlah_semua) VALUES('','$pendidikan','$semua')");
header('Location: ../index.php?page=pendidikan');
?>