-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Nov 05, 2022 alle 09:52
-- Versione del server: 10.4.6-MariaDB
-- Versione PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_food`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `ingredienti`
--

CREATE TABLE `ingredienti` (
  `ID` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `ingredienti`
--

INSERT INTO `ingredienti` (`ID`, `nome`) VALUES
(2, 'farina 00'),
(3, 'lievito per dolci'),
(4, 'zucchero semolato'),
(5, 'uova'),
(6, 'burro morbido'),
(7, 'latte'),
(8, 'mele'),
(9, 'scorza di limone'),
(10, 'sale'),
(11, 'spaghetti'),
(12, 'pecorino romano'),
(13, 'pepe nero'),
(14, 'trancio di merluzzo'),
(15, 'pangrattato'),
(16, 'vino bianco'),
(17, 'prezzemolo'),
(18, 'salvia'),
(19, 'rosmarino'),
(20, 'olio extravergine d\'oliva'),
(21, 'pepe');

-- --------------------------------------------------------

--
-- Struttura della tabella `preferiti`
--

CREATE TABLE `preferiti` (
  `IDUtente` int(100) NOT NULL,
  `IDRicetta` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `prepara`
--

CREATE TABLE `prepara` (
  `IdRicetta` int(100) NOT NULL,
  `IdIngrediente` int(100) NOT NULL,
  `Quantità` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `prepara`
--

INSERT INTO `prepara` (`IdRicetta`, `IdIngrediente`, `Quantità`) VALUES
(2, 2, '300 grammi'),
(2, 3, '16 grammi'),
(2, 4, '150 grammi'),
(2, 5, '3'),
(2, 6, '100 grammi'),
(2, 7, '100 ml'),
(2, 8, '4'),
(2, 9, 'di 1 limone'),
(2, 10, '2/3 grammi'),
(3, 11, '320 grammi '),
(3, 12, '200 grammi'),
(3, 13, '2 cucchiai'),
(4, 14, '5 da 200 grammi l\'uno'),
(4, 15, '80 grammi'),
(4, 16, '100 ml'),
(4, 9, 'di un 1 limone'),
(4, 17, '1 ciuffetto'),
(4, 18, '4 foglie'),
(4, 19, '1 rametto'),
(4, 20, '4 cucchiai'),
(3, 10, ''),
(4, 10, ''),
(4, 21, '');

-- --------------------------------------------------------

--
-- Struttura della tabella `ricetta`
--

CREATE TABLE `ricetta` (
  `ID` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `n ingredienti` int(11) NOT NULL,
  `immagine` varchar(500) NOT NULL,
  `tempoprep` int(11) NOT NULL,
  `procedimento` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `ricetta`
--

INSERT INTO `ricetta` (`ID`, `nome`, `n ingredienti`, `immagine`, `tempoprep`, `procedimento`) VALUES
(2, 'Torta di Mele', 9, 'https://ricetta.it/Uploads/Imgs/torta-di-mele-classica.jpg', 60, '-Iniziate la preparazione della torta di mele montando in una ciotola il burro insieme allo zucchero semolato fino a ottenere un composto spumoso.\r\n-Unite le uova, uno alla volta, il latte e la scorza di limone.\r\nMescolate bene dopo ogni aggiunta. \r\n-Aggiungete la farina e il lievito setacciati, quindi mescolate con una spatola per amalgamare. Unite anche un pizzico di sale.\r\n-Sbucciate le mele, tagliatele a dadini non troppo grandi e aggiungetele all\'impasto, mescolando con cura. Disponete il tutto all\'interno di uno stampo circolare con cerchio apribile di 24 centimetri di diametro, opportunamente imburrato e infarinato, livellando bene con un cucchiaio. \r\n-Cuocete nel forno già caldo a 180° per circa 40 minuti, o comunque fino a quando uno stecchino infilato al centro del dolce uscirà asciutto. Sfornate e fate raffreddare completamente prima di sformare. Servite la torta di mele spolverizzando, a piacere, con zucchero a velo.'),
(3, 'Cacio e Pepe', 4, 'https://www.giallozafferano.it/images/219-21989/Spaghetti-Cacio-e-Pepe_450x300.jpg', 20, '-Iniziate a preparare la cacio e pepe pestando i grani di pepe in un mortaio fino a ridurli a una polvere fine. Grattugiate il formaggio in un’ampia ciotola, poi unite il pepe.\r\n-Scaldate l’acqua per la pasta, quando arriva a ebollizione, aggiungete una presa di sale grosso e tuffate i tonnarelli. Aggiungete gradatamente un po’ di acqua di cottura della pasta nella ciotola con il pecorino e mescolate energicamente con una frusta fino a ottenere una cremina. Scolate i tonnarelli, trasferiteli nella ciotola con il formaggio e mantecate.\r\n-Distribuite la cacio e pepe nei piatti da portata, aggiungete una spolverata di pepe a piacere e servite.'),
(4, 'Merluzzo Gratinato', 10, 'https://www.cucchiaio.it/content/cucchiaio/it/ricette/2018/02/merluzzo-gratinato/_jcr_content/header-par/image-single.img.jpg/1519903977793.jpg', 15, '-Iniziate la preparazione del merluzzo gratinato emulsionando in una ciotola 2 cucchiai di olio con il vino e il pepe fresco. Nel bicchiere di un mixer mettete le erbe aromatiche e tritatele finemente. Trasferite il trito in una boule con 2 cucchiai d’olio, il pangrattato e la scorza di limone grattugiata. \r\n-Mescolate e impanate con cura da entrambi i lati i tranci di merluzzo. Mettete i tranci impanati in una teglia e irrorateli con l’emulsione precedentemente preparata.\r\n-Infornateli a 180° per 15 minuti o fino a quando saranno ben dorati in superficie. I tranci di merluzzo gratinato sono pronti per essere serviti.');

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE `utente` (
  `ID` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(8) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `utente`
--

INSERT INTO `utente` (`ID`, `username`, `password`, `email`) VALUES
(2, 'lorenzomincio', 'lord1234', 'lorenzominciotti@gmail.com'),
(3, 'andrew', 'tgbhj', 'v.lauria3@gmail.com'),
(4, 'vegapunk807', 'reste588', 'barackobama@gmail.com'),
(5, 'rossivale', 'yamaha40', 'valentinorossi@gmail.com');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `ingredienti`
--
ALTER TABLE `ingredienti`
  ADD PRIMARY KEY (`ID`);

--
-- Indici per le tabelle `prepara`
--
ALTER TABLE `prepara`
  ADD KEY `Relazione Ricetta` (`IdRicetta`),
  ADD KEY `Relazione Ingrediente` (`IdIngrediente`);

--
-- Indici per le tabelle `ricetta`
--
ALTER TABLE `ricetta`
  ADD PRIMARY KEY (`ID`);

--
-- Indici per le tabelle `utente`
--
ALTER TABLE `utente`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `ingredienti`
--
ALTER TABLE `ingredienti`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT per la tabella `ricetta`
--
ALTER TABLE `ricetta`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT per la tabella `utente`
--
ALTER TABLE `utente`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `prepara`
--
ALTER TABLE `prepara`
  ADD CONSTRAINT `Relazione Ingrediente` FOREIGN KEY (`IdIngrediente`) REFERENCES `ingredienti` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Relazione Ricetta` FOREIGN KEY (`IdRicetta`) REFERENCES `ricetta` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
