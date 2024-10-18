-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 08 Haz 2023, 13:52:23
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
-- Veritabanı: `bcerent`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `arac`
--

CREATE TABLE `arac` (
  `Plaka` varchar(15) NOT NULL,
  `Marka` varchar(30) NOT NULL,
  `Model` varchar(30) NOT NULL,
  `AracTipi` varchar(10) NOT NULL,
  `ModelYili` varchar(4) NOT NULL,
  `Vites` varchar(16) NOT NULL,
  `Yakit` varchar(10) NOT NULL,
  `Fiyat` varchar(50) NOT NULL,
  `Durum` varchar(20) NOT NULL,
  `AracResim` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `arac`
--

INSERT INTO `arac` (`Plaka`, `Marka`, `Model`, `AracTipi`, `ModelYili`, `Vites`, `Yakit`, `Fiyat`, `Durum`, `AracResim`) VALUES
('34 CHN 688', 'CLİO', 'FAJHF', 'FLAHKF', '2012', 'FLKHF', 'LKDHFL', '1000', 'Müsait', '2727547818.png'),
('34 CIB 451', 'CLİO', 'FAJHF', 'Sedan', '2012', 'FLKHF', 'LKDHFL', '1000', 'Müsait', '1225349092.png'),
('34 CJE 373', 'CLİO', 'FAJHF', 'FLAHKF', '2012', 'Manuel', 'LKDHFL', '1000', 'Müsait', '1276725186.png'),
('34 CNZ 016', 'CLİO', 'FAJHF', 'FLAHKF', '2012', 'Manuel', 'LKDHFL', '850', 'Müsait', '1322846404.png'),
('34 CYB 754', 'CLİO', 'FAJHF', 'FLAHKF', '2012', 'FLKHF', 'LKDHFL', '1000', 'Müsait', '3453124738.png'),
('34 DIZ 293', 'CLİO', 'FAJHF', 'FLAHKF', '2012', 'FLKHF', 'LKDHFL', '1000', 'Müsait', '1831136034.png'),
('34 DTW 484', 'CLİO', 'FAJHF', 'FLAHKF', '2012', 'FLKHF', 'Dizel', '1000', 'Müsait', '1602132281.png'),
('34 EKC 200', 'CLİO', 'FAJHF', 'FLAHKF', '2012', 'FLKHF', 'LKDHFL', '850', 'Müsait', '1805231217.png'),
('34 EPK 213', 'CLİO', 'FAJHF', 'FLAHKF', '2012', 'FLKHF', 'LKDHFL', '1000', 'Müsait', '4028239708.png'),
('34 ERB 619', 'CLİO', 'FAJHF', 'FLAHKF', '2012', 'FLKHF', 'LKDHFL', '1000', 'Müsait', '1985114224.png'),
('34 ERE 424', 'CLİO', 'FAJHF', 'FLAHKF', '2012', 'FLKHF', 'LKDHFL', '1000', 'Bakımda', '1387640943.png'),
('34 ERE 425', 'CLİO', 'FAJHF', 'FLAHKF', '2012', 'FLKHF', 'LKDHFL', '1000', 'Müsait', '3317611720.png'),
('34 ESB 183', 'CLİO', 'FAJHF', 'FLAHKF', '2012', 'FLKHF', 'LKDHFL', '1000', 'Müsait', '2522924031.png'),
('34 ESE 660', 'CLİO', 'FAJHF', 'FLAHKF', '2012', 'Manuel', 'LKDHFL', '1000', 'Müsait', '4367441409.png'),
('34 ESY 281', 'CLİO', 'FAJHF', 'FLAHKF', '2012', 'FLKHF', 'LKDHFL', '1000', 'Bakımda', '2788943126.png'),
('34 FHE 646', 'CLİO', 'FAJHF', 'FLAHKF', '2012', 'FLKHF', 'LKDHFL', '1000', 'Bakımda', '2494115763.png'),
('34 FIR 865', 'CLİO', 'FAJHF', 'FLAHKF', '2012', 'FLKHF', 'LKDHFL', '1000', 'Müsait', '2389542002.png'),
('34 FJH 409', 'CLİO', 'FAJHF', 'FLAHKF', '2012', 'FLKHF', 'LKDHFL', '1000', 'Bakımda', '4552923222.png'),
('34 FNN 178', 'CLİO', 'FAJHF', 'FLAHKF', '2012', 'FLKHF', 'LKDHFL', '1000', 'Müsait', '1498032304.png'),
('34 MNS 65', 'RENAULT', 'ZOE', 'HATCHBACK', '2022', 'OTOMATİK', 'ELEKTRİK', '1000', 'Müsait', '4035646937.jpg'),
('34 NNS 25', 'CLİO', 'FAJHF', 'FLAHKF', '2012', 'Manuel', 'LKDHFL', '1000', 'Bakımda', '4011131086.png'),
('34 NNS 85', 'CLİO', 'FAJHF', 'FLAHKF', '2012', 'FLKHF', 'LKDHFL', '1000', 'M', '3540119598.png'),
('34 NU 7384', 'CLİO', 'FAJHF', 'FLAHKF', '2012', 'FLKHF', 'LKDHFL', '1000', 'M', '2831831463.png'),
('34 TC 7455', 'CLİO', 'FAJHF', 'FLAHKF', '2012', 'FLKHF', 'LKDHFL', '1000', 'M', '1578547341.jpg'),
('44 BCE 0269', 'Kia', 'Rio', 'Sedan', '2017', 'Otomatik', 'Benzin', '1000', 'M', '44bce0269.png');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `arac`
--
ALTER TABLE `arac`
  ADD PRIMARY KEY (`Plaka`) USING BTREE,
  ADD UNIQUE KEY `Plaka` (`Plaka`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
