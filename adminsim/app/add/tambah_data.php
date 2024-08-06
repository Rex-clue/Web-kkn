<?php 
include ('../../conf/config.php');
$username   =  $_GET['username'];
$email      = $_GET['email'];
$nama       = $_GET['nama'];
$query      = mysqli_query($koneksi,"INSERT INTO user (id,user_name,email,nama) VALUES('','$username','$email','$nama')");
header('Location: ../index.php?page=datauser');
?>