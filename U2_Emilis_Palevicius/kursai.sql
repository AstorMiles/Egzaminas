-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2021 at 11:53 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mokymai`
--

-- --------------------------------------------------------

--
-- Table structure for table `kursai`
--

CREATE TABLE `kursai` (
  `autorius` varchar(100) NOT NULL,
  `kurso_ikelimas` timestamp NOT NULL DEFAULT current_timestamp(),
  `kurso_pavadinimas` varchar(100) NOT NULL,
  `kurso_aprasas_trump` varchar(200) NOT NULL,
  `kurso_aprasas_ilg` varchar(2000) NOT NULL,
  `Img_nuoroda` varchar(100) DEFAULT NULL,
  `Kurso_populiarumas` int(11) DEFAULT NULL,
  `Komentarai_ID` int(11) NOT NULL,
  `Kaina` int(11) DEFAULT NULL,
  `Reitingas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kursai`
--

INSERT INTO `kursai` (`autorius`, `kurso_ikelimas`, `kurso_pavadinimas`, `kurso_aprasas_trump`, `kurso_aprasas_ilg`, `Img_nuoroda`, `Kurso_populiarumas`, `Komentarai_ID`, `Kaina`, `Reitingas`) VALUES
('Vardas', '2021-06-22 09:29:03', 'Žiniatinklio programuotojas', ' Žiniatinklio programuotojo kursai ...', 'Būsimas specialistas turi gebėti eksploatuoti kompiuterio techninę įrangą ir derinti operacines sistemas, pritaikyti taikomąsias programas įvairiems vartotojų poreikiams bei mokės projektuoti, kurti ir administruoti internetinius puslapius. ...', 'img/php.jpg', 105, 1, 460, 5),
('Vardas', '2021-06-22 09:46:52', 'HTML/CSS Įvadas', ' Lorem ipsum dolor sit amet ...', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ...', 'img/css.jpg', 255, 2, 420, 5),
('Vardas', '2021-06-22 09:51:48', 'Pažintis su GIT ', ' Lorem ipsum dolor sit amet ...', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ...', 'img/git.jpg', 25, 3, 120, 3),
('Vardas', '2021-06-22 09:52:53', 'JavaScript Žaliems', ' Lorem ipsum dolor sit amet ...', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ...', 'img/js.jpg', 210, 4, 480, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kursai`
--
ALTER TABLE `kursai`
  ADD PRIMARY KEY (`Komentarai_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kursai`
--
ALTER TABLE `kursai`
  MODIFY `Komentarai_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
