-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2023 at 04:31 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_helpdesk`
--

-- --------------------------------------------------------

--
-- Table structure for table `bidang`
--

CREATE TABLE `bidang` (
  `id_bidang` int(11) NOT NULL,
  `bidang` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bidang`
--

INSERT INTO `bidang` (`id_bidang`, `bidang`) VALUES
(1, 'E-Government'),
(4, 'Persandian');

-- --------------------------------------------------------

--
-- Table structure for table `detail_tiket`
--

CREATE TABLE `detail_tiket` (
  `id_detail` int(11) NOT NULL,
  `tiket_id` int(11) DEFAULT NULL,
  `tanggapan` text NOT NULL,
  `gambar_tanggapan` text NOT NULL,
  `waktu_tanggapan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_tiket`
--

INSERT INTO `detail_tiket` (`id_detail`, `tiket_id`, `tanggapan`, `gambar_tanggapan`, `waktu_tanggapan`) VALUES
(6, 2, 'Oke siap', '20230724150044.png', '2023-07-24'),
(7, 3, 'sabarrrr', '20230725083127.png', '2023-07-25'),
(8, 4, 'yaaaaaaaaaa', '20230725083725.png', '2023-07-25'),
(9, 7, 'awdawdd', '20230725101113.png', '2023-07-25'),
(10, 8, 'jikaaaaaa', '20230725102112.png', '2023-07-25');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `jabatan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `jabatan`) VALUES
(1, 'Senior Manager'),
(3, 'Kepala Bidang'),
(5, 'IT'),
(8, 'HRD');

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int(11) NOT NULL,
  `no_tiket` varchar(25) CHARACTER SET latin1 NOT NULL,
  `judul_tiket` text CHARACTER SET latin1 NOT NULL,
  `deskripsi` text CHARACTER SET latin1 NOT NULL,
  `gambar_tiket` text CHARACTER SET latin1 DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `status_tiket` int(2) NOT NULL,
  `tgl_daftar` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id_tiket`, `no_tiket`, `judul_tiket`, `deskripsi`, `gambar_tiket`, `user_id`, `status_tiket`, `tgl_daftar`) VALUES
(2, '2407230001', 'Tes Tiket kedua', 'Error Database', '240723000120230724030317.png', 1, 3, '2023-07-23 17:00:00'),
(3, '2407230002', 'Tes Tiket ketiga', 'ini keterangan tiket ketiga', '240723000220230724102350.png', 1, 3, '2023-07-23 17:00:00'),
(4, '2407230003', 'Tes Tiket keempat', 'keterangan', NULL, 1, 3, '2023-07-23 17:00:00'),
(7, '2507230001', 'tes tiket wait', 'ini keterangannya', NULL, 1, 2, '2023-07-24 17:00:00'),
(8, '2507230002', 'ty', 'tttt', '250723000220230725101010.png', 1, 2, '2023-07-24 17:00:00'),
(9, '2507230003', 'Tiket Staff Biasa', 'keterangan', '250723000320230725145341.png', 21, 0, '2023-07-24 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nik` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `username` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `password` text CHARACTER SET latin1 NOT NULL,
  `jabatan_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `bidang_id` text CHARACTER SET latin1 DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image_user` text CHARACTER SET latin1 NOT NULL,
  `level_user` int(2) NOT NULL,
  `status_user` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nik`, `username`, `email`, `password`, `jabatan_id`, `bidang_id`, `created`, `modified`, `image_user`, `level_user`, `status_user`) VALUES
(1, '', 'Ivo', 'hariawanivo3@gmail.com', '$2y$10$izElsTNUMG9ZFfN0YsthG.Dlz9DdV8I7CwO8VTL1lGH8kLoSm7m/K', '8', '1', '2023-07-19 02:36:23', '2023-07-25 01:40:42', '', 1, 1),
(2, '1111111', 'Syarif', 'syarif@gmail.com', '$2y$10$.nOd3Gk7SuLbCgLyJPCCS..Hik2pBtVuo6fZsd3.cnPR5EGTFjR5G', '1', '1', '2023-07-19 02:46:12', '2023-07-21 11:14:37', '', 1, 0),
(3, NULL, 'Andi', 'andi@gmail.com', '$2y$10$S9CVWPI5A1SvA58YGoeyhOnNz0uLQXi/tpFMJm0tCPS0ZJzaWglL2', '', '', '2023-07-20 01:16:22', '2023-07-20 10:56:16', '', 1, 1),
(13, '123456700', 'Sapto', 'sapto11@gmail.com', '$2y$10$jue0asrQ3VX57w4HffPhjOsIKRRzfyMlas3meU3v3Ao22KbIkJHki', '3', '1', '2023-07-21 10:11:13', '2023-07-23 05:02:12', '', 2, 0),
(17, NULL, 'admin', 'admin@admin.com', '$2y$10$pVFV3mCVUC3XgF.zVoEv8eXp7WCx2pul/RGahhWThgaBmjlpTu4eS', '', NULL, '2023-07-25 07:19:45', '2023-07-25 07:19:45', '', 1, 1),
(18, '', 'IvoMH2', 'ivo@gmail.com', '$2y$10$oyZY6ELceVOqng5lFMehUOQJnnhbX8lezjZcB3c2r4snzSJhJWwga', '', '', '2023-07-25 07:20:46', '2023-07-25 07:32:21', '', 2, 1),
(20, 'C2055201104', 'IvoMH', 'mustikaivo@gmail.com', '$2y$10$Ry.Eb8GsFo8iA1Lu7jZefO6qUPPNoEH.o7ggfvVEW5bMShlsfN13W', '5', '4', '2023-07-25 07:43:24', '2023-07-26 02:14:35', '', 2, 1),
(21, NULL, 'biasa', 'biasa@gmail.com', '$2y$10$P2YuTmOZQFId8lnTbtdMU.JXVQsZja75/nZUKcQBDAmzKKvbr6zYi', '', NULL, '2023-07-25 07:46:55', '2023-07-25 07:46:55', '', 1, 1),
(23, '123', 'tes', 'tes@gmail.com', '$2y$10$pSValv.j9agbJ0Aep89owerujxYKevhydQgSwqZROp7EU0A6j6gUu', '5', '4', '2023-07-26 01:52:53', '2023-07-26 01:54:32', '', 2, 1),
(25, '12235', 'error12', 'error@gmail.com', '$2y$10$tk3UeOxK8laS7O2k5826B.AN71u0YZ76Tq6BfK.2dJ.JUjRf.28/a', '8', '4', '2023-07-26 02:09:48', '2023-07-26 02:13:34', '', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidang`
--
ALTER TABLE `bidang`
  ADD PRIMARY KEY (`id_bidang`);

--
-- Indexes for table `detail_tiket`
--
ALTER TABLE `detail_tiket`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bidang`
--
ALTER TABLE `bidang`
  MODIFY `id_bidang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `detail_tiket`
--
ALTER TABLE `detail_tiket`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `tiket_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
