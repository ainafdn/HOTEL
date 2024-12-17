-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2020 at 09:48 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `idaddress` int(11) NOT NULL,
  `address1` varchar(20) NOT NULL,
  `address2` varchar(20) NOT NULL,
  `town` varchar(20) NOT NULL,
  `postcode` varchar(5) NOT NULL,
  `states` varchar(15) NOT NULL,
  `icguest` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`idaddress`, `address1`, `address2`, `town`, `postcode`, `states`, `icguest`) VALUES
(11, 'U-12', 'FLAT SRI AMAN ', 'HULU PERLIS', '88898', 'PERLIS', '750722087675'),
(12, 'NO.27', 'JALAN 1', 'BANDAR BARU RAYA', '56777', 'MELAKA', '880822160878'),
(13, 'NO.40', 'TAMAN INDAH JAYA ', 'HILIR ', '43100', 'SELANGOR', '080612801619'),
(14, 'LOT 668', 'TAMAN SETIA ALAM', 'KG TERSUSUSN', '87897', 'SELANGOR', '780924080976'),
(15, 'NO 34 JALAN MAJU', '', 'TAMAN MAJU', '43000', 'SELANGOR', '901231035672'),
(16, 'E203, JLN WAWASAN 3', 'TAMAN WAWASAN', 'HULU LANGAT', '43600', 'SELANGOR', '030614100338'),
(17, 'LOT 5 JALAN 6', 'TAMAN SETIA KAWAN ', 'LEKIR', '76600', 'PERAK', '980926112345'),
(18, 'JALAN JALAN CARI MAK', 'KAMPUNG ERM SEDAPNYA', 'HULU LANGAT', '43100', 'SELANGOR', '030527141297'),
(19, 'LOT 9 TAMAN DAMAI', 'AMAN SENTOSA', 'HULU LANGAT', '43100', 'SELANGOR', '980711180982'),
(20, 'NO.7', 'JALAN TASIK', 'PERMAI', '43890', 'KEDAH', '780922100897'),
(21, 'KIP', 'ALAM INDAH', 'SECRET', '87600', 'IRELAND', '12345678910'),
(22, 'DAMAI IMPIAN', 'TAMAN SYURGA', 'JALAN JODOH', '13800', 'BANGLA', '130803140850'),
(26, 'NO.9', 'JALAN BESTARI ', 'HULU LANGAT', '43100', 'SELANGOR ', '780911109871'),
(27, 'NO.8 ', 'LAMAN GAHAL ', 'HULU LANGAT', '43100', 'SELANGOR', '780909110987');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `idbook` int(11) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date DEFAULT NULL,
  `idroom` int(10) NOT NULL,
  `icguest` varchar(12) NOT NULL,
  `payment` decimal(10,2) NOT NULL,
  `idstaff` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`idbook`, `check_in`, `check_out`, `idroom`, `icguest`, `payment`, `idstaff`) VALUES
(43, '2020-08-20', '2020-08-22', 66, '030527141297', '400.00', 'admin'),
(45, '2020-09-01', '2020-09-06', 67, '080612801619', '2000.00', 'admin'),
(46, '2020-08-29', '2020-08-30', 71, '780924080976', '300.00', 'ahmad'),
(47, '2020-09-16', '2020-09-20', 71, '980711180982', '1200.00', 'ahmad'),
(48, '2020-08-20', '2020-08-23', 74, '980926112345', '900.00', 'admin'),
(51, '2020-09-26', '2020-09-30', 73, '980926112345', '1600.00', 'admin'),
(52, '2020-09-26', '2020-09-30', 66, '980926112345', '800.00', 'admin'),
(53, '2020-09-01', '2020-09-03', 66, '750722087675', '400.00', 'admin'),
(54, '2020-08-20', '2020-08-25', 67, '780909110987', '2000.00', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `idcat` int(10) NOT NULL,
  `category` varchar(20) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`idcat`, `category`, `price`) VALUES
