-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 07, 2019 at 01:31 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `mascotas`
--

-- --------------------------------------------------------

--
-- Table structure for table `especies`
--

CREATE TABLE `especies` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `especies`
--

INSERT INTO `especies` (`id`, `nombre`) VALUES
(1, 'gato'),
(2, 'perro'),
(3, 'hamster'),
(4, 'perico'),
(5, 'pez');

-- --------------------------------------------------------

--
-- Table structure for table `mascotas`
--

CREATE TABLE `mascotas` (
  `id` int(11) NOT NULL,
  `id_especie` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `precio` int(11) NOT NULL,
  `nacimiento` date NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mascotas`
--

INSERT INTO `mascotas` (`id`, `id_especie`, `nombre`, `precio`, `nacimiento`, `foto`) VALUES
(1, 1, 'Miaumiau', 20000, '2019-02-28', NULL),
(2, 4, 'Pancho', 15000, '2019-02-08', NULL),
(4, 5, 'Nemo', 5000, '2018-07-10', NULL),
(5, 2, 'Iram', 12500, '2018-05-13', NULL),
(6, 4, 'Babo', 120, '2018-08-17', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `especies`
--
ALTER TABLE `especies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mascotas`
--
ALTER TABLE `mascotas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_especie` (`id_especie`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `especies`
--
ALTER TABLE `especies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mascotas`
--
ALTER TABLE `mascotas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mascotas`
--
ALTER TABLE `mascotas`
  ADD CONSTRAINT `mascotas_ibfk_1` FOREIGN KEY (`id_especie`) REFERENCES `especies` (`id`);
