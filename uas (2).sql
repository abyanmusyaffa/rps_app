-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2024 at 03:53 PM
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
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `capaian_pembelajaran`
--

CREATE TABLE `capaian_pembelajaran` (
  `id` int(11) NOT NULL,
  `content_capaian` varchar(512) NOT NULL,
  `identitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `capaian_pembelajaran`
--

INSERT INTO `capaian_pembelajaran` (`id`, `content_capaian`, `identitas`) VALUES
(1, 'Pertemuan 1: Pengenalan HTML & CSS                                                    ', 1),
(2, 'Pertemuan 2: Memahami Tag HTML                                                    ', 1),
(8, 'aaaaaaaaaaaaaaaaaaa                                    ', 16);

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `nama_dosen` varchar(128) NOT NULL,
  `jabatan` varchar(32) NOT NULL,
  `nik_dosen` int(11) NOT NULL,
  `email_dosen` varchar(128) NOT NULL,
  `tanda_tangan` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nama_dosen`, `jabatan`, `nik_dosen`, `email_dosen`, `tanda_tangan`) VALUES
(1, 'Abyan Musyaffa', 'kaprodi', 1010101010, 'abyan@amikom.ac.id', 'abyan.png'),
(2, 'Alif Aufa', 'dekan', 1010101011, 'alif@amikom.ac.id', 'alif.png'),
(3, 'Aufa Abyan', 'sekretaris', 1010101012, 'aufa@amikom.ac.id', 'aufa.png'),
(4, 'Novita Putri', 'pengampu', 1010101013, 'novita@amikom.ac.id', 'novita.png'),
(5, 'Putri Arunika', 'pengampu', 1010101017, 'arunika@gmail.com', 'arunika.png');

-- --------------------------------------------------------

--
-- Table structure for table `gambaran_umum`
--

CREATE TABLE `gambaran_umum` (
  `id` int(11) NOT NULL,
  `content_gambaran` varchar(512) NOT NULL,
  `identitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gambaran_umum`
--

INSERT INTO `gambaran_umum` (`id`, `content_gambaran`, `identitas`) VALUES
(1, 'Indikator pembelajaran pertemuan 1 adalah mampu menjelaskan struktur dasar HTML dan CSS. Topik pembelajarannya mencakup pengenalan HTML                                                    ', 1),
(2, 'Indikator pembelajaran pertemuan 2 adalah mampu membuat halaman web dengan judul, paragraf, dan gambar. Topik pembelajarannya mencakup penggunaan properti CSS                                                    ', 1),
(18, 'aaaaaaaaaaaaa                                    ', 16),
(21, ' aaaaaaaaaa                      ', 2);

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `id` int(11) NOT NULL,
  `mata_kuliah` int(11) NOT NULL,
  `nomor` varchar(16) NOT NULL,
  `tanggal_berlaku` date NOT NULL,
  `tanggal_susun` date NOT NULL,
  `revisi` int(2) NOT NULL,
  `dosen_dekan` int(11) NOT NULL,
  `dosen_kaprodi` int(11) NOT NULL,
  `dosen_sekretaris` int(11) NOT NULL,
  `dosen_pengampu` int(11) NOT NULL,
  `nilai_presensi` int(3) NOT NULL,
  `nilai_mid` int(3) NOT NULL,
  `nilai_akhir` int(3) NOT NULL,
  `nilai_tugas` int(3) NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`id`, `mata_kuliah`, `nomor`, `tanggal_berlaku`, `tanggal_susun`, `revisi`, `dosen_dekan`, `dosen_kaprodi`, `dosen_sekretaris`, `dosen_pengampu`, `nilai_presensi`, `nilai_mid`, `nilai_akhir`, `nilai_tugas`, `user`) VALUES
(1, 1, '08/RPS/DT019', '2023-12-12', '2023-12-01', 1, 1, 2, 3, 4, 10, 30, 40, 20, 1),
(2, 2, '08/RPS/DT018', '2023-12-01', '2023-12-14', 1, 4, 3, 2, 4, 10, 30, 40, 20, 2),
(16, 4, '01/RPS/IF001', '2023-12-15', '2023-12-02', 0, 2, 1, 3, 5, 10, 40, 20, 30, 1),
(17, 3, '01/RPS/IF001', '2023-12-09', '2023-12-02', 10, 2, 1, 3, 4, 10, 40, 20, 30, 2);

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `id` int(11) NOT NULL,
  `nama_mata_kuliah` varchar(64) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `program_studi` varchar(64) NOT NULL,
  `semester` int(1) NOT NULL,
  `bobot_sks` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`id`, `nama_mata_kuliah`, `kode`, `program_studi`, `semester`, `bobot_sks`) VALUES
(1, 'Multimedia', 'DT019', 'D3 Teknik Informatika', 2, '2 Teori'),
(2, 'Fotografi', 'DT017', 'D3 Teknik Informatika', 3, '2 Praktikum'),
(3, 'Pengolahan Basis Data', 'IF022', 'S1 Informatika', 1, '2 Teori'),
(4, 'Desain Grafis', 'DT087', 'D3 Teknik Informatika', 2, '2 Teori / 2 Praktikum');

