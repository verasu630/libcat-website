-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2016 at 07:17 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `narc`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` int(11) NOT NULL,
  `author_name` varchar(60) NOT NULL,
  `author_dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `author_name`, `author_dob`) VALUES
(1, 'Kate Atkinson', '1951-12-20'),
(2, 'Michelle Cahill', '1938-03-26'),
(3, 'Hilary Mantel', '1952-07-06'),
(4, 'Catherine A Winn', '1952-07-03'),
(5, 'Anthony Doerr', '1973-10-27'),
(6, 'Bill Congreve', '1959-04-30'),
(7, 'M Evonne Dobson', '1965-07-27'),
(8, 'Nicholas Sparks', '1965-12-31'),
(9, 'Mary Higgins Clark', '1927-12-24'),
(10, 'Caroline Kepnes', '1976-03-15'),
(11, 'Liam Pieper', '1974-04-15'),
(12, 'Kit De Waal', '1960-07-26'),
(13, 'Sun-Tzu', '0000-00-00'),
(14, 'John le Carre', '1931-10-19'),
(15, 'Nina Stibbe', '0000-00-00'),
(16, 'Emily Maguire', '1952-07-03'),
(17, 'Hannah Kent', '0000-00-00'),
(18, 'Erin Morgenstern', '1978-07-08'),
(19, 'Anne McCaffrey', '1926-04-01'),
(20, 'Karen Mahoney', '0000-00-00'),
(21, 'Anita Heiss', '0000-00-00'),
(22, 'Robert Bloch', '1917-04-05'),
(23, 'Paula Hawkins', '1972-08-26'),
(24, 'Candia McWilliam', '1955-06-01'),
(25, 'Zoe Norton Lodge', '1961-04-26'),
(26, 'Benjamin Warner', '0000-00-00'),
(27, 'David Gemmell', '1948-08-01'),
(28, 'Melanie Raabe', '1981-08-01');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `publisher_id` int(11) NOT NULL,
  `book_title` varchar(100) NOT NULL,
  `book_pubyear` year(4) NOT NULL,
  `book_cover` varchar(100) NOT NULL,
  `book_inventory` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `author_id`, `publisher_id`, `book_title`, `book_pubyear`, `book_cover`, `book_inventory`) VALUES
(1, 6, 9, 'Epiphanies of Blood', 1998, 'img/bookcover_default.png', 5),
(2, 4, 10, 'Beyond Suspicion', 2015, 'img/suspicion.jpg', 8),
(3, 7, 10, 'Chaos Theory', 2015, 'img/bookcover_default.png', 3),
(4, 2, 8, 'Letter to Pesoa', 2016, 'img/pesoa.jpg', 4),
(5, 9, 1, 'As Time Goes By', 2016, 'img/timegoesby.jpg', 6),
(6, 10, 1, 'You', 2015, 'img/you.jpg', 4),
(7, 10, 1, 'Hidden Bodies', 2016, 'img/bodies.jpg', 2),
(8, 5, 2, 'All the Light We Cannot See', 2015, 'img/light.jpg', 6),
(9, 5, 2, 'Memory Wall', 2011, 'img/memory.jpg', 3),
(10, 3, 2, 'Bring Up The Bodies', 2013, 'img/bringupthebodies.jpg', 5),
(11, 1, 4, 'A God in Ruins', 2015, 'img/ruins.jpg', 8),
(12, 1, 4, 'Life After Life', 2013, 'img/life.jpg', 3),
(13, 8, 4, 'The Longest Ride', 2013, 'img/ride.jpg', 10),
(14, 12, 3, 'My Name is Leon', 2016, 'img/leon.jpg', 6),
(15, 14, 3, 'The Night Manager', 2014, 'img/nightmanager.jpg', 9),
(16, 13, 3, 'The Art of War', 2009, 'img/artofwar.jpg', 3),
(17, 11, 3, 'The Toymaker', 2016, 'img/toymaker.jpg', 5),
(18, 17, 7, 'Burial Rites', 2016, 'img/burial.jpg', 5),
(19, 16, 7, 'An Isolated Incident', 2016, 'img/bookcover_default.png', 1),
(20, 27, 5, 'The Legend of Death Walker', 2003, 'img/deathwalker.jpg', 6),
(21, 18, 5, 'The Night Circus', 2012, 'img/bookcover_default.png', 9),
(22, 20, 5, 'Falling to Ash', 2012, 'img/bookcover_default.png', 3),
(23, 19, 5, 'Freedom''s Landing', 2010, 'img/freedom.jpg', 8),
(24, 28, 4, 'The Trap', 2016, 'img/trap.jpg', 2),
(25, 22, 6, 'Psycho', 1959, 'img/psycho.jpg', 2),
(26, 24, 6, 'A Little Stranger', 1993, 'img/bookcover_default.png', 1),
(27, 26, 6, 'Thirst', 2016, 'img/thirst.jpg', 3),
(28, 21, 1, 'Barbed Wire and Cherry Blossoms', 1944, 'img/blossoms.jpg', 8),
(29, 25, 8, 'Almost Sincerely', 2015, 'img/sincerely.jpg', 5),
(30, 23, 5, 'The Girl on the Train', 2016, 'img/train.jpg', 6);

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `loan_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `loan_date` date NOT NULL,
  `due_date` date NOT NULL,
  `return_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `publisher_id` int(11) NOT NULL,
  `publisher_name` varchar(200) NOT NULL,
  `publisher_estyear` year(4) NOT NULL,
  `publisher_country` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`publisher_id`, `publisher_name`, `publisher_estyear`, `publisher_country`) VALUES
