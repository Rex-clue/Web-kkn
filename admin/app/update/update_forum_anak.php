<?php 
include ('../../conf/config.php');
$id         = $_POST['id'];
$nama        = $_POST['nama'];
$jabatan  = $_POST['jabatan'];

$query= mysqli_query($koneksi,"UPDATE forum_anak SET nama='$nama',jabatan='$jabatan' WHERE id='$id'");
header('Location: ../index.php?page=forum_anak');
?>