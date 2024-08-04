-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2017 at 01:56 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bioskop`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Nama_Customer` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `No_HP` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Jenis_Kelamin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Nama_Customer`, `Username`, `Password`, `No_HP`, `Email`, `Alamat`, `Jenis_Kelamin`) VALUES
('Ade Sukma', 'Ade', 'hk123456', 123456789, 'ade15ti@mahasiswa.pcr.ac.id', 'Hari Ini', 'Laki Laki'),
('Alif Satria', 'Alif00', '00000000', 123456789, 'alif15ti@mahasiswa.pcr.ac.id', 'Jl Dima', 'Laki Laki'),
('Erick', 'Erick', '123', 123, '123', '123', 'Laki Laki'),
('Vicky Arthamena', 'Vicky', 'hk123456', 123, 'arthamena68@gmial.com', 'Jl Sendiri No 19', 'Laki Laki'),
('Wahyu Al ', 'Wahyu', '123456', 2147483647, 'Wahyu15ti@mahasiswa.pcr.ac.id', 'JL Rowosari', 'Laki Laki');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `ID_Film` varchar(50) NOT NULL,
  `Nama_Film` varchar(50) NOT NULL,
  `Deskripsi` text NOT NULL,
  `Rating` varchar(50) NOT NULL,
  `Produksi` varchar(100) NOT NULL,
  `Durasi` int(11) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `Release` date NOT NULL,
  `Poster` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`ID_Film`, `Nama_Film`, `Deskripsi`, `Rating`, `Produksi`, `Durasi`, `Country`, `Release`, `Poster`) VALUES
('Cars3-17', 'Cars 3', 'Lightning McQueen sets out to prove to a new generation of racers that he\'s still the best race car in the world.', '6.9/10', 'Pixar Animation Studios, Walt Disney Pictures', 102, 'USA', '2017-06-16', 'Cars31.jpg'),
('SMH-17', 'Spider-Man: Homecoming', 'Peter Parker balances his life as an ordinary high school student in Queens with his superhero alter-ego Spider-Man, and finds himself on the trail of a new menace prowling the skies of New York City.', '7.7/10', 'Columbia Pictures, Marvel Studios, Pascal Pictures', 133, ' USA', '2017-07-07', 'SpiderManHomeComing.jpg'),
('TFOTF-17', 'The Fate of the Furious', 'When a mysterious woman seduces Dom into the world of terrorism and a betrayal of those closest to him, the crew face trials that will test them as never before.', '6.8/10', 'Universal Pictures, China Film Co., Original Film, One Race Films, Dentsu, Fuji Eight Company Ltd.', 136, 'China,  USA, Japan', '2017-04-14', 'TheFateOfTheFurios.jpg'),
('WFTPOTA-17', 'War for the Planet of the Apes', 'After the apes suffer unimaginable losses, Caesar wrestles with his darker instincts and begins his own mythic quest to avenge his kind.', '7.6/10', 'Chernin Entertainment, River Road Entertainment, TSG Entertainment', 140, 'USA, Canada, New Zealand', '2017-07-14', 'WarFotTherPlanetOFTheApes.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `ID_Jadwal` varchar(50) NOT NULL,
  `Tanggal_Dan_Jam` varchar(50) NOT NULL,
  `ID_Film` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`ID_Jadwal`, `Tanggal_Dan_Jam`, `ID_Film`) VALUES
('Cars3-17-171113-16', '2017-11-13T16:00', 'Cars3-17'),
('SMH-17-171104-16', '2017-11-04T16:00', 'SMH-17');

-- --------------------------------------------------------

--
-- Table structure for table `kursi`
--

CREATE TABLE `kursi` (
  `ID_Kursi` varchar(50) NOT NULL,
  `Nama_Kursi` varchar(50) NOT NULL,
  `ID_Studio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kursi`
--

INSERT INTO `kursi` (`ID_Kursi`, `Nama_Kursi`, `ID_Studio`) VALUES
('K1-S1', 'Kursi 1', 'S1'),
('K1-S2', 'Kursi 1', 'S2'),
('K2-S1', 'Kursi 2', 'S1'),
('K2-S2', 'Kursi 2', 'S2'),
('K6-S1', 'Kursi 6', 'S1');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `Nama_Petugas` varchar(50) NOT NULL,
  `Username_Petugas` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Jabatan` varchar(50) NOT NULL,
  `No_HP` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Jenis_Kelamin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`Nama_Petugas`, `Username_Petugas`, `Password`, `Jabatan`, `No_HP`, `Email`, `Alamat`, `Jenis_Kelamin`) VALUES
('Select Petugas', 'Select Petugas', 'Select Petugas', 'Select Petugas', 'Select Petugas', 'Select Petugas', 'Select Petugas', 'Select Petugas'),
('Vicky Arthamena', 'Vicky26', 'hk123456', 'Admin', '081261332124', 'arthamena68@gmail.com', 'Jl Rowosari No 38', 'Laki - Laki'),
('Wahyy Al ', 'Wahyu', 'Karam', 'Kasir', '123456', 'Wahyu15ti@mahasiswa.pcr.ac.id', 'Jl Sama', 'Laki Laki');

