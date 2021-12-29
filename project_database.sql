-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2018 at 07:44 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shobji`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `PRODUCT_ID` int(10) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `PRICE` int(8) NOT NULL,
  `PHN_NUM` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`PRODUCT_ID`, `NAME`, `PRICE`, `PHN_NUM`) VALUES
(2, 'egg', 50, '1234');

-- --------------------------------------------------------

--
-- Table structure for table `checkers`
--

CREATE TABLE `checkers` (
  `CHECKER_ID` int(10) NOT NULL,
  `FIRST_NAME` varchar(20) DEFAULT NULL,
  `LAST_NAME` varchar(25) NOT NULL,
  `ADDRESS` varchar(40) DEFAULT NULL,
  `PHN_NUM` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkers`
--

INSERT INTO `checkers` (`CHECKER_ID`, `FIRST_NAME`, `LAST_NAME`, `ADDRESS`, `PHN_NUM`) VALUES
(100, 'Shishir', 'Khan', 'Uttara', '13456'),
(101, 'Uchchahs', 'Islam', 'Uttara', '12345'),
(102, 'Mirza', 'Turesinin', 'Green Road', '56789'),
(103, 'Abhijit', 'Paul', 'Bashundhara', '78965'),
(104, 'Julhas', 'Hossain', 'Uttara', '23456');

-- --------------------------------------------------------

--
-- Table structure for table `checking`
--

