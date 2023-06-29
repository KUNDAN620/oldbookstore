-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql211.epizy.com
-- Generation Time: May 30, 2023 at 02:06 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_34104541_auth_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `meg_id` int(90) NOT NULL,
  `to_post` int(20) NOT NULL,
  `from_user` int(90) NOT NULL,
  `meg` varchar(25) NOT NULL,
  `to_user` varchar(255) NOT NULL,
  `from_user_name` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `to_user_name` varchar(255) NOT NULL,
  `first_meg` varchar(255) NOT NULL,
  `to_user_profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(252) NOT NULL,
  `title` varchar(250) NOT NULL,
  `price` int(200) NOT NULL,
  `dis` varchar(252) NOT NULL,
  `address` varchar(250) NOT NULL,
  `address2` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `zip` int(250) NOT NULL,
  `file` varchar(250) NOT NULL,
  `user_id` int(20) NOT NULL,
  `post_by` varchar(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `price`, `dis`, `address`, `address2`, `city`, `state`, `zip`, `file`, `user_id`, `post_by`, `date`) VALUES
(123, 'new comic book', 1500, 'one time used book in new condition', 'morabadi', 'morabadi maidan ', 'Ranchi', 'Jharkhand', 834002, 'book3', 116, 'SAROJ', '2023-05-30 00:41:24'),
(124, 'HORROR BOOK', 1200, 'NEW BOOK IS FOR SALE', 'ARGORA', 'ARGORA MAIDAN', 'Ranchi', 'Jharkhand', 834002, 'book5', 116, 'SAROJ', '2023-05-30 00:51:29'),
(125, 'RAM SITA BOOK', 2000, 'HOLY BOOK', 'MECON', 'DIBIDIH', 'Ranchi', 'Jharkhand', 834002, 'book4', 116, 'SAROJ', '2023-05-30 00:53:03'),
(126, 'Angelina book', 2500, 'book of magic', 'mukti dham', 'aayiye apka sawagt hai', 'Ranchi', 'Jharkhand', 834002, 'book2', 115, '', '2023-05-30 00:55:48'),
(127, 'Angelina ', 2500, 'book of magic', 'mukti dham', 'aayiye apka sawagt hai', 'Ranchi', 'Jharkhand', 834002, 'book6.jpg', 115, '', '2023-05-30 00:56:53'),
(129, 'NIGHT Walker', 2300, 'come and buy book at low cost', 'doranda', 'doranda bazar ke bagal me', 'Ranchi', 'Jharkhand', 834002, 'book7.jpg', 115, 'RAMVILASH PASWAN', '2023-05-30 01:22:59'),
(130, 'Premchand', 1400, 'COME AND BUY', 'KHARACHI', 'BANGLADESH', 'Ranchi', 'Jharkhand', 834002, 'book9.jpeg', 117, 'kundan', '2023-05-30 01:25:43'),
(131, 'CODE WITH ME', 1230, 'python Programming book for ug ', 'morabadi', 'morabadi maidan ', 'Ranchi', 'Jharkhand', 834002, 'book10.jpg', 117, 'kundan', '2023-05-30 01:26:19'),
(132, '2 STATES', 2400, 'BOOK BY PANKAJ BHAGAT', 'doranda', 'DIBIDIH', 'Ranchi', 'Jharkhand', 834002, 'book11.webp', 117, 'kundan', '2023-05-30 01:27:11'),
(133, '101 WAYS TOO KILL YOUR TEACHER', 2000, 'KILL ANYONE', 'LAHORE', 'DIBIDIH', 'Ranchi', 'Jharkhand', 834002, 'book12.jpg', 117, 'kundan', '2023-05-30 01:28:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pp` varchar(255) NOT NULL DEFAULT 'default-pp.png',
  `mobile` bigint(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `username`, `password`, `pp`, `mobile`, `file`) VALUES
(115, 'RAMVILASH PASWAN', 'ram@gmail.com', '$2y$10$Z.1ilPAundeENWh8/ahIt.TwuOw/UnHDOI8aJw59wGfmNKDfrOQVC', '.jpg', 7274767678, ''),
(116, 'SAROJ', 'saroj@gmail.com', '$2y$10$1gXWwTIydh.ZYlA34tdGDeL.yPrD83zmU5uugUEtouOMqPL8Q11.K', '.jpg', 6202925060, ''),
(117, 'kundan', 'kundan@gmail.com', '$2y$10$HdXoMtieEoU/eqdEUkZIEuQ0NR7N6dsFDFLdFKoxDxxVtLU6lkHNO', '.png', 7274767678, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`meg_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
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
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `meg_id` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=263;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(252) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
