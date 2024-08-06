<?php
include 'koneksi.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="apbd.css">
    <link rel="icon" type="images/png" href="asset/img/11-removebg-preview.png">
    <title>APBD</title>
</head>

<body>

    <!-- navbar -->
    <?php include('nav.php') ?>
    <!-- end navbar -->

    <!-- tabel -->
    <section class="tbl-anggaran">
        <div class="container">
            <h3>Tabel Anggaran</h3>
            <table id="anggaran" class="table table-bordered">
                <thead>
                    <tr>
                        <th width="5%" class="no-transaksi text-center">No</th>
                        <th width="10%" class="tahun-transaksi text-center">Tahun</th>
                        <th width="20%" class="pemasukan-user text-center">Pemasukan</th>
                        <th width="20%" class="pengeluaran-user text-center">Pengeluaran</th>
                        <th width="20%" class="keterangan-user text-center">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php
                    // $conn = mysqli_connect('localhost', 'root', '', 'linegrafik');
                    $queryAnggaran = mysqli_query($koneksi, "SELECT * FROM apbd");
                    while ($arrayAnggaran = mysqli_fetch_array($queryAnggaran)) {
                        echo '
                      <tr>
                        <td class="no-transaksi text-center">' . $no . '</td>
                        <td class="tahun-transaksi text-center">' . $arrayAnggaran['tahun'] . '</td>
                        <td class="pemasukan-user text-center">' . "Rp. " . $arrayAnggaran['pemasukan'] . '</td>
                        <td class="pengeluaran-user text-center">' . "Rp. " . $arrayAnggaran['pengeluaran'] . '</td>
                        <td class="keterangan-user text-center">' . $arrayAnggaran['keterangan'] . '</td>
                      </tr> 
                    ';

                    ?>
                        <?php $no++; ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>
    <!-- end tabel -->


    <!-- footer -->
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6 item">
                        <h3 class="nama-desa">Desa Gunungsari</h3>
                        <p>Kec. Bumiaji Kota Batu</p>
                    </div>
                    <!-- <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div> -->
                    <div class="col-md-6 item text">
                        <h3 class="foll">Follow Us</h3>
                        <div class="border"></div>
                        <div class="social-media">
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <!-- <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div> -->
                </div>
                <p class="copyright">
                    &copy; 2021 Create by <a href="#">ITB Asia Malang</a>
                </p>
            </div>
        </footer>
    </div>
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