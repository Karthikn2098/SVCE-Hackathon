-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2018 at 06:11 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders_table`
--

CREATE TABLE `orders_table` (
  `NAME` text NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `PRODUCT_NAME` varchar(100) NOT NULL,
  `PRODUCT_PRICE` int(11) NOT NULL,
  `RANDOM_NO` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders_table`
--

INSERT INTO `orders_table` (`NAME`, `EMAIL`, `PRODUCT_NAME`, `PRODUCT_PRICE`, `RANDOM_NO`) VALUES
('Karthick', 'karthikn2099@gmail.com', 'Levis Trouser', 2000, '7336'),
('Karthick', 'karthikn2099@gmail.com', 'Mirnalika Saree', 1700, '8499'),
('Karthick', 'karthikn2099@gmail.com', 'kid frock', 750, '6718'),
('Karthick', 'karthikn2099@gmail.com', 'kid frock', 750, '9067'),
('Karthick', 'karthikn2099@gmail.com', 'Levis Trouser', 2000, '2955'),
('Karthick', 'karthikn2099@gmail.com', 'Levis Trouser', 2000, '1267'),
('Karthick', 'karthikn2099@gmail.com', 'Levis Trouser', 2000, '2176');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `PR_NAME` text NOT NULL,
  `PR_OLD_PRICE` int(11) NOT NULL,
  `PR_NEW_PRICE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`PR_NAME`, `PR_OLD_PRICE`, `PR_NEW_PRICE`) VALUES
('Levis Trouser', 3000, 2000),
('Mirnalika Saree', 2500, 1700),
('kid frock', 1000, 750);

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE `users_table` (
  `NAME` text NOT NULL,
  `USER_NAME` varchar(50) NOT NULL,
  `EMAIL` varchar(60) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `CREATED_AT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`NAME`, `USER_NAME`, `EMAIL`, `PASSWORD`, `CREATED_AT`) VALUES
('Karthick', 'karthikn', 'karthikn2099@gmail.com', 'abc', '2018-07-28 04:37:27');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
