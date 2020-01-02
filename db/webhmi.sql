-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2019 at 05:19 AM
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
(99, 'Rotating_Valve_0', 'Rotating_Valve', 'red', 'rotating_valve_1.1.png', 547, 305, 14),
(102, 'Rotating_Valve_1', 'Rotating_Valve', 'red', 'rotating_valve_1.1.png', 343, 164, 12),
(120, 'Motor_0', 'Motor', 'red', 'motor_1.2.png', 682, 405, 17),
(133, 'Huge_Tank_0', 'Huge_Tank', 'grey', 'huge_tank_1.3.png', 542, 10, 10),
(134, 'L_Bend_0', 'L_Bend', 'grey', 'l_bend_1.10.png', 745, 90, 11),
(135, 'Straight_Pipe_0', 'Straight_Pipe', 'grey', 'straight_pipe_1.2.png', 680, 133, 12),
(136, 'Straight_Pipe_1', 'Straight_Pipe', 'grey', 'straight_pipe_1.2.png', 620, 177, 13),
(137, 'L_Bend_1', 'L_Bend', 'grey', 'l_bend_1.2.png', 581, 221, 14),
(138, 'Straight_Pipe_2', 'Straight_Pipe', 'grey', 'straight_pipe_1.1.png', 517, 178, 13),
(139, 'L_Bend_2', 'L_Bend', 'grey', 'l_bend_1.4.png', 477, 175, 12),
(140, 'L_Bend_3', 'L_Bend', 'grey', 'l_bend_1.12.png', 454, 177, 13),
(141, 'Straight_Pipe_3', 'Straight_Pipe', 'grey', 'straight_pipe_1.3.png', 454, 214, 12),
(145, 'T_Pipe_0', 'T_Pipe', 'grey', 't_pipe_1.5.png', 436, 276, 11),
(147, 'L_Bend_4', 'L_Bend', 'grey', 'l_bend_1.4.png', 293, 206, 8),
(148, 'T_Pipe_1', 'T_Pipe', 'grey', 't_pipe_1.5.png', 332, 204, 9),
(149, 'Straight_Pipe_4', 'Straight_Pipe', 'grey', 'straight_pipe_1.1.png', 373, 235, 10),
(150, 'Straight_Pipe_5', 'Straight_Pipe', 'grey', 'straight_pipe_1.1.png', 475, 306, 12),
(151, 'L_Bend_5', 'L_Bend', 'grey', 'l_bend_1.1.png', 577, 376, 13),
(152, 'T_Pipe_2', 'T_Pipe', 'grey', 't_pipe_1.5.png', 537, 345, 13),
(156, 'T_Pipe_3', 'T_Pipe', 'grey', 't_pipe_1.12.png', 744, 102, 11),
(157, 'Straight_Pipe_6', 'Straight_Pipe', 'grey', 'straight_pipe_1.2.png', 683, 91, 13),
(158, 'Straight_Pipe_7', 'Straight_Pipe', 'grey', 'straight_pipe_1.2.png', 621, 135, 14),
(159, 'L_Bend_6', 'L_Bend', 'grey', 'l_bend_1.3.png', 612, 178, 15),
(160, 'Straight_Pipe_8', 'Straight_Pipe', 'grey', 'straight_pipe_1.1.png', 620, 206, 16),
(161, 'L_Bend_7', 'L_Bend', 'grey', 'l_bend_1.9.png', 682, 249, 17),
(162, 'Straight_Pipe_9', 'Straight_Pipe', 'grey', 'straight_pipe_1.3.png', 697, 287, 16),
(164, 'Open_Valve_0', 'Open_Valve', 'grey', 'open_valve_1.1.png', 722, 383, 16),
(165, 'L_Bend_8', 'L_Bend', 'grey', 'l_bend_1.6.png', 698, 351, 15),
(166, 'L_Bend_9', 'L_Bend', 'grey', 'l_bend_1.9.png', 761, 409, 17),
(167, 'Open_Valve_1', 'Open_Valve', 'grey', 'open_valve_1.1.png', 437, 280, 12),
(168, 'Motor_1', 'Motor', 'yellow', 'motor_1.2.png', 398, 300, 13),
(169, 'Tank_1', 'Tank', 'grey', 'tank_1.5.png', 338, 397, 14),
(170, 'Tank_2', 'Tank', 'grey', 'tank_1.5.png', 54, 201, 9),
(171, 'Arrow_0', 'Arrow', 'grey', 'arrow_1.gif', 707, 310, 17),
(172, 'Arrow_1', 'Arrow', 'grey', 'arrow_3.gif', 645, 150, 15),
(173, 'Arrow_2', 'Arrow', 'grey', 'arrow_3.gif', 708, 106, 14),
(174, 'Arrow_3', 'Arrow', 'grey', 'arrow_6.gif', 642, 222, 17),
(175, 'Arrow_4', 'Arrow', 'grey', 'arrow_5.gif', 708, 144, 14),
(176, 'Arrow_5', 'Arrow', 'grey', 'arrow_5.gif', 647, 191, 15),
(177, 'Arrow_6', 'Arrow', 'grey', 'arrow_6.gif', 534, 192, 14),
(178, 'Arrow_7', 'Arrow', 'grey', 'arrow_2.gif', 464, 237, 13),
(179, 'Arrow_8', 'Arrow', 'grey', 'arrow_6.gif', 391, 249, 11),
(180, 'Arrow_9', 'Arrow', 'grey', 'arrow_4.gif', 493, 320, 14),
(181, 'L_Bend_10', 'L_Bend', 'grey', 'l_bend_1.12.png', 31, 377, 10),
(182, 'L_Bend_11', 'L_Bend', 'grey', 'l_bend_1.12.png', 315, 572, 15);

