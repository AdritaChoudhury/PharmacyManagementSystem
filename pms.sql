-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2021 at 08:33 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pms`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `get_patients` ()  NO SQL
SELECT * FROM `patients-login`$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `total-amt` int(11) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'PAID',
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`total-amt`, `status`, `time`) VALUES
(15, 'PAID', '0000-00-00 00:00:00'),
(15, 'PAID', '2021-01-20 01:01:12'),
(50, 'PAID', '2021-01-20 01:23:31'),
(30, 'PAID', '2021-01-20 05:44:59');

--
-- Triggers `checkout`
--
DELIMITER $$
CREATE TRIGGER `empty_cart` AFTER INSERT ON `checkout` FOR EACH ROW DELETE FROM `finalcart` WHERE 1
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `finalcart`
--

CREATE TABLE `finalcart` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hospital-login`
--

CREATE TABLE `hospital-login` (
  `ID` varchar(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Phone-No` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital-login`
--

INSERT INTO `hospital-login` (`ID`, `Name`, `Address`, `Phone-No`) VALUES
('A14FS', 'Dayananda Sagar Hospitals', 'Bengaluru,Karnataka', 2548684597),
('B3512', 'Nemcare Hospitals', 'Guwahati, Assam', 2548684597),
('C73F8', 'Adrita Institutions of Medical Care', 'Jaipur, Rajasthan', 5184632548);

-- --------------------------------------------------------

--
-- Table structure for table `patients-login`
--

CREATE TABLE `patients-login` (
  `ID` int(11) NOT NULL,
  `First-name` varchar(50) NOT NULL,
  `Last-name` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Age` tinyint(4) NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Hospital-name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients-login`
--

INSERT INTO `patients-login` (`ID`, `First-name`, `Last-name`, `Email`, `Password`, `Age`, `Phone`, `Gender`, `Hospital-name`) VALUES
(8, 'Adrita', 'Choudhury', 'adritachoudhury@gmail.com', 'adrita', 21, 2545896578, 'Female', 'Dayananda Sagar Hospitals'),
(9, 'Raja', 'Prashar', 'rajaprashar@yahoo.com', 'raja', 15, 4645854521, 'Male', 'Dayananda Sagar Hospitals'),
(11, 'Prakhar', 'Saxena', 'saxenaprakhar@gmail.com', 'prakhar', 21, 5421658745, 'Male', 'Nemcare Hospitals');

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shoppingcart`
--

INSERT INTO `shoppingcart` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, '25% Dextrose', 'MSI4353', 'product-images/dextrose.jpg', 15.00),
(2, '5-Amino salicylic Acid (5-ASA)', 'WD091', 'product-images/5-Amino salicylic Acid (5-ASA).jpg', 5.00),
(3, 'Allopurinol', 'LOTTO215', 'product-images/Allopurinol.jpg', 10.00),
(4, 'Amoxicillin+Clavulinic acid', 'AMC3827', 'product-images/Amoxicillin+Clavulinic acid.jpg', 15.00),
(5, 'Atorvastatin', 'ATS5124', 'product-images/Atorvastatin Calcium.JPG', 20.00),
(6, 'Betamethasone', 'BMS8734', 'product-images/Betamethasone.jpg', 10.00),
(7, 'Carboplatin', 'CP839W3', 'product-images/Carboplatin injection.jpg', 5.00),
(8, 'Cefixime', 'CFX2734', 'product-images/cefixime.jpg', 10.00),
(9, 'Cetrizine', 'CTZ7657', 'product-images/Cetrizine.jpg', 15.00),
(10, 'Chlorambucil', 'CMBO215', 'product-images/Chlorambucil.jpg', 19.00),
(11, 'Clindamycin', 'CDM72634', 'product-images/Clindamycin.jpg', 30.00),
(12, 'Clopidogrel', 'CPD3815', 'product-images/Clopidogrel.jpg', 4.00),
(13, 'Dacarbazine', 'DBZ6215', 'product-images/Dacarbazine.jpg', 11.00),
(14, 'Daunorubicin', 'DRC2786', 'product-images/Daunorubicin.jpg', 10.00),
(15, 'Diazepam', 'DZP9874', 'product-images/Diazepam.jpg', 13.00),
(16, 'EMLA cream', 'EML2761', 'product-images/EMLA cream.jpg', 18.00),
(17, 'Enoxaparin', 'EXP2783', 'product-images/Enoxaparin.jpg', 10.00),
(18, 'Famotidine', 'FMD2345', 'product-images/Famotidine.jpg', 5.00),
(19, 'Fentanyl', 'FTN9216', 'product-images/Fentanyl.jpg', 8.00),
(20, 'Filgrastim', 'FGT2764', 'product-images/Filgrastim.jpg', 10.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hospital-login`
--
ALTER TABLE `hospital-login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `patients-login`
--
ALTER TABLE `patients-login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patients-login`
--
ALTER TABLE `patients-login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
