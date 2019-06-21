-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2017 at 06:11 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `Currency` (
  `id` int(11) NOT NULL,
  `totalPrice` int(11) NOT NULL,
  `palce` varchar(255) NOT NULL,
  'price' int(11 NOT NULL)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;