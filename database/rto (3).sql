-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2023 at 02:24 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rto`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(11) NOT NULL,
  `AdminName` varchar(20) DEFAULT NULL,
  `UserName` varchar(20) DEFAULT NULL,
  `MobileNumber` bigint(10) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(2, 'SuperAdmin', 'admin', 8905172914, 'admin123@gmail.com', '5b369dd8eefbc60ac2880e9538448121', '2023-03-16 15:36:43');

-- --------------------------------------------------------

--
-- Table structure for table `tbldlicence`
--

CREATE TABLE `tbldlicence` (
  `id` int(11) NOT NULL,
  `applicationnumber` varchar(255) DEFAULT NULL,
  `licenceno` varchar(255) DEFAULT NULL,
  `fullname` varchar(40) DEFAULT NULL,
  `fathername` varchar(40) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `bloodgroup` varchar(55) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `city` varchar(40) DEFAULT NULL,
  `state` varchar(40) DEFAULT NULL,
  `licencetype` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `age` varchar(100) DEFAULT NULL,
  `pay_status` varchar(20) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `regdate` date NOT NULL DEFAULT current_timestamp(),
  `validupto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbldlicence`
--

INSERT INTO `tbldlicence` (`id`, `applicationnumber`, `licenceno`, `fullname`, `fathername`, `mobile`, `dob`, `bloodgroup`, `image`, `city`, `state`, `licencetype`, `address`, `age`, `pay_status`, `status`, `regdate`, `validupto`) VALUES
(35, 'APPGJ881679074629', 'GJ2023651679493923', 'Kevin Mistry', 'Ishawar Bhai', '9033131267', '2023-03-28', 'A+', 'photo_1280974138.jpg', 'male', 'gujrat', 'SMV(2 Wheeler)', 'grid navsari', '21', 'PAID', 'Rejected', '2023-03-22', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblllicence`
--