(1, 'Simon & Schuster', 1924, 'United States'),
(2, 'HarperCollins', 1989, 'United States'),
(3, 'Penguin Group', 1935, 'United Kingdom'),
(4, 'Hachette Book Group', 2006, 'United States'),
(5, 'Random House', 1927, 'United States'),
(6, 'Bloomsbury', 1986, 'United Kingdom'),
(7, 'Pan Macmillan', 1904, 'Australia'),
(8, 'Giramondo', 1995, 'Australia'),
(9, 'MirrorDanse', 1994, 'Australia'),
(10, 'Poisoned Pen Press', 1997, 'United States');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `student_fname` varchar(30) NOT NULL,
  `student_lname` varchar(30) NOT NULL,
  `student_img` varchar(60) NOT NULL DEFAULT 'img/photoid_default.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `user_id`, `student_fname`, `student_lname`, `student_img`) VALUES
(1, 2, 'Tahlia', 'Morris', 'img/photoid_default.png'),
(2, 3, 'Candice', 'Lui', 'img/photoid_default.png'),
(3, 4, 'Victoria', 'Ho', 'img/photoid_default.png'),
(4, 5, 'Serena', 'Goh', 'img/photoid_default.png'),
(5, 6, 'Rea', 'Kim', 'img/photoid_default.png'),
(6, 7, 'Lucy', 'Cho', 'img/photoid_default.png'),
(7, 8, 'Bobbie', 'Su', 'img/photoid_default.png'),
(8, 9, 'Christine', 'Im', 'img/photoid_default.png'),
(9, 10, 'Astrid', 'Warauw', 'img/photoid_default.png'),
(10, 11, 'Joshua', 'Hong', 'img/joshua.png'),
(11, 12, 'Hansol', 'Chwe', 'img/hansol.png'),
(12, 13, 'Judy', 'Ly', 'img/photoid_default.png'),
(13, 14, 'Rebekah', 'Kim', 'img/photoid_default.png'),
(14, 15, 'Michelle', 'Tran', 'img/photoid_default.png'),
(15, 16, 'Taehyung', 'Kim', 'img/taehyung.png'),
(16, 17, 'Hoshi', 'Kwon', 'img/hoshi.png'),
(17, 18, 'Georgia', 'Prout', 'img/photoid_default.png'),
(18, 19, 'Chan', 'Lee', 'img/chan.png'),
(19, 20, 'Harley', 'Quinn', 'img/harley.png'),
(20, 21, 'Seungcheol', 'Choi', 'img/seungcheol.png'),
(21, 22, 'Junhui', 'Wen', 'img/junhui.png'),
(22, 23, 'Minghao', 'Xu', 'img/minghao.png'),
(23, 24, 'Seungkwan', 'Boo', 'img/seungkwan.png'),
(24, 25, 'Woozi', 'Lee', 'img/woozi.png'),
(25, 26, 'Seokmin', 'Lee', 'img/seokmin.png'),
(26, 27, 'Wonwoo', 'Jeon', 'img/wonwoo.png'),
(27, 28, 'Mingyu', 'Kim', 'img/mingyu.png'),
(28, 29, 'Jeonghan', 'Yoon', 'img/jeonghan.png'),
(29, 30, 'Ellie', 'Moon', 'img/photoid_default.png'),
(30, 31, 'Alice', 'Won', 'img/photoid_default.png'),
(31, 32, 'Matthew', 'Nowicz', 'img/matthew.png'),
(32, 33, 'Dane', 'Dehaan', 'img/dane.png'),
(33, 34, 'Leo', 'Jung', 'img/leo.png'),
(34, 35, 'Ken', 'lee', 'img/ken.png'),
(35, 36, 'Baro', 'Cha', 'img/baro.png'),
(36, 37, 'Joon', 'Sung', 'img/photoid_default.png'),
(37, 38, 'Sera', 'Ryu', 'img/sera.png'),
(38, 39, 'Binnie', 'Bae', 'img/binnie.png'),
(39, 40, 'Eric', 'Nam', 'img/eric.png'),
(40, 41, 'Youjin', 'Kim', 'img/youjin.png'),
(41, 42, 'Seungjun', 'Park', 'img/seungjun.png'),
(42, 43, 'Inseong', 'Jung', 'img/inseong.png'),
(43, 44, 'Heejun', 'Oh', 'img/heejun.png'),
(44, 45, 'Rose', 'Park', 'img/rose.png'),
(45, 46, 'Lisa', 'Monaban', 'img/lisa.png'),
(46, 47, 'Jennie', 'Kim', 'img/jennie.png'),
(47, 48, 'Jisoo', 'Kim', 'img/jisoo.png'),
(48, 49, 'Eunji', 'Jung', 'img/eunji.png'),
(49, 50, 'Erin', 'Lee', 'img/erin.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_type` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_type`) VALUES
(1, 'aaa', '222', 1),
(2, 'tahlia', 'tahlia1234', 0),
(3, 'candice', 'candice1234', 0),
(4, 'victoria', 'victoria1234', 0),
(5, 'serena', 'serena1234', 0),
(6, 'rea', 'rea1234', 0),
(7, 'lucy', 'lucy1234', 0),
(8, 'bobbie', 'bobbie1234', 0),
(9, 'christine', 'christine1234', 0),
(10, 'astrid', 'astrid1234', 0),
(11, 'joshua', 'joshua1234', 0),
(12, 'hansol', 'hansol1234', 0),
(13, 'judy', 'judy1234', 0),
(14, 'rebekah', 'rebekah1234', 0),
(15, 'michelle', 'michelle1234', 0),
(16, 'taehyung', 'taehyung1234', 0),
(17, 'hoshi', 'hoshi1234', 0),
(18, 'georgia', 'georgia1234', 0),
(19, 'chan', 'chan1234', 0),
(20, 'harley', 'harley1234', 0),
(21, 'seungcheol', 'seungcheol1234', 0),
(22, 'junhui', 'junhui1234', 0),
(23, 'minghao', 'minghao1234', 0),
(24, 'seungkwan', 'seungkwan1234', 0),
(25, 'woozi', 'woozi1234', 0),
(26, 'seokmin', 'seokmin1234', 0),
(27, 'wonwoo', 'wonwoo1234', 0),
(28, 'mingyu', 'mingyu1234', 0),
(29, 'jeonghan', 'jeonghan1234', 0),
(30, 'ellie', 'ellie1234', 0),
(31, 'alice', 'alice1234', 0),
(32, 'matthew', 'matthew1234', 0),
(33, 'dane', 'dane1234', 0),
(34, 'leo', 'leo1234', 0),
(35, 'ken', 'ken1234', 0),
(36, 'baro', 'baro1234', 0),
(37, 'joon', 'joon1234', 0),
(38, 'sera', 'sera1234', 0),
(39, 'binnie', 'binnie1234', 0),
(40, 'eric', 'eric1234', 0),
(41, 'youjin', 'youjin1234', 0),
(42, 'seungjun', 'seungjun1234', 0),
(43, 'inseong', 'inseong1234', 0),
(44, 'heejun', 'heejun1234', 0),
(45, 'rose', 'rose1234', 0),
(46, 'lisa', 'lisa1234', 0),
(47, 'jennie', 'jennie1234', 0),
(48, 'jisoo', 'jisoo1234', 0),
(49, 'eunji', 'eunji1234', 0),
(50, 'erin', 'erin1234', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `author_id` (`author_id`),
  ADD KEY `publisher_id` (`publisher_id`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`loan_id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisher_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `loan_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `publisher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `author` (`author_id`),
  ADD CONSTRAINT `book_ibfk_2` FOREIGN KEY (`publisher_id`) REFERENCES `publisher` (`publisher_id`);

--
-- Constraints for table `loan`
--
ALTER TABLE `loan`
  ADD CONSTRAINT `loan_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`),
  ADD CONSTRAINT `loan_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
