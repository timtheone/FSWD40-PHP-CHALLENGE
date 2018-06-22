-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 20, 2018 at 12:03 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentCar`
--

-- --------------------------------------------------------

--
-- Table structure for table `additional_charges`
--

CREATE TABLE `additional_charges` (
  `additional_charges_id` int(11) NOT NULL,
  `damages` varchar(255) DEFAULT NULL,
  `fuel_level` int(11) DEFAULT NULL,
  `add_cost` int(11) DEFAULT NULL,
  `fk_driver_id` int(11) DEFAULT NULL,
  `fk_car_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `additional_charges`
--

INSERT INTO `additional_charges` (`additional_charges_id`, `damages`, `fuel_level`, `add_cost`, `fk_driver_id`, `fk_car_id`) VALUES
(1, 'no damages', 90, 10, 1, 1),
(2, 'dirt', 100, 5, 1, 3),
(3, 'no damages', 100, 0, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `car_id` int(11) NOT NULL,
  `car_cost` int(11) DEFAULT NULL,
  `car_status` varchar(55) DEFAULT NULL,
  `color` varchar(55) DEFAULT NULL,
  `model` varchar(55) DEFAULT NULL,
  `company` varchar(55) DEFAULT NULL,
  `horesepower` int(11) DEFAULT NULL,
  `production_year` int(11) DEFAULT NULL,
  `consumption` int(11) DEFAULT NULL,
  `diesel_petrol` varchar(55) DEFAULT NULL,
  `tank` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`car_id`, `car_cost`, `car_status`, `color`, `model`, `company`, `horesepower`, `production_year`, `consumption`, `diesel_petrol`, `tank`) VALUES
(1, 100, 'new', 'red', 'x5', 'BMW', 230, 2018, 1, 'Diesel', 'full'),
(2, 110, 'new', 'black', 'x5', 'Mercedes', 230, 2017, 1, 'Diesel', 'full'),
(3, 100, 'old', 'blue', 'x4', 'VW', 210, 2016, 1, 'Diesel', 'full'),
(4, 80, 'old', 'grey', 'a6', 'Audi', 120, 2000, 1, 'Petrol', 'full'),
(5, 70, 'old', 'blue', 'a6', 'Audi', 120, 2015, 1, 'Diesel', 'full'),
(6, 75, 'old', 'black', 'a3', 'Renault', 90, 2013, 2, 'Petrol', 'full');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `driver_id` int(11) NOT NULL,
  `first_name` varchar(55) DEFAULT NULL,
  `last_name` varchar(55) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `CarLicence` int(11) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(55) NOT NULL,
  `user_name` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driver_id`, `first_name`, `last_name`, `birthday`, `CarLicence`, `adress`, `email`, `password`, `user_name`) VALUES
(1, 'Horst', 'Koch', '1985-12-30', 123456789, 'Am Teich 5', 'hk@gmx.at', 'horst', 'horst_koch'),
(2, 'Denise', 'Light', '1995-01-05', 891234567, 'Kettenbrückengasse 4', 'dl@gmail.at', 'denise', 'denise_light'),
(3, 'Marielen', 'Haider', '1987-08-22', 678912345, 'Am Damm 5', 'mh@hotmail.at', 'marie', 'marie_haider');

-- --------------------------------------------------------

--
-- Table structure for table `Drop_off_location`
--

CREATE TABLE `Drop_off_location` (
  `drop_off_location_id` int(11) NOT NULL,
  `country_name` varchar(55) DEFAULT NULL,
  `city_name` varchar(55) DEFAULT NULL,
  `adress` varchar(55) DEFAULT NULL,
  `zip_code` int(11) DEFAULT NULL,
  `drop_off_date` date DEFAULT NULL,
  `drop_off_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Drop_off_location`
--

INSERT INTO `Drop_off_location` (`drop_off_location_id`, `country_name`, `city_name`, `adress`, `zip_code`, `drop_off_date`, `drop_off_time`) VALUES
(1, 'Austria', 'Vienna/Schwechat', 'Flughafen', 2220, '2018-02-26', '10:00:12'),
(2, 'Austria', 'St.Pölten', 'Hauptbahhof', 3100, '2018-01-06', '13:26:29'),
(3, 'Austria', 'Linz', 'Hintere Bahnhofstraße 5', 4010, '2018-01-11', '10:49:14');

-- --------------------------------------------------------

--
-- Table structure for table `Insurance`
--

CREATE TABLE `Insurance` (
  `insurance_id` int(11) NOT NULL,
  `police_number` int(11) DEFAULT NULL,
  `days_of_Insurance` int(11) DEFAULT NULL,
  `name_of_Insurance` varchar(100) DEFAULT NULL,
  `cost` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Insurance`
