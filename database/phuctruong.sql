-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 26, 2018 lúc 04:58 PM
-- Phiên bản máy phục vụ: 10.1.33-MariaDB
-- Phiên bản PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `phuctruong`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `helpdesk_activity`
--

CREATE TABLE `helpdesk_activity` (
  `id` int(10) UNSIGNED NOT NULL,
  `helpdesk_question_id` int(10) UNSIGNED NOT NULL,
  `helpdesk_answer_id` int(10) UNSIGNED DEFAULT NULL,
  `status` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `helpdesk_activity`
--

INSERT INTO `helpdesk_activity` (`id`, `helpdesk_question_id`, `helpdesk_answer_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, 10, '2018-12-25 14:24:56', '2018-12-25 14:24:56'),
(2, 4, NULL, 10, '2018-12-25 17:12:33', '2018-12-25 17:12:33'),
(3, 5, NULL, 10, '2018-12-25 17:13:03', '2018-12-25 17:13:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `helpdesk_answer`
--

CREATE TABLE `helpdesk_answer` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `helpdesk_category`
--

CREATE TABLE `helpdesk_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `helpdesk_category`
--

INSERT INTO `helpdesk_category` (`id`, `name`, `note`, `created_at`, `updated_at`) VALUES
(1, 'Excel', 'Can add vba question', '2018-11-18 07:04:13', '2018-11-18 07:31:45'),
(2, 'hihi', NULL, '2018-11-27 16:39:00', '2018-11-27 16:39:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `helpdesk_question`
--

CREATE TABLE `helpdesk_question` (
  `id` int(10) UNSIGNED NOT NULL,
  `brief` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `helpdesk_category_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `helpdesk_question`
--

INSERT INTO `helpdesk_question` (`id`, `brief`, `content`, `helpdesk_category_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'ad', 'ad', 1, 3, '2018-12-25 14:18:57', '2018-12-25 14:18:57'),
(2, 'ad meet ghe', 'ad', 1, 3, '2018-12-25 14:24:56', '2018-12-25 14:24:56'),
(4, 'da', 'da', 1, 10, '2018-12-25 17:12:33', '2018-12-25 17:12:33'),
(5, 'da', 'Met chan qua di buon ngu nua', 2, 10, '2018-12-25 17:13:03', '2018-12-25 17:13:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(10, '2018_11_18_102702_create_helpdesk_table', 2),
(11, '2018_11_28_203042_add_field_to_users_table', 3),
(12, '2018_12_02_094853_add_new_column_into_password_reset', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `note`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'Full Acess', '2018-11-16 15:54:15', '2018-11-16 16:00:15'),
(4, 'Admin', 'admin', '2018-11-16 16:20:05', '2018-11-16 16:20:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `users_group_id` int(10) UNSIGNED NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `confirmation_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avata` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `users_group_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `confirmed`, `confirmation_code`, `avata`, `province_id`) VALUES
(3, 'Phuc Truong', 'phuchong941@gmail.com', '123', 1, NULL, '$2y$10$nCTGCm1C8nf5qzNcUktD..ktWfJBkXK3C9.7vpZYMf9HfjsCpProa', 'nFBISw2I320TFqjyOvSo24whivkZGTNPDOFkzSb6SZXvdixllTWWbIVdwyxD', '2018-11-14 16:51:58', '2018-12-25 16:33:12', 0, NULL, NULL, NULL),
(9, 'Phuc Hong', 'phuc.truong@bluescope.com', NULL, 5, NULL, '$2y$10$GAgrBLDieMMXVJtNmr81SOyS6gLodcfycM3vXU4flxKcVGayJMXRS', NULL, '2018-11-28 15:08:43', '2018-11-28 15:10:09', 1, NULL, NULL, NULL),
(10, 'Truong Hong Phuc', 'phuchong94@gmail.com', NULL, 1, '2018-11-28 15:49:03', '$2y$10$NkEI61LwDrB6DuUV3dP/tuN/K5u2cZ0ILmxmn7ztyH9oeQWNg/Hcy', 'AY6u0vitIv21M9BdhOqGf26kQavWooxMYoZQUdfLGygQqFCcPEz94HXjRIfS', '2018-11-28 15:46:20', '2018-12-02 04:24:05', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users_group`
--

CREATE TABLE `users_group` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users_group`
--

INSERT INTO `users_group` (`id`, `name`, `note`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Full access', '2018-11-12 13:20:36', '2018-11-27 16:58:06'),
(3, 'Manager', 'Report access', '2018-11-14 05:43:26', '2018-11-14 07:36:22'),
(4, 'Suppervisor', 'hihi', '2018-11-14 05:43:34', '2018-11-15 06:13:43'),
(5, 'Guest', NULL, '2018-11-28 05:28:08', '2018-11-28 05:28:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_role`
--

CREATE TABLE `user_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `users_group_id` int(10) UNSIGNED NOT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_role`
--

INSERT INTO `user_role` (`id`, `role_id`, `users_group_id`, `note`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'hihi', '2018-11-16 17:18:48', '2018-11-16 17:18:48'),
(2, 4, 1, 'haha', '2018-11-16 17:36:00', '2018-11-16 17:36:00'),
(3, 4, 1, 'haha', '2018-11-16 17:46:20', '2018-11-16 17:46:20');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `helpdesk_activity`
--
ALTER TABLE `helpdesk_activity`
  ADD PRIMARY KEY (`id`),
  ADD KEY `helpdesk_activity_helpdesk_question_id_foreign` (`helpdesk_question_id`),
  ADD KEY `helpdesk_activity_helpdesk_answer_id_foreign` (`helpdesk_answer_id`);

--
-- Chỉ mục cho bảng `helpdesk_answer`
--
ALTER TABLE `helpdesk_answer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `helpdesk_answer_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `helpdesk_category`
--
ALTER TABLE `helpdesk_category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `helpdesk_question`
--
ALTER TABLE `helpdesk_question`
  ADD PRIMARY KEY (`id`),
  ADD KEY `helpdesk_question_helpdesk_category_id_foreign` (`helpdesk_category_id`),
  ADD KEY `helpdesk_question_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_users_group_id_foreign` (`users_group_id`);

--
-- Chỉ mục cho bảng `users_group`
--
ALTER TABLE `users_group`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_role_role_id_foreign` (`role_id`),
  ADD KEY `user_role_users_group_id_foreign` (`users_group_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `helpdesk_activity`
--
ALTER TABLE `helpdesk_activity`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `helpdesk_answer`
--
ALTER TABLE `helpdesk_answer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `helpdesk_category`
--
ALTER TABLE `helpdesk_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `helpdesk_question`
--
ALTER TABLE `helpdesk_question`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `users_group`
--
ALTER TABLE `users_group`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `helpdesk_activity`
--
ALTER TABLE `helpdesk_activity`
  ADD CONSTRAINT `helpdesk_activity_helpdesk_answer_id_foreign` FOREIGN KEY (`helpdesk_answer_id`) REFERENCES `helpdesk_answer` (`id`),
  ADD CONSTRAINT `helpdesk_activity_helpdesk_question_id_foreign` FOREIGN KEY (`helpdesk_question_id`) REFERENCES `helpdesk_question` (`id`);

--
-- Các ràng buộc cho bảng `helpdesk_answer`
--
ALTER TABLE `helpdesk_answer`
  ADD CONSTRAINT `helpdesk_answer_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `helpdesk_question`
--
ALTER TABLE `helpdesk_question`
  ADD CONSTRAINT `helpdesk_question_helpdesk_category_id_foreign` FOREIGN KEY (`helpdesk_category_id`) REFERENCES `helpdesk_category` (`id`),
  ADD CONSTRAINT `helpdesk_question_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_users_group_id_foreign` FOREIGN KEY (`users_group_id`) REFERENCES `users_group` (`id`);

--
-- Các ràng buộc cho bảng `user_role`
--
ALTER TABLE `user_role`
  ADD CONSTRAINT `user_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `user_role_users_group_id_foreign` FOREIGN KEY (`users_group_id`) REFERENCES `users_group` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
