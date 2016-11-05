-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2016 at 05:53 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `NO` int(10) NOT NULL,
  `NAMA` varchar(30) DEFAULT NULL,
  `JURUSAN` varchar(30) DEFAULT NULL,
  `KELAS` varchar(6) NOT NULL,
  `TGL` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`NO`, `NAMA`, `JURUSAN`, `KELAS`, `TGL`) VALUES
(9, 'Reyhan', 'Teknik Komputer & Jaringan', '', '2016-09-07'),
(10, 'Jolteon', 'Teknik Komputer & Jaringan', '', '2016-09-07'),
(11, 'Ivan Aries Rizaldy', 'Interior Kapal', '', '2016-09-07'),
(12, 'dfgv', 'Instalasi Pemesinan Kapal', '', '2016-09-19'),
(13, 'Rey', 'Konstruksi Kapal Baja', 'XI', '2016-10-25'),
(14, 'Reyhan', 'Teknik Komputer & Jaringan', 'Alumni', '2016-10-26'),
(15, 'Ivan', 'Mekanik Otomotif', 'XIII', '2016-10-28'),
(16, 'Farid', 'Instalasi Pemesinan Kapal', 'Alumni', '2016-10-28'),
(17, 'Chalid Ade', 'Teknik Komputer & Jaringan', 'Alumni', '2016-10-28'),
(18, 'Ivan', 'Interior Kapal', 'Alumni', '2016-10-30'),
(19, 'Dio', 'Interior Kapal', 'Alumni', '2016-10-30'),
(20, 'Rey', 'Teknik Komputer & Jaringan', 'X', '2016-11-02'),
(22, 'Saya', 'Teknik Komputer & Jaringan', 'X', '2016-11-05'),
(23, 'Reyhan', 'Teknik Komputer & Jaringan', 'X', '2016-11-05'),
(24, 'Cobaa', 'Instalasi Permesinan Kapal', 'X', '2016-11-05'),
(25, 'ivan aries rizaldy', 'Teknik Komputer & Jaringan', 'XIII', '2016-11-05'),
(26, 'alphard', 'Teknik Komputer & Jaringan', 'X', '2016-11-05'),
(27, 'Sugeng', 'Teknik Komputer & Jaringan', 'X', '2016-11-05'),
(28, 'reyhan', 'Teknik Pendingin Tata Udara', 'XIII', '2016-11-05'),
(29, 'Dio34', 'Instalasi Permesinan Kapal', 'XIV', '2016-11-05');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `NO` int(5) NOT NULL,
  `NIS` bigint(10) NOT NULL,
  `NAMA` varchar(35) NOT NULL,
  `KELAS` char(5) NOT NULL,
  `JURUSAN` varchar(35) NOT NULL,
  `ALAMAT` varchar(100) NOT NULL,
  `HP` char(12) NOT NULL,
  `JK` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`NO`, `NIS`, `NAMA`, `KELAS`, `JURUSAN`, `ALAMAT`, `HP`, `JK`) VALUES
