-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 10.11.2025 klo 07:24
-- Palvelimen versio: 5.7.11
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tyoharjoittelu`
--

-- --------------------------------------------------------

--
-- Rakenne taululle `harjoittelupaikat`
--

CREATE TABLE `harjoittelupaikat` (
  `id` int(11) NOT NULL,
  `nimi` varchar(255) NOT NULL,
  `osoite` varchar(255) NOT NULL,
  `yhteystiedot` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vedos taulusta `harjoittelupaikat`
--

INSERT INTO `harjoittelupaikat` (`id`, `nimi`, `osoite`, `yhteystiedot`) VALUES
(1, 'SoftWave', 'Vaasantie 6, 67100 Kokkola', 'eemu.pihlaja@softwave.fi'),
(2, 'WideFlow', 'Ristirannankatu 1, 67100 Kokkola', '040 533 5790'),
(3, 'Akkuteho', 'Indolantie 6, 67600 Kokkola', '044-3312970'),
(4, 'Google', '1600 Amphitheatre Parkway in Mountain View, California.', 'sundar@google.com'),
(5, 'Biorex', 'Hannulan katu', 'biorex@biorex.org');

-- --------------------------------------------------------

--
-- Rakenne taululle `oppilaat`
--

CREATE TABLE `oppilaat` (
  `id` int(11) NOT NULL,
  `nimi` varchar(255) NOT NULL,
  `paikka` varchar(255) DEFAULT NULL,
  `ohjaaja` varchar(255) DEFAULT NULL,
  `yhteystiedot` varchar(255) DEFAULT NULL,
  `aloitus` date NOT NULL,
  `lopetus` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `ruokaraha` varchar(255) DEFAULT NULL,
  `muuta` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vedos taulusta `oppilaat`
--

INSERT INTO `oppilaat` (`id`, `nimi`, `paikka`, `ohjaaja`, `yhteystiedot`, `aloitus`, `lopetus`, `status`, `ruokaraha`, `muuta`) VALUES
(1, 'Oppilas1', 'SoftWave', 'Eemu Pihlaja', 'eemu.pihlaja@softwave.fi', '2026-01-07', '2026-03-20', 'v_valmis', 'off', 'Lisätietoja testi'),
(2, 'Oppilas2', 'WideFlow', 'Mannu Sarja', '040 533 5790', '2026-01-07', '2026-03-20', 'v_valmis', 'on', 'Kokkolasta, lähellä bussiasemaa'),
(3, 'Oppilas3', 'Akkuteho', 'Mats ', '044-3312970', '2026-01-07', '2026-03-20', 'v_valmis', 'on', '');

-- --------------------------------------------------------

--
-- Rakenne taululle `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `teacher` int(11) NOT NULL COMMENT '0 = oppilas; 1 = opettaja'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vedos taulusta `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `teacher`) VALUES
(2, '123', '$2y$10$iXEgrxbw3D7xI6aVaXOSk.Ghpo8ZxxYjB567Tak8dArCduuBhZhbC', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `harjoittelupaikat`
--
ALTER TABLE `harjoittelupaikat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oppilaat`
--
ALTER TABLE `oppilaat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `harjoittelupaikat`
--
ALTER TABLE `harjoittelupaikat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `oppilaat`
--
ALTER TABLE `oppilaat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
