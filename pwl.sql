-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Sep 22, 2021 at 07:51 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yolo`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_id` int(11) NOT NULL,
  `First_name` varchar(20) NOT NULL,
  `Last_name` varchar(20) NOT NULL,
  `Mobile` bigint(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_id`, `First_name`, `Last_name`, `Mobile`, `Email`, `Password`, `Status`) VALUES
(101, 'Abhijith', 'Panicker', 8975260019, 'abhijitpatwork1421@gmail.com', 'b', 'Unblock'),
(112, 'Yogesh', 'Kulkarni', 987654321, 'jadhavlokesh25@gmail.com', 'abhi', 'Unblock'),
(133, 'Abhijith', 'Panicker', 1232423454, 'abhijithpanicker1404@gmail.com', '123', 'Unblock'),
(141, 'Lokesh', 'Jadhav', 8975260019, 'jadhavlokesh25@gmail.com', 'asd', 'Unblock'),
(142, 'Alisha', 'Naik', 8975260018, 'alishanaik736@gmail.com', '456', 'Unblock');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `F_id` int(10) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Rating` int(10) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Customer_name` varchar(100) NOT NULL,
  `mobile` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Property_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`F_id`, `Image`, `Rating`, `Description`, `Customer_name`, `mobile`, `email`, `Property_id`) VALUES
(20, 'AIT.PNG', 4, 'Good', 'Lokesh Jadhav', 876544256, 'abhijitpatwork1421@gmail.com', 344),
(21, 'AIT.PNG', 5, 'Vibe', 'Lokesh Jadhav', 876544256, 'abhijitpatwork1421@gmail.com', 344),
(22, 'AIT.PNG', 3, 'Vibe', 'Lokesh Jadhav', 876544256, 'abhijitpatwork1421@gmail.com', 344),
(23, 'AIT.PNG', 2, 'Vibe', 'Lokesh Jadhav', 876544256, 'abhijitpatwork1421@gmail.com', 344),
(24, 'AIT.PNG', 1, 'Vibe', 'Lokesh Jadhav', 876544256, 'abhijitpatwork1421@gmail.com', 344),
(25, 'AIT.PNG', 1, 'Not Satisfy', 'Alisha Naik', 2147483647, 'alishanaik736@gmail.com', 344);

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `Owner_id` int(10) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Mobile_no` bigint(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`Owner_id`, `First_Name`, `Last_Name`, `Mobile_no`, `Email`, `Password`, `Status`) VALUES
(201, 'Abhijith', 'Panicker', 8975260019, 'abhijitpatwork1421@gmail.com', '123', 'Unblock'),
(203, 'Yash', 'Jadhavs', 8975260018, 'abhijithpanicker1404@gmail.com', '456', 'Unblock'),
(204, 'Yash', 'Shinde', 1234567890, 'abhijithpanicker1401@gmail.com', '123', 'Unblock'),
(205, 'Lokesh', 'Jadhav', 8975260019, 'jadhavlokesh25@gmail.com', '345', 'Unblock');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `Property_id` int(10) NOT NULL,
  `Property_name` varchar(40) NOT NULL,
  `Property_type` varchar(20) NOT NULL,
  `Capacity` varchar(10) NOT NULL,
  `Property_rate` int(10) NOT NULL,
  `Decoration_rate` int(10) NOT NULL,
  `Address` varchar(80) NOT NULL,
  `City` varchar(20) NOT NULL,
  `State` varchar(30) NOT NULL,
  `pincode` int(6) NOT NULL,
  `Veg_menu` varchar(200) NOT NULL,
  `Veg_plate` int(10) NOT NULL,
  `Non_veg_menu` varchar(200) NOT NULL,
  `Non_veg_plate` int(10) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Owner_id` int(10) NOT NULL,
  `p_Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`Property_id`, `Property_name`, `Property_type`, `Capacity`, `Property_rate`, `Decoration_rate`, `Address`, `City`, `State`, `pincode`, `Veg_menu`, `Veg_plate`, `Non_veg_menu`, `Non_veg_plate`, `Description`, `Owner_id`, `p_Status`) VALUES
(343, 'Rangoli', 'Halls', '300-350', 5000, 15500, 'Near Kamini Hotel Chinchwad', 'Pune', 'Maharashtra', 411039, 'upload/WhatsApp Image 2021-08-30 at 11.04.11 AM.jpeg', 350, 'upload/WhatsApp Image 2021-08-30 at 11.04.11 AM.jpeg', 500, 'Good', 201, 'Unblock'),
(344, 'Season', 'Lawns', '200-250', 8000, 20000, 'Near Inox Jai Ganesh Akrudi', 'Mumbai', 'Maharashtra', 411019, 'upload/WhatsApp Image 2021-08-30 at 12.12.10 PM.jpeg', 500, 'upload/WhatsApp Image 2021-08-30 at 11.04.11 AM.jpeg', 700, 'God', 203, ''),
(345, 'Brahams', 'Garden', '100-150', 4000, 7000, 'Near Kamini Hotel  Chinchwad', 'Pune', 'Maharashtra', 411039, 'upload/AIT.PNG', 500, 'upload/AIT.PNG', 700, 'Good', 201, ''),
(346, 'Grand Exotica', 'Halls', '350-400', 20000, 10000, 'Kalyan East Mumbai Near Anthony Garden kalyan East Mumbai', 'Mumbai', 'Maharashtra', 411067, 'upload/AIT.PNG', 300, 'upload/grand exotica2.jpeg', 500, 'Good', 205, '');

-- --------------------------------------------------------

--
-- Table structure for table `property_image`
--

