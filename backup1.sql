-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 01, 2018 at 09:54 AM
-- Server version: 5.7.18
-- PHP Version: 7.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `backup1`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `latter_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `committeemembers`
--

CREATE TABLE `committeemembers` (
  `id` int(10) UNSIGNED NOT NULL,
  `commit_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `Position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `committees`
--

CREATE TABLE `committees` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ownername` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purpose` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `depts`
--

CREATE TABLE `depts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `depts`
--

INSERT INTO `depts` (`id`, `name`, `type`, `Email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'تقنية معلومات', 'اكاديمي', 'It@gmail.com', 183425541, '2018-08-20 21:00:00', '2018-08-22 04:58:08'),
(2, 'علوم حاسوب', 'اكاديمي', 'CS@gmail.com', 183425540, '2018-08-20 21:00:00', '2018-08-22 04:58:31'),
(3, 'تكنولوجيا الموارد البشرية', 'اكاديمي', 'ICT@gmail.com', 183425542, '2018-08-22 04:59:24', '2018-08-22 04:59:24'),
(4, 'الدعم الفني', 'اداري', 'support@gmail.com', 183425544, '2018-08-22 05:00:05', '2018-08-22 05:00:05'),
(5, 'نظم المعلومات العامة', 'اكاديمي', 'IS@emc.edu', 183425545, '2018-08-22 05:01:00', '2018-08-22 05:01:00'),
(6, 'نظم المعلومات المتخصصة', 'اكاديمي', 'IS2@emc.edu', 183425546, '2018-08-22 05:01:46', '2018-08-22 05:01:46'),
(7, 'العلوم الادارية', 'اكاديمي', 'MS@emc.edu', 183425547, '2018-08-22 05:02:32', '2018-08-22 05:02:32'),
(8, 'الاقتصاد و العلوم المصرفية', 'اكاديمي', 'ES@emc.edu', 183425548, '2018-08-22 05:03:19', '2018-08-22 05:03:19'),
(9, 'العمارة و التخطيط', 'اكاديمي', 'AC@emc.edu', 183425549, '2018-08-22 05:03:58', '2018-08-22 05:03:58'),
(10, 'اللغة الانجليزية و ادابها', 'اكاديمي', 'EN@emc.edu', 183425551, '2018-08-22 05:04:59', '2018-08-22 05:04:59'),
(11, 'شؤون الطلاب', 'اكاديمي', 'ST@emc.edu', 183425552, '2018-08-22 05:06:48', '2018-08-22 05:06:48'),
(12, 'الشؤون العلمية', 'اكاديمي', 'STaffer@emc.edu', 183425222, '2018-08-22 05:08:04', '2018-08-30 12:21:30'),
(13, 'الموارد البشرية', 'اداري', 'HR@gmail.com', 183425554, '2018-09-01 05:04:04', '2018-09-01 05:04:04'),
(14, 'الامن و السلامة', 'اداري', 'Sec@emc.edu.sd', 183425556, '2018-09-01 05:07:01', '2018-09-01 05:07:01'),
(15, 'المشتريات', 'اداري', 'sels@emc.edu.sd', 183425557, '2018-09-01 05:07:43', '2018-09-01 05:08:19');

-- --------------------------------------------------------

--
-- Table structure for table `grads`
--

CREATE TABLE `grads` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grads`
--

INSERT INTO `grads` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'استاذ مشارك', '2018-08-20 21:00:00', '2018-09-01 03:55:15'),
(2, 'استاذ مساعد', '2018-09-01 03:54:56', '2018-09-01 03:56:13'),
(3, 'محاضر', '2018-09-01 03:56:31', '2018-09-01 03:56:31'),
(4, 'مساعد تدريس', '2018-09-01 03:56:58', '2018-09-01 03:56:58'),
(5, 'فنى معمل', '2018-09-01 03:57:14', '2018-09-01 03:57:14'),
(6, 'الدرجة 17', '2018-09-01 03:59:13', '2018-09-01 03:59:13'),
(7, 'الدرجة 16', '2018-09-01 03:59:31', '2018-09-01 03:59:31'),
(8, 'الدرجة 15', '2018-09-01 04:00:01', '2018-09-01 04:00:01'),
(9, 'الدرجة 9', '2018-09-01 04:00:12', '2018-09-01 05:09:26'),
(10, 'الدرجة 13', '2018-09-01 04:00:31', '2018-09-01 04:00:31'),
(11, 'الدرجة 12', '2018-09-01 04:03:54', '2018-09-01 04:03:54'),
(12, 'الدرجة 11', '2018-09-01 04:04:16', '2018-09-01 04:04:16'),
(13, 'الدرجة 10', '2018-09-01 04:04:29', '2018-09-01 04:04:29'),
(14, 'الدرجة 9', '2018-09-01 04:04:44', '2018-09-01 04:04:44'),
(15, 'الدرجة 8', '2018-09-01 04:04:59', '2018-09-01 04:04:59'),
(16, 'الدرجة 7', '2018-09-01 04:05:25', '2018-09-01 04:05:25'),
(17, 'الدرجة 6', '2018-09-01 04:05:40', '2018-09-01 04:05:40'),
(18, 'الدرجة 5', '2018-09-01 04:05:54', '2018-09-01 04:05:54'),
(19, 'الدرجة 4', '2018-09-01 04:06:20', '2018-09-01 04:06:20');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `name`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'استاذ مشارك', 'تدريس المواد النظرية مع اعباء ادارية لادارة الاقسام', '2018-08-20 21:00:00', '2018-09-01 05:10:44'),
(2, 'استاذ مساعد', 'تدريس المواد النظرية مع اعباء ادارية لادارة الاقسام', '2018-09-01 05:11:02', '2018-09-01 05:11:02'),
(3, 'محاضر', 'تدريس المواد النظرية', '2018-09-01 05:11:29', '2018-09-01 05:11:29'),
(4, 'فني معمل', 'فتح و اغلاق المعامل و صيانة الاجهزة', '2018-09-01 05:12:10', '2018-09-01 05:12:10');

