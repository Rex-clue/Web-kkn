<?php include '../koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="kegiatan.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="icon" type="images/png" href="img/lg_simdesa_red.png">
    <title>Kegiatan</title>
</head>

<body>
    <!-- menu bar -->
    <?php include('nav.php') ?>
    <!-- end navbar -->

    <!-- content -->
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="agenda">
                <h1><span>KEGIATAN DESA</span></h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="judul">
                    <b>Jadwal Kegiatan Rutin</b>
                </div>
                <div class="judul1">
                    <b>Sarasehan Rutin RT</b>
                </div>
                <div class="tabb">
                    <table class="table shadow table-bordered table-hover border-dark">
                        <thead>
                            <!-- <tr style="background-color: #6A9F43; color: white;">
                        <th scope="col">No</th>
                        <th scope="col">Nama PKK</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Waktu</th>
                      </tr> -->
                        </thead>
                        <?php
                        $sql = 'SELECT id, nama, alamat, waktu 
                    FROM kegiatandesa';

                        $query = mysqli_query($koneksi, $sql);

                        if (!$query) {
                            die('SQL Error: ' . mysqli_error($koneksi));
                        }

                        echo '<table>
                    <div class="tabb">
                    <table class="table shadow table-bordered table-hover border-dark">
                    <thead>
                    <tr style="background-color: #6A9F43; color: white;">
                    <th scope="col">No</th>
                    <th scope="col">Nama PKK</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Waktu</th>
                    </tr>
                    </thead>
                    <tbody>';
                        $no = 1;
                        while ($row = mysqli_fetch_row($query)) {

                            echo '<tr>
                    <td>' . $no . '</td>
                    <td>' . $row[1] . '</td>
                    <td>' . $row[2] . '</td>
                    <td class="right">' . $row[3] . '</td>
                    </tr>';
                            $no++;
                        }

                        echo '
                    </tbody>
                    </table>';
                        ?>
                    </table>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row row-cols-1 row-cols-md" style="padding-right: 25px; padding-left: 31px; max-width: 50rem;">
                    <div class="col col-mb-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><b>Informasi Kegiatan</b></h4>
                                <div class="title1"><b>Sarasehan Rutin RT</b>
                                    <p> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php') ?>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>