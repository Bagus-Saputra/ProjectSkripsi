-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2024 at 04:47 PM
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
-- Database: `skripsi1`
--

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_05_29_130250_create_produks_table', 1),
(6, '2024_06_20_153229_create_rekomendasi_table', 2),
(7, '2024_06_20_160521_create_product_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_batik` varchar(255) NOT NULL,
  `jenis_batik` varchar(255) NOT NULL,
  `warna` varchar(255) NOT NULL,
  `bahan` varchar(255) NOT NULL,
  `kualitas` varchar(255) NOT NULL,
  `harga` int(25) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `nama_batik`, `jenis_batik`, `warna`, `bahan`, `kualitas`, `harga`, `gambar`, `deskripsi`, `created_at`, `updated_at`) VALUES
(12, 'Baju Batik Pria LS Modern Jumbo Slim Fit GEGT UNGU - S', 'Batik Cetak', 'Cerah', 'Katun', 'Modern', 127950, '1719328323.jpg', 'Selamat Datang di Toko Kami Batik Amarta \r\nBATIK PRIA PREMIUM LENGAN PANJANG (FULL FURING)\r\nHATI HATI Jangan Terjebak Batik Dengan Harga Murah,\r\nBatik Banyak Model Motif Beda Bahan, Beda Proses Produksi, Beda Kualitas Jadi Tentu Beda Harga\r\n\r\n▪ BATIK AMARTA\r\nAdalah Produsen Batik Solo Tangan Pertama Punya Pabrik Sendiri Dan Sudah Menjual Banyak Koleksi Dari Toko kami Jika Ada Nama Batik Amarta Selain Dari Kami Itu Dipastikan Palsu.\r\n\r\n▪ FOTO PRODUK ASLI 100% Dari Potografer Tanpa edit\r\nJika ada Perbedaan warna kemungkinan terjadi karena adanya perbedaan spesifikasi dan kemampuan layar perangkat anda, tetapi kami mengupayakan warna yang tampil di perangkat anda sesuai dengan warna produk\r\nProduk Yang Kami Jual Jaminan Kualitas Terbaik, Nyaman Dipakai, Bahan Tebal, Tidak Terawang, Adhem Dan Anti Kusut!\r\n\r\nDETAIL PRODUK:\r\n▪ Katun\r\n▪ Dijamin Tidak Luntur\r\n▪ Pakai Lapisan Furing (bikin nyaman dipakai)\r\n▪ Saku/Kantong 1 (depan dalam)\r\n▪ Proses Jahit Spesialis Thailor (bukan konveksi)\r\n\r\n\r\n▪ S (Lingkar Dada 100 - Panjang 68 - Lengan 57\r\n▪ M (Lingkar Dada 104 - Panjang 70 - Lengan 59\r\n▪ L (Lingkar Dada 108 - Panjang 72 - Lengan 61\r\n▪ XL (Lingkar Dada 112 - Panjang 74 - Lengan 62\r\n▪ XXL (Lingkar Dada 116 - Panjang 76 - Lengan 63\r\n▪ XXXL (Lingkar Dada 120 - Panjang 80 - Lengan 64\r\n\r\n▪ Jadwal Pengiriman Hari Senin-Sabtu\r\nOrder sebelum jam 16:00 WIB akan diproses dihari yang sama.\r\nOrder melewati jam 16:00 WIB akan diproses dihari selanjutnya.\r\nHari minggu dan tanggal merah libur, tidak ada pengiriman.\r\nUpdate resi maksimal 1x24jam setelah paket dipickup pihak ekspedisi\r\n\r\n▪ SEMUA PRODUK KAMI GARANSI 100%\r\nJika ada Keluhan Segera Hubungi Lewat Chat,\r\nPesanan sesuai dengan invoice,\r\nPesanan salah kirim, motif/size/barang cacat boleh ditukar,\r\nOngkir PP kami yang tanggung, Terimasih Happy Shopping', '2024-06-25 08:12:03', '2024-06-25 08:12:03'),
(13, 'Baju Batik Pria LS Modern Jumbo Slim Fit AMARTA - S', 'Batik Printing', 'Cerah', 'Katun', 'Modern', 127950, '1719328514.jpg', 'Selamat Datang di Toko Kami Batik Amarta \r\nBATIK PRIA PREMIUM LENGAN PANJANG (FULL FURING)\r\nHATI HATI Jangan Terjebak Batik Dengan Harga Murah,\r\nBatik Banyak Model Motif Beda Bahan, Beda Proses Produksi, Beda Kualitas Jadi Tentu Beda Harga\r\n\r\n▪ BATIK AMARTA\r\nAdalah Produsen Batik Solo Tangan Pertama Punya Pabrik Sendiri Dan Sudah Menjual Banyak Koleksi Dari Toko kami Jika Ada Nama Batik Amarta Selain Dari Kami Itu Dipastikan Palsu.\r\n\r\n▪ FOTO PRODUK ASLI 100% Dari Potografer Tanpa edit\r\nJika ada Perbedaan warna kemungkinan terjadi karena adanya perbedaan spesifikasi dan kemampuan layar perangkat anda, tetapi kami mengupayakan warna yang tampil di perangkat anda sesuai dengan warna produk\r\nProduk Yang Kami Jual Jaminan Kualitas Terbaik, Nyaman Dipakai, Bahan Tebal, Tidak Terawang, Adhem Dan Anti Kusut!\r\n\r\nDETAIL PRODUK:\r\n▪ Katun\r\n▪ Dijamin Tidak Luntur\r\n▪ Pakai Lapisan Furing (bikin nyaman dipakai)\r\n▪ Saku/Kantong 1 (depan dalam)\r\n▪ Proses Jahit Spesialis Thailor (bukan konveksi)\r\n\r\n\r\n▪ S (Lingkar Dada 100 - Panjang 68 - Lengan 57\r\n▪ M (Lingkar Dada 104 - Panjang 70 - Lengan 59\r\n▪ L (Lingkar Dada 108 - Panjang 72 - Lengan 61\r\n▪ XL (Lingkar Dada 112 - Panjang 74 - Lengan 62\r\n▪ XXL (Lingkar Dada 116 - Panjang 76 - Lengan 63\r\n▪ XXXL (Lingkar Dada 120 - Panjang 80 - Lengan 64\r\n\r\n▪ Jadwal Pengiriman Hari Senin-Sabtu\r\nOrder sebelum jam 16:00 WIB akan diproses dihari yang sama.\r\nOrder melewati jam 16:00 WIB akan diproses dihari selanjutnya.\r\nHari minggu dan tanggal merah libur, tidak ada pengiriman.\r\nUpdate resi maksimal 1x24jam setelah paket dipickup pihak ekspedisi\r\n\r\n▪ SEMUA PRODUK KAMI GARANSI 100%\r\nJika ada Keluhan Segera Hubungi Lewat Chat,\r\nPesanan sesuai dengan invoice,\r\nPesanan salah kirim, motif/size/barang cacat boleh ditukar,\r\nOngkir PP kami yang tanggung, Terimasih Happy Shopping', '2024-06-25 08:15:14', '2024-06-25 08:15:14'),
(14, 'Baju Batik Pria LS Premium Jumbo Slim Fit GANESHA - S', 'Batik Cetak', 'Gelap', 'Dolby', 'Premium', 182000, '1719328640.jpg', 'Selamat Datang di Toko Kami Batik Amarta \r\nBATIK PRIA PREMIUM LENGAN PANJANG (FULL FURING)\r\nHATI HATI Jangan Terjebak Batik Dengan Harga Murah,\r\nBatik Banyak Model Motif Beda Bahan, Beda Proses Produksi, Beda Kualitas Jadi Tentu Beda Harga\r\n\r\n▪ BATIK AMARTA\r\nAdalah Produsen Batik Solo Tangan Pertama Punya Pabrik Sendiri Dan Sudah Menjual Banyak Koleksi Dari Toko kami Jika Ada Nama Batik Amarta Selain Dari Kami Itu Dipastikan Palsu.\r\n\r\n▪ FOTO PRODUK ASLI 100% Dari Potografer Tanpa edit\r\nJika ada Perbedaan warna kemungkinan terjadi karena adanya perbedaan spesifikasi dan kemampuan layar perangkat anda, tetapi kami mengupayakan warna yang tampil di perangkat anda sesuai dengan warna produk\r\nProduk Yang Kami Jual Jaminan Kualitas Terbaik, Nyaman Dipakai, Bahan Tebal, Tidak Terawang, Adhem Dan Anti Kusut!\r\n\r\nDETAIL PRODUK:\r\n▪ Dolby\r\n▪ Dijamin Tidak Luntur\r\n▪ Pakai Lapisan Furing (bikin nyaman dipakai)\r\n▪ Saku/Kantong 1 (depan dalam)\r\n▪ Proses Jahit Spesialis Thailor (bukan konveksi)\r\n\r\n\r\n▪ S (Lingkar Dada 100 - Panjang 68 - Lengan 57\r\n▪ M (Lingkar Dada 104 - Panjang 70 - Lengan 59\r\n▪ L (Lingkar Dada 108 - Panjang 72 - Lengan 61\r\n▪ XL (Lingkar Dada 112 - Panjang 74 - Lengan 62\r\n▪ XXL (Lingkar Dada 116 - Panjang 76 - Lengan 63\r\n▪ XXXL (Lingkar Dada 120 - Panjang 80 - Lengan 64\r\n\r\n▪ Jadwal Pengiriman Hari Senin-Sabtu\r\nOrder sebelum jam 16:00 WIB akan diproses dihari yang sama.\r\nOrder melewati jam 16:00 WIB akan diproses dihari selanjutnya.\r\nHari minggu dan tanggal merah libur, tidak ada pengiriman.\r\nUpdate resi maksimal 1x24jam setelah paket dipickup pihak ekspedisi\r\n\r\n▪ SEMUA PRODUK KAMI GARANSI 100%\r\nJika ada Keluhan Segera Hubungi Lewat Chat,\r\nPesanan sesuai dengan invoice,\r\nPesanan salah kirim, motif/size/barang cacat boleh ditukar,\r\nOngkir PP kami yang tanggung, Terimasih Happy Shopping', '2024-06-25 08:17:20', '2024-06-25 08:17:20'),
(15, 'Baju Batik Pria LS Modern Jumbo SLim Fit BLACKPINK - S', 'Batik Printing', 'Sedang', 'Polyester', 'Modern', 130000, '1719328746.jpg', 'Selamat Datang di Toko Kami Batik Amarta \r\nBATIK PRIA PREMIUM LENGAN PANJANG (FULL FURING)\r\nHATI HATI Jangan Terjebak Batik Dengan Harga Murah,\r\nBatik Banyak Model Motif Beda Bahan, Beda Proses Produksi, Beda Kualitas Jadi Tentu Beda Harga\r\n\r\n▪ BATIK AMARTA\r\nAdalah Produsen Batik Solo Tangan Pertama Punya Pabrik Sendiri Dan Sudah Menjual Banyak Koleksi Dari Toko kami Jika Ada Nama Batik Amarta Selain Dari Kami Itu Dipastikan Palsu.\r\n\r\n▪ FOTO PRODUK ASLI 100% Dari Potografer Tanpa edit\r\nJika ada Perbedaan warna kemungkinan terjadi karena adanya perbedaan spesifikasi dan kemampuan layar perangkat anda, tetapi kami mengupayakan warna yang tampil di perangkat anda sesuai dengan warna produk\r\nProduk Yang Kami Jual Jaminan Kualitas Terbaik, Nyaman Dipakai, Bahan Tebal, Tidak Terawang, Adhem Dan Anti Kusut!\r\n\r\nDETAIL PRODUK:\r\n▪ Polyester\r\n▪ Dijamin Tidak Luntur\r\n▪ Pakai Lapisan Furing (bikin nyaman dipakai)\r\n▪ Saku/Kantong 1 (depan dalam)\r\n▪ Proses Jahit Spesialis Thailor (bukan konveksi)\r\n\r\n\r\n▪ S (Lingkar Dada 100 - Panjang 68 - Lengan 57\r\n▪ M (Lingkar Dada 104 - Panjang 70 - Lengan 59\r\n▪ L (Lingkar Dada 108 - Panjang 72 - Lengan 61\r\n▪ XL (Lingkar Dada 112 - Panjang 74 - Lengan 62\r\n▪ XXL (Lingkar Dada 116 - Panjang 76 - Lengan 63\r\n▪ XXXL (Lingkar Dada 120 - Panjang 80 - Lengan 64\r\n\r\n▪ Jadwal Pengiriman Hari Senin-Sabtu\r\nOrder sebelum jam 16:00 WIB akan diproses dihari yang sama.\r\nOrder melewati jam 16:00 WIB akan diproses dihari selanjutnya.\r\nHari minggu dan tanggal merah libur, tidak ada pengiriman.\r\nUpdate resi maksimal 1x24jam setelah paket dipickup pihak ekspedisi\r\n\r\n▪ SEMUA PRODUK KAMI GARANSI 100%\r\nJika ada Keluhan Segera Hubungi Lewat Chat,\r\nPesanan sesuai dengan invoice,\r\nPesanan salah kirim, motif/size/barang cacat boleh ditukar,\r\nOngkir PP kami yang tanggung, Terimasih Happy Shopping', '2024-06-25 08:19:06', '2024-06-25 08:19:06'),
(16, 'Batik Pria LS Slim Fit Modern Jumbo PIRAMID ABU - S', 'Batik Tulis', 'Sedang', 'Polyester', 'Modern', 132000, '1719328911.jpg', 'Selamat Datang di Toko Kami Batik Amarta \r\nBATIK PRIA PREMIUM LENGAN PANJANG (FULL FURING)\r\nHATI HATI Jangan Terjebak Batik Dengan Harga Murah,\r\nBatik Banyak Model Motif Beda Bahan, Beda Proses Produksi, Beda Kualitas Jadi Tentu Beda Harga\r\n\r\n▪ BATIK AMARTA\r\nAdalah Produsen Batik Solo Tangan Pertama Punya Pabrik Sendiri Dan Sudah Menjual Banyak Koleksi Dari Toko kami Jika Ada Nama Batik Amarta Selain Dari Kami Itu Dipastikan Palsu.\r\n\r\n▪ FOTO PRODUK ASLI 100% Dari Potografer Tanpa edit\r\nJika ada Perbedaan warna kemungkinan terjadi karena adanya perbedaan spesifikasi dan kemampuan layar perangkat anda, tetapi kami mengupayakan warna yang tampil di perangkat anda sesuai dengan warna produk\r\nProduk Yang Kami Jual Jaminan Kualitas Terbaik, Nyaman Dipakai, Bahan Tebal, Tidak Terawang, Adhem Dan Anti Kusut!\r\n\r\nDETAIL PRODUK:\r\n▪ Polyester\r\n▪ Dijamin Tidak Luntur\r\n▪ Pakai Lapisan Furing (bikin nyaman dipakai)\r\n▪ Saku/Kantong 1 (depan dalam)\r\n▪ Proses Jahit Spesialis Thailor (bukan konveksi)\r\n\r\n\r\n▪ S (Lingkar Dada 100 - Panjang 68 - Lengan 57\r\n▪ M (Lingkar Dada 104 - Panjang 70 - Lengan 59\r\n▪ L (Lingkar Dada 108 - Panjang 72 - Lengan 61\r\n▪ XL (Lingkar Dada 112 - Panjang 74 - Lengan 62\r\n▪ XXL (Lingkar Dada 116 - Panjang 76 - Lengan 63\r\n▪ XXXL (Lingkar Dada 120 - Panjang 80 - Lengan 64\r\n\r\n▪ Jadwal Pengiriman Hari Senin-Sabtu\r\nOrder sebelum jam 16:00 WIB akan diproses dihari yang sama.\r\nOrder melewati jam 16:00 WIB akan diproses dihari selanjutnya.\r\nHari minggu dan tanggal merah libur, tidak ada pengiriman.\r\nUpdate resi maksimal 1x24jam setelah paket dipickup pihak ekspedisi\r\n\r\n▪ SEMUA PRODUK KAMI GARANSI 100%\r\nJika ada Keluhan Segera Hubungi Lewat Chat,\r\nPesanan sesuai dengan invoice,\r\nPesanan salah kirim, motif/size/barang cacat boleh ditukar,\r\nOngkir PP kami yang tanggung, Terimasih Happy Shopping', '2024-06-25 08:20:42', '2024-06-25 08:21:51'),
(17, 'Batik Pria LS Modern Slim Fit MERAK ABU MUDA - S', 'Batik Printing', 'Sedang', 'Dolby', 'Modern', 130000, '1719328990.jpg', 'Selamat Datang di Toko Kami Batik Amarta \r\nBATIK PRIA PREMIUM LENGAN PANJANG (FULL FURING)\r\nHATI HATI Jangan Terjebak Batik Dengan Harga Murah,\r\nBatik Banyak Model Motif Beda Bahan, Beda Proses Produksi, Beda Kualitas Jadi Tentu Beda Harga\r\n\r\n▪ BATIK AMARTA\r\nAdalah Produsen Batik Solo Tangan Pertama Punya Pabrik Sendiri Dan Sudah Menjual Banyak Koleksi Dari Toko kami Jika Ada Nama Batik Amarta Selain Dari Kami Itu Dipastikan Palsu.\r\n\r\n▪ FOTO PRODUK ASLI 100% Dari Potografer Tanpa edit\r\nJika ada Perbedaan warna kemungkinan terjadi karena adanya perbedaan spesifikasi dan kemampuan layar perangkat anda, tetapi kami mengupayakan warna yang tampil di perangkat anda sesuai dengan warna produk\r\nProduk Yang Kami Jual Jaminan Kualitas Terbaik, Nyaman Dipakai, Bahan Tebal, Tidak Terawang, Adhem Dan Anti Kusut!\r\n\r\nDETAIL PRODUK:\r\n▪ Dolby\r\n▪ Dijamin Tidak Luntur\r\n▪ Pakai Lapisan Furing (bikin nyaman dipakai)\r\n▪ Saku/Kantong 1 (depan dalam)\r\n▪ Proses Jahit Spesialis Thailor (bukan konveksi)\r\n\r\n\r\n▪ S (Lingkar Dada 100 - Panjang 68 - Lengan 57\r\n▪ M (Lingkar Dada 104 - Panjang 70 - Lengan 59\r\n▪ L (Lingkar Dada 108 - Panjang 72 - Lengan 61\r\n▪ XL (Lingkar Dada 112 - Panjang 74 - Lengan 62\r\n▪ XXL (Lingkar Dada 116 - Panjang 76 - Lengan 63\r\n▪ XXXL (Lingkar Dada 120 - Panjang 80 - Lengan 64\r\n\r\n▪ Jadwal Pengiriman Hari Senin-Sabtu\r\nOrder sebelum jam 16:00 WIB akan diproses dihari yang sama.\r\nOrder melewati jam 16:00 WIB akan diproses dihari selanjutnya.\r\nHari minggu dan tanggal merah libur, tidak ada pengiriman.\r\nUpdate resi maksimal 1x24jam setelah paket dipickup pihak ekspedisi\r\n\r\n▪ SEMUA PRODUK KAMI GARANSI 100%\r\nJika ada Keluhan Segera Hubungi Lewat Chat,\r\nPesanan sesuai dengan invoice,\r\nPesanan salah kirim, motif/size/barang cacat boleh ditukar,\r\nOngkir PP kami yang tanggung, Terimasih Happy Shopping', '2024-06-25 08:23:10', '2024-06-25 08:23:10'),
(18, 'Baju Batik Pria LS Modern Premium Slim Fit MANTAP JIWA - S', 'Batik Cetak', 'Sedang', 'Katun', 'Premium', 134000, '1719329093.jpg', 'Selamat Datang di Toko Kami Batik Amarta \r\nBATIK PRIA PREMIUM LENGAN PANJANG (FULL FURING)\r\nHATI HATI Jangan Terjebak Batik Dengan Harga Murah,\r\nBatik Banyak Model Motif Beda Bahan, Beda Proses Produksi, Beda Kualitas Jadi Tentu Beda Harga\r\n\r\n▪ BATIK AMARTA\r\nAdalah Produsen Batik Solo Tangan Pertama Punya Pabrik Sendiri Dan Sudah Menjual Banyak Koleksi Dari Toko kami Jika Ada Nama Batik Amarta Selain Dari Kami Itu Dipastikan Palsu.\r\n\r\n▪ FOTO PRODUK ASLI 100% Dari Potografer Tanpa edit\r\nJika ada Perbedaan warna kemungkinan terjadi karena adanya perbedaan spesifikasi dan kemampuan layar perangkat anda, tetapi kami mengupayakan warna yang tampil di perangkat anda sesuai dengan warna produk\r\nProduk Yang Kami Jual Jaminan Kualitas Terbaik, Nyaman Dipakai, Bahan Tebal, Tidak Terawang, Adhem Dan Anti Kusut!\r\n\r\nDETAIL PRODUK:\r\n▪ Katun\r\n▪ Dijamin Tidak Luntur\r\n▪ Pakai Lapisan Furing (bikin nyaman dipakai)\r\n▪ Saku/Kantong 1 (depan dalam)\r\n▪ Proses Jahit Spesialis Thailor (bukan konveksi)\r\n\r\n\r\n▪ S (Lingkar Dada 100 - Panjang 68 - Lengan 57\r\n▪ M (Lingkar Dada 104 - Panjang 70 - Lengan 59\r\n▪ L (Lingkar Dada 108 - Panjang 72 - Lengan 61\r\n▪ XL (Lingkar Dada 112 - Panjang 74 - Lengan 62\r\n▪ XXL (Lingkar Dada 116 - Panjang 76 - Lengan 63\r\n▪ XXXL (Lingkar Dada 120 - Panjang 80 - Lengan 64\r\n\r\n▪ Jadwal Pengiriman Hari Senin-Sabtu\r\nOrder sebelum jam 16:00 WIB akan diproses dihari yang sama.\r\nOrder melewati jam 16:00 WIB akan diproses dihari selanjutnya.\r\nHari minggu dan tanggal merah libur, tidak ada pengiriman.\r\nUpdate resi maksimal 1x24jam setelah paket dipickup pihak ekspedisi\r\n\r\n▪ SEMUA PRODUK KAMI GARANSI 100%\r\nJika ada Keluhan Segera Hubungi Lewat Chat,\r\nPesanan sesuai dengan invoice,\r\nPesanan salah kirim, motif/size/barang cacat boleh ditukar,\r\nOngkir PP kami yang tanggung, Terimasih Happy Shopping', '2024-06-25 08:24:53', '2024-06-25 08:24:53'),
(19, 'Baju Batik Pria LS Premium Jumbo Slim Fit ABS MRH X - S', 'Batik Printing', 'Sedang', 'Polyester', 'Premium', 127950, '1719329170.jpg', 'Selamat Datang di Toko Kami Batik Amarta \r\nBATIK PRIA PREMIUM LENGAN PANJANG (FULL FURING)\r\nHATI HATI Jangan Terjebak Batik Dengan Harga Murah,\r\nBatik Banyak Model Motif Beda Bahan, Beda Proses Produksi, Beda Kualitas Jadi Tentu Beda Harga\r\n\r\n▪ BATIK AMARTA\r\nAdalah Produsen Batik Solo Tangan Pertama Punya Pabrik Sendiri Dan Sudah Menjual Banyak Koleksi Dari Toko kami Jika Ada Nama Batik Amarta Selain Dari Kami Itu Dipastikan Palsu.\r\n\r\n▪ FOTO PRODUK ASLI 100% Dari Potografer Tanpa edit\r\nJika ada Perbedaan warna kemungkinan terjadi karena adanya perbedaan spesifikasi dan kemampuan layar perangkat anda, tetapi kami mengupayakan warna yang tampil di perangkat anda sesuai dengan warna produk\r\nProduk Yang Kami Jual Jaminan Kualitas Terbaik, Nyaman Dipakai, Bahan Tebal, Tidak Terawang, Adhem Dan Anti Kusut!\r\n\r\nDETAIL PRODUK:\r\n▪ Polyester\r\n▪ Dijamin Tidak Luntur\r\n▪ Pakai Lapisan Furing (bikin nyaman dipakai)\r\n▪ Saku/Kantong 1 (depan dalam)\r\n▪ Proses Jahit Spesialis Thailor (bukan konveksi)\r\n\r\n\r\n▪ S (Lingkar Dada 100 - Panjang 68 - Lengan 57\r\n▪ M (Lingkar Dada 104 - Panjang 70 - Lengan 59\r\n▪ L (Lingkar Dada 108 - Panjang 72 - Lengan 61\r\n▪ XL (Lingkar Dada 112 - Panjang 74 - Lengan 62\r\n▪ XXL (Lingkar Dada 116 - Panjang 76 - Lengan 63\r\n▪ XXXL (Lingkar Dada 120 - Panjang 80 - Lengan 64\r\n\r\n▪ Jadwal Pengiriman Hari Senin-Sabtu\r\nOrder sebelum jam 16:00 WIB akan diproses dihari yang sama.\r\nOrder melewati jam 16:00 WIB akan diproses dihari selanjutnya.\r\nHari minggu dan tanggal merah libur, tidak ada pengiriman.\r\nUpdate resi maksimal 1x24jam setelah paket dipickup pihak ekspedisi\r\n\r\n▪ SEMUA PRODUK KAMI GARANSI 100%\r\nJika ada Keluhan Segera Hubungi Lewat Chat,\r\nPesanan sesuai dengan invoice,\r\nPesanan salah kirim, motif/size/barang cacat boleh ditukar,\r\nOngkir PP kami yang tanggung, Terimasih Happy Shopping', '2024-06-25 08:26:10', '2024-06-25 08:26:10'),
(20, 'Baju Batik Pria LS Modern SLim Fit AWAN MENDUNG - S', 'Batik Tulis', 'Cerah', 'Dolby', 'Modern', 130000, '1719329246.jpg', 'Selamat Datang di Toko Kami Batik Amarta \r\nBATIK PRIA PREMIUM LENGAN PANJANG (FULL FURING)\r\nHATI HATI Jangan Terjebak Batik Dengan Harga Murah,\r\nBatik Banyak Model Motif Beda Bahan, Beda Proses Produksi, Beda Kualitas Jadi Tentu Beda Harga\r\n\r\n▪ BATIK AMARTA\r\nAdalah Produsen Batik Solo Tangan Pertama Punya Pabrik Sendiri Dan Sudah Menjual Banyak Koleksi Dari Toko kami Jika Ada Nama Batik Amarta Selain Dari Kami Itu Dipastikan Palsu.\r\n\r\n▪ FOTO PRODUK ASLI 100% Dari Potografer Tanpa edit\r\nJika ada Perbedaan warna kemungkinan terjadi karena adanya perbedaan spesifikasi dan kemampuan layar perangkat anda, tetapi kami mengupayakan warna yang tampil di perangkat anda sesuai dengan warna produk\r\nProduk Yang Kami Jual Jaminan Kualitas Terbaik, Nyaman Dipakai, Bahan Tebal, Tidak Terawang, Adhem Dan Anti Kusut!\r\n\r\nDETAIL PRODUK:\r\n▪ Dolby\r\n▪ Dijamin Tidak Luntur\r\n▪ Pakai Lapisan Furing (bikin nyaman dipakai)\r\n▪ Saku/Kantong 1 (depan dalam)\r\n▪ Proses Jahit Spesialis Thailor (bukan konveksi)\r\n\r\n\r\n▪ S (Lingkar Dada 100 - Panjang 68 - Lengan 57\r\n▪ M (Lingkar Dada 104 - Panjang 70 - Lengan 59\r\n▪ L (Lingkar Dada 108 - Panjang 72 - Lengan 61\r\n▪ XL (Lingkar Dada 112 - Panjang 74 - Lengan 62\r\n▪ XXL (Lingkar Dada 116 - Panjang 76 - Lengan 63\r\n▪ XXXL (Lingkar Dada 120 - Panjang 80 - Lengan 64\r\n\r\n▪ Jadwal Pengiriman Hari Senin-Sabtu\r\nOrder sebelum jam 16:00 WIB akan diproses dihari yang sama.\r\nOrder melewati jam 16:00 WIB akan diproses dihari selanjutnya.\r\nHari minggu dan tanggal merah libur, tidak ada pengiriman.\r\nUpdate resi maksimal 1x24jam setelah paket dipickup pihak ekspedisi\r\n\r\n▪ SEMUA PRODUK KAMI GARANSI 100%\r\nJika ada Keluhan Segera Hubungi Lewat Chat,\r\nPesanan sesuai dengan invoice,\r\nPesanan salah kirim, motif/size/barang cacat boleh ditukar,\r\nOngkir PP kami yang tanggung, Terimasih Happy Shopping', '2024-06-25 08:27:26', '2024-06-25 08:27:26'),
(21, 'Baju Batik Pria LS Premium Slim Fit BANGO COKLAT - S', 'Batik Cetak', 'Sedang', 'Polyester', 'Premium', 134000, '1719329318.jpg', 'Selamat Datang di Toko Kami Batik Amarta \r\nBATIK PRIA PREMIUM LENGAN PANJANG (FULL FURING)\r\nHATI HATI Jangan Terjebak Batik Dengan Harga Murah,\r\nBatik Banyak Model Motif Beda Bahan, Beda Proses Produksi, Beda Kualitas Jadi Tentu Beda Harga\r\n\r\n▪ BATIK AMARTA\r\nAdalah Produsen Batik Solo Tangan Pertama Punya Pabrik Sendiri Dan Sudah Menjual Banyak Koleksi Dari Toko kami Jika Ada Nama Batik Amarta Selain Dari Kami Itu Dipastikan Palsu.\r\n\r\n▪ FOTO PRODUK ASLI 100% Dari Potografer Tanpa edit\r\nJika ada Perbedaan warna kemungkinan terjadi karena adanya perbedaan spesifikasi dan kemampuan layar perangkat anda, tetapi kami mengupayakan warna yang tampil di perangkat anda sesuai dengan warna produk\r\nProduk Yang Kami Jual Jaminan Kualitas Terbaik, Nyaman Dipakai, Bahan Tebal, Tidak Terawang, Adhem Dan Anti Kusut!\r\n\r\nDETAIL PRODUK:\r\n▪ Polyester\r\n▪ Dijamin Tidak Luntur\r\n▪ Pakai Lapisan Furing (bikin nyaman dipakai)\r\n▪ Saku/Kantong 1 (depan dalam)\r\n▪ Proses Jahit Spesialis Thailor (bukan konveksi)\r\n\r\n\r\n▪ S (Lingkar Dada 100 - Panjang 68 - Lengan 57\r\n▪ M (Lingkar Dada 104 - Panjang 70 - Lengan 59\r\n▪ L (Lingkar Dada 108 - Panjang 72 - Lengan 61\r\n▪ XL (Lingkar Dada 112 - Panjang 74 - Lengan 62\r\n▪ XXL (Lingkar Dada 116 - Panjang 76 - Lengan 63\r\n▪ XXXL (Lingkar Dada 120 - Panjang 80 - Lengan 64\r\n\r\n▪ Jadwal Pengiriman Hari Senin-Sabtu\r\nOrder sebelum jam 16:00 WIB akan diproses dihari yang sama.\r\nOrder melewati jam 16:00 WIB akan diproses dihari selanjutnya.\r\nHari minggu dan tanggal merah libur, tidak ada pengiriman.\r\nUpdate resi maksimal 1x24jam setelah paket dipickup pihak ekspedisi\r\n\r\n▪ SEMUA PRODUK KAMI GARANSI 100%\r\nJika ada Keluhan Segera Hubungi Lewat Chat,\r\nPesanan sesuai dengan invoice,\r\nPesanan salah kirim, motif/size/barang cacat boleh ditukar,\r\nOngkir PP kami yang tanggung, Terimasih Happy Shopping', '2024-06-25 08:28:38', '2024-06-25 08:28:38'),
(22, 'Baju Batik Pria LS Modern Slim Fit Jumbo BORUTO - S', 'Batik Printing', 'Sedang', 'Katun', 'Modern', 127950, '1719329385.jpg', 'Selamat Datang di Toko Kami Batik Amarta \r\nBATIK PRIA PREMIUM LENGAN PANJANG (FULL FURING)\r\nHATI HATI Jangan Terjebak Batik Dengan Harga Murah,\r\nBatik Banyak Model Motif Beda Bahan, Beda Proses Produksi, Beda Kualitas Jadi Tentu Beda Harga\r\n\r\n▪ BATIK AMARTA\r\nAdalah Produsen Batik Solo Tangan Pertama Punya Pabrik Sendiri Dan Sudah Menjual Banyak Koleksi Dari Toko kami Jika Ada Nama Batik Amarta Selain Dari Kami Itu Dipastikan Palsu.\r\n\r\n▪ FOTO PRODUK ASLI 100% Dari Potografer Tanpa edit\r\nJika ada Perbedaan warna kemungkinan terjadi karena adanya perbedaan spesifikasi dan kemampuan layar perangkat anda, tetapi kami mengupayakan warna yang tampil di perangkat anda sesuai dengan warna produk\r\nProduk Yang Kami Jual Jaminan Kualitas Terbaik, Nyaman Dipakai, Bahan Tebal, Tidak Terawang, Adhem Dan Anti Kusut!\r\n\r\nDETAIL PRODUK:\r\n▪ Katun\r\n▪ Dijamin Tidak Luntur\r\n▪ Pakai Lapisan Furing (bikin nyaman dipakai)\r\n▪ Saku/Kantong 1 (depan dalam)\r\n▪ Proses Jahit Spesialis Thailor (bukan konveksi)\r\n\r\n\r\n▪ S (Lingkar Dada 100 - Panjang 68 - Lengan 57\r\n▪ M (Lingkar Dada 104 - Panjang 70 - Lengan 59\r\n▪ L (Lingkar Dada 108 - Panjang 72 - Lengan 61\r\n▪ XL (Lingkar Dada 112 - Panjang 74 - Lengan 62\r\n▪ XXL (Lingkar Dada 116 - Panjang 76 - Lengan 63\r\n▪ XXXL (Lingkar Dada 120 - Panjang 80 - Lengan 64\r\n\r\n▪ Jadwal Pengiriman Hari Senin-Sabtu\r\nOrder sebelum jam 16:00 WIB akan diproses dihari yang sama.\r\nOrder melewati jam 16:00 WIB akan diproses dihari selanjutnya.\r\nHari minggu dan tanggal merah libur, tidak ada pengiriman.\r\nUpdate resi maksimal 1x24jam setelah paket dipickup pihak ekspedisi\r\n\r\n▪ SEMUA PRODUK KAMI GARANSI 100%\r\nJika ada Keluhan Segera Hubungi Lewat Chat,\r\nPesanan sesuai dengan invoice,\r\nPesanan salah kirim, motif/size/barang cacat boleh ditukar,\r\nOngkir PP kami yang tanggung, Terimasih Happy Shopping', '2024-06-25 08:29:45', '2024-06-25 08:29:45'),
(23, 'Baju Batik Pria LS Slim Fit Premium Jumbo GADING KUNING - S', 'Batik Tulis', 'Cerah', 'Dolby', 'Premium', 130000, '1719329445.jpg', 'Selamat Datang di Toko Kami Batik Amarta \r\nBATIK PRIA PREMIUM LENGAN PANJANG (FULL FURING)\r\nHATI HATI Jangan Terjebak Batik Dengan Harga Murah,\r\nBatik Banyak Model Motif Beda Bahan, Beda Proses Produksi, Beda Kualitas Jadi Tentu Beda Harga\r\n\r\n▪ BATIK AMARTA\r\nAdalah Produsen Batik Solo Tangan Pertama Punya Pabrik Sendiri Dan Sudah Menjual Banyak Koleksi Dari Toko kami Jika Ada Nama Batik Amarta Selain Dari Kami Itu Dipastikan Palsu.\r\n\r\n▪ FOTO PRODUK ASLI 100% Dari Potografer Tanpa edit\r\nJika ada Perbedaan warna kemungkinan terjadi karena adanya perbedaan spesifikasi dan kemampuan layar perangkat anda, tetapi kami mengupayakan warna yang tampil di perangkat anda sesuai dengan warna produk\r\nProduk Yang Kami Jual Jaminan Kualitas Terbaik, Nyaman Dipakai, Bahan Tebal, Tidak Terawang, Adhem Dan Anti Kusut!\r\n\r\nDETAIL PRODUK:\r\n▪ Dolby\r\n▪ Dijamin Tidak Luntur\r\n▪ Pakai Lapisan Furing (bikin nyaman dipakai)\r\n▪ Saku/Kantong 1 (depan dalam)\r\n▪ Proses Jahit Spesialis Thailor (bukan konveksi)\r\n\r\n\r\n▪ S (Lingkar Dada 100 - Panjang 68 - Lengan 57\r\n▪ M (Lingkar Dada 104 - Panjang 70 - Lengan 59\r\n▪ L (Lingkar Dada 108 - Panjang 72 - Lengan 61\r\n▪ XL (Lingkar Dada 112 - Panjang 74 - Lengan 62\r\n▪ XXL (Lingkar Dada 116 - Panjang 76 - Lengan 63\r\n▪ XXXL (Lingkar Dada 120 - Panjang 80 - Lengan 64\r\n\r\n▪ Jadwal Pengiriman Hari Senin-Sabtu\r\nOrder sebelum jam 16:00 WIB akan diproses dihari yang sama.\r\nOrder melewati jam 16:00 WIB akan diproses dihari selanjutnya.\r\nHari minggu dan tanggal merah libur, tidak ada pengiriman.\r\nUpdate resi maksimal 1x24jam setelah paket dipickup pihak ekspedisi\r\n\r\n▪ SEMUA PRODUK KAMI GARANSI 100%\r\nJika ada Keluhan Segera Hubungi Lewat Chat,\r\nPesanan sesuai dengan invoice,\r\nPesanan salah kirim, motif/size/barang cacat boleh ditukar,\r\nOngkir PP kami yang tanggung, Terimasih Happy Shopping', '2024-06-25 08:30:45', '2024-06-25 08:30:45'),
(24, 'Baju Batik Pria LS Modern Jumbo Slim Fit GEGOT - S', 'Batik Cetak', 'Sedang', 'Katun', 'Modern', 127950, '1719329504.jpg', 'Selamat Datang di Toko Kami Batik Amarta \r\nBATIK PRIA PREMIUM LENGAN PANJANG (FULL FURING)\r\nHATI HATI Jangan Terjebak Batik Dengan Harga Murah,\r\nBatik Banyak Model Motif Beda Bahan, Beda Proses Produksi, Beda Kualitas Jadi Tentu Beda Harga\r\n\r\n▪ BATIK AMARTA\r\nAdalah Produsen Batik Solo Tangan Pertama Punya Pabrik Sendiri Dan Sudah Menjual Banyak Koleksi Dari Toko kami Jika Ada Nama Batik Amarta Selain Dari Kami Itu Dipastikan Palsu.\r\n\r\n▪ FOTO PRODUK ASLI 100% Dari Potografer Tanpa edit\r\nJika ada Perbedaan warna kemungkinan terjadi karena adanya perbedaan spesifikasi dan kemampuan layar perangkat anda, tetapi kami mengupayakan warna yang tampil di perangkat anda sesuai dengan warna produk\r\nProduk Yang Kami Jual Jaminan Kualitas Terbaik, Nyaman Dipakai, Bahan Tebal, Tidak Terawang, Adhem Dan Anti Kusut!\r\n\r\nDETAIL PRODUK:\r\n▪ Katun\r\n▪ Dijamin Tidak Luntur\r\n▪ Pakai Lapisan Furing (bikin nyaman dipakai)\r\n▪ Saku/Kantong 1 (depan dalam)\r\n▪ Proses Jahit Spesialis Thailor (bukan konveksi)\r\n\r\n\r\n▪ S (Lingkar Dada 100 - Panjang 68 - Lengan 57\r\n▪ M (Lingkar Dada 104 - Panjang 70 - Lengan 59\r\n▪ L (Lingkar Dada 108 - Panjang 72 - Lengan 61\r\n▪ XL (Lingkar Dada 112 - Panjang 74 - Lengan 62\r\n▪ XXL (Lingkar Dada 116 - Panjang 76 - Lengan 63\r\n▪ XXXL (Lingkar Dada 120 - Panjang 80 - Lengan 64\r\n\r\n▪ Jadwal Pengiriman Hari Senin-Sabtu\r\nOrder sebelum jam 16:00 WIB akan diproses dihari yang sama.\r\nOrder melewati jam 16:00 WIB akan diproses dihari selanjutnya.\r\nHari minggu dan tanggal merah libur, tidak ada pengiriman.\r\nUpdate resi maksimal 1x24jam setelah paket dipickup pihak ekspedisi\r\n\r\n▪ SEMUA PRODUK KAMI GARANSI 100%\r\nJika ada Keluhan Segera Hubungi Lewat Chat,\r\nPesanan sesuai dengan invoice,\r\nPesanan salah kirim, motif/size/barang cacat boleh ditukar,\r\nOngkir PP kami yang tanggung, Terimasih Happy Shopping', '2024-06-25 08:31:44', '2024-06-25 08:31:44'),
(25, 'Baju Batik Pria LS Modern Slim Fit Jumbo JAGAD ABU - S', 'Batik Printing', 'Cerah', 'Polyester', 'Modern', 127950, '1719329570.jpg', 'Selamat Datang di Toko Kami Batik Amarta \r\nBATIK PRIA PREMIUM LENGAN PANJANG (FULL FURING)\r\nHATI HATI Jangan Terjebak Batik Dengan Harga Murah,\r\nBatik Banyak Model Motif Beda Bahan, Beda Proses Produksi, Beda Kualitas Jadi Tentu Beda Harga\r\n\r\n▪ BATIK AMARTA\r\nAdalah Produsen Batik Solo Tangan Pertama Punya Pabrik Sendiri Dan Sudah Menjual Banyak Koleksi Dari Toko kami Jika Ada Nama Batik Amarta Selain Dari Kami Itu Dipastikan Palsu.\r\n\r\n▪ FOTO PRODUK ASLI 100% Dari Potografer Tanpa edit\r\nJika ada Perbedaan warna kemungkinan terjadi karena adanya perbedaan spesifikasi dan kemampuan layar perangkat anda, tetapi kami mengupayakan warna yang tampil di perangkat anda sesuai dengan warna produk\r\nProduk Yang Kami Jual Jaminan Kualitas Terbaik, Nyaman Dipakai, Bahan Tebal, Tidak Terawang, Adhem Dan Anti Kusut!\r\n\r\nDETAIL PRODUK:\r\n▪ Polyester\r\n▪ Dijamin Tidak Luntur\r\n▪ Pakai Lapisan Furing (bikin nyaman dipakai)\r\n▪ Saku/Kantong 1 (depan dalam)\r\n▪ Proses Jahit Spesialis Thailor (bukan konveksi)\r\n\r\n\r\n▪ S (Lingkar Dada 100 - Panjang 68 - Lengan 57\r\n▪ M (Lingkar Dada 104 - Panjang 70 - Lengan 59\r\n▪ L (Lingkar Dada 108 - Panjang 72 - Lengan 61\r\n▪ XL (Lingkar Dada 112 - Panjang 74 - Lengan 62\r\n▪ XXL (Lingkar Dada 116 - Panjang 76 - Lengan 63\r\n▪ XXXL (Lingkar Dada 120 - Panjang 80 - Lengan 64\r\n\r\n▪ Jadwal Pengiriman Hari Senin-Sabtu\r\nOrder sebelum jam 16:00 WIB akan diproses dihari yang sama.\r\nOrder melewati jam 16:00 WIB akan diproses dihari selanjutnya.\r\nHari minggu dan tanggal merah libur, tidak ada pengiriman.\r\nUpdate resi maksimal 1x24jam setelah paket dipickup pihak ekspedisi\r\n\r\n▪ SEMUA PRODUK KAMI GARANSI 100%\r\nJika ada Keluhan Segera Hubungi Lewat Chat,\r\nPesanan sesuai dengan invoice,\r\nPesanan salah kirim, motif/size/barang cacat boleh ditukar,\r\nOngkir PP kami yang tanggung, Terimasih Happy Shopping', '2024-06-25 08:32:50', '2024-06-25 08:32:50'),
(26, 'Baju Batik Pria LS Premium Slim Fit KAWUNG TOSCA - S', 'Batik Tulis', 'Cerah', 'Dolby', 'Premium', 127950, '1719329625.jpg', 'Selamat Datang di Toko Kami Batik Amarta \r\nBATIK PRIA PREMIUM LENGAN PANJANG (FULL FURING)\r\nHATI HATI Jangan Terjebak Batik Dengan Harga Murah,\r\nBatik Banyak Model Motif Beda Bahan, Beda Proses Produksi, Beda Kualitas Jadi Tentu Beda Harga\r\n\r\n▪ BATIK AMARTA\r\nAdalah Produsen Batik Solo Tangan Pertama Punya Pabrik Sendiri Dan Sudah Menjual Banyak Koleksi Dari Toko kami Jika Ada Nama Batik Amarta Selain Dari Kami Itu Dipastikan Palsu.\r\n\r\n▪ FOTO PRODUK ASLI 100% Dari Potografer Tanpa edit\r\nJika ada Perbedaan warna kemungkinan terjadi karena adanya perbedaan spesifikasi dan kemampuan layar perangkat anda, tetapi kami mengupayakan warna yang tampil di perangkat anda sesuai dengan warna produk\r\nProduk Yang Kami Jual Jaminan Kualitas Terbaik, Nyaman Dipakai, Bahan Tebal, Tidak Terawang, Adhem Dan Anti Kusut!\r\n\r\nDETAIL PRODUK:\r\n▪ Dolby\r\n▪ Dijamin Tidak Luntur\r\n▪ Pakai Lapisan Furing (bikin nyaman dipakai)\r\n▪ Saku/Kantong 1 (depan dalam)\r\n▪ Proses Jahit Spesialis Thailor (bukan konveksi)\r\n\r\n\r\n▪ S (Lingkar Dada 100 - Panjang 68 - Lengan 57\r\n▪ M (Lingkar Dada 104 - Panjang 70 - Lengan 59\r\n▪ L (Lingkar Dada 108 - Panjang 72 - Lengan 61\r\n▪ XL (Lingkar Dada 112 - Panjang 74 - Lengan 62\r\n▪ XXL (Lingkar Dada 116 - Panjang 76 - Lengan 63\r\n▪ XXXL (Lingkar Dada 120 - Panjang 80 - Lengan 64\r\n\r\n▪ Jadwal Pengiriman Hari Senin-Sabtu\r\nOrder sebelum jam 16:00 WIB akan diproses dihari yang sama.\r\nOrder melewati jam 16:00 WIB akan diproses dihari selanjutnya.\r\nHari minggu dan tanggal merah libur, tidak ada pengiriman.\r\nUpdate resi maksimal 1x24jam setelah paket dipickup pihak ekspedisi\r\n\r\n▪ SEMUA PRODUK KAMI GARANSI 100%\r\nJika ada Keluhan Segera Hubungi Lewat Chat,\r\nPesanan sesuai dengan invoice,\r\nPesanan salah kirim, motif/size/barang cacat boleh ditukar,\r\nOngkir PP kami yang tanggung, Terimasih Happy Shopping', '2024-06-25 08:33:45', '2024-06-25 08:33:45'),
(27, 'Baju Batik Pria LS Premium Slim Fit KANDAS ABU - S', 'Batik Cetak', 'Sedang', 'Katun', 'Premium', 130000, '1719329680.jpg', 'Selamat Datang di Toko Kami Batik Amarta \r\nBATIK PRIA PREMIUM LENGAN PANJANG (FULL FURING)\r\nHATI HATI Jangan Terjebak Batik Dengan Harga Murah,\r\nBatik Banyak Model Motif Beda Bahan, Beda Proses Produksi, Beda Kualitas Jadi Tentu Beda Harga\r\n\r\n▪ BATIK AMARTA\r\nAdalah Produsen Batik Solo Tangan Pertama Punya Pabrik Sendiri Dan Sudah Menjual Banyak Koleksi Dari Toko kami Jika Ada Nama Batik Amarta Selain Dari Kami Itu Dipastikan Palsu.\r\n\r\n▪ FOTO PRODUK ASLI 100% Dari Potografer Tanpa edit\r\nJika ada Perbedaan warna kemungkinan terjadi karena adanya perbedaan spesifikasi dan kemampuan layar perangkat anda, tetapi kami mengupayakan warna yang tampil di perangkat anda sesuai dengan warna produk\r\nProduk Yang Kami Jual Jaminan Kualitas Terbaik, Nyaman Dipakai, Bahan Tebal, Tidak Terawang, Adhem Dan Anti Kusut!\r\n\r\nDETAIL PRODUK:\r\n▪ Katun\r\n▪ Dijamin Tidak Luntur\r\n▪ Pakai Lapisan Furing (bikin nyaman dipakai)\r\n▪ Saku/Kantong 1 (depan dalam)\r\n▪ Proses Jahit Spesialis Thailor (bukan konveksi)\r\n\r\n\r\n▪ S (Lingkar Dada 100 - Panjang 68 - Lengan 57\r\n▪ M (Lingkar Dada 104 - Panjang 70 - Lengan 59\r\n▪ L (Lingkar Dada 108 - Panjang 72 - Lengan 61\r\n▪ XL (Lingkar Dada 112 - Panjang 74 - Lengan 62\r\n▪ XXL (Lingkar Dada 116 - Panjang 76 - Lengan 63\r\n▪ XXXL (Lingkar Dada 120 - Panjang 80 - Lengan 64\r\n\r\n▪ Jadwal Pengiriman Hari Senin-Sabtu\r\nOrder sebelum jam 16:00 WIB akan diproses dihari yang sama.\r\nOrder melewati jam 16:00 WIB akan diproses dihari selanjutnya.\r\nHari minggu dan tanggal merah libur, tidak ada pengiriman.\r\nUpdate resi maksimal 1x24jam setelah paket dipickup pihak ekspedisi\r\n\r\n▪ SEMUA PRODUK KAMI GARANSI 100%\r\nJika ada Keluhan Segera Hubungi Lewat Chat,\r\nPesanan sesuai dengan invoice,\r\nPesanan salah kirim, motif/size/barang cacat boleh ditukar,\r\nOngkir PP kami yang tanggung, Terimasih Happy Shopping', '2024-06-25 08:34:40', '2024-06-25 08:34:40'),
(28, 'Baju Batik Pria LS Modern Slim Fit Jumbo MERAK ABU TUA - S', 'Batik Tulis', 'Sedang', 'Katun', 'Modern', 127950, '1719329752.jpg', 'Selamat Datang di Toko Kami Batik Amarta \r\nBATIK PRIA PREMIUM LENGAN PANJANG (FULL FURING)\r\nHATI HATI Jangan Terjebak Batik Dengan Harga Murah,\r\nBatik Banyak Model Motif Beda Bahan, Beda Proses Produksi, Beda Kualitas Jadi Tentu Beda Harga\r\n\r\n▪ BATIK AMARTA\r\nAdalah Produsen Batik Solo Tangan Pertama Punya Pabrik Sendiri Dan Sudah Menjual Banyak Koleksi Dari Toko kami Jika Ada Nama Batik Amarta Selain Dari Kami Itu Dipastikan Palsu.\r\n\r\n▪ FOTO PRODUK ASLI 100% Dari Potografer Tanpa edit\r\nJika ada Perbedaan warna kemungkinan terjadi karena adanya perbedaan spesifikasi dan kemampuan layar perangkat anda, tetapi kami mengupayakan warna yang tampil di perangkat anda sesuai dengan warna produk\r\nProduk Yang Kami Jual Jaminan Kualitas Terbaik, Nyaman Dipakai, Bahan Tebal, Tidak Terawang, Adhem Dan Anti Kusut!\r\n\r\nDETAIL PRODUK:\r\n▪ Katun\r\n▪ Dijamin Tidak Luntur\r\n▪ Pakai Lapisan Furing (bikin nyaman dipakai)\r\n▪ Saku/Kantong 1 (depan dalam)\r\n▪ Proses Jahit Spesialis Thailor (bukan konveksi)\r\n\r\n\r\n▪ S (Lingkar Dada 100 - Panjang 68 - Lengan 57\r\n▪ M (Lingkar Dada 104 - Panjang 70 - Lengan 59\r\n▪ L (Lingkar Dada 108 - Panjang 72 - Lengan 61\r\n▪ XL (Lingkar Dada 112 - Panjang 74 - Lengan 62\r\n▪ XXL (Lingkar Dada 116 - Panjang 76 - Lengan 63\r\n▪ XXXL (Lingkar Dada 120 - Panjang 80 - Lengan 64\r\n\r\n▪ Jadwal Pengiriman Hari Senin-Sabtu\r\nOrder sebelum jam 16:00 WIB akan diproses dihari yang sama.\r\nOrder melewati jam 16:00 WIB akan diproses dihari selanjutnya.\r\nHari minggu dan tanggal merah libur, tidak ada pengiriman.\r\nUpdate resi maksimal 1x24jam setelah paket dipickup pihak ekspedisi\r\n\r\n▪ SEMUA PRODUK KAMI GARANSI 100%\r\nJika ada Keluhan Segera Hubungi Lewat Chat,\r\nPesanan sesuai dengan invoice,\r\nPesanan salah kirim, motif/size/barang cacat boleh ditukar,\r\nOngkir PP kami yang tanggung, Terimasih Happy Shopping', '2024-06-25 08:35:52', '2024-06-25 08:35:52'),
(29, 'Baju Batik Pria LS Modern Slim Fit Jumbo Kasual PRANAWA - S', 'Batik Printing', 'Gelap', 'Katun', 'Modern', 127950, '1719329845.jpg', 'Selamat Datang di Toko Kami Batik Amarta \r\nBATIK PRIA PREMIUM LENGAN PANJANG (FULL FURING)\r\nHATI HATI Jangan Terjebak Batik Dengan Harga Murah,\r\nBatik Banyak Model Motif Beda Bahan, Beda Proses Produksi, Beda Kualitas Jadi Tentu Beda Harga\r\n\r\n▪ BATIK AMARTA\r\nAdalah Produsen Batik Solo Tangan Pertama Punya Pabrik Sendiri Dan Sudah Menjual Banyak Koleksi Dari Toko kami Jika Ada Nama Batik Amarta Selain Dari Kami Itu Dipastikan Palsu.\r\n\r\n▪ FOTO PRODUK ASLI 100% Dari Potografer Tanpa edit\r\nJika ada Perbedaan warna kemungkinan terjadi karena adanya perbedaan spesifikasi dan kemampuan layar perangkat anda, tetapi kami mengupayakan warna yang tampil di perangkat anda sesuai dengan warna produk\r\nProduk Yang Kami Jual Jaminan Kualitas Terbaik, Nyaman Dipakai, Bahan Tebal, Tidak Terawang, Adhem Dan Anti Kusut!\r\n\r\nDETAIL PRODUK:\r\n▪ Katun\r\n▪ Dijamin Tidak Luntur\r\n▪ Pakai Lapisan Furing (bikin nyaman dipakai)\r\n▪ Saku/Kantong 1 (depan dalam)\r\n▪ Proses Jahit Spesialis Thailor (bukan konveksi)\r\n\r\n\r\n▪ S (Lingkar Dada 100 - Panjang 68 - Lengan 57\r\n▪ M (Lingkar Dada 104 - Panjang 70 - Lengan 59\r\n▪ L (Lingkar Dada 108 - Panjang 72 - Lengan 61\r\n▪ XL (Lingkar Dada 112 - Panjang 74 - Lengan 62\r\n▪ XXL (Lingkar Dada 116 - Panjang 76 - Lengan 63\r\n▪ XXXL (Lingkar Dada 120 - Panjang 80 - Lengan 64\r\n\r\n▪ Jadwal Pengiriman Hari Senin-Sabtu\r\nOrder sebelum jam 16:00 WIB akan diproses dihari yang sama.\r\nOrder melewati jam 16:00 WIB akan diproses dihari selanjutnya.\r\nHari minggu dan tanggal merah libur, tidak ada pengiriman.\r\nUpdate resi maksimal 1x24jam setelah paket dipickup pihak ekspedisi\r\n\r\n▪ SEMUA PRODUK KAMI GARANSI 100%\r\nJika ada Keluhan Segera Hubungi Lewat Chat,\r\nPesanan sesuai dengan invoice,\r\nPesanan salah kirim, motif/size/barang cacat boleh ditukar,\r\nOngkir PP kami yang tanggung, Terimasih Happy Shopping', '2024-06-25 08:37:25', '2024-06-25 08:37:25'),
(31, 'Baju Batik Pria LS Premium Jumbo Slim Fit SWGL IJO - S', 'Batik Cetak', 'Gelap', 'Polyester', 'Premium', 127950, '1724143035.jpg', 'Selamat Datang di Toko Kami Batik Amarta\r\nBATIK PRIA PREMIUM LENGAN PANJANG (FULL FURING)\r\nHATI HATI Jangan Terjebak Batik Dengan Harga Murah,\r\nBatik Banyak Model Motif Beda Bahan, Beda Proses Produksi, Beda Kualitas Jadi Tentu Beda Harga\r\n\r\n▪ BATIK AMARTA\r\nAdalah Produsen Batik Solo Tangan Pertama Punya Pabrik Sendiri Dan Sudah Menjual Banyak Koleksi Dari Toko kami Jika Ada Nama Batik Amarta Selain Dari Kami Itu Dipastikan Palsu.\r\n\r\n▪ FOTO PRODUK ASLI 100% Dari Potografer Tanpa edit\r\nJika ada Perbedaan warna kemungkinan terjadi karena adanya perbedaan spesifikasi dan kemampuan layar perangkat anda, tetapi kami mengupayakan warna yang tampil di perangkat anda sesuai dengan warna produk\r\nProduk Yang Kami Jual Jaminan Kualitas Terbaik, Nyaman Dipakai, Bahan Tebal, Tidak Terawang, Adhem Dan Anti Kusut!\r\n\r\nDETAIL PRODUK:\r\n▪ Polyester\r\n▪ Dijamin Tidak Luntur\r\n▪ Pakai Lapisan Furing (bikin nyaman dipakai)\r\n▪ Saku/Kantong 1 (depan dalam)\r\n▪ Proses Jahit Spesialis Thailor (bukan konveksi)\r\n\r\n\r\n▪ S (Lingkar Dada 100 - Panjang 68 - Lengan 57\r\n▪ M (Lingkar Dada 104 - Panjang 70 - Lengan 59\r\n▪ L (Lingkar Dada 108 - Panjang 72 - Lengan 61\r\n▪ XL (Lingkar Dada 112 - Panjang 74 - Lengan 62\r\n▪ XXL (Lingkar Dada 116 - Panjang 76 - Lengan 63\r\n▪ XXXL (Lingkar Dada 120 - Panjang 80 - Lengan 64\r\n\r\n▪ Jadwal Pengiriman Hari Senin-Sabtu\r\nOrder sebelum jam 16:00 WIB akan diproses dihari yang sama.\r\nOrder melewati jam 16:00 WIB akan diproses dihari selanjutnya.\r\nHari minggu dan tanggal merah libur, tidak ada pengiriman.\r\nUpdate resi maksimal 1x24jam setelah paket dipickup pihak ekspedisi\r\n\r\n▪ SEMUA PRODUK KAMI GARANSI 100%\r\nJika ada Keluhan Segera Hubungi Lewat Chat,\r\nPesanan sesuai dengan invoice,\r\nPesanan salah kirim, motif/size/barang cacat boleh ditukar,\r\nOngkir PP kami yang tanggung, Terimasih Happy Shopping', '2024-08-20 01:37:15', '2024-08-20 01:37:15'),
(32, 'Baju Batik Pria LS Modern Jumbo Slimfit SWGL HITAM - S', 'Batik Tulis', 'Sedang', 'Katun', 'Modern', 127950, '1724143246.jpg', 'Selamat Datang di Toko Kami Batik Amarta\r\nBATIK PRIA PREMIUM LENGAN PANJANG (FULL FURING)\r\nHATI HATI Jangan Terjebak Batik Dengan Harga Murah,\r\nBatik Banyak Model Motif Beda Bahan, Beda Proses Produksi, Beda Kualitas Jadi Tentu Beda Harga\r\n\r\n▪ BATIK AMARTA\r\nAdalah Produsen Batik Solo Tangan Pertama Punya Pabrik Sendiri Dan Sudah Menjual Banyak Koleksi Dari Toko kami Jika Ada Nama Batik Amarta Selain Dari Kami Itu Dipastikan Palsu.\r\n\r\n▪ FOTO PRODUK ASLI 100% Dari Potografer Tanpa edit\r\nJika ada Perbedaan warna kemungkinan terjadi karena adanya perbedaan spesifikasi dan kemampuan layar perangkat anda, tetapi kami mengupayakan warna yang tampil di perangkat anda sesuai dengan warna produk\r\nProduk Yang Kami Jual Jaminan Kualitas Terbaik, Nyaman Dipakai, Bahan Tebal, Tidak Terawang, Adhem Dan Anti Kusut!\r\n\r\nDETAIL PRODUK:\r\n▪ Katun\r\n▪ Dijamin Tidak Luntur\r\n▪ Pakai Lapisan Furing (bikin nyaman dipakai)\r\n▪ Saku/Kantong 1 (depan dalam)\r\n▪ Proses Jahit Spesialis Thailor (bukan konveksi)\r\n\r\n\r\n▪ S (Lingkar Dada 100 - Panjang 68 - Lengan 57\r\n▪ M (Lingkar Dada 104 - Panjang 70 - Lengan 59\r\n▪ L (Lingkar Dada 108 - Panjang 72 - Lengan 61\r\n▪ XL (Lingkar Dada 112 - Panjang 74 - Lengan 62\r\n▪ XXL (Lingkar Dada 116 - Panjang 76 - Lengan 63\r\n▪ XXXL (Lingkar Dada 120 - Panjang 80 - Lengan 64\r\n\r\n▪ Jadwal Pengiriman Hari Senin-Sabtu\r\nOrder sebelum jam 16:00 WIB akan diproses dihari yang sama.\r\nOrder melewati jam 16:00 WIB akan diproses dihari selanjutnya.\r\nHari minggu dan tanggal merah libur, tidak ada pengiriman.\r\nUpdate resi maksimal 1x24jam setelah paket dipickup pihak ekspedisi\r\n\r\n▪ SEMUA PRODUK KAMI GARANSI 100%\r\nJika ada Keluhan Segera Hubungi Lewat Chat,\r\nPesanan sesuai dengan invoice,\r\nPesanan salah kirim, motif/size/barang cacat boleh ditukar,\r\nOngkir PP kami yang tanggung, Terimasih Happy Shopping', '2024-08-20 01:40:46', '2024-08-20 01:54:54'),
(35, 'Baju Batik Pria LS Premium Jumbo Slim Fit Kasual JKW HITAM - S', 'Batik Printing', 'Gelap', 'Dolby', 'Premium', 127950, '1724147940.jpg', 'Selamat Datang di Toko Kami Batik Amarta\r\nBATIK PRIA PREMIUM LENGAN PANJANG (FULL FURING)\r\nHATI HATI Jangan Terjebak Batik Dengan Harga Murah,\r\nBatik Banyak Model Motif Beda Bahan, Beda Proses Produksi, Beda Kualitas Jadi Tentu Beda Harga\r\n\r\n▪ BATIK AMARTA\r\nAdalah Produsen Batik Solo Tangan Pertama Punya Pabrik Sendiri Dan Sudah Menjual Banyak Koleksi Dari Toko kami Jika Ada Nama Batik Amarta Selain Dari Kami Itu Dipastikan Palsu.\r\n\r\n▪ FOTO PRODUK ASLI 100% Dari Potografer Tanpa edit\r\nJika ada Perbedaan warna kemungkinan terjadi karena adanya perbedaan spesifikasi dan kemampuan layar perangkat anda, tetapi kami mengupayakan warna yang tampil di perangkat anda sesuai dengan warna produk\r\nProduk Yang Kami Jual Jaminan Kualitas Terbaik, Nyaman Dipakai, Bahan Tebal, Tidak Terawang, Adhem Dan Anti Kusut!\r\n\r\nDETAIL PRODUK:\r\n▪ Dolby\r\n▪ Dijamin Tidak Luntur\r\n▪ Pakai Lapisan Furing (bikin nyaman dipakai)\r\n▪ Saku/Kantong 1 (depan dalam)\r\n▪ Proses Jahit Spesialis Thailor (bukan konveksi)\r\n\r\n\r\n▪ S (Lingkar Dada 100 - Panjang 68 - Lengan 57\r\n▪ M (Lingkar Dada 104 - Panjang 70 - Lengan 59\r\n▪ L (Lingkar Dada 108 - Panjang 72 - Lengan 61\r\n▪ XL (Lingkar Dada 112 - Panjang 74 - Lengan 62\r\n▪ XXL (Lingkar Dada 116 - Panjang 76 - Lengan 63\r\n▪ XXXL (Lingkar Dada 120 - Panjang 80 - Lengan 64\r\n\r\n▪ Jadwal Pengiriman Hari Senin-Sabtu\r\nOrder sebelum jam 16:00 WIB akan diproses dihari yang sama.\r\nOrder melewati jam 16:00 WIB akan diproses dihari selanjutnya.\r\nHari minggu dan tanggal merah libur, tidak ada pengiriman.\r\nUpdate resi maksimal 1x24jam setelah paket dipickup pihak ekspedisi\r\n\r\n▪ SEMUA PRODUK KAMI GARANSI 100%\r\nJika ada Keluhan Segera Hubungi Lewat Chat,\r\nPesanan sesuai dengan invoice,\r\nPesanan salah kirim, motif/size/barang cacat boleh ditukar,\r\nOngkir PP kami yang tanggung, Terimasih Happy Shopping', '2024-08-20 02:59:00', '2024-08-20 02:59:00');

