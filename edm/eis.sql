-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 25, 2019 at 01:42 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eis`
--
CREATE DATABASE IF NOT EXISTS `eis` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `eis`;

-- --------------------------------------------------------

--
-- Table structure for table `agp_transition`
--

DROP TABLE IF EXISTS `agp_transition`;
CREATE TABLE IF NOT EXISTS `agp_transition` (
  `e_no` varchar(10) NOT NULL,
  `emailid` varchar(300) NOT NULL,
  `doc_id` varchar(30) NOT NULL,
  `old_agp` int(11) NOT NULL,
  `new_agp` int(11) NOT NULL,
  `wef_date` date NOT NULL,
  `letter_no` varchar(300) NOT NULL,
  `file_url` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `appointment_details`
--

DROP TABLE IF EXISTS `appointment_details`;
CREATE TABLE IF NOT EXISTS `appointment_details` (
  `e_no` varchar(10) DEFAULT NULL,
  `emailid` varchar(300) DEFAULT NULL,
  `doc_id` varchar(30) DEFAULT NULL,
  `appointment_type` varchar(10) DEFAULT NULL,
  `tsd` date DEFAULT NULL,
  `ted` date DEFAULT NULL,
  `letter_number` varchar(50) DEFAULT NULL,
  `file_url` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointment_details`
--

