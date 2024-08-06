<?php 
include ('../../conf/config.php');
$id =  $_GET['id'];

$query= mysqli_query($koneksi,"DELETE FROM pendidikan WHERE id_pendidikan='$id'");
header('Location: ../index.php?page=pendidikan');
?>