-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 08:48 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ficoding`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(1, 'Front End'),
(2, 'Back End');

-- --------------------------------------------------------

--
-- Table structure for table `level_user`
--

CREATE TABLE `level_user` (
  `id` int(11) NOT NULL,
  `level_user` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level_user`
--

INSERT INTO `level_user` (`id`, `level_user`) VALUES
(1, 'Admin'),
(2, 'Pengguna');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` date NOT NULL,
  `foto1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id`, `id_user`, `id_kategori`, `nama`, `deskripsi`, `created_at`, `foto1`) VALUES
(20, 7, 1, 'Pendahuluan HTML Dasar Part 1', '<figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=NBZ9Ro6UKV8\"></oembed></figure><p>Pada video ini, kita akan belajar mengenai apa itu HTML.</p>', '2021-06-16', '16062021221626html.jpg'),
(21, 7, 1, 'Pendahuluan CSS Dasar Part 1', '<figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=CleFk3BZB3g\"></oembed></figure><p>Di video ini, kita akan belajar mengenai apa itu CSS.</p>', '2021-06-16', '16062021222131css.jpg'),
(22, 7, 1, 'CSS3 Intro', '<figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=J0a6YUUAsd4\"></oembed></figure><p>Berikut adalah video pendahuluan seri mengenai CSS3.</p>', '2021-06-16', '16062021223027css1.png'),
(23, 7, 1, 'Dasar Pemrograman dengan JavaScript Part 1', '<figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=RUTV_5m4VeI\"></oembed></figure><p>Di seri ini, kita akan mempelajari mengenai dasar pemrograman JavaScript.</p>', '2021-06-16', '16062021224046js.jpg'),
(24, 9, 2, 'Belajar PHP untuk Pemula Part 1', '<figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=l1W2OwV5rgY\"></oembed></figure><p>Berikut adalah video pembelajaran PHP dasar untuk pemula.</p>', '2021-06-16', '16062021224705php.png'),
(25, 9, 1, 'JavaScript dan DOM', '<figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=aT60R1cySLM\"></oembed></figure><p>Di seri ini kita akan mempelajari mengenai DOM atau Document Object Model pada HTML dan bagaiman cara bekerja dengan DOM menggunakan Javascript.</p>', '2021-06-16', '17062021011647js5.jpeg'),
(26, 9, 2, 'OOP Dasar pada PHP Part 1', '<figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=ZKDUFoouyBI\"></oembed></figure><p>Kali ini kita akan belajar konsep dasar pemrograman PHP dengan paradigma Object Oriented atau disebut juga dengan PHP Berorientasi Object.</p>', '2021-06-16', '16062021231612oop2.png'),
(27, 9, 2, 'Membuat Aplikasi MVC dengan PHP Part 1', '<figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=tBKOb8Ib5nI&amp;t=55s\"></oembed></figure><p>MVC adalah sebuah konsep dalam pembuatan perangkat lunak berorientasi object.</p>', '2021-06-16', '16062021231210mvc.jpeg'),
(28, 9, 2, 'REST API Part 1', '<figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=vQJJ_K1JbEA\"></oembed></figure><p>Video ini adalah awal dari sebuah seri mengenai REST API dan kita akan bahas dulu mengenai apa itu API.</p>', '2021-06-16', '16062021232328rest api.png'),
(29, 9, 2, 'Pengenalan GITHUB Part 1', '<figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=lTMZxWMjXQU\"></oembed></figure><p>Berikut adalah video penjelasan mengenai apa itu github.</p>', '2021-06-16', '16062021232706github.jpg'),
(30, 7, 1, 'Membuat Website dengan Bootstrap Part 1', '<figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=JhpjKpDUbAY\"></oembed></figure><p>Di video ini kita akan mencoba membuat website portfolio sederhana dengan menggunakan Framework Bootstrap 4.</p>', '2021-06-16', '16062021233451bootstrap.png'),
(31, 9, 1, 'Membuat Website dengan Materialize Part 1', '<figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=ql-3pWIw_mo\"></oembed></figure><p>Kali ini kita akan mencoba membuat website COMPANY PROFILE menggunakan Framework MATERIALIZE CSS.</p>', '2021-06-16', '16062021234134materialize.jpg'),
(32, 7, 1, 'Membuat Website menggunakan CODEIGNITER 4 Part 1', '<figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=Nt3YH68npW4\"></oembed></figure><p>Di video kali ini, kita akan membuat website sederhana menggunakan framework CODEIGNITER 4.</p>', '2021-06-16', '16062021234632ci.jpg'),
(33, 7, 1, 'Belajar Laravel untuk Pemula Part 1', '<figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=eRZFGSCkAnw\"></oembed></figure><p>Di video ini kita akan belajar bersama mengenai framework Laravel 5.8.</p>', '2021-06-17', '17062021003406laravel.png'),
(34, 7, 1, 'JavaScript Lanjutan', '<figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=RwT41El778A\"></oembed></figure><p>Mari kita mulai kembali belajar JAVASCRIPT dengan melanjutkan seri DASAR PEMROGRAMAN DENGAN JAVASCRIPT.</p>', '2021-06-17', '17062021004435js3.jpg'),
(35, 9, 1, 'Tutorial SASS Part 1', '<figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=XZXBqpGU8n4\"></oembed></figure><p>Kita akan memulai seri baru mengenai SASS dan di video ini kita akan bahas mengenai konsep, definisi dan kenapa kita butuh SASS.</p>', '2021-06-17', '17062021005550sass.jpg'),
(36, 9, 2, 'Belajar NodeJS Part 1', '<figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=sSLJx5t4OJ4\"></oembed></figure><p>Berikut video penjelasan mengenai NodeJS.</p>', '2021-06-17', '17062021010203nodejs.jpg'),
(37, 7, 1, 'Responsive Web Design', '<figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=bmEwgzxFQuo\"></oembed></figure><p>Pada video ini terdapat penjelasan mengenai Responsive Web Design.</p>', '2021-06-17', '17062021010749responsive.jpg'),
(38, 7, 1, 'JavaScript Algorithms and Data Structures Part 1', '<figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=FYKmFJhWPNY\"></oembed></figure><p>Kita mulai belajar javascsript lagi dari dasar di FreeCodeCamp.</p>', '2021-06-17', '17062021011250js4.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `id_level_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `nomor_telepon` varchar(13) NOT NULL,
  `alamat` text NOT NULL,
  `foto` text NOT NULL,
  `cover` text NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_level_user`, `nama`, `username`, `email`, `password`, `nomor_telepon`, `alamat`, `foto`, `cover`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin', 'admin@ficoding', '21232f297a57a5a743894a0e4a801fc3', '1234567890', '', '', '', '2021-06-15', '2021-06-15 21:17:07'),
(7, 2, 'Fitri Dwi Alfina', 'Fitri', 'ffitridwia@gmail.com', '534a0b7aa872ad1340d0071cbfa38697', '123', 'Jl. Rinjani', '15062021232203fitri.jpeg', '16062021102544sunrise.jpg', '2021-06-15', '2021-06-17 01:35:39'),
(9, 2, 'Figo Perdana Putra', 'figoperdana', 'perdanaputrafigo@gmail.com', '21cb4e4be93c09542ffa73b2b5cb95ea', '12323', 'Jl. Yos Sudarso', '16062021103436dana.jpeg', '16062021103250mountain.jpg', '2021-06-15', '2021-06-17 01:16:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level_user`
--
ALTER TABLE `level_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `nomor_telepon` (`nomor_telepon`),
  ADD KEY `id_level_user` (`id_level_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `level_user`
--
ALTER TABLE `level_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `materi`
--
ALTER TABLE `materi`
  ADD CONSTRAINT `materi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `materi_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_level_user`) REFERENCES `level_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
