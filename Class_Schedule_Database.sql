-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.6.10-log


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema class_schedule
--

CREATE DATABASE IF NOT EXISTS class_schedule;
USE class_schedule;

--
-- Definition of table `class_type`
--

DROP TABLE IF EXISTS `class_type`;
CREATE TABLE `class_type` (
  `class_Type_Id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `day` varchar(20) NOT NULL,
  `start_Time` time NOT NULL,
  `end_Time` time NOT NULL,
  `class_duration` time NOT NULL,
  `room_Id` int(25) unsigned NOT NULL,
  PRIMARY KEY (`class_Type_Id`),
  KEY `room_Id` (`room_Id`),
  CONSTRAINT `fk_class_Type_Room_Id` FOREIGN KEY (`room_Id`) REFERENCES `rooms` (`room_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `class_type`
--

/*!40000 ALTER TABLE `class_type` DISABLE KEYS */;
INSERT INTO `class_type` (`class_Type_Id`,`day`,`start_Time`,`end_Time`,`class_duration`,`room_Id`) VALUES 
 (1,'Monday','01:00:00','05:00:00','04:00:00',1),
 (2,'Monday','08:00:00','12:00:00','04:00:00',2),
 (4,'Tuesday','09:00:00','13:00:00','04:00:00',1),
 (6,'Wednesday','13:00:00','17:00:00','04:00:00',1),
 (7,'Thursday','12:00:00','16:00:00','04:00:00',2),
 (8,'Friday','14:00:00','18:00:00','04:00:00',2);
/*!40000 ALTER TABLE `class_type` ENABLE KEYS */;


--
-- Definition of table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE `courses` (
  `course_Id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `program_Id` int(20) unsigned NOT NULL,
  `course_Name` varchar(255) NOT NULL,
  `semester_Id` int(20) unsigned NOT NULL,
  `discription` text,
  PRIMARY KEY (`course_Id`),
  KEY `program_Id` (`program_Id`),
  KEY `semester_Id` (`semester_Id`),
  CONSTRAINT `fk_program_Id` FOREIGN KEY (`program_Id`) REFERENCES `programs` (`program_Id`),
  CONSTRAINT `fk_semester_Id` FOREIGN KEY (`semester_Id`) REFERENCES `semesters` (`semester_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` (`course_Id`,`program_Id`,`course_Name`,`semester_Id`,`discription`) VALUES 
 (1,1,'Core Java',2,''),
 (2,1,'PHP',2,''),
 (3,1,'Database Management System',2,'');
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;


--
-- Definition of table `professor_course`
--

DROP TABLE IF EXISTS `professor_course`;
CREATE TABLE `professor_course` (
  `professor_Course_Id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `professor_Id` int(20) unsigned NOT NULL,
  `course_Id` int(20) unsigned NOT NULL,
  PRIMARY KEY (`professor_Course_Id`),
  KEY `professor_Id` (`professor_Id`),
  KEY `course_Id` (`course_Id`),
  CONSTRAINT `fk_professor_course_course_Id` FOREIGN KEY (`course_Id`) REFERENCES `courses` (`course_Id`),
  CONSTRAINT `fk_professor_course_professor_Id` FOREIGN KEY (`professor_Id`) REFERENCES `professors` (`professor_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `professor_course`
--

/*!40000 ALTER TABLE `professor_course` DISABLE KEYS */;
INSERT INTO `professor_course` (`professor_Course_Id`,`professor_Id`,`course_Id`) VALUES 
 (1,2,1),
 (2,1,2);
/*!40000 ALTER TABLE `professor_course` ENABLE KEYS */;


--
-- Definition of table `professors`
--

DROP TABLE IF EXISTS `professors`;
CREATE TABLE `professors` (
  `professor_Id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `first_Name` varchar(25) NOT NULL,
  `last_Name` varchar(25) NOT NULL,
  `email` varchar(320) NOT NULL,
  `about` text,
  PRIMARY KEY (`professor_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `professors`
--

/*!40000 ALTER TABLE `professors` DISABLE KEYS */;
INSERT INTO `professors` (`professor_Id`,`first_Name`,`last_Name`,`email`,`about`) VALUES 
 (1,'Jhone','Wick','jhone_wick10@gmail.com',''),
 (2,'Ylber','Ramadani ','ylber.ramadani@cestarcollege.com','');
/*!40000 ALTER TABLE `professors` ENABLE KEYS */;


--
-- Definition of table `programs`
--

DROP TABLE IF EXISTS `programs`;
CREATE TABLE `programs` (
  `program_Id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `program_Code` varchar(25) NOT NULL,
  `program_Name` varchar(320) NOT NULL,
  `program_Duration` int(20) NOT NULL,
  `Discription` text,
  PRIMARY KEY (`program_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `programs`
--

/*!40000 ALTER TABLE `programs` DISABLE KEYS */;
INSERT INTO `programs` (`program_Id`,`program_Code`,`program_Name`,`program_Duration`,`Discription`) VALUES 
 (1,'IPCT01','Internet Programing and Database Management',4,'Web Development, Mobile Development, Database Management ');
/*!40000 ALTER TABLE `programs` ENABLE KEYS */;


--
-- Definition of table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE `rooms` (
  `room_Id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `room_Number` varchar(25) NOT NULL,
  `room_Type` varchar(25) NOT NULL,
  `discription` text,
  PRIMARY KEY (`room_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rooms`
--

/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;
INSERT INTO `rooms` (`room_Id`,`room_Number`,`room_Type`,`discription`) VALUES 
 (1,'A101','Library ',''),
 (2,'A106','Classroom','');
/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;


--
-- Definition of table `schedule`
--

DROP TABLE IF EXISTS `schedule`;
CREATE TABLE `schedule` (
  `schedule_Id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `program_Id` int(20) unsigned NOT NULL,
  `professor_Course_Id` int(20) unsigned NOT NULL,
  `class_Type_Id` int(20) unsigned NOT NULL,
  `date` date NOT NULL,
  `discription` text,
  PRIMARY KEY (`schedule_Id`),
  KEY `program_Id` (`program_Id`),
  KEY `professor_Course_Id` (`professor_Course_Id`),
  KEY `class_Type_Id` (`class_Type_Id`),
  CONSTRAINT `fk_schedule_course_Type_Id` FOREIGN KEY (`class_Type_Id`) REFERENCES `class_type` (`class_Type_Id`),
  CONSTRAINT `fk_schedule_professor_Course_Id` FOREIGN KEY (`professor_Course_Id`) REFERENCES `professor_course` (`professor_Course_Id`),
  CONSTRAINT `fk_schedule_program_Id` FOREIGN KEY (`program_Id`) REFERENCES `programs` (`program_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `schedule`
--

/*!40000 ALTER TABLE `schedule` DISABLE KEYS */;
INSERT INTO `schedule` (`schedule_Id`,`program_Id`,`professor_Course_Id`,`class_Type_Id`,`date`,`discription`) VALUES 
 (1,1,1,4,'2015-08-18',''),
 (2,1,1,4,'2015-08-25',''),
 (3,1,1,4,'2015-09-01',''),
 (4,1,1,4,'2015-09-08',''),
 (5,1,1,4,'2015-09-15',''),
 (6,1,1,4,'2015-09-22',''),
 (7,1,1,4,'2015-09-29',''),
 (8,1,1,4,'2015-10-06',''),
 (9,1,1,4,'2015-10-13',''),
 (10,1,1,4,'2015-10-20',''),
 (11,1,1,4,'2015-10-27',''),
 (12,1,1,4,'2015-11-03',''),
 (13,1,1,4,'2015-11-10',''),
 (14,1,1,4,'2015-11-17',''),
 (15,1,1,4,'2015-11-24',''),
 (16,1,1,4,'2015-12-01',''),
 (17,1,1,4,'2015-12-08',''),
 (18,1,1,4,'2015-12-15',''),
 (19,1,1,4,'2015-12-22',''),
 (20,1,1,4,'2015-12-29','');
/*!40000 ALTER TABLE `schedule` ENABLE KEYS */;


--
-- Definition of table `semesters`
--

DROP TABLE IF EXISTS `semesters`;
CREATE TABLE `semesters` (
  `semester_Id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `semester_Number` int(20) unsigned NOT NULL,
  `start_Date` date NOT NULL,
  `end_Date` date NOT NULL,
  PRIMARY KEY (`semester_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `semesters`
--

/*!40000 ALTER TABLE `semesters` DISABLE KEYS */;
INSERT INTO `semesters` (`semester_Id`,`semester_Number`,`start_Date`,`end_Date`) VALUES 
 (1,1,'2015-01-01','2015-10-30'),
 (2,3,'2015-08-01','2015-12-31');
/*!40000 ALTER TABLE `semesters` ENABLE KEYS */;


--
-- Definition of table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_Id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `first_Name` varchar(25) NOT NULL,
  `last_Name` varchar(25) NOT NULL,
  `email` varchar(320) NOT NULL,
  `password` varchar(320) NOT NULL,
  PRIMARY KEY (`user_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
