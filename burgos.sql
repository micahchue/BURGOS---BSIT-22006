/*
SQLyog Community v13.1.9 (64 bit)
MySQL - 8.0.30 : Database - bsit2206
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bsit2206` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `bsit2206`;

/*Table structure for table `agent` */

DROP TABLE IF EXISTS `agent`;

CREATE TABLE `agent` (
  `AID` decimal(5,0) NOT NULL,
  `Lname` varchar(20) DEFAULT NULL,
  `Fname` varchar(20) DEFAULT NULL,
  `Mi` varchar(20) DEFAULT NULL,
  `Gender` varchar(6) DEFAULT NULL,
  `DID` decimal(5,0) DEFAULT NULL,
  PRIMARY KEY (`AID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `agent` */

insert  into `agent`(`AID`,`Lname`,`Fname`,`Mi`,`Gender`,`DID`) values 
(301,'Fortez','Marby','H','Female',503),
(302,'Oropeza','Gilbert','R','Male',501),
(303,'Oronio','Milbert','Q','Male',502),
(304,'Cordova','Anabelle','T','Female',501),
(305,'Garcia','Gabby','S','Male',503);

/*Table structure for table `client` */

DROP TABLE IF EXISTS `client`;

CREATE TABLE `client` (
  `CID` decimal(5,0) NOT NULL,
  `Lname` varchar(20) DEFAULT NULL,
  `Fname` varchar(20) DEFAULT NULL,
  `Mi` varchar(20) DEFAULT NULL,
  `Gender` varchar(6) DEFAULT NULL,
  `Aid` decimal(6,0) DEFAULT NULL,
  PRIMARY KEY (`CID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `client` */

insert  into `client`(`CID`,`Lname`,`Fname`,`Mi`,`Gender`,`Aid`) values 
(1001,'Panganiban','Angelica','S','Female',303),
(1002,'Dantes','Mario','D','Male',301),
(1003,'Gomez','Ricardo','O','Male',305),
(1004,'Cuneta','Shane','T','Female',304),
(1005,'Santos','Mark','W','Male',302),
(1006,'Zuniga','Ellaine','Y','Female',304),
(1007,'Castro','Emilio','P','Male',301),
(1008,'Sebastian','Flerry','O','Female',303),
(1009,'Escobar','Mario','G','Male',304),
(1010,'Pablo','Merry','S','Female',302);

/*Table structure for table `dept` */

DROP TABLE IF EXISTS `dept`;

CREATE TABLE `dept` (
  `DID` decimal(5,0) NOT NULL,
  `Description` varchar(50) DEFAULT NULL,
  `MID` decimal(5,0) DEFAULT NULL,
  PRIMARY KEY (`DID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `dept` */

insert  into `dept`(`DID`,`Description`,`MID`) values 
(501,'Marketing',702),
(502,'Human Resource',703),
(503,'Logistics',702);

/*Table structure for table `manager` */

DROP TABLE IF EXISTS `manager`;

CREATE TABLE `manager` (
  `MID` decimal(5,0) NOT NULL,
  `Lname` varchar(20) DEFAULT NULL,
  `Fname` varchar(20) DEFAULT NULL,
  `Mi` varchar(20) DEFAULT NULL,
  `Gender` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`MID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `manager` */

insert  into `manager`(`MID`,`Lname`,`Fname`,`Mi`,`Gender`) values 
(701,'Roldan','Ronald','A','Male'),
(702,'Rebollido','Kizaah','B','Female'),
(703,'Villalon','Jhun','S','Male');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
