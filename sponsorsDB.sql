-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 16, 2014 at 03:52 PM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sponsorsDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(45) NOT NULL,
  `logo` varchar(200) DEFAULT NULL,
  `location` varchar(45) NOT NULL,
  `turnout` varchar(45) NOT NULL,
  `description` varchar(999) NOT NULL,
  `org_info` varchar(500) DEFAULT NULL,
  `start_date` varchar(45) DEFAULT NULL,
  `end_date` varchar(45) DEFAULT NULL,
  `start_time` varchar(45) NOT NULL,
  `end_time` varchar(45) NOT NULL,
  `facebook` varchar(45) DEFAULT NULL,
  `facebook_event` varchar(45) DEFAULT NULL,
  `twitter` varchar(45) DEFAULT NULL,
  `instagram` varchar(45) DEFAULT NULL,
  `website` varchar(45) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event_name`, `logo`, `location`, `turnout`, `description`, `org_info`, `start_date`, `end_date`, `start_time`, `end_time`, `facebook`, `facebook_event`, `twitter`, `instagram`, `website`, `created_date`) VALUES
(1, 'sdfsdfs', 'img/logos/hearts.jpg', 'home', '233', 'wrqweqw', 'qweqwe', '08/30/2014', '09/18/2014', '1:50:15 AM', '1:50:15 AM', '', '', '', '', '', '2014-09-15 02:16:29'),
(2, 'sdfsdfs', 'img/logos/hearts.jpg', 'home', '233', 'wrqweqw', 'qweqwe', '08/30/2014', '09/18/2014', '1:50:15 AM', '1:50:15 AM', '', '', '', '', '', '2014-09-15 02:16:37');

-- --------------------------------------------------------

--
-- Table structure for table `events_audience`
--

CREATE TABLE IF NOT EXISTS `events_audience` (
  `event_id` int(11) NOT NULL,
  `audience_id` int(11) NOT NULL,
  PRIMARY KEY (`event_id`,`audience_id`),
  KEY `fk_events_has_target_audience_target_audience1` (`audience_id`),
  KEY `fk_events_has_target_audience_events` (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events_audience`
--

INSERT INTO `events_audience` (`event_id`, `audience_id`) VALUES
(2, 1),
(2, 9),
(2, 13);

-- --------------------------------------------------------

--
-- Table structure for table `events_type`
--

CREATE TABLE IF NOT EXISTS `events_type` (
  `event_id` int(11) NOT NULL,
  `event_type_id` int(11) NOT NULL,
  PRIMARY KEY (`event_id`,`event_type_id`),
  KEY `fk_events_has_events_type_events_type1` (`event_type_id`),
  KEY `fk_events_has_events_type_events1` (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events_type`
--

INSERT INTO `events_type` (`event_id`, `event_type_id`) VALUES
(1, 15),
(2, 15),
(1, 16),
(2, 16),
(1, 19),
(2, 19),
(1, 20),
(2, 20);

-- --------------------------------------------------------

--
-- Table structure for table `presence`
--

CREATE TABLE IF NOT EXISTS `presence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `presence` varchar(45) NOT NULL,
  `price` int(11) NOT NULL,
  `slot` int(11) NOT NULL,
  `description` varchar(250) DEFAULT NULL,
  `event_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_presence_event1` (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `presence`
--


-- --------------------------------------------------------

--
-- Table structure for table `target_audience`
--

CREATE TABLE IF NOT EXISTS `target_audience` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `target_audience`
--

INSERT INTO `target_audience` (`id`, `type`) VALUES
(1, 'Teenagers'),
(2, 'Children'),
(3, 'Polytechnic Students'),
(4, 'University Students'),
(5, 'Young Professionals'),
(6, 'Seniors'),
(7, 'Sports'),
(8, 'Music'),
(9, 'Theatre'),
(10, 'Business people'),
(11, 'Foodies'),
(12, 'Fashionistas'),
(13, 'Shows');

-- --------------------------------------------------------

--
-- Table structure for table `type_of_events`
--

CREATE TABLE IF NOT EXISTS `type_of_events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `type_of_events`
--

INSERT INTO `type_of_events` (`id`, `type`) VALUES
(1, 'charity'),
(2, 'community'),
(3, 'concert'),
(4, 'conference'),
(5, 'exhibition'),
(6, 'fashion'),
(7, 'food'),
(8, 'gala'),
(9, 'social'),
(11, 'movie'),
(12, 'networking'),
(13, 'party'),
(14, 'presentation'),
(15, 'show'),
(16, 'sport'),
(17, 'theatre'),
(18, 'tradeshow'),
(19, 'workshop'),
(20, 'tour'),
(21, 'appearance'),
(22, 'attraction'),
(23, 'camp'),
(24, 'competition'),
(25, 'race'),
(26, 'festival'),
(27, 'fair'),
(28, 'rally'),
(29, 'other'),
(30, 'launch');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events_audience`
--
ALTER TABLE `events_audience`
  ADD CONSTRAINT `fk_events_has_target_audience_events` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_events_has_target_audience_target_audience1` FOREIGN KEY (`audience_id`) REFERENCES `target_audience` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `events_type`
--
ALTER TABLE `events_type`
  ADD CONSTRAINT `fk_events_has_events_type_events1` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_events_has_events_type_events_type1` FOREIGN KEY (`event_type_id`) REFERENCES `type_of_events` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `presence`
--
ALTER TABLE `presence`
  ADD CONSTRAINT `fk_presence_event1` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