(11, 'SINGLE ROOM ', '200.00'),
(14, 'FAMILY ROOM', '400.00'),
(15, 'TWIN ROOM', '300.00'),
(16, 'TRIPLE BED ROOM', '550.00');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `icguest` varchar(12) NOT NULL,
  `name` varchar(50) NOT NULL,
  `hpnum` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`icguest`, `name`, `hpnum`) VALUES
('030527141297', 'DZAREEQ HAIQAL', '0173271642'),
('030614100338', 'IZZAH AZMAN', '0183977221'),
('080612801619', 'ZAINAB BIN MUKMIN', '018792817417'),
('12345678910', 'FASIHATUL SI SYOMELLL', '01222334556'),
('130803140850', 'DANIEL GEBU GEBASSSS', '0129876809'),
('750722087675', 'NURUL NABILAH BT AZMAN ', '01764327992'),
('780909110987', 'NUR IZZAH BT FAKHRUDDIN', '0123478896'),
('780911109871', 'MUHD ISMAIL BIN ILYAS', '01922781900'),
('780922100897', 'AJLA BINTI SINA', '019988182898'),
('780924080976', 'MUHD NUH BIN OMAR ', '017829363817'),
('880822160878', 'HALIM AHMAD BIN ABU', '013456879898'),
('901231035672', 'AINUL BARIZAH BINTI MOHAMAD SHAFIE', '0195672908'),
('980711180982', 'GHAZALI BIN AMEEN', '019209201920'),
('980926112345', 'AHMAD DANIAL  BIN ABDUL', '019874356564');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `nomroom` varchar(10) NOT NULL,
  `idcat` int(10) NOT NULL,
  `idroom` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`nomroom`, `idcat`, `idroom`) VALUES
('E01', 11, 66),
('E02 ', 14, 67),
('E03 ', 15, 68),
('E04 ', 11, 69),
('E05 ', 14, 70),
('E06', 15, 71),
('E07', 11, 72),
('E08', 14, 73),
('E09', 15, 74);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `idstaff` varchar(10) CHARACTER SET latin1 NOT NULL,
  `name` varchar(50) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `levels` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`idstaff`, `name`, `pass`, `levels`) VALUES
('admin', 'NUR AINA BT FAKHRUDDIN(manager)', '1234', 'ADMIN'),
('ahmad', 'AHMAD BIN ALBAL', '1313', 'STAFF'),
('aira', 'NUR AIRA BT KAMAL', '2333', 'STAFF'),
('akil', 'AQIL ADAM BIN ABU', 'kkk', 'STAFF'),
('chong ', 'LEE CHONG TAN ', '9495', 'STAFF'),
('hanisa ', 'NUR HANISA BT ALI ', '8787', 'STAFF'),
('maya', 'AMAYA BT AMIN', '000', 'STAFF'),
('nazrul', 'NAZRUL IMAN BIN RAZAK', '909', 'STAFF'),
('niel', 'DANIEL BIN DANISH', 'pass', 'STAFF'),
('nina02', 'ALIA ADLINA BT ABDUL KADIR', 'abc000', 'STAFF'),
('shah33', 'MOHD SHAHRIL BIN ANWAR', '9090', 'STAFF');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`idaddress`),
  ADD KEY `icguest` (`icguest`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`idbook`),
  ADD KEY `icguest` (`icguest`),
  ADD KEY `idroom` (`idroom`),
  ADD KEY `idstaff` (`idstaff`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`idcat`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`icguest`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`idroom`),
  ADD KEY `idcat` (`idcat`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`idstaff`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `idaddress` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `idbook` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `idcat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `idroom` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`icguest`) REFERENCES `guest` (`icguest`);

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`icguest`) REFERENCES `guest` (`icguest`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`idroom`) REFERENCES `room` (`idroom`),
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`idstaff`) REFERENCES `staff` (`idstaff`);

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`idcat`) REFERENCES `categories` (`idcat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
