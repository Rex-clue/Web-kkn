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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/kelembagaan.css">
    <link rel="icon" type="images/png" href="asset/img/lg_simdesa_red.png">
    <title>Rt/Rw</title>
    
</head>

<body>

    <!-- navbar -->
    <?php include('nav.php') ?>
    <!-- end navbar -->

    <!-- isi -->
    <div class="container rtrw">
        <div class="card mb-1 fullscreen"></div>
        <div class="row">
            <div class="col-12 col-md-8 col-lg-8">
                <div class="card mb-2 fullscreen has-background-img ">
                    <div id="printableArea">
                        <div class="card-header border-bottom">
                            <div class="media">
                                <div class="media-body">
                                    <h5>RT/RW & PKK</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="mb-0 content-color-secondary">
                                <div class="card-text content-color-primary">
                                    <p>
                                    <h5> RT/RW </h5>
                                    </p>
                                    <p>Rukun Warga atau sering disingkat RW merupakan lembaga pemerintah yang terdiri dari beberapa kelompok RT di suatu Desa/ Kelurahan dan dipimpin oleh satu ketua RW. Sedang RT adalah Rukun Tetangga yang menghimpun beberapa Kepala Keluarga atau KK disetiap Desa/ Kelurahan dan dipimpin oleh satu ketua.</p>

                                    <p>TUGAS TR/RW</p>
                                    <ol>
                                        <li>Melaksanaka tugas pokok RW dan RT.</li>
                                        <li>Melaksanakan musyawarah dan mengambil keputusan dari musyawarah tersebut.</li>
                                        <li>Menerima masukan masyrakat dan memprosesnya dengan melakukan penyusunan rencana atau planing berdasarkan keinginan masyarakat untuk nantinya di proses apakah layak di aplikasikan atau tidak progam usulan dari masyarakat setempa</li>
                                        <li>Membina warga setempat setempat dalam hal kehidupan keluarga dalam bermasyarakat.</li>
                                        <li>Membantu dalam pelayanan masyarakat yang menjadi tugas pemerintah daerah.</li>
                                        <li>Membuat laporan atas keberlangsungan kehidupan warga yang perlu dilaporkan.</li>
                                        <li>Membuat laporan pertanggungjawaban atas kegiatan organisasi secara berkala.</li>
                                    </ol>
                                    <p align="left">FUNGSI RT/RW</p>
                                    <ol>
                                        <li>Membuat data penduduk akan pengamatan tertentu yang diperlukan sebagai arsip desa atau kelurahab</li>
                                        <li>Menggerakan masyarakat untuk berpartisipasi dalam kegiatan tertentu</li>
                                        <li>Membuat gagasan berdasarkan aspirasi masyarakat</li>
                                        <li>Melakukan koordinasi atas masyarakat serta organisasi itu sendiri</li>
                                        <li>Mengurus fasilitas masyarakat</li>
                                        <li>Menjadi jembatan penghubung antar masyarakat dan Pemerintah Desa/ Kelurahan</li>
                                    </ol>

                                    <p>
                                    <h5>PKK</h5>
                                    </p>
                                    <p>Tim Penggerak Pemberdayaan dan Kesejahteraan Keluarga Kelurahan yang selanjutnya disebut TP PKK Kelurahan adalah lembaga kemasyarakatan sebagai mitra kerja pemerintah dan organisasi kemasyarakatan lainnya, yang berfungsi sebagai fasilitator, perencana, pelaksana, pengendali dan penggerak pada masing-masing jenjang pemerintahan untuk terlaksananya program PKK.</p>

                                    <p align="left">TUGAS PKK</p>
                                    <p>Berdasarkan Peraturan Daerah Kota Semarang Nomor 4 Tahun 2009 tentang Pembentukan Lembaga Kemasyarakatan
                                        di Kelurahan Pasal 10, TP-PKK mempunyai tugas membantu Pemerintah Kelurahan dan merupakan mitra dalam pemberdayaan dan
                                        peningkatan kesejahteraan keluarga.</p>

                                    <p align="left">FUNGSI PKK</p>
                                    <ol>
                                        <li>Penyuluh, motivator dan penggerak masyarakat agar mau dan mampu melaksanakan program PKK</li>
                                        <li>Fasilitator, perencana, pelaksana, pengendali, pembina dan pembimbing Gerakan PKK</li>
                                    </ol>

                                    <p align="center"><strong>DAFTAR NAMA PENGURUS RT/RW & PKK </strong></p>
                                    <p align="center"><strong>DESA GUNUNGSARI </strong></p>
                                    <p align="center"></p>


                                    <section class="data_rt">
                                        <div class="container">
                                            <div class="box">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr class="bg-gray">
                                                                <th>No</th>
                                                                <th>Name</th>
                                                                <th>Jabatan</th>
                                                                <th>Keterangan</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                        $no = 1;
                                                        $rt = mysqli_query($koneksi, "SELECT * FROM linmas ORDER BY id ASC");
                                                        if (mysqli_num_rows($rt) > 0) {
                                                            while ($row = mysqli_fetch_array($rt)) {
                                                        ?>
                                                                <tr>
                                                                    <td><?php echo $no++ ?></td>
                                                                    <td><?php echo $row['nama'] ?></td>
                                                                    <td><?php echo $row['jabatan'] ?></td>
                                                                    <td><?php echo $row['keterangan'] ?></td>
                                                                </tr>
                                                            <?php }
                                                        } else { ?>
                                                            <tr>
                                                                <td colspan="5">Tidak Ada Data</td>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </section>
                                    </table>
                                    <p align="left"> </p>
                                    <p align="left"> </p>
                                    <p align="left"> </p>
                                    <p> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <div class="card mb-2">
                    <div class="card-header border-bottom">
                        <div class="media">
                            <div class="media-body">
                                <h5 class="content-color-primary mb-0"><i class="material-icons icon-sm">Peta Desa Gunungsari</i></h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <div class="row align-items-center no-gutters">
                            <p>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31620.10865757838!2d112.4910548197527!3d-7.841191073779796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e787df6ccb485f5%3A0xd473f1152856ce5f!2sGunungsari%2C%20Kec.%20Bumiaji%2C%20Kota%20Batu%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1630116432232!5m2!1sid!2sid" width="280" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end isi -->

    <!-- footer -->
    <?php include('footer.php') ?>
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