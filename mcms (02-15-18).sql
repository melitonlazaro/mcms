-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2018 at 10:10 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `activity_log_id` int(11) NOT NULL,
  `activity` varchar(1500) NOT NULL,
  `module` varchar(500) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`activity_log_id`, `activity`, `module`, `date`, `time`) VALUES
(1, 'testing', 'testing', 'testing', 'testing'),
(2, 'Added Physical Examination record', 'PRMS', '2018-02-14', '11:02:48'),
(3, 'Profiling', 'PRMS', '2018-02-22', '11:02:28'),
(4, 'Created patient account', 'Online Appointment', '2018-02-22', '11:02:28'),
(5, 'Added Physical Examination record', 'PRMS', '2018-02-22', '11:02:53'),
(6, 'Profiling', 'PRMS', '2018-02-22', '12:02:47'),
(7, 'Created patient account', 'Online Appointment', '2018-02-22', '12:02:47'),
(8, 'Added Physical Examination record', 'PRMS', '2018-02-22', '12:02:05'),
(9, 'Profiling', 'PRMS', '2018-02-22', '12:02:21'),
(10, 'Created patient account', 'Online Appointment', '2018-02-22', '12:02:22'),
(11, 'Added Physical Examination record', 'PRMS', '2018-02-22', '12:02:34'),
(12, 'Profiling', 'PRMS', '2018-02-22', '12:02:17'),
(13, 'Created patient account', 'Online Appointment', '2018-02-22', '12:02:17'),
(14, 'Added Physical Examination record', 'PRMS', '2018-02-22', '12:02:21'),
(15, 'Profiling', 'PRMS', '2018-02-22', '13:02:37'),
(16, 'Created patient account', 'Online Appointment', '2018-02-22', '13:02:37'),
(17, 'Added Physical Examination record', 'PRMS', '2018-02-22', '13:02:34'),
(18, 'Profiling', 'PRMS', '2018-02-22', '13:02:31'),
(19, 'Created patient account', 'Online Appointment', '2018-02-22', '13:02:31'),
(20, 'Added Physical Examination record', 'PRMS', '2018-02-22', '13:02:00'),
(21, 'Profiling', 'PRMS', '2018-02-22', '13:02:51'),
(22, 'Created patient account', 'Online Appointment', '2018-02-22', '13:02:51'),
(23, 'Added Physical Examination record', 'PRMS', '2018-02-22', '13:02:48'),
(24, 'Profiling', 'PRMS', '2018-02-22', '14:02:09'),
(25, 'Created patient account', 'Online Appointment', '2018-02-22', '14:02:09'),
(26, 'Added Physical Examination record', 'PRMS', '2018-02-22', '14:02:05'),
(27, 'Profiling', 'PRMS', '2018-02-22', '14:02:20'),
(28, 'Created patient account', 'Online Appointment', '2018-02-22', '14:02:20'),
(29, 'Added Physical Examination record', 'PRMS', '2018-02-22', '14:02:54'),
(30, 'Profiling', 'PRMS', '2018-02-22', '14:02:39'),
(31, 'Created patient account', 'Online Appointment', '2018-02-22', '14:02:39'),
(32, 'Added Physical Examination record', 'PRMS', '2018-02-22', '14:02:43'),
(33, 'Profiling', 'PRMS', '2018-02-22', '15:02:48'),
(34, 'Created patient account', 'Online Appointment', '2018-02-22', '15:02:48'),
(35, 'Added Physical Examination record', 'PRMS', '2018-02-22', '15:02:35'),
(36, 'Profiling', 'PRMS', '2018-02-22', '15:02:20'),
(37, 'Created patient account', 'Online Appointment', '2018-02-22', '15:02:20'),
(38, 'Added Physical Examination record', 'PRMS', '2018-02-22', '15:02:53'),
(39, 'Added Physical Examination record', 'PRMS', '2018-02-24', '07:02:35'),
(40, 'Added Physical Examination record', 'PRMS', '2018-02-24', '07:02:52'),
(41, 'Added Physical Examination record', 'PRMS', '2018-02-24', '08:02:05');

-- --------------------------------------------------------

--
-- Table structure for table `calendar_events`
--

