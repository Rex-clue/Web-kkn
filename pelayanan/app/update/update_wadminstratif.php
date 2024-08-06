<?php 
include ('../../conf/config.php');
$id = $_POST['id'];
$kk         = $_POST['kk'];
$laki   = $_POST['laki'];
$perempuan  = $_POST['perempuan'];
$jiwa       = $_POST['jiwa'];


$query= mysqli_query($koneksi,"UPDATE w_administratif SET jumlah_kk='$kk',jumlah_lakilaki='$laki',jumlah_perempuan='$perempuan',jumlah_jiwa='$jiwa' WHERE id='$id'");
header('Location: ../index.php?page=administratif');
?>