(1, 100000000, 'RATNA DWI SAFITRI', 'XII', 'KKB', 'GLEMORE BANYUWANGI', '81234567891', ''),
(2, 100000001, 'MUHAMMAD FADIL', 'XII', 'KKB', 'JENGGAWAH-JEMBER', '81234567892', ''),
(3, 100000002, 'TAUFIQ HIDAYATULLAH', 'XII', 'TKJ', 'GUMUKMAS-JEMBER', '81234567891', ''),
(4, 100000003, 'SHOLEH MAULANA H.', 'XII', 'TKJ', 'TANGGUL-JEMBER', '81234567892', ''),
(5, 100000004, 'FATIMATUS SHAMIKHA', 'XII', 'MO', 'TANGGUL-JEMBER', '81234567891', ''),
(6, 100000005, 'SITI ZULUL SAFITRI', 'XII', 'MO', 'TANGGUL-JEMBER', '81234567892', ''),
(7, 100000006, 'MUHAMMAD ADAM MAULIDI', 'XII', 'TPTU', 'SILO JEMBER', '81234567891', ''),
(8, 100000007, 'HAMINUDIN', 'XII', 'TPTU', 'JENGGAWAH-JEMBER', '81234567892', ''),
(9, 100000008, 'HAFIDHATUN NAFIROH', 'XII', 'TIPK', 'KENCONG JEMBER', '81234567891', ''),
(10, 100000009, 'ZIYYAN ATIQOTUL MAULA', 'XII', 'TKJ', 'BANGSAL SARI JEMBER', '81234567892', ''),
(11, 100000010, 'MUHAMMAD BAIHAQI', 'XII', 'GRBK', 'RAMBIPUJI JEMBER', '81234567891', ''),
(12, 100000011, 'LINDA AZIZAH', 'XII', 'GRBK', 'SUKORAMBI JEMBER', '81234567892', ''),
(13, 100000012, 'RIZAL FATHONI ABDILLAH', 'XI', 'TIPK', 'PUGER JEMBER', '81234567891', ''),
(14, 100000013, 'MALTUFAH', 'XI', 'MO', 'WULUHAN JEMBER', '81234567892', ''),
(15, 100000014, 'SITI NURUL FITRIANI KHOIRUNISA''', 'XI', 'TKJ', 'MUMBUL SARI JEMBER', '81234567891', ''),
(16, 100000015, 'MAULANA HABIBI', 'XI', 'IK', 'MUMBUL SARI JEMBER', '81234567892', ''),
(17, 100000016, 'IKA ZAINANI', 'XI', 'MO', 'PATRANG JEMBER', '81234567891', ''),
(18, 100000017, 'RUFAIDAH KONITA', 'XI', 'GRBK', 'TANGGUL JEMBER', '81234567892', ''),
(19, 100000018, 'MOHAMMAD ARIL MASHUDI', 'XI', 'TPK', 'SONGGON BANYUWANGI', '81234567891', ''),
(20, 100000019, 'ISMAIL MALIK MAULANA', 'XI', 'TPK', 'SUKOWONO JEMBER', '81234567892', ''),
(21, 100000020, 'RISA YAS''A NURUHUM', 'XI', 'IK', 'GLEMORE BANYUWANGI', '81234567891', ''),
(22, 100000021, 'AIFINA RIZKI HASANAH', 'X', 'IK', 'PATRANG JEMBER', '81234567892', ''),
(23, 100000022, 'RATNA DWI SAFITRI', 'X', 'TKJ', 'SUMBERASIH-PROBOLINGGO', '81234567891', ''),
(24, 100000023, 'IMAM SHOLIHIN', 'X', 'TPTU', 'KALIPURO BANYUWANGI', '81234567892', ''),
(25, 100000024, 'ABD KODIR', 'X', 'GRBK', 'SILO JEMBER', '81234567891', ''),
(26, 100000025, 'M. RIDUAN FIRDAUS', 'X', 'KKB', 'AJUNG JEMBER', '81234567892', ''),
(27, 100000026, 'RIAN MASYROBI', 'X', 'KK', 'BALUNG JEMBER', '81234567891', ''),
(28, 100000027, 'HALIMATUS SA''DIYAH', 'X', 'KK', 'KALIWATES-JEMBER', '81234567892', ''),
(29, 100000028, 'BURHANUDIN IMAM IBRAHIM', 'X', 'KK', 'MUMBUL SARI JEMBER', '81234567891', ''),
(30, 100000029, 'MUHAMMAD IRWANSYAH MAULANA', 'X', 'KK', 'LICIN BANYUWANGI', '81234567892', ''),
(31, 100000030, 'IVAN', 'XI', 'Gambar Rancang Bangun Kapal', 'Tulangan', '94827512381', ''),
(32, 100000031, 'ARIES', 'XII', 'Interior Kapal', 'Tulangan', '89257283123', ''),
(33, 100000032, 'Rey', 'XII', 'Teknik Komputer & Jaringan', 'Sidokare', '85852000360', ''),
(34, 100000033, 'Tes', 'X', 'Teknik Komputer & Jaringan', 'Yay', '85852932041', ''),
(35, 100000035, 'Dio', '12', 'IK', 'Jl Juanda No 1 c Okezone', '817789098', ''),
(36, 100000036, 'Dio', '12', 'IK', 'Jl Juanda No 1 c Okezone', '817789098', ''),
(37, 100000037, 'Sembilan Sembilan', 'X', 'Teknik Komputer & Jaringan', 'Sembilan Dua', '1E+12', ''),
(38, 100000038, 'Ivan Aries Rizaldy', 'X', 'Teknik Komputer & Jaringan', 'Tulangan', '89275921', ''),
(39, 100000039, 'Tes Orang', 'X', 'Teknik Komputer & Jaringan', 'Coba', '123', ''),
(40, 100000040, 'Saya Baru', 'X', 'Teknik Pendingin Tata Udara', 'Sidokare', '789', ''),
(41, 100000041, 'Dragonite', 'XI', 'Teknologi Pengelasan Kapal', 'Sidokare Asri', '673', ''),
(42, 100000042, 'Flareon', 'XII', 'Interior Kapal', 'Perak SBY', '578', ''),
(43, 100000043, 'Bima', 'XII', 'Teknologi Pengelasan Kapal', 'Semambung', '1', ''),
(44, 100000044, 'Ipan', 'XI', 'Mekanik Otomotif', 'Tulangan', '567', ''),
(45, 100000045, 'Wiliam', 'XI', 'Teknik Komputer & Jaringan', 'Malang', '666', ''),
(46, 100000046, 'Bagus', 'XI', 'Kelistrikan Kapal', 'Sawotratap', '666', ''),
(47, 100000047, 'Diooo', 'X', 'Mekanik Otomotif', 'Kutuk', '678', ''),
(48, 100000048, 'SANTOSO', 'XII', 'Teknik Komputer & Jaringan', 'Buduran', '0000', ''),
(49, 100000049, 'Reyhan Alphard', 'XII', 'Teknik Komputer & Jaringan', 'Sidokare', '085852000360', ''),
(50, 100000050, 'Anggota Baru', 'XII', 'Konstruksi Kapal Baja', 'Sidokare', '08585200360', ''),
(51, 100000053, 'anggota baru', 'X', 'Teknik Komputer & Jaringan', 'tes', '67890-', ''),
(52, 100000054, 'Burhan', 'X', 'Teknik Komputer & Jaringan', 'gfds', '78', ''),
(53, 100000057, 'Toni', 'XII', 'Teknik Komputer & Jaringan', 'Sidokare Indah', 'g', ''),
(54, 100000059, 'Muhammad Farid', 'X', 'Teknik Komputer & Jaringan', 'Tes', '08521312', ''),
(55, 100000060, 'Chalid Ade', 'XII', 'Teknik Komputer & Jaringan', 'fdsfd', '43243', ''),
(56, 100000061, 'Jeffry', 'X', 'Teknik Komputer & Jaringan', 'rxfd', '123', ''),
(57, 100000062, 'Jefry Ade Farid', 'XII', 'Teknik Komputer & Jaringan', 'keputih gang I', '081', ''),
(58, 100000063, 'tes', 'XII', 'Mekanik Otomotif', 'Coba', '555', ''),
(59, 100000064, 'Reyhan Alphard Savero', 'XII', 'Teknik Komputer & Jaringan', 'sidokare asri', '085852000360', ''),
(60, 100000066, 'Reyhan', 'X', 'TKJ', 'Sidokare', '3', ''),
(61, 100000070, 'Tes', 'X', 'Teknik Komputer & Jaringan', '5', '1', ''),
(62, 100000071, 'tes', 'X', 'Teknik Komputer & Jaringan', 'G', '5', ''),
(63, 100000072, 'Solikin', 'X', 'Teknik Komputer & Jaringan', 'Jl Teknik Mesin', '23', ''),
(64, 100000073, 'Tes', 'X', 'Teknik Komputer & Jaringan', 'Tes', '123', ''),
(65, 100000074, 'bernando', 'X', 'Konstruksi Kapal Baja', 'Sss', '555', ''),
(66, 100000075, 'oke', 'XII', 'Teknik Komputer & Jaringan', 'H', '55', ''),
(67, 100000076, 'baru', 'XI', 'Interior Kapal', 'Sidokaee', '085852000360', ''),
(68, 100000077, 'Iwak Gatul', 'XI', 'Teknologi Pengelasan Kapal', 'tes', '085852000360', ''),
(69, 100000078, 'Jeffry Dewangga', 'XI', 'Mekanik Otomotif', 'Porong', '081438235823', 'L'),
(70, 100000079, 'Shania', 'XI', 'Interior Kapal', 'Mojokerto', '082347823472', 'P'),
(71, 6567502071, 'Tester', 'XI', 'Teknik Pendingin Tata Udara', 'Sidokare', '084823942931', 'L'),
(72, 9999999999, 'Reyhan Alphard Savero', 'XII', 'Teknik Pemesinan Kapal', 'Sidoarjo, Sidokare Asri', '085852000360', 'L'),
(73, 6545480071, 'Ivan Aries Rizaldy', 'XII', 'Teknik Komputer & Jaringan', 'Amerika', '085123123444', 'L');

