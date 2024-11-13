-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-11-01 08:10:36
-- 伺服器版本： 10.4.32-MariaDB
-- PHP 版本： 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `journal`
--

-- --------------------------------------------------------

--
-- 資料表結構 `routine`
--

CREATE TABLE `routine` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `amount` int(10) NOT NULL,
  `classify` varchar(16) NOT NULL,
  `item` varchar(32) NOT NULL,
  `remain` text NOT NULL,
  `payment` varchar(16) NOT NULL,
  `location` varchar(64) NOT NULL,
  `consumer` varchar(32) NOT NULL DEFAULT 'bear',
  `type` varchar(10) NOT NULL,
  `sub_classify` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `routine`
--

INSERT INTO `routine` (`id`, `date`, `amount`, `classify`, `item`, `remain`, `payment`, `location`, `consumer`, `type`, `sub_classify`) VALUES
(1, '2024-11-01 07:02:18', 45, '食', '三明治', '', '現金', '士林', 'bear', '支出', '早餐'),
(2, '2024-11-01 07:02:18', 25, '食', '紅茶', '', '25', '士林', 'bear', '支出', '早餐'),
(3, '2024-11-01 07:09:22', 20, '食', '茶葉蛋', '', '現金', '士林', 'bear', '支出', '早午餐'),
(4, '2024-11-01 07:03:57', 25, '食', '地瓜', '', '現金', '士林', 'bear', '支出', '點心'),
(5, '2024-11-01 07:04:57', 100, '行', '加油', '', '現金', '泰山', 'bear', '支出', '摩托車'),
(6, '2024-11-01 07:10:02', 100, '食', '便當', '', '現金', '士林', 'bear', '支出', '晚餐'),
(7, '2024-11-01 07:10:15', 100, '食', '青菜', '', '現金', '士林', 'bear', '支出', '午餐'),
(8, '2024-11-01 07:07:08', 350, '衣', '上衣', '', '現金', '士林', 'bear', '支出', '便服'),
(9, '2024-11-01 07:10:29', 60, '樂', '扭蛋', '', '現金', '士林', 'bear', '支出', '玩具'),
(10, '2024-11-01 07:09:52', 30000, '住', '房租', '', '現金', '士林', 'bear', '支出', '房租');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `routine`
--
ALTER TABLE `routine`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `routine`
--
ALTER TABLE `routine`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
