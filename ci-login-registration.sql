-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 21 Ara 2018, 17:28:29
-- Sunucu sürümü: 10.1.37-MariaDB
-- PHP Sürümü: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ci-login-registration`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_age` int(11) NOT NULL,
  `user_mobile` int(11) NOT NULL,
  `role` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_age`, `user_mobile`, `role`) VALUES
(1, 'Admin', 'admin@kaizertech.com', '0192023a7bbd73250516f069df18b500', 23, 334443333, 0),
(4, 'zaid', 'zaid@gmail.com', '202cb962ac59075b964b07152d234b70', 23, 324234234, 0),
(5, 'Yusuf Dede', 'y@hotmail.com', '4eae35f1b35977a00ebd8086c259d4c9', 12, 21321321, 0),
(6, 'kale', 'a@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 32, 545845575, 0),
(8, 'Esma Ünverdi', 'esma@hotmail.com', '19ff24ad4ca69c873763bb51c1c51ddc', 32, 554876, 0),
(9, 'ahmet', 'aw@h.com', '934b535800b1cba8f96a5d72f72f1611', 32, 454545, 0),
(10, 'Süleyman Y?lmaz', 'sulo@kaizertech.com', '202cb962ac59075b964b07152d234b70', 44, 225456, 0),
(11, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 0, 0, 0),
(12, 'kale', 'ahmee@hotmail.com', '6bdcbb606161c47eab0615ff6e13313f', 1, 12, 0),
(13, 'afran mirad', 'afran@kaizertech.com', 'ed20a959d410ccd843d9e1dfcee04228', 33, 33665599, 0),
(14, 'kamil', 'k@hotmail.com', '1d430d0a0757ca4b16a57dbc5c436353', 33, 25483, 0),
(15, 'sait', 's@hotmail.com', '9a0338f246efbfc8a297d69d58f2b2c5', 659, 2222222, 0);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
