-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 04 okt 2017 om 10:14
-- Serverversie: 5.6.17
-- PHP-versie: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `dentist`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `appointments`
--

DROP TABLE IF EXISTS `appointments`;
CREATE TABLE IF NOT EXISTS `appointments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Gegevens worden geëxporteerd voor tabel `appointments`
--

INSERT INTO `appointments` (`id`, `date`, `time`, `description`, `user_id`) VALUES
(1, '2017-06-06', '09:40:22', 'What wubdup wubba dup', 1),
(2, '2017-06-06', '14:44:00', 'Test 123 test', 3);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;

--
-- Gegevens worden geëxporteerd voor tabel `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'assistant'),
(2, 'dentist'),
(3, 'user'),
(99, 'admin');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `prefix` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `adress` varchar(70) NOT NULL,
  `postalcode` varchar(6) NOT NULL,
  `city` varchar(80) NOT NULL,
  `phone` int(11) NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '3',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `fk_users_roles_idx` (`role_id`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `prefix`, `lastname`, `password`, `email`, `adress`, `postalcode`, `city`, `phone`, `role_id`) VALUES
(10, 'Tippe', 'Tippe', 'van', 'Roosmalen', 'c0ec717fe1d6040fa0b78610eea34314', 'tippevanroosmalen@outlook.com', 'Nieuwe Hoven 103', '4205BB', 'Gorinchem', 646886237, 0),
(11, 'Shitface', 'Tippe', '', 'Roosmalen', 'c0ec717fe1d6040fa0b78610eea34314', 'tippevanroosmalen@outlook.com', 'Nieuwe Hoven 103', '4205BB', 'Gorinchem', 646886237, 0),
(12, 'Tippie', 'Tippe', 'van', 'Roosmalen', '$2y$10$oxOT8izRmdx0OmHh8HTIauHU8mGq6p1SXztR01ZrADcWfKDwauD/u', 'tippevanroosmalen@outlook.com', 'Nieuwe Hoven 103', '4205BB', 'Gorinchem', 646886237, 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
