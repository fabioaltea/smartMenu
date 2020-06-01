-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Giu 01, 2020 alle 08:47
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
-- Database: `ristotemplate`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `categorie`
--

CREATE TABLE `categorie` (
  `idCategoria` varchar(2) NOT NULL,
  `nomeCategoria` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `ingredienti`
--

CREATE TABLE `ingredienti` (
  `idIngreiente` varchar(10) NOT NULL,
  `nome` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `menus`
--

CREATE TABLE `menus` (
  `idMenu` varchar(3) NOT NULL,
  `nomeCarta` varchar(20) NOT NULL,
  `descCart` varchar(150) NOT NULL,
  `imgPath` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `neimenu`
--

CREATE TABLE `neimenu` (
  `id` varchar(10) NOT NULL,
  `idMenu` varchar(3) NOT NULL,
  `idPiatto` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `neipiatti`
--

CREATE TABLE `neipiatti` (
  `id` varchar(10) NOT NULL,
  `idIngrediente` varchar(10) NOT NULL,
  `idPiatto` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `ordini`
--

CREATE TABLE `ordini` (
  `idOrdine` varchar(10) NOT NULL,
  `data` date NOT NULL,
  `idTavolo` int(11) NOT NULL,
  `mPagamento` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `piatti`
--

CREATE TABLE `piatti` (
  `idPiatto` varchar(3) NOT NULL,
  `nomePiatto` varchar(20) NOT NULL,
  `descPiatto` varchar(150) NOT NULL,
  `idCategoria` varchar(2) NOT NULL,
  `imgPath` varchar(50) NOT NULL,
  `prezzo` decimal(3,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `portate`
--

CREATE TABLE `portate` (
  `idPortata` varchar(10) NOT NULL,
  `idOrdine` varchar(10) NOT NULL,
  `idPiatto` varchar(3) NOT NULL,
  `quantita` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `tavoli`
--

CREATE TABLE `tavoli` (
  `idTavolo` int(11) NOT NULL,
  `urlTavolo` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `tavoli`
--

INSERT INTO `tavoli` (`idTavolo`, `urlTavolo`, `status`) VALUES
(1, '', '0'),
(2, '', '1'),
(3, '', '2'),
(4, '', '3'),
(5, '', '0'),
(6, '', '0'),
(7, '', '0'),
(8, '', '0');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indici per le tabelle `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`idMenu`);

--
-- Indici per le tabelle `neimenu`
--
ALTER TABLE `neimenu`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `neipiatti`
--
ALTER TABLE `neipiatti`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `ordini`
--
ALTER TABLE `ordini`
  ADD PRIMARY KEY (`idOrdine`);

--
-- Indici per le tabelle `piatti`
--
ALTER TABLE `piatti`
  ADD PRIMARY KEY (`idPiatto`);

--
-- Indici per le tabelle `portate`
--
ALTER TABLE `portate`
  ADD PRIMARY KEY (`idPortata`);

--
-- Indici per le tabelle `tavoli`
--
ALTER TABLE `tavoli`
  ADD PRIMARY KEY (`idTavolo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