CREATE TABLE `calendar_events` (
  `ID` int(11) NOT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `calendar_events`
--

INSERT INTO `calendar_events` (`ID`, `title`, `start`, `end`, `description`) VALUES
(1, 'Test Event', '2017-03-16 00:00:00', '2017-03-16 00:00:00', ''),
(2, 'New Event', '2017-03-23 00:00:00', '2017-03-23 00:00:00', ''),
(5, 'Loyalty-Kendricks', '2017-12-30 12:30:00', '2017-12-30 13:30:00', 'Loyalty'),
(6, 'happy new year1', '2018-01-01 12:30:00', '2018-01-01 14:30:00', ''),
(9, '321111', '2018-01-02 05:25:00', '2018-01-02 05:25:00', '3211'),
(10, 'prenatal', '2018-01-25 08:30:00', '2018-01-25 09:00:00', 'prenatal');

-- --------------------------------------------------------

--
-- Table structure for table `case`
--

CREATE TABLE `case` (
  `case_id` int(11) NOT NULL,
  `patient_ID` int(11) NOT NULL,
  `date_start` varchar(50) NOT NULL,
  `date_completed` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `case`
--

INSERT INTO `case` (`case_id`, `patient_ID`, `date_start`, `date_completed`, `status`) VALUES
(1, 1, '2018-10-08', '', 'Complete'),
(138, 99, '2018-02-01', '', 'Active'),
(139, 104, '2018-02-01', '', 'Active'),
(140, 105, '2018-02-01', '', 'Active'),
(141, 106, '2018-02-22', '', 'Active'),
(142, 107, '2018-02-22', '', 'Active'),
(143, 108, '2018-02-22', '', 'Active'),
(144, 109, '2018-02-22', '', 'Active'),
(145, 110, '2018-02-22', '', 'Active'),
(146, 111, '2018-02-22', '', 'Active'),
(147, 112, '2018-02-22', '', 'Active'),
(148, 113, '2018-02-22', '', 'Active'),
(149, 114, '2018-02-22', '', 'Active'),
(150, 115, '2018-02-22', '', 'Active'),
(151, 116, '2018-02-22', '', 'Active'),
(152, 117, '2018-02-22', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `consultation`
--

CREATE TABLE `consultation` (
  `consultation_id` int(11) NOT NULL,
  `infant_id` int(11) NOT NULL,
  `date` varchar(25) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `height` varchar(10) NOT NULL,
  `pulse_rate` varchar(25) NOT NULL,
  `heart_rate` varchar(25) NOT NULL,
  `chief_complaint` varchar(5000) NOT NULL,
  `remarks` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consultation`
--

INSERT INTO `consultation` (`consultation_id`, `infant_id`, `date`, `weight`, `height`, `pulse_rate`, `heart_rate`, `chief_complaint`, `remarks`) VALUES
(1, 1, '2017-12-24', '8.84', '45', '75', '140', 'test1', 'test1'),
(2, 1, '2017-12-25', '8.92', '46', '75', '140', 'test1', 'test1'),
(4, 1, '2017-12-29', '9.01', '55', '75', '140', 'test1', 'test1'),
(5, 1, '2017-12-30', '9.22', '57', '75', '140', 'test1', 'test1'),
(6, 1, '2017-12-31', '9.22', '60', '75', '140', 'test1', 'test1'),
(7, 1, '2018-01-01', '9.25', '62', '75', '140', 'test1', 'test1'),
(8, 1, '2018-02-24', '7500', '75', '120', '120', 'Cough for 3 days', 'test\r\n'),
(9, 1, '2018-02-24', '7300', '123', '120', '120', 'Rashes in elbows and knees', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `company` varchar(250) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `name`, `email`, `phone`, `company`, `message`) VALUES
(1, 'guccigang', 'guccigang', 'guccigang', '', 'guccigang'),
(2, 'feedback_result', 'feedback_result', 'feedback_result', '', 'feedback_result'),
(3, 'Meliton Diego Lazaro', 'melilazaro1@gmail.com', '09234644144', 'None', 'Hi guys'),
(4, 'Meliton Diego Lazaro', 'melitonlazaro1@gmail.com', '09234644144', 'Student', 'Hello, testing procedure.');

-- --------------------------------------------------------

--
-- Table structure for table `infant_info`
--

CREATE TABLE `infant_info` (
  `infant_id` int(11) NOT NULL,
  `patient_ID` int(11) NOT NULL,
  `case_id` int(11) NOT NULL,
  `infant_first_name` varchar(150) NOT NULL,
  `infant_last_name` varchar(150) NOT NULL,
  `infant_middle_initial` varchar(10) NOT NULL,
  `gravida` varchar(5) NOT NULL,
  `para` varchar(5) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `time_of_birth` varchar(15) NOT NULL,
  `infant_date_of_birth` varchar(25) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `length` varchar(10) NOT NULL,
  `head_circumference` varchar(10) NOT NULL,
  `chest_circumference` varchar(10) NOT NULL,
  `newborn_screening` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infant_info`
--

INSERT INTO `infant_info` (`infant_id`, `patient_ID`, `case_id`, `infant_first_name`, `infant_last_name`, `infant_middle_initial`, `gravida`, `para`, `gender`, `time_of_birth`, `infant_date_of_birth`, `weight`, `length`, `head_circumference`, `chest_circumference`, `newborn_screening`) VALUES
(1, 1, 0, 'ABCD', 'Reyes', '', '', '', '', '7:16', '2017-10-08', '', '', '', '', ''),
(3, 1, 1, 'Shiela', 'Morales', 'A', '2', '2', 'Female', '08:11', '2018-01-31', '6.5', '56', '25', '15', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `medicalhistory`
--

CREATE TABLE `medicalhistory` (
  `Num` int(11) NOT NULL,
  `Patient_ID` int(11) NOT NULL,
  `case_id` int(11) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `heent_epilepsy_convulsion` varchar(100) NOT NULL,
  `heent_severe_headache_dizzines` varchar(100) NOT NULL,
  `heent_visual_disturbance` varchar(100) NOT NULL,
  `heent_yellowish_discoloration` varchar(100) NOT NULL,
  `heent_enlarged_thyroid` varchar(100) NOT NULL,
  `ch_severe_chest_pain` varchar(100) NOT NULL,
  `ch_easy_fatigability` varchar(100) NOT NULL,
  `ch_axillary_masses` varchar(100) NOT NULL,
  `ch_nipple_discharge` varchar(100) NOT NULL,
  `ch_systolic140_and_above` varchar(100) NOT NULL,
  `ch_diastolic90_and_above` varchar(100) NOT NULL,
  `ch_family_history_of_CVA` varchar(100) NOT NULL,
  `abdomen_mass_in_abdomen` varchar(100) NOT NULL,
  `abdomen_gallbladder_disease` varchar(100) NOT NULL,
  `abdomen_liver_disease` varchar(100) NOT NULL,
  `abdomen_previous_surgical_operation` varchar(100) NOT NULL,
  `extremities_severe_varicositles` varchar(100) NOT NULL,
  `extremities_deformities` varchar(100) NOT NULL,
  `extremities_severe_pain_in_legs` varchar(100) NOT NULL,
  `skin_yellowish_discoloration` varchar(100) NOT NULL,
  `history_smoking` varchar(100) NOT NULL,
  `history_allergies` varchar(100) NOT NULL,
  `history_drug_intake` varchar(100) NOT NULL,
  `history_drug_abuse` varchar(100) NOT NULL,
  `history_STD` varchar(100) NOT NULL,
  `history_anemia` varchar(100) NOT NULL,
  `history_diabetes` varchar(100) NOT NULL,
  `oh_fullterm` varchar(100) NOT NULL,
  `oh_preterm` varchar(100) NOT NULL,
  `oh_abortion` varchar(100) NOT NULL,
  `oh_living_children` varchar(100) NOT NULL,
  `oh_last_delivery_date` varchar(100) NOT NULL,
  `oh_last_delivery_type` varchar(100) NOT NULL,
  `oh_age_of_gestation_weeks` varchar(100) NOT NULL,
  `oh_expected_date_of_confinement` varchar(100) NOT NULL,
  `oh_previous_CS` varchar(100) NOT NULL,
  `oh_3_consec_miscarriages` varchar(100) NOT NULL,
  `oh_ectopic_pregnancy` varchar(100) NOT NULL,
  `oh_post_partum_hemor` varchar(100) NOT NULL,
  `oh_forcep_delivery` varchar(100) NOT NULL,
  `oh_pregnancy_induced_hypertension` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicalhistory`
--

INSERT INTO `medicalhistory` (`Num`, `Patient_ID`, `case_id`, `Date`, `heent_epilepsy_convulsion`, `heent_severe_headache_dizzines`, `heent_visual_disturbance`, `heent_yellowish_discoloration`, `heent_enlarged_thyroid`, `ch_severe_chest_pain`, `ch_easy_fatigability`, `ch_axillary_masses`, `ch_nipple_discharge`, `ch_systolic140_and_above`, `ch_diastolic90_and_above`, `ch_family_history_of_CVA`, `abdomen_mass_in_abdomen`, `abdomen_gallbladder_disease`, `abdomen_liver_disease`, `abdomen_previous_surgical_operation`, `extremities_severe_varicositles`, `extremities_deformities`, `extremities_severe_pain_in_legs`, `skin_yellowish_discoloration`, `history_smoking`, `history_allergies`, `history_drug_intake`, `history_drug_abuse`, `history_STD`, `history_anemia`, `history_diabetes`, `oh_fullterm`, `oh_preterm`, `oh_abortion`, `oh_living_children`, `oh_last_delivery_date`, `oh_last_delivery_type`, `oh_age_of_gestation_weeks`, `oh_expected_date_of_confinement`, `oh_previous_CS`, `oh_3_consec_miscarriages`, `oh_ectopic_pregnancy`, `oh_post_partum_hemor`, `oh_forcep_delivery`, `oh_pregnancy_induced_hypertension`) VALUES
(6, 29, 57, '2017-10-11', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '1', '1', '1', '1', '2017-08-08', 'Spontaneous', '2', '2017-12-27', 'No', 'No', 'No', 'No', 'No', 'No'),
(8, 1, 1, '2017-10-11', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '1', '1', '1', '1', '', 'Spontaneous', '1', '2018-01-29', 'No', 'No', 'No', 'No', 'No', 'No'),
(9, 32, 60, '2017-10-11', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '1', '1', '1', '1', '2006-06-08', 'Spontaneous', '1', '2017-10-27', 'No', 'No', 'No', 'No', 'No', 'No'),
(10, 34, 64, '2017-10-18', 'Yes', 'No', 'Yes', 'Yes', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '3', '0', '0', '3', '2016-06-16', 'Spontaneous', '3', '2018-02-08', 'No', 'No', 'No', 'No', 'No', 'No'),
(11, 35, 65, '2017-10-19', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '0', '1', '1', '1', '', 'Spontaneous', '3', '2018-01-19', 'No', 'No', 'No', 'No', 'No', 'No'),
(12, 99, 128, '2018-01-23', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '0', '1', '0', '2', '2016-12-06', 'Ceasarian', '3', '2018-06-22', 'No', 'No', 'No', 'No', 'No', 'No'),
(13, 100, 129, '2018-01-28', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '0', '0', '0', '0', '2015-12-01', 'Forcep', '2', '2018-07-04', 'No', 'No', 'No', 'No', 'No', 'No'),
(14, 103, 132, '2018-02-01', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '0', '0', '0', '0', '2016-08-09', 'Spontaneous', '4', '2018-05-04', 'No', 'No', 'No', 'No', 'No', 'No'),
(15, 99, 138, '2018-02-01', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '0', '0', '0', '0', '2016-07-06', 'Spontaneous', '0', '2018-02-02', 'No', 'No', 'No', 'No', 'No', 'No'),
(16, 104, 139, '2018-02-01', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', '0', '1', '0', '1', '2016-12-01', 'Ceasarian', '4', '2018-09-12', 'Yes', 'No', 'No', 'No', 'No', 'No'),
(17, 104, 139, '2018-02-01', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', '0', '1', '0', '1', '2016-12-01', 'Ceasarian', '4', '2018-09-12', 'Yes', 'No', 'No', 'No', 'No', 'No'),
(18, 105, 140, '2018-02-01', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '0', '0', '0', '2', '2017-03-07', 'Spontaneous', '4', '2018-10-25', 'No', 'No', 'No', 'No', 'No', 'No'),
(19, 106, 141, '2018-02-22', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '0', '2', '0', '2', '2017-08-09', 'Ceasarian', '4', '2018-10-22', 'No', 'No', 'No', 'No', 'No', 'No'),
(20, 107, 142, '2018-02-22', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '0', '0', '0', '0', '2017-06-14', 'Ceasarian', '0', '2018-08-09', 'No', 'No', 'No', 'No', 'No', 'No'),
(21, 108, 143, '2018-02-22', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '0', '0', '0', '2', '2017-08-01', 'Forcep', '0', '2018-10-22', 'Yes', 'No', 'No', 'No', 'No', 'No'),
(22, 109, 144, '2018-02-22', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '0', '0', '0', '2', '2017-04-05', 'Ceasarian', '3', '2018-10-23', 'No', 'No', 'No', 'No', 'No', 'No'),
(23, 110, 145, '2018-02-22', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '1', '1', '0', '1', '2017-04-11', 'Ceasarian', '4', '2018-10-24', 'No', 'No', 'No', 'No', 'No', 'No'),
(24, 111, 146, '2018-02-22', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '0', '0', '0', '0', '2017-03-16', 'Spontaneous', '4', '2018-12-20', 'No', 'No', 'No', 'No', 'No', 'No'),
(25, 112, 147, '2018-02-22', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '2', '2', '0', '2', '2017-06-14', 'Ceasarian', '3', '2018-10-24', 'No', 'No', 'No', 'No', 'No', 'No'),
(26, 113, 148, '2018-02-22', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', '2', '0', '0', '2', '2017-04-12', 'Ceasarian', '3', '2018-11-07', 'No', 'No', 'No', 'No', 'No', 'No'),
(27, 114, 149, '2018-02-22', 'Yes', 'Yes', 'No', 'Yes', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', 'No', 'No', 'No', 'Yes', 'No', 'Yes', 'No', 'Yes', 'No', 'No', '0', '0', '0', '1', '2017-03-08', 'Spontaneous', '5', '2018-10-30', 'No', 'No', 'No', 'No', 'No', 'No'),
(28, 115, 150, '2018-02-22', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '0', '0', '0', '0', '2017-03-08', 'Forcep', '3', '2018-11-08', 'No', 'No', 'No', 'No', 'No', 'No'),
(29, 116, 151, '2018-02-22', 'No', 'No', 'No', 'No', 'No', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '0', '0', '0', '1', '2017-05-09', 'Spontaneous', '3', '2018-10-31', 'No', 'No', 'No', 'No', 'No', 'No'),
(30, 117, 152, '2018-02-22', 'Yes', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', '0', '0', '0', '0', '2017-05-09', 'Spontaneous', '3', '2018-10-23', 'No', 'No', 'No', 'No', 'No', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `online_appointment`
--

CREATE TABLE `online_appointment` (
  `ol_appointment_id` int(11) NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `patient_surname` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `date` varchar(25) NOT NULL,
  `time` varchar(25) NOT NULL,
  `procedure` varchar(100) NOT NULL,
  `contact_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `online_appointment`
--

INSERT INTO `online_appointment` (`ol_appointment_id`, `patient_name`, `patient_surname`, `address`, `date`, `time`, `procedure`, `contact_number`) VALUES
(1, 'mel', 'mel', 'mel', '2017-01-31', 'mel', 'mel', 'mel');

-- --------------------------------------------------------

--
-- Table structure for table `patient_account`
--

CREATE TABLE `patient_account` (
  `account_ID` int(11) NOT NULL,
  `patient_ID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_account`
--

INSERT INTO `patient_account` (`account_ID`, `patient_ID`, `username`, `password`) VALUES
(1, 1, 'lazaro.lazaro', '12345'),
(6, 52, 'Irene.Irene', '12345'),
(7, 53, 'Enriquez.Mike', '827ccb0eea8a706c4c34a16891f84e7b'),
(17, 63, 'patient_ID.patient_ID', '827ccb0eea8a706c4c34a16891f84e7b'),
(53, 99, 'Hwang.Tiffany', '827ccb0eea8a706c4c34a16891f84e7b'),
(54, 100, 'test.test', '12345'),
(55, 101, 'Capistrano.Robert', '827ccb0eea8a706c4c34a16891f84e7b'),
(56, 102, 'Salinas.Khrismar', '827ccb0eea8a706c4c34a16891f84e7b'),
(57, 103, 'Salinas.Khrismar103', '827ccb0eea8a706c4c34a16891f84e7b'),
(58, 104, 'Valenzue.Jeru', '827ccb0eea8a706c4c34a16891f84e7b'),
(59, 105, 'Garcia.May ', '827ccb0eea8a706c4c34a16891f84e7b'),
(60, 106, 'Test.test1', '827ccb0eea8a706c4c34a16891f84e7b'),
(61, 107, 'Morales.Shiela', '827ccb0eea8a706c4c34a16891f84e7b'),
(62, 108, 'Capistrano.Roberta', '827ccb0eea8a706c4c34a16891f84e7b'),
(63, 109, 'Alcantara.Christine', '827ccb0eea8a706c4c34a16891f84e7b'),
(64, 110, 'Capistrano.Christine', '827ccb0eea8a706c4c34a16891f84e7b'),
(65, 111, 'Gonzales.Ciarra Roxanne', '827ccb0eea8a706c4c34a16891f84e7b'),
(66, 112, 'perez.hugo', '827ccb0eea8a706c4c34a16891f84e7b'),
(67, 113, 'Capistrano.Ciarra Roxanne', '827ccb0eea8a706c4c34a16891f84e7b'),
(68, 114, 'Sumaray.Mia Sheen', '827ccb0eea8a706c4c34a16891f84e7b'),
(69, 115, 'Capistrano.Christine115', '827ccb0eea8a706c4c34a16891f84e7b'),
(70, 116, 'Capistrano.Christine116', '827ccb0eea8a706c4c34a16891f84e7b'),
(71, 117, 'Capistrano.Christine117', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `patient_info`
--

CREATE TABLE `patient_info` (
  `patient_ID` int(11) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `given_name` varchar(100) NOT NULL,
  `middle_initial` varchar(3) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `date_of_birth` varchar(50) NOT NULL,
  `contact_num` varchar(30) NOT NULL,
  `street_no` varchar(75) NOT NULL,
  `brgy` varchar(50) NOT NULL,
  `city` varchar(25) NOT NULL,
  `emergency_contact_name` varchar(100) NOT NULL,
  `emergency_contact_num` varchar(24) NOT NULL,
  `emergency_contact_address` varchar(100) NOT NULL,
  `date_registered` varchar(20) NOT NULL,
  `picture` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_info`
--

INSERT INTO `patient_info` (`patient_ID`, `last_name`, `given_name`, `middle_initial`, `occupation`, `date_of_birth`, `contact_num`, `street_no`, `brgy`, `city`, `emergency_contact_name`, `emergency_contact_num`, `emergency_contact_address`, `date_registered`, `picture`) VALUES
(1, 'lazaro', 'lazaro', 'g', 'student', '1998-04-30', '09225824215', '138 block 8', 'fort bonifacio', 'taguig', 'Madeline Lazaro', '09153864099', 'same address', '2017-10-06', ''),
(2, 'sheeran', 'ed', 'd', 'singer', '1982-10-23', '09225923283', '138 block 8', 'fort bonifacio', 'taguig', 'Madeline Lazaro', '09153864099', 'same address', '2017-10-08', ''),
(26, 'James', 'Al', 'i', 'rapper', '2017-10-11', '1364', '7979', '79798', '79798', '798798', '79879', '79978', '2017-10-11', ''),
(52, 'Irene', 'Irene', 'G', 'Student', '1998-04-30', '09151232213', '138 block 8 zone 2', 'Fort Bonifacio', 'Taguig City', 'Madeline G. Lazaro', '09153864099', 'same', '2018-01-22', ''),
(53, 'Enriquez', 'Mike', 'A', 'Reporter', '1998-04-30', '09151232213', '138 block 8 zone 2', 'Fort Bonifacio', 'Taguig City', 'Madeline G. Lazaro', '09153864099', 'same', '2018-01-22', ''),
(63, 'patient_ID', 'patient_ID', 'pat', 'patient_ID', 'patient_ID', 'patient_ID', 'patient_ID', 'patient_ID', 'patient_IDpatient_ID', 'patient_ID', 'patient_ID', 'patient_ID', '2018-01-22', ''),
(99, 'Hwang ', 'Tiffany', 'G', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2018-01-23', ''),
(100, 'test', 'test', 'tes', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2018-01-28', '26913848_1987410777942306_1081251553_n.jpg'),
(101, 'Capistrano', 'Robert', 'C', 'Student', '1998-04-30', '09151232213', '138 block 8 zone 2', 'Fort Bonifacio', 'Taguig City', 'Jan Diether Francia', '09153864099', 'same', '2018-02-01', '2x2.png'),
(102, 'Salinas', 'Khrismar', 'A', 'Student', '1998-04-30', '09151232213', '138 block 8 zone 2', 'Fort Bonifacio', 'Taguig City', 'Jenny Noarin', '09153864099', 'same', '2018-02-01', NULL),
(103, 'Salinas', 'Khrismar', 'G', 'HR ', '1998-04-30', '09151232213', '138 block 8 zone 2', 'Fort Bonifacio', 'Taguig City', 'John Robert Capistrano', '09153864099', 'same', '2018-02-01', '26913848_1987410777942306_1081251553_n1.jpg'),
(104, 'Valenzue', 'Jeru', 'A', 'HR', '1998-04-30', '09151232213', '138 block 8 zone 2', 'Fort Bonifacio', 'Taguig City', 'Veronica Martinez', '09153864099', 'same', '2018-02-01', '2x21.png'),
(105, 'Garcia', 'May ', 'A', 'Teacher', '1998-04-30', '09151232213', '138 block 8 zone 2', 'Fort Bonifacio', 'Taguig City', 'Veronica Martinez', '09153864099', 'same', '2018-02-01', NULL),
(106, 'Test', 'test1', 'a', 'Teacher', '1998-04-30', '0912312321', '123', '123', '123', '12', '123', '123', '2018-02-22', '2x22.png'),
(107, 'Morales', 'Shiela', 'C', 'Student', '1998-04-30', '0912312321', '123', '123', '123', 'Jeru Valenzuela', '09153864099', 'same', '2018-02-22', '2x23.png'),
(108, 'Capistrano', 'Roberta', 'C', 'Professor', '1998-04-30', '09234644144', '123', '123', '123', 'Jeru Valenzuela', '09153864099', 'same address', '2018-02-22', '1.png'),
(109, 'Alcantara', 'Christine', 'A', 'Teacher', '1998-04-30', '09151232213', '138 block 8 zone 2', 'Fort Bonifacio', 'Taguig City', 'Jeru Valenzuela', '09153864099', 'same address', '2018-02-22', '11.png'),
(110, 'Capistrano', 'Christine', 'A', 'Teacher', '1998-04-30', '09151232213', '138 block 8 zone 2', 'Fort Bonifacio', 'Taguig City', 'Madeline G. Lazaro', '09153864099', 'same address', '2018-02-22', '12.png'),
(111, 'Gonzales', 'Ciarra Roxanne', 'G', 'Student', 'August 13, 1998', '09751142946', '1509', '7', 'Caloocan', 'Ma. Carina G. Gonzales', '09751142946', 'Caloocan City', '2018-02-22', '2x24.png'),
(112, 'perez', 'hugo', 'cru', 'housewife', '1998-9-7', '099766544', '789', 'tayuman', 'cavite', 'severino lapidario', '09876543213', 'manila', '2018-02-22', '13.png'),
(113, 'Capistrano', 'Ciarra Roxanne', 'G', 'Teacher', '1998-04-30', '09151232213', '138 block 8 zone 2', 'Fort Bonifacio', 'Taguig City', 'Jeru Valenzuela', '09153864099', 'same address', '2018-02-22', '14.png'),
(114, 'Sumaray', 'Mia Sheen', 'Nan', 'IT expert', '1997-01-13', '09151232213', 'Felix st.', 'Sangandaan', 'Taguig City', 'Jhoniever Dulay', '09301149799', 'Medel. St ', '2018-02-22', '2x25.png'),
(115, 'Capistrano', 'Christine', 'A', 'Teacher', '1998-04-30', '09151232213', '138 block 8 zone 2', 'Fort Bonifacio', 'Taguig City', 'Jeru Valenzuela', '09153864099', 'same address', '2018-02-22', '15.png'),
(116, 'Capistrano', 'Christine', 'A', 'Teacher', '1998-04-30', '09151232213', '138 block 8 zone 2', 'Fort Bonifacio', 'Taguig City', 'Jeru Valenzuela', '09153864099', 'same', '2018-02-22', '16.png'),
(117, 'Capistrano', 'Christine', 'A', 'Teacher', '1998-04-30', '09151232213', '138 block 8 zone 2', 'Fort Bonifacio', 'Taguig City', 'Jeru Valenzuela', '09153864099', 'same address', '2018-02-22', '17.png');

-- --------------------------------------------------------

--
-- Table structure for table `pending_appointment`
--

CREATE TABLE `pending_appointment` (
  `appointment_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` int(15) NOT NULL,
  `date` varchar(25) NOT NULL,
  `time` varchar(25) NOT NULL,
  `clinic_procedure` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `physicalexamination`
--

CREATE TABLE `physicalexamination` (
  `Num` int(11) NOT NULL,
  `patient_ID` int(11) NOT NULL,
  `case_id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `height` varchar(20) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `systolic` varchar(5) NOT NULL,
  `diastolic` varchar(5) NOT NULL,
  `blood_type` varchar(20) NOT NULL,
  `conjunctiva_pale` varchar(20) NOT NULL,
  `conjunctiva_yellowish` varchar(20) NOT NULL,
  `neck_enlarged_thyroid` varchar(20) NOT NULL,
  `neck_enlarged_lymph_nodes` varchar(20) NOT NULL,
  `breast_mass` varchar(20) NOT NULL,
  `breast_nipple_discharge` varchar(20) NOT NULL,
  `breast_dimpling` varchar(20) NOT NULL,
  `breast_enlarged_axillary_lymph_nodes` varchar(20) NOT NULL,
  `thorax_abnormal_cardiac_rate` varchar(20) NOT NULL,
  `thorax_abnormal_respiratory_rate` varchar(20) NOT NULL,
  `abdomen_pe_fundic_height` varchar(20) NOT NULL,
  `abdomen_pe_fetal_heart_tone` varchar(50) NOT NULL,
  `abdomen_pe_fetal_movement` varchar(50) NOT NULL,
  `lm_presenting_part` varchar(50) NOT NULL,
  `lm_position_of_fetal_back` varchar(50) NOT NULL,
  `lm_fetal_parts` varchar(50) NOT NULL,
  `lm_presenting_part_status` varchar(50) NOT NULL,
  `lm_uterine_activity` varchar(50) NOT NULL,
  `perineum_scars` varchar(20) NOT NULL,
  `perineum_warts_or_mass` varchar(20) NOT NULL,
  `perineum_laceration` varchar(20) NOT NULL,
  `perineum_severe_varicosities` varchar(20) NOT NULL,
  `vagina_bartholins_cyst` varchar(20) NOT NULL,
  `vagina_warts_gland_discharge` varchar(20) NOT NULL,
  `vagina_cystocele_or_rectocoele` varchar(20) NOT NULL,
  `vagina_purulant_discharge` varchar(20) NOT NULL,
  `vagina_erosion_or_foreign_body` varchar(20) NOT NULL,
  `cervix_consistency` varchar(500) NOT NULL,
  `cervix_dilatation` varchar(500) NOT NULL,
  `cervix_palpable_presenting_part` varchar(500) NOT NULL,
  `cervix_status_BagOfWater` varchar(500) NOT NULL,
  `impression` varchar(1000) NOT NULL,
  `plans` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `physicalexamination`
--

INSERT INTO `physicalexamination` (`Num`, `patient_ID`, `case_id`, `date`, `height`, `weight`, `systolic`, `diastolic`, `blood_type`, `conjunctiva_pale`, `conjunctiva_yellowish`, `neck_enlarged_thyroid`, `neck_enlarged_lymph_nodes`, `breast_mass`, `breast_nipple_discharge`, `breast_dimpling`, `breast_enlarged_axillary_lymph_nodes`, `thorax_abnormal_cardiac_rate`, `thorax_abnormal_respiratory_rate`, `abdomen_pe_fundic_height`, `abdomen_pe_fetal_heart_tone`, `abdomen_pe_fetal_movement`, `lm_presenting_part`, `lm_position_of_fetal_back`, `lm_fetal_parts`, `lm_presenting_part_status`, `lm_uterine_activity`, `perineum_scars`, `perineum_warts_or_mass`, `perineum_laceration`, `perineum_severe_varicosities`, `vagina_bartholins_cyst`, `vagina_warts_gland_discharge`, `vagina_cystocele_or_rectocoele`, `vagina_purulant_discharge`, `vagina_erosion_or_foreign_body`, `cervix_consistency`, `cervix_dilatation`, `cervix_palpable_presenting_part`, `cervix_status_BagOfWater`, `impression`, `plans`) VALUES
(1, 1, 1, '2017-10-11', '152', '55', '120', '80', 'B', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '1', '1', '1', '1', '1', '1', '1', '1', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '1', '1', '1', '1', 'loyalty', 'loyalty'),
(2, 1, 1, '2017-10-12', '152', '55', '144', '90', 'O', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', '12', '12', '12', '1', '1', '1', '1', '1', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', '1111', '11', '1', '1', 'men', 'men'),
(4, 32, 60, '2017-10-11', '152', '55', '135', '99', 'O', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '2', '1', '1', '3', '32', '31', '3', '2', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', '2', '2', '2', '2', 'mariposa', 'mariposa'),
(5, 1, 1, '2017-10-18', '152', '55', '125', '95', 'B', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '1', 'test', 'test1', 'test', 'test', 'test', 'test', 'test', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'test', 'test', 'test', 'test', 'test', 'test'),
(6, 34, 64, '2017-10-18', '152', '55', '123', '89', 'B', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'test', 'test', 'test', 'test', 'Impression_test', 'plans_test'),
(7, 35, 65, '2017-10-19', '152', '55', '140', '100', 'O', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'test', 'test', 'test1', 'test', 'test', 'test', 'test', 'test', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'test', 'test', 'test', 'test', '1 month pregnant', 'prescribed folic acid for .. '),
(8, 100, 129, '2018-01-28', '146', '61', '120', '80', 'O', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'None', 'None', 'None', 'None', 'None', 'None', 'None', 'None', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'None', 'None', 'None', 'None', '8 Weeks pregnant. Normal state of pregnancy', 'Continue taking Folic Acid'),
(9, 103, 132, '2018-02-01', '146', '61', '120', '80', 'O', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'None', 'None', 'Clockwise', 'None', 'Firm', 'None', 'None', 'Normal', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Normal', 'Normal', 'Normal', 'Normal', '8 weeks pregnant, Normal delivery', 'Continue taking Folic Acid.'),
(10, 99, 138, '2018-02-01', '146', '61', '120', '80', 'O', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'None', 'None', 'clockwise', 'None', 'None', 'Normal', 'None', 'Normal', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Normal', 'Normal', 'Normal', 'Normal', '4 weeks pregnant', 'Continue taking folic acid'),
(11, 104, 139, '2018-02-01', '146', '61', '120', '80', 'O', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'None', 'None', 'Clockwise', 'None', 'None', 'None', 'None', 'Normal', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Normal', 'Normal', 'Normal', 'Normal', '4 weeks pregnant, no notable problems', 'Continue taking Folic Acid'),
(12, 105, 140, '2018-02-01', '146', '61', '120', '80', 'O', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'None', 'None', 'Clockwise', 'None', 'None', 'None', 'None', 'Normal', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Normal', 'None', 'None', 'Normal', '7 weeks pregnant. ', 'Continue taking Folic Acid.. '),
(13, 138, 99, '2018-02-08', '146', '56', '120', '80', 'O', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Normal', 'None', 'Clockwise', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Normal', 'None', 'Normal', 'None', 'test', 'test'),
(14, 138, 99, '2018-02-14', '1', '', '120', '80', 'O', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', '', '', '', '', '', '', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', '', '', '', '', ''),
(15, 138, 99, '2018-02-14', '146', '61', '120', '80', 'O', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'None', 'Normal', 'Clockwise', 'None', 'None', 'None', 'None', 'Normal', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'None', 'None', 'None', 'None', '8 weeks pregnant. ', 'Continue taking folic acid, be careful on what she eats'),
(16, 138, 99, '2018-02-14', '146', '61', '120', '80', 'O', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'None', 'None', 'None', 'None', 'None', 'None', 'None', 'None', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'None', 'None', 'None', 'None', 'None', 'None'),
(17, 106, 141, '2018-02-22', '146', '61', '120', '80', 'O', 'No', 'No', 'No', 'No', 'Yes', 'No', 'No', 'No', 'No', 'No', 'None', 'None', 'None', 'None', 'None', 'None', 'None', 'None', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', '', '', '', '2 weeks pregnant.', 'Continue taking Folic Acid.'),
(18, 107, 142, '2018-02-22', '146', '61', '120', '80', 'O', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'None', 'none', 'None', 'None', 'None', 'Normal ', 'Normal', 'Normal', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'None', 'None', 'Non', 'None', '3 weeks pregnant', 'continue taking Folic Acid.'),
(19, 108, 143, '2018-02-22', '146', '61', '120', '80', 'O', 'No', 'No', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'None', 'None', 'None', 'Normal', 'Normal', 'Normal', 'Normal', 'None', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Normal', 'Normal', 'None', 'None', '4 weeks pregnant. ', 'Continue taking Folic Acid. '),
(20, 109, 144, '2018-02-22', '146', '61', '120', '80', 'O', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'None', 'Normal', 'None', 'None', 'None', 'None', '', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', '', '', '', '', ''),
(21, 110, 145, '2018-02-22', '146', '61', '120', '80', 'O', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal'),
(22, 111, 146, '2018-02-22', '146', '61', '120', '80', 'O', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', '', '', '', '', '', '', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', '', '', '', 'test', 'test'),
(23, 112, 147, '2018-02-22', '146', '61', '120', '80', 'O', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Normal', 'Normal', 'Normal', 'Normal', '3 weeks pregnant.. ', 'continue taking folic acid.'),
(24, 113, 148, '2018-02-22', '146', '61', '120', '80', 'O', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Normal', 'Normal', 'Normal', 'Normal', '3 weeks pregnant.', 'continue taking folic acid,'),
(25, 114, 149, '2018-02-22', '146', '61', '120', '80', 'O', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', 'No', 'Normal', 'Normal', 'Normal', 'Normal', '4 weeks pregnant. Dangerous in love that is why needed to forcep the baby like now na as in now na labas na baby now na.', 'continue taking folic acid. and tempra and drink orange juice in the midnight regularly.'),
(26, 115, 150, '2018-02-22', '146', '61', '120', '80', 'O', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Normal', 'Normal', 'Normal', 'Normal', '3 weeks pregnant. ', 'continue anmun and folic acid.'),
(27, 116, 151, '2018-02-22', '146', '61', '120', '80', 'O', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Normal', 'Normal', 'Normal', 'Normal', '4 weeks pregnant. ', 'Continue taking folic acid. '),
(28, 117, 152, '2018-02-22', '146', '61', '120', '80', 'O', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Normal', 'Normal', 'Normal', 'Normal', '', 'Continue taking folic acid');

-- --------------------------------------------------------

--
-- Table structure for table `postnatal`
--

CREATE TABLE `postnatal` (
  `postnatal_id` int(11) NOT NULL,
  `case_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `infant_id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `patient_weight` varchar(15) NOT NULL,
  `infant_height` varchar(15) NOT NULL,
  `blood_pressure` varchar(15) NOT NULL,
  `impression` varchar(5000) NOT NULL,
  `plans` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `task_id` int(11) NOT NULL,
  `task_content` varchar(500) NOT NULL,
  `task_creator` varchar(50) NOT NULL,
  `date` varchar(25) NOT NULL,
  `time` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`task_id`, `task_content`, `task_creator`, `date`, `time`) VALUES
(1, 'Restock medicine items', 'test1', '2017-10-28', '9:57 PM'),
(2, 'clean delivery room', 'test1', '2017-10-28', '10:55pm'),
(21, 'qwerty', 'test1', '2017-11-14', '11:08'),
(20, 'yeh', 'test1', '2017-11-12', '09:21'),
(19, 'yeh', 'test1', '2017-11-12', '09:20'),
(18, 'yeh', 'test1', '2017-11-12', '09:20'),
(17, 'hehe', 'test1', '2017-11-12', '09:19'),
(16, 'hehe', 'test1', '2017-11-12', '09:18'),
(15, 'arte', 'test1', '2017-11-12', '09:09'),
(14, 'qwew', 'test1', '2017-11-12', '09:09'),
(13, 'hey', 'test1', '2017-11-12', '09:08');

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`user_id`, `username`, `password`) VALUES
(1, 'admin', '5a105e8b9d40e1329780d62ea2265d8a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`activity_log_id`);

--
-- Indexes for table `calendar_events`
--
ALTER TABLE `calendar_events`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `case`
--
ALTER TABLE `case`
  ADD PRIMARY KEY (`case_id`),
  ADD KEY `patient_ID` (`patient_ID`);

--
-- Indexes for table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`consultation_id`),
  ADD KEY `infant_id` (`infant_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `infant_info`
--
ALTER TABLE `infant_info`
  ADD PRIMARY KEY (`infant_id`),
  ADD KEY `patient_id` (`patient_ID`),
  ADD KEY `case_id` (`case_id`);

--
-- Indexes for table `medicalhistory`
--
ALTER TABLE `medicalhistory`
  ADD PRIMARY KEY (`Num`),
  ADD KEY `case_id` (`case_id`),
  ADD KEY `Patient_ID` (`Patient_ID`);

--
-- Indexes for table `online_appointment`
--
ALTER TABLE `online_appointment`
  ADD PRIMARY KEY (`ol_appointment_id`);

--
-- Indexes for table `patient_account`
--
ALTER TABLE `patient_account`
  ADD PRIMARY KEY (`account_ID`),
  ADD UNIQUE KEY `patient_ID` (`patient_ID`);

--
-- Indexes for table `patient_info`
--
ALTER TABLE `patient_info`
  ADD PRIMARY KEY (`patient_ID`);

--
-- Indexes for table `pending_appointment`
--
ALTER TABLE `pending_appointment`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `physicalexamination`
--
ALTER TABLE `physicalexamination`
  ADD PRIMARY KEY (`Num`),
  ADD KEY `case_id` (`case_id`),
  ADD KEY `Patient_ID` (`patient_ID`);

--
-- Indexes for table `postnatal`
--
ALTER TABLE `postnatal`
  ADD PRIMARY KEY (`postnatal_id`),
  ADD KEY `case_id` (`case_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`task_id`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `activity_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `calendar_events`
--
ALTER TABLE `calendar_events`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `case`
--
ALTER TABLE `case`
  MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;
--
-- AUTO_INCREMENT for table `consultation`
--
ALTER TABLE `consultation`
  MODIFY `consultation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `infant_info`
--
ALTER TABLE `infant_info`
  MODIFY `infant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `medicalhistory`
--
ALTER TABLE `medicalhistory`
  MODIFY `Num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `online_appointment`
--
ALTER TABLE `online_appointment`
  MODIFY `ol_appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `patient_account`
--
ALTER TABLE `patient_account`
  MODIFY `account_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `patient_info`
--
ALTER TABLE `patient_info`
  MODIFY `patient_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
--
-- AUTO_INCREMENT for table `pending_appointment`
--
ALTER TABLE `pending_appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `physicalexamination`
--
ALTER TABLE `physicalexamination`
  MODIFY `Num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `case`
--
ALTER TABLE `case`
  ADD CONSTRAINT `case_ibfk_1` FOREIGN KEY (`patient_ID`) REFERENCES `patient_info` (`patient_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient_account`
--
ALTER TABLE `patient_account`
  ADD CONSTRAINT `patient_account_ibfk_1` FOREIGN KEY (`patient_ID`) REFERENCES `patient_info` (`patient_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `postnatal`
--
ALTER TABLE `postnatal`
  ADD CONSTRAINT `postnatal_ibfk_1` FOREIGN KEY (`case_id`) REFERENCES `case` (`case_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
