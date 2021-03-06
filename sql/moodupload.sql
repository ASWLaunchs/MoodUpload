-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 06, 2021 at 12:58 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mooddance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL COMMENT '管理员ID',
  `username` varchar(36) NOT NULL COMMENT '用户名',
  `passwd` varchar(36) NOT NULL COMMENT '密码',
  `avator` varchar(255) DEFAULT NULL COMMENT '头像',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `passwd`, `avator`) VALUES
(1998, 'admin', '21232f297a57a5a743894a0e4a801fc3', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `mutlimedia_id` int(11) NOT NULL COMMENT '媒体ID',
  `users_id` int(11) NOT NULL COMMENT '用户ID',
  `username` varchar(36) NOT NULL COMMENT '用户名',
  `usercomment` tinytext NOT NULL COMMENT '用户弹幕',
  `t_date` datetime DEFAULT NULL COMMENT '弹幕发布日期',
  KEY `mutlimedia_id` (`mutlimedia_id`),
  KEY `use_id` (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`mutlimedia_id`, `users_id`, `username`, `usercomment`, `t_date`) VALUES
(17, 16, '爱冒险的朵拉', '666', '2020-07-04 23:29:48'),
(17, 16, '爱冒险的朵拉', '哈哈哈，IT父子', '2020-07-05 01:04:22'),
(17, 16, '爱冒险的朵拉', '哈哈哈，IT父子', '2020-07-05 01:04:31'),
(17, 16, '爱冒险的朵拉', '正在检查评论区的问题', '2020-07-05 01:05:37'),
(17, 16, '爱冒险的朵拉', '貌似找到bug的源头了', '2020-07-05 01:06:32'),
(17, 16, '爱冒险的朵拉', '再发一条测试下', '2020-07-05 01:07:31'),
(17, 16, '爱冒险的朵拉', '检测下data的type', '2020-07-05 01:08:32'),
(17, 16, '爱冒险的朵拉', 'bug....', '2020-07-05 01:08:45'),
(17, 16, '爱冒险的朵拉', '一定要找到它', '2020-07-05 01:09:22'),
(17, 16, '爱冒险的朵拉', '终于成功了', '2020-07-05 01:10:25'),
(20, 16, '爱冒险的朵拉', '产品与用户的区别', '2020-07-05 01:19:47'),
(26, 18, '大大美食家', '这是我刚发布的，欢迎关注我哦!', '2020-07-05 21:02:36'),
(27, 18, '大大美食家', '这是我刚发布的，欢迎关注我哦!', '2020-07-05 21:08:56'),
(28, 18, '大大美食家', '这是我刚发布的，欢迎关注我哦!', '2020-07-05 21:52:47'),
(28, 18, '大大美食家', '真的很好看', '2020-07-05 21:52:59'),
(29, 11, '数据库爆破专家2', '这是我刚发布的，欢迎关注我哦!', '2020-08-30 21:02:11'),
(29, 11, '数据库爆破专家2', '6666', '2020-08-30 21:02:22');

-- --------------------------------------------------------

--
-- Table structure for table `multimedia`
--

DROP TABLE IF EXISTS `multimedia`;
CREATE TABLE IF NOT EXISTS `multimedia` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '多媒体ID',
  `favor` int(7) DEFAULT NULL COMMENT '喜欢',
  `fpath` varchar(255) NOT NULL COMMENT '视频 / 图片',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `multimedia`
--

INSERT INTO `multimedia` (`id`, `favor`, `fpath`) VALUES
(17, NULL, 'kok-1998-这是新的作品-1998-105973286_756706048399491_943895446847631719_n.jpg'),
(20, NULL, '数据库爆破专家-1998-产品和用户的差别-1998-104765301_142167280800862_373543357722179992_o.jpg'),
(22, NULL, '数据库爆破专家2-1998-震惊，这张图片真好看！-1998-pexels-photo-374897.png'),
(26, NULL, '大大美食家-1998-梵高艺术-1998-艺术.jpg'),
(27, NULL, '大大美食家-1998-孤狼-1998-wolf.jpg'),
(28, NULL, '大大美食家-1998-漫展-1998-sasxqww.jpg'),
(29, NULL, '数据库爆破专家2-1998-新的作品-1998-pixil-frame-0.png');

-- --------------------------------------------------------

--
-- Table structure for table `officialinfo`
--

DROP TABLE IF EXISTS `officialinfo`;
CREATE TABLE IF NOT EXISTS `officialinfo` (
  `id` int(11) NOT NULL COMMENT '发布信息的管理员id',
  `announcement` tinytext COMMENT '公告',
  `excellent` tinytext COMMENT '优秀用户',
  `t_date` datetime DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `officialinfo`
--

INSERT INTO `officialinfo` (`id`, `announcement`, `excellent`, `t_date`) VALUES
(1998, '<h4>生活美好<h4><h6>666</h6>', NULL, NULL),
(1998, '<h4>致信各位，感谢大家<h4><h6><h4>MoodUpload产品的精彩丰富来源于大家每天的分享，非常感谢大家！</h4>\r\n<p>2020-6-30</p></h6>', NULL, NULL),
(1998, '<h4>致信各位，感谢大家<h4><h6><h4>MoodUpload产品的精彩丰富来源于大家每天的分享，非常感谢大家！</h4>\r\n<p>2020-6-30</p></h6>', NULL, '2020-06-30 00:00:00'),
(1998, '<h4>震惊，这张图片真好看！<h4><h6><h4>大家记得点赞！</h4>\r\n<img src=\"https://lh3.googleusercontent.com/proxy/aSS9M7-dS_Ssq8AwwEiPuc-w5Pm4LpxvMn5WhgODS7x5jskhdEKB6qWpec5QRqUEc2HMyn9i11jsHLP2Op2ICUXvF4sTgyZsYXs\"></h6>', NULL, '2020-06-30 00:00:00'),
(1998, '<h4>震惊，这张图片真好看！<h4><h6><h4>大家记得点赞！</h4>\r\n<img src=\'https://lh3.googleusercontent.com/proxy/aSS9M7-dS_Ssq8AwwEiPuc-w5Pm4LpxvMn5WhgODS7x5jskhdEKB6qWpec5QRqUEc2HMyn9i11jsHLP2Op2ICUXvF4sTgyZsYXs\'></h6>', NULL, '2020-06-30 00:00:00'),
(1998, '<h4>震惊，这张图片真好看！<h4><h6><h4>大家记得点赞！</h4>\r\n<img src=\'https://lh3.googleusercontent.com/proxy/aSS9M7-dS_Ssq8AwwEiPuc-w5Pm4LpxvMn5WhgODS7x5jskhdEKB6qWpec5QRqUEc2HMyn9i11jsHLP2Op2ICUXvF4sTgyZsYXs\'></h6>', NULL, '2020-06-30 02:44:57'),
(1998, '<h4>这就是axios<h4><h6>今天我们官方更新了axios的功能，速度更快了<img src=\"https://codesource.io/wp-content/uploads/2019/11/How-to-consume-RESTful-APIs-with-axios-950x500.png\"></h6>', NULL, '2020-06-30 10:01:19'),
(1998, '<h4>生活美好<h4><h6>\r\n<h2>生活很美好，加油</h2><br>\r\n6464616</h6>', NULL, '2020-07-05 21:13:15'),
(1998, '<h4>梵高艺术<h4><h6>这就是艺术</h6>', NULL, '2020-07-05 21:54:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `username` varchar(36) NOT NULL COMMENT '用户名',
  `passwd` varchar(36) NOT NULL COMMENT '密码',
  `email` varchar(255) NOT NULL COMMENT '电子邮件',
  `age` int(4) DEFAULT NULL COMMENT '年龄',
  `sex` int(1) DEFAULT NULL COMMENT '性别',
  `addr` varchar(255) DEFAULT NULL COMMENT '地址',
  `brief` varchar(600) DEFAULT NULL COMMENT '简介',
  `avator` varchar(255) DEFAULT NULL COMMENT '头像',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `passwd`, `email`, `age`, `sex`, `addr`, `brief`, `avator`) VALUES
(10, '数据库爆破专家', '2afdd997f68575669640c947104dee2a', '1@qq.com', 18, 0, '天津市市辖区河东区', '这个人很懒，都没写!!!4646', NULL),
(11, '数据库爆破专家2', 'e10adc3949ba59abbe56e057f20f883e', '1123@qq.com', 36, 0, '河北省唐山市路南区', '这个人很懒，什么都没写666啊', NULL),
(12, '数据库爆破专家3', 'fc7fc678608590b123692867f176fe63', '666@123.com', 26, 0, '上海市市辖区松江区', NULL, NULL),
(13, '数据库爆破专家', '4297f44b13955235245b2497399d7a93', '110@123.com', 16, 0, '江苏省扬州市仪征市', NULL, NULL),
(14, '爱冒险的朵拉', '670b14728ad9902aecba32e22fa4f6bd', '0@qq.com', 18, 0, '山东省莱芜市市辖区', NULL, NULL),
(15, '努力写论文的大学生', '670b14728ad9902aecba32e22fa4f6bd', '18@qq.com', 18, 0, '山东省莱芜市市辖区', NULL, NULL),
(16, '爱冒险的朵拉', '670b14728ad9902aecba32e22fa4f6bd', '666@qq.com', 18, 0, '山东省莱芜市市辖区', NULL, NULL),
(17, 'L', '670b14728ad9902aecba32e22fa4f6bd', '1314@qq.com', 18, 0, '河南省商丘市宁陵县', NULL, NULL),
(18, '大大美食家', '670b14728ad9902aecba32e22fa4f6bd', '6@qq.com', 30, 0, '北京市市辖区密云区', 'ok', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `usersdata`
--

DROP TABLE IF EXISTS `usersdata`;
CREATE TABLE IF NOT EXISTS `usersdata` (
  `id` int(11) NOT NULL COMMENT '用户ID',
  `username` varchar(36) NOT NULL COMMENT '用户名',
  `favor` int(10) DEFAULT NULL COMMENT '喜欢',
  `warning` int(1) DEFAULT NULL COMMENT '警告',
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`mutlimedia_id`) REFERENCES `multimedia` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `officialinfo`
--
ALTER TABLE `officialinfo`
  ADD CONSTRAINT `officialinfo_ibfk_1` FOREIGN KEY (`id`) REFERENCES `admin` (`id`);

--
-- Constraints for table `usersdata`
--
ALTER TABLE `usersdata`
  ADD CONSTRAINT `usersdata_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
