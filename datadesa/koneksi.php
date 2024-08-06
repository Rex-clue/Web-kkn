<?php
$servername = "localhost";
$database = "gunungsari";
$username = "root";
$password = "";

$con = mysqli_connect($servername, $username, $password, $database);

if (!$con) {
    die("connection failed: " . mysqli_connect_error());
}

$hasil = mysqli_select_db($con, $database);

$wilayah = mysqli_query($con, "SELECT * From w_administratif");
$wilayah_jiwa = null;
$laki_laki = null;
$perempuan = null;
$warga_total = null;

while ($data1 = mysqli_fetch_array($wilayah)) {
    //Mengambil jumlah jiwa total dari database
    $wjj = $data1['jumlah_jiwa'];
    $wilayah_jiwa .= "$wjj" . ", ";

    $ll = $data1['jumlah_lakilaki'];
    $laki_laki = $ll + $laki_laki;

    $p = $data1['jumlah_perempuan'];
    $perempuan = $p + $perempuan;

    $jj = $data1['jumlah_jiwa'];
    $warga_total = $jj + $warga_total;
}

$pendidikan = mysqli_query($con, "SELECT * FROM pendidikan");
$lulusan = "";
$jumlah_lulusan = null;

while ($data3 = mysqli_fetch_array($pendidikan)) {
    $pn = $data3['tingkat_pendidikan'];
    $lulusan .= "'$pn'" . ", ";

    $jl = $data3['jumlah_semua'];
    $jumlah_lulusan .= "'$jl'" . ", ";
}
