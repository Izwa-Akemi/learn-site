-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2021-03-06 02:14:37
-- サーバのバージョン： 10.4.17-MariaDB
-- PHP のバージョン: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `akross`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(8) NOT NULL,
  `password` varchar(10) NOT NULL,
  `admin_mail` varchar(25) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp(),
  `last_login_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `admin`
--

INSERT INTO `admin` (`admin_id`, `password`, `admin_mail`, `create_date`, `last_login_date`) VALUES
('A1000001', 'abcd1234', 'test@gmail.com', '2021-02-16 14:58:56', '2021-02-16 14:58:56');

-- --------------------------------------------------------

--
-- テーブルの構造 `apply_reason`
--

CREATE TABLE `apply_reason` (
  `apply_reason_id` int(8) NOT NULL,
  `apply_reason_content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `attendance`
--

CREATE TABLE `attendance` (
  `attendance_id` int(8) NOT NULL,
  `student_id` int(8) NOT NULL,
  `number_of_application_hours` int(2) NOT NULL,
  `point` int(2) NOT NULL,
  `tuition_fee` int(7) NOT NULL,
  `tax` int(7) NOT NULL,
  `total_money` int(7) NOT NULL,
  `teacher_id1` varchar(8) NOT NULL,
  `teacher_id2` varchar(8) NOT NULL,
  `teacher_id3` varchar(8) NOT NULL,
  `teacher_id4` varchar(8) NOT NULL,
  `teacher_id5` varchar(8) NOT NULL,
  `attendance_no` int(2) NOT NULL,
  `coucelling_detail_id` int(8) NOT NULL,
  `admin_id` varchar(8) NOT NULL,
  `last_updated` datetime NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `councelling`
--

CREATE TABLE `councelling` (
  `councelling_id` int(8) NOT NULL,
  `literacy` varchar(20) NOT NULL,
  `counseling_result` varchar(20) NOT NULL,
  `decision_day` date NOT NULL,
  `student_id` int(8) NOT NULL,
  `admin_id` varchar(8) NOT NULL,
  `last_updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `create_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `councelling`
--

INSERT INTO `councelling` (`councelling_id`, `literacy`, `counseling_result`, `decision_day`, `student_id`, `admin_id`, `last_updated`, `create_date`) VALUES
(1, 'aaa', 'aaaa', '2021-03-03', 12345678, '1001', '2021-03-03 11:19:39', '2021-03-03 11:19:39'),
(2, 'aaaa', 'aaaa', '2020-02-02', 34565437, 'A10001', '2021-03-03 12:18:30', '2021-03-03 12:18:30'),
(3, 'aaaa', 'aaaa', '2020-02-02', 12345678, 'A10001', '2021-03-04 03:51:58', '2021-03-04 03:51:58'),
(4, 'aaaa', 'aaaa', '2020-02-02', 12345678, 'A10001', '2021-03-04 03:55:09', '2021-03-04 03:55:09'),
(5, 'aaaa', 'aaaa', '2020-02-02', 12345678, 'A10001', '2021-03-04 03:59:43', '2021-03-04 03:59:43'),
(6, 'aaaa', 'aaaa', '2020-02-02', 34565437, 'A10001', '2021-03-05 09:53:34', '2021-03-05 09:53:34'),
(7, 'aaaa', 'aaaa', '2020-02-02', 34565437, 'A10001', '2021-03-05 10:21:18', '2021-03-05 10:21:18'),
(8, 'aaaa', 'aaaa', '2020-02-02', 98761234, 'A10001', '2021-03-05 11:11:37', '2021-03-05 11:11:37'),
(9, 'aaaa', 'aaaa', '2020-02-02', 98761234, 'A10001', '2021-03-05 11:23:14', '2021-03-05 11:23:14'),
(10, 'aaaa', 'aaaa', '2020-02-02', 98761234, 'A10001', '2021-03-05 11:24:30', '2021-03-05 11:24:30');

-- --------------------------------------------------------

--
-- テーブルの構造 `councelling_details`
--

CREATE TABLE `councelling_details` (
  `councelling_detail_id` int(8) NOT NULL,
  `student_id` int(8) NOT NULL,
  `title` varchar(20) NOT NULL,
  `goal` varchar(20) NOT NULL,
  `overview` varchar(20) NOT NULL,
  `suggestion_hours` int(2) NOT NULL,
  `class_time` int(2) NOT NULL,
  `how_many_times` int(2) NOT NULL,
  `fee` int(7) NOT NULL,
  `point` int(2) NOT NULL,
  `monthly_fee` tinyint(1) NOT NULL DEFAULT 0,
  `admin_id` varchar(8) NOT NULL,
  `last_updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `no_admission_flg` tinyint(1) NOT NULL DEFAULT 0,
  `discount_rate` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `councelling_details`
--

INSERT INTO `councelling_details` (`councelling_detail_id`, `student_id`, `title`, `goal`, `overview`, `suggestion_hours`, `class_time`, `how_many_times`, `fee`, `point`, `monthly_fee`, `admin_id`, `last_updated`, `create_date`, `no_admission_flg`, `discount_rate`) VALUES
(1, 12345678, 'aaa', 'aaa', 'aaa', 1, 1, 1, 1, 1, 1, '1001', '2021-03-03 11:21:26', '2021-03-03 11:21:26', 0, 1),
(2, 34565437, 'aaa', 'aaa', 'aaa', 2, 2, 2, 2, 2, 1, 'A10001', '2021-03-05 10:21:18', '2021-03-05 10:21:18', 1, 2),
(3, 34565437, 'aaa', 'aaa', 'aaa', 2, 2, 2, 2, 2, 1, 'A10001', '2021-03-05 10:21:18', '2021-03-05 10:21:18', 1, 2),
(4, 98761234, 'aaa', 'aaa', 'aaa', 2, 2, 2, 2, 2, 1, 'A10001', '2021-03-05 11:11:37', '2021-03-05 11:11:37', 1, 2),
(5, 98761234, 'aaa', 'aaa', 'aaa', 2, 2, 2, 2, 2, 1, 'A10001', '2021-03-05 11:11:37', '2021-03-05 11:11:37', 1, 2),
(6, 98761234, 'aaa', 'aaa', 'aaa', 2, 2, 2, 2, 2, 1, 'A10001', '2021-03-05 11:23:14', '2021-03-05 11:23:14', 1, 2),
(7, 98761234, 'aaa', 'aaa', 'aaa', 2, 2, 2, 2, 2, 1, 'A10001', '2021-03-05 11:23:14', '2021-03-05 11:23:14', 1, 2),
(8, 98761234, 'aaa', 'aaa', 'aaa', 2, 2, 2, 2, 2, 1, 'A10001', '2021-03-05 11:24:30', '2021-03-05 11:24:30', 1, 2),
(9, 98761234, 'aaa', 'aaa', 'aaa', 2, 2, 2, 2, 2, 1, 'A10001', '2021-03-05 11:24:30', '2021-03-05 11:24:30', 1, 2);

-- --------------------------------------------------------

--
-- テーブルの構造 `follow`
--

CREATE TABLE `follow` (
  `follow_id` int(8) NOT NULL,
  `follow_date` date NOT NULL,
  `follow_type` int(8) NOT NULL,
  `teacher_id` varchar(8) NOT NULL,
  `follow_contents` text NOT NULL,
  `student_id` int(8) DEFAULT NULL,
  `admin_id` varchar(8) NOT NULL,
  `last_updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `create_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `inquiry`
--

CREATE TABLE `inquiry` (
  `inquiry_id` int(8) NOT NULL,
  `student_id` int(8) NOT NULL,
  `date` date NOT NULL,
  `type_form` int(1) NOT NULL,
  `student_name` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `student_tell` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `student_address` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `student_mail` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `profession` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `corporation` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `corporation_inquiry` tinyint(1) NOT NULL,
  `sales_date` date NOT NULL,
  `sales_time` date NOT NULL,
  `tell_possible` int(11) NOT NULL,
  `week` int(1) NOT NULL,
  `form_reason` int(1) NOT NULL,
  `reason_another` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `master_skill` int(1) NOT NULL,
  `master_skill_another` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `current_skill` int(1) NOT NULL,
  `current_another` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `know_trigger` int(1) NOT NULL,
  `know_another` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `question` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `reservation_day` date NOT NULL,
  `reservation_possible` int(1) NOT NULL,
  `teacher_id` varchar(8) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `another` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `admin_id` varchar(8) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_updated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `inquiry`
--

INSERT INTO `inquiry` (`inquiry_id`, `student_id`, `date`, `type_form`, `student_name`, `student_tell`, `student_address`, `student_mail`, `profession`, `corporation`, `department`, `corporation_inquiry`, `sales_date`, `sales_time`, `tell_possible`, `week`, `form_reason`, `reason_another`, `master_skill`, `master_skill_another`, `current_skill`, `current_another`, `know_trigger`, `know_another`, `question`, `reservation_day`, `reservation_possible`, `teacher_id`, `another`, `admin_id`, `last_updated`) VALUES
(1, 12345678, '2021-03-01', 1, 'aaa', '09052176885', 'aaa', 'sirokumaorange1129', 'test', 'test', 'akemi ', 0, '2020-02-02', '2020-02-02', 1, 1, 1, 'aaa', 1, 'sss', 1, 'ddd', 2, 'ffff', 'aaaa', '2020-02-02', 2, '1', 'sss', 'A10001', '2021-03-01 10:16:49'),
(2, 34565437, '2021-02-27', 1, 'aaa', '09052176885', 'aaa', 'sirokumaorange1129', 'aaa', 'aaa', 'aaa', 0, '2020-02-02', '2020-02-02', 1, 1, 1, 'aaa', 1, 'aaa', 1, 'aaa', 2, 'aaa', 'aaaa', '2020-02-02', 5, '1', 'aaa', 'A10001', '2021-03-01 10:21:35'),
(3, 12345678, '2021-03-03', 1, 'aaa', '09052176885', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 0, '2020-02-02', '2020-02-02', 2, 1, 1, 'aaa', 1, 'aaa', 1, 'aaa', 2, 'aaa', 'aaaa', '2020-02-02', 2, '1', 'aaa', 'A10001', '2021-03-03 11:02:59'),
(4, 12345678, '2021-03-03', 1, 'aaa', '09052176885', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 0, '2020-02-02', '2020-02-02', 1, 1, 1, 'aaa', 1, 'aaa', 1, 'aaa', 2, 'aaa', 'aaaa', '2020-02-02', 2, '1', 'aaa', 'A10001', '2021-03-03 11:23:54'),
(5, 34565437, '2021-02-27', 1, 'aaa', '09052176885', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 0, '2020-02-02', '2020-02-02', 1, 1, 1, 'aaa', 1, 'aaa', 1, 'aaa', 2, 'aaa', 'aaaa', '2020-02-02', 2, '1', 'aaa', 'A10001', '2021-03-03 11:26:02'),
(6, 12345678, '2021-03-03', 1, 'aaa', '09052176885', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 0, '2020-02-02', '2020-02-02', 1, 1, 1, 'aaa', 1, 'aaa', 1, 'aaa', 2, 'ffff', 'aaaa', '2020-02-02', 3, '1', 'aaa', 'A10001', '2021-03-03 11:27:48'),
(7, 12345678, '2021-02-27', 1, 'aaa', '09052176885', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 0, '2020-02-02', '2020-02-02', 2, 1, 1, 'aaa', 1, 'aaa', 1, 'aaa', 2, 'aaa', 'aaaa', '2020-02-02', 3, '1', 'aaa', 'A10001', '2021-03-03 11:29:45'),
(8, 12345678, '2021-03-03', 1, 'aaa', '09052176885', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 0, '2020-02-02', '2020-02-02', 1, 1, 1, 'aaa', 1, 'aaa', 1, 'aaa', 3, 'aaa', 'aaaa', '2020-02-02', 3, '1', 'aaa', 'A10001', '2021-03-03 11:51:20'),
(9, 34565437, '2021-03-03', 1, 'aaa', '09052176885', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 0, '2020-02-02', '2020-02-02', 1, 1, 1, 'aaa', 1, 'aaa', 1, 'aaa', 2, 'aaa', 'aaaa', '2020-02-02', 2, '1', 'aaa', 'A10001', '2021-03-03 11:59:01'),
(10, 34565437, '2021-02-27', 1, 'aaa', '09052176885', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 0, '2020-02-02', '2020-02-02', 2, 1, 1, 'aaa', 1, 'aaa', 1, 'aaa', 2, 'aaa', 'aaaa', '2020-02-02', 2, '1', 'aaa', 'A10001', '2021-03-03 12:03:36'),
(11, 34565437, '2021-02-27', 1, 'aaa', '09052176885', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 0, '2020-02-02', '2020-02-02', 1, 1, 1, 'aaa', 1, 'aaa', 1, 'aaa', 2, 'aaa', 'aaaa', '2020-02-02', 2, '1', 'aaa', 'A10001', '2021-03-03 12:06:16'),
(12, 34565437, '2021-02-27', 1, 'aaa', '09052176885', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 0, '2020-02-02', '2020-02-02', 1, 1, 1, 'aaa', 1, 'aaa', 1, 'aaa', 2, 'aaa', 'aaaa', '2020-02-02', 3, '1', 'aaa', 'A10001', '2021-03-03 12:10:13'),
(13, 34565437, '2021-03-03', 2, 'aaa', '09052176885', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 0, '2020-02-02', '2020-02-02', 1, 1, 1, 'aaa', 2, 'aaa', 1, 'aaa', 2, 'aaa', 'aaaa', '2020-02-02', 2, '1', 'aaa', 'A10001', '2021-03-03 12:17:55'),
(14, 12345678, '2021-03-04', 1, 'aaa', '09052176885', 'aaa', 'aaa', 'test', 'aaa', 'aaa', 0, '2020-02-02', '2020-02-02', 2, 1, 1, 'aaa', 1, 'aaa', 1, 'aaa', 2, 'aaa', 'aaaa', '2020-02-02', 5, '1', 'aaa', 'A10001', '2021-03-04 03:51:08'),
(15, 12345678, '2021-02-27', 1, 'aaa', '09052176885', 'aaa', 'sirokumaorange1129', 'aaa', 'aaa', 'aaa', 0, '2020-02-02', '2020-02-02', 1, 1, 1, 'aaa', 1, 'aaa', 1, 'aaa', 2, 'aaa', 'aaaa', '2020-02-02', 4, '1', 'aaa', 'A10001', '2021-03-04 03:54:42'),
(16, 34565437, '2021-02-27', 1, 'aaa', '09052176885', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 0, '2020-02-02', '2020-02-02', 1, 1, 1, 'aaa', 1, 'aaa', 1, 'aaa', 2, 'aaa', 'aaaa', '2020-02-02', 2, '1', 'aaa', 'A10001', '2021-03-05 09:53:00'),
(17, 34565437, '2021-02-27', 1, 'aaa', '09052176885', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 0, '2020-02-02', '2020-02-02', 1, 1, 1, 'aaa', 1, 'aaa', 1, 'aaa', 2, 'aaa', 'aaaa', '2020-02-02', 1, '1', 'aaa', 'A10001', '2021-03-05 10:20:43'),
(18, 34565437, '2021-02-27', 1, 'aaa', '09052176885', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 0, '2020-02-02', '2020-02-02', 1, 1, 1, 'aaa', 1, 'aaa', 1, 'aaa', 2, 'aaa', 'aaaa', '2020-02-02', 2, '1', 'aaa', 'A10001', '2021-03-05 10:29:11'),
(19, 98761234, '2021-03-05', 1, 'aaa', '09052176885', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 0, '2020-02-02', '2020-02-02', 1, 1, 1, 'aaa', 1, 'aaa', 1, 'aaa', 2, 'aaa', 'aaaa', '2020-02-02', 3, '1', 'aaa', 'A10001', '2021-03-05 10:47:03'),
(20, 34565437, '2021-02-27', 1, 'aaa', '09052176885', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 0, '2020-02-02', '2020-02-02', 1, 1, 1, 'aaa', 1, 'aaa', 1, 'aaa', 2, 'aaa', 'aaaa', '2020-02-02', 5, '1', 'aaa', 'A10001', '2021-03-05 10:52:04'),
(21, 98761234, '2021-02-27', 1, 'aaa', '09052176885', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 0, '2020-02-02', '2020-02-02', 1, 1, 1, 'aaa', 1, 'aaa', 1, 'aaa', 2, 'aaa', 'aaaa', '2020-02-02', 1, '1', 'aaa', 'A10001', '2021-03-05 10:57:22'),
(22, 34565437, '2021-02-27', 1, 'aaa', '09052176885', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 0, '2020-02-02', '2020-02-02', 2, 1, 2, 'aaa', 1, 'aaa', 1, 'aaa', 2, 'aaa', 'aaaa', '2020-02-02', 1, '1', 'aaa', 'A10001', '2021-03-05 11:00:46'),
(23, 34565437, '2021-02-27', 1, 'aaa', '09052176885', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 0, '2020-02-02', '2020-02-02', 2, 1, 2, 'aaa', 1, 'aaa', 1, 'aaa', 2, 'aaa', 'aaaa', '2020-02-02', 1, '1', 'aaa', 'A10001', '2021-03-05 11:00:55'),
(24, 34565437, '2021-02-27', 1, 'aaa', '09052176885', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 0, '2020-02-02', '2020-02-02', 2, 1, 2, 'aaa', 1, 'aaa', 1, 'aaa', 2, 'aaa', 'aaaa', '2020-02-02', 1, '1', 'aaa', 'A10001', '2021-03-05 11:01:03'),
(25, 34565437, '2021-02-27', 1, 'aaa', '09052176885', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 0, '2020-02-02', '2020-02-02', 1, 1, 1, 'aaa', 1, 'aaa', 1, 'aaa', 2, 'aaa', 'aaaa', '2020-02-02', 1, '1', 'aaa', 'A10001', '2021-03-05 11:07:01'),
(26, 98761234, '2021-03-05', 1, 'aaa', '09052176885', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 0, '2020-02-02', '2020-02-02', 1, 1, 1, 'aaa', 1, 'aaa', 2, 'aaa', 2, 'aaa', 'aaaa', '2020-02-02', 2, '1', 'aaa', 'A10001', '2021-03-05 11:11:04'),
(27, 12345678, '2021-02-27', 1, 'aaa', '09052176885', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 0, '2020-02-02', '2020-02-02', 2, 1, 1, 'aaa', 1, 'aaa', 1, 'aaa', 2, 'aaa', 'aaaa', '2020-02-02', 1, '1', 'aaa', 'A10001', '2021-03-05 11:16:29'),
(28, 98761234, '2021-02-27', 1, 'aaa', '09052176885', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 0, '2020-02-02', '2020-02-02', 1, 1, 1, 'aaa', 1, 'aaa', 1, 'aaa', 2, 'aaa', 'aaaa', '2020-02-02', 0, '1', 'aaa', 'A10001', '2021-03-05 11:22:43'),
(29, 34565437, '2021-02-27', 1, 'aaa', '09052176885', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 0, '2020-02-02', '2020-02-02', 1, 1, 1, 'aaa', 1, 'aaa', 1, 'aaa', 2, 'aaa', 'aaaa', '2020-02-02', 1, '1', 'aaa', 'A10001', '2021-03-05 11:35:49'),
(30, 34565437, '2021-02-27', 1, 'aaa', '09052176885', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 0, '2020-02-02', '2020-02-02', 1, 1, 1, 'aaa', 1, 'aaa', 1, 'aaa', 2, 'aaa', 'aaaa', '2020-02-02', 2, '1', 'aaa', 'A10001', '2021-03-05 11:46:51'),
(31, 34565437, '2021-02-27', 1, 'aaa', '09052176885', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 0, '2020-02-02', '2020-02-02', 2, 1, 1, 'aaa', 1, 'aaa', 2, 'aaa', 2, 'aaa', 'aaaa', '2020-02-02', 1, '1', 'aaa', 'A10001', '2021-03-05 11:52:38'),
(32, 34565437, '2021-02-27', 1, 'aaa', '09052176885', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 0, '2020-02-02', '2020-02-02', 1, 1, 1, 'aaa', 1, 'aaa', 1, 'aaa', 2, 'aaa', 'aaaa', '2020-02-02', 2, '1', 'aaa', 'A10001', '2021-03-05 11:57:18'),
(33, 34565437, '2021-02-27', 1, 'aaa', '09052176885', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 0, '2020-02-02', '2020-02-02', 2, 1, 1, 'aaa', 1, 'aaa', 1, 'aaa', 2, 'aaa', 'aaaa', '2020-02-02', 2, '1', 'aaa', 'A10001', '2021-03-05 11:58:48'),
(34, 34565437, '2021-02-27', 1, 'aaa', '09052176885', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 0, '2020-02-02', '2020-02-02', 1, 2, 1, 'aaa', 1, 'aaa', 1, 'aaa', 2, 'aaa', 'aaaa', '2020-02-02', 3, '1', 'aaa', 'A10001', '2021-03-05 12:00:25'),
(35, 34565437, '2021-02-27', 1, 'aaa', '09052176885', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 0, '2020-02-02', '2020-02-02', 1, 1, 1, 'aaa', 1, 'aaa', 1, 'aaa', 2, 'aaa', 'aaaa', '2020-02-02', 1, '1', 'aaa', 'A10001', '2021-03-05 12:07:10'),
(36, 24681234, '2021-03-06', 1, 'aaa', '09052176885', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 0, '2020-02-02', '2020-02-02', 1, 1, 1, 'aaa', 1, 'aaa', 1, 'aaa', 2, 'aaa', 'aaaa', '2020-02-02', 2, '1', 'aaa', 'A10001', '2021-03-06 01:09:52');

-- --------------------------------------------------------

--
-- テーブルの構造 `skill`
--

CREATE TABLE `skill` (
  `skill_id` int(8) NOT NULL,
  `skill_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `student`
--

CREATE TABLE `student` (
  `student_id` int(8) NOT NULL,
  `import_money` int(8) NOT NULL,
  `special_note` varchar(30) NOT NULL,
  `apply_date` date NOT NULL,
  `student_name` varchar(15) NOT NULL,
  `student_tell` varchar(11) NOT NULL,
  `student_address` varchar(30) NOT NULL,
  `student_mail` varchar(25) NOT NULL,
  `profession` varchar(15) NOT NULL,
  `corporation` varchar(15) NOT NULL,
  `department` varchar(15) NOT NULL,
  `admission_flg` tinyint(1) NOT NULL,
  `last_updated` datetime NOT NULL,
  `create_date` datetime NOT NULL,
  `admin_id` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` varchar(8) NOT NULL,
  `password` varchar(10) NOT NULL,
  `teacher_mail` varchar(25) NOT NULL,
  `create_date` date NOT NULL,
  `last_login_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `trigger_table`
--

CREATE TABLE `trigger_table` (
  `trigger_id` int(8) NOT NULL,
  `trigger_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- テーブルの構造 `unit`
--

CREATE TABLE `unit` (
  `unit_id` int(8) NOT NULL,
  `councelling_detail_id` int(8) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `time_unit` int(8) NOT NULL,
  `study_content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `unit`
--

INSERT INTO `unit` (`unit_id`, `councelling_detail_id`, `unit`, `time_unit`, `study_content`) VALUES
(1, 7, 'a', 2, 'a'),
(2, 9, 'a', 2, 'a'),
(3, 9, 'aa', 2, 'a');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- テーブルのインデックス `apply_reason`
--
ALTER TABLE `apply_reason`
  ADD PRIMARY KEY (`apply_reason_id`);

--
-- テーブルのインデックス `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendance_id`);

--
-- テーブルのインデックス `councelling`
--
ALTER TABLE `councelling`
  ADD PRIMARY KEY (`councelling_id`);

--
-- テーブルのインデックス `councelling_details`
--
ALTER TABLE `councelling_details`
  ADD PRIMARY KEY (`councelling_detail_id`);

--
-- テーブルのインデックス `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`follow_id`);

--
-- テーブルのインデックス `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`inquiry_id`);

--
-- テーブルのインデックス `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`skill_id`);

--
-- テーブルのインデックス `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- テーブルのインデックス `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- テーブルのインデックス `trigger_table`
--
ALTER TABLE `trigger_table`
  ADD PRIMARY KEY (`trigger_id`);

--
-- テーブルのインデックス `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `apply_reason`
--
ALTER TABLE `apply_reason`
  MODIFY `apply_reason_id` int(8) NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `councelling`
--
ALTER TABLE `councelling`
  MODIFY `councelling_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- テーブルの AUTO_INCREMENT `councelling_details`
--
ALTER TABLE `councelling_details`
  MODIFY `councelling_detail_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- テーブルの AUTO_INCREMENT `follow`
--
ALTER TABLE `follow`
  MODIFY `follow_id` int(8) NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `inquiry_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- テーブルの AUTO_INCREMENT `skill`
--
ALTER TABLE `skill`
  MODIFY `skill_id` int(8) NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `trigger_table`
--
ALTER TABLE `trigger_table`
  MODIFY `trigger_id` int(8) NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `unit`
--
ALTER TABLE `unit`
  MODIFY `unit_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
