-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2019 at 03:09 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skhub`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `department_id`, `name`, `email`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '3', 'Admin 1', 'admin1@gmail.com', '$2y$10$3uJh2eKsCRPi3VXUooPi3O/FNplLGbCHofk0ZHvWx8d/z.ZWW1lWq', '1', 'hgjVkD9zHkgmEtpQmFGwH9bJD4hxc5wZnC5IsUddb66gO87BcpMcYKw72KJ0', '2018-09-16 04:52:20', '2018-09-16 04:52:20'),
(2, '4', 'Admin 2', 'admin2@gmail.com', '$2y$10$oyM8hZ4SvzvfhlFKg31uVOErKNT6zyD4F/864wk7dotwaRfjLLogK', '1', 'DbTICjCBoFwjMUyvrz1aE2QbrvQsjDRShiRBwRTcigzQTPAMVpwHHBnP7n0M', '2018-09-19 10:32:21', '2018-09-19 10:32:21'),
(3, '8', 'admin3', 'admin3@gmail.com', '$2y$10$IXyEanZBO2Bs.36/Mha9xOkW9/Ww0/tVsVyydNl7YWTxuN7sgqWri', '1', 'z1uC9MGQDfW6p2tzR7SOqPktPYILy9b10o5HgdnXKa1dSsRekgjeXBClTLHU', '2018-09-21 23:14:53', '2018-09-22 05:47:30'),
(4, '9', 'Sachin', 'sachin@gmail.com', '$2y$10$KvegnMZKLtT.T8kH91eUX.m06gQSluQhIxh0wOnAtMn65qfqF0gf6', '1', NULL, '2018-10-14 10:17:10', '2018-10-14 10:17:10'),
(6, '4', 'Giri pai.U.', 'admin@gmail.com', '$2y$10$A2eq4FjJ/NoEF1VH7z/Pn.m4U1WU3/vQijMZfrcIKP4s2B/DpuGcm', '1', NULL, '2018-10-14 20:10:19', '2018-10-14 20:10:19');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(10) UNSIGNED NOT NULL,
  `staff_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `staff_id`, `course_id`, `department_id`, `message`, `img`, `created_at`, `updated_at`) VALUES
