<?php $conn = new mysqli("localhost", "root", "", "desa");

    $db_host = 'localhost'; // Nama Server
    $db_user = 'root'; // User Server
    $db_pass = ''; // Password Server
    $db_name = 'desa'; // Nama Database

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    if (!$conn) {
    die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
    }


?>