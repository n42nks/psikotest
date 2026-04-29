-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2026 at 07:54 AM
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
  `D` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `soaltpa`
--

INSERT INTO `soaltpa` (`id_soal`, `soal`, `jawaban`, `id_kategori`, `A`, `B`, `C`, `D`) VALUES
(1, 'Dalam kehidupan bernegara, Pancasila berperan sebagai...', 'B', '1', 'Dasar Negara', 'Dasar Kenegaraan', 'Dasar Beragama', 'Dasar Ketatanegaraan'),
(2, 'Rumusan Pancasila yang resmi terdapat dalam...', 'C', '1', 'Pidato Bungkarno', 'Proklamasi 17 Agustus 1945', 'Pembukaan UUD 1945', 'Piagam Jakarta'),
(3, 'Dalam sumber tata hukum di Indonesia, Pancasila dijadikan sebagai...', 'A', '1', 'Sumber dari segala sumber hukum', 'Hukum tertinggi di Indonesia', 'Hukum tertulis tertinggi di indonesia', 'Setingkat dengan UUD 1945'),
(4, 'Pancasila bagi bangsa Indonesia merupakan', 'A', '1', '	\r\nPandangan hidup', '	\r\nFilsafat dan dasar negara', 'Sumber hukum', 'Semua benar'),
(5, 'Hubungan sosial yang selaras, serasi, seimbang antara individu dan masyarakat dijiwai oleh nilai-nilai Pancasila, yaitu...', 'A', '1', 'Sila kedua', 'Sila ketiga', 'Sila keempat', 'Sila kelima'),
(6, 'Berdasarkan pengalaman sejarah, Pancasila sebagai dasar negara ternyata tetap tegak walaupun mengalami berbagai cobaan. Adapun kekuatannya terletak pada:', 'B', '1', 'Posisi negara yang terdiri dari pulau-pulau yang', 'Keyakinan bangsa Indonesia akan kebenaran Pancasila', 'Pegawai Negeri Sipil yang menjaganya', '	\r\nKekuatan TNI'),
(7, 'Pancasila yang benar dan perlu dihayati serta diamalkan adalah Pancasila yang rumusannya tercantum dalam:', 'A', '1', 'Pembukaan UUD 1945', 'Konstitusi RIS', 'TAP MPR RI No. II/MPR/1978', '	\r\nBuku Sutasoma'),
(8, 'Pangkal tolak penghayatan dan pengamalan Pancasila adalah...', 'C', '1', 'Keamanan dan kemampuan mengadakan tuntutan dan kebutuhan masyarakat modern', 'Kemauan dan kemampuan mengembangkan pertengkaran antar umat beragama', 'Kemauan dan kemampuan manusia Indonesia dalam mengendalikan diri', 'Kemauan dan kemampuan manusia Indonesia mengembangkan kebudayaan asing'),
(9, 'Beribadah dan menganut suatu agama atau kepercayaan adalah merupakan asasi.', 'A', '1', 'Pribadi', 'Perlakuan dan perlindungan', 'Politik', 'Sosial budaya'),
(10, 'Secara formal Pancasila disahkan sebagai dasar negara Republik Indonesia pada tanggal', 'D', '1', '1 Juni 1945', '17 Agustus 1945', '18 Agustus 1945', '20 Agustus 1945'),
(11, 'Pengakuan de jure dari suatu negara terhadap negara yang lain ditandai oleh...', 'B', '2', 'Bantuan diplomasi', 'Mewujudkan ketertiban', 'Hubungan diplomatik', 'Kunjungan kepala negara'),
(12, 'Dilihat dari segi tujuannya, negara kepolisian bertujuan...', 'B', '2', 'Meningkatkan kesejahteraan', 'Mewujudkan ketertiban', 'Memelihara kekuasaan', 'Menjamin keamanan'),
(13, 'Ciri Khas negara kesatuan adalah...', 'B', '2', 'Kepala negaranya adalah seorang presiden', 'Kekuasaan asli ada pada pemerintah pusat', 'Warga negara mudah berpindah domisili', 'Adanya konstitusi yang tertulis'),
(14, 'Apabila didasarkan pada ajaran Trias Politika, yang dikenal dengan teori pemisahan kekuasaan negara, maka penetapan APBN menurut UUD 1945 merupakan campur tangan...', 'A', '2', 'Presiden dalam kekuasaan Dewan Perwakilan Rakyat', 'Dewan Perwakilan Rakyat dalam kekuasaan Presiden', 'Presiden dalam kekuasaan Mahkamah Agung', 'Mahkamah Agung dalam kekuasaan Presiden'),
(15, 'Jika dibandingkan dengan kabinet parlementer kelebihan kabinet presidentil adalah dalam hal...', 'B', '2', 'Pembentukan Kabinet sangat demokratis', 'Jalannya pemerintahan lebih stabil', 'Para menteri bertanggung jawab secara kolektif', 'Para menteri dapat diganti sewaktu-waktu'),
(16, 'Untuk mempertahankan kedaulatan Republik Indonesia pada tanggal 23 Agustus 1945 Presiden Soekarno mengumumkan berdirinya tiga abadan baru, yaitu...', 'A', '3', 'KNPI', 'KNIP', 'KNI', 'KPIR'),
(17, '<p>Setelah indonesia merdeka dan memperoleh pengakuan internasional, ternyata masalah-masalah yang dihadapi belum berakhir, terutama masalah konstitusi. Pada tahun 1950, setelah terbentuk negara kesatuan, UUD Sementara yang digunakan pada hakikatnya merupakan</p>', 'A', '3', 'Hindia Belanda dengan beberapa perubahan', 'Negara Indonesia Timur dengan beberapa perubahan', '1945 yang disempurnakan', 'RIS dengan beberapa perubahan'),
(18, 'Indonesia menjadi negara-negara nonblok karena ingin netral dalam percaturan dua negara adikuasa, Amerika Serikat dan Rusia. Kedua negara itu setelah Perang dunia II terlibad dalam...', 'B', '3', 'Perang Ideologi', 'Perlombaan persenjataan', '	\r\nPersaingan ekonomi global', 'Ofensif politik'),
(19, 'Evokasi', 'A', '4', 'Penggugah rasa', 'Penilaian', 'Perubahan', 'Ijin menetap'),
(20, 'BAKU', 'B', '4', 'Perkiraan', 'Standar', 'Umum', 'Normal'),
(21, 'PROTESIS', 'D', '4', 'Hipotesis', 'Praduga', 'Thesis', 'Buatan'),
(22, 'DIKOTOMI', 'A', '4', 'Dibagi dua', 'Dwi Fungsi', 'Kembar dua', 'Dua Kekuatan'),
(23, 'SINE QUA NON', 'D', '4', 'Selalu Negatif', 'Tiada Berair\r\n', 'Air Mineral', 'Harus Ada'),
(24, 'KENDALA', 'B', '5', 'Kekerasan', 'Pendukung', 'Manifestasi', 'Bimbingan'),
(25, 'EKSTRINSIK', 'D', '5', 'Individual', 'Konsensus', 'Keserasian', 'Internal'),
(26, 'PROMINEN', 'C', '5', 'Terkemuka', 'Pendukung', 'Biasa', 'Setuju'),
(27, 'Deduksi', 'A', '5', '	\r\nInduksi', 'Konduksi', 'Reduksi\r\n', 'Intuisi'),
(28, 'IMIGRASI', 'C', '5', 'Migrasi', 'Transmigrasi', 'Emigrasi', 'Pemukiman'),
(29, 'SEMINAR : SARJANA', 'D', '6', 'Akademi : Taruna', 'Rumah Sakit : Pasien', 'Konservator : Seniman', 'Perpustakaan : Peneliti'),
(30, 'FIKTIF : FAKTA', 'D', '6', 'Dagelan : Sandiwara', 'Dugaan : Rekaan', 'Data : Estimasi', 'Dongeng : Peristiwa'),
(31, 'MATA : TELINGA', 'B', '6', 'Jam : Tangan', 'Lidah : Hidung', 'Kaki : Paha', 'Lutut : Siku'),
(32, 'UANG : PUNDI-PUNDI', 'C', '6', 'Hubungan : Jambangan', 'Gelas : Nampan', 'Air : Tempayan', 'Buku : Percetakan'),
(33, 'PEDATI : KUDA - PESAWAT TERBANG : ...', 'B', '6', 'Sayap', 'Baling-baling', 'Pramugari', 'Pilot'),
(34, '2,20 x 0,75 + 3/5 : 1/8', 'D', '7', '4,20', '1480', '22,00', '16,20'),
(35, '7,5 : 2,5 - (2/4 x 3/4) = ...', 'D', '7', '5,050', '4,252', '3,605', '2,625'),
(36, '4/5 + 3/5 + 3/8 + 6/8 + 1 <sup> 1/2 </sup> = ...', 'A', '7', '20,50\r\n', '08,48', '14,09', '34,59'),
(37, '( <sup> 1/4 </sup> x 164 ) x <sup> 1/2 </sup>', 'A', '7', '51,87', '23,69', '21,48', '11,875'),
(38, '2 <sup> 1/4 </sup> x 7,5 - 7,5 : 1 <sup> 1/2 </sup> = ...', 'D', '7', '51,87', '23,69', '21,48', '11,875'),
(39, '1 + 2 + 3 + 4 + 5 + .................... + 29 =', 'A', '7', '435\r\n', '280', '465', '300'),
(40, '1 <sup> 2 </sup> + 2 <sup> 2 </sup>  + 3 <sup> 2 </sup>  + 4 <sup> 2 </sup>  + 5 <sup> 2 </sup>  + .................... 9 <sup> 2 </sup>  =', 'B', '7', '275', '285', '385', '485'),
(41, 'Jika a = 5 dan b = 2, maka nilai dari a <sup> 2 </sup>  - 3a <sup> 2 </sup> b + 3ab <sup> 2 </sup>  - b <sup> 2 </sup>  =', 'C', '7', '-81', '-27', '27', '81'),
(42, '(882 + 115)<sup> 2 </sup>  =', 'C', '7', '994.003', '994.004', '994.009', '894.003'),
(43, '... 2 5 6 7 10 9 14', 'D', '8', '6', '5', '4', '3'),
(44, '42 13 19 49 19 19 56 25 19 ... ...', 'C', '8', '18 24', '62 31', '63 31', '66 34'),
(45, '5 6 7 8 10 11 14 ... ...', 'A', '8', '15 19', '62 31', '14 18', '38 39'),
(46, 'Semua karyawan harus hadir dalam rapat rutin. Sementara office boy adalah karyawan.', 'C', '9', 'Semua yang hadir dalam rapat rutin adalah office b...', 'Sementara peserta rapat rutin bukan karyawan\r\n', 'Sementara peserta rapat rutin adalah office boy', 'Semua office boy hadir dalam rapat rutin'),
(47, 'Ketika ayah dan ibu Hermawan menikah, masing-masing telah memiliki seorang anak. Sekarang Hermawan lahir persis setahun setelah perkawinan tersebut, dan memiliki 4 saudara.', 'A', '9', 'Hermawan memiliki 2 orang anak kandung', 'Hermawan merupakan anak tertua dalam keluarga', 'Hermawan tidak memiliki saudara tiri', 'Hermawan memiliki 4 orang adik'),
(48, 'Jika pernyataan \"Semua Dokter adalah laki-laki\" salah, maka :', 'C', '9', 'Sementara dokter adalah laki-laki', 'Sementara laki-laki adalah bukan dokter', 'Sementara dokter adalah bukan laki-laki', 'Tidak ada dokter yang bukan laki-laki'),
(49, 'Merpati terbang ke utara. Merpati adalah burung.', 'A', '9', 'Beberapa burung terbang ke utara', 'Semua burung adalah merpati', 'Tidak setiap merpati yang terbang ke utara adalah ...', 'Burung bukan merpati');

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
(1, '202604001', 1, 1, '2026-04-28 06:54:39', '2026-04-28 06:54:39'),
(2, '202604001', 2, 1, '2026-04-28 06:55:00', '2026-04-28 06:55:00'),
(3, '202604001', 3, 1, '2026-04-28 06:55:17', '2026-04-28 06:55:17'),
(4, '202604001', 4, 1, '2026-04-28 06:55:40', '2026-04-28 06:55:40'),
(5, '202604001', 5, 1, '2026-04-28 06:55:59', '2026-04-28 06:56:27'),
(6, '202604002', 1, 1, '2026-04-28 07:32:08', '2026-04-28 07:37:18'),
(7, '202604002', 2, 1, '2026-04-28 07:37:50', '2026-04-28 07:37:50'),
(8, '202604002', 3, 1, '2026-04-28 07:38:45', '2026-04-28 07:38:45'),
(9, '202604002', 4, 1, '2026-04-28 07:39:04', '2026-04-28 07:39:04'),
(10, '202604002', 5, 1, '2026-04-28 07:39:22', '2026-04-28 07:39:22');

