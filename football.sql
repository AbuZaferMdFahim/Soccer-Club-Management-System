-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2020 at 08:38 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `football`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'Akbar', 'A@gmail.com', '123456'),
(2, 'Akram', 'C@gmail.com', '123456'),
(3, 'Ali', 'B@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `fixture`
--

CREATE TABLE `fixture` (
  `Home_Team` int(11) NOT NULL,
  `Away_Team` int(11) NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fixture`
--

INSERT INTO `fixture` (`Home_Team`, `Away_Team`, `Date`) VALUES
(201, 202, '2020-09-09 14:26:13'),
(203, 202, '2020-07-10 14:26:13'),
(201, 203, '2020-10-01 00:00:00'),
(202, 201, '2020-08-12 14:00:00'),
(202, 203, '2020-10-01 15:00:00'),
(203, 201, '2020-10-10 14:30:30');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(11) NOT NULL,
  `Street_adress` varchar(255) NOT NULL,
  `Postal_Code` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `State_Province` varchar(255) NOT NULL,
  `Nationality` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `Street_adress`, `Postal_Code`, `City`, `State_Province`, `Nationality`) VALUES
(2001, 'Satkhail', '1215 Ms5', 'Dhaka', 'Mirpur', 'USA'),
(2002, 'Majda', '1245', 'Chittagong', 'Mirpur', 'Germany'),
(2003, 'Sathail', '125 Ms5', 'Dhka', 'Mrpur', 'England');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Birthdate` date NOT NULL,
  `contactNo` int(11) NOT NULL,
  `Salary` int(11) NOT NULL,
  `teamId` int(11) NOT NULL,
  `location` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id`, `Name`, `Birthdate`, `contactNo`, `Salary`, `teamId`, `location`) VALUES
(1, 'Akik', '2000-02-05', 1212, 200000, 201, 2001),
(2, 'Akram', '1988-07-03', 1234, 220000, 202, 2002),
(3, 'Ali', '2000-02-05', 1212, 180000, 203, 2003);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `date`, `user_name`) VALUES
(1, 'dqwa', 'kjgkk', '2020-05-19 02:56:14', 'Akbar'),
(9, 'dqwa aad asf', 'bhjgkjgkjbj,bj,blj,', '2020-05-28 07:01:08', 'Akbar'),
(10, 'cghcgcjvj', 'fjfjhfkhvhhhhhhhhhjjjjjjjhhhhkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkhhhhhhhhhhhhhhhhhhhhhhhh\r\n', '2020-05-28 07:01:30', 'Akbar'),
(11, 'afsfasfas', 'fsafasfasffffff', '2020-05-29 09:50:36', 'Ali');

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `Id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `f_name` varchar(200) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `contact` int(11) NOT NULL,
  `position` varchar(255) NOT NULL,
  `strong_foot` varchar(255) NOT NULL,
  `hired_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `contract` int(11) NOT NULL,
  `agent_id` varchar(255) NOT NULL,
  `Team_id` int(11) NOT NULL,
  `appearance` int(11) NOT NULL,
  `goals` int(11) NOT NULL,
  `assist` int(11) NOT NULL,
  `clean_sheet` int(11) NOT NULL,
  `yellow_card` int(11) NOT NULL,
  `red_card` int(11) NOT NULL,
  `Main_Team` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`Id`, `username`, `email`, `password`, `f_name`, `l_name`, `date_of_birth`, `contact`, `position`, `strong_foot`, `hired_date`, `contract`, `agent_id`, `Team_id`, `appearance`, `goals`, `assist`, `clean_sheet`, `yellow_card`, `red_card`, `Main_Team`) VALUES
(101, 'anim123', 'anim@gmail.com', '1234', 'Fahim', 'Anim', '2000-02-04', 12131313, 'RB', 'Right', '2020-05-19 00:45:53', 4, 'karim', 201, 5, 1, 1, 5, 0, 0, 'Yes'),
(102, 'minu123', 'min@gmail.com', '1234', 'Minhaj', 'Rifat', '2000-05-06', 455212, 'ST', 'Right', '2020-05-13 23:03:45', 5, 'Karim', 201, 5, 4, 2, 0, 1, 0, 'Yes'),
(103, 'a123', 'an@gmail.com', '1234', 'Kabir', 'Hossain', '2000-02-04', 1131313, 'LW', 'Right', '2020-05-17 04:34:47', 5, 'kawser', 201, 5, 1, 1, 0, 0, 0, 'Yes'),
(104, 'mina123', 'minar@gmail.com', '1234', 'Minar', 'Rafi', '2000-05-06', 4512, 'RW', 'Left', '2020-05-17 05:04:39', 5, 'Karim', 201, 5, 1, 1, 0, 1, 0, 'Yes'),
(105, 'rabbi123', 'rabbi@gmail.com', '1234', 'Rabbi', 'Shuvo', '2000-05-06', 41112, 'CDM', 'Left', '2020-05-28 04:59:01', 5, 'Rahim', 201, 5, 0, 1, 4, 1, 0, 'No'),
(106, 'miraj123', 'miraj@gmail.com', '1234', 'Mirajur', 'Rahman', '2000-05-06', 451112, 'CM', 'Right', '2020-05-17 05:01:31', 5, 'Rahim', 201, 5, 1, 1, 2, 1, 0, 'Yes'),
(107, 'bari123', 'bari@gmail.com', '1234', 'Latiful', 'Bari', '1990-05-06', 4512362, 'CAM', 'Left', '2020-05-13 23:05:29', 5, 'Karim', 201, 5, 3, 4, 0, 1, 0, 'Yes'),
(108, 'turjo123', 'turjo@gmail.com', '1234', 'Akramul', 'Turjo', '1998-05-06', 512, 'CB', 'Right', '2020-05-17 04:56:27', 5, 'Kawser', 201, 4, 0, 0, 3, 1, 1, 'Yes'),
(109, 'mehedi123', 'mehedi@gmail.com', '1234', 'Mehedi', 'Punk', '1996-05-06', 1912, 'CB', 'Left', '2020-05-13 23:05:36', 4, 'Rahim', 201, 5, 0, 1, 4, 2, 0, 'Yes'),
(110, 'maruf123', 'maruf@gmail.com', '1234', 'Maksudur', 'maruf', '2000-05-06', 4512, 'LB', 'Right', '2020-05-13 23:05:40', 5, 'Karim', 201, 5, 1, 1, 4, 1, 0, 'Yes'),
(111, 'adil123', 'adil@gmail.com', '1234', 'Adil', 'Arman', '2000-05-06', 23412, 'GK', 'Left', '2020-05-13 23:05:43', 5, 'Karim', 201, 5, 0, 0, 4, 1, 0, 'Yes'),
(112, 'nafi123', 'nafi@gmail.com', '1234', 'Afnan', 'Nafi', '2000-05-06', 451223, 'ST', 'Left', '2020-05-13 23:05:47', 5, 'Karim', 201, 1, 0, 1, 0, 0, 0, 'Yes'),
(113, 'adib456', 'adib@gmail.com', '1234', 'Adib', 'Nihal', '2000-04-07', 1222, 'ST', 'Right', '2020-05-16 05:42:11', 5, 'Kawser', 202, 5, 4, 3, 0, 0, 0, 'Yes'),
(114, 'emon123', 'emon@gmail.com', '1234', 'Istiaque', 'Emon', '2000-05-06', 455212, 'CAM', 'Right', '2020-05-16 05:42:23', 5, 'Karim', 202, 5, 3, 3, 0, 0, 0, 'Yes'),
(115, 'dark456', 'dark@gmail.com', '1234', 'dhruv', 'dark', '2000-04-07', 124422, 'LW', 'Right', '2020-05-16 05:42:30', 5, 'Kawser', 202, 5, 1, 3, 0, 0, 0, 'Yes'),
(116, 'tushar123', 'mustaba@gmail.com', '1234', 'Mustaba', 'Tusher', '2000-05-06', 15212, 'RW', 'Right', '2020-05-16 05:42:56', 5, 'Karim', 202, 5, 4, 3, 0, 1, 0, 'Yes'),
(117, 'hasan123', 'hasan@gmail.com', '1234', 'Hasan', 'Hasan', '2000-05-06', 155212, 'CM', 'Right', '2020-05-16 05:43:13', 5, 'Karim', 202, 5, 0, 1, 2, 0, 0, 'Yes'),
(118, 'moin133', 'moin@gmail.com', '1234', 'Moin', 'Hoque', '2000-05-06', 45521222, 'CDM', 'Right', '2020-05-16 05:43:18', 5, 'Karim', 202, 5, 1, 5, 3, 0, 0, 'Yes'),
(119, 'shihab123', 'shihab@gmail.com', '1234', 'Mamun', 'Shihab', '2000-05-06', 455212, 'CB', 'Right', '2020-05-16 05:43:23', 5, 'Karim', 202, 5, 0, 2, 4, 0, 0, 'Yes'),
(120, 'jahid123', 'jahib@gmail.com', '1234', 'Jahid', 'Hasan', '2000-05-06', 40055212, 'CB', 'Right', '2020-05-16 05:43:28', 5, 'Karim', 202, 5, 0, 0, 2, 0, 0, 'Yes'),
(121, 'hamim123', 'hamim@gmail.com', '1234', 'Hamim', 'Sakib', '2000-05-06', 455212, 'LB', 'Left', '2020-05-16 05:43:34', 5, 'Karim', 202, 3, 0, 0, 1, 0, 2, 'Yes'),
(122, 'shabab133', 'Shabab@gmail.com', '1234', 'Shabab', 'Mintasir', '2000-05-06', 455212, 'RB', 'Right', '2020-05-16 05:43:40', 5, 'Karim', 202, 5, 0, 0, 3, 4, 0, 'Yes'),
(123, 'jabid123', 'jabid@gmail.com', '1234', 'jabid', 'Hasan', '2000-05-06', 455212, 'GK', 'Right', '2020-05-16 05:43:49', 5, 'Karim', 202, 5, 0, 1, 3, 1, 0, 'yes'),
(124, 'abib123', 'abib@gmail.com', '1234', 'abib', 'abib', '2000-05-06', 4552122, 'CAM', 'Right', '2020-05-16 05:44:07', 5, 'Karim', 202, 2, 1, 0, 0, 0, 0, 'No'),
(125, 'faisal123', 'faisal@gmail.com', '123', 'Faisal ', 'Reza', '1997-11-25', 192929, 'GK', 'Right', '2020-05-19 03:58:04', 5, 'Rahim', 201, 2, 0, 0, 1, 0, 0, 'No'),
(126, 'Al', 'al@gmail.com', '123', 'Al', 'Kabir', '2000-05-06', 212, 'CB', 'Right', '2020-05-17 05:19:10', 5, 'Refat', 202, 2, 0, 0, 1, 1, 0, 'No'),
(127, 'ne', 'Neuer@gmail.com', '123', 'Manuel', 'Neuer', '1997-11-25', 192929, 'GK', 'Right', '2020-05-17 05:43:11', 5, 'Kloop', 203, 5, 0, 0, 4, 0, 0, 'Yes'),
(128, 'vvd', 'vvd@gmail.com', '123', 'Virgil', 'Van', '2000-05-06', 212, 'CB', 'Right', '2020-05-17 05:43:11', 5, 'Refat', 203, 5, 0, 0, 4, 1, 0, 'Yes'),
(129, 'hum', 'hum@gmail.com', '123', 'Mat', 'Hummels', '2000-05-06', 212, 'CB', 'Right', '2020-05-17 05:43:11', 5, 'Refat', 203, 5, 0, 0, 4, 1, 0, 'Yes'),
(130, 'mun', 'mun@gmail.com', '123', 'Thomas', 'Munier', '2000-05-06', 212, 'RB', 'Right', '2020-05-17 05:43:11', 5, 'Mourinho', 203, 5, 2, 0, 4, 1, 0, 'Yes'),
(131, 'rob', 'rob@gmail.com', '123', 'Andrew', 'Robertson', '2000-05-06', 212, 'LB', 'Left', '2020-05-17 05:43:11', 5, 'Refat', 203, 5, 0, 3, 3, 0, 0, 'Yes'),
(132, 'cas', 'cas@gmail.com', '123', 'Carlos', 'Casemeiro', '2000-05-06', 212, 'CM', 'Right', '2020-05-17 05:43:11', 5, 'Refat', 203, 5, 0, 0, 4, 1, 0, 'Yes'),
(133, 'fab', 'fab@gmail.com', '123', 'Fabinho', 'Hen', '2000-05-06', 212, 'CDM', 'Right', '2020-05-17 05:43:11', 5, 'Zidane', 203, 5, 0, 0, 4, 1, 0, 'Yes'),
(134, 'kdb', 'kdb@gmail.com', '123', 'Kevin De', 'Bruyne', '2000-05-06', 212, 'CAM', 'Right', '2020-05-17 05:43:11', 5, 'Refat', 203, 5, 1, 6, 4, 1, 0, 'Yes'),
(135, 'ney', 'ney@gmail.com', '123', 'Neymer', 'Jr', '2000-05-06', 212, 'LW', 'Right', '2020-05-17 05:43:11', 5, 'DAD', 203, 5, 3, 3, 0, 1, 0, 'Yes'),
(136, 'lio', 'lio@gmail.com', '123', 'Lionel', 'Messi', '2000-05-06', 212, 'RW', 'Left', '2020-05-17 05:43:11', 5, 'Refat', 203, 5, 2, 7, 0, 0, 0, 'Yes'),
(137, 'cr7', 'cr7@gmail.com', '123', 'Cristiano', 'Ronaldo', '2000-05-06', 212, 'ST', 'Right', '2020-05-17 05:43:11', 5, 'Refat', 203, 5, 7, 1, 0, 0, 0, 'Yes'),
(138, 'ob', 'ob@gmail.com', '123', 'Jan', 'Oblak', '2000-05-06', 212, 'GK', 'Right', '2020-05-17 05:44:37', 5, 'Refat', 203, 4, 0, 0, 4, 1, 0, 'No'),
(139, 'mb', 'mb@gmail.com', '123', 'kylian', 'Mbappe', '2000-05-06', 212, 'RW', 'Right', '2020-05-17 05:43:11', 5, 'Refat', 203, 5, 4, 3, 0, 1, 0, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `contact` int(11) NOT NULL,
  `position` varchar(255) NOT NULL,
  `strong_foot` varchar(255) NOT NULL,
  `hired_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `contract` int(11) NOT NULL,
  `agent_id` varchar(255) NOT NULL,
  `team_id` int(11) NOT NULL,
  `appearance` int(11) NOT NULL,
  `goals` int(11) NOT NULL,
  `assist` int(11) NOT NULL,
  `clean_sheet` int(11) NOT NULL,
  `yellow_card` int(11) NOT NULL,
  `red_card` int(11) NOT NULL,
  `Main_team` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `username`, `email`, `password`, `f_name`, `l_name`, `date_of_birth`, `contact`, `position`, `strong_foot`, `hired_date`, `contract`, `agent_id`, `team_id`, `appearance`, `goals`, `assist`, `clean_sheet`, `yellow_card`, `red_card`, `Main_team`) VALUES
(1023, '1821677', 'A@gmail.com', '1234', 'Kuddus', 'Rahim', '1997-11-25', 1553344, 'lw', 'right', '0000-00-00 00:00:00', 0, '	Refat', 0, 0, 0, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `Team_Id` int(11) NOT NULL,
  `Team_Name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `stadium` varchar(255) NOT NULL,
  `Team_Value` varchar(255) NOT NULL,
  `manager_username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`Team_Id`, `Team_Name`, `title`, `stadium`, `Team_Value`, `manager_username`) VALUES
(201, 'Praetorian United', 'GGMU', 'Old Trafford', '12B', 'Akbar'),
(202, 'Dx Calivers', 'HALA MADRID', 'Bernabue', '20B', 'Akram'),
(203, 'Fc Fantom', 'WALK', 'Nu Camp', '19B', 'Ali');

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Player_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`id`, `username`, `email`, `password`, `Player_id`) VALUES
(18, '1821677', 'animvai@gmail.com', '123456', 102),
(27, 'anim123', 'anim@gmail.com', '111', 101),
(28, 'Akbar', 'mightyanim007@gmail.com', '111', 102),
(29, '12', 'shihabmamunabdulquium570@gmail.com', '12', 102),
(34, '123', 'B@gmail.com', '1234', 137),
(35, 'ami', 'ami@gmmail.com', '1234', 136),
(36, 'min', 'minar@gmail.com', '1234', 102),
(37, 'man', 'man@gmail.com', '1234', 102);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`Team_Id`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2004;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1024;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1024;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `Team_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
