-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Εξυπηρετητής: 127.0.0.1
-- Χρόνος δημιουργίας: 12 Απρ 2022 στις 07:57:03
-- Έκδοση διακομιστή: 10.4.22-MariaDB
-- Έκδοση PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `treasure_hunt_db`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `creates_team`
--

CREATE TABLE `creates_team` (
  `id_user` int(11) NOT NULL,
  `id_team` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `creates_treasure_hunt`
--

CREATE TABLE `creates_treasure_hunt` (
  `id_user` int(11) NOT NULL,
  `id_thunt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `has`
--

CREATE TABLE `has` (
  `id_thunt` int(11) NOT NULL,
  `id_riddle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `is_member`
--

CREATE TABLE `is_member` (
  `id_user` int(11) NOT NULL,
  `id_team` int(11) NOT NULL,
  `role` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `participate`
--

CREATE TABLE `participate` (
  `id_team` int(11) NOT NULL,
  `id_thunt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `produce`
--

CREATE TABLE `produce` (
  `id_user` int(11) NOT NULL,
  `id_riddle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `riddle`
--

CREATE TABLE `riddle` (
  `id_riddle` int(11) NOT NULL,
  `text` varchar(255) NOT NULL,
  `location_solution` varchar(255) NOT NULL,
  `object_AR` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `infotext` text NOT NULL,
  `points` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `solve`
--

CREATE TABLE `solve` (
  `id_team` int(11) NOT NULL,
  `id_riddle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `team`
--

CREATE TABLE `team` (
  `id_team` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `numberPlayers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `treasure_hunt`
--

CREATE TABLE `treasure_hunt` (
  `id_thunt` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `birth` datetime NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `fullname` varchar(60) NOT NULL,
  `email` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `riddle`
--
ALTER TABLE `riddle`
  ADD PRIMARY KEY (`id_riddle`);

--
-- Ευρετήρια για πίνακα `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id_team`);

--
-- Ευρετήρια για πίνακα `treasure_hunt`
--
ALTER TABLE `treasure_hunt`
  ADD PRIMARY KEY (`id_thunt`);

--
-- Ευρετήρια για πίνακα `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `riddle`
--
ALTER TABLE `riddle`
  MODIFY `id_riddle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT για πίνακα `team`
--
ALTER TABLE `team`
  MODIFY `id_team` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT για πίνακα `treasure_hunt`
--
ALTER TABLE `treasure_hunt`
  MODIFY `id_thunt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT για πίνακα `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
