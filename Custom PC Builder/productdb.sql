-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2017 at 12:25 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `productdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL DEFAULT 'admin',
  `password` varchar(20) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `casings`
--

CREATE TABLE `casings` (
  `id` int(11) NOT NULL,
  `item` varchar(50) NOT NULL,
  `details` varchar(200) NOT NULL,
  `price` int(20) NOT NULL,
  `shop` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `casings`
--

INSERT INTO `casings` (`id`, `item`, `details`, `price`, `shop`) VALUES
(1, 'Cooler Master Mid Tower Centurion', 'Front: 140 x 25 mm Blue LED on /off fan x 1, Rear: 120 mm fan x 1, Cooling Fan Optional ', 5500, 'ADC'),
(2, 'Thermaltake CA-1E3-00M1WN-02 Suppressor F31 ', 'Front Audio Port - HD Audio x 1, 5.25 - 2, 3.5 - 3, 2.5 - 2, Cooling Fan Built In - Front: 1 x 120mm, Rear: 1 x 120mm, Cooling Fan Optional', 8200, 'DEF');

-- --------------------------------------------------------

--
-- Table structure for table `dvds`
--

CREATE TABLE `dvds` (
  `id` int(11) NOT NULL,
  `item` varchar(50) NOT NULL,
  `details` varchar(200) NOT NULL,
  `price` int(20) NOT NULL,
  `shop` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dvds`
--

INSERT INTO `dvds` (`id`, `item`, `details`, `price`, `shop`) VALUES
(1, 'Asus DRW-24D5MT 24X Dual Layer', 'nternal DVD Writer, Interface - SATA, Buffer (MB) - 2, Write Speed (DVD) - 20X, Write Speed (CD) - 48X, Read Speed (DVD) - 16X', 1500, 'ABC'),
(2, 'Asus SBW-06D2X-U', 'Model - Asus SBW-06D2X-U, Type - External DVD Writer, Interface - USB 2.0, Write Speed (DVD) - 8X, 6X, 5X, Write Speed (CD) - 24X, 16X', 7800, 'kkk');

-- --------------------------------------------------------

--
-- Table structure for table `gpus`
--

