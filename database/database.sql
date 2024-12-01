-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2024 at 10:14 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `child_users` (
  `child_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `child_name` varchar(255) NOT NULL,
  `child_age` int(11) NOT NULL,
  `child_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `child_users` (`child_id`, `users_id`, `child_name`, `child_age`, `child_password`) VALUES
(2, 1, 'baby', 7, '$2y$10$apLgOb6ZPm4GFH.XvgAfoOOyx4Ssm9/WySQhW92CPh8PQNXDcIuNK');

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `contact_messages` (`id`, `name`, `email`, `message`, `created_at`) VALUES
(1, 'Madara', 'madara23@gmail.com', 'Repair', '2024-11-27 13:54:31'),
(2, 'Madara', 'madara23@gmail.com', 'Repair in feedback', '2024-11-27 13:55:54');

CREATE TABLE `display_books` (
  `book_id` int(11) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `genre` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `contact_num` varchar(15) NOT NULL,
  `book_options` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `display_books` (`book_id`, `users_id`, `genre`, `title`, `author`, `description`, `city`, `contact_num`, `book_options`, `price`, `image`) VALUES
(1, 1, 'Non-Fiction', 'Atomic Habits', 'James Clear', 'Motivational, self-love book', 'Colombo', '0719589692', 'sell', 3500.00, '67476f974f7ef_atomicbooks.jpg'),
(2, 1, 'Child', 'Bedtime Bear', 'None', 'Kids book', 'Colombo', '0719589692', 'sell', 1500.00, '67477419cbc32_BedtimeBear.jpg'),
(3, NULL, 'Non-Fiction', 'A Million To One', 'Tony Faggioli', 'There are some demons that you never see coming', 'Colombo', '0719589692', 'sell', 2350.00, '674774a3e3ab5_A million to one.jpg'),
(4, NULL, 'Child', 'A Little Bit of Sunshine', 'None', 'Kids Book', 'Wattala', '0719589692', 'swap', 0.00, '6747751350ba9_ALittleBitofSunshine.jpg'),
(5, NULL, 'Child', 'Big Beautiful Ocean', 'None', 'A photographic exploration', 'Maharagama', '0719589692', 'sell', 2250.00, '674776f615353_BigBeautifulOcean.jpg'),
(6, NULL, 'Child', 'Diary of a Wimpy Kid Rodrick Rules', 'Jeff Kinney', 'Children category book', 'Nugegoda', '0719589692', 'swap', 0.00, '6747775c1b512_Diary of a Wimpy Kid Rodrick Rules.jpg'),
(7, 1, 'Fiction', 'Harry Potter and the Cursed Child', 'J K Rowling', 'World famous fictional story', 'Homagama', '0723295295', 'swap,sell', 3700.00, '67477c84c8eae_Harry Potter And The Cursed Child.jpg'),
(8, NULL, 'Fiction', 'Iron Flame', 'Rebecca Yarros', 'Non-fiction', 'Kandy', '0723295295', 'swap,sell', 3800.00, '67477cc0c289a_iron flame.jpg'),
(9, NULL, 'Non-Fiction', 'It Ends With Us', 'Colleen Hoover', 'New York Times bestselling author', 'Ja Ela', '0723295295', 'swap,sell', 3500.00, '67477d06efb77_itendswithus.jpg'),
(10, NULL, 'Non-Fiction', 'Spare Il Minore', 'Prince Harry', 'Mondadori', 'Colombo', '0723295295', 'swap,sell', 4780.00, '67477d4d5f850_Spare.jpg'),
(11, NULL, 'Other', 'The Last Devil To Die', 'Richard Osman', 'Multi-million copy bestseller', 'Galle', '0723295295', 'swap,sell', 3200.00, '67477d93a50be_The last devil to die.jpg'),
(12, NULL, 'Fiction', 'The Moon and Stars', 'Jenna Warren', 'Fictional book', 'Kalutara', '0723295295', 'swap,sell', 2700.00, '67477e7cbc3da_The moon and stars.jpg'),
(13, NULL, 'Non-Fiction', 'Unsunkable', 'Jenni L. Walsh', 'Voyage of danger', 'Colombo', '0723295295', 'swap,sell', 3100.00, '67477eb590f45_unsinkable.jpg'),
(14, NULL, 'Child', 'A Visit to Grandma\'s House', 'Laura Gates Galvin', 'Kids book', 'Galle', '0723295295', 'swap,sell', 1560.00, '67477eeab084e_VisitGrandmasHouse.jpg'),
(15, NULL, 'Non-Fiction', 'Where the Crawdad Sing', 'Delia Owens', 'Non-fiction', 'Kandy', '0723295295', 'swap,sell', 2450.00, '67477f2758a4a_Where the crawdads sings.jpg');

CREATE TABLE `events` (
  `events_id` int(11) NOT NULL,
  `events_title` varchar(255) NOT NULL,
  `events_description` text NOT NULL,
  `events_location` varchar(255) DEFAULT NULL,
  `events_date` date NOT NULL,
  `events_time` time NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `users_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `events` (`events_id`, `events_title`, `events_description`, `events_location`, `events_date`, `events_time`, `created`, `users_id`) VALUES
(8, 'Supervisor Meeting', 'To discuss about changes', 'Online', '2024-11-16', '10:00:00', '2024-11-15 15:27:37', 1),
(15, 'Birthday party plan', 'Discuss about changes', 'Home', '2024-11-23', '10:30:00', '2024-11-16 03:11:47', 3),
(16, 'Birthday party plan', 'Discussion', 'At home', '2024-11-29', '13:19:00', '2024-11-16 05:49:24', 1),
(17, 'Share book with amasha', 'Sharing at uoc', 'UoC', '2024-12-07', '08:30:00', '2024-11-27 20:01:17', 1),
(18, 'Share book with kaviru', 'Sharing at ucsc', 'UCSC', '2025-01-29', '08:30:00', '2024-11-27 20:04:36', 1);

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `users_email` varchar(255) NOT NULL,
  `users_name` varchar(255) NOT NULL,
  `users_password` varchar(255) NOT NULL,
  `users_address` varchar(255) NOT NULL,
  `users_contactNumber` varchar(15) NOT NULL,
  `users_role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `users`
MODIFY COLUMN `users_role` ENUM('user', 'community_ambassador', 'admin') NOT NULL DEFAULT 'user';

INSERT INTO `users` (`users_id`, `users_email`, `users_name`, `users_password`, `users_address`, `users_contactNumber`, `users_role`) VALUES
(1, 'madarameegama7@gmail.com', 'Madara Meegama', '$2y$10$F38pKMac7eR84azeCXeEiOIZkNgsrIw9l99Td4.oX9ECD/gUaVr7y', '7/7, Pragathi Mawatha,Homagama', '0719589690', 'user'),
(2, 'example@example.com', 'John Doe', 'securepassword', '123 Main St', '1234567890', 'user'),
(3, 'museadmin@gmail.com', 'Admin', '$2y$10$Yk1chs83KqHULsISujSspOPZcrFr0Faz3cs4Vpejgv4CSgUQkFIBS', 'Colombo', '0724188889', 'user'),
(4, 'dinu123@gmail.com', 'Dinu Meegama', '$2y$10$ZdNx2jS5HIlxJbc4bbJeXu6c4qjfgT04qwm7IL6dAsyyK1uEk0Pla', 'Homagama', '0722855658', 'user'),
(5, 'nayana1966@gmail.com', 'Nayana', '$2y$10$EZlNLDeiR84AfNjQbhrf4.awvSa3G3aCKZaI.YUC1iNNwf2TfKp6W', 'Homagama', '0724188888', 'user'),
(6, 'gyashan@gmail.com', 'Gayashan', '$2y$10$TNCt.2nhp2jlXuk1hRYlaesKwI8iAD3A.oy7SXniMtGz5K1Uqcai.', 'Galle', '0719589692', 'user');

CREATE TABLE `wishlist` (
  `wish_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `wishlist` (`wish_id`, `users_id`, `book_id`, `created_at`) VALUES
(1, 3, 2, '2024-11-27 17:17:37'),
(2, 3, 8, '2024-11-27 17:17:44'),
(3, 3, 16, '2024-11-27 17:17:53'),
(4, 1, 13, '2024-11-27 17:18:03'),
(5, 1, 17, '2024-11-27 17:18:15');


CREATE TABLE `chapters` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chapters`
--

INSERT INTO `chapters` (`id`, `group_id`, `title`, `content`, `author`, `created_at`) VALUES
(1, 1, 'A', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n\r\nWhere does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\n', 'Amasha', '2024-11-27 03:36:52'),
(2, 1, 'B', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n\r\nWhere does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'Amasha', '2024-11-27 23:54:05');

-- --------------------------------------------------------

--
-- Table structure for table `communities`
--

CREATE TABLE `communities` (
  `community_id` int(11) NOT NULL,
  `community_name` varchar(100) NOT NULL,
  `community_type` varchar(50) NOT NULL,
  `community_description` text DEFAULT NULL,
  `community_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `communities`
--

INSERT INTO `communities` (`community_id`, `community_name`, `community_type`, `community_description`, `community_image`, `created_at`) VALUES
(1, 'Bookmarks & Brevity', 'private', 'Bookmarks & Brevity is a cozy, inviting book club where readers gather to explore and discuss captivating stories, one chapter at a time. We embrace the beauty of brevity, diving into thought-provoking reads and savoring the power of concise storytelling. Whether you\'re a casual reader or a literary enthusiast, join us as we turn pages, share insights, and celebrate the magic of books over a cup of coffee or tea.', 'book3.jpg', '2024-11-21 01:08:51');

-- --------------------------------------------------------

--
-- Table structure for table `community_members`
--

CREATE TABLE `community_members` (
  `id` int(11) NOT NULL,
  `community_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `joined_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deletion_requests`
--

CREATE TABLE `deletion_requests` (
  `request_id` int(11) NOT NULL,
  `community_id` int(11) NOT NULL,
  `requested_by` int(11) NOT NULL,
  `reason` text DEFAULT NULL,
  `status` enum('Pending','Approved','Rejected') DEFAULT 'Pending',
  `request_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `community_events` (
  `event_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `reason` text NOT NULL,
  `place` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `community_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `community_events` (`event_id`, `title`, `reason`, `place`, `date`, `time`, `community_id`) VALUES
(1, 'ABC', 'ghjdkstryueiowsijxbc', 'Colombo', '2024-12-10', '10:43:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `event_participants`
--

CREATE TABLE `event_participants` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event_participants`
--

INSERT INTO `event_participants` (`id`, `event_id`, `user_id`) VALUES
(1, 1, 1),
(2, 1, 1),
(3, 1, 1),
(4, 1, 1),
(5, 1, 1),
(6, 1, 1),
(7, 1, 1),
(8, 1, 1),
(9, 1, 1),
(10, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts1`
--

CREATE TABLE `posts1` (
  `post_id` int(11) NOT NULL,
  `community_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts1`
--

INSERT INTO `posts1` (`post_id`, `community_id`, `user_id`, `title`, `content`, `image`, `created_at`) VALUES
(1, 1, 1, 'abcd', 'nq3ntpu2thp5ngjnnekl;', '', '2024-11-23 05:10:23'),
(2, 1, 1, 'abcd', 'hkshbqljiojqpoisjcn', '', '2024-11-23 05:30:17'),
(3, 1, 1, 'abcde', 'fcgvhbnjkmhygtfdsedtfygh', NULL, '2024-11-23 05:41:41'),
(4, 1, 1, 'abcder', 'gfdfgyhujifcvgbn', '../images/posts/67416b27295454.32867183.jpg', '2024-11-23 05:41:59');

-- --------------------------------------------------------


INSERT INTO `users` (`users_id`, `users_email`, `users_name`, `users_password`, `users_address`, `users_contactNumber`, `users_role`) VALUES
(1, 'amasha@gmail.com', 'Amasha', '$2y$10$JGd03zA3zMT.pSo9u9k6Q.hPb1RKOrGJqFX57WZ.eOUVB72Bfj6R.', 'Galle', '0778349102', 'community_ambassador');

-- --------------------------------------------------------

--
-- Table structure for table `writing_groups`
--

CREATE TABLE `writing_groups` (
  `id` int(11) NOT NULL,
  `community_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `writing_groups`
--

INSERT INTO `writing_groups` (`id`, `community_id`, `name`, `created_at`) VALUES
(1, 1, 'ABCD', '2024-11-26 00:54:21'),
(2, 1, 'ABCD', '2024-11-26 00:56:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chapters`
--
ALTER TABLE `chapters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_id` (`group_id`);

--
-- Indexes for table `communities`
--
ALTER TABLE `communities`
  ADD PRIMARY KEY (`community_id`);

--
-- Indexes for table `community_members`
--
ALTER TABLE `community_members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `community_id` (`community_id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `deletion_requests`
--
ALTER TABLE `deletion_requests`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `community_id` (`community_id`),
  ADD KEY `requested_by` (`requested_by`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `community_id` (`community_id`);

--
-- Indexes for table `event_participants`
--
ALTER TABLE `event_participants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_id` (`event_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `posts1`
--
ALTER TABLE `posts1`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `fk_community` (`community_id`),
  ADD KEY `fk_user` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`),
  ADD UNIQUE KEY `users_email` (`users_email`);

--
-- Indexes for table `writing_groups`
--
ALTER TABLE `writing_groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `community_id` (`community_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chapters`
--
ALTER TABLE `chapters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `communities`
--
ALTER TABLE `communities`
  MODIFY `community_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `community_members`
--
ALTER TABLE `community_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deletion_requests`
--
ALTER TABLE `deletion_requests`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `event_participants`
--
ALTER TABLE `event_participants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `posts1`
--
ALTER TABLE `posts1`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `writing_groups`
--
ALTER TABLE `writing_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chapters`
--
ALTER TABLE `chapters`
  ADD CONSTRAINT `chapters_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `writing_groups` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `community_members`
--
ALTER TABLE `community_members`
  ADD CONSTRAINT `community_members_ibfk_1` FOREIGN KEY (`community_id`) REFERENCES `communities` (`community_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `community_members_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`users_id`) ON DELETE CASCADE;

--
-- Constraints for table `deletion_requests`
--
ALTER TABLE `deletion_requests`
  ADD CONSTRAINT `deletion_requests_ibfk_1` FOREIGN KEY (`community_id`) REFERENCES `communities` (`community_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `deletion_requests_ibfk_2` FOREIGN KEY (`requested_by`) REFERENCES `users` (`users_id`) ON DELETE CASCADE;

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`community_id`) REFERENCES `communities` (`community_id`) ON DELETE CASCADE;

--
-- Constraints for table `event_participants`
--
ALTER TABLE `event_participants`
  ADD CONSTRAINT `event_participants_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `events` (`event_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `event_participants_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`users_id`) ON DELETE CASCADE;

--
-- Constraints for table `posts1`
--
ALTER TABLE `posts1`
  ADD CONSTRAINT `fk_community` FOREIGN KEY (`community_id`) REFERENCES `communities` (`community_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`users_id`) ON DELETE CASCADE;

--
-- Constraints for table `writing_groups`
--
ALTER TABLE `writing_groups`
  ADD CONSTRAINT `writing_groups_ibfk_1` FOREIGN KEY (`community_id`) REFERENCES `communities` (`community_id`) ON DELETE CASCADE;
-- Commit
COMMIT;