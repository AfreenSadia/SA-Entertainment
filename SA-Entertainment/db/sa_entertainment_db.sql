-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2022 at 06:41 AM
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
-- Database: `sa_entertainment_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `Title` varchar(100) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `Genre` varchar(100) NOT NULL,
  `UploadedBy` varchar(100) NOT NULL,
  `UploadedAt` varchar(40) NOT NULL,
  `File` varchar(160) NOT NULL,
  `IsOpenForGenSub` varchar(1) NOT NULL,
  `IsActive` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`Title`, `Author`, `Genre`, `UploadedBy`, `UploadedAt`, `File`, `IsOpenForGenSub`, `IsActive`) VALUES
('test book', 'test author', 'test genre', 'tripty@gmail.com', '12-Dec-2022 06:52pm', '../../assets/content_creator/uploads/books/tripty@gmail.com_test book', 'y', 'y'),
('test book 2', 'test author', 'test genre', 'tripty@gmail.com', '12-Dec-2022 07:00pm', '../../assets/content_creator/uploads/books/tripty@gmail.com_test book 2', 'y', 'y'),
('test book 3', 'test author', 'test genre', 'tripty@gmail.com', '12-Dec-2022 07:10pm', '../../assets/content_creator/uploads/books/tripty@gmail.com_test book 3', 'y', 'y'),
('test book 4', 'test author', 'test genre', 'tripty@gmail.com', '12-Dec-2022 07:47pm', '../../assets/content_creator/uploads/books/tripty@gmail.com_test book 4', 'y', 'y'),
('test book 5', 'test author', 'test genre', 'tripty@gmail.com', '12-Dec-2022', '../../assets/content_creator/uploads/books/tripty@gmail.com_test book 5', 'y', 'y'),
('test', 'test', 'test', 'tripty@gmail.com', '12-Dec-2022', '../../assets/content_creator/uploads/books/tripty@gmail.com_test', 'y', 'y'),
('test7', 'test', 'test', 'tripty@gmail.com', '12-Dec-2022', '../../assets/content_creator/uploads/books/tripty@gmail.com_test7', 'y', 'y'),
('jjj', 'kkk', 'kkk', 'tripty@gmail.com', '13-Dec-2022', '../../assets/content_creator/uploads/books/tripty@gmail.com_jjj', 'y', 'y'),
('something', 'sAuthor', 'horror', 'tripty@gmail.com', '13-Dec-2022', '../../assets/content_creator/uploads/books/tripty@gmail.com_something', 'y', 'y'),
('book', 'bookAuthor', 'horror', 'tripty@gmail.com', '13-Dec-2022', '../../assets/content_creator/uploads/books/tripty@gmail.com_book', 'n', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `book_history`
--

CREATE TABLE `book_history` (
  `ID` int(4) NOT NULL,
  `UserId` int(4) NOT NULL,
  `BookId` int(4) NOT NULL,
  `LastViewed` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `book_list`
--

CREATE TABLE `book_list` (
  `BookTitle` varchar(100) NOT NULL,
  `UserEmail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_list`
--

INSERT INTO `book_list` (`BookTitle`, `UserEmail`) VALUES
('', ''),
('test book', 'nayeema.mim03@gmail.com'),
('test book 3', 'nayeema.mim03@gmail.com'),
('test book 5', 'nayeema.mim03@gmail.com'),
('jjj', 'nayeema.mim03@gmail.com'),
('test book 4', 'nayeema.mim03@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `current_mood`
--

CREATE TABLE `current_mood` (
  `ID` int(5) NOT NULL,
  `userID` int(4) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `Title` varchar(100) NOT NULL,
  `File` varchar(160) NOT NULL,
  `Genre` varchar(100) NOT NULL,
  `UploadedBy` varchar(100) NOT NULL,
  `UploadedAt` varchar(100) NOT NULL,
  `IsOpenForGenSub` varchar(1) NOT NULL,
  `IsActive` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`Title`, `File`, `Genre`, `UploadedBy`, `UploadedAt`, `IsOpenForGenSub`, `IsActive`) VALUES
('test', '../../assets/content_creator/uploads/games/aneen@gmail.com_test', 'test', 'aneen@gmail.com', '13-Dec-2022', 'y', 'y'),
('test', '../../assets/content_creator/uploads/games/aneen@gmail.com_test', 'test', 'aneen@gmail.com', '13-Dec-2022', 'y', 'y'),
('game 1', '../../assets/content_creator/uploads/games/tripty@gmail.com_game 1', 'tripty', 'tripty@gmail.com', '13-Dec-2022', 'y', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `game_history`
--

CREATE TABLE `game_history` (
  `ID` int(4) NOT NULL,
  `UserId` int(4) NOT NULL,
  `GameId` int(4) NOT NULL,
  `LastViewed` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `game_list`
--

CREATE TABLE `game_list` (
  `GameTitle` varchar(100) NOT NULL,
  `UserEmail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game_list`
--

INSERT INTO `game_list` (`GameTitle`, `UserEmail`) VALUES
('test', 'nayeema.mim03@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `Title` varchar(100) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `Genre` varchar(100) NOT NULL,
  `UploadedBy` varchar(100) NOT NULL,
  `UploadedAt` varchar(100) NOT NULL,
  `File` varchar(160) NOT NULL,
  `IsOpenForGenSub` varchar(1) NOT NULL,
  `IsActive` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`Title`, `Author`, `Genre`, `UploadedBy`, `UploadedAt`, `File`, `IsOpenForGenSub`, `IsActive`) VALUES
('', '', '', '', '', '', '', 'y'),
('testmovie', 'testauthor', 'testgenre', 'aneen@gmail.com', '13-Dec-2022', '', 'n', 'y'),
('movie 1', 'test author', 'test genre', 'tripty@gmail.com', '13-Dec-2022', '../../assets/content_creator/uploads/movies/tripty@gmail.com_movie 1', 'y', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `movie_history`
--

CREATE TABLE `movie_history` (
  `ID` int(4) NOT NULL,
  `UserId` int(4) NOT NULL,
  `MovieId` int(4) NOT NULL,
  `LastViewed` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `movie_list`
--

CREATE TABLE `movie_list` (
  `MovieTitle` varchar(100) NOT NULL,
  `UserEmail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie_list`
--

INSERT INTO `movie_list` (`MovieTitle`, `UserEmail`) VALUES
('movie 1', 'nayeema.mim03@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `Title` varchar(100) NOT NULL,
  `Artist` varchar(100) NOT NULL,
  `Genre` varchar(100) NOT NULL,
  `UploadedBy` varchar(100) NOT NULL,
  `UploadedAt` varchar(100) NOT NULL,
  `File` varchar(160) NOT NULL,
  `IsOpenForGenSub` varchar(1) NOT NULL,
  `IsActive` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`Title`, `Artist`, `Genre`, `UploadedBy`, `UploadedAt`, `File`, `IsOpenForGenSub`, `IsActive`) VALUES
('test', 'test', 'test', 'aneen@gmail.com', '13-Dec-2022', '../../assets/content_creator/uploads/musics/aneen@gmail.com_test', 'y', 'y'),
('test', 'test', 'test', 'aneen@gmail.com', '13-Dec-2022', '../../assets/content_creator/uploads/musics/aneen@gmail.com_test', 'y', 'y'),
('jjj', 'jjj', 'jjj', 'aneen@gmail.com', '13-Dec-2022', '../../assets/content_creator/uploads/musics/aneen@gmail.com_jjj', 'y', 'y'),
('music 1', 'tripty', 'rock', 'tripty@gmail.com', '13-Dec-2022', '../../assets/content_creator/uploads/musics/tripty@gmail.com_music 1', 'y', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `music_history`
--

CREATE TABLE `music_history` (
  `ID` int(4) NOT NULL,
  `UserId` int(4) NOT NULL,
  `MusicId` int(4) NOT NULL,
  `LastViewed` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `music_list`
--

CREATE TABLE `music_list` (
  `MusicTitle` varchar(100) NOT NULL,
  `UserEmail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `music_list`
