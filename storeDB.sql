-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Nov 2019 pada 10.59
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mepet`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `history`
--

CREATE TABLE `history` (
  `id_history` int(11) NOT NULL,
  `id_store` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `type` varchar(128) NOT NULL,
  `detail` varchar(256) NOT NULL,
  `cost` int(11) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `history`
--

INSERT INTO `history` (`id_history`, `id_store`, `name`, `type`, `detail`, `cost`, `date`) VALUES
(1, 6, 'sadsadas', '', 'asdsda1', 12000, 0),
(2, 6, 'BELI PINTU', 'Spending', 'PINTU MAHAL', 1200000, 0),
(3, 6, 'SDasD', 'Income', 'asdasdas', 12000000, 0),
(4, 0, 'sell shit', 'Income', '', 0, 0),
(5, 6, 'Sell a thing', 'Income', 'Selling  5 Masako to customer', 2500, 0),
(6, 6, 'Sell a thing', 'Income', 'Selling  5 Masako to customer', 2500, 0),
(7, 6, 'Sell a thing', 'Income', 'Selling  5 Masako to customer', 2500, 0),
(8, 6, 'beli meja', 'Spending', 'meja batu', 20000, 0),
(9, 6, 'Sell a thing', 'Income', 'Selling  4 Masako to customer', 2000, 0),
(10, 6, 'Sell a thing', 'Income', 'Selling  10 Masako to customer', 5000, 0),
(11, 6, 'Sell a thing', 'Income', 'Selling  2 Masako to customer', 1000, 0),
(12, 6, 'Sell a thing', 'Income', 'Selling  10 Masako to customer', 5000, 0),
(13, 6, 'Sell a thing', 'Income', 'Selling  4 Masako to customer', 2000, 0),
(14, 6, 'Sell a thing', 'Income', 'Selling  4 Masako to customer', 2000, 0),
(15, 6, 'Sell a thing', 'Income', 'Selling  4 Masako to customer', 2000, 0),
(16, 6, 'Sell a thing', 'Income', 'Selling  4 Masako to customer', 2000, 0),
(17, 7, 'Beli Pintu', 'Spending', 'Pintu Depan Toko', 500000, 0),
(18, 7, 'Sell a thing', 'Income', 'Selling  10 Lifeboy to customer', 20000, 0),
(19, 7, 'Sell a thing', 'Income', 'Selling  1 Durex to customer', 15000, 0),
(20, 7, 'Sell a thing', 'Income', 'Selling  10 Lifeboy to customer', 20000, 0),
(21, 7, 'Sell a thing', 'Income', 'Selling  10 Lifeboy to customer', 20000, 1562148291),
(22, 7, 'BELI POt', 'Spending', 'POT BUNGA', 50000, 1562148964),
(23, 7, 'Add product', '_', 'Adding 45 Surya 16 to Storage', 0, 1562149752),
(24, 7, 'Edit product', '_', 'Edit Lifeboy Product information', 0, 1562150405),
(25, 7, 'Delete product', '_', 'Delete Surya 16 from Storage', 0, 1562152160),
(26, 8, 'Add product', '_', 'Adding 50 Djisamsoe to Storage', 0, 1562152940),
(27, 8, 'Sell a thing', 'Income', 'Selling  2 Djisamsoe to customer', 40000, 1562152970),
(28, 9, 'Add product', '_', 'Adding 30 Bodrex to Storage', 0, 1562206919),
(29, 9, 'Add product', '_', 'Adding 60 Tolak Angin to Storage', 0, 1562206952),
(30, 9, 'Add product', '_', 'Adding 19 Decadryl to Storage', 0, 1562206977),
(31, 9, 'Add product', '_', 'Adding 40 Insto to Storage', 0, 1562207018),
(32, 9, 'Bayar reparasi', 'Spending', 'Bayar Reparasi AC di ruang tunggu', 100000, 1562207087),
(33, 9, 'Sell a thing', 'Income', 'Selling  2 Bodrex to customer', 10000, 1562207125),
(34, 9, 'Sell a thing', 'Income', 'Selling  4 Bodrex to customer', 20000, 1562207136),
(35, 9, 'Add product', '_', 'Adding 30 Milanta to Storage', 0, 1562207237),
(36, 9, 'Add product', '_', 'Adding 25 Antimo to Storage', 0, 1562207255),
(37, 9, 'Sell a thing', 'Income', 'Selling  4 Antimo to customer', 16000, 1562207264),
(39, 10, 'Dana Pemerintah', 'Income', 'Dapat dana bantuan dari pemerintah', 3000000, 1562207726),
(40, 10, 'Bayar reparasi', 'Spending', 'Reparasi AC di ruang karyawan', 150000, 1562207774),
(41, 10, 'Add product', '_', 'Adding 5000 Panadol to Storage', 0, 1562207809),
(42, 10, 'Delete product', '_', 'Delete Panadol from Storage', 0, 1562207823),
(43, 10, 'Add product', '_', 'Adding 50 Panadol to Storage', 0, 1562207836),
(44, 10, 'Add product', '_', 'Adding 1000 Tolak Angin to Storage', 0, 1562207851),
(45, 10, 'Add product', '_', 'Adding 50 Decadryl to Storage', 0, 1562207870),
(46, 10, 'Add product', '_', 'Adding 4000 Promagh to Storage', 0, 1562207892),
(47, 10, 'Sell a thing', 'Income', 'Selling  10 Panadol to customer', 50000, 1562207904),
(48, 10, 'Sell a thing', 'Income', 'Selling  10 Panadol to customer', 50000, 1562208718),
(49, 10, 'Belanja Bulanan', 'Spending', 'Belanja', 1000000, 1562208738),
(50, 11, 'Add product', '_', 'Adding 500 Djarum76 to Storage', 0, 1572602190),
(51, 11, 'Sell a thing', 'Income', 'Selling  500 Djarum76 to customer', 10000000, 1572602213);

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id_product` int(11) NOT NULL,
  `id_store` int(11) NOT NULL,
  `product_name` varchar(128) NOT NULL,
  `description` varchar(128) NOT NULL,
  `stock` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id_product`, `id_store`, `product_name`, `description`, `stock`, `price`, `status`) VALUES
(9, 6, 'Mama lemon', 'sabun cuci', 0, 5000, 'Out of Stock'),
(10, 6, 'Masako', 'bumbu', 953, 500, 'Available'),
(12, 6, 'Masako', 'MICIN', 0, 500, 'Out of Stock'),
(14, 6, 'ASU3', 'MICIN', 0, 500, 'Out of Stock'),
(15, 0, '', '', 995, 0, 'Available'),
(16, 7, 'Lifeboy', 'Sabun CUCI', 20, 2000, 'Available'),
(17, 7, 'Durex', 'Kondom', 9, 15000, 'Available'),
(18, 7, 'Panadol', 'Obat', 10, 2000, 'Available'),
(19, 7, 'Gudang Garam', 'Rokok Bungkus', 20, 19000, 'Available'),
(21, 8, 'Djisamsoe', 'Rokok Bungkus', 48, 20000, 'Available'),
(22, 9, 'Bodrex', 'Obat Sakit Kepala', 24, 5000, 'Available'),
(23, 9, 'Tolak Angin', 'Obat masuk angin', 60, 2000, 'Available'),
(24, 9, 'Decadryl', 'Obat batuk dan Atsma', 19, 35000, 'Available'),
(25, 9, 'Insto', 'Obat tetes mata', 40, 20000, 'Available'),
(26, 9, 'Milanta', 'Obat sakit perut', 30, 7000, 'Available'),
(27, 9, 'Antimo', 'Obat untuk perjalanan', 21, 4000, 'Available'),
(29, 10, 'Panadol', 'Obat Sakit Kepala', 30, 5000, 'Available'),
(30, 10, 'Tolak Angin', 'Obat masuk angin', 1000, 2000, 'Available'),
(31, 10, 'Decadryl', 'Obat batuk dan Atsma', 50, 35000, 'Available'),
(32, 10, 'Promagh', 'Obat sakit perut', 4000, 55, 'Available'),
(33, 11, 'Djarum76', 'udud enaque', 0, 20000, 'Out of Stock');

-- --------------------------------------------------------

--
-- Struktur dari tabel `store`
--

CREATE TABLE `store` (
  `id_store` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `store_name` varchar(128) NOT NULL,
  `address` varchar(128) NOT NULL,
  `description` varchar(128) NOT NULL,
  `contact` varchar(128) NOT NULL,
  `fund` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `store`
--

INSERT INTO `store` (`id_store`, `id`, `store_name`, `address`, `description`, `contact`, `fund`) VALUES
(6, 6, 'Berkah Store', 'Jl.Pelita', 'Toko jual obat obatan', '082131231', 978000),
(7, 8, 'Barokah3', 'Jl Imam Bonjol3', 'Jual APa aja3', '023812038120383', 4455000),
(8, 9, 'Jambi Store', 'Jambi', 'Toko Buah', '2321412', 5040000),
(9, 10, 'Surya Store', 'jl.Kepodang 3 Gedang Anak ,Ungaran Timur', 'Toko Obat', '085641314171', 1946000),
(10, 11, 'Rahma Store', 'jl.Kepodang 3 Gedang Anak ,Ungaran Barat', 'Toko Obat Merakyat', '085741562832', 6950000),
(11, 12, 'udud store', 'soenda75', 'jual udud', '02183012321', 11000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(6, 'Imam Septian', 'imam@gmail.com', 'a0w5icjzbi1211.png', '$2y$10$JIU1eFxJ14UyCb8Woz.jr.ixXubpTbaui.QpTU0jnHipKv7UhRqwG', 2, 1, 1562075954),
(7, 'imam2127', 'imam2127@gmail.com', 'default.png', '$2y$10$l5u5tHJmu5TW16YPorYLJOep6zEzDee5v4EPYEc9iurqoxlOtBmQS', 2, 1, 1562123784),
(8, 'budi gunawan', 'budi@gmail.com', '4head3.jpg', '$2y$10$pVsvaSSltL9xc2sCpgoVJ.anoVyqBfAQDuk1JHjhq0.33svg8JRI6', 2, 1, 1562133429),
(9, 'Adepe', 'Adepe@gmail.com', 'a0w5icjzbi1212.png', '$2y$10$mmxIC9EHEeEnNUC8G3cCY.mvf6uI11Wqnd5T7gxWrgDp9HuUoiaB2', 2, 1, 1562152878),
(10, 'Surya Budi Raharja', 'surya@gmail.com', 'flat,1000x1000,075,f.jpg', '$2y$10$KxvdBHcgT38XbkSHFEYt3Oof/Livmx5chWaQAp.L8R1FqgIE2SsQi', 2, 1, 1562206678),
(11, 'Rahma Adityo', 'rahma@gmail.com', '4head4.jpg', '$2y$10$GE3NCAXjMA7fzgzIrKJNwORmR95PQEOXheSmUi3Q2/1BxKm5e7oRy', 2, 1, 1562207660),
(12, 'Agus Rudian', 'agusrudian21@gmail.com', 'default.png', '$2y$10$SXghtn0W5gxnJOqhLcfT2eiZp.JwCrcsPEqY8X0GF.KgjVmZCNpve', 2, 1, 1572602075);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_history`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`);

--
-- Indeks untuk tabel `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id_store`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `history`
--
ALTER TABLE `history`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `store`
--
ALTER TABLE `store`
  MODIFY `id_store` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
