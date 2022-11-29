-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 03, 2022 at 07:21 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `Actor`
--

CREATE TABLE `Actor` (
  `Name` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Birthday` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Actor`
--

INSERT INTO `Actor` (`Name`, `Gender`, `Birthday`) VALUES
('Adriana Caselotti', 'Female', '5/6/1916'),
('Alexander Gould', 'Male', '5/4/1994'),
('Andrew Stanton', 'Male', '12/3/1965'),
('Ang Lee', 'Male', '10/23/1954'),
('Barbara Luddy', 'Female', '5/25/1908'),
('Ben Burtt', 'Male', '7/12/1948'),
('Benedict Cumberbatch', 'Male', '7/19/1976'),
('Billy Crystal', 'Male', '3/14/1948'),
('Brad Bird', 'Male', '9/24/1957'),
('Chadwick Boseman', 'Male', '11/29/1976'),
('Chris Evans', 'Male', '6/13/1981'),
('Chris Hemsworth', 'Male', '8/11/1983'),
('Christian Bale', 'Male', '1/30/1974'),
('Christopher Daniel Barnes', 'Male', '11/7/1972'),
('Dan Stevens', 'Male', '10/10/1982'),
('Dickie Jones', 'Male', '2/25/1927'),
('Donnie Dunagan', 'Male', '8/16/1934'),
('Eddie Murphy', 'Male', '4/3/1961'),
('Edward Asner', 'Male', '11/15/1929'),
('Eleanor Audley', 'Female', '11/19/1905'),
('Ellen DeGeneres', 'Female', '1/26/1958'),
('Emma Watson', 'Female', '4/15/1990'),
('Eric Bana', 'Male', '8/9/1968'),
('Eva Mendes', 'Female', '3/5/1974'),
('Glenn Close', 'Female', '3/19/1947'),
('Gwyneth Paltrow', 'Female', '9/27/1972'),
('Holly Hunter', 'Female', '3/20/1958'),
('Hugh Jackman', 'Male', '10/12/1968'),
('Idris Elba', 'Male', '9/6/1972'),
('Irene Bedard', 'Female', '7/22/1967'),
('James Earl Jones', 'Male', '1/17/1931'),
('Jamie Lee Curtis', 'Female', '11/22/1958'),
('Jeremy Irons', 'Male', '9/19/1948'),
('Jodi Benson', 'Female', '10/10/1961'),
('John Goodman', 'Male', '6/20/1952'),
('Jon Favreau', 'Male', '10/19/1966'),
('Jordan Nagai', 'Male', '2/5/2000'),
('Kelly Macdonald', 'Female', '2/23/1976'),
('Kirsten Dunst', 'Female', '4/30/1982'),
('Lily James', 'Female', '4/5/1989'),
('Lindsay Lohan', 'Female', '7/2/1986'),
('Mary Costa', 'Female', '4/5/1930'),
('Michael B. Jordan', 'Male', '2/9/1987'),
('Mindy Kaling', 'Female', '6/24/1979'),
('Ming-Na Wen', 'Female', '11/20/1963'),
('Minnie Driver', 'Female', '1/31/1970'),
('Naomi Scott', 'Female', '5/6/1993'),
('Natalie Portman', 'Female', '6/9/1981'),
('Neel Sethi', 'Male', '12/23/2003'),
('Nicolas Cage', 'Male', '1/7/1964'),
('Owen Wilson', 'Male', '11/18/1968'),
('Patton Oswalt', 'Male', '1/27/1969'),
('Paul Newman', 'Male', '1/26/1925'),
('Phyllis Smith', 'Female', '7/10/1951'),
('Rachel McAdams', 'Female', '11/17/1978'),
('Richard Madden', 'Male', '6/8/1986'),
('Robert Downey Jr.', 'Male', '4/4/1965'),
('Ryan Reynolds', 'Male', '10/23/1976'),
('Samuel E. Wright', 'Male', '11/20/1946'),
('Scarlett Johansson', 'Female', '11/22/1984'),
('Stan Lee', 'Male', '12/28/1922'),
('Tobey Maguire', 'Male', '6/27/1975'),
('Tom Hanks', 'Male', '7/9/1956'),
('Tony Goldwin', 'Male', '5/20/1960'),
('Will Smith', 'Male', '9/25/1968');

-- --------------------------------------------------------

--
-- Table structure for table `Creates`
--

CREATE TABLE `Creates` (
  `UserID` INT NOT NULL,
  `ReviewID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Creates`
--

INSERT INTO `Creates` (`UserID`, `ReviewID`) VALUES
(1, '101'),
(2, '102');

-- --------------------------------------------------------

--
-- Table structure for table `Director`
--

CREATE TABLE `Director` (
  `Name` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Birthday` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Director`
--

INSERT INTO `Director` (`Name`, `Gender`, `Birthday`) VALUES
('Andrew Stanton', 'Male', '12/3/1965'),
('Ang Lee', 'Male', '10/23/1954'),
('Ben Sharpsteen', 'Male', '11/4/1895'),
('Bill Condon', 'Male', '10/22/1955'),
('Brad Bird', 'Male', '9/24/1957'),
('Brenda Chapman', 'Female', '11/1/1962'),
('Bryan Singer', 'Male', '9/17/1965'),
('Cate Shortland', 'Female', '8/10/1968'),
('Dan Scanlon', 'Male', '6/21/1976'),
('David Hand', 'Male', '1/23/1900'),
('Eric Goldberg', 'Male', '5/1/1955'),
('Guy Ritchie', 'Male', '9/10/1968'),
('John Lasseter', 'Male', '1/12/1957'),
('John Musker', 'Male', '11/8/1953'),
('Jon Favreau', 'Male', '10/19/1966'),
('Joss Whedon', 'Male', '6/23/1964'),
('Kenneth Branagh', 'Male', '12/10/1960'),
('Kevin Lima', 'Male', '6/12/1962'),
('Mark Steven Johnson', 'Male', '10/30/1964'),
('Mark Waters', 'Male', '6/30/1964'),
('Pete Docter', 'Male', '10/9/1968'),
('Rob Minkoff', 'Male', '8/11/1962'),
('Ryan Coogler', 'Male', '5/23/1986'),
('Sam Raimi', 'Male', '10/23/1959'),
('Scott Derrickson', 'Male', '7/16/1966'),
('Stephen Herek', 'Male', '11/10/1958'),
('Tim Miller', 'Male', '10/10/1964'),
('Tony Bancroft', 'Male', '7/31/1967'),
('Wilfred Jackson', 'Male', '1/24/1906'),
('Wolfgang Reitherman', 'Male', '6/26/1909');

-- --------------------------------------------------------

--
-- Table structure for table `Films`
--

CREATE TABLE `Films` (
  `MovieName` varchar(50) NOT NULL,
  `Director` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Films`
--

INSERT INTO `Films` (`MovieName`, `Director`) VALUES
('Finding Dory', 'Andrew Stanton'),
('Finding Nemo', 'Andrew Stanton'),
('WALL-E', 'Andrew Stanton'),
('Hulk', 'Ang Lee'),
('Pinocchio', 'Ben Sharpsteen'),
('Beauty and the Beast', 'Bill Condon'),
('Ratatouille', 'Brad BIrd'),
('The Incredibles', 'Brad Bird'),
('Brave', 'Brenda Chapman'),
('X-Men', 'Bryan Singer'),
('Black Widow', 'Cate Shortland'),
('Monsters University', 'Dan Scanlon'),
('Bambi', 'David Hand'),
('Snow White and the Seven Dwarfs', 'David Hand'),
('Pocahontas', 'Eric Goldberg'),
('Aladdin', 'Guy Ritchie'),
('Cars', 'John Lasseter'),
('Toy Story', 'John Lasseter'),
('The Little Mermaid', 'John Musker'),
('Iron Man', 'Jon Favreau'),
('The Jungle Book', 'Jon Favreau'),
('Avengers', 'Joss Whedon'),
('Cinderella', 'Kenneth Branagh'),
('Thor', 'Kenneth Branagh'),
('Tarzan', 'Kevin Lima'),
('Ghost Rider', 'Mark Steven Johnson'),
('Freaky Friday', 'Mark Waters'),
('Inside Out', 'Pete Docter'),
('Monsters, Inc.', 'Pete Docter'),
('Up', 'Pete Docter'),
('The Lion King', 'Rob Minkoff'),
('Black Panther', 'Ryan Coogler'),
('Spider-Man', 'Sam Raimi'),
('Doctor Strange', 'Scott Derrickson'),
('101 Dalmatians', 'Stephen Herek'),
('Deadpool', 'Tim Miller'),
('Mulan', 'Tony Bancroft'),
('Lady and the Tramp', 'Wilfred Jackson'),
('Sleeping Beauty', 'Wolfgang Reitherman');

-- --------------------------------------------------------

--
-- Table structure for table `Has`
--

CREATE TABLE `Has` (
  `ReviewID` varchar(10) NOT NULL,
  `MovieName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Has`
--

INSERT INTO `Has` (`ReviewID`, `MovieName`) VALUES
('101', 'Cinderella'),
('102', 'Thor');

-- --------------------------------------------------------

--
-- Table structure for table `IsIn`
--

CREATE TABLE `IsIn` (
  `WatchListID` INT NOT NULL,
  `MovieName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `IsIn`
--

INSERT INTO `IsIn` (`WatchListID`, `MovieName`) VALUES
(1, 'Black Panther'),
(1, 'Cinderella'),
(1, 'Thor');

-- --------------------------------------------------------

--
-- Table structure for table `Movie`
--

CREATE TABLE `Movie` (
  `name` varchar(50) NOT NULL,
  `Release_Date` varchar(10) NOT NULL,
  `Genre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Movie`
--

INSERT INTO `Movie` (`name`, `Release_Date`, `Genre`) VALUES
('101 Dalmatians', '1/25/1961', 'Comedy'),
('Aladdin', '11/25/1992', 'Comedy'),
('Avengers', '5/1/2015', 'Action'),
('Bambi', '8/13/1943', 'Adventure'),
('Beauty and the Beast', '11/22/1991', 'Musical'),
('Black Panther', '2/16/2018', 'Action'),
('Black Widow', '6/9/2021', 'Action'),
('Brave', '6/22/2012', 'Adventure'),
('Cars', '6/9/2206', 'Adventure'),
('Cinderella', '2/15/1950', 'Fairy Tale'),
('Deadpool', '2/12/2016', 'Action'),
('Doctor Strange', '11/4/2016', 'Action'),
('Finding Dory', '6/17/2016', 'Comedy'),
('Finding Nemo', '5/30/2003', 'Adventure'),
('Freaky Friday', '8/6/2003', 'Comedy'),
('Ghost Rider', '2/16/2007', 'Action'),
('Hulk', '6/13/2008', 'Action'),
('Inside Out', '6/19/2015', 'Comedy'),
('Iron Man', '5/2/2008', 'Action'),
('Lady and the Tramp', '6/22/1955', 'Romance'),
('Monsters University', '6/21/2013', 'Comedy'),
('Monsters, Inc.', '11/2/2021', 'Comedy'),
('Mulan', '6/19/1998', 'Adventure'),
('Pinocchio', '2/7/1939', 'Drama'),
('Pocahontas', '6/23/1995', 'Adventure'),
('Ratatouille', '6/29/2007', 'Comedy'),
('Sleeping Beauty', '1/29/1959', 'Fairy Tale'),
('Snow White and the Seven Dwarfs', '12/21/1937', 'Fairy Tale'),
('Spider-Man', '5/3/2002', 'Action'),
('Tarzan', '6/18/1999', 'Romance'),
('The Incredibles', '11/5/2004', 'Adventure'),
('The Jungle Book', '10/18/1967', 'Adventure'),
('The Lion King', '6/24/1994', 'Adventure'),
('The Little Mermaid', '11/17/1989', 'Musical'),
('Thor', '5/6/2011', 'Action'),
('Toy Story', '11/22/1995', 'Adventure'),
('Up', '5/29/2009', 'Adventure'),
('WALL-E', '6/27/2008', 'Drama'),
('X-Men', '7/14/2000', 'Action');

-- --------------------------------------------------------

--
-- Table structure for table `Owns`
--

CREATE TABLE `Owns` (
  `UserID` INT NOT NULL,
  `WatchListID` INT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Owns`
--

INSERT INTO `Owns` (`UserID`, `WatchListID`) VALUES
(1, 999);

-- --------------------------------------------------------

--
-- Table structure for table `PersonalWatchList`
--

CREATE TABLE `PersonalWatchList` (
  `WatchListID` INT NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `PersonalWatchList`
--

INSERT INTO `PersonalWatchList` (`WatchListID`) VALUES
(1);

-- --------------------------------------------------------

--
-- Table structure for table `Produces`
--

CREATE TABLE `Produces` (
  `StudioName` varchar(30) NOT NULL,
  `MovieName` varchar(50) NOT NULL,
  `ReleaseDate` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Produces`
--

INSERT INTO `Produces` (`StudioName`, `MovieName`, `ReleaseDate`) VALUES
('Marvel', 'Avengers', '5/1/2015'),
('Marvel', 'Black Panther', '2/16/2018'),
('Marvel', 'Black Widow', '6/9/2021'),
('Marvel', 'Deadpool', '2/12/2016'),
('Marvel', 'Doctor Strange', '11/4/2016'),
('Marvel', 'Ghost Rider', '2/16/2007'),
('Marvel', 'Hulk', '6/13/2008'),
('Marvel', 'Iron Man', '5/2/2008'),
('Marvel', 'Spider-Man', '5/3/2002'),
('Marvel', 'Thor', '5/6/2011'),
('Marvel', 'X-Men', '7/14/2000'),
('Pixar', 'Brave', '6/22/2012'),
('Pixar', 'Cars', '6/9/2206'),
('Pixar', 'Finding Dory', '6/17/2016'),
('Pixar', 'Finding Nemo', '5/30/2003'),
('Pixar', 'Freaky Friday', '8/6/2003'),
('Pixar', 'Inside Out', '6/19/2015'),
('Pixar', 'Monsters University', '6/21/2013'),
('Pixar', 'Monsters, Inc.', '11/2/2021'),
('Pixar', 'Ratatouille', '6/29/2007'),
('Pixar', 'The Incredibles', '11/5/2004'),
('Pixar', 'Toy Story', '11/22/1995'),
('Pixar', 'Up', '5/29/2009'),
('Pixar', 'WALL-E', '6/27/2008'),
('Walt Disney Animation Studios', '101 Dalmatians', '1/25/1961'),
('Walt Disney Animation Studios', 'Aladdin', '11/25/1992'),
('Walt Disney Animation Studios', 'Bambi', '8/13/1943'),
('Walt Disney Animation Studios', 'Beauty and the Beast', '11/22/1991'),
('Walt Disney Animation Studios', 'Cinderella', '2/15/1950'),
('Walt Disney Animation Studios', 'Lady and the Tramp', '6/22/1955'),
('Walt Disney Animation Studios', 'Mulan', '6/19/1998'),
('Walt Disney Animation Studios', 'Pinocchio', '2/7/1939'),
('Walt Disney Animation Studios', 'Pocahontas', '6/23/1995'),
('Walt Disney Animation Studios', 'Sleeping Beauty', '1/29/1959'),
('Walt Disney Animation Studios', 'Snow White and the Seven Dwarfs', '12/21/1937'),
('Walt Disney Animation Studios', 'Tarzan', '6/18/1999'),
('Walt Disney Animation Studios', 'The Jungle Book', '10/18/1967'),
('Walt Disney Animation Studios', 'The Lion King', '6/24/1994'),
('Walt Disney Animation Studios', 'The Little Mermaid', '11/17/1989');

-- --------------------------------------------------------

--
-- Table structure for table `rating_changes`
--

CREATE TABLE `rating_changes` (
  `UserID` INT NOT NULL,
  `old_rating` int(11) NOT NULL,
  `new_rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Reviews`
--

CREATE TABLE `Reviews` (
  `ID` varchar(10) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Description` varchar(30) NOT NULL,
  `Created_At` varchar(30) NOT NULL,
  `UserID` INT NOT NULL,
  `year` int(11) NOT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Reviews`
--

INSERT INTO `Reviews` (`ID`, `Title`, `Description`, `Created_At`, `UserID`, `year`, `rating`) VALUES
('101', 'Test Review', 'Just testing', '10/19/2022', 1, 2022, 88),
('102', 'Test Review 2', 'Just testing 2', '10/19/2022', 2, 2022, 87);

--
-- Triggers `Reviews`
--
DELIMITER $$
CREATE TRIGGER `before_update_rating` BEFORE UPDATE ON `Reviews` FOR EACH ROW BEGIN
      IF New.rating <> OLD.rating THEN
          INSERT INTO rating_changes(UserID, old_rating, new_rating)

            VALUES(OLD.UserID, OLD.rating, NEW.rating);
        END IF;
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `StarsIn`
--

CREATE TABLE `StarsIn` (
  `MovieName` varchar(50) NOT NULL,
  `ActorName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `StarsIn`
--

INSERT INTO `StarsIn` (`MovieName`, `ActorName`) VALUES
('101 Dalmatians', 'Glenn Close'),
('Aladdin', 'Naomi Scott'),
('Aladdin', 'Will Smith'),
('Avengers', 'Chris Evans'),
('Avengers', 'Robert Downey Jr.'),
('Avengers', 'Scarlett Johansson'),
('Bambi', 'Donnie Dunagan'),
('Beauty and the Beast', 'Dan Stevens'),
('Beauty and the Beast', 'Emma Watson'),
('Black Panther', 'Chadwick Boseman'),
('Black Panther', 'Michael B. Jordan'),
('Black Widow', 'Scarlett Johansson'),
('Brave', 'Kelly Macdonald'),
('Cars', 'Owen Wilson'),
('Cars', 'Paul Newman'),
('Cinderella', 'Lily James'),
('Cinderella', 'Richard Madden'),
('Deadpool', 'Ryan Reynolds'),
('Doctor Strange', 'Benedict Cumberbatch'),
('Doctor Strange', 'Rachel McAdams'),
('Finding Dory', 'Ellen DeGeneres'),
('Finding Nemo', 'Alexander Gould'),
('Finding Nemo', 'Ellen DeGeneres'),
('Freaky Friday', 'Jamie Lee Curtis'),
('Freaky Friday', 'Lindsay Lohan'),
('Ghost Rider', 'Eva Mendes'),
('Ghost Rider', 'Nicolas Cage'),
('Hulk', 'Ang Lee'),
('Hulk', 'Eric Bana'),
('Hulk', 'Stan Lee'),
('Inside Out', 'Mindy Kaling'),
('Inside Out', 'Phyllis Smith'),
('Iron Man', 'Gwyneth Paltrow'),
('Iron Man', 'Jon Favreau'),
('Iron Man', 'Robert Downey Jr.'),
('Lady and the Tramp', 'Barbara Luddy'),
('Monsters University', 'Billy Crystal'),
('Monsters University', 'John Goodman'),
('Monsters, Inc.', 'Billy Crystal'),
('Monsters, Inc.', 'John Goodman'),
('Mulan', 'Eddie Murphy'),
('Mulan', 'Ming-Na Wen'),
('Pinocchio', 'Dickie Jones'),
('Pocahontas', 'Christian Bale'),
('Pocahontas', 'Irene Bedard'),
('Ratatouille', 'Patton Oswalt'),
('Sleeping Beauty', 'Eleanor Audley'),
('Sleeping Beauty', 'Mary Costa'),
('Snow White and the Seven Dwarfs', 'Adriana Caselotti'),
('Spider-Man', 'Kirsten Dunst'),
('Spider-Man', 'Tobey Maguire'),
('Tarzan', 'Minnie Driver'),
('Tarzan', 'Tony Goldwin'),
('The Incredibles', 'Brad Bird'),
('The Incredibles', 'Holly Hunter'),
('The Jungle Book', 'Idris Elba'),
('The Jungle Book', 'Neel Sethi'),
('The Jungle Book', 'Scarlett Johansson'),
('The Lion King', 'James Earl Jones'),
('The Lion King', 'Jeremy Irons'),
('The Little Mermaid', 'Christopher Daniel Barnes'),
('The Little Mermaid', 'Jodi Benson'),
('The Little Mermaid', 'Samuel E. Wright'),
('Thor', 'Chris Hemsworth'),
('Thor', 'Natalie Portman'),
('Toy Story', 'Tom Hanks'),
('Up', 'Edward Asner'),
('Up', 'Jordan Nagai'),
('WALL-E', 'Andrew Stanton'),
('WALL-E', 'Ben Burtt'),
('X-Men', 'Hugh Jackman');

-- --------------------------------------------------------

--
-- Table structure for table `studio`
--

CREATE TABLE `studio` (
  `StudioName` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studio`
--

INSERT INTO `studio` (`StudioName`, `Address`) VALUES
('Marvel Studios', '500 South Buena Vista Street Burbank, CA'),
('Pixar', '1200 Park Ave, Emeryville, CA'),
('Walt Disney Animation Studio', '2100 Riverside Dr, Burbank, CA');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `Birthday` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Name`, `Birthday`, `username`, `password`) VALUES
('Mitchell', '4/15/2002', 'Mitchell', 'password'),
('Preethi', '4/4/2002', 'Preethi', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Actor`
--
ALTER TABLE `Actor`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `Creates`
--
ALTER TABLE `Creates`
  ADD PRIMARY KEY (`UserID`,`ReviewID`),
  ADD KEY `ReviewID` (`ReviewID`);

--
-- Indexes for table `Director`
--
ALTER TABLE `Director`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `Films`
--
ALTER TABLE `Films`
  ADD PRIMARY KEY (`MovieName`),
  ADD KEY `Director` (`Director`);

--
-- Indexes for table `Has`
--
ALTER TABLE `Has`
  ADD PRIMARY KEY (`ReviewID`,`MovieName`),
  ADD KEY `MovieName` (`MovieName`);

--
-- Indexes for table `IsIn`
--
ALTER TABLE `IsIn`
  ADD PRIMARY KEY (`WatchListID`,`MovieName`),
  ADD KEY `MovieName` (`MovieName`);

--
-- Indexes for table `Movie`
--
ALTER TABLE `Movie`
  ADD PRIMARY KEY (`name`,`Release_Date`);

--
-- Indexes for table `Owns`
--
ALTER TABLE `Owns`
  ADD PRIMARY KEY (`UserID`,`WatchListID`),
  ADD KEY `WatchListID` (`WatchListID`);

--
-- Indexes for table `PersonalWatchList`
--
ALTER TABLE `PersonalWatchList`
  ADD PRIMARY KEY (`WatchListID`);

--
-- Indexes for table `Produces`
--
ALTER TABLE `Produces`
  ADD PRIMARY KEY (`StudioName`,`MovieName`),
  ADD KEY `MovieName` (`MovieName`);

--
-- Indexes for table `rating_changes`
--
ALTER TABLE `rating_changes`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `Reviews`
--
ALTER TABLE `Reviews`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `StarsIn`
--
ALTER TABLE `StarsIn`
  ADD PRIMARY KEY (`MovieName`,`ActorName`),
  ADD KEY `ActorName` (`ActorName`);

--
-- Indexes for table `studio`
--
ALTER TABLE `studio`
  ADD PRIMARY KEY (`StudioName`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Creates`
--
ALTER TABLE `Creates`
  ADD CONSTRAINT `Creates_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`),
  ADD CONSTRAINT `Creates_ibfk_2` FOREIGN KEY (`ReviewID`) REFERENCES `Reviews` (`ID`);

--
-- Constraints for table `Films`
--
ALTER TABLE `Films`
  ADD CONSTRAINT `Films_ibfk_1` FOREIGN KEY (`MovieName`) REFERENCES `Movie` (`name`),
  ADD CONSTRAINT `Films_ibfk_2` FOREIGN KEY (`Director`) REFERENCES `Director` (`Name`);

--
-- Constraints for table `Has`
--
ALTER TABLE `Has`
  ADD CONSTRAINT `Has_ibfk_1` FOREIGN KEY (`MovieName`) REFERENCES `Movie` (`name`),
  ADD CONSTRAINT `Has_ibfk_2` FOREIGN KEY (`ReviewID`) REFERENCES `Reviews` (`ID`);

--
-- Constraints for table `IsIn`
--
ALTER TABLE `IsIn`
  ADD CONSTRAINT `IsIn_ibfk_1` FOREIGN KEY (`WatchListID`) REFERENCES `PersonalWatchList` (`WatchListID`),
  ADD CONSTRAINT `IsIn_ibfk_2` FOREIGN KEY (`MovieName`) REFERENCES `Movie` (`name`);

--
-- Constraints for table `Owns`
--
ALTER TABLE `Owns`
  ADD CONSTRAINT `Owns_ibfk_1` FOREIGN KEY (`WatchListID`) REFERENCES `PersonalWatchList` (`WatchListID`),
  ADD CONSTRAINT `Owns_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `Produces`
--
ALTER TABLE `Produces`
  ADD CONSTRAINT `Produces_ibfk_1` FOREIGN KEY (`MovieName`) REFERENCES `Movie` (`name`);

--
-- Constraints for table `rating_changes`
--
ALTER TABLE `rating_changes`
  ADD CONSTRAINT `rating_changes_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `Reviews`
--
ALTER TABLE `Reviews`
  ADD CONSTRAINT `Reviews_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `StarsIn`
--
ALTER TABLE `StarsIn`
  ADD CONSTRAINT `StarsIn_ibfk_1` FOREIGN KEY (`MovieName`) REFERENCES `Movie` (`name`),
  ADD CONSTRAINT `StarsIn_ibfk_2` FOREIGN KEY (`ActorName`) REFERENCES `Actor` (`Name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
