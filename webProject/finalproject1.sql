-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2023 at 10:00 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalproject1`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessorie_details`
--

CREATE TABLE `accessorie_details` (
  `Pro_Id` int(11) NOT NULL,
  `Pro_Name` varchar(50) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `image` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accessorie_details`
--

INSERT INTO `accessorie_details` (`Pro_Id`, `Pro_Name`, `Quantity`, `Price`, `image`) VALUES
(1000, '3 In Charger', 50, 1500, 0x75706c6f6164732f3320496e20436861726765722e706e67),
(1002, 'Climate Case', 28, 1500, 0x75706c6f6164732f436c696d61746520436173652e706e67),
(1003, 'Power bank 20000mah-Basus', 19, 18000, 0x75706c6f6164732f466f6e6520506f7765722042616e6b2e706e67),
(1004, 'Head-phone cs1000', 38, 800, 0x75706c6f6164732f486561642045617250686f6e652e706e67),
(1005, 'Head-phone cs1002', 40, 890, 0x75706c6f6164732f486561642045617250686f6e652e706e67),
(1006, 'HUB-2.0', 10, 10000, 0x75706c6f6164732f48756220322e302e706e67),
(1007, 'Ivon charger', 19, 2000, 0x75706c6f6164732f49766f6e20436861726765722e706e67),
(1008, 'Powerbank mini 5000mah', 10, 3000, 0x75706c6f6164732f4d696e6920506f77657242616e6b2e706e67),
(1009, 'Smart bord mini', 9, 2500, 0x75706c6f6164732f4d696e6920536d61727420426f6172642e706e67),
(1010, 'Mobile holder', 20, 500, 0x75706c6f6164732f4d6f62696c6520486f6c6465722e706e67),
(1011, 'Head phone ck-11', 20, 35000, 0x75706c6f6164732f50697a7a61204865616450686f6e652e706e67),
(1013, 'Samsun g3 speaker', 10, 35000, 0x75706c6f6164732f53616d73756e672053706561636b657220333531312e706e67),
(1015, 'shure media set', 5, 25000, 0x75706c6f6164732f5368757265204d65646961205365742e706e67),
(1030, 'sony 1010 JBL', 9, 8000, 0x75706c6f6164732f536f6e792031303130204a424c2e706e67),
(1043, 'sound link mini', 8, 11500, 0x75706c6f6164732f536f756e644c696e6b204d696e692e706e67),
(1110, 'Power bank m1-6000mah', 19, 12000, 0x75706c6f6164732f576972656c65737320506f77657242616e6b2e706e67),
(1200, 'A30 Phone case waterproof ', 20, 1200, 0x75706c6f6164732f576174657270726f6f662050686f6e6520436173652e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `customerdetails1`
--

CREATE TABLE `customerdetails1` (
  `Customer_Id` int(11) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Address` varchar(45) NOT NULL,
  `Mobile` int(11) NOT NULL,
  `District` varchar(15) NOT NULL,
  `Pro_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `Customer_Id` int(11) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `Mobile` int(11) NOT NULL,
  `District` varchar(20) NOT NULL,
  `Product_Id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `Product_Name` varchar(40) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`Customer_Id`, `First_Name`, `Last_Name`, `Address`, `Mobile`, `District`, `Product_Id`, `username`, `Product_Name`, `price`) VALUES
