<?php 
include ('../../conf/config.php');
$id         = $_POST['id'];
$nama   =  $_POST['nama'];
$rw = $_POST['rw'];
$rt   =  $_POST['rt'];
$alamat = $_POST['alamat'];

$query= mysqli_query($koneksi,"UPDATE rtrw SET nama='$nama',rw='$rw',rt='$rt',alamat='$alamat' WHERE id='$id'");
header('Location: ../index.php?page=rtrw');
?>