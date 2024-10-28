-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2024 at 11:40 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portofolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `birthY` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `name`, `fname`, `birthY`) VALUES
(1, 'Stanley', 'Stanley Alexsander Tamboto', 2004);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `fname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`fname`, `email`, `message`) VALUES
('Abdul Jamal', 'abdul.keren@gmail.com', 'Halo pesan ini merupakan testing untuk fitur message pada kontak aja yaa, silahkan hubungi 085162629904 (Stanley) untuk peninjauan lebih lanjut.');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `photo` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`photo`, `description`) VALUES
('janjiw.jpg', 'Janji Jiwa coffe shop'),
('kotu_building_2.jpg', 'Building of Kota Tua'),
('kotu_building_3.jpg', 'Building of Kota Tua'),
('kotu_building.jpg', 'Building of Kota Tua'),
('kotu_lamp.jpg', 'Building of Kota Tua'),
('kotu_shop.jpg', 'Building of Kota Tua'),
('kotu_street.jpg', 'Street of Kota Tua'),
('kotu_window.jpg', 'Building of Kota Tua'),
('starbucks.jpg', 'Starbucks signing store'),
('station_2.jpg', 'Jakarta train station'),
('station.jpg', 'Jakarta train station');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `industry` varchar(50) NOT NULL,
  `year` int(4) NOT NULL,
  `overview` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `name`, `industry`, `year`, `overview`) VALUES
(1, 'DMSlib', 'Software House', 2021, 'DMSlib is a web application designed to make it easier for users to store and manage documents online. This website is developed with a minimal and simple UI so that new users can use it easily.'),
(2, 'PLKM', 'Service', 2022, 'PLKM is a company profile website for the Pusat Literasi Komunikasi Media (Media Communication Literacy Center). The organization operates in the field of psychological training services for educators. The website is designed with simplicity in mind, and its color palette matches the organization\'s logo.'),
(3, 'SMKS<br>Nusantara', 'School', 2023, 'This website was built for the company profile needs of SMKS Nusantara 01 Ciputat, located in South Tangerang, Indonesia. This institution operates privately in the field of education at the Vocational High School level.');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`name`) VALUES
('UI Design'),
('UX Design'),
('Frontend'),
('Backend'),
('Database'),
('Maintenance');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `name` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`name`, `category`) VALUES
('App Design', 'Design'),
('Icon Design', 'Design'),
('Interface Design', 'Design'),
('Wireframe', 'Design'),
('User Flows', 'Design'),
('Laravel', 'Develop'),
('Django', 'Develop'),
('Bootstrap', 'Develop'),
('MYSQL', 'Develop'),
('PHP', 'Other'),
('Python', 'Other'),
('Javascript', 'Other'),
('Webflow', 'Other'),
('Figma', 'Tools'),
('AdobeXD', 'Tools'),
('Photoshop', 'Tools'),
('CorelDRAW', 'Tools'),
('VSCode', 'Tools'),
('XAMPP', 'Tools'),
('PostgreSQL', 'Tools');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
