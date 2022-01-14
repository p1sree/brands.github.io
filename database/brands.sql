-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2022 at 09:32 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brands`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `SN` int(200) NOT NULL,
  `BID` varchar(100) NOT NULL,
  `Brands` varchar(100) NOT NULL,
  `Images` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`SN`, `BID`, `Brands`, `Images`) VALUES
(2, 'b1', 'TESTLA', '3.png'),
(3, 'b2', 'MERCEDEZ', '6.png'),
(4, 'b3', 'TOYOTA', '8.png'),
(5, 'b4', 'KIA', '7.jpg'),
(6, 'b5', 'ROLEX', '31.png'),
(7, 'b6', 'BLANCPAIN', '32.png'),
(8, 'b7', 'TITAN', ''),
(9, 'b8', 'DOXA', '33.png'),
(10, 'b9', 'TVS', '21.png'),
(11, 'b10', 'YAMAHA', '22.png'),
(12, 'b11', 'ROYAL ENFIELD', '23.png'),
(13, 'b12', 'HONDA', '24.jpg'),
(14, 'b13', 'ADIDAS', '16.png'),
(15, 'b14', 'FILA', '12.png'),
(16, 'b15', 'NIKE', '17.png'),
(17, 'b16', 'PUMA', '11.png'),
(18, 'b17', 'LEVIS', '41.png'),
(19, 'b18', 'VAN HEUSEN', '42.png'),
(20, 'b19', 'WRANGLER', '43.png'),
(21, 'b20', 'PEPE JEANS', '44.png');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `SN` int(11) NOT NULL,
  `UID` varchar(200) NOT NULL,
  `UNAME` varchar(100) NOT NULL,
  `UPASSWORD` varchar(100) NOT NULL,
  `USTATUS` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`SN`, `UID`, `UNAME`, `UPASSWORD`, `USTATUS`) VALUES
(1, 'U1', 'Smith', 'smithsmith', 'Approved'),
(2, 'U2', 'Mark', 'markmark', ''),
(3, 'U3', 'AJAY', 'ajayajay', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `SN` int(11) NOT NULL,
  `ORDER_CODE` varchar(200) NOT NULL,
  `ORDER_CODES` varchar(200) NOT NULL,
  `ORDER_ITEMS` varchar(200) NOT NULL,
  `ORDER_BRANDS` varchar(200) NOT NULL,
  `ORDER_PRICE` varchar(200) NOT NULL,
  `UNAME` varchar(200) NOT NULL,
  `UID` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`SN`, `ORDER_CODE`, `ORDER_CODES`, `ORDER_ITEMS`, `ORDER_BRANDS`, `ORDER_PRICE`, `UNAME`, `UID`) VALUES
(1, '', '', 'GRANDCOURT + TESLA-ROADSTER + ', 'ADIDAS + TESTLA + ', 'ADIDAS + TESTLA + ', 'Smith', 'U1'),
(2, '', 'PR110 + PR410 + PR312 + PR210 + ', 'ROLEX + JEANS + REVOLUTION + TVSRAIDER + ', 'ROLEX + LEVIS + NIKE + TVS + ', '10500000', 'Smith', 'U1'),
(3, '', 'PR110 + PR410 + PR312 + PR210 + ', 'ROLEX + JEANS + REVOLUTION + TVSRAIDER + ', 'ROLEX + LEVIS + NIKE + TVS + ', '10500000', 'Smith', 'U1'),
(4, '', 'PR110 + PR410 + PR312 + PR210 + ', 'ROLEX + JEANS + REVOLUTION + TVSRAIDER + ', 'ROLEX + LEVIS + NIKE + TVS + ', '10500000', 'Smith', 'U1'),
(5, 'o13mn1', 'PR110 + PR410 + PR312 + PR210 + ', 'ROLEX + JEANS + REVOLUTION + TVSRAIDER + ', 'ROLEX + LEVIS + NIKE + TVS + ', '10500000', 'Smith', 'U1');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `SN` int(11) NOT NULL,
  `ORDER_CODE` varchar(200) NOT NULL,
  `ACCOUNTNO` varchar(200) NOT NULL,
  `BANK_NAME` varchar(100) NOT NULL,
  `ORDER_PRICE` varchar(100) NOT NULL,
  `UNAME` varchar(200) NOT NULL,
  `UID` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`SN`, `ORDER_CODE`, `ACCOUNTNO`, `BANK_NAME`, `ORDER_PRICE`, `UNAME`, `UID`) VALUES
(1, '', '', '', '10000000', 'Smith', 'U1'),
(2, '', '', '', '10000000', 'Smith', 'U1'),
(3, 'o13mn1', '3R34R34', 'DSDDS', '10500000', 'Smith', 'U1');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `SN` int(11) NOT NULL,
  `Product_Code` varchar(100) NOT NULL,
  `Product_Name` varchar(100) NOT NULL,
  `Brands` varchar(100) NOT NULL,
  `Selling_Price` varchar(100) NOT NULL,
  `Offer_Price` varchar(100) NOT NULL,
  `Images` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`SN`, `Product_Code`, `Product_Name`, `Brands`, `Selling_Price`, `Offer_Price`, `Images`) VALUES
(1, 'PR010', 'TESLA-ROADSTER', 'TESTLA', '5000000', '5000000', 'Tesla-Roadster.jpg'),
(2, 'PR011', 'MERCEDES-BENZ S CLASS', 'MERCEDEZ', '5000000', '5000000', 'mercedesbenz.jpg'),
(3, 'PR013', 'TOYOTA-FORTUNER', 'TOYOTA', '500000', '500000', 'fortuner.png'),
(4, 'PR014', 'KIA-SELTOS', 'KIA', '5000000', '5000000', 'kiaseltos.jpg'),
(6, 'PR110', 'ROLEX', 'ROLEX', '5000000', '5000000', 'rolex.jpg'),
(7, 'PR111', 'BLANCPAIN', 'BLANCPAIN', '5000000', '5000000', 'blancpain.jpg'),
(8, 'PR113', 'TITAN', 'TITAN', '500000', '500000', 'titanium.png'),
(9, 'PR114', 'DOXA', 'DOXA', '5000000', '5000000', 'doxa.jpg'),
(12, 'PR210', 'TVSRAIDER', 'TVS', '5000000', '5000000', 'tvsraider.jpg'),
(13, 'PR211', 'XSR155YAMAHA', 'YAMAHA', '5000000', '5000000', 'XSR155Yamaha.jpg'),
(14, 'PR212', 'CLASSIC-350', 'ROYAL ENFIELD', '500000', '500000', 'royalclassic350.png'),
(15, 'PR213', 'HONDA-LIVO', 'HONDA', '5000000', '5000000', 'honda-livo.jpg'),
(16, 'PR310', 'GRANDCOURT', 'ADIDAS', '5000000', '5000000', 'grandcourt.jpg'),
(17, 'PR311', 'SNEAKERS', 'FILA', '5000000', '5000000', 'sneakers.jpg'),
(18, 'PR312', 'REVOLUTION', 'NIKE', '500000', '500000', 'revolution.jpg'),
(19, 'PR313', 'RUNNING SHOES', 'PUMA', '5000000', '5000000', 'running.jpg'),
(20, 'PR410', 'JEANS', 'LEVIS', '5000000', '5000000', 'lewis.jpg'),
(21, 'PR411', 'SHIRTS', 'VAN HEUSEN', '5000000', '5000000', 'shirts.jpg'),
(22, 'PR412', 'SHIRTS', 'WRANGLER', '500000', '500000', 'wrangler.jpg'),
(23, 'PR413', 'JEANS', 'PEPE JEANS', '5000000', '5000000', 'jeans.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`SN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `SN` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `SN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `SN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `SN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `SN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
