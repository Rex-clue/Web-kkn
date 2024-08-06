<?php
session_start();
include 'koneksi.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/css/galeri.css">
    <link rel="stylesheet" href="asset/fontawesome/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet">
    <link rel="icon" type="images/png" href="asset/img/11-removebg-preview.png">
    <title>Galeri</title>
</head> 

<body>

    <!-- navbar -->
    <?php include('nav.php'); ?>
    <!-- end navbar -->

    <!-- <div class="container py-5">
    <div class="jumbotron text-white jumbotron-image shadow" style="background-image: url(https://images.unsplash.com/photo-1552152974-19b9caf99137?fit=crop&w=1350&q=80);">
      <h2 class="mb-4">
        Jumbotron with background image
      </h2>
      <p class="mb-4">
        Hey, check this out.
      </p>
      <a href="https://bootstrapious.com/snippets" class="btn btn-primary">More Bootstrap Snippets</a>
    </div>
  </div> -->

    <!-- pimg -->
    <div class="banner" style="background-image:url(img/bali.jpg);">
        <div class="container">
            <div class="banner-content">
                <!-- <h2>Galeri Desa</h2> -->
            </div>
        </div>
    </div>
    <!-- end pimg -->

    <!-- breadcrumb -->
    <div class="bread-crumbs">
        <!-- <ul class="breadcrumb">
            <li>
                <a href="index.html">HOME</a>
            </li>
            <li>
                <a href="index.html">Gallery</a>
            </li> 
            <li>Gallery</li>
        </ul> -->
    </div> 
    <!-- end breadcrumb -->

    <!-- galeri -->
    <section class="galeri">
        <div class="container">
            <h5>Galeri Desa</h5>
            <br>
            <div class="row">
                <?php
                $galeri = mysqli_query($koneksi, "SELECT * FROM galeri ORDER BY id DESC");
                if (mysqli_num_rows($galeri) > 0) {
                    while ($p = mysqli_fetch_array($galeri)) {
                ?>
                        <div class="col-md-4">
                            <a href="#"><img src="../img/<?php echo $p['gambar'] ?>" alt=""></a>
                        </div>
                    <?php }
                } else { ?>
                    <p>Gambar tidak ada</p>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- end galeri -->

    <!-- <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="pelatihan.php" tabindex="-1" aria-disabled="true">Sebelumnya</a>
            </li>
            <li class="page-item"><a class="page-link" href="galery.php">1</a></li>
            <li class="page-item"><a class="page-link" href="galeri1.php">2</a></li>
            <li class="page-item"><a class="page-link" href="galeri2.php">3</a></li>
            <li class="page-item">
                <a class="page-link" href="galeri1.php">Next</a>
            </li>
        </ul>
    </nav> -->

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