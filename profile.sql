-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 24, 2020 at 10:40 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nayeem_profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `achivements`
--

CREATE TABLE `achivements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `tag`, `link`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Laravel', 'https://medium.com/nayeemdev', 'How to make multi authentication with middleware and guard', '98532.jpg', '2020-01-22 06:37:50', '2020-01-23 06:21:35'),
(2, 'Tech', '#', 'How Mobile Network Work', '97950.jpg', '2020-01-23 06:19:51', '2020-01-23 06:19:51'),
(3, 'Blog', '#', 'This is the Blog Title', '2118.jpg', '2020-01-23 06:21:01', '2020-01-23 06:21:01');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Nayeem Hossain', 'nayeem9812@gmail.com', 'fghfgh', 'fghfgh', '2020-01-23 07:10:26', '2020-01-23 07:10:26'),
(2, 'Shamin', 'shamim@shamim.com', 'For Your Site Error', 'Hello Your site portfolio section has some error. when first time its load the design doesnt work. Think about it. Happy Coding!!!', '2020-01-23 11:33:00', '2020-01-23 11:33:00');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `institute` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `title`, `start_date`, `end_date`, `desc`, `created_at`, `updated_at`, `institute`) VALUES
(1, 'Junior School Certificate (JSC)', '2010', '2012', 'Completed JSC from Maijpara Secondary School in Maijpara, Narail with GPA 4.43 out of 5.00 .', '2020-01-23 04:43:32', '2020-01-23 04:43:32', 'Maijpara Secondary School'),
(2, 'Secondary School Certificate (SSC)', '2012', '2015', 'Completed SSC from Maijpara Secondary School in Maijpara, Narail with GPA 4.78 out of 5.00 .', '2020-01-23 04:44:07', '2020-01-23 04:44:07', 'Maijpara Secondary School'),
(3, 'Diploma Engineering in Computer Technology', '2015', '2019', 'I Completed my Diploma Engineering from Mangrove Institute of Science and Technology in Khulna with CGPA 3.57 out of 4.00 .', '2020-01-23 04:44:50', '2020-01-23 04:44:50', 'Mangrove Institute of Science and Technology');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `title`, `company`, `start_date`, `end_date`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'Junior Web Developer', 'XOR SOftware Solution', 'May 2018', 'Jan 2019', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt eum facilis quae doloribus ea autem est debitis veritatis reiciendis obcaecati, iure, voluptates ducimus perspiciatis quo dolore quas? Provident error, voluptatum!', '2020-01-23 04:39:01', '2020-01-23 04:39:01'),
(2, 'Web Developer', 'Printwizard', 'Apr 2019', 'Present', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt eum facilis quae doloribus ea autem est debitis veritatis reiciendis obcaecati, iure, voluptates ducimus perspiciatis quo dolore quas? Provident error, voluptatum!', '2020-01-23 04:39:41', '2020-01-23 04:39:41');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_infos`
--

