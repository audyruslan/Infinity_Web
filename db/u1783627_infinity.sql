-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 23, 2022 at 10:25 PM
-- Server version: 10.5.15-MariaDB-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u1783627_infinity`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_det_users`
--

CREATE TABLE `tb_det_users` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `education` text NOT NULL,
  `location` text NOT NULL,
  `skill` text NOT NULL,
  `notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id` int(11) NOT NULL,
  `nama_jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id`, `nama_jabatan`) VALUES
(1, 'Direktur'),
(2, 'Manajer'),
(3, 'Drafter'),
(4, 'Supervisior'),
(5, 'Admin dan Legal'),
(6, 'Marketing Freelancer'),
(7, 'IT Support'),
(8, 'HRD'),
(9, 'Drafter Freelance'),
(10, 'Marketing'),
(11, 'Content Creator'),
(12, 'Tenaga Teknik (Pengawas)'),
(14, 'Tenaga Teknik'),
(15, 'Leader Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `tb_landing_about`
--

CREATE TABLE `tb_landing_about` (
  `id` int(11) NOT NULL,
  `about_1` text NOT NULL,
  `about_2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_landing_about`
--

INSERT INTO `tb_landing_about` (`id`, `about_1`, `about_2`) VALUES
(1, 'Kami hadir, siap membantu segala kebutuhan Anda di bidang Properti, dengan berbagai macam project yang tidak terbatas, Mulai dai pelayanan Jasa Desain Property, Jasa Konstruksi Property, Dan Jual-Beli Property, Hingga Seluruh kegiatan Kerjasama Property, Tentunya Hal ini guna membantu memenuhi keinginan Anda.', 'Fungsi utama Infinity Project Property menjadi solusi bagi masyarakat untuk memenuhi kebutuhan akan properti dan sekaligus menjadi mitra terbaik untuk bisnis property, yang tentunya hal ini ditangani oleh tenaga ahli dibidangnya.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_landing_faq`
--

CREATE TABLE `tb_landing_faq` (
  `id` int(11) NOT NULL,
  `questions` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_landing_faq`
--

INSERT INTO `tb_landing_faq` (`id`, `questions`, `deskripsi`) VALUES
(1, 'Apa itu Infinity Project Property ?', 'Hai, Selamat Datang di Infinity Prject Property! Anda Sedang ingin membangun rumah impian anda? Tapi, bingung karena design Konstruksi anda tidak sesuai dengan Harapan. Infinity Project Property siap menjadi Solusi Kebutuhan Property Anda! Infinity Project Property adalah sebuah Team Agency yang berfokus bergerak dibidang Perencanaan, Pembangunan dan Pemasaran.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_landing_jumbotron`
--

CREATE TABLE `tb_landing_jumbotron` (
  `id` int(11) NOT NULL,
  `heading_1` text NOT NULL,
  `heading_2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_landing_jumbotron`
--

INSERT INTO `tb_landing_jumbotron` (`id`, `heading_1`, `heading_2`) VALUES
(1, 'Find Real Estate and Get Your Dream Space', 'development planning and property design solutions for an easier life');

-- --------------------------------------------------------

--
-- Table structure for table `tb_landing_logo`
--

CREATE TABLE `tb_landing_logo` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_landing_logo`
--

INSERT INTO `tb_landing_logo` (`id`, `logo`) VALUES
(13, 'CKS copy.jpg'),
(14, 'Barraq Jaya.jpg'),
(15, 'Griya Banua Ntodea.png'),
(16, 'logo pngd.png'),
(17, 'Logo.png'),
(19, 'LiveinurHome.png'),
(21, 'Nanda Bumi.png'),
(22, 'Radja Property.jpeg'),
(23, 'Tripta Inti Solusindo.jpeg'),
(24, 'Banua Project.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_landing_team`
--

CREATE TABLE `tb_landing_team` (
  `id` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `fb_link` text NOT NULL,
  `wa_link` text NOT NULL,
  `ig_link` text NOT NULL,
  `img_card` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_landing_team`
--

INSERT INTO `tb_landing_team` (`id`, `id_jabatan`, `nama_lengkap`, `fb_link`, `wa_link`, `ig_link`, `img_card`) VALUES
(2, 1, 'Steviany Hasan Eky', '', '', '', 'Steviany Hasan Eky.jpg'),
(3, 2, 'Awaludin', '', '', '', 'Ka Awwal.jpg'),
(15, 5, 'Juliana', '', '', '', 'Juliana.jpg'),
(22, 14, 'Dawiah Kamaruddin', '', '', '', 'Dawiah Kamaruddin.jpg'),
(23, 14, 'Moh. Rahman Hidayat ', '', '', '', 'Moh. Rahmat Hidayat.jpg'),
(24, 10, 'Hijrah', '', '', '', 'Hijrah.jpg'),
(25, 10, 'Sitti Nuradha Wati S', '', '', '', 'Sitti Nuradha Wati S.jpg'),
(26, 10, 'Ayuni', '', '', '', 'Ayuni.jpg'),
(28, 11, 'Selviana', '', '', '', 'Selviana.jpg'),
(30, 7, 'Moh Thoriq Wajedi', '', '', '', 'Moh Thoriq Wajedi.jpg'),
(31, 7, 'Erwin Arfianto', '', '', '', 'Erwin Arfianto.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_landing_testi`
--

CREATE TABLE `tb_landing_testi` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `ulasan` text NOT NULL,
  `img_testi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_landing_testi`
--

INSERT INTO `tb_landing_testi` (`id`, `nama_lengkap`, `pekerjaan`, `ulasan`, `img_testi`) VALUES
(1, 'Sugiono', 'Wirausaha, Kota Palu', 'Jasa Desain sangat memuaskan dan bekerja sangat baik, gambarnya sangat bagus dan cukup jelas, di selesaikan tepat waktu.', 'pak sugiono.jpg'),
(2, 'Sely Olvitasari', 'Mahasiswa, Kota Palu', 'infinity project property telah mendesain sesuai apa yang aku impikan hasil nya sangat memuaskan aku suka sekali dengan desainya terimakasih banyak telah mewujudkan yang selama ini pernah di bayangkan.', 'sely.jpg'),
(4, 'Ardiansyah', 'Driver', 'Terimakasih Infinity Project Property\r\nTelah membantu saya untuk mencari tanah sesuai kebutuhan saya , dan telah memberikan begitu banyak sekali kemudahan dalam proses pembelian tanahnya...dan sangat merasa terbantuðŸ˜ŠðŸ™', 'ardiansyah.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_presensi`
--

CREATE TABLE `tb_presensi` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `tgl_presensi` date NOT NULL,
  `time_presensi` time NOT NULL,
  `hadir_presensi` int(11) NOT NULL,
  `izin_presensi` int(11) NOT NULL,
  `alpa_presensi` int(11) NOT NULL,
  `sakit_presensi` int(11) NOT NULL,
  `barcode` text NOT NULL,
  `ket_presensi` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_presensi`
--

INSERT INTO `tb_presensi` (`id`, `id_user`, `id_jabatan`, `tgl_presensi`, `time_presensi`, `hadir_presensi`, `izin_presensi`, `alpa_presensi`, `sakit_presensi`, `barcode`, `ket_presensi`) VALUES
(4, 3, 7, '2022-05-30', '08:00:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(5, 3, 7, '2022-06-01', '08:00:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(6, 10, 8, '2022-06-03', '09:00:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(7, 12, 3, '2022-06-03', '09:00:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(8, 13, 10, '2022-06-03', '09:00:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(9, 15, 11, '2022-06-03', '10:05:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(10, 11, 5, '2022-06-03', '09:13:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(11, 12, 3, '2022-06-04', '09:04:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(12, 10, 8, '2022-06-04', '09:14:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(13, 11, 5, '2022-06-04', '08:56:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(14, 11, 5, '2022-06-04', '08:59:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(15, 14, 3, '2022-06-04', '09:11:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(16, 13, 10, '2022-06-04', '09:25:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(17, 15, 11, '2022-06-04', '09:24:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(18, 14, 3, '2022-06-06', '09:17:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(19, 10, 8, '2022-06-06', '09:05:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(20, 12, 3, '2022-06-06', '09:02:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(21, 11, 5, '2022-06-06', '09:05:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(22, 13, 10, '2022-06-06', '09:40:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(23, 12, 3, '2022-06-07', '09:05:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(24, 10, 8, '2022-06-07', '09:06:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(25, 11, 5, '2022-06-07', '09:04:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(26, 14, 3, '2022-06-07', '09:03:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(27, 9, 4, '2022-06-07', '09:12:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(28, 3, 7, '2022-06-08', '08:00:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(29, 11, 5, '2022-06-08', '09:05:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(30, 14, 3, '2022-06-08', '09:11:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(31, 12, 3, '2022-06-08', '09:07:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(32, 9, 4, '2022-06-08', '09:23:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(33, 0, 0, '2022-06-08', '23:50:41', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(34, 0, 0, '2022-06-08', '23:51:57', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(35, 3, 7, '2022-06-08', '08:00:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(36, 3, 7, '2022-06-09', '08:00:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(37, 10, 8, '2022-06-09', '08:55:38', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(38, 12, 3, '2022-06-09', '09:08:47', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(39, 14, 3, '2022-06-09', '09:34:05', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(40, 12, 3, '2022-06-10', '08:52:40', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(41, 11, 5, '2022-06-10', '08:54:38', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(42, 0, 0, '2022-06-10', '08:58:35', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(43, 10, 8, '2022-06-10', '09:09:11', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(44, 9, 4, '2022-06-10', '09:10:42', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(45, 16, 10, '2022-06-10', '09:34:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(46, 11, 5, '2022-06-11', '09:02:31', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(47, 12, 3, '2022-06-11', '09:03:22', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(48, 14, 3, '2022-06-11', '09:09:01', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(49, 16, 10, '2022-06-11', '10:04:32', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(50, 12, 3, '2022-06-13', '08:41:56', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(51, 14, 3, '2022-06-13', '09:14:32', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(52, 11, 5, '2022-06-13', '09:32:26', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(53, 0, 0, '2022-06-13', '10:50:24', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(54, 13, 10, '2022-06-13', '10:53:19', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(55, 11, 5, '2022-06-14', '08:56:47', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(56, 12, 3, '2022-06-14', '09:01:29', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(57, 10, 8, '2022-06-14', '09:03:36', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(58, 0, 0, '2022-06-14', '09:22:10', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(59, 14, 3, '2022-06-14', '09:23:27', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(60, 16, 10, '2022-06-14', '09:24:25', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(61, 12, 3, '2022-06-15', '08:52:40', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(62, 14, 3, '2022-06-15', '09:02:59', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(63, 10, 8, '2022-06-15', '09:04:42', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(64, 11, 5, '2022-06-15', '09:05:02', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(65, 16, 10, '2022-06-15', '09:56:03', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(66, 3, 7, '2022-06-02', '08:00:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(67, 3, 7, '2022-06-03', '08:00:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(68, 3, 7, '2022-06-04', '08:00:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(69, 3, 7, '2022-06-06', '08:00:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(70, 3, 7, '2022-06-07', '08:00:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(71, 3, 7, '2022-06-10', '08:00:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(72, 3, 7, '2022-06-11', '08:00:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(73, 3, 7, '2022-06-13', '08:00:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(74, 3, 7, '2022-06-08', '08:00:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(75, 3, 7, '2022-06-08', '08:00:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(76, 3, 7, '2022-06-14', '08:00:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(77, 3, 7, '2022-06-15', '08:00:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(78, 10, 8, '2022-06-08', '08:20:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(79, 10, 8, '2022-06-13', '09:07:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(80, 10, 8, '2022-06-11', '09:09:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(81, 14, 3, '2022-06-16', '08:42:11', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(82, 12, 3, '2022-06-16', '08:42:16', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(83, 12, 3, '2022-06-17', '08:52:43', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(84, 10, 8, '2022-06-17', '09:09:19', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(85, 11, 5, '2022-06-17', '09:10:38', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(86, 14, 3, '2022-06-17', '09:12:53', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(87, 11, 5, '2022-06-18', '08:58:37', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(88, 12, 3, '2022-06-18', '08:59:21', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(89, 14, 3, '2022-06-18', '09:31:01', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(90, 0, 0, '2022-06-18', '09:32:04', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(91, 0, 0, '2022-06-18', '09:33:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(92, 15, 11, '2022-06-18', '09:34:38', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(93, 12, 3, '2022-06-20', '09:02:22', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(94, 14, 3, '2022-06-20', '09:08:44', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(95, 11, 5, '2022-06-20', '16:28:56', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(96, 16, 10, '2022-06-20', '09:05:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(97, 12, 3, '2022-06-21', '08:58:10', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(98, 14, 3, '2022-06-21', '09:07:01', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(99, 14, 3, '2022-06-22', '09:05:56', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(100, 12, 3, '2022-06-23', '08:59:30', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(101, 14, 3, '2022-06-23', '09:07:55', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(102, 16, 10, '2022-06-23', '09:08:02', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(103, 12, 3, '2022-06-22', '01:08:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(104, 16, 10, '2022-06-21', '09:15:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(105, 16, 10, '2022-06-22', '09:20:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(106, 16, 10, '2022-06-16', '09:10:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(107, 16, 10, '2022-06-18', '09:25:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(108, 16, 10, '2022-06-09', '09:03:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(109, 16, 10, '2022-06-13', '11:00:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(110, 3, 7, '2022-06-16', '08:00:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(111, 3, 7, '2022-06-17', '08:00:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(112, 3, 7, '2022-06-18', '08:00:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(113, 3, 7, '2022-06-20', '08:00:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(114, 3, 7, '2022-06-21', '08:00:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(115, 3, 7, '2022-06-22', '08:00:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(116, 3, 7, '2022-06-23', '08:00:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(117, 14, 3, '2022-06-02', '09:06:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(118, 14, 3, '2022-06-03', '09:03:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(119, 14, 3, '2022-06-10', '09:05:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(120, 11, 5, '2022-06-09', '09:07:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(121, 11, 5, '2022-06-16', '09:07:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(122, 11, 5, '2022-06-20', '08:57:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(123, 11, 5, '2022-06-21', '08:59:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(124, 11, 5, '2022-06-22', '09:41:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(125, 10, 8, '2022-06-23', '09:24:36', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(126, 11, 5, '2022-06-23', '09:24:42', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(127, 11, 5, '2022-06-01', '08:57:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(128, 11, 5, '2022-06-02', '08:58:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(129, 12, 3, '2022-06-24', '08:52:27', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(130, 16, 10, '2022-06-24', '09:14:56', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(131, 10, 8, '2022-06-24', '09:15:17', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(132, 14, 3, '2022-06-24', '09:16:10', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(133, 16, 10, '2022-06-25', '08:51:22', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(134, 10, 8, '2022-06-25', '08:57:42', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(135, 12, 3, '2022-06-25', '09:09:46', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(136, 14, 3, '2022-06-25', '14:23:19', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(137, 11, 5, '2022-06-27', '08:50:12', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(138, 12, 3, '2022-06-27', '09:05:03', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(139, 14, 3, '2022-06-27', '09:05:38', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(140, 16, 10, '2022-06-27', '09:06:21', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(141, 12, 3, '2022-06-28', '09:06:56', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(142, 11, 5, '2022-06-28', '09:08:09', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(143, 16, 10, '2022-06-28', '09:45:40', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(144, 11, 5, '2022-06-29', '08:52:27', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(145, 14, 3, '2022-06-29', '08:57:04', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(146, 12, 3, '2022-06-29', '09:19:27', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(147, 12, 3, '2022-06-30', '09:01:10', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(148, 12, 3, '2022-06-30', '09:01:29', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(149, 14, 3, '2022-06-30', '09:02:18', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(150, 16, 10, '2022-06-30', '09:24:37', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(151, 11, 5, '2022-06-25', '08:58:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(152, 11, 5, '2022-06-30', '09:07:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(153, 16, 10, '2022-07-01', '08:37:48', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(154, 10, 8, '2022-07-01', '08:58:53', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(155, 14, 3, '2022-07-01', '09:00:40', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(156, 12, 3, '2022-07-01', '09:06:54', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(157, 11, 5, '2022-07-01', '09:07:34', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(158, 12, 3, '2022-07-02', '08:47:05', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(159, 16, 10, '2022-07-02', '08:58:23', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(160, 11, 5, '2022-07-02', '16:44:50', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(161, 0, 0, '2022-07-04', '08:58:42', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(162, 12, 3, '2022-07-04', '09:01:46', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(163, 14, 3, '2022-07-04', '09:05:29', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(164, 12, 3, '2022-07-05', '08:54:25', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(165, 14, 3, '2022-07-05', '09:00:22', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(166, 0, 0, '2022-07-05', '09:05:14', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(167, 14, 3, '2022-07-07', '08:45:54', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(168, 12, 3, '2022-07-07', '08:58:39', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(169, 0, 0, '2022-07-07', '09:09:59', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(170, 16, 10, '2022-07-07', '09:28:20', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(171, 14, 3, '2022-07-08', '08:40:30', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(172, 16, 10, '2022-07-08', '09:04:49', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(173, 12, 3, '2022-07-08', '09:05:59', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(174, 0, 0, '2022-07-08', '11:04:47', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(175, 14, 3, '2022-07-11', '08:45:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(176, 0, 0, '2022-07-11', '09:11:21', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(177, 0, 0, '2022-07-12', '08:47:56', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(178, 16, 10, '2022-07-12', '09:09:02', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(179, 12, 3, '2022-07-12', '12:52:32', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(180, 0, 0, '2022-07-13', '08:56:05', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(181, 14, 3, '2022-07-13', '09:01:39', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(182, 12, 3, '2022-07-14', '09:00:22', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(183, 14, 3, '2022-07-14', '09:08:23', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(184, 0, 0, '2022-07-14', '09:44:02', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(185, 12, 3, '2022-07-15', '08:44:47', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(186, 14, 3, '2022-07-15', '08:45:32', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(187, 0, 0, '2022-07-15', '11:28:08', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(188, 18, 10, '2022-07-16', '08:39:39', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(189, 19, 10, '2022-07-16', '08:40:24', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(190, 14, 3, '2022-07-16', '09:34:54', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(191, 16, 10, '2022-07-16', '09:40:31', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(192, 11, 5, '2022-07-16', '09:43:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(193, 18, 10, '2022-07-18', '08:41:37', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(194, 19, 10, '2022-07-18', '08:42:28', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(195, 14, 3, '2022-07-18', '08:44:07', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(196, 0, 0, '2022-07-18', '08:59:08', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(197, 16, 10, '2022-07-18', '09:22:06', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(198, 0, 0, '2022-07-19', '08:45:45', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(199, 0, 0, '2022-07-19', '08:46:03', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(200, 18, 10, '2022-07-19', '08:46:04', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(201, 12, 3, '2022-07-19', '08:57:34', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(202, 14, 3, '2022-07-19', '08:58:52', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(203, 0, 0, '2022-07-19', '09:06:29', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(204, 18, 10, '2022-07-20', '08:57:17', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(205, 19, 10, '2022-07-20', '08:57:58', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(206, 19, 10, '2022-07-21', '08:34:05', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(207, 18, 10, '2022-07-21', '08:34:09', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(208, 0, 0, '2022-07-21', '08:43:36', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(209, 18, 10, '2022-07-22', '08:45:20', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(210, 19, 10, '2022-07-22', '08:45:32', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(211, 0, 0, '2022-07-22', '09:02:26', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(212, 18, 10, '2022-07-25', '08:41:05', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(213, 19, 10, '2022-07-25', '08:41:31', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(214, 0, 0, '2022-07-25', '08:42:41', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(215, 12, 3, '2022-07-25', '08:48:47', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(216, 14, 3, '2022-07-25', '09:03:41', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(217, 18, 10, '2022-07-26', '08:41:31', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(218, 19, 10, '2022-07-26', '08:45:32', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(219, 19, 10, '2022-07-26', '08:45:40', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(220, 19, 10, '2022-07-26', '08:46:20', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(221, 12, 3, '2022-07-26', '08:56:29', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(222, 14, 3, '2022-07-26', '08:56:46', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(223, 16, 10, '2022-07-26', '08:57:02', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(224, 0, 0, '2022-07-26', '09:00:32', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(225, 19, 10, '2022-07-27', '08:42:04', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(226, 18, 10, '2022-07-27', '08:42:25', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(227, 14, 3, '2022-07-27', '08:50:07', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(228, 12, 3, '2022-07-27', '08:56:11', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(229, 0, 0, '2022-07-27', '09:03:45', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(230, 18, 10, '2022-07-28', '08:43:40', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(231, 19, 10, '2022-07-28', '08:44:53', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(232, 14, 3, '2022-07-28', '09:01:22', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(233, 12, 3, '2022-07-28', '09:07:01', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(234, 20, 12, '2022-07-28', '09:14:04', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(235, 0, 0, '2022-07-28', '09:48:34', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(236, 18, 10, '2022-07-29', '08:38:56', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(237, 19, 10, '2022-07-29', '08:39:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(238, 14, 3, '2022-07-29', '08:46:40', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(239, 12, 3, '2022-07-29', '08:49:31', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(240, 14, 3, '2022-08-01', '08:34:39', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(241, 18, 10, '2022-08-01', '08:35:43', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(242, 19, 10, '2022-08-01', '08:37:46', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(243, 12, 3, '2022-08-01', '09:11:05', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(244, 18, 10, '2022-08-02', '08:35:34', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(245, 19, 10, '2022-08-02', '08:35:44', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(246, 14, 3, '2022-08-02', '08:36:12', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(247, 10, 8, '2022-08-02', '08:55:14', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(248, 10, 8, '2022-08-02', '08:55:19', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(249, 12, 3, '2022-08-02', '08:56:32', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(250, 11, 5, '2022-08-02', '10:13:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(251, 18, 10, '2022-08-03', '08:29:55', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(252, 19, 10, '2022-08-03', '08:30:15', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(253, 14, 3, '2022-08-03', '08:38:53', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(254, 11, 5, '2022-08-03', '09:05:42', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(255, 16, 10, '2022-08-03', '09:06:53', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(256, 18, 10, '2022-08-04', '08:36:42', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(257, 19, 10, '2022-08-04', '08:37:30', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(258, 14, 3, '2022-08-04', '08:44:34', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(259, 10, 8, '2022-08-04', '08:53:29', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(260, 11, 5, '2022-08-04', '11:45:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(261, 14, 3, '2022-08-05', '08:12:24', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(262, 19, 10, '2022-08-05', '08:35:55', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(263, 18, 10, '2022-08-05', '08:36:37', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(264, 11, 5, '2022-08-05', '08:45:26', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(265, 0, 0, '2022-08-05', '09:06:29', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(266, 11, 5, '2022-08-01', '09:03:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(267, 18, 10, '2022-08-08', '08:41:43', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(268, 19, 10, '2022-08-08', '08:43:11', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(269, 11, 5, '2022-08-08', '08:51:28', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(270, 14, 3, '2022-08-08', '08:52:09', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(271, 0, 0, '2022-08-08', '09:04:45', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(272, 14, 3, '2022-08-09', '08:31:54', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(273, 18, 10, '2022-08-09', '08:37:44', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(274, 19, 10, '2022-08-09', '08:39:34', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(275, 10, 8, '2022-08-09', '08:56:21', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(276, 11, 5, '2022-08-09', '08:59:49', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(277, 0, 0, '2022-08-09', '09:06:41', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(278, 14, 3, '2022-08-10', '08:43:56', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(279, 18, 10, '2022-08-10', '08:48:30', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(280, 19, 10, '2022-08-10', '08:49:31', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(281, 10, 8, '2022-08-10', '09:04:22', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(282, 11, 5, '2022-08-10', '09:06:13', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(283, 0, 0, '2022-08-10', '09:10:08', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(284, 18, 10, '2022-08-11', '08:49:02', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(285, 19, 10, '2022-08-11', '08:49:06', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(286, 14, 3, '2022-08-11', '08:49:45', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(287, 10, 8, '2022-08-11', '09:02:50', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(288, 0, 0, '2022-08-11', '09:07:03', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(289, 18, 10, '2022-08-12', '08:41:17', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(290, 19, 10, '2022-08-12', '08:41:41', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(291, 11, 5, '2022-08-12', '08:46:36', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(292, 14, 3, '2022-08-12', '08:47:15', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(293, 21, 5, '2022-08-13', '08:38:37', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(294, 14, 3, '2022-08-13', '08:47:05', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(295, 18, 10, '2022-08-13', '08:59:39', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(296, 19, 10, '2022-08-13', '09:00:11', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(297, 0, 0, '2022-08-13', '09:03:58', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(298, 18, 10, '2022-08-15', '08:21:45', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(299, 19, 10, '2022-08-15', '08:21:55', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(300, 21, 5, '2022-08-15', '08:28:27', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(301, 14, 3, '2022-08-15', '08:40:32', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(302, 21, 5, '2022-08-16', '08:27:01', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(303, 18, 10, '2022-08-16', '08:40:39', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(304, 19, 10, '2022-08-16', '08:41:08', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(305, 14, 3, '2022-08-16', '08:42:40', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(306, 24, 15, '2022-08-16', '09:00:57', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(307, 14, 3, '2022-08-18', '07:46:02', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(308, 21, 5, '2022-08-18', '08:26:38', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(309, 18, 10, '2022-08-18', '08:36:33', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(310, 19, 10, '2022-08-18', '08:37:25', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(311, 24, 15, '2022-08-18', '08:56:43', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(312, 0, 0, '2022-08-18', '09:13:27', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(313, 18, 10, '2022-08-19', '08:25:23', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(314, 19, 10, '2022-08-19', '08:25:50', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(315, 21, 5, '2022-08-19', '08:28:50', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(316, 14, 3, '2022-08-19', '08:49:16', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(317, 24, 15, '2022-08-19', '09:01:44', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(318, 21, 5, '2022-08-22', '08:19:52', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(319, 14, 3, '2022-08-22', '08:35:39', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(320, 18, 10, '2022-08-22', '08:43:31', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(321, 19, 10, '2022-08-22', '08:44:10', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(322, 0, 0, '2022-08-22', '09:11:34', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(323, 24, 15, '2022-08-22', '11:16:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(324, 21, 5, '2022-08-23', '08:29:26', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(325, 14, 3, '2022-08-23', '08:38:07', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(326, 19, 10, '2022-08-23', '09:00:53', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(327, 18, 10, '2022-08-23', '09:01:24', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(328, 24, 15, '2022-08-23', '09:03:20', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(329, 0, 0, '2022-08-23', '09:18:15', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(330, 21, 5, '2022-08-24', '08:47:17', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(331, 18, 10, '2022-08-24', '08:55:36', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(332, 19, 10, '2022-08-24', '08:58:58', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(333, 25, 8, '2022-08-24', '09:05:47', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(334, 24, 15, '2022-08-24', '09:08:39', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(335, 14, 3, '2022-08-24', '09:11:36', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(336, 21, 5, '2022-08-25', '08:27:24', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(337, 18, 10, '2022-08-25', '08:31:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(338, 19, 10, '2022-08-25', '08:31:41', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(339, 14, 3, '2022-08-25', '08:54:13', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(340, 25, 8, '2022-08-25', '09:00:47', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(341, 24, 15, '2022-08-25', '09:36:18', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(342, 21, 5, '2022-08-26', '08:35:05', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(343, 14, 3, '2022-08-26', '08:46:20', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(344, 18, 10, '2022-08-26', '08:47:28', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(345, 19, 10, '2022-08-26', '08:48:05', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(346, 25, 8, '2022-08-26', '09:05:52', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(347, 24, 15, '2022-08-26', '09:08:33', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(348, 0, 0, '2022-08-26', '09:10:46', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(349, 21, 5, '2022-08-29', '08:22:36', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(350, 14, 3, '2022-08-29', '08:39:57', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(351, 22, 14, '2022-08-29', '08:50:02', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(352, 18, 10, '2022-08-29', '08:53:57', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(353, 19, 10, '2022-08-29', '08:54:32', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(354, 0, 0, '2022-08-29', '09:09:21', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(355, 24, 15, '2022-08-29', '09:09:55', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(356, 22, 14, '2022-08-30', '08:38:04', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(357, 14, 3, '2022-08-30', '08:38:45', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(358, 18, 10, '2022-08-30', '08:39:06', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(359, 19, 10, '2022-08-30', '08:39:16', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(360, 25, 8, '2022-08-30', '08:39:50', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(361, 24, 15, '2022-08-30', '09:08:01', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(362, 21, 5, '2022-08-31', '08:33:15', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(363, 14, 3, '2022-08-31', '08:33:21', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(364, 19, 10, '2022-08-31', '08:46:19', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(365, 18, 10, '2022-08-31', '08:47:27', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(366, 24, 15, '2022-08-31', '09:00:52', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(367, 22, 14, '2022-08-31', '09:01:23', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(368, 20, 12, '2022-08-31', '17:26:08', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(369, 21, 5, '2022-09-01', '08:28:43', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(370, 14, 3, '2022-09-01', '08:47:34', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(371, 22, 14, '2022-09-01', '08:49:27', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(372, 20, 12, '2022-09-01', '08:50:29', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(373, 24, 15, '2022-09-01', '08:57:43', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(374, 18, 10, '2022-09-01', '09:04:29', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(375, 19, 10, '2022-09-01', '09:04:34', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(376, 21, 5, '2022-09-02', '08:25:54', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(377, 14, 3, '2022-09-02', '08:51:28', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(378, 18, 10, '2022-09-02', '08:51:39', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(379, 19, 10, '2022-09-02', '08:52:18', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(380, 25, 8, '2022-09-02', '08:55:55', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(381, 20, 12, '2022-09-02', '09:07:39', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(382, 0, 0, '2022-09-02', '09:21:15', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(383, 21, 5, '2022-09-03', '08:29:20', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(384, 22, 14, '2022-09-03', '08:38:31', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(385, 14, 3, '2022-09-03', '08:38:48', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(386, 18, 10, '2022-09-03', '08:52:19', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(387, 19, 10, '2022-09-03', '08:54:05', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(388, 24, 15, '2022-09-03', '09:02:54', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(389, 20, 12, '2022-09-03', '09:09:15', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(390, 21, 5, '2022-09-05', '08:29:14', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(391, 14, 3, '2022-09-05', '08:30:28', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(392, 18, 10, '2022-09-05', '09:01:37', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(393, 19, 10, '2022-09-05', '09:03:47', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(394, 20, 12, '2022-09-05', '09:28:03', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(395, 21, 5, '2022-09-06', '08:29:01', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(396, 14, 3, '2022-09-06', '08:54:45', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(397, 18, 10, '2022-09-06', '08:55:16', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(398, 19, 10, '2022-09-06', '08:55:45', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(399, 21, 5, '2022-09-07', '08:29:08', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(400, 18, 10, '2022-09-07', '08:43:07', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(401, 19, 10, '2022-09-07', '08:43:42', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(402, 14, 3, '2022-09-07', '08:44:56', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(403, 25, 8, '2022-09-07', '08:48:39', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(404, 28, 10, '2022-09-07', '08:49:44', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(405, 22, 14, '2022-09-07', '08:53:11', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(406, 0, 0, '2022-09-07', '08:53:48', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(407, 21, 5, '2022-09-08', '08:27:15', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(408, 28, 10, '2022-09-08', '08:27:45', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(409, 18, 10, '2022-09-08', '08:39:27', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(410, 14, 3, '2022-09-08', '08:40:30', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(411, 19, 10, '2022-09-08', '08:41:22', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(412, 32, 11, '2022-09-08', '09:22:43', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(413, 21, 5, '2022-09-09', '08:26:38', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(414, 32, 11, '2022-09-09', '08:37:16', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(415, 28, 10, '2022-09-09', '08:45:07', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(416, 19, 10, '2022-09-09', '08:45:30', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(417, 18, 10, '2022-09-09', '08:45:38', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(418, 14, 3, '2022-09-09', '08:45:43', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(419, 22, 14, '2022-09-09', '08:46:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(420, 25, 8, '2022-09-09', '08:49:13', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(421, 0, 0, '2022-09-09', '09:01:19', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(422, 24, 15, '2022-09-09', '09:01:41', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(423, 21, 5, '2022-09-12', '08:31:08', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(424, 28, 10, '2022-09-12', '08:42:15', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(425, 0, 0, '2022-09-12', '08:44:07', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(426, 14, 3, '2022-09-12', '08:47:12', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(427, 14, 3, '2022-09-13', '08:04:32', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(428, 21, 5, '2022-09-13', '08:28:59', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(429, 22, 14, '2022-09-13', '08:33:51', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(430, 28, 10, '2022-09-13', '08:37:38', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(431, 18, 10, '2022-09-13', '08:46:23', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(432, 19, 10, '2022-09-13', '08:46:59', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(433, 0, 0, '2022-09-13', '08:51:37', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(434, 24, 15, '2022-09-13', '09:00:12', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(435, 21, 5, '2022-09-14', '08:32:54', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(436, 14, 3, '2022-09-14', '08:33:26', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(437, 28, 10, '2022-09-14', '08:33:53', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(438, 32, 11, '2022-09-14', '08:44:58', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(439, 18, 10, '2022-09-14', '08:50:22', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(440, 19, 10, '2022-09-14', '08:50:50', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(441, 21, 5, '2022-09-15', '08:34:22', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(442, 32, 11, '2022-09-15', '08:34:51', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(443, 22, 14, '2022-09-15', '08:34:58', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(444, 28, 10, '2022-09-15', '08:35:57', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(445, 14, 3, '2022-09-15', '08:46:36', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(446, 19, 10, '2022-09-15', '08:51:36', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(447, 18, 10, '2022-09-15', '08:52:04', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(448, 24, 15, '2022-09-15', '08:56:19', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(449, 28, 10, '2022-09-16', '08:31:53', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(450, 21, 5, '2022-09-16', '08:32:31', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(451, 32, 11, '2022-09-16', '08:41:22', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(452, 22, 14, '2022-09-16', '08:41:25', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(453, 14, 3, '2022-09-16', '08:44:28', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(454, 18, 10, '2022-09-16', '09:05:11', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(455, 19, 10, '2022-09-16', '09:05:23', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(456, 19, 10, '2022-09-17', '14:34:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(457, 21, 5, '2022-09-19', '08:31:24', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(458, 14, 3, '2022-09-19', '08:40:07', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(459, 32, 11, '2022-09-19', '08:42:26', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(460, 19, 10, '2022-09-19', '08:53:49', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(461, 18, 10, '2022-09-19', '08:54:26', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(462, 28, 10, '2022-09-19', '09:00:14', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(463, 14, 3, '2022-09-20', '08:24:24', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(464, 32, 11, '2022-09-20', '08:25:04', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(465, 21, 5, '2022-09-20', '08:29:37', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(466, 19, 10, '2022-09-20', '08:39:14', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(467, 18, 10, '2022-09-20', '08:39:34', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(468, 28, 10, '2022-09-20', '08:44:22', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(469, 32, 11, '2022-09-21', '08:23:06', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(470, 21, 5, '2022-09-21', '08:24:47', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(471, 22, 14, '2022-09-21', '08:24:56', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(472, 28, 10, '2022-09-21', '08:25:16', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(473, 14, 3, '2022-09-21', '08:38:41', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(474, 18, 10, '2022-09-21', '08:43:56', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(475, 19, 10, '2022-09-21', '08:44:21', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(476, 21, 5, '2022-09-22', '08:39:58', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(477, 28, 10, '2022-09-22', '08:45:23', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(478, 14, 3, '2022-09-22', '08:45:56', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(479, 32, 11, '2022-09-22', '08:46:10', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(480, 22, 14, '2022-09-22', '08:51:22', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(481, 21, 5, '2022-09-23', '08:28:44', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(482, 32, 11, '2022-09-23', '08:32:08', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(483, 18, 10, '2022-09-23', '08:45:56', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(484, 19, 10, '2022-09-23', '08:46:36', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(485, 28, 10, '2022-09-23', '08:52:31', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(486, 14, 3, '2022-09-23', '08:57:04', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(487, 21, 5, '2022-09-24', '08:27:36', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(488, 28, 10, '2022-09-24', '08:34:06', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(489, 32, 11, '2022-09-24', '08:37:26', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(490, 32, 11, '2022-09-24', '08:37:27', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(491, 14, 3, '2022-09-24', '08:46:59', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(492, 18, 10, '2022-09-24', '08:48:45', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(493, 19, 10, '2022-09-24', '08:49:05', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(494, 21, 5, '2022-09-26', '08:26:59', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(495, 28, 10, '2022-09-26', '08:27:48', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(496, 14, 3, '2022-09-26', '08:29:59', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(497, 32, 11, '2022-09-26', '08:30:45', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(498, 18, 10, '2022-09-26', '08:52:09', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(499, 19, 10, '2022-09-26', '08:54:17', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(500, 21, 5, '2022-09-27', '08:25:28', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(501, 19, 10, '2022-09-27', '08:56:45', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(502, 18, 10, '2022-09-27', '08:57:10', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(503, 14, 3, '2022-09-27', '09:01:18', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(504, 21, 5, '2022-09-28', '08:51:41', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(505, 14, 3, '2022-09-28', '08:52:28', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(506, 19, 10, '2022-09-28', '09:09:39', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(507, 18, 10, '2022-09-28', '09:10:40', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(508, 21, 5, '2022-09-29', '08:52:50', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(509, 14, 3, '2022-09-29', '08:53:36', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(510, 19, 10, '2022-09-29', '08:56:52', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(511, 18, 10, '2022-09-29', '08:57:53', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(512, 21, 5, '2022-09-30', '08:37:10', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(513, 28, 10, '2022-09-30', '08:41:39', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(514, 18, 10, '2022-09-30', '08:42:29', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(515, 14, 3, '2022-09-30', '08:42:32', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(516, 19, 10, '2022-09-30', '08:42:49', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(517, 32, 11, '2022-09-30', '08:43:17', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(518, 21, 5, '2022-10-01', '08:24:46', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(519, 21, 5, '2022-10-01', '08:56:24', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(520, 14, 3, '2022-10-01', '08:57:27', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(521, 18, 10, '2022-10-01', '09:03:02', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(522, 19, 10, '2022-10-01', '09:03:46', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(523, 21, 5, '2022-10-03', '08:38:33', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(524, 18, 10, '2022-10-03', '08:49:39', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(525, 14, 3, '2022-10-03', '08:51:05', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(526, 19, 10, '2022-10-03', '08:59:55', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(527, 21, 5, '2022-10-04', '08:30:58', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(528, 14, 3, '2022-10-04', '08:43:04', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(529, 22, 14, '2022-10-04', '08:57:57', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(530, 21, 5, '2022-10-05', '08:18:34', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(531, 22, 14, '2022-10-05', '08:55:13', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(532, 14, 3, '2022-10-05', '11:52:19', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(533, 14, 3, '2022-10-06', '08:39:27', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(534, 21, 5, '2022-10-06', '08:40:40', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(535, 22, 14, '2022-10-06', '08:45:08', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(536, 18, 10, '2022-10-06', '08:59:23', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(537, 19, 10, '2022-10-06', '09:01:05', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(538, 21, 5, '2022-10-07', '08:28:35', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(539, 22, 14, '2022-10-07', '08:29:44', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(540, 22, 14, '2022-10-07', '08:30:16', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(541, 14, 3, '2022-10-07', '08:51:05', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(542, 18, 10, '2022-10-07', '09:08:04', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(543, 19, 10, '2022-10-07', '09:09:38', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor');
INSERT INTO `tb_presensi` (`id`, `id_user`, `id_jabatan`, `tgl_presensi`, `time_presensi`, `hadir_presensi`, `izin_presensi`, `alpa_presensi`, `sakit_presensi`, `barcode`, `ket_presensi`) VALUES
(544, 21, 5, '2022-10-10', '08:32:55', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(545, 22, 14, '2022-10-10', '08:57:21', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(546, 19, 10, '2022-10-10', '09:07:12', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(547, 18, 10, '2022-10-10', '09:07:51', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(548, 14, 3, '2022-10-10', '10:01:13', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(549, 22, 14, '2022-10-11', '08:02:34', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(550, 21, 5, '2022-10-11', '08:40:13', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(551, 19, 10, '2022-10-11', '09:15:23', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(552, 18, 10, '2022-10-11', '09:15:42', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(553, 14, 3, '2022-10-11', '09:16:37', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(554, 21, 5, '2022-10-12', '08:31:26', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(555, 19, 10, '2022-10-12', '09:04:33', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(556, 18, 10, '2022-10-12', '09:05:42', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(557, 14, 3, '2022-10-12', '10:53:23', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(558, 21, 5, '2022-10-13', '08:25:19', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(559, 14, 3, '2022-10-13', '08:52:24', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(560, 18, 10, '2022-10-13', '08:53:30', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(561, 19, 10, '2022-10-13', '08:54:20', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(562, 21, 5, '2022-10-14', '08:33:05', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(563, 18, 10, '2022-10-14', '09:54:16', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(564, 21, 5, '2022-10-15', '08:39:35', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(565, 22, 14, '2022-10-15', '08:44:30', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(566, 14, 3, '2022-10-15', '08:59:33', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(567, 18, 10, '2022-10-15', '08:59:59', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(568, 21, 5, '2022-10-17', '08:38:34', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(569, 19, 10, '2022-10-17', '08:54:31', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(570, 14, 3, '2022-10-17', '08:58:20', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(571, 18, 10, '2022-10-17', '08:59:27', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(572, 21, 5, '2022-10-18', '08:35:26', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(573, 14, 3, '2022-10-18', '09:02:47', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(574, 18, 10, '2022-10-18', '09:18:39', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(575, 19, 10, '2022-10-18', '09:18:44', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(576, 22, 14, '2022-10-19', '09:01:05', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(577, 14, 3, '2022-10-19', '09:01:43', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(578, 21, 5, '2022-10-19', '09:03:51', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(579, 19, 10, '2022-10-19', '09:09:31', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(580, 18, 10, '2022-10-19', '09:10:25', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(581, 22, 14, '2022-10-20', '08:37:21', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(582, 21, 5, '2022-10-20', '08:37:46', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(583, 14, 3, '2022-10-20', '09:02:41', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(584, 18, 10, '2022-10-20', '09:03:51', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(585, 19, 10, '2022-10-20', '09:04:21', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(586, 22, 14, '2022-10-21', '07:58:30', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(587, 14, 3, '2022-10-21', '08:40:10', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(588, 21, 5, '2022-10-21', '08:51:24', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(589, 18, 10, '2022-10-21', '09:10:36', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(590, 19, 10, '2022-10-21', '09:10:48', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(591, 21, 5, '2022-10-22', '08:37:29', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(592, 14, 3, '2022-10-22', '08:38:03', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(593, 22, 14, '2022-10-22', '08:38:21', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(594, 18, 10, '2022-10-22', '08:51:40', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(595, 19, 10, '2022-10-22', '08:51:51', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(596, 21, 5, '2022-10-24', '08:38:18', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(597, 14, 3, '2022-10-24', '08:54:23', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(598, 19, 10, '2022-10-24', '09:02:11', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(599, 18, 10, '2022-10-24', '09:02:11', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(600, 21, 5, '2022-10-25', '08:44:08', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(601, 18, 10, '2022-10-25', '09:00:29', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(602, 22, 14, '2022-10-25', '09:00:30', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(603, 19, 10, '2022-10-25', '09:00:49', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(604, 19, 10, '2022-10-25', '09:01:05', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(605, 14, 3, '2022-10-25', '09:10:23', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(606, 22, 14, '2022-10-26', '08:26:48', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(607, 19, 10, '2022-10-26', '08:41:02', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(608, 18, 10, '2022-10-26', '08:41:45', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(609, 21, 5, '2022-10-26', '08:47:20', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(610, 14, 3, '2022-10-26', '08:58:11', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(611, 21, 5, '2022-10-27', '09:19:01', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(612, 14, 3, '2022-10-27', '09:21:01', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(613, 19, 10, '2022-10-27', '09:41:25', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(614, 18, 10, '2022-10-27', '09:43:57', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(615, 21, 5, '2022-10-28', '08:56:34', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(616, 14, 3, '2022-10-28', '08:57:12', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(617, 22, 14, '2022-10-28', '09:05:23', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(618, 18, 10, '2022-10-28', '10:23:10', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(619, 19, 10, '2022-10-28', '10:23:30', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(620, 14, 3, '2022-10-31', '08:49:23', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(621, 21, 5, '2022-10-31', '08:49:44', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(622, 22, 14, '2022-10-31', '08:49:57', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(623, 18, 10, '2022-10-31', '09:14:27', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(624, 19, 10, '2022-10-31', '09:14:55', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(625, 21, 5, '2022-11-01', '08:40:41', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(626, 22, 14, '2022-11-01', '08:46:39', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(627, 18, 10, '2022-11-01', '08:50:10', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(628, 19, 10, '2022-11-01', '08:52:15', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(629, 14, 3, '2022-11-01', '08:52:25', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(630, 21, 5, '2022-11-02', '08:57:46', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(631, 14, 3, '2022-11-02', '08:58:18', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(632, 21, 5, '2022-11-03', '08:31:37', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(633, 22, 14, '2022-11-03', '08:42:32', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(634, 14, 3, '2022-11-03', '08:57:44', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(635, 22, 14, '2022-11-04', '08:18:42', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(636, 21, 5, '2022-11-04', '08:38:14', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(637, 14, 3, '2022-11-04', '08:52:26', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(638, 21, 5, '2022-11-05', '08:32:04', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(639, 14, 3, '2022-11-05', '08:32:34', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(640, 22, 14, '2022-11-05', '08:47:42', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(641, 21, 5, '2022-11-07', '08:46:09', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(642, 14, 3, '2022-11-07', '08:54:27', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(643, 22, 14, '2022-11-07', '09:05:57', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(644, 21, 5, '2022-11-08', '08:31:34', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(645, 14, 3, '2022-11-08', '08:56:30', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(646, 22, 14, '2022-11-08', '09:05:04', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(647, 21, 5, '2022-11-09', '08:42:49', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(648, 21, 5, '2022-11-09', '09:01:07', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(649, 22, 14, '2022-11-09', '09:06:05', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(650, 14, 3, '2022-11-09', '09:07:32', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(651, 21, 5, '2022-11-10', '08:33:09', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(652, 22, 14, '2022-11-10', '09:01:56', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(653, 14, 3, '2022-11-10', '09:02:08', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(654, 19, 10, '2022-11-11', '08:46:00', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(655, 21, 5, '2022-11-11', '08:46:04', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(656, 18, 10, '2022-11-11', '08:46:36', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(657, 22, 14, '2022-11-11', '08:47:01', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(658, 14, 3, '2022-11-11', '09:03:46', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(659, 21, 5, '2022-11-12', '08:40:50', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(660, 22, 14, '2022-11-12', '08:41:50', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(661, 19, 10, '2022-11-12', '08:42:19', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(662, 18, 10, '2022-11-12', '08:44:28', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(663, 18, 10, '2022-11-14', '08:31:07', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(664, 22, 14, '2022-11-14', '08:48:39', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor'),
(665, 21, 5, '2022-11-18', '15:09:38', 1, 0, 0, 0, 'https://qrco.de/bd41sG', 'Masuk Kantor');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `jabatan` int(11) NOT NULL,
  `image_profile` varchar(255) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `no_hp` varchar(256) NOT NULL,
  `alamat` text NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id`, `nama_lengkap`, `jenis_kelamin`, `jabatan`, `image_profile`, `username`, `password`, `email`, `no_hp`, `alamat`, `role`) VALUES
(14, 'Dawiah', 'Perempuan', 3, '', 'dawiah123', '$2y$10$vfdM7gTTy.LhWpaGN6XBge2gkQi0pQfLXSvP6lrgZa.vU3NAXk.Di', '', '', '', 2),
(17, 'Awaludin', 'Lak-laki', 2, '', 'awaludin', '$2y$10$cVYg7e5pERXNC8Pf9M5RWOLehyc6xAbHFEmSVsTB0v2nipD/O8Fn2', '', '', '', 1),
(18, 'Hijrah', 'Perempuan', 10, 'user.png', 'hijrah123', '$2y$10$5RdT7cBlvgksJSJk3xf3au0eQNXgERdVJXt/dqW/bo/z3J5RQkFDe', '', '', '', 2),
(19, 'Ayuni', 'Perempuan', 10, 'user.png', 'ayuni123', '$2y$10$nGTpy1pT8rV48CKh4OkP0eKi2ZdkXTlHJdXOcSwqM1Q92JA.V7jRS', '', '', '', 2),
(21, 'Juliana S.Mat', 'Perempuan', 5, 'Juliana.jpg', 'juliana123', '$2y$10$N22KXs.7slmgsLEYPdmHcuQ6WPbTrIzvW5hceRc2xS5xKzZYj2K2u', '', '', '', 2),
(22, 'Rahman Hidayat S.Taher', 'Lak-laki', 14, 'Rahman Hidayat.jpg', 'rahman123', '$2y$10$iSvTGKSkFasHxquKveXy9e6rsdsOdVHfsStjl5AWiv/x/c6ZM9LxC', '', '', '', 2),
(28, 'Sitti Nuradha Wati S', 'Perempuan', 10, 'WhatsApp Image 2022-09-04 at 14.41.44.jpeg', 'adha123', '$2y$10$S8Zn5cFNTUJEZDSXbXRrFOWbGik8R7UxXLI3wa6QOU7bP4z1vYKW2', '', '', '', 2),
(32, 'selviana', 'Perempuan', 11, '', 'evi123', '$2y$10$pY0FFXZUqSl.7U6gPMs0l.x9J76QEvNArpfvaiZHSNTvMwdyeGgJ.', '', '', '', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_det_users`
--
ALTER TABLE `tb_det_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_landing_about`
--
ALTER TABLE `tb_landing_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_landing_faq`
--
ALTER TABLE `tb_landing_faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_landing_jumbotron`
--
ALTER TABLE `tb_landing_jumbotron`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_landing_logo`
--
ALTER TABLE `tb_landing_logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_landing_team`
--
ALTER TABLE `tb_landing_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_landing_testi`
--
ALTER TABLE `tb_landing_testi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_presensi`
--
ALTER TABLE `tb_presensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_det_users`
--
ALTER TABLE `tb_det_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_landing_about`
--
ALTER TABLE `tb_landing_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_landing_faq`
--
ALTER TABLE `tb_landing_faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_landing_jumbotron`
--
ALTER TABLE `tb_landing_jumbotron`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_landing_logo`
--
ALTER TABLE `tb_landing_logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_landing_team`
--
ALTER TABLE `tb_landing_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tb_landing_testi`
--
ALTER TABLE `tb_landing_testi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_presensi`
--
ALTER TABLE `tb_presensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=666;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