-- --------------------------------------------------------

--
-- Table structure for table `tbadmin`
--

CREATE TABLE `tbadmin` (
  `IdAdmin` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbadmin`
--

INSERT INTO `tbadmin` (`IdAdmin`, `nama`, `username`, `password`) VALUES
(1, 'Admin', 'admin', '007'),
(3, 'husein', 'husein', '007');

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
  `Password` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbpendaftar`
--

INSERT INTO `tbpendaftar` (`NPM`, `tgl_daftar`, `Nama`, `Tmp_lahir`, `Tgl_lahir`, `Alamat`, `Kota`, `Telp`, `Agama`, `Jkelamin`, `Password`) VALUES
(202604001, '2026-04-23', 'Nanang Sucipto', 'Banyuwangi', '2005-02-23', 'Jl. jalan', '-', '082257080011', 'Islam', 'Pria', 20050223),
(202604002, '2026-04-26', 'Amalia', 'Ponorogo', '1997-04-14', 'jl. Jakarta No. 38', 'Kota Malang', '082257080011', 'Islam', 'Wanita', 19970414);

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
(1, '2020-06-03', 60, 'Wawasan Kebangsaan'),
(2, '2020-06-04', 25, 'Intelegensi Umum'),
(3, '2020-06-03', 30, 'Karateristik Pribadi'),
(4, '2026-04-24', 25, 'Pengetahuan Pemerintahan Desa'),
(5, '2026-04-24', 30, 'Pengetahuan Administrasi dan Pelayanan Publik');

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

--
-- Dumping data for table `tb_jawab_peserta`
--

INSERT INTO `tb_jawab_peserta` (`id`, `npm`, `id_soal`, `id_kategori`, `jawaban_peserta`) VALUES
(1, '202604001', 1, 1, 'B'),
(2, '202604001', 2, 1, 'C'),
(3, '202604001', 3, 1, 'A'),
(4, '202604001', 4, 1, 'A'),
(5, '202604001', 5, 1, 'A'),
(6, '202604001', 6, 1, 'B'),
(7, '202604001', 7, 1, 'C'),
(8, '202604001', 8, 1, 'C'),
(9, '202604001', 9, 1, 'A'),
(10, '202604001', 10, 1, 'D'),
(11, '202604001', 11, 2, 'B'),
(12, '202604001', 12, 2, 'C'),
(13, '202604001', 13, 2, 'B'),
(14, '202604001', 14, 2, 'A'),
(15, '202604001', 15, 2, 'B'),
(16, '202604001', 16, 3, 'A'),
(17, '202604001', 17, 3, 'A'),
(18, '202604001', 18, 3, 'B'),
(19, '202604001', 19, 4, 'A'),
(20, '202604001', 20, 4, 'A'),
(21, '202604001', 21, 4, 'D'),
(22, '202604001', 22, 4, 'A'),
(23, '202604001', 23, 4, 'D'),
(24, '202604001', 24, 5, 'B'),
(25, '202604001', 25, 5, 'D'),
(26, '202604001', 26, 5, 'C'),
(27, '202604001', 27, 5, 'D'),
(28, '202604001', 28, 5, 'C'),
(39, '202604002', 1, 1, 'A'),
(40, '202604002', 2, 1, 'A'),
(41, '202604002', 3, 1, 'B'),
(42, '202604002', 4, 1, 'C'),
(43, '202604002', 5, 1, 'B'),
(44, '202604002', 6, 1, 'C'),
(45, '202604002', 7, 1, 'A'),
(46, '202604002', 8, 1, 'C'),
(47, '202604002', 9, 1, 'A'),
(48, '202604002', 10, 1, NULL),
(49, '202604002', 11, 2, 'B'),
(50, '202604002', 12, 2, 'B'),
(51, '202604002', 13, 2, 'C'),
(52, '202604002', 14, 2, 'A'),
(53, '202604002', 15, 2, NULL),
(54, '202604002', 16, 3, 'A'),
(55, '202604002', 17, 3, 'B'),
(56, '202604002', 18, 3, 'C'),
(57, '202604002', 19, 4, NULL),
(58, '202604002', 20, 4, 'B'),
(59, '202604002', 21, 4, 'C'),
(60, '202604002', 22, 4, 'B'),
(61, '202604002', 23, 4, 'D'),
(62, '202604002', 24, 5, 'A'),
(63, '202604002', 25, 5, 'B'),
(64, '202604002', 26, 5, 'C'),
(65, '202604002', 27, 5, 'D'),
(66, '202604002', 28, 5, 'A');

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
(1, 'Wawasan Kebangsaan', NULL),
(2, 'Intelegensi Umum', NULL),
(3, 'Karakteristik Pribadi', NULL),
(4, 'Pengetahuan Pemerintahan Desa', NULL),
(5, 'Pengetahuan Administrasi dan Pelayanan Publik', NULL);

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
-- AUTO_INCREMENT for table `status_tes`
--
ALTER TABLE `status_tes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_jawab_peserta`
--
ALTER TABLE `tb_jawab_peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
