-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2022 at 08:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `registation`
--

CREATE TABLE `registation` (
  `Student_ID` varchar(20) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Middle_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Course_Name` varchar(150) NOT NULL,
  `Sem_Year` varchar(100) NOT NULL,
  `Department_Name` varchar(150) NOT NULL,
  `Mobile_Number` varchar(10) NOT NULL,
  `Email_ID` varchar(100) NOT NULL,
  `Address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;