--

INSERT INTO `music_list` (`MusicTitle`, `UserEmail`) VALUES
('test', 'nayeema.mim03@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `ID` int(4) NOT NULL,
  `UserId` int(4) NOT NULL,
  `IsPaid` bit(1) NOT NULL,
  `PaymentDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `promoted_book`
--

CREATE TABLE `promoted_book` (
  `ID` int(4) NOT NULL,
  `BookId` int(4) NOT NULL,
  `StartDate` datetime NOT NULL,
  `EndDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `promoted_game`
--

CREATE TABLE `promoted_game` (
  `ID` int(4) NOT NULL,
  `GameId` int(4) NOT NULL,
  `StartDate` datetime NOT NULL,
  `EndDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `promoted_movie`
--

CREATE TABLE `promoted_movie` (
  `ID` int(4) NOT NULL,
  `MovieId` int(4) NOT NULL,
  `StartDate` datetime NOT NULL,
  `EndDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `promoted_music`
--

CREATE TABLE `promoted_music` (
  `ID` int(4) NOT NULL,
  `MusicId` int(4) NOT NULL,
  `StartDate` datetime NOT NULL,
  `EndDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `promoted_series`
--

CREATE TABLE `promoted_series` (
  `ID` int(4) NOT NULL,
  `SeriesId` int(4) NOT NULL,
  `StartDate` datetime NOT NULL,
  `EndDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `series`
--

CREATE TABLE `series` (
  `Title` varchar(100) NOT NULL,
  `Genre` varchar(100) NOT NULL,
  `File` varchar(160) NOT NULL,
  `UploadedBy` varchar(100) NOT NULL,
  `UploadedAt` varchar(100) NOT NULL,
  `IsOpenForGenSub` varchar(1) NOT NULL,
  `IsActive` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `series`
--

INSERT INTO `series` (`Title`, `Genre`, `File`, `UploadedBy`, `UploadedAt`, `IsOpenForGenSub`, `IsActive`) VALUES
('test', 'test', '../../assets/content_creator/uploads/tvseries/aneen@gmail.com_test', 'aneen@gmail.com', '13-Dec-2022', 'y', 'y'),
('series', 'series', '../../assets/content_creator/uploads/tvseries/tripty@gmail.com_series', 'tripty@gmail.com', '14-Dec-2022', 'y', 'p');

-- --------------------------------------------------------

--
-- Table structure for table `series_history`
--

CREATE TABLE `series_history` (
  `ID` int(4) NOT NULL,
  `UserId` int(4) NOT NULL,
  `SeriesId` int(4) NOT NULL,
  `LastViewed` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `series_list`
--

CREATE TABLE `series_list` (
  `SeriesTitle` varchar(100) NOT NULL,
  `UserEmail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `series_list`
--

INSERT INTO `series_list` (`SeriesTitle`, `UserEmail`) VALUES
('test', 'nayeema.mim03@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `share_snap`
--

CREATE TABLE `share_snap` (
  `ID` int(4) NOT NULL,
  `userID` int(4) NOT NULL,
  `file` varchar(80) NOT NULL,
  `uploadedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Email` varchar(80) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Biography` text DEFAULT NULL,
  `DOB` varchar(20) NOT NULL,
  `Picture` varchar(80) DEFAULT NULL,
  `Type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Email`, `Name`, `Password`, `Gender`, `Biography`, `DOB`, `Picture`, `Type`) VALUES
('aneen@gmail.com', 'aneen', '1591', 'Female', '', '2000-11-29', '', 'content_creator'),
('cat@gmail.com', 'cat', '151515', 'Male', '                                                                                                                                                                                                                                                                                                                                                                                                                                                     I am cat                                                                                                                                                                                                                                                                                                                                                                                                                                                      ', '1999-11-27', '../../assets/general_subscriber/uploads/profile_pictures/cat@gmail.com', 'general_subscriber'),
('jesmin@gmail.com', 'jesmin', '1234567', 'Female', '', '2000-11-27', '', 'general_subscriber'),
('man@gmail.com', 'man', '121212', 'Male', '', '2022-11-28', '', 'general_subscriber'),
('nayeema.mim03@gmail.com', 'Nayeema Hoque Mim', '1234', 'Female', 'Stubborn', '2000-12-05', '../../assets/general_subscriber/uploads/profile_pictures/nayeema.mim03@gmail.com', 'general_subscriber'),
('ony@gmail.com', 'ony', '12356', 'Female', '', '2000-11-27', '', 'general_subscriber'),
('rafi@gmail.com', 'rafi', '123123', 'Male', '', '2000-11-27', '', 'general_subscriber'),
('rezaul@gmail.com', 'Md Rezaul', '123123', 'Male', '     Traveler                                                               ', '1988-11-27', '../../assets/content_creator/uploads/profile_pictures/rezaul@gmail.com', 'content_creator'),
('sadia@gmail.com', 'Sadia Afrin', '12345', 'Female', '                                                                        Chairperson\r\nIEEE AIUB SB                                                                                                                      ', '2000-02-02', '../../assets/general_subscriber/uploads/profile_pictures/sadia@gmail.com', 'general_subscriber'),
('tiham@gmail.com', 'Tiham', '1234567', 'Male', '', '2000-12-06', '', 'general_subscriber'),
('tripty@gmail.com', 'mim', '123321', 'Female', '                                                         jjjj                                                             ', '2000-12-12', '../../assets/content_creator/uploads/profile_pictures/tripty@gmail.com', 'content_creator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_history`
--
ALTER TABLE `book_history`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `current_mood`
--
ALTER TABLE `current_mood`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `game_history`
--
ALTER TABLE `game_history`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `movie_history`
--
ALTER TABLE `movie_history`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `music_history`
--
ALTER TABLE `music_history`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `promoted_book`
--
ALTER TABLE `promoted_book`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `promoted_game`
--
ALTER TABLE `promoted_game`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `promoted_movie`
--
ALTER TABLE `promoted_movie`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `promoted_music`
--
ALTER TABLE `promoted_music`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `promoted_series`
--
ALTER TABLE `promoted_series`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `series_history`
--
ALTER TABLE `series_history`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
