<?php
include 'koneksi.php'; ?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Wisata Desa Gunungsari</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome/css/all.min.css" />
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="checkwisata.css">
    <link rel="icon" type="images/png" href="img/11-removebg-preview.png">
</head>

<body>

    <!-- navbar -->
    <?php include('nav.php'); ?>

    <div class="imgatas">
        <img src="img/img_paralax.jpg" alt="">
    </div>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Potensi</a></li>
            <li class="breadcrumb-item active" aria-current="page">Wisata</li>
        </ol>
    </nav>

    <div class="isi">
        <div class="judul">
            Detail Wisata
        </div>
    </div>

    <!-- Content -->
    
    <section class="check-wisata">
        <?php $card = mysqli_query($koneksi, "SELECT * FROM wisata ORDER BY id DESC");
      
            while ($p = mysqli_fetch_array($card)) { ?>
            <div class="row">
                <div class="col-sm kiri">
                <img src="../img/<?= $p['gambar'] ?>" alt="">
                </div>
                <div class="col-sm kanan">
                    <a title="<?= $p['judul'] ?>" href="detailwisata.php?id=<?= $p['id'] ?>">
                        <h2><b><?= substr($p['judul'], 0, 45) ?></b></h2>
                    </a>
                    <p><?= substr($p['deskripsi'], 0, 3000) ?></p>
                </div>
            </div>
        <?php } ?>
    </section>
    <!-- end Content -->
    
    <!-- footer --> 
    <?php include('footer.php'); ?>
    <!-- end footer -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->



</body>

</html>