-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2019 at 02:53 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seniorproject`
--
-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `username` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`username`, `fullname`, `email`, `contact`, `address`, `password`) VALUES
('facilitator', 'Nouwen Mokua', 'nouwenmokua@gmail.com', '0754751259', 'Goa', 'someone');

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
    productname VARCHAR(255) NOT NULL,
    batchnumber VARCHAR(50) NOT NULL,
    expirydate DATE NOT NULL,
    quantity VARCHAR(50) NOT NULL,
    manufacturingdate DATE NOT NULL,
);

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`productname`, `batchnumber`, `expirydate`, `quantity`, `manufacturingdate`) VALUES
('panadol', '036521 036', '11/4/2024', '15pieces', '1/1/2022');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`username`, `email`, `contact`, `address`, `password`) VALUES
('level6', 'level6@gmail.com', '0754751286', 'Nairobi', 'aditi'),
('kajiadocounty', 'kajiadocounty@gmail.com', '0732587412', 'Kajiado', 'nikhil'),
('moireferral', 'moireferral@gmail.com', '0787810674', 'Eldoret', 'Ckumar123'),
('pharmacy', 'pharmacy@gmail.com', '0703079750', 'Kipsigis', 'Dhiraj'),
('bometcounty', 'bometcounty@gmail.com', '0741258761', 'Bomet', 'roshan');

-- --------------------------------------------------------
