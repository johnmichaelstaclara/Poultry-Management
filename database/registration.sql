-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
-- Generation Time: Feb 27, 2019 at 08:38 PM
=======
-- Generation Time: Feb 20, 2019 at 09:01 PM
>>>>>>> 54b6e31ecfc08e456d844fb9336a15ac40e603db
=======
-- Generation Time: Mar 27, 2019 at 03:19 AM
>>>>>>> New files
=======
-- Generation Time: Mar 29, 2019 at 11:14 PM
>>>>>>> adding new files
=======
-- Generation Time: Apr 02, 2019 at 02:11 AM
>>>>>>> update file
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `cust`
--

CREATE TABLE `cust` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `middle_name` varchar(20) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

<<<<<<< HEAD
<<<<<<< HEAD
--
-- Dumping data for table `cust`
--

INSERT INTO `cust` (`id`, `userid`, `last_name`, `first_name`, `middle_name`, `contact_no`, `address`) VALUES
<<<<<<< HEAD
(1, 7, 'sta.clara', 'fdsgsf', 'asfgbnsdifgobkvd', 'fsdgf', 'fsdgf');
=======
(6, 14, 'banez', 'earl', 'john', '21312312', 'asddasdas'),
(7, 14, 'abante', 'cassy', 'mauren', '21312', 'casdfasf');
>>>>>>> New files

=======
>>>>>>> adding new files
=======
>>>>>>> update file
-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `breed` varchar(250) NOT NULL,
  `rooster` int(20) NOT NULL,
  `hen` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `userid`, `breed`, `rooster`, `hen`) VALUES
<<<<<<< HEAD
<<<<<<< HEAD
(16, 14, 'brioler', 1234, 1232),
(17, 14, 'texas', 12, 12213);
=======
(19, 17, '2', 4, 2);
>>>>>>> adding new files
=======
(19, 17, '2', 4, 2);
>>>>>>> update file

-- --------------------------------------------------------

--
-- Table structure for table `data1`
--

CREATE TABLE `data1` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `sales_id` int(11) NOT NULL,
<<<<<<< HEAD
  `item_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
<<<<<<< HEAD
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data1`
--

INSERT INTO `data1` (`id`, `userid`, `sales_id`, `item_id`, `date`, `price`) VALUES
(8, 14, 9, 6, '2019-03-27 02:06:36', 13);