CREATE TABLE `tblllicence` (
  `id` int(11) NOT NULL,
  `applicationnumber` varchar(255) DEFAULT NULL,
  `fullname` varchar(40) DEFAULT NULL,
  `fathername` varchar(40) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `city` varchar(40) DEFAULT NULL,
  `state` varchar(40) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `licencetype` varchar(40) DEFAULT NULL,
  `sign` varchar(255) DEFAULT NULL,
  `pay_status` varchar(20) DEFAULT NULL,
  `fees` varchar(40) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `correctans` varchar(100) DEFAULT NULL,
  `regdate` date NOT NULL DEFAULT current_timestamp(),
  `validupto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblllicence`
--

INSERT INTO `tblllicence` (`id`, `applicationnumber`, `fullname`, `fathername`, `gender`, `mobile`, `email`, `dob`, `image`, `city`, `state`, `address`, `licencetype`, `sign`, `pay_status`, `fees`, `status`, `correctans`, `regdate`, `validupto`) VALUES
(39, 'APPGJ611679574272', 'Devendra Prajapati', 'Mafaram ', 'male', '8905172914', 'dp951069@gmail.com', '2023-03-29', 'photo_1280018259.jpg', 'male', 'gujrat', 'navsari', 'LMV (2 wheeler)', 'sign_76930493.jpg', 'PAID', '2500', 'Accepted', NULL, '2023-03-23', '2023-03-29');

-- --------------------------------------------------------

--
-- Table structure for table `tblnews`
--

CREATE TABLE `tblnews` (
  `ID` int(10) NOT NULL,
  `Title` varchar(200) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblnews`
--

INSERT INTO `tblnews` (`ID`, `Title`, `Description`, `CreationDate`) VALUES
(4, 'Good Night ', 'Tommorrow is holiday', '2023-03-17 19:04:16');

-- --------------------------------------------------------

--
-- Table structure for table `tblnewsbyoffice`
--

CREATE TABLE `tblnewsbyoffice` (
  `ID` int(10) NOT NULL,
  `OfficerID` int(5) NOT NULL,
  `Title` varchar(200) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblnewsbyoffice`
--

INSERT INTO `tblnewsbyoffice` (`ID`, `OfficerID`, `Title`, `Description`, `CreationDate`) VALUES
(8, 7, 'Come Tommorrow', '12\r\n', '2023-03-22 13:57:18');

-- --------------------------------------------------------

--
-- Table structure for table `tblofficer`
--

CREATE TABLE `tblofficer` (
  `ID` int(10) NOT NULL,
  `EmpID` varchar(50) DEFAULT NULL,
  `FirstName` varchar(200) DEFAULT NULL,
  `LastName` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Religion` varchar(40) DEFAULT NULL,
  `Gender` varchar(100) DEFAULT NULL,
  `Dob` varchar(200) DEFAULT NULL,
  `Address` mediumtext DEFAULT NULL,
  `ProfilePic` varchar(200) DEFAULT NULL,
  `Password` varchar(200) NOT NULL,
  `JoiningDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblofficer`
--

INSERT INTO `tblofficer` (`ID`, `EmpID`, `FirstName`, `LastName`, `MobileNumber`, `Email`, `Religion`, `Gender`, `Dob`, `Address`, `ProfilePic`, `Password`, `JoiningDate`) VALUES
(6, 'Emp101', 'Devendra', 'Prajapati', 8905172914, 'dp951069@gmail.com', 'Hindu', 'Male', '2023-03-15', 'Karwad Bazar Navsari 396445', '060a5c0bbba858b395595b8a37200ff81679044329.png', '5b369dd8eefbc60ac2880e9538448121', '2023-03-17 09:12:09'),
(7, 'Emp102', 'Kevin ', 'Mistry', 9828747107, 'kevin12@gmail.com', 'Muslim', 'Male', '2023-02-27', 'Kaliyavadi Navsari', '609aa543fb707d31ee51560a2e57f81f1679328926.jpg', '9d5e3ecdeb4cdb7acfd63075ae046672', '2023-03-20 16:15:26'),
(8, 'Emp103', 'Disha', 'Patel', 7300478461, 'disha222@gmail.com', 'Hindu', 'Female', '2023-02-27', 'Dambhar Navsari 396445', 'bcc5667786d6bd1b25e7c4d8a42e85501679044513.jpg', '741fd4e081208df4bb46052b08abb511', '2023-03-17 09:15:13'),
(9, '101', 'Me', 'you', 1234567890, 'meyou123@gmail.com', 'Hindu', 'Female', '2023-03-08', 'mumbai', 'd10c88f869301b1238f53cfdff8e9d7c1679245978.png', '1ea2b70c4e5965e3bc1224730969fcc8', '2023-03-19 17:12:58');

-- --------------------------------------------------------

--
-- Table structure for table `tblvehicle`
--

CREATE TABLE `tblvehicle` (
  `id` int(11) NOT NULL,
  `regid` varchar(200) DEFAULT NULL,
  `ownername` varchar(200) DEFAULT NULL,
  `fathername` varchar(200) DEFAULT NULL,
  `engineno` varchar(100) DEFAULT NULL,
  `model` varchar(100) DEFAULT NULL,
  `ownerserial` varchar(100) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `vehicletype` varchar(100) DEFAULT NULL,
  `vehicleno` varchar(50) DEFAULT NULL,
  `pay_status` varchar(100) DEFAULT NULL,
  `RegDate` date NOT NULL DEFAULT current_timestamp(),
  `validupto` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblvehicle`
--

INSERT INTO `tblvehicle` (`id`, `regid`, `ownername`, `fathername`, `engineno`, `model`, `ownerserial`, `address`, `status`, `vehicletype`, `vehicleno`, `pay_status`, `RegDate`, `validupto`) VALUES
(8, 'GJ212023491679410826', 'Devendra Prajapati', 'Mafaram ', 'EOP85658965', 'Hero Splendor', '2', 'Navsari Gujrat 396445', 'Rejected', 'LMV (2 wheeler)', 'GJ21hk0526', 'PAID', '2023-03-21', '2031-10-15');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Gender` varchar(40) DEFAULT NULL,
  `Cid` int(5) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `FullName`, `MobileNumber`, `Email`, `Gender`, `Cid`, `Password`, `RegDate`) VALUES
(28, 'Devendra Prajapati', 8905172914, 'dp951069@gmail.com', 'Male', NULL, '5b369dd8eefbc60ac2880e9538448121', '2023-03-23 13:01:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbldlicence`
--
ALTER TABLE `tbldlicence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblllicence`
--
ALTER TABLE `tblllicence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblnews`
--
ALTER TABLE `tblnews`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblnewsbyoffice`
--
ALTER TABLE `tblnewsbyoffice`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblofficer`
--
ALTER TABLE `tblofficer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblvehicle`
--
ALTER TABLE `tblvehicle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `MobileNo` (`MobileNumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbldlicence`
--
ALTER TABLE `tbldlicence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tblllicence`
--
ALTER TABLE `tblllicence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tblnews`
--
ALTER TABLE `tblnews`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblnewsbyoffice`
--
ALTER TABLE `tblnewsbyoffice`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblofficer`
--
ALTER TABLE `tblofficer`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblvehicle`
--
ALTER TABLE `tblvehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
