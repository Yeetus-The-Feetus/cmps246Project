-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2022 at 06:14 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Strategy'),
(2, 'Adventure'),
(3, 'Action'),
(4, 'Board');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `description` longtext NOT NULL,
  `catid` int(11) NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `name`, `picture`, `price`, `description`, `catid`, `rating`) VALUES
(1, 'Among Them', 'amongThem.png', 9.99, 'This game is about having trust issues wit all your friends and saying sus every 5 minutes', 1, 4),
(2, 'BlockGame', 'blockGame.png', 29.99, 'A game made out of blocks designed to test your creativity. In BlockGame you can do anything you can imagine.', 2, 5),
(3, 'Red Alive Redemption V', 'redAliveRedemption5.png', 59.99, 'This game is about being a cowboy, You can ride a horse and shoot random people..', 3, 4.8),
(4, 'Under Clock', 'underClock.png', 39.99, 'play a variety of awesome heroes in all out deathmatch. you will have to master the hero\\\'s powers to be able to beat the opponents. Only the best will prevail.', 3, 4.1),
(5, 'Watch Cats', 'watchCats.png', 29.99, 'Watch Cats is an open world shooter game where you play as a hacker how have the power to hack anyone or anything in seconds. you can use this ability for either good or evil.', 3, 4.5),
(6, 'K.A.B.G', 'kabg.jpg', 59.99, 'Drop from the skies and collect as mush loot as you can, because you are going to need it to survive. You will be fighting against up to a 100 players to get that chicken dinner.', 3, 4),
(7, 'Kenshin Impakt', 'kenshinImpact.png', 0, 'Anime style open world RPG. Play as the traveler to free Teyvat from evil and find your sibling until you find out that the bosses you\\\'ve been killing are actually led by your sibling :D', 2, 3.6),
(8, 'Full Dead', 'fullDead.jpg', 9.99, 'play as gordon freeman and battle your way through hordes of zombies and militia to defeat the evil roaming the land.', 3, 4.1),
(9, 'Elden Bracelet', 'eldenBracelet.jpg', 59.99, 'play as a weird traveler and fight bosses to get loot so you can fight even more bosses until you find out its all just a berserk reference.', 3, 4.9),
(10, 'Chess 2.0', 'chess2.0.png', 0, 'finally after decades or even centuries the chess update everyone needed is here the queen is finally nerfed and the stalemate is no longer a draw.', 4, 4.2),
(11, 'Fortner', 'fortner.jpg', 0, 'cartoon style battle royale with amazing animations, and guns... Lots and lots of guns. some items to eat here and there, but mostly guns.', 3, 0),
(12, 'Monopoly', 'monopoly.jpg', 9.99, 'board game that makes you hates your friends all while trying to get out of jail after a series of unfortunate events.', 4, 4),
(13, 'Human fall flat', 'humanFallFlat.jpg', 9.99, 'Push friends off high platforms and laugh.', 1, 4.2),
(14, 'Until Morning', 'untilDawn.jpg', 29.99, 'Go back to the mountain on a vacation with your friends. One simple prank gone wrong, ended with all the teens experiencing torture pain and agony. their fate is in your hands.', 3, 4.3),
(15, 'Five days at jerrys', 'fiveDaysAtJerrys.jpg', 9.99, 'your first night shift ever in one of the biggest pizzeria franchises. you realise that the animatronics are up to sinister things when roaming around at night. try your best to survive the week.', 3, 4.1),
(16, 'Day in The Stones', 'dayInTheStones.png', 0, 'Night In the Woods is a story about a 20-year-old cat named Mae Borowski who has returned to her hometown of Possum Springs after deciding to drop out of college, and you spend the majority of the game exploring her relationships with the townsfolk—with her neighbors, with her parents, with the friends she left behind.', 2, 4.2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(3, 'name3', 'email2@gmail.com', '$2y$10$B17nUziBqxfXQFLQ2IlNvuIsMdqQf579akJpZqJzdER.trBgcWmOu'),
(4, 'name7', 'seven@gmail.com', '\Z??s%ƒq???D?r'),
(5, 'user5', 'five@gmail.com', '444bcb3a3fcf8389296c49467f27e1d6'),
(6, 'ok', 'ok@gmail.com', '444bcb3a3fcf8389296c49467f27e1d6'),
(8, 'hello', 'email@gmail.com', '444bcb3a3fcf8389296c49467f27e1d6'),
(9, 'kira', 'kira@gmail.com', '7a61721ed4832664aa3ce8e2234dcdb4'),
(10, 'karim', 'karim@gmail.com', '2167a6ac80340b69f3b05b800417d6c7'),
(11, 'ss', 'ss@gmail.com', '3691308f2a4c2f6983f2880d32e29c84'),
(12, 'sss', 'sss@gmail.com', '9f6e6800cfae7749eb6c486619254b9c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
