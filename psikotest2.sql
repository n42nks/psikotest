-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2026 at 09:13 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psikotest`
--

-- --------------------------------------------------------

--
-- Table structure for table `soaltpa`
--

CREATE TABLE `soaltpa` (
  `id_soal` int(11) NOT NULL,
  `soal` varchar(999) DEFAULT NULL,
  `jawaban` varchar(2) DEFAULT NULL,
  `id_kategori` varchar(11) DEFAULT NULL,
  `A` varchar(999) NOT NULL,
  `B` varchar(999) NOT NULL,
  `C` varchar(999) NOT NULL,
  `D` varchar(999) NOT NULL,
  `E` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `soaltpa`
--

INSERT INTO `soaltpa` (`id_soal`, `soal`, `jawaban`, `id_kategori`, `A`, `B`, `C`, `D`, `E`) VALUES
(1, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Pancasila sebagai sumber dari segala sumber hukum mengandung implikasi bahwa&hellip;</span></span></p>', 'B', '1', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Semua hukum harus identik dengan nilai agama dominan</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Norma hukum tidak boleh bertentangan dengan nilai dasar Pancasila</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Pancasila berlaku sebagai hukum positif langsung</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Semua hukum ditetapkan oleh MPR</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Pancasila hanya sebagai legitimasi formal</span></span></p>'),
(2, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Konsep negara hukum dalam UUD 1945 menekankan&hellip;</span></span></p>', 'A', '1', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Supremasi hukum dan perlindungan HAM</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Kekuasaan negara di atas hukum</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Dominasi pemerintah dalam hukum</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Hukum sebagai alat politik</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Kebebasan tanpa batas</span></span></p>'),
(3, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Pembukaan UUD 1945 tidak dapat diubah karena&hellip;</span></span></p>', 'C', '1', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Dibuat oleh PPKI</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Bersifat historis semata</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengandung norma dasar negara</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Disepakati rakyat</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Diatur oleh MPR</span></span></p>'),
(4, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Makna kedaulatan rakyat pasca amandemen adalah&hellip;</span></span></p>', 'C', '1', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Rakyat berkuasa langsung</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">MPR sebagai pelaksana utama</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Dilaksanakan menurut UUD</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Presiden mandataris rakyat</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">DPR sebagai pelaksana tunggal</span></span></p>'),
(5, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Demokrasi Pancasila ditandai dengan&hellip;</span></span></p>', 'C', '1', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Voting mayoritas</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Kekuasaan elit</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Musyawarah mufakat</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Dominasi pemerintah</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Kebebasan absolut</span></span></p>'),
(6, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Hubungan Pancasila dengan UUD 1945 adalah&hellip;</span></span></p>', 'B', '1', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">UUD sumber Pancasila</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Pancasila sumber UUD</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Tidak berkaitan</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">UUD lebih tinggi</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Pancasila turunan hukum</span></span></p>'),
(7, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Tujuan amandemen UUD 1945 adalah&hellip;</span></span></p>', 'B', '1', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengubah ideologi</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menyempurnakan sistem</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengganti sistem</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menghapus lembaga</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengurangi demokrasi</span></span></p>'),
(8, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mahkamah Konstitusi berwenang&hellip;</span></span></p>', 'B', '1', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Membuat UU</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menguji UU terhadap UUD</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengangkat presiden</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengawasi DPR</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menjalankan pemerintahan</span></span></p>'),
(9, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Sila kedua berkaitan dengan&hellip;</span></span></p>', 'B', '1', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Nasionalisme</span></span></p>', '<p>HAM</p>', '<p>Demokrasi</p>', '<p>Ekonomi</p>', '<p>Kedaulatan</p>'),
(10, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Pasal 33 mencerminkan&hellip;</span></span></p>', 'C', '1', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Kapitalisme</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Sosialisme</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Demokrasi ekonomi</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Liberalisme</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Monopoli</span></span></p>'),
(11, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Ideologi terbuka berarti&hellip;</span></span></p>', 'C', '1', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Bebas diubah</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Fleksibel nilai dasar</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Adaptif tanpa hilang nilai</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Tidak mengikat</span></span></p>', '<p>Sementara</p>'),
(12, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Fungsi DPR adalah&hellip;</span></span></p>', 'B', '1', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Eksekutif</span></span></p>', '<p>Legislatif</p>', '<p>Yudikatif</p>', '<p>Administratif</p>', '<p>Konsultatif</p>'),
(13, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Presiden adalah&hellip;</span></span></p>', 'C', '1', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Kepala negara</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Kepala pemerintahan</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Keduanya</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Kepala legislatif</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Kepala yudikatif</span></span></p>'),
(14, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Amandemen UUD dilakukan&hellip;</span></span></p>', 'C', '1', '<p>2 Kali</p>', '<p>3 Kali</p>', '<p>4 Kali</p>', '<p>5 Kali</p>', '<p>6 Kali</p>'),
(15, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">HAM diatur dalam&hellip;</span></span></p>', 'B', '1', '<p>Pasal 27</p>', '<p>28A - 28J</p>', '<p>29</p>', '<p>30</p>', '<p>31</p>'),
(16, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Makna sila ketiga&hellip;</span></span></p>', 'B', '1', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Individualisme</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Persatuan</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Federalisme</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Otonomi mutlak</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Nasionalisme sempit</span></span></p>'),
(17, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Fungsi MPR sekarang&hellip;</span></span></p>', 'C', '1', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Lembaga tertinggi</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Pengawas presiden</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Ubah &amp; tetapkan UUD</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Membuat UU</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengadili</span></span></p>'),
(18, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Negara kesatuan berarti&hellip;</span></span></p>', 'C', '1', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Terpusat absolut</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Tanpa otonomi</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Kedaulatan tidak terbagi</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Federal</span></span></p>', '<p>Daerah Mandiri</p>'),
(19, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Sistem pemerintahan&hellip;</span></span></p>', 'B', '1', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Parlementer</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Presidensial</span></span></p>', '<p>Semi</p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Monarki</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Federal</span></span></p>'),
(20, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Keadilan sosial berarti&hellip;</span></span></p>', 'B', '1', '<p>Sama rata</p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Proporsional</span></span></p>', '<p>Bebas</p>', '<p>Negara Dominan</p>', '<p>Pasar Bebas</p>');

-- --------------------------------------------------------

--
-- Table structure for table `status_tes`
--

CREATE TABLE `status_tes` (
  `id` int(11) NOT NULL,
  `npm` varchar(50) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT 0 COMMENT '0 = belum, 1 = selesai',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `status_tes`
--

INSERT INTO `status_tes` (`id`, `npm`, `id_kategori`, `status`, `created_at`, `updated_at`) VALUES
(1, '202604001', 1, 1, '2026-05-06 03:38:56', '2026-05-06 03:38:56'),
(2, '202604001', 2, 1, '2026-05-06 03:39:30', '2026-05-06 03:39:30'),
(3, '202604001', 3, 1, '2026-05-06 03:40:02', '2026-05-06 03:40:02'),
(4, '202604001', 4, 1, '2026-05-06 03:40:38', '2026-05-06 03:40:38'),
(5, '202604001', 5, 1, '2026-05-06 03:41:12', '2026-05-06 03:41:12'),
(6, '202604001', 6, 1, '2026-05-06 03:41:34', '2026-05-06 03:41:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbadmin`
--

