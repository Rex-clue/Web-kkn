<!DOCTYPE html>
<html lang="en">
<?php session_start();
if (!$_SESSION['nama']) {
  header('Location: ../index.php?session=expired');
}
?>
<?php include('header.php'); ?>
<?php include('../conf/config.php'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Preloader -->
    <?php include('preloader.php'); ?>

    <!-- Navbar -->
    <?php include('navbar.php'); ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <?php include('logo.php'); ?>

      <!-- Sidebar -->
      <?php include('sidebar.php'); ?>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <?php include('content_header.php'); ?>
      <!-- /.content-header -->

      <!-- Main content -->
      <?php
      if (isset($_GET['page'])) {
        if ($_GET['page'] == 'dashboard') {
          include('dashboard.php');
        } else if ($_GET['page'] == 'datauser') {
          include('datauser.php');
        } else if ($_GET['page'] == 'edit-data') {
          include('edit/edit_data.php');
        } else if ($_GET['page'] == 'datarole') {
          include('datarole.php');
        } else if ($_GET['page'] == 'beranda') {
          include('beranda.php');
        } else if ($_GET['page'] == 'edit-artikel') {
          include('edit/edit_artikel.php');
        }
        // Potensi 
        // UMKM
        else if ($_GET['page'] == 'umkm') {
          include('umkm.php');
        } else if ($_GET['page'] == 'edit-umkm') {
          include('edit/edit_umkm.php');
        }
        // Wisata 
        else if ($_GET['page'] == 'wisata') {
          include('wisata.php');
        } else if ($_GET['page'] == 'edit-wisata') {
          include('edit/edit_wisata.php');
        }
        // Perkebunan
        else if ($_GET['page'] == 'kesenian') {
          include('kesenian.php');
        } else if ($_GET['page'] == 'edit-kesenian') {
          include('edit/edit_kesenian.php');
        }
        // Peternakan
        else if ($_GET['page'] == 'peternakan') {
          include('peternakan.php');
        } else if ($_GET['page'] == 'edit-peternakan') {
          include('edit/edit_peternakan.php');
        }
        // Pertanian
        else if ($_GET['page'] == 'pertanian') {
          include('pertanian.php');
        } else if ($_GET['page'] == 'edit-pertanian') {
          include('edit/edit_pertanian.php');
        }
        // Kelembagaan
        // PEMDES
        else if ($_GET['page'] == 'pemdes') {
          include('pemdes.php');
        } else if ($_GET['page'] == 'edit-pemdes') {
          include('edit/edit_pemdes.php');
        }
        // BPD
        else if ($_GET['page'] == 'bpd') {
          include('bpd.php');
        } else if ($_GET['page'] == 'edit-bpd') {
          include('edit/edit_bpd.php');
        }
        // LPMD
        else if ($_GET['page'] == 'lpmd') {
          include('lpmd.php');
        } else if ($_GET['page'] == 'edit-lpmd') {
          include('edit/edit_lpmd.php');
        }
        // RT/RW
        else if ($_GET['page'] == 'rtrw') {
          include('rtrw.php');
        } else if ($_GET['page'] == 'edit-rtrw') {
          include('edit/edit_rtrw.php');
        }
        // PKK
        else if ($_GET['page'] == 'pkk') {
          include('pkk.php');
        } else if ($_GET['page'] == 'edit-pkk') {
          include('edit/edit_pkk.php');
        }
        // Karang Taruna
        else if ($_GET['page'] == 'karangtaruna') {
          include('karangtaruna.php');
        } else if ($_GET['page'] == 'edit-karangtaruna') {
          include('edit/edit_karangtaruna.php');
        }
        // LINMAS
        else if ($_GET['page'] == 'linmas') {
          include('linmas.php');
        } else if ($_GET['page'] == 'edit-linmas') {
          include('edit/edit_linmas.php');
        }
         // FORUM ANAK
         else if ($_GET['page'] == 'forum_anak') {
           include('forum_anak.php');
         }else if ($_GET['page'] == 'edit-forum_anak') {
           include('edit/edit_forum_anak.php');
         }

        // Data Agenda
        else if ($_GET['page'] == 'kegiatan') {
          include('kegiatan.php');
        } else if ($_GET['page'] == 'event') {
          include('event.php');
        } else if ($_GET['page'] == 'pelatihan') {
          include('pelatihan.php');
        }
        // Penduduk
        else if ($_GET['page'] == 'administratif') {
          include('w_adminstratif.php');
        } else if ($_GET['page'] == 'edit-administratif') {
          include('edit/edit_wadminstratif.php');
        }
        // Pendidikan
        else if ($_GET['page'] == 'pendidikan') {
          include('pendidikan.php');
        } else if ($_GET['page'] == 'edit-pendidikan') {
          include('edit/edit_pendidikan.php');
        }
        // Agama
        else if ($_GET['page'] == 'agama') {
          include('agama.php');
        } else if ($_GET['page'] == 'edit-agama') {
          include('edit/edit_agama.php');
        }
        // Galeri
        else if ($_GET['page'] == 'galeri') {
          include('galeri.php');
        }
        // apbd
        else if ($_GET['page'] == 'apbd') {
          include('apbd.php');
        } else {
          include('notfound.php');
        }
      } else {
        include('dashboard.php');
      } ?>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include('footer.php'); ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

</body>

</html>