-- --------------------------------------------------------

--
-- Table structure for table `monitoring`
--

CREATE TABLE `monitoring` (
  `id` int(11) NOT NULL,
  `target` int(11) DEFAULT NULL,
  `actual` int(11) DEFAULT NULL,
  `selisih` int(11) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monitoring`
--

INSERT INTO `monitoring` (`id`, `target`, `actual`, `selisih`, `timestamp`) VALUES
(1, 1000, 576, 425, '2019-08-20 08:41:00');

-- --------------------------------------------------------

--
-- Table structure for table `monitoring_images`
--

CREATE TABLE `monitoring_images` (
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
-- Dumping data for table `monitoring_images`
--

INSERT INTO `monitoring_images` (`id`, `element`, `grup`, `color`, `src`, `x`, `y`, `z`) VALUES
(1, 'scanner', 'Monitoring', '', 'scanner_gr.png', 200, 110, 14),
(2, 'roller1', 'Monitoring', '', 'roller_gr.png', 16, 275, 15),
(3, 'roller2', 'Monitoring', '', 'roller_gr.png', 386, 6, 13);

-- --------------------------------------------------------

--
-- Table structure for table `production`
--

CREATE TABLE `production` (
  `id` int(15) NOT NULL,
  `timestamp` datetime DEFAULT NULL,
  `total` int(15) DEFAULT NULL,
  `speed` int(15) DEFAULT NULL,
  `eff` float(255,0) DEFAULT NULL,
  `line_stop` int(15) DEFAULT NULL,
  `count_speed` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `production`
--

INSERT INTO `production` (`id`, `timestamp`, `total`, `speed`, `eff`, `line_stop`, `count_speed`) VALUES
(1, '2019-08-19 16:49:00', 0, 0, 99, 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `production_images`
--

CREATE TABLE `production_images` (
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
-- Dumping data for table `production_images`
--

INSERT INTO `production_images` (`id`, `element`, `grup`, `color`, `src`, `x`, `y`, `z`) VALUES
(1, 'scanner', 'Production', '', 'scanner_gr.png', 200, 110, 14),
(2, 'roller1', 'Production', '', 'roller_gr.png', 16, 275, 15),
(3, 'roller2', 'Production', '', 'roller_gr.png', 386, 6, 13);

-- --------------------------------------------------------

--
-- Table structure for table `production_status`
--

CREATE TABLE `production_status` (
  `id` int(15) NOT NULL,
  `status` int(11) DEFAULT '0',
  `line_stop` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `production_status`
--

INSERT INTO `production_status` (`id`, `status`, `line_stop`) VALUES
(1, 0, 0);

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
(122, 'Arrow', 'arrow_4.gif'),
(123, 'Arrow', 'arrow_5.gif'),
(124, 'Arrow', 'arrow_6.gif');

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
(1, 'box_0', 619, 46, 99999, 'white'),
(2, 'box_1', 432, 462, 99999, 'white'),
(3, 'box_2', 135, 268, 99999, 'white');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monitoring`
--
ALTER TABLE `monitoring`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monitoring_images`
--
ALTER TABLE `monitoring_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `production`
--
ALTER TABLE `production`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `production_images`
--
ALTER TABLE `production_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `production_status`
--
ALTER TABLE `production_status`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;

--
-- AUTO_INCREMENT for table `monitoring`
--
ALTER TABLE `monitoring`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `monitoring_images`
--
ALTER TABLE `monitoring_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `production`
--
ALTER TABLE `production`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `production_images`
--
ALTER TABLE `production_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `production_status`
--
ALTER TABLE `production_status`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `symbol`
--
ALTER TABLE `symbol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `textbox`
--
ALTER TABLE `textbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
