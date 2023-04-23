-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-04-23 06:43:19
-- 伺服器版本： 10.4.28-MariaDB
-- PHP 版本： 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `diary`
--

-- --------------------------------------------------------

--
-- 資料表結構 `ff`
--

CREATE TABLE `ff` (
  `id` int(6) UNSIGNED NOT NULL,
  `topic` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `ff`
--

INSERT INTO `ff` (`id`, `topic`, `content`, `reg_date`) VALUES
(5, '134', '555', '2023-04-22 02:16:46'),
(6, '111', 'today is saturday<br />\r\ntomorrow is sunday<br />\r\nthese days are weekend!', '2023-04-22 02:33:39'),
(7, 'hihi', '<h1>123</h1><br />\r\n444555<br />\r\n12345', '2023-04-22 02:50:44');

-- --------------------------------------------------------

--
-- 資料表結構 `gina`
--

CREATE TABLE `gina` (
  `id` int(6) UNSIGNED NOT NULL,
  `topic` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `ff`
--
ALTER TABLE `ff`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `gina`
--
ALTER TABLE `gina`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `ff`
--
ALTER TABLE `ff`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `gina`
--
ALTER TABLE `gina`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
