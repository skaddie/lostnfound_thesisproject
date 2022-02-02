-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2022 at 07:37 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_claimed`
--

CREATE TABLE `tbl_claimed` (
  `id` int(11) NOT NULL,
  `claimantNameC` varchar(255) DEFAULT NULL,
  `dateClaimedC` timestamp NOT NULL DEFAULT current_timestamp(),
  `uniqidFound` varchar(255) DEFAULT NULL,
  `uniqidFinder` varchar(255) DEFAULT NULL,
  `finderNameF` varchar(255) DEFAULT NULL,
  `finderPhoneNumber` varchar(255) DEFAULT NULL,
  `uniqidItem` varchar(255) DEFAULT NULL,
  `itemNameF` varchar(255) DEFAULT NULL,
  `itemDescF` varchar(255) DEFAULT NULL,
  `uniqidSerial` varchar(255) DEFAULT NULL,
  `dateFound` varchar(255) DEFAULT NULL,
  `locationFoundF` varchar(255) DEFAULT NULL,
  `isClaimed` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_claimed`
--

INSERT INTO `tbl_claimed` (`id`, `claimantNameC`, `dateClaimedC`, `uniqidFound`, `uniqidFinder`, `finderNameF`, `finderPhoneNumber`, `uniqidItem`, `itemNameF`, `itemDescF`, `uniqidSerial`, `dateFound`, `locationFoundF`, `isClaimed`, `created_at`) VALUES
(26, 'Van Omar', '2022-02-02 17:34:41', 'found_61fac0a48522e', 'finder_61fac0a48522f', 'asdasdasdasd', '12312312312', 'item_61fac0a485230', 'asdasdasd', 'asdasdasd', '161fac0a485231', '02/24/2022', 'asdasdasd', 1, '2022-02-02 17:34:28'),
(32, 'Jadeile Edo', '2022-02-02 17:52:15', 'found_61ba5973594e3', 'finder_61ba5973594e4', 'Nilo Vincent', '09551189522', 'item_61ba5973594e5', 'Samsung s10 edge', 'glossy blue', '161ba5973594e6', '2021/12/08', 'Room 702', 1, '2022-02-02 17:45:32');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_found`
--

CREATE TABLE `tbl_found` (
  `id` int(11) NOT NULL,
  `claimantNameC` varchar(255) DEFAULT NULL,
  `dateClaimedC` int(11) DEFAULT NULL,
  `uniqidFound` varchar(255) DEFAULT NULL,
  `uniqidFinder` varchar(255) DEFAULT NULL,
  `finderNameF` varchar(255) DEFAULT NULL,
  `finderPhoneNumber` varchar(255) DEFAULT NULL,
  `uniqidItem` varchar(255) DEFAULT NULL,
  `itemNameF` varchar(255) DEFAULT NULL,
  `itemDescF` varchar(255) DEFAULT NULL,
  `uniqidSerial` varchar(255) DEFAULT NULL,
  `dateFound` varchar(255) DEFAULT NULL,
  `locationFoundF` varchar(255) DEFAULT NULL,
  `isClaimed` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_found`
--

INSERT INTO `tbl_found` (`id`, `claimantNameC`, `dateClaimedC`, `uniqidFound`, `uniqidFinder`, `finderNameF`, `finderPhoneNumber`, `uniqidItem`, `itemNameF`, `itemDescF`, `uniqidSerial`, `dateFound`, `locationFoundF`, `isClaimed`, `created_at`) VALUES
(27, NULL, NULL, 'found_61fac29455eaf', 'finder_61fac29455eb0', 'Nilo Vincent Tradio', '09954118764', 'item_61fac29455eb1', 'Realme 5 Pro', 'Matte Red', '161fac29455eb2', '01/30/2022', 'Room 301', 0, '2022-02-02 17:42:44'),
(28, NULL, NULL, 'found_61b9c30fb7c13', 'finder_61b9c30fb7c14', 'Philip Jay', '09382230089', 'item_61b9c30fb7c15', 'Xiaomi', 'Black', '161b9c30fb7c16', '2021/12/15', 'Office', 0, '2022-02-02 17:45:32'),
(29, NULL, NULL, 'found_61b9c32891ad2', 'finder_61b9c32891ad3', 'Van Omar', '09382230089', 'item_61b9c32891ad4', 'Huawei', 'Red', '161b9c32891ad5', '2021/12/15', 'Room 308', 0, '2022-02-02 17:45:32'),
(30, NULL, NULL, 'found_61b9cc0b3f2a5', 'finder_61b9cc0b3f2a6', 'John Albert', '09123123123', 'item_61b9cc0b3f2a7', 'Razer', 'Black Shark', '161b9cc0b3f2a8', '2021/12/09', 'Ground Floor bench', 0, '2022-02-02 17:45:32'),
(31, NULL, NULL, 'found_61b9cec2ea6a9', 'finder_61b9cec2ea6aa', 'Lorena Mae', '09555111888', 'item_61b9cec2ea6ab', 'Macbook Air Pro', 'Slim Gray', '161b9cec2ea6ac', '2021/12/17', '5th Floor Library', 0, '2022-02-02 17:45:32');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `id` int(11) NOT NULL COMMENT 'role_id',
  `role` varchar(255) DEFAULT NULL COMMENT 'role_text'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Editor'),
(3, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `inputID` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `securityquestions` varchar(255) DEFAULT NULL,
  `securityanswer` varchar(255) DEFAULT NULL,
  `roleid` tinyint(4) DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `inputID`, `name`, `username`, `email`, `password`, `securityquestions`, `securityanswer`, `roleid`, `isActive`, `created_at`, `updated_at`) VALUES
(22, '18-2000005', 'Van Omar Benaires', 'Van', 'vanomarbenaires@gmail.com', 'd41ff23e0e6147a8fd2722f68e53f993a92784b0', 'What is the name of the town where you were born?', 'Cebu', 1, 0, '2021-12-06 03:24:50', '2021-12-06 03:24:50'),
(23, '18-2000012', 'Staff', 'Staff', 'testdemo@gmail.com', 'd10a21cea804aa56aff509fedaae830a96e3a50b', 'What is the name of your first pet?', 'Sky', 3, 0, '2021-12-06 04:23:19', '2021-12-06 04:23:19'),
(25, '18-2000081', 'Lorena Mae', 'Lorenskie', 'testdemo1@gmail.com', 'd41ff23e0e6147a8fd2722f68e53f993a92784b0', 'What is your favorite food?', 'test', 3, 1, '2021-12-08 18:52:40', '2021-12-08 18:52:40'),
(26, '18-2000032', 'oatmeal', 'SopaOats', 'Sopaoatmeal@au.com', 'd41ff23e0e6147a8fd2722f68e53f993a92784b0', 'What is your favorite food?', 'pussy', 3, 1, '2021-12-08 19:03:26', '2021-12-08 19:03:26'),
(31, '18-2000012', 'test', 'test', 'test@gmail.com', 'd41ff23e0e6147a8fd2722f68e53f993a92784b0', 'What is your favorite food?', 'test', 3, 0, '2022-01-28 04:00:24', '2022-01-28 04:00:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_claimed`
--
ALTER TABLE `tbl_claimed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_found`
--
ALTER TABLE `tbl_found`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uniqidItem` (`uniqidItem`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_claimed`
--
ALTER TABLE `tbl_claimed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tbl_found`
--
ALTER TABLE `tbl_found`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'role_id', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
