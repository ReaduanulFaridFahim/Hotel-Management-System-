-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2022 at 05:18 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwp`
--

-- --------------------------------------------------------

--
-- Table structure for table `balance`
--

CREATE TABLE `balance` (
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `balance`
--

INSERT INTO `balance` (`balance`) VALUES
(105860);

-- --------------------------------------------------------

--
-- Table structure for table `booked_hist`
--

CREATE TABLE `booked_hist` (
  `phone` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `idproof` varchar(20) NOT NULL,
  `room_type` varchar(20) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `days` int(11) NOT NULL,
  `ac` varchar(5) NOT NULL,
  `breakfast` varchar(5) NOT NULL,
  `lunch` varchar(5) NOT NULL,
  `snacks` varchar(5) NOT NULL,
  `dinner` varchar(5) NOT NULL,
  `swimming` varchar(5) NOT NULL,
  `price` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booked_hist`
--

INSERT INTO `booked_hist` (`phone`, `name`, `idproof`, `room_type`, `checkin`, `checkout`, `days`, `ac`, `breakfast`, `lunch`, `snacks`, `dinner`, `swimming`, `price`, `book_id`) VALUES
(1856501926, 'Readuanul', '1', 'Single bed', '2022-08-31', '2022-09-10', 10, 'true', 'true', 'true', 'true', 'true', 'true', 24200, 10043),
(1757575755, 'Sakib Al', '5', 'Double bed', '2022-09-05', '2022-09-08', 3, 'true', 'true', 'true', 'true', 'true', 'true', 9660, 10052),
(1856501926, 'Readuanul', '1', 'Double bed', '2022-09-10', '2022-09-15', 5, 'true', 'true', 'true', 'false', 'true', 'true', 15500, 10047),
(1827272772, 'Sumaya', '3', 'Four bed', '2022-08-17', '2022-08-26', 9, 'false', 'false', 'true', 'false', 'true', 'false', 31950, 10049),
(182737370, 'Tamim', '2', 'Double bed', '2022-08-31', '2022-09-02', 2, 'false', 'true', 'true', 'true', 'true', 'false', 5240, 10044),
(1856501926, 'Readuanul', '1', 'Double bed', '2022-09-10', '2022-09-15', 5, 'true', 'true', 'true', 'false', 'true', 'true', 15500, 10047);

-- --------------------------------------------------------

--
-- Table structure for table `book_id`
--

