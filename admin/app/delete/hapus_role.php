<?php 
include ('../../conf/config.php');
$id =  $_GET['id'];

$query= mysqli_query($koneksi,"DELETE FROM role WHERE id='$id'");
header('Location: ../index.php?page=datarole');
?>