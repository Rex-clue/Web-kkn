<?php 
include ('../../conf/config.php');
$id         = $_POST['id'];
$nama        = $_POST['nama'];
$jabatan  = $_POST['jabatan'];
$alamat  = $_POST['alamat'];

$query= mysqli_query($koneksi,"UPDATE linmas SET nama='$nama',jabatan='$jabatan',alamat='$alamat' WHERE id='$id'");
header('Location: ../index.php?page=linmas');
?>