<?php 
include ('../../conf/config.php');
$level   =  $_GET['level'];


$query      = mysqli_query($koneksi,"INSERT INTO role (id,level) VALUES('','$level')");
header('Location: ../index.php?page=datarole');