CREATE TABLE `checking` (
  `check_id` int(10) NOT NULL,
  `productions_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contacting`
--

CREATE TABLE `contacting` (
  `farm_id` int(10) NOT NULL,
  `custom_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `CUSTOMER_ID` int(10) NOT NULL,
  `FIRST_NAME` varchar(20) DEFAULT NULL,
  `LAST_NAME` varchar(25) NOT NULL,
  `AGE` int(5) DEFAULT NULL,
  `ADDRESS` varchar(40) NOT NULL,
  `PHN_NUM` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `farmers`
--

CREATE TABLE `farmers` (
  `FARMER_ID` int(10) NOT NULL,
  `FIRST_NAME` varchar(20) DEFAULT NULL,
  `LAST_NAME` varchar(25) NOT NULL,
  `AGE` int(5) DEFAULT NULL,
  `ADDRESS` varchar(40) NOT NULL,
  `PHN_NUM` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmers`
--

INSERT INTO `farmers` (`FARMER_ID`, `FIRST_NAME`, `LAST_NAME`, `AGE`, `ADDRESS`, `PHN_NUM`) VALUES
(2, 'abcABC', 'abc', 24, 'j', '123');

-- --------------------------------------------------------

--
-- Table structure for table `hiring`
--

CREATE TABLE `hiring` (
  `che_id` int(10) NOT NULL,
  `customs_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `name` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `bkid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`name`, `phone`, `bkid`) VALUES
('qwe', '1234', '1235');

-- --------------------------------------------------------

--
-- Table structure for table `producing`
--

CREATE TABLE `producing` (
  `farmers_id` int(10) NOT NULL,
  `production_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `PRODUCT_ID` int(10) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `DESCRIPTION` varchar(100) DEFAULT NULL,
  `PRO_DATE` date NOT NULL,
  `EXP_DATE` date NOT NULL,
  `PICTURE` blob NOT NULL,
  `PRICE` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`PRODUCT_ID`, `NAME`, `DESCRIPTION`, `PRO_DATE`, `EXP_DATE`, `PICTURE`, `PRICE`) VALUES
(1, '', NULL, '0000-00-00', '0000-00-00', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `renting`
--

CREATE TABLE `renting` (
  `custs_id` int(10) NOT NULL,
  `transport_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transportations`
--

CREATE TABLE `transportations` (
  `TRANS_ID` int(10) NOT NULL,
  `TYPE` varchar(20) NOT NULL,
  `ROUTE` varchar(30) NOT NULL,
  `COMPANY_NAME` varchar(30) NOT NULL,
  `PHN_NUM` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transportations`
--

INSERT INTO `transportations` (`TRANS_ID`, `TYPE`, `ROUTE`, `COMPANY_NAME`, `PHN_NUM`) VALUES
(10, 'MINI_TRUCK', 'DHAKA TO COMILLA', 'TOYOTA', '6788890'),
(20, 'TRUCK', 'KHULNA TO RAJSHAHI', 'HUNDAI', '3367540'),
(30, 'PICKUP_TRUCK', 'SYLHET TO DHAKA', 'TATA', '4467556'),
(40, '', 'RAJSHAHI TO PABNA', 'PREMIO', '1122567'),
(50, 'TRUCK', 'DHAKA TO BARISAL', 'HUNDAI', '3434567');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL,
  `username` varchar(20) NOT NULL,
  `age` varchar(5) NOT NULL,
  `address` varchar(40) NOT NULL,
  `phone_number` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`first_name`, `last_name`, `password`, `username`, `age`, `address`, `phone_number`) VALUES
('abdullah', 'kabir', '123', 'abdullah kabir', '24', 'elephant road', 123),
('abcABC', 'abc', '123', 'abc', '24', 'j', 123),
('qwe', 'qwe', '1234', 'qwe', '24', 'qwe', 1234);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkers`
--
ALTER TABLE `checkers`
  ADD PRIMARY KEY (`CHECKER_ID`);

--
-- Indexes for table `checking`
--
ALTER TABLE `checking`
  ADD PRIMARY KEY (`check_id`,`productions_id`),
  ADD KEY `fk_productions_id` (`productions_id`);

--
-- Indexes for table `contacting`
--
ALTER TABLE `contacting`
  ADD PRIMARY KEY (`farm_id`,`custom_id`),
  ADD KEY `fk_custom_id` (`custom_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CUSTOMER_ID`);

--
-- Indexes for table `farmers`
--
ALTER TABLE `farmers`
  ADD PRIMARY KEY (`FARMER_ID`);

--
-- Indexes for table `hiring`
--
ALTER TABLE `hiring`
  ADD PRIMARY KEY (`che_id`,`customs_id`),
  ADD KEY `fk_customs_id` (`customs_id`);

--
-- Indexes for table `producing`
--
ALTER TABLE `producing`
  ADD PRIMARY KEY (`farmers_id`,`production_id`),
  ADD KEY `fk_product_id` (`production_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`PRODUCT_ID`);

--
-- Indexes for table `renting`
--
ALTER TABLE `renting`
  ADD PRIMARY KEY (`transport_id`,`custs_id`),
  ADD KEY `fk_custs_id` (`custs_id`);

--
-- Indexes for table `transportations`
--
ALTER TABLE `transportations`
  ADD PRIMARY KEY (`TRANS_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkers`
--
ALTER TABLE `checkers`
  MODIFY `CHECKER_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `CUSTOMER_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `farmers`
--
ALTER TABLE `farmers`
  MODIFY `FARMER_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `PRODUCT_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `transportations`
--
ALTER TABLE `transportations`
  MODIFY `TRANS_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `checking`
--
ALTER TABLE `checking`
  ADD CONSTRAINT `fk_check_id` FOREIGN KEY (`check_id`) REFERENCES `checkers` (`CHECKER_ID`) ON DELETE NO ACTION,
  ADD CONSTRAINT `fk_productions_id` FOREIGN KEY (`productions_id`) REFERENCES `products` (`PRODUCT_ID`) ON DELETE NO ACTION;

--
-- Constraints for table `contacting`
--
ALTER TABLE `contacting`
  ADD CONSTRAINT `fk_custom_id` FOREIGN KEY (`custom_id`) REFERENCES `customers` (`CUSTOMER_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_farm_id` FOREIGN KEY (`farm_id`) REFERENCES `farmers` (`FARMER_ID`) ON DELETE CASCADE;

--
-- Constraints for table `hiring`
--
ALTER TABLE `hiring`
  ADD CONSTRAINT `fk_che_id` FOREIGN KEY (`che_id`) REFERENCES `checkers` (`CHECKER_ID`),
  ADD CONSTRAINT `fk_customs_id` FOREIGN KEY (`customs_id`) REFERENCES `customers` (`CUSTOMER_ID`);

--
-- Constraints for table `producing`
--
ALTER TABLE `producing`
  ADD CONSTRAINT `fk_farmers_id` FOREIGN KEY (`farmers_id`) REFERENCES `farmers` (`FARMER_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_product_id` FOREIGN KEY (`production_id`) REFERENCES `products` (`PRODUCT_ID`) ON DELETE CASCADE;

--
-- Constraints for table `renting`
--
ALTER TABLE `renting`
  ADD CONSTRAINT `fk_custs_id` FOREIGN KEY (`custs_id`) REFERENCES `customers` (`CUSTOMER_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_transport_id` FOREIGN KEY (`transport_id`) REFERENCES `transportations` (`TRANS_ID`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
