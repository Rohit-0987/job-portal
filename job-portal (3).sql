-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2023 at 09:43 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job-portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate_bookmark`
--

CREATE TABLE `candidate_bookmark` (
  `candidate_bookmark_id` bigint(20) UNSIGNED NOT NULL,
  `job_applications_id` bigint(20) UNSIGNED NOT NULL,
  `candidate_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_bookmark`
--

INSERT INTO `candidate_bookmark` (`candidate_bookmark_id`, `job_applications_id`, `candidate_id`, `created_at`, `updated_at`) VALUES
(1, 3, 2, '2022-11-17 13:20:07', '2022-11-17 13:20:07'),
(16, 4, 2, '2022-11-20 09:00:28', '2022-11-20 09:00:28'),
(17, 1, 1, '2022-11-28 03:23:04', '2022-11-28 03:23:04');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_user`
--

CREATE TABLE `candidate_user` (
  `candidate_id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exp_salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_info` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_user`
--

INSERT INTO `candidate_user` (`candidate_id`, `fname`, `lname`, `profile_img`, `username`, `email`, `phone`, `password`, `experience`, `exp_salary`, `education`, `age`, `language`, `about_info`, `created_at`, `updated_at`) VALUES
(1, 'Shreyash', 'Deshpande', '1_dp1.jpg', 'shree', 'shree@gmail.com', '9632587410', 'shree', '1', '10-20', 'B.E (Computer Engineering)', '20', 'Marathi, Hindi, English', 'I am a keen learner. Yes', '2022-11-13 08:53:59', '2022-11-30 01:06:16'),
(2, 'Rohit', 'Harshe', '2_aa.jpg', 'rohit', 'rohit@gmail.com', '9632587410', 'rohit', '3', '10-20', 'B.E (IT)', '21', 'English', 'A good Person', '2022-11-13 15:41:15', '2022-11-29 01:33:32'),
(3, 'New', 'test', '3_ac.jpg', 'new', 'new@g.com', '9874563210', 'new', '1', '20-30', 'ME (Mech)', '27', 'English', 'I am open to work.', '2022-11-28 06:36:12', '2022-11-28 06:42:25');

-- --------------------------------------------------------

--
-- Table structure for table `company_users`
--

CREATE TABLE `company_users` (
  `company_users_id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_users`
--

INSERT INTO `company_users` (`company_users_id`, `fname`, `lname`, `username`, `companyName`, `email`, `phone`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin', 'admin', 'Psyber', 'admin@gmail.com', '9874563210', 'admin', '2022-11-13 08:55:07', '2022-11-13 08:55:07');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_us_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contact_us_id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'shreyash', 'shree@gmail.com', 'issues', 'big issues', '2022-11-20 10:22:41', '2022-11-20 10:22:41'),
(3, 'ds', 's@ss.b', 'ds', 'sdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddsddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', '2022-11-24 06:46:49', '2022-11-24 06:46:49');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobber_alerts`
--

CREATE TABLE `jobber_alerts` (
  `jobber_alerts_id` bigint(20) UNSIGNED NOT NULL,
  `candidate_id` bigint(20) UNSIGNED NOT NULL,
  `alert_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobber_alerts`
--

INSERT INTO `jobber_alerts` (`jobber_alerts_id`, `candidate_id`, `alert_category`, `created_at`, `updated_at`) VALUES
(6, 1, 'App Developer', '2022-11-24 01:24:23', '2022-11-24 01:24:23'),
(8, 1, 'React Developer', '2022-11-24 01:33:10', '2022-11-24 01:33:10'),
(9, 1, 'Cloud Computing', '2022-11-24 01:34:01', '2022-11-24 01:34:01');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `jobs_id` bigint(20) UNSIGNED NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `industry` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carrer_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('A','M','F','O') COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline` date NOT NULL,
  `working_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jobs_id`, `job_title`, `job_img`, `job_description`, `industry`, `job_type`, `carrer_level`, `experience`, `qualification`, `gender`, `deadline`, `working_type`, `country`, `city`, `address`, `status`, `created_at`, `updated_at`) VALUES
(1, 'UI/UX Web Designer', '1_ui.jpg.png', 'We are looking for a PHP Developer responsible for managing back-end services and the interchange of data between the server and the users. Your primary focus will be the development of all server-side logic, definition and maintenance of the central database\r\n\r\nAcross our network, we strive to provide rapid, performance-based, industry-focused and technology-enabled services, which reflect a shared knowledge of global and local industries and our experience of the Indian business environment.', 'Web Developer', 'fulltime', 'junior', '1', 'graduation', 'A', '2022-11-30', 'R', 'India', 'Pune', 'Near Sinhgad Road', 0, '2022-11-13 09:07:24', '2022-11-15 15:51:13'),
(2, 'Web Developer', '2_logo.png', 'We are looking for a PHP Developer responsible for managing back-end services and the interchange of data between the server and the users. Your primary focus will be the development of all server-side logic, definition and maintenance of the central database\r\n\r\nAcross our network, we strive to provide rapid, performance-based, industry-focused and technology-enabled services, which reflect a shared knowledge of global and local industries and our experience of the Indian business environment.', 'Web Developer', 'fulltime', 'begginer', 'begginer', 'graduation', 'A', '2022-12-30', 'R', 'UK', 'London', 'near High Court', 0, '2022-11-13 10:54:52', '2022-11-15 15:48:37'),
(3, 'Laravel Developer', '3_lr.png', 'We are looking for a PHP Developer responsible for managing back-end services and the interchange of data between the server and the users. Your primary focus will be the development of all server-side logic, definition and maintenance of the central database\r\n\r\nAcross our network, we strive to provide rapid, performance-based, industry-focused and technology-enabled services, which reflect a shared knowledge of global and local industries and our experience of the Indian business environment.', 'Software Developer', 'internship', 'begginer', 'begginer', 'graduation', 'F', '2022-12-30', 'O', 'India', 'Mumbai', 'Near High Court', 0, '2022-11-13 13:04:42', '2022-11-15 15:52:54'),
(4, 'Software Developer', '4_sde.png', 'Countrees Services & Technologies Pvt. Ltd. It started with the idea to provide affordable essential services to everyone within the country. We are focused on providing a one-stop solution to all the service requirements of everyone around us. We believe that technology is the future and we want the services to be accessible to all through technology.\r\n\r\nThe idea behind this is that a person requires a multitude of services in their daily lives but is constrained by the availability and accessibility of services. We wish to provide a platform where a person can find solutions to all his requirements. With the help of technology, we would like to provide the opportunity to all the up-and-coming individuals with the talent that are constraint by capital. This platform would help provide them with an opportunity to work in the field of their choice without worrying about capital investments.', 'Software Developer', 'fulltime', 'junior', '1', 'graduation', 'A', '2022-12-20', 'O', 'India', 'Pune', 'IT park, Hinjewadi', 0, '2022-11-13 15:13:55', '2022-11-13 15:13:55');

-- --------------------------------------------------------

--
-- Table structure for table `job_applications`
--

CREATE TABLE `job_applications` (
  `job_applications_id` bigint(20) UNSIGNED NOT NULL,
  `candidate_id` bigint(20) UNSIGNED NOT NULL,
  `jobs_id` bigint(20) UNSIGNED NOT NULL,
  `bookmark` tinyint(1) NOT NULL DEFAULT 0,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_applications`
--

INSERT INTO `job_applications` (`job_applications_id`, `candidate_id`, `jobs_id`, `bookmark`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 0, 'Rejected', '2022-11-13 09:07:51', '2022-11-18 08:13:23'),
(2, 1, 2, 0, 'Hired', '2022-11-13 10:57:07', '2022-11-18 08:19:17'),
(3, 2, 3, 1, 'Pending', '2022-11-13 15:41:49', '2022-11-20 07:18:15'),
(4, 2, 1, 0, 'Pending', '2022-11-13 15:43:42', '2022-11-20 01:51:22'),
(5, 2, 2, 1, 'Pending', '2022-11-17 12:00:24', '2022-11-18 08:19:28');

-- --------------------------------------------------------

--
-- Table structure for table `job_key_skills`
--

CREATE TABLE `job_key_skills` (
  `job_key_skills_id` bigint(20) UNSIGNED NOT NULL,
  `jobs_id` bigint(20) UNSIGNED NOT NULL,
  `skill` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_key_skills`
--

INSERT INTO `job_key_skills` (`job_key_skills_id`, `jobs_id`, `skill`, `created_at`, `updated_at`) VALUES
(22, 4, 'Java', '2022-11-13 15:13:55', '2022-11-13 15:13:55'),
(23, 4, 'DSA', '2022-11-13 15:13:55', '2022-11-13 15:13:55'),
(24, 4, 'DBMS', '2022-11-13 15:13:55', '2022-11-13 15:13:55'),
(25, 4, 'SQL', '2022-11-13 15:13:55', '2022-11-13 15:13:55'),
(26, 4, 'Operating Systems', '2022-11-13 15:13:55', '2022-11-13 15:13:55'),
(27, 4, 'Spring', '2022-11-13 15:13:55', '2022-11-13 15:13:55'),
(46, 2, 'Laravel', '2022-11-15 15:48:38', '2022-11-15 15:48:38'),
(47, 2, 'HTML', '2022-11-15 15:48:38', '2022-11-15 15:48:38'),
(48, 2, 'CSS', '2022-11-15 15:48:38', '2022-11-15 15:48:38'),
(49, 2, 'JavaScript', '2022-11-15 15:48:38', '2022-11-15 15:48:38'),
(50, 2, 'SQL', '2022-11-15 15:48:38', '2022-11-15 15:48:38'),
(51, 2, 'Database', '2022-11-15 15:48:38', '2022-11-15 15:48:38'),
(52, 2, 'Wordpress', '2022-11-15 15:48:38', '2022-11-15 15:48:38'),
(53, 2, 'Bootstrap', '2022-11-15 15:48:38', '2022-11-15 15:48:38'),
(54, 2, 'React', '2022-11-15 15:48:38', '2022-11-15 15:48:38'),
(55, 1, 'ReactJS', '2022-11-15 15:51:13', '2022-11-15 15:51:13'),
(56, 1, 'HTML', '2022-11-15 15:51:13', '2022-11-15 15:51:13'),
(57, 1, 'CSS', '2022-11-15 15:51:13', '2022-11-15 15:51:13'),
(58, 1, 'JavaScript', '2022-11-15 15:51:13', '2022-11-15 15:51:13'),
(59, 1, 'SQL', '2022-11-15 15:51:13', '2022-11-15 15:51:13'),
(60, 1, 'Database', '2022-11-15 15:51:13', '2022-11-15 15:51:13'),
(61, 1, 'MongoDB', '2022-11-15 15:51:13', '2022-11-15 15:51:13'),
(62, 1, 'Bootstrap', '2022-11-15 15:51:13', '2022-11-15 15:51:13'),
(68, 3, 'Laravel', '2022-11-15 15:52:55', '2022-11-15 15:52:55'),
(69, 3, 'HTML', '2022-11-15 15:52:55', '2022-11-15 15:52:55'),
(70, 3, 'CSS', '2022-11-15 15:52:55', '2022-11-15 15:52:55'),
(71, 3, 'JavaScript', '2022-11-15 15:52:55', '2022-11-15 15:52:55'),
(72, 3, 'Bootstrap', '2022-11-15 15:52:55', '2022-11-15 15:52:55');

-- --------------------------------------------------------

--
-- Table structure for table `job_requirements`
--

CREATE TABLE `job_requirements` (
  `job_requirements_id` bigint(20) UNSIGNED NOT NULL,
  `jobs_id` bigint(20) UNSIGNED NOT NULL,
  `requirement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_requirements`
--

INSERT INTO `job_requirements` (`job_requirements_id`, `jobs_id`, `requirement`, `created_at`, `updated_at`) VALUES
(15, 4, 'Document and test new software applications', '2022-11-13 15:13:55', '2022-11-13 15:13:55'),
(16, 4, 'Revise, update, refactor and debug code', '2022-11-13 15:13:55', '2022-11-13 15:13:55'),
(17, 4, 'Interview beta testers', '2022-11-13 15:13:55', '2022-11-13 15:13:55'),
(18, 4, 'Assess new application ideas', '2022-11-13 15:13:55', '2022-11-13 15:13:55'),
(19, 4, 'Write clean, scalable code using .NET programming languages', '2022-11-13 15:13:55', '2022-11-13 15:13:55'),
(30, 2, 'Strong core PHP Hands on experience', '2022-11-15 15:48:38', '2022-11-15 15:48:38'),
(31, 2, 'Strong Expertise in CodeIgniter Framework', '2022-11-15 15:48:38', '2022-11-15 15:48:38'),
(32, 2, 'Expertise in PHP, MVC Frameworks and good technology exposure of Codeigniter', '2022-11-15 15:48:38', '2022-11-15 15:48:38'),
(33, 2, 'Proficient understanding of code versioning tools, such as Git.', '2022-11-15 15:48:38', '2022-11-15 15:48:38'),
(34, 2, 'Should know ReactJS.', '2022-11-15 15:48:38', '2022-11-15 15:48:38'),
(35, 1, 'Strong core PHP Hands on experience', '2022-11-15 15:51:13', '2022-11-15 15:51:13'),
(36, 1, 'Expertise in PHP, MVC Frameworks and good technology exposure of Codeigniter', '2022-11-15 15:51:13', '2022-11-15 15:51:13'),
(37, 1, 'Strong in ReactJS', '2022-11-15 15:51:13', '2022-11-15 15:51:13'),
(45, 3, 'Strong core PHP Hands on experience.', '2022-11-15 15:52:54', '2022-11-15 15:52:54'),
(46, 3, 'Strong Expertise in CodeIgniter Framework.', '2022-11-15 15:52:54', '2022-11-15 15:52:54'),
(47, 3, 'Understanding of MVC design pattern.', '2022-11-15 15:52:54', '2022-11-15 15:52:54'),
(48, 3, 'Expertise in PHP, MVC Frameworks and good technology exposure of Codeigniter.', '2022-11-15 15:52:54', '2022-11-15 15:52:54'),
(49, 3, 'Basic understanding of front-end technologies, such as JavaScript, HTML5, and CSS3', '2022-11-15 15:52:55', '2022-11-15 15:52:55'),
(50, 3, 'Good knowledge of relational databases, version control tools and of developing web services.', '2022-11-15 15:52:55', '2022-11-15 15:52:55'),
(51, 3, 'Proficient understanding of code versioning tools, such as Git.', '2022-11-15 15:52:55', '2022-11-15 15:52:55');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_10_155728_create_company_users_table', 1),
(6, '2022_11_10_192912_create_jobs_table', 1),
(7, '2022_11_12_052749_create_candidate_user_table', 1),
(8, '2022_11_12_063236_create_job_applications_table', 1),
(9, '2022_11_13_191034_create_job_requirements_table', 2),
(10, '2022_11_13_200651_create_job_key_skills_table', 3),
(15, '2022_11_17_183440_create_candidate_bookmark_table', 4),
(16, '2022_11_19_090021_create_resume_table', 5),
(17, '2022_11_19_111736_create_resume_education_table', 6),
(18, '2022_11_19_113349_create_resume_experience_table', 7),
(19, '2022_11_19_122347_create_resume_skills_table', 8),
(20, '2022_11_20_080807_create_jobber_alerts_table', 9),
(21, '2022_11_20_091207_create_subscribers_table', 10),
(22, '2022_11_20_134821_create_notifications_table', 11),
(23, '2022_11_20_153537_create_contact_us_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `notifications_id` bigint(20) UNSIGNED NOT NULL,
  `notification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seen` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`notifications_id`, `notification`, `seen`, `created_at`, `updated_at`) VALUES
(1, 'shree has bookmarked your UI/UX Web Designer job.', 1, '2022-11-20 08:37:42', '2022-11-20 08:58:07'),
(2, 'rohit has bookmarked your Software Developer job.', 1, '2022-11-20 08:50:00', '2022-11-20 08:58:09'),
(3, 'rohit has bookmarked your Web Developer job.', 1, '2022-11-20 08:56:00', '2022-11-20 08:58:12'),
(4, 'rohit has bookmarked your Web Developer job.', 1, '2022-11-20 08:56:27', '2022-11-20 08:59:02'),
(5, 'rohit has bookmarked your UI/UX Web Designer job.', 1, '2022-11-20 09:00:28', '2022-11-20 09:01:10'),
(6, 'New user test@g.c has subscribed.', 1, '2022-11-20 09:47:40', '2022-11-24 06:48:15'),
(7, 'New user sd has subscribed.', 0, '2022-11-24 07:02:09', '2022-11-24 07:02:09'),
(8, 'shree has bookmarked your UI/UX Web Designer job.', 0, '2022-11-28 03:23:05', '2022-11-28 03:23:05'),
(9, 'New Candidate New test created an account!!', 0, '2022-11-28 06:36:12', '2022-11-28 06:36:12'),
(10, 'New user ds@d.com has subscribed.', 0, '2022-11-30 00:25:13', '2022-11-30 00:25:13');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `resume_id` bigint(20) UNSIGNED NOT NULL,
  `candidate_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `professional_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`resume_id`, `candidate_id`, `name`, `location`, `job_category`, `professional_title`, `email`, `resume_content`, `created_at`, `updated_at`) VALUES
(1, 1, 'shreyash', 'Pune', 'IT Services', 'web developer', 'uppcl@gmail.com', 'I am a keen learner. And also good person.', '2022-11-19 05:42:59', '2022-11-19 08:06:45');

-- --------------------------------------------------------

--
-- Table structure for table `resume_education`
--

CREATE TABLE `resume_education` (
  `resume_education_id` bigint(20) UNSIGNED NOT NULL,
  `resume_id` bigint(20) UNSIGNED NOT NULL,
  `school_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resume_education`
--

INSERT INTO `resume_education` (`resume_education_id`, `resume_id`, `school_name`, `qualification`, `start_date`, `end_date`, `note`, `created_at`, `updated_at`) VALUES
(32, 1, 'ABC', 'SSC', '2017-06-01', '2018-05-01', 'note', '2022-11-24 04:41:22', '2022-11-24 04:41:22'),
(33, 1, 'VPP', 'Diploma', '2022-06-06', '2022-11-24', 'note', '2022-11-24 04:41:22', '2022-11-24 04:41:22'),
(34, 1, 'SCOE', 'BE', '2022-11-01', '2024-06-26', 'note', '2022-11-24 04:41:22', '2022-11-24 04:41:22');

-- --------------------------------------------------------

--
-- Table structure for table `resume_experience`
--

CREATE TABLE `resume_experience` (
  `resume_experience_id` bigint(20) UNSIGNED NOT NULL,
  `resume_id` bigint(20) UNSIGNED NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resume_experience`
--

INSERT INTO `resume_experience` (`resume_experience_id`, `resume_id`, `job_title`, `designation`, `start_date`, `end_date`, `note`, `created_at`, `updated_at`) VALUES
(34, 1, 'job', 'des', '0011-11-11', '0011-01-01', '11', '2022-11-24 04:41:22', '2022-11-24 04:41:22'),
(35, 1, 'job2', 'developer', '0011-11-11', '0001-11-11', '11', '2022-11-24 04:41:22', '2022-11-24 04:41:22'),
(36, 1, 'job3', 'designer', '5555-05-05', '0011-11-11', 'lkk', '2022-11-24 04:41:22', '2022-11-24 04:41:22');

-- --------------------------------------------------------

--
-- Table structure for table `resume_skills`
--

CREATE TABLE `resume_skills` (
  `resume_skills_id` bigint(20) UNSIGNED NOT NULL,
  `resume_id` bigint(20) UNSIGNED NOT NULL,
  `skill` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resume_skills`
--

INSERT INTO `resume_skills` (`resume_skills_id`, `resume_id`, `skill`, `percentage`, `created_at`, `updated_at`) VALUES
(28, 1, 'CPP', '90', '2022-11-24 04:41:22', '2022-11-24 04:41:22'),
(29, 1, 'a', '99', '2022-11-24 04:41:22', '2022-11-24 04:41:22');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `subscribers_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`subscribers_id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'deshpandeshreyash123@gmail.com', '2022-11-20 03:53:06', '2022-11-20 03:53:06'),
(2, 'abc@gmail.com', '2022-11-20 03:54:47', '2022-11-20 03:54:47'),
(3, 'test@g.c', '2022-11-20 09:47:39', '2022-11-20 09:47:39'),
(4, 'sd', '2022-11-24 07:02:09', '2022-11-24 07:02:09'),
(5, 'ds@d.com', '2022-11-30 00:25:13', '2022-11-30 00:25:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate_bookmark`
--
ALTER TABLE `candidate_bookmark`
  ADD PRIMARY KEY (`candidate_bookmark_id`),
  ADD KEY `candidate_bookmark_job_applications_id_foreign` (`job_applications_id`),
  ADD KEY `candidate_bookmark_candidate_id_foreign` (`candidate_id`);

--
-- Indexes for table `candidate_user`
--
ALTER TABLE `candidate_user`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `company_users`
--
ALTER TABLE `company_users`
  ADD PRIMARY KEY (`company_users_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_us_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobber_alerts`
--
ALTER TABLE `jobber_alerts`
  ADD PRIMARY KEY (`jobber_alerts_id`),
  ADD KEY `jobber_alerts_candidate_id_foreign` (`candidate_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`jobs_id`);

--
-- Indexes for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD PRIMARY KEY (`job_applications_id`),
  ADD KEY `job_applications_candidate_id_foreign` (`candidate_id`),
  ADD KEY `job_applications_jobs_id_foreign` (`jobs_id`);

--
-- Indexes for table `job_key_skills`
--
ALTER TABLE `job_key_skills`
  ADD PRIMARY KEY (`job_key_skills_id`),
  ADD KEY `job_key_skills_jobs_id_foreign` (`jobs_id`);

--
-- Indexes for table `job_requirements`
--
ALTER TABLE `job_requirements`
  ADD PRIMARY KEY (`job_requirements_id`),
  ADD KEY `job_requirements_jobs_id_foreign` (`jobs_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`notifications_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`resume_id`),
  ADD KEY `resume_candidate_id_foreign` (`candidate_id`);

--
-- Indexes for table `resume_education`
--
ALTER TABLE `resume_education`
  ADD PRIMARY KEY (`resume_education_id`),
  ADD KEY `resume_education_resume_id_foreign` (`resume_id`);

--
-- Indexes for table `resume_experience`
--
ALTER TABLE `resume_experience`
  ADD PRIMARY KEY (`resume_experience_id`),
  ADD KEY `resume_experience_resume_id_foreign` (`resume_id`);

--
-- Indexes for table `resume_skills`
--
ALTER TABLE `resume_skills`
  ADD PRIMARY KEY (`resume_skills_id`),
  ADD KEY `resume_skills_resume_id_foreign` (`resume_id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`subscribers_id`);

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
-- AUTO_INCREMENT for table `candidate_bookmark`
--
ALTER TABLE `candidate_bookmark`
  MODIFY `candidate_bookmark_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `candidate_user`
--
ALTER TABLE `candidate_user`
  MODIFY `candidate_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `company_users`
--
ALTER TABLE `company_users`
  MODIFY `company_users_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_us_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobber_alerts`
--
ALTER TABLE `jobber_alerts`
  MODIFY `jobber_alerts_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `jobs_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `job_applications`
--
ALTER TABLE `job_applications`
  MODIFY `job_applications_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `job_key_skills`
--
ALTER TABLE `job_key_skills`
  MODIFY `job_key_skills_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `job_requirements`
--
ALTER TABLE `job_requirements`
  MODIFY `job_requirements_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `notifications_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `resume_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `resume_education`
--
ALTER TABLE `resume_education`
  MODIFY `resume_education_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `resume_experience`
--
ALTER TABLE `resume_experience`
  MODIFY `resume_experience_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `resume_skills`
--
ALTER TABLE `resume_skills`
  MODIFY `resume_skills_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `subscribers_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `candidate_bookmark`
--
ALTER TABLE `candidate_bookmark`
  ADD CONSTRAINT `candidate_bookmark_candidate_id_foreign` FOREIGN KEY (`candidate_id`) REFERENCES `candidate_user` (`candidate_id`),
  ADD CONSTRAINT `candidate_bookmark_job_applications_id_foreign` FOREIGN KEY (`job_applications_id`) REFERENCES `job_applications` (`job_applications_id`);

--
-- Constraints for table `jobber_alerts`
--
ALTER TABLE `jobber_alerts`
  ADD CONSTRAINT `jobber_alerts_candidate_id_foreign` FOREIGN KEY (`candidate_id`) REFERENCES `candidate_user` (`candidate_id`);

--
-- Constraints for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD CONSTRAINT `job_applications_candidate_id_foreign` FOREIGN KEY (`candidate_id`) REFERENCES `candidate_user` (`candidate_id`),
  ADD CONSTRAINT `job_applications_jobs_id_foreign` FOREIGN KEY (`jobs_id`) REFERENCES `jobs` (`jobs_id`);

--
-- Constraints for table `job_key_skills`
--
ALTER TABLE `job_key_skills`
  ADD CONSTRAINT `job_key_skills_jobs_id_foreign` FOREIGN KEY (`jobs_id`) REFERENCES `jobs` (`jobs_id`);

--
-- Constraints for table `job_requirements`
--
ALTER TABLE `job_requirements`
  ADD CONSTRAINT `job_requirements_jobs_id_foreign` FOREIGN KEY (`jobs_id`) REFERENCES `jobs` (`jobs_id`);

--
-- Constraints for table `resume`
--
ALTER TABLE `resume`
  ADD CONSTRAINT `resume_candidate_id_foreign` FOREIGN KEY (`candidate_id`) REFERENCES `candidate_user` (`candidate_id`);

--
-- Constraints for table `resume_education`
--
ALTER TABLE `resume_education`
  ADD CONSTRAINT `resume_education_resume_id_foreign` FOREIGN KEY (`resume_id`) REFERENCES `resume` (`resume_id`);

--
-- Constraints for table `resume_experience`
--
ALTER TABLE `resume_experience`
  ADD CONSTRAINT `resume_experience_resume_id_foreign` FOREIGN KEY (`resume_id`) REFERENCES `resume` (`resume_id`);

--
-- Constraints for table `resume_skills`
--
ALTER TABLE `resume_skills`
  ADD CONSTRAINT `resume_skills_resume_id_foreign` FOREIGN KEY (`resume_id`) REFERENCES `resume` (`resume_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
