-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- 생성 시간: 19-06-20 09:03
-- 서버 버전: 10.1.38-MariaDB
-- PHP 버전: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `rise`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `news`
--

CREATE TABLE `news` (
  `no` int(10) NOT NULL,
  `title` varchar(30) NOT NULL,
  `img_file` varchar(100) DEFAULT NULL,
  `img_size` int(10) DEFAULT NULL,
  `content` varchar(3000) NOT NULL,
  `reg_date` date NOT NULL,
  `perform_flg` char(1) NOT NULL DEFAULT '0',
  `del_flag` char(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='rise news board';

--
-- 테이블의 덤프 데이터 `news`
--

INSERT INTO `news` (`no`, `title`, `img_file`, `img_size`, `content`, `reg_date`, `perform_flg`, `del_flag`) VALUES
(1, 'ミュージカル「マイ・バケットリスト」', 'img/img2.jpg', NULL, '12/26(水)\r\n[昼公演] 開場14:00 / 開演14:30\r\n[夜公演] 開場18:30 / 開演19:00\r\n会場：浅草六区 ゆめまち劇場', '2019-06-05', '0', '0'),
(2, 'ミンス ファンミーティング2018 今年もThank you', 'img/img1.png', NULL, '【公演日程】2019年1月23日(水)〜1月29日(火)\r\n\r\n【会場】浅草六区 ゆめまち劇場\r\n\r\n【出演】\r\n\r\nカング役：キム・ヨンソク(CROSS GENE)、藤原倫己\r\n\r\nヘギ役：インジュン、ジンソク\r\n\r\n【演出】中野智行(PaniCrew)\r\n\r\n★公演オフィシャルサイト http://r-t.jp/mybucketlist\r\n\r\n★公演公式 Twitter https://twitter.com/Mybucketlist_jp', '2019-06-05', '0', '0'),
(3, '123213', 'banner1.jpg', 1000, '13214qsdfsdf', '2019-06-06', '0', '0'),
(4, '타이틀', 'banner1 (1).jpg', 1000, '내용입니다.\r\n잘들어가고 있어요.\r\n\r\nwww.google.com', '2019-06-06', '0', '0'),
(5, 'plz', 'banner1 (1).jpg', 1000, 'insert plz', '2019-06-08', '0', '0');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`no`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `news`
--
ALTER TABLE `news`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
