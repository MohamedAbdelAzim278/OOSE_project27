-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 25, 2022 at 02:12 AM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospitalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `DocId` int NOT NULL,
  `PatientId` int NOT NULL,
  `isDeleted` int NOT NULL,
  `ReceptionistID` int NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `DocId` (`DocId`,`PatientId`),
  KEY `PatientId` (`PatientId`),
  KEY `ReceptionistID` (`ReceptionistID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`ID`, `DocId`, `PatientId`, `isDeleted`, `ReceptionistID`) VALUES
(4, 1, 2, 0, 4),
(7, 1, 1, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `appointmentdetails`
--

DROP TABLE IF EXISTS `appointmentdetails`;
CREATE TABLE IF NOT EXISTS `appointmentdetails` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `StartDate` varchar(200) NOT NULL,
  `Cost` int NOT NULL,
  `roomID` int NOT NULL,
  `bedNumber` int NOT NULL,
  `App_ID` int NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `App_ID` (`App_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `appointmentdetails`
--

INSERT INTO `appointmentdetails` (`ID`, `StartDate`, `Cost`, `roomID`, `bedNumber`, `App_ID`) VALUES
(3, '2.000000000', 423, 123, 2, 4),
(6, '3/8', 123, 123, 12, 7);

-- --------------------------------------------------------

--
-- Table structure for table `errormessages`
--

DROP TABLE IF EXISTS `errormessages`;
CREATE TABLE IF NOT EXISTS `errormessages` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Error` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `errormessages`
--

INSERT INTO `errormessages` (`ID`, `Error`) VALUES
(1, 'Invalid Username or Password'),
(2, 'Empty fields'),
(3, 'Passwords Doesn\'t Match');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
CREATE TABLE IF NOT EXISTS `languages` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

DROP TABLE IF EXISTS `links`;
CREATE TABLE IF NOT EXISTS `links` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `PhysicalAddress` varchar(200) NOT NULL,
  `linkAddressName` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`ID`, `PhysicalAddress`, `linkAddressName`) VALUES
(1, '\"..\\ViewMedicalHistory\\ReadView.html\"', 'View MedicalHistory'),
(2, '\"..\\CreateMedicalHistory\\View2.php\"', 'MedicalHistory'),
(5, '\"..\\UserCreation\\userCreationView.php\"', 'Create User'),
(6, '\"..\\Read\\ReadView.php\"', 'Read'),
(7, '\"..\\Delete\\DeleteView.html\"', 'Delete Appointment'),
(8, '\"..\\Appointment\\AppointmentPage.php\"', 'Add appointment'),
(9, '\"..\\UserType\\UserTypeView.html\"', 'Create New User Type'),
(10, '\"..\\Update\\UpdateRowView.php\"', 'Update Appointment'),
(11, '\"..\\Medication\\View.php\"', 'Add Categories'),
(12, '\"..\\AddTreatment\\View.php\"', 'Add Treatment');

-- --------------------------------------------------------

--
-- Table structure for table `medicalhistory`
--

DROP TABLE IF EXISTS `medicalhistory`;
CREATE TABLE IF NOT EXISTS `medicalhistory` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `DateTimeStamp` varchar(200) NOT NULL,
  `Surgeries` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `VitalSigns` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `medicalhistory`
--

INSERT INTO `medicalhistory` (`ID`, `DateTimeStamp`, `Surgeries`, `VitalSigns`) VALUES
(1, '2/12/1995', ' heart', ' Death'),
(2, '9/84/322', ' Brain', ' Sneeze'),
(3, '9884/322', ' Death', ' humor'),
(4, '2541', ' heart', ' Sneeze'),
(5, '9884/322', ' Death', ' new');

-- --------------------------------------------------------

--
-- Table structure for table `medication`
--

DROP TABLE IF EXISTS `medication`;
CREATE TABLE IF NOT EXISTS `medication` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `parentID` int DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `parentID` (`parentID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `medication`
--

INSERT INTO `medication` (`ID`, `Name`, `parentID`) VALUES
(1, 'Fever', NULL),
(2, 'Cough', 1),
(3, 'hair', NULL),
(4, 'skin', NULL),
(5, 'panadol', 2),
(6, 'no cough', 1),
(8, 'panadol extra', 2);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  `DOB` varchar(200) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `phoneNumber` int NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`ID`, `Name`, `DOB`, `LastName`, `phoneNumber`) VALUES
(1, 'Hassan', '27/8/2001', 'Hossam', 1121267129),
(2, 'khaled', '5/15/2031', 'hassan', 284150);

