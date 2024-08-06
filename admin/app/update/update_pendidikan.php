<?php 
include ('../../conf/config.php');
$id = $_POST['id'];
$pendidikan     =  $_POST['pendidikan'];
$semua          = $_POST['semua'];

$query= mysqli_query($koneksi,"UPDATE pendidikan SET tingkat_pendidikan='$pendidikan',jumlah_semua='$semua' WHERE id_pendidikan='$id'");
header('Location: ../index.php?page=pendidikan');
?>