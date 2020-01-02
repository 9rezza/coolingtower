-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2019 at 03:58 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webhmi`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `element` varchar(255) NOT NULL,
  `grup` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `src` varchar(255) NOT NULL,
  `x` int(11) NOT NULL,
  `y` int(11) NOT NULL,
  `z` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `element`, `grup`, `color`, `src`, `x`, `y`, `z`) VALUES
(80, 'Straight_Pipe_0', 'Straight_Pipe', 'grey', 'straight_pipe_1.3.png', 289, 152, 0),
(81, 'Water_Tower_1', 'Water_Tower', 'grey', 'water_tower_1.4.png', 55, 45, 3),
(86, 'L_Bend_0', 'L_Bend', 'grey', 'l_bend_1.7.png', 127, 226, 3),
(88, 'Straight_Pipe_2', 'Straight_Pipe', 'grey', 'straight_pipe_1.2.png', 212, 142, 1),
(89, 'Tank_0', 'Tank', 'grey', 'tank_1.4.png', 435, 210, 12),
(91, 'L_Bend_1', 'L_Bend', 'grey', 'l_bend_1.10.png', 275, 140, 1),
(92, 'Tank_1', 'Tank', 'grey', 'tank_1.4.png', 275, 321, 13),
(93, 'L_Bend_2', 'L_Bend', 'grey', 'l_bend_1.6.png', 289, 218, 0),
(94, 'T_Pipe_0', 'T_Pipe', 'grey', 't_pipe_1.1.png', 314, 249, 10),
(99, 'Rotating_Valve_0', 'Rotating_Valve', 'red', 'rotating_valve_1.1.png', 364, 177, 12),
(100, 'T_Pipe_1', 'T_Pipe', 'grey', 't_pipe_1.6.png', 275, 273, 11),
(101, 'T_Pipe_2', 'T_Pipe', 'grey', 't_pipe_1.6.png', 355, 218, 9),
(102, 'Rotating_Valve_1', 'Rotating_Valve', 'red', 'rotating_valve_1.1.png', 284, 233, 12),
(103, 'L_Bend_3', 'L_Bend', 'grey', 'l_bend_1.3.png', 266, 304, 13),
(104, 'L_Bend_4', 'L_Bend', 'grey', 'l_bend_1.4.png', 394, 218, 8),
(106, 'Straight_Pipe_3', 'Straight_Pipe', 'grey', 'straight_pipe_1.1.png', 674, 387, 13),
(107, 'Straight_Pipe_4', 'Straight_Pipe', 'grey', 'straight_pipe_1.1.png', 514, 499, 14),
(108, 'Straight_Pipe_5', 'Straight_Pipe', 'grey', 'straight_pipe_1.1.png', 736, 429, 14),
(109, 'Straight_Pipe_6', 'Straight_Pipe', 'grey', 'straight_pipe_1.1.png', 575, 541, 15),
(110, 'L_Bend_5', 'L_Bend', 'grey', 'l_bend_1.9.png', 798, 472, 15),
(111, 'L_Bend_6', 'L_Bend', 'grey', 'l_bend_1.9.png', 637, 584, 16),
(112, 'L_Bend_7', 'L_Bend', 'grey', 'l_bend_1.1.png', 183, 126, 6),
(113, 'Straight_Pipe_7', 'Straight_Pipe', 'grey', 'straight_pipe_1.2.png', 120, 153, 7),
(114, 'Straight_Pipe_8', 'Straight_Pipe', 'grey', 'straight_pipe_1.2.png', 57, 196, 8),
(115, 'L_Bend_8', 'L_Bend', 'grey', 'l_bend_1.12.png', 34, 238, 9),
(116, 'Straight_Pipe_9', 'Straight_Pipe', 'grey', 'straight_pipe_1.3.png', 34, 275, 8),
(117, 'Straight_Pipe_10', 'Straight_Pipe', 'grey', 'straight_pipe_1.3.png', 35, 336, 8),
(118, 'Pump_0', 'Pump', 'grey', 'pump_1.8.png', 59, 433, 7),
(119, 'L_Bend_9', 'L_Bend', 'grey', 'l_bend_1.6.png', 35, 401, 6),
(120, 'Motor_0', 'Motor', 'red', 'motor_1.3.png', 98, 460, 8),
(122, 'Straight_Pipe_11', 'Straight_Pipe', 'grey', 'straight_pipe_1.2.png', 149, 187, 3),
(126, 'Arrow_0', 'Arrow', 'grey', 'arrow_1.gif', 44, 298, 9),
(127, 'Arrow_1', 'Arrow', 'grey', 'arrow_1.gif', 45, 360, 9),
(128, 'Arrow_2', 'Arrow', 'grey', 'arrow_2.gif', 299, 176, 1),
(129, 'Arrow_3', 'Arrow', 'grey', 'arrow_3.gif', 83, 211, 9),
(130, 'Arrow_4', 'Arrow', 'grey', 'arrow_3.gif', 140, 171, 8),
(131, 'Arrow_5', 'Arrow', 'grey', 'arrow_3.gif', 236, 158, 2);

-- --------------------------------------------------------

--
-- Table structure for table `symbol`
--

CREATE TABLE `symbol` (
  `id` int(11) NOT NULL,
  `grup` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `symbol`
--

INSERT INTO `symbol` (`id`, `grup`, `path`) VALUES
(1, 'Clarifier', 'clarifier_1.1.2.png'),
(2, 'Clarifier', 'clarifier_1.1.3.png'),
(3, 'Clarifier', 'clarifier_1.1.4.png'),
(4, 'Clarifier', 'clarifier_2.1.1.png'),
(5, 'Clarifier', 'clarifier_2.1.2.png'),
(6, 'Clarifier', 'clarifier_2.1.3.png'),
(7, 'Clarifier', 'clarifier_2.1.4.png'),
(8, 'Closed_Valve', 'closed_valve_1.1.png'),
(9, 'Closed_Valve', 'closed_valve_1.2.png'),
(10, 'Closed_Valve', 'closed_valve_1.3.png'),
(11, 'Closed_Valve', 'closed_valve_1.4.png'),
(12, 'Fliter_Bed', 'filter_bed_1.1.1.png'),
(13, 'Fliter_Bed', 'filter_bed_1.1.2.png'),
(14, 'Fliter_Bed', 'filter_bed_2.1.1.png'),
(15, 'Fliter_Bed', 'filter_bed_2.1.2.png'),
(16, 'Fliter_Bed', 'filter_bed_2.1.3.png'),
(17, 'Fliter_Bed', 'filter_bed_2.1.4.png'),
(18, 'Huge_Tank', 'huge_tank_1.1.png'),
(19, 'Huge_Tank', 'huge_tank_1.2.png'),
(20, 'Huge_Tank', 'huge_tank_1.3.png'),
(21, 'Huge_Tank', 'huge_tank_1.4.png'),
(22, 'L_Bend', 'l_bend_1.1.png'),
(23, 'L_Bend', 'l_bend_1.2.png'),
(24, 'L_Bend', 'l_bend_1.3.png'),
(25, 'L_Bend', 'l_bend_1.4.png'),
(26, 'L_Bend', 'l_bend_1.5.png'),
(27, 'L_Bend', 'l_bend_1.6.png'),
(28, 'L_Bend', 'l_bend_1.7.png'),
(29, 'L_Bend', 'l_bend_1.8.png'),
(30, 'L_Bend', 'l_bend_1.9.png'),
(31, 'L_Bend', 'l_bend_1.10.png'),
(32, 'L_Bend', 'l_bend_1.11.png'),
(33, 'L_Bend', 'l_bend_1.12.png'),
(34, 'Large_Water_Tower', 'large_water_tower_1.1.png'),
(35, 'Large_Water_Tower', 'large_water_tower_1.2.png'),
(36, 'Large_Water_Tower', 'large_water_tower_1.3.png'),
(37, 'Large_Water_Tower', 'large_water_tower_1.4.png'),
(38, 'Motor', 'motor_1.1.png'),
(39, 'Motor', 'motor_1.2.png'),
(40, 'Motor', 'motor_1.3.png'),
(41, 'Motor', 'motor_1.4.png'),
(42, 'Motor', 'motor_1.5.png'),
(43, 'Motor', 'motor_1.6.png'),
(44, 'Open_Valve', 'open_valve_1.1.png'),
(45, 'Open_Valve', 'open_valve_1.2.png'),
(46, 'Open_Valve', 'open_valve_1.3.png'),
(47, 'Open_Valve', 'open_valve_1.4.png'),
(48, 'Pump', 'pump_1.1.png'),
(49, 'Pump', 'pump_1.2.png'),
(50, 'Pump', 'pump_1.3.png'),
(51, 'Pump', 'pump_1.4.png'),
(52, 'Pump', 'pump_1.5.png'),
(53, 'Pump', 'pump_1.6.png'),
(54, 'Pump', 'pump_1.7.png'),
(55, 'Pump', 'pump_1.8.png'),
(56, 'Pump', 'pump_1.9.png'),
(57, 'Pump', 'pump_1.10.png'),
(58, 'Pump', 'pump_1.11.png'),
(59, 'Pump', 'pump_1.12.png'),
(60, 'Pump', 'pump_1.13.png'),
(61, 'Pump', 'pump_1.14.png'),
(62, 'Pump', 'pump_1.15.png'),
(63, 'Pump', 'pump_1.16.png'),
(64, 'Pump', 'pump_1.17.png'),
(65, 'Pump', 'pump_1.18.png'),
(66, 'Pump', 'pump_1.19.png'),
(67, 'Pump', 'pump_1.20.png'),
(68, 'Pump', 'pump_1.21.png'),
(69, 'Pump', 'pump_1.22.png'),
(70, 'Pump', 'pump_1.23.png'),
(71, 'Pump', 'pump_1.24.png'),
(72, 'Rotating_Valve', 'rotating_valve_1.1.png'),
(73, 'Rotating_Valve', 'rotating_valve_1.2.png'),
(74, 'Rotating_Valve', 'rotating_valve_1.3.png'),
(75, 'Rotating_Valve', 'rotating_valve_1.4.png'),
(76, 'Rotating_Valve', 'rotating_valve_1.5.png'),
(77, 'Rotating_Valve', 'rotating_valve_1.6.png'),
(78, 'Rotating_Valve', 'rotating_valve_1.7.png'),
(79, 'Rotating_Valve', 'rotating_valve_1.8.png'),
(80, 'Rotating_Valve', 'rotating_valve_1.9.png'),
(81, 'Rotating_Valve', 'rotating_valve_1.10.png'),
(82, 'Rotating_Valve', 'rotating_valve_1.11.png'),
(83, 'Rotating_Valve', 'rotating_valve_1.12.png'),
(84, 'Straight_Pipe', 'straight_pipe_1.1.png'),
(85, 'Straight_Pipe', 'straight_pipe_1.2.png'),
(86, 'Straight_Pipe', 'straight_pipe_1.3.png'),
(87, 'T_Pipe', 't_pipe_1.1.png'),
(88, 'T_Pipe', 't_pipe_1.2.png'),
(89, 'T_Pipe', 't_pipe_1.3.png'),
(90, 'T_Pipe', 't_pipe_1.4.png'),
(91, 'T_Pipe', 't_pipe_1.5.png'),
(92, 'T_Pipe', 't_pipe_1.6.png'),
(93, 'T_Pipe', 't_pipe_1.7.png'),
(94, 'T_Pipe', 't_pipe_1.8.png'),
(95, 'T_Pipe', 't_pipe_1.9.png'),
(96, 'T_Pipe', 't_pipe_1.10.png'),
(97, 'T_Pipe', 't_pipe_1.11.png'),
(98, 'T_Pipe', 't_pipe_1.12.png'),
(99, 'Tank', 'tank_1.1.png'),
(100, 'Tank', 'tank_1.2.png'),
(101, 'Tank', 'tank_1.3.png'),
(102, 'Tank', 'tank_1.4.png'),
(103, 'Tank', 'tank_1.5.png'),
(104, 'Tank', 'tank_1.6.png'),
(105, 'Tank', 'tank_1.7.png'),
(106, 'Tank', 'tank_1.8.png'),
(107, 'Tank', 'tank_1.9.png'),
(108, 'Tank', 'tank_1.10.png'),
(109, 'Tank', 'tank_1.11.png'),
(110, 'Tank', 'tank_1.12.png'),
(111, 'Tank', 'tank_1.13.png'),
(112, 'Tank', 'tank_1.14.png'),
(113, 'Tank', 'tank_1.15.png'),
(114, 'Tank', 'tank_1.16.png'),
(115, 'Water_Tower', 'water_tower_1.1.png'),
(116, 'Water_Tower', 'water_tower_1.2.png'),
(117, 'Water_Tower', 'water_tower_1.3.png'),
(118, 'Water_Tower', 'water_tower_1.4.png'),
(119, 'Arrow', 'arrow_1.gif'),
(120, 'Arrow', 'arrow_2.gif'),
(121, 'Arrow', 'arrow_3.gif'),
(122, 'Arrow', 'arrow_4.gif');

-- --------------------------------------------------------

--
-- Table structure for table `textbox`
--

CREATE TABLE `textbox` (
  `id` int(11) NOT NULL,
  `element` varchar(255) NOT NULL,
  `x` int(11) NOT NULL,
  `y` int(11) NOT NULL,
  `z` int(11) NOT NULL,
  `color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `textbox`
--

INSERT INTO `textbox` (`id`, `element`, `x`, `y`, `z`, `color`) VALUES
(1, 'box_0', 110, 131, 99999, 'white'),
(2, 'box_1', 487, 290, 99999, 'white'),
(3, 'box_2', 327, 403, 99999, 'white');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `symbol`
--
ALTER TABLE `symbol`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `textbox`
--
ALTER TABLE `textbox`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `symbol`
--
ALTER TABLE `symbol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `textbox`
--
ALTER TABLE `textbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
