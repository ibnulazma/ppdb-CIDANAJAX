-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2023 at 03:23 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(20) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `id_jenjang` int(11) NOT NULL,
  `id_tahun` varchar(20) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `id_ruangan` int(11) NOT NULL,
  `tgl_pendaftaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama_lengkap`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `nik`, `alamat`, `nama_ibu`, `no_telp`, `nisn`, `id_jenjang`, `id_tahun`, `id_sekolah`, `id_ruangan`, `tgl_pendaftaran`) VALUES
(1, 'Siti Andis Nuswoputri', 'Perempuan', 'Tangerang', '28/09/2010', '3603206890910002', 'Perum Teratai Griya Asri Rt 18 Rw 04', 'Iis Isnawati', '08111775315', '', 1, '1', 60, 0, ''),
(2, 'Putri Elisa', 'Perempuan', 'Tangerang', '31/05/2010', '3603287105100008', 'Kp. Dukuh Pinang', 'Warsiti', '083852530931', '3109073474', 2, '1', 38, 0, ''),
(3, 'Jibril Ray Ruban', 'Laki-laki', 'Tangerang', '05/10/2009', '3603220510090006', 'Kp. Ancol Rt 07 Rw 03 Desa Ancol Pasir Kec. Jambe', 'Ayu Sri Wahyuni', '085810211506', '3090555630', 2, '1', 54, 0, ''),
(4, 'Muhammad Nizam Usmanova', 'Laki-laki', 'Demak', '25/09/2010', '3321102509100004', 'Kelapa Dua Rt 01 Rw 04', 'Listiaroh', '085218232366', '', 1, '1', 25, 0, ''),
(5, 'Nurul Iftitah', 'Perempuan', 'Tangerang', '11/06/2009', '3603285106090002', 'Kp Cibogo Kulon Rt 02 Rw 02 Kelapa Dua', 'Siti Maskamah', '081315149346', '', 1, '1', 32, 0, ''),
(6, 'Muhammad Sultan Al Buchori', 'Laki-laki', 'Tangerang', '25/03/2010', '1671062503100009', 'Perum Teratai Griya Asri Rt 14 Rw 04', 'Nurhayati', '082113983725', '3101342313', 2, '1', 76, 0, ''),
(8, 'Rif\'at Syarief Wibowo', 'Laki-laki', 'Tangerang', '08/05/2010', '3603202805100004', 'Perum Aster 2  Rt 3 Rw 04 Desa Caringin Legok', 'Suharyati', '081280758598', '', 1, '1', 51, 0, ''),
(9, 'Restu Maulana', 'Laki-laki', 'Kebumen', '02/11/2009', '3305110211090001', 'Kp Babakan Rt 02 Rw 06 Desa Binong Kec. Curug', 'Iis Ismawati', '085717013979', '3094523712', 2, '1', 85, 0, ''),
(10, 'Izzah Zayani', 'Perempuan', 'Tangerang', '11/11/2009', '3603205111090002', 'Perum Legok Indah Rt 002 Rw 12', 'RR. Sri Rejeki', '089514525848', '3095207662', 2, '1', 77, 0, ''),
(11, 'Muhammad Dwi Aldiansyah', 'Laki-laki', 'Tangerang', '01/06/2010', '3603170107100005', 'Kp Babakan Rt 02 Rw 06 Desa Binong Kec. Curug', 'Icih Kunengsih', '081381875932', '', 1, '1', 45, 0, ''),
(12, 'Abdul Hafif Saypullah', 'Laki-laki', 'Tangerang', '10/10/2010', '3603221010100003', 'Kp Babakan Rt 02 Rw 06 Desa Binong Kec. Curug', 'Aam', '085211001099', '', 1, '1', 45, 0, ''),
(13, 'Habiburrohman Al Faqih', 'Laki-laki', 'Tangerang', '21/07/2010', '3603282107100001', 'Perum Dasan Indah Rt 03 Rw 020 ', 'Sri Nur Untung', '081321063639', '0103074995', 1, '1', 32, 0, ''),
(14, 'Salsa Rahma Dewi', 'Perempuan', 'Tangerang', '29/04/2010', '3603286904100004', 'Kp Cibogo Wetan ', 'Hikmah Fusvita', '089654052234', '3107825055', 2, '1', 72, 0, ''),
(15, 'Alvian Bintang Pradipta', 'Laki-laki', 'Tangerang', '09/02/2010', '3603200902100003', 'Perum Griya Permai Rt 02 Rw 06', 'Fatmaningrum', '089607558611', '0106055169', 1, '1', 51, 0, ''),
(16, 'Niswatul Khasanah', 'Perempuan', 'Batang', '05/01/2010', '9101054501100001', 'Perumahan Makorem Legok Rt 7 Rw 2', 'Dewi Natalia Mayong', '082248118309', '3101284281', 1, '1', 7, 0, ''),
(17, 'Jovano Eka Cahyo', 'Laki-laki', 'Tangerang', '24/04/2014', '3173012312091008', 'Cluster Puri Asih 2 Rt 4 Rw 02 Desa Serdang Wetan Kec. Legok', 'Eni Diniati', '087780800111', '', 1, '1', 82, 0, ''),
(18, 'Abyan Adzuhri Ardiandari', 'Laki-laki', 'Bogor', '13/04/2010', '3603221304100002', 'Jln Tulip Rt 04 Rw 04 Desa Malangnengah Kec. Pagedangan', 'Rina Setyaningsih', '081383545059', '', 2, '1', 29, 0, ''),
(19, 'Aiva Maliha Rosida', 'Perempuan', 'Tangerang', '12/10/2009', '3603205210090003', 'Kp Palasari Rt 09 Rw 01 Desa Palasari Kec. Tangerang', 'Widya Rahmi', '085880997502', '', 1, '1', 65, 0, ''),
(20, 'Rosyila Rizqoillah', 'Perempuan', 'Tangerang', '01/10/2010', '3603204110100006', 'Cemara Asri Rt 1 Rw 08 Legok Legok', 'Wiharto', '081283521116', '', 1, '1', 5, 0, ''),
(21, 'Livia Heriyanti', 'Perempuan', 'Tangerang', '16/06/2010', '3603205606100001', 'Kp Cadas Rt 01 Rw 04 ', 'Robiah', '083896273712', '', 1, '1', 7, 0, ''),
(22, 'Radietia Saputra', 'Laki-laki', 'Tangerang', '18/05/2010', '3603201905100005', 'Kp Legok Rt 05 Rw 02', 'Siti Maesaroh', '083893692033', '0107817721', 2, '1', 76, 0, ''),
(23, 'Desta Ardiyansyah', 'Laki-laki', 'Tangerang', '04/10/2010', '3603220410100001', 'Kp Cijantra Rt 003 Rw 002 Cijantra', 'Evi Mustika Sari', '0895351881301', '3101548023', 2, '1', 78, 0, ''),
(24, 'Davinci Akbar Setiawan', 'Laki-laki', 'Tangerang', '06/08/2010', '3603200608100001', 'Jalan Cijauh', 'Kusmintarsih', '087886441054', '3108411831', 2, '1', 76, 0, ''),
(25, 'Farand Wahyu Rajendra', 'Laki-laki', 'Jakarta', '03/08/2010', '3674020308100003', 'Perum Korem Rt 07 Rw 02 Legok', 'Lian Nur Laelani', '085210415052', '', 1, '1', 17, 0, ''),
(26, 'Al Asyifa Azza Humaira', 'Perempuan', 'Tegal', '28/09/2010', '3328166809100003', 'Legok', 'Latipah', '081236598752', '3100228063', 2, '1', 76, 0, ''),
(27, 'Kirana Febriani Andrian', 'Perempuan', 'Jakarta', '03/02/2010', '3171044302100001', 'Legok', 'Madusari', '082111690669', '3102864237', 2, '1', 39, 0, ''),
(28, 'Muhammad Ikhsan', 'Laki-laki', 'Tangerang', '22/04/2010', '3603282204100004', 'Kp Angris Rt 04 Rw 009', 'Atik', '081283853969', '', 1, '1', 34, 0, ''),
(29, 'Destari Anggraeni', 'Perempuan', 'Brebes', '20/12/2009', '3329096012090002', 'Kp Pabuaran Rt 03 Rw 02 Malangnengah ', 'Toripah', '085771930413', '0099161008', 1, '1', 11, 0, ''),
(30, 'Siti Ainun Jamil', 'Perempuan', 'Tangerang', '14/06/2010', '3603205406100002', 'Kp Cirarab Curug RT 002 Rw 04 Palasari Legok', 'Eha Andriyani', '082133625301', '', 1, '1', 66, 0, ''),
(31, 'Sindy Aulia Sari', 'Perempuan', 'Tangerang', '24/03/2010', '3603226403100001', 'Perum Bumi Jati Elok Rt 05 Rw 06 Malangnengah Pagedangan', 'Mega Wahyuni', '085811399191', '', 1, '1', 11, 0, ''),
(32, 'Lutviatun Nury', 'Perempuan', 'Tangerang', '20/08/2010', '3603206066100002', 'Jalan Raya Legok Rt 02 Rw 01 Medang', 'Mida Sari', '081377320376', '0105666628', 1, '1', 34, 0, ''),
(33, 'Muhammad Nasywan Hanan', 'Laki-laki', 'Tangerang', '08/04/2010', '3603220804100002', 'Kp Babakan timur Rt 03 Rw 06 Babakan legok', 'Miftahul Hasanah AR', '0895335243315', '3109648156', 2, '1', 39, 0, ''),
(34, 'Daiva Rakha Adipramana', 'Laki-laki', 'Lebak', '06/06/2010', '3603200606100003', 'Jalan Raya Parung Panjang Rt 6 Rw 6 Caringin', 'Erwin Dwi Rahmawiyanti', '082125095286', '', 1, '1', 13, 0, ''),
(36, 'Haura Chalizah Jinaan', 'Perempuan', 'Tangerang', '26/10/2009', '3603226610090001', 'Kp Dukuh Pinang Rt 002 Rw 003 ', 'Aan Andriyani', '087808441443', '', 1, '1', 35, 0, ''),
(37, 'Ali Hanafi Alfaqih', 'Laki-laki', 'Tangerang', '11/02/2010', '3671021102100001', 'Kp Jati Rt 01 Rw 01 Desa Keroncong Jatiuwung', 'Endang Susilowati', '082210887149', '', 1, '1', 68, 0, ''),
(38, 'Muhammad Raihan Akmal Darusalam', 'Laki-laki', 'Tangerang', '06/03/2010', '3671020603100014', 'Kp Jati Rt 01 Rw 01 Desa Keroncong Jatiuwung', 'Rosidah', '081296577550', '', 1, '1', 94, 0, ''),
(40, 'Zahra Putri Widyanti', 'Perempuan', 'Tangerang', '06/04/2010', '3671024604100001', 'Kp Jati Rt 01 Rw 01 Desa Keroncong Jatiuwung', 'Indra Widyaningsih', '08128401212', '', 1, '1', 84, 0, '21/03/2022'),
(41, 'Mutia Kirana', 'Perempuan', 'Tangerang', '16/06/2010', '3603225602100003', 'Kp Bojong Nangka Rt 2 Rw 1 Medang Pagedangan', 'Iyah Yoheti', '081806275696', '0101110891', 1, '1', 34, 0, '25/03/2022'),
(42, 'Herlita Juniati', 'Perempuan', 'Jakarta', '13/06/2010', '3216065306100009', 'Perum Dasana Indah Blok Rt 002 Rw 16 Bojong Nangka', 'Apriyanti', '081384629692', '', 1, '1', 32, 0, '25/03/2022'),
(44, 'siti unajiatul muftihah', 'Perempuan', 'Tangerang', '21/05/2010', '3603206105100005', 'Kp PAlasari Rt 003 Rw 002', 'Siti Unayah', '089684242755', '', 1, '1', 66, 0, '25/03/2022'),
(45, 'darell uparengga putra ramadhan', 'Laki-laki', 'Tangerang', '16/09/2009', '3271011609090005', 'Kp. Kadaung', 'Yulianti Laelasari', '', '', 1, '1', 7, 0, '25/03/2022'),
(46, 'bagas eka saputra', 'Laki-laki', 'Jakarta', '15/10/2009', '3173051510091001', 'Perum Legok Permai Helliconia Rt 03 Rw 11 Legok-Tangerang', 'Nurlelah', '081383527622', '', 1, '1', 5, 0, '26/03/2022'),
(47, 'Cindy Amelia', 'Perempuan', 'Pandeglang', '18/04/2016', '3601316110090002', 'Legok Permai Rt 05', 'Baiyah', '081314855389', '', 1, '1', 69, 0, '26/03/2022'),
(48, 'Muhamad Rizki', 'Laki-laki', 'Tangerang', '27/07/2010', '3603222707100008', 'Kp Medang Rt 004/Rw 003', 'Sumiyati', '08881635681', '3106325979', 2, '1', 54, 0, '28/03/2022'),
(49, 'Nabil Althaf Fidiyanto', 'Laki-laki', 'Tangerang', '01/10/2009', '3603280110090003', 'Legok Permai Blok A1/F15 Rt 01 Rw 07', 'Warneti Nurlaelasari', '081802161416', '3091014444', 2, '1', 76, 0, '28/03/2022'),
(50, 'Naila Rama Angelica', 'Perempuan', 'Tangerang', '27/06/2010', '3171026706101002', 'Perum Legok Permai Heliconia Rt 02  ', 'Suci Rama Ningsih', '081290609888', '', 1, '1', 5, 0, '28/03/2022'),
(51, 'aira galih arumi', 'Perempuan', 'Tangerang', '21/01/2010', '3674026101100003', 'Kp palasari rt 003 rw 002 palasari', 'Darmawati', '085774548829', '0102325768', 1, '1', 66, 0, '28/03/2022'),
(52, 'Akmal Farid  Azzukhruf', 'Laki-laki', 'Tangerang', '21/03/2010', '3603202103100001', 'Kp Legok Rt 006 Rw 002 ', 'Asri Sholati', '085939372518', '3102862969', 2, '1', 76, 0, '28/03/2022'),
(53, 'ayu riana ramadani', 'Perempuan', 'Tangerang', '21/08/2010', '3603206108100001', 'Kp Legok Jalan hippel Rt 6 w 02', 'Hanatasya', '081223113433', '', 1, '1', 5, 0, '30/03/2022'),
(54, 'Akbar Yusuf Efendi', 'Laki-laki', 'Tangerang', '22/02/2010', '3603202202100005', 'Legok Permai Blok C1 D23', 'Ratna Sari Dewi', '087881299718', '', 1, '1', 5, 0, '30/03/2022'),
(55, 'Raditya Ramadhan', 'Laki-laki', 'Tangerang', '10/09/2009', '3603201009090001', 'Kp Manungung ', 'Iis', '088219655956', '', 1, '1', 5, 0, '30/03/2022'),
(56, 'Almaira Adeliana Putri', 'Perempuan', 'Tangerang', '04/05/2010', '3603284405100004', 'Kp Cicayur Curugsangereng', 'Tati Suryati', '089628913391', '', 1, '1', 71, 0, '30/03/2022'),
(57, 'Muhamad Reski', 'Laki-laki', 'Ciamis', '05/11/2009', '3207180511090003', 'Kp Cijantra', 'Ira Liani', '081311094713', '3091778381', 2, '1', 76, 0, '31/03/2022'),
(58, 'Adam Al Hakim', 'Laki-laki', 'Depok', '17/06/2009', '3276021706090001', 'Legok Permai Cluster Rt 2 Rw 15 ', 'Indah Lillah Sari', '089688896486', '3095561843', 2, '1', 76, 0, '31/03/2022'),
(59, 'Muhammad Risqullah', 'Laki-laki', 'Tangerang', '14/02/2009', '3603201412090004', 'Kp Manungung  Rt 003/006', 'Yulianti', '083873599901', '', 1, '1', 5, 0, '31/03/2022'),
(60, 'Widia Natalia', 'Perempuan', 'Tangerang', '25/12/2009', '3603206512090001', 'Kp Cirarab Curug', 'Linda Yustina', '085719331944', '', 1, '1', 66, 0, '31/03/2022'),
(61, 'Ahmad Rifki Hidayat', 'Laki-laki', 'Tangerang', '26/02/2010', '3603202602100003', 'Kp Manungtung  Rt 04/006', 'Heni', '083841402256', '', 1, '1', 5, 0, '31/03/2022'),
(62, 'Rifqi Fauzan', 'Laki-laki', 'Tangerang', '24/03/2009', '3603222403090005', 'Kp Carangpulang', 'Ida', '082249788253', '', 1, '1', 5, 0, '31/03/2022'),
(63, 'Rahma Maulydia', 'Perempuan', 'Tangerang', '20/03/2010', '3603286003100002', 'Perum Legok Permai Rt 02 rw 08', 'Meinawati Trisoedi Hastoeti', '081386243569', '', 1, '1', 5, 0, '31/03/2022'),
(64, 'Nabila Putri Andrian', 'Perempuan', 'Bogor', '06/12/2009', '3603204612090002', 'Kp. Bungaok Rt 03 Rw 01 Caringin', 'Rina Yulianti', '081210074929', '', 1, '1', 12, 0, '04/04/2022'),
(65, 'Syrin Oktaviana', 'Perempuan', 'Tangerang', '10/10/2009', '3603285010090005', 'Jln Swadaya Kelapa Dua', 'Nikmatun Nurkhasanah', '0895337419733', '', 1, '1', 21, 0, '04/04/2022'),
(66, 'agnia dwi novita', 'Perempuan', 'Jakarta', '16/11/2009', '3674025611090001', 'Perum MAkorem', 'Tri Yuliantina', '085777987455', '', 1, '1', 17, 0, '06/04/2022'),
(67, 'Arya Wijaya', 'Laki-laki', 'Tangerang', '31/05/2008', '3603223105080002', 'Kp Ciakar Rt 02 Rw 04 Desa Cicalengka', 'Nuryanih', '081288953930', '0085757512', 1, '1', 73, 0, '06/04/2022'),
(68, 'Diana', 'Perempuan', 'Tangerang', '23/06/2010', '3603206306100006', 'Kp Legok Rt 11 Rw 005', 'Devi Susanti', '081212162248', '', 2, '1', 76, 0, '06/04/2022'),
(69, 'Syafana Aulia Hanggoro', 'Perempuan', 'Tangerang', '27/05/2010', '3603286705100008', 'Perum Binong Permai Curug', 'Mualimah Rasto', '085946045784', '0108297981', 2, '1', 85, 0, '06/04/2022'),
(70, 'Arum cahaya putri', 'Perempuan', 'Karanganyar', '19/03/2010', '3313015903100003', 'Jalan Raya PLP', 'Lilis Saputri', '085224803702', '', 1, '1', 59, 0, '06/04/2022'),
(72, 'wahyu lingga permana', 'Laki-laki', 'Tangerang', '22/03/2010', '3603202203100003', 'Kp Manungtung  Rt 03/006', 'Yulianti', '083894753313', '', 1, '1', 5, 0, '06/04/2022'),
(73, 'Mohamad Deva Aivaro Augustin', 'Laki-laki', 'Tangerang', '10/08/2010', '3603201008100005', 'Kp Kemuning Rt 001 001 ', 'Siti Aolia', '0857073417181', '', 1, '1', 41, 0, '06/04/2022'),
(74, 'Fakhri Gunawan', 'Laki-laki', 'Tangerang', '01/12/2009', '3671090112090001', 'Kp Dahung 02 004 Panunggangan Barat', 'Sari Desriyani', '0895606314083', '0092187485', 1, '1', 33, 0, '06/04/2022'),
(75, 'qeyra adellya feyza tanjung', 'Perempuan', 'Garut', '20/01/2010', '3603196001100002', 'Perum Makorem', 'Mia Martina', '087888163985', '', 1, '1', 17, 0, '08/04/2022'),
(77, 'Muhammad Aqil Mustopa', 'Laki-laki', 'Tangerang', '08/03/2009', '3603280309090007', 'Kp Bojong Nangka', 'Dwi Lestari', '085280480031', '', 1, '1', 33, 0, '11/04/2022'),
(78, 'Nabillah Nurillah', 'Perempuan', 'Tangerang', '30/06/2010', '3603207006100001', 'Kp Kadaung', 'Siti Holilah', '083890035708', '', 1, '1', 7, 0, '12/04/2022'),
(79, 'Noval Ariyanto', 'Laki-laki', 'Tangerang', '05/11/2010', '45454545787874545121', 'Perum Griya Asri Legok', 'Herlina', '08128144831', '', 1, '1', 17, 0, '12/04/2022'),
(80, 'Fitria Auffat Unnisa', 'Perempuan', 'Tangerang', '09/09/2010', '3603224909100004', 'Kp Manungtung', 'Ai Apipah', '083854553859', '', 1, '1', 5, 0, '12/04/2022'),
(85, 'Nazwatul Aulia', 'Perempuan', 'Tangerang', '10/12/2008', '3603225012080006', 'Kp Dukuh Pinang Rt 04 Rw 03', 'Patimah', '087875275671', '3083220362', 2, '1', 38, 0, '13/04/2022'),
(86, 'Muhamad Farhan Ramadhan', 'Laki-laki', 'Tangerang', '30/08/2010', '3603203008100002', 'Kp MAnungtung', 'Mariah', '087781995988', '', 1, '1', 5, 0, '13/04/2022'),
(87, 'Muhammad Rafli Basyah', 'Laki-laki', 'Tangerang', '03/02/2010', '3603280302100002', 'Perumahan Cluster Mutiara Legok', 'Yusliana, AM.Pd', '085717406350', '', 1, '1', 53, 0, '13/04/2022'),
(88, 'Muhammad Fathirachman', 'Laki-laki', 'Tangerang', '03/04/2010', '3603223004100002', 'Kp Rancagong', 'Yusi Nury Awani', '081717160153', '', 1, '1', 7, 0, '16/04/2022'),
(89, 'Rafik Dipta Al Fajar Dewantara', 'Laki-laki', 'Tangerang', '04/03/2010', '3603200403100001', 'Perumahan Legok Permai', 'Virginadiandari Metasari', '08559895682', '', 1, '1', 7, 0, '16/04/2022'),
(90, 'Fadlah Nafisah', 'Perempuan', 'Tangerang', '26/07/2010', '3603286607100002', 'Kp Bambu Rt 03 Rw 09', 'Avenita Mujanwati', '0895342215257', '', 1, '1', 32, 0, '18/04/2022'),
(91, 'Bachti Fahrianto', 'Laki-laki', 'Tangerang', '27/04/2008', '3674012704080005', 'KP Dukuh Pinang', 'Puji Listriani', '081386342550', '', 1, '1', 35, 0, '21/04/2022'),
(92, 'Muhammad El Fatir', 'Laki-laki', 'Tangerang', '11/10/2009', '3671031110090002', 'Batuceper', 'Rosmiati', '085776967244', '', 1, '1', 74, 0, '11/05/2022'),
(93, 'Mella Frika Sari', 'Perempuan', 'Tangerang', '22/05/2010', '3603206205100002', 'Kp Kemuning', 'Asyanih', '087878513081', '', 1, '1', 67, 0, '11/05/2022'),
(94, 'Raizy Aditya Baihaki', 'Laki-laki', 'Tangerang', '04/03/2010', '3603281901200001', 'Kp Carang Pulang', 'Sinta Diana', '083811250122', '3106974534', 2, '1', 38, 0, '11/05/2022'),
(95, 'Mohamad Firjatullah', 'Laki-laki', 'Tegal', '16/12/2009', '3328091612090007', 'Jalan Raya Swadaya No 2 Kelapa Dua', 'Maslakhatun', '088212001584', '', 1, '1', 21, 0, '14/05/2022'),
(100, 'gheysar Fariz Al-Gazy', 'Laki-laki', 'Tangerang', '15/06/2010', '3603201506100005', 'Perum Legok Indah', 'Lia Kamelia', '085215634844', '0101640284', 2, '1', 77, 0, '18/05/2022'),
(101, 'Firliana Nisfu Arrohmah', 'Perempuan', 'Tegal', '26/07/2010', '3328016607100004', 'Gang Nurul Hidayah', 'Nurrrohmah', '088212945061', '', 1, '1', 71, 0, '25/05/2022'),
(102, 'Syakira Azkiya Hamda', 'Perempuan', 'Tangerang', '31/05/2010', '3603207105100002', 'Kp Rancagong', 'Siti Rofiah', '081285320209', '', 1, '1', 51, 0, '25/05/2022'),
(103, 'Dina Ayu Rosdiyana', 'Perempuan', 'Tangerang', '08/03/2010', '3603204803100005', 'Perum LEgok', 'Roseha', '082112264634', '', 1, '1', 51, 0, '25/05/2022'),
(104, 'muhammad habibi qolbi', 'Laki-laki', 'Tangerang', '09/11/2009', '3603031012090001', 'pasir nangka tigaraksa', 'Siti sulaemiah', '085893328971', '', 1, '1', 83, 0, '25/05/2022'),
(105, 'Aslamul Huda Rabbani', 'Laki-laki', 'Tangerang', '10/03/2010', '3671011003100001', 'legok permai', 'Ningrum baroroh', '08988109805', '', 2, '1', 40, 0, '25/05/2022'),
(106, 'rizki putra aditya', 'Laki-laki', 'Tangerang', '18/10/2009', '3603281810090003', 'Cibogo wetan', 'siti hawa', '081212880336', '', 1, '1', 23, 0, '25/05/2022'),
(107, 'Olivia Febiyanti', 'Perempuan', 'Tangerang', '11/02/2010', '3671095102100001', 'Kp Uwung Girang Cibodas Kota Tangerang', 'Fitriyati', '085691913126', '', 1, '1', 88, 0, '30/05/2022'),
(108, 'Valery Rezita Dalimunthe ', 'Perempuan', 'Tangerang', '28/09/2010', '3603206809100005', 'Kp Blok Kalapa', 'Lia Yulianti', '087871611354', '', 1, '1', 81, 0, '30/05/2022'),
(109, 'Khaira Raissa Gunawan', 'Perempuan', 'Tangerang', '04/04/2010', '3671114404100005', 'Hj Rasuna Said Pinang Kota Tangerang ', 'Indriyani', '081288642425', '', 1, '1', 17, 0, '30/05/2022'),
(110, 'Bayu Badru Ridho', 'Laki-laki', 'Tangerang', '05/06/2009', '3603110506090008', 'Kp Dukuh Pinang', 'Ade Aisyah', '081280373998', '0095872349', 2, '1', 38, 0, '30/05/2022'),
(111, 'Dinda Atahira Ardaido', 'Perempuan', 'Tangerang', '10/05/2010', '3674109500510008', 'Legok Permai', 'Hilda M Adhiani', '081319755509', '', 2, '1', 76, 0, '30/05/2022'),
(112, 'Rara Amelia Ramadani', 'Perempuan', 'Tangerang', '31/08/2010', '3603207108100001', 'Kp Manungtung', 'Irna Wati', '088291216678', '', 1, '1', 5, 0, '31/05/2022'),
(113, 'Ananda Rizqi Pratama', 'Laki-laki', 'Taraman', '31/03/2010', '3671073103100006', 'Kp Babakan Timur ', 'Nurul Fadilah Eka Saputri', '081291577652', '', 1, '1', 17, 0, '31/05/2022'),
(114, 'Ikmam Mul Asfiya', 'Laki-laki', 'Pemalang', '12/12/2009', '3327041212090004', 'perum legok indah ', 'Tarminah', '083877158305', '3091639897', 2, '1', 76, 0, '03/06/2022'),
(115, 'Achmad Radiansyah Ramadhani', 'Laki-laki', 'Tangerang', '21/08/2009', '3603282108090003', 'Kp Kelapa Dua', 'Muhdiyati', '08818155389', '', 1, '1', 21, 0, '07/06/2022'),
(116, 'Muhamad Haikal Firdaus', 'Laki-laki', 'Tangerang', '20/12/2009', '3603192012090001', 'KP Serdang ', 'Titin Suhartini', '081292605904', '', 1, '1', 86, 0, '10/06/2022'),
(117, 'Fadlan', 'Laki-laki', 'Tangerang', '08/08/2009', '3603200808090004', 'Kp Pasir Gaok', 'Nurhasanah', '081213941167', '', 1, '1', 65, 0, '13/06/2022'),
(118, 'Amanda', 'Perempuan', 'Tangerang', '24/01/2010', '3603286401100005', 'Kp Cibogo Wetan', 'maswati', '0895330507288', '', 1, '1', 23, 0, '17/06/2022'),
(119, 'Andika Febriawan', 'Laki-laki', 'Tangerang', '13/01/2009', '3603201302090003', 'Babakan', 'Anis Anisa', '0812113423781', '', 1, '1', 5, 0, '17/06/2022'),
(120, 'Andika Permana', 'Laki-laki', 'Tangerang', '14/12/2009', '3603221412090006', 'sukabakti', 'Hen Hen Hendarsih', '085718531650', '3092932732', 2, '1', 87, 0, '17/06/2022'),
(121, 'Muhammad Farel Ramadhan Saputra', 'Laki-laki', 'Jakarta', '02/09/2010', '3674020209101001', 'Perum Makorem', 'Anipah', '082311728797', '3104343357', 2, '1', 76, 0, '29/06/2022'),
(122, 'Aurelia Maritza Putri', 'Laki-laki', 'Jakarta', '18/03/2010', '7347464633546678', 'Jalan Manungtung', 'sofi', '09889888888', '0104542177', 1, '1', 51, 0, '29/06/2022'),
(123, 'Muhammad Akromul Hidayat', 'Laki-laki', 'Tangerang', '03/05/2010', '3603280305100006', 'K. Bambu', 'Muanah', '089617725306', '0108737858', 1, '1', 32, 0, '29/06/2022'),
(124, 'Mutiara Julia Rahmawati', 'Perempuan', 'Tangerang', '11/07/2010', '3603205107100005', 'Rancagong', 'Arwati', '081380221499', '0106304510', 1, '1', 51, 0, '29/06/2022'),
(125, 'Cikal nur Arshavin Bakhtiar', 'Laki-laki', 'Tangerang', '08/12/2009', '3603200812090001', 'Perum Pesona Legok', 'Hamidah', '081298721080', '', 2, '1', 77, 0, '29/06/2022'),
(126, 'Baiti Rahma', 'Perempuan', 'Tangerang', '28/09/2010', '3172046809101004', 'Legok Permai', 'Sahatun', '', '0103739674', 1, '1', 5, 0, '29/06/2022'),
(127, 'Nadin Qoirina Mumtaza', 'Perempuan', 'Tangerang', '24/03/2010', '3603176403100002', 'Curug', 'Inayah Sholihah', '081585965321', '3106587673', 2, '1', 91, 0, '29/06/2022'),
(128, 'Kartika Pebriyanti', 'Perempuan', 'Pandeglang', '10/02/2010', '3601145902100004', 'Kelapa Dua', 'Rohayati', '083832947341', '', 1, '1', 23, 0, '29/06/2022'),
(129, 'Ahmad Fakhri Aryadillah', 'Laki-laki', 'Bekasi', '13/07/2010', '3216071307100009', 'Perum 1', 'Lilis Nurhayati Syarifah', '088973673794', '0109524723', 1, '1', 89, 0, '30/06/2022'),
(130, 'Faisal Ar Rafi Ahmad', 'Laki-laki', 'Tangerang', '23/12/2009', '3603282312080003', 'Kp Cibogo Kulon', 'Ernawati', '0895611451660', '', 1, '1', 22, 0, '30/06/2022'),
(131, 'Ervi Ajeng Nur Hafizah', 'Perempuan', 'Tangerang', '11/11/2009', '3603205111090001', 'Kp babakan tengah', 'Eti Safitri', '082311431540', '3097803072', 2, '1', 76, 0, '05/07/2022'),
(132, 'Olivia', 'Perempuan', 'Tangerang', '27/06/2010', '3603226706100004', 'Kp Bojong Nangka', 'Indrawan', '081572329594', '0101342045', 1, '1', 32, 0, '05/07/2022'),
(133, 'Khalafa Alam Semesta', 'Laki-laki', 'Tangerang', '03/07/2010', '3603200307100001', 'Kp cirarab', 'Siti Zahroh', '085814057794', '0106181388', 1, '1', 90, 0, '05/07/2022'),
(134, 'Deska Liana', 'Laki-laki', 'Tangerang', '10/12/2009', '3603205112090004', 'Teratai Griya Asri', 'Endang Nuryati', '081387602214', '3095123974', 2, '1', 76, 0, '05/07/2022'),
(135, 'Siti Aulia Bilkis', 'Perempuan', 'Tangerang', '20/10/2010', '3603286011100004', 'Kp rumpak sinang', 'Siti Mabruroh', '085710714963', '', 1, '1', 92, 0, '05/07/2022'),
(136, 'Jaylani Akbar', 'Laki-laki', 'Tangerang', '16/10/2010', '3603281610100002', 'Kp Angris', 'Anisa', '083805083652', '0104285997', 1, '1', 17, 0, '06/07/2022'),
(137, 'Firda Dinda Farah', 'Perempuan', 'Tangerang', '19/03/2010', '3327135903100004', 'Kp Bojong Nangka', 'Runiah', '085700231463', '', 1, '1', 17, 0, '06/07/2022'),
(138, 'Jihan Aulya putri', 'Perempuan', 'Jakarta', '10/09/2009', '31755015009090001', 'Perum Teratai', 'Istiani', '081384751910', '0095257645', 2, '1', 76, 0, '06/07/2022'),
(139, 'Nazwa Solihatul Anam', 'Perempuan', 'Tangerang', '21/09/2010', '3603206109100001', 'jalan babakan santri', 'Nuraeni', '085773289941', '3108543827', 2, '1', 39, 0, '06/07/2022'),
(140, 'Nor Kasih Nadya', 'Perempuan', 'Pamekasan', '10/10/2009', '3529105010090002', 'Kp Medang', 'Nor Imamah', '085716521421', '', 1, '1', 17, 0, '13/07/2022'),
(141, 'Muhamad Rehan', 'Laki-laki', 'Tangerang', '06/04/2010', '3603220604100002', 'Kp  Angris', 'Emin', '085893112600', '0108876035', 1, '1', 17, 0, '13/07/2022'),
(142, 'Jalaludin Alfarizi', 'Laki-laki', 'Tangerang', '25/05/2010', '3603222505100003', 'Kp Angris', 'Aminah', '089512229713', '', 1, '1', 17, 0, '13/07/2022'),
(143, 'Muhammad Fathan Ali Ghufron', 'Laki-laki', 'Tangerang', '26/10/2009', '87344757874878743', 'Jalan Raya Legok ', 'Maya Namayanti', '0895636972289', '', 1, '1', 17, 0, '13/07/2022'),
(144, 'Ahmad Ilham Fadhillah', 'Laki-laki', 'Tangerang', '05/05/2010', '3603280505100008', 'Dasana Indah Blok SD 4', 'Imas Nuryani', '083829826026', '', 1, '1', 32, 0, '13/07/2022'),
(145, 'Malika Aulia Puspita', 'Perempuan', 'Tangerang', '12/03/2010', '3603205203100002', 'Kedaung', 'Uju Juhaeni', '081287938728', '', 1, '1', 59, 0, '13/07/2022'),
(146, 'Muhamad Zulhat Al Rofikal', 'Laki-laki', 'Pemalang', '26/03/2008', '3327042603080003', 'Perum Legok Indah', 'Siti Nurjanah', '083804053830', '', 1, '1', 93, 0, '13/07/2022'),
(147, 'Adila isnaini', 'Perempuan', 'Tangerang', '20/12/2010', '3603206012100002', 'Kp Dukuh Mangga Rt 012 Rw 03', 'Hadijah', '085719794830', '3102765076', 2, '4', 39, 2, '04/12/2022'),
(150, 'Nayla hidaytul adzkia', 'Perempuan', 'Tangerang', '09/05/2011', '3603204905110001', 'Kp.Babakan Barat RT.002/001', 'Siti Choeriyah', '087718851437', '3110968405', 2, '4', 76, 2, '16/01/2023'),
(151, 'Ririn Aulia Zahra', 'Perempuan', 'Tangerang', '25/03/2011', '3603206503110002', 'Kp.Bojong RT.003/002', 'Dina', '083893948642', '0112919530', 1, '4', 67, 1, '16/01/2023'),
(152, 'Rasya Devanul Hakim', 'Laki-laki', 'Tangerang', '23/03/2011', '3603222303110001', 'Kp.Pugur Lengkong Kulon RT.001/002', 'Devi Apriyanti', '083113413418', '0112415247', 1, '4', 67, 2, '16/01/2023'),
(153, 'Khalid Pura Salsabillah', 'Laki-laki', 'Tangerang', '06/04/2011', '3603220604110005', 'Medang Lestari Blok.B2/K26 Jl. Alam Raya RT.03/12', 'Hariyati', '081314015059', '3153680978', 1, '4', 113, 1, '16/01/2023'),
(155, 'Mimbi Aulia', 'Perempuan', 'Tangerang', '18/06/2011', '3603205806110003', 'Kp,palasari kec legok tangerang 002/002', 'Supiyanti', '089630549607', '0112018314', 1, '4', 66, 2, '16/01/2023'),
(156, 'Bilqis Rihadatul Awallia', 'Perempuan', 'Tangerang', '26/01/2011', '3603206701110001', 'Kp.Bungaok RT.001/003', 'Sifa Fauziah', '083891950739', '0112140336', 1, '4', 41, 1, '16/01/2023'),
(157, 'Khalifah Daniswara', 'Perempuan', 'Tangerang', '26/12/2010', '123456789101112131', 'Cluster Mutiara Legok Blok.C3 No.03 RT.003/007', 'Linda Sari', '08871794135', '0107925565', 1, '4', 12, 1, '16/01/2023'),
(158, 'Arhab Barran Nick', 'Laki-laki', 'Jakarta', '23/09/2011', '3175062309111013', 'Perum Legok Permai Blok.H1 G7 RT.001/011', 'Wina Riningsih', '082110634434', '0116621997', 2, '4', 76, 2, '16/01/2023'),
(159, 'Nurul Maulida', 'Perempuan', 'Tangerang', '06/02/2012', '3603204602120006', 'Kp.Bungaok RT.004/002', 'Siti Nur Fatonah', '089655089193', '3123622487', 2, '4', 96, 2, '16/01/2023'),
(160, 'Adrian Dhani Camil', 'Laki-laki', 'Bekasi', '12/10/2010', '3603201210100008', 'Kp.Bungaok Lembur RT.004/002', 'Ulan Sari', '088297691590', '0106980279', 1, '4', 13, 2, '16/01/2023'),
(161, 'Muhamad Reza Indrapriana', 'Laki-laki', 'Serang', '13/02/2011', '3604251302110001', 'Jalan Khimas Hasyim No 56 Babakan Legok', 'Neni Indrawati', '08128245104', '0118457999', 2, '4', 97, 2, '14/02/2023'),
(162, 'Rasya Muhammad Athaya', 'Laki-laki', 'Tangerang', '08/10/2011', '3603200810110003', 'Perum Teratai Griya Asri e6/2 legok', 'Emi Meisari', '082299263387', '3111364702', 2, '4', 76, 2, '14/02/2023'),
(163, 'Sabila Syawaliah', 'Perempuan', 'Tangerang', '27/09/2011', '3671096709100001', 'Kp Uwung Girang', 'Desi Riyana', '085891989875', '0106302388', 1, '4', 88, 1, '14/02/2023'),
(164, 'Silvia Vinesha', 'Perempuan', 'Tangerang', '01/02/2011', '3603204102110003', 'Kp. Bungaok', 'Euis Dewi Sartika', '085811432560', '0112762958', 1, '4', 12, 1, '14/02/2023'),
(165, 'Ahmad Hijaji', 'Laki-laki', 'Jakarta', '16/11/2010', '3174051611101001', 'Kp. Manungtung', 'Widian', '085218932524', '3104435864', 2, '4', 76, 2, '14/02/2023'),
(166, 'Raisya Putri Ramadani', 'Perempuan', 'Brebes', '23/07/2012', '3329021508130004', 'Kp Manungtung  Rt 002 Rw 01 ', 'Rani Ramadani', '085210765097', '0124436657', 1, '4', 5, 2, '14/02/2023'),
(167, 'Sabriatu Zahra', 'Perempuan', 'Tangerang', '27/11/2010', '3603206711100003', 'Kp Manungtung  Rt 002 Rw 01 ', 'Sri Susanti', '089515751857', '3107479647', 2, '4', 76, 2, '14/02/2023'),
(168, 'Anita Syakila Widiyanti', 'Perempuan', 'Tangerang', '11/08/2011', '3603285108110002', 'Kp Dukuhpinang', 'Muryanti', '088213705411', '3113296658', 2, '4', 76, 2, '14/02/2023'),
(170, 'Alhazmi Attaqillah', 'Laki-laki', 'Tangerang', '01/03/2011', '3603200103110004', 'Perum Legok Pemai', 'Upit Sri Rahajeng', '087771198728', '0118892031', 1, '4', 98, 2, '11/04/2023'),
(171, 'Excell Gunawan Al Hafiz', 'Laki-laki', 'Tangerang', '14/12/2010', '3671091412100004', 'Perum Legok Permai Rt 01 Rw 08', 'Yuniar Ulda Sari', '081947690495', '010689559', 1, '4', 5, 2, '11/04/2023'),
(172, 'Muhammad Aldi Fachrian', 'Laki-laki', 'Tangerang', '18/09/2010', '3671061809100002', 'Perum LEgok Permai  Rt 03 Rw 011', 'Wiwi Kartikasari', '081294662616', '0106776607', 1, '4', 5, 2, '11/04/2023'),
(173, 'Achmad Rafi Bahtiar', 'Laki-laki', 'Brebes', '09/09/2011', '3603200909110003', 'Perum Teratai Griya', 'Sholihatun', '081318494296', '0111108323', 2, '4', 76, 2, '11/04/2023'),
(174, 'Afrizelia Titin Syabila', 'Perempuan', 'Tangerang', '02/02/2011', '3603204202110004', 'Kp Babakan Tengah', 'Riza Romika', '082246814690', '3118126707', 2, '4', 39, 1, '11/04/2023'),
(175, 'Akhdan Latif Azizan', 'Laki-laki', 'Tangerang', '11/04/2011', '3603201104110004', 'Perumahan Legok Permai Blok A1/c4', 'Fitri Wulandari Santoso', '081317805491', '0116917403', 1, '4', 5, 2, '11/04/2023'),
(176, 'Nabil Mauluduhuddin Ramadhan', 'Laki-laki', 'Tangerang', '29/08/2011', '3603202908110001', 'Jalan Raden Ki Mas Hasyim Rt 2 Rw 3', 'Leni Lusiana', '081281989905', '0115862919', 2, '4', 39, 2, '11/04/2023'),
(177, 'Rizik Al Zukhruf ', 'Laki-laki', 'Bogor', '02/07/2011', '3201200207110001', 'Kp Bungaok Rt 05 Rw 01', 'Isnawati', '0895423475122', '0118442752', 1, '4', 13, 1, '11/04/2023'),
(178, 'Airis Nurfadillah', 'Perempuan', 'Tangerang', '03/03/2011', '3603204303110001', 'Kp Dukuh Pete Rt 013 Rw 03', 'Sri Mulyati', '081281608668', '3112239742', 2, '4', 39, 2, '11/04/2023'),
(179, 'Nurazizah', 'Perempuan', 'Tangerang', '26/09/2011', '3603206609110001', 'Kp Cadas Rt 01 Rw 04', 'Elah', '087770607165', '0112392534', 1, '4', 7, 2, '11/04/2023'),
(180, 'Devita Aulia Utami', 'Perempuan', 'Tangerang', '08/12/2010', '3603204812100003', 'Kp Dukuh Manggah Rt 014 Rw Rw 03', 'Hermawati', '085881732886', '3107627360', 2, '4', 76, 2, '11/04/2023'),
(181, 'Khaerani Afifah', 'Perempuan', 'Tangerang', '18/08/2010', '3671095808100003', 'Perum Legok Permai Blok C1H1 Rt 01 Rw 08', 'Jiyem', '081287824453', '0104488599', 2, '4', 76, 3, '11/04/2023'),
(182, 'Faiz Mahardika Saputra', 'Laki-laki', 'Tangerang', '25/01/2011', '3603202501110001', 'Perum LEgok Indah Rt 03 Rw 12', 'Budi Hastuti', '085772881322', '0115740298', 2, '4', 77, 2, '11/04/2023'),
(183, 'Nurul Qurrota Aiyn', 'Perempuan', 'Tangerang', '14/06/2011', '3603205406110002', 'Kp Cadas Rt 02 Rw 03 No 159', 'Mimin Asminah', '087805657330', '0118150442', 1, '4', 7, 2, '11/04/2023'),
(184, 'Mukhammad Malik Akbar Wibowo', 'Laki-laki', 'Tangerang', '05/12/2010', '3603200512100005', 'Perum Teratai Griya Asri Blok C2 No 4 Legok Rt 20 Rw 04', 'Any Siswandari', '081281280836', '3104959627', 2, '4', 76, 3, '11/04/2023'),
(185, 'Aisyaharra Dwi Elmaira', 'Perempuan', 'Jakarta', '19/10/2010', '3171075910101002', 'Kp Bojong Indah ', 'Sopiyah', '081284959747', '0106417754', 1, '4', 67, 3, '11/04/2023'),
(186, 'Fazri Amanulloh', 'Laki-laki', 'Tegal', '06/01/2011', '3328130601110001', 'Kp Carang Pulang', 'Tarisah', '', '0112324300', 1, '4', 17, 3, '12/04/2023'),
(187, 'Syafri Rachmat Maulana', 'Laki-laki', 'Tangerang', '22/09/2011', '3603282209110008', 'Kp Cibogo Kulon Kav. Kelapa Dua ', 'Suleha', '085782553779', '0128135759', 1, '4', 22, 1, '12/04/2023'),
(188, 'Ellen Jesica ', 'Perempuan', 'Tangerang', '19/11/2011', '3603205911110004', 'Kp Dukuh Mangga ', 'Marhamah', '081574610696', '0118047359', 1, '4', 41, 2, '12/04/2023'),
(189, 'Rapa Maulana', 'Laki-laki', 'Tangerang', '07/07/2010', '3603200707100007', 'Kp Dukuh Mangga ', 'Yusniah', '083819985331', '0101481980', 1, '4', 41, 2, '12/04/2023'),
(190, 'Elysia Fatayana Nadjah', 'Perempuan', 'Tangerang', '15/01/2011', '3603205501110001', 'Perum Teratai Griya', 'Siti Asiyah', '087874429637', '3118961617', 2, '4', 76, 2, '12/04/2023'),
(191, 'Barda Sutaji', 'Laki-laki', 'Tangerang', '18/10/2011', '3603201210110003', 'Kp Kemuning Rt 02 Rw 01', 'Nengsih', '083893229977', '0111726923', 1, '4', 67, 3, '12/04/2023'),
(192, 'Lulu Cahya Nirpana', 'Perempuan', 'Tangerang', '04/09/2011', '3603200810090001', 'Kp Cadas Rt 01 Rw 04', 'Ruminah', '081383235450', '0114927316', 1, '4', 7, 2, '12/04/2023'),
(193, 'Talitha Akila Kinasih', 'Perempuan', 'Tangerang', '27/08/2010', '3671096708100002', 'Perum Bumi Jati Elok', 'Mita Kristanti', '081286337857', '0106577115', 2, '4', 76, 3, '12/04/2023'),
(194, 'Kania Putri Ramadhani', 'Perempuan', 'Tangerang', '17/08/2011', '3603205708110007', 'Perum Legok Permai Blok C1C No 11 Rt 02 Rw 8', 'Maemunah', '081280241617', '0113185526', 1, '4', 5, 3, '12/04/2023'),
(195, 'Siti Nur Azizah', 'Perempuan', 'Jakarta', '26/01/2011', '3175106601111005', 'Kp Babakan Santri Rt 02 Rw 07', 'Suhiroh', '088210543148', '3113764525', 2, '4', 76, 3, '12/04/2023'),
(196, 'Acmad Rafi Yanuar', 'Laki-laki', 'Tangerang', '03/01/2011', '3172012301111005', 'Perum Legok Permai Blok C.I/C.10 Rt 002 Rw 008', 'Sumarni', '085211848708', '0119715216', 1, '4', 5, 3, '13/04/2023'),
(197, 'Wizdan Akmal Muklis', 'Laki-laki', 'Tangerang', '09/12/2010', '3603200912100002', 'Kp Manungtung Rt 04 Rw 06', 'Wiwin Ardiani', '089623294590', '0108620476', 1, '4', 5, 3, '13/04/2023'),
(198, 'Muhamad Diaz Rafky Noviansyah', 'Laki-laki', 'Tangerang', '12/11/2010', '3671111211100005', 'Perum Bumi Jati Elok Blok B7/8 Malangnengah', 'Yurnida Tanti', '081381182104', '0103183594', 1, '4', 11, 3, '13/04/2023'),
(199, 'Putri Nurma Ayu', 'Perempuan', 'Majalengka', '08/11/2010', '3674024811100001', 'Perum Makorem Legok', 'Neng Nur Linda', '081383438250', '0107669270', 1, '4', 99, 3, '13/04/2023'),
(200, 'Chelsea Aurelia Ramadhan', 'Perempuan', 'Tangerang', '14/08/2011', '3603175308110001', 'Perum Legok Permai Blok H1 G 6', 'Mela Nurmalia', '082111423634', '0118984277', 2, '4', 76, 3, '13/04/2023'),
(201, 'Merlinda Sari', 'Perempuan', 'Tangerang', '05/12/2011', '122454645454', 'Kp Dukuh Pete', 'Siti Winda', '082278158608', '3119398641', 2, '4', 78, 4, '13/04/2023'),
(202, 'Ramdhan Fiddillah Putra', 'Laki-laki', 'Tangerang', '01/08/2011', '36710901081100003', 'Perum Legok Indah', 'Fitri Wijiarsi', '082137120566', '0113319459', 1, '4', 51, 3, '13/04/2023'),
(203, 'Vita Syakirah Trista Putri Irwanto', 'Perempuan', 'Tangerang', '23/05/2011', '3603286305110001', 'Kp bojong rt 03 rw 01', 'Rosita', '081296696617', '0113927454', 1, '4', 67, 3, '13/04/2023'),
(204, 'Mizazka Fidelya Duatiz', 'Perempuan', 'Tangerang', '26/09/2010', '3671096609100004', 'Perum Legok Permai', 'Endang Maiharsi', '081287597778', '3106296341', 2, '4', 76, 2, '13/04/2023'),
(205, 'Abdan Syukron', 'Laki-laki', 'Tangerang', '08/06/2011', '3603170806110001', 'Perum Pesona Legok Blok C No 21', 'Megawati', '088976522180', '3116728809', 2, '4', 39, 3, '13/04/2023'),
(206, 'Khansa Qias Danisa', 'Perempuan', 'Kuningan', '17/07/2011', '3603204205060002', 'Perum Legok Indah', 'Eri Surahmi', '', '0114257746', 2, '4', 76, 3, '13/04/2023'),
(207, 'Ahmad Fauji', 'Laki-laki', 'Tangerang', '02/12/2010', '3603200212100008', 'Kp Manungtung Rt 04 Rw 06', 'Yayah', '085817496297', '0114935160', 1, '4', 5, 2, '13/04/2023'),
(208, 'Zahra Aulia Rizqia Siddik', 'Perempuan', 'Karawang', '29/09/2010', '3671096909100006', 'Jalan Kelapa Hibrida Barat II Blok GA3 No 28 Gading Rt 01 Rw 04', 'Riska Rizqi Andriani', '08159421349', '0101037195', 1, '4', 25, 3, '13/04/2023'),
(209, 'Keyla Salsabila Irawan', 'Perempuan', 'Tangerang', '24/06/2011', '3603206406110001', 'Perumahan Islamic  Babakan', 'Okta Rita Mayasari', '082114824511', '0117058091', 1, '4', 41, 1, '13/04/2023'),
(210, 'Stevani Putri Amelia', 'Perempuan', 'Tangerang', '13/06/2011', '3603205306120006', 'Kp Legok  rt 08 rw 02', 'Neni Septiani', '082138649957', '3116677018', 2, '4', 76, 3, '13/04/2023'),
(212, 'Debby Allisyah', 'Perempuan', 'Tangerang', '26/07/2010', '3603206607100002', 'Kp Dukuh Pete', 'Yati', '081297110252', '0105224968', 1, '4', 5, 4, '13/04/2023'),
(213, 'Dina Febriana', 'Perempuan', 'Tangerang', '11/02/2011', '3603225102110002', 'Kp Cijantra', 'Siti Khodijah', '08994573868', '3115879545', 2, '4', 78, 3, '13/04/2023'),
(214, 'Dwina Aqilah', 'Perempuan', 'Bogor', '19/02/2011', '3271065902110006', 'Manungtung', 'Neneng Suningsih', '', '0117224343', 1, '4', 5, 4, '15/04/2023'),
(215, 'Anggi Shalsa Yana Kartinal', 'Perempuan', 'Tangerang', '13/09/2011', '3603205309110002', 'Kp Kemuning Rt 01 ', 'Yeni', '082114833260', '0117778208', 1, '4', 7, 3, '17/04/2023'),
(216, 'Fauzan Abid Bramantyo', 'Laki-laki', 'Tangerang', '10/11/2010', '3603201911100002', 'Perum Griya Curug', 'Asmawati', '085284881852', '3103783643', 2, '4', 116, 4, '17/04/2023'),
(217, 'Ahmad Ikhsan Madesha', 'Laki-laki', 'Majalengka', '23/09/2011', '3210082309110001', 'Perum Griya Permai Blok H1 No 3', 'Wawat Susilawati', '085212444717', '0117509894', 1, '4', 13, 4, '02/05/2023'),
(218, 'Keisha Rayyan', 'Laki-laki', 'Purworejo', '10/06/2011', '3306021006110001', 'Kp Bojong Nangka Kel. Bojong Nangka', 'Ari Essanti', '085212372725', '0112963489', 1, '4', 100, 4, '02/05/2023'),
(219, 'Eep Saepullah Yusuf', 'Laki-laki', 'Tangerang', '15/03/2011', '3603181503110002', 'Cluster Mutiara Legok Rt 02 Rw 07 ', 'Arum Sari', '081314541198', '3113548715', 2, '4', 76, 4, '08/05/2023'),
(220, 'Artur Yandika Azhar', 'Laki-laki', 'Tangerang', '08/04/2011', '3603280804110003', 'Cluster Mutiara Legok', 'Atika Yuanita', '083847136507', '0118311172', 1, '4', 33, 3, '08/05/2023'),
(221, 'Farda Haykal Musyafa', 'Laki-laki', 'Tangerang', '24/09/2010', '3603202409100005', 'Kemuning', 'Sari Rahayu', '082211862928', '0104763302', 1, '4', 53, 4, '08/05/2023'),
(222, 'Davian Kurniawan Mukhtar', 'Laki-laki', 'Tangerang', '03/01/2011', '3603200301120004', 'Perum Graha Citra Palasari Blok A7 No 21 001/005', 'Windi Lestari', '087772911574', '0111763683', 1, '4', 65, 4, '08/05/2023'),
(223, 'Syahdan Hafidz', 'Laki-laki', 'Tangerang', '02/06/2011', '3603030206110006', 'Perum Villa Pasirnangka', 'Ika Mustikawati', '085213410508', '0118972769', 1, '4', 83, 1, '08/05/2023'),
(224, 'Nuri Maulida', 'Perempuan', 'Tangerang', '11/10/2010', '3603225110100004', 'Kp Cijantra 004/00', 'Holilah', '083897093913', '3105644898', 2, '4', 78, 4, '19/05/2023'),
(225, 'Robywan Wijaya Kusuma', 'Laki-laki', 'Tangerang', '18/02/2011', '3674021802110001', 'Makorem ', 'Ewi Srinovita', '085770077547', '0113248147', 1, '4', 101, 4, '19/05/2023'),
(226, 'Siti Dahria Evrillyansyah', 'Perempuan', 'Tangerang', '24/04/2011', '3671026404110011', 'Kp Rawacana 03/03 ', 'Khomsah', '085770412537', '0115388409', 1, '4', 102, 1, '19/05/2023'),
(227, 'Arfan Alfarezi Ramadhani', 'Laki-laki', 'Tangerang', '04/08/2011', '3603280408120005', 'Jalan Swadaya Kelapa Dua Rt 02 Rw 04 Kel', 'Intan Irnawati', '085894658906', '0115232297', 1, '4', 103, 3, '20/05/2023'),
(228, 'Farid Fahri', 'Laki-laki', 'Tangerang', '06/03/2011', '3526060603110001', 'Kp Dukuh Pete', 'Masripah', '081703253788', '3112151681', 2, '4', 39, 4, '29/05/2023'),
(229, 'Bagus Putra Kustoro', 'Laki-laki', 'Cilacap', '04/09/2010', '3301130409100002', 'Legok Permai', 'Muniroh', '087786458801', '0106874703', 1, '4', 5, 4, '29/05/2023'),
(230, 'Ardabilly Alaraisy ', 'Laki-laki', 'Tangerang', '26/12/2010', '3671092612100006', 'uwung jaya', 'Rasmah', '083847875963', '0101810589', 1, '4', 104, 1, '29/05/2023'),
(231, 'Muhammad Insanil Abdal', 'Laki-laki', 'Tangerang', '25/06/2010', '3603172506100002', 'Perum Aster Caringin ', 'Yunita Sari', '081288797327', '0117560756', 1, '4', 53, 3, '29/05/2023'),
(232, 'Shireen Almeera Fitrianto', 'Perempuan', 'Tangerang', '07/07/2011', '3671084707110004', 'Jalan Mawar Sangiang Jaya Periuk', 'Agnes Veronica Dinga', '081284498044', '0112816280', 1, '4', 94, 1, '29/05/2023'),
(233, 'Kiki Nurdiansyah', 'Laki-laki', 'Tangerang', '05/12/2011', '3603220512110003', 'Kp Cijantra', 'Susi Iryanti', '081998154119', '3114598941', 2, '4', 78, 4, '29/05/2023'),
(234, 'Sabrina Putri Almuqiah', 'Perempuan', 'Tangerang', '05/03/2011', '3603204503110001', 'Perum Legok Indah', 'dewi', '085951546778', '0113729225', 1, '4', 106, 4, '29/05/2023'),
(235, 'Rizky Arif Maulana', 'Laki-laki', 'Tangerang', '29/06/2011', '3603282906110001', 'Legok Permai', 'Ratna Sari', '089627805037', '3114133880', 2, '4', 76, 4, '29/05/2023'),
(236, 'Agung Dwirahmadian Arib', 'Laki-laki', 'Tangerang', '10/04/2010', '3211201004100003', 'Kp Cisauk', 'Ira Maria Harti', '085314756860', '0105821839', 1, '4', 107, 4, '29/05/2023'),
(237, 'Rhefatan Agies Sanjaya', 'Laki-laki', 'Tangerang', '17/05/2010', '3671071705100007', 'Kp Kamuning', 'Uen', '083879399934', '0103526457', 1, '4', 108, 1, '29/05/2023'),
(238, 'Alfariz Febian Syah', 'Laki-laki', 'Tangerang', '10/02/2011', '3603201002110001', 'Perum Jati elok', 'Marlina', '0895702154531', '0119828831', 1, '4', 56, 3, '29/05/2023'),
(239, 'Fadillah Zayyan', 'Laki-laki', 'Tangerang', '25/12/2010', '3603282512100002', 'Mutiara Legok Caringin', 'Nia Mursalina', '085813080138', '3108517495', 2, '4', 76, 4, '29/05/2023'),
(241, 'Rifky Pahrezi', 'Laki-laki', 'Tangerang', '28/03/2011', '3603222803110002', 'Kp Cijantra', 'Risma Susanti', '0895336964718', '3117438446', 2, '4', 78, 4, '08/06/2023'),
(242, 'Safa Ananda Puteri', 'Perempuan', 'Tangerang', '21/07/2010', '3603206107100006', 'Kp Kedaung', 'Parnih', '088225847327', '0106556194', 1, '4', 7, 3, '08/06/2023'),
(243, 'Rahmadila Malika Hanin', 'Perempuan', 'Tangerang', '02/04/2011', '3603200204110002', 'Kp Kadaung', 'Sri Wahyanti', '085810601989', '0112975511', 1, '4', 7, 4, '08/06/2023'),
(244, 'May Yani', 'Perempuan', 'Bekasi', '11/05/2011', '3275035105110001', 'KP Carang Pulang', 'Rohma', '081524612906', '3119447224', 2, '4', 110, 4, '16/06/2023'),
(245, 'Muhammad Rizki', 'Laki-laki', 'Jakarta', '20/03/2011', '3307102003110001', 'Kp Angris Bojongnangka', 'Tuyem', '085211323059', '115213685', 1, '4', 111, 4, '16/06/2023'),
(246, 'Zalfa Rifaninda Putri', 'Perempuan', 'Tangerang', '15/01/2011', '3603205501110006', 'Kp Babakan Tengah', 'Yuli Nurkamilawati', '082130487729', '0119283142', 1, '4', 4, 1, '16/06/2023'),
(247, 'Arina Maulida Azzahra', 'Perempuan', 'Mojokerto', '07/02/2011', '3516114702110003', 'Cluster Mutiara Legok', 'Linda Nofitasari', '082310229379', '0116198871', 1, '4', 12, 1, '16/06/2023'),
(248, 'Syalendra Maulana Rifani', 'Laki-laki', 'Semarang', '04/03/2011', '3674030403110002', 'Legok Permai', 'Reny Retno Sari', '087831167405', '0114018060', 1, '4', 5, 4, '16/06/2023'),
(249, 'Regina Kansa Jaidah', 'Perempuan', 'Tangerang', '26/02/2012', '3603226602120001', 'Kp Cicayur Desa Cicalengka Pagedangan ', 'Riska Mayanti', '085819210496', '0124171093', 1, '4', 112, 4, '19/06/2023'),
(250, 'Rafka Satya Firmansyah', 'Laki-laki', 'Sumedang', '01/04/2011', '3211170104110001', 'Rumah Dinas Korem 052', 'Ratna Juwita', '085894723314', '0114744553', 1, '4', 20, 4, '20/06/2023'),
(251, 'Muhamad Adhan Arosid', 'Laki-laki', 'Tangerang', '05/04/2011', '3603200504110001', 'Kp Cadas Rancagong Legok ', 'Suminah', '081314366206', '0112887086', 1, '4', 7, 4, '22/06/2023'),
(252, 'Azriel Enanda', 'Laki-laki', 'Tangerang', '25/04/2011', '3603202504110003', 'Kp Bungaok Gg Kubur', 'Mulyanah', '0895411900948', '0112349899', 1, '4', 11, 3, '03/07/2023'),
(253, 'Nimatul Fauziyah', 'Perempuan', 'Cirebon', '17/07/2010', '3209165707100005', 'Kp Dukuh Pete', 'Nurlaela', '088971165693', '0101388406', 1, '4', 114, 4, '03/07/2023'),
(254, 'Almira Sisilia Putri', 'Perempuan', 'Tangerang', '22/12/2011', '3603286212110005', 'Jln Swadaya', 'Dian Anggraeni', '085774048115', '0113226043', 1, '4', 22, 1, '03/07/2023'),
(255, 'Adinda Aprillya Rahmat', 'Perempuan', 'Hatta', '10/04/2011', '3201105004110003', 'Kp Binong', 'Siti Alfiah', '085777106592', '0118736121', 1, '4', 115, 4, '03/07/2023'),
(256, 'Rifky Vandanie Sasono', 'Laki-laki', 'Tangerang', '10/04/2011', '3173071004111008', 'Cluster Pondok Nuarta Rt 03 Rw 02', 'Alia Kusminiati', '081211067274', '3111489388', 2, '4', 39, 3, '07/07/2023'),
(257, 'Melati Syahira Putri', 'Perempuan', 'Tangerang', '06/11/2011', '3603204611110003', 'Kp Bungaok ', 'Lia', '089646484107', '3117065059', 2, '4', 29, 4, '07/07/2023'),
(258, 'Katon Suluh Rahino', 'Laki-laki', 'Tangerang', '03/03/2011', '3603200303110002', 'Legok Indah Blok A8/11 Babakan Legok', 'Lilik Windriani', '087881762739', '0114224203', 2, '4', 76, 3, '11/07/2023'),
(259, 'Ahmad Zhafir Shakiy', 'Laki-laki', 'Tangerang', '20/02/2011', '3603282002110005', 'Kp Curug Rt 03 Rw 01 Curugsangereng', '', '', '0112590172', 1, '4', 70, 1, '11/07/2023'),
(260, 'Nabila Syifa Aulia', 'Perempuan', 'Tangerang', '20/09/2010', '3603206009100006', 'Kp Legok Rt 006 Rw 002', 'Hayani', '088219976188', '0101864221', 2, '4', 76, 4, '11/07/2023'),
(261, 'Salman Al Farisi', 'Laki-laki', 'Tangerang', '10/07/2010', '3671091007100004', 'Jalan Kentang III No 3', 'Adha Yanti Oktaviani', '081285661393', '0108138089', 1, '4', 117, 1, '13/07/2023'),
(262, 'Aqila Nabila Rifdah', 'Perempuan', 'Tangerang', '02/06/2011', '3603204206110001', 'Kp Bungaok', 'Yulianti', '081381744120', '0114240436', 1, '4', 12, 3, '13/07/2023'),
(263, 'Munji Hakim Nurrahman', 'Laki-laki', 'Bogor', '18/07/2011', '3603221807110004', 'Perum Jati Elok Blok B3/03', 'Hj. Fatonah Soleha', '085945610991', '0119116398', 1, '4', 118, 1, '13/07/2023'),
(264, 'Nabila Nuraini', 'Perempuan', 'Tangerang', '03/12/2010', '3603284312100001', 'Kp Bojongnangka', 'Liya Safitri', '085774458710', '0105538319', 1, '4', 17, 3, '13/07/2023'),
(265, 'Rafael Dwi Febrian', 'Laki-laki', 'Jakarta', '11/02/2011', '3276081102110003', 'Perum Legok Permai', 'Yeni Ariyanti', '08561236676', '0111365950', 1, '4', 51, 2, '13/07/2023'),
(266, 'Muhammad Al-Habsy Ibrahim', 'Laki-laki', 'Tangerang', '29/02/2012', '3603202902120001', 'Kp Bungaok', 'Atin Supriatin', '089513950879', '3129088984', 2, '4', 96, 2, '13/07/2023');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenjang`
--

CREATE TABLE `tbl_jenjang` (
  `id_jenjang` int(11) NOT NULL,
  `jenjang` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jenjang`
--

INSERT INTO `tbl_jenjang` (`id_jenjang`, `jenjang`) VALUES
(1, 'SD'),
(2, 'MI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jenjang`
--
ALTER TABLE `tbl_jenjang`
  ADD PRIMARY KEY (`id_jenjang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=267;

--
-- AUTO_INCREMENT for table `tbl_jenjang`
--
ALTER TABLE `tbl_jenjang`
  MODIFY `id_jenjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
