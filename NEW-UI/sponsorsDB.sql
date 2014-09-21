-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 21, 2014 at 05:15 PM
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
  `description` longtext NOT NULL,
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
  `organizer` varchar(100) NOT NULL DEFAULT 'Lorem Ipsum',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event_name`, `logo`, `location`, `turnout`, `description`, `org_info`, `start_date`, `end_date`, `start_time`, `end_time`, `facebook`, `facebook_event`, `twitter`, `instagram`, `website`, `created_date`, `organizer`) VALUES
(1, 'Standard Chartered Marathon', 'img/placeholders/photos/photo18.jpg', 'SMU Admin Building 81 Victoria St, 188065', '4000', '<b>A global gathering celebrating the entrepreneurial lifestyle.</b>\r\n<br/><br/>Who are we? <br/>DrinkEntrepreneurs is an international entrepreneurship networking event running monthly in 40 cities around the world, celebrating a unique culture and spreading the word about the entrepreneurial way of life. In Singapore, we have become a key connector within the local startup ecosystem. Across Asia, we host events in Bangkok, Kuala Lumpur, Hong Kong, Beijing, Shanghai and many more locations.\r\n<br/>\r\nWhat do we do? Our events are one-of-a-kind social experiences, co-created by you and designed to make you feel as comfortable as possible and meet a wide range of great people. We also remove everything that usually makes networking awkward and dreary, so there are no name tags, stuffy environments or boring presentations.<br/><br/>Every year, we enjoy connecting thousands of people in meaningful ways thanks to the power of a vibrant community. Join us and spread the word!\r\n<br/><br/>Best wishes, <br/>Philipp Kristian DrinkEntrepreneurs<br/>Stay in touch with our facebook page<br/>About Philipp, your DrinkEntrepreneurs Singapore host\r\n', 'Standard Chartered PLC is a British multinational banking and financial services company headquartered in London. It operates a network of more than 1,700 branches and outlets across more than 70 countries and employs around 87,000 people.', '30 Aug 2014', '30 Aug 2014', '12:00 PM', '9:00 PM', '', '', '', '', '', '2014-09-15 02:16:29', 'Standard Chartered'),
(2, 'Big Shot Workshop', 'img/logos/hearts.jpg', 'home', '100', 'wrqweqw', 'qweqwe', '14 Oct 2014', '14 Oct 2014', '1:50:15 AM', '1:50:15 AM', '', '', '', '', '', '2014-09-15 02:16:37', 'Lorem Ipsum'),
(6, 'pao bu bi sai', 'img/placeholders/photos/photo18@2x.jpg', '', '222', '', '', '', '', '1:31:00 AM', '1:31:00 AM', '', '', '', '', '', '2014-09-21 01:32:16', 'Lorem Ipsum'),
(10, '', 'img/placeholders/photos/photo18@2x.jpg', '', '', '', '', '', '', '5:45 PM', '5:45 PM', '', '', '', '', '', '2014-09-21 18:48:52', ''),
(11, '', 'img/placeholders/photos/photo18@2x.jpg', '', '', '', '', '', '', '5:45 PM', '5:45 PM', '', '', '', '', '', '2014-09-21 18:49:57', 'SMU'),
(12, '', 'img/placeholders/photos/photo18@2x.jpg', '', '', '', '', '', '', '5:45 PM', '5:45 PM', '', '', '', '', '', '2014-09-21 18:51:51', 'SMU');

-- --------------------------------------------------------

--
-- Table structure for table `events_audience`
--

CREATE TABLE IF NOT EXISTS `events_audience` (
  `event_id` int(11) NOT NULL,
  `audience_id` int(11) NOT NULL,
  `others` varchar(45) NOT NULL,
  PRIMARY KEY (`event_id`,`audience_id`),
  KEY `fk_events_has_target_audience_target_audience1` (`audience_id`),
  KEY `fk_events_has_target_audience_events` (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events_audience`
--

INSERT INTO `events_audience` (`event_id`, `audience_id`, `others`) VALUES
(1, 5, ''),
(1, 8, ''),
(1, 11, ''),
(2, 1, ''),
(2, 9, ''),
(2, 13, ''),
(10, 5, ''),
(10, 8, ''),
(10, 11, ''),
(11, 5, ''),
(11, 8, ''),
(11, 11, '');

-- --------------------------------------------------------

--
-- Table structure for table `events_type`
--

CREATE TABLE IF NOT EXISTS `events_type` (
  `event_id` int(11) NOT NULL,
  `event_type_id` int(11) NOT NULL,
  `others` varchar(45) NOT NULL,
  PRIMARY KEY (`event_id`,`event_type_id`),
  KEY `fk_events_has_events_type_events_type1` (`event_type_id`),
  KEY `fk_events_has_events_type_events1` (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events_type`
--

INSERT INTO `events_type` (`event_id`, `event_type_id`, `others`) VALUES
(1, 15, ''),
(1, 16, ''),
(1, 19, ''),
(1, 20, ''),
(2, 15, ''),
(2, 16, ''),
(2, 19, ''),
(12, 14, ''),
(12, 17, ''),
(12, 20, '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

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
(13, 'Shows'),
(14, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `type_of_events`
--

CREATE TABLE IF NOT EXISTS `type_of_events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `type_of_events`
--

INSERT INTO `type_of_events` (`id`, `type`) VALUES
(1, 'Charity'),
(2, 'Community'),
(3, 'Concert'),
(4, 'Conference'),
(5, 'Exhibition'),
(6, 'Fashion'),
(7, 'Food'),
(8, 'Gala'),
(9, 'Social'),
(11, 'Movie'),
(12, 'Networking'),
(13, 'Party'),
(14, 'Presentation'),
(15, 'Show'),
(16, 'Sport'),
(17, 'Theatre'),
(18, 'Tradeshow'),
(19, 'Workshop'),
(20, 'Tour'),
(21, 'Appearance'),
(22, 'Attraction'),
(23, 'Camp'),
(24, 'Competition'),
(25, 'Marathon'),
(26, 'Festival'),
(27, 'Fair'),
(28, 'Rally'),
(30, 'Launch'),
(31, 'Others');

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