(1, '4', '7', '4', 'asdkbfi', 'a:2:{i:0;s:5:\"1.jpg\";i:1;s:5:\"2.jpg\";}', '2018-09-24 12:50:43', '2018-09-24 12:50:43'),
(2, '1', '9', '4', 'something<br>', 'a:2:{i:0;s:69:\"public/announcements/2016_racing_one_ferrari_458_loma_wheels-wide.jpg\";i:1;s:66:\"public/announcements/54318-movies-batman-the-dark-knight-joker.jpg\";}', '2018-09-28 00:05:54', '2018-09-28 00:05:54'),
(3, '2', '5', '3', 'New Announcemnet from staff2 SS for !st msc ss', NULL, '2018-09-30 01:21:35', '2018-09-30 01:21:35'),
(4, '2', '3', '3', 'Announcement with images', NULL, '2018-09-30 01:23:26', '2018-09-30 01:23:26'),
(5, '1', '1', '1', 'asdfasdf', 'a:2:{i:0;s:45:\"public/announcements/81X4TID9IML._SL1500_.jpg\";i:1;s:57:\"public/announcements/483a45f22e547dfb791c8cb0897e4156.jpg\";}', '2018-10-01 01:22:45', '2018-10-01 01:22:45'),
(6, '1', '1', '1', 'zdvzxvxcv', NULL, '2018-10-01 01:23:00', '2018-10-01 01:23:00'),
(7, '1', '1', '1', 'Students should pay their fees immediately', NULL, '2018-10-14 20:45:13', '2018-10-14 20:45:13');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(10) UNSIGNED NOT NULL,
  `book` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edition` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publication` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book`, `author`, `edition`, `publication`, `year`, `file`, `created_at`, `updated_at`) VALUES
(1, 'C++ Network Progrmming', 'Addison Wesley', 'II Edition', 'McAuthur Publication', '2007', 'public/books/Addison Wesley - C++ Network Programming Volume I.pdf', '2018-10-01 11:34:22', '2018-10-01 11:34:22'),
(2, 'C & Advanced C', 'Bjarne Stroutstroup', '6th Edition', 'Php Publications', '2018', 'public/books/C & Advanced C.pdf', '2018-10-01 11:42:02', '2018-10-01 11:42:02');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `question_id`, `comment_content`, `status`, `created_at`, `updated_at`) VALUES
(1, '3', '7', 'my comment', '1', '2018-09-19 13:41:57', '2018-09-19 13:41:57'),
(2, '3', '7', 'Another comment for this post', '1', '2018-09-20 00:04:42', '2018-09-20 00:04:42'),
(3, '3', '6', 'This is my comment for this post', '1', '2018-09-20 04:10:50', '2018-09-20 04:10:50'),
(4, '3', '8', 'I dont know', '1', '2018-09-21 02:09:27', '2018-09-21 02:09:27'),
(5, '3', '8', 'have fun', '1', '2018-09-24 00:40:21', '2018-09-24 00:40:21'),
(6, '3', '9', 'comment is this', '1', '2018-09-24 01:21:58', '2018-09-24 01:21:58'),
(7, '3', '9', 'comments for this post', '1', '2018-10-03 03:59:22', '2018-10-03 03:59:22'),
(8, '3', '14', 'Silly Question mate', '1', '2018-10-12 23:33:42', '2018-10-12 23:33:42');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `department_id`, `course_name`, `staff_id`, `status`, `created_at`, `updated_at`) VALUES
(1, '4', 'I BBA', '4', '0', NULL, '2018-10-14 21:55:19'),
(3, '3', 'IV M.Sc. SS', '2', '0', '2018-09-17 12:52:20', '2018-10-14 21:58:06'),
(5, '3', 'I M.Sc. SS', '2', '1', '2018-09-17 23:52:32', '2018-09-30 00:43:30'),
(6, '3', 'III M.Sc. SS', 'Select', '1', '2018-09-21 02:21:10', '2018-09-21 02:21:10'),
(7, '4', 'I B.Sc. CT', 'Select', '1', '2018-09-22 00:28:25', '2018-09-22 00:28:25'),
(8, '4', 'II B.Sc. CT', 'Select', '1', '2018-09-22 00:40:21', '2018-09-22 00:40:21'),
(9, '4', 'III B.Sc. CT', 'Select', '1', '2018-09-22 00:41:09', '2018-09-22 00:41:09'),
(10, '9', 'I AF & BI', '5', '1', '2018-10-14 10:33:57', '2018-10-14 10:33:57');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_full_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_name`, `department_full_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'BBA', 'Business Administration', 1, '2018-09-14 18:30:00', '2018-10-14 10:12:19'),
(2, 'BBA CA', 'Business Administration with CA', 0, '2018-09-14 18:30:00', '2018-09-18 00:11:46'),
(3, 'BCA & M.Sc.(SS)', 'BCA & M.Sc. Software Systems', 1, '2018-09-17 09:27:17', '2018-09-17 09:27:17'),
(4, 'CT', 'B.Sc. Computer Technology', 1, '2018-09-17 09:30:22', '2018-09-17 09:30:22'),
(5, 'Bio Science', 'Bio Science', 1, '2018-09-17 21:43:46', '2018-09-17 21:43:46'),
(6, 'CS & HM', 'Catering Science and Hotel Management', 1, '2018-09-17 21:45:12', '2018-09-17 21:45:12'),
(7, 'Commerce & RM', 'Commerce & RM', 1, '2018-09-17 21:45:42', '2018-09-17 21:45:42'),
(8, 'IT', 'Information Technology', 0, '2018-09-21 02:18:45', '2018-09-21 02:19:24'),
(9, 'B.Com AI & BI', 'Commerce AF & BI', 1, '2018-10-14 10:13:12', '2018-10-14 10:13:48');

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
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2018_09_14_191146_create_departments_table', 1),
(14, '2018_09_14_191521_create_classes_table', 1),
(15, '2018_09_14_202925_create_courses_table', 1),
(16, '2018_09_15_055117_create_staffs_table', 1),
(17, '2018_09_16_043638_create_admins_table', 1),
(18, '2018_09_16_081728_create_superadmins_table', 2),
(20, '2018_09_18_062917_create_questions_table', 3),
(21, '2018_09_19_104844_create_staff_answers_table', 4),
(22, '2018_09_19_163421_create_student_answers_table', 5),
(23, '2018_09_19_185942_create_comments_table', 6),
(24, '2018_09_19_193001_create_replies_table', 7),
(26, '2018_09_22_134255_create_votes_table', 8),
(27, '2018_09_22_141329_create_staff_answer_votes_table', 9),
(28, '2018_09_24_170019_create_announcements_table', 10),
(30, '2018_10_01_140632_create_books_table', 11);

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
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ques_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `department_id`, `user_id`, `title`, `question`, `ques_img`, `status`, `created_at`, `updated_at`) VALUES
(6, '3', '2', 'Title', 'My Question goes here<br>', 'public/questions/Title.jpg', '1', '2018-09-18 07:15:11', '2018-09-18 13:56:16'),
(7, '4', '3', 'question title to CT', 'Description to CT<br>', NULL, '1', '2018-09-19 08:35:26', '2018-09-19 10:35:53'),
(8, '3', '3', 'Difference between c and c++', '<p>What is the difference between both these things?? <br></p><pre>#include&lt;stdio.h&gt;</pre><pre>#include&lt;iostream.h&gt;<br></pre>', NULL, '1', '2018-09-20 04:22:58', '2018-09-20 04:28:09'),
(9, '3', '3', 'My Questiion Title', 'My Title Description is here', 'public/questions/My Questiion Title.jpg', '1', '2018-09-21 02:11:43', '2018-09-21 02:12:53'),
(10, '3', '3', 'titkle', 'jhvycdxr', NULL, '0', '2018-09-24 00:42:04', '2018-09-24 00:42:04'),
(11, '3', '3', 'title', 'descriptiob', NULL, '1', '2018-09-24 01:22:50', '2018-09-30 00:05:40'),
(12, '2', '2', 'sadm f', 'asdkf asf', 'public/questions/sadm f.jpg', '0', '2018-09-24 12:10:00', '2018-09-24 12:10:00'),
(13, '3', '3', 'Some question', '<b>my question</b>', NULL, '0', '2018-10-03 04:03:13', '2018-10-03 04:03:13'),
(14, '8', '6', 'Python vs R', 'Which language is good for start for statistical analysis <b>Python or&nbsp; R language</b>?<br>', NULL, '1', '2018-10-12 23:27:58', '2018-10-13 11:38:41'),
(15, '9', '3', 'some question to af and bi', 'some stupid question&nbsp;', NULL, '1', '2018-10-14 11:01:39', '2018-10-14 11:08:47');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reply_content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `comment_id`, `user_id`, `reply_content`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', '3', 'reply for the my comment from student id 1', '1', '2018-09-19 14:17:11', '2018-09-19 14:17:11'),
(2, '1', '3', 'comment 2', '1', '2018-09-19 14:19:52', '2018-09-19 14:19:52'),
(3, '1', '3', 'reply 3', '1', '2018-09-19 14:21:08', '2018-09-19 14:21:08'),
(4, '1', '3', 'another reply', '1', '2018-09-19 14:23:08', '2018-09-19 14:23:08'),
(5, '2', '3', 'test reply', '1', '2018-09-20 00:06:18', '2018-09-20 00:06:18'),
(6, '4', '3', 'ok', '1', '2018-09-21 02:09:40', '2018-09-21 02:09:40'),
(7, '5', '3', 'hai', '1', '2018-09-24 00:40:33', '2018-09-24 00:40:33'),
(8, '6', '3', 'reply', '1', '2018-09-24 01:22:08', '2018-09-24 01:22:08');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roll_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `degree` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cv` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `department_id`, `roll_no`, `fname`, `lname`, `degree`, `designation`, `experience`, `email`, `email_verified_at`, `password`, `address`, `city`, `zip`, `phone`, `pic`, `cv`, `bio`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '1', 'MSS001', 'Staff', 'SS', 'M.Sc', 'Assistant Professor', '4', 'staff1@gmail.com', NULL, '$2y$10$Uv4kCxli2pJB.CpxVT8tOOwEnFDcVeZ4dKsKal9a7yEcPfPZqELgi', 'Anna Salai, Chennai', 'Chennai', '641023', '987654321', 'public/profile/MSS001.jpg', 'public/cv/MSS001.pdf', 'story', '0', 'vT5F2dEDxF9K7H0EuEDDlbVtWpB0oIWiYqFLFzdPwssFyLDC8xROlRT8IPFS', '2018-09-17 10:52:39', '2018-09-30 00:46:13'),
(2, '3', 'MSS002', 'Staff2', 'SS', 'M.Sc. M.Phil', 'Assistant Professor', '3', 'staff2@gmail.com', NULL, '$2y$10$xW45sClOiVdGACpYsZSbE.8EFqCP0h23sYEaWLYYqsinkBMF5Yssy', 'Singanallur', 'Coimbatore', '641028', '0987654321', 'public/profile/MSS002.jpg', NULL, 'This is staff 2 story', '1', 'F4LiFLbsJXYgdGCtksWWxU0KnKpZ3EB7otg67mG8CPaK0ROZWc0tZFtdPRu4', '2018-09-17 11:05:36', '2018-10-03 04:06:14'),
(3, '7', 'CRM002', 'Staff3', '3', NULL, NULL, NULL, 'staff3@gmail.com', NULL, '1234123ds', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2018-09-21 12:43:58', '2018-09-21 12:43:58'),
(4, '4', 'CT001', 'Staff4', '4', NULL, NULL, NULL, 'staff4@gmail.com', NULL, '$2y$10$qdMcuPbDqMjGSkVWybrz..xmnLsgjWENH3pN/UHAJkX0N.8dzCH6W', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'SGFmIjvWhhKJj51yIfZN42FAv6ykxjY1sFlHrjBercSSJD7H1ZtxUDFOiWIP', '2018-09-21 23:48:14', '2018-09-21 23:50:38'),
(5, '9', 'SKAF123', 'Dr. M. Shanthanalakshmi', NULL, NULL, NULL, NULL, 'shanthanalakshmim@skasc.ac.in', NULL, '$2y$10$xW45sClOiVdGACpYsZSbE.8EFqCP0h23sYEaWLYYqsinkBMF5Yssy', NULL, NULL, NULL, NULL, 'public/profile/SKAF123.jpg', NULL, NULL, '1', NULL, '2018-10-14 10:22:21', '2018-10-14 10:47:39');

-- --------------------------------------------------------

--
-- Table structure for table `staff_answers`
--

CREATE TABLE `staff_answers` (
  `id` int(10) UNSIGNED NOT NULL,
  `staff_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_ans` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff_answers`
--

INSERT INTO `staff_answers` (`id`, `staff_id`, `question_id`, `staff_ans`, `created_at`, `updated_at`) VALUES
(1, '1', '6', '<p>my answer is this<br></p>', '2018-09-19 05:50:02', '2018-09-19 05:50:02'),
(2, '1', '9', '<p>staff answer from bca and msc ss staff staff</p>', '2018-09-21 02:16:31', '2018-09-21 02:16:31'),
(3, '4', '7', '<p>my answer<br></p>', '2018-09-22 07:41:40', '2018-09-22 07:41:40'),
(4, '4', '7', '<p>answer</p><p><br></p>', '2018-09-22 07:41:59', '2018-09-22 07:41:59'),
(5, '5', '15', '<p>stupdi answer for the stupid question</p>', '2018-10-14 11:09:34', '2018-10-14 11:09:34');

-- --------------------------------------------------------

--
-- Table structure for table `staff_answer_votes`
--

CREATE TABLE `staff_answer_votes` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_answer_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff_answer_votes`
--

INSERT INTO `staff_answer_votes` (`id`, `user_id`, `staff_answer_id`, `status`, `created_at`, `updated_at`) VALUES
(38, '2', '3', '0', '2018-09-23 11:49:44', '2018-09-23 11:49:44'),
(39, '2', '4', '0', '2018-09-23 11:50:57', '2018-09-23 11:50:57'),
(40, '3', '3', '1', '2018-09-23 23:35:54', '2018-09-23 23:35:54'),
(41, '3', '2', '1', '2018-09-24 01:20:32', '2018-10-03 03:58:37');

-- --------------------------------------------------------

--
-- Table structure for table `student_answers`
--

CREATE TABLE `student_answers` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_answers`
--

INSERT INTO `student_answers` (`id`, `user_id`, `question_id`, `student_answer`, `status`, `created_at`, `updated_at`) VALUES
(1, '3', '7', '<p>My answer for the question is this<br></p>', '9', '2018-09-19 11:50:24', '2018-09-20 10:28:49'),
(2, '3', '7', '<p>my new answer<br></p>', '0', '2018-09-19 14:22:18', '2018-09-19 14:22:18'),
(3, '3', '7', '<p>my answer <br></p>', '1', '2018-09-20 00:08:49', '2018-09-30 00:05:53'),
(4, '3', '7', '<span style=\"font-weight: bold;\">This is m</span>y <span style=\"color: rgb(0, 0, 255);\"><span style=\"background-color: rgb(214, 239, 214);\">answer</span></span><br><h4><font color=\"#9c9c94\"></font></h4>', '1', '2018-09-20 02:08:28', '2018-09-20 10:27:44'),
(5, '3', '8', '<h4><span style=\"color: rgb(206, 198, 206); font-family: inherit; line-height: 1.1;\">Please, write your answer here!</span><br></h4><h4><font color=\"#9c9c94\"></font></h4>', '0', '2018-09-21 02:08:45', '2018-09-21 02:08:45'),
(6, '3', '9', '<h4><font color=\"#cec6ce\">my answer is this</font></h4><h4><font color=\"#9c9c94\"></font></h4>', '1', '2018-09-21 02:13:47', '2018-09-21 02:14:35'),
(7, '5', '9', 'My second question answer<br><h4><font color=\"#9c9c94\"></font></h4>', '1', '2018-09-22 07:39:25', '2018-09-22 07:55:35'),
(8, '3', '8', '<h4><font color=\"#cec6ce\">This is my answer</font></h4><h4><font color=\"#cec6ce\"><br></font></h4><h4><font color=\"#9c9c94\"></font></h4>', '1', '2018-09-24 00:38:36', '2018-09-24 00:39:48'),
(9, '3', '9', '<h4><font color=\"#cec6ce\">answer is this</font></h4><h4><font color=\"#9c9c94\"></font></h4>', '1', '2018-09-24 01:21:17', '2018-09-24 01:23:20'),
(10, '3', '14', 'Python is easy to learn and it is for multiple resource. But r is programmed for this specific case.&nbsp; So you just pick one of em and go ahead. undoubtedly both are great tools for this scenario<!-- <h4><span style=\"color: rgb(206, 198, 206); font-family: inherit; line-height: 1.1;\">Please, write your answer here!</span><br></h4><h4><font color=\"#9c9c94\"></font></h4> -->', '1', '2018-10-12 23:38:24', '2018-10-13 11:37:43'),
(11, '3', '15', 'I got the answer thanks', '1', '2018-10-14 11:25:18', '2018-10-14 11:46:53');

-- --------------------------------------------------------

--
-- Table structure for table `superadmins`
--

CREATE TABLE `superadmins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `superadmins`
--

INSERT INTO `superadmins` (`id`, `name`, `email`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin1@gmail.com', '$2y$10$Myqt1KjtD9t.tjxFlmkB9..izJ8yisW5ZEHq1afEMGFOouTyoFxxe', '1', 'TSyhryZQ1YnzllsL6iDY3MrtrEWCyBg4IyiQkNLpaT6pc7U20okurQxBI7Re', '2018-09-16 03:15:23', '2018-09-16 03:15:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `roll_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cv` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `department_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `roll_no`, `fname`, `lname`, `email`, `email_verified_at`, `password`, `father`, `address`, `city`, `zip`, `phone`, `pic`, `cv`, `bio`, `department_id`, `course_id`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '15BBA001', 'giri', 'something', '123@gmail.com', NULL, '$2y$10$sBSjNGi4BETF/Y8R7M8rWuBs4P9JDOCNO9nQW1MYWSPTWZglqdJ7u', 'DAD', 'podanur', 'Coimbatore', '641023', '1234567890', 'profile/student_avatar.jpg', NULL, 'My Story', '1', '1', '0', 'VJUgjir4SJ8kFQ7plLhD9YX1sezxT8pfYk1ppsLMQtXxYxMXC8ZlehDw5LIC', '2018-09-16 04:25:07', '2018-09-16 04:58:47'),
(2, '15MSS017', 'Giri', 'Pai', 'getgiri10@gmail.com', NULL, '$2y$10$9d7IaIJm3vWkvcSM7hN92Ob8vb1aYBDTDxjdHCwoy.3Yr5.RK6K.u', 'Umesh Kumar', '73, Krishna Samy Naidu Street, Ammanpudur, Podanur', 'Coimbatore', '641023', '9597002780', 'profile/student_avatar.jpg', NULL, 'This is my bio', '1', '1', '1', 'a5SO57QVn4krpVB1uoN50jVRCORw0sYKYuPPHvMI2mFVxvtmuoZJaYFsoQNX', '2018-09-18 00:20:13', '2018-10-14 20:05:22'),
(3, '15MSS004', 'student', '1', 'student1@gmail.com', NULL, '$2y$10$Qm1y/vlSdcwoClR6mhewMeBikCg4b.RH.BjbgicYr6CD7.Qnz6j.2', 'DAD', 'asdf', 'Coimbatore', '641028', '1234567890', 'public/profile/15MSS004.jpg', 'public/cv/15MSS004.pdf', 'my status', '1', '1', '1', 'TBZI7L7CLDFaKrpjlsGJ7o2zEbtlzHaz8rvav2h16O0clfeezydZGiFiT17S', '2018-09-18 07:01:15', '2018-10-14 20:33:14'),
(4, '15MSS018', 'Gokul', 'Balaji', 'gokulmsc1@gmail.com', NULL, '$2y$10$eXkNsUjRQ4WWnZgTQRtq/OEuTj2IXTEHmwxCXCXGooqNYNHsv3Am6', 'Selvaraj.K', 'EWSB-4000, GANDHMANAGAR', 'Coimbatore', '641004', '9524081814', '/public/profile/student_avatar.jpg', NULL, 'entha maryyyyyy.....antha maryyyyyy....', '3', '3', '0', NULL, '2018-09-21 03:56:18', '2018-09-21 03:56:18'),
(5, 'BBA005', 'student5', '5', 'student5@gmail.com', NULL, '$2y$10$VoI9I41l4gJ9KzgLMpsmKedfklkhZHz850YgVBGZNIPV0N9LVWuIy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '1', 'xMmJ7QRcXphR7zQ7n1kpQavIddP1PJs1fwer2bw63TjpbKdYRCsGcGQStoB5', '2018-09-21 13:37:10', '2018-09-21 22:43:50'),
(6, '15BCT004', 'Student4', '4', 'student4@gmail.com', NULL, '$2y$10$eD0Gn7O.JM8xVUykt8Ep0upZfyjn8A0lbSwgINTz.gON65bhlZ6Aa', NULL, '11 Eswarnagar, coimbatore', 'Coimbatore', '641200', '7894563210', 'public/profile/15BCT004.jpg', 'public/cv/15BCT004.docx', NULL, '4', '9', '1', 'zYsdcnbc9FebkDvcj9nYQIIbwNz4CDk2xDWH0GlQkxWTbeiwYCM6B6T1IvsQ', '2018-09-22 00:51:37', '2018-10-12 23:24:31');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_answer_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_answer_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vote` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
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
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `staffs_roll_no_unique` (`roll_no`),
  ADD UNIQUE KEY `staffs_email_unique` (`email`);

--
-- Indexes for table `staff_answers`
--
ALTER TABLE `staff_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_answer_votes`
--
ALTER TABLE `staff_answer_votes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_answers`
--
ALTER TABLE `student_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmins`
--
ALTER TABLE `superadmins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `superadmins_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_roll_no_unique` (`roll_no`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `staff_answers`
--
ALTER TABLE `staff_answers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `staff_answer_votes`
--
ALTER TABLE `staff_answer_votes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `student_answers`
--
ALTER TABLE `student_answers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `superadmins`
--
ALTER TABLE `superadmins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