CREATE TABLE `general_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill_desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cv` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_infos`
--

INSERT INTO `general_infos` (`id`, `name`, `designation`, `short_desc`, `skill_desc`, `desc`, `image`, `location`, `phone`, `birthday`, `email`, `cv`, `created_at`, `updated_at`) VALUES
(1, 'Nayeem Hossain', 'Web Developer(PHP, Laravel)', 'An experienced web developer, team Player, passionate and self-learned coder. Learning and developing secure, efficient, and scalable web applications and web-based management systems by writing standard, welldocumented, and efficient codes. I want to utilize my institutional skills along with my professional skills to implement innovative ideas into reality.', 'I am Nayeem Hossain, web developer from London, United Kingdom. I have rich experience in web site design and building and customization, also I am good at wordpress.', 'I am Nayeem Hossain, web developer from London, United Kingdom. I have rich experience in web site design and building and customization, also I am good at wordpress.', '58072.jpg', 'Kuril Biswaroad, Dhaka - 1229', '+880 1924161357', '1998-12-25', 'nayeem9812@gmail.com', '66045.pdf', '2020-01-22 06:40:41', '2020-01-23 10:26:03');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(15, '2014_10_12_000000_create_users_table', 1),
(16, '2014_10_12_100000_create_password_resets_table', 1),
(17, '2019_08_19_000000_create_failed_jobs_table', 1),
(18, '2019_12_11_140559_create_general_infos_table', 1),
(19, '2019_12_14_161845_create_skills_table', 1),
(20, '2019_12_14_162000_create_services_table', 1),
(21, '2019_12_14_162055_create_experiences_table', 1),
(22, '2019_12_14_162117_create_education_table', 1),
(23, '2019_12_14_162137_create_testimonials_table', 1),
(24, '2019_12_14_162157_create_contacts_table', 1),
(27, '2019_12_14_162408_create_clients_table', 1),
(28, '2020_01_19_151658_create_portfolios_table', 1),
(29, '2020_01_22_072707_create_achivements_table', 1),
(30, '2019_12_14_162331_create_blogs_table', 2),
(31, '2020_01_23_124647_create_site_settings_table', 3),
(32, '2020_01_23_163812_create_socials_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `category`, `title`, `link`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Web Design', 'ThemeBuckete Theme Design', 'https://demo.printwizardbd.com', '83290.jpg', '2020-01-22 05:26:56', '2020-01-23 05:56:14'),
(2, 'Web Design', 'Web Developer', '#', '81066.png', '2020-01-23 04:45:49', '2020-01-23 04:45:49'),
(3, 'Web Developer', 'Web Developer', '#', '37452.jpg', '2020-01-23 05:45:52', '2020-01-23 05:45:52');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `title`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'fas fa-globe', 'Development', 'Lorem ipsum dolor sit amet consectetuer elit.', '2020-01-22 10:59:52', '2020-01-22 10:59:52'),
(2, 'fas fa-globe', 'Design', 'Lorem ipsum dolor sit amet consectetuer elit.', '2020-01-22 11:00:27', '2020-01-22 11:00:27'),
(3, 'fas fa-globe', 'Advertising', 'Lorem ipsum dolor sit amet consectetuer elit.', '2020-01-22 11:00:38', '2020-01-22 11:00:38'),
(4, 'fas fa-globe', 'SEO', 'Lorem ipsum dolor sit amet consectetuer elit.', '2020-01-22 11:00:51', '2020-01-22 11:00:51'),
(5, 'fas fa-globe', 'Copy Write', 'Lorem ipsum dolor sit amet consectetuer elit.', '2020-01-22 11:01:20', '2020-01-22 11:01:20'),
(6, 'fas fa-globe', 'Support', 'Lorem ipsum dolor sit amet consectetuer elit.', '2020-01-22 11:01:32', '2020-01-22 11:01:32');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reply_to` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `title`, `favicon`, `keyword`, `description`, `subject`, `copyright`, `author`, `owner`, `reply_to`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Nayeem Hossain\'s Portfolio', '55417.png', 'nayeem, nayeemdev, nayeem hosssain', 'Nayeem Hossain, Nayeem Hossain\'s Profile Site Official Site', 'About Nayeem Hossain | nayeem.im', 'nayeemdev', 'Nayeem Hossain', 'Nayeem Hossain', 'nayeem9812@gmail.com', 'https://nayeem.im', '2020-01-23 08:46:10', '2020-01-24 04:22:10');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `skill` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percantage` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill`, `percantage`, `created_at`, `updated_at`) VALUES
(1, 'HTML5, CSS3', 95, '2020-01-22 06:53:33', '2020-01-22 06:53:33'),
(2, 'Javascript, ES6', 70, '2020-01-22 06:54:04', '2020-01-22 06:54:15'),
(3, 'SCSS, Bootstrap3-4, Jquery, AJAX', 90, '2020-01-22 06:54:47', '2020-01-22 06:56:34'),
(4, 'C, C++, Java, Python', 70, '2020-01-22 06:56:12', '2020-01-22 06:56:12'),
(5, 'PHP', 90, '2020-01-22 06:56:58', '2020-01-22 06:56:58'),
(6, 'Laravel', 85, '2020-01-22 06:57:09', '2020-01-22 06:57:09');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `icon`, `link`, `created_at`, `updated_at`) VALUES
(1, 'fab fa-facebook', 'https://facebook.com/nayeemdev', '2020-01-23 10:52:11', '2020-01-23 10:52:11'),
(2, 'fab fa-twitter', 'https://twitter.com/nayeemdev', '2020-01-23 10:53:10', '2020-01-23 10:53:10'),
(3, 'fab fa-stack-overflow', 'https://stackoverflow.com/nayeemdev', '2020-01-23 10:54:01', '2020-01-23 10:56:54'),
(4, 'fab fa-linkedin-in', 'https://linkedin.com/in/nayeemdev', '2020-01-23 10:54:47', '2020-01-23 10:54:47'),
(5, 'fab fa-github', 'https://github.com/nayeemdev', '2020-01-23 10:55:08', '2020-01-23 10:55:08');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `image`, `designation`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'Nayeem Hossain', '57087.jpg', 'Web Developer', 'Lorem ipsum dolor sit amet consectetuer elit.', '2020-01-22 05:43:21', '2020-01-22 05:43:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nayeem Hossain', 'nayeem@nayeem.com', '2020-01-22 03:19:43', '$2y$10$fy90Dja4RXCTALy57.X08.bY3XN7paXdL1/OHh6jA.rGrQp/oViR2', '8xKbsN4B97ClyA92iakrzyDH1OYAplPWa7635uBHVwkRFl8mC9zU4kVFYmxK', '2020-01-22 03:19:43', '2020-01-22 03:19:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achivements`
--
ALTER TABLE `achivements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_infos`
--
ALTER TABLE `general_infos`
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
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `achivements`
--
ALTER TABLE `achivements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_infos`
--
ALTER TABLE `general_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
