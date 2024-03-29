-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 20, 2019 at 11:27 AM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.0.33-10+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `culay`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(1, 'Makanan/Minuman'),
(2, 'Koleksi'),
(3, 'Teknologi'),
(4, 'Fashion'),
(5, 'Olahraga');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id`, `nama`, `gambar`) VALUES
(1, 'Bali', 'data/image/bali.jpg'),
(2, 'Bandung', 'data/image/bandung.jpg'),
(3, 'Jakarta', 'data/image/jakarta.jpg'),
(4, 'Yogyakarta', 'data/image/jogja.jpg'),
(5, 'Bogor', 'data/image/bogor.png'),
(7, 'Pekalongan', 'data/image/pekalongan.png');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `desk` text NOT NULL,
  `harga` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `kota_id` int(11) NOT NULL,
  `kat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `judul`, `desk`, `harga`, `type`, `qty`, `gambar`, `kota_id`, `kat_id`, `user_id`) VALUES
(1, 'Dompet', 'Dompet dari luar kota', 100000, 1, 1, 'data/image/dompnyut.jpg', 1, 4, 1),
(2, 'Kadal Gurun', 'Kadal Gurun import dari miramar . sekarang tersedia di bogor!', 800000, 0, 1, 'data/image/kadal.jpeg', 5, 2, 2),
(5, 'Rumah Tanpa Pintu', 'rumah tanpa pintu persis seperti gim free fayer hasil impor india ', 690000000, 1, 1, 'data/image/rumah-tanpa-pintu-di-india_20181008_185731.jpg', 4, 5, 1),
(7, 'Cheat Point Blank Wallhack Anti Ban', 'lagi butuh cit pb dari pekalongan', 50000, 0, 1, 'data/image/CKbhc4iUwAAsG33.jpg', 7, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `penerima` text NOT NULL,
  `nama` text NOT NULL,
  `alamat` text NOT NULL,
  `produk_id` int(11) NOT NULL,
  `penjual_id` int(11) NOT NULL,
  `pembeli_id` int(11) NOT NULL,
  `status` text NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `penerima`, `nama`, `alamat`, `produk_id`, `penjual_id`, `pembeli_id`, `status`, `harga`) VALUES
(3, 'Baon Kicadap', 'Kadal Gurun', 'Jl . asede no 69', 2, 2, 1, 'Diproses', 800000),
(4, 'Amak Kalian', 'Cheat Point Blank Wallhack Ati ban', 'jl brikasap femeli', 7, 1, 2, 'Menunggu Diproses Penjual', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `saldo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `email`, `password`, `saldo`) VALUES
(1, 'baoncikadap', 'Baon Cikadap', 'baon@cikadap.com', 'e607cf1d9200895b67a77528c385fd01', 300004),
(2, 'bstrax', 'B Strax', 'bstrax@amakkalian.com', 'e607cf1d9200895b67a77528c385fd01', 701000),
(3, 'yoga', 'Solusi Agoy', 'yoga@solusi.com', 'e607cf1d9200895b67a77528c385fd01', 69000),
(4, 'fajar', 'Fajar', 'fajarkintil@gmail.com', 'e607cf1d9200895b67a77528c385fd01', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
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
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
