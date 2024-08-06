<?php include '../koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="event.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="icon" type="images/png" href="img/lg_simdesa_red.png">
    <title>Event</title>
    <style>
        body {

            background-color: #c7e9eb;

        }

        /* .to-top {
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
} */

        .isi .judul {
            float: left;
            width: 100%;
            margin-top: 50px;
            text-align: center;
            color: #09bb9b;
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
            box-shadow: 0 4px 20px 0 rgba(0, 0, 0, 0.2);
        }

        .container .post:hover {
            box-shadow: 0 8px 30px 0 rgba(0, 0, 0, 0.2);
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

        @media screen and (min-width: 1180px) {
            .container11 {
                margin-left: auto;
                margin-right: auto;
                width: 1145px;
            }

        }

        @media screen and (min-width: 999px) {

            /* sisi kiri */
            .bodyisi {
                float: left;
                width: 100%;
                margin-bottom: 30px;
                overflow: hidden;
            }

            .isidetail:nth-child(odd) {
                float: left;
                width: 69%;
                overflow: hidden;
            }

            .judul {
                float: left;
                width: 100%;
                font-size: 24px;
                color: #000;
                font-weight: bold;

                margin-top: 20px;
                margin-bottom: 10px;
            }

            .tanggal {
                float: left;
                width: 100%;
                font-size: 13px;
                color: #000;
                font-weight: lighter;
                overflow: hidden;
                margin-bottom: 20px;
            }

            .gbrart {
                float: left;
                width: 100%;
                overflow: hidden;
            }

            .gbrart img {
                width: 96%;
                background: #FFF;
                padding: 2%;
            }

            .teks {
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

            p {
                text-align: justify;
            }

            p img {
                width: 100%;
                height: 100%;
            }

            /* sisi kanan */

            .isidetail {
                float: right;
                width: 28%;
                overflow: hidden;
            }

            .jdl {
                float: left;
                width: 100%;
                font-size: 24px;
                color: #000;
                font-weight: bold;
                overflow: hidden;
                margin-top: 60px;
                margin-bottom: 15px;
            }

            .samping {
                width: 100%;
                float: left;
                padding-top: 10px;
                padding-bottom: 10px;
            }

            .boxsamping {
                width: 100%;
                height: 100px;
                overflow: hidden;
                float: left;
                padding-bottom: 15px;
                border-bottom: 1px solid #d6d5d5;
                margin-bottom: 15px;
            }

            .pic {
                width: 30%;
                height: 100px;
                float: left;
                overflow: hidden;
            }

            .pic img {
                height: 90px;
            }

            .kanan {
                width: 65%;
                height: 100px;
                float: right;
                overflow: hidden;
            }

            a {
                text-decoration: none;
            }

            .tglkn {
                float: left;
                width: 100%;
                font-size: 12px;
                color: gray;
                padding-top: 5px;
                font-weight: lighter;
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
                box-shadow: 0 4px 20px 0 rgba(0, 0, 0, 0.2);
            }

            .imgatas {
                float: left;
                width: 100%;
                height: 150px;

            }

            .imgatas img {
                width: auto;
            }
        }

        @media screen and (min-width: 1090px) and (max-width: 1179px) {
            .container11 {
                margin-left: auto;
                margin-right: auto;
                width: 1080px;
            }
        }

        @media screen and (min-width: 999px) and (max-width: 1090px) {
            .container11 {
                margin-left: auto;
                margin-right: auto;
                width: 990px;
            }
        }

        @media screen and (min-width: 0px) and (max-width: 998px) {
            .container11 {
                margin-left: auto;
                width: 95%;
            }

            .bodyisi {
                float: left;
                width: 100%;
                margin-bottom: 30px;
                overflow: hidden;
            }

            .isidetail:nth-child(odd) {

                float: left;
                width: 100%;
                overflow: hidden;
            }

            .judul {
                float: left;
                width: 100%;
                font-size: 24px;
                color: #000;
                font-weight: bold;
                overflow: hidden;
                margin-top: 20px;
                margin-bottom: 20px;
            }

            .tanggal {
                float: left;
                width: 100%;
                font-size: 13px;
                color: #000;
                font-weight: lighter;
                overflow: hidden;
                margin-bottom: 20px;
            }

            .gbrart {
                float: left;
                width: 100%;
                overflow: hidden;
            }

            .gbrart img {
                width: 96%;
                background: #FFF;
                padding: 2%;
                vertical-align: middle;
            }

            .teks {
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

            .isidetail {
                float: left;
                width: 100%;
                overflow: hidden;
            }

            .jdl {
                float: left;
                width: 100%;
                font-size: 24px;
                color: #000;
                font-weight: bold;
                overflow: hidden;
                margin-top: 30px;
                margin-bottom: 15px;
            }

            .samping {
                width: 70%;
                float: left;
                padding-top: 10px;
                padding-bottom: 10px;
            }

            .boxsamping {
                width: 100%;
                height: 100px;
                overflow: hidden;
                float: left;
                padding-bottom: 15px;
                border-bottom: 1px solid #d6d5d5;
                margin-bottom: 15px;
            }

            .pic {
                width: 27%;
                height: 100px;
                float: left;
                overflow: hidden;
            }

            .pic img {
                height: 90px;
            }

            .kanan {
                width: 65%;
                height: 100px;
                float: right;
                overflow: hidden;

            }

            a {
                text-decoration: none;
            }

            .tglkn {
                float: left;
                width: 100%;
                font-size: 12px;
                color: gray;
                padding-top: 4px;
                font-weight: lighter;
                overflow: hidden;
            }
        }

        @media only screen and (max-width: 992px) {

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

        @media only screen and (max-width: 575px) {

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

    <?php include('nav.php') ?>
    <!-- <div class="imgatas">
        <img src="img/img_paralax.jpg" alt="">
    </div> -->

    <div class="isi">
        <div class="judul">
            Event Desa
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">

            <?php $card = mysqli_query($koneksi, "SELECT * FROM event ORDER BY id ASC");
            if (mysqli_num_rows($card) > 0) {
                while ($p = mysqli_fetch_array($card)) { ?>
                    <div class="col-md-4 col-sm-6 col-xs-12">

                        <div class="post">
                            <div class="header_post">
                                <a title="<?= $p['judul'] ?>" data-toggle="modal" <?= $p['id'] ?> data-target="#event">
                                    <img src="../admin/img/<?= $p['gambar'] ?>" alt="">
                                </a>
                            </div>

                            <div class="body_post">
                                <div class="post_content">
                                    <?php
                                    $kata = $p['judul'];
                                    $jml = strlen($kata);
                                    if ($jml <= 45) { ?>
                                        <a style="text-decoration:none" title="<?= $p['judul'] ?>">
                                            <h1><?= substr($p['judul'], 0, 45) ?></h1>
                                        </a>
                                    <?php } else if ($jml > 45) { ?>
                                        <a style="text-decoration:none" title="<?= $p['judul'] ?>">
                                            <h1><?= substr($p['judul'], 0, 45) ?>...</h1>
                                        </a>
                                    <?php } ?>
                                    <p><?= substr($p['keterangan'], 0, 115) ?>
                                        <!-- <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#event">
                                        Read More
                                    </button>...</p> -->
                                        <!-- <div class="container_infos">
                                        <div class="postedBy">
                                            <span>DATE</span>
                                            <?= $p['tanggal'] ?>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>


                <?php }
            } else { ?>
                <p>Event Kosong</p>
            <?php } ?>

        </div>

    </div>
    <!-- Modal -->
    <div class="modal fade" id="event" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-dark">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php $card = mysqli_query($conn, "SELECT * FROM tables ORDER BY id ASC");
                    if (mysqli_num_rows($card) > 0) {
                        while ($p = mysqli_fetch_array($card)) { ?>
                            <div class="container_infos">
                                <div class="postedBy">
                                    <span>DATE</span>
                                    <br>
                                    <?= $p['keterangan'] ?>
                                    <br>
                                    <?= $p['waktu'] ?>
                                    <br>
                                    <?= $p['tanggal'] ?>
                                    <?= $p['tempat'] ?>
                                </div>
                            </div>
                        <?php }
                    } else { ?>
                        <p>Event Kosong</p>
                    <?php } ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-success" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!--footer-->
    <footer>
        <?php include('footer.php') ?>
    </footer>
    <!--end footer-->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>