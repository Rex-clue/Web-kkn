<?php 
include ('../../conf/config.php');
$id =  $_GET['id'];

$query= mysqli_query($koneksi,"DELETE FROM umkm WHERE id='$id'");
header('Location: ../index.php?page=umkm');
?>