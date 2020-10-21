-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2017 at 09:44 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fes`
--

-- --------------------------------------------------------

--
-- Table structure for table `award`
--

CREATE TABLE `award` (
  `award_name` varchar(255) NOT NULL,
  `award_SSN` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `agency_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `award`
--

INSERT INTO `award` (`award_name`, `award_SSN`, `url`, `date`, `agency_name`) VALUES
('Course topper for NPTEL online course on \"Introduction to Research\"', 'IS076', '', '0000-00-00 00:00:00', 'IIT,Madras'),
('Researcher of the year', 'IS007', '', '2014-10-21 00:00:00', 'Cognizant - RVCE');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `ISBN` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `publisher_name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`ISBN`, `title`, `publisher_name`, `date`) VALUES
('978-013-2316811', 'Introduction to Design and Analysis of algorithms', 'Pearson', 'july 2010'),
('978-81-317-5902-8', 'Compliers Principles, Techniques and Tools ', 'Pearson', 'December 2010');

-- --------------------------------------------------------

--
-- Table structure for table `conducts`
--

CREATE TABLE `conducts` (
  `seminar_title` varchar(255) NOT NULL,
  `seminar_SSN` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `conference`
--

CREATE TABLE `conference` (
  `conf_name` varchar(255) NOT NULL,
  `conf_type` text NOT NULL,
  `pages` int(11) NOT NULL,
  `research_area` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `consultancy`
--

CREATE TABLE `consultancy` (
  `client_name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `duration` datetime NOT NULL,
  `revenue` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_title` varchar(255) NOT NULL,
  `program` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL,
  `pass_percentage` varchar(255) NOT NULL,
  `no_of_students` int(11) NOT NULL,
  `course_SSN` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `degrees`
--

CREATE TABLE `degrees` (
  `qualification` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `university` varchar(255) NOT NULL,
  `join_year` varchar(255) NOT NULL,
  `pass_year` int(11) NOT NULL,
  `percentage` int(11) NOT NULL,
  `degree_eid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `delivers`
--

