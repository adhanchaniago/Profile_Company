-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 13, 2019 at 02:19 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client`
--

CREATE TABLE `tbl_client` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `url_img` varchar(20) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_client`
--

INSERT INTO `tbl_client` (`id`, `name`, `url_img`, `description`) VALUES
(1, 'Lion Air', 'lion.png', 'Maskapai Penerbangan Lion Air'),
(2, 'Garuda Indonesia', 'garuda.png', 'Maskapai Penerbangan Garuda Indonesia'),
(3, 'Fly Emirates', 'emirates.png', 'Maskapai Penerbangan Fly Emirates'),
(4, 'Hotel Mekah', 'hotel2.jpg', 'Hotel untuk penginapan di mekah'),
(5, 'Hotel Mekah 2', 'hotel3.png', 'Penginapan di Mekah'),
(6, 'Hotel Mekah 4', 'hotel4.jpg', 'Penginapan di Mekah');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company`
--

CREATE TABLE `tbl_company` (
  `id` int(50) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `instagram` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `google` varchar(100) NOT NULL,
  `linked` varchar(100) NOT NULL,
  `tabel` varchar(20) NOT NULL,
  `page` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_company`
--

INSERT INTO `tbl_company` (`id`, `address`, `phone`, `email`, `description`, `instagram`, `facebook`, `twitter`, `google`, `linked`, `tabel`, `page`) VALUES
(1, 'PT Sinar Budi Baitullah, JL. Gatot Subroto KM. 8 Jatiuwung Kota Tangerang - Banten', '+62 21 55652447', 'sinarbudi@gmail.com', 'Kami adalah perusahaan biro umroh yang telah memberangkatkan jutaan jama\'ah hingga selamat dengan aman, nyaman dan berkah. Kemenag telah mengakui kami sebagai biro travel umroh terbaik dan terpercaya di Indonesia.', 'Sinar Budi Baitullah', 'Sinar Budi Baitullah', '@sinar_budi', 'Sinar Budi', 'Sinar Budi Baitullah', 'tbl_company', 'contact');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `id` int(10) NOT NULL,
  `url_img` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`id`, `url_img`, `title`, `description`) VALUES
(1, 'mou_emirates.jpg', 'Kerja Sama dengan Fly Emirates', 'PT Sinar Budi menandatangani Kerja Sama dengan maskapai penerbangan Fly Emirates'),
(2, 'mou_garuda.jpg', 'Kerja Sama dengan Garuda Indonesia', 'PT Sinar Budi menandatangani Kerja Sama dengan maskapai penerbangan Garuda Indonesia'),
(3, 'mou_hotel.jpeg', 'Kerja Sama dengan Anjum Hotels', 'PT Sinar Budi menandatangani Kerja Sama dengan penginapan Anjum Hotels di mekah, Arab Saudi PT Sinar Budi menandatangani Kerja Sama dengan penginapan Anjum Hotels di mekah, Arab SaudiPT Sinar Budi menandatangani Kerja Sama dengan penginapan Anjum Hotels di mekah, Arab SaudiPT Sinar Budi menandatangani Kerja Sama dengan penginapan Anjum Hotels di mekah, Arab SaudiPT Sinar Budi menandatangani Kerja Sama dengan penginapan Anjum Hotels di mekah, Arab Saudi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `job` varchar(100) NOT NULL,
  `url_img` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`id`, `name`, `email`, `message`, `job`, `url_img`) VALUES
