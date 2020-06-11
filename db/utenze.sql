-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Giu 11, 2020 alle 17:52
-- Versione del server: 10.4.11-MariaDB
-- Versione PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utenze`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `nomeAttività` varchar(50) NOT NULL,
  `pIva` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `md5` varchar(32) NOT NULL,
  `username` varchar(20) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `ipUser` varchar(20) NOT NULL,
  `ipPw` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`nomeAttività`, `pIva`, `email`, `md5`, `username`, `ip`, `ipUser`, `ipPw`) VALUES
('', '', 'gigi@gigi.it', '09ad68ccea425181b0f3384a47eb0ee7', '', '', '', ''),
('', '', 'a@b.i', '0cc175b9c0f1b6a831c399e269772661', '', '', '', ''),
('', '', 'a@b.i', '0cc175b9c0f1b6a831c399e269772661', 'a b', '', '', ''),
('', '', 'fabio.f2001@gmail.com', 'a53bd0415947807bcb95ceec535820ee', 'Fabio Altea', '', '', ''),
('Example', '12345678901', 'example@smartmenu.it', '1a79a4d60de6718e8e5b326e338ae533', 'example', '127.0.0.1', 'root', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