CREATE TABLE `property_image` (
  `Id` int(10) NOT NULL,
  `Image` varchar(250) NOT NULL,
  `p_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property_image`
--

INSERT INTO `property_image` (`Id`, `Image`, `p_id`) VALUES
(157, 'Hall1.jpg', 343),
(158, 'Hall2.jpg', 343),
(160, 'lawn1.jpg', 344),
(161, 'lawn2.jpg', 344),
(162, 'Hall1.jpg', 343),
(175, 'Hall1.jpg', 345),
(176, 'Hall2.jpg', 345),
(177, 'IMG_20191207_140413.jpg', 345),
(178, 'lawn1.jpg', 345),
(179, 'lawn2.jpg', 345),
(180, 'AIT.PNG', 344),
(182, 'Garden1.jpg', 344),
(183, 'lawn1.jpg', 344),
(184, 'grand exotica.jpg', 346),
(185, 'grand exotica1.jpg', 346),
(186, 'grand exotica2.jpeg', 346);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `R_id` int(10) NOT NULL,
  `Event_Name` varchar(50) NOT NULL,
  `Date` varchar(10) NOT NULL,
  `Slot` varchar(20) NOT NULL,
  `Property_name` varchar(30) NOT NULL,
  `Advance_Amt` int(50) NOT NULL,
  `Remaining_Amt` int(50) NOT NULL,
  `Property_id` int(10) NOT NULL,
  `Customer_id` int(10) NOT NULL,
  `Customer_name` varchar(50) NOT NULL,
  `mobile` int(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `payment_mode` varchar(15) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`R_id`, `Event_Name`, `Date`, `Slot`, `Property_name`, `Advance_Amt`, `Remaining_Amt`, `Property_id`, `Customer_id`, `Customer_name`, `mobile`, `Email`, `payment_mode`, `Status`) VALUES
(109, 'Birthday', '20-09-2021', '6pm to 10pm', 'Season', 700, 6300, 344, 112, 'Lokesh Jadhav', 876544256, 'abhijitpatwork1421@gmail.com', '', ''),
(110, 'Birthday', '20-09-2021', '6pm to 10pm', 'Season', 700, 6300, 344, 112, 'Lokesh Jadhav', 876544256, 'abhijitpatwork1421@gmail.com', '', ''),
(111, 'Birthday', '20-09-2021', '6pm to 10pm', 'Season', 700, 6300, 344, 112, 'Lokesh Jadhav', 876544256, 'abhijitpatwork1421@gmail.com', '', ''),
(112, 'Birthday', '20-09-2021', '6pm to 10pm', 'Season', 700, 6300, 344, 112, 'Lokesh Jadhav', 876544256, 'abhijitpatwork1421@gmail.com', '', ''),
(113, 'Birthday', '20-09-2021', '6pm to 10pm', 'Season', 700, 6300, 344, 112, 'Lokesh Jadhav', 876544256, 'abhijitpatwork1421@gmail.com', '', ''),
(114, 'Birthday', '20-09-2021', '6pm to 10pm', 'Season', 700, 6300, 344, 112, 'Lokesh Jadhav', 876544256, 'abhijitpatwork1421@gmail.com', '', ''),
(115, 'Birthday', '20-09-2021', '6pm to 10pm', 'Season', 700, 6300, 344, 112, 'Lokesh Jadhav', 876544256, 'abhijitpatwork1421@gmail.com', '', ''),
(116, 'Birthday', '20-09-2021', '6pm to 10pm', 'Season', 700, 6300, 344, 112, 'Lokesh Jadhav', 876544256, 'abhijitpatwork1421@gmail.com', '', ''),
(117, 'Birthday', '20-09-2021', '6pm to 10pm', 'Season', 700, 6300, 344, 112, 'Lokesh Jadhav', 876544256, 'abhijitpatwork1421@gmail.com', '', ''),
(124, 'Birthday', '20-09-2021', '10am to 4pm', 'Rangoli', 500, 4500, 343, 112, 'Lokesh Jadhav', 876544256, 'jadhavlokesh25@gmail.com', 'Offline', 'Approved'),
(126, 'Birthday', '23-09-2021', '6pm to 10pm', 'Rangoli', 500, 4500, 343, 112, 'Lokesh Jadhav', 876544256, 'abhijitpatwork1421@gmail.com', 'Offline', 'Pending'),
(128, 'Birthday', '21-09-2021', '6pm to 10pm', 'Season', 700, 6300, 344, 142, 'Alisha Naik', 2147483647, 'alishanaik736@gmail.com', 'Offline', 'Approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`F_id`),
  ADD KEY `test4` (`Property_id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`Owner_id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`Property_id`),
  ADD KEY `Test` (`Owner_id`);

--
-- Indexes for table `property_image`
--
ALTER TABLE `property_image`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Test1` (`p_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`R_id`),
  ADD KEY `Test2` (`Customer_id`),
  ADD KEY `Test3` (`Property_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `F_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `Owner_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `Property_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=347;

--
-- AUTO_INCREMENT for table `property_image`
--
ALTER TABLE `property_image`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `R_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `test4` FOREIGN KEY (`Property_id`) REFERENCES `property` (`Property_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `property`
--
ALTER TABLE `property`
  ADD CONSTRAINT `Test` FOREIGN KEY (`Owner_id`) REFERENCES `owner` (`Owner_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `property_image`
--
ALTER TABLE `property_image`
  ADD CONSTRAINT `Test1` FOREIGN KEY (`p_id`) REFERENCES `property` (`Property_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `Test2` FOREIGN KEY (`Customer_id`) REFERENCES `customer` (`Customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Test3` FOREIGN KEY (`Property_id`) REFERENCES `property` (`Property_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
