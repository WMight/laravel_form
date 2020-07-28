-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2020 �?07 �?28 �?10:47
-- 服务器版本: 5.5.53
-- PHP 版本: 5.6.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `laravel`
--

-- --------------------------------------------------------

--
-- 表的结构 `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `age` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `sex` tinyint(3) unsigned NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL DEFAULT '0',
  `updated_at` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1012 ;

--
-- 转存表中的数据 `student`
--

INSERT INTO `student` (`id`, `name`, `age`, `sex`, `created_at`, `updated_at`) VALUES
(1001, 'name1', 18, 20, 0, 1595929665),
(1002, 'name2', 18, 10, 0, 0),
(1003, 'name3', 16, 30, 0, 1595929814),
(1004, 'name4', 20, 10, 0, 0),
(1005, 'zhangsan', 22, 20, 1595862186, 1595862186),
(1006, 'newbee', 24, 10, 1595862861, 1595862861),
(1007, 'qwe', 12, 20, 1595863177, 1595863177),
(1008, 'asd', 12, 30, 1595863323, 1595863323),
(1009, 'zxc', 14, 10, 1595863867, 1595863867);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