-- --------------------------------------------------------

--
-- Table structure for table `latters`
--

CREATE TABLE `latters` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `reciver_id` int(10) UNSIGNED NOT NULL,
  `sender` int(10) UNSIGNED NOT NULL,
  `dept_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `filename` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `latters`
--

INSERT INTO `latters` (`id`, `type`, `user_id`, `reciver_id`, `sender`, `dept_id`, `title`, `body`, `status`, `filename`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 1, 1, 'for test message', 'for test message', 1, 'cv en.pdf', '2018-08-21 12:49:39', '2018-08-21 13:13:17'),
(2, 2, 2, 1, 2, 2, 'استقبال الشيخ طحنون', 'استقبال الشيخ طحنون استقبال الشيخ طحنون استقبال الشيخ طحنون', 1, 'CV en.docx', '2018-08-21 13:14:09', '2018-09-01 13:17:00'),
(3, 8, 1, 1, 2, 2, 'ترشيح محاضر لتدريس مواد الحاسوب', 'بالاشارة للموضوع اعلاة نرجو منكم التكرم بترشيح محاضر لتدريس المواد', 1, 'CV Mustafa Adel.docx', '2018-08-21 13:14:43', '2018-09-01 05:13:51'),
(4, 1, 2, 1, 2, 2, 'وصول وفد من جامعة بحر دار', 'وصول وفد من جامعة بحر دار', 1, 'CV mustafa Joomla.pdf', '2018-08-21 13:15:56', '2018-08-21 13:19:46');

-- --------------------------------------------------------

--
-- Table structure for table `lattertypes`
--

CREATE TABLE `lattertypes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lattertypes`
--

INSERT INTO `lattertypes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'فصل', '2018-08-20 21:00:00', '2018-08-22 07:37:44'),
(2, 'تعين', '2018-08-20 21:00:00', '2018-08-20 21:00:00'),
(3, 'استيضاح', '2018-08-22 07:27:03', '2018-08-22 07:27:03'),
(5, 'انذار بالفصل', '2018-08-30 13:01:52', '2018-08-30 13:01:52'),
(6, 'انذار نهائي', '2018-08-30 13:02:17', '2018-08-30 13:13:06'),
(7, 'ارسال مواد العملي', '2018-08-30 13:13:39', '2018-08-30 13:13:39'),
(8, 'ترشيح محاضر', '2018-09-01 05:00:23', '2018-09-01 05:00:23');

-- --------------------------------------------------------

--
-- Table structure for table `latter_user`
--

CREATE TABLE `latter_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `latter_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `latter_user`
--

INSERT INTO `latter_user` (`id`, `user_id`, `latter_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 1, 4, NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_03_18_151236_create_jobs_table', 1),
(4, '2018_03_18_151323_create_grads_table', 1),
(5, '2018_03_18_151342_create_depts_table', 1),
(6, '2018_03_18_151428_create_committees_table', 1),
(7, '2018_03_18_151500_create_lattertypes_table', 1),
(8, '2018_03_18_152850_create_committeemembers_table', 1),
(9, '2018_03_18_153450_create_latters_table', 1),
(10, '2018_03_26_105243_create_comments_table', 1),
(11, '2018_04_13_160040_create_latter_user_table', 1),
(12, '2018_04_13_160540_add_dept_i_d_job_i_d_grad_i_d_to_users', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirm_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept_id` int(10) UNSIGNED NOT NULL,
  `Qualification` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grad_id` int(10) UNSIGNED NOT NULL,
  `job_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `user_type`, `email`, `password`, `confirm_password`, `gender`, `phone`, `state`, `city`, `unit`, `home_no`, `dept_id`, `Qualification`, `grad_id`, `job_id`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'اسامة صلاح', 'admin', 'osama@gmail.com', '$2y$10$zjwwrNdFopW6goCfKYVi.uA5Fk2e6hf9U7NDNGuXKBPu6CI/FHJle', '$2y$10$zjwwrNdFopW6goCfKYVi.uA5Fk2e6hf9U7NDNGuXKBPu6CI/FHJle', 'ذكر', '24991912015', 'الخرطوم', 'الخرطوم', 'الخرطوم', '10', 1, 'ماجستير', 3, 1, '1535786392.jpg', 'HM7UO1BI4wdwlXJkCrjCS8RHOXTyvdK2XmNZD6IcMufGIu9HN0VqqymsmLiX', '2018-08-20 21:00:00', '2018-09-01 04:19:52'),
