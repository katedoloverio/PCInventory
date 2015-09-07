-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2015 at 02:43 AM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcinventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL,
  `main_id` varchar(100) NOT NULL,
  `empfirstname` varchar(100) NOT NULL,
  `emplastname` varchar(100) NOT NULL,
  `empcompanyid` varchar(50) NOT NULL,
  `empphoto` varchar(250) NOT NULL,
  `empstatus` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `main_id`, `empfirstname`, `emplastname`, `empcompanyid`, `empphoto`, `empstatus`) VALUES
(1, '1', 'Yun', 'ghjghj', 'ffdf', 'dog.jpg', 1),
(2, '2', 'Tsuchiya', 'ghjgh', 'ghjgjghj', 'download (1).jpg', 1),
(3, '', 'Pinky', 'esetests', 'tesetsetes', 'download.jpg', 0),
(4, '', 'Yugi', 'asdas', 'asdas', '', 1),
(5, '', 'Aileen', 'gfgggg', 'fgggg', '', 1),
(6, '', 'Yongbo', 'fgggg', 'dfdf', '', 1),
(7, '', 'Grace', 'ffgggg', 'dfdfd', '', 1),
(8, '', 'Vacant1', 'fdgdf', 'gdfgdfgdf', '', 1),
(9, '', 'Roy', 'dfgdfg', 'dfgdfg', '', 1),
(10, '', 'Jacob', 'Jacob', 'Jacob', '', 1),
(11, '', 'Rich', 'Rich', 'Rich', '', 1),
(12, '', 'Vacant', 'Vacant', 'Vacant2', '', 1),
(13, '', 'Frank', 'Frank', 'Frank', '', 1),
(14, '', 'Burt', 'Burt', 'Burt', '', 1),
(15, '', 'Slen', 'Slen', 'Slen', '', 1),
(16, '', 'Evan', 'Evan', 'Evan', '', 1),
(17, '', 'Jeffrey', 'Jeffrey', 'Jeffrey', '', 1),
(18, '', 'RDD', 'RDD', 'RD', '', 1),
(19, '', 'Paeng', 'Paeng', 'Paeng', '', 1),
(20, '', 'Alvin', 'Alvin', 'Alvin', '', 1),
(21, '', 'Bles', 'Bles', 'Bles', '', 1),
(22, '', 'Neil', 'Neil', 'Neil', '', 1),
(23, '', 'JohnNichole', 'JohnNichole', 'JohnNichole', '', 1),
(24, '', 'Fredo', 'Fredo', 'Fredo', '', 1),
(25, '', 'JohnMart', 'JohnMart', 'JohnMart', '', 1),
(26, '', 'NeilRoss', 'NeilRoss', 'NeilRoss', '', 1),
(27, '', 'LoginPC', 'LoginPC', 'LoginPC', '', 1),
(28, '', 'MeetingRoom', 'MeetingRoom', 'MeetingRoom', '', 1),
(29, '', 'Lester', 'Lester', 'Lester', '', 1),
(30, '', 'FileServer', 'FileServer', 'FileServer', '', 1),
(31, '', 'Sharon', 'Sharon', 'Sharon', '', 1),
(32, '', 'Kimberly', 'Kimberly', 'Kimberly', '', 1),
(33, '', 'Karen', 'Karen', 'Karen', '', 1),
(34, '', 'Jessa', 'Jessa', 'Jessa', '', 1),
(35, '', 'Efren', 'Efren', 'Efren', '', 1),
(36, '', 'Erson', 'Erson', 'Erson', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gadgets`
--

CREATE TABLE IF NOT EXISTS `gadgets` (
  `id` int(11) NOT NULL,
  `ggpropertyno` varchar(100) NOT NULL,
  `ggdescription` text NOT NULL,
  `ggserial` varchar(100) NOT NULL,
  `ggstatus` tinyint(4) NOT NULL,
  `ggavailability` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gadgets`
--

INSERT INTO `gadgets` (`id`, `ggpropertyno`, `ggdescription`, `ggserial`, `ggstatus`, `ggavailability`) VALUES
(31, 'FDC-GAD001', 'iPad mini 2 16GB', '23728HWEOFMR', 1, 2),
(32, 'FDC-GAD002', 'Iphone 4 16GB', 'LWOEW235286', 1, 2),
(33, 'FDC-GAD003', 'Nexus 7 16GB', 'LSIE8729384729', 1, 2),
(34, 'FDC-GAD004', 'Samsung Galaxy S5 32GB', 'EIUO2342HJSFD', 1, 2),
(35, 'FDC-GAD005', 'Samsung GALAXY S II LTE SC-03D', 'SDRLWKEREW9', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `inventories`
--

CREATE TABLE IF NOT EXISTS `inventories` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `systemunit_id` int(11) NOT NULL,
  `monitor_id` varchar(50) NOT NULL,
  `videocard_id` int(11) NOT NULL,
  `mouse_id` int(11) NOT NULL,
  `keyboard_id` int(11) NOT NULL,
  `headset_id` int(11) NOT NULL,
  `speaker_id` int(11) NOT NULL,
  `up_id` int(11) NOT NULL,
  `os_id` int(11) NOT NULL,
  `pcosserialno` varchar(100) NOT NULL,
  `pcadditionalinfo` varchar(200) NOT NULL,
  `pcstatus` tinyint(4) NOT NULL,
  `pctype` tinyint(4) NOT NULL,
  `pcavailability` tinyint(4) NOT NULL,
  `pcreceivedate` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventories`
--

INSERT INTO `inventories` (`id`, `employee_id`, `systemunit_id`, `monitor_id`, `videocard_id`, `mouse_id`, `keyboard_id`, `headset_id`, `speaker_id`, `up_id`, `os_id`, `pcosserialno`, `pcadditionalinfo`, `pcstatus`, `pctype`, `pcavailability`, `pcreceivedate`) VALUES
(3, 13, 6, '3', 2, 1, 4, 2, 2, 0, 0, 'none', 'none', 2, 0, 1, '2015-04-04'),
(5, 37, 9, '9', 2, 3, 6, 3, 1, 3, 0, 'none', 'none', 2, 1, 1, '2015-10-10');

-- --------------------------------------------------------

--
-- Table structure for table `mains`
--

CREATE TABLE IF NOT EXISTS `mains` (
  `employee_id` varchar(11) NOT NULL,
  `property_id` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `mouse_propertyid` varchar(100) NOT NULL,
  `monitor_propertyid` varchar(100) NOT NULL,
  `keyboard_propertyid` varchar(100) NOT NULL,
  `systemunit_propertyid` varchar(100) NOT NULL,
  `videocard_propertyid` varchar(100) NOT NULL,
  `speaker_propertyid` varchar(100) NOT NULL,
  `headset_propertyid` varchar(100) NOT NULL,
  `up_propertyid` varchar(100) NOT NULL,
  `os` mediumtext NOT NULL,
  `os_serial` varchar(100) NOT NULL,
  `additionalinfo` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mains`
--

INSERT INTO `mains` (`employee_id`, `property_id`, `id`, `user`, `mouse_propertyid`, `monitor_propertyid`, `keyboard_propertyid`, `systemunit_propertyid`, `videocard_propertyid`, `speaker_propertyid`, `headset_propertyid`, `up_propertyid`, `os`, `os_serial`, `additionalinfo`) VALUES
('1', '1', 1, '', '', '', '', '', '', '', '', '', '', '', ''),
('2', '2', 2, '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE IF NOT EXISTS `properties` (
  `id` int(11) NOT NULL,
  `main_id` varchar(100) NOT NULL,
  `employee_id` varchar(100) NOT NULL,
  `pclassification` tinyint(2) NOT NULL,
  `pdescription` varchar(200) NOT NULL,
  `ppropertyno` varchar(100) NOT NULL,
  `pstatus` tinyint(4) NOT NULL,
  `ptype` tinyint(4) NOT NULL,
  `pavailability` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=276 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `main_id`, `employee_id`, `pclassification`, `pdescription`, `ppropertyno`, `pstatus`, `ptype`, `pavailability`) VALUES
(1, '1', '1', 1, 'Samsung LS23C350HS/XP 23 inches LED Monitor Black w/ HDMI', 'FDC-MO001', 1, 1, 2),
(2, '1', '1', 1, 'Samsung LS23C350HS/XP 23 inches LED Monitor Black w/ HDMI', 'FDC-MO002', 1, 1, 2),
(3, '2', '2', 1, 'Samsung LS22D390HS/XP 21.5 inches LED Monitor Black w/ HDMI', 'FDC-MO003', 1, 1, 2),
(4, '2', '2', 1, 'Samsung LS22D390HS/XP 21.5 inches LED Monitor Black w/ HDMI', 'FDC-MO004', 1, 1, 2),
(5, '3', '3', 1, 'Samsung LS22D390HS/XP 21.5 inches LED Monitor Black w/ HDMI', 'FDC-MO005', 1, 1, 2),
(6, '3', '3', 1, 'Acer V236HL 23 LED Backlight Desktop Monitor (Black)', 'FDC-MO006', 1, 1, 2),
(7, '4', '4', 1, 'Samsung LS22D390HS/XP 21.5 inches LED Monitor Black w/ HDMI', 'FDC-MO007', 1, 1, 2),
(8, '5', '5', 1, 'Samsung LS22D390HS/XP 21.5 inches LED Monitor Black w/ HDMI', 'FDC-MO008', 1, 1, 2),
(9, '6', '6', 1, 'Samsung LS22D390HS/XP 21.5 inches LED Monitor Black w/ HDMI', 'FDC-MO009', 1, 1, 2),
(10, '6', '6', 1, 'Acer V236HL 23 LED Backlight Desktop Monitor (Black)', 'FDC-MO010', 1, 1, 2),
(11, '7', '7', 1, 'Viewsonic 20 VA2046A LED Widescreen Black', 'FDC-MO011', 1, 1, 2),
(12, '7', '7', 1, 'Dell E Series E2011H 20 Widescreen Flat Panel Monitor with LED Display', 'FDC-MO012', 1, 1, 2),
(13, '31', '31', 1, 'ACER S191HQL 18.5 WIDESCREEN LED MONITOR', 'FDC-MO013', 1, 2, 2),
(14, '8', '8', 1, 'Samsung LS19A100 18.5 LED Monitor', 'FDC-MO014', 1, 2, 2),
(15, '33', '33', 1, 'LG 21.5 E2211T-BN Widescreen LCD Monitor', 'FDC-MO015', 1, 1, 2),
(16, '10', '10', 1, 'Dell E Series E2011H 20 Widescreen Flat Panel Monitor with LED Display', 'FDC-MO016', 1, 1, 2),
(17, '11', '11', 1, 'Samsung LS22D390HS/XP 21.5 inches LED Monitor Black w/ HDMI', 'FDC-MO017', 1, 1, 2),
(18, '11', '11', 1, 'Acer V236HL 23 LED Backlight Desktop Monitor (Black)', 'FDC-MO018', 1, 1, 2),
(19, '9', '9', 1, 'Samsung LS22D390HS/XP 21.5 inches LED Monitor Black w/ HDMI', 'FDC-MO019', 1, 1, 2),
(20, '36', '36', 1, 'Viewsonic 20 VA2046A LED Widescreen Black', 'FDC-MO020', 1, 1, 2),
(21, '13', '13', 1, 'Samsung LS22D390HS/XP 21.5 inches LED Monitor Black w/ HDMI', 'FDC-MO021', 1, 1, 2),
(22, '13', '13', 1, 'Viewsonic 20 VA2046A LED Widescreen Black', 'FDC-MO022', 1, 1, 2),
(23, '14', '14', 1, 'Samsung LS22D390HS/XP 21.5 inches LED Monitor Black w/ HDMI', 'FDC-MO023', 1, 1, 2),
(24, '14', '14', 1, 'Samsung LS19A100 18.5 LED Monitor', 'FDC-MO024', 1, 2, 2),
(25, '15', '15', 1, 'LG 21.5 E2211T-BNÂ WidescreenÂ LCDÂ Monitor', 'FDC-MO025', 1, 1, 2),
(26, '16', '16', 1, 'Samsung LS22D390HS/XP 21.5 inches LED Monitor Black w/ HDMI', 'FDC-MO026', 1, 1, 2),
(27, '16', '16', 1, 'Acer V193HQL 18.5 Inch Widescreen LCD TFT Monitor', 'FDC-MO027', 1, 2, 2),
(28, '17', '17', 1, 'Acer V236HL 23 LED Backlight Desktop Monitor (Black)', 'FDC-MO028', 1, 1, 2),
(29, '17', '17', 1, 'Samsung LS22D390HS/XP 21.5 inches LED Monitor Black w/ HDMI', 'FDC-MO029', 1, 1, 2),
(30, '18', '18', 1, 'Viewsonic 20 VA2046A LED Widescreen Black', 'FDC-MO030', 1, 1, 2),
(31, '18', '18', 1, 'LG 21.5 E2211T-BN Widescreen LCD Monitor', 'FDC-MO031', 1, 1, 2),
(32, '19', '19', 1, 'Dell E Series E2011H 20 Widescreen Flat Panel Monitor with LED Display', 'FDC-MO032', 1, 1, 2),
(33, '19', '19', 1, 'Dell E Series E2011H 20 Widescreen Flat Panel Monitor with LED Display', 'FDC-MO033', 1, 1, 2),
(34, '20', '20', 1, 'Viewsonic 20 VA2046A LED Widescreen Black', 'FDC-MO034', 1, 1, 2),
(35, '20', '20', 1, 'Samsung LS22D390HS/XP 21.5 inches LED Monitor Black w/ HDMI', 'FDC-MO035', 1, 1, 2),
(36, '21', '21', 1, 'ACER S191HQL 18.5 WIDESCREEN LED MONITOR', 'FDC-MO036', 1, 2, 2),
(37, '21', '21', 1, 'LG 21.5 E2211T-BNÂ WidescreenÂ LCDÂ Monitor', 'FDC-MO037', 1, 1, 2),
(38, '22', '22', 1, 'Samsung LS22D390HS/XP 21.5 inches LED Monitor Black w/ HDMI', 'FDC-MO038', 1, 2, 2),
(39, '22', '22', 1, 'Samsung 18.5 LS19A10NS LCD Monitor ', 'FDC-MO039', 1, 1, 2),
(40, '35', '35', 1, 'Samsung 18.5 LS19A10NS LCD Monitor ', 'FDC-MO040', 1, 2, 2),
(41, '29', '29', 1, 'Viewsonic 20 VA2046A LED Widescreen Black', 'FDC-MO041', 1, 1, 2),
(42, '23', '23', 1, 'Samsung LS22D390HS/XP 21.5 inches LED Monitor Black w/ HDMI', 'FDC-MO042', 1, 1, 2),
(43, '23', '23', 1, 'Viewsonic 20 VA2046A LED Widescreen Black', 'FDC-MO043', 1, 1, 2),
(44, '24', '24', 1, 'Viewsonic 20 VA2046A LED Widescreen Black', 'FDC-MO044', 1, 1, 2),
(45, '24', '24', 1, 'Samsung LS22D390HS/XP 21.5 inches LED Monitor Black w/ HDMI', 'FDC-MO045', 1, 1, 2),
(46, '25', '25', 1, 'Samsung LS22D390HS/XP 21.5 inches LED Monitor Black w/ HDMI', 'FDC-MO046', 1, 1, 2),
(47, '25', '25', 1, 'Viewsonic 20 VA2046A LED Widescreen Black', 'FDC-MO047', 1, 1, 2),
(48, '26', '26', 1, 'LG 21.5 E2211T-BNÂ WidescreenÂ LCDÂ Monitor', 'FDC-MO048', 1, 1, 2),
(49, '26', '26', 1, 'Samsung LS19A100 18.5 LED Monitor', 'FDC-MO049', 1, 2, 2),
(50, '27', '27', 1, 'Samsung 18.5 LS19A10NS LCD Monitor ', 'FDC-MO050', 1, 2, 2),
(51, '28', '28', 1, 'LG 21.5 E2211T-BN Widescreen LCD Monitor', 'FDC-MO051', 1, 1, 2),
(52, '12', '12', 1, 'ACER S191HQL 18.5 WIDESCREEN LED MONITOR', 'FDC-MO052', 1, 2, 2),
(53, '32', '32', 1, 'Samsung LS19A100 18.5 LED Monitor', 'FDC-MO053', 1, 2, 1),
(54, '29', '29', 1, 'Samsung LS22D390HS/XP 21.5 inches LED Monitor Black w/ HDMI', 'FDC-MO054', 1, 1, 2),
(55, '10', '10', 1, 'Samsung LS22D390HS/XP 21.5 inches LED Monitor Black w/ HDMI', 'FDC-MO055', 1, 1, 2),
(56, '31', '31', 1, 'Samsung LS22D390HS/XP 21.5 inches LED Monitor Black w/ HDMI', 'FDC-MO056', 1, 1, 2),
(57, '', '', 1, 'Samsung LS22D390HS/XP 21.5 inches LED Monitor Black w/ HDMI', 'FDC-MO057', 1, 1, 1),
(58, '33', '33', 1, 'Samsung LS19A100 18.5 LED Monitor', 'FDC-MO058', 1, 2, 2),
(59, '9', '9', 1, 'Viewsonic 20 VA2046A LED Widescreen Black', 'FDC-MO059', 1, 1, 2),
(60, '34', '34', 1, 'ACER S191HQL 18.5 WIDESCREEN LED MONITOR', 'FDC-MO060', 1, 2, 2),
(61, '34', '34', 1, 'Samsung LS22D390HS/XP 21.5 inches LED Monitor Black w/ HDMI', 'FDC-MO061', 1, 1, 2),
(62, '35', '35', 1, 'Samsung LS22D390HS/XP 21.5 inches LED Monitor Black w/ HDMI', 'FDC-MO062', 1, 1, 2),
(63, '36', '36', 1, 'Samsung LS22D390HS/XP 21.5 inches LED Monitor Black w/ HDMI', 'FDC-MO063', 1, 1, 2),
(64, '32', '32', 1, 'Samsung LS22D390HS/XP 21.5 inches LED Monitor Black w/ HDMI', 'FDC-MO064', 1, 1, 2),
(65, '34', '34', 2, 'Genius Netscroll 110X Black', 'FDC-MS001', 1, 2, 2),
(66, '32', '32', 2, 'A4Tech USB Optical Black', 'FDC-MS002', 1, 2, 1),
(67, '21', '21', 2, 'Genius Netscroll 110X Black', 'FDC-MS003', 1, 1, 2),
(68, '19', '19', 2, 'Toshiba USB Optical Black', 'FDC-MS004', 1, 1, 2),
(69, '18', '18', 2, 'Genius Netscroll 110X Black', 'FDC-MS005', 1, 1, 2),
(70, '20', '20', 2, 'Genius Netscroll 110X Black', 'FDC-MS006', 1, 1, 2),
(71, '', '', 2, 'Toshiba USB Optical Black														RD	FDC-MS005	Genius Netscroll 110X Black	Ok	New	Used																										', 'FDC-MS007', 1, 1, 1),
(72, '14', '14', 2, 'Toshiba USB Optical Black', 'FDC-MS008', 1, 1, 2),
(73, '24', '24', 2, 'Logitech Wireless M260 ', 'FDC-MS009', 1, 1, 2),
(74, '17', '17', 2, 'Logitech Wireless M260 ', 'FDC-MS010', 1, 1, 2),
(75, '', '', 2, 'Genius Netscroll 110X Black', 'FDC-MS011', 1, 1, 1),
(76, '29', '29', 2, '3D Serial Optical Black', 'FDC-MS012', 1, 1, 2),
(77, '6', '6', 2, 'Logitech Wireless M260 ', 'FDC-MS013', 1, 1, 2),
(78, '7', '7', 2, 'Toshiba USB Optical Black', 'FDC-MS014', 1, 1, 2),
(79, '33', '33', 2, 'Toshiba USB Optical Black', 'FDC-MS015', 1, 1, 2),
(80, '16', '16', 2, 'A4Tech USB Optical Black', 'FDC-MS016', 1, 2, 2),
(81, '15', '15', 2, 'A4Tech USB Optical Black', 'FDC-MS017', 1, 2, 2),
(82, '13', '13', 2, 'Lexma USB Optical Gray', 'FDC-MS018', 1, 2, 2),
(83, '22', '22', 2, 'Toshiba USB Optical Black', 'FDC-MS019', 1, 1, 2),
(84, '2', '2', 2, 'Genius Netscroll 110X Black', 'FDC-MS020', 1, 1, 2),
(85, '1', '1', 2, 'Logitech Wireless M185', 'FDC-MS021', 1, 1, 2),
(86, '', '', 2, 'A4Tech USB Optical Black', 'FDC-MS022', 1, 2, 1),
(87, '', '', 2, 'Toshiba USB Optical Black', 'FDC-MS023', 1, 1, 1),
(88, '25', '25', 2, 'Toshiba USB Optical Black', 'FDC-MS024', 1, 2, 2),
(89, '23', '23', 2, 'Logitech Wireless M260 ', 'FDC-MS025', 1, 1, 2),
(90, '26', '26', 2, 'A4Tech USB Optical Black', 'FDC-MS026', 1, 2, 2),
(91, '28', '28', 2, 'A4Tech USB Optical Black', 'FDC-MS027', 1, 2, 2),
(92, '8', '8', 2, 'Genius Netscroll 110X Black', 'FDC-MS028', 1, 1, 2),
(93, '9', '9', 2, 'A4Tech USB Optical Black', 'FDC-MS029', 1, 2, 2),
(94, '12', '12', 2, 'Super Ergo Optical Black', 'FDC-MS030', 1, 1, 2),
(95, '', '', 2, '3D Serial Optical Black', 'FDC-MS031', 1, 2, 1),
(96, '10', '10', 2, 'Toshiba USB Optical Black', 'FDC-MS032', 1, 1, 2),
(97, '4', '4', 2, 'Toshiba USB Optical Black', 'FDC-MS033', 1, 1, 2),
(98, '5', '5', 2, 'Lexma USB Optical Gray', 'FDC-MS034', 1, 2, 2),
(99, '3', '3', 2, 'Logitech Wireless M185', 'FDC-MS035', 1, 1, 2),
(100, '27', '27', 2, 'Toshiba USB Optical Black', 'FDC-MS036', 1, 2, 2),
(101, '11', '11', 2, 'Logitech Wireless M260 ', 'FDC-MS037', 1, 1, 2),
(102, '35', '35', 2, 'Genius Netscroll 110X Black', 'FDC-MS038', 1, 1, 2),
(103, '36', '36', 2, 'Genius Netscroll 110X Black', 'FDC-MS039', 1, 1, 2),
(104, '1', '1', 3, 'Logitech Wireless K270 ', 'FDC-KB001', 1, 1, 2),
(105, '2', '2', 3, 'Dell KB212-B', 'FDC-KB002', 1, 1, 2),
(106, '3', '3', 3, 'Logitech Wireless K270 ', 'FDC-KB003', 1, 1, 2),
(107, '4', '4', 3, 'Dell KB212-B', 'FDC-KB004', 1, 1, 2),
(108, '5', '5', 3, 'Genius KB 110', 'FDC-KB005', 1, 1, 2),
(109, '6', '6', 3, 'Logitech Wireless K260', 'FDC-KB006', 1, 1, 2),
(110, '7', '7', 3, 'Toshiba KU40M USB', 'FDC-KB007', 1, 1, 2),
(111, '12', '12', 3, 'A4Tech KRS-85', 'FDC-KB008', 1, 2, 2),
(112, '', '', 3, 'Genius KB 110', 'FDC-KB009', 1, 1, 1),
(113, '33', '33', 3, 'Toshiba KU40M USB', 'FDC-KB010', 1, 1, 2),
(114, '', '', 3, 'Toshiba KU40M USB', 'FDC-KB011', 1, 1, 2),
(115, '', '', 3, 'Logitech Wireless K260', 'FDC-KB012', 1, 1, 2),
(116, '', '', 3, 'Toshiba KU40M USB', 'FDC-KB013', 1, 1, 1),
(117, '13', '13', 3, 'Genius KB 110', 'FDC-KB014', 1, 1, 2),
(118, '14', '14', 3, 'Toshiba KU40M USB', 'FDC-KB015', 1, 1, 2),
(119, '15', '15', 3, 'A4Tech KRS-85', 'FDC-KB016', 1, 2, 2),
(120, '16', '16', 3, 'Genius KB 110', 'FDC-KB017', 1, 1, 2),
(121, '17', '17', 3, 'Logitech Wireless K260', 'FDC-KB018', 1, 1, 2),
(122, '18', '18', 3, 'Genius KB 110', 'FDC-KB019', 1, 1, 2),
(123, '19', '19', 3, 'Toshiba KU40M USB', 'FDC-KB020', 1, 1, 2),
(124, '20', '20', 3, 'Genius KB 110', 'FDC-KB021', 1, 1, 2),
(125, '21', '21', 3, 'Toshiba KU40M USB', 'FDC-KB022', 1, 1, 2),
(126, '22', '22', 3, 'Toshiba KU40M USB', 'FDC-KB023', 1, 1, 2),
(127, '32', '32', 3, 'Cliptec RZK249', 'FDC-KB024', 1, 2, 2),
(128, '', '', 3, 'Cliptec RZK249', 'FDC-KB025', 1, 2, 1),
(129, '23', '23', 3, 'Logitech Wireless K260', 'FDC-KB026', 1, 1, 2),
(130, '24', '24', 3, 'Logitech Wireless K260', 'FDC-KB027', 1, 1, 2),
(131, '25', '25', 3, 'Toshiba KU40M USB', 'FDC-KB028', 1, 1, 2),
(132, '26', '26', 3, 'Toshiba KU40M USB', 'FDC-KB029', 1, 1, 2),
(133, '27', '27', 3, 'Genius KB 110', 'FDC-KB030', 1, 1, 2),
(134, '28', '28', 3, 'A4Tech KRS-85', 'FDC-KB031', 1, 2, 2),
(135, '29', '29', 3, 'Genius KB 110', 'FDC-KB032', 1, 1, 2),
(136, '', '', 3, 'Genius KB 110', 'FDC-KB033', 1, 1, 2),
(137, '', '', 3, 'Cliptec RZK249', 'FDC-KB034', 1, 2, 1),
(138, '', '', 3, 'Toshiba KU40M USB', 'FDC-KB035', 1, 1, 1),
(139, '', '', 3, 'Dell KB212-B', 'FDC-KB036', 1, 1, 1),
(140, '', '', 3, 'Genius KB 110', 'FDC-KB037', 1, 1, 1),
(141, '', '', 3, 'Genius KB 110', 'FDC-KB038', 1, 1, 1),
(142, '', '', 3, 'Genius KB 110', 'FDC-KB039', 1, 1, 1),
(143, '35', '35', 3, 'Toshiba KU40M USB', 'FDC-KB040', 1, 1, 2),
(144, '36', '36', 3, 'Genius KB 110', 'FDC-KB041', 1, 1, 2),
(145, '', '', 3, 'Genius KB 110', 'FDC-KB042', 1, 1, 2),
(146, '34', '34', 3, 'Genius KB 110', 'FDC-KB043', 1, 1, 2),
(147, '1', '1', 4, 'Gigabyte GA-Z87M', 'FDC-SU001', 1, 1, 2),
(148, '2', '2', 4, 'Biostar H81MHV3', 'FDC-SU002', 1, 1, 2),
(149, '3', '3', 4, 'Gigabyte GA-H61M-DS2', 'FDC-SU003', 1, 1, 2),
(150, '4', '4', 4, 'ASRock B75M', 'FDC-SU004', 1, 1, 2),
(151, '5', '5', 4, 'Biostar H81MHV3', 'FDC-SU005', 1, 1, 2),
(152, '6', '6', 4, 'Gigabyte GA-H61M-DS2', 'FDC-SU006', 1, 1, 2),
(153, '7', '7', 4, 'Biostar H81MHV3', 'FDC-SU007', 1, 1, 2),
(154, '', '', 4, 'ASUSTek COMPUTER INC. P8H61-M LX3 PLUS R2.0', 'FDC-SU008', 1, 2, 1),
(155, '', '', 4, 'ASUSTek COMPUTER INC. P8H61-M LX3 PLUS R2.0', 'FDC-SU009', 1, 2, 1),
(156, '', '', 4, 'ASUSTek COMPUTER INC. P8H61-M LX3 PLUS R2.0', 'FDC-SU010', 1, 2, 1),
(157, '8', '8', 4, 'ASUSTeK COMPUTER INC. P8H61-M LE', 'FDC-SU011', 1, 2, 2),
(158, '11', '11', 4, 'Gigabyte GA-H61M-DS2', 'FDC-SU012', 1, 1, 2),
(159, '33', '33', 1, 'Biostar H81MHV3', 'FDC-SU013', 1, 1, 2),
(160, '13', '13', 4, 'Biostar H81MHV3', 'FDC-SU014', 1, 1, 2),
(161, '14', '14', 4, 'Biostar H81MHV3', 'FDC-SU015', 1, 1, 2),
(162, '15', '15', 4, 'Gigabyte GA-H61M-DS2', 'FDC-SU016', 1, 1, 2),
(163, '16', '16', 4, 'Biostar H81MHV3', 'FDC-SU017', 1, 1, 2),
(164, '17', '17', 4, 'Biostar H81MHV3', 'FDC-SU018', 1, 1, 2),
(165, '18', '18', 4, 'ASUSTek COMPUTER INC. P8H61-M LX3 PLUS R2.0', 'FDC-SU019', 1, 2, 2),
(166, '19', '19', 4, 'Biostar H81MHV3', 'FDC-SU020', 1, 1, 2),
(167, '20', '20', 4, 'Biostar H81MHV3', 'FDC-SU021', 1, 1, 2),
(168, '21', '21', 4, 'Biostar H81MHV3', 'FDC-SU022', 1, 1, 2),
(169, '22', '22', 4, 'Biostar H81MHV3', 'FDC-SU023', 1, 1, 2),
(170, '', '', 4, 'ASUSTeK COMPUTER INC. P8H61-M LE', 'FDC-SU024', 1, 2, 1),
(171, '12', '12', 4, 'ASUSTek COMPUTER INC. P8H61-M LX3 PLUS R2.0', 'FDC-SU025', 1, 2, 2),
(172, '23', '23', 4, 'Biostar H81MHV3', 'FDC-SU026', 1, 1, 2),
(173, '24', '24', 4, 'Biostar H81MHV3', 'FDC-SU027', 1, 1, 2),
(174, '25', '25', 4, 'Biostar H81MHV3', 'FDC-SU028', 1, 1, 2),
(175, '26', '26', 4, 'Biostar H81MHV3', 'FDC-SU029', 1, 1, 2),
(176, '27', '27', 4, 'ASUSTek COMPUTER INC. P8H61-M LX3 PLUS R2.0', 'FDC-SU030', 1, 2, 2),
(177, '28', '28', 4, 'ASUSTeK COMPUTER INC. P8H61-M LE', 'FDC-SU031', 1, 2, 1),
(178, '30', '30', 4, 'ECS H61H2-M12', 'FDC-SU032', 1, 2, 2),
(179, '', '', 4, 'ECS H61H2-M12', 'FDC-SU033', 1, 2, 1),
(180, '', '', 4, 'ASUSTek COMPUTER INC. P8H61-M LX3 PLUS R2.0', 'FDC-SU034', 1, 2, 1),
(181, '', '', 4, 'ASUSTek COMPUTER INC. P8H61-M LX3 PLUS R2.0', 'FDC-SU035', 1, 2, 1),
(182, '9', '9', 4, 'Biostar H81MHV3', 'FDC-SU036', 1, 1, 2),
(183, '10', '10', 4, 'Biostar H81MHV3', 'FDC-SU037', 1, 1, 2),
(184, '29', '29', 4, 'Biostar H81MHV3', 'FDC-SU038', 1, 1, 2),
(185, '31', '31', 4, 'Biostar H81MHV3', 'FDC-SU040', 1, 1, 2),
(186, '36', '36', 4, 'Biostar H81MHV3', 'FDC-SU041', 1, 1, 2),
(187, '35', '35', 4, 'Biostar H81MHV3', 'FDC-SU042', 1, 1, 2),
(188, '34', '34', 4, 'Biostar H81MHV3', 'FDC-SU043', 1, 1, 2),
(189, '32', '32', 4, 'Biostar H81MHV3', 'FDC-SU044', 1, 1, 2),
(190, '1', '1', 5, 'FDC-VC001', 'FDC-VC001', 1, 1, 2),
(191, '2', '2', 5, 'FDC-VC002', 'FDC-VC002', 1, 1, 2),
(192, '3', '3', 5, 'FDC-VC003', 'FDC-VC003', 1, 1, 2),
(193, '6', '6', 5, 'FDC-VC004', 'FDC-VC004', 1, 1, 2),
(194, '7', '7', 5, 'FDC-VC005', 'FDC-VC005', 1, 1, 2),
(195, '11', '11', 5, 'FDC-VC006', 'FDC-VC006', 1, 1, 2),
(196, '', '', 5, 'FDC-VC007', 'FDC-VC007', 1, 1, 1),
(197, '13', '13', 5, 'FDC-VC008', 'FDC-VC008', 1, 1, 2),
(198, '14', '14', 4, 'FDC-VC009', 'FDC-VC009', 1, 1, 2),
(199, '16', '16', 5, 'FDC-VC010', 'FDC-VC010', 1, 1, 2),
(200, '17', '17', 5, 'FDC-VC011', 'FDC-VC011', 1, 1, 2),
(201, '18', '18', 5, 'FDC-VC012', 'FDC-VC012', 1, 1, 2),
(202, '19', '19', 4, 'FDC-VC013', 'FDC-VC013', 1, 1, 2),
(203, '20', '20', 4, 'FDC-VC014', 'FDC-VC014', 1, 1, 2),
(204, '21', '21', 5, 'FDC-VC015', 'FDC-VC015', 1, 1, 2),
(205, '22', '22', 5, 'FDC-VC016', 'FDC-VC016', 1, 1, 2),
(206, '23', '23', 5, 'FDC-VC017', 'FDC-VC017', 1, 1, 2),
(207, '24', '24', 5, 'FDC-VC018', 'FDC-VC018', 1, 1, 2),
(208, '25', '25', 5, 'FDC-VC019', 'FDC-VC019', 1, 1, 2),
(209, '26', '26', 5, 'FDC-VC020', 'FDC-VC020', 1, 1, 2),
(210, '1', '1', 6, 'FDC-HS001', 'FDC-HS001', 1, 1, 2),
(211, '2', '2', 6, 'FDC-HS002', 'FDC-HS002', 1, 1, 2),
(212, '3', '3', 6, 'FDC-HS003', 'FDC-HS003', 1, 1, 2),
(213, '4', '4', 6, 'FDC-HS004', 'FDC-HS004', 1, 1, 2),
(214, '5', '5', 6, 'FDC-HS005', 'FDC-HS005', 1, 1, 2),
(215, '6', '6', 6, 'FDC-HS006', 'FDC-HS006', 1, 1, 2),
(216, '7', '7', 6, 'FDC-HS007', 'FDC-HS007', 1, 1, 2),
(217, '', '', 6, 'FDC-HS008', 'FDC-HS008', 1, 1, 1),
(218, '10', '10', 6, 'FDC-HS009', 'FDC-HS009', 1, 1, 2),
(219, '11', '11', 6, 'FDC-HS010', 'FDC-HS010', 1, 1, 2),
(220, '', '', 6, 'FDC-HS011', 'FDC-HS011', 1, 1, 1),
(221, '13', '13', 6, 'FDC-HS012', 'FDC-HS012', 1, 1, 2),
(222, '14', '14', 6, 'FDC-HS013', 'FDC-HS013', 1, 1, 2),
(223, '15', '15', 6, 'FDC-HS014', 'FDC-HS014', 1, 1, 2),
(224, '16', '16', 6, 'FDC-HS015', 'FDC-HS015', 1, 1, 2),
(225, '17', '17', 6, 'FDC-HS016', 'FDC-HS016', 1, 1, 2),
(226, '18', '18', 6, 'FDC-HS017', 'FDC-HS017', 1, 1, 2),
(227, '19', '19', 6, 'FDC-HS018', 'FDC-HS018', 1, 1, 2),
(228, '20', '20', 6, 'FDC-HS019', 'FDC-HS019', 1, 1, 2),
(229, '21', '21', 6, 'FDC-HS020', 'FDC-HS020', 1, 1, 2),
(230, '22', '22', 6, 'FDC-HS021', 'FDC-HS021', 1, 1, 2),
(231, '', '', 6, 'FDC-HS022', 'FDC-HS022', 1, 1, 1),
(232, '23', '23', 6, 'FDC-HS023', 'FDC-HS023', 1, 1, 2),
(233, '24', '24', 6, 'FDC-HS024', 'FDC-HS024', 1, 1, 2),
(234, '25', '25', 6, 'FDC-HS025', 'FDC-HS025', 1, 1, 2),
(235, '26', '26', 6, 'FDC-HS026', 'FDC-HS026', 1, 1, 2),
(236, '3', '3', 7, 'FDC-SPE001', 'FDC-SPE001', 1, 1, 2),
(237, '6', '6', 7, 'FDC-SPE002', 'FDC-SPE002', 1, 1, 2),
(238, '11', '11', 7, 'FDC-SPE003', 'FDC-SPE003', 1, 1, 2),
(239, '1', '1', 8, 'FDC-UPS001', 'FDC-UPS001', 1, 1, 2),
(240, '2', '2', 8, 'FDC-UPS002', 'FDC-UPS002', 1, 1, 2),
(241, '3', '3', 8, 'FDC-UPS003', 'FDC-UPS003', 1, 1, 2),
(242, '4', '4', 8, 'FDC-UPS004', 'FDC-UPS004', 1, 1, 2),
(243, '5', '5', 8, 'FDC-UPS005', 'FDC-UPS005', 1, 1, 2),
(244, '6', '6', 8, 'FDC-UPS006', 'FDC-UPS006', 1, 1, 2),
(245, '7', '7', 8, 'FDC-UPS007', 'FDC-UPS007', 1, 1, 2),
(246, '', '', 8, 'FDC-UPS008', 'FDC-UPS008', 1, 1, 1),
(247, '9', '9', 8, 'FDC-UPS009', 'FDC-UPS009', 1, 1, 2),
(248, '', '', 8, 'FDC-UPS010', 'FDC-UPS010', 1, 1, 1),
(249, '10', '10', 8, 'FDC-UPS011', 'FDC-UPS011', 1, 1, 2),
(250, '11', '11', 8, 'FDC-UPS012', 'FDC-UPS012', 1, 1, 2),
(251, '13', '13', 8, 'FDC-UPS014', 'FDC-UPS014', 1, 1, 1),
(252, '17', '17', 8, 'FDC-UPS018', 'FDC-UPS018', 1, 1, 2),
(253, '18', '18', 8, 'FDC-UPS019', 'FDC-UPS019', 1, 1, 2),
(254, '19', '19', 8, 'FDC-UPS020', 'FDC-UPS020', 1, 1, 2),
(255, '20', '20', 8, 'FDC-UPS021', 'FDC-UPS021', 1, 1, 2),
(256, '21', '21', 8, 'FDC-UPS022', 'FDC-UPS022', 1, 1, 2),
(257, '22', '22', 8, 'FDC-UPS023', 'FDC-UPS023', 1, 1, 2),
(258, '', '', 8, 'FDC-UPS024', 'FDC-UPS024', 1, 1, 1),
(259, '23', '23', 8, 'FDC-UPS025', 'FDC-UPS025', 1, 1, 2),
(260, '24', '24', 8, 'FDC-UPS026', 'FDC-UPS026', 1, 1, 2),
(261, '25', '25', 8, 'FDC-UPS027', 'FDC-UPS027', 1, 1, 2),
(262, '26', '29', 8, 'FDC-UPS028', 'FDC-UPS028', 1, 1, 2),
(263, '27', '27', 1, 'FDC-UPS029', 'FDC-UPS029', 1, 1, 2),
(264, '', '', 8, 'FDC-UPS030', 'FDC-UPS030', 1, 1, 1),
(265, '29', '29', 8, 'FDC-UPS031', 'FDC-UPS031', 1, 1, 2),
(266, '', '', 8, 'FDC-UPS032', 'FDC-UPS032', 1, 1, 1),
(267, '31', '31', 8, 'FDC-UPS033', 'FDC-UPS033', 1, 1, 2),
(268, '32', '32', 8, 'FDC-UPS034', 'FDC-UPS034', 1, 1, 2),
(269, '33', '33', 8, 'FDC-UPS035', 'FDC-UPS035', 1, 1, 2),
(270, '34', '34', 8, 'FDC-UPS036', 'FDC-UPS036', 1, 1, 2),
(271, '35', '35', 8, 'FDC-UPS037', 'FDC-UPS037', 1, 1, 2),
(272, '36', '36', 8, 'FDC-UPS038', 'FDC-UPS038', 1, 1, 2),
(273, '14', '14', 8, 'FDC-UPS015', 'FDC-UPS015', 1, 1, 2),
(274, '15', '15', 8, 'FDC-UPS016', 'FDC-UPS016', 1, 1, 2),
(275, '16', '16', 8, 'FDC-UPS017', 'FDC-UPS017', 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `image`) VALUES
(1, 'admin', '134fce0a485ed890c14d7cc1b1014b08a37866db', ''),
(2, 'admin', 'b51d7154680c4251ee13429ad072f0be38700a2d', ''),
(3, 'kate', 'ed105f7a6f6006c61e348229cf54f78b70b08954', ''),
(4, 'new', '44407ecdd1a1071d38669c464fb93f1c2a8eca51', ''),
(5, 'test', '74970804d10f2ac4edef548756f397c522b92b8f', ''),
(6, ',', 'd88d3fa4cf028e09dcd6f43d3ce33fb7367e3a52', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gadgets`
--
ALTER TABLE `gadgets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventories`
--
ALTER TABLE `inventories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mains`
--
ALTER TABLE `mains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `gadgets`
--
ALTER TABLE `gadgets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `inventories`
--
ALTER TABLE `inventories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `mains`
--
ALTER TABLE `mains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=276;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
