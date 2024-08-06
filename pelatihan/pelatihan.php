<?php
include '../koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="images/png" href="img/logodesa.jpg">
    <title>Pelatihan Desa</title>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="pelatihan.css">

</head>

<body>

    <!-- navbar -->
    <?php include('nav.php') ?>
    <!-- end navbar -->

    <!-- <div class="imgatas">
        <img src="img/img_paralax.jpg" alt="">
    </div> -->


    <!-- isi pelatihan -->
    <div class="isi">
        <div class="judul">
            Pelatihan Desa
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">

            <?php $card = mysqli_query($koneksi, "SELECT * FROM pelatihan LIMIT 9");
            if (mysqli_num_rows($card) > 0) {
                while ($p = mysqli_fetch_array($card)) { ?>
                    <!-- <div class="col-md-4 col-sm-6 col-xs-12"> -->
                    <div class="col-md-4 col-sm-6 col-xs-12">

                        <div class="post">
                            <div class="header_post">
                                <a title="<?= $p['judul'] ?>" href="detailpelatihan.php?id=<?= $p['id'] ?>">
                                    <img src="../admin/img/<?= $p['gambar'] ?>" alt="">
                                </a>
                            </div>

                            <div class="body_post">
                                <div class="post_content">
                                    <?php
                                    $kata = $p['judul'];
                                    $jml = strlen($kata);
                                    if ($jml <= 45) { ?>
                                        <a style="text-decoration:none" title="<?= $p['judul'] ?>" href="detailpelatihan.php?id=<?= $p['id'] ?>">
                                            <h1><?= substr($p['judul'], 0, 45) ?></h1>
                                        </a>
                                    <?php } else if ($jml > 45) { ?>
                                        <a style="text-decoration:none" title="<?= $p['judul'] ?>" href="detailpelatihan.php?id=<?= $p['id'] ?>">
                                            <h1><?= substr($p['judul'], 0, 45) ?>...</h1>
                                        </a>
                                    <?php } ?>
                                    <p><?= substr($p['keterangan'], 0, 160) ?>...</p>
                                    <div class="container_infos">
                                        <div class="postedBy">
                                            <span>DATE</span>
                                            <?= $p['tanggal'] ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                <?php }
            } else { ?>
                <p>Pelatihan Kosong</p>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            <?php } ?>

        </div>

    </div>
    <!-- end pelatihan -->


    <!-- <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="pelatihan.php" tabindex="-1" aria-disabled="true">Sebelumnya</a>
            </li>
            <li class="page-item"><a class="page-link" href="pelatihan.php">1</a></li>
            <li class="page-item"><a class="page-link" href="pelatihan1.php">2</a></li>
            <li class="page-item"><a class="page-link" href="pelatihan.php">3</a></li>
            <li class="page-item">
                <a class="page-link" href="pelatihan1.php">Next</a>
            </li>
        </ul>
    </nav> -->

    <!-- footer -->
    <br>
    <?php include('footer.php') ?>
    <!-- end footer -->
</body>

</html>