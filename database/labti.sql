-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2017 at 03:37 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labti`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(4) NOT NULL,
  `comment_name` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_body` text NOT NULL,
  `comment_date` date NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `comment_name`, `comment_email`, `comment_body`, `comment_date`, `ID`) VALUES
(7, 'DSAAD', 'ASDASDAS', 'WOWO KEREN\r\n', '2017-01-20', 32);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `ID` int(11) NOT NULL,
  `title` text NOT NULL,
  `author` varchar(75) NOT NULL,
  `date` date NOT NULL,
  `content` text NOT NULL,
  `featured_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`ID`, `title`, `author`, `date`, `content`, `featured_image`) VALUES
(32, 'TEST 1 COBA COBA', 'TEST', '2017-01-20', 'Percobaan UPLOAD', 'http://localhost/labti/uploads/Samehadaku_Hitori_no_Shita_480p_Ep10_animesave_mkv_snapshot_14_33_2016_11_18_19_16_201.jpg'),
(33, 'Fitur- Fitur Mobile Legend : Bang Bang', 'FIKIR', '2017-01-20', 'Beberapa fitur Mobile Legends adalah :\r\n1. Pertempuran 5v5 melawan REAL PLAYER.\r\n2. Banyak pilihan hero seperti Figter, Assasin, Mage, Support dan Marksman.\r\n3. Kontrol sederhana hanya menggunakan dua jari.\r\n4. Bantuan Offline AI jika player AFK atau Disconnect.\r\n5. Auto Reconnect jika terputus saat bermain.', 'http://localhost/labti/uploads/mobile-legends-mobandroid.jpg'),
(34, 'Mobile Legend : Bang Bang', 'FIKIR', '2017-01-20', 'Aplikasi Mobile Legends: Bang bang adalah aplikasi permainan game moba yang bisa pengguna mainkan di Handphone layaknya seperti pemainan legend yaitu Dota. Jadi pengguna akan merasakan permainan layaknya bermain dota dan bermain secara online dengan pemain lain yang menggunakan permainan ini untuk bersenang – senang dan melakukan double kill triple kill dan rampage.', 'http://localhost/labti/uploads/Mobile_Legends_5v5_MOBA.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active_since` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `username`, `password`, `active_since`) VALUES
(2, 'admin', '$2a$12$Gsu.d/pNW2ReELGDkKu9BOE5zeYSOQM1VF0lxbpnzaZxQlsTloBTu', '2016-10-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