=======
  `price` decimal(7,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

>>>>>>> adding new files
=======
  `item_name` varchar(250) NOT NULL,
  `unit` varchar(250) NOT NULL,
  `quality` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

>>>>>>> update file
-- --------------------------------------------------------

--
-- Table structure for table `egg`
--

CREATE TABLE `egg` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `flocks_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `small_egg` int(20) NOT NULL,
  `medium_egg` int(20) NOT NULL,
  `large_egg` int(20) NOT NULL,
  `spoiled_egg` int(20) NOT NULL,
  `broken_egg` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

<<<<<<< HEAD
<<<<<<< HEAD
--
-- Dumping data for table `egg`
--

INSERT INTO `egg` (`id`, `userid`, `flocks_id`, `date`, `small_egg`, `medium_egg`, `large_egg`, `spoiled_egg`, `broken_egg`) VALUES
(3, 14, 17, '2019-03-27 01:10:47', 12312, 123, 123, 6, 123);

=======
>>>>>>> adding new files
=======
>>>>>>> update file
-- --------------------------------------------------------

--
-- Table structure for table `feeds`
--

CREATE TABLE `feeds` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `flocks_id` int(11) NOT NULL,
  `types_feeds` varchar(250) NOT NULL,
  `quality` int(20) NOT NULL,
<<<<<<< HEAD
  `unit` int(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
<<<<<<< HEAD
  `amount` decimal(10,0) NOT NULL
=======
  `amount` decimal(7,2) NOT NULL
>>>>>>> adding new files
=======
  `unit` varchar(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `amount` decimal(7,2) NOT NULL
>>>>>>> update file
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
<<<<<<< HEAD
<<<<<<< HEAD
  `flocks_id` int(11) NOT NULL,
  `eggs_id` int(11) NOT NULL,
  `unit` int(20) NOT NULL,
  `quality` int(20) NOT NULL,
  `price` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `userid`, `flocks_id`, `eggs_id`, `unit`, `quality`, `price`) VALUES
(6, 14, 17, 3, 12, 10, -112);

-- --------------------------------------------------------

--
-- Table structure for table `feeds`
--

CREATE TABLE `feeds` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `types_feeds` varchar(250) NOT NULL,
  `quality` int(20) NOT NULL,
  `unit` int(20) NOT NULL,
  `timestamp` varchar(250) NOT NULL,
  `amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feeds`
--

INSERT INTO `feeds` (`id`, `userid`, `types_feeds`, `quality`, `unit`, `timestamp`, `amount`) VALUES
(1, 7, 'afsasdf', 12, 17, '21', 3489123);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `description` varchar(250) NOT NULL,
  `unit` int(20) NOT NULL,
  `quality` int(20) NOT NULL,
  `price` int(250) NOT NULL
=======
=======
>>>>>>> update file
  `item_name` varchar(250) NOT NULL,
  `unit` int(20) NOT NULL,
  `quality` int(20) NOT NULL,
  `price` decimal(7,0) NOT NULL
<<<<<<< HEAD
>>>>>>> adding new files
=======
>>>>>>> update file
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

<<<<<<< HEAD
<<<<<<< HEAD
INSERT INTO `items` (`id`, `userid`, `description`, `unit`, `quality`, `price`) VALUES
(1, 7, 'adfadf', 786676, 32, 6546),
(2, 7, 'asadfsd', 12, 1342, 23452);
=======
INSERT INTO `items` (`id`, `userid`, `item_name`, `unit`, `quality`, `price`) VALUES
(8, 17, 'pader', 12, 21, '12');
>>>>>>> adding new files
=======
INSERT INTO `items` (`id`, `userid`, `item_name`, `unit`, `quality`, `price`) VALUES
(11, 18, 'pocong', 23, 3, '23432');
>>>>>>> update file

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
<<<<<<< HEAD
<<<<<<< HEAD
  `cust_id` int(11) NOT NULL,
  `eggs_id` int(11) NOT NULL,
  `flocks_id` int(11) NOT NULL
=======
  `cust_id` int(11) NOT NULL
>>>>>>> adding new files
=======
  `cust_id` int(11) NOT NULL
>>>>>>> update file
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`id`, `userid`, `date`, `cust_id`, `eggs_id`, `flocks_id`) VALUES
(9, 14, '2019-03-27 01:38:07', 7, 3, 17);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `username` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
(7, 'jm', 'das', 'c20ad4d76fe97759aa27a0c99bff6710');

<<<<<<< HEAD
=======
(14, 'cassy', 'asdas', '202cb962ac59075b964b07152d234b70');

>>>>>>> New files
=======
(16, 'admin', 'sssa', '21232f297a57a5a743894a0e4a801fc3'),
(17, 'juliejane', 'juliejanedumz@gmail.com', '7d18d4c9ddb6790d732f70211345d1b5');

>>>>>>> adding new files
=======
(16, 'admin', 'sssa', '21232f297a57a5a743894a0e4a801fc3'),
(17, 'juliejane', 'juliejanedumz@gmail.com', '7d18d4c9ddb6790d732f70211345d1b5'),
(18, 'cassy', 'asd', 'e6c760b3216a51c656c5861d72d5bf62');

>>>>>>> update file
-- --------------------------------------------------------

--
-- Table structure for table `vac`
--

CREATE TABLE `vac` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
  `types_vac` varchar(250) NOT NULL,
  `timestamp` varchar(250) NOT NULL,
  `amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

=======
>>>>>>> 54b6e31ecfc08e456d844fb9336a15ac40e603db
=======
  `flocks_id` int(11) NOT NULL,
  `types_vac` varchar(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `amount` int(20) NOT NULL,
  `breed` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vac`
--

INSERT INTO `vac` (`id`, `userid`, `flocks_id`, `types_vac`, `date`, `amount`, `breed`) VALUES
(14, 14, 16, 'Lasalocid', '2019-03-27 00:44:24', 123412, '');

>>>>>>> New files
--
=======
=======
>>>>>>> update file
  `flocks_id` int(11) NOT NULL,
  `types_vac` varchar(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `amount` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
<<<<<<< HEAD
>>>>>>> adding new files
=======
>>>>>>> update file
-- Indexes for dumped tables
--

--
-- Indexes for table `cust`
--
ALTER TABLE `cust`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> adding new files
=======
>>>>>>> update file
-- Indexes for table `data1`
--
ALTER TABLE `data1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sales_id` (`sales_id`),
<<<<<<< HEAD
  ADD UNIQUE KEY `item_id` (`item_id`),
=======
>>>>>>> update file
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `egg`
--
ALTER TABLE `egg`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `flocks_id` (`flocks_id`),
  ADD KEY `userid` (`userid`);

--
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> New files
=======
>>>>>>> adding new files
=======
>>>>>>> update file
-- Indexes for table `feeds`
--
ALTER TABLE `feeds`
  ADD PRIMARY KEY (`id`),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
  ADD UNIQUE KEY `flocks_id` (`flocks_id`),
>>>>>>> New files
=======
  ADD UNIQUE KEY `flocks_id` (`flocks_id`),
>>>>>>> adding new files
=======
  ADD UNIQUE KEY `flocks_id` (`flocks_id`),
>>>>>>> update file
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
  ADD UNIQUE KEY `flocks_id` (`flocks_id`),
  ADD UNIQUE KEY `eggs_id` (`eggs_id`),
>>>>>>> New files
=======
>>>>>>> adding new files
=======
>>>>>>> update file
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cust_id` (`cust_id`),
<<<<<<< HEAD
<<<<<<< HEAD
  ADD UNIQUE KEY `eggs_id` (`eggs_id`),
  ADD UNIQUE KEY `flocks_id` (`flocks_id`),
=======
>>>>>>> adding new files
=======
>>>>>>> update file
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vac`
--
ALTER TABLE `vac`
  ADD PRIMARY KEY (`id`),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
  ADD UNIQUE KEY `flocks_id` (`flocks_id`),
>>>>>>> New files
=======
  ADD UNIQUE KEY `flocks_id` (`flocks_id`),
>>>>>>> adding new files
=======
  ADD UNIQUE KEY `flocks_id` (`flocks_id`),
>>>>>>> update file
  ADD KEY `userid` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cust`
--
ALTER TABLE `cust`
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
>>>>>>> New files
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
>>>>>>> adding new files
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
>>>>>>> update file
--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
<<<<<<< HEAD
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
>>>>>>> adding new files
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
>>>>>>> update file
--
-- AUTO_INCREMENT for table `data1`
--
ALTER TABLE `data1`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
>>>>>>> update file
--
-- AUTO_INCREMENT for table `egg`
--
ALTER TABLE `egg`
<<<<<<< HEAD
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
>>>>>>> adding new files
--
-- AUTO_INCREMENT for table `feeds`
--
ALTER TABLE `feeds`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
>>>>>>> adding new files
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
>>>>>>> update file
--
-- AUTO_INCREMENT for table `feeds`
--
ALTER TABLE `feeds`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
>>>>>>> update file
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
>>>>>>> adding new files
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
>>>>>>> update file
--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
<<<<<<< HEAD
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
>>>>>>> adding new files
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
>>>>>>> update file
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
<<<<<<< HEAD
=======
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
>>>>>>> New files
=======
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
>>>>>>> adding new files
=======
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
>>>>>>> update file
--
-- AUTO_INCREMENT for table `vac`
--
ALTER TABLE `vac`
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
=======
>>>>>>> 54b6e31ecfc08e456d844fb9336a15ac40e603db
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
>>>>>>> New files
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
>>>>>>> adding new files
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
>>>>>>> update file
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cust`
--
ALTER TABLE `cust`
  ADD CONSTRAINT `cust_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);

--
-- Constraints for table `data`
--
ALTER TABLE `data`
  ADD CONSTRAINT `data_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);

--
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
-- Constraints for table `feeds`
--
ALTER TABLE `feeds`
  ADD CONSTRAINT `feeds_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);
