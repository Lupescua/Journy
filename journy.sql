-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 29, 2018 at 04:44 AM
-- Server version: 5.7.20
-- PHP Version: 7.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `journy`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(10) UNSIGNED NOT NULL,
  `region_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `region_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'motorbike', '2018-03-28 06:26:30', '2018-03-28 06:26:30'),
(2, 1, 'spa', '2018-03-28 06:26:30', '2018-03-28 06:26:30'),
(3, 3, 'hunting', '2018-03-28 06:26:30', '2018-03-28 06:26:30'),
(4, 3, 'trekking', '2018-03-28 06:26:30', '2018-03-28 06:26:30'),
(5, 4, 'food', '2018-03-28 06:26:31', '2018-03-28 06:26:31'),
(6, 5, 'sightseeing', '2018-03-28 06:26:31', '2018-03-28 06:26:31'),
(7, 6, 'boat', '2018-03-28 06:26:31', '2018-03-28 06:26:31'),
(8, 7, 'photosafari', '2018-03-28 06:26:31', '2018-03-28 06:26:31');

-- --------------------------------------------------------

--
-- Table structure for table `continents`
--

CREATE TABLE `continents` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `continents`
--

INSERT INTO `continents` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'asia', '2018-03-28 06:26:30', '2018-03-28 06:26:30'),
(2, 'europe', '2018-03-28 06:26:30', '2018-03-28 06:26:30'),
(3, 'america', '2018-03-28 06:26:31', '2018-03-28 06:26:31'),
(4, 'africa', '2018-03-28 06:26:31', '2018-03-28 06:26:31');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `continent_id` int(11) DEFAULT NULL,
  `region_id` int(11) DEFAULT NULL,
  `activity_id` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `people_who_did_it` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `max_participants` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `location_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offered` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sport_level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_host` text COLLATE utf8mb4_unicode_ci,
  `what_we_do` text COLLATE utf8mb4_unicode_ci,
  `what_we_provide` text COLLATE utf8mb4_unicode_ci,
  `who_can_come` text COLLATE utf8mb4_unicode_ci,
  `where_we_be` text COLLATE utf8mb4_unicode_ci,
  `gps_lat` double(8,2) DEFAULT NULL,
  `gps_lng` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `user_id`, `name`, `continent_id`, `region_id`, `activity_id`, `image`, `rating`, `main_tags`, `people_who_did_it`, `price`, `currency`, `max_participants`, `video_id`, `description`, `location_id`, `place`, `duration`, `offered`, `language`, `sport_level`, `about_host`, `what_we_do`, `what_we_provide`, `who_can_come`, `where_we_be`, `gps_lat`, `gps_lng`, `created_at`, `updated_at`) VALUES
(1, '1', 'Long is the night we\'ve been waiting for', NULL, NULL, NULL, 'https://static.pexels.com/photos/414171/pexels-photo-414171.jpeg', '3', 'dragons,ice,fire', '55', '22.5', 'USD', '3', 'http://videos.criticalcommons.org/transcoded/http/ccserver.usc.edu/8080/cc/Members/MCIMR/clips/playmobil-game-of-thrones-2012.mp4/mp4-low/playmobil-game-of-thrones-2012-mp4.mp4', 'A personal, face-to-face encounter with this awesome animal, is guaranteed to get the adrenaline going! Dive with the sharks in Gaansbaai! Getting into the cage with the sharks around, is truly one of the most breath-taking adventure activities you will ever live to remember. When feeding actively around the boat, the sharks may occasionally brush their tail against the cage, but they NEVER attack the cage. They are very curious though and often come close-up to the cage, to take a closer look at the diver.', 'Prague', '', '3.5', '1 meal, Drinks and EquipmentJon Snow', 'English', '', 'JWe know no king but the King in the North, whose name is Stark.', 'First, I\'ll show you around the SKOBA workshop and we\'ll perform the basics of handmade notebook production. Then, you will make your own notebook from authentic, locally-sourced materials such as antique Czech magazines, books and posters. You will experience the joys of making something unique with your own hands and creating an original notebook in a sustainable and socially-impactful way. And of course, the notebook is yours to take home and use!', 'Home made cake 󴀁 Home made lemonade 󲀃 Materials for your book 󳀁 Choose from a great variety of old printed materials relating to Czech history and cultureHome made cake 󴀁 Home made lemonade 󲀃 Materials for your book 󳀁 Choose from a great variety of old printed materials relating to Czech history and culture', 'Guests ages 12 and up can attend.', 'Mordor is not that far, but this is the land of Fire and Ice. We will be camping in the forests of Mithelhime and eat with the Trolls unde the bridge of Happyness. Luckylly, our music will be offered by noneother thatn Tyrion Drake Malfoy and his acompaniament of Jolly Rogers.', 123456.00, 54343.00, '2018-03-28 06:26:30', '2018-03-28 06:26:30'),
(2, NULL, 'Motor Trip with John', 1, 1, 1, 'motor_trip_john.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-03-28 06:26:30', '2018-03-28 06:26:30'),
(3, NULL, 'Shanghai on motor with Xin Huan', 1, 1, 1, 'local_motor_guide.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-03-28 06:26:30', '2018-03-28 06:26:30'),
(4, NULL, 'Borneo on Motorbike', 1, 1, 1, 'forrwest_bikes.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-03-28 06:26:30', '2018-03-28 06:26:30'),
(5, NULL, 'Motorbike in Cambodia with Brad', 1, 1, 1, 'cambodia_bike.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-03-28 06:26:30', '2018-03-28 06:26:30'),
(6, NULL, 'Macau coast on Motorbike with Steven', 1, 1, 1, 'bike_trip_in_macau_steven.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-03-28 06:26:30', '2018-03-28 06:26:30'),
(7, NULL, 'Spa on Bali', 1, 1, 2, 'bali_local.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-03-28 06:26:30', '2018-03-28 06:26:30'),
(8, NULL, 'Hunting with Mongolia warriors', 1, 3, 3, 'mongolia.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-03-28 06:26:30', '2018-03-28 06:26:30'),
(9, NULL, 'Siberia walks', 1, 3, 4, 'locals_siberia.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-03-28 06:26:30', '2018-03-28 06:26:30'),
(10, NULL, 'Mongolia for hipsters', 1, 3, 4, 'mongolia_for_hipsters.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-03-28 06:26:30', '2018-03-28 06:26:30'),
(11, NULL, 'Phillipina Mountains trekking', 1, 3, 4, 'banaue.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-03-28 06:26:30', '2018-03-28 06:26:30');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(38, '2014_10_12_000000_create_users_table', 1),
(39, '2014_10_12_100000_create_password_resets_table', 1),
(40, '2018_02_24_132600_users', 1),
(41, '2018_03_03_175751_create_social_facebook_accounts_table', 1),
(42, '2018_03_22_100036_create_experiences_table', 1),
(43, '2018_03_23_131235_create_continents_table', 1),
(44, '2018_03_23_131254_create_regions_table', 1),
(45, '2018_03_23_131317_create_activities_table', 1),
(46, '2018_03_23_153344_create_tags_experiences_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` int(10) UNSIGNED NOT NULL,
  `continent_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `continent_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'east', '2018-03-28 06:26:30', '2018-03-28 06:26:30'),