(2, 'مصطفى عادل', 'admin', 'mostafa@gmail.com', '$2y$10$zjwwrNdFopW6goCfKYVi.uA5Fk2e6hf9U7NDNGuXKBPu6CI/FHJle', '$2y$10$zjwwrNdFopW6goCfKYVi.uA5Fk2e6hf9U7NDNGuXKBPu6CI/FHJle', 'ذكر', '249911405218', 'الخرطوم', 'الخرطوم', 'الخرطوم', '20', 2, 'استاذ مشارك', 3, 1, '1535786272.jpg', '09IKJFR9HduFEgOB4Uo3WnmsNj670I5nx87dXdHEgqOguJ2DEpVW6gYPm8rI', '2018-08-20 21:00:00', '2018-09-01 05:31:41'),
(3, 'زينب صلاح', 'user', 'zuba@gmail.com', '$2y$10$fEG5H4rCMSaV7hKtui8RLOrUhAiTvspwoku2iknnzaodTBSIBzPU2', '$2y$10$64rCEW2KHBZ.RE.kdK6S3.I1vfGoMFXLVpoK6r5V2DfV1m0ua0UOO', 'ذكر', '24990718110', 'الخرطوم', 'الخرطوم', 'الخرطوم', '2', 1, 'ماجستير', 3, 1, '1535787870.png', 'AsVceIDvpvqRJhbFuvg91RpI9NbJSClsWwKORRqOFHYT8OUhpOBZh3J9QyPm', '2018-09-01 04:27:45', '2018-09-01 04:44:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_latter_id_foreign` (`latter_id`);

--
-- Indexes for table `committeemembers`
--
ALTER TABLE `committeemembers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `committeemembers_commit_id_foreign` (`commit_id`),
  ADD KEY `committeemembers_user_id_foreign` (`user_id`);

--
-- Indexes for table `committees`
--
ALTER TABLE `committees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `depts`
--
ALTER TABLE `depts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grads`
--
ALTER TABLE `grads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latters`
--
ALTER TABLE `latters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `latters_user_id_foreign` (`user_id`),
  ADD KEY `latters_type_foreign` (`type`),
  ADD KEY `latters_dept_id_foreign` (`dept_id`),
  ADD KEY `latters_reciver_id_foreign` (`reciver_id`),
  ADD KEY `latters_sender_foreign` (`sender`);

--
-- Indexes for table `lattertypes`
--
ALTER TABLE `lattertypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latter_user`
--
ALTER TABLE `latter_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `latter_user_user_id_foreign` (`user_id`),
  ADD KEY `latter_user_latter_id_foreign` (`latter_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_job_id_foreign` (`job_id`),
  ADD KEY `users_grad_id_foreign` (`grad_id`),
  ADD KEY `users_dept_id_foreign` (`dept_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `committeemembers`
--
ALTER TABLE `committeemembers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `committees`
--
ALTER TABLE `committees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `depts`
--
ALTER TABLE `depts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `grads`
--
ALTER TABLE `grads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `latters`
--
ALTER TABLE `latters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `lattertypes`
--
ALTER TABLE `lattertypes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `latter_user`
--
ALTER TABLE `latter_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_latter_id_foreign` FOREIGN KEY (`latter_id`) REFERENCES `latters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `committeemembers`
--
ALTER TABLE `committeemembers`
  ADD CONSTRAINT `committeemembers_commit_id_foreign` FOREIGN KEY (`commit_id`) REFERENCES `committees` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `committeemembers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `latters`
--
ALTER TABLE `latters`
  ADD CONSTRAINT `latters_dept_id_foreign` FOREIGN KEY (`dept_id`) REFERENCES `depts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `latters_reciver_id_foreign` FOREIGN KEY (`reciver_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `latters_sender_foreign` FOREIGN KEY (`sender`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `latters_type_foreign` FOREIGN KEY (`type`) REFERENCES `lattertypes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `latters_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `latter_user`
--
ALTER TABLE `latter_user`
  ADD CONSTRAINT `latter_user_latter_id_foreign` FOREIGN KEY (`latter_id`) REFERENCES `latters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `latter_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_dept_id_foreign` FOREIGN KEY (`dept_id`) REFERENCES `depts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_grad_id_foreign` FOREIGN KEY (`grad_id`) REFERENCES `grads` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
