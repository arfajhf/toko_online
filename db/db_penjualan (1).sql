-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 10, 2023 at 02:21 PM
-- Server version: 8.0.30
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','user','pimpinan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `nama`, `email`, `password`, `no_hp`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', '$2y$10$pRNhuWZItoOucI.VrPFHlekFGY10c6vYmcZFDtgy9nd3Scf2ttSJq', '081234567890', 'admin', '2023-02-26 22:20:37', '2023-02-26 22:20:37'),
(2, 'User', 'user@user.com', '$2y$10$9wT.cZvEM2zNkfSE5zoV/ORpxUPDYtTvq7F1v.XMup5DaleFcNf1S', '081234567890', 'user', '2023-02-26 22:20:37', '2023-02-26 22:20:37'),
(3, 'Pimpinan', 'pimpinan@pimpinan.com', '$2y$10$IfyHZuovSbyquLMAZy3EbO6/oZjosx1EoOumjYn9/3jO0iIwtRA7O', '081234567890', 'pimpinan', '2023-02-26 22:20:37', '2023-02-26 22:20:37'),
(4, 'Fajar Hidayatuloh', 'fajar@gmail.com', '$2y$10$NFvH1CtDDTkHW44yTbvSO.XuY.pwy5VBVAiz.d77VmCZutC8PQN1y', '082338765654', 'user', '2023-04-06 19:45:51', '2023-04-06 19:45:51');

-- --------------------------------------------------------

--
-- Table structure for table `data_barangs`
--

