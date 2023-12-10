-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 04 Ara 2023, 07:13:02
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `bekesoft`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `id` int(11) NOT NULL,
  `adsoyad` varchar(30) NOT NULL,
  `telefon` varchar(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `konu` varchar(35) NOT NULL,
  `mesaj` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`id`, `adsoyad`, `telefon`, `email`, `konu`, `mesaj`) VALUES
(4, 'Esra Beke', '05466585961', 'esrabeke2078@gmail.com', 'Staj', 'ssdsdsdsdsdadsddsdsdsd'),
(6, 'Esra Beke', '05466585961', 'esrabeke2078@gmail.com', 'Staj', 'sjsjsjss'),
(7, 'agah', '05466585961', 'esrabeke2078@gmail.com', 'deneme2', 'rtagagdah'),
(8, 'agah', '05466585961', 'esrabeke2078@gmail.com', 'deneme2', 'rtagagdah');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