(2, 1, 'west', '2018-03-28 06:26:30', '2018-03-28 06:26:30'),
(3, 1, 'central', '2018-03-28 06:26:30', '2018-03-28 06:26:30'),
(4, 2, 'east', '2018-03-28 06:26:31', '2018-03-28 06:26:31'),
(5, 2, 'west', '2018-03-28 06:26:31', '2018-03-28 06:26:31'),
(6, 3, 'north', '2018-03-28 06:26:31', '2018-03-28 06:26:31'),
(7, 4, 'south', '2018-03-28 06:26:31', '2018-03-28 06:26:31');

-- --------------------------------------------------------

--
-- Table structure for table `social_facebook_accounts`
--

CREATE TABLE `social_facebook_accounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `provider_user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `continent_id` int(11) DEFAULT NULL,
  `region_id` int(11) DEFAULT NULL,
  `activity_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `adress_country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress_state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress_street` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress_zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prefered_language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `adress_country`, `adress_city`, `adress_state`, `adress_street`, `adress_zip`, `prefered_language`, `user_tags`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jon Snow', 'usetr@snow.com', 'ygritte', 'Kingdom of the North', 'Winterfall', 'North', 'Castle', '0001', 'english', 'snow,winter,wolves', NULL, '2018-03-28 06:26:28', '2018-03-28 06:26:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `continents`
--
ALTER TABLE `continents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_facebook_accounts`
--
ALTER TABLE `social_facebook_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `continents`
--
ALTER TABLE `continents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `social_facebook_accounts`
--
ALTER TABLE `social_facebook_accounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