-- --------------------------------------------------------

--
-- Table structure for table `data_buku`
--

CREATE TABLE `data_buku` (
  `NO` int(5) NOT NULL,
  `JUDUL` varchar(60) NOT NULL,
  `PENGARANG` varchar(40) NOT NULL,
  `PENERBIT` varchar(40) NOT NULL,
  `TAHUN` int(4) NOT NULL,
  `KATEGORI` char(12) NOT NULL,
  `CODE` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_buku`
--

INSERT INTO `data_buku` (`NO`, `JUDUL`, `PENGARANG`, `PENERBIT`, `TAHUN`, `KATEGORI`, `CODE`) VALUES
(3, 'Lahirlah Dengan Cinta, Fiqh Hamil Dan Melahirkan', 'Ali Ghufron', 'Amzah', 2010, 'Agama', 'AG.003'),
(4, 'Tanggung Jawab Wanita Dalam Rumah Tangga', 'Akram Ridha', 'Amzah', 2010, 'Agama', 'AG.004'),
(5, '30 Nama Penghuni Surga', 'Mustofa Murad', 'Amzah', 2008, 'Agama', 'AG.005'),
(6, 'Menangkap Cahaya al-Quran', 'M. Samsul Ulum', 'UIN Malik', 2007, 'Agama', 'AG.006'),
(7, '12 Wanita Pejuang Bersama Rasulullah', 'Abdul aziz asy-Syilnawi', 'Amzah', 2010, 'Agama', 'AG.007'),
(8, 'Hak-hak Asasi Manusia Dalam Islam', 'Mawlana Abul A''la Mawdudi', 'Bumi Aksara', 2008, 'Agama', 'AG.008'),
(9, '40 SMS Dari Rasulullah', 'Tasirun Sulaiman', 'Erlangga', 2009, 'Agama', 'AG.009'),
(10, 'Etika Seksual Dan penyimpangan Dalam Islam', 'Yatimin', 'Amzah', 2010, 'Agama', 'AG.010'),
(11, 'Aqidah Islam Dalam Konteks Ilmiah Populer', 'Kusnadi', 'Amzah', 2010, 'Agama', 'AG.011'),
(12, 'Fatwa Kontemporer Seputar Dunia Remaja', 'Syeikh athyyah Shaqr', 'Amzah', 2010, 'Agama', 'AG.012'),
(13, 'Perlindungan Aset Politik Dalam Perspektif Hukum Islam', 'Husain Syahatan', 'Amzah', 2010, 'Agama', 'AG.013'),
(14, 'Puasa Dan I''tikaf Dalam Islam', 'Hasan Muhammad ayub', 'Amzah', 2010, 'Agama', 'AG.014'),
(15, 'Petunjuk Merawat Jenazah Dan Shalat Jenazah', ' Abdul Karim', 'Amzah', 2010, 'Agama', 'AG.015'),
(16, 'Suap Dan Korupsi Dalam Prspektif Syariah', 'Husain Syahatan', 'Amzah', 2010, 'Agama', 'AG.016'),
(17, 'Seri Pahlawan Nasional :  Mohammad Hatta', 'Saleh', 'Citra Pranaya', 2009, 'Biografi', 'BG.001'),
(18, 'Hanya Dengan Cinta: 20 tahun chossy pratama berkarya ( TDC )', 'Andrei Aksana', 'Gramedia Pustaka Utama', 2009, 'Biografi', 'BG.002'),
(19, 'Dari "Pemberontak" menjadi Pahlawan Nasional: M.Natsir……', 'Waluyo', 'Ombak', 2009, 'Biografi', 'BG.003'),
(20, 'Candi-candi Di Nusantara', 'Lea Lina', 'Pt. Perca Group', 2010, 'Biografi', 'BG.004'),
(21, 'Mengenal Aneka Museum Nusantara', 'Aep Saepulloh', 'Pt. Perca Group', 2010, 'Biografi', 'BG.005'),
(22, 'Sejarah 3 IPS Kelas 12 SMA', 'Habib Mustopo, DKK', 'Yudhistira', 2010, 'Biografi', 'BG.006'),
(23, 'Membedah Tokoh sejarah: Hidup atau Mati', 'Asvi Warman Adam', 'Ombak', 2009, 'Biografi', 'BG.007'),
(24, 'Tragedi Sukarno: dari kudeta sampai kematiannya', 'Reny Nuryanti', 'Ombak', 2008, 'Biografi', 'BG.008'),
(25, 'Obama: in his own words: ucapan dan pikiran barrack obama', 'Lisa Rogak', 'Gramedia Pustaka Utama', 2009, 'Biografi', 'BG.009'),
(26, 'Apakah Mereka Mata-mata: orang-orang jepang di Indonsia ( 19', 'Meta Sekar Puji Astuti', 'Ombak', 2008, 'Biografi', 'BG.010'),
(27, 'Implementasi Pemerintahan Nagari Berdasarkan Hak asal-Usul ', 'H. Musyair Zainuddin', 'Ombak', 2008, 'Biografi', 'BG.011'),
(28, 'Istri-istri Sukarno', 'Reny Nurhayati, Dkk', 'Ombak', 2007, 'Biografi', 'BG.012'),
(29, 'Michael Jackson: The King Of Pop', 'Gozzie Pranaja', 'Ombak', 2009, 'Biografi', 'BG.013'),
(30, 'Muhammad Yamin & Cita-cita Persatuan Bangsa', 'Restu Qunanan', 'Ombak', 2005, 'Biografi', 'BG.014'),
(31, 'Orang-orang Besar Bengkulu', 'agus Setianto', 'Ombak', 2006, 'Biografi', 'BG.015'),
(32, 'Cerdas Olimpiade Matematika', 'Janu Ismadi', 'Pt. Perca Group', 2010, 'Matematika', 'MM.001'),
(33, 'Asiknya Mengali Dan Membagi', 'Janu Ismadi', 'Pt. Perca Group', 2009, 'Matematika', 'MM.002'),
(34, 'Asiknya Menjumlah Dan Mengurang', 'Janu Ismadi', 'Pt. Perca Group', 2010, 'Matematika', 'MM.003'),
(35, 'Asiknya Mengukur Waktu Dan Kecepatan', 'Janu Ismadi', 'Pt. Perca Group', 2009, 'Matematika', 'MM.004'),
(36, 'Kumpulan Rumus Matematika SMA', 'Sri Lestari, St', 'Kawan Pustaka', 2009, 'Matematika', 'MM.005'),
(37, 'Number Sense - Belajar Matematika', 'Andri Saleh', 'Trans Media', 2009, 'Matematika', 'MM.006'),
(38, 'Cepat Menyelesaikan Soal Matematika SMA', 'Supardi', 'Kawan Pustaka', 2009, 'Matematika', 'MM.007'),
(39, 'Jurus Jagoan Matematika', 'Janu Ismadi', 'Pt. Perca Group', 2010, 'Matematika', 'MM.008'),
(40, 'Matematika Dalam Perhitungan Kalender ', 'Janu Ismadi', 'Pt. Perca Group', 2009, 'Matematika', 'MM.009'),
(41, 'Kamus bayi dan balita', 'Jane Chumbley', 'Erlangga', 2009, 'Kamus', 'KM.001'),
(42, 'Kamus Swedia - Indonesia ', 'Andre Moller ', 'Gramedia Pustaka Utama', 2005, 'Kamus', 'KM.002'),
(43, 'Kamus  pintar fotografi', 'Atok Sigarto', 'Erlangga', 2009, 'Kamus', 'KM.003'),
(44, 'Kamus Inggris-Indonesia', 'Hasan Shadilly', 'Gramedia Pustaka Utama', 1988, 'Kamus', 'KM.004'),
(45, 'Pablo belajar bahasa Inggris', 'Sue Finnie', 'Erlangga', 2008, 'Kamus', 'KM.005'),
(46, 'Kamus Batak-Indonesia', 'JP. Sarumpeat', 'Erlangga', 1994, 'Kamus', 'KM.006'),
(47, 'Kamus  kimia', 'Mulyono H', 'Buku Aksara', 2008, 'Kamus', 'KM.007'),
(48, 'Kamus Jerman-Indonesia', 'Actives Br Yayasan', 'Erlangga', 1987, 'Kamus', 'KM.008'),
(49, 'Kamus   sosiologi kependudukan', 'G. Kartasaputra ', 'Buku Aksara', 2007, 'Kamus', 'KM.009'),
(50, 'Kamus Yunior Bergambar Oxford - HC', 'Rosemary S', 'Erlangga ', 2009, 'Kamus', 'KM.010'),
(51, 'Kamus  saku keperawatan', 'Brooker', 'EGC', 2010, 'Kamus', 'KM.011'),
(52, 'Kamus Indonesia-Perancis', 'Pierre Labrousse', 'Gramedia Pustaka Utama', 2010, 'Kamus', 'KM.012'),
(53, 'Puzzle 3 bahasa Indonesia Inggris Mandarin', 'Tim EFK', 'Erlangga', 2010, 'Kamus', 'KM.013'),
(54, 'Gembira Bermain Dengan Biologi', 'Jenice Pratt Van Cleave', 'Pustaka Utama Grafiti', 2010, 'Biologi', 'BL.001'),
(55, 'Ekologi Laut Indonesia', 'Koes Irianto', 'Sarana Ilmu Pustaka', 2010, 'Biologi', 'BL.002'),
(56, 'Biologi SMA, Jil. 1B KTSP', 'Istamar Syamsuri', 'Erlangga', 2007, 'Biologi', 'BL.003'),
(57, 'Biologi SMA, Jil. 2A KTSP', 'Istamar Syamsuri', 'Erlangga', 2007, 'Biologi', 'BL.004'),
(58, 'Biologi SMA, Jil. 2B KTSP', 'Istamar Syamsuri', 'Erlangga', 2007, 'Biologi', 'BL.005'),
(59, 'Healthy Express Super Sehat Dalam 2 Minggu ', 'Edwin Lau ', 'Gramedia Pustaka Utama ', 2009, 'Umum', 'UM.001'),
(60, 'Hukum Perseroan Terbatas ', 'M.Yahya Harahap ', 'Sinar Grafika ', 2009, 'Umum', 'UM.002'),
(61, 'Indonesia Civil Code Burgerlijk Wetboek Voor Indonesia ', 'Rany Mangunsong, SH', 'Gramedia Pustaka Utama ', 2008, 'Umum', 'UM.003'),
(62, 'Contoh - Contoh Perjanjian Yang Banyak Dipergunakan Dalam …', 'R. Suroso, SH', 'Sinar Grafika ', 2009, 'Umum', 'UM.004'),
(63, 'Face Art : Ilusi 1000 Wajah ', 'Yoyok Budiman ', 'Gramedia Pustaka Utama ', 2010, 'Umum', 'UM.005'),
(64, 'Memberantas Korupsi Bersama KPK', 'Emansyah Djaja ', 'Gramedia Pustaka Utama ', 2009, 'Umum', 'UM.006'),
(65, 'Pokok - Pokok Pengetahuan Hukum Dagang Indonesia ', 'C.S.I Kansil ', 'Sinar Grafika ', 2008, 'Umum', 'UM.007'),
(66, 'Hukum Kekayaan Hak Intelektual ', 'Ermansyah Djaja ', 'Sinar Grafika ', 2009, 'Umum', 'UM.008'),
(67, 'The Secret Of Modification Make Up + CD', 'Daday Khagldar ', 'Gramedia Pustaka Utama ', 2011, 'Umum', 'UM.009'),
(68, 'Hukum Kepailitan ', 'Sutan Ramy S', 'Pustaka Utama Grafiti ', 2010, 'Umum', 'UM.010'),
(69, 'Kamar Mandi', 'Imelda Akmal ', 'Gramedia Pustaka Utama ', 2006, 'Umum', 'UM.011'),
(70, 'Mahir Elektone Dalam 10 Hari', 'Ivan Aries Rizaldy', 'PT PJB SERVICES', 2016, 'Umum', 'UM.012'),
(71, 'Keajaiban Doa', 'Ivan', 'PJBS', 2005, 'Agama', 'AG.017'),
(73, 'Budidaya Lele Organik', 'Ivan', 'PJBS', 2016, 'Umum', 'UM.013'),
(74, 'Budidaya Ikan Cupang', 'Ivan', 'PJBS', 2015, 'Umum', 'UM.014'),
(75, 'Hidayah! Jenazah Pokemon Go Kuburan diprnuhi Pikachu', 'Saya', 'Saya', 2016, 'Agama', 'AG.018'),
(78, 'Matematika SMK', 'Reyhan', 'PJBS', 2016, 'Matematika', 'MM.010'),
(79, 'Matematika SBMPTN', 'Reyhan', 'PJBS', 2016, 'Matematika', 'MM.011'),
(80, 'Mahir Gitar dalam 1 Jam', 'IVAN', 'PJB', 2016, 'Umum', 'UM.015'),
(81, 'Membuat Band yang Baik dan Benar', 'Ivan', 'PJBS', 2016, 'Umum', 'UM.016'),
(82, 'Menangkap Pokemon dalam Sekejap', 'Reyhan', 'PJBS', 2016, 'Umum', 'UM.017'),
(83, 'Menangkap Pokemon dengan Cepat Versi 2', 'Reyhab', 'PJBS', 2016, 'Umum', 'UM.018'),
(84, 'Berkebun', 'Mark', 'Natsume', 2014, 'Umum', 'UM.019'),
(85, 'Budidaya Lele', 'Udin', 'PJBS', 2016, 'Umum', 'UM.020'),
(90, 'Kamus 100 Bahasa', 'Budi Utomo', 'SMK 3', 2015, 'Kamus', 'KM.014'),
(92, 'Laskar Pelangi', 'Lupa', 'Lupa', 2010, 'Novel', 'NV.001'),
(93, 'Budidaya Ayam', 'SMKN 3 BUDURAN', 'SMKN 3 BUDURAN', 2005, 'Umum', 'UM.023'),
(99, 'STM PERKAPALAN', 'SMKN 3 BUDURAN', 'SMKN 3 BUDURAN', 2016, 'Novel', 'NV.002'),
(100, 'Kehidupan Programer', 'Farid', 'PENS', 2016, 'Novel', 'NV.003'),
(101, 'Metamorfosa Siswa Menjadi Mahasiswa', 'lali', 'its', 2005, 'Umum', 'UM.024'),
(102, 'Membuat Band yang Baik dan Benar', 'ipan', 'ipan', 2005, 'Umum', 'UM.025'),
(104, 'Install Windows yang Baik dan Benar', 'Dio', 'SMKN 3 BUDURAN', 2016, 'Umum', 'UM.027'),
(105, 'Menyalakan Lampu dengan Benar', 'PJBS', 'PJBS', 2015, 'Umum', 'UM.028'),
(107, 'Membaca Cepat', 'SMKN 3 BUDURAN', 'SMKN 3 BUDURAN', 2012, 'Umum', 'UM.029'),
(108, 'Materi Kajian Politeknik Elektronika Negeri Surabaya', 'Imam', 'PENS', 2016, 'Agama', 'AG.002'),
(109, 'Latihan Mementoring', 'PENS', 'PENS', 2016, 'Agama', 'AG.001');

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi`
--

CREATE TABLE `konfirmasi` (
  `NO` int(4) NOT NULL,
  `JUDUL` varchar(60) NOT NULL,
  `KATEGORI` char(12) NOT NULL,
  `CODE` varchar(10) NOT NULL,
  `NIS` bigint(10) NOT NULL,
  `TGL` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfirmasi`
--

INSERT INTO `konfirmasi` (`NO`, `JUDUL`, `KATEGORI`, `CODE`, `NIS`, `TGL`) VALUES
(1, 'Budidaya Ayam', 'Umum', 'UM.023', 100000008, '2016-11-05');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `NO` int(4) NOT NULL,
  `JUDUL` varchar(60) NOT NULL,
  `KATEGORI` char(12) NOT NULL,
  `CODE` varchar(10) NOT NULL,
  `NIS` bigint(9) NOT NULL,
  `TGL` date NOT NULL,
  `TGLB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`NO`, `JUDUL`, `KATEGORI`, `CODE`, `NIS`, `TGL`, `TGLB`) VALUES
(138, 'Materi Kajian Politeknik Elektronika Negeri Surabaya', 'Agama', 'AG.002', 6545480071, '2016-11-05', '2016-11-05'),
(139, 'Latihan Mementoring', 'Agama', 'AG.001', 6567502071, '0000-00-00', '2016-11-05'),
(140, 'Tanggung Jawab Wanita Dalam Rumah Tangga', 'Agama', 'AG.004', 100000022, '2016-11-05', '2016-11-05'),
(141, 'Tanggung Jawab Wanita Dalam Rumah Tangga', 'Agama', 'AG.004', 100000022, '2016-11-05', '2016-11-05');

-- --------------------------------------------------------

--
-- Table structure for table `pinjam`
--

CREATE TABLE `pinjam` (
  `NO` int(4) NOT NULL,
  `JUDUL` varchar(60) NOT NULL,
  `KATEGORI` char(12) NOT NULL,
  `CODE` varchar(10) NOT NULL,
  `NIS` bigint(10) NOT NULL,
  `TGL` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `NO` int(5) NOT NULL,
  `NAMA` varchar(30) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `KOM` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`NO`, `NAMA`, `EMAIL`, `KOM`) VALUES
(28, 'Reyhan', 'newrey9227@gmail.com (ini opti', 'Request Buku Android'),
(29, 'Reyhan', 'newrey9227@gmail.com (ini opti', 'Request Buku Matematika Kelas 12 SMK'),
(31, 'Reyhan', 'newrey9227@gmail.com', 'Saya request buku jaringan komputer'),
(40, 'Reyhan', 'reyreyhan@gt.student.pens.ac.i', 'sudah lumayan, saya request buku doa sehari hari ya.'),
(41, 'Reyhan', 'newrey9227@gmail.com', 'Request buku nabi nabi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`NO`),
  ADD UNIQUE KEY `NIS` (`NIS`);

--
-- Indexes for table `data_buku`
--
ALTER TABLE `data_buku`
  ADD PRIMARY KEY (`NO`),
  ADD UNIQUE KEY `CODE` (`CODE`);

--
-- Indexes for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD PRIMARY KEY (`NO`),
  ADD UNIQUE KEY `CODE` (`CODE`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`NO`),
  ADD UNIQUE KEY `CODE` (`CODE`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`NO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `NO` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `NO` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `data_buku`
--
ALTER TABLE `data_buku`
  MODIFY `NO` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
--
-- AUTO_INCREMENT for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  MODIFY `NO` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `NO` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;
--
-- AUTO_INCREMENT for table `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `NO` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `NO` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
