-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 07, 2024 at 10:01 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_bimbel`
--

-- --------------------------------------------------------

--
-- Table structure for table `datadiri`
--

CREATE TABLE `datadiri` (
  `id_siswa` int(11) NOT NULL,
  `pfp` varchar(300) NOT NULL DEFAULT 'pfp_dummy.jpg',
  `uname` varchar(50) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `notlp_siswa` varchar(50) NOT NULL,
  `jenisKel` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `sekolah` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_ortu` varchar(30) NOT NULL,
  `notlp_ortu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datadiri`
--

INSERT INTO `datadiri` (`id_siswa`, `pfp`, `uname`, `nama_siswa`, `notlp_siswa`, `jenisKel`, `kelas`, `sekolah`, `jurusan`, `email`, `password`, `nama_ortu`, `notlp_ortu`) VALUES
(1001, '', 'jyejyet', 'Ghaitsya Faradiba', '085566443377', 'perempuan', '12 ', 'SMAS CENDANA MANDAU', 'MIPA', 'gets@gmail.com', '', 'Papah Geget', '081122334455'),
(1002, '', 'dynn', 'Sania Dinara Safina', '083399885511', 'perempuan', '12', 'MAN 2 KUDUS', 'MIPA', 'dyns@gmail.com', '', 'Papa Dynery', '089977665544'),
(1003, '', 'makeu', 'Mark Lee', '082200553311', 'laki-laki', '11', 'SM INTERNASIONAL HIGH SCHOOL', 'IPS', 'onyourmark@gmail.com', '', 'Daddy Lee', '085566332211'),
(1004, '', 'woo', 'Jeongwoo Park', '085544882299', 'laki-laki', '10', 'PESANTREN YG DARUSSALAM', 'BAHASA', 'jeong@gmail.com', '', 'Gus Park', '085533228877'),
(2018, 'pfp_dummy.jpg', 'phy', 'woophyton', '87722994433', 'Laki-laki', '12', 'SMA CODING', 'MIPA', 'wp@gmail.com', '$2y$10$XujDmSduclR6s6J8kbubG.TZBfdWm/hyp00zLjgWp7sSJ0uirfonS', 'jjeong', '82266339911'),
(2019, 'pfp_dummy.jpg', 'nyb', 'naylan siti', '89966442233', 'Perempuan', '12', 'SMA KENDARI', 'MIPA', 'nyb@gmail.com', '$2y$10$RddF8VX1ELpVkh3O4BApqODn.FnnFXimXRwanFHwcl5IDSnFGVKfe', 'ortu naylan', '87766554433'),
(2021, 'pfp_dummy.jpg', 'get', 'getget', '8765432123456', 'Perempuan', '11', 'SMA CENDANA', 'IPS', 'get@gmail.com', '$2y$10$ytSnh1KU8LoeJXFyIjVN3uKZL7dvphA4YhlFIDSV9UjpIB.1BFCw6', 'ortu getget', '087654345678');

-- --------------------------------------------------------

--
-- Table structure for table `ulasan`
--

CREATE TABLE `ulasan` (
  `id_ulasan` int(11) NOT NULL,
  `ulasan` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_siswa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ulasan`
--

INSERT INTO `ulasan` (`id_ulasan`, `ulasan`, `tanggal`, `id_siswa`) VALUES
(2001, 'tipe belajar aku adalah audiovisual. sekarang itu udah banyak banget bimbel yang menawarkan melalui beragam fitur, tapi aku tetep jatuh hatinya ke neoron. selain dari nama bimbelnya yang punya filosofi unik, pengalaman selama belajar ngga pernah bikin ngantuk dengan animasi plus materi yang ringkas tapi tetep terperinci. aduh kece banget deh pokoknya neoron! aku jadi pengen terus ngerjain latsol, soalnya dapet freebies lucu\"! banyakin lagi yaa hehe makasi banyak neoron! doain aku jadi orang sukses hihi :3', '2024-05-26 10:47:24', 1001);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datadiri`
--
ALTER TABLE `datadiri`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`id_ulasan`),
  ADD KEY `fk_id_siswa` (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datadiri`
--
ALTER TABLE `datadiri`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2022;

--
-- AUTO_INCREMENT for table `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `id_ulasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2002;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD CONSTRAINT `fk_id_siswa` FOREIGN KEY (`id_siswa`) REFERENCES `datadiri` (`id_siswa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
