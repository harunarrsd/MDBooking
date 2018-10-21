-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 20 Okt 2018 pada 17.26
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kinionline`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `article`
--

CREATE TABLE `article` (
  `article_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `image` varchar(4000) NOT NULL,
  `content` text NOT NULL,
  `creator_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_edited_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `summary` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `article`
--

INSERT INTO `article` (`article_id`, `title`, `image`, `content`, `creator_id`, `created_date`, `last_edited_date`, `summary`) VALUES
(3, 'test', '', 'test', 1, '2018-09-05 15:12:56', '2018-09-05 15:12:56', 'test'),
(4, 'a', '7JG-02f.jpg', 'b', 1, '2018-09-08 14:26:41', '2018-09-08 14:26:41', 'b'),
(5, 'a', '7JG-02f.(0)jpg', 'b', 1, '2018-09-08 14:28:12', '2018-09-08 14:28:12', 'b'),
(7, 'olololo', '018-09-0809:40:25pm/E7JG-02f.jpg', 'test', 1, '2018-09-08 14:40:25', '2018-09-08 15:26:21', 'test'),
(8, 'test', '/article_data/2018-09-0809:42:30pm/E7JG-02f.jpg', 'test', 1, '2018-09-08 14:42:30', '2018-09-08 14:42:30', 'test'),
(9, 'test', '', 'test', 1, '2018-09-08 15:05:04', '2018-09-08 15:05:04', 'test'),
(10, 'test', '', 'test', 1, '2018-09-08 15:19:37', '2018-09-08 15:19:37', 'test'),
(11, 'test', '', 'test', 1, '2018-09-08 15:19:42', '2018-09-08 15:19:42', 'test'),
(12, 'test', '', 'test', 1, '2018-09-08 15:19:55', '2018-09-08 15:19:55', 'test'),
(13, 'test', '', 'test', 1, '2018-09-08 15:20:50', '2018-09-08 15:20:50', 'test'),
(14, 'test', '', 'test', 1, '2018-09-08 15:20:50', '2018-09-08 15:20:50', 'test'),
(15, 'test', '', 'test', 1, '2018-09-08 15:25:15', '2018-09-08 15:25:15', 'test'),
(16, 'test', '', 'test', 1, '2018-09-08 15:25:15', '2018-09-08 15:25:15', 'test');

-- --------------------------------------------------------

--
-- Struktur dari tabel `article_category`
--

CREATE TABLE `article_category` (
  `article_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `article_category`
--

INSERT INTO `article_category` (`article_id`, `name`) VALUES
(1, 'teknologi'),
(1, 'web design'),
(1, 'kulit manggis'),
(1, 'kulit jeruk'),
(4, 'test'),
(4, 'test'),
(5, 'test'),
(5, 'test'),
(6, 'test'),
(6, 'test'),
(7, 'test'),
(7, 'test'),
(8, 'test'),
(8, 'test'),
(17, 'artificial intelligence');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_token`
--

CREATE TABLE `auth_token` (
  `user_id` int(11) NOT NULL,
  `token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `auth_token`
--

INSERT INTO `auth_token` (`user_id`, `token`) VALUES
(1, 'MSd0ZXN0Jw=='),
(1, 'MSd0ZXN0Jw==');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mailer`
--

CREATE TABLE `mailer` (
  `mailer_id` int(11) NOT NULL,
  `email_target` varchar(300) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `message` text NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mailer`
--

