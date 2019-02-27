-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 27, 2019 at 01:33 PM
-- Server version: 5.7.25-0ubuntu0.16.04.2
-- PHP Version: 7.2.15-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catering`
--

-- --------------------------------------------------------

--
-- Table structure for table `acara`
--

CREATE TABLE `acara` (
  `id` int(11) NOT NULL,
  `pemesan_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `menuacr_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `poto` varchar(100) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `tanggal` date NOT NULL,
  `role_id` int(11) NOT NULL,
  `jkl` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `password`, `poto`, `status`, `tanggal`, `role_id`, `jkl`) VALUES
(6, 'Sari', 'sr@admin.com', '202cb962ac59075b964b07152d234b70', '5046580.jpg', 1, '2019-02-12', 2, 0),
(7, 'Itah', 'itah@adm.com', '12345', '3175635.jpg', 1, '2019-02-12', 2, 0),
(8, 'Fitri', 'ftr@adm.com', '123', '4410958.jpg', 1, '2019-02-12', 2, 0),
(9, 'Kangfoo', 'kf@admin.com', '202cb962ac59075b964b07152d234b70', '', 1, '2019-02-27', 2, 1),
(10, 'Yamsah', 'tuni@admin.com', '202cb962ac59075b964b07152d234b70', 'male.png', 1, '2019-02-27', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `langganan`
--

CREATE TABLE `langganan` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pemesan_id` int(11) NOT NULL,
  `menulangg_id` int(11) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `bulan` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menuacr`
--

CREATE TABLE `menuacr` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menuacr`
--

