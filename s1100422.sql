-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-12-19 12:16:24
-- 伺服器版本： 10.4.21-MariaDB
-- PHP 版本： 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `s1100422`
--

-- --------------------------------------------------------

--
-- 資料表結構 `ad`
--

CREATE TABLE `ad` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `sh` tinyint(1) UNSIGNED NOT NULL,
  `intro` varchar(64) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `options`
--

CREATE TABLE `options` (
  `id` int(11) UNSIGNED NOT NULL,
  `opt` varchar(128) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `topic_id` int(10) UNSIGNED NOT NULL,
  `count` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `options`
--

INSERT INTO `options` (`id`, `opt`, `topic_id`, `count`) VALUES
(1, '1111', 1, 0),
(2, '2222', 1, 0),
(3, '3333', 1, 0),
(4, '4444', 1, 0),
(5, '5555', 1, 0),
(6, 'KOF', 2, 3),
(7, 'SFV', 2, 0),
(8, 'GGXX ', 2, 0),
(9, 'BB', 2, 0),
(10, 'TOA', 2, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `topics`
--

CREATE TABLE `topics` (
  `id` int(11) UNSIGNED NOT NULL,
  `topic` varchar(128) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `topics`
--

INSERT INTO `topics` (`id`, `topic`) VALUES
(1, 'WDA110'),
(2, 'DBJ');

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `account` varchar(12) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(12) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(24) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `name` varchar(12) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `gender` varchar(1) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`id`, `account`, `password`, `email`, `name`, `gender`, `birthday`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', '男', '2021-12-19');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `ad`
--
ALTER TABLE `ad`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `ad`
--
ALTER TABLE `ad`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