CREATE TABLE `tbadmin` (
  `IdAdmin` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbadmin`
--

INSERT INTO `tbadmin` (`IdAdmin`, `nama`, `username`, `password`, `role`) VALUES
(1, 'Admin Utama', 'admin', '007', 1),
(2, 'Viewer', 'admin1', '123321', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbpendaftar`
--

CREATE TABLE `tbpendaftar` (
  `NPM` int(5) NOT NULL,
  `tgl_daftar` varchar(10) DEFAULT NULL,
  `Nama` varchar(37) DEFAULT NULL,
  `Tmp_lahir` varchar(22) DEFAULT NULL,
  `Tgl_lahir` date DEFAULT NULL,
  `Alamat` varchar(77) DEFAULT NULL,
  `Kota` varchar(22) DEFAULT NULL,
  `Telp` varchar(14) DEFAULT NULL,
  `Agama` varchar(7) DEFAULT NULL,
  `Jkelamin` varchar(9) DEFAULT NULL,
  `Password` int(8) DEFAULT NULL,
  `status_lulus` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbpendaftar`
--

INSERT INTO `tbpendaftar` (`NPM`, `tgl_daftar`, `Nama`, `Tmp_lahir`, `Tgl_lahir`, `Alamat`, `Kota`, `Telp`, `Agama`, `Jkelamin`, `Password`, `status_lulus`) VALUES
(202604001, '2026-04-23', 'Nanang Sucipto', 'Banyuwangi', '2005-02-23', 'Jl. jalan', '-', '082257080011', 'Islam', 'Pria', 20050223, NULL),
(202604002, '2026-04-26', 'Amalia', 'Ponorogo', '1997-04-14', 'jl. Jakarta No. 38', 'Kota Malang', '082257080011', 'Islam', 'Wanita', 19970414, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbwaktu`
--

CREATE TABLE `tbwaktu` (
  `Id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `waktu` int(11) DEFAULT NULL,
  `kategori` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbwaktu`
--

INSERT INTO `tbwaktu` (`Id`, `tanggal`, `waktu`, `kategori`) VALUES
(1, '2020-06-03', 60, 'Pancasila dan UUD 1945'),
(2, '2020-06-04', 60, 'Pengetahuan tentang Pemerintah / Pemerintah Desa'),
(3, '2020-06-03', 60, 'Pengetahuan Agama'),
(4, '2026-04-24', 60, 'Pengetahuan Umum'),
(5, '2026-04-24', 60, 'Administrasi Perkantoran'),
(6, '2026-05-02', 60, 'Pengetahuan Komputer dan Teknologi Informasi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jawab_peserta`
--

CREATE TABLE `tb_jawab_peserta` (
  `id` int(11) NOT NULL,
  `npm` varchar(15) DEFAULT NULL,
  `id_soal` int(15) DEFAULT NULL,
  `id_kategori` int(3) NOT NULL,
  `jawaban_peserta` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(100) DEFAULT NULL,
  `ket` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `kategori`, `ket`) VALUES
(1, 'Pancasila dan UUD 1945', NULL),
(2, 'Pengetahuan tentang Pemerintah / Pemerintah Desa', NULL),
(3, 'Pengetahuan Agama', NULL),
(4, 'Pengetahuan Umum', NULL),
(5, 'Administrasi Perkantoran', NULL),
(6, 'Pengetahuan Komputer dan Teknologi Informasi', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `soaltpa`
--
ALTER TABLE `soaltpa`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `status_tes`
--
ALTER TABLE `status_tes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unik_peserta_kategori` (`npm`,`id_kategori`);

--
-- Indexes for table `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`IdAdmin`);

--
-- Indexes for table `tbpendaftar`
--
ALTER TABLE `tbpendaftar`
  ADD PRIMARY KEY (`NPM`);

--
-- Indexes for table `tbwaktu`
--
ALTER TABLE `tbwaktu`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tb_jawab_peserta`
--
ALTER TABLE `tb_jawab_peserta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `soaltpa`
--
ALTER TABLE `soaltpa`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `status_tes`
--
ALTER TABLE `status_tes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbadmin`
--
ALTER TABLE `tbadmin`
  MODIFY `IdAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbwaktu`
--
ALTER TABLE `tbwaktu`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_jawab_peserta`
--
ALTER TABLE `tb_jawab_peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
