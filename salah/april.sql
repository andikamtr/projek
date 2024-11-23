-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2022 at 02:37 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `april`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gejalas`
--

CREATE TABLE `gejalas` (
  `id_gejala` bigint(20) UNSIGNED NOT NULL,
  `pertanyaan_awal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_gejala` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gejala` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gejalas`
--

INSERT INTO `gejalas` (`id_gejala`, `pertanyaan_awal`, `kd_gejala`, `gejala`, `created_at`, `updated_at`) VALUES
(1, 'P01', 'G01', 'Sinyal Hilang', '2022-10-02 04:38:29', '2022-10-02 04:38:29'),
(2, 'P05', 'G02', 'Ponsel Mati Total', '2022-10-02 04:38:43', '2022-10-02 04:38:43'),
(3, 'P09', 'G03', 'Ponsel Boros Baterai', '2022-10-02 04:39:06', '2022-10-02 04:39:06'),
(4, 'P11', 'G04', 'Lampu atau LED Mati', '2022-10-02 04:39:31', '2022-10-02 04:39:31'),
(5, 'P15', 'G05', 'Charging Gagal', '2022-10-02 04:39:58', '2022-10-02 04:39:58'),
(6, 'P21', 'G06', 'Kegagalan Sirkuit Sim Card', '2022-10-02 04:40:27', '2022-10-02 04:40:27');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_08_20_161336_create_gejalas_table', 1),
(6, '2022_08_21_010539_create_pertanyaans_table', 1),
(7, '2022_08_23_045309_create_solusis_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaans`
--

