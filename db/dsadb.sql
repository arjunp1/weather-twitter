-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2021 at 03:05 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dsadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `woe_id` int(12) NOT NULL,
  `city_name` varchar(30) NOT NULL,
  `city_country` int(12) NOT NULL,
  `city_population` int(12) NOT NULL,
  `city_geolocation` int(12) NOT NULL,
  `city_currency` varchar(30) NOT NULL,
  `city_poi` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(3) NOT NULL,
  `country_name` varchar(30) NOT NULL,
  `country_continent` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `geolocation`
--

CREATE TABLE `geolocation` (
  `geolocation_id` int(12) NOT NULL,
  `latitude` decimal(15,10) NOT NULL,
  `longitude` decimal(15,10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `image_id` int(11) NOT NULL,
  `image_name` varchar(30) NOT NULL,
  `image_file` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` int(12) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(60) NOT NULL,
  `info` varchar(1000) NOT NULL,
  `clickme` varchar(50) NOT NULL,
  `wplink` varchar(100) NOT NULL,
  `lat` decimal(15,10) NOT NULL,
  `lng` decimal(15,10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `name`, `address`, `info`, `clickme`, `wplink`, `lat`, `lng`) VALUES
(1, 'Buckingham Palace', 'Westminster, London, EC3N 4AB', 'Buckingham Palace is the London residence and administrative headquarters of the monarch of the United Kingdom.', 'Click Me For More Information!', 'https://en.wikipedia.org/wiki/Buckingham_Palace', '51.5013660000', '-0.1418900000'),
(2, 'Tower of London', 'St Katherines & Wapping, London, EC3N 4AB', 'The Tower of London, officially Her Majesty\'s Royal Palace and Fortress of the Tower of London, is a historic castle on the north bank of the River Thames in central London.', 'Click Me For More Information!', 'https://en.wikipedia.org/wiki/Tower_of_London', '51.5081140000', '-0.0759490000'),
(3, 'London Eye', 'Riverside Building, County Hall, South Bank, London SE1 7PB', 'The London Eye, or the Millennium Wheel, is a cantilevered observation wheel on the South Bank of the River Thames in London. It is Europe\'s tallest cantilevered observation wheel, and is the most popular paid tourist attraction in the United Kingdom with over 3 million visitors annually.', 'Click Me For More Information!', 'https://en.wikipedia.org/wiki/London_Eye', '51.5034308469', '-0.1195966170'),
(4, 'Big Ben', 'Westminster, London, SW1A 0AA', 'Big Ben is the nickname for the Great Bell of the striking clock at the north end of the Palace of Westminster; the name is frequently extended to refer to both the clock and the clock tower.', 'Click Me For More Information!', 'https://en.wikipedia.org/wiki/Big_Ben', '51.5007290000', '-0.1246250000'),
(5, 'The National Gallery', 'Trafalgar Square, Charing Cross, London, WC2N 5DN', 'The National Gallery is an art museum in Trafalgar Square in the City of Westminster, in Central London. Founded in 1824, it houses a collection of over 2,300 paintings dating from the mid-13th century to 1900.', 'Click Me For More Information!', 'https://en.wikipedia.org/wiki/National_Gallery', '51.5089300000', '-0.1282990000'),
(6, 'The Shard', '32 London Bridge St, London SE1 9SG', 'The Shard, also referred to as the Shard of Glass, Shard London Bridge and formerly London Bridge Tower, is a 72-storey skyscraper, designed by the Italian architect Renzo Piano, in Southwark, London, that forms part of the Shard Quarter development.', 'Click Me For More Information!', 'https://en.wikipedia.org/wiki/The_Shard', '51.5045010000', '-0.0865000000'),
(8, 'Emirates Stadium', 'Hornsey Rd, London N7 7AJ', 'The Emirates Stadium (known as Ashburton Grove prior to sponsorship, and as Arsenal Stadium for UEFA competitions) is a football stadium in Highbury, England, and the home of Arsenal.', 'Click Me For More Information!', 'https://en.wikipedia.org/wiki/Emirates_Stadium', '51.5550000000', '-0.1084270000'),
(10, 'Odeon BFI IMAX', '1 Charlie Chaplin Walk, South Bank, Waterloo SE1 8XR', 'Movie theatre chain known for presenting 3D films on a giant screen, including blockbusters.', 'Click Me For More Information!', 'https://www.odeon.co.uk/cinemas/bfi-imax/', '51.5050820000', '-0.1134857800'),
(11, 'Royal Albert Hall', 'Kensington Gore, South Kensington, London SW7 2AP', 'The Royal Albert Hall is a concert hall on the northern edge of South Kensington, London. One of the United Kingdom\'s most treasured and distinctive buildings, it is held in trust for the nation and managed by a registered charity. It can seat 5,272.', 'Click Me For More Information!', 'https://www.royalalberthall.com/', '51.5010423000', '-0.1774196000'),
(12, 'Imperial College London', 'Exhibition Rd, South Kensington, London SW7 2BU', 'Imperial College London is a public research university in London. Imperial grew out of Prince Albert\'s vision of an area for culture, including the Royal Albert Hall, Imperial Institute, numerous museums, and the Royal Colleges that would go on to form the college.', 'Click Me For More Information!', 'https://www.imperial.ac.uk/', '51.4988746400', '-0.1749298200'),
(13, 'Heathrow Airport', 'Longford TW6', 'Heathrow Airport, originally called London Airport until 1966 and now known as London Heathrow, is a major international airport in London, England.', 'Click Me For More Information!', 'https://en.wikipedia.org/wiki/Heathrow_Airport', '51.4721860000', '-0.4553260000');

-- --------------------------------------------------------

--
-- Table structure for table `placesny`
--

CREATE TABLE `placesny` (
  `id` int(12) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `info` varchar(1000) NOT NULL,
  `clickme` varchar(50) NOT NULL,
  `wplink` varchar(100) NOT NULL,
  `lat` decimal(15,10) NOT NULL,
  `lng` decimal(15,10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `placesny`
--

INSERT INTO `placesny` (`id`, `name`, `address`, `info`, `clickme`, `wplink`, `lat`, `lng`) VALUES
(1, 'Statue of Liberty National Monument', 'New York, NY 10004, United States', 'The Statue of Liberty is a colossal neoclassical sculpture on Liberty Island in New York Harbor within New York City, in the United States.', 'Click Me For More Information!', 'https://en.wikipedia.org/wiki/Statue_of_Liberty', '40.6894200000', '-74.0445210000'),
(2, 'The Metropolitan Museum of Art', '1000 5th Ave, New York, NY 10028, United States', 'The Metropolitan Museum of Art of New York City, colloquially \"the Met\", is the largest art museum in the United States. With 6,479,548 visitors to its three locations in 2019, it was the fourth most visited art museum in the world.', 'Click Me For More Information!', 'https://en.wikipedia.org/wiki/Metropolitan_Museum_of_Art', '40.7796000000', '-73.9632600000'),
(3, 'Empire State Building', '20 W 34th St, New York, NY 10001, United States', 'The Empire State Building is a 102-story Art Deco skyscraper in Midtown Manhattan in New York City, United States. It was designed by Shreve, Lamb & Harmon and built from 1930 to 1931. Its name is derived from \"Empire State\", the nickname of the state of New York.', 'Click Me For More Information!', 'https://en.wikipedia.org/wiki/Empire_State_Building', '40.7485700000', '-73.9857000000'),
(4, 'Brooklyn Bridge', 'Brooklyn Bridge, New York, NY 10038, United States', 'The Brooklyn Bridge is a hybrid cable-stayed/suspension bridge in New York City, spanning the East River between the boroughs of Manhattan and Brooklyn. Opened on May 24, 1883, the Brooklyn Bridge was the first fixed crossing of the East River.', 'Click Me For More Information!', 'https://en.wikipedia.org/wiki/Brooklyn_Bridge', '40.7062400000', '-73.9969000000'),
(5, 'Twin Towers', '116 West St, New York, NY 10080, United States', 'The original World Trade Center was a large complex of seven buildings in the Financial District of Lower Manhattan, New York City, United States. It opened on April 4, 1973, and was destroyed in 2001 during the September 11 attacks.', 'Click Me For More Information!', 'https://en.wikipedia.org/wiki/World_Trade_Center_(1973%E2%80%932001)', '40.7119700000', '-74.0138800000'),
(6, 'Time Square', 'Manhattan, NY 10036, United States', 'Times Square is a major commercial intersection, tourist destination, entertainment center, and neighborhood in the Midtown Manhattan section of New York City, at the junction of Broadway and Seventh Avenue.', 'Click Me For More Information!', 'https://en.wikipedia.org/wiki/Times_Square', '40.7580900000', '-73.9855530000'),
(7, 'Columbia University', 'New York, NY 10027, United States', 'Columbia University is a private Ivy League research university in New York City. Established in 1754 on the grounds of Trinity Church in Manhattan, Columbia is the oldest institution of higher education in New York and the fifth-oldest institution of higher learning in the United States.', 'Click Me For More Information!', 'https://en.wikipedia.org/wiki/Columbia_University', '40.8075273000', '-73.9625000000'),
(8, 'Yankee Stadium', '1 E 161 St, The Bronx, NY 10451, United States', 'Yankee Stadium is a baseball park located in Concourse, Bronx, New York City. It is the home field for the New York Yankees of Major League Baseball and New York City FC of Major League Soccer, as well as being the host stadium for the annual Pinstripe Bowl game.', 'Click Me For More Information!', 'https://en.wikipedia.org/wiki/Yankee_Stadium', '40.8297887000', '-73.9262281000'),
(9, 'John F. Kennedy International Airport', 'Queens, NY 11430, United States', 'John F. Kennedy International Airport is an international airport in Queens, New York City, and one of the primary airports serving New York City.', 'Click Me For More Information!', 'https://en.wikipedia.org/wiki/John_F._Kennedy_International_Airport', '40.6413192200', '-73.7780532000'),
(10, 'Madison Square Garden', '4 Pennsylvania Plaza, New York, NY 10001, United States', 'Madison Square Garden, colloquially known as The Garden or by its initials MSG, is a multi-purpose indoor arena in New York City. Located in Midtown Manhattan between 7th and 8th Avenues from 31st to 33rd Streets, it is situated atop Pennsylvania Station.', 'Click Me For More Information!', 'https://en.wikipedia.org/wiki/Madison_Square_Garden', '40.7505930000', '-73.9934387000');

-- --------------------------------------------------------

--
-- Table structure for table `poi`
--

CREATE TABLE `poi` (
  `poi_id` int(12) NOT NULL,
  `poi_name` varchar(30) NOT NULL,
  `poi_type` varchar(30) NOT NULL,
  `poi_capacity` int(12) NOT NULL,
  `poi_geolocation` int(12) NOT NULL,
  `poi_images` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tweet`
--

CREATE TABLE `tweet` (
  `tweet_id` int(11) NOT NULL,
  `tweet_city_id` int(11) NOT NULL,
  `tweet_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`woe_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `geolocation`
--
ALTER TABLE `geolocation`
  ADD PRIMARY KEY (`geolocation_id`) USING BTREE;

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `placesny`
--
ALTER TABLE `placesny`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poi`
--
ALTER TABLE `poi`
  ADD PRIMARY KEY (`poi_id`);

--
-- Indexes for table `tweet`
--
ALTER TABLE `tweet`
  ADD PRIMARY KEY (`tweet_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `placesny`
--
ALTER TABLE `placesny`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