-- --------------------------------------------------------

--
-- Table structure for table `produks`
--

CREATE TABLE `produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama baju` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rekomendasi`
--

CREATE TABLE `rekomendasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `jenis_batik` varchar(255) NOT NULL,
  `warna` varchar(255) NOT NULL,
  `bahan` varchar(255) NOT NULL,
  `kualitas` varchar(255) NOT NULL,
  `harga` int(25) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rekomendasi`
--

INSERT INTO `rekomendasi` (`id`, `nama_pelanggan`, `jenis_batik`, `warna`, `bahan`, `kualitas`, `harga`, `created_at`, `updated_at`) VALUES
(15, 'prof alif', 'Batik Tulis', 'Gelap', 'Katun', 'Premium', 10000, '2024-06-28 08:32:07', '2024-06-28 08:32:07'),
(16, 'iky', 'Batik Cetak', 'Gelap', 'Katun', 'Premium', 12000, '2024-06-28 08:39:50', '2024-06-28 08:39:50'),
(34, 'reyjrot', 'Batik Tulis', 'Gelap', 'Katun', 'Premium', 128000, '2024-07-14 06:20:52', '2024-07-14 06:20:52'),
(36, 'reyjrot', 'Batik Tulis', 'Gelap', 'Katun', 'Premium', 128000, '2024-07-14 06:24:47', '2024-07-14 06:24:47'),
(38, 'danang', 'Batik Printing', 'Gelap', 'Katun', 'Premium', 128000, '2024-07-15 23:42:51', '2024-07-15 23:42:51'),
(39, 'atik', 'Batik Printing', 'Cerah', 'Katun', 'Premium', 150000, '2024-07-22 04:23:16', '2024-07-22 04:23:16'),
(41, 'alif', 'Batik Printing', 'Cerah', 'Katun', 'Premium', 150000, '2024-07-22 04:26:46', '2024-07-22 04:26:46'),
(42, 'reyhannn', 'Batik Printing', 'Cerah', 'Katun', 'Premium', 150000, '2024-07-22 04:29:44', '2024-07-22 04:29:44'),
(43, 'robyy', 'Batik Printing', 'Cerah', 'Katun', 'Premium', 150000, '2024-07-22 04:31:40', '2024-07-22 04:31:40'),
(46, 'coba1', 'Batik Printing', 'Gelap', 'Choose option...', 'Choose option...', 128000, '2024-07-31 00:47:09', '2024-07-31 00:47:09'),
(47, 'coba2', 'Batik Printing', 'Choose option...', 'Katun', 'Choose option...', 128000, '2024-07-31 01:16:24', '2024-07-31 01:16:24'),
(50, 'coba3', 'Choose option...', 'Choose option...', 'Katun', 'Modern', 170000, '2024-07-31 01:25:11', '2024-07-31 01:25:11'),
(51, 'coba4', 'Batik Printing', 'Gelap', 'Katun', 'Choose option...', 128000, '2024-07-31 01:29:22', '2024-07-31 01:29:22'),
(52, 'coba5', 'Batik Printing', 'Gelap', 'Choose option...', 'Premium', 128000, '2024-07-31 01:41:01', '2024-07-31 01:41:01'),
(53, 'coba6', 'Batik Printing', 'Choose option...', 'Katun', 'Premium', 128000, '2024-07-31 01:42:17', '2024-07-31 01:42:17'),
(54, 'coba7', 'Choose option...', 'Gelap', 'Katun', 'Premium', 128000, '2024-07-31 01:44:12', '2024-07-31 01:44:12'),
(56, 'coba8', 'Batik Printing', 'Choose option...', 'Choose option...', 'Premium', 128000, '2024-07-31 01:49:16', '2024-07-31 01:49:16'),
(58, 'coba9', 'Choose option...', 'Sedang', 'Katun', 'Choose option...', 128000, '2024-07-31 01:53:56', '2024-07-31 01:53:56'),
(62, 'coba10', 'Batik Printing', 'Gelap', 'Katun', 'Premium', 128000, '2024-07-31 02:06:52', '2024-07-31 02:06:52'),
(63, 'ardiansyah', 'Batik Printing', 'Gelap', 'Katun', 'Premium', 128000, '2024-07-31 20:30:22', '2024-07-31 20:30:22'),
(81, 'sopingi', 'Batik Tulis', 'Cerah', 'Katun', 'Premium', 128000, '2024-08-20 02:39:01', '2024-08-20 02:39:01'),
(82, 'bu anisatul farida', 'Batik Printing', 'Gelap', 'Katun', 'Premium', 120000, '2024-08-25 20:58:24', '2024-08-25 20:58:24'),
(83, 'bu anisatul farida', 'Batik Printing', 'Gelap', 'Katun', 'Premium', 128000, '2024-08-25 20:59:03', '2024-08-25 20:59:03'),
(84, 'contoh1', 'Batik Printing', 'Gelap', 'Katun', 'Premium', 128000, '2024-08-25 21:09:43', '2024-08-25 21:09:43'),
(85, 'rama', 'Batik Printing', 'Gelap', 'Katun', 'Premium', 150000, '2024-08-28 02:01:41', '2024-08-28 02:01:41'),
(86, 'test11', 'Batik Printing', 'Gelap', 'Katun', 'Premium', 130000, '2024-11-06 08:38:04', '2024-11-06 08:38:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Admin', 'admin@gmail.com', NULL, '$2y$12$jEWR3OVg8.SWXbPqpZfM3OphXIb95JT8H6jiwaL7EQ0Nl5G8C4lLq', NULL, '2024-06-12 09:53:18', '2024-06-12 09:53:18');

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekomendasi`
--
ALTER TABLE `rekomendasi`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rekomendasi`
--
ALTER TABLE `rekomendasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