--

INSERT INTO `Insurance` (`insurance_id`, `police_number`, `days_of_Insurance`, `name_of_Insurance`, `cost`) VALUES
(1, 29301, 3, 'Wüstenrot', 50),
(2, 90234, 7, 'Generali', 120),
(3, 28936, 5, 'Uniqa', 100);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` int(11) NOT NULL,
  `invoice_date` date DEFAULT NULL,
  `invoice_time` time DEFAULT NULL,
  `fk_driver_id` int(11) DEFAULT NULL,
  `fk_car_id` int(11) DEFAULT NULL,
  `fk_insurance_id` int(11) DEFAULT NULL,
  `fk_pick_up_location_id` int(11) DEFAULT NULL,
  `fk_drop_off_location_id` int(11) DEFAULT NULL,
  `fk_additional_charges_id` int(11) DEFAULT NULL,
  `fk_reservation_id` int(11) DEFAULT NULL,
  `totalsum` int(11) DEFAULT NULL,
  `rent_days` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_id`, `invoice_date`, `invoice_time`, `fk_driver_id`, `fk_car_id`, `fk_insurance_id`, `fk_pick_up_location_id`, `fk_drop_off_location_id`, `fk_additional_charges_id`, `fk_reservation_id`, `totalsum`, `rent_days`) VALUES
(1, '2018-01-06', '13:29:27', 1, 1, 1, 1, 2, 1, 1, 310, 3),
(2, '2018-01-11', '14:00:02', 2, 3, 2, 2, 3, 2, 2, 705, 7),
(3, '2018-02-26', '00:00:02', 3, 5, 1, 3, 1, 3, 3, 350, 5);

-- --------------------------------------------------------

--
-- Table structure for table `Pick_up_location`
--

