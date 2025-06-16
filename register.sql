-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2025 at 09:46 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'vandana@34', 'sisodiys@gmail.com', '$2y$10$DUna.vbnJTHwcZuZFst4kepb1TzyVAk8ZOcuI0xJ/gskcZAfGjnPq', '2024-11-17 16:34:59'),
(2, 'Devnarayan', 'Vandanawisodiya@gmail.com', '$2y$10$8RiZ5TnmazNvfnC.XBQlVO3WsLPSUMOIXrdmsYpSQBnDcu3fFeBAq', '2024-11-18 16:58:56'),
(3, 'Vandana ', 'Vandanawisodiyaa@gmail.com', '$2y$10$SMsaIRSi9/D2lpGE4d.7B.py9LxtK/iuUWRLvQV6wrHTU0UJiFLFi', '2024-11-19 09:05:37'),
(4, 'Ashu', 'Admin@123', '$2y$10$KsRXlE1XjjCnv1sdydCfvu/bEyXXWZIIPA8yHuOy8BfXbVp13ad3m', '2024-11-19 09:30:13'),
(5, 'Amit', 'Amit@gmail.com', '$2y$10$umGXH8q3UXtraMixyGtuHuJ984kUAn2FxoNr.KClvh8kAoAUACN1C', '2024-11-21 07:10:34'),
(6, 'Gunjan', 'Sisodiyagunjan@gmail.com', '$2y$10$AGq.urbz15FpUBvIvZe5iecU9ocbBai33OX7K9g/hj2pJzxQL9fhy', '2024-11-21 07:14:56'),
(7, 'dev', 'dev@gmail', '$2y$10$8rmQGOji/3q13RfJfcWm7OH8aHaW1MRIeYZAS6bpR/B0AHZjg7zP6', '2024-12-24 04:12:04'),
(8, 'Vandana', 'Vandana@123', '$2y$10$Pp4UMYpPQx8k40g62Xu8uultUjibwH5va.m0pzKWOb9vO9YQhfQ9u', '2024-12-24 05:11:57');

-- --------------------------------------------------------

--
-- Table structure for table `userss`
--

CREATE TABLE `userss` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userss`
--

INSERT INTO `userss` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'Ashu', 'Ashu@gmail.com', '$2y$10$OdatpC7JOrkRH9zTLV9/2uFRLMKlUN6ymctKiBJ7KnnPgAdcmFStS', '2024-12-24 05:19:30'),
(2, 'Priya', 'Priya@gmail.com', '$2y$10$BBnhYjiHn9DK5cLL.NvWYuR1KTR13jaisKQidAflZwLdcl9Zob3Ty', '2024-12-25 08:27:51'),
(3, 'Vandana', 'Vandana@gmail.com', '$2y$10$PZ5Ho7gY3ww8SdxrMIIy/OaL3J5asxCZnQdMC6o1wq0QyIdx9gvkO', '2024-12-25 09:08:24'),
(4, 'Jyoti', 'Jyoti@gmail.com', '$2y$10$upwjz12HyfasXvrPlMuQ8.5W66iho.owByygw3PtOoL.pFp7ybDzS', '2024-12-25 09:21:11'),
(5, 'Himani', 'himani@gmail.com', '$2y$10$Vw6MbJKHIhU/6XR3Fstsa.jX1kJAxKFO7dT8FTG6R9Z98iiVmQajG', '2024-12-28 16:35:11'),
(6, 'Aanu', 'Aanu@gmail.com', '$2y$10$0IretsNdw8DrBi9tpKE6ceB1i4UJOTRSjDQ2pBS38PAS1o8vpuTQq', '2025-01-03 05:27:21'),
(7, 'Vansh', 'Vansh@gmail.com', '$2y$10$xw7WKwOXCJrOIqHb5fj.me9K2P0WcdpJlkvegIDRAGLJaILGzXqR2', '2025-01-03 08:28:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userss`
--
ALTER TABLE `userss`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `userss`
--
ALTER TABLE `userss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
