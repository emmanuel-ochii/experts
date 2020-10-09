-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2020 at 06:04 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abel`
--

-- --------------------------------------------------------

--
-- Table structure for table `investments`
--

CREATE TABLE `investments` (
  `invest_id` int(11) NOT NULL,
  `plan` varchar(150) NOT NULL,
  `user_id` int(11) NOT NULL,
  `payment_mthd` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `date_reg` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `investments`
--

INSERT INTO `investments` (`invest_id`, `plan`, `user_id`, `payment_mthd`, `email`, `amount`, `date_reg`) VALUES
(4, 'retirement', 3, 'btc', 'ezinne.ezeme@tenece.com', '100.00', '2020-09-28 12:24:11'),
(5, 'retirement', 3, 'btc', 'ezinne.ezeme@gmail.com', '100.00', '2020-09-28 12:25:27'),
(6, 'retirement', 3, 'btc', 'ezinnie.ezeme@gmail.com', '100.00', '2020-09-28 12:28:21'),
(7, 'retirement', 3, 'btc', 'ezinnie.ezeme@gmail.com', '100.00', '2020-09-28 12:30:25'),
(8, 'retirement', 3, 'btc', 'ezinnie.ezeme@gmail.com', '100.00', '2020-09-28 12:31:29'),
(9, 'retirement', 3, 'btc', 'ezinnie.ezeme@gmail.com', '100.00', '2020-09-28 12:32:53'),
(10, 'retirement', 3, 'btc', 'ezinnie.ezeme@gmail.com', '100.00', '2020-09-28 12:33:48'),
(11, 'retirement', 3, 'btc', 'ezinnie.ezeme@gmail.com', '100.00', '2020-09-28 12:34:15'),
(12, 'retirement', 3, 'btc', 'ezinnie.ezeme@gmail.com', '100.00', '2020-09-28 12:36:47'),
(13, 'retirement', 3, 'btc', 'ezinnie.ezeme@gmail.com', '100.00', '2020-09-28 12:38:10'),
(14, 'retirement', 3, 'btc', 'ezinnie.ezeme@gmail.com', '100.00', '2020-09-28 12:39:34'),
(15, 'retirement', 3, 'btc', 'ezinnie.ezeme@gmail.com', '100.00', '2020-09-28 12:40:18'),
(16, 'retirement', 3, 'btc', 'ezinnie.ezeme@gmail.com', '100.00', '2020-09-28 12:58:21'),
(17, 'retirement', 3, 'btc', 'ezinne.ezeme@gmail.com', '100.00', '2020-09-28 13:00:29'),
(18, 'special trades', 3, 'btc', 'ezinne.ezeme@gmail.com', '100.00', '2020-09-28 13:01:46'),
(19, 'special trades', 3, 'btc', 'ezinne.ezeme@gmail.com', '100.00', '2020-09-28 13:15:23'),
(20, 'retirement', 3, 'btc', 'ezinnie.ezeme@gmail.com', '100.00', '2020-09-28 13:18:01'),
(21, 'retirement', 3, 'btc', 'ezinnie.ezeme@gmail.com', '100.00', '2020-09-28 13:26:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fullname` varchar(150) NOT NULL DEFAULT 'null',
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL DEFAULT 'null',
  `dob` text NOT NULL,
  `address` varchar(200) NOT NULL,
  `auth` varchar(50) NOT NULL DEFAULT 'null',
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `fullname`, `email`, `password`, `phone`, `dob`, `address`, `auth`, `create_datetime`) VALUES
(3, 'meraga', 'Wifi', 'meraga@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '+880000000', '09/16/2020', 'ttrans-e', '1D103d0Oa4', '2020-09-21 05:43:30'),
(4, 'Zinny', 'Zinny', 'ezinnie.ezeme@gmail.com', '202cb962ac59075b964b07152d234b70', '+880000000', '09/23/2020', 'ttransbyt', '1D103d0Oa4', '2020-09-28 18:33:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `investments`
--
ALTER TABLE `investments`
  ADD PRIMARY KEY (`invest_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `investments`
--
ALTER TABLE `investments`
  MODIFY `invest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