INSERT INTO `appointment_details` (`e_no`, `emailid`, `doc_id`, `appointment_type`, `tsd`, `ted`, `letter_number`, `file_url`) VALUES
('N497', 'radharani.akkipedi@sakec.ac.in', 'sakec5c8e2699425e2', 'Adhoc', '2019-03-15', '2019-12-31', 'SAKEC/2019/JUNE/790/2018-19', ''),
('N497', 'radharani.akkipedi@sakec.ac.in', 'sakec5c8e292c64ae7', 'Regular', '2019-03-13', '0000-00-00', 'SAKEC/2019/JUNE/790/2018-19', 'appointment_letters/N497_Regular_March2019.pdf'),
('dfsd', 'dfgdfgfd', 'fdgdf', 'dfgfdg', '2019-07-02', NULL, 'fdgf', 'fdgfg'),
('bgc', 'vcbvc', 'cvbvc', 'vcbvc', '2019-07-02', NULL, 'fgfd', 'xcvxc'),
('N631', 'chetan.mahajan@sakec.ac.in', 'sakec5d88929371eb0', 'Regular', '2019-09-04', NULL, 'bbvvvvcb', 'appointment_letters/N631_Regular_September2019.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

DROP TABLE IF EXISTS `emp`;
CREATE TABLE IF NOT EXISTS `emp` (
  `e_no` varchar(5) DEFAULT NULL,
  `e_name` varchar(29) DEFAULT NULL,
  `dept` varchar(31) DEFAULT NULL,
  `emailid` varchar(34) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `designation` varchar(28) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `doj` date DEFAULT NULL,
  `type` varchar(7) DEFAULT NULL,
  `panno` varchar(12) DEFAULT NULL,
  `aadharno` varchar(12) DEFAULT NULL,
  `etype` varchar(12) DEFAULT NULL,
  `dor` varchar(10) DEFAULT NULL,
  `qualification` varchar(20) DEFAULT NULL,
  `qualification_join` varchar(20) DEFAULT NULL,
  `curr_basic` varchar(20) DEFAULT NULL,
  `agp` varchar(20) DEFAULT NULL,
  `consolidated_pay` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`e_no`, `e_name`, `dept`, `emailid`, `mobile`, `designation`, `dob`, `doj`, `type`, `panno`, `aadharno`, `etype`, `dor`, `qualification`, `qualification_join`, `curr_basic`, `agp`, `consolidated_pay`) VALUES
('N669', 'DR.BHAVESH V.PATEL', 'COMPUTER', 'bhavesh.patel@sakec.ac.in', '9820021466', 'Principal', '1971-03-20', '2016-10-20', 'Regular', 'AFDPP5686B', '483652042186', 'teaching', '', '', '', '', '', ''),
('N497', 'RADHARANI NARAYANRAO A', 'CHEMISTRY', 'radharani.akkipedi@sakec.ac.in', '9969386444', 'Assistant Professor', '1969-05-28', '2018-08-01', 'Adhoc', 'AHFPA5611D', '', 'teaching', '', '', '', '', '', ''),
('N549', 'NATH ARCHANA SUKHENDU', 'CHEMISTRY', 'archana.nath@sakec.ac.in', '9869202780', 'Assistant Professor', '1971-05-31', '2014-01-06', 'Regular', 'AMFPN0659M', '', 'teaching', '', '', '', '', '', ''),
('N720', 'NEELAM MUKUND JAGTAP', 'CHEMISTRY', 'neelam.jagtap@sakec.ac.in', '9833642271', 'Assistant Professor', '1971-12-26', '2018-08-06', 'Regular', 'AEFPJ0915A', '430792310161', 'teaching', '', '', '', '', '', ''),
('N321', 'SANJAY CHUDAMAN PATIL', 'COMMUNICATION SKILLS', 'sanjay.patil@sakec.ac.in', '9322224846', 'Assistant Professor', '1968-03-19', '2005-08-24', 'Regular', 'AJTPP2161R', '976589229403', 'teaching', '', '', '', '', '', ''),
('N328', 'GUNDAPUNERI SHARMILA', 'COMMUNICATION SKILLS', 'sharmila.gundapuneri@sakec.ac.in', '9769324678', 'Assistant Professor', '1973-12-01', '2005-08-29', 'Regular', 'AJYPG3208K', '', 'teaching', '', '', '', '', '', ''),
('N721', 'MANRAL JAGAT SINGH', 'COMMUNICATION SKILLS', 'jagat.manral@sakec.ac.in', '9821403823', 'Assistant Professor', '1966-12-27', '2018-08-06', 'Regular', 'AKVPM7269G', '657508912657', 'teaching', '', '', '', '', '', ''),
('N006', 'VINIT.C.KOTAK', 'COMPUTER', 'vinit.kotak@sakec.ac.in', '9322211207', 'Professor', '1966-11-01', '1989-01-08', 'Regular', 'ACGPK7475F', '', 'teaching', '', '', '', '', '', ''),
('N020', 'J.P.SINGH', 'COMPUTER', 'jayprakash.singh@sakec.ac.in', '9892561378', 'Professor', '1960-09-15', '1995-12-18', 'Regular', 'AROPS-9776-L', '', 'teaching', '', '', '', '', '', ''),
('N146', 'UDAY BHAVE', 'COMPUTER', 'uday.bhave@sakec.ac.in', '9323839556', 'Associate Professor', '1968-02-07', '1996-08-01', 'Regular', 'ACCPB8338E', '', 'teaching', '', '', '', '', '', ''),
('N187', 'REKHA RAMESH UNNI', 'COMPUTER', 'rekha.ramesh@sakec.ac.in', '9869430961', 'Associate Professor', '1972-03-06', '1999-01-01', 'Regular', 'AGSPR4270P', '925713137261', 'teaching', '', '', '', '', '', ''),
('N233', 'DEVMANE VIDYULLATA V.', 'COMPUTER', 'vidyullata.devmane@sakec.ac.in', '7666228939', 'Associate Professor', '1977-12-12', '2001-01-24', 'Regular', 'AHDPD0142L', '819972681094', 'teaching', '', '', '', '', '', ''),
('N257', 'BHAKTI MANEESH SONAWANE', 'COMPUTER', 'bhakti.sonawane@sakec.ac.in', '9322307178', 'Assistant Professor', '1978-12-21', '2007-08-21', 'Regular', 'BOKPS9051L', '301986377455', 'teaching', '', '', '', '', '', ''),
('N270', 'SHAHZIA M.SAYYAD', 'COMPUTER', 'shahzia.sayyad@sakec.ac.in', '9867984565', 'Assistant Professor', '1980-02-01', '2003-09-01', 'Regular', 'BAQPS6179B', '', 'teaching', '', '', '', '', '', ''),
('N300', 'VAISHALI V.HIRLEKAR', 'COMPUTER', 'vaishali.hirlekar@sakec.ac.in', '8454844993', 'Assistant Professor', '1979-09-21', '2016-11-07', 'Regular', 'AJIPK2010K', '', 'teaching', '', '', '', '', '', ''),
('N311', 'MANIMALA MAHATO', 'COMPUTER', 'manimala.mahato@sakec.ac.in', '9967355848', 'Assistant Professor', '1980-11-06', '2005-01-01', 'Regular', 'ALPPM7341G', '637623548096', 'teaching', '', '', '', '', '', ''),
('N315', 'DHANDE MANOJ S', 'COMPUTER', 'manoj.dhande@sakec.ac.in', '7738339960', 'Assistant Professor', '1979-01-30', '2005-01-17', 'Regular', 'AHGPD9924P', '', 'teaching', '', '', '', '', '', ''),
('N323', 'SHASHIKANT SUDHAKARRAO RADKE', 'COMPUTER', 'shashikant.radke@sakec.ac.in', '9870217383', 'Assistant Professor', '1980-04-12', '2005-08-29', 'Regular', 'AHQPR5687K', '394780307045', 'teaching', '', '', '', '', '', ''),
('N325', 'KHAIRNAR MILIND S.', 'COMPUTER', 'milind.khairnar@sakec.ac.in', '9322319066', 'Assistant Professor', '1973-04-25', '2005-09-01', 'Regular', 'APGPK1665L', '', 'teaching', '', '', '', '', '', ''),
('N339', 'SONALI AMOL BHUTAD', 'COMPUTER', 'sonali.bhutad@sakec.ac.in', '9920257131', 'Assistant Professor', '1982-05-13', '2006-06-01', 'Regular', 'ALYPB2411R', '', 'teaching', '', '', '', '', '', ''),
('N380', 'DESHMANE PALLAVI EKNATH', 'COMPUTER', 'pallavi.deshmane@sakec.ac.in', '8425826206', 'Assistant Professor', '1984-05-05', '2008-03-01', 'Regular', 'AMAPD3435C', '', 'teaching', '', '', '', '', '', ''),
('N387', 'CHAVAN VAISHALI V', 'COMPUTER', 'vaishali.chavan@sakec.ac.in', '9820992838', 'Assistant Professor', '1980-05-16', '2007-08-21', 'Regular', 'ADGPL3982P', '', 'teaching', '', '', '', '', '', ''),
('N395', 'VISHWAKARMA PINKI', 'COMPUTER', 'pinki.vishwakarma@sakec.ac.in', '9967440968', 'Associate Professor', '1976-09-11', '2010-08-02', 'Regular', 'ADNPV1454B', '', 'teaching', '', '', '', '', '', ''),
('N411', 'CHATURVEDI DEEPSHIKHA A', 'COMPUTER', 'deepshikha.chaturvedi@sakec.ac.in', '9833507773', 'Assistant Professor', '1979-10-23', '2008-08-01', 'Regular', 'AHKPC0251G', '348989539264', 'teaching', '', '', '', '', '', ''),
('N432', 'MARU TINA HIMANSHU', 'COMPUTER', 'tina.maru@sakec.ac.in', '8454040291', 'Assistant Professor', '1986-07-12', '2010-08-02', 'Regular', 'BBMPS4773G', '', 'teaching', '', '', '', '', '', ''),
('N442', 'KALANTRI SHILPA PRASHANT', 'COMPUTER', 'shilpa.kalantri@sakec.ac.in', '9892263629', 'Assistant Professor', '1976-11-10', '2009-02-16', 'Regular', 'AJAPK0230B', '', 'teaching', '', '', '', '', '', ''),
('N458', 'BORHADE KARUNA J.', 'COMPUTER', 'karuna.borhade@sakec.ac.in', '7977512303', 'Assistant Professor', '1979-05-08', '2009-08-01', 'Regular', 'ALVPB2071Q', '', 'teaching', '', '', '', '', '', ''),
('N459', 'AMOL ATMARAM DHUMAL', 'COMPUTER', 'amol.dhumal@sakec.ac.in', '8108274799', 'Assistant Professor', '1979-11-23', '2009-07-14', 'Regular', 'AISPD3628B', '723797696423', 'teaching', '', '', '', '', '', ''),
('N511', 'DEEPTI NITIN PAWAR', 'COMPUTER', 'deepti.pawar@sakec.ac.in', '9867405412', 'Assistant Professor', '1985-07-31', '2014-01-06', 'Regular', 'DIMPS5530L', '', 'teaching', '', '', '', '', '', ''),
('N525', 'CHOTAI KRUPA GAURAV', 'COMPUTER', 'krupa.chotai@sakec.ac.in', '9619714086', 'Assistant Professor', '1983-05-17', '2018-07-07', 'Adhoc', 'APLPP7986E', '', 'teaching', '', '', '', '', '', ''),
('N538', 'KALE RUPALI S', 'COMPUTER', 'rupali.kale@sakec.ac.in', '9769721157', 'Assistant Professor', '1982-02-07', '2014-01-06', 'Regular', 'ANRPK4060C', '', 'teaching', '', '', '', '', '', ''),
('N555', 'JAYA  AMIT ZALTE', 'COMPUTER', 'jaya.zalte@sakec.ac.in', '9833176448', 'Assistant Professor', '1986-12-06', '2013-03-01', 'Regular', 'ABAPF1166D', '', 'teaching', '', '', '', '', '', ''),
('N562', 'TEJAS SUKHDEO HIRVE', 'COMPUTER', 'tejas.hirve@sakec.ac.in', '8879277441', 'Assistant Professor', '1984-04-19', '2014-01-06', 'Regular', 'ACRPH1579C', '', 'teaching', '', '', '', '', '', ''),
('N563', 'ATUL HARIBAHU KACHARE', 'COMPUTER', 'atul.kachare@sakec.ac.in', '9867718014', 'Assistant Professor', '1989-02-04', '2016-07-11', 'Regular', 'BWIPK3565K', '', 'teaching', '', '', '', '', '', ''),
('N592', 'SHWETA M.PATIL', 'COMPUTER', 'shweta.patil@sakec.ac.in', '8693888700', 'Assistant Professor', '1989-10-17', '2018-07-07', 'Adhoc', 'BSQPP7762M', '', 'teaching', '', '', '', '', '', ''),
('N595', 'MONIKA RAVISHANKAR KANOJIYA', 'COMPUTER', 'monika.kanojiya@sakec.ac.in', '9022746476', 'Assistant Professor', '1987-08-26', '2014-02-10', 'Regular', 'bqopk7529k', '', 'teaching', '', '', '', '', '', ''),
('N605', 'RANE SARIKA PARESH', 'COMPUTER', 'sarika.rane@sakec.ac.in', '9833625070', 'Assistant Professor', '1985-06-02', '2014-08-25', 'Regular', 'BAWPP1822Q', '', 'teaching', '', '', '', '', '', ''),
('N614', 'THAKUR DHANSHREE KASHINATH', 'COMPUTER', 'dhanshree.thakur@sakec.ac.in', '7208716548', 'Assistant Professor', '1986-11-06', '2018-07-07', 'Adhoc', 'AKNPT2501Q', '', 'teaching', '', '', '', '', '', ''),
('N616', 'NIKUMBH DEEPTI DEEPAK', 'COMPUTER', 'deepti.nikumbh@sakec.ac.in', '9769973931', 'Assistant Professor', '1986-07-27', '2014-09-01', 'Regular', 'AKHPJ9757E', '', 'teaching', '', '', '', '', '', ''),
('N627', 'EKHANDE DEEPA BABAN', 'COMPUTER', 'deepa.ekhande@sakec.ac.in', '9503984088', 'Assistant Professor', '1990-04-25', '2018-07-07', 'Adhoc', 'AAXPE6781F', '', 'teaching', '', '', '', '', '', ''),
('N655', 'RAUT SONAL DILIP', 'COMPUTER', 'sonal.raut@sakec.ac.in', '9768902040', 'Assistant Professor', '1990-10-03', '2018-07-07', 'Adhoc', 'BDMPR7245G', '', 'teaching', '', '', '', '', '', ''),
('N665', 'REKHA GOVIND MORE', 'COMPUTER', 'rekha.more@sakec.ac.in', '7045218437', 'Assistant Professor', '1987-08-17', '2018-07-07', 'Adhoc', 'AZRPM3887H', '', 'teaching', '', '', '', '', '', ''),
('N674', 'FULZELE RADHIKA SUNIL', 'COMPUTER', 'radhika.fulzele@sakec.ac.in', '7276473707', 'Assistant Professor', '1990-08-13', '2018-07-07', 'Adhoc', 'ACNPF3690E', '792298998140', 'teaching', '', '', '', '', '', ''),
('N675', 'SHEWALE SNEHAL MADHUKAR', 'COMPUTER', 'snehalshewale2008@gmail.com', '9822806314', 'Assistant Professor', '1987-10-21', '2018-07-07', 'Adhoc', 'DLAPS0742D', '964076352261', 'teaching', '', '', '', '', '', ''),
('N677', 'PRADIP SURESH MANE', 'COMPUTER', 'pradip.mane@sakec.ac.in', '9167778911', 'Assistant Professor', '1986-10-05', '2018-07-07', 'Adhoc', 'AYKPM4978R', '871687253540', 'teaching', '', '', '', '', '', ''),
('N708', 'PRIYANKA SUNIL SHENDE', 'COMPUTER', 'priyanka.shende@sakec.ac.in', '9665707255', 'Assistant Professor', '1988-06-27', '2018-07-07', 'Adhoc', 'CLSPS1613Q', '838584265863', 'teaching', '', '', '', '', '', ''),
('N709', 'PRIYANKA  ANIL GHULE', 'COMPUTER', 'priyanka.ghule@sakec.ac.in', '', 'Assistant Professor', '1987-12-10', '2018-07-07', 'Adhoc', 'AUWPB0513H', '224132846392', 'teaching', '', '', '', '', '', ''),
('N711', 'ARCHANA KAMLAKANT SALASKAR', 'COMPUTER', 'archana.salaskar@sakec.ac.in', '9619519468', 'Assistant Professor', '1981-07-01', '2018-07-07', 'Adhoc', 'BJPS5556F', '633935720505', 'teaching', '', '', '', '', '', ''),
('N715', 'PRIYANKA YASHODHAN ABHYANKAR', 'COMPUTER', 'priyanka.abhyankar@sakec.ac.in', '9619467127', 'Assistant Professor', '1990-10-28', '2018-07-07', 'Adhoc', 'ANIPJ9649K', '348670708631', 'teaching', '', '', '', '', '', ''),
('N726', 'DIPTI MAHESH MUKADAM', 'COMPUTER', '', '', 'Assistant Professor', '1985-02-15', '2019-01-01', 'Adhoc', 'AXKPP5884C', '306828499060', 'teaching', '', '', '', '', '', ''),
('N727', 'VIDYA ROSHAN KOTTARI', 'COMPUTER', 'vidya.kottari@sakec.ac.in', '7738177004', 'Assistant Professor', '1987-08-25', '2019-01-01', 'Adhoc', 'DIWPK8375P', '819448187337', 'teaching', '', '', '', '', '', ''),
('N728', 'KIRAN ASHOK GUNJAL', 'COMPUTER', '', '', 'Assistant Professor', '1986-03-03', '2019-01-14', 'Adhoc', 'AOLPG4669Q', '325579159060', 'teaching', '', '', '', '', '', ''),
('N132', 'GOGATE VIDYA S.', 'ELECTRONICS', 'vidya.gogate@sakec.ac.in', '9619037320', 'Associate Professor', '1968-04-04', '1995-07-10', 'Regular', 'AEPPG1676K', '', 'teaching', '', '', '', '', '', ''),
('N159', 'SHIKHA SHRIVASTAVA', 'ELECTRONICS', 'shikha.shrivastava@sakec.ac.in', '9820925187', 'Associate Professor', '1965-04-12', '1997-01-01', 'Regular', 'AAFPS-9464-H', '', 'teaching', '', '', '', '', '', ''),
('N202', 'P.G.KHEDKAR', 'ELECTRONICS', 'prashant.khedkar@sakec.ac.in', '9820759833', 'Associate Professor', '1967-05-30', '1999-01-11', 'Regular', 'AMTPK1906A', '', 'teaching', '', '', '', '', '', ''),
('N210', 'NARKHEDE N.S.', 'ELECTRONICS', 'nandkishor.narkhede@sakec.ac.in', '9869829359', 'Associate Professor', '1973-04-13', '1999-07-05', 'Regular', 'ADEPN8662Q', '', 'teaching', '', '', '', '', '', ''),
('N295', 'PREETHI  S.WARRIER', 'ELECTRONICS', 'preethi.warrier@sakec.ac.in', '9860269888', 'Assistant Professor', '1981-06-13', '2013-07-01', 'Regular', 'ABAPW0962C', '', 'teaching', '', '', '', '', '', ''),
('N306', 'MINAL M.PURANIK', 'ELECTRONICS', 'minal.puranik@sakec.ac.in', '9323106641', 'Assistant Professor', '1979-05-14', '2005-01-01', 'Regular', 'APTPP5993B', '', 'teaching', '', '', '', '', '', ''),
('N312', 'BABYCHEN KUNNEL MATHEW', 'ELECTRONICS', 'babychen.mathew@sakec.ac.in', '9892939301', 'Associate Professor', '1971-05-31', '2005-01-06', 'Regular', 'ALJPM3199E', '380648671354', 'teaching', '', '', '', '', '', ''),
('N313', 'SUBHA SUBRAMANIAM', 'ELECTRONICS', 'subha.subramaniam@sakec.ac.in', '9967013504', 'Associate Professor', '1977-05-10', '2005-01-07', 'Regular', 'AGGPP3366A', '', 'teaching', '', '', '', '', '', ''),
('N316', 'ASHA DURAFE', 'ELECTRONICS', 'asha.durafe@sakec.ac.in', '9004048302', 'Assistant Professor', '1980-10-17', '2005-01-17', 'Regular', 'AFUPC2547M', '', 'teaching', '', '', '', '', '', ''),
('N324', 'SALABHA JOY JACOB', 'ELECTRONICS', 'salabha.jacob@sakec.ac.in', '9969286001', 'Assistant Professor', '1974-05-25', '2005-08-29', 'Regular', 'AIGPJ2984G', '', 'teaching', '', '', '', '', '', ''),
('N327', 'RAMESHWARI SACHIN MANE', 'ELECTRONICS', 'rameshwari.mane@sakec.ac.in', '9892746193', 'Assistant Professor', '1981-04-19', '2005-08-29', 'Regular', 'ALTPM2786P', '793642721290', 'teaching', '', '', '', '', '', ''),
('N359', 'MOTEWAR SHUBHANGI D.', 'ELECTRONICS', 'shubhangi.motewar@sakec.ac.in', '9833652186', 'Assistant Professor', '1975-11-01', '2006-10-09', 'Regular', 'AKCPM8219P', '', 'teaching', '', '', '', '', '', ''),
('N370', 'MANISHA V.MANE', 'ELECTRONICS', 'manisha.mane@sakec.ac.in', '9860962216', 'Assistant Professor', '1980-05-15', '2007-06-04', 'Regular', 'BEQPK8982Q', '', 'teaching', '', '', '', '', '', ''),
('N377', 'KULKARNI MANJUSHA  PRAVIN', 'ELECTRONICS', 'manjusha.kulkarni@sakec.ac.in', '8454848087', 'Assistant Professor', '1978-06-02', '2007-07-14', 'Regular', 'ATSPK9831G', '', 'teaching', '', '', '', '', '', ''),
('N416', 'BUKKAWAR SARIKA NAHUSH', 'ELECTRONICS', 'sarika.bukkawar@sakec.ac.in', '9819669962', 'Assistant Professor', '1977-02-18', '2008-07-31', 'Regular', 'AJXPB6711B', '', 'teaching', '', '', '', '', '', ''),
('N417', 'BHOLE JAYASHREE R.', 'ELECTRONICS', 'jayashree.bhole@sakec.ac.in', '9702282812', 'Assistant Professor', '1982-08-31', '2008-07-31', 'Regular', 'AZPPB1977K', '', 'teaching', '', '', '', '', '', ''),
('N425', 'NALAWADE ANITA SUNIL', 'ELECTRONICS', 'anita.nalawade@sakec.ac.in', '9004699747', 'Assistant Professor', '1982-01-15', '2008-10-01', 'Regular', 'BOKPS6146E', '', 'teaching', '', '', '', '', '', ''),
('N508', 'NIBHA M DESAI', 'ELECTRONICS', 'nibha.desai@sakec.ac.in', '9320210378', 'Assistant Professor', '1983-04-29', '2013-02-25', 'Regular', 'AKYPD5887E', '', 'teaching', '', '', '', '', '', ''),
('N545', 'TIWARI AMIT SATYANARAYAN', 'ELECTRONICS', 'amit.tiwari@sakec.ac.in', '9769059121', 'Assistant Professor', '1986-07-05', '2014-01-06', 'Regular', 'AHCPT4743J', '', 'teaching', '', '', '', '', '', ''),
('N551', 'BERA APRAJITA SIDDHARTH', 'ELECTRONICS', 'aparajita.bera@sakec.ac.in', '9833748985', 'Assistant Professor', '1987-01-12', '2013-02-25', 'Regular', 'ATVPD5542N', '', 'teaching', '', '', '', '', '', ''),
('N587', 'UMA RAJ', 'ELECTRONICS', 'uma.raj@sakec.ac.in', '9892907203', 'Assistant Professor', '1985-09-01', '2016-07-11', 'Regular', 'ADFPU2086G', '', 'teaching', '', '', '', '', '', ''),
('N609', 'PEDNEKAR MADHURA AMEY', 'ELECTRONICS', 'madhura.pednekar@sakec.ac.in', '9920247530', 'Assistant Professor', '1982-11-28', '2018-07-07', 'Adhoc', 'AWQPK1815K', '', 'teaching', '', '', '', '', '', ''),
('N654', 'POOJA AMOL POLSHETWAR', 'ELECTRONICS', 'pooja.duddalwar@sakec.ac.in', '9892001660', 'Assistant Professor', '1987-12-09', '2018-07-07', 'Adhoc', 'AYRPD2776P', '', 'teaching', '', '', '', '', '', ''),
('N658', 'SINGH PRIYANKA BHOPAL', 'ELECTRONICS', 'priyanka.singh@sakec.ac.in', '9759949138', 'Assistant Professor', '1988-08-26', '2018-07-07', 'Adhoc', 'CXRPS8098E', '', 'teaching', '', '', '', '', '', ''),
('N689', 'NEHETE AMRUTA LILADHAR', 'ELECTRONICS', 'amruta.nehete@sakec.ac.in', '9923800408', 'Assistant Professor', '1989-02-18', '2018-07-07', 'Adhoc', 'AOCPN2048B', '681509601264', 'teaching', '', '', '', '', '', ''),
('N693', 'KAMBLE UDAYAN BABAN', 'ELECTRONICS', 'udayan.kamble@sakec.ac.in', '9769750332', 'Assistant Professor', '1983-08-12', '2018-07-07', 'Adhoc', 'AUCPK3402C', '432474348564', 'teaching', '', '', '', '', '', ''),
('N694', 'MISHRA DEEPAK SHARMA', 'ELECTRONICS', 'deepak.mishra@sakec.ac.in', '9891150272', 'Assistant Professor', '1990-01-11', '2018-07-07', 'Adhoc', 'CAQPM4231H', '892460103572', 'teaching', '', '', '', '', '', ''),
('N275', 'T.P.VINUTHA', 'ELECTRONICS & TELECOMMUNICATION', 'vinutha.tp@sakec.ac.in', '9324605780', 'Assistant Professor', '1970-03-15', '2003-09-01', 'Regular', 'AHRPG4251H', '', 'teaching', '', '', '', '', '', ''),
('N456', 'TIKARIA MAMTA A.', 'ELECTRONICS & TELECOMMUNICATION', 'mamta.tikaria@sakec.ac.in', '9969704064', 'Assistant Professor', '1978-12-01', '2009-07-15', 'Regular', 'AEKPT0136J', '', 'teaching', '', '', '', '', '', ''),
('N509', 'GAURI RAKESH CHAVAN', 'ELECTRONICS & TELECOMMUNICATION', 'gauri.chavan@sakec.ac.in', '8108877533', 'Assistant Professor', '1982-06-01', '2016-07-11', 'Regular', 'AJTPB9510C', '', 'teaching', '', '', '', '', '', ''),
('N606', 'SAHU SHRIDHAR RAMKRISHNA', 'ELECTRONICS & TELECOMMUNICATION', 'shridhar.sahu@sakec.ac.in', '9969988751', 'Assistant Professor', '1989-04-14', '2016-07-11', 'Regular', 'BNVPS3175F', '', 'teaching', '', '', '', '', '', ''),
('N610', 'BORGALLI ROHAN APPASAHEB', 'ELECTRONICS & TELECOMMUNICATION', 'rohan.borgali@sakec.ac.in', '9821057992', 'Assistant Professor', '1990-05-23', '2014-09-01', 'Regular', 'BXFPB2087P', '849322909959', 'teaching', '', '', '', '', '', ''),
('N619', 'TANK ASHISH BABUBHAI', 'ELECTRONICS & TELECOMMUNICATION', 'ashish.tank@sakec.ac.in', '9930997484', 'Assistant Professor', '1989-03-11', '2018-07-07', 'Adhoc', 'AKUPT9078P', '', 'teaching', '', '', '', '', '', ''),
('N647', 'KURUP SUJITHA SASIDHARA', 'ELECTRONICS & TELECOMMUNICATION', 'sujitha.kurup@sakec.ac.in', '9833674927', 'Assistant Professor', '1988-01-05', '2018-07-07', 'Adhoc', 'BKTPK0166R', '', 'teaching', '', '', '', '', '', ''),
('N649', 'SARODE JAGDISH PRALHAD', 'ELECTRONICS & TELECOMMUNICATION', 'jagdish.sarode@sakec.ac.in', '9373450831', 'Assistant Professor', '1970-07-19', '2016-07-11', 'Regular', 'BKMPS3549B', '367419811285', 'teaching', '', '', '', '', '', ''),
('N667', 'KAWALE SEEMA BHAGWAN', 'ELECTRONICS & TELECOMMUNICATION', 'seema.kawale@sakec.ac.in', '9594258315', 'Assistant Professor', '1989-09-21', '2018-07-07', 'Adhoc', 'BKBPK4217M', '455203210954', 'teaching', '', '', '', '', '', ''),
('N690', 'DESHPANDE GAURI GANGADHAR', 'ELECTRONICS & TELECOMMUNICATION', 'gauri.deshpande@sakec.ac.in', '9665167387', 'Assistant Professor', '1991-11-20', '2018-07-07', 'Adhoc', 'ATVPD3824F', '948067821619', 'teaching', '', '', '', '', '', ''),
('N692', 'PAWAR BHUSHAN DILIP', 'ELECTRONICS & TELECOMMUNICATION', 'bhushan.pawar@sakec.ac.in', '7977144103', 'Assistant Professor', '1987-10-28', '2018-07-07', 'Adhoc', 'BCBPP0896B', '442434748207', 'teaching', '', '', '', '', '', ''),
('N717', 'ASHWIN PUNA KAMBLE', 'ELECTRONICS & TELECOMMUNICATION', 'ashwin.kamble@sakec.ac.in', '8793569561', 'Assistant Professor', '1989-09-20', '2018-07-07', 'Adhoc', 'CCMPK5188B', '437207588705', 'teaching', '', '', '', '', '', ''),
('N719', 'KHUSHBOO SINGH', 'ELECTRONICS & TELECOMMUNICATION', 'khushboo.singh@sakec.ac.in', '9969358041', 'Assistant Professor', '1986-11-19', '2018-07-07', 'Adhoc', 'AVWPS0274R', '404506463369', 'teaching', '', '', '', '', '', ''),
('N024', 'ABDUL W.KHAN', 'ENGINEERING SCIENCE', 'abdul.khan@sakec.ac.in', '9821408645', 'Associate Professor', '1963-07-01', '1991-01-01', 'Regular', 'ADIPK8799F', '333063691284', 'teaching', '', '', '', '', '', ''),
('N027', 'SADASHIV PANDURANG DAHAKE', 'HUMANITIES S.S.', 'sadashiv.dahake@sakec.ac.in', '9869342363', 'Associate Professor', '1962-02-24', '1987-08-21', 'Regular', 'ABAPD9276A', '557407591762', 'teaching', '', '', '', '', '', ''),
('N028', 'SHUBHALAXMI HEGDE', 'HUMANITIES S.S.', 'shubhalaxmi.hegde@sakec.ac.in', '9892233744', 'Associate Professor', '1962-06-07', '1989-01-07', 'Regular', 'AAUPH8525K', '', 'teaching', '', '', '', '', '', ''),
('N125', 'SUSHMA SRIVASTAVA', 'HUMANITIES S.S.', 'sushma.srivastava@sakec.ac.in', '9821254462', 'Associate Professor', '1967-12-18', '1994-12-12', 'Regular', 'ACWPS-3904-M', '', 'teaching', '', '', '', '', '', ''),
('N193', 'SWATI SUJIT NADKARNI', 'INFORMATION TECHNOLOGY', 'swati.deshpande@sakec.ac.in', '9870456370', 'Associate Professor', '1976-11-26', '1998-08-10', 'Regular', 'AECPD4370C', '', 'teaching', '', '', '', '', '', ''),
('N283', 'DHANASHREE KAUSHIK TORADMALLE', 'INFORMATION TECHNOLOGY', 'dhanashree.toradmalle@sakec.ac.in', '9152515807', 'Associate Professor', '1980-11-04', '2004-01-16', 'Regular', 'ABLPH4197D', '985484274237', 'teaching', '', '', '', '', '', ''),
('N310', 'MEHTA JALPA D', 'INFORMATION TECHNOLOGY', 'jalpa.mehta@sakec.ac.in', '9004913638', 'Assistant Professor', '1979-09-03', '2005-01-01', 'Regular', 'ACQPV2369H', '', 'teaching', '', '', '', '', '', ''),
('N342', 'KRANTI VITHAL GHAG', 'INFORMATION TECHNOLOGY', 'kranti.ghag@sakec.ac.in', '9224640494', 'Assistant Professor', '1982-06-28', '2006-06-23', 'Regular', 'AKKPG8778R', '', 'teaching', '', '', '', '', '', ''),
('N375', 'ABIRAMI SIVAPRASAD', 'INFORMATION TECHNOLOGY', 'abirami.sivaprasad@sakec.ac.in', '9769721231', 'Assistant Professor', '1984-02-28', '2008-03-01', 'Regular', 'BOWPS9376G', '', 'teaching', '', '', '', '', '', ''),
('N385', 'ARCHANA SATISH CHAUGULE', 'INFORMATION TECHNOLOGY', 'archana.chaugule@sakec.ac.in', '9324792870', 'Assistant Professor', '1982-05-30', '2007-07-23', 'Regular', 'BOVPS0217K', '450295446693', 'teaching', '', '', '', '', '', ''),
('N399', 'WAGH PRANALI PRABHAKAR', 'INFORMATION TECHNOLOGY', 'pranali.wagh@sakec.ac.in', '9867795994', 'Assistant Professor', '1985-04-05', '2008-02-02', 'Regular', 'AAXPW6523H', '', 'teaching', '', '', '', '', '', ''),
('N433', 'MALVANKAR RASHMI NILESH', 'INFORMATION TECHNOLOGY', 'rashmi.malvankar@sakec.ac.in', '8655517253', 'Assistant Professor', '1985-03-23', '2014-01-06', 'Regular', 'AKHPC4501F', '534633423464', 'teaching', '', '', '', '', '', ''),
('N479', 'JAIN NILAKSHI S', 'INFORMATION TECHNOLOGY', 'nilakshi.jain@sakec.ac.in', '9967039388', 'Associate Professor', '1986-10-07', '2013-02-25', 'Regular', 'AGFPJ7903E', '', 'teaching', '', '', '', '', '', ''),
('N498', 'SMITA P.BANSOD', 'INFORMATION TECHNOLOGY', 'smita.bansod@sakec.ac.in', '8097051188', 'Assistant Professor', '1981-07-08', '2010-07-29', 'Regular', 'ANHPB0508J', '', 'teaching', '', '', '', '', '', ''),
('N499', 'THERES BEMILA JENET ', 'INFORMATION TECHNOLOGY', 'bemilajene.theres@sakec.ac.in', '9702209575', 'Assistant Professor', '1987-07-25', '2016-07-11', 'Regular', 'BAWPB0285K', '', 'teaching', '', '', '', '', '', ''),
('N556', 'LUKESH R KADU', 'INFORMATION TECHNOLOGY', 'lukesh.kadu@sakec.ac.in', '9867282852', 'Assistant Professor', '1982-09-12', '2013-03-01', 'Regular', 'AWYPK1629H', '', 'teaching', '', '', '', '', '', ''),
('N568', 'BHARGAVI BHAVESH DALAL', 'INFORMATION TECHNOLOGY', 'bhargavi.dalal@sakec.ac.in', '9819501957', 'Assistant Professor', '1983-04-14', '2018-07-07', 'Adhoc', 'ASXPD8713C', '', 'teaching', '', '', '', '', '', ''),
('N569', 'SWATI KISHOR GAJBHIYE', 'INFORMATION TECHNOLOGY', 'swati.gajbhiye@sakec.ac.in', '7387159761', 'Assistant Professor', '1986-08-20', '2018-07-07', 'Adhoc', 'AUPPG7070H', '', 'teaching', '', '', '', '', '', ''),
('N570', 'MANYA LALIT GIDWANI', 'INFORMATION TECHNOLOGY', 'manya.gidwani@sakec.ac.in', '8286462823', 'Assistant Professor', '1988-04-03', '2014-01-06', 'Regular', 'BGAPM1656F', '', 'teaching', '', '', '', '', '', ''),
('N575', 'PRAMILA P.SHINDE', 'INFORMATION TECHNOLOGY', 'pramila.shinde@sakec.ac.in', '9820056656', 'Assistant Professor', '1982-01-14', '2013-07-01', 'Regular', 'AIEPB6555D', '', 'teaching', '', '', '', '', '', ''),
('N578', 'CHINTAL LALIT GALA', 'INFORMATION TECHNOLOGY', 'chintal.maisheri@sakec.ac.in', '9920788372', 'Assistant Professor', '1986-10-19', '2014-01-06', 'Regular', 'AZDPM1839K', '', 'teaching', '', '', '', '', '', ''),
('N581', 'JAHANVI RAJENDRA GUPTA', 'INFORMATION TECHNOLOGY', 'jahanv.gupta@sakec.ac.in', '9773175439', 'Assistant Professor', '1989-06-15', '2018-07-10', 'Adhoc', 'BATPG6861P', '', 'teaching', '', '', '', '', '', ''),
('N617', 'BHELANDE MANISH PRADIP', 'INFORMATION TECHNOLOGY', 'manish.bhelande@sakec.ac.in', '9619157881', 'Assistant Professor', '1981-08-01', '2014-09-25', 'Regular', 'ARWPB4258Q', '', 'teaching', '', '', '', '', '', ''),
('N618', 'DESHMUKH ASHWINI ASHUTOSH', 'INFORMATION TECHNOLOGY', 'ashwini.deshmukh@sakec.ac.in', '9769414715', 'Assistant Professor', '1987-05-06', '2014-09-30', 'Regular', 'AWOPD9631N', '', 'teaching', '', '', '', '', '', ''),
('N620', 'MANE PANJAB BHASKARRAO', 'INFORMATION TECHNOLOGY', 'panjab.mane@sakec.ac.in', '8097836168', 'Assistant Professor', '1989-05-27', '2016-07-11', 'Regular', 'BUYPM0982L', '', 'teaching', '', '', '', '', '', ''),
('N631', 'MAHAJAN CHETAN BABURAO', 'INFORMATION TECHNOLOGY', 'chetan.mahajan@sakec.ac.in', '8097881002', 'Assistant Professor', '1987-03-31', '2016-07-11', 'Regular', 'AZDPM2153Q', '', 'teaching', '', '', '', '', '', ''),
('N635', 'JAWRE NIDA ASLAM', 'INFORMATION TECHNOLOGY', 'nida.jawre@sakec.ac.in', '', 'Assistant Professor', '1987-02-07', '2018-07-07', 'Adhoc', 'AMTPJ2970R', '', 'teaching', '', '', '', '', '', ''),
('N637', 'KAMBLE APARNA JANARDAN', 'INFORMATION TECHNOLOGY', 'aparna.kamble@sakec.ac.in', '', 'Assistant Professor', '1986-06-04', '2018-07-07', 'Adhoc', 'CCBPK7465A', '', 'teaching', '', '', '', '', '', ''),
('N676', 'KAMBLE DHWANIKET RAMESH', 'INFORMATION TECHNOLOGY', 'dhwaniket.kamble@sakec.ac.in', '9920050791', 'Assistant Professor', '1991-10-15', '2018-07-07', 'Adhoc', 'BLKPK6910K', '', 'teaching', '', '', '', '', '', ''),
('N681', 'MOTEKAR HARISH SADASHIV', 'INFORMATION TECHNOLOGY', 'harish.motekar@sakec.ac.in', '8108266799', 'Assistant Professor', '1988-03-26', '2018-07-07', 'Adhoc', 'BOEPM7640M', '681190769486', 'teaching', '', '', '', '', '', ''),
('N682', 'PAWAR SHWETAMBARI RAJENDRA', 'INFORMATION TECHNOLOGY', 'shwetambari.pawar@sakec.ac.in', '8850200720', 'Assistant Professor', '1992-10-13', '2018-07-07', 'Adhoc', 'BVHPP5518D', '711192413796', 'teaching', '', '', '', '', '', ''),
('N697', 'RATHOD SANTOSH BABURAO', 'INFORMATION TECHNOLOGY', 'santosh.rathod@sakec.ac.in', '9663458990', 'Assistant Professor', '1988-01-02', '2018-07-07', 'Adhoc', 'AZYPR4227K', '744084165276', 'teaching', '', '', '', '', '', ''),
('N713', 'SONALI SAGAR BAPTE', 'INFORMATION TECHNOLOGY', 'sonali.bapte@sakec.ac.in', '', 'Assistant Professor', '1992-01-10', '2018-07-13', 'Adhoc', 'BNWPK4251P', '473406015674', 'teaching', '', '', '', '', '', ''),
('N718', 'AKSHATA SATYAWAN PATIL', 'INFORMATION TECHNOLOGY', 'akshata.patil@sakec.ac.in', '7021614601', 'Assistant Professor', '1990-02-28', '2018-07-07', 'Adhoc', 'CFTPP3644F', '', 'teaching', '', '', '', '', '', ''),
('N179', 'GOWRI PRASAD PULUMATHI', 'LIBRARY', 'gowri.prasad@sakec.ac.in', '9833859658', 'Librarian', '1973-10-15', '1998-01-01', 'Regular', 'AERPP9721N', '', 'teaching', '', '', '', '', '', ''),
('N288', 'ARUNA SHARMA', 'MATHS', 'aruna.sharma@sakec.ac.in', '9920817956', 'Associate Professor', '1962-07-25', '2004-01-27', 'Regular', 'AILPS3683A', '', 'teaching', '', '', '', '', '', ''),
('N330', 'SHRIKRISHNA PREMCHAND DASARI', 'MATHS', 'shrikrishna.dasari@sakec.ac.in', '9920765189', 'Associate Professor', '1970-11-08', '2005-09-22', 'Regular', 'AASPD9122C', '521887722710', 'teaching', '', '', '', '', '', ''),
('N415', 'NANDA GOPAL HARIRAM', 'MATHS', 'gopal.nanda@sakec.ac.in', '8080699043', 'Assistant Professor', '1983-06-21', '2008-08-11', 'Regular', 'AGQPN7622M', '', 'teaching', '', '', '', '', '', ''),
('N496', 'SEEMA NILESH BAWNERKAR', 'MATHS', 'seema.bawnerkar@sakec.ac.in', '9850345493', 'Assistant Professor', '1982-05-16', '2018-07-07', 'Adhoc', 'BULPS0726F', '', 'teaching', '', '', '', '', '', ''),
('N547', 'IYER UMA PARAMESHWARI', 'MATHS', 'uma.iyer@sakec.ac.in', '9768875103', 'Assistant Professor', '1966-12-07', '2018-08-01', 'Adhoc', 'APJPP9674D', '534926869678', 'teaching', '', '', '', '', '', ''),
('N543', 'KHOSE JAYASHRI SHIVAJI', 'MECHANICALS', 'jayashri.khose@sakec.ac.in', '9860005146', 'Assistant Professor', '1984-04-07', '2013-02-25', 'Regular', 'BHQPK7105J', '', 'teaching', '', '', '', '', '', ''),
('N558', 'SWAPNIL J.MORE', 'MECHANICALS', 'swapnil.more@sakec.ac.in', '9503553547', 'Assistant Professor', '1986-12-07', '2018-07-03', 'Adhoc', 'ASMPM2675F', '', 'teaching', '', '', '', '', '', ''),
('N612', 'GARGADE ATUL APPAJI', 'MECHANICALS', 'atul.gargade@sakec.ac.in', '9022663377', 'Assistant Professor', '1986-04-29', '2014-09-01', 'Regular', 'ASMPG9112F', '959774383814', 'teaching', '', '', '', '', '', ''),
('N706', 'ABHAY DATTATRAY NICHITE', 'MECHANICALS', 'abhay.nichite@sakec.ac.in', '9011862892', 'Assistant Professor', '1986-07-02', '2018-07-03', 'Adhoc', 'AJIPN7127Q', '937487160409', 'teaching', '', '', '', '', '', ''),
('N500', 'MANGLANI NAMRATA S', 'PHYSICS', 'namrata.manglani@sakec.ac.in', '9730608148', 'Assistant Professor', '1984-12-20', '2010-08-20', 'Regular', 'ARXPM4195N', '', 'teaching', '', '', '', '', '', ''),
('N550', 'SMITA VERMA SRIVASTAVA', 'PHYSICS', 'smita.srivastava@sakec.ac.in', '9869243435', 'Assistant Professor', '1970-06-14', '2012-08-06', 'Regular', 'BKHPS2541G', '', 'teaching', '', '', '', '', '', ''),
('N034', 'ASHOK.DEVRAJ LATHIA', 'ADMINISTRATION', 'ashok.lathia@sakec.ac.in', '9821388789', 'Accountant', '1965-11-09', '1987-08-20', 'Regular', 'AAAPL 8657J', '845513250073', 'non-teaching', '', '', '', '', '', ''),
('N037', 'MANJU PARITOSH.DESHPANDE', 'ADMINISTRATION', 'manju.deshpande@sakec.ac.in', '9869383003', 'Senior Clerk', '1965-07-07', '1985-09-08', 'Regular', 'AGSPD2777R', '973660572275', 'non-teaching', '', '', '', '', '', ''),
('N053', 'NARENDRA  NAGESHWAR KOLI', 'ADMINISTRATION', '', '9221232572', 'Attendent', '1969-04-07', '1987-01-08', 'Regular', 'ALBPK6354K', '', 'non-teaching', '', '', '', '', '', ''),
('N076', 'DILIP LAXMISHANKAR  JOSHI', 'ADMINISTRATION', 'dilip.joshi@sakec.ac.in', '9869142697', 'Senior Clerk', '1966-10-26', '1992-04-01', 'Regular', 'ACPPJ5481M', '731196897747', 'non-teaching', '', '', '', '', '', ''),
('N097', 'PRAMODKUMAR SINGH', 'ADMINISTRATION', 'pramodkumar.singh@sakec.ac.in', '9029918483', 'Stores Officer', '1965-06-20', '1993-12-05', 'Regular', 'CQJPS6009J', '', 'non-teaching', '', '', '', '', '', ''),
('N098', 'PRAVEEN.SHIVABHAI PURABIA', 'ADMINISTRATION', 'praveen.purabiya@sakec.ac.in', '9967374312', 'O.S', '1967-01-03', '1993-05-24', 'Regular', 'APDPP5608K', '', 'non-teaching', '', '', '', '', '', ''),
('N102', 'ARVIND HANUMANT SATHE', 'ADMINISTRATION', '', '9152746005', 'Attendant', '1975-10-11', '1993-01-10', 'Regular', 'BZVPS8905B', '975928284330', 'non-teaching', '', '', '', '', '', ''),
('N103', 'MANOJ SHANKAR SHINDE', 'ADMINISTRATION', 'manoj.shinde@sakec.ac.in', '7977864423', 'Jr.Clek', '1972-11-27', '1993-10-01', 'Regular', 'AUWPS7430E', '651338505978', 'non-teaching', '', '', '', '', '', ''),
('N104', 'ARUN SHAMRAV SAMUDRE', 'ADMINISTRATION', '', '9167461476', 'Attendant', '1970-06-01', '1993-01-10', 'Regular', 'BNZPS5197R', '', 'non-teaching', '', '', '', '', '', ''),
('N105', 'HARJINDER PREETAM  SINGH', 'ADMINISTRATION', '', '9702834548', 'PEON', '1961-04-15', '1993-01-10', 'Regular', 'CTYPS0695A', '859707727259', 'non-teaching', '', '', '', '', '', ''),
('N107', 'RAVISHANKAR  GUPTESHWAR SINGH', 'ADMINISTRATION', '', '8268901517', 'Watchman', '1972-08-18', '1993-01-10', 'Regular', 'CWWPS1236G', '675990270181', 'non-teaching', '', '', '', '', '', ''),
('N120', 'NARESH HARISHCHANDRA JHA', 'ADMINISTRATION', '', '9004008902', 'Attendant', '1971-05-04', '1994-01-09', 'Regular', 'AJPPJ8598N', '583312555688', 'non-teaching', '', '', '', '', '', ''),
('N122', 'VIJAYA  ARUN DESHMUKH', 'ADMINISTRATION', '', '8108590114', 'PEON', '1960-10-10', '1994-01-09', 'Regular', 'AQXPD7914M', '', 'non-teaching', '', '', '', '', '', ''),
('N177', 'DIVAKARAN B.', 'ADMINISTRATION', 'divakaran.balakrishnan@sakec.ac.in', '9757112232', 'Senior Clerk', '1966-05-20', '1997-01-09', 'Regular', 'AKQPB6876P', '', 'non-teaching', '', '', '', '', '', ''),
('N178', 'SANDEEP SHRIDHAR KULYE', 'ADMINISTRATION', '', '8898999972', 'Library Attandent', '1974-06-12', '1997-09-01', 'Regular', 'ALBPK6353Q', '586300560133', 'non-teaching', '', '', '', '', '', ''),
('N194', 'SANJEEV SURENDRA  SINGH', 'ADMINISTRATION', '', '9819047165', 'Attendant', '1975-04-13', '1998-01-09', 'Regular', 'BAMPS6725D', '314923579919', 'non-teaching', '', '', '', '', '', ''),
('N203', 'SURYAPAL RAMASHANKAR DHURIYA', 'ADMINISTRATION', '', '9757012067', 'Attendant', '1972-06-28', '1999-01-01', 'Regular', 'ARAPD1474A', '463854040982', 'non-teaching', '', '', '', '', '', ''),
('N205', 'DATTARAM GOVIND  MANDAVAKAR', 'ADMINISTRATION', '', '9594035967', 'PEON', '1969-03-18', '1999-01-01', 'Regular', 'AYOPM8756D', '332525316786', 'non-teaching', '', '', '', '', '', ''),
('N206', 'LAKHAN SINGH', 'ADMINISTRATION', '', '9969470149', 'Security', '1970-01-02', '1999-01-02', 'Regular', 'CERPS2972G', '597652179534', 'non-teaching', '', '', '', '', '', ''),
('N216', 'VAIJANTI SHARMA', 'ADMINISTRATION', '', '7039595281', 'PEONS', '1964-06-05', '1999-01-09', 'Regular', 'CIQPS6650A', '', 'non-teaching', '', '', '', '', '', ''),
('N217', 'SHANKAR BHAGWAN JANGLE', 'ADMINISTRATION', '', '9867769751', 'Gardener', '1965-01-01', '1999-01-09', 'Regular', 'ARLPJ6800F', '554693824530', 'non-teaching', '', '', '', '', '', ''),
('N228', 'RANJANA  DATTARAM GURAV', 'ADMINISTRATION', '', '9619292157', 'Sweeper', '1963-08-24', '2000-09-01', 'Regular', '', '220707330611', 'non-teaching', '', '', '', '', '', ''),
('N230', 'SUNGADHA NARAYAN KADAM', 'ADMINISTRATION', '', '', 'Sweeper', '1960-06-01', '2000-12-01', 'Regular', '', '434821620453', 'non-teaching', '', '', '', '', '', ''),
('N236', 'SANJAY BABU KAMBLE', 'ADMINISTRATION', '', '9969677397', 'Attendant', '1967-06-01', '2001-07-01', 'Regular', 'AWWPK3799A', '715329451372', 'non-teaching', '', '', '', '', '', ''),
('N245', 'NIVRUTI RAM RONGE', 'ADMINISTRATION', '', '9594415801', 'PEON', '1972-10-01', '2001-11-01', 'Regular', '', '571460365812', 'non-teaching', '', '', '', '', '', ''),
('N248', 'DEEPAK SHRIPATI JAMBLE', 'ADMINISTRATION', '', '9819214427', 'Gardener', '1964-06-01', '2002-01-01', 'Regular', 'ANHPJ2923R', '397347954301', 'non-teaching', '', '', '', '', '', ''),
('N256', 'RAMULU VENKATRAJAM JANMANCHI', 'ADMINISTRATION', 'ramulu.janmanchi@sakec.ac.in', '9892189357', 'System Analyst', '1968-10-10', '2002-06-15', 'Regular', 'AEFPJ4531E', '949475823257', 'non-teaching', '', '', '', '', '', ''),
('N409', 'SONAL MORE', 'ADMINISTRATION', 'sonal.sonal@sakec.ac.in', '8108531255', 'Junior Clerk', '1982-09-28', '2008-06-01', 'Regular', 'BDCPM7725G', '413756065089', 'non-teaching', '', '', '', '', '', ''),
('N410', 'LINA SACHIN SHEJWAL', 'ADMINISTRATION', 'lina.shejwal@sakec.ac.in', '9769783103', 'Junior Clerk', '1984-05-31', '2008-06-01', 'Regular', 'CCPPS2244M', '592370044353', 'non-teaching', '', '', '', '', '', ''),
('N465', 'NAYAN NILKANTH PATIL', 'ADMINISTRATION', 'nayan.patil@sakec.ac.in', '9702464054', 'Clerk ', '1985-05-06', '2009-09-01', 'Regular', 'ASWPP1721B', '989016585178', 'non-teaching', '', '', '', '', '', ''),
('N467', 'LATIKA VIKRANT NIKALJE', 'ADMINISTRATION', 'latika.nikalje@sakec.ac.in', '9768423799', 'Clerk ', '1983-08-25', '2009-09-01', 'Regular', 'ARSPB6081B', '823346724690', 'non-teaching', '', '', '', '', '', ''),
('N652', 'SANTOSH SOPAN WAGHAMRE', 'ADMINISTRATION', 'santosh.waghmare@sakec.ac.in', '9833499141', 'Technical Assistant(Jr)', '1987-01-24', '2015-09-01', 'Regular', 'ADIPW7589H', '721129175113', 'non-teaching', '', '', '', '', '', ''),
('N668', 'VINESH N.JETHVA', 'ADMINISTRATION', 'vinesh.jethva@sakec.ac.in', '9870256227', 'Junior Clerk', '1975-05-13', '2018-07-09', 'Adhoc', 'AFWPJ9749L', '994690898252', 'non-teaching', '', '', '', '', '', ''),
('N672', 'CHAITALI DEVIDAS AVHAD', 'ADMINISTRATION', 'chaitali.avhad@sakec.ac.in', '9833034414', 'Junior Clerk', '1984-09-14', '2018-07-09', 'Adhoc', 'AJQPA8625A', '674163644786', 'non-teaching', '', '', '', '', '', ''),
('N684', 'ADITYA GAJANAN MANJREKAR', 'ADMINISTRATION', 'aditya.manjrekar@sakec.ac.in', '7738290432', 'Audio Visual Aids Technician', '1993-02-07', '2018-07-09', 'Adhoc', 'BWSPM4188A', '743636852270', 'non-teaching', '', '', '', '', '', ''),
('N685', 'GANESH SHANKAR PAGAR', 'ADMINISTRATION', '', '9222103291', 'PEONS', '1982-08-22', '2015-09-01', 'Regular', 'ALUPP8009M', '384529723937', 'non-teaching', '', '', '', '', '', ''),
('N712', 'BHUSHAN RAMCHANDRA JADHAV', 'ADMINISTRATION', 'bhushan.jadhav@sakec.ac.in', '8976329399', 'Deputy Registrar', '1979-11-23', '2018-05-15', 'Adhoc', 'AJMPJ5961C', '328859212137', 'non-teaching', '', '', '', '', '', ''),
('N722', 'MUNESHKUMAR BHIMRAO SUTE', 'ADMINISTRATION', 'muneshkumar.sute@sakec.ac.in', '7718876410', 'Senior Clerk', '1974-01-04', '2018-08-06', 'Regular', 'BVLPS2378L', '801890993435', 'non-teaching', '', '', '', '', '', ''),
('N723', 'PRAKASH J YEWALE', 'ADMINISTRATION', 'prakash.yewale@sakec.ac.in', '9004982899', 'Senior Clerk', '1966-06-01', '2018-08-06', 'Regular', 'ABBPY6925G', '523278226895', 'non-teaching', '', '', '', '', '', ''),
('N724', 'PARSHURAM V.MANE', 'ADMINISTRATION', '', '9892530507', 'PEON', '1962-06-01', '2018-08-06', 'Regular', 'AUHPM3623L', '907500833555', 'non-teaching', '', '', '', '', '', ''),
('N055', 'PRAMOD JOSEPH SHINDE', 'CHEMISTRY', 'pramod.shinde@sakec.ac.in', '7972943866', 'Jr.Lab Asst.', '1963-09-12', '1983-01-10', 'Regular', 'BYFPS9146H', '282690863490', 'non-teaching', '', '', '', '', '', ''),
('N337', 'VAISHALI MADHUKAR TUPE', 'COMPUTER', 'vaishali.tupe@sakec.ac.in', '9833705897', 'senior Lab.Assistant', '1978-10-27', '2006-04-01', 'Regular', 'AKDPT0449B', '302182011553', 'non-teaching', '', '', '', '', '', ''),
('N366', 'BHOSALE ANITA B', 'COMPUTER', 'anita.bhosale@sakec.ac.in', '9867601684', 'Lab Asst.(C)', '1985-06-05', '2007-03-20', 'Regular', 'AQMPB9256B', '', 'non-teaching', '', '', '', '', '', ''),
('N369', 'RUPALI MANOJ PATIL', 'COMPUTER', 'rupali.patil@sakec.ac.in', '9819154746', 'Lab Asst.(C)', '1981-08-19', '2007-04-23', 'Regular', 'AVAPP7370F', '226252719529', 'non-teaching', '', '', '', '', '', ''),
('N481', 'DHUMAL RAJSHREE AKSHAY', 'COMPUTER', 'rajshree.pawar@sakec.ac.in', '8976230876', 'Lab Asst.(C)', '1987-08-29', '2010-02-22', 'Regular', 'ARVPP4409Q', '', 'non-teaching', '', '', '', '', '', ''),
('N636', 'RODE POOJA BAPURAO', 'COMPUTER', 'pooja.rode@sakec.ac.in', '7719001408', 'Lab Asst.(C)', '1991-12-23', '2018-07-07', 'Adhoc', 'BLHPR8916D', '', 'non-teaching', '', '', '', '', '', ''),
('N679', 'RANE NILESH SUDAM', 'COMPUTER', 'nilesh.rane@sakec.ac.in', '7666666337', 'Lab Asst.(C)', '1988-06-27', '2018-01-11', 'Adhoc', 'AKKPR7794L', '360232349108', 'non-teaching', '', '', '', '', '', ''),
('N699', 'HAGAVANE RUPALI MILIND', 'COMPUTER', 'rupali.hagavane@sakec.ac.in', '9969276332', 'Lab Asst.(C)', '1980-02-07', '2018-07-07', 'Adhoc', 'CBBPS8273F', '347617899134', 'non-teaching', '', '', '', '', '', ''),
('N701', 'CHOUDHARI TUSHAR JAGANNATH', 'COMPUTER', 'tushar.chaudhari@sakec.ac.in', '7738313991', 'Lab Asst.(C)', '1983-06-09', '2018-07-07', 'Adhoc', 'AOUPC2960F', '329127649356', 'non-teaching', '', '', '', '', '', ''),
('N042', 'MAHENDRA DATTATRAY DHURI', 'ELECTRONICS', 'mahindra.dhuri@sakec.ac.in', '9869105619', 'Electrician', '1964-02-11', '1986-01-09', 'Regular', 'AHNPD9513B', '338388157272', 'non-teaching', '', '', '', '', '', ''),
('N185', 'JANHAVI ARUN DESHPANDE', 'ELECTRONICS', 'janhavi.deshpande@sakec.ac.in', '9819103391', 'Technical Assistant', '1968-05-06', '1998-02-03', 'Regular', 'AQUPD0473C', '486475250183', 'non-teaching', '', '', '', '', '', ''),
('N594', 'ASHWINI S SAWANT', 'ELECTRONICS', 'ashwini.sawant@sakec.ac.in', '9096097218', 'Lab Asst.(C)', '1990-06-01', '2018-07-07', 'Adhoc', '', '', 'non-teaching', '', '', '', '', '', ''),
('N673', 'NANDKISHORE L.BUNDELE', 'ELECTRONICS', 'nandkishor.bundele@sakec.ac.in', '9323345011', 'Lab.Instructor', '1973-10-04', '2018-07-07', 'Adhoc', 'AOIPB5042B', '441967998712', 'non-teaching', '', '', '', '', '', ''),
('N695', 'SANAS MINAKSHI NILESH', 'ELECTRONICS & TELECOMMUNICATION', 'minakshi.sanas@sakec.ac.in', '8169228445', 'Lab Asst.(B)', '1990-06-07', '2018-07-07', 'Adhoc', 'DLLPS6659L', '309273383867', 'non-teaching', '', '', '', '', '', ''),
('N725', 'TANUJA PRADEEP MAHAJAN', 'ELECTRONICS & TELECOMMUNICATION', '', '', 'Lab Asst.(C)', '1993-07-26', '2019-01-01', 'Adhoc', 'CTIPM6881J', '805969592898', 'non-teaching', '', '', '', '', '', ''),
('N131', 'PRADEEP DANGAT', 'INFORMATION TECHNOLOGY', 'pradeep.dangat@sakec.ac.in', '9323483799', 'I.M', '1970-01-26', '1995-03-15', 'Regular', 'AHFPD2423A', '', 'non-teaching', '', '', '', '', '', ''),
('N303', 'SHUBHANGI PREETAM KENI', 'INFORMATION TECHNOLOGY', 'shubhangi.keni@sakec.ac.in', '9769070754', 'senior Lab.Assistant', '1979-03-26', '2004-11-02', 'Regular', 'AYMPK4684L', '301254603840', 'non-teaching', '', '', '', '', '', ''),
('N402', 'PANDIT PRAMOD SURESH', 'INFORMATION TECHNOLOGY', 'pramod.pandit@sakec.ac.in', '9594130993', 'Lab Asst.(C)', '1985-05-02', '2008-02-02', 'Regular', 'ASCPP7735M', '462139894827', 'non-teaching', '', '', '', '', '', ''),
('N622', 'SAWANT SUJATA DATTARAJ', 'INFORMATION TECHNOLOGY', 'sujata.sawant@sakec.ac.in', '7208226966', 'Lab Asst.(C)', '1992-05-08', '2018-07-09', 'Adhoc', 'DSCPS8605G', '705002282117', 'non-teaching', '', '', '', '', '', ''),
('N687', 'SNEHA PRAMOD VALANJU', 'INFORMATION TECHNOLOGY', 'sneha.valanju@sakec.ac.in', '9819812222', 'Lab Asst.(C)', '1979-08-29', '2009-10-01', 'Regular', 'APPPP8246P', '699412715385', 'non-teaching', '', '', '', '', '', ''),
('N704', 'OMKAR RAJENDRA DICHOLKAR', 'INFORMATION TECHNOLOGY', 'omkar.dicholkar@sakec.ac.in', '8767996193', 'Lab Asst.(C)', '1991-07-31', '2018-07-07', 'Adhoc', 'ASNPD9908K', '880249905415', 'non-teaching', '', '', '', '', '', ''),
('N710', 'PRADNYA PANDHARINATH MHATRE', 'INFORMATION TECHNOLOGY', 'pradnya.mhatre@sakec.ac.in', '9930696494', 'Lab Asst.(C)', '1998-07-22', '2018-07-07', 'Adhoc', 'DHTPM4701B', '308142581152', 'non-teaching', '', '', '', '', '', ''),
('N050', 'SUNIL.RAGHUNATH YESHWANTRAO', 'MECHANICALS', 'sunil.yeshwantrao@sakec.ac.in', '7744845302', 'W.I.(A)', '1968-07-01', '1987-08-18', 'Regular', 'AAPPY8643J', '388057196048', 'non-teaching', '', '', '', '', '', ''),
('N051', 'ASHOK PATIL', 'MECHANICALS', 'ashok.patil@sakec.ac.in', '7208434513', 'W.I.(B)', '1969-10-18', '1990-02-07', 'Regular', 'AVFPP0119D', '', 'non-teaching', '', '', '', '', '', ''),
('N048', 'DEEPAK SHANKAR KOKATE', 'PHYSICS', 'deepak.kokate@sakec.ac.in', '7021563293', 'Lab Asst.(A)', '1965-06-18', '1987-01-08', 'Regular', 'AHAPK1501D', '428787381050', 'non-teaching', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

DROP TABLE IF EXISTS `promotion`;
CREATE TABLE IF NOT EXISTS `promotion` (
  `e_no` varchar(10) NOT NULL,
  `emailid` varchar(300) NOT NULL,
  `doc_id` varchar(30) NOT NULL,
  `old_designation` varchar(100) NOT NULL,
  `new_designation` varchar(300) NOT NULL,
  `wef_date` date NOT NULL,
  `letter_no` varchar(300) NOT NULL,
  `file_url` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `qual_details`
--

DROP TABLE IF EXISTS `qual_details`;
CREATE TABLE IF NOT EXISTS `qual_details` (
  `e_no` varchar(10) DEFAULT NULL,
  `emailid` varchar(300) DEFAULT NULL,
  `doc_id` varchar(30) DEFAULT NULL,
  `qual_type` varchar(10) DEFAULT NULL,
  `course` varchar(20) DEFAULT NULL,
  `specialisation` varchar(100) DEFAULT NULL,
  `passing_month` date DEFAULT NULL,
  `file_url` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `training_info`
--

DROP TABLE IF EXISTS `training_info`;
CREATE TABLE IF NOT EXISTS `training_info` (
  `e_no` varchar(10) DEFAULT NULL,
  `emailid` varchar(300) DEFAULT NULL,
  `doc_id` varchar(30) DEFAULT NULL,
  `course_type` varchar(50) DEFAULT NULL,
  `title` varchar(2000) DEFAULT NULL,
  `duration` varchar(10) DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `certificate_url` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