-- --------------------------------------------------------

--
-- Table structure for table `studio`
--

CREATE TABLE `studio` (
  `ID_Studio` varchar(50) NOT NULL,
  `Nama_Studio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studio`
--

INSERT INTO `studio` (`ID_Studio`, `Nama_Studio`) VALUES
('S1', 'Studio 1'),
('S2', 'Studio 2');

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `ID_Tiket` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `ID_Film` varchar(50) NOT NULL,
  `ID_Jadwal` varchar(50) NOT NULL,
  `ID_Kursi` varchar(50) NOT NULL,
  `ID_Studio` varchar(50) NOT NULL,
  `Username_Petugas` varchar(50) DEFAULT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`ID_Tiket`, `Username`, `ID_Film`, `ID_Jadwal`, `ID_Kursi`, `ID_Studio`, `Username_Petugas`, `Status`) VALUES
(4, 'Ade', 'Cars3-17', 'SMH-17-171104-16', 'K1-S1', 'S1', 'Vicky26', 'Lunas'),
(5, 'Alif00', 'SMH-17', 'SMH-17-171104-16', 'K1-S1', 'S1', 'Vicky26', 'Booking'),
(6, 'Alif00', 'SMH-17', 'SMH-17-171104-16', 'K1-S1', 'S1', 'Vicky26', 'Booking'),
(8, 'Alif00', 'SMH-17', 'SMH-17-171104-16', 'K1-S1', 'S1', 'Vicky26', 'Booking'),
(9, 'Ade', 'Cars3-17', 'SMH-17-171104-16', 'K1-S1', 'S1', 'Wahyu', 'Lunas'),
(10, 'Ade', 'SMH-17', 'SMH-17-171104-16', 'K1-S1', 'S1', NULL, 'Booking'),
(11, 'Wahyu', 'SMH-17', 'SMH-17-171104-16', 'K1-S1', 'S1', NULL, 'Booking'),
(12, 'Ade', 'SMH-17', 'SMH-17-171104-16', 'K1-S1', 'S1', 'Vicky26', 'Lunas'),
(13, 'Vicky', 'Cars3-17', 'Cars3-17-171113-16', 'K1-S1', 'S1', 'Select Petugas', 'Booking'),
(14, 'Vicky', 'SMH-17', 'Cars3-17-171113-16', 'K1-S1', 'S1', 'Select Petugas', 'Booking');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Username`),
  ADD KEY `Nama` (`Nama_Customer`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`ID_Film`),
  ADD KEY `Nama_Film` (`Nama_Film`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`ID_Jadwal`),
  ADD KEY `ID_Film` (`ID_Film`),
  ADD KEY `Tanggal` (`Tanggal_Dan_Jam`);

--
-- Indexes for table `kursi`
--
ALTER TABLE `kursi`
  ADD PRIMARY KEY (`ID_Kursi`),
  ADD KEY `ID_Studio` (`ID_Studio`),
  ADD KEY `Nama_Kursi` (`Nama_Kursi`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`Username_Petugas`);

--
-- Indexes for table `studio`
--
ALTER TABLE `studio`
  ADD PRIMARY KEY (`ID_Studio`),
  ADD KEY `Nama_Studi` (`Nama_Studio`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`ID_Tiket`),
  ADD KEY `Username` (`Username`,`ID_Film`,`ID_Jadwal`,`ID_Kursi`,`ID_Studio`,`Username_Petugas`),
  ADD KEY `ID_Film` (`ID_Film`),
  ADD KEY `ID_Jadwal` (`ID_Jadwal`),
  ADD KEY `ID_Kursi` (`ID_Kursi`),
  ADD KEY `ID_Studio` (`ID_Studio`),
  ADD KEY `Username_Petugas` (`Username_Petugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `ID_Tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`ID_Film`) REFERENCES `film` (`ID_Film`);

--
-- Constraints for table `kursi`
--
ALTER TABLE `kursi`
  ADD CONSTRAINT `kursi_ibfk_1` FOREIGN KEY (`ID_Studio`) REFERENCES `studio` (`ID_Studio`);

--
-- Constraints for table `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `tiket_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `customer` (`Username`),
  ADD CONSTRAINT `tiket_ibfk_2` FOREIGN KEY (`ID_Film`) REFERENCES `film` (`ID_Film`),
  ADD CONSTRAINT `tiket_ibfk_3` FOREIGN KEY (`ID_Jadwal`) REFERENCES `jadwal` (`ID_Jadwal`),
  ADD CONSTRAINT `tiket_ibfk_4` FOREIGN KEY (`ID_Kursi`) REFERENCES `kursi` (`ID_Kursi`),
  ADD CONSTRAINT `tiket_ibfk_5` FOREIGN KEY (`ID_Studio`) REFERENCES `studio` (`ID_Studio`),
  ADD CONSTRAINT `tiket_ibfk_6` FOREIGN KEY (`Username_Petugas`) REFERENCES `petugas` (`Username_Petugas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
