<?php
include 'koneksi.php';
$card = mysqli_query($koneksi, "SELECT * FROM beranda WHERE id = '" . $_GET['id'] . "'");
$p = mysqli_fetch_array($card);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Detail Wisata Desa Gunungsari</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=611d440d85a05e00127d3417&product=inline-share-buttons" async="async"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="icon" type="images/png" href="img/11-removebg-preview.png">
</head>

<body>
    <!-- navbar -->
    <?php include('nav.php'); ?>

    <div class="imgatas">
        <img src="img/awan.jpg" alt="">
    </div>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Artikel</li>
        </ol>
    </nav>

    <div class="container11">
        <div class="bodyisi">
            <div class="isidetail">

                <div class="judul"><?= $p['judul'] ?></div>
                <div class="gbrart"><img src="../img/<?= $p['gambar'] ?>" alt=""></div>

                <div class="teks">
                    <?php
                    // membaca input dari form
                    $input = $p['artikel'];
                    // memecah string input berdasarkan karakter '\r\n\r\n'
                    $pecah = explode("\r\n\r\n", $input);
                    // string kosong inisialisasi
                    $text = "";
                    // untuk setiap substring hasil pecahan, sisipkan <p> di awal dan </p> di akhir
                    // lalu menggabungnya menjadi satu string utuh $text
                    for ($i = 0; $i <= count($pecah) - 1; $i++) {
                        $part = str_replace($pecah[$i], "<p>" . $pecah[$i] . "</p>", $pecah[$i]);
                        $text .= $part;
                    }
                    // menampilkan outputnya
                    echo $text; ?>

                    <a style="text-decoration: none;" href="#" class="to-top">
                        <i class="fas fa-chevron-up"></i>
                    </a>

                    <div class="sharethis-inline-share-buttons"></div>
                </div>

            </div>

            <div class="isidetail">
                <div class="jdl">Artikel Desa Lainnya</div>
                <div class="samping">
                    <?php $card = mysqli_query($koneksi, "SELECT * FROM beranda WHERE id NOT IN ('" . $_GET['id'] . "') ORDER BY RAND() LIMIT 4 ");
                    if (mysqli_num_rows($card) > 0) {
                        while ($p = mysqli_fetch_array($card)) { ?>
                            <div class="boxsamping">
                                <div class="pic"><a title="<?= $p['judul'] ?>" href="detail.php?id=<?= $p['id'] ?>"><img src="../img/<?= $p['gambar'] ?>" alt=""></a></div>
                                <div class="kanan">
                                    <?php
                                    $kata = $p['judul'];
                                    $jml = strlen($kata);
                                    if ($jml <= 45) { ?>
                                        <a title="<?= $p['judul'] ?>" href="detail.php?id=<?= $p['id'] ?>"><?= substr($p['judul'], 0, 45) ?></a>
                                    <?php } else if ($jml > 45) { ?>
                                        <a title="<?= $p['judul'] ?>" href="detail.php?id=<?= $p['id'] ?>"><?= substr($p['judul'], 0, 45) ?>...</a>
                                    <?php } ?>
                                    <!-- <div class="tglkn"><?= $p['tanggal'] ?></div> -->
                                    <div class="postedBy">
                                        
                                    </div>
                                </div>
                            </div>
                        <?php }
                    } else { ?>

                    <?php } ?>

                </div>
            </div>

        </div>
    </div>

    <!-- footer -->
    <?php include('footer.php'); ?>
    <!-- end footer -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


    <script src="detail.js"></script>
</body>

</html>