CREATE TABLE `data_barangs` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` enum('cctv','notebook','hardware','pc','pac','ups','cable') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisi` enum('baru','bekas') COLLATE utf8mb4_unicode_ci NOT NULL,
  `berat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masa` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int DEFAULT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_barangs`
--

INSERT INTO `data_barangs` (`id`, `nama_barang`, `gambar`, `harga`, `kategori`, `kondisi`, `berat`, `masa`, `rating`, `deskripsi`, `created_at`, `updated_at`) VALUES
(3, 'MATHERBOARD GAMING', 'mntr.jpg', '1000000', 'hardware', 'baru', '05', 'kg', NULL, 'Motherboard Asus E3 Pro Gaming V5 Losspack\r\n\r\nSpecifikasi\r\nAudio\r\n- 5x Analog Audio Jack\r\n- 1x Optical SPDIF Out\r\nMisc\r\n- 2x PS/2\r\nNetwork\r\n- 1x RJ-45\r\nUSB\r\n- 2x USB 2 Type-A\r\n- 4x USB 3 Gen 1 Type-A\r\n- 1x USB 3 Gen 2 Type-A\r\n- 1x USB 3 Gen 2 Type-C\r\nFans\r\n- 5x 4-pin Fan Header\r\nMisc\r\n- 1x ROG Extension Header\r\n- 1x Serial Header\r\nPower\r\n- 1x 24-pin ATX Power\r\n- 1x 8-pin 12V Power\r\nStorage\r\n- 6x SATA3\r\nUSB\r\n- 2x USB 2 Header\r\n- 1x USB 3 Gen 1 Header\r\nNetwork\r\nAmount Chip Speed For IPMI\r\n- 1x Intel I219-LM 1000 Mbit No\r\nExpansion Slots\r\nSlots\r\n- 1x PCI-E 3.0 x16 @ x16\r\n- 1x PCI-E 3.0 x16 @ x4\r\n- 2x PCI-E 3.0 x1 @ x1\r\n- 2x PCI 5V @ 32-bit\r\n- Crossfire & SLI\r\n- AMD Crossfire Yes\r\n- Nvidia SLI No\r\nAudio\r\n- Audiochip Realtek ALC1150\r\n- Audio Channels 7.1\r\nMemory\r\nThis board has 4 slots with the following specifications:\r\n- Slot Protocol DDR4\r\n- Slot Type 288-pin DIMM\r\n- Maximum Speed 2400 MHz\r\n- Maximum Capacity 64 GB\r\n- Maximum Channels 2\r\n- ECC support No\r\n\r\nKelengkapan\r\n- Motherboard Asus E3 Pro Gaming\r\n- Back Panel\r\n- Kabel SATA\r\n- CD Driver\r\n\r\n- Kondisi Baru Losspack (Bukan Kardus Aslinya)\r\n- Garansi 6 Bulan\r\n\r\n* Tanyakan terlebih dahulu untuk ketersedian stok barang, karena barang terbatas dan tidak * sempat update.\r\n* Segala ongkos kirim ditanggung oleh pembeli\r\n* Foto Realpict Hasil Foto Sendiri\r\n* Harga Real No Up Harga\r\n* Paking aman dengan Buble wrep + Sterofoam Tebal. jadi jangan khawatir dijamin pasti aman\r\n* Garansi Toko 6 Bulan Terhitung Setelah Barang diterima', '2023-02-26 22:43:28', '2023-02-26 22:43:28'),
(7, 'dsadsa', 'cctvip.jpg', '1000000', 'cctv', 'baru', '1', 'g', NULL, '@endforeach', '2023-02-27 01:55:33', '2023-02-27 01:55:33'),
(8, 'laptop gaming', 'cctv.jpg', '2500000', 'cctv', 'baru', '1', 'g', NULL, '@endforeach', '2023-02-27 01:56:25', '2023-02-27 01:56:25'),
(9, 'ssss', '1.jpg', '500000', 'cctv', 'baru', '1', 'g', NULL, '@endforeach', '2023-02-27 01:57:13', '2023-02-27 01:57:13'),
(10, 'dsadsa', '2.jpeg', '10000', 'cctv', 'baru', '2', 'g', NULL, '@endforeach', '2023-02-27 02:02:54', '2023-02-27 02:02:54'),
(11, 'CCTV Full Camera', '3.jpg', '700000', 'cctv', 'baru', '2', 'g', NULL, '@endforeach', '2023-02-27 02:06:48', '2023-02-27 02:06:48'),
(12, 'ssss', 'cable.png', '1000000', 'cable', 'baru', '1', 'kg', NULL, '⚠️⚠️⚠️NOTE：\r\n- 4A TYPE-C kabel tidak support untuk Samsung Fast Charger\r\n\r\nSpesifikasi\r\n- Warna: Putih\r\n- Output : 4A\r\n- Panjang : 1meter\r\n- Connector interface Type C\r\n- Sync and charge enable\r\n- Compatible : All Smartphone yang memiliki soket Type C\r\n- Garansi: 6 bulan\r\n( Note: pengetesan awal ) (kerusakan tidak dikarenakan human error)\r\n\r\n1. Support utk semua jenis smartphone/tablet yang menggunakan TYPE C\r\n2. Support QUICK CHARGING (khusus hp tipe qualcomm snapdragon)\r\n3. Sangat disarankan sebagai pengganti kabel data Smartphone anda yang sudah rusak, atau sebagai kabel cadangan untuk bepergian atau powerbank anda\r\n\r\nGARANSI ACCESSORIES TIDAK BERLAKU JIKA :\r\n- Produk cacat atau rusak fisik\r\n- Dus rusak atau cacat fisik / hilang (jika ada dus)\r\nHuman error (konsleting, masuk air, dll)\r\n\r\nKami memberikan standarisasi pengiriman menggunakan extra bubble wrap untuk semua barang\r\n\r\nPAHAMI KUALITAS PRODUK DENGAN BAIK SEBELUM MEMBELI\r\n* Semua foto produk adalah foto produk asli di gudang STARTS SPAREPART\r\n* Ketersediaan stok bisa di tanyakan via chat atau diskusi\r\n*Kami dengan senang hati melayani grosiran dan eceran\r\n* Selamat berbelanja ditoko kami :)', '2023-03-21 02:44:33', '2023-03-21 02:44:33'),
(13, 'ups', 'ups.png', '20000000', 'ups', 'baru', '10', 'kg', NULL, 'Customer Care\r\n* Hati2 membeli UPS murah stock lama , karena usia baterai makin berkurang *\r\n\r\nBack Up Time :\r\nModel 25% 50% 75% 100%\r\n3kVA 26 10 6 3\r\n\r\nCocok untuk di gunakan dalam :\r\n1. Data Network: Mid - range Servers (Windows and Linux), Wi-Fi Applications & Data networks\r\n2. Small Data Center Rooms\r\n3. Voice Networks: Cellular Sites, Voice Over IP (VOIP), Very small Aperture Terminals (VSAT) PBX And IT-enabled PBX Automation industries\r\n4. Process Automation : Equipment: Programmable Logic Controllers (PLS) and Cash Machines(ATM)\r\n\r\nBaterai\r\nBattery Type : 12V/ 9 AH\r\nNumbers : 6\r\nTypical Recharge Time : 4 hours recover to 90% capacity\r\nCharging Current (max.) : 1.0 A\r\nCharging Voltage: 82.1 VDC ±1%\r\nLong Run Model : Battery Type Depending on the capacity of external batteries, Numbers: 6, Charging Current : 1.0A/2.0A/4.00.0A, 6.0A default, Float Charging Voltage: 82.1 VDC x 1%\r\n\r\nVoltase Keluar\r\nNominal Voltage : 208/220/230/240VAC\r\nAC Voltage Regulation : ± 1%\r\nFrequency Range (Synchronized Range) : 46Hz - 54 Hz or 56Hz - 64 Hz\r\nFrequency Range (Batt. Mode) : 50 Hz ± 0.1 Hz or 60 Hz ± 0.1 Hz\r\nCurrent Crest Ratio : 3:1 (max.)\r\nHarmonic Distortion : < 3 % THD (Linear Load), < 7 % THD (Non-linear Load)\r\nTransfer Time : Bypass to Inverter (Line mode): Zero, Inverter to Bypass (Line mode): 4 ms (Typical)\r\n\r\nBerat Produk\r\nStandard Run Model : 27.6 Kg, Long Run Model: 7.4 Kg\r\n\r\nVoltase Masuk\r\nNominal Voltage : 230 Vac\r\nLow Line Loss : 110 VAC ± 3% at 50% Load, 176 VAC ± 3% at 100% Load\r\nLow Line Comeback : 120 VAC ± 3% at 50% Load, 186 VAC ± 3% at 100% Load\r\nHigh Line Comeback : 270 VAC ± 3%\r\nFrequency Range : 40 Hz - 70 Hz\r\nPower Factor : > 0.99 @ 100% load\r\nLCD Panel : UPS status, Load level, Battery level, Input/Output voltage, Discharge timer, and Fault conditions\r\nNoise Level : Less than 50dBA @ 1 Meter\r\nSmart RS-232/USB : Supports Windows® 2000/2003/XP/Vista/2008, Windows® 7, Linux, Unix, and MAC\r\n\r\nWarranty 2 Tahun', '2023-03-21 02:48:07', '2023-03-21 02:48:07'),
(14, 'Asus NoteBook', 'notebook.jpg', '2500000', 'notebook', 'baru', '2', 'kg', NULL, 'Deskripsi ASUS E203MAH - N3060 2GB atau 4Gb 500GB- WIN10- 11.6\"HD\r\n\r\nSpesifications :\r\n- Intel\" Celeron\" N3060 Processor\r\n- Windows 10 Home\r\n- 2GB atau 4Gb Onboard Memory ( sesuai pilihan varian)\r\n- 500GB 5400RPM SATA HDD\r\n- Integrated Intel UHD Graphics 600\r\n- 11.6\" (16:9) LED backlit HD (1366x768) 60Hz Glossy Panel with 45% NTSC\r\nSupport ASUS Splendid Technology\r\n- Chiclet keyboard, VGA Web Camera\r\n- Wi-Fi Integrated 802.11 AC, Bluetooth Built-in Bluetooth V4.1\r\n- Built-in Stereo 2 W Speakers And Digital Array Microphone\r\n- Battery 3 Cells 42 Whrs Polymer Battery\r\n- Interface, 1 x COMBO audio jack, 2 x Type A USB3.0 (USB3.1 GEN1), 1 x Type C USB3.0 (USB3.1 GEN1), 1 x HDMI, 1 x AC adapter plug, 1 x micro SD card\r\n- EX - DIsplay\r\n- GARANSI DISTRIBUTOR 1 TAHUN\r\n\r\nWARNA YANG READY :\r\n- GREY ( BIRU )\r\n- PINK\r\n- Putih\r\nHarap Tanyakan warna dulu sebelum anda oder, takutnya warna yang anda mau stok lagi kosong\r\nbarang ex-display adalah barang bekas pajangan, atau barang dagangan yang pernah dipajang.\r\nnamun barang ex-display biasanya dijual dengan harga yang relatif lebih murah dari harga yang sebenarnya, hal ini dikarenakan barang tersebut digunakan sebagai contoh dan pajangan yang kemungkinan telah banyak dipegang oleh calon pembeli sebelumnya.v', '2023-03-21 02:51:15', '2023-03-21 02:51:15'),
(15, 'PC Gaming', 'cpu.png', '1000000', 'pc', 'baru', '3', 'kg', NULL, 'Barang po 7-10 hari Mini ITX Micro Case Home Theater Kotak Enclosure Komputer Pribadi Chassis Gaming Desktop Kontrol Industri Komputer\r\nFitur: 100% baru dan berkualitas tinggi\r\nBatas tinggi heat sink CPU: ketika hard drive 2,5 inci dipasang: kurang dari 28mm; Tanpa hard drive 2,5 inci: kurang dari 35mm.\r\nLubang pembuangan panas Multi-sisi, efek pembuangan panas yang kuat. Penutup atas juga dilengkapi dengan jaring pembuangan panas yang hanya menutupi posisi heat sink CPU.\r\nSederhana, mini, tipis dan ringan menghemat banyak ruang desktop.\r\nKasingnya kecil dan indah, dan dapat ditempatkan dalam banyak gaya, yang menyegarkan.\r\nAntarmuka Mikrofon Headset USB2.0 depan dan Tombol Sakelar Daya membuat pengoperasian lebih nyaman.\r\n\r\nSpesifikasi: Warna: Hitam\r\nBahan: SGCC\r\nUkuran: kira-kira. 20.5x19x6mm/8.07x7.48x2.36in\r\n\r\nPaket Termasuk: 1 PC x FH06 Mini ITX Case\r\n\r\nCatatan: Tidak ada paket ritel.\r\nPerkenankan kesalahan 0-1 cm karena pengukuran manual. pls pastikan Anda tidak keberatan sebelum Anda menawar.\r\nKarena perbedaan antara monitor yang berbeda, gambar mungkin tidak mencerminkan warna sebenarnya dari item tersebut. Terima kasih!', '2023-03-21 02:53:03', '2023-03-21 02:53:03');

-- --------------------------------------------------------

--
-- Table structure for table `data_chats`
--

CREATE TABLE `data_chats` (
  `id` bigint UNSIGNED NOT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `isi_chat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_pemesanans`
--

CREATE TABLE `data_pemesanans` (
  `id` bigint UNSIGNED NOT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `no_transaksi` bigint NOT NULL,
  `nama_pemesan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_barang` bigint UNSIGNED NOT NULL,
  `tanggal_teransaksi` datetime NOT NULL,
  `jumlah_beli` int NOT NULL,
  `total_harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pengirim` bigint UNSIGNED DEFAULT NULL,
  `alamat` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('dikemas','dikirim','selesai') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_pemesanans`
