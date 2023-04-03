-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2023 at 01:31 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thewebdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comments_id` int(11) NOT NULL,
  `comment` varchar(250) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `projectcategorys`
--

CREATE TABLE `projectcategorys` (
  `projectcategorys_id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `meta_title` varchar(100) NOT NULL,
  `meta_description` varchar(250) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projectcategorys`
--

INSERT INTO `projectcategorys` (`projectcategorys_id`, `category`, `meta_title`, `meta_description`, `image`, `status`, `date`) VALUES
(1, 'html', 'html titlte', 'html description', '63d9cb108e03d6.86538656.jpg', 1, '2023-02-01 03:14:40'),
(2, 'css', 'css title', 'css description', '63d9cb34e123c2.01511529.jpg', 1, '2023-02-01 03:15:16'),
(3, 'javascript', 'javascript title', 'javascript description', '63d9cb90293298.61061955.jpg', 1, '2023-02-01 03:16:48'),
(4, 'php', 'php meta title', 'php meta description', '63d9cbb6dbb026.78049193.jpg', 1, '2023-02-01 03:17:26'),
(5, 'react', 'react meta titel', 'react meta description', '63d9cc02f191a2.20881301.jpg', 1, '2023-02-13 09:50:24');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `projects_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `download_file` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL,
  `cost` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `downloads` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `meta_title` varchar(200) NOT NULL,
  `meta_description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`projects_id`, `title`, `description`, `download_file`, `image`, `created_at`, `cost`, `price`, `status`, `downloads`, `category`, `meta_title`, `meta_description`) VALUES
(22, 'How to create basic layout using html and css', 'How to create basic layout using html and css How to create basic layout using html and css How to create basic layout using html and css', '63ded4d4e50522.69099805.zip', '63ded34eb45593.08270419.jpg', '2023-02-04 22:57:40', 'free', 0, 1, 0, 1, 'How to create basic layout using html and css', 'How to create basic layout using html and css'),
(23, 'how to create flipkart search bar using js', 'how to create flipkart search bar using javascript how to create flipkart search bar using javascript how to create flipkart search bar using javascript', '63ded27ccc30f2.67539458.pdf', '63ded27ccb73c2.83262891.png', '2023-02-04 22:47:40', 'free', 0, 1, 0, 3, 'how to create flipkart search bar using javascript', 'how to create flipkart search bar using javascript'),
(24, 'Rotate card on hover using html and css', 'Rotate card on hover using html and css Rotate card on hover using html and css Rotate card on hover using html and css', '63dfe8781b9b36.24098696.zip', '63dfe8781b2f32.13897151.jpg', '2023-02-05 18:33:44', 'paid', 55, 1, 0, 3, 'Rotate card on hover using html and css', 'Rotate card on hover using html and css Rotate card on hover using html and css'),
(25, 'How to design e commerce website', 'the result contains all countries with their number of calls and the average call duration. From this result, we’re interested only in these having average call duration greater than average call duration of all calls. That’s our original query, but with comments added.', '642ab7bbd24a22.20249615.pdf', '642ab7bbd0b014.44446688.jpg', '2023-04-03 13:25:47', 'free', 0, 1, 0, 2, 'How to design e commerce website', 'How to design e commerce website');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `replies_id` int(11) NOT NULL,
  `reply` varchar(250) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `email_varified` varchar(250) DEFAULT NULL,
  `password` varchar(200) NOT NULL,
  `date` datetime NOT NULL,
  `image` varchar(250) NOT NULL,
  `rank` varchar(200) NOT NULL DEFAULT 'normal',
  `token` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `firstname`, `lastname`, `email`, `email_varified`, `password`, `date`, `image`, `rank`, `token`) VALUES
(1, 'The Web', '3.0', 'thecodeneverlie@gmail.com', 'thecodeneverlie@gmail.com', '$2y$10$gNgdUDQNti3Qd4Fj76qNJOfnM9VRXRta/G9wr089kilqD21d2x5t6', '2023-02-14 18:02:57', '', 'admin', 'VRZAyuKGcSbSv6bGAK46IpYV7QsxaUd7T1fYTxOBvpvA7T03waIeiKtQs8wP'),
(5, 'Santosh', 'Kumar', 'skambharti563@gmail.com', 'skambharti563@gmail.com', '$2y$10$lhGN.8mOkwVBSycy/f4YIOIzw/ZOaejUmqOnaWt0r7o23ryaM.I0q', '2023-03-05 21:24:46', '', 'normal', ''),
(6, 'Vishal', 'Kumar', 'vishaldp2017@gmail.com', 'vishaldp2017@gmail.com', '$2y$10$66oC2C4dFWQrllB2HcA.oOlaJBAaLdD2/9zwZensL7rJuvT5XW.Jy', '2023-04-03 13:27:03', '', 'normal', '');

-- --------------------------------------------------------

--
-- Table structure for table `verifys`
--

CREATE TABLE `verifys` (
  `verifys_id` int(11) NOT NULL,
  `otp` int(11) NOT NULL,
  `expired` int(11) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `verifys`
--

INSERT INTO `verifys` (`verifys_id`, `otp`, `expired`, `email`) VALUES
(1, 326987, 1674160330, 'skambharti563@gmail.com'),
(2, 512268, 1674332830, 'komal@gmail.com'),
(3, 992116, 1674337953, 'thecodeneverlie@gmail.com'),
(4, 182492, 1674338400, 'quietudestudio@gmail.com'),
(5, 999727, 1676273258, 'thecodeneverlie1@gmail.com'),
(6, 784519, 1676273587, 'thecodeneverlie@gmail.com'),
(7, 624181, 1676394245, 'thecodeneverlie@gmail.com'),
(8, 464504, 1676395284, 'skambharti563@gmail.com'),
(9, 971686, 1678047951, 'skambharti563@gmail.com'),
(10, 927259, 1680521287, 'vishaldp2017@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comments_id`);

--
-- Indexes for table `projectcategorys`
--
ALTER TABLE `projectcategorys`
  ADD PRIMARY KEY (`projectcategorys_id`),
  ADD KEY `category` (`category`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`projects_id`),
  ADD KEY `title` (`title`),
  ADD KEY `description` (`description`),
  ADD KEY `date` (`created_at`),
  ADD KEY `cost` (`cost`),
  ADD KEY `price` (`price`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`replies_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- Indexes for table `verifys`
--
ALTER TABLE `verifys`
  ADD PRIMARY KEY (`verifys_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comments_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projectcategorys`
--
ALTER TABLE `projectcategorys`
  MODIFY `projectcategorys_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `projects_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `replies_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `verifys`
--
ALTER TABLE `verifys`
  MODIFY `verifys_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