INSERT INTO `mailer` (`mailer_id`, `email_target`, `subject`, `message`, `created_date`) VALUES
(2, 'adityafarizki@live.com', 'testing mailer', 'testing testing', '2018-10-09 17:22:33'),
(3, 'adityafarizki@live.com', 'testing mailer', 'testing testing', '2018-10-09 17:26:49'),
(4, 'adityafarizki@live.com', 'testing mailer', 'testing testing', '2018-10-09 17:27:28'),
(5, 'adityafarizki@live.com', 'testing mailer', 'testing testing', '2018-10-09 17:27:54'),
(6, 'adityafarizki@live.com', 'testing mailer', 'testing testing', '2018-10-09 17:28:13'),
(7, 'adityafarizki@live.com', 'testing mailer', 'testing testing', '2018-10-09 17:28:42'),
(8, 'adityafarizki@live.com', 'testing mailer', 'testing testing', '2018-10-09 17:29:04'),
(9, 'adityafarizki@live.com', 'testing mailer', 'testing testing', '2018-10-09 17:29:25'),
(10, 'adityafarizki@live.com', 'testing mailer', 'testing testing', '2018-10-09 17:29:50'),
(11, 'adityafarizki@live.com', 'testing mailer', 'testing testing', '2018-10-09 17:30:20'),
(12, 'adityafarizki@live.com', 'testing mailer', 'testing testing', '2018-10-09 17:31:00'),
(14, 'adityafarizki@live.com', 'testing mailer', 'testing testing', '2018-10-09 17:32:55'),
(15, 'adityafarizki@live.com', 'testing mailer', 'testing testing', '2018-10-09 17:33:41'),
(16, 'aditya.farizki1@gmail.com', 'testing mailer', 'testing testing', '2018-10-09 17:34:15'),
(17, 'aditya.farizki1@gmail.com', 'testing mailer', 'testing testing', '2018-10-09 17:35:26'),
(18, 'aditya.farizki1@gmail.com', 'testing mailer', 'testing testing', '2018-10-09 17:35:43'),
(19, 'ervina@gmail.com', 'testing mailer 12345', 'Testing 1', '2018-10-11 13:15:25'),
(20, 'aoaoa@gmail.com', 'Customer Feedback', 'Testing xxxxx', '2018-10-12 03:48:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `read_logs`
--

CREATE TABLE `read_logs` (
  `rlog_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `read_logs`
--

INSERT INTO `read_logs` (`rlog_id`, `article_id`, `created_date`) VALUES
(1, 3, '2018-10-09 08:37:09'),
(2, 4, '2018-10-09 08:49:21'),
(3, 3, '2018-10-09 08:49:23'),
(4, 3, '2018-10-09 08:49:25'),
(5, 3, '2018-10-09 08:49:25'),
(6, 4, '2018-10-09 08:49:27'),
(7, 4, '2018-10-09 08:49:28'),
(8, 4, '2018-10-09 08:49:29'),
(9, 5, '2018-10-09 08:49:30'),
(10, 5, '2018-10-09 08:49:31'),
(11, 5, '2018-10-09 08:49:32'),
(12, 5, '2018-10-09 08:49:33'),
(13, 7, '2018-10-09 08:49:36'),
(14, 7, '2018-10-09 08:49:37'),
(15, 7, '2018-10-09 08:49:38'),
(16, 7, '2018-10-09 08:49:38'),
(17, 8, '2018-10-09 08:49:39'),
(18, 8, '2018-10-09 08:49:40'),
(19, 8, '2018-10-09 08:49:41'),
(20, 8, '2018-10-09 08:49:41'),
(21, 9, '2018-10-09 08:49:42'),
(22, 9, '2018-10-09 08:49:43'),
(23, 9, '2018-10-09 08:49:44'),
(24, 9, '2018-10-09 08:49:45'),
(25, 10, '2018-10-09 08:49:45'),
(26, 10, '2018-10-09 08:49:46'),
(27, 10, '2018-10-09 08:49:47'),
(28, 10, '2018-10-09 08:49:48'),
(29, 10, '2018-10-09 08:49:48'),
(30, 10, '2018-10-09 08:49:48'),
(31, 10, '2018-10-09 08:49:49'),
(32, 10, '2018-10-09 08:49:49'),
(33, 10, '2018-10-09 08:49:50'),
(34, 10, '2018-10-09 08:49:50'),
(35, 10, '2018-10-09 08:49:50'),
(36, 10, '2018-10-09 08:49:50'),
(37, 10, '2018-10-09 08:49:50'),
(38, 10, '2018-10-09 08:49:50'),
(39, 10, '2018-10-09 08:49:50'),
(40, 7, '2018-10-13 01:05:04'),
(41, 7, '2018-10-13 01:05:05'),
(42, 7, '2018-10-13 01:05:15'),
(43, 7, '2018-10-13 01:05:37'),
(44, 7, '2018-10-13 11:50:02'),
(45, 7, '2018-10-13 11:58:17'),
(46, 7, '2018-10-13 11:58:19'),
(47, 7, '2018-10-13 11:58:20'),
(48, 7, '2018-10-13 12:09:08'),
(49, 7, '2018-10-13 12:09:47'),
(50, 7, '2018-10-13 12:11:22'),
(51, 7, '2018-10-13 12:12:44'),
(52, 7, '2018-10-13 12:14:05'),
(53, 7, '2018-10-13 12:14:19'),
(54, 5, '2018-10-13 12:14:46'),
(55, 7, '2018-10-13 12:16:19'),
(56, 7, '2018-10-13 12:16:31'),
(57, 7, '2018-10-13 12:18:18'),
(58, 10, '2018-10-15 11:57:20'),
(59, 10, '2018-10-15 11:57:21'),
(60, 3, '2018-10-16 03:59:09'),
(61, 3, '2018-10-16 03:59:13'),
(62, 3, '2018-10-16 03:59:15'),
(63, 3, '2018-10-16 03:59:16'),
(64, 3, '2018-10-16 03:59:17'),
(65, 3, '2018-10-16 03:59:18'),
(66, 3, '2018-10-16 03:59:20'),
(67, 3, '2018-10-16 03:59:21'),
(68, 3, '2018-10-16 03:59:22'),
(69, 3, '2018-10-16 03:59:23'),
(70, 3, '2018-10-16 03:59:25'),
(71, 3, '2018-10-16 03:59:26'),
(72, 3, '2018-10-16 03:59:27'),
(73, 3, '2018-10-16 03:59:28'),
(74, 3, '2018-10-16 03:59:29'),
(75, 3, '2018-10-16 03:59:31'),
(76, 3, '2018-10-16 04:00:38'),
(77, 3, '2018-10-16 04:00:39'),
(78, 3, '2018-10-16 04:00:41'),
(79, 3, '2018-10-16 04:00:42'),
(80, 7, '2018-10-16 08:05:37'),
(81, 7, '2018-10-16 10:16:40'),
(82, 7, '2018-10-16 10:17:16'),
(83, 7, '2018-10-16 10:55:32'),
(84, 7, '2018-10-16 10:55:52'),
(85, 7, '2018-10-16 10:56:14'),
(86, 7, '2018-10-16 10:56:25'),
(87, 7, '2018-10-16 11:44:38'),
(88, 7, '2018-10-16 11:45:13'),
(89, 7, '2018-10-16 11:45:55'),
(90, 7, '2018-10-16 11:45:58'),
(91, 7, '2018-10-16 12:03:19'),
(92, 10, '2018-10-16 13:58:47'),
(93, 3, '2018-10-16 13:59:40'),
(94, 7, '2018-10-18 15:45:47'),
(95, 7, '2018-10-18 15:50:00'),
(96, 7, '2018-10-18 17:30:54'),
(97, 7, '2018-10-18 17:30:55'),
(98, 7, '2018-10-18 23:08:31'),
(99, 7, '2018-10-19 17:42:56'),
(100, 7, '2018-10-19 17:43:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL DEFAULT 'male',
  `role` varchar(300) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `password`, `gender`, `role`, `created_date`) VALUES
(1, 'Marco Polo', 'marco.polo@yahoo.com', 'bWFyY29wb2xv', 'male', 'manager', '2018-09-29 14:47:40'),
(2, 'Ramon Antares Sullivan Dilla', 'gamercilik.kelasberat@gmail.com', 'Y2VsZXNhbHVjYXJk', 'female', 'design artist', '2018-09-29 14:49:28'),
(5, 'Song Jong Ki', 'jongki77@gmail.com', 'YWFhWEpCTkZKU0JORkpz', 'male', 'Customer', '2018-10-03 17:11:50'),
(6, 'Ervina', 'ervina.psptsr@gmail.com', 'WFhYWHl5eXk=', 'female', 'QA', '2018-10-03 17:16:41'),
(7, 'adit', 'adityafarizki@live.com', 'ZWpseXhvZmhhb2JudHVya29wZ2Ntdndpb3JxZWFkenU=', 'male', 'developer', '2018-10-06 18:53:46'),
(9, 'dummy user', 'aditya.farizki1@gmail.com', 'ZHVtbXk=', 'male', 'dev', '2018-10-08 12:18:19'),
(10, 'Fahmi Satria Aji', 'fahmiaji@ymail.com', 'cf2a0f4cad622628a7f01711809c1da1', 'Male', 'Junior Project Manager', '2018-10-20 14:21:36'),
(11, 'Parama Fadli Kurnia', 'fadli@kinionline.com', 'd14baa3ccdc61035ddbd25855540e343', 'Male', 'CEO', '2018-10-20 15:33:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_feedback`
--

CREATE TABLE `user_feedback` (
  `feedback_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(400) NOT NULL,
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_feedback`
--

INSERT INTO `user_feedback` (`feedback_id`, `name`, `email`, `subject`, `message`, `created_date`) VALUES
(1, 'test', 'test', 'test', 'testtesttestesttesttesttestesttesttesttestesttesttesttestesttesttesttestest', '2018-09-25 15:47:14'),
(2, 'Testing One', 'aaaa@gmail.com', 'Free Trial', 'Apakah tidak ada free trial untuk beberapa aplikasi?', '2018-09-25 16:48:44'),
(3, 'Sukses Subagyo', 'aaaa@gmail.com', 'Free Trial', 'Apakah tidak ada free trial untuk beberapa aplikasi?', '2018-09-29 08:53:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `mailer`
--
ALTER TABLE `mailer`
  ADD PRIMARY KEY (`mailer_id`);

--
-- Indexes for table `read_logs`
--
ALTER TABLE `read_logs`
  ADD PRIMARY KEY (`rlog_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_feedback`
--
ALTER TABLE `user_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `mailer`
--
ALTER TABLE `mailer`
  MODIFY `mailer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `read_logs`
--
ALTER TABLE `read_logs`
  MODIFY `rlog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user_feedback`
--
ALTER TABLE `user_feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
