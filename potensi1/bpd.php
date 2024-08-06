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
    <link rel="icon" type="images/png" href="asset/img/11-removebg-preview.png">
    <title>BPD</title>

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
                                    <h5><strong>BADAN PERMUSYAWARATAN DESA (BPD)</strong></h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="mb-0 content-color-secondary">
                                <div class="card-text content-color-primary">
                                    <p class="text-justify">Pemerintah desa adalah badan atau lembaga pemerintahan yang bertanggung jawab 
                                        untuk mengatur dan mengelola urusan pemerintahan di tingkat desa. Pemerintah desa biasanya terbentuk 
                                        berdasarkan ketentuan hukum negara yang bersangkutan, seperti dalam sistem pemerintahan Indonesia 
                                        terdapat desa sebagai unit pemerintahan terendah dalam sistem desentralisasi. Umumnya pemerintah 
                                        desa terbagi menjadi kepala desa yang dibantu dengan beberapa perangkat desa sebagai unsur penyelenggara 
                                        Pemerintahan Desa. Disamping itu, kepala desa bertugas dalam hal menyelenggarakan pemerintahan desa, 
                                        melaksanakan pembangunan Desa, pembinaan kemasyarakatan Desa, dan pemberdayaan masyarakat Desa. 
                                        Selanjutnya Sekretaris Desa bertugas membantu Kepala Desa dalam bidang administrasi pemerintahan. 
                                        Kepala Urusan bertugas membantu Sekretaris Desa dalam urusan pelayanan administrasi pendukung pelaksanaan 
                                        tugas-tugas pemerintahan. Kepala Seksi bertugas membantu Kepala Desa sebagai pelaksana tugas operasional. 
                                        Kepala Kewilayahan atau sebutan lainnya berkedudukan sebagai unsur satuan tugas kewilayahan yang bertugas 
                                        membantu Kepala Desa dalam pelaksanaan tugas di wilayahnya.
                                    </p>

                                    <p align="center"><strong>DAFTAR NAMA PENGURUS BPD</strong></p>
                                    <p align="center"><strong>DESA GUNUNGSARI</strong></p>
                                    <p align="center"></p>


                                    <section class="data_rt">
                                        <div class="container">
                                            <div class="box">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr class="bg-gray" align="center">
                                                                <th>No</th>
                                                                <th>Nama</th>
                                                                <th>Jabatan</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $no = 1;
                                                            $rt = mysqli_query($koneksi, "SELECT * FROM bpd ORDER BY id ASC");
                                                            if (mysqli_num_rows($rt) > 0) {
                                                                while ($row = mysqli_fetch_array($rt)) {
                                                            ?>
                                                                    <tr align="center">
                                                                        <td><?php echo $no++ ?></td>
                                                                        <td><?php echo $row['nama'] ?></td>
                                                                        <td><?php echo $row['jabatan'] ?></td>
                                                                    </tr>
                                                                <?php }
                                                            } else { ?>
                                                                <tr>
                                                                    <td align="center" colspan="5">Tidak Ada Data</td>
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
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31620.10865757838!2d112.4910548197527!3d-7.841191073779796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e787df6ccb485f5%3A0xd473f1152856ce5f!2sGunungsari%2C%20Kec.%20Bumiaji%2C%20Kota%20Batu%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1630116432232!5m2!1sid!2sid" width="305" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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