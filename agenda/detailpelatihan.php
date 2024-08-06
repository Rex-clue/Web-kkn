<?php
include 'conn.php';
$card = mysqli_query($conn, "SELECT * FROM tables WHERE id = '" . $_GET['id'] . "'");
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
    <!-- <link rel="stylesheet" href="pelatihan.css"> -->
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=611d440d85a05e00127d3417&product=inline-share-buttons" async="async"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;800&display=swap');
        @import url('https://www.dafontfree.net/embed/Z290aGFtLWJvb2smZGF0YS8yNS9nLzEyNzUxOC9Hb3RoYW1Cb29rLnR0Zg');
        html{
            scroll-behavior: smooth;
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
        width: 1100px;
        height: 600px;
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
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="pelatihan.php">Home</a></li>
            <li class="breadcrumb-item"><a href="pelatihan.php">Pelatihan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Pelatihan</li>
        </ol>
    </nav>
    <div class="container11">
        <div class="bodyisi">
            <div class="isidetail">

                <div class="judul"><?= $p['judul'] ?></div>
                <div class="tanggal"><?= $p['tanggal'] ?></div>
                <div class="gbrart"><img src="img/<?= $p['gambar'] ?>" alt=""></div>

                <div class="teks">
                    <?php
                    // membaca input dari form
                    $input = $p['isi'];
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
                    <?php $card = mysqli_query($conn, "SELECT * FROM tables WHERE id NOT IN ('" . $_GET['id'] . "') ORDER BY RAND() LIMIT 10 ");
                    if (mysqli_num_rows($card) > 0) {
                        while ($p = mysqli_fetch_array($card)) { ?>
                            <div class="boxsamping">
                                <div class="pic"><a title="<?= $p['judul'] ?>" href="detailpelatihan.php?id=<?= $p['id'] ?>"><img src="img/<?= $p['gambar'] ?>" alt=""></a></div>
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
    <script src="pelatihan.js"></script>
</body>

</html>