--

INSERT INTO `data_pemesanans` (`id`, `id_user`, `no_transaksi`, `nama_pemesan`, `id_barang`, `tanggal_teransaksi`, `jumlah_beli`, `total_harga`, `id_pengirim`, `alamat`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 15348, 'arfaj', 12, '2023-03-22 02:41:14', 1, '1000000', NULL, 'dsadsad', 'dikemas', '2023-03-21 19:41:14', '2023-03-21 19:41:14'),
(2, 2, 40932, 'arfaj', 12, '2023-03-22 02:48:36', 2, '2000000', NULL, 'dsaddasdasd', 'dikemas', '2023-03-21 19:48:36', '2023-03-21 19:48:36'),
(3, 2, 40932, 'arfaj', 12, '2023-03-22 02:49:10', 2, '2000000', 1, 'dsaddasdasd', 'dikirim', '2023-03-21 19:49:10', '2023-04-07 22:36:23'),
(4, 2, 59010, 'arfaj', 12, '2023-03-22 02:53:08', 2, '2000000', NULL, 'sadsadsad', 'dikemas', '2023-03-21 19:53:08', '2023-03-21 19:53:08'),
(5, 2, 59010, 'arfaj', 12, '2023-03-22 02:53:59', 2, '2000000', 2, 'sadsadsad', 'selesai', '2023-03-21 19:53:59', '2023-04-07 22:57:43'),
(6, 2, 69511, 'arfaj', 12, '2023-03-22 02:57:29', 2, '2000000', NULL, 'dsadsad', 'dikemas', '2023-03-21 19:57:29', '2023-03-21 19:57:29'),
(7, 2, 69511, 'arfaj', 12, '2023-03-22 02:57:48', 2, '2000000', NULL, 'dsadsad', 'dikemas', '2023-03-21 19:57:48', '2023-03-21 19:57:48'),
(8, 2, 85064, 'fajar hidayatuloh', 3, '2023-03-22 14:44:11', 2, '2000000', NULL, 'banjarsari kecituman', 'dikirim', '2023-03-22 07:44:11', '2023-03-22 07:44:11'),
(10, 2, 27989, 'alahmak', 14, '2023-03-26 04:22:52', 2, '5000000', NULL, 'fdfdgfdfd', 'dikemas', '2023-03-25 21:22:52', '2023-03-25 21:22:52'),
(11, 2, 27989, 'alahmak', 14, '2023-03-26 04:28:34', 2, '5000000', NULL, 'fdfdgfdfd', 'dikemas', '2023-03-25 21:28:34', '2023-03-25 21:28:34'),
(12, 2, 50071, 'sasasa jsa', 14, '2023-03-26 05:00:02', 1, '2500000', NULL, 'dsadasd', 'dikemas', '2023-03-25 22:00:02', '2023-03-25 22:00:02'),
(13, 2, 94597, 'coba baru', 14, '2023-03-26 05:00:31', 2, '5000000', NULL, 'sida sahaja jarasaja', 'dikemas', '2023-03-25 22:00:31', '2023-03-25 22:00:31'),
(14, 2, 50624, 'kabel coba', 12, '2023-03-26 05:32:07', 1, '1000000', NULL, 'sidaharja', 'dikemas', '2023-03-25 22:32:07', '2023-03-25 22:32:07'),
(15, 2, 70040, 'satria', 3, '2023-03-26 18:27:29', 1, '1000000', NULL, 'dsadsadsa', 'dikemas', '2023-03-26 11:27:29', '2023-03-26 11:27:29'),
(16, 2, 70143, 'arfaj', 3, '2023-04-06 23:10:30', 2, '2000000', NULL, 'sinad', 'dikemas', '2023-04-06 16:10:30', '2023-04-06 16:10:30'),
(17, 4, 72879, 'coba aja', 11, '2023-04-07 04:02:00', 1, '700000', 1, 'asssaaa', 'selesai', '2023-04-06 21:02:00', '2023-04-07 23:00:08');