INSERT INTO `menuacr` (`id`, `nama`, `harga`, `status`, `admin_id`, `tanggal`, `foto`) VALUES
(1, 'Bakso', '8000', 1, 6, '2019-02-25', '5787918.jpg'),
(2, 'Soto Banjar', '14000', 1, 6, '2019-02-25', '7578976.jpg'),
(3, 'Nasi Rawon', '15000', 0, 6, '2019-02-25', '1907255.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `menulangg`
--

CREATE TABLE `menulangg` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `op`
--

CREATE TABLE `op` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(60) DEFAULT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `op`
--

INSERT INTO `op` (`id`, `nama`, `email`, `password`, `foto`, `role_id`) VALUES
(1, 'Ahmad Thoriq 1', 'op@op.com', '202cb962ac59075b964b07152d234b70', '1803530.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pemesan`
--

CREATE TABLE `pemesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `hp` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `nama`) VALUES
(1, 'Operator'),
(2, 'Administrator'),
(3, 'Member Premium'),
(4, 'Member'),
(5, 'Member Baru');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text,
  `hp` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `jkl` tinyint(1) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(80) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `tanggal` date NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `alamat`, `hp`, `email`, `jkl`, `password`, `foto`, `status`, `tanggal`, `role_id`) VALUES
(1, 'Jaenab', 'Glinggangsari, RT.07/RW.12, Tanjungsari, Banyudono, Kabupaten Boyolali, Jawa Tengah 57373', '085713793888', 'jaenab@gmail.com', 0, '123', '1722145.jpg', 1, '2019-02-12', 3),
(2, 'Thoriq', NULL, '0812354366', 'thoriq@gmail.com', 1, '202cb962ac59075b964b07152d234b70', 'male.png', 1, '2019-02-20', 5),
(3, 'Abid Khairy', NULL, '081233543646', 'abid@gmail.com', 1, '202cb962ac59075b964b07152d234b70', 'male.png', 1, '2019-02-20', 5),
(4, 'Saphira', 'JL. jalan yukkkk', '08123435212', 'safr@gmail.com', 0, '202cb962ac59075b964b07152d234b70', 'female.png', 1, '2019-02-20', 5),
(5, 'Ahmad', NULL, '081234325346', 'ahmad@gmail.com', 1, '202cb962ac59075b964b07152d234b70', 'male.png', 1, '2019-02-20', 5),
(6, 'Rizqy', NULL, '0812334353464', 'rzq@gmail.com', 1, '202cb962ac59075b964b07152d234b70', 'male.png', 1, '2019-02-20', 5),
(7, 'Sulaiman', NULL, '0812324421412', 'slm@gmail.com', 1, '202cb962ac59075b964b07152d234b70', 'male.png', 1, '2019-02-20', 5),
(8, 'Sulaiman', NULL, '0812324421412', 'slm@gmail.com', 1, '202cb962ac59075b964b07152d234b70', 'male.png', 1, '2019-02-20', 5),
(9, 'ipul', NULL, '08123435436', 'ipl@gmail.com', 1, '202cb962ac59075b964b07152d234b70', 'male.png', 1, '2019-02-20', 5),
(10, 'ipul', NULL, '08123435436', 'ipl@gmail.com', 1, '202cb962ac59075b964b07152d234b70', 'male.png', 1, '2019-02-20', 5),
(11, 'tama', NULL, '08123242341', 'tama@gmail.com', 1, '202cb962ac59075b964b07152d234b70', 'male.png', 1, '2019-02-20', 5),
(12, 'tama', NULL, '08123242341', 'tama@gmail.com', 1, '202cb962ac59075b964b07152d234b70', 'male.png', 1, '2019-02-20', 5),
(13, 'Kumat', NULL, '08921414124', 'kmt@gmail.com', 1, '202cb962ac59075b964b07152d234b70', 'male.png', 1, '2019-02-20', 5),
(14, 'Kumat', NULL, '08921414124', 'kmt@gmail.com', 1, '202cb962ac59075b964b07152d234b70', 'male.png', 1, '2019-02-20', 5),
(15, 'Heru', NULL, '081242343124', 'hr@gmail.com', 1, '202cb962ac59075b964b07152d234b70', 'male.png', 1, '2019-02-20', 5),
(16, 'kurni', NULL, '0812412251', 'krn@gmail.com', 1, '202cb962ac59075b964b07152d234b70', 'male.png', 1, '2019-02-20', 5),
(17, 'kurni', NULL, '0812412251', 'krn@gmail.com', 1, '202cb962ac59075b964b07152d234b70', 'male.png', 1, '2019-02-20', 5),
(18, 'irham', NULL, '05325511244', 'irham@mbr.com', 1, '202cb962ac59075b964b07152d234b70', 'male.png', 1, '2019-02-20', 5),
(19, 'Anisah', 'JL. jalan kuy', '088887524', 'nisah@gmail.com', 0, 'd41d8cd98f00b204e9800998ecf8427e', 'female.png', 1, '2019-02-21', 5),
(20, 'coba coba', 'Jl. in aja yuk', '084263567746', 'coba@gmail.com', 1, '202cb962ac59075b964b07152d234b70', 'male.png', 1, '2019-02-25', 5),
(21, 'apa', NULL, '0937483248', 'apa@gm.com', 1, '202cb962ac59075b964b07152d234b70', 'male.png', 1, '2019-02-25', 5),
(22, 'ana', NULL, '086545244323', 'ana@gm.com', 1, '202cb962ac59075b964b07152d234b70', 'male.png', 1, '2019-02-25', 5),
(23, 'ojan', NULL, '078748372489', 'ojan@gm.com', 1, '202cb962ac59075b964b07152d234b70', 'male.png', 1, '2019-02-25', 5),
(24, 'dsffwe', NULL, '08989573872', 'aa@gg.com', 1, '202cb962ac59075b964b07152d234b70', 'male.png', 1, '2019-02-25', 5),
(25, 'sr', 'jkls', '0898974823748', 'sr@mbr.com', 1, '202cb962ac59075b964b07152d234b70', 'male.png', 1, '2019-02-25', 5),
(26, 'tuni', NULL, '09899353957893', '', 1, '123', 'male.png', 1, '2019-02-25', 5),
(27, 'fak', NULL, '098989239', '', 1, '202cb962ac59075b964b07152d234b70', 'male.png', 1, '2019-02-25', 5),
(28, 'fak', NULL, '098989239', 'fak@mbr.com', 1, '202cb962ac59075b964b07152d234b70', 'male.png', 1, '2019-02-25', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acara`
--
ALTER TABLE `acara`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pemesan_id` (`pemesan_id`,`user_id`,`menuacr_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `menuacr_id` (`menuacr_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `langganan`
--
ALTER TABLE `langganan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`pemesan_id`,`menulangg_id`),
  ADD KEY `menulangg_id` (`menulangg_id`),
  ADD KEY `pemesan_id` (`pemesan_id`);

--
-- Indexes for table `menuacr`
--
ALTER TABLE `menuacr`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `menulangg`
--
ALTER TABLE `menulangg`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `op`
--
ALTER TABLE `op`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesan`
--
ALTER TABLE `pemesan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_user_2` (`id_user`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acara`
--
ALTER TABLE `acara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `langganan`
--
ALTER TABLE `langganan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menuacr`
--
ALTER TABLE `menuacr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `menulangg`
--
ALTER TABLE `menulangg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `op`
--
ALTER TABLE `op`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pemesan`
--
ALTER TABLE `pemesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
