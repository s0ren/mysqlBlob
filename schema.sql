-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Vært: 127.0.0.1
-- Genereringstid: 15. 06 2016 kl. 14:57:32
-- Serverversion: 10.1.13-MariaDB
-- PHP-version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `blob`
--
DROP DATABASE `blob`;
CREATE DATABASE IF NOT EXISTS `blob` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `blob`;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `products`
--
-- Oprettelse: 15. 06 2016 kl. 11:49:49
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `image` longblob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;