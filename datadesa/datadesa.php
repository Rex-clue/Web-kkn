<?php
include 'koneksi.php'
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/navfoot.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
    <link rel="icon" type="images/png" href="asset/img/11-removebg-preview.png">
    <title>Data Desa</title>
</head>

<body>

    <!-- navbar -->
    <?php include('nav.php') ?>
    <!-- end navbar -->

    <!-- data desa -->
    <div class="container" style="padding-bottom:25px;">
        <div class="breadcrumb">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data Desa</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <!-- RH: this is bootstrap 5 tabbed panel -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="wilayah_administratif-tab" data-bs-toggle="tab" href="#wilayah_administratif" role="tab" aria-controls="wilayah_administratif" aria-selected="true">Jumlah Penduduk</a>
                            </li>
                            <!-- <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pekerjaan-tab" data-bs-toggle="tab" href="#Pekerjaan" role="tab" aria-controls="pekerjaan" aria-selected="false">Pekerjaan</a>
                            </li> -->
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pendidikan-tab" data-bs-toggle="tab" href="#pendidikan" role="tab" aria-controls="pendidikan" aria-selected="false">Pendidikan</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="agama-tab" data-bs-toggle="tab" href="#agama" role="tab" aria-controls="agama" aria-selected="false">Agama</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="wilayah_administratif" role="tabpanel" aria-labelledby="wilayah_administratif-tab">
                                <br />
                                <div class="table-responsive fw-bold">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr class="bg-gray" align="center">
                                                <th>No.</th>
                                                <th>Jumlah KK</th>
                                                <th>Jumlah Laki-Laki</th>
                                                <th>Jumlah Perempuan</th>
                                                <th>Jumlah Semua</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        $no = 1;
                                        $wilayah = mysqli_query($con, "SELECT * From w_administratif");
                                        while ($w = mysqli_fetch_array($wilayah)) {
                                            echo '
                                            <tr align="center">  
                                                <td>' . $no++ . '</td>
                                                <td>' . $w['jumlah_kk'] . '</td>  
                                                <td>' . $w['jumlah_lakilaki'] . '</td>    
                                                <td>' . $w['jumlah_perempuan'] . '</td>  
                                                <td>' . $w['jumlah_jiwa'] . '</td> 
                                            </tr>';
                                        }
                                        ?>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pendidikan" role="tabpanel" aria-labelledby="pendidikan-tab">
                                <br />
                                <div class="table-responsive fw-bold">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr class="bg-gray" align="center">
                                                <th>No.</th>
                                                <th>Tingkat Pendidikan</th>
                                                <th>Jumlah Warga</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        $no = 1;
                                        $pendidikan = mysqli_query($con, "SELECT * From pendidikan ORDER BY id_pendidikan ASC");
                                        while ($pen = mysqli_fetch_array($pendidikan)) {
                                            echo '
                                            <tr align="center">  
                                                <td>' . $no++ . '</td> 
                                                <td>' . $pen['tingkat_pendidikan'] . '</td> 
                                                <td>' . $pen['jumlah_semua'] . '</td> 
                                            </tr>';
                                        }
                                        ?>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="agama" role="tabpanel" aria-labelledby="agama-tab">
                                <br />
                                <div class="table-responsive fw-bold">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr class="bg-gray" align="center">
                                                <th>No.</th>
                                                <th>Agama</th>
                                                <th>Jumlah Warga</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        $no = 1;
                                        $agama = mysqli_query($con, "SELECT * From agama ORDER BY id ASC");
                                        while ($aga = mysqli_fetch_array($agama)) {
                                            echo '
                                            <tr align="center">  
                                                <td>' . $no++ . '</td> 
                                                <td>' . $aga['nama_agama'] . '</td> 
                                                <td>' . $aga['jumlah'] . '</td> 
                                            </tr>';
                                        }
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
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
                <div class="b" style="padding-top:25px;">
                    <div class="card text-center ">
                        <div class="card-body">
                            <canvas id="ChartGender" max-width="50%"></canvas>
                            <h5>Total Warga <?php echo $warga_total; ?></h5>
                            <script>
                                var ctx = document.getElementById("ChartGender");
                                var myChart = new Chart(ctx, {
                                    type: 'pie',
                                    data: {
                                        labels: ["Laki-Laki", "Perempuan"],
                                        datasets: [{
                                            label: 'Gender',
                                            data: [<?php echo $laki_laki; ?>, <?php echo $perempuan; ?>],
                                            backgroundColor: [
                                                'rgba(54, 162, 235, 0.2)',
                                                'rgba(255, 99, 132, 0.2)'
                                            ],
                                            borderColor: [
                                                'rgba(54, 162, 235, 1)',
                                                'rgba(255,99,132,1)'
                                            ],
                                            borderWidth: 1
                                        }]
                                    },
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end data desa -->

    <!-- footer -->
    <?php include('footer.php') ?>
    <!-- end footer -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('#tabel_wilayah').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'excel', 'pdf', 'print'
                ]
            });
        });
        $(document).ready(function() {
            $('#tabel_pendidikan').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>