-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2024 at 01:03 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `comment_subject` varchar(255) DEFAULT NULL,
  `comment_text` text DEFAULT NULL,
  `is_read` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `comment_subject`, `comment_text`, `is_read`, `created_at`) VALUES
(1, 'New message received', 'You have a new message from John.', 1, '2024-03-26 11:48:26'),
(2, 'New message received', 'You have a new message from John.', 1, '2024-03-26 11:48:47'),
(3, 'New message received', 'You have a new message from John.', 1, '2024-03-26 11:49:40'),
(4, 'Reminder: Meeting tomorrow', 'Don\'t forget about the meeting scheduled for tomorrow at 10 AM.', 1, '2024-03-26 11:49:40'),
(5, 'Payment received', 'Your payment of $100 has been received.', 1, '2024-03-26 11:49:40'),
(6, 'Task assigned', 'You have been assigned a new task. Please review the details.', 1, '2024-03-26 11:49:40'),
(7, 'Account update', 'Your account information has been updated.', 0, '2024-03-26 11:49:40'),
(8, 'Upcoming deadline', 'Reminder: The deadline for project submission is approaching.', 0, '2024-03-26 11:49:40'),
(9, 'New product available', 'Check out our latest product now available in the store.', 0, '2024-03-26 11:49:40'),
(10, 'Important announcement', 'Please read the important announcement posted on the notice board.', 1, '2024-03-26 11:49:40'),
(11, 'Network maintenance', 'There will be a scheduled maintenance activity on the network this weekend.', 0, '2024-03-26 11:49:40'),
(12, 'Congratulations!', 'Congratulations on completing your certification course.', 0, '2024-03-26 11:49:40'),
(13, 'System update', 'A new system update is available. Please install it to ensure security and performance.', 0, '2024-03-26 11:49:40'),
(14, 'Holiday notice', 'The office will remain closed on Monday for the public holiday.', 0, '2024-03-26 11:49:40'),
(15, 'Feedback requested', 'Please provide your feedback on the recent service experience.', 0, '2024-03-26 11:49:40'),
(16, 'New job opportunity', 'Exciting job opportunity available. Apply now!', 0, '2024-03-26 11:49:40'),
(17, 'Weather alert', 'Severe weather warning issued for your area. Stay safe.', 0, '2024-03-26 11:49:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