CREATE TABLE `pertanyaans` (
  `id_pertanyaan` bigint(20) UNSIGNED NOT NULL,
  `kd_pertanyaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tidak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_gejala` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pertanyaans`
--

INSERT INTO `pertanyaans` (`id_pertanyaan`, `kd_pertanyaan`, `pertanyaan`, `ya`, `tidak`, `kd_gejala`, `created_at`, `updated_at`) VALUES
(1, 'P01', 'Apakah komponen konektor dan antenna terhubung dengan baik?', 'P02', 'S01', '1', '2022-10-02 04:43:22', '2022-10-02 04:43:22'),
(2, 'P02', 'Dapatkah ponsel mencari jaringan secara manual?', 'P03', 'S02', '1', '2022-10-02 04:43:51', '2022-10-02 04:43:51'),
(3, 'P03', 'Apakah ponsel hanya dapat mencari jaringan secara manual, namun kadang gagal?', 'S03', 'P04', '1', '2022-10-02 04:44:58', '2022-10-02 04:44:58'),
(4, 'P04', 'Apakah ponsel hanya dapat menangkap satu jaringan operator?', 'S04', 'S05', '1', '2022-10-02 04:56:53', '2022-10-02 04:56:53'),
(5, 'P05', 'Apakah baterai masih dalam keadaan baik?', 'P06', 'S06', '2', '2022-10-02 04:59:34', '2022-10-02 04:59:34'),
(6, 'P06', 'Apakah pada konektor terlihat baterai berkarat?', 'S07', 'P07', '2', '2022-10-02 05:15:17', '2022-10-02 05:15:17'),
(7, 'P07', 'Apakah pada saat di charge indicator proses mengisi ulang tampil tetapi ponsel tidak dapat dinyalakan?', 'S08', 'P08', 'Pilih', '2022-10-02 05:32:45', '2022-10-02 05:32:45'),
(8, 'P07', 'Apakah proses charging tidak berjalan?', 'S08', 'S09', 'Pilih', '2022-10-02 05:51:06', '2022-10-02 05:51:06'),
(11, 'P11', 'Apakah lampu LED tidak menyala?', 'S13', 'P13', 'Pilih', '2022-10-02 07:10:20', '2022-10-02 07:10:20'),
(13, 'P11', 'Apakah komponen LED tidak berfungsi dengan baik?', 'S12', 'P13', 'Pilih', '2022-10-02 07:13:02', '2022-10-02 07:13:02'),
(26, 'P07', 'Apakah pada saat ponsel di charge, indicator proses isi ulang tampil tetapi ponsel tidak dapat dinyalakan ?', 'S08', 'P08', '2', '2022-10-02 08:17:38', '2022-10-02 08:17:38'),
(27, 'P08', 'Apakah proses charging tidak berjalan ?', 'S09', 'S10', '2', '2022-10-02 08:20:51', '2022-10-02 08:20:51'),
(28, 'P09', 'Apakah baterai ponsel anda cepat sekali habis ?', 'S11', 'P10', '3', '2022-10-02 08:21:48', '2022-10-02 08:21:48'),
(29, 'P10', 'Apakah power supply menunjukan keadaan baterai normal tetapi baterai tetap boros?', 'S12', 'S13', '3', '2022-10-02 08:22:31', '2022-10-02 08:22:31'),
(30, 'P11', 'Apakah lampu LED tidak menyala ?', 'S14', 'P12', '4', '2022-10-02 08:24:25', '2022-10-02 08:24:25'),
(31, 'P12', 'Apakah komponen LED tidak berfungsi dengan baik ?', 'S15', 'P13', '4', '2022-10-02 08:25:09', '2022-10-02 08:25:09'),
(32, 'P13', 'Apakah jalur komponen LED tidak berfungsi dengan baik ?', 'S16', 'P14', '4', '2022-10-02 08:25:47', '2022-10-02 08:25:47'),
(33, 'P14', 'Apakah IC UI masih dalam keadaan baik ?', 'S17', 'S18', '4', '2022-10-02 08:26:43', '2022-10-02 08:26:43'),
(34, 'P15', 'Apakah alat charger anda tidak dapat mengisi baterai pada ponsel anda?', 'S19', 'P16', '5', '2022-10-02 08:27:40', '2022-10-02 08:27:40'),
(35, 'P16', 'Apakah saat anda mencoba melakukan isi ulang baterai pada ponsel lain sejenis, alat charger anda berfungsi dengan baik ?', 'S20', 'P17', '5', '2022-10-02 08:28:13', '2022-10-02 08:28:13'),
(36, 'P17', 'Apakah pada layar ponsel muncul pesan “Not Charging” ?', 'S21', 'P18', '5', '2022-10-02 08:28:53', '2022-10-02 08:28:53'),
(37, 'P18', 'Apakah ponsel telah selesai diisi ulang, tetapi indicator pengisian tetap berjalan ?', 'S22', 'P19', '5', '2022-10-02 08:29:27', '2022-10-02 08:29:27'),
(38, 'P19', 'Apakah saat ponsel tidak dalam keadaan isi ulang (charge), indicator isi ulang jalan terus ?', 'S23', 'P20', '5', '2022-10-02 08:30:04', '2022-10-02 08:30:04'),
(39, 'P20', 'Apakah ponsel selalu mati setiap kali akan diisi ulang (charge) ?', 'S24', 'S25', '5', '2022-10-02 08:30:45', '2022-10-02 08:30:45'),
(40, 'P21', 'Apakah lempengan sim card reader bengkok atau kotor ?', 'S26', 'P22', '6', '2022-10-02 08:31:26', '2022-10-02 08:31:26'),
(41, 'P22', 'Apakah resisten SIM lines ke ground nilainya < 200 ?', 'S27', 'P23', '6', '2022-10-02 08:31:51', '2022-10-02 08:31:51'),
(42, 'P23', 'Apakah tegangan VSIM naik menjadi 3/5 volt setelah ponsel dinyalakan?', 'S28', 'P24', '6', '2022-10-02 08:32:34', '2022-10-02 08:32:34'),
(43, 'P24', 'Apakah ada keterangan “SIM card not accepted” pada LCD ponsel ?', 'S29', 'S30', '6', '2022-10-02 08:33:10', '2022-10-02 08:33:10');

-- --------------------------------------------------------

--
-- Table structure for table `solusis`
--

CREATE TABLE `solusis` (
  `id_solusi` bigint(20) UNSIGNED NOT NULL,
  `kd_solusi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solusi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `solusis`
--

INSERT INTO `solusis` (`id_solusi`, `kd_solusi`, `solusi`, `created_at`, `updated_at`) VALUES
(1, 'S01', 'Penyebab : saklar antenna rusak / penyolderan pin rusak sehingga tidak adanya jaringan atau transmisi Saran : ganti antenna', '2022-10-02 08:33:58', '2022-10-02 08:33:58'),
(2, 'S02', 'Penyebab : Jika tidak bisa mencari jaringan dipastikan ada masalah dalam IC RF Saran : ganti IC RF (HAGAR)', '2022-10-02 08:34:11', '2022-10-02 08:34:11'),
(3, 'S03', 'Penyebab : IC RF (HAGAR) dan IC AUDIO (COBRA) terdapat kesalahan atau unit-unit disekitar komponen tersebut buruk/kekurangan arus. Saran : Periksa penyolderan BGA', '2022-10-02 08:34:23', '2022-10-02 08:34:23'),
(4, 'S04', 'Penyebab : Ada masalah dengan IC VCO Saran : gantilah IC VCO', '2022-10-02 08:34:33', '2022-10-02 08:34:33'),
(5, 'S05', 'Tidak ada kerusakan pada handphone. Kemungkinan kerusakan pada bagian lainnya.', '2022-10-02 08:34:45', '2022-10-02 08:34:45'),
(6, 'S06', 'Saran : Lepaskan baterai, uji dengan multitester. Apabila baterai sudah rusak, maka ganti dengan yang baru. Namun, apabila baterai masih dalam kondisi baik pasang kembali baterai kemudian hidupkan ponsel.', '2022-10-02 08:35:48', '2022-10-02 08:35:48'),
(7, 'S07', 'Penyebab : ponsel sudah tua Saran : tekan secara lembut konektor, jika tingkat kelenturan tidak normal maka perlu mengganti konektor baterai tersebut. Hal ini menyebabkan arus dari baterai menuju ponsel terputus.', '2022-10-02 08:36:12', '2022-10-02 08:36:12'),
(8, 'S08', 'Penyebab : gangguan pada IC PA Saran : periksa arus pada IC PA nya', '2022-10-02 08:36:25', '2022-10-02 08:36:25'),
(9, 'S09', 'Penyebab : gangguan pada power supply Saran : cabut IC PA pada PCB kemudian bersihkan timah-timah pada PCB dimana IC PA tersebut menempel dengan cairan pembersih IPA.', '2022-10-02 08:38:16', '2022-10-02 08:38:16'),
(10, 'S10', 'Tidak terjadi kerusakan pada bagian baterai. Periksa bagian konektor charger.', '2022-10-02 08:38:39', '2022-10-02 08:38:39'),
(11, 'S11', 'Penyebab : arus listrik pada baterai terganggu Saran : gunakan power supply dengan skala satu ampere untuk menuji baterai pada ponsel.', '2022-10-02 08:40:56', '2022-10-02 08:40:56'),
(12, 'S12', 'Penyebab : Kerusakan pada IC PA Saran : ganti IC PA dengan yang baru', '2022-10-02 08:41:09', '2022-10-02 08:41:09'),
(13, 'S13', 'Penyebab : Baterai ponsel anda sudah rusak. Saran : Ganti dengan baterai yang baru. Jika tetap terdapat masalah, bawa ke service centre ponsel', '2022-10-02 08:41:25', '2022-10-02 08:41:25'),
(14, 'S14', 'Penyebab : Kemungkinan komponen LED rusak Saran : lakukan pengetesan pada komponen LED', '2022-10-02 08:42:39', '2022-10-02 08:42:39'),
(15, 'S15', 'Penyebab : LED rusak Saran : letakkan kabel-kabel multitester manual dengan skala x1 pada kutub-kutub positif dan negative dari komponen LED, tetapi dengan kutub yang terbalik dari kabel multitester.', '2022-10-02 08:43:35', '2022-10-02 08:43:35'),
(16, 'S16', 'Penyebab : Kemungkinan jalur terputus Saran : Lakukan jumper langsung dari IC UI pada jalur LED yang terputus', '2022-10-02 08:44:10', '2022-10-02 08:44:10'),
(17, 'S17', 'Penyebab : kemungkinan IC UI rusak Saran : panasi IC UI menggunakan blower secara hati-hati, tetapi jika IC UI yang lama sudah rusak, maka ganti IC UI ponsel dengan yang baru.', '2022-10-02 08:44:23', '2022-10-02 08:44:23'),
(18, 'S18', 'Penyebab : Kerusakan tidak dapat diketahui lebih lanjut Saran : Bawa ke service centre ponsel', '2022-10-02 08:46:30', '2022-10-02 08:46:30'),
(19, 'S19', 'Penyebab : Charger  rusak atau baterai yang rusak Saran : Coba lakukan pengisian ulang (recharge) pada ponsel sejenis', '2022-10-02 08:46:44', '2022-10-02 08:46:44'),
(20, 'S20', 'Penyebab : Kemungkinan baterai pada ponsel sudah rusak sehingga tidak mampu lagi diisi ulang Saran : Ganti baterai anda dengan yang baru', '2022-10-02 08:47:08', '2022-10-02 08:47:08'),
(21, 'S21', 'Penyebab : IC Charge rusak Saran : Ganti IC Charge dengan yang baru', '2022-10-02 08:47:27', '2022-10-02 08:47:27'),
(22, 'S22', 'Penyebab : IC power rusak Saran : Ganti IC Power dengan yang baru', '2022-10-02 08:47:38', '2022-10-02 08:47:38'),
(23, 'S23', 'Penyebab : Software rusak Saran : Lakukan program ulang (flash) dengan versi yang sama', '2022-10-02 08:47:49', '2022-10-02 08:47:49'),
(24, 'S24', 'Penyebab : IC Charge atau IC Power yang rusak Saran : Lakukan pengujian lebih lanjut untuk menentukan komponen mana yang rusak, kemudian gantilah komponen tersebut.', '2022-10-02 08:48:00', '2022-10-02 08:48:00'),
(25, 'S25', 'Penyebab : Kerusakan tidak dapat diketahui lebih lanjut Saran : Bawa ke service centre ponsel', '2022-10-02 08:48:14', '2022-10-02 08:48:14'),
(26, 'S26', 'Penyebab : Lempengan sim card rusak Saran : bersihkan atau ganti bila merasa perlu', '2022-10-02 08:48:58', '2022-10-02 08:48:58'),
(27, 'S27', 'Penyebab : Resisten tidak mampu mentransfer data dikarenakan rusak/tergores Saran : periksa apakah SIM lines terhubung ke ground atau terputus, kemudian cek tampilan mekanik sim reader.', '2022-10-02 08:49:09', '2022-10-02 08:49:09'),
(28, 'S28', 'Penyebab : Jika naik artinya tegangan normal Saran : jika tegangan VSIM cocok tetapi ponsel tidak dapat mengenali SIM card, periksa apakah SIM lines terhubung ke ground atau terputus, kemudian cek tampilan mekanik sim reader.', '2022-10-02 08:49:41', '2022-10-02 08:49:41'),
(29, 'S29', 'Penyebab : Settingan SIM lock tidak benar atau IC Audio rusak Saran : Periksa settingan sim lock, jika benar maka ganti IC audio. Setelah melakukan penggantian, tulis ulang data SIM lock dan tune nilai Rx/Tx setelah mengganti IC Audio (COBRA).', '2022-10-02 08:50:05', '2022-10-02 08:50:05'),
(30, 'S30', 'Penyebab : Kerusakan tidak dapat diketahui lebih lanjut Saran : Bawa ke service centre ponsel', '2022-10-02 08:50:18', '2022-10-02 08:50:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '$2y$10$s/PK0jUsOESQWuj9qxK5remCmAnwZAFhAYl3b2i8JVQlVoFI1mkLS', '2', '2022-10-02 04:35:47', '2022-10-02 04:35:47'),
(2, 'april', '$2y$10$vdx3SCWGEIWz6s2taopfBeFfrGOqPhydsVaSYq4LSaKXq5XjC/h9O', '1', '2022-10-02 08:51:00', '2022-10-02 08:51:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gejalas`
--
ALTER TABLE `gejalas`
  ADD PRIMARY KEY (`id_gejala`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pertanyaans`
--
ALTER TABLE `pertanyaans`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- Indexes for table `solusis`
--
ALTER TABLE `solusis`
  ADD PRIMARY KEY (`id_solusi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gejalas`
--
ALTER TABLE `gejalas`
  MODIFY `id_gejala` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pertanyaans`
--
ALTER TABLE `pertanyaans`
  MODIFY `id_pertanyaan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `solusis`
--
ALTER TABLE `solusis`
  MODIFY `id_solusi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