-- --------------------------------------------------------

--
-- Table structure for table `laporans`
--

CREATE TABLE `laporans` (
  `id` bigint UNSIGNED NOT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `id_barang` bigint UNSIGNED NOT NULL,
  `id_pemesanan` bigint UNSIGNED NOT NULL,
  `id_pengirim` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_02_18_141238_create_admins_table', 1),
(3, '2023_02_19_144459_create_data_barangs_table', 1),
(4, '2023_02_19_144913_create_pengirims_table', 1),
(5, '2023_02_19_145112_create_data_pemesanans_table', 1),
(6, '2023_02_19_145140_create_laporans_table', 1),
(7, '2023_02_19_145210_create_data_chats_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengirims`
--

CREATE TABLE `pengirims` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_pengirim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ongkir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengirims`
--

INSERT INTO `pengirims` (`id`, `nama_pengirim`, `ongkir`, `created_at`, `updated_at`) VALUES
(1, 'J&T', '10000', '2023-04-07 13:24:34', '2023-04-07 13:24:34'),
(2, 'J&T', '10000', '2023-04-07 13:25:24', '2023-04-07 13:25:24');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `data_barangs`
--
ALTER TABLE `data_barangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_chats`
--
ALTER TABLE `data_chats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_chats_id_user_foreign` (`id_user`);

--
-- Indexes for table `data_pemesanans`
--
ALTER TABLE `data_pemesanans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_pemesanans_id_user_foreign` (`id_user`),
  ADD KEY `data_pemesanans_id_barang_foreign` (`id_barang`),
  ADD KEY `data_pemesanans_id_pengirim_foreign` (`id_pengirim`);

--
-- Indexes for table `laporans`
--
ALTER TABLE `laporans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `laporans_id_user_foreign` (`id_user`),
  ADD KEY `laporans_id_barang_foreign` (`id_barang`),
  ADD KEY `laporans_id_pemesanan_foreign` (`id_pemesanan`),
  ADD KEY `laporans_id_pengirim_foreign` (`id_pengirim`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengirims`
--
ALTER TABLE `pengirims`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_barangs`
--
ALTER TABLE `data_barangs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `data_chats`
--
ALTER TABLE `data_chats`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_pemesanans`
--
ALTER TABLE `data_pemesanans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `laporans`
--
ALTER TABLE `laporans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pengirims`
--
ALTER TABLE `pengirims`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_chats`
--
ALTER TABLE `data_chats`
  ADD CONSTRAINT `data_chats_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `admins` (`id`);

--
-- Constraints for table `data_pemesanans`
--
ALTER TABLE `data_pemesanans`
  ADD CONSTRAINT `data_pemesanans_id_barang_foreign` FOREIGN KEY (`id_barang`) REFERENCES `data_barangs` (`id`),
  ADD CONSTRAINT `data_pemesanans_id_pengirim_foreign` FOREIGN KEY (`id_pengirim`) REFERENCES `pengirims` (`id`),
  ADD CONSTRAINT `data_pemesanans_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `admins` (`id`);

--
-- Constraints for table `laporans`
--
ALTER TABLE `laporans`
  ADD CONSTRAINT `laporans_id_barang_foreign` FOREIGN KEY (`id_barang`) REFERENCES `data_barangs` (`id`),
  ADD CONSTRAINT `laporans_id_pemesanan_foreign` FOREIGN KEY (`id_pemesanan`) REFERENCES `data_pemesanans` (`id`),
  ADD CONSTRAINT `laporans_id_pengirim_foreign` FOREIGN KEY (`id_pengirim`) REFERENCES `pengirims` (`id`),
  ADD CONSTRAINT `laporans_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `admins` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
