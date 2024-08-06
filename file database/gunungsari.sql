-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2023 at 04:34 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gunungsari`
--

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `id` int(11) NOT NULL,
  `nama_agama` varchar(255) DEFAULT NULL,
  `jumlah` varchar(255) DEFAULT NULL,
  `keterangan` varchar(500) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`id`, `nama_agama`, `jumlah`, `keterangan`) VALUES
(2, 'Islam', '7225', ''),
(3, 'Katholik', '4 ', ''),
(4, 'Kristen', '11', ''),
(5, 'Hindu', '-', ''),
(6, 'Budha', '-', ''),
(7, 'Khonghucu', '-', ''),
(8, 'Kepercayaan', '-', '');

-- --------------------------------------------------------

--
-- Table structure for table `apbd`
--

CREATE TABLE `apbd` (
  `id` int(11) NOT NULL,
  `tahun` int(11) DEFAULT NULL,
  `pemasukan` varchar(255) DEFAULT '',
  `pengeluaran` varchar(255) DEFAULT '',
  `keterangan` varchar(500) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apbd`
--

INSERT INTO `apbd` (`id`, `tahun`, `pemasukan`, `pengeluaran`, `keterangan`) VALUES
(5, 2021, '6.389.635.856', '8.432.525.166', '-');

-- --------------------------------------------------------

--
-- Table structure for table `beranda`
--

