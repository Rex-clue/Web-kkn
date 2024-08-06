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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="asset/fontawesome/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="nav.css" />
  <link rel="icon" type="images/png" href="img/11-removebg-preview.png">

  <link rel="stylesheet" type="text/css" href="owl.carousel.min.css">
  <title>DESA GUNUNGSARI</title>
</head>

<body>

  <!-- navbar -->
  <?php include('nav.php') ?>
  <!-- end navbar -->

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active" style="background-image:url('asset/img/gambar11.jpg')">
        <div class="containerheader">
        <h2>Desa Gunungsari</h2>
          <p>Kec. Bumiaji Kota Batu</p>

        </div>
      </div>
      <div class="carousel-item" style="background-image:url('asset/img/mawar.jpeg')">
        <div class="containerheader">
          <h2>Desa Gunungsari</h2>
          <p>Kec. Bumiaji Kota Batu</p>
        </div>
      </div>
      <div class="carousel-item" style="background-image:url('asset/img/slide3.jpg')">
        <div class="containerheader">
          <h2>Desa Gunungsari</h2>
          <p>Kec. Bumiaji Kota Batu</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  

  <!-- kalender -->
  <h1 class="text-center"><b>Kalender Events</b></h1>
  <div class="container1">
    <div class="owl-carousel">
      <div class="item">
        <div class="bottom">Januari</div>
        <div class="activity">
        </div>
      </div>
      <div class="item">
        <div class="bottom">Februari</div>
        <div class="activity">
        </div>
      </div>
      <div class="item">
        <div class="bottom">Maret</div>
        <div class="activity">
        </div>
      </div>
      <div class="item">
        <div class="bottom">April</div>
        <div class="activity">
        </div>
      </div>
      <div class="item">
        <div class="bottom">Mei</div>
        <div class="activity">
        </div>
      </div>
      <div class="item">
        <div class="bottom">Juni</div>
        <div class="activity">
        </div>
      </div>
      <div class="item">
        <div class="bottom">Juli</div>
        <div class="activity">
        </div>
      </div>
      <div class="item">
        <div class="bottom">Agustus</div>
        <div class="activity">
        </div>
      </div>
      <div class="item">
        <div class="bottom">September</div>
        <div class="activity">
        </div>
      </div>
      <div class="item">
        <div class="bottom">Oktober</div>
        <div class="activity">
        </div>
      </div>
      <div class="item">
        <div class="bottom">November</div>
        <div class="activity">
        </div>
      </div>
      <div class="item">
        <div class="bottom">Desember</div>
        <div class="activity">
        </div>
      </div>
      <!-- Tambahkan elemen lainnya di sini -->
    </div>
  </div>


  <!-- Destinasi Wisata-->
  <h1 class="text-center"><b>Destinasi Wisata</b></h1>
  <div class="container2">
    <div class="slider">
      <div class="owl-carousel">
        <a href="potensi/wisata.php">
          <div class="slider-card">
            <div class="d-flex justify-content-center align-items-center mb-1">
              <img src="img/4.jpg" alt="">
            </div>
            <h5 class="mb-0 text-center"><b>Goa Pandawa</b></h5>
          </div>
        </a>
        <a href="potensi/wisata.php">
          <div class="slider-card">
            <div class="d-flex justify-content-center align-items-center mb-1">
              <img src="img/taman_langit.jpg" alt="">
            </div>
            <h5 class="mb-0 text-center"><b>Taman Langit</b></h5>
          </div>
        </a>
        <a href="potensi/wisata.php">
          <div class="slider-card">
            <div class="d-flex justify-content-center align-items-center mb-1">
              <img src="img/peras susu.jpeg" alt="">
            </div>
            <h5 class="mb-0 text-center"><b>Peras Susu Brau</b></h5>
          </div>
        </a>
        <a href="potensi/wisata.php">
          <div class="slider-card">
            <div class="d-flex justify-content-center align-items-center mb-1">
              <img src="img/hutan pinus.jpg" alt="">
            </div>
            <h5 class="mb-0 text-center"><b>Hutan Pinus</b></h5>
          </div>
        </a>
        <a href="potensi/wisata.php">
          <div class="slider-card">
            <div class="d-flex justify-content-center align-items-center mb-1">
              <img src="img/mawar.jpg" alt="">
            </div>
            <h5 class="mb-0 text-center"><b>Petik Mawar</b></h5>
          </div>
        </a>
      </div>
    </div>
  </div>


  <!-- End Destinasi Wisata -->


  <!-- Dusun -->
  <h1 class="text-center"><b>Dusun Gunungsari</b></h1>
  <div class="card-container">
    <a class="card" href="profil/profil4.php">
      <div class="card-title card-title1">Dusun Pagergunung</div>
      <div class="card-bg" style="background-image: url('./img/hutan pinus.jpg');"></div>
    </a>

    <a class="card" href="profil/profil4.php">
      <div class="card-title card-title1">Dusun Kapru</div>
      <div class="card-bg" style="background-image: url('./img/2.jpg');"></div>
    </a>

    <a class="card" href="profil/profil4.php">
      <div class="card-title card-title1">Dusun Brumbung</div>
      <div class="card-bg" style="background-image: url('./img/3.jpg');"></div>
    </a>

    <a class="card" href="profil/profil4.php">
      <div class="card-title card-title1">Dusun Jantur</div>
      <div class="card-bg" style="background-image: url('./img/petik_mawar.jpg');"></div>
    </a>

    <a class="card" href="profil/profil4.php">
      <div class="card-title card-title1">Dusun Brau</div>
      <div class="card-bg" style="background-image: url('./img/5.jpg');"></div>
    </a>
  </div>

  <!-- Pelayanan Masyarakat -->
  <div class="lala">
    <h1 class="text-center1"><b>Alur Pelayanan Masyarakat</b></h1>
    <div class="containerpelayanan">
      <div class="steppelayanan">
        <img src="./img/alur.jpeg" alt="" srcset="">
      </div>
    </div>
    <h1 class="text-center1"><b>Persyaratan Kelengkapan</b></h1>
    <div class="syarat">
    <div class="card-containerpelayanan">
      <a href="https://forms.gle/ByU47YV3BbyQE3gH8" target="_blank">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <i class="fas fa-address-card"></i>
                <p>E-KTP</p>
              </div>
              <div class="flip-card-back">
                <p>1. Surat Pengantar Ketua RT/RW</p>
                <p>2. FC KK</p>
              </div>
            </div>
      </a>
    </div>
    <a href="https://forms.gle/5HnaVzLpqbtXiJSz9 " target="_blank">
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <i class="fas fa-users"></i>
            <p>KK Baru</p>
          </div>
          <div class="flip-card-back">
            <p>1. Surat Pengantar Ketua RT/RW</p>
            <p>2. Surat Pindah (Jika Tidak Satu Desa)</p>
            <p>3. KK Lama</p>
            <p>4. Surat Nikah Orang Tua</p>
            <p>5. Surat Nikah Pemohon</p>
          </div>
        </div>
        </a>
       </div>
  <a href="https://forms.gle/bxqVzCxC5BT2eNYn7  " target="_blank">
    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <i class="fas fa-arrows-alt"></i>
          <p>Surat Ket. Pindah Datang</p>
        </div>
        <div class="flip-card-back">
          <p>1. Surat Pengantar Ketua RT/RW</p>
          <p>2. Surat Ket. Pindah Daerah Asal</p>
          <p>3. KK dan KTP</p>
          <p>4. FC Akta Kelahiran</p>
          <p>5. FC Surat Nikah</p>
          <p>6. SKCK</p>
        </div>
      </div>
  </a>
  </div>
  <a href="https://forms.gle/hPPZ3E3urHYXFbc69  " target="_blank">
    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <i class="fas fa-baby"></i>
          <p>Akta Kelahiran</p>
        </div>
        <div class="flip-card-back">
          <p>1. Surat Pengantar Ketua RT/RW</p>
          <p>2. Surat Ket. Kelahiran</p>
          <p>3. FC KTP 2 Orang Saksi</p>
          <p>4. FC KTP Orang Tua</p>
          <p>5. FC KK</p>
          <p>6. FC Surat Nikah</p>
        </div>
      </div>
  </a>
  </div>
  <a href="https://forms.gle/1rdmNETpcFLmuDDe6 " target="_blank">
    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <i class="fas fa-user card-icon"></i>
          <p>Surat Nikah (Laki-Laki)</p>
        </div>
        <div class="flip-card-back">
          <p>1. Surat Pengantar Ketua RT/RW</p>
          <p>2. Foto 2x3 4 Lembar</p>
          <p>3. Foto 3x4 4 Lembar</p>
          <p>4. Foto 4x6 2 Lembar</p>
          <p>5. FC KK dan KTP</p>
          <p>6. FC Ijasah SLTP/SLTA</p>
          <p>7. FC Akta Kelahiran</p>
          <p>8. Materai</p>
        </div>
      </div>
  </a>
  </div>
  <a href="https://forms.gle/uVTAuHPiF9eJxNpeA  " target="_blank">
    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <i class="fas fa-money-bill-wave"></i>
          <p>Surat Ket. Penghasilan</p>
        </div>
        <div class="flip-card-back">
          <p>1. Surat Pengantar Ketua RT/RW</p>
          <p>2. FC KK</p>
          <p>3. FC KTP</p>
          <p>4. Surat Pernyataan Penghasilan/Bulan</p>
        </div>
      </div>
  </a>
  </div>
  <a href="https://forms.gle/XoJ571NafuPYhEHG9  " target="_blank">
    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <i class="fas fa-check"></i>
          <p>Surat Rekomendasi Izin Keramaian</p>
        </div>
        <div class="flip-card-back">
          <p>1. Surat Pengantar Ketua RT/RW</p>
          <p>2. FC KK Penanggung Jawab Acara</p>
          <p>3. FC KTP Penanggung Jawab Acara</p>
        </div>
      </div>
  </a>
  </div>
  <a href="https://forms.gle/HUSVbQwsWiYgDbsw7 " target="_blank">
    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <i class="fas fa-clipboard"></i>
          <p>SKCK (Surat Ket. Catatan Kepolisian)</p>
        </div>
        <div class="flip-card-back">
          <p>1. Surat Pengantar Ketua RT/RW</p>
          <p>2. FC KK</p>
          <p>3. FC KTP</p>
        </div>
      </div>
  </a>
  </div>
  <a href="https://forms.gle/Th1FTJ6U5EkmMyha9 " target="_blank">
    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <i class="fas fa-book"></i>
          <p>Perubahan KK</p>
        </div>
        <div class="flip-card-back">
          <p>1. Surat Pengantar Ketua RT/RW</p>
          <p>2. KK Lama</p>
          <p>3. FC KK</p>
          <p>4. Materai 6000</p>
          <p>5. Dasar Perubahan</p>
        </div>
      </div>
  </a>
  </div>
  <a href="https://forms.gle/hy3eL5ehMazk8xERA  " target="_blank">
    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <i class="fas fa-walking"></i>
          <p>Surat Ket. Pindah Pergi</p>
        </div>
        <div class="flip-card-back">
          <p>1. Surat Pengantar Ketua RT/RW</p>
          <p>2. KK dan KTP</p>
          <p>3. Pas Foto 3x4</p>
          <p>4. FC Akta Kelahiran</p>
          <p>5. FC Surat Nikah</p>
          <p>6. SKCK</p>
        </div>
      </div>
  </a>
  </div>
  <a href="https://forms.gle/EGqLSUoHsmPyamZx5 " target="_blank">
    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <i class="fas fa-credit-card"></i>
          <p>Akta Kematian</p>
        </div>
        <div class="flip-card-back">
          <p>1. Surat Keterangan Kematian</p>
          <p>2. Surat Pengantar Ketua RT/RW</p>
          <p>3. FC KK</p>
          <p>4. FC KTP</p>
          <p>5. FC KTP 2 Orang Saksi</p>
        </div>
      </div>
  </a>
  </div>
  <a href="https://forms.gle/udf1w8jxypg5QVSS9  " target="_blank">
    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <i class="fas fa-user card-icon"></i>
          <p>Surat Nikah (Perempuan)</p>
        </div>
        <div class="flip-card-back">
          <p>1. Foto 2x3 4 Lembar</p>
          <p>2. Foto 3x4 4 Lembar</p>
          <p>3. Foto 4x6 2 Lembar</p>
          <p>4. FC KTP dan KK</p>
          <p>5. FC Ijasah SLTP/SLTA</p>
          <p>6. FC Akta Kelahiran</p>
          <p>7. Materai</p>
          <p>8. FC Buku Nikah Orang Tua</p>
          <p>9. Suntik Tetanus</p>
        </div>
      </div>
  </a>
  </div>
  <a href="https://forms.gle/fYYDQ9pg7h13AX1W8 " target="_blank">
    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <i class="fas fa-building"></i>
          <p>Surat Ket. Usaha</p>
        </div>
        <div class="flip-card-back">
          <p>1. Surat Pengantar RT/RW</p>
          <p>2. FC KK</p>
          <p>3. FC KTP</p>
        </div>
      </div>
  </a>
  </div>
  <a href="https://forms.gle/fyBfAqusqQfFDqiZ9 " target="_blank">
    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <i class="fas fa-dollar-sign"></i>
          <p>SKTM (Surat Ket. Tanda Tidak Mampu)</p>
        </div>
        <div class="flip-card-back">
          <p>1. Surat Pengantar RT/RW</p>
          <p>2. FC KK</p>
          <p>3. FC KTP</p>
        </div>
      </div>
  </a>
  </div>
  </div>
  </div>
  </div>

  <h1 class="text-center"><b>Artikel Desa Gunungsari</b></h1>
  <div class="container mt-5 mb-5 ">
    <div class="row">

      <?php $card = mysqli_query($koneksi, "SELECT * FROM beranda ORDER BY id ASC");
      if (mysqli_num_rows($card) > 0) {
        while ($p = mysqli_fetch_array($card)) { ?>
          <div class="col-md-4 col-sm-6 col-xs-12">

            <div class="post">
              <div class="header_post">

                <a title="<?= $p['judul'] ?>" href="./potensi/detail.php?id=<?= $p['id'] ?>">
                  <img src="./img/<?= $p['gambar'] ?>" alt="">
                </a>
              </div>

              <div class="body_post">
                <div class="post_content">
                  <?php
                  $kata = $p['judul'];
                  $jml = strlen($kata);
                  if ($jml <= 45) { ?>
                    <a style="text-decoration:none" title="<?= $p['judul'] ?>" href="./potensi/detail.php?id=<?= $p['id'] ?>">
                      <h1><?= substr($p['judul'], 0, 45) ?></h1>
                    </a>
                  <?php } else if ($jml > 45) { ?>
                    <a style="text-decoration:none" title="<?= $p['judul'] ?>" href="./potensi/detail.php?id=<?= $p['id'] ?>">
                      <h1><?= substr($p['judul'], 0, 45) ?>...</h1>
                    </a>
                  <?php } ?>

                  <div class="container_infos">
                    <div class="postedBy">
                      <a class="btn btn-primary" href="./potensi/detail.php?id=<?= $p['id'] ?>" role="button">Check Artikel</a>
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
  <!-- mid content -->


  <!-- Video Profil -->
  <h1 class="text-center"><b>Video Profil</b></h1>
  <div class="container">
    <h1 class="text-center section-subheading"> </h1>
  </div>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/2Um4u6HQptQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-md-6" >
        <p class="text-justify" >Desa Gunungsari terletak di Kecamatan Bumiaji, Kota Batu. Mayoritas penduduk Desa Gunungsari bermatapencaharian sebagai petani dan peternak. Desa Gunungsari memiliki banyak destinasi wisata alam dan potensi lokal. Oleh karena itu Desa Gunungsari mendapatkan julukan sebagai 
          "KAMPUNG SUSU", "KAMPUNG LADU", dan "DESA WISATA PETIK MAWAR". Kunjungi juga YouTube Desa Gunungsari dengan nama <i class="fab fa-youtube"></i> <a href="https://www.youtube.com/@gunungsaritvdesa">Gunungsari TV Desa</a></p>
      </div>
    </div>
  </div>
  <!-- end content -->

  <br><br><br><br>
  <!-- mid content -->
    <h1 class="text-center"><b>Demografi Penduduk</b></h1>
        <!-- DEMOGRAFI -->
        <div class="card-containerdemografi">
          <div class="row">
            <div class="col-sm-4">
              <img src="profil/img/pic7.png" width="250px">
            </div>
            <div class=col-sm-7>
              <br><br>
              <p class="text-justify" font-size="15px" class="card-text" >Berdasarkan data administrasi pemerintah Desa tahun 2023,
                jumlah penduduk Desa Gunungsari adalah terdiri dari 2.264 KK, dengan jumlah total 7.240 Jiwa, dengan Rincian 3.649 Laki-laki
                dan 3.591 perempuan. Berdasarkan data kependudukan dapat dilihat bahwa 70% penduduk Desa Bumiaji masih berusia produktif
                sehingga ini menjadi modal berharga bagi peningkatan pembangunan di Desa.</p>
            </div>
          </div>
        </div>
        <a style="text-decoration: none;" href="#" class="to-top">
          <i class="fas fa-chevron-up"></i>
        </a>
  <!-- END DEMOGRAFI -->


  <!-- footer -->
  <?php include('footer.php') ?>
  <!-- end footer -->

  <!-- Optional JavaScript; choose one of the two! -->
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  <script src="page.js"></script>
  <script src="script.js"></script>
  <script src="script1.js"></script>
  <script src="owl.carousel.min.js"></script>
  <script src="wisata.js"></script>
  <script src="page1.js"></script>
</body>

</html>