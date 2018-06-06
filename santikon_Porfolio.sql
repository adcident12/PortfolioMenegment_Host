-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 06, 2018 at 08:11 AM
-- Server version: 5.6.32-78.1
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `santikon_Porfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `Catarogy_skill`
--

CREATE TABLE IF NOT EXISTS `Catarogy_skill` (
  `Catarogy_skill_id` int(11) NOT NULL,
  `Catarogy_skill_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Catarogy_skill`
--

INSERT INTO `Catarogy_skill` (`Catarogy_skill_id`, `Catarogy_skill_name`) VALUES
(1, 'Development Tool'),
(2, 'Programming Lang'),
(3, 'DBMS'),
(4, 'OS & Application'),
(5, 'Computer System & Other');

-- --------------------------------------------------------

--
-- Table structure for table `Computer_skill`
--

CREATE TABLE IF NOT EXISTS `Computer_skill` (
  `Computer_skill_id` int(11) NOT NULL,
  `Computer_skill_name` varchar(45) DEFAULT NULL,
  `Catarogy_skill_Catarogy_skill_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Computer_skill`
--

INSERT INTO `Computer_skill` (`Computer_skill_id`, `Computer_skill_name`, `Catarogy_skill_Catarogy_skill_id`) VALUES
(1, 'Visual Studio Code', 1),
(2, 'HTML/DHTML', 2),
(3, 'JavaScript', 2),
(4, 'PHP', 2),
(5, 'CSS', 2),
(6, 'MySQL', 3),
(7, 'Apache', 5),
(8, 'macOS', 4),
(9, 'Windows', 4),
(10, 'Sublime text 3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Salary`
--