-- --------------------------------------------------------

--
-- Table structure for table `prasyarat`
--

CREATE TABLE `prasyarat` (
  `id` int(11) NOT NULL,
  `content_prasyarat` varchar(512) NOT NULL,
  `identitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `prasyarat`
--

INSERT INTO `prasyarat` (`id`, `content_prasyarat`, `identitas`) VALUES
(1, 'Desain Grafis                                           ', 1),
(7, 'aaaaaaaa                                    ', 16);

-- --------------------------------------------------------

--
-- Table structure for table `referensi`
--

CREATE TABLE `referensi` (
  `id` int(11) NOT NULL,
  `content_referensi` varchar(512) NOT NULL,
  `identitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `referensi`
--

INSERT INTO `referensi` (`id`, `content_referensi`, `identitas`) VALUES
(4, 'Pada pertemuan 3,', 1),
(5, 'Pada pertemuan 2,', 1),
(6, 'Pada pertemuan 4,', 1),
(9, 'aaaaaaaa', 16);

-- --------------------------------------------------------

--
-- Table structure for table `rencana_pembelajaran`
--

CREATE TABLE `rencana_pembelajaran` (
  `id` int(11) NOT NULL,
  `minggu` int(2) NOT NULL,
  `rencana_kemampuan` varchar(256) NOT NULL,
  `rencana_indikator` varchar(256) NOT NULL,
  `topik` varchar(128) NOT NULL,
  `aktivitas` varchar(64) NOT NULL,
  `rencana_waktu` varchar(16) NOT NULL,
  `penilaian` varchar(128) NOT NULL,
  `identitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `rencana_pembelajaran`
--

INSERT INTO `rencana_pembelajaran` (`id`, `minggu`, `rencana_kemampuan`, `rencana_indikator`, `topik`, `aktivitas`, `rencana_waktu`, `penilaian`, `identitas`) VALUES
(1, 5, 'Bisa makan  1', 'Bisa tidur 1', 'hehee 1', 'ngopi 1', '100', 'makan 1', 1),
(2, 3, 'bisa makan 2', 'bisa tidur 2', 'ngopi 2', 'ngopi 2', '123', 'mekennnnn 2', 1),
(5, 1, 'aaa', 'aaa', 'aaa', 'aaaa', '100 Menit', 'aaa', 16);

-- --------------------------------------------------------

--
-- Table structure for table `tugas_penilaian`
--

CREATE TABLE `tugas_penilaian` (
  `id` int(11) NOT NULL,
  `tugas` varchar(64) NOT NULL,
  `tugas_kemampuan` varchar(256) NOT NULL,
  `tugas_waktu` varchar(32) NOT NULL,
  `bobot` varchar(8) NOT NULL,
  `kriteria_penilaian` varchar(128) NOT NULL,
  `tugas_indikator` varchar(256) NOT NULL,
  `identitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tugas_penilaian`
--

INSERT INTO `tugas_penilaian` (`id`, `tugas`, `tugas_kemampuan`, `tugas_waktu`, `bobot`, `kriteria_penilaian`, `tugas_indikator`, `identitas`) VALUES
(1, 'foto 1', 'kmp 1', '100', '2', 'ngoding 1', 'tidur 1', 1),
(2, 'foto 2', 'kmp 2                                                                                                                                                ', '12', '4', 'tidur 2                                                                                                                         ', 'bgsdh 2                                                                                                                                                            ', 1),
(5, 'aa', 'aa                                    ', 'aa', 'aa', 'aa                                        ', 'aa                                        ', 16);

-- --------------------------------------------------------

--
-- Table structure for table `unit_pembelajaran`
--

CREATE TABLE `unit_pembelajaran` (
  `id` int(11) NOT NULL,
  `unit_kemampuan` varchar(256) NOT NULL,
  `unit_indikator` varchar(256) NOT NULL,
  `bahan_kajian` varchar(128) NOT NULL,
  `metode_pembelajaran` varchar(64) NOT NULL,
  `unit_waktu` varchar(32) NOT NULL,
  `metode_penilaian` varchar(64) NOT NULL,
  `bahan_ajar` varchar(128) NOT NULL,
  `identitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `unit_pembelajaran`
--

INSERT INTO `unit_pembelajaran` (`id`, `unit_kemampuan`, `unit_indikator`, `bahan_kajian`, `metode_pembelajaran`, `unit_waktu`, `metode_penilaian`, `bahan_ajar`, `identitas`) VALUES
(1, 'unit 1', 'indikator 1', 'kajian 1', 'metode 1', '100', 'metode 1', 'ajar 1', 1),
(2, 'unit 3                                                ', 'indikator 3                                              ', 'kajian 3                                                    ', 'metode 3                                                   ', '300', 'metode 3                                                   ', 'ajar 3                                                    ', 1),
(5, 'aaaaaa                                    ', 'aaaaaaa                                    ', 'aaaaaa                                        ', 'aaaaaaaaaaa                                        ', 'aa', 'aaaaaa                                        ', 'aaaa a                                    ', 16);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `nik` int(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `nik`, `password`) VALUES
(1, 'Abyan Aufa Alif Musyaffa', 1616161616, '123'),
(2, 'Novita Putri Aprilia', 303030303, '123'),
(3, 'Hastari Utama', 101010101, '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `capaian_pembelajaran`
--
ALTER TABLE `capaian_pembelajaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_capaian_pembelajaran` (`identitas`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gambaran_umum`
--
ALTER TABLE `gambaran_umum`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_gambaran_umum` (`identitas`);

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_mata_kuliah` (`mata_kuliah`),
  ADD KEY `fk_dosen_dekan` (`dosen_dekan`),
  ADD KEY `fk_dosen_kaprodi` (`dosen_kaprodi`),
  ADD KEY `fk_dosen_sekretaris` (`dosen_sekretaris`),
  ADD KEY `fk_dosen_pengampu` (`dosen_pengampu`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prasyarat`
--
ALTER TABLE `prasyarat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_prasyarat` (`identitas`);

--
-- Indexes for table `referensi`
--
ALTER TABLE `referensi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_referensi` (`identitas`);

--
-- Indexes for table `rencana_pembelajaran`
--
ALTER TABLE `rencana_pembelajaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_rencana_pembelajaran` (`identitas`);

--
-- Indexes for table `tugas_penilaian`
--
ALTER TABLE `tugas_penilaian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tugas_penilaian` (`identitas`);

--
-- Indexes for table `unit_pembelajaran`
--
ALTER TABLE `unit_pembelajaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_unit_pembelajaran` (`identitas`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `capaian_pembelajaran`
--
ALTER TABLE `capaian_pembelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gambaran_umum`
--
ALTER TABLE `gambaran_umum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `prasyarat`
--
ALTER TABLE `prasyarat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `referensi`
--
ALTER TABLE `referensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rencana_pembelajaran`
--
ALTER TABLE `rencana_pembelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tugas_penilaian`
--
ALTER TABLE `tugas_penilaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `unit_pembelajaran`
--
ALTER TABLE `unit_pembelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `capaian_pembelajaran`
--
ALTER TABLE `capaian_pembelajaran`
  ADD CONSTRAINT `fk_capaian_pembelajaran` FOREIGN KEY (`identitas`) REFERENCES `identitas` (`id`);

--
-- Constraints for table `gambaran_umum`
--
ALTER TABLE `gambaran_umum`
  ADD CONSTRAINT `fk_gambaran_umum` FOREIGN KEY (`identitas`) REFERENCES `identitas` (`id`);

--
-- Constraints for table `identitas`
--
ALTER TABLE `identitas`
  ADD CONSTRAINT `fk_dosen_dekan` FOREIGN KEY (`dosen_dekan`) REFERENCES `dosen` (`id`),
  ADD CONSTRAINT `fk_dosen_kaprodi` FOREIGN KEY (`dosen_kaprodi`) REFERENCES `dosen` (`id`),
  ADD CONSTRAINT `fk_dosen_pengampu` FOREIGN KEY (`dosen_pengampu`) REFERENCES `dosen` (`id`),
  ADD CONSTRAINT `fk_dosen_sekretaris` FOREIGN KEY (`dosen_sekretaris`) REFERENCES `dosen` (`id`),
  ADD CONSTRAINT `fk_mata_kuliah` FOREIGN KEY (`mata_kuliah`) REFERENCES `mata_kuliah` (`id`);

--
-- Constraints for table `prasyarat`
--
ALTER TABLE `prasyarat`
  ADD CONSTRAINT `fk_prasyarat` FOREIGN KEY (`identitas`) REFERENCES `identitas` (`id`);

--
-- Constraints for table `referensi`
--
ALTER TABLE `referensi`
  ADD CONSTRAINT `fk_referensi` FOREIGN KEY (`identitas`) REFERENCES `identitas` (`id`);

--
-- Constraints for table `rencana_pembelajaran`
--
ALTER TABLE `rencana_pembelajaran`
  ADD CONSTRAINT `fk_rencana_pembelajaran` FOREIGN KEY (`identitas`) REFERENCES `identitas` (`id`);

--
-- Constraints for table `tugas_penilaian`
--
ALTER TABLE `tugas_penilaian`
  ADD CONSTRAINT `fk_tugas_penilaian` FOREIGN KEY (`identitas`) REFERENCES `identitas` (`id`);

--
-- Constraints for table `unit_pembelajaran`
--
ALTER TABLE `unit_pembelajaran`
  ADD CONSTRAINT `fk_unit_pembelajaran` FOREIGN KEY (`identitas`) REFERENCES `identitas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
