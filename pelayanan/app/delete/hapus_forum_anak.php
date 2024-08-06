<?php 
include ('../../conf/config.php');
$id =  $_GET['id'];

$query= mysqli_query($koneksi,"DELETE FROM forum_anak WHERE id='$id'");
header('Location: ../index.php?page=forum_anak');
?>