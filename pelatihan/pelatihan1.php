<?php
include 'conn.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="images/png" href="img/logodesa.jpg">
    <title>Pelatihan Desa</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="pelatihan.css"> -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;800&display=swap');
        @import url('https://www.dafontfree.net/embed/Z290aGFtLWJvb2smZGF0YS8yNS9nLzEyNzUxOC9Hb3RoYW1Cb29rLnR0Zg');
        html{
            scroll-behavior: smooth;
        }
        /* navbar */
        .navbar {
        background: white;
        }
        .navbar-brand img {
        margin-left: 50px;
        }
        nav ul li {
        margin: 0 10px;
        text-transform: uppercase;
        font-family: "Raleway", sans-serif;
        font-size: 13px;
        }
        .navbar .navbar-nav .nav-item .nav-link:hover {
        color: #ff8c00;
        }
        .navbar-toggler {
        font-size: 30px;
        color: black;
        /* float: right; */
        line-height: 80px;
        margin-right: 40px;
        cursor: pointer;
        }
        .navbar-toggler,
        .navbar-toggler:focus,
        .navbar-toggler:active,
        .navbar-toggler-icon:focus {
        outline: none;
        border: none;
        box-shadow: none;
        }

        /* footer */
        .footer-dark {
        padding: 33px 0;
        color: #f0f9ff;
        background-color: #282d32;
        }
        .footer-dark .nama-desa {
        margin-top: 70px;
        color: white;
        text-transform: uppercase;
        font-size: 22px;
        font-weight: 600;
        letter-spacing: 1px;
        font-family: comic sans ms;
        }
        .footer-dark .item p {
        line-height: 10px;
        font-size: 14px;
        font-family: comic sans ms;
        }
        .footer-dark ul {
        padding: 0;
        list-style: none;
        line-height: 1;
        font-size: 14px;
        margin-bottom: 0;
        }

        .footer-dark ul a {
        color: inherit;
        text-decoration: none;
        opacity: 0.6;
        }

        .footer-dark ul a:hover {
        opacity: 0.8;
        }

        .footer-dark .foll {
        font-size: 26px;
        font-family: "David Libre", serif;
        color: white;
        margin-left: 55%;
        margin-top: 50px;
        }
        .border {
        width: 110px;
        height: 4px;
        background: #fc5c65;
        margin-left: 55%;
        }
        .social-media {
        margin: 20px 0;
        margin-left: 55%;
        }
        .social-media a {
        color: white;
        margin-right: 25px;
        font-size: 22px;
        text-decoration: none;
        transition: 0.3s linear;
        }
        .social-media a:hover {
        color: #fc5c65;
        }

        .footer-dark .item.text p {
        opacity: 0.6;
        margin-bottom: 0;
        }

        .footer-dark .item.social {
        text-align: center;
        }

        .footer-dark .item.social > a {
        font-size: 20px;
        width: 36px;
        height: 36px;
        line-height: 36px;
        display: inline-block;
        text-align: center;
        border-radius: 50%;
        box-shadow: 0 0 0 1px rgba(255, 255, 255, 0.4);
        margin: 0 8px;
        color: #fff;
        opacity: 0.75;
        }

        .footer-dark .item.social > a:hover {
        opacity: 0.9;
        }

        .footer-dark .copyright {
        text-align: center;
        padding-top: 24px;
        font-size: 14px;
        margin-bottom: 0;
        }

        @media (max-width: 991px) {
        .footer-dark .item.social {
            text-align: center;
            margin-top: 20px;
        }
        }
        @media (max-width: 767px) {
        .footer-dark .item:not(.social) {
            text-align: center;
            padding-bottom: 20px;
        }
        .footer-dark .item.text {
            margin-bottom: 36px;
        }
        .footer-dark .item.text {
            margin-bottom: 0;
        }
        .footer-dark .foll {
            margin-left: -5px;
        }
        .border {
            margin-left: 37%;
        }
        .social-media {
            margin-left: 10%;
        }
        }
        @media (max-width: 575px) {
        /* navbar */
        .navbar-toggler {
            margin-right: 15px;
        }
        .navbar-brand img {
            margin-left: 25px;
        }
        nav ul {
            text-align: center;
            margin-top: 20px;
            height: 50vh;
        }
        nav ul li {
            font-size: 13px;
            padding: 2px 0;
        }
        .navbar-collapse {
            background: #2c3e50;
            opacity: 0.8;
        }
        .navbar-collapse .navbar-nav .nav-item .nav-link {
            color: white;
        }
        }
        body{
            background-color: #c5d1e3;
        }

        .to-top {
            background: rgb(240, 157, 3);
            position: fixed;
            bottom: 16px;
            right:32px;
            width:50px;
            height:50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size:32px;
            color:#1f1f1f;
            text-decoration: none;
            opacity:0;
            pointer-events: none;
            transition: all .4s;
        }
        .to-top:hover{
            color:#1f1f1f;
            background: rgb(207, 135, 2);
        }
        .to-top.active {
            bottom:32px;
            pointer-events: auto;
            opacity:1;
        }
        .breadcrumb{
            margin: 0;
        }
        .kanan a{
            text-decoration: none;
            font-family: 'Open Sans_bold', sans-serif;
            color: black;
        }
        .breadcrumb li a{
            color: grey;
            text-decoration: none;
        }
        .active {
            color: black;
            font-weight: bold;
        }
        .imgatas{
            float: left;
            width: 100%;
            height: 150px;
            overflow: hidden;
        }

        .imgatas img{
            width: 100%;
        }

        .isi .judul {
            float: left;
            width: 100%;
            margin-top: 50px;
            text-align: center;
            color: #000;
            font-size: 36px;
            font-family: 'GothamBook';
            overflow: hidden;
        }

        /* card */
        .container .post {
        width: 350px;
        height: 400px;
        display: flex;
        overflow: hidden;
        flex-direction: column;
        position: relative;
        margin: 20px 0;
        box-shadow: 0 4px 20px 0 rgba(0,0,0,0.2);
        }
        .container .post:hover{
            box-shadow: 0 8px 30px 0 rgba(0,0,0,0.2);
        }
        .container .post:hover .header_post {
        margin-top: -5px;
        }
        .container .post:hover .body_post {
        height: 50%;
        
        }
        .container .post:hover img {
        transform: translatey(-10px) translatex(-5px) scale(1.05);
        }
        .container .post .header_post {
        width: 100%;
        height: 40%;
        background: #ddd;
        position: absolute;
        top: 0;
        -webkit-transition: cubic-bezier(0.68, -0.55, 0.27, 1.55) 320ms;
        -moz-transition: cubic-bezier(0.68, -0.55, 0.27, 1.55) 320ms;
        -ms-transition: cubic-bezier(0.68, -0.55, 0.27, 1.55) 320ms;
        -o-transition: cubic-bezier(0.68, -0.55, 0.27, 1.55) 320ms;
        transition: cubic-bezier(0.68, -0.55, 0.27, 1.55) 320ms;
        }
        .container .post .header_post img {
        max-width: 100%;
        height: auto;
        transition: ease-in-out 600ms;
        }
        .container .post .body_post {
        width: 100%;
        height: 55%;
        background: #fff;
        position: absolute;
        bottom: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        -webkit-transition: cubic-bezier(0.68, -0.55, 0.27, 1.55) 320ms;
        -moz-transition: cubic-bezier(0.68, -0.55, 0.27, 1.55) 320ms;
        -ms-transition: cubic-bezier(0.68, -0.55, 0.27, 1.55) 320ms;
        -o-transition: cubic-bezier(0.68, -0.55, 0.27, 1.55) 320ms;
        transition: cubic-bezier(0.68, -0.55, 0.27, 1.55) 320ms;
        }
        .container .post .body_post .post_content {
        width: 80%;
        height: 80%;
        background: #fff;
        position: relative;

        }
        .container .post .body_post .post_content h1 {
        font-size: 20px;
        font-weight: bold;
        color: #000;
        }

        .container .post .body_post .post_content p {
        font-size: 14px;
        font-weight: normal;
        }
        .container .post .body_post .post_content .container_infos {
        width: 100%;
        display: flex;
        justify-content: space-between;
        position: absolute;
        bottom: 0;
        border-top: 1px solid rgba(0, 0, 0, 0.2);
        padding-top: 2px;
        }
        .container .post .body_post .post_content .container_infos .postedBy {
        display: flex;
        flex-direction: column;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 12px;
        }
        .container .post .body_post .post_content .container_infos .postedBy span {
        font-size: 12px;
        text-transform: uppercase;
        opacity: 0.5;
        letter-spacing: 1px;
        font-weight: bold;
        }

        /* @keyframes top {
        0% {
            opacity: 0;
            bottom: -80px;
        }
        100% {
            opacity: 1;
            bottom: 0px;
        }
        }
        @keyframes icon {
        0% {
            opacity: 0;
            transform: scale(0);
        }
        50% {
            opacity: 1;
            transform: scale(1.3) rotate(-2deg);
        }
        100% {
            opacity: 1;
            bottom: 0px;
        }
        } */
        /* end card */

        @media screen and (min-width: 1180px){
            .container11{
                margin-left: auto;
                margin-right: auto;
                width: 1145px;
            }
            
        }
        @media screen and (min-width: 999px) {

            /* sisi kiri */
            .bodyisi{
                float: left;
                width: 100%;
                margin-bottom: 30px;
                overflow: hidden;
            }
            .isidetail:nth-child(odd){
                float: left;
                width: 69%;
                overflow: hidden;
            }
            .judul{
                float: left;
                width: 100%;
                font-size: 24px;
                color: #000;
                font-weight: bold;
                
                margin-top: 20px;
                margin-bottom: 10px;
            }
            .tanggal{
                float: left;
                width: 100%;
                font-size: 13px;
                color: #000;
                font-weight: lighter;
                overflow: hidden;
                margin-bottom: 20px;
            }
            .gbrart{
                float: left;
                width: 100%;
                overflow: hidden;
            }
            .gbrart img{
                width: 96%;
                background: #FFF;
                padding: 2%;
            }
            .teks{
                width: 96%;
                padding: 2%;
                float: left;
                background: #FFF;
                font-family: 'GothamBook';
                font-size: 15px;
                color: #6b6b6b;
                line-height: 1.5em;
            }
            .teks p {
                padding-bottom: 10px;
                display: block;
                margin-block-start: 1em;
                margin-block-end: 1em;
                margin-inline-start: 0px;
                margin-inline-end: 0px;
            }
            p{
                text-align: justify;
            }
            p img {
                width: 100%;
                height: 100%;
            }

            /* sisi kanan */

            .isidetail{
                float: right;
                width: 28%;
                overflow: hidden;
            }
            .jdl{
                float: left;
                width: 100%;
                font-size: 24px;
                color: #000;
                font-weight: bold;
                overflow: hidden;
                margin-top: 60px;
                margin-bottom: 15px;
            }
            .samping{
                width: 100%;
                float: left;
                padding-top: 10px;
                padding-bottom: 10px;
            }
            .boxsamping{
                width: 100%;
                height: 100px;
                overflow: hidden;
                float: left;
                padding-bottom: 15px;
                border-bottom: 1px solid #d6d5d5;
                margin-bottom: 15px;
            }
            .pic{
                width: 30%;
                height: 100px;
                float: left;
                overflow: hidden;
            }
            .pic img{
                height: 90px;
            }
            .kanan{
                width: 65%;
                height: 100px;
                float: right;
                overflow: hidden;
            }
            a{
                text-decoration: none;
            }
            .tglkn{
                float: left;
                width: 100%;
                font-size: 12px;
                color: gray;
                padding-top: 5px;
                font-weight:lighter;
                overflow: hidden;
            }
        
        }
        @media only screen and (max-width: 1200px) {
            .container .post {
                width: 300px;
                height: 400px;
                display: flex;
                overflow: hidden;
                flex-direction: column;
                position: relative;
                margin: 20px 0;
                box-shadow: 0 4px 20px 0 rgba(0,0,0,0.2);
            }

            .imgatas{
                float: left;
                width: 100%;
                height: 150px;

            }
            
            .imgatas img{
                width: auto;
            }
        }
        @media screen and (min-width: 1090px) and (max-width: 1179px){
            .container11{
                margin-left: auto;
                margin-right: auto;
                width: 1080px;
            }
        }
        @media screen and (min-width: 999px) and (max-width: 1090px) {
            .container11{
                margin-left: auto;
                margin-right: auto;
                width: 990px;
            }
        }

        @media screen and (min-width: 0px) and (max-width: 998px){
            .container11 {
                margin-left: auto;
                width: 95%;
            }
            .bodyisi{
                float: left;
                width: 100%;
                margin-bottom: 30px;
                overflow: hidden;
            }
            .isidetail:nth-child(odd){
                
                float: left;
                width: 100%;
                overflow: hidden;
            }
            .judul{
                float: left;
                width: 100%;
                font-size: 24px;
                color: #000;
                font-weight: bold;
                overflow: hidden;
                margin-top: 20px;
                margin-bottom: 20px;
            }
            .tanggal{
                float: left;
                width: 100%;
                font-size: 13px;
                color: #000;
                font-weight: lighter;
                overflow: hidden;
                margin-bottom: 20px;
            }
            .gbrart{
                float: left;
                width: 100%;
                overflow: hidden;
            }
            .gbrart img{
                width: 96%;
                background: #FFF;
                padding: 2%;
                vertical-align: middle;
            }
            .teks{
                width: 96%;
                padding: 3%;
                float: left;
                background: #FFF;
                font-family: 'GothamBook';
                font-size: 15px;
                color: #6b6b6b;
                line-height: 1.5em;
            }
            .teks p {
                padding-bottom: 10px;
                display: block;
                
            }
            p img {
                width: 100%;
                height: 100%;
            }

            /* sisi kanan */

            .isidetail{
                float: left;
                width: 100%;
                overflow: hidden;
            }
            .jdl{
                float: left;
                width: 100%;
                font-size: 24px;
                color: #000;
                font-weight: bold;
                overflow: hidden;
                margin-top: 30px;
                margin-bottom: 15px;
            }
            .samping{
                width: 70%;
                float: left;
                padding-top: 10px;
                padding-bottom: 10px;
            }
            .boxsamping{
                width: 100%;
                height: 100px;
                overflow: hidden;
                float: left;
                padding-bottom: 15px;
                border-bottom: 1px solid #d6d5d5;
                margin-bottom: 15px;
            }
            .pic{
                width: 27%;
                height: 100px;
                float: left;
                overflow: hidden;
            }
            .pic img{
                height: 90px;
            }
            .kanan{
                width: 65%;
                height: 100px;
                float: right;
                overflow: hidden;
                
            }
            a{
                text-decoration: none;
            }
            .tglkn{
                float: left;
                width: 100%;
                font-size: 12px;
                color: gray;
                padding-top: 4px;
                font-weight:lighter;
                overflow: hidden;
            }
        }

        @media only screen and (max-width: 992px){

            .container .post {
                width: 230px;
                height: 300px;
                display: flex;
                overflow: hidden;
                flex-direction: column;
                position: relative;
                margin: 20px auto;
                }
                .container .post .body_post .post_content p {
                font-size: 10px;
                }
                .container .post .body_post .post_content h1 {
                font-size: 15px;
                }
                .container .post .body_post .post_content .container_infos {
                padding-top: 2px;
                }
                .container .post .body_post .post_content .container_infos .postedBy {
                font-size: 10px;
                }
                .container .post .body_post .post_content .container_infos .postedBy span {
                font-size: 10px;
                }
            
        }

        @media only screen and (max-width: 575px){

            .container .post {
                width: 300px;
                height: 300px;
                display: flex;
                margin: 20px auto;
                }
                
        }
    </style>
