<?php
include '../koneksi.php';
$card = mysqli_query($koneksi, "SELECT * FROM pelatihan WHERE id = '" . $_GET['id'] . "'");
$p = mysqli_fetch_array($card);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="images/png" href="img/kotabatu.png">
    <title>Detail Pelatihan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="detailpelatihan.css">
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=611d440d85a05e00127d3417&product=inline-share-buttons" async="async"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>

    <!-- navbar -->
    <?php include('nav.php') ?>
    <!-- end navbar -->

    <!-- breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="pelatihan.php">Home</a></li>
            <li class="breadcrumb-item"><a href="pelatihan.php">Pelatihan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Pelatihan</li>
        </ol>
    </nav>
    <!-- end breadcrumb -->

    <!-- detail -->
    <div class="container11">
        <div class="bodyisi">
            <div class="isidetail">

                <div class="judul"><?= $p['judul'] ?></div>
                <div class="tanggal"><?= $p['tanggal'] ?></div>
                <div class="gbrart"><img src="../admin/img/<?= $p['gambar'] ?>" alt=""></div>

                <div class="teks">
                    <?php
                    // membaca input dari form
                    $input = $p['keterangan'];
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
                <div class="jdl">Pelatihan Desa Lainnya</div>
                <div class="samping">
                    <?php $card = mysqli_query($koneksi, "SELECT * FROM pelatihan WHERE id NOT IN ('" . $_GET['id'] . "') ORDER BY RAND() LIMIT 10 ");
                    if (mysqli_num_rows($card) > 0) {
                        while ($p = mysqli_fetch_array($card)) { ?>
                            <div class="boxsamping">
                                <div class="pic"><a title="<?= $p['judul'] ?>" href="detailpelatihan.php?id=<?= $p['id'] ?>"><img src="../admin/img/<?= $p['gambar'] ?>" alt=""></a></div>
                                <div class="kanan">
                                    <?php
                                    $kata = $p['judul'];
                                    $jml = strlen($kata);
                                    if ($jml <= 45) { ?>
                                        <a title="<?= $p['judul'] ?>" href="detailpelatihan.php?id=<?= $p['id'] ?>"><?= substr($p['judul'], 0, 45) ?></a>
                                    <?php } else if ($jml > 45) { ?>
                                        <a title="<?= $p['judul'] ?>" href="detailpelatihan.php?id=<?= $p['id'] ?>"><?= substr($p['judul'], 0, 45) ?>...</a>
                                    <?php } ?>
                                    <div class="tglkn"><?= $p['tanggal'] ?></div>
                                </div>
                            </div>
                        <?php }
                    } else { ?>
                        <p>Pelatihan Kosong</p>
                    <?php } ?>

                </div>
            </div>

        </div>
    </div>
    <!-- end detail -->

    <!-- footer -->
    <?php include('footer.php') ?>
    <!-- end footer -->

    <script src="pelatihan.js"></script>
</body>

</html>