CREATE TABLE IF NOT EXISTS `Salary` (
  `Salary_id` int(11) NOT NULL,
  `Salary_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Salary`
--

INSERT INTO `Salary` (`Salary_id`, `Salary_name`, `Create_time`) VALUES
(1, '18,000 - 23,400 Thai Baht ต่อเดือน', '2018-06-06 09:11:41'),
(2, '20,000 - 23,400 Thai Baht ต่อเดือน', '2018-06-06 09:12:07'),
(3, '18,000 - 23,500 Thai Baht ต่อเดือน', '2018-06-06 09:12:33');

-- --------------------------------------------------------

--
-- Table structure for table `Staff`
--

CREATE TABLE IF NOT EXISTS `Staff` (
  `Staff_id` int(11) NOT NULL,
  `Staff_email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Staff_password` varchar(20) CHARACTER SET utf8 NOT NULL,
  `Staff_name` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `Staff_lastname` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `Staff_tel` varchar(45) DEFAULT NULL,
  `Staff_addr` varchar(90) CHARACTER SET utf8 DEFAULT NULL,
  `Staff_department` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `Staff_status` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Staff`
--

INSERT INTO `Staff` (`Staff_id`, `Staff_email`, `Staff_password`, `Staff_name`, `Staff_lastname`, `Staff_tel`, `Staff_addr`, `Staff_department`, `Staff_status`) VALUES
(1, 'santikon12@gmail.com', '1111', 'Santikon', 'Apai', '0927381976', '129/6', 'WebDeveloper', 'admin'),
(9, 'check_out@gmail.com', 'santikon', 'Check', 'Out', '0891238576', '45/9', 'Programmer', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `Strengths`
--

CREATE TABLE IF NOT EXISTS `Strengths` (
  `Strengths_id` int(11) NOT NULL,
  `Strengths_name` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Strengths`
--

INSERT INTO `Strengths` (`Strengths_id`, `Strengths_name`) VALUES
(1, 'ซื่อสัตย์สุจริต'),
(2, 'ตรงต่อเวลา'),
(3, 'คิดอย่างมีหลักการ'),
(4, 'จงรักภักดี'),
(5, 'ขยัน');

-- --------------------------------------------------------

--
-- Table structure for table `Student`
--

CREATE TABLE IF NOT EXISTS `Student` (
  `Student_id` int(11) NOT NULL,
  `Student_Prefix` varchar(20) CHARACTER SET utf8 NOT NULL,
  `Student_Name_Th` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Student_Lname_Th` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Student_Name_Eng` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Student_Lname_Eng` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Birthday` text CHARACTER SET utf8 NOT NULL,
  `Faculty_Name` text CHARACTER SET utf8 NOT NULL,
  `GPAX` varchar(4) CHARACTER SET utf8 NOT NULL,
  `Degree` text CHARACTER SET utf8 NOT NULL,
  `Status_Name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `Student_tel` varchar(12) CHARACTER SET utf8 NOT NULL,
  `Student_email` text CHARACTER SET utf8 NOT NULL,
  `Branch_Name` text CHARACTER SET utf8 NOT NULL,
  `University_Th` text CHARACTER SET utf8 NOT NULL,
  `University_En` text CHARACTER SET utf8 NOT NULL,
  `Create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Student`
--

INSERT INTO `Student` (`Student_id`, `Student_Prefix`, `Student_Name_Th`, `Student_Lname_Th`, `Student_Name_Eng`, `Student_Lname_Eng`, `Birthday`, `Faculty_Name`, `GPAX`, `Degree`, `Status_Name`, `Student_tel`, `Student_email`, `Branch_Name`, `University_Th`, `University_En`, `Create_time`) VALUES
(1, 'นาย', 'ศานติกร', 'อภัย', 'Santikon', 'Apai', '1996-04-06', 'วิทยาการสารสนเทศ', '2.86', '2515013:วท.บ.(เทคโนโลยีสารสนเทศ) ใหม่ 54-4 ปี พิเศษ', 'กำลังศึกษา', '0927381976', 'santikon12@gmail.com', 'เทคโนโลยีสารสนเทศ', 'มหาวิทยาลัยบูรพา', 'Burapha University', '2018-06-05 04:46:20'),
(3, 'นาย', 'ศานติกร', 'อภัย', 'Santikon', 'Apai', '1996-04-06', 'วิทยาการสารสนเทศ', '2.86', '2515013:วท.บ.(เทคโนโลยีสารสนเทศ) ใหม่ 54-4 ปี พิเศษ', 'สำเร็จการศึกษา', '0927381976', 'santikon12@gmail.com', 'เทคโนโลยีสารสนเทศ', 'มหาวิทยาลัยบูรพา', 'Burapha University', '2018-06-05 04:46:20'),
(4, 'นาง', 'ศานติกร', 'อภัย', 'Santikon', 'Apai', '1996-04-06', 'วิทยาการสารสนเทศ', '2.86', '2515013:วท.บ.(เทคโนโลยีสารสนเทศ) ใหม่ 54-4 ปี พิเศษ', 'สำเร็จการศึกษา', '0927381976', 'santikon12@gmail.com', 'เทคโนโลยีสารสนเทศ', 'มหาวิทยาลัยบูรพา', 'Burapha University', '2018-06-05 04:53:30'),
(5, 'นาย', 'ศานติกร', 'อภัย', 'Santikon', 'Apai', '1996-04-06', 'วิทยาการสารสนเทศ', '2.86', '2515013:วท.บ.(เทคโนโลยีสารสนเทศ) ใหม่ 54-4 ปี พิเศษ', 'กำลังศึกษา', '0927381976', 'santikon12@gmail.com', 'เทคโนโลยีสารสนเทศ', 'มหาวิทยาลัยบูรพา', 'Burapha University', '2018-06-05 04:53:43'),
(6, 'นางสาว', 'ศานติกร', 'อภัย', 'Santikon', 'Apai', '1996-04-06', 'วิทยาการสารสนเทศ', '2.86', '2515013:วท.บ.(เทคโนโลยีสารสนเทศ) ใหม่ 54-4 ปี พิเศษ', 'กำลังศึกษา', '0927381976', 'santikon@gmail.com', 'เทคโนโลยีสารสนเทศ', 'มหาวิทยาลัยบูรพา', 'Burapha University', '2018-06-05 04:54:33'),
(7, 'นาย', 'ศานติกร', 'อภัย', 'Santikon', 'Apai', '1996-04-06', 'วิทยาการสารสนเทศ', '2.86', '2515013:วท.บ.(เทคโนโลยีสารสนเทศ) ใหม่ 54-4 ปี พิเศษ', 'กำลังศึกษา', '0927381976', 'santikon12@gmail.com', 'เทคโนโลยีสารสนเทศ', 'บูรพา', 'Burapha University', '2018-06-05 04:55:19');

-- --------------------------------------------------------

--
-- Table structure for table `Work`
--

CREATE TABLE IF NOT EXISTS `Work` (
  `Work_id` int(11) NOT NULL,
  `Work_name` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Work`
--

INSERT INTO `Work` (`Work_id`, `Work_name`) VALUES
(1, 'ไอที / คอมพิวเตอร์ - นักพัฒนาเว็บ'),
(2, 'ไอที / คอมพิวเตอร์ - งานออกแบบWeb/UI/UX '),
(3, 'ไอที / คอมพิวเตอร์ - โปรแกรมเมอร์เวบไซต์ '),
(4, 'ไอที / คอมพิวเตอร์ - โปรแกรมเมอร์ '),
(5, 'ไอที / คอมพิวเตอร์ - IT Support');

-- --------------------------------------------------------

--
-- Table structure for table `Working_area`
--

CREATE TABLE IF NOT EXISTS `Working_area` (
  `Working_area_id` int(11) NOT NULL,
  `Working_area_name` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Working_area`
--

INSERT INTO `Working_area` (`Working_area_id`, `Working_area_name`) VALUES
(1, 'ภาคตะวันออก'),
(2, 'กรุงเทพ');

-- --------------------------------------------------------

--
-- Table structure for table `Working_goal`
--

CREATE TABLE IF NOT EXISTS `Working_goal` (
  `Working_goal_id` int(11) NOT NULL,
  `Working_goal_name` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Working_goal`
--

INSERT INTO `Working_goal` (`Working_goal_id`, `Working_goal_name`) VALUES
(1, 'รักที่จะทำงานกับผู้อื่น'),
(2, 'ได้นำประสบการณ์ ความรู้ และทักษะที่มีมาใช้ประโยชน์\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Catarogy_skill`
--
ALTER TABLE `Catarogy_skill`
  ADD PRIMARY KEY (`Catarogy_skill_id`);

--
-- Indexes for table `Computer_skill`
--
ALTER TABLE `Computer_skill`
  ADD PRIMARY KEY (`Computer_skill_id`,`Catarogy_skill_Catarogy_skill_id`), ADD KEY `fk_Computer_skill_Catarogy_skill_idx` (`Catarogy_skill_Catarogy_skill_id`);

--
-- Indexes for table `Salary`
--
ALTER TABLE `Salary`
  ADD PRIMARY KEY (`Salary_id`);

--
-- Indexes for table `Staff`
--
ALTER TABLE `Staff`
  ADD PRIMARY KEY (`Staff_id`);

--
-- Indexes for table `Strengths`
--
ALTER TABLE `Strengths`
  ADD PRIMARY KEY (`Strengths_id`);

--
-- Indexes for table `Student`
--
ALTER TABLE `Student`
  ADD PRIMARY KEY (`Student_id`);

--
-- Indexes for table `Work`
--
ALTER TABLE `Work`
  ADD PRIMARY KEY (`Work_id`);

--
-- Indexes for table `Working_area`
--
ALTER TABLE `Working_area`
  ADD PRIMARY KEY (`Working_area_id`);

--
-- Indexes for table `Working_goal`
--
ALTER TABLE `Working_goal`
  ADD PRIMARY KEY (`Working_goal_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Catarogy_skill`
--
ALTER TABLE `Catarogy_skill`
  MODIFY `Catarogy_skill_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `Computer_skill`
--
ALTER TABLE `Computer_skill`
  MODIFY `Computer_skill_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `Salary`
--
ALTER TABLE `Salary`
  MODIFY `Salary_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Staff`
--
ALTER TABLE `Staff`
  MODIFY `Staff_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `Strengths`
--
ALTER TABLE `Strengths`
  MODIFY `Strengths_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `Student`
--
ALTER TABLE `Student`
  MODIFY `Student_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `Work`
--
ALTER TABLE `Work`
  MODIFY `Work_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `Working_area`
--
ALTER TABLE `Working_area`
  MODIFY `Working_area_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `Working_goal`
--
ALTER TABLE `Working_goal`
  MODIFY `Working_goal_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Computer_skill`
--
ALTER TABLE `Computer_skill`
ADD CONSTRAINT `fk_Computer_skill_Catarogy_skill` FOREIGN KEY (`Catarogy_skill_Catarogy_skill_id`) REFERENCES `Catarogy_skill` (`Catarogy_skill_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
