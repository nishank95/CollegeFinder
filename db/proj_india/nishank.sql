-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2017 at 09:18 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proj_india`
--

-- --------------------------------------------------------

--
-- Table structure for table `nishank`
--

CREATE TABLE `nishank` (
  `cid` int(3) NOT NULL,
  `college_name` text NOT NULL,
  `coll_city` char(60) NOT NULL,
  `degree` varchar(60) NOT NULL,
  `hsc_rank` int(5) NOT NULL,
  `grad_rank` int(5) NOT NULL,
  `gate_rank` int(5) NOT NULL,
  `cat_rank` int(5) NOT NULL,
  `xat_rank` int(5) NOT NULL,
  `courses` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `nishank`
--

INSERT INTO `nishank` (`cid`, `college_name`, `coll_city`, `degree`, `hsc_rank`, `grad_rank`, `gate_rank`, `cat_rank`, `xat_rank`, `courses`) VALUES
(1, 'Impact College of Engineering and Applied Sciences (ICEAS), Sahakara Nagar, Bangalore', 'Bangalore', 'mtech', 4, 3, 2, 0, 0, 'Computer science & engineering'),
(2, 'Wisdom School of Management, Indiranagar, Bangalore', 'Bangalore', 'mtech', 3, 2, 1, 0, 0, 'M.Tech in Mechanical Engineering (Production, Thermal),\nM.Tech in Electrical & Electronics Engineering (Power System, Power Electronics, Control system),\nM.Tech in Electronics & Comm. Engineering (Embedded System & VLSI, Digital Communication,\nM.Tech in Civil Engineering (Highway engg. , Construction Tech. Mgmt, Structural engg.),\nM.Tech in Computer Science	M.Tech in Information Technology\n'),
(3, 'SLN Correspondence College: Karnataka State Open University – Study Centre, Jayanagar, Bangalore', 'Bangalore', 'mtech', 3, 2, 2, 0, 0, 'IT Engineering ,\r\nElectronics & Comm. Engineering \r\nCivil Engineering ,\r\nElectrical Engineering \r\n'),
(4, 'Sambhram Institute of Technology (SAIT Bangalore), Jalahalli, Bangalore', 'Bangalore', 'mtech', 4, 3, 2, 0, 0, 'Civil engineering,\r\nMechanical engineering\r\nComputer science & engineering\r\n\r\n'),
(5, 'Atria Institute of Technology, Anand Nagar, Bangalore', 'Bangalore', 'mtech', 4, 4, 3, 0, 0, 'Computer science& engineering'),
(6, 'Mysore Correspondence College, Malleswaram, Bangalore', 'Bangalore', 'mtech', 2, 2, 1, 0, 0, 'I.T.'),
(7, 'Techno India University, Salt Lake City, Kolkata', 'Kolkata', 'mtech', 5, 3, 3, 0, 0, 'Mechanical,\r\nE&T ,\r\nCIVIL,\r\nElectrical,\r\nComputer science &engineering\r\n'),
(8, 'Jadavpur University (JU, Kolkata), Jadavpur, Kolkata', 'Kolkata', 'mtech', 4, 3, 3, 0, 0, 'Electrical ,\r\nMechanical ,\r\nE&T ,\r\nIT.'),
(9, 'JIS College of Engineering (JISCE), Kalyani, Kokata', 'Kolkata', 'mtech', 4, 4, 2, 0, 0, 'MECHANICAL ,\r\nComputer science& engineering\r\n\r\n'),
(10, 'Narula Institute of Technology (NIT, Agarpara)', 'Kolkata', 'mtech', 4, 4, 3, 0, 0, 'E&t engineering\r\nComputer science& engineering\r\nCivil engineering\r\nElectrical engineering\r\n'),
(11, 'MCKV Institute of Engineering, Liluah, Kolkata', 'Kolkata', 'mtech', 3, 3, 2, 0, 0, 'Computer science & engineering\r\nE&T engineering'),
(12, 'Amity University, Kolkata, Kadampukur, Kolkata', 'Kolkata', 'mtech', 5, 5, 4, 0, 0, 'Computer science engineering,\r\nE&T engineering,\r\nMechanical engineering'),
(13, 'Dr. Sudhir Chandra Sur Degree Engineering College (DSCSDEC), Dum Dum, Kolkata', 'Kolkata', 'mtech', 4, 3, 3, 0, 0, 'Mechanical engineering\r\n'),
(14, 'Brainware Group of Institutions, Barasat, Kolkata', 'Kolkata', 'mtech', 3, 2, 1, 0, 0, 'E&T engineering'),
(15, 'Techno India College of Technology (TICT), Rajarhat, Kolkata', 'Kolkata', 'mtech', 4, 4, 2, 0, 0, 'ELECTRICAL ENGINEERING'),
(16, 'BRIGHT TECHNO, Birati, Kolkata', 'Kolkata', 'mtech', 2, 2, 1, 0, 0, ''),
(17, 'Dream Institute of Technology (DIT, Kolkata), Thakurpukur, Kolkata', 'Kolkata', 'mtech', 3, 2, 2, 0, 0, ''),
(18, 'Institute of Engineering and Management, Salt Lake City, Kolkata', 'Kolkata', 'mtech', 4, 3, 3, 0, 0, ''),
(19, 'University of Engineering and Management, Kolkata, Rajarhat, Kolkata', 'Kolkata', 'mtech', 4, 3, 2, 0, 0, ''),
(20, 'EIMT Educate, Gariahat Road, Kolkata', 'Kolkata', 'mtech', 3, 2, 2, 0, 0, ''),
(21, 'Government College of Engineering and Ceramic Technology, A.J.C. Bose Road, Kolkata', 'Kolkata', 'mtech', 4, 4, 3, 0, 0, ''),
(22, 'Larn Edutech, Behala, Kolkata', 'Kolkata', 'mtech', 3, 2, 1, 0, 0, ''),
(23, 'Krishna Distance Education Centre PVT. LTD, Salt Lake Sector 1, Kolkata', 'Kolkata', 'mtech', 2, 1, 1, 0, 0, ''),
(24, ' A S Educare Institute, Rajbari, Kolkata', 'Kolkata', 'mtech', 4, 3, 3, 0, 0, ''),
(25, 'RCC Institute of Information Technology (RCCIIT), Beliaghata, Kolkata', 'Kolkata', 'mtech', 4, 2, 2, 0, 0, ''),
(26, 'Government College of Engineering and Ceramic Technology (GCECT), Salt Lake City, Kolkata', 'Kolkata', 'mtech', 4, 3, 3, 0, 0, ''),
(27, 'Department of Jute and Fibre Technology - Institute of Jute Technology, Calcutta University, Ballygu', 'Kolkata', 'mtech', 3, 2, 2, 0, 0, ''),
(28, 'Veermata Jijabai Technological Institute, Mumbai', 'Mumbai', 'mtech', 5, 4, 4, 0, 0, 'Civil Engineering ( with Specialization in Environmental Engineering )\r\n\r\n\r\n\r\n\r\nCivil Engineering (with Specialization in Construction Management) \r\n\r\n\r\n\r\n\r\nCivil Engineering (with Specialization in Structural Engineering)\r\n\r\n\r\n\r\n\r\nComputer Engineering\r\n\r\n\r\nElectrical Engineering (with specialization in Power Systems)\r\n\r\n\r\nElectrical Engineering (with specialization in Control Systems)\r\n\r\n\r\n\r\n\r\nElectronics Engineering\r\n\r\n\r\n\r\n\r\nMechanical Engineering (with specialization in Machine Design)\r\n\r\n\r\n\r\n\r\nMechanical Engineering (with specialization in Automobile  \r\n\r\nEngineering )\r\n\r\n\r\n\r\n\r\n\r\nMechanical Engineering (with specialization CAD/CAM & Automation) '),
(29, 'Sardar Patel College of Engineering, Andheri West, Mumbai\n\n', 'Mumbai', 'mtech', 4, 4, 3, 0, 0, 'CIVIL \r\nMECHANICAL\r\nELECTRICAL\r\n'),
(30, 'Indian Institute of Technology (IIT), Mumbai\r\n\r\n', 'Mumbai', 'mtech', 5, 5, 5, 0, 0, 'Master of Technology in Mechanical Engineering\r\n\r\nMaster of Technology in Electrical Engineering\r\n\r\nMaster of Technology in Civil Engineering\r\n\r\n'),
(31, 'Mukesh Patel School of Technology Management & Engineering\r\n', 'Mumbai', 'mtech', 4, 3, 2, 0, 0, 'Master of Computer Applications\r\nMaster of Technology in Electronics Engineering	\r\nMaster of Technology in Information Technology\r\nmaster of electronic and telecommunication\r\n'),
(32, 'Indira College of Engineering and Management (ICEM), Parandwadi, Pune', 'pune', 'mtech', 4, 3, 2, 0, 0, ''),
(33, 'DY Patil School of Engineering, Lohegaon, Pune', 'pune', 'mtech', 5, 4, 3, 0, 0, 'Computer engineering,\r\nMechanical engineering ,\r\nE&T engineering'),
(34, 'Wisdom School of Management, Hadapsar, Pune', 'pune', 'mtech', 3, 1, 1, 0, 0, ''),
(35, 'Marathwada Mitra Mandal''s College of Engineering (MMCOE)', 'pune', 'mtech', 4, 3, 2, 0, 0, 'Computer engineering'),
(36, 'Sudarshan College of Management Research and Engineering, Bibwewadi, Pune', 'pune', 'mtech', 3, 2, 1, 0, 0, 'Computer engineering,\r\n    Mechanical engineering,\r\n    IT engineering,\r\n    E& T engineering ,\r\n    Electrical engineering'),
(37, 'Symbiosis Institute of Technology (SIT), Lavale Village, Pune', 'pune', 'mtech', 4, 4, 3, 0, 0, ''),
(38, 'Trinity Academy of Engineering, Kondhwa, Pune', 'pune', 'mtech', 4, 2, 2, 0, 0, 'Mechanical engineering'),
(39, 'KJ''s Educational Institute, Kondhwa, Pune', 'pune', 'mtech', 4, 3, 3, 0, 0, ''),
(40, 'Institute of Knowledge College of Engineering, Hadapsar, Pune', 'pune', 'mtech', 3, 2, 1, 0, 0, 'Computer engineering'),
(41, 'Cummins College of Engineering for Women (CCOEW), Karve Nagar, Pune', 'pune', 'mtech', 4, 3, 2, 0, 0, 'Computer engineering'),
(42, 'Bharati Vidyapeeth Deemed University College of Engineering (BVUCOE)', 'pune', 'mtech', 4, 3, 3, 0, 0, ''),
(43, 'College of Engineering Pune (CoEP), Shivaji Nagar, Pune', 'pune', 'mtech', 5, 4, 2, 0, 0, ''),
(44, 'Pune Institute, B S Dhole Patil Path, Pune', 'pune', 'mtech', 4, 4, 3, 0, 0, ''),
(45, 'G H Raisoni College of Engineering & Management, Pune, Wagholi, Pune', 'pune', 'mtech', 3, 2, 1, 0, 0, 'Computer engineering,\r\nMechanical engineering\r\n'),
(46, 'Vishwakarma Institute of Technology (VIT, Pune)', 'pune', 'mtech', 4, 4, 3, 0, 0, 'Computer engineering,\r\nE& T engineering\r\n'),
(47, 'K J College of Engineering & Management Research (KJCOEMR)', 'pune', 'mtech', 4, 3, 4, 0, 0, 'Computer engineering'),
(48, 'Wisdom School of Management, Mandaveli Rd., Chennai', 'Chennai', 'mtech', 2, 1, 1, 0, 0, ''),
(49, 'SRM University, Chennai (SRM Chennai), Kattankulathur, Chennai', 'Chennai', 'mtech', 5, 4, 4, 0, 0, 'COMPUTER SCIENCE & ENGINEERING\r\n'),
(50, 'B.S. Abdur Rahman University (BSAU), Vandalur, Chennai', 'Chennai', 'mtech', 4, 3, 2, 0, 0, 'M.Tech in Information Technology,\r\nM.Tech in Computer Science and Engineering'),
(51, 'Hindustan University (HU, Chennai), Kelambakkam, Chennai', 'Chennai', 'mtech', 4, 3, 3, 0, 0, '\r\nM.Tech in Computer Science and Engineering, \r\nM.Tech in Electrical and Electronics Engineering,\r\nM.Tech in Electronics and Communication Engineering, \r\nM.Tech in Civil Engineering'),
(52, 'Saveetha University - Thandalam, Thandalam, Chennai', 'Chennai', 'mtech', 3, 2, 2, 0, 0, 'Computer engineering,\r\nI.T.'),
(53, 'Sri Chandrasekharendra Saraswathi Viswa Mahavidyalaya (SCSVMV), Kanchipuram, Chennai', 'Chennai', 'mtech', 4, 3, 3, 0, 0, 'Information Technology'),
(54, 'Anna University (AU Chennai), Guindy, Chennai', 'Chennai', 'mtech', 4, 3, 2, 0, 0, 'Information Technology'),
(55, 'Vel Tech Dr.RR and Dr.SR Technical University (VelTech, VTU), Avadi, Chennai', 'Chennai', 'mtech', 3, 1, 1, 0, 0, 'Computer science & engineering ,\r\nI.T. engineering .'),
(56, 'Sathyabama University, Jeppiaar Nagar, Chennai', 'Chennai', 'mtech', 3, 2, 3, 0, 0, 'Information Technology'),
(57, 'SSN College of Engineering (SSNCE), Okkiyam Thuraipakkam, Chennai', 'Chennai', 'mtech', 4, 3, 3, 0, 0, 'Information Technology'),
(58, 'RRASE College of Engineering, Padappai, Chennai', 'Chennai', 'mtech', 4, 3, 2, 0, 0, 'COMPUTER SCIENCE& ENGINEERING'),
(59, 'Meenakshi College of Engineering (MCE, Chennai), K.K Nagar, Chennai', 'Chennai', 'mtech', 4, 2, 1, 0, 0, 'COMPUTER SCIENCE & ENGINEERING'),
(60, 'Bharath University (BU, Chennai), Selaiyur, Chennai', 'Chennai', 'mtech', 4, 4, 4, 0, 0, 'COMPUTER SCIENCE& ENGINEERING,\r\nIT engineering'),
(61, 'R&R Education Foundation, Rani Bagh, Delhi', 'Delhi', 'mtech', 3, 2, 1, 0, 0, '\r\nM.Tech in Civil Engineering, \r\nM.Tech in Mechanical Engineering,\r\nM.Tech in Electrical Engineering, \r\nM.Tech in Information and Technology,\r\nM.Tech in Computer Science and Engineering'),
(62, 'Lovely Professional University - Admission Office, Connaught Place, Delhi', 'Delhi', 'mtech', 5, 5, 4, 0, 0, 'M.Tech in Information Technology,\r\nM.Tech in Mechanical Engineering, \r\nM.Tech in Electronics and Communication Engineering, \r\nM.Tech in Computer Science and Engineering, s\r\nM.Tech in Civil Engineering, \r\nM.Tech in electrical engineering\r\n'),
(63, 'Ganga Group of Institutions- Ganga Institute of Technology & Management, Punjabi Bagh, Delhi', 'Delhi', 'mtech', 4, 2, 3, 0, 0, 'Computer science & engineering,\r\nE&T engineering'),
(64, 'GLA University (Admission Office), New Friends Colony, Delhi', 'Delhi', 'mtech', 4, 3, 2, 0, 0, '	\r\n M.Tech in Mechanical Engineering, \r\n  M.Tech in Computer Science and Engineering, \r\n M.Tech in Electronics and Communication Engineering,\r\n M.Tech in Civil Engineering, \r\n M.Tech in Electrical Engineering.'),
(65, 'Incline Institute of IT and Management, Dwarka, Delhi', 'Delhi', 'mtech', 3, 2, 1, 0, 0, 'Mechanical engineering,\r\nElectrical engineering,\r\nElectronics engineering'),
(66, 'Delhi College of Advanced Studies, Janakpuri, Delhi', 'Delhi', 'mtech', 4, 3, 2, 0, 0, 'Computer science '),
(67, 'APL Institute Of IT And Management Studies, Uttam Nagar, Delhi', 'Delhi', 'mtech', 3, 1, 2, 0, 0, 'Electrical engineering,\r\nElectronics engineering'),
(68, 'Noble Institute of Professional Studies (NIPS Delhi), Delhi', 'Delhi', 'mtech', 3, 2, 1, 0, 0, 'Information Technology'),
(69, 'Ambition Institute of Education, Vikas Puri, Delhi', 'Delhi', 'mtech', 4, 3, 2, 0, 0, 'Mechanical engineering,\r\nCivil engineering,\r\nElectrical engineering,\r\nElectronics engineering,\r\nIT engineering,\r\nComputer engineering'),
(70, 'Disha College of Education, Najafgarh, Delhi', 'Delhi', 'mtech', 2, 1, 1, 0, 0, 'Civil Engineering,\r\nMechanical Engineering,\r\nElectrical Engineering,\r\nI.T Engineering,\r\nElectronics and Communications Engineering,\r\nComputer Science & Engineering.'),
(71, 'Navodaya Education, Uttam Nagar, Delhi', 'Delhi', 'mtech', 3, 2, 1, 0, 0, 'Civil engineering'),
(72, 'Chanderprabhu Jain Institute of Management & Technology, Anand Vihar, Delhi', 'Delhi', 'mtech', 3, 2, 2, 0, 0, ' Computer Science,\r\nInformation Technology,\r\nElectronics and Telecommunication,\r\nMechanical,\r\nCivil,\r\nElectrical Engineering.'),
(73, 'Aryabhatta Degree College (ADC Tughlakabad), Tughlakabad, Delhi', 'Delhi', 'mtech', 4, 4, 3, 0, 0, 'M.Tech  in Chemical,\r\nM.Tech  in  Mechanical\r\nM.Tech  in IT, \r\nM.Tech  in  Computer Science,\r\nM.Tech  in  Electronics,\r\n M.Tech  in  Electrical '),
(74, 'Guru Gobind Singh Indraprastha University (GGSIP), Dwarka, Delhi', 'Delhi', 'mtech', 5, 4, 2, 0, 0, 'M.Tech in Electronics and Communication Engineering,\r\nM.Tech in Computer Science and Engineering,\r\nM.Tech in Information Technology.\r\n'),
(75, 'Maharaja Agrasen Institute of Technology, Delhi', 'Delhi', 'mtech', 3, 2, 1, 0, 0, 'Information Technology.'),
(76, 'Heights Institute, Nangloi, Delhi', 'Delhi', 'mtech', 3, 2, 2, 0, 0, 'ELECTRICAL ENGINEERING,\r\nIT engineering,\r\nCivil engineering.'),
(77, 'DIT University (Admission Office), East Of Kailash, Delhi', 'Delhi', 'mtech', 4, 3, 3, 0, 0, 'Mechanical engineering,\r\n	Computer science & engineering,\r\n	Civil engineering,\r\n	Electrical engineering,\r\n	E&T engineering.\r\n'),
(78, 'Saroj Educational Group, Lajpat Nagar, Delhi', 'Delhi', 'mtech', 3, 1, 1, 0, 0, 'COMPUTER SCIENCE,\r\nE& T ENGINEERING.'),
(79, 'Pratham Institute of Education, Lajpat Nagar, Delhi', 'Delhi', 'mtech', 3, 3, 2, 0, 0, 'Telecommunications ,\r\nComputer Science (IT)\r\n,Electronics\r\n,Mechanical  \r\n,Electronics & Telecommunication\r\n,Civil\r\n,Electrical.\r\n'),
(80, 'Wisdom School of Management, Kalyan East, Mumbai', 'Mumbai', 'mtech', 3, 1, 1, 0, 0, 'Mechanical engineering,\r\nIT engineering,\r\nElectrical engineering,\r\nE&T engineering.\r\n'),
(81, 'NMIMS University''s Mukesh Patel School of Technology Management and Engineering, Vile Parle , mumbai', 'Mumbai', 'mtech', 4, 3, 2, 0, 0, 'Computer engineering,\r\nE&T engineering.'),
(82, 'International Institute of Management and Engineering, Mira Road, Mumbai', 'Mumbai', 'mtech', 4, 4, 3, 0, 0, ''),
(83, 'National Education Management, Mumbai, Mumbai', 'Mumbai', 'mtech', 4, 4, 3, 0, 0, 'Mechanical engineering,\r\nElectronics engineering,\r\nElctronics & telecommunication '),
(84, 'National Institute of Management, Malad West, Mumbai', 'Mumbai', 'mtech', 4, 3, 3, 0, 0, 'Mechanical engineering,\r\nElectronics engineering.'),
(85, ' JRD Global Education, thane, Mumbai', 'Mumbai', 'mtech', 4, 4, 3, 0, 0, ''),
(86, 'YES Education, Mulund West, Mumbai', 'Mumbai', 'mtech', 3, 2, 2, 0, 0, ''),
(87, 'Kanwal Rekhi School of Information Technology, IIT Powai, Mumbai', 'Mumbai', 'mtech', 3, 1, 2, 0, 0, ''),
(88, 'Alamuri Ratnamala Institute of Engineering and Technology (ARMIET)', 'Mumbai', 'mtech', 3, 2, 2, 0, 0, 'Mechanical engineering\r\nComputer engineering\r\ne&t engineering'),
(89, 'Institute for Development and Research in Banking Technology, Hyderabad', 'Hyderabad', 'mtech', 3, 1, 1, 0, 0, 'Information technology'),
(90, 'Shadan College of Engineering and Technology, Himayat Nagar, Hyderabad', 'Hyderabad', 'mtech', 4, 2, 3, 0, 0, 'Computer & science engineering'),
(91, 'CMR Technical Campus (CMRTC), Medchal, Hyderabad', 'Hyderabad', 'mtech', 4, 3, 2, 0, 0, 'Computer science & engineering\r\n'),
(92, 'Moghal College of Engineering and Technology (MCET), Chandrayanagutta, Hyderabad', 'Hyderabad', 'mtech', 3, 3, 4, 0, 0, ''),
(93, 'Keshav Memorial Institute of Technology, Narayanguda, Hyderabad', 'Hyderabad', 'mtech', 3, 3, 1, 0, 0, 'Computer science & engineering'),
(94, 'Joginpalli B.R.Engineering College, Moinabad, Hyderabad', 'Hyderabad', 'mtech', 3, 2, 1, 0, 0, 'Computer Science and Engineering ,\r\nInformation Technology ,\r\nElectronics and Communication Engineering  ,\r\nElectrical and Electronics Engineering (PE&ED).\r\n'),
(95, 'Deccan College of Engineering and Technology, Nampalli, Hyderabad', 'Hyderabad', 'mtech', 4, 4, 3, 0, 0, 'Computer science& engineering'),
(96, 'Sridevi Women''s Engineering College, Begumpet, Hyderabad', 'Hyderabad', 'mtech', 4, 3, 2, 0, 0, 'Computer science& engineering,\r\nElectrical   & electronics engineering.\r\n'),
(97, 'SV Group of institute, Moinabad, Hyderabad', 'Hyderabad', 'mtech', 3, 3, 2, 0, 0, 'Computer science & engineering,\r\nElectronics & telecommunication engineering.\r\n'),
(98, 'Sphoorthy Engineering College, Saroornagar, Hyderabad', 'Hyderabad', 'mtech', 3, 2, 1, 0, 0, 'Computer science&  engineering,\r\nE&T engineering.\r\n'),
(99, 'University of Hyderabad, Gachibowli, Hyderabad', 'Hyderabad', 'mtech', 4, 3, 3, 0, 0, 'IT engineering,\r\nComputer engineering.'),
(100, 'Osmania University, Tarnaka, Hyderabad', 'Hyderabad', 'mtech', 3, 2, 1, 0, 0, 'Computer science& engineering'),
(101, 'Jawaharlal Nehru Technological University, Hyderabad', 'Hyderabad', 'mtech', 4, 3, 2, 0, 0, 'Computer engineering'),
(102, 'Wisdom School of Management, Banjara Hills, Hyderabad', 'Hyderabad', 'mtech', 2, 1, 1, 0, 0, 'M.Tech in Mechanical Engineering (Production, Thermal)\r\n,M.Tech in Electrical & Electronics Engineering (Power System, Power Electronics, Control system),\r\nM.Tech in Electronics & Comm. Engineering (Embedded System & VLSI, Digital Communication,\r\nM.Tech in Civil Engineering (Highway engg. , Construction Tech. Mgmt, Structural engg.),\r\nM.Tech in Computer Science and\r\nM.Tech in IT.\r\n\r\n\r\n'),
(103, 'Lords Institute of Engineering & Technology, Himayathsagar, Hyderabad', 'Hyderabad', 'mtech', 4, 2, 2, 0, 0, 'Computer science& engineering'),
(104, 'Annamacharya Institute of Technology and Sciences (AITS), Hayat Nagar, Hyderabad', 'Hyderabad', 'mtech', 3, 2, 3, 0, 0, 'Computer science & engineering,\r\nE& T engineering.\r\n'),
(105, 'St. Mary''s Group of Institutions, Ramoji Film City, Hyderabad', 'Hyderabad', 'mtech', 4, 3, 3, 0, 0, 'Computer science & engineering,\r\nE&T engineering.\r\n'),
(106, 'Shivani College of IT and Management, Dilsukh Nagar, Hyderabad', 'Hyderabad', 'mtech', 3, 2, 1, 0, 0, 'Civil,\r\nElectrical,\r\nElectronics and Communication,\r\nMechanical and\r\nComputer Science .'),
(107, 'Indore Institute of Science and Technology, Indore', 'Indore', 'mtech', 4, 3, 2, 0, 0, 'Computer science & engineering'),
(108, 'Medi-Caps University, Indore', 'Indore', 'mtech', 4, 3, 3, 0, 0, 'M.Tech in Computer Science, \r\nM.Tech in Electronics and Communication Engineering, \r\nM.Tech in Information Technology, \r\nM.Tech in Mechanical Engineering.'),
(109, 'Acropolis Technical Campus (ATC Indore), Indore', 'Indore', 'mtech', 3, 2, 1, 0, 0, 'Computer science & engineering\r\n'),
(110, 'International Institute of Professional Studies (IIPS, Indore), Indore', 'Indore', 'mtech', 4, 3, 2, 0, 0, 'Information Technology '),
(111, 'Vikrant Group of Institutions, Indore', 'Indore', 'mtech', 3, 2, 1, 0, 0, 'Computer science & engineering,\r\nE&T engineering.'),
(112, 'Indian Institute of Technology, (IIT Indore), Indore', 'Indore', 'mtech', 5, 5, 4, 0, 0, 'Mechanical engineering,\r\nElectrical engineering.'),
(113, 'Acropolis Institute of Technology and Research (AITR), Indore', 'Indore', 'mtech', 4, 2, 3, 0, 0, 'Computer science & engineering\r\n'),
(114, 'Sanghvi Institute of Management and Science(SIMS - INDORE), Indore', 'Indore', 'mtech', 4, 3, 3, 0, 0, 'Computer science& engineering,\r\nElectronics & communication.'),
(115, 'Malwa Institute of Technology (MIT Indore), Indore', 'Indore', 'mtech', 4, 3, 2, 0, 0, 'Mechanical engineering,\r\nCivil engineering,\r\nComputer science & engineering.\r\n'),
(116, 'Sri Aurobindo Institute of Technology (SAIT, Indore), Indore', 'Indore', 'mtech', 4, 3, 3, 0, 0, 'Mechanical Engineering ,\r\nComputer Science and Engineering .\r\n'),
(117, 'Astral Institute of Technology and Research (Astral, Indore), Indore', 'Indore', 'mtech', 3, 2, 2, 0, 0, 'Computer science\r\n'),
(118, 'BM College of Technology (BMCT, Indore), Indore', 'Indore', 'mtech', 3, 1, 1, 0, 0, 'Computer science & engineering,\r\nMechanical engineering.'),
(119, 'Rishiraj Institute of Technology (RIT, Indore), Indore', 'Indore', 'mtech', 4, 3, 2, 0, 0, 'Computer science & engineering,\r\nE& T  engineering.\r\n'),
(120, 'Devi Ahilya Vishwavidhyalaya (DAVV), Indore', 'Indore', 'mtech', 4, 2, 3, 0, 0, 'Computer  science,\r\nIT engineering.\r\n'),
(121, 'IES Management College and Research Centre', 'Mumbai', 'mba', 3, 2, 0, 2, 0, 'Post Graduate Diploma in Management,\nMaster of Management Studies,\nPGDM in Pharma and Healthcare Management'),
(122, 'K. J. Somaiya Institute of Management Studies and Research (SIMSR)', 'Mumbai', 'mba', 4, 3, 0, 3, 2, 'Post Graduate Diploma in Management,\r\nMasters in Management Studies,\r\nPG Diploma in Retail Management,\r\nPG Diploma in International Business,\r\nPG Diploma in Financial Services, \r\nPG Diploma in Communications,\r\nPh.D. (Arts) in Management Studies.'),
(123, 'Prin. L. N. Welingkar Institute of Management Development and Research (WeSchool)', 'Mumbai', 'mba', 3, 2, 0, 1, 2, 'Post Graduate Diploma in Management,\r\nPGDM in Business Design,\r\nPGDM in E-Business,\r\nPGDM in Retail Management,\r\nPGDM in Rural Management (Emerging Economies),\r\nMaster in Management Studies,\r\nPGDM in Healthcare Management,\r\nPGDM in Media and Entertainment,\r\nPGDM in Research and Business Analytics,'),
(124, 'D Y Patil University School of Management (DYPUSM)', 'Mumbai', 'mba', 4, 4, 0, 3, 2, 'Master of Business Administration,\r\nMBA in Retail Management,\r\nMBA in International Business Management,\r\nMBA in Banking and Insurance,\r\nMBA in Pharmaceutical Industry Management,\r\nMBA in Biotechnology Management,\r\nMBA in Bioinformatics Management,\r\nMBA in Health and Hospital Management,\r\nMBA in Logistics and Supply Chain Management,\r\nMBA in Outsourcing Management,\r\nMBA in Aviation Management.'),
(125, 'Universal Business School (UBS Sion)', 'Mumbai', 'mba', 4, 3, 0, 2, 2, 'Post Graduate Diploma in Management,\r\nMBA + PGDM,\r\nMBA + PGDM + PGPM,\r\nMBA + PGCM,\r\nPGPM + PGCM + Certificate in Digital Marketing,\r\nPost Graduate Program in Management.'),
(126, 'Durgadevi Saraf Institute of Management Studies (DSIMS)', 'Mumbai', 'mba', 3, 2, 0, 3, 2, 'Post Graduate Diploma in Management,\r\nMaster of Management Studies.'),
(127, 'International College of Financial Planning, Mumbai (ICOFP)', 'Mumbai', 'mba', 3, 1, 0, 2, 2, 'MBA in Financial Planning + Advanced Program in Financial Planning + CFP Certification'),
(128, 'BSE Institute Limited, Mumbai', 'Mumbai', 'mba', 3, 2, 0, 1, 2, 'Post Graduate Program in Global Financial Markets,\r\nPost Graduate Program in Banking and Finance,\r\nMaster of Business Administration.'),
(129, 'Deviprasad Goenka Management College of Media Studies (DGMC)', 'Mumbai', 'mba', 3, 1, 0, 2, 2, 'PGDM in Media and Communication,\r\nPost Graduate Diploma in Digital Marketing.'),
(130, 'National Institute of Securities Markets (NISM)', 'Mumbai', 'mba', 3, 2, 0, 2, 2, 'Post Graduate Program in Securities Markets,\r\nPost Graduate Diploma in Quantitative Finance.'),
(131, 'ITM Business School, Dombivili', 'Thane', 'mba', 4, 3, 0, 3, 2, 'Post Graduate Diploma in Management.'),
(132, 'ASM''s Institute of Management and Computer Studies (IMCOST)', 'Thane', 'mba', 3, 1, 0, 2, 2, 'Masters of Management Studies.'),
(133, 'ITM Business School, Navi Mumbai (ITM)', 'Mumbai', 'mba', 4, 3, 0, 3, 2, 'Post Graduate Diploma in Management'),
(134, 'Thakur Institute of Management Studies and Research(TIMSR)', 'Mumbai', 'mba', 4, 3, 0, 4, 2, 'Post Graduate Diploma in Management,\r\nMasters in Management Studies.'),
(135, 'Athena School of Management', 'Mumbai', 'mba', 4, 2, 0, 2, 2, 'MBA + PGPM'),
(136, 'Manav Rachna International University', 'Delhi', 'mba', 4, 3, 0, 3, 2, 'Master of Business Administration,\r\nMBA in Healthcare Management (With Fortis),\r\nPh.D. in Management,\r\nMBA in Human Resource Management.'),
(137, 'Jagannath International Management School (JIMS)', 'Delhi', 'mba', 4, 3, 0, 4, 2, '\r\nPost Graduate Diploma in Management,\r\nPost Graduate Diploma in International Business.'),
(138, 'New Delhi Institute of Management (NDIM)', 'Delhi', 'mba', 4, 3, 0, 3, 2, 'Post Graduate Diploma in Management,\r\nPGDM in Marketing,\r\nPGDM in Finance,\r\nMaster of Business Administration.'),
(139, 'Jagan Institute of Management Studies (JIMS), Sector-5, Rohini	', 'Delhi', 'mba', 3, 2, 0, 2, 2, 'Post Graduate Diploma in Management,\r\nPost Graduate Diploma in Retail Management,\r\nPost Graduate Diploma in International Business.\r\n'),
(140, 'Bharatiya Vidya Bhavan''s Usha and Lakshmi Mittal Institute of Management (BULMIM)', 'Delhi', 'mba', 3, 1, 0, 1, 2, 'Post Graduate Diploma in Management.'),
(141, 'G.L. Bajaj Institute of Management and Research (GLBIMR)', 'Delhi', 'mba', 4, 3, 0, 3, 2, 'Post Graduate Diploma in Management.'),
(142, 'Greater Noida Institute of Technology (GNIOT)', 'Delhi', 'mba', 4, 3, 0, 3, 2, 'Master of Business Administration,\r\nMBA (Lateral Entry).'),
(143, 'Accurate Institute of Management and Technology', 'Delhi', 'mba', 3, 1, 0, 2, 2, 'Post Graduate Diploma in Management,\r\nMaster of Business Administration.'),
(144, 'Apeejay Institute of Technology - School of Management (AITSM)', 'Delhi', 'mba', 3, 1, 0, 3, 2, 'Post Graduate Diploma in Management'),
(145, 'Mangalmay Institute of Management and Technology (MIMT, Greater Noida)', 'Delhi', 'mba', 4, 3, 0, 3, 2, 'Master of Business Administration.'),
(146, 'Alliance School of Business - Alliance University', 'Bangalore', 'mba', 4, 3, 0, 4, 2, 'Master of Business Administration,\r\nPost Graduate Diploma in Management,\r\nPh.D. in Management.'),
(147, 'Amrita School of Business - Amrita Vishwa Vidyapeetham (ASB, Bangalore)', 'Bangalore', 'mba', 3, 1, 0, 1, 2, 'MBA + MS,\r\nPh.D. in Management.'),
(148, 'AIMS Institutes (AIMS)', 'Bangalore', 'mba', 4, 3, 0, 2, 2, 'Master of Business Administration.'),
(149, 'Acharya Bangalore B-School (ABBS)', 'Bangalore', 'mba', 4, 3, 0, 3, 2, 'Master of Business Administration,\r\nPost Graduate Diploma in Management,\r\nPGDM - Global,\r\nPGDM in Banking, Insurance, Finance and Allied Services,\r\nMaster of Business Administration (Mysore University).'),
(150, 'International School of Management Excellence (ISME, Bangalore)	', 'Bangalore', 'mba', 4, 3, 0, 2, 2, 'Post Graduate Diploma in Management,\r\nPGDM + MBA.'),
(151, 'National School of Business (NSB, Banglore)', 'Bangalore', 'mba', 4, 3, 0, 3, 2, 'MBA + PGPM.'),
(152, 'Prin. L. N. Welingkar Institute of Management Development and Research (WeSchool)', 'Bangalore', 'mba', 3, 3, 0, 2, 2, 'Post Graduate Diploma in Management,\r\nPGDM in Business Design,\r\nPGDM in E-Business.'),
(153, 'Adarsh Institute of Management and Information Technology (AIMIT Chamrajpet)', 'Bangalore', 'mba', 3, 3, 0, 1, 2, 'Master of Business Administration,\r\nPost Graduate Diploma in Management.'),
(154, 'M. S. Ramaiah University of Applied Sciences (MSRUAS)', 'Bangalore', 'mba', 3, 3, 0, 2, 2, 'Master of Business Administration,\r\nMaster of Hospital Administration,\r\nMBA in Innovation and Entrepreneurship,\r\nMBA in Pharma Business Management.'),
(155, 'ITM Business School, Bangalore', 'Bangalore', 'mba', 4, 3, 0, 3, 2, 'Post Graduate Diploma in Management.'),
(156, 'IIKM Business School, Chennai (IIKM Chennai), Nungambakkam, Chennai\n', 'Chennai', 'mba', 4, 3, 0, 2, 2, 'MBA + PGPM + ERP, 2 Years\r\nMBA in Airline and Airport Management, 2 Years\r\nMBA in Shipping & Logistics, 2 Years\r\n\r\n'),
(157, 'Loyola Institute of Business Administration (LIBA), Nungambakkam, Chennai\n', 'Chennai', 'mba', 3, 3, 0, 1, 2, 'Post Graduate Diploma in Management, 2 Years\r\n'),
(158, 'SSN School of Management (SSN SOM), Old Mahabalipuram Road, Chennai\n', 'Chennai', 'mba', 4, 3, 0, 3, 2, 'Master of Business Administration, 2 Years\r\n'),
(159, 'VIT Business School, Chennai, Vandalur Kelambakkam Road, Chennai\r\n', 'Chennai', 'mba', 4, 3, 0, 2, 2, 'Master of Business Administration, 2 Years\r\n'),
(160, 'Hindustan University (HU, Chennai), Kelambakkam, Chennai\n', 'Chennai', 'mba', 4, 3, 0, 2, 2, 'MBA in Media and Entertainment Management, 2 Years\r\nMBA in Hospital and Healthcare Management, 2 Years\r\nMBA in Family Business and Entrepreneurship, 2 Years\r\nMBA in Hospitality Management, 2 Years\r\nMBA in Aviation Management, 2 Years\r\nMasters of Business Administration, 2 Years\r\nMBA in Defence Technology Management, 2 Years\r\nMBA in Automobile Dealership Management, 2 Years\r\n'),
(161, 'Veltech Dr. RR and Dr. SR University (VelTech, VTU), Avadi, Chennai\n', 'Chennai', 'mba', 3, 3, 0, 1, 2, 'Integrated MBA in Logistics Management, 2 Years\r\nMaster of Business Administration, 2 Years\r\nM.Phil., 2 Years\r\nPh.D, 5 Years\r\nMBA in Automobile Dealerships Management in Collaboration with Kuttukaran Institute of HRD, 2 Years\r\nMBA in Digital Marketing in collaboration with Sprottshaw College, British Columbia, 2 Years\r\nMBA in Global Relations in collaboration with Sprottshaw College, British \r\n'),
(162, 'Bharath University (BU, Chennai), Selaiyur, Chennai\r\n', 'Chennai', 'mba', 4, 3, 0, 2, 2, 'Master of Business Administration, 2 Years\r\nMBA in Hospital and Health System Management, 2 Years\r\nMBA in Marketing, 2 Years\r\nMBA in Banking and Finance, 2 Years\r\nMBA in International Business, 2 Years\r\nPhD in Management, 3 Years\r\nPhD in Management, 3 Years\r\nMBA in Tourism and Hospitality Management, 2 Years\r\n'),
(163, 'Chennai Business School (CBS, Chennai), Mylapore, Chennai\r\n', 'Chennai', 'mba', 4, 3, 0, 3, 2, 'Post Graduate Program in Human Resource Management, 1 Year\r\nPost Graduate Program in Information Technology, 1 Year\r\nPost Graduate Program in Marketing and Communications, 1 Year\r\nPost Graduate Program in Finance, 1 Year\r\nPost Graduate Program in International Business, 1 Year\r\nPost Graduate Program in Entrepreneurship, 1 Year\r\n\r\n'),
(164, 'Meenakshi Sundararajan School of Management, Kodambakkam, Chennai\n', 'Chennai', 'mba', 3, 3, 0, 2, 2, 'Master of Business Administration, 2 Years\r\nPost Graduate Diploma in Management, 2 Years\r\n'),
(165, 'Great Lakes Institute of Management (GLIM, Chennai), Kanchipuram, Chennai\n', 'Chennai', 'mba', 3, 3, 0, 2, 2, 'Post Graduate Programme in Management, 1 Year\r\nPost Graduate Diploma in Management, 2 Years\r\n'),
(166, 'Institute of Public Enterprise (IPE, Hyderabad), Shamirpet, Hyderabad\r\n', 'Hyderabad', 'mba', 2, 3, 0, 2, 2, 'Post Graduate Diploma in Management, 2 Years\r\nPost Graduate Diploma in Retail Marketing, 2 Years\r\nPost Graduate Diploma in Banking, Insurance and Financial Services, 2 Years\r\nPost Graduate Diploma in International Business, 2 Years\r\nPost Graduate Diploma in Human Resource Management, 2 Years\r\n'),
(167, 'Hyderabad Business School, GITAM University (GHBS), Patancheru, Hyderabad\r\n', 'Hyderabad', 'mba', 4, 3, 0, 3, 2, 'Master of Business Administration, 2 Years\r\n'),
(168, 'Anglophile Business School, Madhapur, Hyderabad\n', 'Hyderabad', 'mba', 2, 3, 0, 1, 2, 'Post Graduate Diploma in Management, 2 Years\r\nPGDM in Business Analytics, 2 Years\r\nPGDM in Pharma and Health Care Management, 2 Years\r\n'),
(169, 'IIRM (Promoted by IRDAI), Gachibowli, Hyderabad\n', 'Hyderabad', 'mba', 4, 3, 0, 4, 2, 'Post Graduate Diploma in Management, 2 Years\r\nPost Graduate Diploma in Business Analytics, 1 Year\r\n'),
(170, 'Administrative Staff College of India, Banjara Hills, Hyderabad\n', 'Hyderabad', 'mba', 3, 3, 0, 2, 2, 'Postgraduate Program in Hospital Management, 2 Years\r\n'),
(171, 'International Institute of Petroleum Pharma, Telecom & Management, Panjagutta, Hyderabad\r\n', 'Hyderabad', 'mba', 4, 3, 0, 3, 2, 'M.B.A Petroleum & Energy Management, 2 Years\r\nM.B.A Telecom Management, 2 Years\r\nM.B.A Pharmaceutical Management, 2 Years\r\nM.B.A Hospital Management, 2 Years\r\nM.B.A Banking & Finance Management, 2 Years\r\n'),
(172, 'Aurora Group of Institutions (Aurora, Hyderabad), Chikkadpally, Hyderabad\n', 'Hyderabad', 'mba', 4, 3, 0, 2, 2, 'PGDM in Marketing, 2 Years\r\nPGDM in Hospital Management, 2 Years\r\nPGDM in Rural Management, 2 Years\r\n'),
(173, 'Siva Sivani Institute of Management (SSIM Hyderabad), Kompalli, Hyderabad\n', 'Hyderabad', 'mba', 3, 3, 0, 2, 2, 'PGDM (Triple Specialization), 2 Years\r\nPGDM in Human Resource Management, 2 Years\r\nPGDM in Marketing, 2 Years\r\nPGDM in Banking, Insurance, Finance and Allied Services, 2 Years\r\n'),
(174, 'GBS School of Business Studies, Banjara Hills, Hyderabad\r\n', 'Hyderabad', 'mba', 3, 3, 0, 1, 2, 'Post Graduate Diploma in Management, 2 Years\r\nPGDM in Media, 2 Years\r\nPGDM in Healthcare, 2 Years\r\nPGDM in Retail Business, 2 Years\r\nPGDM in Business Analytics, 2 Years\r\n'),
(175, 'Symbiosis National Aptitude Test (SNAP), Hyderabad, Mahboobnagar, Hyderabad\n', 'Hyderabad', 'mba', 4, 3, 0, 3, 2, 'MBA- SIBM (Hyderabad), 2 Years\r\nMBA- SIMC, 2 Years\r\nMBA-SICSR, 2 Years\r\nMBA-SIIB, 2 Years\r\nMBA-SIMS, 2 Years\r\nMBA- SITM, 2 Years\r\nMBA-SCIT, 2 Years\r\nMBA-SIOM, 2 Years\r\nMBA-SIHS, 2 Years\r\nMBA-SIBM (Bangalore), 2 Years\r\nMBA-SCMHRD, 2 Years\r\nMBA-SIBM (Pune), 2 Years\r\nMBA- SSBF, 2 Years\r\nMBA – SSMC (Bengaluru), 2 Years\r\n'),
(176, 'ASM''s Institute of International Business and Research (IIBR), Pimpri, Pune\r\n', 'pune', 'mba', 4, 3, 0, 2, 2, 'PGDM in Business Analytics and Big Data, 2 Years\r\nPGDM in Business Administration, 2 Years\r\nMBA-City U Seattle, USA, 2 Years\r\nMaster of Business Administration, 2 Years\r\n'),
(177, 'International Institute of Management Studies, Pune (IIMS Pune), Hinjewadi, Pune\r\n', 'pune', 'mba', 4, 3, 0, 3, 2, 'Post Graduate Diploma in Management, 2 Years\r\nPost Graduate Diploma in Retail Management, 2 Years\r\n'),
(178, 'Sri Balaji Society''s- BIMM, BIIB, BITM and BIMHRD, Tathawade, Pune\n', 'pune', 'mba', 3, 3, 0, 1, 2, 'BIMM - PGDM, 2 Years\r\nBIMM - PGDM in Information Technology and Marketing, 2 Years\r\nBIMM - PGDM in Personnel Management and Human Resource Management, 2 Years\r\nBIMHRD - PGDM, 2 Years\r\nBIMHRD - PGDM in Personnel Management and Human Resource Management, 2 Years\r\nBIMHRD - PGDM in Marketing and Finance, 2 Years\r\nBIIB - PGDM in Finance, 2 Years\r\nBIIB - PGDM in International Business, 2 Years\r\nBIIB - PGDM in Marketing, 2 Years\r\nBITM - PGDM in Marketing and Finance, 2 Years\r\nBITM - PGDM in Telecom, 2 Years\r\nBITM - PGDM in Telecom and Marketing, 2 Years\r\n'),
(179, 'Management Institute For Leadership and Excellence,(MILE Pune), Wagholi\n', 'pune', 'mba', 2, 3, 0, 1, 2, 'Post Graduate Diploma in Management, 2 Years\r\n'),
(180, 'Suryadatta Institute of Management and Mass Communication (SIMMC), Bavdhan, Pune\r\n', 'pune', 'mba', 3, 3, 0, 2, 2, 'Post Graduate Diploma in Management, 2 Years\r\nMaster of Business Administration, 2 Years\r\n'),
(181, 'Padmashree Dr. D.Y.Patil Institute of Master of Business Administration (DYPIMBA), Akurdi, Pune\n', 'pune', 'mba', 4, 3, 0, 3, 2, 'Master of Business Administration, 2 Years\r\n'),
(182, 'Deccan Education Society - Institute of Management Development and Research (IMDR), Deccan, Pune\n', 'pune', 'mba', 2, 3, 0, 1, 2, 'Post Graduate Diploma in Management, 2 Years\r\n'),
(183, 'Dnyansagar Institute of Management and Research (DIMR, Pune), Baner, Pune\n', 'pune', 'mba', 3, 3, 0, 2, 2, 'MBA + PGPM, 2 Years\r\n'),
(184, 'Indira College of Engineering and Management (ICEM), Parandwadi, Pune\n', 'pune', 'mba', 4, 3, 0, 3, 2, 'Master of Business Administration, 2 Years\r\n'),
(185, 'Vishwakarma Global Business School (VGBS), Kondhwa Budruk, Pune\r\n', 'pune', 'mba', 4, 3, 0, 2, 2, 'PGDM in Mass Communication, 2 Years\r\nPGDM in Finance, 2 Years\r\nPGDM in Event Management, 2 Years\r\nPGDM in Logistics and Supply Chain Management, 2 Years\r\nPGDM in Human Resource Management, 2 Years\r\nPGDM in Construction Management, 2 Years\r\nPGDM in Marketing Management, 2 Years\r\nPGDM in Agri Business Management, 2 Years\r\n'),
(186, 'Calcutta Business School, Diamond Harbour Road, Kolkata\r\n', 'kolkata', 'mba', 4, 3, 0, 3, 2, 'Post Graduate Diploma in Management, 2 Years\r\n'),
(187, 'Future Business School-FIEM, Sonarpur, Kolkata\r\n', 'kolkata', 'mba', 3, 3, 0, 3, 2, 'Master of Business Administration, 2 Years\r\n'),
(188, 'International Management Institute, Kolkata (IMI, Kolkata), Alipore, Kolkata\n', 'kolkata', 'mba', 4, 3, 0, 2, 2, 'Post Graduate Diploma in Management, 2 Years\r\n'),
(189, 'International School of Business & Media, Kolkata, Rajarhat, Kolkata\r\n', 'kolkata', 'mba', 4, 3, 0, 3, 2, 'PGPBM + PGDM, 2 Years\r\nPGPSCOM+PGDM, 2 Years\r\nPGPCM+PGDM, 2 Years\r\n'),
(190, 'Budge Budge Institute of Technology (BBIT), Budge Budge, Kolkata\n', 'kolkata', 'mba', 3, 3, 0, 2, 2, 'Master of Business Administration, 2 Years\r\n'),
(191, 'Amity University, Kolkata, Kadampukur, Kolkata\n', 'kolkata', 'mba', 5, 3, 0, 5, 2, 'Master of Business Administration'),
(192, 'Parjananananda Institute For Professional Studies, A.J.C. Bose Road, Kolkata\r\n', 'kolkata', 'mba', 3, 3, 0, 1, 2, '"Master of Business Administration, 2 Years\r\nMBA-Lateral entry, 1 Year\r\nPost Graduate Diploma in Business Management, 1 Year"\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nishank`
--
ALTER TABLE `nishank`
  ADD PRIMARY KEY (`cid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
