-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 05, 2019 at 05:29 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `letgo_db`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `listele` ()  NO SQL
SELECT * FROM kategoriler$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `urunCek` ()  NO SQL
SELECT * FROM urunler u INNER JOIN kategoriler k ON u.kategori_id = k.kategori_id$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `favoriler`
--

CREATE TABLE `favoriler` (
  `favori_id` int(11) NOT NULL,
  `urun_id` int(11) DEFAULT NULL,
  `kullanici_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favoriler`
--

INSERT INTO `favoriler` (`favori_id`, `urun_id`, `kullanici_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategoriler`
--

CREATE TABLE `kategoriler` (
  `kategori_id` int(11) NOT NULL,
  `kategori_adi` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategoriler`
--

INSERT INTO `kategoriler` (`kategori_id`, `kategori_adi`) VALUES
(1, 'Elektronik'),
(2, 'Giyim'),
(3, 'Bujiteri'),
(4, 'Araba'),
(6, 'Eğitim');

-- --------------------------------------------------------

--
-- Table structure for table `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_adi` varchar(30) NOT NULL,
  `kullanici_sifre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kullanicilar`
--

INSERT INTO `kullanicilar` (`kullanici_id`, `kullanici_adi`, `kullanici_sifre`) VALUES
(1, 'admin', 'admin123'),
(2, 'yun', '123'),
(3, 'ahmet', '123'),
(4, 'hamet', '123'),
(5, 'sarilar?nsülo', '222'),
(6, 'malatyali', '444'),
(7, 'cem', '1234'),
(8, 'yakup', '1234'),
(9, 'ww', '23'),
(10, 'mami', 'mami123');

-- --------------------------------------------------------

--
-- Table structure for table `mesajlar`
--

CREATE TABLE `mesajlar` (
  `mesaj_id` int(11) NOT NULL,
  `mesaj_text` varchar(200) DEFAULT NULL,
  `kullanici_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `satilan`
--

CREATE TABLE `satilan` (
  `satilan_id` int(11) NOT NULL,
  `urun_id` int(11) DEFAULT NULL,
  `kullanici_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dumping data for table `satilan`
--

INSERT INTO `satilan` (`satilan_id`, `urun_id`, `kullanici_id`) VALUES
(1, 1, 2);

-- --------------------------------------------------------

--
-- Stand-in structure for view `satilanCek`
-- (See below for the actual view)
--
CREATE TABLE `satilanCek` (
`satilan` int(11)
,`urun` int(11)
,`kullanici` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `satinalinan`
--

CREATE TABLE `satinalinan` (
  `satinalinan_id` int(11) NOT NULL,
  `urun_id` int(11) DEFAULT NULL,
  `kullanici_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `urunler`
--

CREATE TABLE `urunler` (
  `urun_id` int(11) NOT NULL,
  `urun_adi` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `urun_durumu` int(11) DEFAULT NULL,
  `urun_aciklama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `kullanici_id` int(11) DEFAULT NULL,
  `kategori_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `urunler`
--

INSERT INTO `urunler` (`urun_id`, `urun_adi`, `urun_durumu`, `urun_aciklama`, `kullanici_id`, `kategori_id`) VALUES
(1, 'Ferrari F50', 0, 'On numara beş yıldız ferrari', 1, 4),
(2, 'Lehim makinesi', 0, '3000 watt orjinal lehim makinesi', 1, 1),
(3, 'rr', NULL, 'tt', 1, 4),
(4, 'maclern', 0, 'çok hızlı bir araba', NULL, 4),
(5, 'maclern', 0, 'çok hızlı bir araba', NULL, 4),
(6, 'maclern', 0, 'çok hızlı bir araba', NULL, 4),
(7, 's', 0, 'wewqewqewq', NULL, 1),
(8, 'cemin ürünü', 0, 'ünrrrr', NULL, 3),
(9, 'e', 0, 'r', NULL, 3),
(10, 'ff', 0, 'ff', NULL, 4),
(11, 'gg', 0, 'jj', NULL, 4),
(12, 'ahmetcçik', 0, 'mehmetçik', NULL, 4),
(13, 'tofaş', 0, 'çok hızlı', NULL, 4),
(14, 'laptop ', 0, 'on numara beş yıldzı', NULL, 1);

-- --------------------------------------------------------

--
-- Structure for view `satilanCek`
--
DROP TABLE IF EXISTS `satilanCek`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `satilanCek`  AS  select `satilan`.`satilan_id` AS `satilan`,`satilan`.`urun_id` AS `urun`,`satilan`.`kullanici_id` AS `kullanici` from (`satilan` join `urunler` on((`satilan`.`urun_id` = `urunler`.`urun_id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `favoriler`
--
ALTER TABLE `favoriler`
  ADD PRIMARY KEY (`favori_id`),
  ADD KEY `kullanici_id` (`kullanici_id`),
  ADD KEY `urun_id` (`urun_id`);

--
-- Indexes for table `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Indexes for table `mesajlar`
--
ALTER TABLE `mesajlar`
  ADD PRIMARY KEY (`mesaj_id`),
  ADD KEY `kullanici_id` (`kullanici_id`);

--
-- Indexes for table `satilan`
--
ALTER TABLE `satilan`
  ADD PRIMARY KEY (`satilan_id`);

--
-- Indexes for table `satinalinan`
--
ALTER TABLE `satinalinan`
  ADD PRIMARY KEY (`satinalinan_id`);

--
-- Indexes for table `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`urun_id`),
  ADD KEY `kullanici_id` (`kullanici_id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `favoriler`
--
ALTER TABLE `favoriler`
  MODIFY `favori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mesajlar`
--
ALTER TABLE `mesajlar`
  MODIFY `mesaj_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `satilan`
--
ALTER TABLE `satilan`
  MODIFY `satilan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `satinalinan`
--
ALTER TABLE `satinalinan`
  MODIFY `satinalinan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `urunler`
--
ALTER TABLE `urunler`
  MODIFY `urun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