CREATE TABLE `delivers` (
  `IT_SSN` varchar(255) NOT NULL,
  `IT_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `name` text NOT NULL,
  `eid` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`name`, `eid`, `email`, `dob`, `password`, `designation`) VALUES
('Dr. B M Sagar', 'IS007', 'sagarbm@rvce.edu.in', '1978-12-16', '123', 'Associate Professor'),
('Dr. Cauvery N K', 'IS010', 'cauverynk@rvce.edu.in', '1974-05-17', '123', 'HOD'),
('Rajashekar Murthy', 'IS015', 'rajashekarmurthys@rvce.edu.in', '1975-05-17', '123', 'Associate Professor'),
('Padmashree T', 'IS076', 'padmashreet@rvce.edu.in', '1980-04-06', '123', 'Assistant Professor');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_type`
--

CREATE TABLE `faculty_type` (
  `fac_type` varchar(255) NOT NULL,
  `fac_SSN` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `has_published`
--

CREATE TABLE `has_published` (
  `book_SSN` varchar(255) NOT NULL,
  `book_ISBN` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `has_published`
--

INSERT INTO `has_published` (`book_SSN`, `book_ISBN`) VALUES
('IS015', '978-013-2316811'),
('IS007', '978-81-317-5902-8');

-- --------------------------------------------------------

--
-- Table structure for table `invited_talks`
--

CREATE TABLE `invited_talks` (
  `it_type` text NOT NULL,
  `it_location` varchar(255) NOT NULL,
  `it_title` varchar(255) NOT NULL,
  `research_area` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `journal`
--

CREATE TABLE `journal` (
  `journal_type` text NOT NULL,
  `journal_name` varchar(255) NOT NULL,
  `paper_title` varchar(255) NOT NULL,
  `volume` varchar(255) NOT NULL,
  `paper_no` varchar(255) NOT NULL,
  `page_no` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `journal`
--

INSERT INTO `journal` (`journal_type`, `journal_name`, `paper_title`, `volume`, `paper_no`, `page_no`, `date`) VALUES
('International ', 'International International Journal of Computer and Communication technology ', 'Context Free Grammar (CFG) Analysis for simple Kannada\r\nsentences', '', '', '', ''),
('International ', 'International Journal of P2P Network Trends and Technology', 'Timetable Scheduling using Graph Coloring', '', '', '57-62', '2011');

-- --------------------------------------------------------

--
-- Table structure for table `presented_at`
--

CREATE TABLE `presented_at` (
  `conf_name` varchar(255) NOT NULL,
  `conf_SSN` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `publishes_in`
--

CREATE TABLE `publishes_in` (
  `journal_SSN` varchar(255) NOT NULL,
  `journal_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publishes_in`
--

INSERT INTO `publishes_in` (`journal_SSN`, `journal_title`) VALUES
('IS007', 'Context Free Grammar (CFG) Analysis for simple Kannada\r\nsentences'),
('IS010', 'Timetable Scheduling using Graph Coloring');

-- --------------------------------------------------------

--
-- Table structure for table `seminar/workshop`
--

CREATE TABLE `seminar/workshop` (
  `seminar_type` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `seminar_title` varchar(255) NOT NULL,
  `research_area` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `works_with`
--

CREATE TABLE `works_with` (
  `cons_SSN` varchar(255) NOT NULL,
  `cons_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `award`
--
ALTER TABLE `award`
  ADD PRIMARY KEY (`award_name`),
  ADD KEY `award_SSN` (`award_SSN`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`ISBN`);

--
-- Indexes for table `conducts`
--
ALTER TABLE `conducts`
  ADD KEY `seminar_title` (`seminar_title`),
  ADD KEY `seminar_SSN` (`seminar_SSN`);

--
-- Indexes for table `conference`
--
ALTER TABLE `conference`
  ADD PRIMARY KEY (`conf_name`);

--
-- Indexes for table `consultancy`
--
ALTER TABLE `consultancy`
  ADD PRIMARY KEY (`title`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_title`),
  ADD KEY `course_SSN` (`course_SSN`);

--
-- Indexes for table `degrees`
--
ALTER TABLE `degrees`
  ADD PRIMARY KEY (`institution`),
  ADD KEY `degree_eid` (`degree_eid`);

--
-- Indexes for table `delivers`
--
ALTER TABLE `delivers`
  ADD KEY `IT_SSN` (`IT_SSN`),
  ADD KEY `IT_title` (`IT_title`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `faculty_type`
--
ALTER TABLE `faculty_type`
  ADD PRIMARY KEY (`fac_type`,`fac_SSN`),
  ADD KEY `fac_SSN` (`fac_SSN`);

--
-- Indexes for table `has_published`
--
ALTER TABLE `has_published`
  ADD KEY `book_SSN` (`book_SSN`),
  ADD KEY `book_ISBN` (`book_ISBN`);

--
-- Indexes for table `invited_talks`
--
ALTER TABLE `invited_talks`
  ADD PRIMARY KEY (`it_title`);

--
-- Indexes for table `journal`
--
ALTER TABLE `journal`
  ADD PRIMARY KEY (`paper_title`);

--
-- Indexes for table `presented_at`
--
ALTER TABLE `presented_at`
  ADD KEY `conf_name` (`conf_name`),
  ADD KEY `conf_SSN` (`conf_SSN`);

--
-- Indexes for table `publishes_in`
--
ALTER TABLE `publishes_in`
  ADD KEY `journal_SSN` (`journal_SSN`),
  ADD KEY `journal_title` (`journal_title`);

--
-- Indexes for table `seminar/workshop`
--
ALTER TABLE `seminar/workshop`
  ADD PRIMARY KEY (`seminar_title`);

--
-- Indexes for table `works_with`
--
ALTER TABLE `works_with`
  ADD KEY `cons_SSN` (`cons_SSN`),
  ADD KEY `cons_title` (`cons_title`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `award`
--
ALTER TABLE `award`
  ADD CONSTRAINT `award_ibfk_1` FOREIGN KEY (`award_SSN`) REFERENCES `faculty` (`eid`);

--
-- Constraints for table `conducts`
--
ALTER TABLE `conducts`
  ADD CONSTRAINT `conducts_ibfk_1` FOREIGN KEY (`seminar_title`) REFERENCES `seminar/workshop` (`seminar_title`),
  ADD CONSTRAINT `conducts_ibfk_2` FOREIGN KEY (`seminar_SSN`) REFERENCES `faculty` (`eid`);

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`course_SSN`) REFERENCES `faculty` (`eid`);

--
-- Constraints for table `degrees`
--
ALTER TABLE `degrees`
  ADD CONSTRAINT `degrees_ibfk_1` FOREIGN KEY (`degree_eid`) REFERENCES `faculty` (`eid`);

--
-- Constraints for table `delivers`
--
ALTER TABLE `delivers`
  ADD CONSTRAINT `delivers_ibfk_1` FOREIGN KEY (`IT_SSN`) REFERENCES `faculty` (`eid`),
  ADD CONSTRAINT `delivers_ibfk_2` FOREIGN KEY (`IT_title`) REFERENCES `invited_talks` (`it_title`);

--
-- Constraints for table `faculty_type`
--
ALTER TABLE `faculty_type`
  ADD CONSTRAINT `faculty_type_ibfk_1` FOREIGN KEY (`fac_SSN`) REFERENCES `faculty` (`eid`);

--
-- Constraints for table `has_published`
--
ALTER TABLE `has_published`
  ADD CONSTRAINT `has_published_ibfk_1` FOREIGN KEY (`book_SSN`) REFERENCES `faculty` (`eid`),
  ADD CONSTRAINT `has_published_ibfk_2` FOREIGN KEY (`book_ISBN`) REFERENCES `book` (`ISBN`);

--
-- Constraints for table `presented_at`
--
ALTER TABLE `presented_at`
  ADD CONSTRAINT `presented_at_ibfk_1` FOREIGN KEY (`conf_name`) REFERENCES `conference` (`conf_name`),
  ADD CONSTRAINT `presented_at_ibfk_2` FOREIGN KEY (`conf_SSN`) REFERENCES `faculty` (`eid`);

--
-- Constraints for table `publishes_in`
--
ALTER TABLE `publishes_in`
  ADD CONSTRAINT `publishes_in_ibfk_1` FOREIGN KEY (`journal_SSN`) REFERENCES `faculty` (`eid`),
  ADD CONSTRAINT `publishes_in_ibfk_2` FOREIGN KEY (`journal_title`) REFERENCES `journal` (`paper_title`);

--
-- Constraints for table `works_with`
--
ALTER TABLE `works_with`
  ADD CONSTRAINT `works_with_ibfk_1` FOREIGN KEY (`cons_SSN`) REFERENCES `faculty` (`eid`),
  ADD CONSTRAINT `works_with_ibfk_2` FOREIGN KEY (`cons_title`) REFERENCES `consultancy` (`title`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