=======
=======
>>>>>>> adding new files
=======
>>>>>>> update file
-- Constraints for table `data1`
--
ALTER TABLE `data1`
  ADD CONSTRAINT `data1_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`),
<<<<<<< HEAD
  ADD CONSTRAINT `data1_ibfk_2` FOREIGN KEY (`sales_id`) REFERENCES `sale` (`id`),
  ADD CONSTRAINT `data1_ibfk_3` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);
=======
  ADD CONSTRAINT `data1_ibfk_2` FOREIGN KEY (`sales_id`) REFERENCES `sale` (`id`);
>>>>>>> update file

--
-- Constraints for table `egg`
--
ALTER TABLE `egg`
  ADD CONSTRAINT `egg_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `egg_ibfk_2` FOREIGN KEY (`flocks_id`) REFERENCES `data` (`id`);

--
-- Constraints for table `feeds`
--
ALTER TABLE `feeds`
  ADD CONSTRAINT `feeds_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `feeds_ibfk_2` FOREIGN KEY (`flocks_id`) REFERENCES `data` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> New files
=======
>>>>>>> adding new files
=======
>>>>>>> update file

--
-- Constraints for table `items`
--
ALTER TABLE `items`
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);
=======
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `items_ibfk_2` FOREIGN KEY (`flocks_id`) REFERENCES `data` (`id`),
  ADD CONSTRAINT `items_ibfk_3` FOREIGN KEY (`eggs_id`) REFERENCES `egg` (`id`);
>>>>>>> New files
=======
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);
>>>>>>> adding new files
=======
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);
>>>>>>> update file

--
-- Constraints for table `sale`
--
ALTER TABLE `sale`
  ADD CONSTRAINT `sale_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`),
<<<<<<< HEAD
<<<<<<< HEAD
  ADD CONSTRAINT `sale_ibfk_2` FOREIGN KEY (`cust_id`) REFERENCES `cust` (`id`),
  ADD CONSTRAINT `sale_ibfk_3` FOREIGN KEY (`eggs_id`) REFERENCES `egg` (`id`),
  ADD CONSTRAINT `sale_ibfk_4` FOREIGN KEY (`flocks_id`) REFERENCES `data` (`id`);
=======
  ADD CONSTRAINT `sale_ibfk_2` FOREIGN KEY (`cust_id`) REFERENCES `cust` (`id`);
>>>>>>> adding new files
=======
  ADD CONSTRAINT `sale_ibfk_2` FOREIGN KEY (`cust_id`) REFERENCES `cust` (`id`);
>>>>>>> update file

--
-- Constraints for table `vac`
--
ALTER TABLE `vac`
  ADD CONSTRAINT `vac_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `vac_ibfk_2` FOREIGN KEY (`flocks_id`) REFERENCES `data` (`id`);
<<<<<<< HEAD
<<<<<<< HEAD

--
-- Constraints for table `vac`
--
ALTER TABLE `vac`
  ADD CONSTRAINT `vac_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);
=======
>>>>>>> adding new files
=======
>>>>>>> update file

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
