-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-07-15 04:58:40
-- 伺服器版本： 10.4.13-MariaDB
-- PHP 版本： 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `test`
--

-- --------------------------------------------------------

--
-- 資料表結構 `20200708test`
--

CREATE TABLE `20200708test` (
  `sid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` int(100) NOT NULL,
  `birthday` int(100) NOT NULL,
  `email` int(100) NOT NULL,
  `article` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `20200708test`
--

INSERT INTO `20200708test` (`sid`, `name`, `address`, `mobile`, `birthday`, `email`, `article`) VALUES
(1, '世佑', '鄉下', 90000000, 0, 0, ''),
(2, 'james', '天龍國', 9090990, 230, 0, ''),
(3, 'james', '天龍國', 9090990, 230, 0, ''),
(4, 'james', '天龍國', 9090990, 230, 0, ''),
(5, 'james', '天龍國', 9090990, 230, 0, '');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `20200708test`
--
ALTER TABLE `20200708test`
  ADD PRIMARY KEY (`sid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `20200708test`
--
ALTER TABLE `20200708test`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
