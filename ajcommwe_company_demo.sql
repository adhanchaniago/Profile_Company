-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 01 Jun 2020 pada 07.32
-- Versi server: 10.3.22-MariaDB-cll-lve
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ajcommwe_company_demo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_client`
--

CREATE TABLE `tbl_client` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `url_img` varchar(20) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_client`
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
-- Struktur dari tabel `tbl_company`
--

CREATE TABLE `tbl_company` (
  `id` int(50) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `description` text CHARACTER SET utf8 DEFAULT NULL,
  `instagram` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `google` varchar(100) NOT NULL,
  `linked` varchar(100) NOT NULL,
  `tabel` varchar(20) NOT NULL,
  `page` varchar(20) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jam_operasional` varchar(60) NOT NULL,
  `video` text NOT NULL,
  `motto` text CHARACTER SET utf8 NOT NULL,
  `bidang` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_company`
--

INSERT INTO `tbl_company` (`id`, `address`, `phone`, `email`, `description`, `instagram`, `facebook`, `twitter`, `google`, `linked`, `tabel`, `page`, `nama`, `jam_operasional`, `video`, `motto`, `bidang`) VALUES
(1, 'JL.Gajah Tunggal No.88 Rt.04 RW.01 Kel.Alam Jaya Kec.Jatiuwung Kab.Tangerang15133-Indonesia', '021-5971 3893', 'zhongliandianqi@gmail.com', '中联电气是一家在印尼从事电气设备维修、加工及销售的公司，旗下分为电机部门、变压器部门、电磁铁部门和风机及机械加工部门共四个部门。\r\n公司创建于2015年，现有员工50余人，由中国长沙电机有限责任公司、中国杭州新恒力电机制造有限公司、中国浙江协成电气有限公司提供技术及产品支持，是上述三家公司授权的印度尼西亚总代理商。我司产品通过ISO9001:1994版和ISO2000版标准质量体系认证，采用（IEC）国际标准及中国标准。\r\n公司郑重承诺：我们将秉着“质量第一，诚信为本。”的原则面向客户，以一流的产品、一流的服务面向市场。<br>\r\nPT . Zhong lian dian qi is a company focusing on maintenance,processing and sales of electrical equipment in Indonesia,the company has five departments in terms of Electric motor ,Transformer,Electromagnet, Fan and Machining.\r\n      Established in 2015,PT Zhong lian dian qi has over 50 staff now,the company is the authorized general agency of Changsha motor factory co ltd;Hang zhou xin heng li electric machine mfg co ltd and Zhe jiang xie cheng electric co ltd in Indonesia and fully supported by the three partner companies on products and technics.The products in the company have passed ISO 9001:1994 and ISO 2000 Standard Quality Management Certifications and are adopted IEC and China Standards as well.\r\n      PT.Zhong lian dian qi committees to the principle of “Quality and Honesty first”to collaborate with customers as well as the First-class products and service facing to the market.\r\n', 'zhongliandianqi', 'zhongliandianqi', '@zhongliandianqi', 'zhongliandianqi', 'zhongliandianqi', 'tbl_company', 'contact', 'PT . Zhong lian dian qi', 'Monday - Saturday 19.00 - 24.00 WIB', 'https://www.youtube.com/watch?v=dqrsB7A6CFc', 'PT . Zhong lian dian qi is a company focusing on maintenance,processing and sales of electrical equipment in Indonesia,the company has five departments in terms of Electric motor ,Transformer,Electromagnet, Fan and Machining.', 'PT . ZHONG LIAN DIANQI GROUP');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_feedback`
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
-- Dumping data untuk tabel `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`id`, `name`, `email`, `message`, `job`, `url_img`) VALUES
(1, 'Sutisna Ramli', 'jokouye@gmail.com', 'Layanan sangat memuaskan dan jaminan yang diberikan sesuai dengan kesepakatan', 'Bandung', 'joko.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_project`
--

CREATE TABLE `tbl_project` (
  `id` int(11) NOT NULL,
  `url_image` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_promo`
--

CREATE TABLE `tbl_promo` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `url_img` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` int(50) NOT NULL,
  `url_img` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `url_img`, `title`, `description`) VALUES
(10, 'AJ_Commers.png', 'Slider one', 'We are company in tangerang indonesia'),
(11, 'AJ_Commers(1).png', 'Slider two', 'We create machine for manufacture');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_team`
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
-- Dumping data untuk tabel `tbl_team`
--

INSERT INTO `tbl_team` (`id`, `name`, `job`, `twitter`, `facebook`, `google`, `linked`, `url_img`) VALUES
(9, 'Barrack', 'Marketing', '', '', '', '', 'team_2.png'),
(10, 'Mike', 'Bussiness Analyst', '', '', '', '', 'post_6.png'),
(12, 'Antonny', 'CEO Founder', '', '', '', '', 'team_21.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_client`
--
ALTER TABLE `tbl_client`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_company`
--
ALTER TABLE `tbl_company`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_project`
--
ALTER TABLE `tbl_project`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_promo`
--
ALTER TABLE `tbl_promo`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_team`
--
ALTER TABLE `tbl_team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_client`
--
ALTER TABLE `tbl_client`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_company`
--
ALTER TABLE `tbl_company`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_project`
--
ALTER TABLE `tbl_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_promo`
--
ALTER TABLE `tbl_promo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tbl_team`
--
ALTER TABLE `tbl_team`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