(120, 'ABDUR', 'RAHMAN', '66/2,mainstreet,katugastota', 766735727, 'Kandy', 100, '1111', 'Series 4', 58500),
(121, 'Anas', 'Ahamad', '44,ststreet,badulla', 76343434, 'Badulla', 104, '1111', 'Diamond Watch', 56400),
(122, 'Mohammad', 'Mafas', '66,Narammala,Kurunegala', 761200230, 'Kurunegala', 1004, '2222', 'Head-phone cs1000', 800),
(123, 'John', 'piries', '34,sjdghksdgfj,Matale', 2147483647, 'Matale', 1002, '2222', 'Climate Case', 1500),
(124, 'Kumar', 'Darmasena', '43,mainstreet,Galle', 663453254, 'Galle', 1007, '2222', 'Ivon charger', 2000),
(125, 'asgvdhjk', 'afgsfrbja', '43,sdfhgfh,kjandashd', 761200266, 'Kegalle', 1009, '2222', 'Smart bord mini', 2500),
(126, 'kevin', 'bro', '234,Mainstreet,gampaha', 765345243, 'Gampaha', 105, 'abcd1234', 'Ebony Wood', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `phone_details`
--

CREATE TABLE `phone_details` (
  `Pro_Id` int(11) NOT NULL,
  `Pro_Name` varchar(50) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `image` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phone_details`
--

INSERT INTO `phone_details` (`Pro_Id`, `Pro_Name`, `Quantity`, `Price`, `image`) VALUES
(9, 'Mate 20 X', 15, 97800, 0x75706c6f6164732f487561776569204d61746520323020582e706e67),
(10, 'I 7  Plus', 15, 55500, 0x75706c6f6164732f492050686f6e65203720506c75732e706e67),
(12, 'I Phone 8', 19, 50000, 0x75706c6f6164732f492050686f6e6520382e706e67),
(13, 'I 11 Pro', 9, 195000, 0x75706c6f6164732f492050686f6e652031312050726f2e706e67),
(14, 'I XS Max', 3, 130000, 0x75706c6f6164732f492050686f6e65205853204d61782e706e67),
(15, 'I Phone XS', 10, 110000, 0x75706c6f6164732f492050686f6e652058532e706e67),
(16, 'MI 6 1S', 4, 49000, 0x75706c6f6164732f4d49203649732e706e67),
(17, 'Pixel 2XL', 9, 79900, 0x75706c6f6164732f506978656c2032584c2e706e67),
(18, 'Pixel 4 XL', 5, 80000, 0x75706c6f6164732f506978656c2034584c2e706e67),
(19, 'Pixel 32 GB', 2, 131900, 0x75706c6f6164732f506978656c2033322047422e706e67),
(20, 'Pixel 6', 7, 103000, 0x75706c6f6164732f706978656c5f362e706e67),
(21, 'Pixel 8 Pro', 8, 329900, 0x75706c6f6164732f706978656c5f385f70726f2e706e67),
(22, 'Radmi Note 5', 4, 44170, 0x75706c6f6164732f5265646d69204e6f746520352e706e67),
(23, 'Redmi Note 7', 13, 33900, 0x75706c6f6164732f5265646d69204e6f746520372e706e67),
(24, 'S23 Ultra', 15, 294900, 0x75706c6f6164732f733233756c7472612e706e67),
(25, 'Galaxy A50', 12, 35500, 0x75706c6f6164732f53616d73756e67204135302e706e67),
(26, 'Galaxy A52', 14, 37500, 0x75706c6f6164732f53616d73756e67204135322e706e67),
(27, 'Sony Xpersia', 10, 32900, 0x75706c6f6164732f536f6e7920587065727369612035762e706e67),
(109, 'Apple Watch', 6, 2500, 0x75706c6f6164732f4170706c652057617463682e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password1` varchar(8) NOT NULL,
  `password2` varchar(8) NOT NULL,
  `user_type` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `email`, `password1`, `password2`, `user_type`) VALUES
('2222', '2222@gmail.com', '2222', '2222', NULL),
('abcd1234', 'abcd@gmail.com', '1234', '1234', NULL),
('Anas', 'anas1234@gmail.com', 'anas1234', 'anas1234', NULL),
('Mohammed Anas', 'Anas123@gmail.com', '1234', '1234', NULL),
('Abdurrahman', 'arhmn1905@gmail.com', 'abcd1234', 'abcd1234', 'Admin'),
('1111', 'asad@gmail.com', '1111', '1111', NULL),
('mhd', 'fathima123@gmail.com', '123456', '123456', NULL),
('Hamidh', 'hamidh@gmail.com', 'mnbvcxz', 'mnbvcxz', NULL),
('mafas', 'mafas7647@gmail.com', '123456', '123456', NULL),
('sdsfx', 'sdf@gmail.com', 'sssss', 'sssss', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `watche_details`
--

CREATE TABLE `watche_details` (
  `Pro_Id` int(11) NOT NULL,
  `Pro_Name` varchar(50) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `image` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `watche_details`
--

INSERT INTO `watche_details` (`Pro_Id`, `Pro_Name`, `Quantity`, `Price`, `image`) VALUES
(100, 'Series 4', 3, 58500, 0x75706c6f6164732f4170706c6520576174636820536572696573342e706e67),
(102, 'Arcadia', 19, 45000, 0x75706c6f6164732f417263616469612e706e67),
(103, 'Blanc Pain', 0, 35000, 0x75706c6f6164732f426c616e63205061696e2e706e67),
(104, 'Diamond Watch', 6, 56400, 0x75706c6f6164732f4469616d6f6e642057617463682e706e67),
(105, 'Ebony Wood', 9, 25000, 0x75706c6f6164732f45626f6e7920576f6f642e706e67),
(106, 'Vivo More', 4, 5600, 0x75706c6f6164732f47616d696e67205669766f204d6f72652e706e67),
(107, 'Garuda Q7', 0, 0, 0x75706c6f6164732f4761727564612051372e706e67),
(108, 'George Jensen', 4, 35000, 0x75706c6f6164732f47656f726765204a656e73656e2e706e67),
(110, 'Hublot', 8, 59000, 0x75706c6f6164732f4875626c6f742e706e67),
(111, 'Loard', 7, 1500, 0x75706c6f6164732f4c6f72642e706e67),
(112, 'Movado', 6, 65000, 0x75706c6f6164732f4d6f7661646f2e706e67),
(113, 'Rado Diamond', 10, 45000, 0x75706c6f6164732f5261646f204469616d6f6e642e706e67),
(114, 'Rado', 10, 35000, 0x75706c6f6164732f5261646f2e706e67),
(116, 'Rolex Datajust', 10, 152000, 0x75706c6f6164732f526f6c657820446174616a75737420537465656c2e706e67),
(118, 'Rolex Daytona', 5, 85000, 0x75706c6f6164732f526f6c657820446179746f6e61204963652e706e67),
(119, 'Rolex Milagaus', 10, 78000, 0x75706c6f6164732f526f6c6578204d696c61676175732e706e67),
(120, 'Rolex Venom', 6, 95000, 0x75706c6f6164732f526f6c6578204d696c67617573732056656e6f6d2e706e67),
(121, 'Titanium Hublot', 10, 100000, 0x75706c6f6164732f546974616e69756d204875626c6f742e706e67),
(122, 'Volk JDM', 6, 25000, 0x75706c6f6164732f566f6c6b204a646d2052696d2e706e67);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessorie_details`
--
ALTER TABLE `accessorie_details`
  ADD PRIMARY KEY (`Pro_Id`);

--
-- Indexes for table `customerdetails1`
--
ALTER TABLE `customerdetails1`
  ADD PRIMARY KEY (`Customer_Id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`Customer_Id`);

--
-- Indexes for table `phone_details`
--
ALTER TABLE `phone_details`
  ADD PRIMARY KEY (`Pro_Id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `watche_details`
--
ALTER TABLE `watche_details`
  ADD PRIMARY KEY (`Pro_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customerdetails1`
--
ALTER TABLE `customerdetails1`
  MODIFY `Customer_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `Customer_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
