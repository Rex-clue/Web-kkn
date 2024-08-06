<?php 
include ('../../conf/config.php');
$id =  $_GET['id'];

$query= mysqli_query($koneksi,"DELETE FROM w_administratif WHERE id='$id'");
header('Location: ../index.php?page=administratif');
?>