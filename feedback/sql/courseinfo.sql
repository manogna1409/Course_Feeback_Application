-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2014 at 03:55 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `courseinfo`
--

CREATE TABLE IF NOT EXISTS `courseinfo` (
  `cno` varchar(15) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `dept` varchar(15) NOT NULL,
  `Faculty_id` varchar(15) NOT NULL,
  `credits` int(11) NOT NULL,
  `semester` int(10) NOT NULL,
  PRIMARY KEY (`cno`),
  UNIQUE KEY `cno` (`cno`)
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Dumping data for table `courseinfo`
--

INSERT INTO `courseinfo` (`cno`, `cname`, `dept`, `Faculty_id`, `credits`, `semester`) VALUES
('COM102', 'C programming', 'COE', 'BSS', 3, 1),
('COM102P ', 'C programming practice', 'COE', 'BSS', 2, 1),
('COM103', 'discrete math', 'COE', 'SVK', 4, 1),
('COM104', ' Object Oriented Programming', 'COE', 'BSS', 3, 2),
('COM104P', 'OOPS practice', 'COE', 'BSS', 2, 2),
('COM201', 'Concepts in computer engg', 'COE', 'BSS', 2, 3),
('COM202', 'DSA', 'COE', 'VMM', 4, 3),
('COM202P', 'DSA practice', 'COE', 'VMM', 4, 3),
('COM203', 'Computer Organization', 'COE', 'NMM', 3, 3),
('COM203P', 'Computer Organization prac.', 'COE', 'NMM', 4, 3),
('COM204', 'Compiler Design', 'COE', 'VMM', 3, 4),
('COM204P', 'Compiler Design prac.', 'COE', 'VMM', 2, 4),
('COM301', 'Operating Systems', 'COE', 'NMM', 3, 5),
('COM301P', 'Operating Systems practice', 'COE', 'NMM', 2, 5),
('COM302', 'Networks', 'COE', 'NSG', 3, 5),
('COM302P', 'Networks practice', 'COE', 'NSG', 2, 5),
('COM303', 'Perl python', 'COE', 'VMM', 3, 5),
('COM304', 'Computer Architechture', 'COE', 'NMM', 3, 6),
('COM304P', 'Computer Architechture Prac.', 'COE', 'NMM', 4, 6),
('COM305', 'Software Engg.', 'COE', 'NSG', 4, 6),
('COM305P', 'Software engg practice', 'COE', 'NSG', 2, 6),
('COM402', 'Human computer interaction', 'COE', 'BSS', 3, 8),
('COM402P', 'HCI Practice', 'COE', 'BSS', 2, 8),
('COM501', 'ADSA', 'COE', 'NSG', 3, 6),
('COM502', 'DIP', 'COE', 'VMM', 3, 6),
('ELE 309P', 'communications practice', 'EDM', 'MDS', 2, 5),
('ELE 311P', 'VLSI DESIGN PRACTICE', 'EDM', 'BJK', 2, 6),
('ELE101', 'Basic Electrica', 'EDM', 'KSJ', 3, 1),
('ELE102', 'Digital logic design', 'EDM', 'BJK', 3, 2),
('ELE102P', 'DLD PRACTICE', 'EDM', 'BJK', 2, 2),
('ELE205', 'Electrical drives ', 'MDM', '', 3, 3),
('ELE205P', 'Electrical drives practice', 'MDM', '', 2, 3),
('ELE206', 'Networks and Systems', 'EDM', 'KSJ', 3, 3),
('ELE206P', 'Networks and Systems Practice', 'EDm', 'KSJ', 2, 3),
('ELE207', 'Solid State Devices', 'EDM', 'NKV', 3, 3),
('ELE207P', 'Solid Systems Practice', 'EDM', 'NKV', 2, 3),
('ELE208', 'Electromechanical Energy', 'EDM', 'PDD', 3, 3),
('ELE208P', 'Electomechanical practice', 'EDM', 'PDD', 2, 3),
('ELE209', 'Signals and Linear systems', 'EDM', 'KSJ', 3, 4),
('ELE209P', 'Electronic Circuit Design Practice', 'MDM', '', 2, 4),
('ELE210', 'Electronic Circuit Design', 'MDM', '', 3, 4),
('ELE211', 'Control Engineering', 'EDM', 'KSJ', 3, 4),
('ELE211P', 'Control Engineering Practice', 'EDM', 'KSJ', 2, 4),
('ELE212', 'Principles of Measurements', 'EDM', 'PDD', 3, 4),
('ELE212P', 'Measurements Practice', 'EDM', 'PDD', 2, 4),
('ELE213', 'Analog Circuits', 'EDM', 'BJK', 3, 4),
('ELE213P', 'Analog Circuits Practice', 'EDM', 'BJK', 2, 4),
('ELE214', 'Power Electronics ', 'EDM', 'PDD', 3, 4),
('ELE214P', 'Power Electronics Practice', 'EDM', 'PDD', 2, 4),
('ELE215', 'Electronic Devices', 'EDM', 'NKV', 3, 4),
('ELE215P', 'Electronic devices prac.', 'EDM', 'NKV', 2, 4),
('ELE303', 'Microprocessor & Embedded Controllers', 'MDM', '', 3, 5),
('ELE303P', ' Microprocessor & Embedded Controllers practice', 'MDM', '', 2, 5),
('ELE304', 'Instrumentation Practice', 'MDM', '', 3, 5),
('ELE305', 'Insrumentation', 'EDM', 'KP', 3, 5),
('ELE305P', 'Instrumentation Practice', 'EDM', 'KP', 2, 5),
('ELE306', 'Analog IC Apps', 'EDM', 'BJK', 2, 5),
('ELE306P', 'Analog IC Practice', 'EDM', 'BJK', 2, 5),
('ELE307', 'Applied DSP', 'EDM', 'KMP', 3, 5),
('ELE307P', 'DSP practice', 'EDM', 'KMP', 2, 5),
('ELE309', 'Communications', 'EDM', 'MDS', 3, 5),
('ELE309P', 'Signals and systems prac.', 'EDM', 'KSJ', 3, 4),
('ELE310', 'Packaging Techniques', 'EDM', 'SAS', 3, 6),
('ELE311', 'VLSI', 'EDM', 'BJK', 3, 6),
('ELE312', 'PCB Design', 'EDM', 'KSJ', 2, 6),
('ELE312P', 'PCB Practice', 'EDM', 'KSJ', 2, 6),
('ELE401', 'Embedded Systems', 'EDM', 'KP', 3, 7),
('ELE401P', 'Embedded Systems Practice', 'EDM', 'KP', 2, 7),
('ELE402', 'Data Networks', 'EDM', 'KP', 3, 7),
('ELE402P', 'Networks Practice', 'EDM', 'KP', 2, 7),
('ELE501', 'Communications', 'EDM', 'MDS', 3, 6),
('INT 303', 'Product design practice', 'MDM', 'SHK ', 2, 6),
('INT101', 'Graphic Art Practice', 'EDM', 'CGN', 2, 1),
('INT103', 'Electronics practice', 'EDM', 'MML', 2, 1),
('INT201', 'Concepts in engg design', 'MDM', 'RJB', 3, 3),
('INT401', 'Mini project', '', '', 2, 7),
('INT402', 'Project', '', '', 16, 8),
('MAN302', 'Quality Management', 'MDM', 'SHK', 3, 6),
('MAN401', 'professional ethics', 'EDM', 'TPS', 2, 7),
('MAN404', 'Finance Management', '', '', 3, 8),
('MAT101', 'calculus', 'COE', 'MAS', 3, 1),
('MAT103', 'ODE and PDE', 'COE', 'SMA', 3, 2),
('MAT201', 'Linear Algebra', 'COE', 'SVK', 3, 3),
('MAT203', 'Probability and statistics', 'COE', 'SVK', 3, 4),
('MEC105', 'Engineering drawing', 'MDM', 'CGN', 3, 2),
('MEC106', 'Basic thermal engineering', 'MDM', '', 3, 1),
('MEC107', 'Thermal Science for Electronic', 'MDM', 'RJB', 3, 1),
('MEC108', 'Materials Engineering', 'MDM', '', 3, 2),
('MEC109', 'Statics & Strength of Material', 'MDM', 'MSK', 4, 2),
('MEC201', 'Manufacturing Technology', 'MDM', '', 3, 3),
('MEC202', 'Fluid Mechanics and Heat Transfer', 'MDM', '', 3, 4),
('MEC204', 'Machine Drawing Practice', 'MDM', '', 3, 3),
('MEC208', 'Kinematics and Dynamics', 'MDM', '', 4, 3),
('MEC209', 'Engineering Simulations I', 'MDM', '', 3, 4),
('MEC211', 'Applied Mechanics Practice', 'MDM', '', 2, 3),
('MEC212', 'Mechanical Design Concepts', 'MDM', '', 3, 4),
('MEC303', 'Precision Manufacturing and Metrology', 'MDM', '', 3, 5),
('MEC303P', 'Precision Mfg. and Metrology Practice', 'MDM', '', 2, 5),
('MEC306', 'Geometric Modeling and CAD', 'MDM', '', 3, 6),
('MEC313', 'Machine Elements Design', 'MDM', '', 3, 5),
('MEC314', 'Finite Element Analysis', 'MDM', '', 3, 6),
('MEC315', 'Applied Thermal Engineering', 'MDM', '', 4, 6),
('MEC315P', 'Applied Thermal Engineering Practice', 'MDM', '', 2, 6),
('MEC401', 'Engineering Simulations II', 'MDM', '', 3, 7),
('MEC402', 'Robotics and Automation', 'MDM', '', 3, 7),
('MEC402P', 'Robotics and Automation Practice', 'MDM', '', 2, 7),
('MEC403', 'Production Engineering Management', 'MDM', '', 3, 7),
('PHY105', 'mechanics', 'EDM', 'TPS', 3, 1),
('PHY105P', 'mechanics practice', 'EDM', 'TPS', 2, 1),
('PHY106', 'Electromag and Quantum Mech.', 'EDM', 'TPS', 3, 2),
('PHY106P', 'Quantum Mech. practice', 'EDM', 'TPS', 2, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
