-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 09, 2018 at 06:37 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `patients`
--

-- --------------------------------------------------------

--
-- Table structure for table `lipid`
--

CREATE TABLE `lipid` (
  `assay_id` int(5) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `CholesterolTotal` int(4) NOT NULL,
  `Triglyceride` int(4) NOT NULL,
  `HDL` int(4) NOT NULL,
  `LDL` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lipid`
--

INSERT INTO `lipid` (`assay_id`, `patient_id`, `CholesterolTotal`, `Triglyceride`, `HDL`, `LDL`) VALUES
(11, 1, 141, 150, 31, 80),
(12, 2, 250, 200, 5, 70),
(13, 3, 120, 130, 40, 28);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `patient_id` int(12) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `sex` varchar(1) DEFAULT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(2) NOT NULL,
  `zipcode` int(5) DEFAULT NULL,
  `homePhone` varchar(20) NOT NULL,
  `cellPhone` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`patient_id`, `firstName`, `lastName`, `DOB`, `sex`, `address`, `city`, `state`, `zipcode`, `homePhone`, `cellPhone`, `email`) VALUES
(1, 'John', 'Smith', '1977-05-06', 'M', '901 Broadway', 'Nashville', 'TN', 37203, '(615) 573-5536', NULL, NULL),
(2, 'Alexander', 'Jackson', '1952-06-02', 'M', '3561 E Tudor Rd #8', 'Anchorage', 'Al', 99507, '(907) 290-7985', NULL, NULL),
(3, 'Jassieca', 'Simpson', '1992-03-05', 'F', '2601 Peachtree Park Dr NE', 'Atlanta', 'GA', 30309, '', '(404)758-7243', NULL),
(7, 'Peng', 'Xu', '1977-01-01', 'M', '1234 Rd', 'Nashville', 'TN', 37201, '6151234567', '', 'peng.xu@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lipid`
--
ALTER TABLE `lipid`
  ADD PRIMARY KEY (`assay_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`patient_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lipid`
--
ALTER TABLE `lipid`
  MODIFY `assay_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `patient_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;