CREATE TABLE `beranda` (
  `id` int(11) NOT NULL,
  `judul` varchar(500) DEFAULT NULL,
  `artikel` varchar(10000) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `galeri` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beranda`
--

INSERT INTO `beranda` (`id`, `judul`, `artikel`, `gambar`, `galeri`) VALUES
(24, 'Lomba 17 Agustus', 'Pada gambar diatas ada event lomba 17 Agustus yang diselenggarakan di desa Gunungsari bagian dusun jantur. Lomba 17 Agustus ini ada beberapa lomba seperti lomba balap kelereng, masukan paku dalam botol dan lain lain.', 'Lomba.jpeg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bpd`
--

CREATE TABLE `bpd` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `keterangan` varchar(500) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bpd`
--

INSERT INTO `bpd` (`id`, `nama`, `jabatan`, `keterangan`) VALUES
(6, 'SISWOYO', 'KETUA', ''),
(7, 'BUDIHARTO', 'WAKIL ', ''),
(8, 'SYAMSYUHARI', 'BENDAHARA ', ''),
(9, 'NICKY NASTITI KARYA DEWI', 'SEKRETARIS', ''),
(10, 'TARMAJI', 'ANGGOTA', ''),
(11, 'ARIF JIONO', 'ANGGOTA', ''),
(12, 'NURIMAN', 'ANGGOTA', '');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `judul` varchar(500) DEFAULT NULL,
  `keterangan` varchar(500) DEFAULT NULL,
  `tanggal` varchar(255) DEFAULT '',
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `judul`, `keterangan`, `tanggal`, `gambar`) VALUES
(6, 'sadsad', 'Lorem', '2023-08-10', 'LA_waterpark.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `forum_anak`
--

CREATE TABLE `forum_anak` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `keterangan` varchar(500) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum_anak`
--

INSERT INTO `forum_anak` (`id`, `nama`, `jabatan`, `keterangan`) VALUES
(7, 'PUTRI KAMILA NAFASIHA', 'KETUA UMUM', ''),
(8, 'KAKA AFRIZIANO', 'KETUA 1', ''),
(9, 'CITRA BERLIANA LINDA SARI', 'KETUA 2', ''),
(10, 'MARISA', 'SEKRETARIS 1', ''),
(11, 'ACTAVIA ANGGUN KINANTI', 'SEKRETARIS 2', ''),
(12, 'ANGGI DWI NUR ANISA', 'BENDAHARA 1', ''),
(13, 'MILA DENA ISTANTI', 'BENDAHARA 2', ''),
(14, 'ROBBY VAN PERSI DAFA MUHAMMAD DEFANI', 'KOORDINASI DIVISI', ''),
(15, 'BALQIS AL KAUTSAR AMALIA RIZKY', 'ANGGOTA DEVISI 1', ''),
(16, 'NAJWA ELFARA SYAFNIDAR IRSANDI', 'ANGGOTA DEVISI 1', ''),
(17, 'NAJWA CELSITA HASAFI', 'ANGGOTA DEVISI 1', ''),
(18, 'EKA FAUCHA', 'ANGGOTA DEVISI 1', ''),
(19, 'DIKA PUTRA PRATAMA ASYKASYA', 'ANGGOTA DEVISI 1', ''),
(20, 'ANGLETA DAHLIAN TIKA', 'ANGGOTA DEVISI 2', ''),
(21, 'MAULINDA ZANETA RAVVERIA', 'ANGGOTA DEVISI 2', ''),
(22, 'NEHA KARIMAH USWATUN KHASANAH', 'ANGGOTA DEVISI 2', ''),
(23, 'EVANDRA RADHIT RAMADHANI', 'ANGGOTA DEVISI 2', ''),
(24, 'ALIF ARI PRIYANGGA', 'ANGGOTA DEVISI 3', ''),
(25, 'REZA DWI PRAHMANA PUTRA ', 'ANGGOTA DEVISI 3', ''),
(26, 'NAFISAH SYAHRIFA RIZKY APRILIA ILYASA', 'ANGGOTA DEVISI 3', ''),
(27, 'RISKA NOVI SUSANTI', 'ANGGOTA DEVISI 3', ''),
(28, 'DINDA DWI SEKAR ARUM', 'ANGGOTA DEVISI 3', ''),
(29, 'RAMA FAHTRUL AZIZ AL QOFAR', 'ANGGOTA DEVISI 4', ''),
(30, 'CELSI BINTANG EFRI LIA', 'ANGGOTA DEVISI 4', ''),
(31, 'FEBRINA CINTA LARASATI', 'ANGGOTA DEVISI 4', ''),
(32, 'TAHTA RIZKYA PUTRA', 'ANGGOTA DEVISI 4', ''),
(33, 'MUHAMMAD RACHEL EGA VARIAN ADISTA', 'ANGGOTA DEVISI 4', ''),
(34, 'FABIAN RESA HERNANDA ', 'ANGGOTA DEVISI 5', ''),
(35, 'MUHAMMAD DAVA FAJAR FEBRIANSAH', 'ANGGOTA DEVISI 5', ''),
(36, 'MAULIDIA KARISMA RINJANI', 'ANGGOTA DEVISI 5', ''),
(37, 'SUCI ANANTA DEA', 'ANGGOTA DEVISI 5', ''),
(38, 'CHELFINO BIMA AGREA', 'ANGGOTA DEVISI 6', ''),
(39, 'ABIM KRISNA NUGRAHA', 'ANGGOTA DEVISI 6', ''),
(40, 'AINA NAJIYA RAHMA SHEVANCHA', 'ANGGOTA DEVISI 6', ''),
(41, 'AVICKA ASMARANI DIVA VARADILA', 'ANGGOTA DEVISI 6', ''),
(42, 'KHEISYA AURINDO ATHALIA', 'ANGGOTA DEVISI 6', '');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `gambar`) VALUES
(2503, 'coban.jpg'),
(2504, 'pemdes.jpg'),
(2505, 'sapi.jpg'),
(2506, 'taman_langit.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `karangtaruna`
--

CREATE TABLE `karangtaruna` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `keterangan` varchar(500) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karangtaruna`
--

INSERT INTO `karangtaruna` (`id`, `nama`, `jabatan`, `keterangan`) VALUES
(55, 'AHMAD IMAM BUCHORI', 'KETUA', ''),
(56, 'WIRIAN FEBRY ARISDA', 'SEKRETARIS 1', ''),
(57, 'ANGGI APRILLIA', 'SEKRETARIS 2', ''),
(58, 'ELSA NOVIASARI', 'BENDAHARA 1 ', ''),
(59, 'HANIFATUL DIYAH KHUMAIROH', 'BENDAHARA 2 ', ''),
(60, 'BAGUS FATKHUL HAMSYAH', 'KOORDINATOR DIVISI SDM & PERTANIAN ', ''),
(61, 'RIZKYTA BINTANG W', 'ANGGOTA DIVISI SDM & PERTANIAN ', ''),
(62, 'PONAJI', 'ANGGOTA DIVISI SDM & PERTANIAN ', ''),
(63, 'ISMI KHOIROTUL ISLAMI', 'ANGGOTA DIVISI SDM & PERTANIAN ', ''),
(64, 'SYAIFUL KHOIRON KATSIRO', 'KOORDINATOR DIVISI ORGANISASI DAN PENGKADERAN ', ''),
(65, 'YOGI BIMA PUTRA BUDIANSYAH', 'ANGGOTA DIVISI ORGANISASI DAN PENGKADERAN ', ''),
(66, 'ACHMAD MUCHYIDIN ', 'ANGGOTA DIVISI ORGANISASI DAN PENGKADERAN ', ''),
(67, 'ACHMAD YUSUF S', 'KOORDINATOR DIVISI LINGKUNGAN HIDUP', ''),
(68, 'ANGGA PRASETYO', 'ANGGOTA DIVISI LINGKUNGAN HIDUP', ''),
(69, 'EKA CELIA KHAIRANI', 'ANGGOTA DIVISI LINGKUNGAN HIDUP', ''),
(70, 'IRA MAYA AGISTINA', 'ANGGOTA DIVISI LINGKUNGAN HIDUP', ''),
(71, 'SEPTIAN DICKY ARDIANSYAH', 'ANGGOTA DIVISI LINGKUNGAN HIDUP', ''),
(72, 'BOBI IRAWAN', 'KOORDINATOR DIVISI PENDIDIKAN DAN KEAGAMAAN ', ''),
(73, 'APRILIA KHOLIVATUL ANISSA', 'ANGGOTA DIVISI PENDIDIKAN DAN KEAGAMAAN ', ''),
(74, 'DIA ANITIYA PUTRI', 'ANGGOTA DIVISI PENDIDIKAN DAN KEAGAMAAN', ''),
(75, 'FIRDA RAHMAWATI', 'ANGGOTA DIVISI PENDIDIKAN DAN KEAGAMAAN', ''),
(76, 'SALSABILA RERA ARTA MEFIA', 'ANGGOTA DIVISI PENDIDIKAN DAN KEAGAMAAN', ''),
(77, 'DICKY SETIAWAN', 'KOORDINATOR DIVISI KEWIRAUSAHAAN', ''),
(78, 'KHOIROTUL FAUZIAH', 'ANGGOTA DIVISI KEWIRAUSAHAAN', ''),
(79, 'RIAS UTAMI NINGSIH', 'ANGGOTA DIVISI KEWIRAUSAHAAN', ''),
(80, 'RAHMATIKA SINDY APRILIA', 'ANGGOTA DIVISI KEWIRAUSAHAAN', ''),
(81, 'ARIS AMINUDIN', 'KOORDINATOR DIVISI OLAHRAGA DAN SENI BUDAYA', ''),
(82, 'DWI PRAYUDA', 'ANGGOTA DIVISI OLAHRAGA DAN SENI BUDAYA', ''),
(83, 'IRA DWI SUSANTI', 'ANGGOTA DIVISI OLAHRAGA DAN SENI BUDAYA', ''),
(84, 'MEGA TRIANDI', 'ANGGOTA DIVISI OLAHRAGA DAN SENI BUDAYA', ''),
(85, ' HANDOKO', 'ANGGOTA DIVISI OLAHRAGA DAN SENI BUDAYA', ''),
(86, 'ROSTA MAULAHILMA', 'KOORDINATOR DIVISI INFORMASI DAN TEKNOLOGI ', ''),
(87, 'ALIFAUM MAHDYA YUSUF', 'ANGGOTA DIVISI INFORMASI DAN TEKNOLOGI ', ''),
(88, 'FANNY HAMZAH', 'ANGGOTA DIVISI INFORMASI DAN TEKNOLOGI ', '');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatandesa`
--

CREATE TABLE `kegiatandesa` (
  `id` int(11) NOT NULL,
  `nama` varchar(1000) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `waktu` varchar(25) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatandesa`
--

INSERT INTO `kegiatandesa` (`id`, `nama`, `alamat`, `waktu`) VALUES
(8, 'Alam', 'batu', 'Malam'),
(13, 'Asep', 'asdad', 'qwewqr');

-- --------------------------------------------------------

--
-- Table structure for table `kesenian`
--

CREATE TABLE `kesenian` (
  `id` int(11) NOT NULL,
  `judul` varchar(500) DEFAULT NULL,
  `deskripsi` varchar(10000) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `galeri` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kesenian`
--

INSERT INTO `kesenian` (`id`, `judul`, `deskripsi`, `gambar`, `galeri`) VALUES
(19, 'Kesenian Gunungsari', 'Desa Gunungsari masih melestarikan dan kental dengan keseniannya. Kesenian Desa Gunungsari yang masih dilestarikan hingga saat ini sangat beragam. Contoh kesenian yang masih dilestarikan di Desa Gunungsari seperti kesenian Bantengan, Banjari, Kuda Lumping, Terbang Jidor, Gambus, Wayang Kulit, Qasidah, Orkes Melayu, Sanduk, Sakerah, dan pencak silat. Keseniankesenian tersebut masih dijalankan oleh warga dengan didmapingi oleh pengasuh atau pembina agar nilai keseniannya tidak hilang. Bantengan adalah kesenian yang berasal dari Jawa Timur berupa pertunjukan yang menirukan hewan banteng dengan di iringi musik yang masih kental dengan nilai magis. Kesenian bantengan biasanya dipertunjukkan bersama dengan kesenian Kuda Lumping. Bantengan dan Kuda Lumping dipertunjukkan pada pawai-pawai desa, slametan desa, atau pada undangan acara tertentu.', 'kesenian.JPG', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `linmas`
--

CREATE TABLE `linmas` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `alamat` varchar(500) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `linmas`
--

INSERT INTO `linmas` (`id`, `nama`, `jabatan`, `alamat`) VALUES
(81, 'ANDI SUSILO', 'KASAT LINMAS', 'DSN. TALANGSARI RT.05 RW.05'),
(82, 'MARSUDJI', 'KASATGAS LINMAS', 'DSN. KAPRU RT.10 RW.03'),
(83, 'JUWANTONO', 'DANTON I', 'DSN. PAGERGUNUNG RT.05 RW.02'),
(84, 'YULIADI', 'DANTON II', 'DSN. KAPRU RT.03 RW.03'),
(85, 'MUHAMAD SUYITNO HS', 'DANTON III', 'DSN. KANDANGAN RT.06 RW.04'),
(86, 'WARSIDI', 'DARNU I', 'DSN. PAGERGUNUNG RT.02 RW.02'),
(87, 'CHOIRUL ANWAR', 'DARNU II', 'DSN. CLAKET RT.03 RW.09'),
(88, 'BAMBANG SUMAJI', 'DARNU III', 'DSN. TALANGREJO RT.02 RW.05'),
(89, 'YENI', 'DARNU IV', 'DSN. CELAKETRT.01 RW.09'),
(90, 'MUSTAKIM', 'DARNU V', 'DSN. JANTUR RT.03 RW.08'),
(91, 'BAMBANG BEKTI SUTRISNO', 'ANGGOTA', 'DSN. PRAMBATAN RT.01 RW.01'),
(92, 'ROFII', 'ANGGOTA', 'DSN. PAGERGUNUNG RT.05 RW.02'),
(93, 'TOTOK SETIONO', 'ANGGOTA', 'DSN. PAGERSARI RT.05 RW.01'),
(94, 'SUPRAPTO', 'ANGGOTA', 'DSN. PAGERSARI RT.05 RW.01'),
(95, 'BEJO', 'ANGGOTA', 'DSN. PAGERSARI RT.05 RW.01'),
(96, 'KASIONO', 'ANGGOTA', 'DSN. PAGERGUNUNG RT.07 RW.01'),
(97, 'MISKAT', 'ANGGOTA', 'DSN. PAGERGUNUNG RT.03 RW.02'),
(98, 'SUTRISNO', 'ANGGOTA', 'DSN. PAGERGUNUNG RT.07 RW.02'),
(99, 'SUFIGNYO', 'ANGGOTA', 'DSN. PAGERGUNUNG RT.05 RW.02'),
(100, 'SULKAN', 'ANGGOTA', 'DSN. PAGERGUNUNG RT.07 RW.01'),
(101, 'JAINURI', 'ANGGOTA', 'DSN. PAGERGUNUNG RT.06 RW.02'),
(102, 'YUDIYANTO', 'ANGGOTA', 'DSN. PAGERGUNUNG RT.06 RW.02'),
(103, 'AHMAD KOMARUDIN', 'ANGGOTA', 'DSN. PAGERGUNUNG RT.06 RW.02'),
(104, 'WINOTO', 'ANGGOTA', 'DSN. PAGERGUNUNG RT.06 RW.02'),
(105, 'WIDIANTONO', 'ANGGOTA', 'DSN. PAGERGUNUNG RT.07 RW.02'),
(106, 'MU’ALIM', 'ANGGOTA', 'DSN. PAGERGUNUNG RT.07 RW.02'),
(107, 'ROCHMAD', 'ANGGOTA', 'DSN. PAGERGUNUNG RT.07 RW.02'),
(108, 'NURATIM', 'ANGGOTA', 'DSN. PAGERGUNUNG RT.07 RW.02'),
(109, 'SULKAN', 'ANGGOTA', 'DSN. KAPRU RT.01 RW.03'),
(110, 'WANOTO', 'ANGGOTA', 'DSN. KAPRU RT.02 RW.03'),
(111, 'HERI SUSANTO', 'ANGGOTA', 'DSN. KAPRU RT.02 RW.03'),
(112, 'RAIBUN', 'ANGGOTA', 'DSN. KAPRU RT.04 RW.03'),
(113, 'WARSIN', 'ANGGOTA', 'DSN. KAPRU RT.04 RW.03'),
(114, 'TEGUH WANTONO', 'ANGGOTA', 'DSN. KAPRU RT.05 RW.03'),
(115, 'MAT SULIYAN', 'ANGGOTA', 'DSN. KAPRU RT.10 RW.03'),
(116, 'PUJIARI', 'ANGGOTA', 'DSN. KAPRU RT.09 RW.03'),
(117, 'BUDIANTO', 'ANGGOTA', 'DSN. KANDANGAN RT.01 RW.04'),
(118, 'JOYO PRONO', 'ANGGOTA', 'DSN. KANDANGAN RT.03 RW.04'),
(119, 'SUNARTO', 'ANGGOTA', 'DSN. KANDANGAN RT.04 RW.04'),
(120, 'SLAMET SYAFI’I', 'ANGGOTA', 'DSN. KANDANGAN RT.04 RW.04'),
(121, 'RUSDIANTO', 'ANGGOTA', 'DSN. KANDANGAN RT.05 RW.04'),
(122, 'SUWARNO', 'ANGGOTA', 'DSN. KANDANGAN RT.03 RW.04'),
(123, 'WIDARIYONO', 'ANGGOTA', 'DSN. KANDANGAN RT.07 RW.04'),
(124, 'AKHMAD', 'ANGGOTA', 'DSN. KANDANGAN RT.07 RW.04'),
(125, 'HADI NOTO', 'ANGGOTA', 'DSN. TALANGREJO RT.02 RW.05'),
(126, 'KLIMIN', 'ANGGOTA', 'DSN. TALANGREJO RT.02 RW.05'),
(127, 'SUMARDI', 'ANGGOTA', 'DSN. TALANGREJO RT.03 RW.05'),
(128, 'MUHAMAD SAMSUDIN', 'ANGGOTA', 'DSN. TALANGREJO RT.04 RW.05'),
(129, 'HARTOYO', 'ANGGOTA', 'DSN. TALANGREJO RT.04 RW.05'),
(130, 'SUPADI', 'ANGGOTA', 'DSN. TALANGREJO RT.04 RW.05'),
(131, 'SAIFUL ROJIKIN', 'ANGGOTA', 'DSN. TALANGSARI RT.06 RW.05'),
(132, 'JENI', 'ANGGOTA', 'DSN. BRUMBUNG RT.02 RW.06'),
(133, 'SUBIANTORO', 'ANGGOTA', 'DSN. BRUMBUNG RT.05 RW.06'),
(134, 'SUWANDI', 'ANGGOTA', 'DSN. BRUMBUNG RT.05 RW.06'),
(135, 'SURYANDOKO', 'ANGGOTA', 'DSN. BRUMBUNG RT.07 RW.06'),
(136, 'SUGITO', 'ANGGOTA', 'DSN. NGEBRUK RT.01 RW.07'),
(137, 'SUWAJI', 'ANGGOTA', 'DSN. NGEBRUK RT.01 RW.07'),
(138, 'WARSITO', 'ANGGOTA', 'DSN. NGEBRUK RT.02 RW.07'),
(139, 'SUGIARTO', 'ANGGOTA', 'DSN. JANTUR RT.01 RW.08'),
(140, 'KASIAMAT', 'ANGGOTA', 'DSN. JANTUR RT.01 RW.08'),
(141, 'MAT SULIYAN', 'ANGGOTA', 'DSN. JANTUR RT.02 RW.08'),
(142, 'SUYANTO', 'ANGGOTA', 'DSN. JANTUR RT.04 RW.08'),
(143, 'MOCHAMAD TARIONO', 'ANGGOTA', 'DSN. JANTUR RT.07 RW.08'),
(144, 'KUSMANTO', 'ANGGOTA', 'DSN. JANTUR RT.07 RW.08'),
(145, 'SUMARDI', 'ANGGOTA', 'DSN. CELAKET RT.02 RW.09'),
(146, 'SUPANDRI', 'ANGGOTA', 'DSN. CELAKET RT.03 RW.09'),
(147, 'MISELAN', 'ANGGOTA', 'DSN. CELAKET RT.03 RW.09'),
(148, 'ADI LASTONO', 'ANGGOTA', 'DSN. CELAKET RT.03 RW.09'),
(149, 'SUNAR', 'ANGGOTA', 'DSN. CELAKET RT.04 RW.09'),
(150, 'BAWON KARIONO', 'ANGGOTA', 'DSN. CELAKET RT.04 RW.09'),
(151, 'SUWOKO', 'ANGGOTA', 'DSN. BRAU RT.01 RW.10'),
(152, 'MARIONO', 'ANGGOTA', 'DSN. BRAU RT.02 RW.10'),
(153, 'BUDI', 'ANGGOTA', 'DSN. BRAU RT.04 RW.10'),
(154, 'ISMAIL', 'ANGGOTA', 'DSN. BRAU RT.04 RW.10'),
(155, 'NURALIM', 'ANGGOTA', 'DSN. BRAU RT.04 RW.10');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `nama`, `email`, `password`, `level`) VALUES
(6, 'admin1', 'admin1', 'admin1@gmail.com', 'admin1', '1'),
(8, 'admin2', 'admin2', 'admin2@gmail.com', 'admin2', '2'),
(9, 'admin3', 'admin3', 'admin3@gmail.com', 'admin3', '3'),
(10, 'admin4', 'admin4', 'admin4@gmail.com', 'admin4', '4');

-- --------------------------------------------------------

--
-- Table structure for table `lpmd`
--

CREATE TABLE `lpmd` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `keterangan` varchar(500) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lpmd`
--

INSERT INTO `lpmd` (`id`, `nama`, `jabatan`, `keterangan`) VALUES
(6, 'SAIFUL ANWAR', 'KETUA', ''),
(7, 'HANIF NUR FAUZI', 'SEKRETARIS', ''),
(8, 'SYAIFUL KHOIRON KASIRO', 'BENDAHARA ', ''),
(9, 'SUGENG PURNOMO', 'ANGGOTA', ''),
(10, 'HERI SUSANTO', 'ANGGOTA', ''),
(11, 'MUKHAMAD MUKHTAROM', 'ANGGOTA', ''),
(12, 'KUSYANTO', 'ANGGOTA', ''),
(13, 'RUSNADI', 'ANGGOTA', ''),
(14, 'SUPANDRI', 'ANGGOTA', ''),
(15, 'ANGGA PRASETIYO', 'ANGGOTA', '');

-- --------------------------------------------------------

--
-- Table structure for table `pelatihan`
--

CREATE TABLE `pelatihan` (
  `id` int(11) NOT NULL,
  `judul` varchar(500) DEFAULT NULL,
  `keterangan` varchar(500) DEFAULT NULL,
  `tanggal` varchar(255) DEFAULT '',
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelatihan`
--

INSERT INTO `pelatihan` (`id`, `judul`, `keterangan`, `tanggal`, `gambar`) VALUES
(11, 'wewqew', 'Lorem', '2023-08-10', 'ladoo_susu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pemdes`
--

CREATE TABLE `pemdes` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemdes`
--

INSERT INTO `pemdes` (`id`, `nama`, `jabatan`) VALUES
(7, 'ANDI SUSILO ADI', 'KEPALA DESA'),
(8, 'NUR IKHWAN', 'SEKRETARIS DESA '),
(9, 'RITA FITRIA', 'KAUR KEUANGAN'),
(10, 'YUYUN RENDRY A, SE', 'KAUR PERENCANAAN'),
(11, 'DWIYONO', 'KAUR TU/UMUM'),
(12, 'M. SOPII', 'KASI PEMERINTAHAN'),
(13, 'MARIONO', 'KASI KESEJAHTERAAN'),
(14, 'M. FAIQUL IHSAN, S.S.', 'KASI PELAYANAN'),
(15, 'TANDIYO UTOMO ', 'KEPALA DUSUN PAGERGUNUNG'),
(16, 'FAHMI HAMDANI S.AB', 'KEPALA DUSUN KAPRU'),
(17, 'DENI MUHAMMAD LUKMAN S.AP', 'KEPALA DUSUN JANTUR'),
(18, 'FENDI TRI HERMAWAN', 'KEPALA DUSUN BRAU');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id_pendidikan` int(11) NOT NULL,
  `tingkat_pendidikan` varchar(255) DEFAULT NULL,
  `jumlah_semua` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id_pendidikan`, `tingkat_pendidikan`, `jumlah_semua`) VALUES
(20, 'Tidak / Belum Sekolah', 1101),
(21, 'Belum Tamat SD / Sederajat', 932),
(22, 'SD / Sederajat', 2572),
(23, 'SMP / Sederajat', 1200),
(24, 'SMA / Sederajat', 1193),
(25, 'D1 / Sederajat', 42),
(26, 'D2 / Sederajat', 29),
(27, 'S1 / Sederajat', 160),
(28, 'S2 / Sederajat', 10),
(29, 'S3 / Sederajat', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pertanian`
--

CREATE TABLE `pertanian` (
  `id` int(11) NOT NULL,
  `judul` varchar(500) DEFAULT NULL,
  `deskripsi` varchar(10000) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `galeri` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pertanian`
--

INSERT INTO `pertanian` (`id`, `judul`, `deskripsi`, `gambar`, `galeri`) VALUES
(20, 'Pertanian Gunungsari', 'Desa Gunungsari merupakan desa yang terletak di daerah dataran tinggi, sehingga wilayahnya sangat cocok digunakan untuk lahan pertanian. Tanah di Desa Gunungsari ini juga cenderung subur sehingga jika dipersentasekan luas lahan subur mencapai 60,36 % dan tingkat kesuburan tanah sedang mencapai 39,64% dari luas tanah keseluruhan. Hal tersebut memberikan keunggulan tersendiri bagi masyarakat Desa Gunungsari untuk perkembangan sektor pertanian. Mayoritas penduduk Desa Gunungsari bermata pencaharian sebagai petani dan pedagang. Sebagian besar lahan Desa Gunungsari dimanfaatkan untuk lahan pertania dimana pada tahun 2023 terakhir luas lahan Desa Gunungsari yang dimanfaatkan untuk persawahan sebesar 57,81 % atau mencapai 184,340 hektar dan lahan yang dimanfaatkan sebagai ladang atau tegalan mencapai persentase 2,20 atau 7,009 hektar.', 'pertanian2.JPG', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `peternakan`
--

CREATE TABLE `peternakan` (
  `id` int(11) NOT NULL,
  `judul` varchar(500) DEFAULT NULL,
  `deskripsi` varchar(10000) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `galeri` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peternakan`
--

INSERT INTO `peternakan` (`id`, `judul`, `deskripsi`, `gambar`, `galeri`) VALUES
(19, 'Peternakan Sapi', 'Komoditas terbesar dalam sektor peternakan ini adalah peternakan sapi perah. Peternak sapi perah di Desa Gunungsari tergolong sangat besar dan menjanjikan. Dari tahun 2023 terakhir, jumlah populasi sapi perah yang diternak oleh warga desa mencapai 1.119 ekor sapi, dengan perbandingan sapi perah jantan sejumlah 249 ekor dan sapi perah betina sebanyak 870 ekor. Peternakan sapi perah di desa gungsari memasarkan hasil ternaknya melalui KUD desa. Pemasaran dari hasil ternak tersebut yang dipilih yaitu dengan dikirim ke pabrik-pabrik besar seperti susu greedfield dan indolacto', 'sapi.jpg', NULL),
(20, 'Peternakan Kambing dan Domba', 'Kambing dan domba juga menjadi pilihan masyarakat Desa Gunungsari dalam sektor peternakan. Jumlah kambing di Desa Gunungsari lebih sedikit dibandingkan dengan domba yaitu jumlah domba mencapai 107 jantan dan 239 betina. Sedangkan jumlah komoditas kambing yaitu 17 kambing jantan dan 67 betina. Komoditas kambing dan domba  oleh masyarakat desa Gunungsari biasanya dimanfaatkan yaitu dengan cara diperdagangkan.', 'kambing.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pkk`
--

CREATE TABLE `pkk` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `keterangan` varchar(500) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pkk`
--

INSERT INTO `pkk` (`id`, `nama`, `jabatan`, `keterangan`) VALUES
(5, 'ANDI SUSILO ', 'PEMBINA TP PKK', 'Aktif'),
(6, 'DEFFI ARMITA ', 'KETUA TP PKK', ''),
(7, 'SUGIARTI', 'SEKRETARIS', ''),
(8, 'SRI UTAMI', 'BENDAHARA ', ''),
(9, 'LILIK HARIYANTI', 'KETUA POKJA 1', ''),
(10, 'CHIKMATUL CHOIRIYAH', 'SEKRETARIS POKJA I', ''),
(11, 'DWI LELA YUNITA', 'BENDAHARA POKJA I', ''),
(12, 'SUYATEMI ', 'ANGGOTA POKJA I', ''),
(13, 'SRI NINGSIH ', 'ANGGOTA POKJA I', ''),
(14, 'KARIATI', 'KETUA POKJA II', ''),
(15, 'ADJENG LANI MIRANTI', 'SEKRETARIS POKJA II', ''),
(16, 'LILIK RAHAYU', 'BENDAHARA POKJA II', ''),
(17, 'SUNARIYAH', 'ANGGOTA POKJA II', ''),
(18, 'YUANITA YANUAR RACHMAD', 'ANGGOTA POKJA II', ''),
(19, 'SITI ROUDLOTUL JANNAH', 'KETUA POKJA III', ''),
(20, 'UMI NUR ARIFAH', 'SEKRETARIS POKJA III', ''),
(21, 'YULI WIDIANTI ', 'BENDAHARA POKJA III', ''),
(22, 'EKA VITA CRISTYANTI', 'ANGGOTA POKJA III', ''),
(23, 'SITI MASRUROH', 'ANGGOTA POKJA III', ''),
(24, 'ERNAWATI ', 'KETUA POKJA IV', ''),
(25, 'ANIS MUSAIKAH', 'SEKRETARIS POKJA IV ', ''),
(26, 'RATNA WULANDARI', 'BENDAHARA POKJA IV', ''),
(27, 'ARI KRISTINA', 'ANGGOTA POKJA IV', ''),
(28, 'SANTI NOVIA RAHMAWATI', 'ANGGOTA POKJA IV', '');

-- --------------------------------------------------------

--
-- Table structure for table `potensi`
--

CREATE TABLE `potensi` (
  `id` int(11) NOT NULL,
  `judul` varchar(500) DEFAULT NULL,
  `isi` varchar(10000) DEFAULT '''''',
  `tanggal` varchar(255) DEFAULT '',
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `potensi`
--

INSERT INTO `potensi` (`id`, `judul`, `isi`, `tanggal`, `gambar`) VALUES
(11, 'Bunga Mawar Potong', 'Gunungsari - potensi alam desa Gunungsari yang dapat menarik kunjungan wisatawan dari mancanegara. Potensi yang sangat menjanjikan untuk di unggulkan dalam menunjukkan eksistensi desa Gunungsari ini adalah Wisata Petik Bunga. \r\n\r\nBunga mawar menjadi ikonik bagi desa Gunungsari, karena menang desa Gunungsari terkenal dengan Wisata Petik Bunga Mawarnya.\r\n\r\nTahun 2011 lalu, desa ini bahkan sudah ditetapkan sebagai Desa Wisata Petik Mawar. Pengukuhan sebagai desa wisata itu membuat pertanian bunga mawar tampak makin menarik.', '29 August 2021', 'mawar.jpg'),
(12, 'Surganya Susu Sapi', 'Gunungsari - Perahan susu sapi menjadi sebuah ikon wisata yang dimiliki Dusun Brau. Dusun di Desa Gunungsari, Bumiaji, Kota Batu itu kini menjadi Desa Wisata. \r\n\r\nMayoritas, masyarakat di Dusun Brau memiliki mata pencaharian sebagai peternak sapi perah. Populasi sapi yang diternak warga, jumlahnya lebih banyak dibandingkan jumlah penduduknya.\r\n\r\nDinas Pariwisata Kota Batu memoles potensi yang ada di Dusun Brau sebagai ikon destinasi wisata baru di Kota Batu. Hal itu diafirmasi dengan diluncurkannya Wisata Edukasi Sapi Perah Brau pada Jum’at pagi (23/10).\r\nKepala Dinas Pariwisata Kota Batu, Arief As Siddiq mengaku, jika dusun ini berada di wilayah terpencil. Meski begitu, panorama alam yang disuguhkan begitu memukau.\r\n\r\nTopografinya yang berupa perbukitan, menawarkan keindahan alam yang menyatu dengan udara segar. Sehingga tempat ini memiliki nilai akseptabel untuk dihadirkan bagi wisatawan.\r\n\r\nKultur kekerabatan masih terasa kental, hal ini terlihat dari semangat gotong royong yang masih dijunjung oleh masyarakat Dusun Brau. Konsensus sosial semacam ini menjadi modal penting untuk menjadikan Dusun Brau sebagi ikon wisata baru di Kota Batu. \r\n\r\nPeluncuran Wisata Edukasi Sapi Perah Dusun Brau, diresmikan secara langsung oleh Walikota Batu Dewanti Rumpoko didampingi Wakil Walikota Batu, Punjul Santoso. Serta hadir pula Ketua Komisi B DPRD Kota Batu, Hari Danah Wahyono.\r\n\r\nDewanti mengatakan, Dusun Brau yang terletak di wilayah terpencil perlu didukung dengan fasilitas penunjang. Hal ini untuk mengatasi keterbatasan akses dan mempermudah wisatawan menuju ke destinasi wisata baru berbasis pemberdayaan desa.', '29 August 2021', 'sapi.jpg'),
(13, 'Wisata Petik Jeruk', 'Gunungsari - Wisata Petik Jeruk\r\n\r\n\"Pengunjung bisa menikmati tiga buah jeruk yang dipetik langsung dari pohonnya. Selain itu, pengunjung juga bisa membawa pulang buah jeruk yang dipetik sebanyak dua kilogram. Kalau pengunjung ingin berwisata petik jeruk ke Balitjestro setiap saat juga tidak ada masalah,\" kata Kepala Balitjestro, Djoko Susilo Utomo di Batu, Jatim, seperti dilansir Antara, Jumat 5 Agustus 2016.\r\n\r\nIa menuturkan, ada 242 varietas jeruk yang dihasilkan dari penelitian Balitjestro, baik yang sudah dilepas maupun belum. \"Kami juga terbuka bagi mahasiswa yang ingin magang atau praktik kerja lapangan (PKL) sekaligus menggali ilmu melalui pelatihan,\" ujar dia.\r\n\r\nSedangkan untuk masyarakat Kota Batu, Balitjestro sudah dua tahun terakhir ini memberikan bantuan bibit jeruk. \"Harapan kami Kota Batu ini tidak hanya dikenal sebagai sentra buah apel saja, tapi juga jeruknya,\" tutur dia. \r\n\r\nSebelumnya Wali Kota Batu Eddy Rumpoko meminta Balitjestro menjadi destinasi wisata alternatif di Kota Batu. Dengan demikian, Balitjestro tidak hanya melakukan penelitian, tapi juga difungsikan sebagai tempat wisata kebun atau lainnya karena potensinya cukup besar.\r\n\r\n\"Kami lihat potensi destinasi wisata kebun (petik jeruk) di Balitjestro ini sangat besar. Wisatawan bisa berkunjung ke Balitjestro tanpa mengganggu program penelitian tanaman yang dilakukan instansi tersebut,\" ucap dia.\r\n\r\nEddy mengatakan, wisatawan yang berkunjung ke Kota Batu rata-rata mencapai 4 juta per tahun. Dia berharap mereka tidak hanya menikmati wisata buatan dan wisata petik apel saja, tetapi juga bisa menikmati wisata petik jeruk yang dikembangkan Balitjestro.\r\n\r\n\"Kami yakin destinasi wisata petik jeruk di Balitjestro akan diminati wisatawan yang selama ini hanya fokus pada wisata buatan yang ada di Kota Batu,\" ujar Eddy.', '29 August 2021', 'jeruk.jpg'),
(14, 'Wisata Petik Sayur', 'Gunungsari - Wisata Petik Sayur\r\n\r\nDikenal sebagai kota wisata, ternyata Batu tidak hanya terkenal dengan wisata alam atau wisata buatannya saja loh. Ada agrowisata yang tak kalah menariknya untuk dikunjungi, sebut saja wisata petik apel di Batu Malang, petik strawberry, hingga wisata Petik Sayur di Desa Gunungsari. Agrowisata ini didirikan dengan tujuan untuk memperkenalkan sayuran organik yang lebih sehat daripada sayuran yang menggunakan pestisida. Dalam wisata agro ini wisatawan akan diajarkan bagaimana perbedaan sayuran organik dan bukan.\r\n\r\nWisatawan yang datang dapat mengikuti kegiatan petani mulai dari menanam sampai memanen sayuran yang telah siap untuk dipetik. Selain belajar cara bertanam, wisatawan juga dapat mengambil manfaat positif dari bersosialisasi dengan warga setempat. Jika tertarik, anda bisa mengambil paket wisata edukasi yang didalamnya sudah termasuk belajar membua puput organik hingga penanaman dan pemanenan. Anda juga bisa menikmati proses pengembangan lingkungan, yang mana warga desa Pujon Kidul memang berprofesi sebagai petani. Uniknya, mereka bukan saja memproduksi, namun juga merekonstruksi desanya dan mengembangkannya sebagai wisata edukasi.\r\n\r\nWisata edukasi seperti ini sangat baik diikuti, terutama bagi anak-anak, karena mereka bisa belajar hal baru yang tidak didaptkan di sekolah. Mereka juga dapat mengembangkan daya imajinasi serta motoriknya. Karena lokasinya yang tidak jauh dari pusat kota dan cenderung berdekatan dengan tempat rekreasi di Kota Batu lainnya, anda bisa mengajak si kecil dan keluarga untuk mampir sebentar ke alun-alun atau taman rekreasi.\r\n\r\nTentu liburan anda bersama si kecil akan terasa lebih menyenangkan, saat memutuskan untuk liburan di Kota Malang hingga seharian penuh atau mungkin menginap, jangan lupa untuk membawa pakaian hangat. Karena seperti yang kita tahu bahwa kota ini memiliki hawa dingin yang lumayan. Jangan sampai liburan anda berantakan karena kurangnya persiapan.', '29 August 2021', 'sayur.jpg'),
(15, 'Wisata Kuliner', 'Gunungsari - WIsata Kuliner, Selain komoditas pertanian dan peternak sapi perah, sebagian penduduk juga bekerja dan mengembangkan sektor industri kecil antara lain pembuatan kue ladu, kue opak, sari buah , keripik kentang, carangmas, stick susu sapi, kue dodol susu sapi, kue ladran susu sapi, yogurt dan masih banyak lagi. \r\n\r\n\r\n', '29 August 2021', 'kuliner.jpg'),
(16, 'Penghasil Lampion Aneka Warna', 'Gunungsari - Penghasil Lampion Aneka Warna, Selain komoditas pertanian dan peternak sapi perah, Desa Gunungsari juga terkenal akan kreasi dalam pembuatan lampion karakter aneka warna.\r\n\r\nRagam bentuk dan ukuran yang karyanya mampu menarik minat bagi para pengusaha wisata sehingga tidak hanya mampu menggeliatkan ekonomi kreatif berbasis desa wisata namun juga sekaligus membawa harum nama kota Batu khususnya Desa Gunungsari\r\n', '29 August 2021', 'lampion.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `level` varchar(500) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `level`) VALUES
(28, 'superadmin'),
(30, 'user1'),
(31, 'user2'),
(32, 'user3'),
(33, 'user4');

-- --------------------------------------------------------

--
-- Table structure for table `rtrw`
--

CREATE TABLE `rtrw` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `rw` varchar(255) DEFAULT NULL,
  `rt` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rtrw`
--

INSERT INTO `rtrw` (`id`, `nama`, `rw`, `rt`, `alamat`) VALUES
(7, 'AHMAD FAUZI', '01', '-', 'DSN. Pagersari RT.05 RW.01'),
(8, 'SUDI NURYANTO', '01', '01', 'DSN. Prambatan RT.01 RW.01'),
(9, 'TEGUH IRAWAN', '01', '02', 'DSN. Prambatan RT.02 RW.01'),
(10, 'MOHAMAD SUGI', '01', '03', 'DSN. Prambatan RT.03 RW.01'),
(11, 'SUPRIHADI', '01', '04', 'DSN. Prambatan RT.04 RW.01'),
(12, 'PURWANTO', '01', '05', 'DSN. Pagersari RT.05 RW.01'),
(13, 'AGUS ISMANTO', '01', '06', 'DSN. Pagergunung RT.06 RW.01'),
(14, 'LUCKY HERMAWAN', '01', '07', 'DSN. Pagergunung RT.07 RW.01'),
(15, 'MULYONO', '02', '-', 'DSN. Pagergunung RT.02 RW.02'),
(16, 'SETYO BUDI', '02', '01', 'DSN. Pagergunung RT.01 RW.02'),
(17, 'KASIYONO', '02', '02', 'DSN. Pagergunung RT.02 RW.02'),
(18, 'SUGENG MULYONO', '02', '03', 'DSN. Pagergunung RT.03 RW.02'),
(19, 'SUPARMAN', '02', '04', 'DSN. Pagergunung RT.04 RW.02'),
(20, 'HARRY VAN ZHIRENK', '02', '05', 'DSN. Pagergunung RT.05 RW.02'),
(21, 'IMAM SARONI', '02', '06', 'DSN. Pagergunung RT.06 RW.02'),
(22, 'JOKO SUWANTORO', '02', '07', 'DSN. Pagergunung RT.07 RW.02'),
(23, 'MUKHAMAD PUJIONO', '03', '-', 'DSN. Kapru RT.10 RW.03'),
(24, 'ACHMAD SUROSO', '03', '01', 'DSN. Kapru RT.01 RW.03'),
(25, 'USMAN ALI', '03', '02', 'DSN. Kapru RT.02 RW.03'),
(26, 'JOKO WINOTO', '03', '03', 'DSN. Kapru RT.03 RW.03'),
(27, 'DIDIK PRASETYO', '03', '04', 'DSN. Kapru RT.04 RW.03'),
(28, 'SLAMET PUJIONO', '03', '05', 'DSN. Kapru RT.05 RW.03'),
(29, 'YULIANTO', '03', '06', 'DSN. Kapru RT.06 RW.03'),
(30, 'AGUS SAIFUL ANWAR', '03', '07', 'DSN. Kapru RT.07 RW.03'),
(31, 'SUMANTRI', '03', '08', 'DSN. Kapru RT.08 RW.03'),
(32, 'NURI', '03', '09', 'DSN. Kapru RT.09 RW.03'),
(33, 'EFENDI', '03', '10', 'DSN. Kapru RT.10 RW.03'),
(34, 'RUDI HARTONO', '03', '11', 'DSN. Kapru RT.11 RW.03'),
(35, 'HADI SUPRAPTO', '04', '-', 'DSN. Kandangan RT.04 RW.04'),
(36, 'ADI MULYONO', '04', '01', 'DSN. Kandangan RT.01 RW.04'),
(37, 'SUHERMANTO', '04', '02', 'DSN. Kandangan RT.02 RW.04'),
(38, 'SUDI PAMUJI', '04', '03', 'DSN. Kandangan RT.02 RW.04'),
(39, 'EDI YULIANTO', '04', '04', 'DSN. Kandangan RT.04 RW.04'),
(40, 'MUJIARNO', '04', '05', 'DSN. Kandangan RT.05 RW.04'),
(41, 'MISWANTORO', '04', '06', 'DSN. Kandangan RT.06 RW.04'),
(42, 'WIYONO', '04', '07', 'DSN. Kandangan RT.07 RW.04'),
(43, 'SUTIONO', '05', '-', 'DSN. Talangrejo RT.04 RW.05'),
(44, 'SOSIO SAMBANG DIDIKYONO', '05', '01', 'DSN. Talangrejo RT.01 RW.05'),
(45, 'HERI KURNIAWAN', '05', '02', 'DSN. Talangrejo RT.02 RW.05'),
(46, 'OKI KRISTIANTO', '05', '03', 'DSN. Talangrejo RT.03 RW.05'),
(47, 'ARIF SETIAWAN', '05', '04', 'DSN. Talangrejo RT.04 RW.05'),
(48, 'SUWARDI', '05', '05', 'DSN. Talangrejo RT.05 RW.05'),
(49, 'SURAMIN MAS’UD', '05', '06', 'DSN. Talangsari RT.06 RW.05'),
(50, 'KOKO WIDIYATMOKO', '06', '-', 'DSN. Brumbung RT.03 RW.06'),
(51, 'SLAMET MISIANTO', '06', '01', 'DSN. Brumbung RT.01 RW.06'),
(52, 'SLAMET MUJIONO', '06', '02', 'DSN. Brumbung RT.02 RW.06'),
(53, 'SUPRIONO', '06', '03', 'DSN. Brumbung RT.03 RW.06'),
(54, 'NGADIONO', '06', '04', 'DSN. Brumbung RT.04 RW.06'),
(55, 'SUWANDI', '06', '05', 'DSN. Brumbung RT.05 RW.06'),
(56, 'NYONO', '06', '06', 'DSN. Brumbung RT.06 RW.06'),
(57, 'FEBRIANSYAH RAMADANI', '06', '07', 'DSN. Brumbung RT.07 RW.06'),
(58, 'SUHERWANTO', '07', '-', 'DSN. Ngebruk RT.01 RW.07'),
(59, 'HADI LUKMAN', '07', '01', 'DSN. Ngebruk RT.01 RW.07'),
(60, 'M SUNTARI ANDREANSA', '07', '02', 'DSN. Ngebruk RT.02 RW.07'),
(61, 'ABDUL MUHAMAD SOLEH', '07', '03', 'DSN. Ngebruk RT.03 RW.07'),
(62, 'HADI SISWOYO', '08', '-', 'DSN. Ngebruk RT.03 RW.07'),
(63, 'JUMALI', '08', '01', 'DSN. Jantur RT.01 RW.07'),
(64, 'SUTRISNO', '08', '02', 'DSN. Jantur RT.02 RW.07'),
(65, 'SUGENG PAMUDJI', '08', '03', 'DSN. Jantur RT.03 RW.07'),
(66, 'ANDRI PUJI SANTOSO', '08', '04', 'DSN. Jantur RT.04 RW.07'),
(67, 'SUGIANTO', '08', '05', 'DSN. Jantur RT.05 RW.07'),
(68, 'IWAN MASHUDI', '08', '06', 'DSN. Jantur RT.06 RW.07'),
(69, 'NURHADI', '08', '07', 'DSN. Jantur RT.07 RW.07'),
(70, 'TANG AGUS SLAMET', '09', '-', 'DSN. Claket RT.03 RW.07'),
(71, 'RAHMAD', '09', '01', 'DSN. Claket RT.01 RW.07'),
(72, 'ANWAR', '09', '02', 'DSN. Claket RT.01 RW.07'),
(73, 'MOCHAMAD JALALUDIN', '09', '03', 'DSN. Claket RT.03 RW.07'),
(74, 'HERI RUDIONO', '09', '04', 'DSN. Claket RT.04 RW.07'),
(75, 'SUPRIONO', '10', '-', 'DSN. Brau RT.01 RW.10'),
(76, 'NUR CAHYO', '10', '01', 'DSN. Brau RT.01 RW.10'),
(77, 'KARIYAN', '10', '02', 'DSN. Brau RT.02 RW.10'),
(78, 'DIKY DWI PRASETYO', '10', '03', 'DSN. Brau RT.03 RW.10'),
(79, 'ASMANU', '10', '04', 'DSN. Brau RT.04 RW.10');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id`, `nama`, `username`, `password`, `level`) VALUES
(3, 'nevy', 'admin', '123', 'superadmin'),
(7, 'Rizaldy', 'admin1', '123', 'superadmin'),
(0, 'Adit', 'admin12', '123', 'superadmin'),
(0, 'Krisna', 'admin13', '123', 'superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `umkm`
--

CREATE TABLE `umkm` (
  `id` int(11) NOT NULL,
  `judul` varchar(500) DEFAULT NULL,
  `deskripsi` varchar(10000) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `galeri` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `umkm`
--

INSERT INTO `umkm` (`id`, `judul`, `deskripsi`, `gambar`, `galeri`) VALUES
(18, 'Kue Ladu', 'Desa Gunungsari juga terkenal dengan UMKM nya yaitu produk makanan ringan kue ladu. Kue ladu adalah makanan ringan khas gunungsari yang berbahan dasar beras ketan. Kue ladu biasanya dimakan atau disuguhkan sebagai makanan tradisional Kota Batu saat lebaran menjelang. Pembuatannya pun masih menggunakan cara tradisional yaitu dengan cara menumbuk beras ketan di batu lumping yang kemudian dijemur lalu di oven. UMKM di Desa Gunungsari sudah cukup berkembang karena telah menjual produk tersebut secara langsung sehingga telah ada pasarnya sendiri atau target pembeli tetap. UMKM berupa produk kue ladu ini dapat lebih berkembang jika dijual secara online juga melalui beberapa platform.', 'ladoo_susu.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `email`, `nama`, `foto`) VALUES
(6, 'user1111', 'user1@gmail.com', 'Deni', '');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id` int(11) NOT NULL,
  `judul` varchar(500) DEFAULT '',
  `deskripsi` varchar(10000) DEFAULT '',
  `gambar` varchar(100) DEFAULT NULL,
  `galeri` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id`, `judul`, `deskripsi`, `gambar`, `galeri`) VALUES
(13, 'Wisata Petik Mawar', 'Pada gambar diatas ada tempat wisata yaitu Wisata Petik Mawar. Wisata Petik Mawar jadi salah satu ikon di desa Gunungsari. Sebuah perkebunan  luas yang asri, sejuk, dan teduh ini dipenuhi oleh beragam jenis bunga. Bunga yang umum ditemukan di sini misalnya, mawar, matahari, terompet, krisan, dan sepatu.', 'petik_mawar.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `w_administratif`
--

CREATE TABLE `w_administratif` (
  `id` int(11) NOT NULL,
  `jumlah_kk` int(100) DEFAULT NULL,
  `jumlah_lakilaki` int(100) DEFAULT NULL,
  `jumlah_perempuan` int(100) DEFAULT NULL,
  `jumlah_jiwa` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `w_administratif`
--

INSERT INTO `w_administratif` (`id`, `jumlah_kk`, `jumlah_lakilaki`, `jumlah_perempuan`, `jumlah_jiwa`) VALUES
(22, 2264, 3649, 3591, 7240);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apbd`
--
ALTER TABLE `apbd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beranda`
--
ALTER TABLE `beranda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bpd`
--
ALTER TABLE `bpd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_anak`
--
ALTER TABLE `forum_anak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karangtaruna`
--
ALTER TABLE `karangtaruna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatandesa`
--
ALTER TABLE `kegiatandesa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kesenian`
--
ALTER TABLE `kesenian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `linmas`
--
ALTER TABLE `linmas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lpmd`
--
ALTER TABLE `lpmd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelatihan`
--
ALTER TABLE `pelatihan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemdes`
--
ALTER TABLE `pemdes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indexes for table `pertanian`
--
ALTER TABLE `pertanian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peternakan`
--
ALTER TABLE `peternakan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pkk`
--
ALTER TABLE `pkk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `potensi`
--
ALTER TABLE `potensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rtrw`
--
ALTER TABLE `rtrw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `umkm`
--
ALTER TABLE `umkm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `w_administratif`
--
ALTER TABLE `w_administratif`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cluster` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agama`
--
ALTER TABLE `agama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `apbd`
--
ALTER TABLE `apbd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `beranda`
--
ALTER TABLE `beranda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `bpd`
--
ALTER TABLE `bpd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `forum_anak`
--
ALTER TABLE `forum_anak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2508;

--
-- AUTO_INCREMENT for table `karangtaruna`
--
ALTER TABLE `karangtaruna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `kegiatandesa`
--
ALTER TABLE `kegiatandesa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kesenian`
--
ALTER TABLE `kesenian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `linmas`
--
ALTER TABLE `linmas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `lpmd`
--
ALTER TABLE `lpmd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pelatihan`
--
ALTER TABLE `pelatihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pemdes`
--
ALTER TABLE `pemdes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `pertanian`
--
ALTER TABLE `pertanian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `peternakan`
--
ALTER TABLE `peternakan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pkk`
--
ALTER TABLE `pkk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `potensi`
--
ALTER TABLE `potensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `rtrw`
--
ALTER TABLE `rtrw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `umkm`
--
ALTER TABLE `umkm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `w_administratif`
--
ALTER TABLE `w_administratif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
