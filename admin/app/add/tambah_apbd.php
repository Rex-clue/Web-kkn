<?php 
include ('../../conf/config.php');
$tahun   =  $_GET['tahun'];
$pemasukan = $_GET['pemasukan'];
$pengeluaran = $_GET['pengeluaran'];
$keterangan   =  $_GET['keterangan'];

$query      = mysqli_query($koneksi,"INSERT INTO apbd (id,tahun,pemasukan,pengeluaran,keterangan) VALUES('','$tahun','$pemasukan','$pengeluaran','$keterangan')");
header('Location: ../index.php?page=apbd');