-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 09:39 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tokomebel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` varchar(5) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
('K001', 'Kursi Modis', 'Kursi nyaman yang cocok untuk memperindah rumah', 'Kursi', 1000000, 27, '14a816c830b90bd17873f26a5ec92e06_1_1.jpg'),
('K002', 'Kursi Ekedalen', 'Kursi yang nyaman untuk di ruang makan maupun tempat santai', 'Kursi', 1095000, 91, 'k.jpg'),
('K003', 'Kursi Jati', 'Kursi yang terbuat dari kayu jati yang berkualitas dan memiliki durabilitas tinggi', 'Kursi', 999000, 48, 'kursi.jpg'),
('L001', 'Lemari TV Simple', 'Lemari TV yang simpel tapi bermanfaat, cocok untuk di ruang tamu anda', 'Lemari', 1500000, 11, '45375656_71c864ce-c1ad-4de7-93a1-8474e3e80061_490_4902.jpg'),
('L002', 'Lemari Pakaian 3 Pintu', 'Lemari pakaian aluminium & kaca, dari bahan berkualitas anti rayap', 'Lemari', 4200000, 34, 'le.jpg'),
('L003', 'Lemari Pajangan TOPIX LH 869 (Walnut)', 'Lemari yang cocok untuk memajang barang-barang maupun hiasan di ruang tamu anda', 'Lemari', 2215000, 150, 'ada.jpg'),
('M001', 'Meja 1 Biro Laci', 'Meja untuk anda bekerja, menulis, dan menyimpan peralatan kerja anda', 'Meja', 1200000, 13, 'meja1.jpg'),
('M002', 'Meja Guru Kayu Jati', 'Meja yang terbuat dari kayu jati yang pastinya berkualitas', 'Meja', 900000, 249, 'meja_guru.jpeg'),
('M003', 'Meja Makan Livien-Tanpa Kursi', 'Modern Combi memiliki desain modern dan minimalis dalam waktu bersamaan. Didominasi perpaduan warna putih yang elegan dan maple yang berasal dari kayu. Modern combi bisa menjadi alternatif bagi yang m', 'Meja', 1645000, 154, 'liv.jpg'),
('S001', 'Kasur Spring Bed King Koil', 'Kasur yang dilengkapi dengan pegas yang nyaman sehingga mmbuat tidurmu lebih berkualitas', 'Kasur', 8660000, 20, 'king1.jpg'),
('S002', 'Kasur Fabelio Plush', 'Kasur dari Fabelio yang berkualitas dan mudah menyerap panas tubuh, sehingga waktu tidur tetap nyaman dan memiliki tidur yang berkualitas', 'Kasur', 7999000, 50, 'kas.png'),
('S003', 'Superland Kasur Springbed Eternity', 'Nikmati kenyamanan istirahat malam anda dengan kasur springbed superland eternity dapatkan kesegaran yang sempurna saat bangun dari tidur anda', 'Kasur', 3299000, 124, 'ete.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `no_telp`, `tgl_pesan`, `batas_bayar`) VALUES
(35, 'Rhedo Francesco', 'Simpang Tiga, Kaur Utara', '082109301834', '2021-05-06 07:51:40', '2021-05-07 07:51:40'),
(36, 'Rhedo Francesco', 'Simpang Tiga, Kaur Utara', '082337959196', '2021-05-07 21:37:34', '2021-05-08 21:37:34'),
(39, 'Rhedo Francesco', 'Simpang Tiga, Kaur Utara', '082337959196', '2021-05-08 05:12:13', '2021-05-09 05:12:13'),
(40, 'Rhedo', 'Simpang Tiga, Kaur Utara', '082337959196', '2021-05-08 11:46:01', '2021-05-09 11:46:01'),
(42, 'Rhedo Francesco', 'Simpang Tiga, Kaur Utara', '082337959196', '2021-05-08 12:15:33', '2021-05-09 12:15:33'),
(43, 'Rhedo Francesco', 'Simpang Tiga, Kaur Utara', '082337959196', '2021-05-08 12:16:41', '2021-05-09 12:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `id_barang` varchar(5) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id_pesanan`, `id_invoice`, `nama`, `username`, `alamat`, `no_telp`, `id_barang`, `nama_barang`, `jumlah`, `harga`) VALUES
(48, 35, 'Rhedo Francesco', 'rhedo123', 'Simpang Tiga, Kaur Utara', '082109301834', 'L001', 'Lemari TV Simple', 1, 1500000),
(49, 36, 'Rhedo Francesco', 'rhedo123', 'Simpang Tiga, Kaur Utara', '082337959196', 'M001', 'Meja 1 Biro Laci', 1, 1200000),
(50, 36, 'Rhedo Francesco', 'rhedo123', 'Simpang Tiga, Kaur Utara', '082337959196', 'K001', 'Kursi Modis', 1, 1000000),
(56, 39, 'Rhedo Francesco', 'rhedo123', 'Simpang Tiga, Kaur Utara', '082337959196', 'K003', 'Kursi Jati', 1, 999000),
(57, 40, 'Rhedo', 'rhedo123', 'Simpang Tiga, Kaur Utara', '082337959196', 'K001', 'Kursi Modis', 1, 1000000),
(58, 40, 'Rhedo', 'rhedo123', 'Simpang Tiga, Kaur Utara', '082337959196', 'K003', 'Kursi Jati', 1, 999000),
(59, 40, 'Rhedo', 'rhedo123', 'Simpang Tiga, Kaur Utara', '082337959196', 'L001', 'Lemari TV Simple', 1, 1500000),
(60, 40, 'Rhedo', 'rhedo123', 'Simpang Tiga, Kaur Utara', '082337959196', 'M001', 'Meja 1 Biro Laci', 1, 1200000),
(61, 40, 'Rhedo', 'rhedo123', 'Simpang Tiga, Kaur Utara', '082337959196', 'L002', 'Lemari Pakaian 3 Pintu', 1, 4200000),
(63, 42, 'Rhedo Francesco', 'rhedo123', 'Simpang Tiga, Kaur Utara', '082337959196', 'K002', 'Kursi Ekedalen', 1, 1095000),
(64, 43, 'Rhedo Francesco', 'rhedo123', 'Simpang Tiga, Kaur Utara', '082337959196', 'K002', 'Kursi Ekedalen', 3, 1095000);

--
-- Triggers `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_barang SET stok = stok-NEW.jumlah
    WHERE id_barang = NEW.id_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(55) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `email`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 'admin', 1),
(4, 'Rhedo Francesco', 'rhedofrancesco@gmail.com', 'rhedo123', '12345', 2),
(6, 'Aku Siapa', 'akusiapa@gmail.com', 'akuaja', '12345', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_invoice` (`id_invoice`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD CONSTRAINT `tb_pesanan_ibfk_1` FOREIGN KEY (`id_invoice`) REFERENCES `tb_invoice` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pesanan_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
