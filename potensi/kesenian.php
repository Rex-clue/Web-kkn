<?php
include 'koneksi.php'; ?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kesenian Desa Gunungsari</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome/css/all.min.css" />
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="images/png" href="img/11-removebg-preview.png">
</head>

<body>

    <!-- navbar -->
    <?php include('nav.php'); ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Potensi</a></li>
            <li class="breadcrumb-item active" aria-current="page">Kesenian</li>
        </ol>
    </nav>


    <div class="isi">
        <div class="judul">
            Kesenian Desa Gunungsari
        </div>
    </div>
    <div class="container mt-5 mb-5 ">
        <div class="row">

            <?php $card = mysqli_query($koneksi, "SELECT * FROM kesenian ORDER BY id ASC");
            if (mysqli_num_rows($card) > 0) {
                while ($p = mysqli_fetch_array($card)) { ?>
                    <div class="col-md-4 col-sm-6 col-xs-12">

                        <div class="post">
                            <div class="header_post">
                                <a title="<?= $p['judul'] ?>" href="detailkesenian.php?id=<?= $p['id'] ?>">
                                    <img src="../img/<?= $p['gambar'] ?>" alt="">
                                </a>
                            </div>

                            <div class="body_post">
                                <div class="post_content">
                                    <?php
                                    $kata = $p['judul'];
                                    $jml = strlen($kata);
                                    if ($jml <= 45) { ?>
                                        <a style="text-decoration:none" title="<?= $p['judul'] ?>" href="detailkesenian.php?id=<?= $p['id'] ?>">
                                            <h1><?= substr($p['judul'], 0, 45) ?></h1>
                                        </a>
                                    <?php } else if ($jml > 45) { ?>
                                        <a style="text-decoration:none" title="<?= $p['judul'] ?>" href="detailkesenian.php?id=<?= $p['id'] ?>">
                                            <h1><?= substr($p['judul'], 0, 45) ?>...</h1>
                                        </a>
                                    <?php } ?>
                                   
                                    <div class="container_infos">
                                        <div class="postedBy">
                                            <a class="btn btn-primary" href="detailkesenian.php?id=<?= $p['id'] ?>"  role="button">Check Kesenian</a> 
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                <?php }
            } else { ?>

            <?php } ?>

        </div>

    </div>

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