-- --------------------------------------------------------

--
-- Table structure for table `patientmedicalhistory`
--

DROP TABLE IF EXISTS `patientmedicalhistory`;
CREATE TABLE IF NOT EXISTS `patientmedicalhistory` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `PatientId` int NOT NULL,
  `MedicalHistoryID` int NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `PatientId` (`PatientId`,`MedicalHistoryID`),
  KEY `MedicalHistoryID` (`MedicalHistoryID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `patientmedicalhistory`
--

INSERT INTO `patientmedicalhistory` (`ID`, `PatientId`, `MedicalHistoryID`) VALUES
(5, 1, 3),
(7, 1, 5),
(6, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `testingmethodoption`
--

DROP TABLE IF EXISTS `testingmethodoption`;
CREATE TABLE IF NOT EXISTS `testingmethodoption` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `TMID` int NOT NULL,
  `OptionID` int NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `TMID` (`TMID`,`OptionID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testingmethodoptionvalue`
--

DROP TABLE IF EXISTS `testingmethodoptionvalue`;
CREATE TABLE IF NOT EXISTS `testingmethodoptionvalue` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `OptionID` int NOT NULL,
  `Value` int NOT NULL,
  `orderID` int NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `OptionID` (`OptionID`,`orderID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testingmethods`
--

DROP TABLE IF EXISTS `testingmethods`;
CREATE TABLE IF NOT EXISTS `testingmethods` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testingoptions`
--

DROP TABLE IF EXISTS `testingoptions`;
CREATE TABLE IF NOT EXISTS `testingoptions` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  `Type` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testorder`
--

DROP TABLE IF EXISTS `testorder`;
CREATE TABLE IF NOT EXISTS `testorder` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `NurseID` int NOT NULL,
  `PatientId` int NOT NULL,
  `DateTimeStamp` date NOT NULL,
  `TotalAmmount` int NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `NurseID` (`NurseID`,`PatientId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testorderdetails`
--

DROP TABLE IF EXISTS `testorderdetails`;
CREATE TABLE IF NOT EXISTS `testorderdetails` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `testOrderId` int NOT NULL,
  `testingMethodId` int NOT NULL,
  `Cost` int NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `testOrderId` (`testOrderId`,`testingMethodId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `translation`
--

DROP TABLE IF EXISTS `translation`;
CREATE TABLE IF NOT EXISTS `translation` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `TranslationName` varchar(200) NOT NULL,
  `FirstLangCode` int NOT NULL,
  `SecondLangCode` int NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FirstLangCode` (`FirstLangCode`,`SecondLangCode`),
  KEY `SecondLangCode` (`SecondLangCode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `translationdetails`
--

DROP TABLE IF EXISTS `translationdetails`;
CREATE TABLE IF NOT EXISTS `translationdetails` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `TransID` int NOT NULL,
  `WordID` int NOT NULL,
  `TransWordID` int NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `TransID` (`TransID`,`WordID`),
  KEY `TransWordID` (`TransWordID`),
  KEY `WordID` (`WordID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `firstName` varchar(200) NOT NULL,
  `lastName` varchar(200) NOT NULL,
  `DOB` varchar(200) NOT NULL,
  `UserTypeId` int NOT NULL,
  `Username` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phoneNumber` int NOT NULL,
  `Day_Working` varchar(200) NOT NULL,
  `Start_Time` varchar(100) NOT NULL,
  `End_Time` varchar(100) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `salary` int NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `UserTypeId` (`UserTypeId`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `firstName`, `lastName`, `DOB`, `UserTypeId`, `Username`, `Password`, `email`, `phoneNumber`, `Day_Working`, `Start_Time`, `End_Time`, `sex`, `salary`) VALUES
(1, 'Mohamed', 'A.', '27/8/2001', 1, 'azIIIm', '$2y$10$8nmIal0jv.l8xcyGQ9j9s./VrMyLmz5WlPIwFPQupHVsziKi06Uy6', 'mohamed.abdelazim2@msa.edu.eg', 1121267129, '5', '10', '2', 'male', 11000),
(2, 'Noor', 'Ashraf', '5/12/2001', 2, 'uchiha', '$2y$10$MHDEtOWyKmjHL5SQsVD8Q.fVRHXHnr7io6ydcmuZrQwZqlOPqCI7S', 'nnnn@yahoo.com', 102938, '6', '14', '20', 'male', 8000),
(3, 'Kerolos', 'Hany', '5/12/2001', 3, 'twitar', '$2y$10$hO6qltzZ2i6XfNbKznqZ1eedywvqNxnP61qSMuBYWzBb4qrsArc2W', 'kerolos.hany@msa.edu.eg', 102938, '2', '14', '14:30', 'male', 8000),
(4, 'youssef', 'ayman', '5/12/2001', 4, 'jaxo', '$2y$10$3pTSvy5PA1dVFBMWwVn6Ruk3BMorBsYZqHMIxirgO0vUd5PeAu3H.', 'Youssef.ayman11@msa.edu.eg', 102938, '3', '14', '20', 'male', 8000),
(5, 'Mark', 'Wael', '8/9/7841', 1, 'Mark', '$2y$10$qDg/71fN3gDwn5b0THoPieVZtQw/l3Z8Lz.R1DOkj1jkRv/lVTuCu', 'mark@mark.mark', 11234, '12', '12', '12', 'male', 2222),
(10, 'doc', '12', '123', 1, '123', '123', '123', 1215, 'szcs', 'asdf', 'asd', 'female', 8546);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

DROP TABLE IF EXISTS `usertype`;
CREATE TABLE IF NOT EXISTS `usertype` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`ID`, `Name`) VALUES
(1, 'Doctor'),
(2, 'Nurse'),
(3, 'Receptionist'),
(4, 'Patient');

-- --------------------------------------------------------

--
-- Table structure for table `usertype_links`
--

DROP TABLE IF EXISTS `usertype_links`;
CREATE TABLE IF NOT EXISTS `usertype_links` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `LinksID` int NOT NULL,
  `UserTypeId` int NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `LinksID` (`LinksID`,`UserTypeId`),
  KEY `UserTypeId` (`UserTypeId`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `usertype_links`
--

INSERT INTO `usertype_links` (`ID`, `LinksID`, `UserTypeId`) VALUES
(1, 1, 1),
(2, 2, 2),
(5, 5, 3),
(6, 6, 1),
(7, 7, 3),
(8, 8, 3),
(9, 9, 3),
(10, 11, 1),
(11, 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `word`
--

DROP TABLE IF EXISTS `word`;
CREATE TABLE IF NOT EXISTS `word` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `word` varchar(200) NOT NULL,
  `LanguageID` int NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`DocId`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`PatientId`) REFERENCES `patient` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appointment_ibfk_3` FOREIGN KEY (`ReceptionistID`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `appointmentdetails`
--
ALTER TABLE `appointmentdetails`
  ADD CONSTRAINT `appointmentdetails_ibfk_1` FOREIGN KEY (`App_ID`) REFERENCES `appointment` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `medication`
--
ALTER TABLE `medication`
  ADD CONSTRAINT `medication_ibfk_1` FOREIGN KEY (`parentID`) REFERENCES `medication` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patientmedicalhistory`
--
ALTER TABLE `patientmedicalhistory`
  ADD CONSTRAINT `patientmedicalhistory_ibfk_1` FOREIGN KEY (`PatientId`) REFERENCES `patient` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `patientmedicalhistory_ibfk_2` FOREIGN KEY (`MedicalHistoryID`) REFERENCES `medicalhistory` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `translation`
--
ALTER TABLE `translation`
  ADD CONSTRAINT `translation_ibfk_1` FOREIGN KEY (`FirstLangCode`) REFERENCES `languages` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `translation_ibfk_2` FOREIGN KEY (`SecondLangCode`) REFERENCES `languages` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `translationdetails`
--
ALTER TABLE `translationdetails`
  ADD CONSTRAINT `translationdetails_ibfk_1` FOREIGN KEY (`TransID`) REFERENCES `translation` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `translationdetails_ibfk_2` FOREIGN KEY (`WordID`) REFERENCES `word` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `translationdetails_ibfk_3` FOREIGN KEY (`TransWordID`) REFERENCES `word` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`UserTypeId`) REFERENCES `usertype` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `usertype_links`
--
ALTER TABLE `usertype_links`
  ADD CONSTRAINT `usertype_links_ibfk_1` FOREIGN KEY (`UserTypeId`) REFERENCES `usertype` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usertype_links_ibfk_2` FOREIGN KEY (`LinksID`) REFERENCES `links` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
