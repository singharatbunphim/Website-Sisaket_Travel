-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2022 at 02:28 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwb1`
--

-- --------------------------------------------------------

--
-- Table structure for table `commenttbl`
--

CREATE TABLE `commenttbl` (
  `c_id` int(11) NOT NULL,
  `c_text` varchar(150) NOT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `regiontbl`
--

CREATE TABLE `regiontbl` (
  `r_id` int(100) NOT NULL,
  `r_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `regiontbl`
--

INSERT INTO `regiontbl` (`r_id`, `r_name`) VALUES
(1, 'เมือง'),
(2, 'พยุห์'),
(3, 'อุทุมพรพิสัย'),
(4, 'กันทรารมย์'),
(5, 'ภูสิงห์'),
(6, 'โพธิ์ศรีสุวรรณ'),
(7, 'ยางชุมน้อย'),
(8, 'วังหิน'),
(9, 'ศรีรัตนะ'),
(10, 'ห้วยทับทัน'),
(11, 'ราษีไศล'),
(12, 'เมืองจันทร์'),
(13, 'ไพรบึง'),
(14, 'น้ำเกลี้ยง'),
(15, 'ขุขันธ์'),
(16, 'ศิลาลาด'),
(17, 'โนนคูณ'),
(18, 'ขุนหาญ'),
(19, 'ปรางค์กู่'),
(20, 'กันทรลักษ์'),
(21, 'เบญจลักษ์'),
(22, 'บึงบูรพ์');

-- --------------------------------------------------------

--
-- Table structure for table `scoretbl`
--

CREATE TABLE `scoretbl` (
  `s_id` int(11) NOT NULL,
  `s_point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `scoretbl`
--

INSERT INTO `scoretbl` (`s_id`, `s_point`) VALUES
(51, 0),
(52, 0),
(53, 0),
(54, 0),
(55, 0);

-- --------------------------------------------------------

--
-- Table structure for table `traveltble`
--

CREATE TABLE `traveltble` (
  `t_id` int(100) NOT NULL,
  `t_name` varchar(100) NOT NULL,
  `t_region` varchar(100) NOT NULL,
  `t_emblegoogle` varchar(2000) NOT NULL,
  `t_img` varchar(150) NOT NULL,
  `u_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `traveltble`
--

INSERT INTO `traveltble` (`t_id`, `t_name`, `t_region`, `t_emblegoogle`, `t_img`, `u_id`) VALUES
(51, 'โรงเรียนกำแพง', '3', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15405.959292929241!2d104.1438447!3d15.131421!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2194126e727b620e!2z4LmC4Lij4LiH4LmA4Lij4Li14Lii4LiZ4LiB4Liz4LmB4Lie4LiH!5e0!3m2!1sth!2sth!4v1642941118813!5m2!1sth!2sth\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '2022_01_2621_47_162022_01_2319_32_03download.jpg', '1'),
(52, 'เกาะกลางน้ำ', '1', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3852.2060673786436!2d104.32640291535472!3d15.091967368890561!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3116e39a90b22241%3A0x16e4e4bea1ca8d7c!2z4LmA4LiB4Liy4Liw4LiB4Lil4Liy4LiH4LiZ4LmJ4LizIOC4qOC4o-C4teC4quC4sOC5gOC4geC4qQ!5e0!3m2!1sth!2sth!4v1642944001504!5m2!1sth!2sth\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>\r\n', '2022_01_2621_48_492022_01_2320_20_07Jixl111.jpg', '1'),
(53, 'วัดปาศรีมงคลรัตนาราม', '3', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3854.4445488622855!2d104.10412001535396!3d14.968007971978597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311717f6d48e5f51%3A0x6d3f981ce271bce0!2z4Lin4Lix4LiU4Lib4LmI4Liy4Lio4Lij4Li14Lih4LiH4LiE4Lil4Lij4Lix4LiV4LiZ4Liy4Lij4Liy4Lih!5e0!3m2!1sth!2sth!4v1642945574843!5m2!1sth!2sth\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>\r\n', '2022_01_2621_49_252022_01_2320_46_20watpasisaket.jpg', '1'),
(54, 'วัดศรีบึงบูรพ์', '22', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15390.59076417753!2d104.0554182!3d15.3413697!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x210a4e9173f06cd3!2z4Lin4Lix4LiU4Lio4Lij4Li14Lia4Li24LiH4Lia4Li54Lij4Lie4LmM!5e0!3m2!1sth!2sth!4v1642947365334!5m2!1sth!2sth\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>\r\n', '2022_01_2621_49_492022_01_2321_16_1210877_ 1.jpg', '1'),
(55, 'ผามออีแดง', '20', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15457.801413837957!2d104.6861001!3d14.401183!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x951340d30024c697!2z4Lic4Liy4Lih4Lit4Lit4Li14LmB4LiU4LiH!5e0!3m2!1sth!2sth!4v1642948999361!5m2!1sth!2sth\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>\r\n', '2022_01_2621_50_172022_01_2321_47_27download (1).jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `usertbl`
--

CREATE TABLE `usertbl` (
  `u_id` int(100) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `role` int(11) NOT NULL,
  `CreateAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usertbl`
--

INSERT INTO `usertbl` (`u_id`, `username`, `password`, `role`, `CreateAt`) VALUES
(1, 'admin', 'admin', 1, '2022-01-22 10:55:15'),
(2, 'user', 'user', 0, '2022-01-22 10:55:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commenttbl`
--
ALTER TABLE `commenttbl`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `regiontbl`
--
ALTER TABLE `regiontbl`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `scoretbl`
--
ALTER TABLE `scoretbl`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `traveltble`
--
ALTER TABLE `traveltble`
  ADD PRIMARY KEY (`t_id`),
  ADD KEY `r_tble` (`t_region`),
  ADD KEY `u_tble` (`u_id`),
  ADD KEY `t_id` (`t_id`);

--
-- Indexes for table `usertbl`
--
ALTER TABLE `usertbl`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `traveltble`
--
ALTER TABLE `traveltble`
  MODIFY `t_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `usertbl`
--
ALTER TABLE `usertbl`
  MODIFY `u_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `scoretbl`
--
ALTER TABLE `scoretbl`
  ADD CONSTRAINT `t_id` FOREIGN KEY (`s_id`) REFERENCES `traveltble` (`t_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
