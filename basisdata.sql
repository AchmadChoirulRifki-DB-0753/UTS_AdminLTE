-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2020 at 09:47 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basisdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `kd_dosen` varchar(10) NOT NULL,
  `nm_dosen` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`kd_dosen`, `nm_dosen`) VALUES
('dos_001', 'Pak Khanif'),
('dos_002', 'Pak Buang'),
('dos_003', 'Pak Toni'),
('dos_004', 'Pak Adi'),
('dos_005', 'Pak Minto'),
('dos_006', 'Pak Teguh'),
('dos_007', 'Pak Gentur'),
('dos_008', 'Bu Aeny'),
('dos_009', 'Bu Nadia');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `nim` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`nim`, `username`, `password`) VALUES
('181240000753', 'achmad choirul rifki', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `login1`
--

CREATE TABLE `login1` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `level` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login1`
--

INSERT INTO `login1` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Achmad Choirul Rifki', 'admin', 'admin', 'admin'),
(2, 'Afyan', 'afyan', 'afyan', 'teman');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(30) NOT NULL,
  `nama_mhs` varchar(30) DEFAULT NULL,
  `alamat` varchar(30) DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama_mhs`, `alamat`, `no_telp`) VALUES
('181240000751', 'M Muammar', 'Kerso', '085765238476'),
('181240000752', 'Adjie Laksono', 'Sukoharjo', '089765238477'),
('181240000753', 'Achmad Choirul Rifki', 'Bawu Lor', '089512222166'),
('181240000754', 'Afyan Birera', 'Bangsri', '082512222123'),
('181240000755', 'Maulana Ashar', 'Rau', '08912222111'),
('181240000756', 'Anang Fathul', 'Teluk', '089122637386'),
('181240000757', 'Aris Widaryani', 'Bangsri', '089122637898'),
('181240000758', 'Yusuf Hidayat', 'Kalinyamatan', '089122637000'),
('181240000759', 'Dwi Novianto Pratama', 'Mindahan', '089122637009'),
('181240000760', 'Saniatul Fais', 'Bawu Lor', '089122637011');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kd_makul` varchar(10) NOT NULL,
  `nm_makul` varchar(30) DEFAULT NULL,
  `sks` varchar(5) DEFAULT NULL,
  `kd_dosen` varchar(10) DEFAULT NULL,
  `ruang` varchar(10) DEFAULT NULL,
  `waktu` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`kd_makul`, `nm_makul`, `sks`, `kd_dosen`, `ruang`, `waktu`) VALUES
('TIF-5315', 'Basis Data Lanjut', '2', 'dos_009', 'D103', 'Senin, 07.30-09.10'),
('TIF-5316', 'Strategi Algoritma', '3', 'dos_002', 'D303', 'Selasa, 07.30-10.00'),
('TIF-5317', 'Grafika Komputer', '3', 'dos_003', 'D104', 'Rabu, 10.00-12.30'),
('TIF-5319', 'Pemrograman Web', '3', 'dos_007', 'D103', 'Jumat, 07.30-10.00'),
('TIF-5320', 'Jaringan Komputer', '3', 'dos_008', 'D105', 'Kamis, 10.00-12.30'),
('TIF-5321', 'PBO Lanjut', '3', 'dos_006', 'D103', 'Kamis, 07.30-10.00');

-- --------------------------------------------------------

--
-- Table structure for table `nilai1`
--

CREATE TABLE `nilai1` (
  `kd_makul` varchar(15) DEFAULT NULL,
  `nim` varchar(20) DEFAULT NULL,
  `nilai` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai1`
--

INSERT INTO `nilai1` (`kd_makul`, `nim`, `nilai`) VALUES
('TIF-5315', '181240000753', 85),
('TIF-5320', '181240000754', 80),
('TIF-5315', '181240000754', 75);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`kd_dosen`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `login1`
--
ALTER TABLE `login1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`kd_makul`),
  ADD KEY `kd_dosen` (`kd_dosen`);

--
-- Indexes for table `nilai1`
--
ALTER TABLE `nilai1`
  ADD KEY `kd_makul` (`kd_makul`),
  ADD KEY `nim` (`nim`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD CONSTRAINT `matakuliah_ibfk_1` FOREIGN KEY (`kd_dosen`) REFERENCES `dosen` (`kd_dosen`);

--
-- Constraints for table `nilai1`
--
ALTER TABLE `nilai1`
  ADD CONSTRAINT `nilai1_ibfk_1` FOREIGN KEY (`kd_makul`) REFERENCES `matakuliah` (`kd_makul`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai1_ibfk_2` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
