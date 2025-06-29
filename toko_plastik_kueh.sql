-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jun 29, 2025 at 12:37 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_plastik_kueh`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int NOT NULL,
  `nama_produk` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `harga` decimal(10,2) DEFAULT NULL,
  `stok` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `harga`, `stok`) VALUES
(13, 'Tepung Terigu Segitiga Biru 1kg', '13000.00', 50),
(14, 'Tepung Protein Tinggi Komachi 1kg', '15500.00', 38),
(15, 'Gula Pasir 1kg', '12000.00', 68),
(16, 'Gula Halus 500gr', '8000.00', 60),
(17, 'Mentega Blue Band 250gr', '9000.00', 40),
(18, 'Margarin Palmia 200gr', '8500.00', 30),
(19, 'Butter Anchor 227gr', '35000.00', 20),
(20, 'Coklat Bubuk Bensdorp 100gr', '16000.00', 23),
(21, 'Coklat Masak Batang 250gr', '22000.00', 19),
(22, 'Keju Parut Cheddar 170gr', '15000.00', 30),
(23, 'Keju Mozzarella 200gr', '28000.00', 15),
(24, 'Susu Kental Manis 370gr', '11000.00', 35),
(25, 'Susu Bubuk Dancow 200gr', '26000.00', 18),
(26, 'Baking Powder 50gr', '6000.00', 54),
(27, 'Baking Soda 50gr', '5500.00', 50),
(28, 'Ragi Instan Fermipan 11gr', '3500.00', 75),
(29, 'Whipping Cream Bubuk 100gr', '14000.00', 22),
(30, 'Pewarna Makanan Merah 30ml', '5000.00', 45),
(31, 'Vanili Bubuk 5gr', '2500.00', 74),
(32, 'Roti Tawar Gandum', '17000.00', 20),
(33, 'Roti Manis Isi Coklat (Isi 5)', '20000.00', 15),
(34, 'Kue Brownies Coklat Panggang', '30000.00', 15),
(35, 'Kue Lapis Legit Slice', '25000.00', 10),
(36, 'Bolu Kukus Mekar 6 pcs', '25000.00', 12),
(37, 'Cupcake Coklat (Isi 4)', '22000.00', 17),
(38, 'Cupcake Vanilla (Isi 4)', '21000.00', 16),
(39, 'Donat Mini Isi 6', '20000.00', 10),
(40, 'Donat Kentang Coklat', '23000.00', 10),
(41, 'Sus Kering 250gr', '28000.00', 8),
(42, 'Kastengel 200gr', '32000.00', 9),
(43, 'Nastar Keju 250gr', '35000.00', 7),
(44, 'Roti Sobek Keju', '18000.00', 13),
(45, 'Chiffon Cake Pandan', '27000.00', 11),
(46, 'Banana Cake Slice', '15000.00', 13),
(47, 'Cookies Coklat Chip 200gr', '26000.00', 10),
(48, 'popcorn ', '12000.00', 13),
(50, 'ati', '10000.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_pembeli` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id_produk` int DEFAULT NULL,
  `jumlah` int DEFAULT NULL,
  `total_harga` decimal(10,2) DEFAULT NULL,
  `id_transaksi_group` varchar(70) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `tanggal`, `nama_pembeli`, `id_produk`, `jumlah`, `total_harga`, `id_transaksi_group`) VALUES
(54, '2025-06-13', 'lala', 26, 1, '6000.00', 'TRX-20250613021920-684b8aa824373'),
(55, '2025-06-13', 'nm', 26, 1, '6000.00', 'TRX-20250613021950-684b8ac64c779'),
(58, '2025-06-13', 'orlan', 15, 2, '24000.00', 'TRX-20250613110138-684c05129ec21'),
(59, '2025-06-13', 'bunga', 31, 2, '5000.00', 'TRX-20250613111112-684c07508226e'),
(60, '2025-06-13', 'bunga', 46, 1, '15000.00', 'TRX-20250613111112-684c07508226e'),
(63, '2025-06-22', 'junet', 39, 2, '40000.00', 'TRX-20250622102649-6857da69a3e6d'),
(64, '2025-06-22', 'junet', 14, 2, '31000.00', 'TRX-20250622102649-6857da69a3e6d'),
(65, '2025-06-22', 'junet', 21, 1, '22000.00', 'TRX-20250622102649-6857da69a3e6d'),
(66, '2025-06-22', 'junet', 31, 4, '10000.00', 'TRX-20250622102649-6857da69a3e6d');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama_lengkap` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'admin', 'admin123', 'admin'),
(2, 'febrian', '123', 'febrian riski');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
