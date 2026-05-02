-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2026 at 08:21 AM
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
-- Table structure for table `mhsdaft`
--

CREATE TABLE `mhsdaft` (
  `NPM` double(10,0) DEFAULT 0,
  `TGL_DAFTAR` date DEFAULT NULL,
  `GEL_DAFTAR` double(3,0) DEFAULT NULL,
  `NAMA` varchar(100) DEFAULT NULL,
  `TMP_LAHIR` varchar(50) DEFAULT NULL,
  `TGL_LAHIR` date DEFAULT NULL,
  `JKELAMIN` varchar(1) DEFAULT NULL,
  `AGAMA` varchar(12) DEFAULT NULL,
  `ALAMAT1` varchar(100) DEFAULT NULL,
  `TELEPON` varchar(13) DEFAULT NULL,
  `KOTA` varchar(100) DEFAULT NULL,
  `KD_JURUSAN` double(53,0) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
(1, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Perbedaan utama antara <strong>BPUPKI dan PPKI</strong> dalam proses kemerdekaan adalah&hellip;</span></span></p>', 'B', '1', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">BPUPKI membentuk UUD, PPKI membubarkannya</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">BPUPKI merumuskan, PPKI mengesahkan</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">BPUPKI mengesahkan, PPKI merumuskan</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Keduanya memiliki tugas yang sama</span></span></p>', ''),
(2, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Makna sila ke-3 Pancasila dalam kehidupan berbangsa adalah&hellip;</span></span></p>', 'B', '1', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Kebebasan individu</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Persatuan dalam keberagaman</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Keadilan ekonomi</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Demokrasi langsung</span></span></p>', ''),
(3, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Pasal dalam UUD 1945 yang mengatur tentang <strong>hak asasi manusia</strong> terdapat pada&hellip;</span></span></p>', 'B', '1', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Pasal 27</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Pasal 28A&ndash;28J</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Pasal 30</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Pasal 33</span></span></p>', ''),
(4, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Dalam sistem pemerintahan Indonesia, kekuasaan legislatif dijalankan oleh&hellip;</span></span></p>', 'C', '1', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Presiden</span></span></p>', '<p>Mahkamah Agung</p>', '<p>DPR</p>', '<p>MPR saja</p>', ''),
(5, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Perubahan UUD 1945 dilakukan pada masa&hellip;</span></span></p>', 'C', '1', '<p>Orde lama</p>', '<p>Orde baru</p>', '<p>Reformasi</p>', '<p>Demokrasi Terpimpin</p>', ''),
(6, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Nilai utama dari semboyan <strong>Bhinneka Tunggal Ika</strong> adalah&hellip;</span></span></p>', 'C', '1', '<p>Keseragaman Budaya</p>', '<p>Dominasi Mayoritas</p>', '<p>Toleransi dalam Perbedaan</p>', '<p>Persaingan antar Daerah</p>', ''),
(7, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Tujuan negara Indonesia tercantum dalam&hellip;</span></span></p>', 'B', '1', '<p>Batang tubuh UUD</p>', '<p>Pembukaan UUD 1945 alinea ke - 4&nbsp;</p>', '<p>Pasal 1 UUD</p>', '<p>Penjelasan UUD</p>', ''),
(8, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Kedaulatan rakyat menurut UUD 1945 berada di tangan&hellip;</span></span></p>', 'C', '1', '<p>Presiden</p>', '<p>DPR</p>', '<p>Rakyat</p>', '<p>MPR saja</p>', ''),
(9, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Contoh implementasi sila ke-5 dalam kehidupan sehari-hari adalah&hellip;</span></span></p>', 'C', '1', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Beribadah sesuai agama</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Gotong royong</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Membantu sesama secara adil</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menghormati perbedaan</span></span></p>', ''),
(10, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Negara Indonesia disebut sebagai negara hukum, artinya&hellip;</span></span></p>', 'B', '1', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Pemerintah bebas bertindak</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Hukum berada di atas segalanya</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Rakyat bebas tanpa aturan</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Presiden sebagai hukum tertinggi</span></span></p>', ''),
(11, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Peran BPD dalam pemerintahan desa adalah&hellip;</span></span></p>', 'A', '1', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengawasi dan menampung aspirasi masyarakat</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengangkat kepala desa</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Membuat keputusan sendiri tanpa desa</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menjadi kepala desa</span></span></p>', ''),
(12, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Makna demokrasi Pancasila adalah&hellip;</span></span></p>', 'B', '1', '<p>Kebebasan Mutlak</p>', '<p>Musyawarah Mufakat</p>', '<p>Kekuasaan Mayoritas</p>', '<p>Otoriter</p>', ''),
(13, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Pasal 33 UUD 1945 mengatur tentang&hellip;</span></span></p>', 'B', '1', '<p>Politik</p>', '<p>Ekonomi</p>', '<p>Pendidikan</p>', '<p>Pertahanan</p>', ''),
(14, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Dalam struktur negara, Presiden termasuk lembaga&hellip;</span></span></p>', 'C', '1', '<p>Legislatif</p>', '<p>Yudikatif</p>', '<p>Eksekutif</p>', '<p>Konsultatif</p>', ''),
(15, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Hak dan kewajiban warga negara harus&hellip;</span></span></p>', 'B', '1', '<p>Dipisahkan</p>', '<p>Seimbang</p>', '<p>Diabaikan</p>', '<p>Dibatasi Total</p>', ''),
(16, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Contoh sikap nasionalisme adalah&hellip;</span></span></p>', 'B', '1', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengutamakan produk luar</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mencintai budaya sendiri</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengabaikan negara</span></span></p>', '<p>Individualisme</p>', ''),
(17, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Makna alinea pertama Pembukaan UUD 1945 adalah&hellip;</span></span></p>', 'B', '1', '<p>Tujuan Negara</p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Kemerdekaan hak segala bangsa</span></span></p>', '<p>Sistem Pemerintahan</p>', '<p>Ekonomi Negara</p>', ''),
(18, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Indonesia menganut sistem&hellip;</span></span></p>', 'C', '1', '<p>Federal</p>', '<p>Monarki</p>', '<p>Kesatuan</p>', '<p>Kolonial</p>', ''),
(19, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Peran masyarakat dalam demokrasi adalah&hellip;</span></span></p>', 'B', '1', '<p>Pasif</p>', '<p>Aktif berpartisipasi</p>', '<p>Diam</p>', '<p>Menolak Pemerintah</p>', ''),
(20, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Contoh ancaman terhadap persatuan bangsa adalah&hellip;</span></span></p>', 'C', '1', '<p>Gotong Royong</p>', '<p>Toleransi</p>', '<p>Konflik SARA</p>', '<p>Musyawarah</p>', ''),
(21, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Dalam UUD 1945, pendidikan diatur pada pasal&hellip;</span></span></p>', 'C', '1', '<p>27</p>', '<p>28</p>', '<p>31</p>', '<p>33</p>', ''),
(22, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Makna sila pertama adalah&hellip;</span></span></p>', 'B', '1', '<p>Keadilan</p>', '<p>Ketuhanan</p>', '<p>Persatuan</p>', '<p>Kemanusiaan</p>', ''),
(23, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Kewenangan desa diatur dalam&hellip;</span></span></p>', 'A', '1', '<p>UU Desa</p>', '<p>KUHP</p>', '<p>Perpres</p>', '<p>UUD Saja</p>', ''),
(24, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Contoh perilaku sesuai Pancasila adalah&hellip;</span></span></p>', 'C', '1', '<p>Egois</p>', '<p>Diskriminatif</p>', '<p>Gotong Royong</p>', '<p>Individualisme</p>', ''),
(25, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Tujuan utama dibentuknya negara Indonesia adalah&hellip;</span></span></p>', 'B', '1', '<p>Kekuasaan</p>', '<p>Kesejahteraan Rakyat</p>', '<p>Keuntungan</p>', '<p>Ekspansi Wilayah</p>', ''),
(26, '<p><strong><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Deret Angka 2, 6, 7, 21, 22, 66, &hellip;</span></span></strong></p>', 'A', '2', '<p>67</p>', '<p>68</p>', '<p>69</p>', '<p>70</p>', ''),
(27, '<p><strong><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Dokter : Pasien = Guru : &hellip;</span></span></strong></p>', 'B', '2', '<p>Sekolah</p>', '<p>Murid</p>', '<p>Guru</p>', '<p>Kelas</p>', ''),
(28, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Semua A adalah B, sebagian B adalah C. Maka&hellip;</span></span></p>', 'C', '2', '<p>Semua A adalah C</p>', '<p>Sebagian A adalah C</p>', '<p>Tidak dapat disimpulkan</p>', '<p>Semua C adalah A</p>', ''),
(29, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Jika 5x + 3 = 28, maka x = &hellip;</span></span></p>', 'A', '2', '<p>4</p>', '<p>5</p>', '<p>6</p>', '<p>7</p>', ''),
(30, '<p><strong><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">A, C, F, J, O, &hellip;</span></span></strong></p>', 'B', '2', '<p>T</p>', '<p>U</p>', '<p>V</p>', '<p>W</p>', ''),
(31, '<p><strong><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">3 : 9 = 4 : &hellip;</span></span></strong></p>', 'A', '2', '<p>12</p>', '<p>13</p>', '<p>14</p>', '<p>15</p>', ''),
(32, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Semua bunga indah. Mawar adalah bunga. Maka&hellip;</span></span></p>', 'B', '2', '<p>Mawar tidak Indah</p>', '<p>Mawar Indah</p>', '<p>Tidak pasti</p>', '<p>Semua Indah Mawar</p>', ''),
(33, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Jika 12 orang menyelesaikan pekerjaan dalam 6 hari, maka 6 orang butuh&hellip;</span></span></p>', 'B', '2', '<p>10 hari</p>', '<p>12 hari</p>', '<p>11 hari</p>', '<p>13 hari</p>', ''),
(34, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">&ldquo;Efisien&rdquo; paling dekat artinya&hellip;</span></span></p>', 'B', '2', '<p>Cepat</p>', '<p>Tepat Guna</p>', '<p>Hemat</p>', '<p>Mudah</p>', ''),
(35, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Jika semua X adalah Y, dan semua Y adalah Z&hellip;</span></span></p>', 'A', '2', '<p>Semua X adalah Z</p>', '<p>Sebagian X adalah Z</p>', '<p>Tidak pasti</p>', '<p>Semua Z adalah X</p>', ''),
(36, '<p><strong><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">4, 9, 16, 25, &hellip;</span></span></strong></p>', 'C', '2', '<p>34</p>', '<p>35</p>', '<p>36</p>', '<p>37</p>', ''),
(37, '<p><strong><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">2 : 8 = 3 : &hellip;</span></span></strong></p>', 'C', '2', '<p>10</p>', '<p>11</p>', '<p>12</p>', '<p>13</p>', ''),
(38, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Air : Haus = Makanan : &hellip;</span></span></p>', 'A', '2', '<p>Lapar</p>', '<p>Kenyang</p>', '<p>Minum</p>', '<p>Rasa</p>', ''),
(39, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Jika hari ini hujan maka jalan basah. Hari ini tidak hujan&hellip;</span></span></p>', 'C', '2', '<p>Jalan pasti basah</p>', '<p>Jalan pasti kering</p>', '<p>Tidak dapat disimpulkan</p>', '<p>Jalan mungkin basah</p>', ''),
(40, '<p><strong><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">7&sup2; + 3&sup2; = &hellip;</span></span></strong></p>', 'B', '2', '<p>57</p>', '<p>58</p>', '<p>59</p>', '<p>60</p>', ''),
(41, '<p><strong><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Z, X, U, Q, &hellip;</span></span></strong></p>', 'B', '2', '<p>N</p>', '<p>M</p>', '<p>O</p>', '<p>L</p>', ''),
(42, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Jika harga 1 barang Rp2.000, maka 15 barang&hellip;</span></span></p>', 'B', '2', '<p>29,000</p>', '<p>30,000</p>', '<p>31,000</p>', '<p>32,000</p>', ''),
(43, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Semua karyawan wajib hadir. Budi karyawan. Maka&hellip;</span></span></p>', 'B', '2', '<p>Budi tidak hadir</p>', '<p>Budi Hadir</p>', '<p>Tidak pasti</p>', '<p>Semua hadir Budi</p>', ''),
(44, '<p>Sinonim&nbsp;<span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">&ldquo;Akumulasi&rdquo; berarti&hellip;</span></span></p>', 'B', '2', '<p>Pengurangan</p>', '<p>Penambahan</p>', '<p>Perubahan</p>', '<p>Penyusunan</p>', ''),
(45, '<p><strong><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">5, 10, 20, 40, &hellip;</span></span></strong></p>', 'C', '2', '<p>70</p>', '<p>75</p>', '<p>80</p>', '<p>85</p>', ''),
(46, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Jika A &gt; B dan B &gt; C maka&hellip;</span></span></p>', 'A', '2', '<p>A &gt; C</p>', '<p>A &lt; C</p>', '<p>A = C</p>', '<p>Tidak Pasti</p>', ''),
(47, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Kunci : Pintu = Password : &hellip;</span></span></p>', 'A', '2', '<p>Login</p>', '<p>Akun</p>', '<p>Sistem</p>', '<p>Data</p>', ''),
(48, '<p><strong><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">15% dari 200 = &hellip;</span></span></strong></p>', 'B', '2', '<p>28</p>', '<p>30</p>', '<p>32</p>', '<p>34</p>', ''),
(49, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Jika tidak belajar maka gagal. Anda tidak gagal&hellip;</span></span></p>', 'A', '2', '<p>Anda Belajar</p>', '<p>Anda tidak Belajar</p>', '<p>Tidak pasti</p>', '<p>Anda mungkin Belajar</p>', ''),
(50, '<p><strong><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">3, 6, 18, 72, &hellip;</span></span></strong></p>', 'C', '2', '<p>210</p>', '<p>250</p>', '<p>288</p>', '<p>300</p>', ''),
(51, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Warga lansia kesulitan layanan digital. Anda&hellip;</span></span></p>', 'A', '3', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mendampingi sampai benar-benar paham dan bisa mandiri</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mendampingi hingga proses selesai saja</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengarahkan ke petugas lain</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menyuruh kembali dengan keluarga</span></span></p>', ''),
(52, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Rekan kerja sering terlambat menyelesaikan tugas. Anda&hellip;</span></span></p>', 'A', '3', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Membantu sambil membangun kesadaran tanggung jawabnya</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Membantu tanpa menyinggung tanggung jawabnya</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengingatkan saja</span></span></p>', '<p>Membiarkan</p>', ''),
(53, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Tugas mendadak di luar jam kerja. Anda&hellip;</span></span></p>', 'C', '3', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menolak dengan alasan pribadi</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Membantu jika sangat mendesak saja</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Membantu penuh sebagai tanggung jawab</span></span></p>', '<p>Mengabaikan</p>', ''),
(54, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Warga marah karena pelayanan lambat. Anda&hellip;</span></span></p>', 'A', '3', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menenangkan dan memberikan solusi konkret</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menenangkan tanpa solusi jelas</span></span></p>', '<p>Membela diri</p>', '<p>Menghindari</p>', ''),
(55, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menemukan kesalahan kecil dalam laporan tim. Anda&hellip;</span></span></p>', 'A', '3', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Memperbaiki dan memberi penjelasan ke tim</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Memperbaiki tanpa penjelasan detail</span></span></p>', '<p>Mengingatkan saja</p>', '<p>Membiarkan</p>', ''),
(56, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Lingkungan kerja tidak kondusif. Anda&hellip;</span></span></p>', 'A', '3', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menginisiasi perbaikan suasana kerja</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menjaga sikap positif secara pribadi saja</span></span></p>', '<p>Menghindari</p>', '<p>Membiarkan</p>', ''),
(57, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Bekerja dengan orang yang tidak cocok. Anda&hellip;</span></span></p>', 'A', '3', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Tetap profesional dan membangun kerja sama<strong><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"> </span></span></strong>aktif</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Tetap profesional tanpa interaksi lebih</span></span></p>', '<p>Menghindari</p>', '<p>Pasif</p>', ''),
(58, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Perubahan sistem kerja mendadak. Anda&hellip;</span></span></p>', 'B', '3', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Belajar untuk diri sendiri saja</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Cepat belajar dan membantu adaptasi tim</span></span></p>', '<p>Mengeluh</p>', '<p>Menolak</p>', ''),
(59, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Warga minta prioritas tanpa alasan. Anda&hellip;</span></span></p>', 'D', '3', '<p>Mengabaikan</p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menolak dengan penjelasan singkat saja</span></span></p>', '<p>Mengabulkan</p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menolak dengan penjelasan aturan dan empati</span></span></p>', ''),
(60, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Diberi tanggung jawab besar. Anda&hellip;</span></span></p>', 'B', '3', '<p>Ragu-ragu</p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengerjakan dengan penuh komitmen dan perencanaan</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengerjakan dengan komitmen tanpa perencanaan matang</span></span></p>', '<p>Menolak</p>', ''),
(61, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Rekan kerja melakukan kesalahan berulang. Anda&hellip;</span></span></p>', 'C', '3', '<p>Mengingatkan saja</p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Membimbing tanpa monitoring lanjutan</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Membimbing dan memonitor perbaikan</span></span></p>', '<p>Membiarkan</p>', ''),
(62, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Pekerjaan monoton. Anda&hellip;</span></span></p>', 'B', '3', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Tetap bekerja tanpa inovasi</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Tetap konsisten dan mencari cara meningkatkan kualitas</span></span></p>', '<p>Malas</p>', '<p>Menunda</p>', ''),
(63, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Konflik dalam tim. Anda&hellip;</span></span></p>', 'D', '3', '<p>Menghindari</p>', '<p>Memihak</p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menenangkan tanpa memastikan solusi</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menjadi mediator aktif hingga solusi tercapai</span></span></p>', ''),
(64, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mendapat kritik dari atasan. Anda&hellip;</span></span></p>', 'A', '3', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menerima dan langsung memperbaiki secara nyata</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menerima dengan perubahan perlahan</span></span></p>', '<p>Mengeluh</p>', '<p>Menghindari</p>', ''),
(65, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Beban kerja meningkat. Anda&hellip;</span></span></p>', 'B', '3', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengatur prioritas</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengatur prioritas dan strategi kerja</span></span></p>', '<p>Mengeluh</p>', '<p>Menghindari</p>', ''),
(66, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Warga sulit memahami penjelasan. Anda&hellip;</span></span></p>', 'C', '3', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengulang penjelasan yang sama</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menyuruh membaca peraturan lagi</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menjelaskan ulang dengan metode berbeda hingga paham</span></span></p>', '<p>Mengabaikan</p>', ''),
(67, '<p>Melihat rekan melanggar aturan ringan. Anda&hellip;</p>', 'D', '3', '<p>Mengingatkan secara baik agar tidak mengulangi kesalahan tersebut</p>', '<p>Mengingatkan secara singkat tanpa pembahasan lebih lanjut</p>', '<p>Membiarkan karena dianggap pelanggaran ringan</p>', '<p>Mengingatkan secara baik dan memantau perubahan sikapnya secara berkala</p>', ''),
(68, '<p>Harus mengambil keputusan cepat. Anda&hellip;</p>', 'B', '3', '<p>Mengambil keputusan berdasarkan pengalaman dan pertimbangan logis meskipun data belum lengkap</p>', '<p>Mengambil keputusan berdasarkan data yang tersedia dan pertimbangan logis secara cepat</p>', '<p>Mengambil keputusan dengan mempertimbangkan masukan singkat dari rekan kerja terdekat</p>', '<p>Mengambil keputusan setelah memastikan situasi benar-benar stabil terlebih dahulu</p>', ''),
(69, '<p>Tekanan kerja tinggi. Anda&hellip;</p>', 'A', '3', '<p>Tetap fokus, mengatur prioritas, dan menjaga kualitas kerja secara konsisten</p>', '<p>Tetap bekerja dengan fokus dan berusaha menjaga kualitas meskipun tekanan meningkat</p>', '<p>Tetap menyelesaikan pekerjaan sambil menyesuaikan ritme kerja agar tetap stabil</p>', '<p>Tetap bekerja dengan mengikuti alur yang ada tanpa banyak penyesuaian</p>', ''),
(70, '<p>Warga mengeluh pelayanan tidak adil. Anda&hellip;</p>', 'C', '3', '<p>Menjelaskan prosedur sambil meminta warga mengikuti alur yang berlaku</p>', '<p>Menyampaikan bahwa pelayanan telah sesuai ketentuan yang ada</p>', '<p>Menjelaskan prosedur sekaligus melakukan evaluasi untuk memastikan keadilan pelayanan</p>', '<p>Menjelaskan prosedur secara jelas agar warga memahami dasar pelayanan yang diberikan</p>', ''),
(71, '<p>Memiliki ide perbaikan pelayanan. Anda&hellip;</p>', 'D', '3', '<p>Mengusulkan ide disertai gambaran pelaksanaan secara umum</p>', '<p>Menyampaikan ide sebagai masukan untuk dipertimbangkan lebih lanjut</p>', '<p>Menyimpan ide sambil menunggu waktu yang lebih tepat untuk disampaikan</p>', '<p>Mengusulkan ide disertai rencana implementasi yang jelas dan langkah tindak lanjut</p>', ''),
(72, '<p>Diminta lembur mendadak. Anda&hellip;</p>', 'D', '3', '<p>Mempertimbangkan kondisi terlebih dahulu sebelum memutuskan untuk lembur</p>', '<p>Bersedia lembur dengan menyesuaikan kemampuan agar pekerjaan tetap terselesaikan</p>', '<p>Bersedia lembur dan tetap menyelesaikan tugas dengan baik meskipun dalam kondisi terbatas</p>', '<p>Bersedia lembur dan tetap menjaga kualitas kerja serta menyelesaikan tugas secara optimal</p>', ''),
(73, '<p>Tim tidak solid. Anda&hellip;</p>', 'B', '3', '<p>Menjaga komunikasi seperlunya agar pekerjaan tetap terselesaikan</p>', '<p>Membangun komunikasi dan kolaborasi aktif serta mendorong kerja sama tim secara berkelanjutan</p>', '<p>Membangun komunikasi yang baik agar koordinasi tim tetap berjalan</p>', '<p>Fokus pada tugas masing-masing sambil menyesuaikan kondisi tim yang ada</p>', ''),
(74, '<p>Warga meminta bantuan di luar prosedur. Anda&hellip;</p>', 'B', '3', '<p>Menolak dengan menjelaskan aturan secara jelas kepada warga</p>', '<p>Menolak dengan menjelaskan aturan serta memberikan solusi alternatif yang sesuai</p>', '<p>Menyampaikan keterbatasan prosedur sambil mengarahkan ke jalur yang tersedia</p>', '<p>Mempertimbangkan permintaan dengan tetap memperhatikan ketentuan yang berlaku</p>', ''),
(75, '<p>Menghadapi tugas sulit. Anda&hellip;</p>', 'D', '3', '<p>Menyelesaikan tugas sesuai arahan tanpa banyak pengembangan pendekatan</p>', '<p>Menyelesaikan tugas secara bertahap sambil menyesuaikan dengan kemampuan yang ada</p>', '<p>Mencari solusi dan menyelesaikan tugas dengan kemampuan yang dimiliki saat ini</p>', '<p>Mencari solusi secara aktif sekaligus meningkatkan kompetensi agar hasil lebih optimal</p>', ''),
(76, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Dana desa digunakan tanpa musyawarah. Tindakan terbaik&hellip;</span></span></p>', 'D', '4', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Tetap dilanjutkan agar program berjalan</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Melaporkan langsung ke aparat hukum</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengikuti keputusan kepala desa</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menghentikan sementara dan lakukan musyawarah</span></span></p>', ''),
(77, '<p>Peraturan desa dibuat tanpa melibatkan BPD. Anda&hellip;</p>', 'C', '4', '<p>Tetap menjalankan sambil mempertimbangkan perbaikan di tahap berikutnya</p>', '<p>Mengkoordinasikan dengan pihak terkait untuk evaluasi dan penyesuaian prosedur</p>', '<p>Menginisiasi revisi peraturan dengan melibatkan BPD sesuai ketentuan yang berlaku</p>', '<p>Meninjau ulang peraturan dan mengusulkan perbaikan melalui mekanisme yang ada</p>', ''),
(78, '<p>APBDes tidak transparan. Tindakan Anda&hellip;</p>', 'D', '4', '<p>Menunggu hasil pemeriksaan/audit sebagai dasar tindak lanjut</p>', '<p>Menyampaikan informasi secara terbatas di internal sambil menyiapkan klarifikasi</p>', '<p>Mengkoordinasikan pelaporan kepada pihak berwenang untuk dilakukan pembinaan dan evaluasi</p>', '<p>Menginisiasi keterbukaan informasi kepada masyarakat sesuai ketentuan yang berlaku</p>', ''),
(79, '<p>Kepala desa dominan dalam pengambilan keputusan tanpa musyawarah. Anda&hellip;</p>', 'C', '4', '<p>Mengikuti keputusan yang ada sambil menyesuaikan pelaksanaan agar tetap berjalan baik</p>', '<p>Mengkomunikasikan kepada pihak terkait untuk evaluasi mekanisme pengambilan keputusan</p>', '<p>Mengingatkan secara konstruktif pentingnya musyawarah dalam pengambilan keputusan</p>', '<p>Menyampaikan pandangan secara terbatas dalam forum yang tersedia</p>', ''),
(80, '<p>Program tidak sesuai kebutuhan warga. Anda&hellip;</p>', 'A', '4', '<p>Menginisiasi evaluasi melalui musyawarah desa untuk penyesuaian program</p>', '<p>Melakukan evaluasi internal terlebih dahulu sebelum dibahas dalam forum yang lebih luas</p>', '<p>Menjalankan program sambil melakukan penyesuaian terbatas di lapangan</p>', '<p>Melanjutkan program sesuai rencana sambil menunggu arahan lebih lanjut</p>', ''),
(81, '<p>Dana desa salah penggunaan. Anda&hellip;</p>', 'C', '4', '<p>Mengkoordinasikan evaluasi penggunaan anggaran untuk perbaikan ke depan</p>', '<p>Menunggu hasil pemeriksaan sebagai dasar tindak lanjut</p>', '<p>Melakukan evaluasi dan melaporkan sesuai mekanisme yang berlaku</p>', '<p>Memberikan teguran sambil melakukan pemantauan</p>', ''),
(82, '<p>Musyawarah tidak melibatkan warga. Dampak utama&hellip;</p>', 'A', '4', '<p>Berkurangnya kualitas keputusan karena minim partisipasi masyarakat</p>', '<p>Keputusan tetap berjalan namun kurang representatif</p>', '<p>Proses menjadi lebih cepat namun kurang aspiratif</p>', '<p>Proses tetap berjalan sesuai rencana awal</p>', ''),
(83, '<p>Kegiatan desa tidak terdokumentasi. Anda&hellip;</p>', 'A', '4', '<p>Menyusun dan memperbaiki sistem administrasi secara menyeluruh</p>', '<p>Menyusun sistem pencatatan dasar untuk kegiatan berjalan</p>', '<p>Mengingatkan petugas agar lebih tertib administrasi</p>', '<p>Menunggu laporan disusun secara bertahap</p>', ''),
(84, '<p>Warga protes pembangunan tidak merata. Anda&hellip;</p>', 'B', '4', '<p>Melakukan evaluasi internal terhadap distribusi pembangunan</p>', '<p>Melakukan evaluasi dan perencanaan ulang secara partisipatif</p>', '<p>Memberikan penjelasan kepada warga terkait kondisi yang ada</p>', '<p>Menyampaikan bahwa pembangunan berjalan sesuai rencana</p>', ''),
(85, '<p>Perangkat desa tidak disiplin. Anda&hellip;</p>', 'D', '4', '<p>Mengamati kondisi sebelum mengambil tindakan lebih lanjut</p>', '<p>Memberikan teguran untuk perbaikan sikap kerja</p>', '<p>Memberikan pembinaan dan pengawasan secara berkala</p>', '<p>Membina dan melakukan evaluasi kinerja secara berkelanjutan</p>', ''),
(86, '<p>Dana desa terlambat dilaporkan. Dampak utama&hellip;</p>', 'C', '4', '<p>Terhambatnya proses evaluasi dan pengawasan</p>', '<p>Keterlambatan dalam pelaporan administratif</p>', '<p>Menurunnya akuntabilitas dan kepercayaan publik</p>', '<p>Penyesuaian terhadap jadwal kegiatan</p>', ''),
(87, '<p>Program desa tidak berjalan sesuai rencana. Anda&hellip;</p>', 'C', '4', '<p>Menyesuaikan pelaksanaan program secara bertahap</p>', '<p>Melakukan evaluasi untuk mengetahui kendala utama</p>', '<p>Melakukan evaluasi menyeluruh dan perbaikan program</p>', '<p>Menunggu perkembangan sebelum mengambil keputusan</p>', ''),
(88, '<p>BPD tidak aktif mengawasi. Anda&hellip;</p>', 'D', '4', '<p>Menyesuaikan pelaksanaan kegiatan dengan kondisi yang ada</p>', '<p>Menyampaikan kondisi tersebut dalam forum koordinasi</p>', '<p>Mengingatkan pentingnya peran pengawasan dalam pemerintahan desa</p>', '<p>Mendorong optimalisasi fungsi pengawasan sesuai peran BPD</p>', ''),
(89, '<p>Warga tidak tahu program desa. Anda&hellip;</p>', 'B', '4', '<p>Menyampaikan informasi program secara berkala</p>', '<p>Meningkatkan sosialisasi secara aktif dan berkelanjutan</p>', '<p>Menyediakan informasi melalui media yang tersedia</p>', '<p>Menunggu masyarakat mencari informasi</p>', ''),
(90, '<p>Konflik warga dengan pemerintah desa. Anda&hellip;</p>', 'A', '4', '<p>Memfasilitasi mediasi dan musyawarah untuk solusi bersama</p>', '<p>Memfasilitasi komunikasi antar pihak yang berkonflik</p>', '<p>Menyampaikan imbauan agar menjaga kondusivitas</p>', '<p>Mengamati perkembangan situasi terlebih dahulu</p>', ''),
(91, '<p>Kegiatan tidak sesuai APBDes. Anda&hellip;</p>', 'A', '4', '<p>Menyesuaikan kegiatan agar sesuai dengan ketentuan APBDes</p>', '<p>Mengevaluasi kegiatan untuk penyesuaian anggaran</p>', '<p>Mengingatkan pelaksana kegiatan terkait aturan yang berlaku</p>', '<p>Menunggu arahan lebih lanjut dari pihak terkait</p>', ''),
(92, '<p>Warga tidak percaya pemerintah desa. Anda&hellip;</p>', 'D', '4', '<p>Menunggu kondisi membaik secara alami</p>', '<p>Menyampaikan klarifikasi terhadap isu yang berkembang</p>', '<p>Meningkatkan keterbukaan informasi secara bertahap</p>', '<p>Meningkatkan transparansi dan komunikasi publik</p>', ''),
(93, '<p>Penggunaan anggaran tidak efisien. Anda&hellip;</p>', 'C', '4', '<p>Melakukan evaluasi untuk meningkatkan efisiensi</p>', '<p>Mengingatkan penggunaan anggaran secara bijak</p>', '<p>Melakukan evaluasi dan optimasi penggunaan anggaran</p>', '<p>Menyesuaikan penggunaan anggaran secara terbatas</p>', ''),
(94, '<p>Tidak ada laporan kegiatan desa. Anda&hellip;</p>', 'B', '4', '<p>Menyusun sistem pelaporan dasar untuk kegiatan</p>', '<p>Mewajibkan sistem pelaporan yang terstruktur dan berkelanjutan</p>', '<p>Mengingatkan pentingnya pelaporan kegiatan</p>', '<p>Menunggu laporan disusun secara bertahap</p>', ''),
(95, '<p>Pelayanan desa lambat. Anda&hellip;</p>', 'D', '4', '<p>Menyesuaikan pelayanan dengan kondisi yang ada</p>', '<p>Mengingatkan petugas untuk meningkatkan kecepatan layanan</p>', '<p>Mengevaluasi proses pelayanan untuk peningkatan kinerja</p>', '<p>Mengevaluasi dan memperbaiki sistem pelayanan</p>', ''),
(96, '<p>Perangkat desa tidak memahami tugas. Anda&hellip;</p>', 'A', '4', '<p>Memberikan pelatihan dan pembinaan secara berkelanjutan</p>', '<p>Memberikan pembekalan terkait tugas dan fungsi</p>', '<p>Mengingatkan kembali tugas pokok yang harus dijalankan</p>', '<p>Menyesuaikan pembagian tugas sementara</p>', ''),
(97, '<p>Musyawarah desa hanya formalitas. Anda&hellip;</p>', 'B', '4', '<p>Mendorong peningkatan kualitas pelaksanaan musyawarah</p>', '<p>Mengaktifkan partisipasi masyarakat dalam musyawarah</p>', '<p>Mengikuti proses musyawarah yang berjalan</p>', '<p>Menyesuaikan dengan kondisi yang ada</p>', ''),
(98, '<p>Program dipaksakan kepala desa. Anda&hellip;</p>', 'A', '4', '<p>Mengingatkan pentingnya musyawarah dan aturan yang berlaku</p>', '<p>Mengkomunikasikan perlunya evaluasi program</p>', '<p>Menyampaikan pandangan dalam forum yang ada</p>', '<p>Menyesuaikan pelaksanaan program yang berjalan</p>', ''),
(99, '<p>Data desa tidak valid. Anda&hellip;</p>', 'C', '4', '<p>Melakukan pengecekan ulang data yang tersedia</p>', '<p>Mengingatkan pentingnya validitas data</p>', '<p>Melakukan verifikasi dan perbaikan data secara menyeluruh</p>', '<p>Menyesuaikan penggunaan data yang ada</p>', ''),
(100, '<p>Pembangunan tidak sesuai prioritas desa. Anda&hellip;</p>', 'D', '4', '<p>Menyesuaikan pelaksanaan pembangunan berjalan</p>', '<p>Menyampaikan masukan terkait prioritas pembangunan</p>', '<p>Melakukan evaluasi terhadap perencanaan yang ada</p>', '<p>Melakukan evaluasi dan penyesuaian prioritas pembangunan</p>', ''),
(101, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Warga mengeluh pelayanan lambat. Anda&hellip;</span></span></p>', 'A', '5', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menjelaskan antrean sambil mempercepat proses sesuai SOP</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menjelaskan kondisi antrean dan alur pelayanan</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Meminta warga menunggu sesuai giliran</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengarahkan ke petugas lain yang tersedia</span></span></p>', ''),
(102, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Warga tidak memahami prosedur surat. Anda&hellip;</span></span></p>', 'B', '5', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Memberikan penjelasan singkat sesuai alur</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menjelaskan rinci dan memastikan warga memahami</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengarahkan ke papan informasi pelayanan</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengarahkan ke petugas lain untuk penjelasan</span></span></p>', ''),
(103, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Terjadi kesalahan data oleh petugas. Anda&hellip;</span></span></p>', 'C', '5', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Memperbaiki tanpa konfirmasi</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Memperbaiki sambil memberi catatan internal</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengakui dan memperbaiki sesuai prosedur</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menunggu konfirmasi sebelum memperbaiki</span></span></p>', ''),
(104, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Warga minta dipercepat tanpa alasan. Anda&hellip;</span></span></p>', 'D', '5', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengarahkan ke petugas lain</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Memberi prioritas terbatas jika memungkinkan</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menolak sesuai aturan secara tegas</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menjelaskan prosedur secara sopan</span></span></p>', ''),
(105, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Antrean panjang di kantor desa. Anda&hellip;</span></span></p>', 'A', '5', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menambah loket/petugas pelayanan</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengatur alur antrean lebih efisien</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menjelaskan kondisi kepada warga</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Membatasi jumlah pelayanan sementara</span></span></p>', ''),
(106, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Warga marah karena layanan lama. Anda&hellip;</span></span></p>', 'A', '5', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menenangkan dan mencari solusi pelayanan</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menjelaskan kondisi sambil tetap melayani</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengarahkan ke petugas lain</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menjaga jarak agar situasi kondusif</span></span></p>', ''),
(107, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Perbedaan informasi antar petugas. Anda&hellip;</span></span></p>', 'B', '5', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengkoordinasikan penyamaan persepsi</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menyamakan informasi sesuai SOP</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengikuti informasi yang paling umum digunakan</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menyampaikan ke atasan untuk klarifikasi</span></span></p>', ''),
(108, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Warga tidak paham pelayanan digital. Anda&hellip;</span></span></p>', 'C', '5', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengarahkan ke petugas lain</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menjelaskan cara penggunaan sistem</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Memberikan pendampingan langsung</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengarahkan ke panduan digital</span></span></p>', ''),
(109, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Data warga tidak sesuai. Anda&hellip;</span></span></p>', 'B', '5', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Melakukan pengecekan ulang data</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Verifikasi dan perbaiki sesuai dokumen</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menggunakan data yang paling mendekati</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengarahkan warga melengkapi data</span></span></p>', ''),
(110, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Permintaan informasi sensitif. Anda&hellip;</span></span></p>', 'C', '5', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengarahkan ke pejabat berwenang</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Memberikan sebagian informasi yang diperbolehkan</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menjelaskan batasan sesuai aturan</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menolak secara umum tanpa detail</span></span></p>', ''),
(111, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Pelayanan tidak sesuai SOP. Anda&hellip;</span></span></p>', 'D', '5', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menyesuaikan secara bertahap ke SOP</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Melaporkan untuk evaluasi </span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Membiarkan sambil mengamati</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengembalikan ke SOP yang berlaku</span></span></p>', ''),
(112, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Warga tidak puas. Anda&hellip;</span></span></p>', 'C', '5', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menjelaskan kembali prosedur</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menampung keluhan untuk evaluasi</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mendengarkan dan memperbaiki layanan</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menyampaikan alasan pelayanan</span></span></p>', ''),
(113, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Keluhan berulang. Anda&hellip;</span></span></p>', 'D', '5', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Melaporkan kondisi ke pimpinan</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menangani keluhan satu per satu </span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menganalisis penyebab utama</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Evaluasi sistem pelayanan</span></span></p>', ''),
(114, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Warga lansia kesulitan. Anda&hellip;</span></span></p>', 'B', '5', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Memberi prioritas pelayanan</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Memberi bantuan khusus sesuai kebutuhan</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menjelaskan secara lebih perlahan</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengarahkan ke keluarga pendamping</span></span></p>', '');
INSERT INTO `soaltpa` (`id_soal`, `soal`, `jawaban`, `id_kategori`, `A`, `B`, `C`, `D`, `E`) VALUES
(115, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Petugas tidak disiplin. Anda&hellip;</span></span></p>', 'A', '5', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Membina dan melaporkan jika berulang</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Memberi teguran dan pengawasan</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengingatkan secara informal</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menyampaikan ke atasan</span></span></p>', ''),
(116, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Waktu pelayanan terbatas. Anda&hellip;</span></span></p>', 'C', '5', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menambah waktu jika memungkinkan </span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengatur prioritas pelayanan </span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengatur waktu secara efisien</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Membatasi jenis layanan</span></span></p>', ''),
(117, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Konflik antar warga. Anda&hellip;</span></span></p>', 'C', '5', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menenangkan situasi</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengarahkan ke pihak berwenang</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menjadi penengah netral</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menghindari konflik langsung</span></span></p>', ''),
(118, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Sistem lama menghambat. Anda&hellip;</span></span></p>', 'D', '5', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengevaluasi sistem berjalan</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menjalankan sesuai kondisi </span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Melaporkan kendala sistem</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengusulkan perbaikan sistem</span></span></p>', ''),
(119, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Permintaan di luar jam kerja. Anda&hellip;</span></span></p>', 'A', '5', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Membantu jika memungkinkan sesuai aturan</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menyarankan datang saat jam kerja</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Memberi solusi alternatif</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menolak secara sopan</span></span></p>', ''),
(120, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Informasi pelayanan tidak jelas. Anda&hellip;</span></span></p>', 'D', '5', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengarahkan ke papan informasi</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menjelaskan saat diminta</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menyediakan informasi tambahan</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Memperjelas melalui media &amp; petugas</span></span></p>', ''),
(121, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Berkas tidak lengkap. Anda&hellip;</span></span></p>', 'A', '5', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Memberi solusi sesuai aturan</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menjelaskan kekurangan berkas</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menunda sampai lengkap</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengarahkan ke informasi syarat</span></span></p>', ''),
(122, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Pelayanan diskriminatif. Anda&hellip;</span></span></p>', 'B', '5', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menegur dan evaluasi pelayanan</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menghentikan dan memperbaiki sistem</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Melaporkan ke atasan</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengamati kondisi terlebih dahulu</span></span></p>', ''),
(123, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Beban kerja tinggi. Anda&hellip;</span></span></p>', 'C', '5', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Meminta bantuan rekan kerja</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengelola waktu kerja</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengatur prioritas kerja</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menyelesaikan bertahap</span></span></p>', ''),
(124, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Warga sulit memahami penjelasan. Anda&hellip;</span></span></p>', 'C', '5', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menjelaskan dengan contoh</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Memberi penjelasan tambahan</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengulang dengan bahasa sederhana</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Mengarahkan ke informasi tertulis</span></span></p>', ''),
(125, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Pelayanan tidak efisien. Anda&hellip;</span></span></p>', 'A', '5', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Evaluasi dan perbaiki sistem pelayanan</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menganalisis proses pelayanan</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menyesuaikan alur kerja</span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Menjalankan sesuai kondisi</span></span></p>', '');

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
-- Table structure for table `tbjawaban`
--

CREATE TABLE `tbjawaban` (
  `Idjawab` int(11) NOT NULL,
  `npm` varchar(20) DEFAULT NULL,
  `idsoal` int(11) DEFAULT NULL,
  `hasil` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
(202604001, '2026-04-23', 'Nanang Sucipto', 'Banyuwangi', '2005-02-23', 'Jl. jalan', '-', '082257080011', 'Islam', 'Pria', 20050223, 0),
(202604002, '2026-04-26', 'Amalia', 'Ponorogo', '1997-04-14', 'jl. Jakarta No. 38', 'Kota Malang', '082257080011', 'Islam', 'Wanita', 19970414, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbsoal`
--

CREATE TABLE `tbsoal` (
  `Idsoal` int(11) NOT NULL,
  `k_D` varchar(50) DEFAULT NULL,
  `k_I` varchar(50) DEFAULT NULL,
  `k_S` varchar(50) DEFAULT NULL,
  `k_C` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbsoal`
--

INSERT INTO `tbsoal` (`Idsoal`, `k_D`, `k_I`, `k_S`, `k_C`) VALUES
(1, 'Petualang', 'Memberi semangat', 'Mudah menyesuaikan diri', 'Teliti'),
(2, 'Senang membujuk', 'Suka  bercerita', 'Suka kedamaian', 'Berpendirian teguh'),
(3, 'Berkemauan kuat', 'Pandai bergaul', 'Mau mengalah', 'Suka berkorban'),
(4, 'Suka bersaing', 'Suka meyakinkan', 'Senang dibimbing', 'Penuh pertimbangan'),
(5, 'Cenderung menahan diri', 'Periang', 'Cenderung menahan diri', 'Dihormati orang lain'),
(6, 'Percaya diri', 'Bersemangat', 'Cepat puas', 'Peka/perasa'),
(7, 'Berpikir positif', 'Suka memuji/menyanjung', 'Sabar', 'Pperencana'),
(8, 'Praktis', 'Spontan', 'Pemalu', 'Ketat pada waktu'),
(9, 'Suka berbicara terus terang', 'Optimis', 'Sopan/hormat', 'Rapi'),
(10, 'Tegar/kuat hati', 'Suka senda gurau', 'Ramah tamah', 'Jujur'),
(11, 'Berani/tidak penakut', 'Menyukai orang lain', 'Diplomatis/berhati-hati', 'Rinci/terperinci'),
(12, 'Berani mengambil resiko', 'Riang/gembira', 'Konsisten/tidak mudah berubah', 'Berbudaya/terpelajar'),
(13, 'Mandiri', 'Idealis', 'Suka memberi inspirasi', 'Percaya pada ide teman'),
(14, 'Mampu memutuskan', 'Lincah/suka membuka diri', 'Cinta keluarga', 'Tekun/ulet'),
(15, 'Cepat bertindak', 'Mudah berbaur/bergaul', 'Perantara/penengah', 'Gemar musik lembut'),
(16, 'Suka ngotot kuat bertahan', 'Senang bicara', 'Bersikap tolol', 'Senang berpikir'),
(17, 'Senang membimbing', 'Lincah bersemangat', 'Pendengar yg baik', 'Setia/tak gampang berubah'),
(18, 'Mudah menerima saran', 'Lucu/humoris', 'Mudah menerima saran', 'Berpikir matematis'),
(19, 'Produktif/menghasilkan', 'Terkenal luas/populer', 'Suka mengijinkan', 'Perfeksionis'),
(20, 'Berani/tidak gampang takut', 'Bersemangat/gembira', 'Berpendirian tetap', 'Berkelakuan tenang/ kalem'),
(21, 'Bersikap seperti boss (Bossy)', 'Bicara ramai/meriah', 'Tanpa ekspresi/datar', 'Malu-malu/sungkan'),
(22, 'Tidak simpatik', 'Kurang disiplin', 'Tidak mudah memaafkan', 'Kurang antusias/tidak bergairah (cuek)'),
(23, 'Suka melawan/membantah', 'Sering mengulang janji', 'Pendiam', 'Gampang tersinggung'),
(24, 'Cenderung blak-blakan', 'Pelupa', 'Suka takut/kuatir', 'Rewel/ngomel melulu'),
(25, 'Tidak sabaran', 'Suka memotong bicara orang lain', 'Sering bimbang memutuskan', 'Tidak merasa aman/mantap'),
(26, 'Sulit mempercayai orang lain', 'Sulit diramalkan/sulit diduga', 'Tidak suka melibatkan diri', 'Kurang terkenal/tidak populer'),
(27, 'Keras kepala', 'Serampangan/ceroboh', 'Bimbang/ragu-ragu', 'Sulit mengiklaskan/merelakan'),
(28, 'Tinggi hati/gengsi', 'Suka membiarkan', 'Kurang modis', 'Pesimis'),
(29, 'Gampang marah', 'Tanpa arah tujuan', 'Senang sendirian/ memisahkan diri', 'Suka berdebat/berbantahan'),
(30, 'Kasar/suka menyerang', 'Kurang tenang', 'Masa bodoh/tak pedulian', 'Selalu berpikir jelek/sukar percaya'),
(31, 'Bekerja giat terlalu keras', 'Ingin pujian/penghargaan', 'Kuatir/cemas', 'Menarik diri'),
(32, 'Tidak bijaksana/tidak pikir panjang', 'Banyak bicara/monopoli percakapan', 'Malu/segan', 'Terlalu peka'),
(33, 'Ambisius', 'Tidak teratur/berantakan', 'Banyak ragu-ragu/sanksi', 'Murung/mudah patah semangat'),
(34, 'Sukar bertoleransi', 'Gampang berubah pendirian', 'Lalai/acuh tak acuh (cuek bgt)', 'Tertutup/sulit membuka diri'),
(35, 'Manipulatif/suka memanfaatkan', 'Kurang rapi/morat-marit', 'Suka menggerutu/ngomel', 'Murung/masgul hati'),
(36, 'Bandel', 'Berlagak/suka pamer', 'Lamban', 'Ragu2/selalu curiga'),
(37, 'Suka memerintah/menggurui', 'Suka membual/bohong', 'Malas/ berat langkah', 'Penyendiri'),
(38, 'Cepat marah/emosional', 'Bingung/sulit berkonsentrasi', 'Enggan/sering ogah', 'Sering berprasangka'),
(39, 'Gegabah/terburu-buru', 'Sering resah/ gelisah', 'Cepat marah/emosional', 'Enggan/sering ogah'),
(40, 'Senang bertipu daya/ ngakalin org', 'Angin-anginan/suka berubah pikiran', 'Mudah berkompromi/suka mengalah', 'Sering mencela/mengkritik'),
(41, 'Petualang', 'Memberi semangat', 'Mudah menyesuaikan diri', 'Teliti'),
(42, 'Senang membujuk', 'Suka  bercerita', 'Suka kedamaian', 'Berpendirian teguh'),
(43, 'Berkemauan kuat', 'Pandai bergaul', 'Mau mengalah', 'Suka berkorban'),
(44, 'Suka bersaing', 'Suka meyakinkan', 'Senang dibimbing', 'Penuh pertimbangan'),
(45, 'Senang menangani masalah', 'Periang', 'Cenderung menahan diri', 'Dihormati orang lain'),
(46, 'Percaya diri', 'Bersemangat', 'Cepat puas', 'Peka/perasa'),
(47, 'Berpikir positif', 'Suka memuji/menyanjung', 'Sabar', 'perencana'),
(48, 'Praktis', 'Spontan', 'Pemalu', 'Ketat pada waktu'),
(49, 'Suka berbicara terus terang', 'Optimis', 'Sopan/hormat', 'Rapi'),
(50, 'Tegar/kuat hati', 'Suka senda gurau', 'Ramah tamah', 'Jujur'),
(51, 'Berani/tidak penakut', 'Menyukai orang lain', 'Diplomatis/berhari-hati', 'Rinci/terperinci'),
(52, 'Berani mengambil resiko', 'Riang/gembira', 'Konsisten/tidak mudah berubah', 'Berbudaya/terpelajar'),
(53, 'Mandiri', 'Idealis', 'Suka memberi inspirasi', 'Percaya pada ide teman'),
(54, 'Mampu memutuskan', 'Lincah/suka membuka diri', 'Cinta keluarga', 'Tekun/ulet'),
(55, 'Cepat bertindak', 'Mudah berbaur/bergaul', 'Perantara/penengah', 'Gemar musik lembut'),
(56, 'Suka ngotot kuat bertahan', 'Senang bicara', 'Bersikap tolol', 'Senang berpikir'),
(57, 'Senang membimbing', 'Lincah bersemangat', 'Pendengar yg baik', 'Setia/tak gampang berubah'),
(58, 'Suka memimpin', 'Lucu/humoris', 'Mudah menerima saran', 'Berpikir matematis'),
(59, 'Produktif/menghasilkan', 'Terkenal luas/populer', 'Suka mengijinkan', 'Perfeksionis'),
(60, 'Berani/tidak gampang takut', 'Bersemangat/gembira', 'Berpendirian tetap', 'Berkelakuan tenang/ kalem'),
(61, 'Bersikap seperti boss (Bossy)', 'Berpendirian tetap', 'Tanpa ekspresi/datar', 'Malu-malu/sungkan'),
(62, 'Tidak simpatik', 'Kurang disiplin', 'Tidak mudah memaafkan', 'Kurang antusias/tidak bergairah (cuek)'),
(63, 'Suka melawan/membantah', 'Sering mengulang janji', 'Pendiam', 'Gampang tersinggung'),
(64, 'Cenderung blak-blakan', 'Pelupa', 'Suka takut/kuatir', 'Rewel/ngomel melulu'),
(65, 'Tidak sabaran', 'Suka memotong bicara orang lain', 'Sering bimbang memutuskan', 'Tidak merasa aman/mantap'),
(66, 'Sulit mempercayai orang lain', 'Sulit diramalkan/sulit diduga', 'Tidak suka melibatkan diri', 'Kurang terkenal/tidak populer'),
(67, 'Keras kepala', 'Serampangan/ceroboh', 'Bimbang/ragu-ragu', 'Sulit mengiklaskan/merelakan'),
(68, 'Tinggi hati/gengsi', 'Suka membiarkan', 'Kurang modis', 'Pesimis'),
(69, 'Gampang marah', 'Tanpa arah tujuan', 'Senang sendirian/ memisahkan diri', 'Suka berdebat/berbantahan'),
(70, 'Kasar/suka menyerang', 'Kurang tenang', 'Masa bodoh/tak pedulian', 'Selalu berpikir jelek/sukar percaya'),
(71, 'Bekerja giat terlalu keras', 'Ingin pujian/penghargaan', 'Kuatir/cemas', 'Menarik diri'),
(72, 'Tidak bijaksana/tidak pikir panjang', 'Banyak bicara/monopoli percakapan', 'Malu/segan', 'Terlalu peka'),
(73, 'Ambisius', 'Tidak teratur/berantakan', 'Banyak ragu-ragu/sanksi', 'Murung/mudah patah semangat'),
(74, 'Sukar bertoleransi', 'Gampang berubah pendirian', 'Lalai/acuh tak acuh (cuek bgt)', 'Tertutup/sulit membuka diri'),
(75, 'Manipulatif/suka memanfaatkan', 'Kurang rapi/morat-marit', 'Suka menggerutu/ngomel', 'Murung/masgul hati'),
(76, 'Bandel', 'Berlagak/suka pamer', 'Lamban', 'Ragu2/selalu curiga'),
(77, 'Suka memerintah/menggurui', 'Suka membual/bohong', 'Malas/ berat langkah', 'Penyendiri'),
(78, 'Cepat marah/emosional', 'Bingung/sulit berkonsentrasi', 'Enggan/sering ogah', 'Sering berprasangka'),
(79, 'Gegabah/terburu-buru', 'Sering resah/ gelisah', 'Perlu dorongan/bimbingan', 'Suka membalas dendam'),
(80, 'Senang bertipu daya/ ngakalin org', 'Angin-anginan/suka berubah pikiran', 'Mudah berkompromi/suka mengalah', 'Sering mencela/mengkritik');

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
-- Table structure for table `tb_detail_jawaban`
--

CREATE TABLE `tb_detail_jawaban` (
  `id_soal` int(11) NOT NULL,
  `jawaban_soal` varchar(2) DEFAULT NULL,
  `isi_jawaban` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_detail_jawaban`
--

INSERT INTO `tb_detail_jawaban` (`id_soal`, `jawaban_soal`, `isi_jawaban`) VALUES
(1, 'A', '<p>Dasar Negara</p>'),
(1, 'B', '<p>Dasar Kenegaraan</p>'),
(1, 'C', '<p>Dasar Beragama</p>'),
(1, 'D', '<p>Dasar Ketatanegaraan</p>'),
(2, 'A', 'Pidato Bung Karno'),
(2, 'B', 'Proklamasi 17 Agustus 1945'),
(2, 'C', 'Pembukaan UUD 1945'),
(2, 'D', 'Piagam Jakarta'),
(3, 'A', 'Sumber dari segala sumber hukum'),
(3, 'B', 'Hukum tertinggi di Indonesia'),
(3, 'C', 'Hukum tertulis tertinggi di indonesia'),
(3, 'D', 'Setingkat dengan UUD 1945'),
(4, 'A', 'Pandangan hidup'),
(4, 'B', 'Filsafat dan dasar negara'),
(4, 'C', 'Sumber hukum'),
(4, 'D', 'Semua benar'),
(5, 'A', 'Sila kedua'),
(5, 'B', 'Sila ketiga'),
(5, 'C', 'Sila keempat'),
(5, 'D', 'Sila kelima'),
(7, 'A', 'Pembukaan UUD 1945'),
(7, 'B', 'Konstitusi RIS'),
(7, 'C', 'TAP MPR RI No. II/MPR/1978'),
(7, 'D', 'Buku Sutasoma'),
(9, 'A', 'Pribadi'),
(9, 'B', 'Perlakuan dan perlindungan'),
(9, 'C', 'Politik'),
(9, 'D', 'Sosial budaya'),
(10, 'A', '1 Juni 1945'),
(10, 'B', '17 Agustus 1945'),
(10, 'C', '18 Agustus 1945'),
(10, 'D', '20 Agustus 1945'),
(11, 'A', 'Bantuan diplomasi'),
(11, 'B', 'Kerjasama militer'),
(11, 'C', 'Hubungan diplomatik'),
(11, 'D', 'Kunjungan kepala negara'),
(12, 'A', 'Meningkatkan kesejahteraan'),
(12, 'B', 'Mewujudkan ketertiban'),
(12, 'C', 'Memelihara kekuasaan'),
(12, 'D', 'Menjamin keamanan'),
(13, 'A', 'Kepala negaranya adalah seorang presiden'),
(13, 'B', 'Kekuasaan asli ada pada pemerintah pusat'),
(13, 'C', 'Warga negara mudah berpindah domisili'),
(13, 'D', 'Adanya konstitusi yang tertulis'),
(14, 'A', 'Presiden dalam kekuasaan Dewan Perwakilan Rakyat'),
(14, 'B', 'Dewan Perwakilan Rakyat dalam kekuasaan Presiden'),
(14, 'C', 'Presiden dalam kekuasaan Mahkamah Agung'),
(14, 'D', 'Mahkamah Agung dalam kekuasaan Presiden'),
(15, 'A', 'Pembentukan Kabinet sangat demokratis'),
(15, 'B', 'Jalannya pemerintahan lebih stabil'),
(15, 'C', 'Para menteri bertanggung jawab secara kolektif'),
(15, 'D', 'Para menteri dapat diganti sewaktu-waktu'),
(16, 'A', 'KNPI'),
(16, 'B', 'KNIP'),
(16, 'C', 'KNI'),
(16, 'D', 'KPIR'),
(17, 'A', 'Hindia Belanda dengan beberapa perubahan'),
(17, 'B', 'Negara Indonesia Timur dengan beberapa perubahan'),
(17, 'C', '1945 yang disempurnakan'),
(17, 'D', 'RIS dengan beberapa perubahan'),
(18, 'A', 'Perang Ideologi'),
(18, 'B', 'Perlombaan persenjataan'),
(18, 'C', 'Persaingan ekonomi global'),
(18, 'D', 'Ofensif politik'),
(19, 'A', 'Penggugah rasa'),
(19, 'B', 'Penilaian'),
(19, 'C', 'Perubahan'),
(19, 'D', 'Ijin menetap'),
(20, 'A', 'Perkiraan'),
(20, 'B', 'Standar'),
(20, 'C', 'Umum'),
(20, 'D', 'Normal'),
(21, 'A', 'Hipotesis'),
(21, 'B', 'Praduga'),
(21, 'C', 'Thesis'),
(21, 'D', 'Buatan'),
(22, 'A', 'Dibagi dua'),
(22, 'B', 'Dwi Fungsi'),
(22, 'C', 'Kembar dua'),
(22, 'D', 'Dua Kekuatan'),
(23, 'A', 'Selalu Negatif'),
(23, 'B', 'Tiada Berair'),
(23, 'C', 'Air Mineral'),
(23, 'D', 'Harus Ada'),
(24, 'A', 'Kekerasan'),
(24, 'B', 'Pendukung'),
(24, 'C', 'Manifestasi'),
(24, 'D', 'Bimbingan'),
(25, 'A', 'Individual'),
(25, 'B', 'Konsensus'),
(25, 'C', 'Keserasian'),
(25, 'D', 'Internal'),
(26, 'A', 'Terkemuka'),
(26, 'B', 'Pendukung'),
(26, 'C', 'Biasa'),
(26, 'D', 'Setuju'),
(27, 'A', 'Induksi'),
(27, 'B', 'Konduksi'),
(27, 'C', 'Reduksi'),
(27, 'D', 'Intuisi'),
(28, 'A', 'Migrasi'),
(28, 'B', 'Transmigrasi'),
(28, 'C', 'Emigrasi'),
(28, 'D', 'Pemukiman'),
(29, 'A', 'Akademi : Taruna'),
(29, 'B', 'Rumah Sakit : Pasien'),
(29, 'C', 'Konservator : Seniman'),
(29, 'D', 'Perpustakaan : Peneliti'),
(30, 'A', 'Dagelan : Sandiwara'),
(30, 'B', 'Dugaan : Rekaan'),
(30, 'C', 'Data : Estimasi'),
(30, 'D', 'Dongeng : Peristiwa'),
(31, 'A', 'Jam : Tangan'),
(31, 'B', 'Lidah : Hidung'),
(31, 'C', 'Kaki : Paha'),
(31, 'D', 'Lutut : Siku'),
(32, 'A', 'Hubungan : Jambangan'),
(32, 'B', 'Gelas : Nampan'),
(32, 'C', 'Air : Tempayan'),
(32, 'D', 'Buku : Percetakan'),
(33, 'A', 'Sayap'),
(33, 'B', 'Baling-baling'),
(33, 'C', 'Pramugari'),
(33, 'D', 'Pilot'),
(34, 'A', '5,050'),
(34, 'B', '4,252'),
(34, 'C', '3,605'),
(34, 'D', '2,625'),
(34, 'E', '1,850'),
(35, 'A', '4,20'),
(35, 'B', '1480'),
(35, 'C', '22,00'),
(35, 'D', '16,20'),
(36, 'A', '20,50'),
(36, 'B', '08,48'),
(36, 'C', '14,09'),
(36, 'D', '34,59'),
(37, 'A', '51,87'),
(37, 'B', '23,69'),
(37, 'C', '21,48'),
(37, 'D', '11,875'),
(41, 'A', '-81'),
(41, 'B', '-27'),
(41, 'C', '27'),
(41, 'D', '81'),
(43, 'A', '6'),
(43, 'B', '5'),
(43, 'C', '4'),
(43, 'D', '3'),
(44, 'A', '18 24'),
(44, 'B', '62 31'),
(44, 'C', '63 31'),
(44, 'D', '66 34'),
(45, 'A', '15 19'),
(45, 'B', '16 24'),
(45, 'C', '14 18'),
(45, 'D', '38 39'),
(46, 'A', 'Semua yang hadir dalam rapat rutin adalah office boy'),
(46, 'B', 'Sementara peserta rapat rutin bukan karyawan'),
(46, 'C', 'Sementara peserta rapat rutin adalah office boy'),
(46, 'D', 'Semua office boy hadir dalam rapat rutin'),
(47, 'A', 'Hermawan memiliki 2 orang anak kandung'),
(47, 'B', 'Hermawan merupakan anak tertua dalam keluarga'),
(47, 'C', 'Hermawan tidak memiliki saudara tiri'),
(47, 'D', 'Hermawan memiliki 4 orang adik'),
(48, 'A', 'Sementara dokter adalah laki-laki'),
(48, 'B', 'Sementara laki-laki adalah bukan dokter'),
(48, 'C', 'Sementara dokter adalah bukan laki-laki'),
(48, 'D', 'Tidak ada dokter yang bukan laki-laki'),
(49, 'A', 'Beberapa burung terbang ke utara'),
(49, 'B', 'Semua burung adalah merpati'),
(49, 'C', 'Tidak setiap merpati yang terbang ke utara adalah burung'),
(49, 'D', 'Burung bukan merpati'),
(6, 'A', 'Posisi negara yang terdiri dari pulau-pulau yang terpisah ol'),
(6, 'B', 'Keyakinan bangsa Indonesia akan kebenaran Pancasila'),
(6, 'C', 'Pegawai Negeri Sipil yang menjaganya'),
(6, 'D', 'Kekuatan TNI'),
(8, 'A', 'Keamanan dan kemampuan mengadakan tuntutan dan kebutuhan masyarakat modern'),
(8, 'B', 'Kemauan dan kemampuan mengembangkan pertengkaran antar umat beragama'),
(8, 'C', 'Kemauan dan kemampuan manusia Indonesia dalam mengendalikan diri'),
(8, 'D', 'Kemauan dan kemampuan manusia Indonesia mengembangkan kebudayaan asing'),
(38, 'A', '51,87'),
(38, 'B', '23,69'),
(38, 'C', '21,48'),
(38, 'D', '11,875'),
(39, 'A', '435'),
(39, 'B', '280'),
(39, 'C', '465'),
(39, 'D', '300'),
(40, 'A', '275'),
(40, 'B', '285'),
(40, 'C', '385'),
(40, 'D', '485'),
(42, 'A', '994.003'),
(42, 'B', '994.004'),
(42, 'C', '994.009'),
(42, 'D', '894.003'),
(50, 'A', '<p>xxxxxxxxxxxxx</p>'),
(50, 'B', '<p>xxxxxxxx</p>'),
(50, 'C', NULL),
(50, 'D', '<p>xxxxxxxx</p>'),
(50, 'A', '<p>ss</p>'),
(50, 'B', '<p>sss</p>'),
(50, 'C', '<p>ssss</p>'),
(50, 'D', '<p>ssss</p>');

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
-- Indexes for table `mhsdaft`
--
ALTER TABLE `mhsdaft`
  ADD KEY `MHSDAFTNPM` (`NPM`),
  ADD KEY `NAMA` (`NAMA`);

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
-- Indexes for table `tbjawaban`
--
ALTER TABLE `tbjawaban`
  ADD PRIMARY KEY (`Idjawab`);

--
-- Indexes for table `tbpendaftar`
--
ALTER TABLE `tbpendaftar`
  ADD PRIMARY KEY (`NPM`);

--
-- Indexes for table `tbsoal`
--
ALTER TABLE `tbsoal`
  ADD PRIMARY KEY (`Idsoal`);

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
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `status_tes`
--
ALTER TABLE `status_tes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbadmin`
--
ALTER TABLE `tbadmin`
  MODIFY `IdAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbjawaban`
--
ALTER TABLE `tbjawaban`
  MODIFY `Idjawab` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbsoal`
--
ALTER TABLE `tbsoal`
  MODIFY `Idsoal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

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
