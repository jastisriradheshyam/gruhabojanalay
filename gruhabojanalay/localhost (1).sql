-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 03, 2015 at 08:15 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE IF NOT EXISTS `Admin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(30) NOT NULL,
  `USER_NAME` varchar(25) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `PHONE` varchar(12) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`ID`, `NAME`, `USER_NAME`, `PASSWORD`, `PHONE`) VALUES
(6, 'radhe', 'radhe', '437e287d433a5b0201e5ca76aab823c8', '9811617356'),
(9, 'abs', 'abc', 'd6ded95aab550251dd67566ec3778e08', '98'),
(10, 'jasti', 'hello', '1f365c045d8869597c88cbb4eb2dc376', '9811'),
(11, 'hello', 'pak', '2cc0207eb2c61dcc2f029c36ef68b9d9', '9811');
--
-- Database: `details`
--

-- --------------------------------------------------------

--
-- Table structure for table `Food`
--

CREATE TABLE IF NOT EXISTS `Food` (
  `FOOD_ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(40) NOT NULL,
  `DISP_PAGE` varchar(60) NOT NULL,
  `IMG_SRC` varchar(100) NOT NULL,
  `PRICE` int(11) NOT NULL,
  `RATING` int(11) NOT NULL,
  `EXTRAS` varchar(30) NOT NULL,
  PRIMARY KEY (`FOOD_ID`),
  UNIQUE KEY `FOOD_ID` (`FOOD_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `Food`
--

INSERT INTO `Food` (`FOOD_ID`, `NAME`, `DISP_PAGE`, `IMG_SRC`, `PRICE`, `RATING`, `EXTRAS`) VALUES
(1, 'Biryani', 'biryani.php', 'item1.jpg', 360, 4, 'BIRYANI SERVED IN A PLATTER '),
(2, 'Butter Chicken', 'butterchicken.php', 'item2.jpg', 280, 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE IF NOT EXISTS `User` (
  `USER_ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(40) NOT NULL,
  `USER_NAME` varchar(25) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `PHONE_NO` varchar(12) NOT NULL,
  `E_MAIL` varchar(50) NOT NULL,
  `ADDRESS` varchar(100) NOT NULL,
  PRIMARY KEY (`USER_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`USER_ID`, `NAME`, `USER_NAME`, `PASSWORD`, `PHONE_NO`, `E_MAIL`, `ADDRESS`) VALUES
(3, 'radhe', 'shyam', '1f365c045d8869597c88cbb4eb2dc376', '9811', 'jasti@gmail.com', 'f-66'),
(9, 'shayam', 'radheshyam', '1f365c045d8869597c88cbb4eb2dc376', '90', 'jsa@g', 'f'),
(10, '', '', '55291d28360fc8e2356b90eccad96155', '', '', ''),
(11, 'J S Radhe Shyam', 'jasti', 'ddf531d429a2f999667a4a9d036627ff', '8802782944', 'jastisriradheshyam@gmail.com', 'F-66/38,Chattarpur,Extn'),
(34, 'asa', 'erer', '1f365c045d8869597c88cbb4eb2dc376', 'asasa', 'radheknow@gmail.com', 'asasa'),
(35, 'asa', 'erer', '1f365c045d8869597c88cbb4eb2dc376', 'asasa', 'radheknow@gmail.com', 'asasa'),
(36, 'xcxc', 'sasas', '03dc557b7e4de17fcfe053ab16dd4eba', 'xcxc', 'as@asas', 'xcccx'),
(37, 'xcxc', 'sasas', '03dc557b7e4de17fcfe053ab16dd4eba', 'xcxc', 'as@asas', 'xcccx');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE IF NOT EXISTS `bill` (
  `CUST_ID` int(11) NOT NULL,
  `INVOICE_NO` int(11) NOT NULL AUTO_INCREMENT,
  `DATE` date NOT NULL,
  `TOTAL` int(11) NOT NULL,
  PRIMARY KEY (`INVOICE_NO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `FEED_ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(40) NOT NULL,
  `EMAIL` varchar(40) NOT NULL,
  `SUGGESTION` varchar(300) NOT NULL,
  PRIMARY KEY (`FEED_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`FEED_ID`, `NAME`, `EMAIL`, `SUGGESTION`) VALUES
(1, 'radhe', 'nana@gmail.com', 'asasas'),
(2, 'radhe', 'nana@gmail.com', 'asasas');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `CUST_ID` int(11) NOT NULL,
  `FOOD_ID` int(11) NOT NULL,
  `QUANTITY` int(11) NOT NULL,
  `INVOICE_NO` int(11) NOT NULL,
  ` DATE` date NOT NULL,
  `DELIVERED` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
