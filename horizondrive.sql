-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2023 at 08:48 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `horizondrive`
--

-- --------------------------------------------------------

--
-- Table structure for table `bought`
--

CREATE TABLE `bought` (
  `Order_ID` char(10) NOT NULL,
  `CLI_ID` char(5) NOT NULL,
  `PROD_ID` char(5) NOT NULL,
  `Quantity` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `CLI_ID` char(5) NOT NULL,
  `PROD_ID` char(5) NOT NULL,
  `Quantity` int(11) DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `C_ID` char(5) NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`C_ID`, `Fname`, `Lname`, `Username`, `Password`) VALUES
('11111', 'Jest', 'Lest', 'user', 'pass'),
('', '', '', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `E_ID` char(5) NOT NULL,
  `BDATE` date DEFAULT NULL,
  `SEX` char(1) DEFAULT NULL,
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`E_ID`, `BDATE`, `SEX`, `Fname`, `Lname`, `Username`, `Password`) VALUES
('72236', NULL, NULL, 'Let', 'Tent', 'work', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `P_ID` char(5) NOT NULL,
  `C_ID` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `P_ID` char(5) NOT NULL DEFAULT '09999',
  `Price` float DEFAULT 0,
  `Quantity` int(11) DEFAULT NULL,
  `Brand` varchar(20) DEFAULT NULL,
  `Model` varchar(20) NOT NULL,
  `Year` year(4) NOT NULL,
  `CarDesc` text NOT NULL,
  `CarSpec` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`P_ID`, `Price`, `Quantity`, `Brand`, `Model`, `Year`, `CarDesc`, `CarSpec`) VALUES