CREATE TABLE `book_id` (
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_id`
--

INSERT INTO `book_id` (`book_id`) VALUES
(10054);

-- --------------------------------------------------------

--
-- Table structure for table `confirmed_booking`
--

CREATE TABLE `confirmed_booking` (
  `phone` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `idproof` varchar(20) NOT NULL,
  `room_type` varchar(20) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `days` int(11) NOT NULL,
  `ac` varchar(5) NOT NULL,
  `breakfast` varchar(5) NOT NULL,
  `lunch` varchar(5) NOT NULL,
  `snacks` varchar(5) NOT NULL,
  `dinner` varchar(5) NOT NULL,
  `swimming` varchar(5) NOT NULL,
  `price` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confirmed_booking`
--

INSERT INTO `confirmed_booking` (`phone`, `name`, `idproof`, `room_type`, `checkin`, `checkout`, `days`, `ac`, `breakfast`, `lunch`, `snacks`, `dinner`, `swimming`, `price`, `book_id`) VALUES
(1856501926, 'Readuanul', '1', 'Single bed', '2022-08-31', '2022-09-10', 10, 'true', 'true', 'true', 'true', 'true', 'true', 24200, 10043),
(1757575755, 'Sakib Al', '5', 'Double bed', '2022-09-05', '2022-09-08', 3, 'true', 'true', 'true', 'true', 'true', 'true', 9660, 10052),
(1827272772, 'Sumaya', '3', 'Four bed', '2022-08-17', '2022-08-26', 9, 'false', 'false', 'true', 'false', 'true', 'false', 31950, 10049),
(182737370, 'Tamim', '2', 'Double bed', '2022-08-31', '2022-09-02', 2, 'false', 'true', 'true', 'true', 'true', 'false', 5240, 10044);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Firstname` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `idproof` varchar(20) NOT NULL,
  `Phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Firstname`, `Lastname`, `Email`, `Gender`, `Date_of_Birth`, `idproof`, `Phone`) VALUES
('Readuanul', 'Fahim', 'Readuanulfaridfahim2', 'male', '1999-10-28', '1', 1856501926),
('Sargio', 'Ramos', 'ramos@gmail.com', 'male', '1982-12-25', '10', 1812621686),
('Tamim', 'Shadman', 'Tamim@gmail.com', 'male', '2000-05-24', '2', 182737370),
('Sumaya', 'Ruhi', 'ruhi@gmail.com', 'female ', '2001-08-17', '3', 1827272772),
('Tamim', 'Iqbal', 'tamimiqbal@gmail.com', 'male', '1995-02-03', '4', 1726367268),
('Sakib Al', 'Hasan', 'sakib@gmail.com', 'male', '1987-02-15', '5', 1757575755),
('Cristiano ', 'Ronaldo', 'ronaldo@gmail.com', 'male', '1985-12-17', '6', 1727626262),
('Leo', 'Messi', 'messi@gmail.com', 'male', '1985-12-23', '7', 1810101010),
('Lebron', 'James ', 'lebron@gmail.com', 'male', '1980-02-23', '8', 1861616160),
('Karim', 'Benzema ', 'karim@gmail.com', 'male', '1984-01-13', '9', 1912222292);

-- --------------------------------------------------------

--
-- Table structure for table `customerlogin`
--

CREATE TABLE `customerlogin` (
  `idproof` int(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerlogin`
--

INSERT INTO `customerlogin` (`idproof`, `Password`) VALUES
(1, '1234'),
(2, '1234'),
(3, '1234'),
(4, '1234'),
(5, '1234'),
(6, '1234'),
(7, '1234'),
(8, '1234'),
(9, '1234'),
(10, '1234');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EmployeeID` int(20) NOT NULL,
  `HotelID` int(20) NOT NULL,
  `Firstname` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `Salary` int(20) NOT NULL,
  `Role` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `Date_of_Join` date NOT NULL,
  `Phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmployeeID`, `HotelID`, `Firstname`, `Lastname`, `Salary`, `Role`, `Email`, `Gender`, `Date_of_Birth`, `Date_of_Join`, `Phone`) VALUES
(1, 20032, 'Karim', 'Rahman', 12000, 'Cook', 'karim@gmail.com', 'male', '1991-06-04', '2022-01-24', 1865656556),
(2, 20032, 'Rahman', 'Khan', 10000, 'Cleaner', 'rahman@gmail.com', 'male', '1994-02-15', '2022-07-31', 1282828822),
(3, 20032, 'Sumon', 'Khan', 10000, 'Cleaner', 'sumon@gmail.com', 'male', '1994-10-05', '2022-07-31', 1827872878),
(4, 20032, 'Kutub', 'Uddin', 12000, 'Londery', 'kutub@gmail.com', 'male', '1996-02-13', '2020-02-26', 1917171718),
(5, 20032, 'Mubark', 'Uddin', 12000, 'Londery', 'Mubarak@gmail.com', 'male', '1998-06-09', '2020-02-26', 1627272772),
(6, 20032, 'Kalam', 'Uddin', 12000, 'Gardening ', 'Kalam@gmail.com', 'male', '1988-06-07', '2015-06-09', 1828638289),
(7, 20032, 'Abdul', 'Goni', 20000, 'Roomboy', 'abdul@gmail.com', 'male', '1997-06-18', '2015-06-09', 1743343434),
(8, 20032, 'Abdul', 'Kalam', 20000, 'Roomboy', 'abdulkalam@gmail.com', 'male', '1996-07-10', '2015-06-09', 173345665),
(9, 20032, 'Sukur', 'Mia', 20000, 'Guard', 'Sukur@gmail.com', 'male', '1996-07-24', '2016-10-11', 1353556553),
(10, 20032, 'Golam', 'Rabbani', 45000, 'Manager', 'golam@gmail.com', 'male', '1998-05-11', '2020-05-12', 1863827378);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `EmployeeID` int(20) NOT NULL,
  `ManagerID` int(20) NOT NULL,
  `Firstname` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `Salary` int(20) NOT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Gender` varchar(20) NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `Date_of_Join` date NOT NULL,
  `Phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`EmployeeID`, `ManagerID`, `Firstname`, `Lastname`, `Salary`, `Email`, `Gender`, `Date_of_Birth`, `Date_of_Join`, `Phone`) VALUES
(1, 1001, 'Readuanul', 'Fahim', 50000, 'readuanulfaridfahim2', 'male', '2001-10-28', '2021-06-15', 1856501926),
(2, 1002, 'Tamim', 'Shadman', 40000, 'tamimshadman@gmail.c', 'male', '1999-09-14', '2022-08-30', 182565656),
(3, 1003, 'Sumaya', 'Akther', 50000, 'sumayaruhi@gmail.com', 'male', '2000-06-22', '2022-08-01', 1817111111),
(4, 1004, 'Tamim', 'Iqbal', 100000, 'tamimiqbal@gmail.com', 'male', '1983-06-08', '2022-08-01', 182828282),
(5, 1005, 'Sakib AL', 'Hasan', 100000, 'sakib@gmail.com', 'male', '1985-10-24', '2021-12-14', 175757575),
(6, 1006, 'Cristiano ', 'Ronaldo', 2000000, 'ronaldo@gmail.com', 'male', '1985-10-31', '2020-02-02', 181010101),
(7, 1007, 'Leo', 'Messi', 100000, 'messi@gmail.com', 'male', '1987-07-25', '2020-03-21', 180707070),
(8, 1008, 'LeBron ', 'James', 100000, 'lebon@gmail.com', 'male', '1980-06-18', '2020-11-23', 181772727),
(9, 1009, 'Karim', 'Benzema', 20000, 'karim@gmail.com', 'male', '1987-09-15', '2010-12-12', 19090909),
(10, 1010, 'Sargio', 'Ramos', 100000, 'ramos@gmail.com', 'male', '1984-12-21', '2020-12-13', 185656565);

-- --------------------------------------------------------

--
-- Table structure for table `managerlogin`
--

CREATE TABLE `managerlogin` (
  `ManagerID` int(5) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `managerlogin`
--

INSERT INTO `managerlogin` (`ManagerID`, `Password`) VALUES
(1, '1234'),
(1001, '1234'),
(1002, '1234'),
(1003, '1234'),
(1004, '1234'),
(1005, '1234'),
(1006, '1234'),
(1007, '1234'),
(1008, '1234'),
(1009, '1234'),
(1010, '1234');

-- --------------------------------------------------------

--
-- Table structure for table `rooms_count`
--

CREATE TABLE `rooms_count` (
  `room_type` varchar(20) NOT NULL,
  `available_rooms` int(11) NOT NULL,
  `occupied_rooms` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms_count`
--

INSERT INTO `rooms_count` (`room_type`, `available_rooms`, `occupied_rooms`, `price`) VALUES
('Single bed', 5, 5, 1000),
('Double bed', 5, 5, 1800),
('Four bed', 4, 1, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `temp_book_id_`
--

CREATE TABLE `temp_book_id_` (
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `temp_room`
--

CREATE TABLE `temp_room` (
  `phone` int(11) NOT NULL,
  `idproof` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `temp_session`
--

CREATE TABLE `temp_session` (
  `Firstname` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `idproof` varchar(20) NOT NULL,
  `Phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temp_session`
--

INSERT INTO `temp_session` (`Firstname`, `Lastname`, `Email`, `Gender`, `Date_of_Birth`, `idproof`, `Phone`) VALUES
('Readuanul', 'Fahim', 'Readuanulfaridfahim2', 'male', '1999-10-28', '1', 1856501926);

-- --------------------------------------------------------

--
-- Table structure for table `user_room_book`
--

CREATE TABLE `user_room_book` (
  `phone` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `idproof` varchar(20) NOT NULL,
  `room_type` varchar(20) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `days` int(11) NOT NULL,
  `ac` varchar(5) NOT NULL,
  `breakfast` varchar(5) NOT NULL,
  `lunch` varchar(5) NOT NULL,
  `snacks` varchar(5) NOT NULL,
  `dinner` varchar(5) NOT NULL,
  `swimming` varchar(5) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Waiting',
  `price` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_room_book`
--

INSERT INTO `user_room_book` (`phone`, `name`, `idproof`, `room_type`, `checkin`, `checkout`, `days`, `ac`, `breakfast`, `lunch`, `snacks`, `dinner`, `swimming`, `status`, `price`, `book_id`) VALUES
(182737370, 'Tamim', '2', 'Four bed', '2022-08-10', '2022-08-24', 14, 'false', 'true', 'true', 'true', 'true', 'false', 'Waiting', 53480, 10045),
(1856501926, 'Readuanul', '1', 'Single bed', '2022-09-02', '2022-09-06', 4, 'false', 'false', 'true', 'false', 'true', 'true', 'Waiting', 7400, 10046),
(1827272772, 'Sumaya', '3', 'Single bed', '2022-08-14', '2022-08-18', 4, 'false', 'false', 'true', 'false', 'true', 'true', 'Waiting', 7400, 10048),
(1726367268, 'Tamim', '4', 'Double bed', '2022-08-31', '2022-09-03', 3, 'false', 'true', 'true', 'true', 'true', 'false', 'Waiting', 7860, 10050),
(1757575755, 'Sakib Al', '5', 'Double bed', '2022-09-13', '2022-09-22', 9, 'false', 'false', 'true', 'true', 'false', 'false', 'Waiting', 19980, 10051),
(1810101010, 'Leo', '7', 'Single bed', '2022-08-31', '2022-09-16', 16, 'false', 'false', 'true', 'true', 'true', 'true', 'Waiting', 31520, 10053);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`idproof`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EmployeeID`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`ManagerID`);

--
-- Indexes for table `managerlogin`
--
ALTER TABLE `managerlogin`
  ADD PRIMARY KEY (`ManagerID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
