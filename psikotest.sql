-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2026 at 10:19 AM
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
-- Error reading structure for table psikotest.soaltpa: #1932 - Table &#039;psikotest.soaltpa&#039; doesn&#039;t exist in engine
-- Error reading data for table psikotest.soaltpa: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `psikotest`.`soaltpa`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `tbadmin`
--
-- Error reading structure for table psikotest.tbadmin: #1932 - Table &#039;psikotest.tbadmin&#039; doesn&#039;t exist in engine
-- Error reading data for table psikotest.tbadmin: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `psikotest`.`tbadmin`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `tbjawaban`
--
-- Error reading structure for table psikotest.tbjawaban: #1932 - Table &#039;psikotest.tbjawaban&#039; doesn&#039;t exist in engine
-- Error reading data for table psikotest.tbjawaban: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `psikotest`.`tbjawaban`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `tbpendaftar`
--
-- Error reading structure for table psikotest.tbpendaftar: #1932 - Table &#039;psikotest.tbpendaftar&#039; doesn&#039;t exist in engine
-- Error reading data for table psikotest.tbpendaftar: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `psikotest`.`tbpendaftar`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `tbsoal`
--
-- Error reading structure for table psikotest.tbsoal: #1932 - Table &#039;psikotest.tbsoal&#039; doesn&#039;t exist in engine
-- Error reading data for table psikotest.tbsoal: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `psikotest`.`tbsoal`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `tbwaktu`
--
-- Error reading structure for table psikotest.tbwaktu: #1932 - Table &#039;psikotest.tbwaktu&#039; doesn&#039;t exist in engine
-- Error reading data for table psikotest.tbwaktu: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `psikotest`.`tbwaktu`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_jawaban`
--
-- Error reading structure for table psikotest.tb_detail_jawaban: #1932 - Table &#039;psikotest.tb_detail_jawaban&#039; doesn&#039;t exist in engine
-- Error reading data for table psikotest.tb_detail_jawaban: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `psikotest`.`tb_detail_jawaban`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `tb_jawab_peserta`
--
-- Error reading structure for table psikotest.tb_jawab_peserta: #1932 - Table &#039;psikotest.tb_jawab_peserta&#039; doesn&#039;t exist in engine
-- Error reading data for table psikotest.tb_jawab_peserta: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `psikotest`.`tb_jawab_peserta`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--
-- Error reading structure for table psikotest.tb_kategori: #1932 - Table &#039;psikotest.tb_kategori&#039; doesn&#039;t exist in engine
-- Error reading data for table psikotest.tb_kategori: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `psikotest`.`tb_kategori`&#039; at line 1

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mhsdaft`
--
ALTER TABLE `mhsdaft`
  ADD KEY `MHSDAFTNPM` (`NPM`),
  ADD KEY `NAMA` (`NAMA`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
