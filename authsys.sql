-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2020 at 12:46 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `authsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` longtext NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'Arnav Singh', 'abc@gmail.com', '$2y$10$SSJZsY.ln3iJz/WLP9pp0uMZwwceTRZQIAgPgmPREhjAQe0NpvZsO', '2020-06-12 00:23:28'),
(2, 'Rishabh', 'abc123@gmail.com', '$2y$10$lp2Mecb1AXJHsBcWxHJxQekMo6Jw.qqeVZmABJDSkP0mcs/LrGZXC', '2020-06-12 00:53:16'),
(3, 'Silver77', 'abc@abc.com', '$2y$10$kq.QE8pCJxx5En0kcOABuuMJYMeU2UahUy/Ktc5UaF7klo0VrHhIW', '2020-06-12 03:46:26'),
(6, 'Abhikhandelwal', 'abc12@gmail.com', '$2y$10$0ur9qwWJ8ji7S7pgrjgiq.0RgdemHTDj6TZYWj639nsdLiYHkueI.', '2020-06-12 03:58:16'),
(13, 'zoro1234', 'zoro@abc.com', '$2y$10$BulAH3Byx4d3IuzM/ccZL.d2ED1VixBKeHPXl2uSJgy2ruGYeAzXe', '2020-06-12 13:56:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
