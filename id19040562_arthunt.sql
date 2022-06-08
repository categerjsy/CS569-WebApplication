-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: localhost:3306
-- Χρόνος δημιουργίας: 08 Ιουν 2022 στις 06:51:07
-- Έκδοση διακομιστή: 10.5.12-MariaDB
-- Έκδοση PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `id19040562_arthunt`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `creates_team`
--

CREATE TABLE `creates_team` (
  `id_user` int(11) NOT NULL,
  `id_team` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Άδειασμα δεδομένων του πίνακα `creates_team`
--

INSERT INTO `creates_team` (`id_user`, `id_team`) VALUES
(3, 1),
(3, 2),
(3, 3),
(3, 4),
(3, 5),
(3, 6),
(3, 7),
(3, 8),
(3, 9),
(3, 10),
(3, 11),
(3, 12),
(3, 13),
(3, 14),
(3, 15),
(3, 16),
(3, 17),
(3, 18),
(7, 19),
(3, 20),
(3, 21),
(3, 22),
(3, 23),
(3, 24),
(3, 25),
(3, 26),
(3, 27),
(3, 28),
(6, 29),
(7, 30),
(7, 31),
(7, 32),
(7, 33);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `creates_treasure_hunt`
--

CREATE TABLE `creates_treasure_hunt` (
  `id_user` int(11) NOT NULL,
  `id_thunt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Άδειασμα δεδομένων του πίνακα `creates_treasure_hunt`
--

INSERT INTO `creates_treasure_hunt` (`id_user`, `id_thunt`) VALUES
(3, 1),
(3, 2),
(3, 3),
(3, 4),
(3, 5),
(3, 6),
(3, 7),
(3, 8),
(3, 9),
(3, 10),
(3, 11),
(3, 12),
(3, 13),
(3, 14),
(3, 15),
(3, 16),
(3, 17),
(3, 18),
(3, 19),
(7, 20),
(3, 21),
(6, 22),
(3, 23),
(5, 24),
(8, 25);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `has`
--

CREATE TABLE `has` (
  `id_thunt` int(11) NOT NULL,
  `id_riddle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Άδειασμα δεδομένων του πίνακα `has`
--

INSERT INTO `has` (`id_thunt`, `id_riddle`) VALUES
(15, 8),
(15, 3),
(16, 2),
(17, 1),
(17, 3),
(17, 4),
(19, 3),
(19, 2),
(19, 4),
(19, 5),
(19, 6),
(20, 1),
(20, 2),
(21, 1),
(21, 2),
(21, 9),
(21, 11),
(1, 1),
(1, 9),
(1, 12),
(23, 1),
(23, 2),
(23, 4),
(23, 6),
(25, 2),
(25, 3),
(25, 9);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `is_member`
--

CREATE TABLE `is_member` (
  `id_user` int(11) NOT NULL,
  `id_team` int(11) NOT NULL,
  `role` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Άδειασμα δεδομένων του πίνακα `is_member`
--

INSERT INTO `is_member` (`id_user`, `id_team`, `role`) VALUES
(3, 21, 'leader'),
(0, 21, 'simplePlayer'),
(0, 21, 'simplePlayer'),
(0, 21, 'simplePlayer'),
(0, 21, 'simplePlayer'),
(0, 21, 'simplePlayer'),
(0, 21, 'simplePlayer'),
(0, 21, 'simplePlayer'),
(0, 21, 'simplePlayer'),
(0, 21, 'simplePlayer'),
(0, 21, 'simplePlayer'),
(0, 21, 'simplePlayer'),
(0, 21, 'simplePlayer'),
(0, 21, 'simplePlayer'),
(0, 21, 'simplePlayer'),
(3, 22, 'leader'),
(7, 22, 'simplePlayer'),
(6, 22, 'simplePlayer'),
(3, 23, 'leader'),
(3, 23, 'simplePlayer'),
(4, 23, 'simplePlayer'),
(4, 23, 'simplePlayer'),
(3, 24, 'leader'),
(3, 25, 'leader'),
(3, 26, 'leader'),
(3, 27, 'leader'),
(3, 28, 'leader'),
(6, 28, 'simplePlayer'),
(6, 29, 'leader'),
(7, 30, 'leader'),
(7, 31, 'leader'),
(7, 32, 'leader'),
(7, 33, 'leader');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `participate`
--

CREATE TABLE `participate` (
  `id_team` int(11) NOT NULL,
  `id_thunt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Άδειασμα δεδομένων του πίνακα `participate`
--

INSERT INTO `participate` (`id_team`, `id_thunt`) VALUES
(29, 23),
(30, 23),
(33, 10),
(30, 1),
(32, 2),
(30, 3),
(30, 4),
(30, 5),
(30, 6),
(30, 7),
(30, 8),
(30, 9),
(30, 10),
(30, 11),
(33, 12),
(30, 13),
(30, 10),
(30, 1),
(30, 3),
(30, 10),
(30, 5),
(30, 9),
(29, 10);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `produce`
--

CREATE TABLE `produce` (
  `id_user` int(11) NOT NULL,
  `id_riddle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Άδειασμα δεδομένων του πίνακα `produce`
--

INSERT INTO `produce` (`id_user`, `id_riddle`) VALUES
(3, 1),
(3, 2),
(3, 3),
(3, 4),
(3, 8),
(3, 9),
(3, 10),
(7, 11),
(3, 12),
(7, 13);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `riddle`
--

CREATE TABLE `riddle` (
  `id_riddle` int(11) NOT NULL,
  `text` varchar(255) NOT NULL,
  `location_solution` varchar(255) NOT NULL,
  `object_AR` varchar(100) NOT NULL,
  `infotext` text NOT NULL,
  `points` float NOT NULL,
  `riddle_link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Άδειασμα δεδομένων του πίνακα `riddle`
--

INSERT INTO `riddle` (`id_riddle`, `text`, `location_solution`, `object_AR`, `infotext`, `points`, `riddle_link`) VALUES
(1, 'My first riddle\r\n      ', 'Liontaria Square ', 'BronzeCoin', 'Liontaria are in Heraklion!', 1, ''),
(2, 'FSDVDF\r\n      ', 'SADFSGRDTDD', 'SilverCoin', 'DFCV DFDFV\r\n      ', 4, ''),
(3, 'e\r\nn vbmn,.m,', 'fxdgcfhgjkhlj', 'GoldCoin', 'zcbnvmb,n\r\n      x', 1, ''),
(4, '        Pleresghdjfgh\r\n      qewasgrfdhfjgkh', 'dfsghnm', 'GoldCoin', '\r\n      zcxvvb', 1, ''),
(5, '\r\n      XZCvgbhmn,km./', 'xcszdfghgj', 'GoldCoin', 'fbdfvfvd\r\n      sdvfbggfewfsv', 14, 'not defined'),
(6, '\r\n      XZCvgbhmn,km./', 'xcszdfghgj', 'GoldCoin', 'fbdfvfvd\r\n      sdvfbggfewfsv', 14, 'not defined'),
(7, '\r\n      XZCvgbhmn,km./', 'xcszdfghgj', 'GoldCoin', 'fbdfvfvd\r\n      sdvfbggfewfsv', 14, 'not defined'),
(8, '\r\n      XZCvgbhmn,km./', 'xcszdfghgj', 'GoldCoin', 'fbdfvfvd\r\n      sdvfbggfewfsvfsgdhjk', 14, 'https://localhost/CS569-WebApplication/participateTeam.php?id=8'),
(9, 'dfghjfkg\r\n      ', 'sdfbgnhb', 'BronzeCoin', '        Plfvzdxbfgnchv bere\r\n      ADSfzdgfghmj ,bh', 4, 'https://localhost/CS569-WebApplication/linked.php?id=9'),
(10, '        Pleaseczxvbncgfhmngj\r\n      ', 'xcvbfngmhbmn,', 'GoldCoin', 'vdxgfhcgjtfh', 7, 'https://localhost/CS569-WebApplication/linked.php?id=10'),
(11, 'This is a demo riddle\r\n      ', '  Leonton Square', 'SilverCoin', '  Leonton Square (genitive), after the Venetian-era Morosini Fountain (popularly called \"τα Λιοντάρια\", \"The Lions\") in its midst, which features four lions supporting the main basin.', 12, 'https://localhost/CS569-WebApplication/linked.php?id=11'),
(12, 'jhfjiseknsfjkmfneokld;mf end      ', 'asegdrhf', 'SilverCoin', 'gdlfkgporskgokordkgr', 3, 'https://arthunt.epizy.com/linked.php?id=12'),
(13, 'gdhy5etgb tgrdbhrtsedfvhetrfv \r\n      dafsdg', 'erfgthrtg', 'SilverCoin', 'fgfhyrtgbytdghr\r\n      ', 7, 'https://arthunt.000webhostapp.com/Linked.php?id=13');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `solve`
--

CREATE TABLE `solve` (
  `id_team` int(11) NOT NULL,
  `id_riddle` int(11) NOT NULL,
  `id_thunt` int(11) NOT NULL
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

--
-- Άδειασμα δεδομένων του πίνακα `team`
--

INSERT INTO `team` (`id_team`, `name`, `numberPlayers`) VALUES
(1, 'Augotaraxo team', 0),
(2, 'Try 12', 0),
(3, 'try 6', 6),
(4, '', 1),
(5, 'αΔζφχδγψηωξκξξ', 3),
(6, 'asdfghjkl./', 1),
(7, 'test test', 4),
(8, 'asdfghjkl;', 13),
(9, 'my team', 5),
(10, 'wedfrgthjhkjl', 1),
(11, 'wedfrgthjhkjl', 1),
(12, 'wedfrgthjhkjl', 1),
(13, 'wedfrgthjhkjl', 1),
(14, 'asadsFDGFGHJ', 4),
(15, '?.,mnjbhgfdert', 11),
(16, '?.,mnjbhgfdert', 11),
(17, 'My perfect team ', 6),
(18, 'This is my demo team ', 4),
(19, 'This is my demo team!!', 6),
(20, 'Team test', 5),
(21, 'This is a test!!', 4),
(22, 'lalalallalala', 1),
(23, '/.,mnbvgfdtgyhujkl', 1),
(24, 'DFGH', 1),
(25, 'my teams', 6),
(26, 'asdgfhghdfdr', 9),
(27, 'mjhgfdghjbkml, ', 9),
(28, 'asdfsgsegfvdefv', 9),
(29, 'qwafesgrdhtjyt', 1),
(30, 'adfghjk', 6),
(31, 'try 6', 6),
(32, 'ADFSgtrhyjiokp', 1),
(33, 'ADFSgtrhyjiokp[l;', 1);

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

--
-- Άδειασμα δεδομένων του πίνακα `treasure_hunt`
--

INSERT INTO `treasure_hunt` (`id_thunt`, `status`, `name`, `datetime`) VALUES
(1, 'created', 'sdafghjk.m, auga', '2022-06-30 07:54:00'),
(2, '', 'asdfgh', '2022-05-28 19:20:00'),
(3, '', 'cnvbn', '2022-05-28 14:35:00'),
(4, '', 'my hunt ', '2022-05-26 21:15:00'),
(5, 'Created', 'after the removing', '2022-05-20 21:57:00'),
(6, 'Created', 'sv', '2022-05-03 22:16:00'),
(7, 'Created', 'wefgerd', '2022-07-30 15:20:00'),
(8, 'Created', 'jkgutyijk', '2022-05-29 22:16:00'),
(9, 'Created', 'My treasure hunt', '2022-05-28 16:40:00'),
(10, 'Created', 'sfdgxhcjk/', '2022-05-21 16:53:00'),
(11, 'Created', 'sdfghkjl;\'', '2022-05-29 16:54:00'),
(12, 'Created', 'fdsgfdhjutfh', '2022-05-29 16:54:00'),
(13, 'Created', 'fdsgfdhjutfh', '2022-05-29 16:54:00'),
(14, 'Created', 'fdsgfdhjutfh', '2022-05-29 16:54:00'),
(15, 'Created', 'fdsgfdhjutfh', '2022-05-29 16:54:00'),
(16, 'Created', 'This is a hunt', '2022-05-28 18:15:00'),
(17, 'Created', 'jhkgftyghkhkgjkybkgnm', '2022-05-26 18:16:00'),
(18, 'Created', 'adsfgb', '2022-06-02 18:37:00'),
(19, 'Created', 'This is my demo treasure ', '2022-06-18 21:30:00'),
(20, 'Created', 'This is a demo treasure h', '2022-08-18 22:10:00'),
(21, 'Created', 'rsegdhftjg hunt', '2022-06-25 20:33:00'),
(22, 'Created', 'myn ', '2022-06-30 16:25:00'),
(23, 'Created', 'this i my treasure hunt', '2022-06-30 12:10:00'),
(24, 'Created', 'qwertyu', '2022-06-25 19:57:00'),
(25, 'Created', 'lkjiuytgfhvc ', '2022-06-26 20:05:00');

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
-- Άδειασμα δεδομένων του πίνακα `user`
--

INSERT INTO `user` (`id_user`, `birth`, `username`, `password`, `fullname`, `email`) VALUES
(1, '0000-00-00 00:00:00', 'kat', '', '', ''),
(2, '0000-00-00 00:00:00', 'categerjsy', '', 'katerina gerakianaki', 'katerinagerak99@gmail.com'),
(3, '2022-04-18 00:00:00', 'katerina', 'asak', 'katerina gerakianaki', 'katerinagerak9q9@gmail.com'),
(4, '2002-06-19 00:00:00', 'dit17024', 'διτ17024', 'dit 17024', 'dit17024@uop.gr'),
(5, '2009-01-15 00:00:00', 'myname', 'mynamekk', 'My name', 'myname@gmail.com'),
(6, '1999-07-22 00:00:00', 'kate', 'kate1999', 'Katerina Gerakianaki', 'kate@gmail.com'),
(7, '1999-07-22 00:00:00', 'Maria', 'maraki', 'Katerina Maria Gerakianaki', 'mariagerakianaki@gmail.com'),
(8, '2022-04-18 00:00:00', 'tes', 'testi', 'testi testi', 'tes@gmail.com'),
(9, '2022-04-18 00:00:00', 'Yynakar', 'test', 'Ioanna', 'yymakar@gmail.com'),
(10, '1994-12-27 00:00:00', 'new', 'newnew', 'nwrf fwdw ', 'newkit@gmail.com');

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
  MODIFY `id_riddle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT για πίνακα `team`
--
ALTER TABLE `team`
  MODIFY `id_team` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT για πίνακα `treasure_hunt`
--
ALTER TABLE `treasure_hunt`
  MODIFY `id_thunt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT για πίνακα `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
