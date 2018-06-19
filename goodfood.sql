-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 18, 2018 at 08:39 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goodfood`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nume` varchar(30) NOT NULL,
  `pass` int(4) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nume`, `pass`) VALUES
(1, 'ana', 1111);

-- --------------------------------------------------------

--
-- Table structure for table `categorii`
--

DROP TABLE IF EXISTS `categorii`;
CREATE TABLE IF NOT EXISTS `categorii` (
  `id_categ` int(4) NOT NULL AUTO_INCREMENT,
  `categ` varchar(30) NOT NULL,
  PRIMARY KEY (`id_categ`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categorii`
--

INSERT INTO `categorii` (`id_categ`, `categ`) VALUES
(1, 'ciorbe'),
(2, 'supe'),
(3, 'prep_carne_vita'),
(4, 'prep_carne_porc'),
(5, 'prep_carne_pui'),
(6, 'salate'),
(7, 'paste'),
(8, 'desert'),
(9, 'garnituri'),
(10, 'sosuri'),
(11, 'bauturi_nealcoolice'),
(12, 'bauturi_alcoolice');

-- --------------------------------------------------------

--
-- Table structure for table `clienti`
--

DROP TABLE IF EXISTS `clienti`;
CREATE TABLE IF NOT EXISTS `clienti` (
  `tel` varchar(20) NOT NULL,
  `parola` char(32) NOT NULL,
  `nume` varchar(30) NOT NULL,
  `adresa` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`tel`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clienti`
--

INSERT INTO `clienti` (`tel`, `parola`, `nume`, `adresa`, `email`) VALUES
('0741525889', '81dc9bdb52d04dc20036dbd8313ed055', 'Alina Florescu', 'Strada Lalelor nr. 5', 'alinaFlorescu@yahoo.com'),
('0264555888', '81dc9bdb52d04dc20036dbd8313ed055', 'Laura Dana', 'Strada Manastirii nr.9', 'laura_dana@gmail.com'),
('0745254878', '81dc9bdb52d04dc20036dbd8313ed055', 'ana', 'aaaa', 'ddddd');

-- --------------------------------------------------------

--
-- Table structure for table `comenzi`
--

DROP TABLE IF EXISTS `comenzi`;
CREATE TABLE IF NOT EXISTS `comenzi` (
  `cod_comanda` int(4) NOT NULL AUTO_INCREMENT,
  `tel` varchar(20) NOT NULL,
  `id_produs` int(4) NOT NULL,
  `bucati` int(4) NOT NULL,
  `data_comenzii` date NOT NULL,
  PRIMARY KEY (`cod_comanda`)
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comenzi`
--

INSERT INTO `comenzi` (`cod_comanda`, `tel`, `id_produs`, `bucati`, `data_comenzii`) VALUES
(62, '0745254878', 92, 1, '2018-06-18');

-- --------------------------------------------------------

--
-- Table structure for table `produse`
--

DROP TABLE IF EXISTS `produse`;
CREATE TABLE IF NOT EXISTS `produse` (
  `id_produs` int(4) NOT NULL AUTO_INCREMENT,
  `id_categ` int(4) NOT NULL,
  `prod` varchar(50) NOT NULL,
  `imag1` varchar(30) NOT NULL,
  `imag2` varchar(30) NOT NULL,
  `pret` double NOT NULL,
  `prezentare` varchar(500) NOT NULL,
  PRIMARY KEY (`id_produs`)
) ENGINE=MyISAM AUTO_INCREMENT=134 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produse`
--

INSERT INTO `produse` (`id_produs`, `id_categ`, `prod`, `imag1`, `imag2`, `pret`, `prezentare`) VALUES
(24, 6, 'Salata greceasca', 'imagine24.jpg', 'imagine24M.jpg', 16, 'O salata facuta exact ca in Grecia.'),
(16, 1, 'Ciorba de vacuta', 'imagine16.jpg', 'imagine16M.jpg', 15, 'Ciorba este facuta din carne de vitel proaspat'),
(39, 1, 'Ciorba de cartofi', 'imagine39.jpg', 'imagine39M.jpg', 10, 'Ciorba taraneasca de cartofi.'),
(23, 6, 'Salata casei', 'imagine23.jpg', 'imagine23M.jpg', 35, 'O salata cu iz mediteraneean, cu orez si fructe de mare.'),
(30, 1, 'Ciorba de afumatura', 'imagine30.jpg', 'imagine30M.jpg', 17, 'Ciorbica din afumatura de purcel.'),
(21, 2, 'Supa de taitei', 'imagine21.jpg', 'imagine21M.jpg', 12, 'Supica este facuta cu supa de pui.'),
(20, 2, 'Supa de galuste', 'imagine20.jpg', 'imagine20M.jpg', 13, 'Supa cu gust de &quot;copilarie&quot;'),
(19, 1, 'Ciorba de perisoare', 'imagine19.jpg', 'imagine19M.jpg', 17, 'Ciorba de perisoare din cane de vita in amestec cu porc, inacrita cu bors.'),
(18, 1, 'Ciorba de fasole', 'imagine18.jpg', 'imagine18M.jpg', 15, 'Ciorbica de fasole alba, cu cimbru si inacrita cu zeama de varza.'),
(25, 6, 'Salata cu ou', 'imagine25.jpeg', 'imagine25M.jpeg', 22, 'Delicios de sanatoasa'),
(26, 6, 'Salata cu piept de pui', 'imagine26.jpg', 'imagine26M.jpg', 27, 'Salata cu piept de pui preparat la gratar.'),
(27, 6, 'Salata cu creveti', 'imagine27.jpg', 'imagine27M.jpg', 37, 'Salata cu creveti proaspteti.'),
(28, 6, 'Salata boeuf', 'imagine28.jpg', 'imagine28M.jpg', 35, 'salata boeuf este facuta cu legume proaspete, maioneza din oua si carne de vitel.'),
(29, 6, 'Salta cu ton', 'imagine29.jpg', 'imagine29M.jpg', 33, 'Salata cu ton bucati, deosebit de delicioasa pentru cei ce iubesc tonul.'),
(31, 1, 'Ciorba de pui', 'imagine31.jpg', 'imagine31M.jpg', 18, 'Ciorba de pui acrita cu tarhon murat si smantana'),
(32, 1, 'Ciorba de curcan', 'imagine32.jpg', 'imagine32M.jpg', 18, 'Ciorba de curcan preparata ca la mama acasa cu ingredinete proaspete.'),
(33, 1, 'Ciorba de burta', 'imagine33.jpg', 'imagine33M.jpg', 18, 'Ciorba de burta din burta prefiarta cu oase de vitel.'),
(34, 1, 'Ciorba de potroace', 'imagine34.jpg', 'imagine34M.jpg', 14, 'Ciorba de potroace acrita cu bors.'),
(35, 2, 'Supa de rosii', 'imagine35.jpg', 'imagine35M.jpg', 12, 'Supa din rosii proaspete si busuioc.'),
(36, 2, 'Supa de broccoli', 'imagine36.jpg', 'imagine36M.jpg', 15, 'Supa crema din brocoli cu putin usturoi si smantana.'),
(37, 2, 'Supa crema ciuperci', 'imagine37.png', 'imagine37M.png', 15, 'Supa din ciuperci champignon.'),
(38, 2, 'Supa crema dovleac', 'imagine38.jpg', 'imagine38M.jpg', 13, 'Supa de dovlecel foarte gustoasa.'),
(40, 3, 'Vita cu sos de ciuperci', 'imagine40.jpg', 'imagine40M.jpg', 45, 'Vita la cuptor cu sos de ciupercute champignon.'),
(41, 3, 'Friptura de vitel cu sos de piper verde', 'imagine41.jpg', 'imagine41M.jpg', 55, 'Friptura este pregatita la tigaie si lasata mai apoi la cuptor.'),
(42, 3, 'Vita la cuptor', 'imagine42.jpg', 'imagine42M.jpg', 50, 'Vitel la cuptor proaspat si aromat.'),
(43, 3, 'Vita marinata cu fasole verde si sos de piper', 'imagine43.jpg', 'imagine43M.jpg', 66, 'Vita este tinuta la bait si pregatita cu maiestrie de bucatii nostri pentru a va imbia simturile.'),
(44, 3, 'Vita caramelizata', 'imagine44.jpg', 'imagine44M.jpg', 50, 'Vita in sos caramelizata.'),
(45, 3, 'Rasol de vita in sos picant', 'imagine45.jpg', 'imagine45M.jpg', 60, 'Vita pegatita in sos picant la tigaie.'),
(46, 3, 'Vita in sos de piper cu cafea', 'imagine46.jpg', 'imagine46M.jpg', 65, 'Vita este pregatita in cuptor iar sosul de cafea cu pieper va imbie simturile.'),
(47, 3, 'Vita in sos salsa si ansoa', 'imagine47.jpg', 'imagine47M.jpg', 75, 'Aceasta vita este deosebit de aromata pentru iubitorii de ansoa.'),
(48, 4, 'Ceafa la gratar', 'imagine48.jpg', 'imagine48M.jpg', 35, 'Ceafa la gratar'),
(49, 4, 'Tigaie picanta cu porc', 'imagine49.jpg', 'imagine49M.jpg', 40, 'Ceafa de porc cu ceapa picanta.'),
(50, 4, 'Chiftelute moldovenesti', 'imagine50.jpg', 'imagine50M.jpg', 35, 'Chiftele din carne de porc si cartofi.'),
(51, 4, 'Costite picante', 'imagine51.jpg', 'imagine51M.jpg', 45, 'Costite bine condimentate.'),
(52, 4, 'Costite', 'imagine52.jpg', 'imagine52M.jpg', 40, 'Costite pregatite special pentru pretentiosi.'),
(53, 4, 'Costite afumate', 'imagine53.jpg', 'imagine53M.jpg', 44, 'Costite de porc afumate si pregatite in cuptor.'),
(54, 4, 'Cotlet de porc in sos dulce acrisor', 'imagine54.jpg', 'imagine54M.jpg', 40, 'Acest preparat este destinat celora carora le place aroma asiatica.'),
(55, 4, 'Mititei', 'imagine55.jpg', 'imagine55M.jpg', 15, 'Mititei cu paine si mustar din partea casei.'),
(56, 4, 'Mazare cu porc', 'imagine56.jpg', 'imagine56M.jpg', 25, 'Mazare dulce cu porc.'),
(57, 4, 'Gulas', 'imagine57.jpg', 'imagine57M.jpg', 20, 'Gulas de purcel picant.'),
(58, 4, 'Porc dulce acrisor', 'imagine58.jpg', 'imagine58M.jpg', 30, 'Purcelus preparat in stil asiatic.'),
(59, 5, 'Aripioare picante', 'imagine59.jpg', 'imagine59M.jpg', 35, 'Aripiare picante foarte gustoase.'),
(60, 5, 'Piept de pui la gratar', 'imagine60.jpg', 'imagine60M.jpg', 18, 'Piept de pui bine condimentat la gratar.'),
(61, 5, 'Pui shangai', 'imagine61.jpg', 'imagine61M.jpg', 25, 'Pui shangai delicios.'),
(62, 5, 'Cordon bleu', 'imagine62.jpg', 'imagine62M.jpg', 30, 'Cordon bleu din pui, bacon si cascaval.'),
(63, 5, 'Pui fript', 'imagine63.jpg', 'imagine63M.jpg', 35, 'Pui foarte bine fript deosebit de gustos.'),
(64, 5, 'Pui cu sos de lamaie', 'imagine64.jpg', 'imagine64M.jpg', 35, 'Pui pregatit in cuptor cu un delicios sos de lamaie.'),
(65, 5, 'Ciulama', 'imagine65.jpg', 'imagine65M.jpg', 37, 'Ciulama de pui cu smantana si ciuperci.'),
(66, 5, 'Tocanita de pui cu mamaliguta', 'imagine66.jpg', 'imagine66M.jpg', 37, 'Tocanita ca la mama acasa.'),
(68, 7, 'Paste bolognese', 'imagine68.jpg', 'imagine68M.jpg', 34, 'Paste cu sos  ragu.'),
(69, 7, 'Paste carbonara', 'imagine69.jpg', 'imagine69M.jpg', 37, 'Paste cu bacon si sos alb.'),
(70, 7, 'Paste cu fructe de mare', 'imagine70.jpg', 'imagine70M.jpg', 40, 'Paste cu fructe de mare deosebit de bine pregatite pentru dumneavoastra.'),
(71, 7, 'Paste cu sos de rosii', 'imagine71.jpg', 'imagine71M.jpg', 20, 'Simple si delicioase.'),
(72, 7, 'Paste oglio olio peperoncino', 'imagine72.jpg', 'imagine72M.jpg', 27, 'Paste gatite in stil mediteranean.'),
(73, 7, 'Tagliatele in sos pesto', 'imagine73.jpg', 'imagine73M.jpg', 32, 'Tagliatele facute in casa cu sos pesto.'),
(74, 7, 'Penne al\'Arrabiata', 'imagine74.jpg', 'imagine74M.jpg', 28, 'Paste cu sos rosu picant.'),
(75, 10, 'Ketchup dulce', 'imagine75.jpg', 'imagine75M.jpg', 2, 'Ketchup dulce'),
(76, 10, 'Ketchup picant', 'imagine76.jpg', 'imagine76M.jpg', 2, 'Ketchup picant'),
(77, 10, 'Sos de rosii dulce', 'imagine77.jpg', 'imagine77M.jpg', 3, 'Sos de rosii dulce facut in casa'),
(78, 10, 'Sos de rosii picant', 'imagine78.jpg', 'imagine78M.jpg', 3, 'Sos de rosii picant facut in casa.'),
(79, 10, 'Sos de maioneza', 'imagine79.jpg', 'imagine79M.jpg', 3, 'Maioneza facuta in casa.'),
(80, 10, 'Maioneza cu usturoi', 'imagine80.jpg', 'imagine80M.jpg', 3, 'Maioneza cu usturoi facute in casa.'),
(81, 10, 'Sos de lamaie', 'imagine81.jpg', 'imagine81M.jpg', 3, 'Sos de lamaie'),
(82, 10, 'Sos tartar', 'imagine82.jpg', 'imagine82M.jpg', 4, 'Sos tartar'),
(83, 10, 'Sos tzatziki', 'imagine83.jpg', 'imagine83M.jpg', 4, 'Sos tzatziki'),
(84, 10, 'Ulei picant', 'imagine84.jpg', 'imagine84M.jpg', 4, 'Ulei picant'),
(85, 9, 'Cartofi aurii', 'imagine85.JPG', 'imagine85M.JPG', 10, 'Cartofi aurii'),
(86, 9, 'Piure de cartofi', 'imagine86.jpg', 'imagine86M.jpg', 7, 'Piure de cartofi'),
(87, 9, 'Mix de legume', 'imagine87.jpg', 'imagine87M.jpg', 12, 'Mix de legume'),
(88, 9, 'Orez cu legume', 'imagine88.jpg', 'imagine88M.jpg', 10, 'Orez cu legume'),
(89, 9, 'Orez alb', 'imagine89.jpg', 'imagine89M.jpg', 10, 'Orez alb'),
(90, 9, 'Cartofi prajiti', 'imagine90.jpg', 'imagine90M.jpg', 8, 'Cartofi prajiti'),
(91, 9, 'Legume grill', 'imagine91.jpg', 'imagine91M.jpg', 15, 'Legume grill'),
(92, 9, 'Broccoli', 'imagine92.jpg', 'imagine92M.jpg', 10, 'Broccoli'),
(93, 9, 'Baby morcovi caramelizati', 'imagine93.jpg', 'imagine93M.jpg', 10, 'Baby morcovi caramelizati'),
(94, 8, 'Amandina', 'imagine94.jpg', 'imagine94M.jpg', 7, 'Amandina'),
(95, 8, 'Cremsnit', 'imagine95.jpg', 'imagine95M.jpg', 7, 'Cremsnit'),
(96, 8, 'Ecler fondant', 'imagine96.jpg', 'imagine96M.jpg', 7, 'Ecler fondant'),
(97, 8, 'Ecler cacaco', 'imagine97.jpg', 'imagine97M.jpg', 7, 'Ecler cacaco'),
(98, 8, 'Ecler vanilie', 'imagine98.jpg', 'imagine98M.jpg', 7, 'Ecler vanilie'),
(99, 8, 'Ceescake zmeura', 'imagine99.jpg', 'imagine99M.jpg', 12, 'Ceescake zmeura'),
(100, 8, 'Ceescake visine', 'imagine100.jpg', 'imagine100M.jpg', 12, 'Ceescake visine'),
(101, 8, 'Ceescake caramel', 'imagine101.jpg', 'imagine101M.jpg', 12, 'Ceescake caramel'),
(102, 8, 'Fursecuri fructe', 'imagine102.jpg', 'imagine102M.jpg', 10, 'Fursecuri fructe'),
(103, 8, 'Negresa', 'imagine103.jpg', 'imagine103M.jpg', 7, 'Negresa'),
(104, 8, 'Savarina', 'imagine104.JPG', 'imagine104M.JPG', 7, 'Savarina'),
(105, 11, 'Apa plata', 'imagine105.jpeg', 'imagine105M.jpeg', 3, 'Apa plata'),
(106, 11, 'Apa minerala', 'imagine106.jpg', 'imagine106M.jpg', 3, 'Apa minerala'),
(107, 11, 'Bautura racoritoare', 'imagine107.jpg', 'imagine107M.jpg', 4, 'Bautura racoritoare'),
(124, 11, 'Bautura racoritoare', 'imagine124.jpg', 'imagine124M.jpg', 4, 'Bautura racoritoare'),
(109, 11, 'Bautura racoritoare', 'imagine109.jpg', 'imagine109M.jpg', 4, 'Bautura racoritoare'),
(110, 11, 'Bautura racoritoare', 'imagine110.jpg', 'imagine110M.jpg', 4, 'Bautura racoritoare'),
(111, 11, 'Bautura racoritoare', 'imagine111.jpg', 'imagine111M.jpg', 4, 'Bautura racoritoare'),
(112, 11, 'Bautura racoritoare', 'imagine112.jpg', 'imagine112M.jpg', 4, 'Bautura racoritoare'),
(125, 12, 'Vin rosu', 'imagine125.jpg', 'imagine125M.jpg', 30, 'Vin rosu'),
(114, 12, 'Bere', 'imagine114.jpg', 'imagine114M.jpg', 5, 'Bere'),
(115, 12, 'Bere  nefiltrata', 'imagine115.jpg', 'imagine115M.jpg', 6, 'Bere  nefiltrata'),
(116, 12, 'Bere blonda', 'imagine116.jpg', 'imagine116M.jpg', 8, 'Bere blonda'),
(117, 12, 'Vin rose', 'imagine117.jpg', 'imagine117M.jpg', 25, 'Vin rose'),
(118, 12, 'Vin rose', 'imagine118.jpg', 'imagine118M.jpg', 27, 'Vin rose'),
(120, 12, 'Vin alb', 'imagine120.jpg', 'imagine120M.jpg', 27, 'Vin alb'),
(121, 12, 'Vin alb', 'imagine121.jpg', 'imagine121M.jpg', 30, 'Vin alb'),
(122, 12, 'Whisky', 'imagine122.jpg', 'imagine122M.jpg', 100, 'Whisky'),
(123, 12, 'Cognac', 'imagine123.jpg', 'imagine123M.jpg', 130, 'Cognac');

-- --------------------------------------------------------

--
-- Table structure for table `vizitatori`
--

DROP TABLE IF EXISTS `vizitatori`;
CREATE TABLE IF NOT EXISTS `vizitatori` (
  `nr` int(4) NOT NULL AUTO_INCREMENT,
  `nume` varchar(30) NOT NULL,
  `prenume` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mesaj` varchar(500) NOT NULL,
  PRIMARY KEY (`nr`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vizitatori`
--

INSERT INTO `vizitatori` (`nr`, `nume`, `prenume`, `email`, `mesaj`) VALUES
(2, 'Iosiv', 'Ana', 'iosivana@gmail.com', 'Imi doresc sa lucrez in restaurantul dumneavoastra.va rog sa ma contactati daca sunteto interesat la nr de telefon 0746555444.Va multumesc'),
(3, 'Marica', 'Manuel', 'manu_mari@yahoo.com', 'As dori sa va transmit toata recunostinta mea pentru petrecerea de sambata. a fost minunat.'),
(21, 'Ionela', 'Muresan', 'muresan_ionela@yahoo.com', 'Mi-ar placea sa fiti mai prompti cu livrarea.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