('2151', 22, 1, 'Mazda', 'RX7', '0000', 'adadsdasdasd', 'adasdadadsa'),
('01', 39900, 1, 'Mazda', 'RX7', '1999', 'Iconic sports car renowned for its sleek design and rotary engine. Its lightweight chassis and balanced handling make it a favorite among driving enthusiasts. The twin-turbocharged rotary engine delivers a unique and thrilling driving experience.', 'Engine: 1.3L twin-turbocharged rotary\r\nHorsepower: 276 hp\r\nTransmission: 5-speed manual\r\n0-60 mph: Approximately 4.9 seconds\r\nTop Speed: Limited to 112 mph (electronically)'),
('02', 26830, 1, 'Mazda', 'MX-5 Miata', '2023', 'Classic roadster that embodies the spirit of driving enthusiasts. With its sleek design and responsive handling, it delivers an exhilarating open-air driving experience.', 'Engine: 2.0L 4-cylinder\r\nHorsepower: 181 hp\r\nTop Speed: 135 mph\r\n0-60 mph: 6.5 seconds'),
('03', 21500, 1, 'Mazda', '3', '2023', 'Sedan or hatchback, combines style and substance. With a premium interior, advanced safety features, and efficient performance, it sets a new standard in compact cars.', 'Engine: 2.5L 4-cylinder\r\nHorsepower: 186 hp\r\nFuel Economy: 28/36 mpg (city/highway)\r\nInfotainment: 8.8-inch touchscreen'),
('04', 26370, 1, 'Mazda', 'CX-5', '2023', 'Stylish compact SUV, offers a blend of comfort and versatility. Its upscale interior, responsive handling, and advanced safety tech make it a standout in its class.', 'Engine: 2.5L 4-cylinder\r\nHorsepower: 187 hp\r\nCargo Space: 30.9 cubic feet (rear seats up)\r\ni-Activsense® safety features'),
('05', 33960, 1, 'Mazda', 'CX-9', '2023', 'Three-row SUV, combines luxury and practicality. With a spacious interior, advanced safety features, and a powerful engine, it caters to families and adventure seekers.', 'Engine: 2.5L turbocharged 4-cylinder\r\nHorsepower: 250 hp\r\nSeating Capacity: 7 passengers\r\ni-ACTIV AWD® system'),
('06', 78560, 1, 'Toyota', 'Supra', '1994', 'High-performance sports car known for its sleek design and powerful engine. Featured in the franchise, this model became an instant classic among car enthusiasts.', 'Engine: 3.0L Twin-Turbocharged Inline-6\r\nHorsepower: 320 hp\r\nTransmission: 6-speed manual\r\n0-60 mph: Approximately 4.6 seconds\r\nTop Speed: 155 mph (electronically limited)'),
('07', 115760, 1, 'Toyota', 'Supra Mk IV', '1998', 'Referred to as the Mk IV, is a legendary sports car celebrated for its speed and agility. It gained prominence in the Fast and Furious series for its impressive performance.', 'Engine: 3.0L Twin-Scroll Single Turbo Inline-6\r\nHorsepower: 335 hp\r\nTransmission: 8-speed automatic or 6-speed manual\r\n0-60 mph: Approximately 4.1 seconds'),
('08', 89560, 1, 'Toyota', 'Supra A80', '1995', 'Timeless classic, recognized for its striking appearance and exceptional handling. It made a significant impact in the Fast and Furious films, showcasing its speed and versatility.', 'Engine: 3.0L Turbocharged Inline-6\r\nHorsepower: 230 hp\r\nTransmission: 5-speed manual or 4-speed automatic\r\n0-60 mph: Approximately 6.9 seconds\r\nTop Speed: 140 mph'),
('09', 50000, 1, 'Toyota', 'Supra GR', '2022', 'Continues the legacy of its predecessors with a blend of contemporary design and cutting-edge performance. It represents the evolution of the Supra line, offering a thrilling driving experience.', 'Engine: 2.4L Flat-4\r\nHorsepower: 228 hp\r\nTransmission: 6-speed manual or automatic\r\n0-60 mph: Approximately 6.2 seconds\r\nTop Speed: 143 mph'),
('10', 28000, 1, 'Toyota', 'GT86', '2013', 'Known as the Scion FR-S, is a compact sports car designed for enthusiasts seeking a balance of style and performance. It appeared in the Fast and Furious series, showcasing its agile handling and responsiveness.', 'Engine: 2.8L Turbocharged Inline-6\r\nHorsepower: 173 hp\r\nTransmission: 5-speed manual or 4-speed automatic\r\n0-60 mph: Approximately 8.4 seconds\r\nTop Speed: 134 mph'),
('11', 35570, 1, 'Honda', 'S2000 AP1', '2001', 'Driven by Suki in 2 Fast 2 Furious, is a convertible roadster known for its high-revving engine and agile handling.', 'Engine: 2.0L DOHC VTEC\r\nHorsepower: 240 hp\r\nTransmission: 6-speed manual\r\n0-60 mph: Approximately 5.8 seconds\r\nTop Speed: 149 mph'),
('12', 94250, 1, 'Honda', 'NSX', '2001', 'Featured in the original Fast and Furious, is a mid-engine sports car celebrated for its cutting-edge design and performance.', 'Engine: 3.2L DOHC V6\r\nHorsepower: 290 hp\r\nTransmission: 6-speed manual\r\n0-60 mph: Approximately 5.7 seconds\r\nTop Speed: 168 mph'),
('13', 15340, 1, 'Honda', 'Civic EK', '1995', 'Favorite in the tuning scene, is prominently featured in the franchise for its street-racing style and modifiability.', 'Engine: Various engine options (typically 1.6L to 2.0L)\r\nHorsepower: Customizable (depending on modifications)\r\nTransmission: Customizable (commonly manual)\r\n0-60 mph: Variable (depends on modifications)\r\nTop Speed: Variable (depends on modifications)'),
('14', 45230, 1, 'Honda', 'S2000 AP2', '2009', 'This model maintains the roadster\'s iconic design and performance capabilities.', 'Engine: 2.2L DOHC VTEC\r\nHorsepower: 237 hp\r\nTransmission: 6-speed manual\r\n0-60 mph: Approximately 5.4 seconds\r\nTop Speed: 145 mph'),
('15', 35860, 1, 'Honda', 'Integra Type R', '1998', 'Recognized for its role in the first Fast and Furious film, the Integra Type R is a lightweight, high-performance variant of the Integra.', 'Engine: 1.8L DOHC VTEC\r\nHorsepower: 195 hp\r\nTransmission: 5-speed manual\r\n0-60 mph: Approximately 6.7 seconds\r\nTop Speed: 145 mph'),
('16', 26740, 1, 'Mitsubishi', '3000GT VR-4', '1999', 'High-performance sports car with a sleek design and advanced technology. Known for its twin-turbocharged V6 engine and all-wheel-drive system, it\'s a collector\'s gem.', 'Engine: 3.0L twin-turbocharged V6\r\nHorsepower: 300 hp\r\nTransmission: 6-speed manual\r\n0-60 mph: Approximately 5.5 seconds\r\nTop Speed: 155 mph (electronically limited)'),
('17', 25760, 1, 'Mitsubishi', 'Evo VI', '2000', 'This special edition Evo VI pays homage to rally legend Tommi Makinen. With its aggressive styling and rally-bred performance, it\'s a sought-after model among enthusiasts.', 'Engine: 2.0L turbocharged inline-4\r\nHorsepower: 276 hp\r\nTransmission: 5-speed manual\r\n0-60 mph: Approximately 4.5 seconds\r\nTop Speed: 155 mph (electronically limited)'),
('18', 15780, 1, 'Mitsubishi', 'Starion ESI-R', '1988', 'The Starion ESI-R is a classic \'80s sports coupe, known for its distinctive boxy styling. With rear-wheel drive and a turbocharged engine, it\'s a symbol of the era.', 'Engine: 2.6L turbocharged inline-4\r\nHorsepower: 188 hp\r\nTransmission: 5-speed manual\r\n0-60 mph: Approximately 8.1 seconds\r\nTop Speed: 130 mph'),
('19', 15670, 1, 'Mitsubishi', 'Eclipse GSX', '1995', 'A staple of the \'90s tuner scene, the Eclipse GSX, with its turbocharged engine and AWD, holds a special place in the hearts of car enthusiasts.', 'Engine: 2.0L turbocharged inline-4\r\nHorsepower: 190 hp\r\nTransmission: 5-speed manual\r\n0-60 mph: Approximately 6.5 seconds\r\nTop Speed: 140 mph'),
('20', 12980, 1, 'Mitsubishi', 'Galant VR-4', '1991', 'The Galant VR-4, a performance-oriented sedan, features AWD and a turbocharged engine, offering a unique blend of practicality and speed.', 'Engine: 2.0L turbocharged inline-4\r\nHorsepower: 190 hp\r\nTransmission: 5-speed manual\r\n0-60 mph: Approximately 7.4 seconds\r\nTop Speed: 143 mph'),
('21', 24780, 1, 'Nissan', '300ZX Twin Turbo', '1996', 'The 300ZX Twin Turbo, with its distinctive styling and powerful engine, represents the pinnacle of Nissan\'s \'90s sports car lineup.', 'Engine: 3.0L twin-turbocharged V6\r\nHorsepower: 300 hp\r\nTransmission: 5-speed manual\r\n0-60 mph: Approximately 5.5 seconds\r\nTop Speed: 155 mph (electronically limited)'),
('22', 32780, 1, 'Nissan', 'Skyline GT-R R32', '1991', 'The iconic R32 GT-R, known for its dominance on the track, is a symbol of Nissan\'s engineering prowess and motorsport heritage.', 'Engine: 2.6L twin-turbocharged inline-6\r\nHorsepower: 276 hp\r\nTransmission: 5-speed manual\r\n0-60 mph: Approximately 4.7 seconds\r\nTop Speed: 155 mph (electronically limited)'),
('23', 36890, 1, 'Nissan', 'Fairlady Z S30', '1973', 'The Fairlady Z (S30) from the early \'70s is a classic sports car that embodies Nissan\'s commitment to performance and design.', 'Engine: 2.4L inline-6\r\nHorsepower: Varies by model (around 150-200 hp)\r\nTransmission: 4-speed manual\r\n0-60 mph: Approximately 7.8 seconds\r\nTop Speed: 125 mph'),
('24', 17860, 1, 'Nissan', 'Silvia K\'s S13', '1991', 'The Silvia K\'s, a popular drift platform, is celebrated for its lightweight chassis and responsive handling.', 'Engine: 2.0L turbocharged inline-4\r\nHorsepower: 187 hp\r\nTransmission: 5-speed manual\r\n0-60 mph: Approximately 7.1 seconds\r\nTop Speed: 140 mph'),
('25', 17560, 1, 'Nissan', 'Pulsar GTI-R', '1990', 'The Pulsar GTI-R, a compact hatchback with AWD and turbo power, is a hidden gem among Nissan\'s performance offerings.', 'Engine: 2.0L turbocharged inline-4\r\nHorsepower: 227 hp\r\nTransmission: 5-speed manual\r\n0-60 mph: Approximately 5.4 seconds\r\nTop Speed: 144 mph');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bought`
--
ALTER TABLE `bought`
  ADD PRIMARY KEY (`Order_ID`,`PROD_ID`),
  ADD KEY `CLI_ID` (`CLI_ID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`CLI_ID`,`PROD_ID`),
  ADD KEY `PROD_ID` (`PROD_ID`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`C_ID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`E_ID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
  ADD KEY `P_ID` (`P_ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`P_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
