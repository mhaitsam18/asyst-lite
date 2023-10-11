-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2023 at 07:53 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asyst_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `apps_inventory`
--

CREATE TABLE `apps_inventory` (
  `appsinventoryid` int(11) NOT NULL,
  `applicationid` varchar(10) DEFAULT NULL,
  `businessuser` varchar(100) DEFAULT NULL,
  `programlanguage` varchar(100) DEFAULT NULL,
  `serverloc` varchar(100) DEFAULT NULL,
  `operatingsystem` varchar(100) DEFAULT NULL,
  `database` varchar(100) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `createdby` varchar(100) DEFAULT NULL,
  `createddate` timestamp NULL DEFAULT current_timestamp(),
  `updateby` varchar(100) DEFAULT NULL,
  `updatedate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `knowledge`
--

CREATE TABLE `knowledge` (
  `knowledgeid` int(11) NOT NULL,
  `applicationid` varchar(10) DEFAULT NULL,
  `version` varchar(50) DEFAULT NULL,
  `docs` varchar(100) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `createdby` varchar(100) DEFAULT NULL,
  `createddate` timestamp NULL DEFAULT current_timestamp(),
  `updateby` varchar(100) DEFAULT NULL,
  `updatedate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `knowledge`
--

INSERT INTO `knowledge` (`knowledgeid`, `applicationid`, `version`, `docs`, `notes`, `createdby`, `createddate`, `updateby`, `updatedate`) VALUES
(1, 'amala', '1.0.0', 'amala', 'amala', 'Anas', '2023-07-03 06:01:46', 'Anas', '2023-07-03 06:06:49'),
(2, 'amala', '1.0.1', 'amala', 'amala', 'Anas', '2023-07-03 06:06:58', 'Anas', '2023-07-03 06:07:39');

-- --------------------------------------------------------

--
-- Table structure for table `license_exp`
--

CREATE TABLE `license_exp` (
  `licenseexpid` int(11) NOT NULL,
  `applicationid` varchar(10) DEFAULT NULL,
  `licensename` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `expired_date` timestamp NULL DEFAULT current_timestamp(),
  `notes` varchar(255) DEFAULT NULL,
  `createdby` varchar(100) DEFAULT NULL,
  `createddate` timestamp NULL DEFAULT current_timestamp(),
  `updateby` varchar(100) DEFAULT NULL,
  `updatedate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mgt_application`
--

CREATE TABLE `mgt_application` (
  `applicationid` varchar(10) NOT NULL,
  `applicationname` varchar(100) DEFAULT NULL,
  `active` bit(1) DEFAULT NULL,
  `createdby` varchar(100) DEFAULT NULL,
  `createddate` timestamp NULL DEFAULT current_timestamp(),
  `updateby` varchar(100) DEFAULT NULL,
  `updatedate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mgt_application`
--

INSERT INTO `mgt_application` (`applicationid`, `applicationname`, `active`, `createdby`, `createddate`, `updateby`, `updatedate`) VALUES
('amala', 'AMALA', b'1', 'Anas', '2023-07-03 04:22:15', 'Anas', '2023-07-03 04:44:55');

-- --------------------------------------------------------

--
-- Table structure for table `mgt_menu`
--

CREATE TABLE `mgt_menu` (
  `menuid` int(11) NOT NULL,
  `menuname` varchar(100) DEFAULT NULL,
  `active` bit(1) DEFAULT NULL,
  `createdby` varchar(100) DEFAULT NULL,
  `createdate` timestamp NULL DEFAULT current_timestamp(),
  `updateby` varchar(100) DEFAULT NULL,
  `updatedate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mgt_menu`
--

INSERT INTO `mgt_menu` (`menuid`, `menuname`, `active`, `createdby`, `createdate`, `updateby`, `updatedate`) VALUES
(1, 'INVENTORY LIST', b'1', 'Anas', '2023-06-25 17:02:41', 'Anas', '2023-06-25 17:02:41'),
(2, 'KNOWLEDGE MANAGEMENT', b'1', 'Anas', '2023-07-02 19:43:24', 'Anas', '2023-07-02 20:00:43'),
(3, 'APPLICATION MANAGEMENT', b'1', 'Anas', '2023-07-02 19:43:24', 'Anas', '2023-07-02 19:43:24'),
(4, 'CERTIFICATE EXPIRATION', b'1', 'Anas', '2023-07-02 19:43:24', 'Anas', '2023-07-02 19:43:24'),
(5, 'ROLE MANAGEMENT', b'1', 'Anas', '2023-07-02 19:43:24', 'Anas', '2023-07-02 19:43:24'),
(6, 'APPLICATION LIST', b'1', 'Anas', '2023-07-02 19:43:24', 'Anas', '2023-07-02 19:43:24'),
(7, 'USER MANAGEMENT', b'1', 'Anas', '2023-07-02 19:43:24', 'Anas', '2023-07-02 19:43:24'),
(8, 'TEAM MANAGEMENT', b'1', 'Anas', '2023-07-02 19:43:24', 'Anas', '2023-07-02 19:43:24'),
(9, 'PROFILE', b'1', 'Anas', '2023-07-02 19:43:24', 'Anas', '2023-07-02 19:43:24');

-- --------------------------------------------------------

--
-- Table structure for table `mgt_role`
--

CREATE TABLE `mgt_role` (
  `roleid` int(11) NOT NULL,
  `rolename` varchar(100) DEFAULT NULL,
  `roledescription` varchar(255) DEFAULT NULL,
  `active` bit(1) DEFAULT NULL,
  `createdby` varchar(100) DEFAULT NULL,
  `createddate` timestamp NULL DEFAULT current_timestamp(),
  `updateby` varchar(100) DEFAULT NULL,
  `updatedate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mgt_role`
--

INSERT INTO `mgt_role` (`roleid`, `rolename`, `roledescription`, `active`, `createdby`, `createddate`, `updateby`, `updatedate`) VALUES
(1, 'Super Administrator', 'superadmin', b'1', 'anas', '2023-06-23 20:24:22', 'anas', '2023-06-23 20:24:22'),
(2, 'User Amala', 'Amala', b'1', 'anas', '2023-06-23 20:24:22', 'anas', '2023-06-23 20:24:22'),
(3, 'Admin Value Add', '', b'1', '', '2023-06-23 20:24:22', '', '2023-06-23 20:24:22'),
(4, 'Admin Business Integration', '', b'1', '', '2023-06-23 20:24:22', '', '2023-06-23 20:24:22'),
(5, 'Admin Business Operation', '', b'1', '', '2023-06-23 20:24:22', '', '2023-06-23 20:24:22'),
(6, 'User', 'user', b'1', 'Anas', '2023-07-02 20:43:30', 'Anas', '2023-07-02 20:43:30'),
(7, 'Percobaan', 'digunakan untuk percobaan', b'0', 'Anas', '2023-07-02 20:51:41', 'Anas', '2023-07-02 20:51:41');

-- --------------------------------------------------------

--
-- Table structure for table `mgt_role_menu`
--

CREATE TABLE `mgt_role_menu` (
  `rolemenuid` int(11) NOT NULL,
  `roleid` int(11) DEFAULT NULL,
  `menuid` int(11) DEFAULT NULL,
  `access` bit(1) DEFAULT NULL,
  `create` bit(1) DEFAULT NULL,
  `edit` bit(1) DEFAULT NULL,
  `delete` bit(1) DEFAULT NULL,
  `createdby` varchar(100) DEFAULT NULL,
  `createddate` timestamp NULL DEFAULT current_timestamp(),
  `updateby` varchar(100) DEFAULT NULL,
  `updatedate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mgt_role_menu`
--

INSERT INTO `mgt_role_menu` (`rolemenuid`, `roleid`, `menuid`, `access`, `create`, `edit`, `delete`, `createdby`, `createddate`, `updateby`, `updatedate`) VALUES
(1, 7, 1, b'0', b'1', b'0', b'0', NULL, '2023-07-02 20:51:41', NULL, '2023-07-02 20:51:41'),
(2, 7, 2, b'0', b'0', b'1', b'0', NULL, '2023-07-02 20:51:41', NULL, '2023-07-02 20:51:41'),
(3, 7, 3, b'0', b'1', b'1', b'0', NULL, '2023-07-02 20:51:41', NULL, '2023-07-02 20:51:41'),
(4, 7, 4, b'0', b'0', b'0', b'0', NULL, '2023-07-02 20:51:41', NULL, '2023-07-02 20:51:41'),
(5, 7, 5, b'0', b'0', b'0', b'0', NULL, '2023-07-02 20:51:41', NULL, '2023-07-02 20:51:41'),
(6, 7, 6, b'1', b'0', b'0', b'0', NULL, '2023-07-02 20:51:41', NULL, '2023-07-02 20:51:41'),
(7, 7, 7, b'0', b'0', b'0', b'0', NULL, '2023-07-02 20:51:41', NULL, '2023-07-02 20:51:41'),
(8, 7, 8, b'0', b'0', b'0', b'0', NULL, '2023-07-02 20:51:41', NULL, '2023-07-02 20:51:41'),
(9, 7, 9, b'0', b'0', b'0', b'0', NULL, '2023-07-02 20:51:41', NULL, '2023-07-02 20:51:41');

-- --------------------------------------------------------

--
-- Table structure for table `mgt_team`
--

CREATE TABLE `mgt_team` (
  `teamid` varchar(10) NOT NULL,
  `teamdescription` varchar(255) DEFAULT NULL,
  `active` bit(1) DEFAULT NULL,
  `createdby` varchar(100) DEFAULT NULL,
  `createddate` timestamp NULL DEFAULT current_timestamp(),
  `updateby` varchar(100) DEFAULT NULL,
  `updatedate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mgt_team`
--

INSERT INTO `mgt_team` (`teamid`, `teamdescription`, `active`, `createdby`, `createddate`, `updateby`, `updatedate`) VALUES
('ADMIN', 'ADMINISTRATION', b'1', NULL, '2023-07-03 06:09:46', NULL, '2023-07-03 06:09:46'),
('AMALA', 'AMALA PROJECT', b'1', NULL, '2023-07-02 21:00:57', NULL, '2023-07-02 21:00:57'),
('BI', 'BUSINESS INTERATION', b'1', NULL, '2023-07-03 06:09:46', NULL, '2023-07-03 06:09:46'),
('BO', 'BUSINESS OPERATION', b'1', NULL, '2023-07-03 06:09:46', NULL, '2023-07-03 06:09:46'),
('VA', 'VALUE ADD', b'1', NULL, '2023-07-03 06:09:46', NULL, '2023-07-03 06:09:46');

-- --------------------------------------------------------

--
-- Table structure for table `mgt_team_application`
--

CREATE TABLE `mgt_team_application` (
  `teamapplicationid` int(11) NOT NULL,
  `teamid` varchar(10) DEFAULT NULL,
  `createdby` varchar(100) DEFAULT NULL,
  `applicationid` varchar(10) DEFAULT NULL,
  `createddate` timestamp NULL DEFAULT current_timestamp(),
  `updateby` varchar(100) DEFAULT NULL,
  `updateddate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mgt_user`
--

CREATE TABLE `mgt_user` (
  `userid` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `teamid` varchar(10) DEFAULT NULL,
  `roleid` int(10) DEFAULT NULL,
  `active` bit(1) DEFAULT NULL,
  `createdby` varchar(100) DEFAULT NULL,
  `createddate` timestamp NULL DEFAULT current_timestamp(),
  `updateby` varchar(100) DEFAULT NULL,
  `updatedate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mgt_user`
--

INSERT INTO `mgt_user` (`userid`, `email`, `name`, `image`, `password`, `teamid`, `roleid`, `active`, `createdby`, `createddate`, `updateby`, `updatedate`) VALUES
(1, 'anas@gmail.com', 'Anas', 'default.jpg', '$2y$10$wYOqUyfLZzZU27L3BXtYJ.lh6MqyLo0PaVjEVHZ3SOFJM63YeEpy.', 'AMALA', 1, b'1', NULL, '2023-06-23 03:21:14', 'Anas oke', '2023-07-03 06:57:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apps_inventory`
--
ALTER TABLE `apps_inventory`
  ADD PRIMARY KEY (`appsinventoryid`),
  ADD UNIQUE KEY `applicationid` (`applicationid`);

--
-- Indexes for table `knowledge`
--
ALTER TABLE `knowledge`
  ADD PRIMARY KEY (`knowledgeid`),
  ADD UNIQUE KEY `applicationid` (`applicationid`,`version`);

--
-- Indexes for table `license_exp`
--
ALTER TABLE `license_exp`
  ADD PRIMARY KEY (`licenseexpid`),
  ADD KEY `applicationid` (`applicationid`);

--
-- Indexes for table `mgt_application`
--
ALTER TABLE `mgt_application`
  ADD PRIMARY KEY (`applicationid`),
  ADD UNIQUE KEY `applicationname` (`applicationname`);

--
-- Indexes for table `mgt_menu`
--
ALTER TABLE `mgt_menu`
  ADD PRIMARY KEY (`menuid`),
  ADD UNIQUE KEY `menuname` (`menuname`);

--
-- Indexes for table `mgt_role`
--
ALTER TABLE `mgt_role`
  ADD PRIMARY KEY (`roleid`),
  ADD UNIQUE KEY `rolename` (`rolename`);

--
-- Indexes for table `mgt_role_menu`
--
ALTER TABLE `mgt_role_menu`
  ADD PRIMARY KEY (`rolemenuid`),
  ADD UNIQUE KEY `roleid` (`roleid`,`menuid`),
  ADD KEY `menuid` (`menuid`);

--
-- Indexes for table `mgt_team`
--
ALTER TABLE `mgt_team`
  ADD PRIMARY KEY (`teamid`);

--
-- Indexes for table `mgt_team_application`
--
ALTER TABLE `mgt_team_application`
  ADD PRIMARY KEY (`teamapplicationid`),
  ADD KEY `teamid` (`teamid`),
  ADD KEY `applicationid` (`applicationid`);

--
-- Indexes for table `mgt_user`
--
ALTER TABLE `mgt_user`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `teamid` (`teamid`),
  ADD KEY `roleid` (`roleid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apps_inventory`
--
ALTER TABLE `apps_inventory`
  MODIFY `appsinventoryid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `knowledge`
--
ALTER TABLE `knowledge`
  MODIFY `knowledgeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `license_exp`
--
ALTER TABLE `license_exp`
  MODIFY `licenseexpid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mgt_menu`
--
ALTER TABLE `mgt_menu`
  MODIFY `menuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `mgt_role`
--
ALTER TABLE `mgt_role`
  MODIFY `roleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mgt_role_menu`
--
ALTER TABLE `mgt_role_menu`
  MODIFY `rolemenuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mgt_team_application`
--
ALTER TABLE `mgt_team_application`
  MODIFY `teamapplicationid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mgt_user`
--
ALTER TABLE `mgt_user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `apps_inventory`
--
ALTER TABLE `apps_inventory`
  ADD CONSTRAINT `apps_inventory_ibfk_1` FOREIGN KEY (`applicationid`) REFERENCES `mgt_application` (`applicationid`);

--
-- Constraints for table `knowledge`
--
ALTER TABLE `knowledge`
  ADD CONSTRAINT `knowledge_ibfk_1` FOREIGN KEY (`applicationid`) REFERENCES `mgt_application` (`applicationid`);

--
-- Constraints for table `license_exp`
--
ALTER TABLE `license_exp`
  ADD CONSTRAINT `license_exp_ibfk_1` FOREIGN KEY (`applicationid`) REFERENCES `mgt_application` (`applicationid`);

--
-- Constraints for table `mgt_role_menu`
--
ALTER TABLE `mgt_role_menu`
  ADD CONSTRAINT `mgt_role_menu_ibfk_1` FOREIGN KEY (`roleid`) REFERENCES `mgt_role` (`roleid`),
  ADD CONSTRAINT `mgt_role_menu_ibfk_2` FOREIGN KEY (`menuid`) REFERENCES `mgt_menu` (`menuid`);

--
-- Constraints for table `mgt_team_application`
--
ALTER TABLE `mgt_team_application`
  ADD CONSTRAINT `mgt_team_application_ibfk_1` FOREIGN KEY (`teamid`) REFERENCES `mgt_team` (`teamid`),
  ADD CONSTRAINT `mgt_team_application_ibfk_2` FOREIGN KEY (`applicationid`) REFERENCES `mgt_application` (`applicationid`);

--
-- Constraints for table `mgt_user`
--
ALTER TABLE `mgt_user`
  ADD CONSTRAINT `mgt_user_ibfk_1` FOREIGN KEY (`teamid`) REFERENCES `mgt_team` (`teamid`),
  ADD CONSTRAINT `mgt_user_ibfk_2` FOREIGN KEY (`roleid`) REFERENCES `mgt_role` (`roleid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