CREATE TABLE `Pick_up_location` (
  `pick_up_location_id` int(11) NOT NULL,
  `country_name` varchar(55) DEFAULT NULL,
  `city_name` varchar(55) DEFAULT NULL,
  `adress` varchar(55) DEFAULT NULL,
  `zip_code` int(11) DEFAULT NULL,
  `pick_up_date` date DEFAULT NULL,
  `pick_up_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Pick_up_location`
--

INSERT INTO `Pick_up_location` (`pick_up_location_id`, `country_name`, `city_name`, `adress`, `zip_code`, `pick_up_date`, `pick_up_time`) VALUES
(1, 'Austria', 'Vienna/Schwechat', 'Flughafen', 2220, '2018-01-04', '14:00:12'),
(2, 'Austria', 'St.Pölten', 'Hauptbahnhof', 3100, '2018-01-05', '09:00:12'),
(3, 'Austria', 'Graz', 'Hintere Bahnhofstraße 5', 4010, '2018-01-22', '12:11:12');

-- --------------------------------------------------------

--
-- Table structure for table `Reservation`
--

CREATE TABLE `Reservation` (
  `reservation_id` int(11) NOT NULL,
  `reservation_date` date DEFAULT NULL,
  `fk_driver_id` int(11) DEFAULT NULL,
  `fk_car_id` int(11) DEFAULT NULL,
  `fk_insurance_id` int(11) DEFAULT NULL,
  `fk_pick_up_location_id` int(11) DEFAULT NULL,
  `fk_drop_off_location_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Reservation`
--

INSERT INTO `Reservation` (`reservation_id`, `reservation_date`, `fk_driver_id`, `fk_car_id`, `fk_insurance_id`, `fk_pick_up_location_id`, `fk_drop_off_location_id`) VALUES
(1, '2017-12-05', 1, 1, 1, 1, 2),
(2, '2018-01-01', 2, 3, 2, 2, 3),
(3, '2018-01-05', 3, 5, 3, 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `additional_charges`
--
ALTER TABLE `additional_charges`
  ADD PRIMARY KEY (`additional_charges_id`),
  ADD KEY `fk_driver_id` (`fk_driver_id`),
  ADD KEY `fk_car_id` (`fk_car_id`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  CHANGE driver_id driver_id int(11) NOT NULL AUTO_INCREMENT,
  ADD PRIMARY KEY (`driver_id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `Drop_off_location`
--
ALTER TABLE `Drop_off_location`
  ADD PRIMARY KEY (`drop_off_location_id`);

--
-- Indexes for table `Insurance`
--
ALTER TABLE `Insurance`
  ADD PRIMARY KEY (`insurance_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`),
  ADD KEY `fk_driver_id` (`fk_driver_id`),
  ADD KEY `fk_car_id` (`fk_car_id`),
  ADD KEY `fk_insurance_id` (`fk_insurance_id`),
  ADD KEY `fk_pick_up_location_id` (`fk_pick_up_location_id`),
  ADD KEY `fk_drop_off_location_id` (`fk_drop_off_location_id`),
  ADD KEY `fk_additional_charges_id` (`fk_additional_charges_id`),
  ADD KEY `fk_reservation_id` (`fk_reservation_id`);

--
-- Indexes for table `Pick_up_location`
--
ALTER TABLE `Pick_up_location`
  ADD PRIMARY KEY (`pick_up_location_id`);

--
-- Indexes for table `Reservation`
--
ALTER TABLE `Reservation`
  ADD PRIMARY KEY (`reservation_id`),
  ADD KEY `fk_driver_id` (`fk_driver_id`),
  ADD KEY `fk_car_id` (`fk_car_id`),
  ADD KEY `fk_insurance_id` (`fk_insurance_id`),
  ADD KEY `fk_pick_up_location_id` (`fk_pick_up_location_id`),
  ADD KEY `fk_drop_off_location_id` (`fk_drop_off_location_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `additional_charges`
--
ALTER TABLE `additional_charges`
  ADD CONSTRAINT `additional_charges_ibfk_1` FOREIGN KEY (`fk_driver_id`) REFERENCES `driver` (`driver_id`),
  ADD CONSTRAINT `additional_charges_ibfk_2` FOREIGN KEY (`fk_car_id`) REFERENCES `car` (`car_id`);

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`fk_driver_id`) REFERENCES `driver` (`driver_id`),
  ADD CONSTRAINT `invoice_ibfk_2` FOREIGN KEY (`fk_car_id`) REFERENCES `car` (`car_id`),
  ADD CONSTRAINT `invoice_ibfk_3` FOREIGN KEY (`fk_insurance_id`) REFERENCES `Insurance` (`insurance_id`),
  ADD CONSTRAINT `invoice_ibfk_4` FOREIGN KEY (`fk_pick_up_location_id`) REFERENCES `Pick_up_location` (`pick_up_location_id`),
  ADD CONSTRAINT `invoice_ibfk_5` FOREIGN KEY (`fk_drop_off_location_id`) REFERENCES `Drop_off_location` (`drop_off_location_id`),
  ADD CONSTRAINT `invoice_ibfk_6` FOREIGN KEY (`fk_additional_charges_id`) REFERENCES `additional_charges` (`additional_charges_id`),
  ADD CONSTRAINT `invoice_ibfk_7` FOREIGN KEY (`fk_reservation_id`) REFERENCES `Reservation` (`reservation_id`);

--
-- Constraints for table `Reservation`
--
ALTER TABLE `Reservation`
  ADD CONSTRAINT `Reservation_ibfk_1` FOREIGN KEY (`fk_driver_id`) REFERENCES `driver` (`driver_id`),
  ADD CONSTRAINT `Reservation_ibfk_2` FOREIGN KEY (`fk_car_id`) REFERENCES `car` (`car_id`),
  ADD CONSTRAINT `Reservation_ibfk_3` FOREIGN KEY (`fk_insurance_id`) REFERENCES `Insurance` (`insurance_id`),
  ADD CONSTRAINT `Reservation_ibfk_4` FOREIGN KEY (`fk_pick_up_location_id`) REFERENCES `Pick_up_location` (`pick_up_location_id`),
  ADD CONSTRAINT `Reservation_ibfk_5` FOREIGN KEY (`fk_drop_off_location_id`) REFERENCES `Drop_off_location` (`drop_off_location_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