</head>

<body>
        <!-- navbar -->
        <nav class="navbar navbar-expand-sm navbar-light fixed-top">
            <a class="navbar-brand" href="#">
                <img src="img/logodesa.jpg" width="130px" height="70px" />
            </a>
            <button type="button" data-toggle="collapse" data-target="#navbarNav" class="navbar-toggler" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="#" class="nav-link active">Beranda</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Profil
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item active"><a href="#" class="nav-link">Potensi</a></li>
                    <li class="nav-item active"><a href="#" class="nav-link">Kelembagaan</a></li>
                    <li class="nav-item active"><a href="#" class="nav-link">Data Desa</a></li>
                    <li class="nav-item active"><a href="#" class="nav-link">Galeri</a></li>
                    <li class="nav-item active"><a href="#" class="nav-link">Agenda</a></li>
                    <li class="nav-item active"><a href="#" class="nav-link">APBDesa</a></li>
                </ul>
            </div>
        </nav>
        <!-- end navbar -->
    <!-- <div class="imgatas">
        <img src="img/img_paralax.jpg" alt="">
    </div> -->

    <div class="isi">
        <div class="judul">
            Pelatihan Desa
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">

            <?php $card = mysqli_query($conn, "SELECT * FROM tables LIMIT 10, 9");
            if (mysqli_num_rows($card) > 0 ) {
                while ($p = mysqli_fetch_array($card)) { ?>
                    <!-- <div class="col-md-4 col-sm-6 col-xs-12"> -->
                    <div class="col-md-4 col-sm-6 col-xs-12">

                        <div class="post">
                            <div class="header_post">
                                <a title="<?= $p['judul'] ?>" href="detailpelatihan.php?id=<?= $p['id'] ?>">
                                    <img src="img/<?= $p['gambar'] ?>" alt="">
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
                                    <p><?= substr($p['isi'], 0, 160) ?>...</p>
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

    <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item">
        <a class="page-link" href="pelatihan.php" tabindex="-1" aria-disabled="true">Sebelumnya</a>
        </li>
        <li class="page-item"><a class="page-link" href="pelatihan.php">1</a></li>
        <li class="page-item"><a class="page-link" href="pelatihan1.php">2</a></li>
        <li class="page-item"><a class="page-link" href="pelatihan2.php">3</a></li>
        <li class="page-item">
        <a class="page-link" href="pelatihan2.php">Next</a>
        </li>
    </ul>
    </nav>

              <!-- footer -->
              <br>
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

</body>

</html>