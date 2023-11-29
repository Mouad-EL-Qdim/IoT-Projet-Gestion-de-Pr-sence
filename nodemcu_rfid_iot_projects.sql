-- phpMyAdmin SQL
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- PHP Version: 8.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

-- Database: `nodemcu_rfid_iot_projects`

-- --------------------------------------------------------

-- Table structure for table `table_the_iot_projects`

CREATE TABLE `table_the_iot_projects` (
  `name` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table `table_the_iot_projects`

INSERT INTO `table_the_iot_projects` (`name`, `id`, `gender`, `email`, `mobile`) VALUES
('Ahmad', '39EAB06D', 'Male', 'ahmad@gmail.com', '0600998787'),
('Said', '769174F8', 'Male', 'john@gmail.com', '0612345423'),
('mahdi', '81A3DC79', 'Female', 'mahdi@gmail.com', '0712098765'),
('rayan', '866080F8', 'Male', 'rayan@gmail.com', '0723980999');

-- Indexes for dumped tables

-- Indexes for table `table_the_iot_projects`

ALTER TABLE `table_the_iot_projects`
  ADD PRIMARY KEY (`id`);
COMMIT;
