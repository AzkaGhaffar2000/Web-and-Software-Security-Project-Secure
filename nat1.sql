-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 06, 2020 at 09:46 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `nat1`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `AccID` int(11) UNSIGNED NOT NULL,
  `username` varchar(60) NOT NULL DEFAULT '',
  `password` varchar(60) NOT NULL DEFAULT '',
  `aType` int(1) UNSIGNED ZEROFILL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`AccID`, `username`, `password`, `aType`) VALUES
(1, 'azka', '$2y$10$ymSj8jiSVNHINrF0/NQz2u6Xxt5lhbqlpesW34Rx6GjOEhQ9vKI1O', 1),
(7, 'TEST', '$2y$10$DDJLgPitF5RBNEd16Nwpx.69.Dj6aiCy0tNn.Dn9Dss80jWA9rw76', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `CID` int(11) UNSIGNED NOT NULL,
  `Name` varchar(256) NOT NULL DEFAULT '',
  `Email` varbinary(100) DEFAULT NULL,
  `Website` varbinary(100) DEFAULT NULL,
  `Message` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`CID`, `Name`, `Email`, `Website`, `Message`) VALUES
(1, 'Carl', 0xff2d19b3da4f32cca743514ef587bcaf61c82e265e91abdc236ef2793c49d163a1, 0xff3f8a40edfce6871a8e17cae8f70842b65fb4ccf21bfeba530c3538d5430fb989, 'This blog is lit '),
(4, 'sweet', 0xffc0ad634f803646ceb14525fb86fb785885662331291dc63f77164c24976eb6ea, 0xff3f8a40edfce6871a2f88e9b0851d649f37f382a768566f1894c58d1272f07718, 'Dope'),
(5, 'sweet', 0xffaf8e7b5d2be519a9f8fa5c383710d0f58c968565aeeafb29343013377c4266f8, 0xff3f8a40edfce6871a2f88e9b0851d649f37f382a768566f1894c58d1272f07718, '&lt;script&gt;alert(&#039;xss&#039;)&lt;/script&gt;'),
(7, 'sweet', 0xff2d19b3da4f32cca743514ef587bcaf61c82e265e91abdc236ef2793c49d163a1, 0xff3f8a40edfce6871a2f88e9b0851d649f37f382a768566f1894c58d1272f07718, '&lt;script&gt;alert(&#039;xss&#039;)&lt;/script&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `NID` int(11) UNSIGNED NOT NULL,
  `Name` varchar(256) NOT NULL DEFAULT '',
  `Email` varbinary(100) DEFAULT NULL,
  `Message` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`NID`, `Name`, `Email`, `Message`) VALUES
(1, 'Pink', 0xffc7446108992b978300ccb301e22f394cadec82060b28e3b66caebcdf21fb00d2, 'create account'),
(2, 'Blue', 0xffe1b6d153c5a851c915a499fbefc3cc6300977e510b8409adb48cb8ea14a4ee94, 'help create account');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`AccID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`NID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `AccID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `CID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `NID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