(1, 'Sutisna Ramli', 'jokouye@gmail.com', 'Layanan sangat memuaskan dan jaminan yang diberikan sesuai dengan kesepakatan', 'Bandung', 'joko.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_promo`
--

CREATE TABLE `tbl_promo` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `url_img` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_promo`
--

INSERT INTO `tbl_promo` (`id`, `title`, `description`, `url_img`) VALUES
(2, '20 Juta All in', 'Hanya bayar 20 Juta anda sudah bisa menikmati semu fasilitas yang kami tawarkan dan langsung berangkat ke baitullah Hanya bayar 20 Juta anda sudah bisa menikmati semu fasilitas yang kami tawarkan dan langsung berangkat ke baitullah Hanya bayar 20 Juta anda sudah bisa menikmati semu fasilitas yang kami tawarkan dan langsung berangkat ke baitullah Hanya bayar 20 Juta anda sudah bisa menikmati semu fasilitas yang kami tawarkan dan langsung berangkat ke baitullah', 'promo2.jpg'),
(3, '40 Juta All in One', 'Hanya bayar 40 Juta anda sudah bisa menikmati semu fasilitas yang kami tawarkan dan langsung berangkat ke baitullah', 'promo1.jpg'),
(5, 'Garuda Indonesia', 'Nikmati penerbangan dengan maskapai Garuda Indonesia dengan paket class A', 'garuda.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services`
--

CREATE TABLE `tbl_services` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_services`
--

INSERT INTO `tbl_services` (`id`, `title`, `description`) VALUES
(1, 'Pilih Tanggal Keberangkatan', 'Pilih tanggal keberangkatan anda sesuai dengan kebutuhan dengan menghubungi kami di contact'),
(2, 'Periksa Kesehatan', 'Kami menyediakan klinik khusu calon jama\'ah untuk menjamin kesehatan anda sebelum berangkat ke baitullah'),
(3, 'Pembayaran', 'Biaya yang kami tawarkan dapat dicicil dari DP hingga pelunasan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` int(50) NOT NULL,
  `url_img` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `url_img`, `title`, `description`) VALUES
(1, 'mekah2.jpg', 'Perjalanan Umroh', 'Sinar Budi Baitullah menyediakan layanan perjalanan dan operasional umroh terlengkap'),
(2, 'kesehatan.jpg', 'Kesehatan Terjamin', 'Kesehatan jama\'ah menjadi tanggung jawab dan prioritas pelayanan kami'),
(3, 'pesawat.jpg', 'Jadwal Akurat', 'Jadwal keberangkatan sesuai dengan kesepakatan bersama'),
(4, 'mekah3.jpg', 'Promo Menarik', 'Selalu update promo paket yang kami tawarkan untuk menyesuaikan kebutuhan anda'),
(5, 'mekah1.jpg', 'Baitullah', 'Baitullah yang selama ini anda impikan akan terwujud segera');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team`
--

CREATE TABLE `tbl_team` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `job` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `google` varchar(10) NOT NULL,
  `linked` varchar(100) NOT NULL,
  `url_img` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_team`
--

INSERT INTO `tbl_team` (`id`, `name`, `job`, `twitter`, `facebook`, `google`, `linked`, `url_img`) VALUES
(1, 'Tomi Suharto', 'Pelayanan Kesehatan', '@tomi', 'tomi', 'Tomi Suhar', 'Tomi Suharto', 'joko.jpg'),
(2, 'Anwar Saleh', 'Kordinator Lapanan', '@anwar', 'Anwar Saleh', 'Anwar Sale', 'Anwar Saleh', 'testimonial-4.jpg'),
(3, 'Muhammad Riyadi', 'Kordinator Penginapan', '@riyadi', 'Riyadi', 'Riyadi', 'Riyadi', 'team-3.jpg'),
(4, 'Santi Ivanka', 'Administrasi', '@santi', 'Santi Ivanka', 'Santi Ivan', 'Santi Ivanka', 'team-4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_client`
--
ALTER TABLE `tbl_client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_company`
--
ALTER TABLE `tbl_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_promo`
--
ALTER TABLE `tbl_promo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_services`
--
ALTER TABLE `tbl_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_team`
--
ALTER TABLE `tbl_team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_client`
--
ALTER TABLE `tbl_client`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_company`
--
ALTER TABLE `tbl_company`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_promo`
--
ALTER TABLE `tbl_promo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_services`
--
ALTER TABLE `tbl_services`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_team`
--
ALTER TABLE `tbl_team`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
