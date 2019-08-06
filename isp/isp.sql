-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 01, 2014 at 07:59 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `isp`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `cu_id` int(60) NOT NULL AUTO_INCREMENT,
  `cu_name` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact` varchar(60) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(200) NOT NULL,
  `ip` varchar(300) NOT NULL,
  `mac` varchar(300) NOT NULL,
  `package` varchar(20) NOT NULL,
  `paid` varchar(20) NOT NULL,
  `amount` int(50) NOT NULL,
  `status` varchar(300) NOT NULL,
  PRIMARY KEY (`cu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2008 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cu_id`, `cu_name`, `address`, `dob`, `gender`, `contact`, `email`, `password`, `ip`, `mac`, `package`, `paid`, `amount`, `status`) VALUES
(1, 'Asif', 'Rampura banasri', '1918-03-12', 'Male', '01927975625', 'drobortara@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2.2.2.2', '1.1.1.1', 'Banglalion', 'Yes', 400, 'active'),
(3, 'Adhora', 'Rupgong', '1990-06-08', 'Female', '98***25', 'drobortara@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '147.145.168.168', '235.235.235.235', 'Banglalion', 'Not yet Paid', 1600, 'active'),
(4, 'Ershad', 'DOHS', '1940-01-01', 'Male', '9*****00', 'dfas@gma.com', '827ccb0eea8a706c4c34a16891f84e7b', '156.156.158.159', '228.228.258.269', 'Banglalion', 'No', 500, 'active'),
(5, 'aa', 'dsf', '1991-12-10', 'Male', 'dfsf', 'hsfg@gmail.com', '1234', 'sdfsadf', 'sdfsf', 'Banglalion W', 'Defaulter', 0, 'inactive'),
(6, 'ab', 'fgklj', '05-12-2000', 'Male', 'dfj', 'dsf@fd.com', 'dfsd', 'mdfsd;', 'vdlfsd', 'Banglalion W', 'Defaulter', 0, 'inactive'),
(7, 'ac', 'dffg', '1979-12-17', 'Male', 'jyjhhfgh', 'fgh@yahoo.com', 'fdgdg', 'ukjth', '253gdfg', 'Banglalion W', 'Defaulter', 0, 'inactive'),
(8, 'ad', 'll;;mnl', '26-12-1988', 'Male', ',.mjoi.,', 'jkhj@kjhdsf.com', 'fkjsd', 'dsklfp', 'jvoo09nop`', 'Banglalion W', 'Defaulter', 0, 'inactive'),
(9, 'Khaleda Zia', 'Gulshan', '1920-11-26', 'Male', '965****47', 'drobortara@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '155.155.155.155', '255.255.255.255', 'Banglalion W', 'Yes', 2800, 'active'),
(10, 'yes', 'yesyes', '2005-06-18', 'Female', '0122222', 'yes@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '111', '111', 'Banglalion W', 'Defaulter', -700, 'inactive'),
(13, 'Gazi', 'Gazi bari', '1981-10-10', 'Male', '9856****4', 'gazi@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '124.125.126.127', '213.214.215.216', 'Banglalion', 'No', 0, 'inactive'),
(14, 'Habiba', 'shere kha', '1995-12-18', 'Male', '012356', 'habiba@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '125.125.125.255', '125.125.125.125', 'Safari 2', 'Defaulter', -1200, 'inactive'),
(15, 'Abdullah', '52/2,shere bangla road', '1987-08-06', 'Male', '01916284493', 'abd@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '125.125.125.255', '255.255.255.255', 'Banglalion', 'Defaulter', -400, 'inactive'),
(16, 'halima', '25/2,shere', '2013-12-17', 'Male', '01454630012', 'dff@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '123.123.123.123', '255.25.255.255', 'Safari', 'Defaulter', 0, 'inactive'),
(17, 'halima', '25/2,shere', '17-12-2013', 'Female', '4654654', '546546@gma.com', '827ccb0eea8a706c4c34a16891f84e7b', '123.123.123.123', '255.25.255.255', 'Safari', '', 0, 'inactive'),
(18, 'shirin', 'arichpur', '05-08-2013', 'Female', '4654654', 'dsfjasd@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '123.123.123.123', '255.25.255.255', 'Safari2', '', 0, 'inactive'),
(19, 'abc', 'abc', '2013-12-16', 'Female', '1245698', 'abc@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '123.123.', '23.23', 'Safari', '', 0, 'inactive'),
(20, 'Faruk', '6589', '1987-06-05', 'Male', '01258974', 'faruk@gm.co', '827ccb0eea8a706c4c34a16891f84e7b', '123.125.', '1.23.', 'Safari', '', 0, 'inactive'),
(21, 'Hasan', 'nikonjo', '1987-05-10', 'Male', '01562', 'rizwan.cse33@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2.2.2.2', '1.1.1.1', 'Banglalion W', 'Defaulter', -8402, 'active'),
(22, 'Sami_khan', 'Khilkhet', '1990-11-17', 'Male', '01924998489', 'sami99978@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2.2.2.2', '1.2.3.4', 'Safari 2', 'Defaulter', -1800, 'inactive'),
(24, 'Osama bin laden', 'Afgan-pakistan', '1967-11-12', 'Male', '998562', 'osama@gma.com', '827ccb0eea8a706c4c34a16891f84e7b', '98', '96', 'Safari 2', 'Defaulter', 0, 'inactive'),
(25, 'Barak Obama', 'New York City', '10-09-1970', 'Male', '9963254', 'obama@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '11.33.55.77', '2.4.6.8', 'Banglalion w', 'No', 0, 'inactive'),
(26, 'Sheikh Hasina', 'Dhanmondi 32', '10-06-1948', 'Female', '980*****', 'hasina@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '123.123.123.123', '225.225.225.225', 'Bangla oliver oil', 'No', 0, 'inactive'),
(27, 'faltu', 'goal ghor', '10-06-1948', 'Male', '980*****', 'hasina@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '123.123.123.123', '225.225.225.225', 'Banglalion W', 'No', 0, 'inactive'),
(29, 'arshad', 'baridhara', '1948-10-12', 'Male', '98254', 'gf@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '123', '123', 'Banglalion W', 'Defaulter', 0, 'inactive'),
(2003, 'aa', 'aaaaaaaaaa', '2013-12-11', 'Female', '1234', 'yes@yahoo.com', '202cb962ac59075b964b07152d234b70', '1111111', '11111111111', 'Banglalion W', 'No', 0, 'inactive'),
(2004, 'sam', 'aaaaaaaaaa', '2013-12-18', 'Male', '1234', 'yes@yahoo.com', '202cb962ac59075b964b07152d234b70', '1111111', '11111111111', 'Banglalion W', 'Defaulter', 0, 'inactive'),
(2005, 'samy', 'aaaaaaaaaa', '1924-06-04', 'Male', '1234', 'yes@yahoo.com', '202cb962ac59075b964b07152d234b70', '1111111', '11111111111', 'Banglalion W', 'Defaulter', -700, 'inactive'),
(2006, 'ulala', 'aaaa', '09-12-2013', 'Female', '999999', 'eee@yahoo.com', '202cb962ac59075b964b07152d234b70', '111', '111', 'Banglalion W', 'Yes', 700, 'active'),
(2007, 'RAIHAN', 'UTTARA', '1922-05-10', 'Male', '01916284493', 'drobortara@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '125.123.126.127', '255.254.215.233', 'Victory', 'Not yet Paid', 0, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` varchar(60) NOT NULL,
  `salary` int(60) NOT NULL,
  `privilege` varchar(40) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`username`, `password`, `name`, `gender`, `dob`, `email`, `phone`, `salary`, `privilege`) VALUES
('admin', '827ccb0eea8a706c4c34a16891f84e7b', 'Rizwan_Rumi', 'M', '05-06-1991', 'rumi@gmail.com', '01754146367', 0, 'Admin'),
('admin_ac', '827ccb0eea8a706c4c34a16891f84e7b', 'Asif_Ahmed', 'M', '07-07-1990', 'ibnaasif@gmail.com', '01927975625', 0, 'Accounts'),
('admin_it', '827ccb0eea8a706c4c34a16891f84e7b', 'Sami_Khan', 'M', '17-11-1989', 'sami99987@gmail.com', '01924998489', 0, 'It'),
('Anika', '827ccb0eea8a706c4c34a16891f84e7b', 'Adrita Rahman', 'F', '06-04-2005', 'ano@gmail.com', '0145****65', 0, 'It'),
('fatema', '827ccb0eea8a706c4c34a16891f84e7b', 'Fatema Akter', 'F', '06-10-1987', 'fa@gm.com', '023564', 0, 'It'),
('Ontora', '827ccb0eea8a706c4c34a16891f84e7b', 'Ontora Islam', 'F', '01-12-2013', 'on@gm.com', '235****', 0, 'Accounts'),
('ratna', '827ccb0eea8a706c4c34a16891f84e7b', 'Ratna Sarker', 'F', '12-12-1987', 'ratna@yahoo.com', '01910002555', 0, 'Accounts'),
('Tonmoy', '827ccb0eea8a706c4c34a16891f84e7b', 'Tonmoy Islam', 'M', '09-10-1989', 'tonmoy@gmail.com', '0167****56', 0, 'Accounts');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `id` int(40) NOT NULL,
  `issue_date` date NOT NULL,
  `month` int(40) NOT NULL,
  `year` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `issue_date`, `month`, `year`) VALUES
(7, '2013-12-16', 11, 2013),
(3, '2013-12-22', 11, 2013),
(5, '2013-12-25', 11, 2013),
(8, '2013-12-26', 11, 2013),
(15, '2013-12-26', 11, 2013),
(3, '2013-12-26', 11, 2013),
(3, '2013-12-26', 11, 2013),
(5, '2013-12-27', 11, 2013),
(29, '2013-12-27', 11, 2013),
(24, '2013-12-27', 11, 2013),
(16, '2013-12-27', 11, 2013),
(9, '2013-12-28', 11, 2013),
(9, '2013-12-28', 11, 2013),
(9, '2013-12-28', 11, 2013),
(9, '2013-12-28', 11, 2013),
(9, '2013-12-28', 11, 2013),
(10, '2013-12-28', 11, 2013),
(2005, '2013-12-29', 11, 2013),
(15, '2013-12-29', 11, 2013),
(14, '2013-12-29', 11, 2013),
(22, '2013-12-29', 11, 2013),
(14, '2013-12-29', 11, 2013),
(22, '2013-12-29', 11, 2013),
(22, '2013-12-29', 11, 2013),
(2004, '2013-12-30', 11, 2013),
(1, '2013-12-30', 11, 2013),
(1, '2013-12-30', 11, 2013),
(21, '2013-12-30', 11, 2013),
(21, '2013-12-30', 11, 2013),
(21, '2013-12-30', 11, 2013),
(21, '2013-12-30', 11, 2013),
(21, '2013-12-30', 11, 2013),
(21, '2013-12-30', 11, 2013),
(21, '2013-12-30', 11, 2013),
(1, '2013-12-30', 11, 2013),
(21, '2013-12-30', 11, 2013),
(21, '2013-12-30', 11, 2013),
(21, '2013-12-30', 11, 2013),
(21, '2013-12-30', 11, 2013),
(21, '2013-12-30', 11, 2013),
(21, '2013-12-30', 11, 2013),
(21, '2013-12-30', 11, 2013),
(1, '2013-12-30', 11, 2013),
(1, '2013-12-30', 11, 2013),
(2007, '2014-04-01', 3, 2014);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE IF NOT EXISTS `package` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `bandwidth` varchar(20) NOT NULL,
  `speed` varchar(20) NOT NULL,
  `price` int(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`no`, `name`, `bandwidth`, `speed`, `price`, `description`) VALUES
(1, 'Banglalion W', '35 GB', '512 kbps', 700, 'unlimited'),
(2, 'Banglalion', '15 GB', '512 kbps', 400, 'Money saver'),
(3, 'Safari', '20 GB', '256 kbps', 600, 'no offer'),
(4, 'Safari 2', '16 GB', '220 kbps', 600, 'no offrer'),
(7, 'Victory', '5 GB', '512 kbps', 500, 'good package!!!'),
(8, 'Ollo', '12 GB', '512 Kbps', 1500, '3 month''s facility with extra browsing');

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

CREATE TABLE IF NOT EXISTS `sell` (
  `id` int(40) NOT NULL,
  `pay_date` date NOT NULL,
  `amount` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sell`
--

INSERT INTO `sell` (`id`, `pay_date`, `amount`) VALUES
(3, '2013-09-01', 400),
(2006, '2013-12-28', 700),
(3, '2013-10-04', 400),
(9, '2013-12-29', 0),
(3, '2013-11-10', 400),
(3, '2013-12-07', 400),
(3, '2014-01-06', 400),
(3, '2014-04-01', 0),
(9, '2014-04-01', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