CREATE TABLE `gpus` (
  `id` int(11) NOT NULL,
  `item` varchar(50) NOT NULL,
  `details` varchar(200) NOT NULL,
  `price` int(20) NOT NULL,
  `shop` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gpus`
--

INSERT INTO `gpus` (`id`, `item`, `details`, `price`, `shop`) VALUES
(1, 'ZOTAC GeForce GT 1030 2GB GDDR5 Graphics Card', 'Chipset - NVIDIA GeForce, Graphics Engine Model - ZOTAC GeForce GT 1030, Interface Bus - PCI Express 3.0, Engine Clock - Base-1227MHz / Boost-1468MHz,', 7300, 'ABC'),
(2, 'Gigabyte GeForce GTX Gaming 4GB DDR5 Graphics Card', 'Chipset - GeForce GTX 1050 Ti, Graphics Engine Model - Gigabyte GeForce GTX 1050 Ti G1, Interface Bus - PCI-Express 3.0, Engine Clock - Base-1392MHz ', 16500, 'DEF');

-- --------------------------------------------------------

--
-- Table structure for table `keyboards`
--

CREATE TABLE `keyboards` (
  `id` int(11) NOT NULL,
  `item` varchar(50) NOT NULL,
  `details` varchar(200) NOT NULL,
  `price` int(20) NOT NULL,
  `shop` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keyboards`
--

INSERT INTO `keyboards` (`id`, `item`, `details`, `price`, `shop`) VALUES
(1, 'Keyboard1', 'asdsafsfsdvsdvdxv', 500, 'ADB'),
(2, 'Keyboard2', 'dfsfdsfsfs', 8000, 'AAA');

-- --------------------------------------------------------

--
-- Table structure for table `memories`
--

CREATE TABLE `memories` (
  `id` int(11) NOT NULL,
  `item` varchar(50) NOT NULL,
  `details` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `shop` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memories`
--

INSERT INTO `memories` (`id`, `item`, `details`, `price`, `shop`) VALUES
(1, 'Geil ', 'DDR3L 4GB 1333mhz', 2800, 'StartecBD'),
(2, 'Viper', 'DDR4 4GB 2400MHz', 2800, 'TechshopBD');

-- --------------------------------------------------------

--
-- Table structure for table `motherboards`
--

CREATE TABLE `motherboards` (
  `id` int(11) NOT NULL,
  `item` varchar(50) NOT NULL,
  `details` varchar(200) NOT NULL,
  `price` int(20) NOT NULL,
  `shop` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `motherboards`
--

INSERT INTO `motherboards` (`id`, `item`, `details`, `price`, `shop`) VALUES
(1, 'MSI H110M PRO-VH PLUS', '2 x DDR4 memory slots, support up to 32GB', 5600, 'ABC'),
(2, 'ASRock A320M-HDV', 'AMD Promontory A320', 6000, 'DEF');

-- --------------------------------------------------------

--
-- Table structure for table `mouses`
--

CREATE TABLE `mouses` (
  `id` int(11) NOT NULL,
  `item` varchar(50) NOT NULL,
  `details` varchar(200) NOT NULL,
  `price` int(20) NOT NULL,
  `shop` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mouses`
--

INSERT INTO `mouses` (`id`, `item`, `details`, `price`, `shop`) VALUES
(1, 'RAPOO ', '1090P WIRELESS OPTICAL MOUSE', 1050, 'ABC'),
(2, 'RAPOO', '3000P WIRELESS OPTICAL MOUSE', 1350, 'DFG');

-- --------------------------------------------------------

--
-- Table structure for table `processors`
--

CREATE TABLE `processors` (
  `id` int(11) NOT NULL,
  `item` varchar(20) NOT NULL,
  `details` varchar(100) NOT NULL,
  `price` varchar(20) NOT NULL,
  `shop` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `processors`
--

INSERT INTO `processors` (`id`, `item`, `details`, `price`, `shop`) VALUES
(4, 'Intel Core i3 3220', 'Core-2\r\nThread-4\r\nSpeed-3.2Ghz', '8200', 'Ryans Computer BD'),
(15, 'Intel Core i7 7700k', 'Core-4\r\nThread-16\r\nSpeed-4.0Ghz', '29000', 'Ryans Computer BD'),
(16, 'Intel Core i5', 'Core-5\r\nThread-16', '8000', 'Ryans Computer BD');

-- --------------------------------------------------------

--
-- Table structure for table `psus`
--

CREATE TABLE `psus` (
  `id` int(11) NOT NULL,
  `item` varchar(50) NOT NULL,
  `details` varchar(200) NOT NULL,
  `price` int(20) NOT NULL,
  `shop` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `psus`
--

INSERT INTO `psus` (`id`, `item`, `details`, `price`, `shop`) VALUES
(1, 'Cooler master GX2 Ver 2 550W', 'Model - Cooler master GX2 Ver 2 550W, Type - ATX 12V V2.31, PSU Category - Modular, Series - GX Series, Maximum Power - 550W, Input Voltage - 100 - 240V', 6500, 'ABC'),
(2, 'Gigabyte GP-B700H 700W ', 'Model - Gigabyte GP-B700H, Type - ATX12V, PSU Category - Modular, Series - GP Series, Maximum Power - 700WT, Input Voltage - 100-240V', 7000, 'DEF');

-- --------------------------------------------------------

--
-- Table structure for table `storages`
--

CREATE TABLE `storages` (
  `id` int(11) NOT NULL,
  `item` varchar(50) NOT NULL,
  `details` varchar(200) NOT NULL,
  `price` int(20) NOT NULL,
  `shop` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `storages`
--

INSERT INTO `storages` (`id`, `item`, `details`, `price`, `shop`) VALUES
(1, ' Western Digital Hard Disk Drive', 'WD 3200AAJS Caviar Blue 320GB 8MB Cache 7200RPM SATA HDD', 1300, 'ABC'),
(2, ' Hard Disk Drive', 'Western Digital WD40PURX 4TB Desktop PC Hard Disk Drive', 11300, 'DEF');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `casings`
--
ALTER TABLE `casings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dvds`
--
ALTER TABLE `dvds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gpus`
--
ALTER TABLE `gpus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keyboards`
--
ALTER TABLE `keyboards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memories`
--
ALTER TABLE `memories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motherboards`
--
ALTER TABLE `motherboards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mouses`
--
ALTER TABLE `mouses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `processors`
--
ALTER TABLE `processors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `psus`
--
ALTER TABLE `psus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storages`
--
ALTER TABLE `storages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `casings`
--
ALTER TABLE `casings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dvds`
--
ALTER TABLE `dvds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gpus`
--
ALTER TABLE `gpus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `keyboards`
--
ALTER TABLE `keyboards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `memories`
--
ALTER TABLE `memories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `motherboards`
--
ALTER TABLE `motherboards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mouses`
--
ALTER TABLE `mouses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `processors`
--
ALTER TABLE `processors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `psus`
--
ALTER TABLE `psus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `storages`
--
ALTER TABLE `storages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
