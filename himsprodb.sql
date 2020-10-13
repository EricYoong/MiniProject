-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 30, 2018 at 11:05 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `himsprodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admissiontb`
--

CREATE TABLE `admissiontb` (
  `id` int(11) NOT NULL,
  `p_name` varchar(20) NOT NULL,
  `p_DOB` varchar(11) NOT NULL,
  `p_phone` int(11) NOT NULL,
  `p_address` varchar(30) NOT NULL,
  `p_medicalcondition` varchar(255) NOT NULL,
  `cp_name` varchar(20) NOT NULL,
  `cp_phone` int(11) NOT NULL,
  `cp_relationship` varchar(20) NOT NULL,
  `ad_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admissiontb`
--

INSERT INTO `admissiontb` (`id`, `p_name`, `p_DOB`, `p_phone`, `p_address`, `p_medicalcondition`, `cp_name`, `cp_phone`, `cp_relationship`, `ad_date`) VALUES
(1, '234324', '2018-11-09', 2147483647, '234234', '234234234', '234234', 2147483647, 'family', '2018-11-29'),
(2, '123123123', '3123-12-31', 1231231233, '124', '124', '124', 1231231231, 'family', '2018-11-29'),
(3, 'King Yong', '1958-11-19', 104610283, 'ipoh', 'HYPERTENSION', 'ERIC YOONG MIN CHUN', 174610283, 'family', '2018-11-29');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `doctorSpecialization` varchar(255) NOT NULL,
  `doctorId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `consultancyFees` int(11) NOT NULL,
  `appointmentDate` varchar(255) NOT NULL,
  `appointmentTime` varchar(255) NOT NULL,
  `postingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userStatus` int(11) NOT NULL,
  `doctorStatus` int(11) NOT NULL,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `doctorSpecialization`, `doctorId`, `userId`, `consultancyFees`, `appointmentDate`, `appointmentTime`, `postingDate`, `userStatus`, `doctorStatus`, `updationDate`) VALUES
(1, 'Dentist', 1, 1, 500, '2016-12-31', '09:25', '2017-01-01 00:29:02', 1, 0, ''),
(2, 'Homeopath', 4, 5, 700, '2017-01-11', '14:10', '2017-01-07 08:02:58', 0, 1, ''),
(3, 'Gynecologist/Obstetrician', 8, 10, 2147483647, '2018-11-27', '12:00 PM', '2018-11-26 15:57:19', 1, 0, ''),
(4, 'Gynecologist/Obstetrician', 8, 10, 2147483647, '2018-11-30', '3:15 PM', '2018-11-27 07:05:29', 1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `billtb`
--

CREATE TABLE `billtb` (
  `B_ID` varchar(6) NOT NULL,
  `P_ID` varchar(6) DEFAULT NULL,
  `B_SURID` varchar(6) DEFAULT NULL,
  `B_UBILLID` varchar(6) DEFAULT NULL,
  `B_MEDID` varchar(6) DEFAULT NULL,
  `B_DATE` date NOT NULL,
  `B_TOTALAMOUNT` double(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billtb`
--

INSERT INTO `billtb` (`B_ID`, `P_ID`, `B_SURID`, `B_UBILLID`, `B_MEDID`, `B_DATE`, `B_TOTALAMOUNT`) VALUES
('B00001', 'P00001', 'SU0001', 'U00001', 'M00001', '2015-02-04', 24600.00),
('B00002', 'P00002', 'SU0002', 'U00002', 'M00002', '2016-03-02', 45780.00),
('B00003', 'P00003', 'SU0003', 'U00003', 'M00003', '2016-04-01', 66860.00),
('B00004', 'P00004', 'SU0004', 'U00004', 'M00004', '2017-05-01', 19200.00),
('B00005', 'P00005', 'SU0005', 'U00005', 'M00005', '2018-06-06', 61700.00),
('B00006', 'P00006', 'SU0006', 'U00006', 'M00006', '2015-03-01', 30300.00),
('B00007', 'P00007', 'SU0007', 'U00007', 'M00007', '2014-11-20', 51550.00),
('B00008', 'P00008', 'SU0008', 'U00008', 'M00008', '2014-10-10', 90500.00),
('B00009', 'P00009', 'SU0009', 'U00009', 'M00009', '2014-05-18', 16700.00),
('B00010', 'P00010', 'SU0010', 'U00010', 'M00010', '2013-02-25', 53700.00),
('B00011', 'P00011', 'SU0011', 'U00011', 'M00011', '2013-02-15', 7760.00),
('B00012', 'P00012', 'SU0012', 'U00012', 'M00012', '2015-04-01', 39020.00),
('B00013', 'P00013', 'SU0013', 'U00013', 'M00013', '2015-02-20', 25960.00),
('B00014', 'P00014', 'SU0014', 'U00014', 'M00014', '2015-06-26', 21390.00),
('B00015', 'P00015', 'SU0015', 'U00015', 'M00015', '2015-07-26', 59920.00),
('B00016', 'P00016', 'SU0016', 'U00016', 'M00016', '2017-05-22', 33900.00),
('B00017', 'P00017', 'SU0017', 'U00017', 'M00017', '2017-05-10', 57650.00),
('B00018', 'P00018', 'SU0018', 'U00018', 'M00018', '2017-07-12', 75100.00),
('B00019', 'P00019', 'SU0019', 'U00019', 'M00019', '2016-02-16', 15380.00),
('B00020', 'P00020', 'SU0020', 'U00020', 'M00020', '2016-03-20', 6760.00);

-- --------------------------------------------------------

--
-- Table structure for table `departmenttb`
--

CREATE TABLE `departmenttb` (
  `D_ID` varchar(6) NOT NULL,
  `D_NAME` varchar(20) NOT NULL,
  `D_PHONE` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departmenttb`
--

INSERT INTO `departmenttb` (`D_ID`, `D_NAME`, `D_PHONE`) VALUES
('D00001', 'Cardiology', 43990808),
('D00002', 'Accident and Emergen', 43990818),
('D00003', 'Finance', 43990828),
('D00004', 'General Surgery', 43558888),
('D00005', 'Human Resources', 43558838);

-- --------------------------------------------------------

--
-- Table structure for table `diagnosistb`
--

CREATE TABLE `diagnosistb` (
  `DIA_ID` varchar(6) NOT NULL,
  `DIA_DISEASEID` varchar(6) DEFAULT NULL,
  `DIA_DESCRIPTION` varchar(80) NOT NULL,
  `P_ID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diagnosistb`
--

INSERT INTO `diagnosistb` (`DIA_ID`, `DIA_DISEASEID`, `DIA_DESCRIPTION`, `P_ID`) VALUES
('DIA001', 'DS0001', 'Fever,Diarrhea,Fatigue,Muscle aches and Couging', 'P00001'),
('DIA002', 'DS0002', 'Light headedness', 'P00002'),
('DIA003', 'DS0003', 'Blood in the urine and vision problem', 'P00003'),
('DIA004', 'DS0004', 'Cold sweat, nausea and lightheadedness', 'P00004'),
('DIA005', 'DS0005', 'Facial drooping, arm weakness, difficulty with speech', 'P00005'),
('DIA006', 'DS0001', 'Fever,Diarrhea,Fatigue,Muscle aches and Couging', 'P00006'),
('DIA007', 'DS0002', 'Light headedness', 'P00007'),
('DIA008', 'DS0003', 'Blood in the urine and vision problem', 'P00008'),
('DIA009', 'DS0004', 'Cold sweat, nausea and lightheadedness', 'P00009'),
('DIA010', 'DS0005', 'Facial drooping, arm weakness, difficulty with speech', 'P00010'),
('DIA011', 'DS0001', 'Fever,Diarrhea,Fatigue,Muscle aches and Couging', 'P00011'),
('DIA012', 'DS0002', 'Light headedness', 'P00012'),
('DIA013', 'DS0003', 'Blood in the urine and vision problem', 'P00013'),
('DIA014', 'DS0004', 'Cold sweat, nausea and lightheadedness', 'P00014'),
('DIA015', 'DS0005', 'Facial drooping, arm weakness, difficulty with speech', 'P00015'),
('DIA016', 'DS0001', 'Fever,Diarrhea,Fatigue,Muscle aches and Couging', 'P00016'),
('DIA017', 'DS0002', 'Light headedness', 'P00017'),
('DIA018', 'DS0003', 'Blood in the urine and vision problem', 'P00018'),
('DIA019', 'DS0004', 'Cold sweat, nausea and lightheadedness', 'P00019'),
('DIA020', 'DS0005', 'Facial drooping, arm weakness, difficulty with speech', 'P00020');

-- --------------------------------------------------------

--
-- Table structure for table `discharge`
--

CREATE TABLE `discharge` (
  `id` int(11) NOT NULL,
  `p_id` varchar(255) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `doctor_id` varchar(11) NOT NULL,
  `create_discharge_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `agreed_discharge_time` varchar(255) DEFAULT NULL,
  `disagree_discharge_time` varchar(255) DEFAULT NULL,
  `doctor_status` int(11) NOT NULL,
  `wardAdmin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discharge`
--

INSERT INTO `discharge` (`id`, `p_id`, `user_id`, `doctor_id`, `create_discharge_time`, `agreed_discharge_time`, `disagree_discharge_time`, `doctor_status`, `wardAdmin_status`) VALUES
(9, 'U0001', 'W0001', 'D0001', '2018-11-27 06:55:44', '2018-11-27 16:50:19', '', 0, 1),
(28, 'P00001', 'S00006', 'S00001', '2018-11-30 15:03:07', '2018-11-30 23:03:21', NULL, 1, 1),
(29, 'P00009', 'S00006', 'S00001', '2018-11-30 15:03:09', NULL, '2018-11-30 23:03:28', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `diseasetb`
--

CREATE TABLE `diseasetb` (
  `DISEASE_ID` varchar(6) NOT NULL,
  `DISEASE_NAME` varchar(30) NOT NULL,
  `DISEASE_SYMPTOMS` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diseasetb`
--

INSERT INTO `diseasetb` (`DISEASE_ID`, `DISEASE_NAME`, `DISEASE_SYMPTOMS`) VALUES
('DS0001', 'Infectious', '\r\nFever,Diarrhea,Fatigue,Muscle aches and Couging\r'),
('DS0002', 'Low Blood Pressure', 'Light headedness, dizziness and fainting'),
('DS0003', 'High Blood Pressure (Hypertens', '\r\nSevere headaches, Fatigue, Difficulty breathing,'),
('DS0004', 'Heart Attack', 'Pain, Pressure, Squeezing, Shortness of breath, Co'),
('DS0005', 'Stroke', 'Facial drooping, arm weakness, difficulty with spe');

-- --------------------------------------------------------

--
-- Table structure for table `doctorslog`
--

CREATE TABLE `doctorslog` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userip` binary(16) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `logout` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorslog`
--

INSERT INTO `doctorslog` (`id`, `uid`, `username`, `userip`, `loginTime`, `logout`, `status`) VALUES
(1, 2, 'sarita@gmail.com', 0x30000000000000000000000000000000, '2017-01-06 05:53:31', '', 1),
(2, 0, 'admin', 0x3a3a3100000000000000000000000000, '2017-01-06 06:36:07', '', 0),
(3, 2, 'sarita@gmail.com', 0x3a3a3100000000000000000000000000, '2017-01-06 06:36:37', '06/01/2017 07:36:45', 1),
(4, 2, 'sarita@gmail.com', 0x3a3a3100000000000000000000000000, '2017-01-06 06:41:33', '12:11:46', 1),
(5, 2, 'sarita@gmail.com', 0x3a3a3100000000000000000000000000, '2017-01-06 06:55:16', '06-01-2017 12:27:47 PM', 1),
(6, 0, 'admin', 0x3a3a3100000000000000000000000000, '2017-01-06 07:07:12', '', 0),
(7, 0, 'info@w3gang.com', 0x3a3a3100000000000000000000000000, '2017-01-07 08:04:42', '', 0),
(8, 0, 'info@w3gang.com', 0x3a3a3100000000000000000000000000, '2017-01-07 08:04:55', '', 0),
(9, 2, 'sarita@gmail.com', 0x3a3a3100000000000000000000000000, '2017-01-07 08:05:54', '07-01-2017 01:36:28 PM', 1),
(10, 0, 'admin', 0x3a3a3100000000000000000000000000, '2018-11-26 14:20:31', '', 0),
(11, 7, 'test@demo.com', 0x3a3a3100000000000000000000000000, '2018-11-26 14:21:27', '', 1),
(12, 8, 'iskate@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-26 15:56:24', '26-11-2018 09:26:39 PM', 1),
(13, 8, 'iskate@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-26 15:57:47', '26-11-2018 09:28:28 PM', 1),
(14, 9, 'aaa@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-26 16:03:08', '26-11-2018 09:33:59 PM', 1),
(15, 0, 'admin', 0x3a3a3100000000000000000000000000, '2018-11-26 16:11:46', '', 0),
(16, 0, 'admin', 0x3a3a3100000000000000000000000000, '2018-11-27 15:09:46', '', 0),
(17, 0, 'admin', 0x3a3a3100000000000000000000000000, '2018-11-27 15:41:04', '', 0),
(18, 0, 'U00001', 0x34322e3138392e38332e323036000000, '2018-11-28 16:35:19', '', 0),
(19, 0, 'wa', 0x34322e3138392e38332e323036000000, '2018-11-28 18:22:01', '', 0),
(20, 0, 'wa', 0x34322e3138392e38332e323036000000, '2018-11-28 20:24:03', '', 0),
(21, 0, '', 0x34322e3138392e38332e323036000000, '2018-11-28 22:27:12', '', 0),
(22, 0, '', 0x34322e3138392e38332e323036000000, '2018-11-28 22:27:28', '', 0),
(23, 0, '', 0x34322e3138392e38332e323036000000, '2018-11-28 22:41:02', '', 0),
(24, 0, '', 0x34322e3138392e38332e323036000000, '2018-11-28 22:41:06', '', 0),
(25, 0, '', 0x34322e3138392e38332e323036000000, '2018-11-28 23:21:37', '', 0),
(26, 0, '', 0x3131332e3231302e3138352e32353100, '2018-11-29 00:50:52', '', 0),
(27, 0, '', 0x3131332e3231302e3138352e32353100, '2018-11-29 00:51:30', '', 0),
(28, 0, '', 0x3131332e3231302e3138352e32353100, '2018-11-29 00:53:48', '', 0),
(29, 0, '', 0x3131332e3231302e3138352e32353100, '2018-11-29 00:54:10', '', 0),
(30, 0, '', 0x3131332e3231302e3138352e32353100, '2018-11-29 01:02:25', '', 0),
(31, 0, '', 0x3131332e3231302e3138352e32353100, '2018-11-29 01:12:55', '', 0),
(32, 0, '', 0x3131332e3231302e3138352e32353100, '2018-11-29 01:12:58', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `doctorspecilization`
--

CREATE TABLE `doctorspecilization` (
  `id` int(11) NOT NULL,
  `specilization` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorspecilization`
--

INSERT INTO `doctorspecilization` (`id`, `specilization`, `creationDate`, `updationDate`) VALUES
(1, 'Gynecologist/Obstetrician', '2016-12-28 06:37:25', ''),
(2, 'General Physician', '2016-12-28 06:38:12', ''),
(3, 'Dermatologist', '2016-12-28 06:38:48', ''),
(4, 'Homeopath', '2016-12-28 06:39:26', ''),
(5, 'Ayurveda', '2016-12-28 06:39:51', ''),
(6, 'Dentist', '2016-12-28 06:40:08', ''),
(7, 'Ear-Nose-Throat (Ent) Specialist', '2016-12-28 06:41:18', ''),
(9, 'Demo test', '2016-12-28 07:37:39', '28-12-2016 01:28:42 PM'),
(10, 'Bones Specialist demo', '2017-01-07 08:07:53', '07-01-2017 01:38:04 PM');

-- --------------------------------------------------------

--
-- Table structure for table `medical_billingtb`
--

CREATE TABLE `medical_billingtb` (
  `M_ID` varchar(6) NOT NULL,
  `P_ID` varchar(6) DEFAULT NULL,
  `M_DATE` date NOT NULL,
  `M_DESC` varchar(30) NOT NULL,
  `M_PRICE` double(7,2) NOT NULL,
  `paid_status` varchar(255) NOT NULL DEFAULT 'Not Paid'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical_billingtb`
--

INSERT INTO `medical_billingtb` (`M_ID`, `P_ID`, `M_DATE`, `M_DESC`, `M_PRICE`, `paid_status`) VALUES
('M00001', 'P00001', '2015-02-01', 'Painkiller, Naprosyn', 200.00, 'Paid'),
('M00002', 'P00002', '2016-03-01', 'Antibiotic, Paracetamol', 500.00, 'Paid'),
('M00003', 'P00003', '2016-03-31', 'Paracetamol', 260.00, 'Paid'),
('M00004', 'P00004', '2017-04-30', 'Antibiotic, Naprosyn', 400.00, 'Paid'),
('M00005', 'P00005', '2018-06-01', 'Tylenol', 1200.00, 'Paid'),
('M00006', 'P00006', '2015-02-15', 'Dextroamphetamine', 300.00, 'Paid'),
('M00007', 'P00007', '2014-10-31', 'Naprosyn', 250.00, 'Paid'),
('M00008', 'P00008', '2014-10-03', 'Ritalin', 340.00, 'Paid'),
('M00009', 'P00009', '2014-05-01', 'Paracetamol', 260.00, 'Paid'),
('M00010', 'P00010', '2013-02-15', 'Painkiller', 100.00, 'Paid'),
('M00011', 'P00011', '2013-02-05', 'Paracetamol', 260.00, 'Paid'),
('M00012', 'P00012', '2015-03-17', 'Ambien', 120.00, 'Paid'),
('M00013', 'P00013', '2015-02-16', 'Xanax', 320.00, 'Paid'),
('M00014', 'P00014', '2015-06-15', 'Valium', 350.00, 'Paid'),
('M00015', 'P00015', '2015-07-05', 'Vicodin', 400.00, 'Paid'),
('M00016', 'P00016', '2017-05-15', 'Codeine,Oxycodone', 900.00, 'Paid'),
('M00017', 'P00017', '2017-04-25', 'Ritalin,Xanax', 850.00, 'Paid'),
('M00018', 'P00018', '2017-06-26', 'Dextroamphetamine', 600.00, 'Paid'),
('M00019', 'P00019', '2016-02-09', 'Tylenol,Antibiotic', 1500.00, 'Paid'),
('M00020', 'P00020', '2016-03-15', 'Painkiller,Paracetamol', 400.00, 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `patienttb`
--

CREATE TABLE `patienttb` (
  `P_ID` varchar(6) NOT NULL,
  `P_PASSWORD` varchar(50) NOT NULL,
  `P_NAME` varchar(30) NOT NULL,
  `P_GENDER` char(1) NOT NULL,
  `P_DOB` date NOT NULL,
  `P_PHONE` int(10) NOT NULL,
  `P_ADDRESS` varchar(50) NOT NULL,
  `U_ID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patienttb`
--

INSERT INTO `patienttb` (`P_ID`, `P_PASSWORD`, `P_NAME`, `P_GENDER`, `P_DOB`, `P_PHONE`, `P_ADDRESS`, `U_ID`) VALUES
('mgteh1', 'e10adc3949ba59abbe56e057f20f883e', '124', 'F', '0000-00-00', 0, '124', 'mgteh1998@gmail.com'),
('P00001', 'e10adc3949ba59abbe56e057f20f883e', 'Tan Kok', 'M', '1998-03-06', 174552244, 'Penang', 'kokt@gmail.com'),
('P00002', 'e10adc3949ba59abbe56e057f20f883e', 'Tan Miin', 'F', '1988-12-10', 164455566, 'Klang', 'miint@gmail.com'),
('P00003', 'e10adc3949ba59abbe56e057f20f883e', 'Lee Qiao', 'F', '1977-05-05', 167778888, 'Penang', 'qiaol@gmail.com'),
('P00004', 'e10adc3949ba59abbe56e057f20f883e', 'Lim Min', 'F', '1976-06-12', 115554444, 'Penang', 'minl@gmail.com'),
('P00005', 'e10adc3949ba59abbe56e057f20f883e', 'Lim Bao', 'M', '1978-10-15', 124445554, 'Kedah', 'baol@gmail.com'),
('P00006', 'e10adc3949ba59abbe56e057f20f883e', 'Ben Qing', 'M', '1998-04-05', 123455688, 'Johor', 'benq@gmail.com'),
('P00007', 'e10adc3949ba59abbe56e057f20f883e', 'Mark Quan', 'M', '1995-03-04', 555666888, 'Tangkak', 'markq@gmail.com'),
('P00008', 'e10adc3949ba59abbe56e057f20f883e', 'Lily Kuan', 'F', '1998-04-05', 787854561, 'Selangor', 'lilyk@gmail.com'),
('P00009', 'e10adc3949ba59abbe56e057f20f883e', 'Louise Wong', 'F', '1995-03-04', 451635152, 'Kampar', 'louisew@gmail.com'),
('P00010', 'e10adc3949ba59abbe56e057f20f883e', 'Cony Liew', 'F', '1993-04-05', 565612124, 'Mersing', 'conyl@gmail.com'),
('P00011', 'e10adc3949ba59abbe56e057f20f883e', 'Venus Fan', 'F', '1992-03-04', 595956565, 'Ipoh', 'venusf@gmail.com'),
('P00012', 'e10adc3949ba59abbe56e057f20f883e', 'Jess Ling', 'F', '1987-03-04', 161645783, 'Selangor', 'jessl@gmail.com'),
('P00013', 'e10adc3949ba59abbe56e057f20f883e', 'Bruce King', 'M', '1988-03-04', 474789895, 'Ipoh', 'brucek@gmail.com'),
('P00014', 'e10adc3949ba59abbe56e057f20f883e', 'Albert Yo', 'M', '1987-03-04', 636354582, 'Selangor', 'alberty@gmail.com'),
('P00015', 'e35cf7b66449df565f93c607d5a81d09', 'Mark Lee', 'M', '1980-03-04', 484859592, 'Kampar', 'markl@gmail.com'),
('P00016', 'a3f0bec59cebeb60553ec80bbfd5dfdf', 'James Bond', 'M', '1988-05-05', 151526260, 'Selangor', 'jamesb@gmail.com'),
('P00017', 'e35cf7b66449df565f93c607d5a81d09', 'Ben Wong', 'M', '1978-05-05', 898956564, 'Selangor', 'benw@gmail.com'),
('P00018', '71b3b26aaa319e0cdf6fdb8429c112b0', 'Benson Lee', 'M', '1990-03-04', 784565984, 'Selangor', 'bensonl@gmail.com'),
('P00019', '85e4324d8e5af11d71d5254d9178dd65', 'Lily Mok', 'F', '1992-03-04', 787849495, 'Johor', 'lilym@gmail.com'),
('P00020', '0d65843ecc89fa6c3cebe17f36180b98', 'Louise Lim', 'F', '1989-03-04', 456789123, 'Kampar', 'louisel@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `servicetb`
--

CREATE TABLE `servicetb` (
  `SER_ID` varchar(6) NOT NULL,
  `D_ID` varchar(6) DEFAULT NULL,
  `S_NAME` varchar(30) NOT NULL,
  `S_DESCRIPTION` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicetb`
--

INSERT INTO `servicetb` (`SER_ID`, `D_ID`, `S_NAME`, `S_DESCRIPTION`) VALUES
('S00001', 'D00002', 'Blood Test', 'detect blood diseases and diso'),
('S00002', 'D00002', 'Chest X-rays', 'can detect cancer, infection o'),
('S00003', 'D00002', 'Fasting Blood Sugar', 'Diabetes is typically diagnose'),
('S00004', 'D00002', 'Ultrasound Abdomen', 'Find the cause of abdominal pa'),
('S00005', 'D00001', 'Electrocardiogram(ECG)', 'records the hearts rhythm and ');

-- --------------------------------------------------------

--
-- Table structure for table `stafftb`
--

CREATE TABLE `stafftb` (
  `S_ID` varchar(6) NOT NULL,
  `U_ID` varchar(255) NOT NULL,
  `S_PASSWORD` varchar(50) NOT NULL,
  `D_ID` varchar(6) DEFAULT NULL,
  `S_NAME` varchar(30) NOT NULL,
  `S_PHONE` int(10) NOT NULL,
  `S_ADDRESS` varchar(50) NOT NULL,
  `S_GENDER` char(1) NOT NULL,
  `S_JOB` varchar(15) NOT NULL,
  `S_LEVEL` varchar(30) NOT NULL,
  `S_WORKHOUR` int(2) NOT NULL,
  `S_SALARY` double(2,0) NOT NULL,
  `S_DOB` date NOT NULL,
  `specilization` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stafftb`
--

INSERT INTO `stafftb` (`S_ID`, `U_ID`, `S_PASSWORD`, `D_ID`, `S_NAME`, `S_PHONE`, `S_ADDRESS`, `S_GENDER`, `S_JOB`, `S_LEVEL`, `S_WORKHOUR`, `S_SALARY`, `S_DOB`, `specilization`) VALUES
('mgteh1', 'mgteh1998@gmai.com', 'e10adc3949ba59abbe56e057f20f883e', 'D00002', '124', 129759715, '124', 'm', 'Doctor', 'Manager', 12, 99, '0000-00-00', 'Dermatologist'),
('S00001', 'zhlee@hmail.com', '123456', 'D00001', 'Lee Zi Mao', 174203300, 'Penang', 'M', 'Doctor', 'Manager', 56, 99, '1986-08-07', 'Homeopath'),
('S00002', 'eric@gggg.com', '234567', 'D00002', 'Eric Moon', 161113344, 'Kuala Lumpur', 'F', 'Nurse', 'NormalEmployee', 56, 99, '1970-10-01', NULL),
('S00003', 'khaw@gmail.com', '345678', 'D00003', 'Khaw Chee', 144667788, 'Klang', 'M', 'Nurse', 'NormalEmployee', 56, 99, '1975-11-10', NULL),
('S00004', 'low@gmail.com', '456789', 'D00004', 'Low Chong', 185558866, 'Ipoh', 'M', 'Doctor', 'ManagerAssistant', 58, 99, '1977-02-14', 'Gynecologist'),
('S00005', 'teh@gmail.com', '567890', 'D00005', 'Teh Ming Hua', 118887788, 'Johor', 'F', 'HR', 'HumanResourcesManager', 56, 99, '1987-03-06', NULL),
('S00006', 'eric@gmail.com', '123456', 'D00005', 'Eric', 104610283, 'fsfsagsdfgfshdfhsdg', 'M', 'WardAdmin', 'Manager', 56, 99, '1990-06-05', NULL),
('teh1@g', 'teh1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'D00002', 'Alvin', 129759715, 'Klang', 'M', 'Doctor', 'Manager', 15, 99, '2018-11-12', 'General Physician');

-- --------------------------------------------------------

--
-- Table structure for table `surgery_billingtb`
--

CREATE TABLE `surgery_billingtb` (
  `SUR_ID` varchar(6) NOT NULL,
  `P_ID` varchar(6) DEFAULT NULL,
  `SUR_DATE` date DEFAULT NULL,
  `SUR_DESC` varchar(30) NOT NULL,
  `SUR_PRICE` double(7,2) NOT NULL,
  `paid_status` varchar(255) NOT NULL DEFAULT 'Not Paid'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surgery_billingtb`
--

INSERT INTO `surgery_billingtb` (`SUR_ID`, `P_ID`, `SUR_DATE`, `SUR_DESC`, `SUR_PRICE`, `paid_status`) VALUES
('SU0001', 'P00001', '2015-02-04', 'Arthroscopy', 24000.00, 'Paid'),
('SU0002', 'P00002', '2016-03-02', 'Breast Biopsy', 44800.00, 'Paid'),
('SU0003', 'P00003', '2016-04-01', 'Burn Excision/Debridement', 66000.00, 'Paid'),
('SU0004', 'P00004', '2017-05-01', 'Cataract Surgery', 18000.00, 'Paid'),
('SU0005', 'P00005', '2018-06-06', 'Circumcision', 55000.00, 'Paid'),
('SU0006', 'P00006', '2015-02-15', 'Arthroscopy', 20000.00, 'Paid'),
('SU0007', 'P00007', '2014-10-31', 'Breast Biopsy', 45000.00, 'Paid'),
('SU0008', 'P00008', '2014-10-03', 'Burn Excision/Debridement', 88000.00, 'Paid'),
('SU0009', 'P00009', '2014-05-01', 'Cataract Surgery', 15000.00, 'Paid'),
('SU0010', 'P00010', '2013-02-15', 'Circumcision', 50000.00, 'Paid'),
('SU0011', 'P00011', '2013-02-05', 'Arthroscopy', 2000.00, 'Paid'),
('SU0012', 'P00012', '2015-03-17', 'Breast Biopsy', 33800.00, 'Paid'),
('SU0013', 'P00013', '2015-02-16', 'Burn Excision/Debridement', 25000.00, 'Paid'),
('SU0014', 'P00014', '2015-06-15', 'Cataract Surgery', 20000.00, 'Paid'),
('SU0015', 'P00015', '2015-07-05', 'Circumcision', 54000.00, 'Paid'),
('SU0016', 'P00016', '2017-05-15', 'Arthroscopy', 26000.00, 'Paid'),
('SU0017', 'P00017', '2017-04-25', 'Breast Biopsy', 47800.00, 'Paid'),
('SU0018', 'P00018', '2017-06-26', 'Burn Excision/Debridement', 65000.00, 'Paid'),
('SU0019', 'P00019', '2016-02-09', 'Cataract Surgery', 11000.00, 'Paid'),
('SU0020', 'P00020', '2016-03-15', 'Circumcision', 5000.00, 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `transactiontb`
--

CREATE TABLE `transactiontb` (
  `T_ID` varchar(6) NOT NULL,
  `P_ID` varchar(6) DEFAULT NULL,
  `T_DISCHARGEBY` varchar(6) DEFAULT NULL,
  `T_ADMITDATE` date NOT NULL,
  `T_ADMITTIME` time NOT NULL,
  `T_DISCHARGEDATE` date DEFAULT NULL,
  `T_DISCHARGETIME` time DEFAULT NULL,
  `handleby` varchar(6) DEFAULT NULL,
  `paid_status` varchar(255) NOT NULL DEFAULT 'Not Paid'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactiontb`
--

INSERT INTO `transactiontb` (`T_ID`, `P_ID`, `T_DISCHARGEBY`, `T_ADMITDATE`, `T_ADMITTIME`, `T_DISCHARGEDATE`, `T_DISCHARGETIME`, `handleby`, `paid_status`) VALUES
('T00001', 'P00001', 'S00001', '2015-01-30', '09:00:00', '2015-02-04', '14:00:00', 'S00001', 'Paid'),
('T00002', 'P00002', 'S00001', '2016-02-28', '14:00:00', '2016-03-02', '14:30:00', 'S00001', 'Paid'),
('T00003', 'P00003', 'S00001', '2016-03-30', '15:00:00', '2016-04-01', '12:00:00', 'S00001', 'Paid'),
('T00004', 'P00004', 'S00001', '2017-04-30', '02:00:00', NULL, NULL, 'S00001', 'Not Paid'),
('T00005', 'P00005', 'S00001', '2018-05-27', '20:00:00', NULL, NULL, 'S00001', 'Not Paid'),
('T00006', 'P00006', 'S00001', '2015-02-10', '23:08:08', '2015-03-01', '10:00:00', 'S00001', 'Paid'),
('T00007', 'P00007', 'S00004', '2014-10-30', '14:00:00', '2014-11-20', '11:00:00', 'S00004', 'Paid'),
('T00008', 'P00008', 'S00001', '2014-10-01', '16:00:00', '2014-10-10', '10:00:00', 'S00001', 'Paid'),
('T00009', 'P00009', 'S00001', '2014-04-30', '16:00:00', '2014-05-18', '10:50:00', 'S00001', 'Paid'),
('T00010', 'P00010', 'S00001', '2013-02-10', '01:06:07', '2013-02-25', '14:09:06', 'S00001', 'Paid'),
('T00011', 'P00011', 'S00004', '2013-02-04', '09:05:12', '2013-02-15', '13:08:07', 'S00004', 'Paid'),
('T00012', 'P00012', 'S00004', '2015-03-15', '12:05:12', '2015-04-01', '10:05:12', 'S00004', 'Paid'),
('T00013', 'P00013', 'S00001', '2015-02-12', '08:05:10', '2015-02-20', '10:06:15', 'S00001', 'Paid'),
('T00014', 'P00014', 'S00001', '2015-06-13', '07:05:26', '2015-06-26', '11:05:50', 'S00001', 'Paid'),
('T00015', 'P00015', 'S00001', '2015-07-03', '08:45:12', '2015-07-26', '09:12:44', 'S00001', 'Paid'),
('T00016', 'P00016', 'S00001', '2017-05-08', '09:05:55', NULL, NULL, 'S00001', 'Not Paid'),
('T00017', 'P00017', 'S00001', '2017-04-22', '15:12:54', NULL, NULL, 'S00001', 'Not Paid'),
('T00018', 'P00018', 'S00004', '2017-06-23', '13:55:16', NULL, NULL, 'S00004', 'Not Paid'),
('T00019', 'P00019', 'S00004', '2016-02-05', '18:51:55', '2016-02-16', '09:55:45', 'S00004', 'Paid'),
('T00020', 'P00020', 'S00004', '2016-03-04', '16:22:24', '2016-03-20', '10:25:56', 'S00004', 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userip` binary(16) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `logout` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `uid`, `username`, `userip`, `loginTime`, `logout`, `status`) VALUES
(6, 1, '', 0x3a3a3100000000000000000000000000, '2017-01-06 07:02:28', '', 1),
(7, 1, 'info@w3gang.com', 0x3a3a3100000000000000000000000000, '2017-01-06 07:04:28', '', 1),
(8, 0, 'admin', 0x3a3a3100000000000000000000000000, '2017-01-06 07:07:41', '06-01-2017 12:38:09 PM', 0),
(9, 1, 'info@w3gang.com', 0x3a3a3100000000000000000000000000, '2017-01-06 07:08:01', '', 1),
(10, 1, 'info@w3gang.com', 0x3a3a3100000000000000000000000000, '2017-01-06 07:10:09', '06-01-2017 12:41:43 PM', 1),
(11, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2017-01-07 07:57:18', '07-01-2017 01:27:34 PM', 1),
(12, 0, 'asdad', 0x3a3a3100000000000000000000000000, '2017-01-07 07:57:44', '', 0),
(13, 0, 'xyz@test.com', 0x3a3a3100000000000000000000000000, '2017-01-07 07:59:43', '', 0),
(14, 5, 'amit12@gmail.com', 0x3a3a3100000000000000000000000000, '2017-01-07 08:00:44', '07-01-2017 01:34:19 PM', 1),
(15, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-26 12:55:52', '', 1),
(16, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-26 14:44:39', '', 1),
(17, 0, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-26 14:52:16', '', 0),
(18, 2, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-26 14:52:42', '26-11-2018 08:24:13 PM', 1),
(19, 0, 'admin', 0x3a3a3100000000000000000000000000, '2018-11-26 14:54:17', '', 0),
(20, 0, 'admin', 0x3a3a3100000000000000000000000000, '2018-11-26 15:18:41', '', 0),
(21, 0, 'admin', 0x3a3a3100000000000000000000000000, '2018-11-26 15:19:16', '', 0),
(22, 0, 'admin', 0x3a3a3100000000000000000000000000, '2018-11-26 15:19:25', '', 0),
(23, 0, 'admin', 0x3a3a3100000000000000000000000000, '2018-11-26 15:19:43', '', 0),
(24, 10, 'khaw@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-26 15:30:53', '26-11-2018 09:01:38 PM', 1),
(25, 10, 'khaw@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-26 15:31:55', '26-11-2018 09:02:03 PM', 1),
(26, 0, 'admin', 0x3a3a3100000000000000000000000000, '2018-11-26 15:56:51', '', 0),
(27, 10, 'khaw@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-26 15:57:06', '26-11-2018 09:27:27 PM', 1),
(28, 0, 'admin', 0x3a3a3100000000000000000000000000, '2018-11-26 16:00:27', '', 0),
(29, 0, 'admin', 0x3a3a3100000000000000000000000000, '2018-11-26 16:00:31', '', 0),
(30, 0, 'admin', 0x3a3a3100000000000000000000000000, '2018-11-26 16:00:31', '', 0),
(31, 0, '', 0x3a3a3100000000000000000000000000, '2018-11-26 16:00:31', '', 0),
(32, 0, 'admin', 0x3a3a3100000000000000000000000000, '2018-11-26 16:00:32', '', 0),
(33, 10, 'khaw@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-27 06:02:15', '27-11-2018 11:33:23 AM', 1),
(34, 0, 'admin', 0x3a3a3100000000000000000000000000, '2018-11-27 06:03:30', '', 0),
(35, 0, 'admin', 0x3a3a3100000000000000000000000000, '2018-11-27 06:11:33', '', 0),
(36, 10, 'khaw@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-27 07:04:02', '27-11-2018 12:41:51 PM', 1),
(37, 0, 'khaw@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-27 13:06:29', '', 0),
(38, 10, 'khaw@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-27 13:06:39', '27-11-2018 08:15:27 PM', 1),
(39, 0, 'admin', 0x3a3a3100000000000000000000000000, '2018-11-27 15:09:35', '', 0),
(40, 0, 'khaw@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-28 07:26:54', '', 0),
(41, 10, 'khaw@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-28 07:27:39', '28-11-2018 12:57:48 PM', 1),
(42, 0, 'U00001', 0x34322e3138392e38332e323036000000, '2018-11-28 14:30:11', '', 0),
(43, 0, 'P00001', 0x34322e3138392e38332e323036000000, '2018-11-28 14:30:22', '', 0),
(44, 0, 'P00001', 0x34322e3138392e38332e323036000000, '2018-11-28 14:30:55', '', 1),
(45, 0, 'P00001', 0x34322e3138392e38332e323036000000, '2018-11-28 15:59:42', '', 1),
(46, 0, '', 0x34322e3138392e38332e323036000000, '2018-11-28 16:57:04', '', 1),
(47, 0, '', 0x34322e3138392e38332e323036000000, '2018-11-28 17:03:16', '28-11-2018 10:51:47 PM', 1),
(48, 0, '', 0x34322e3138392e38332e323036000000, '2018-11-28 21:49:11', '29-11-2018 03:36:57 AM', 1),
(49, 0, '', 0x34322e3138392e38332e323036000000, '2018-11-28 22:07:33', '', 1),
(50, 0, '', 0x34322e3138392e38332e323036000000, '2018-11-28 22:08:16', '', 1),
(51, 0, '', 0x34322e3138392e38332e323036000000, '2018-11-28 22:10:06', '29-11-2018 03:41:11 AM', 1),
(52, 0, '', 0x34322e3138392e38332e323036000000, '2018-11-28 22:11:26', '29-11-2018 03:42:01 AM', 1),
(53, 0, '', 0x34322e3138392e38332e323036000000, '2018-11-28 22:12:07', '', 1),
(54, 0, '', 0x34322e3138392e38332e323036000000, '2018-11-28 22:16:22', '29-11-2018 04:30:23 AM', 1),
(55, 0, '', 0x34322e3138392e38332e323036000000, '2018-11-28 23:00:45', '29-11-2018 04:55:29 AM', 1),
(56, 0, 'mgteh1', 0x34322e3138392e38332e323036000000, '2018-11-28 23:26:42', '', 0),
(57, 0, 'P00001', 0x34322e3138392e38332e323036000000, '2018-11-28 23:26:55', '', 0),
(58, 0, 'P00001', 0x34322e3138392e38332e323036000000, '2018-11-28 23:27:10', '', 0),
(59, 0, 'P00001', 0x34322e3138392e38332e323036000000, '2018-11-28 23:27:32', '29-11-2018 06:22:38 AM', 1),
(60, 0, '', 0x3131332e3231302e3138352e32353100, '2018-11-29 00:55:19', '29-11-2018 06:34:07 AM', 1),
(61, 0, '', 0x3131332e3231302e3138352e32353100, '2018-11-29 01:04:59', '29-11-2018 06:42:23 AM', 1),
(62, 0, 'zhlee@hmail.com', 0x3131332e3231302e3138352e32353100, '2018-11-29 01:13:41', '', 0),
(63, 0, 'zhlee@hmail.com', 0x3131332e3231302e3138352e32353100, '2018-11-29 01:14:03', '29-11-2018 06:45:00 AM', 1),
(64, 0, 'zhlee@hmail.com', 0x3131332e3231302e3138352e32353100, '2018-11-29 01:15:19', '', 0),
(65, 0, 'zhlee@hmail.com', 0x3131332e3231302e3138352e32353100, '2018-11-29 01:15:50', '29-11-2018 06:48:18 AM', 1),
(66, 0, 'teh@gmail.com', 0x3131332e3231302e3138352e32353100, '2018-11-29 01:19:20', '29-11-2018 06:50:24 AM', 0),
(67, 0, '', 0x3131332e3231302e3138352e32353100, '2018-11-29 01:26:36', '29-11-2018 06:58:10 AM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `utility_billingtb`
--

CREATE TABLE `utility_billingtb` (
  `UBILL_ID` varchar(6) NOT NULL,
  `P_ID` varchar(6) DEFAULT NULL,
  `W_ID` varchar(6) DEFAULT NULL,
  `UBILL_DATE` date NOT NULL,
  `UBILL_DESC` varchar(30) NOT NULL,
  `UBILL_PRICE` double(7,2) NOT NULL,
  `paid_status` varchar(255) NOT NULL DEFAULT 'Not Paid'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utility_billingtb`
--

INSERT INTO `utility_billingtb` (`UBILL_ID`, `P_ID`, `W_ID`, `UBILL_DATE`, `UBILL_DESC`, `UBILL_PRICE`, `paid_status`) VALUES
('U00001', 'P00001', 'W00001', '2015-02-04', '5 days', 400.00, 'Paid'),
('U00002', 'P00002', 'W00002', '2016-03-02', '2 days', 480.00, 'Paid'),
('U00003', 'P00003', 'W00003', '2016-04-01', '2 days', 600.00, 'Paid'),
('U00004', 'P00004', 'W00004', '2017-05-01', '2 days', 800.00, 'Paid'),
('U00005', 'P00005', 'W00005', '2018-06-06', '11 days', 5500.00, 'Paid'),
('U00006', 'P00006', 'W00004', '2015-03-01', '20 days', 10000.00, 'Paid'),
('U00007', 'P00007', 'W00003', '2014-11-20', '21 days', 6300.00, 'Paid'),
('U00008', 'P00008', 'W00002', '2014-10-10', '9 days', 2160.00, 'Paid'),
('U00009', 'P00009', 'W00001', '2014-05-18', '18 days', 1440.00, 'Paid'),
('U00010', 'P00010', 'W00002', '2013-02-25', '15 days', 3600.00, 'Paid'),
('U00011', 'P00011', 'W00004', '2013-02-15', '11 days', 5500.00, 'Paid'),
('U00012', 'P00012', 'W00003', '2015-04-01', '17 days', 5100.00, 'Paid'),
('U00013', 'P00013', 'W00001', '2015-02-20', '8 days', 640.00, 'Paid'),
('U00014', 'P00014', 'W00001', '2015-06-26', '13 days', 1040.00, 'Paid'),
('U00015', 'P00015', 'W00002', '2015-07-26', '23 days', 5520.00, 'Paid'),
('U00016', 'P00016', 'W00004', '2017-05-22', '14 days', 7000.00, 'Paid'),
('U00017', 'P00017', 'W00005', '2017-05-10', '18 days', 9000.00, 'Paid'),
('U00018', 'P00018', 'W00005', '2017-07-12', '19 days', 9500.00, 'Paid'),
('U00019', 'P00019', 'W00002', '2016-02-16', '12 days', 2880.00, 'Paid'),
('U00020', 'P00020', 'W00001', '2016-03-20', '17 days', 1360.00, 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `utilizationtb`
--

CREATE TABLE `utilizationtb` (
  `BED_ID` varchar(6) NOT NULL,
  `W_ID` varchar(6) DEFAULT NULL,
  `P_ID` varchar(6) DEFAULT NULL,
  `STATUS` varchar(12) DEFAULT NULL,
  `START_DATE` date NOT NULL,
  `END_DATE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilizationtb`
--

INSERT INTO `utilizationtb` (`BED_ID`, `W_ID`, `P_ID`, `STATUS`, `START_DATE`, `END_DATE`) VALUES
('B00001', 'W00001', 'P00001', 'Vacant', '2015-01-30', '2015-02-04'),
('B00002', 'W00002', 'P00002', 'Vacant', '2016-02-28', '2016-03-02'),
('B00003', 'W00003', 'P00003', 'Vacant', '2016-03-30', '2016-01-04'),
('B00004', 'W00004', 'P00004', 'Vacant', '2017-04-30', '2017-05-01'),
('B00005', 'W00005', 'P00005', 'Vacant', '2018-05-27', '2018-06-06'),
('B00006', 'W00004', 'P00006', 'Vacant', '2015-02-10', '2015-03-01'),
('B00007', 'W00003', 'P00007', 'Vacant', '2014-10-30', '2014-11-20'),
('B00008', 'W00002', 'P00008', 'Vacant', '2014-10-01', '2014-10-10'),
('B00009', 'W00001', 'P00009', 'Vacant', '2014-04-30', '2014-05-18'),
('B00010', 'W00002', 'P00010', 'Vacant', '2013-02-10', '2013-02-25'),
('B00011', 'W00004', 'P00011', 'Vacant', '2013-02-04', '2013-02-15'),
('B00012', 'W00003', 'P00012', 'Vacant', '2015-03-15', '2015-04-01'),
('B00013', 'W00001', 'P00013', 'Vacant', '2015-02-12', '2015-02-20'),
('B00014', 'W00001', 'P00014', 'Vacant', '2015-06-13', '2015-06-26'),
('B00015', 'W00002', 'P00015', 'Vacant', '2015-07-03', '2015-07-26'),
('B00016', 'W00004', 'P00016', 'Vacant', '2017-05-08', '2017-05-22'),
('B00017', 'W00005', 'P00017', 'Vacant', '2017-04-22', '2017-05-10'),
('B00018', 'W00005', 'P00018', 'Vacant', '2017-06-23', '2017-07-12'),
('B00019', 'W00002', 'P00019', 'Vacant', '2016-02-05', '2016-02-16'),
('B00020', 'W00001', 'P00020', 'Vacant', '2016-03-04', '2016-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `wardadmin`
--

CREATE TABLE `wardadmin` (
  `WA_ID` varchar(6) NOT NULL,
  `P_PASSWORD` varchar(6) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `SALARY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wardstb`
--

CREATE TABLE `wardstb` (
  `W_ID` varchar(6) NOT NULL,
  `W_CAPACITY` int(2) NOT NULL,
  `W_TYPE` varchar(10) NOT NULL,
  `W_OCCUPY` int(2) DEFAULT NULL,
  `W_PRICE` double(7,2) NOT NULL,
  `W_MANAGER` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wardstb`
--

INSERT INTO `wardstb` (`W_ID`, `W_CAPACITY`, `W_TYPE`, `W_OCCUPY`, `W_PRICE`, `W_MANAGER`) VALUES
('W00001', 10, '10 bedded', 7, 80.00, 'S00006'),
('W00002', 6, '6 bedded', 5, 240.00, 'S00006'),
('W00003', 4, '4 bedded', 2, 300.00, 'S00006'),
('W00004', 2, 'Double roo', 2, 500.00, 'S00006'),
('W00005', 1, 'Isolation ', 1, 500.00, 'S00006');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admissiontb`
--
ALTER TABLE `admissiontb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billtb`
--
ALTER TABLE `billtb`
  ADD PRIMARY KEY (`B_ID`),
  ADD KEY `BillTB_PID` (`P_ID`),
  ADD KEY `BillTB_SURID` (`B_SURID`),
  ADD KEY `BillTB_UBILLID` (`B_UBILLID`),
  ADD KEY `BillTB_MEDID` (`B_MEDID`);

--
-- Indexes for table `departmenttb`
--
ALTER TABLE `departmenttb`
  ADD PRIMARY KEY (`D_ID`);

--
-- Indexes for table `diagnosistb`
--
ALTER TABLE `diagnosistb`
  ADD PRIMARY KEY (`DIA_ID`),
  ADD KEY `DIANOGSIS_DIA_DISEASEID_FK` (`DIA_DISEASEID`),
  ADD KEY `P_ID` (`P_ID`);

--
-- Indexes for table `discharge`
--
ALTER TABLE `discharge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diseasetb`
--
ALTER TABLE `diseasetb`
  ADD PRIMARY KEY (`DISEASE_ID`);

--
-- Indexes for table `doctorslog`
--
ALTER TABLE `doctorslog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_billingtb`
--
ALTER TABLE `medical_billingtb`
  ADD PRIMARY KEY (`M_ID`),
  ADD KEY `MEDICAL_BILLTB_PID` (`P_ID`);

--
-- Indexes for table `patienttb`
--
ALTER TABLE `patienttb`
  ADD PRIMARY KEY (`P_ID`);

--
-- Indexes for table `servicetb`
--
ALTER TABLE `servicetb`
  ADD PRIMARY KEY (`SER_ID`),
  ADD KEY `SERVICE_D_ID_FK` (`D_ID`);

--
-- Indexes for table `stafftb`
--
ALTER TABLE `stafftb`
  ADD PRIMARY KEY (`S_ID`),
  ADD UNIQUE KEY `U_ID` (`U_ID`),
  ADD KEY `STAFF_DEPARTMENT_D_ID_FK` (`D_ID`);

--
-- Indexes for table `surgery_billingtb`
--
ALTER TABLE `surgery_billingtb`
  ADD PRIMARY KEY (`SUR_ID`),
  ADD KEY `SURGERY_BILLTB_PID` (`P_ID`);

--
-- Indexes for table `transactiontb`
--
ALTER TABLE `transactiontb`
  ADD PRIMARY KEY (`T_ID`),
  ADD KEY `TRANSACTION_TB_PID` (`P_ID`),
  ADD KEY `TRANSACTION_TB_DOCTORID` (`T_DISCHARGEBY`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utility_billingtb`
--
ALTER TABLE `utility_billingtb`
  ADD PRIMARY KEY (`UBILL_ID`),
  ADD KEY `UTILITY_BILLTB_PID` (`P_ID`);

--
-- Indexes for table `utilizationtb`
--
ALTER TABLE `utilizationtb`
  ADD PRIMARY KEY (`BED_ID`),
  ADD KEY `UTILIZATION_TB_PID` (`P_ID`),
  ADD KEY `WARD_TB_PID` (`W_ID`);

--
-- Indexes for table `wardstb`
--
ALTER TABLE `wardstb`
  ADD PRIMARY KEY (`W_ID`),
  ADD KEY `W_MANAGER` (`W_MANAGER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admissiontb`
--
ALTER TABLE `admissiontb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `discharge`
--
ALTER TABLE `discharge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `doctorslog`
--
ALTER TABLE `doctorslog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `billtb`
--
ALTER TABLE `billtb`
  ADD CONSTRAINT `billtb_ibfk_1` FOREIGN KEY (`P_ID`) REFERENCES `patienttb` (`P_ID`),
  ADD CONSTRAINT `billtb_ibfk_2` FOREIGN KEY (`B_SURID`) REFERENCES `surgery_billingtb` (`SUR_ID`),
  ADD CONSTRAINT `billtb_ibfk_3` FOREIGN KEY (`B_UBILLID`) REFERENCES `utility_billingtb` (`UBILL_ID`),
  ADD CONSTRAINT `billtb_ibfk_4` FOREIGN KEY (`B_MEDID`) REFERENCES `medical_billingtb` (`M_ID`);

--
-- Constraints for table `diagnosistb`
--
ALTER TABLE `diagnosistb`
  ADD CONSTRAINT `diagnosistb_ibfk_1` FOREIGN KEY (`DIA_DISEASEID`) REFERENCES `diseasetb` (`DISEASE_ID`),
  ADD CONSTRAINT `diagnosistb_ibfk_2` FOREIGN KEY (`P_ID`) REFERENCES `patienttb` (`P_ID`);

--
-- Constraints for table `medical_billingtb`
--
ALTER TABLE `medical_billingtb`
  ADD CONSTRAINT `medical_billingtb_ibfk_1` FOREIGN KEY (`P_ID`) REFERENCES `patienttb` (`P_ID`);

--
-- Constraints for table `servicetb`
--
ALTER TABLE `servicetb`
  ADD CONSTRAINT `servicetb_ibfk_1` FOREIGN KEY (`D_ID`) REFERENCES `departmenttb` (`D_ID`);

--
-- Constraints for table `stafftb`
--
ALTER TABLE `stafftb`
  ADD CONSTRAINT `stafftb_ibfk_1` FOREIGN KEY (`D_ID`) REFERENCES `departmenttb` (`D_ID`);

--
-- Constraints for table `surgery_billingtb`
--
ALTER TABLE `surgery_billingtb`
  ADD CONSTRAINT `surgery_billingtb_ibfk_1` FOREIGN KEY (`P_ID`) REFERENCES `patienttb` (`P_ID`);

--
-- Constraints for table `transactiontb`
--
ALTER TABLE `transactiontb`
  ADD CONSTRAINT `transactiontb_ibfk_1` FOREIGN KEY (`P_ID`) REFERENCES `patienttb` (`P_ID`),
  ADD CONSTRAINT `transactiontb_ibfk_2` FOREIGN KEY (`T_DISCHARGEBY`) REFERENCES `stafftb` (`S_ID`);

--
-- Constraints for table `utility_billingtb`
--
ALTER TABLE `utility_billingtb`
  ADD CONSTRAINT `utility_billingtb_ibfk_1` FOREIGN KEY (`P_ID`) REFERENCES `patienttb` (`P_ID`);

--
-- Constraints for table `utilizationtb`
--
ALTER TABLE `utilizationtb`
  ADD CONSTRAINT `utilizationtb_ibfk_1` FOREIGN KEY (`P_ID`) REFERENCES `patienttb` (`P_ID`),
  ADD CONSTRAINT `utilizationtb_ibfk_2` FOREIGN KEY (`W_ID`) REFERENCES `wardstb` (`W_ID`);

--
-- Constraints for table `wardstb`
--
ALTER TABLE `wardstb`
  ADD CONSTRAINT `wardstb_ibfk_1` FOREIGN KEY (`W_MANAGER`) REFERENCES `stafftb` (`S_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
