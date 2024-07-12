-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2024 at 01:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spk`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatives`
--

CREATE TABLE `alternatives` (
  `id` int(10) UNSIGNED NOT NULL,
  `toko_online` varchar(255) NOT NULL,
  `harga_produk` varchar(255) NOT NULL,
  `keamanan_transaksi` varchar(255) NOT NULL,
  `kualitas_produk` varchar(255) NOT NULL,
  `jenis_pengiriman` varchar(255) NOT NULL,
  `proses_transaksi` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `gambar_produk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alternatives`
--

INSERT INTO `alternatives` (`id`, `toko_online`, `harga_produk`, `keamanan_transaksi`, `kualitas_produk`, `jenis_pengiriman`, `proses_transaksi`, `keterangan`, `gambar`, `created_at`, `updated_at`, `deleted_at`, `gambar_produk`) VALUES
(1, 'PGE Official', '450', '80', '70', '10', '50', 'Selamat Datang di PGE Official.\r\n\r\nJam operasi kami: 09.30-20.00WIB\r\n\r\nAlamat : Kota Tegal.\r\n\r\nCOMPLITE YOUR DAILY OUTFIT', '1623324530_pge.jpg', '2024-07-06 07:06:21', '2024-07-06 07:06:21', NULL, '1623324530_produk.jpg'),
(2, 'dinafshn', '550', '60', '90', '10', '80', 'Selamat Datang di dinafshn.\r\n\r\nJam operasi kami: 09.30-20.00WIB\r\n\r\nAlamat : Kabupaten Bandung.\r\n\r\nCOMPLITE YOUR DAILY OUTFIT', '1623324947_dinafshn.jpg', '2024-07-06 07:06:21', '2024-07-06 07:06:21', NULL, '1623324947_produk.jpg'),
(3, 'By Finding', '500', '90', '80', '9', '70', 'Selamat Datang di By Finding.\r\n\r\nJam operasi kami: 09.30-20.00WIB\r\n\r\nAlamat : Kabupaten Pekalongan.\r\n\r\nCOMPLITE YOUR DAILY OUTFIT', '1623324996_byfinding.jpg', '2024-07-06 07:06:21', '2024-07-06 07:06:21', NULL, '1623324996_produk.jpg'),
(4, 'Domani_id', '500', '70', '70', '8', '60', 'Selamat Datang di Domani_id.\r\n\r\nJam operasi kami: 09.30-20.00WIB\r\n\r\nAlamat : Kabupaten Pekalongan.\r\n\r\nCOMPLITE YOUR DAILY OUTFIT', '1623325014_domaniid.jpg', '2024-07-06 07:06:21', '2024-07-06 07:06:21', NULL, '1623325014_produk.jpg'),
(5, 'N&A FASHION', '400', '80', '60', '9', '70', 'Selamat Datang di N&A FASHION.\r\n\r\nJam operasi kami: 09.30-20.00WIB\r\n\r\nAlamat : Kota Tangerang.\r\n\r\nCOMPLITE YOUR DAILY OUTFIT', '1623325050_n&afashion.jpg', '2024-07-06 07:06:21', '2024-07-06 07:06:21', NULL, '1623325050_produk.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bobot`
--

CREATE TABLE `bobot` (
  `nama_kriteria` varchar(255) DEFAULT NULL,
  `bobot` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bobot`
--

INSERT INTO `bobot` (`nama_kriteria`, `bobot`) VALUES
('harga_produk', 0.496175549),
('keamanan_transaksi', 0.088568443),
('kualitas_produk', 0.088568443),
('jenis_pengiriman', 0.088568443),
('proses_transaksi', 0.238119122);

-- --------------------------------------------------------

--
-- Table structure for table `criterias`
--

CREATE TABLE `criterias` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `criterias`
--

INSERT INTO `criterias` (`id`, `code`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'C1', 'Harga Produk', '2024-07-06 07:06:21', '2024-07-06 07:06:21', NULL),
(2, 'C2', 'Keamanan Transaksi', '2024-07-06 07:06:21', '2024-07-06 07:06:21', NULL),
(3, 'C3', 'Kualitas Produk', '2024-07-06 07:06:21', '2024-07-06 07:06:21', NULL),
(4, 'C4', 'Jenis Pengiriman', '2024-07-06 07:06:21', '2024-07-06 07:06:21', NULL),
(5, 'C5', 'Proses Transaksi', '2024-07-06 07:06:21', '2024-07-06 07:06:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hasils`
--

CREATE TABLE `hasils` (
  `id` int(10) UNSIGNED NOT NULL,
  `toko_online` varchar(255) NOT NULL,
  `harga_produk` varchar(255) NOT NULL,
  `keamanan_transaksi` varchar(255) NOT NULL,
  `kualitas_produk` varchar(255) NOT NULL,
  `jenis_pengiriman` varchar(255) NOT NULL,
  `proses_transaksi` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `ahp` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_05_27_100107_create_criterias_table', 1),
(5, '2021_05_27_100121_create_alternatives_table', 1),
(6, '2021_05_30_093521_create_subcriterias_table', 1),
(7, '2021_06_03_135625_create_comparisons_table', 1),
(8, '2021_06_06_031816_create_hasil_table', 2),
(9, '2021_06_06_035717_create_hasils_table', 3),
(10, '2021_06_08_033920_create_hasils_table', 4),
(11, '2021_06_08_111302_create_hasils_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_eigen`
--

CREATE TABLE `nilai_eigen` (
  `id` int(11) DEFAULT NULL,
  `nilai_eigen` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nilai_eigen`
--

INSERT INTO `nilai_eigen` (`id`, `nilai_eigen`) VALUES
(1, 2.539059561),
(2, 0.44431348),
(3, 0.44431348),
(4, 0.44431348),
(5, 1.200626959);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `perangkingan`
--

CREATE TABLE `perangkingan` (
  `alternatives` varchar(100) DEFAULT NULL,
  `perangkingan` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `perangkingan`
--

INSERT INTO `perangkingan` (`alternatives`, `perangkingan`) VALUES
('PGE Official', 0.217955299),
('dinafshn', 0.226220446),
('By Finding', 0.229226924),
('Domani_id', 0.208913145),
('N&A FASHION', 0.244097387);

-- --------------------------------------------------------

--
-- Table structure for table `perbandingan`
--

CREATE TABLE `perbandingan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kriteria` varchar(255) NOT NULL,
  `harga_produk` varchar(255) NOT NULL,
  `keamanan_transaksi` varchar(255) NOT NULL,
  `kualitas_produk` varchar(255) NOT NULL,
  `jenis_pengiriman` varchar(255) NOT NULL,
  `proses_transaksi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perbandingan`
--

INSERT INTO `perbandingan` (`id`, `nama_kriteria`, `harga_produk`, `keamanan_transaksi`, `kualitas_produk`, `jenis_pengiriman`, `proses_transaksi`, `created_at`, `updated_at`) VALUES
(1, 'harga_produk', '1', '5', '5', '5', '3', '2024-07-06 00:06:21', '2024-07-06 00:06:21'),
(2, 'keamanan_transaksi', '0.2', '1', '1', '1', '0.333333333', '2024-07-06 00:06:21', '2024-07-06 00:06:21'),
(3, 'kualitas_produk', '0.2', '1', '1', '1', '0.333333333', '2024-07-06 00:06:21', '2024-07-06 00:06:21'),
(4, 'jenis_pengiriman', '0.2', '1', '1', '1', '0.333333333', '2024-07-06 00:06:21', '2024-07-06 00:06:21'),
(5, 'kualitas_produk', '0.333333333', '3', '3', '3', '1', '2024-07-06 00:06:21', '2024-07-06 00:06:21');

-- --------------------------------------------------------

--
-- Table structure for table `perbandingan_kriteria`
--

CREATE TABLE `perbandingan_kriteria` (
  `alternatives` varchar(100) DEFAULT NULL,
  `pk_harga_produk` decimal(10,9) DEFAULT NULL,
  `pk_keamanan_transaksi` decimal(10,9) DEFAULT NULL,
  `pk_kualitas_produk` decimal(10,9) DEFAULT NULL,
  `pk_jenis_pengiriman` decimal(10,9) DEFAULT NULL,
  `pk_proses_transaksi` decimal(10,9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `perbandingan_kriteria`
--

INSERT INTO `perbandingan_kriteria` (`alternatives`, `pk_harga_produk`, `pk_keamanan_transaksi`, `pk_kualitas_produk`, `pk_jenis_pengiriman`, `pk_proses_transaksi`) VALUES
('PGE Official', 0.210828941, 0.266666667, 0.225806452, 0.270270270, 0.192307692),
('dinafshn', 0.172496406, 0.200000000, 0.290322581, 0.270270270, 0.307692308),
('By Finding', 0.189746047, 0.300000000, 0.258064516, 0.243243243, 0.269230769),
('Domani_id', 0.189746047, 0.233333333, 0.225806452, 0.216216216, 0.230769231),
('N&A FASHION', 0.237182559, 0.266666666, 0.193548387, 0.243243243, 0.269230769);

-- --------------------------------------------------------

--
-- Table structure for table `sub_criterias`
--

CREATE TABLE `sub_criterias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nilaik` varchar(255) NOT NULL,
  `nilaib` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_criterias`
--

INSERT INTO `sub_criterias` (`id`, `code`, `name`, `nilaik`, `nilaib`, `created_at`, `updated_at`) VALUES
(1, 'KS001', 'Harga_Produk', '450', '1', '2024-07-10 17:28:11', '2024-07-10 17:28:11'),
(2, 'KS002', 'Harga_Produk', '550', '0.2', '2024-07-10 17:28:11', '2024-07-10 17:28:11'),
(3, 'KS003', 'Harga_Produk', '500', '0.2', '2024-07-10 17:28:11', '2024-07-10 17:28:11'),
(4, 'KS004', 'Harga_Produk', '500', '0.2', '2024-07-10 17:28:11', '2024-07-10 17:28:11'),
(5, 'KS005', 'Harga_Produk', '400', '0.333333333', '2024-07-10 17:28:11', '2024-07-10 17:28:11'),
(6, 'KS006', 'Keamanan_Transaksi', '80', '5', '2024-07-10 17:28:11', '2024-07-10 17:28:11'),
(7, 'KS007', 'Keamanan_Transaksi', '60', '1', '2024-07-10 17:28:11', '2024-07-10 17:28:11'),
(8, 'KS008', 'Keamanan_Transaksi', '90', '1', '2024-07-10 17:28:11', '2024-07-10 17:28:11'),
(9, 'KS009', 'Keamanan_Transaksi', '70', '1', '2024-07-10 17:28:11', '2024-07-10 17:28:11'),
(10, 'KS0010', 'Keamanan_Transaksi', '80', '3', '2024-07-10 17:28:11', '2024-07-10 17:28:11'),
(11, 'KS0011', 'Kualitas_Produk', '70', '5', '2024-07-10 17:28:11', '2024-07-10 17:28:11'),
(12, 'KS0012', 'Kualitas_Produk', '90', '1', '2024-07-10 17:28:11', '2024-07-10 17:28:11'),
(13, 'KS0013', 'Kualitas_Produk', '80', '1', '2024-07-10 17:28:11', '2024-07-10 17:28:11'),
(14, 'KS0014', 'Kualitas_Produk', '70', '1', '2024-07-10 17:28:11', '2024-07-10 17:28:11'),
(15, 'KS0015', 'Kualitas_Produk', '60', '3', '2024-07-10 17:28:11', '2024-07-10 17:28:11'),
(16, 'KS0016', 'Jenis_Pengiriman', '10', '5', '2024-07-10 17:28:11', '2024-07-10 17:28:11'),
(17, 'KS0017', 'Jenis_Pengiriman', '10', '1', '2024-07-10 17:28:11', '2024-07-10 17:28:11'),
(18, 'KS0018', 'Jenis_Pengiriman', '9', '1', '2024-07-10 17:28:11', '2024-07-10 17:28:11'),
(19, 'KS0019', 'Jenis_Pengiriman', '8', '1', '2024-07-10 17:28:11', '2024-07-10 17:28:11'),
(20, 'KS0020', 'Jenis_Pengiriman', '9', '3', '2024-07-10 17:28:11', '2024-07-10 17:28:11'),
(21, 'KS0021', 'Proses_Transaksi', '50', '3', '2024-07-10 17:28:11', '2024-07-10 17:28:11'),
(22, 'KS0022', 'Proses_Transaksi', '80', '0.333333333', '2024-07-10 17:28:11', '2024-07-10 17:28:11'),
(23, 'KS0023', 'Proses_Transaksi', '70', '0.333333333', '2024-07-10 17:28:11', '2024-07-10 17:28:11'),
(24, 'KS0024', 'Proses_Transaksi', '60', '0.333333333', '2024-07-10 17:28:11', '2024-07-10 17:28:11'),
(25, 'KS0025', 'Proses_Transaksi', '70', '1', '2024-07-10 17:28:11', '2024-07-10 17:28:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Laela Diyah Puspita', 'Customer', 'laeladiyahpuspita280203@gmail.com', NULL, '$2y$10$PoDEyiHuROcGGu/qKHv1tulKL5Gz46S.YKjx7.mN08RgdJ/C7GU46', NULL, '2024-06-25 22:09:04', '2024-06-25 22:09:04'),
(2, 'Admin', 'Admin', 'admin@gmail.com', NULL, '$2y$10$.GraUakmlMBl/sbrSIvV1uFRaiEad7rVwjUg0127mbePQUlBTRieS', NULL, '2024-07-05 21:24:47', '2024-07-05 21:24:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatives`
--
ALTER TABLE `alternatives`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alternatives_tipe_unique` (`toko_online`);

--
-- Indexes for table `criterias`
--
ALTER TABLE `criterias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `criterias_code_unique` (`code`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hasils`
--
ALTER TABLE `hasils`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hasils_tipe_unique` (`toko_online`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `sub_criterias`
--
ALTER TABLE `sub_criterias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatives`
--
ALTER TABLE `alternatives`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `criterias`
--
ALTER TABLE `criterias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hasils`
--
ALTER TABLE `hasils`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sub_criterias`
--
ALTER TABLE `sub_criterias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hasils`
--
ALTER TABLE `hasils`
  ADD CONSTRAINT `hasils_ibfk_1` FOREIGN KEY (`toko_online`) REFERENCES `alternatives` (`toko_online`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
