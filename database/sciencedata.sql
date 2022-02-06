-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 06, 2022 at 12:04 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sciencedata`
--

-- --------------------------------------------------------

--
-- Table structure for table `periordictable`
--

CREATE TABLE `periordictable` (
  `Pid` int(10) NOT NULL,
  `AtomicWeight` float NOT NULL,
  `ElementName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Symbol` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MeltingPoint` float NOT NULL,
  `BoilingPoint` float NOT NULL,
  `Density` float NOT NULL,
  `Discover` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Groups` float NOT NULL,
  `ElectronConfiguration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `IonizationEnergy` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `periordictable`
--

INSERT INTO `periordictable` (`Pid`, `AtomicWeight`, `ElementName`, `Symbol`, `MeltingPoint`, `BoilingPoint`, `Density`, `Discover`, `Groups`, `ElectronConfiguration`, `IonizationEnergy`) VALUES
(1, 1.0079, 'Hydrogen', 'H', -259, -253, 0.09, '1776', 1, '1s<sup>1</sup>', 13.5984),
(2, 4.0026, 'Helium', 'He', -272, -269, 0.18, '1895', 18, '1s<sup>2</sup>', 24.5874),
(3, 6.941, 'Lithium', 'Li', 180, 1347, 0.53, '1817', 1, '[He]2s<sup>1</sup>', 5.3917),
(4, 9.0122, 'Beryllium', 'Be', 1278, 2970, 1.85, '1797', 2, '[He]2s<sup>2</sup>', 9.3227),
(5, 10.811, 'Boron', 'B', 2300, 2550, 2.34, '1808', 13, '[He]2s<sup>2</sup>2p<sup>1</sup>', 8.298),
(6, 12.0107, 'Carbon', 'C', 3500, 4827, 2.26, 'ancient', 14, '[He]2s<sup>2</sup>2p<sup>2</sup>', 11.2603),
(7, 14.0067, 'Nitrogen', 'N', -210, -196, 1.25, '1772', 15, '[He]2s<sup>2</sup>2p<sup>3</sup>', 14.5341),
(8, 15.9994, 'Oxygen', 'O', -218, -183, 1.43, '1774', 16, '[He]2s<sup>2</sup>2p<sup>4</sup>', 13.6181),
(9, 18.9984, 'Fluorine', 'F', -220, -188, 1.7, '1886', 17, '[He]2s<sup>2</sup>2p<sup>5</sup>', 17.4228),
(10, 20.1797, 'Neon', 'Ne', -249, -246, 0.9, '1898', 18, '[He]2s<sup>2</sup>2p<sup>6</sup>', 21.5645),
(11, 22.9897, 'Sodium', 'Na', 98, 883, 0.97, '1807', 1, '[Ne]3s<sup>1</sup>', 5.1391),
(12, 24.305, 'Magnesium', 'Mg', 639, 1090, 1.74, '1755', 2, '[Ne]3s<sup>2</sup>', 7.6462),
(13, 26.9815, 'Aluminum', 'Al', 660, 2467, 2.7, '1825', 13, '[Ne]3s<sup>2</sup>3p<sup>1</sup>', 5.9858),
(14, 28.0855, 'Silicon', 'Si', 1410, 2355, 2.33, '1824', 14, '[Ne]3s<sup>2</sup>3p<sup>2</sup>', 8.1517),
(15, 30.9738, 'Phosphorus', 'P', 44, 280, 1.82, '1669', 15, '[Ne]3s<sup>2</sup>3p<sup>3</sup>', 10.4867),
(16, 32.065, 'Sulfur', 'S', 113, 445, 2.07, 'ancient', 16, '[Ne]3s<sup>2</sup>3p<sup>4</sup>', 10.36),
(17, 35.453, 'Chlorine', 'Cl', -101, -35, 3.21, '1774', 17, '[Ne]3s<sup>2</sup>3p<sup>5</sup>', 12.9676),
(18, 39.948, 'Argon', 'Ar', -189, -186, 1.78, '1894', 18, '[Ne]3s<sup>2</sup>3p<sup>6</sup>', 15.7596),
(19, 39.0983, 'Potassium', 'K', 64, 774, 0.86, '1807', 1, '[Ar]4s<sup>1</sup>', 4.3407),
(20, 40.078, 'Calcium', 'Ca', 839, 1484, 1.55, '1808', 2, '[Ar]4s<sup>2</sup>', 6.1132),
(21, 44.9559, 'Scandium', 'Sc', 1539, 2832, 2.99, '1879', 3, '[Ar]3d<sup>1</sup>4s<sup>2</sup>', 6.5615),
(22, 47.867, 'Titanium', 'Ti', 1660, 3287, 4.54, '1791', 4, '[Ar]3d<sup>2</sup>4s<sup>2</sup>', 6.8281),
(23, 50.9415, 'Vanadium', 'V', 1890, 3380, 6.11, '1830', 5, '[Ar]3d<sup>3</sup>4s<sup>2</sup>', 6.7462),
(24, 51.9961, 'Chromium', 'Cr', 1857, 2672, 7.19, '1797', 6, '[Ar]3d<sup>5</sup>4s<sup>1</sup>', 6.7665),
(25, 54.938, 'Manganese', 'Mn', 1245, 1962, 7.43, '1774', 7, '[Ar]3d<sup>5</sup>4s<sup>2</sup>', 7.434),
(26, 55.845, 'Iron', 'Fe', 1535, 2750, 7.87, 'ancient', 8, '[Ar]3d<sup>6</sup>4s<sup>2</sup>', 7.9024),
(27, 58.9332, 'Cobalt', 'Co', 1495, 2870, 8.9, '1735', 9, '[Ar]3d<sup>7</sup>4s<sup>2</sup>', 7.881),
(28, 58.6934, 'Nickel', 'Ni', 1453, 2732, 8.9, '1751', 10, '[Ar]3d<sup>8</sup>4s<sup>2</sup>', 7.6398),
(29, 63.546, 'Copper', 'Cu', 1083, 2567, 8.96, 'ancient', 11, '[Ar]3d<sup>10</sup>4s<sup>1</sup>', 7.7264),
(30, 65.39, 'Zinc', 'Zn', 420, 907, 7.13, 'ancient', 12, '[Ar]3d<sup>10</sup>4s<sup>2</sup>', 9.3942),
(31, 69.723, 'Gallium', 'Ga', 30, 2403, 5.91, '1875', 13, '[Ar]3d<sup>10</sup>4s<sup>2</sup>4p<sup>1</sup>', 5.9993),
(32, 72.64, 'Germanium', 'Ge', 937, 2830, 5.32, '1886', 14, '[Ar]3d<sup>10</sup>4s<sup>2</sup>4p<sup>2</sup>', 7.8994),
(33, 74.9216, 'Arsenic', 'As', 81, 613, 5.72, 'ancient', 15, '[Ar]3d<sup>10</sup>4s<sup>2</sup>4p<sup>3</sup>', 9.7886),
(34, 78.96, 'Selenium', 'Se', 217, 685, 4.79, '1817', 16, '[Ar]3d<sup>10</sup>4s<sup>2</sup>4p<sup>4</sup>', 9.7524),
(35, 79.904, 'Bromine', 'Br', -7, 59, 3.12, '1826', 17, '[Ar]3d<sup>10</sup>4s<sup>2</sup>4p<sup>5</sup>', 11.8138),
(36, 83.8, 'Krypton', 'Kr', -157, -153, 3.75, '1898', 18, '[Ar]3d<sup>10</sup>4s<sup>2</sup>4p<sup>6</sup>', 13.9996),
(37, 85.4678, 'Rubidium', 'Rb', 39, 688, 1.63, '1861', 1, '[Kr]5s<sup>1</sup>', 4.1771),
(38, 87.62, 'Strontium', 'Sr', 769, 1384, 2.54, '1790', 2, '[Kr]5s<sup>2</sup>', 5.6949),
(39, 88.9059, 'Yttrium', 'Y', 1523, 3337, 4.47, '1794', 3, '[Kr]4d<sup>1</sup>5s<sup>2</sup>', 6.2173),
(40, 91.224, 'Zirconium', 'Zr', 1852, 4377, 6.51, '1789', 4, '[Kr]4d<sup>2</sup>5s<sup>2</sup>', 6.6339),
(41, 92.9064, 'Niobium', 'Nb', 2468, 4927, 8.57, '1801', 5, '[Kr]4d<sup>4</sup>5s<sup>1</sup>', 6.7589),
(42, 95.94, 'Molybdenum', 'Mo', 2617, 4612, 10.22, '1781', 6, '[Kr]4d<sup>5</sup>5s<sup>1</sup>', 7.0924),
(43, 98, 'Technetium', 'Tc', 2200, 4877, 11.5, '1937', 7, '[Kr]4d<sup>5</sup>5s<sup>2</sup>', 7.28),
(44, 101.07, 'Ruthenium', 'Ru', 2250, 3900, 12.37, '1844', 8, '[Kr]4d<sup>7</sup>5s<sup>1</sup>', 7.3605),
(45, 102.906, 'Rhodium', 'Rh', 1966, 3727, 12.41, '1803', 9, '[Kr]4d<sup>8</sup>5s<sup>1</sup>', 7.4589),
(46, 106.42, 'Palladium', 'Pd', 1552, 2927, 12.02, '1803', 10, '[Kr]4d<sup>10</sup>', 8.3369),
(47, 107.868, 'Silver', 'Ag', 962, 2212, 10.5, 'ancient', 11, '[Kr]4d<sup>10</sup>5s<sup>1</sup>', 7.5762),
(48, 112.411, 'Cadmium', 'Cd', 321, 765, 8.65, '1817', 12, '[Kr]4d<sup>10</sup>5s<sup>2</sup>', 8.9938),
(49, 114.818, 'Indium', 'In', 157, 2000, 7.31, '1863', 13, '[Kr]4d<sup>10</sup>5s<sup>2</sup>5p<sup>1</sup>', 5.7864),
(50, 118.71, 'Tin', 'Sn', 232, 2270, 7.31, 'ancient', 14, '[Kr]4d<sup>10</sup>5s<sup>2</sup>5p<sup>2</sup>', 7.3439),
(51, 121.76, 'Antimony', 'Sb', 630, 1750, 6.68, 'ancient', 15, '[Kr]4d<sup>10</sup>5s<sup>2</sup>5p<sup>3</sup>', 8.6084),
(52, 127.6, 'Tellurium', 'Te', 449, 990, 6.24, '1783', 16, '[Kr]4d<sup>10</sup>5s<sup>2</sup>5p<sup>4</sup>', 9.0096),
(53, 126.905, 'Iodine', 'I', 114, 184, 4.93, '1811', 17, '[Kr]4d<sup>10</sup>5s<sup>2</sup>5p<sup>5</sup>', 10.4513),
(54, 131.293, 'Xenon', 'Xe', -112, -108, 5.9, '1898', 18, '[Kr]4d<sup>10</sup>5s<sup>2</sup>5p<sup>6</sup>', 12.1298),
(55, 132.906, 'Cesium', 'Cs', 29, 678, 1.87, '1860', 1, '[Xe]6s<sup>1</sup>', 3.8939),
(56, 137.327, 'Barium', 'Ba', 725, 1140, 3.59, '1808', 2, '[Xe]6s<sup>2</sup>', 5.2117),
(57, 138.906, 'Lanthanum', 'La', 920, 3469, 6.15, '1839', 3, '[Xe]5d<sup>1</sup>6s<sup>2</sup>', 5.5769),
(58, 140.116, 'Cerium', 'Ce', 795, 3257, 6.77, '1803', 101, '[Xe]4f<sup>1</sup>5d<sup>1</sup>6s<sup>2</sup>', 5.5387),
(59, 140.908, 'Praseodymium', 'Pr', 935, 3127, 6.77, '1885', 101, '[Xe]4f<sup>3</sup>6s<sup>2</sup>', 5.473),
(60, 144.24, 'Neodymium', 'Nd', 1010, 3127, 7.01, '1885', 101, '[Xe]4f<sup>4</sup>6s<sup>2</sup>', 5.525),
(61, 145, 'Promethium', 'Pm', 1100, 3000, 7.3, '1945', 101, '[Xe]4f<sup>5</sup>6s<sup>2</sup>', 5.582),
(62, 150.36, 'Samarium', 'Sm', 1072, 1900, 7.52, '1879', 101, '[Xe]4f<sup>6</sup>6s<sup>2</sup>', 5.6437),
(63, 151.964, 'Europium', 'Eu', 822, 1597, 5.24, '1901', 101, '[Xe]4f<sup>7</sup>6s<sup>2</sup>', 5.6704),
(64, 157.25, 'Gadolinium', 'Gd', 1311, 3233, 7.9, '1880', 101, '[Xe]4f<sup>7</sup>5d<sup>1</sup>6s<sup>2</sup>', 6.1501),
(65, 158.925, 'Terbium', 'Tb', 1360, 3041, 8.23, '1843', 101, '[Xe]4f<sup>9</sup>6s<sup>2</sup>', 5.8638),
(66, 162.5, 'Dysprosium', 'Dy', 1412, 2562, 8.55, '1886', 101, '[Xe]4f<sup>10</sup>6s<sup>2</sup>', 5.9389),
(67, 164.93, 'Holmium', 'Ho', 1470, 2720, 8.8, '1867', 101, '[Xe]4f<sup>11</sup>6s<sup>2</sup>', 6.0215),
(68, 167.259, 'Erbium', 'Er', 1522, 2510, 9.07, '1842', 101, '[Xe]4f<sup>12</sup>6s<sup>2</sup>', 6.1077),
(69, 168.934, 'Thulium', 'Tm', 1545, 1727, 9.32, '1879', 101, '[Xe]4f<sup>13</sup>6s<sup>2</sup>', 6.1843),
(70, 173.04, 'Ytterbium', 'Yb', 824, 1466, 6.9, '1878', 101, '[Xe]4f<sup>14</sup>6s<sup>2</sup>', 6.2542),
(71, 174.967, 'Lutetium', 'Lu', 1656, 3315, 9.84, '1907', 101, '[Xe]4f<sup>14</sup>5d<sup>1</sup>6s<sup>2</sup>', 5.4259),
(72, 178.49, 'Hafnium', 'Hf', 2150, 5400, 13.31, '1923', 4, '[Xe]4f<sup>14</sup>5d<sup>2</sup>6s<sup>2</sup>', 6.8251),
(73, 180.948, 'Tantalum', 'Ta', 2996, 5425, 16.65, '1802', 5, '[Xe]4f<sup>14</sup>5d<sup>3</sup>6s<sup>2</sup>', 7.5496),
(74, 183.84, 'Tungsten', 'W', 3410, 5660, 19.35, '1783', 6, '[Xe]4f<sup>14</sup>5d<sup>4</sup>6s<sup>2</sup>', 7.864),
(75, 186.207, 'Rhenium', 'Re', 3180, 5627, 21.04, '1925', 7, '[Xe]4f<sup>14</sup>5d<sup>5</sup>6s<sup>2</sup>', 7.8335),
(76, 190.23, 'Osmium', 'Os', 3045, 5027, 22.6, '1803', 8, '[Xe]4f<sup>14</sup>5d<sup>6</sup>6s<sup>2</sup>', 8.4382),
(77, 192.217, 'Iridium', 'Ir', 2410, 4527, 22.4, '1803', 9, '[Xe]4f<sup>14</sup>5d<sup>7</sup>6s<sup>2</sup>', 8.967),
(78, 195.078, 'Platinum', 'Pt', 1772, 3827, 21.45, '1735', 10, '[Xe]4f<sup>14</sup>5d<sup>9</sup>6s<sup>1</sup>', 8.9587),
(79, 196.967, 'Gold', 'Au', 1064, 2807, 19.32, 'ancient', 11, '[Xe]4f<sup>14</sup>5d<sup>10</sup>6s<sup>1</sup>', 9.2255),
(80, 200.59, 'Mercury', 'Hg', -39, 357, 13.55, 'ancient', 12, '[Xe]4f<sup>14</sup>5d<sup>10</sup>6s<sup>2</sup>', 10.4375),
(81, 204.383, 'Thallium', 'Tl', 303, 1457, 11.85, '1861', 13, '[Xe]4f<sup>14</sup>5d<sup>10</sup>6s<sup>2</sup>6p<sup>1</sup>', 6.1082),
(82, 207.2, 'Lead', 'Pb', 327, 1740, 11.35, 'ancient', 14, '[Xe]4f<sup>14</sup>5d<sup>10</sup>6s<sup>2</sup>6p<sup>2</sup>', 7.4167),
(83, 208.98, 'Bismuth', 'Bi', 271, 1560, 9.75, 'ancient', 15, '[Xe]4f<sup>14</sup>5d<sup>10</sup>6s<sup>2</sup>6p<sup>3</sup>', 7.2856),
(84, 209, 'Polonium', 'Po', 254, 962, 9.3, '1898', 16, '[Xe]4f<sup>14</sup>5d<sup>10</sup>6s<sup>2</sup>6p<sup>4</sup>', 8.417),
(85, 210, 'Astatine', 'At', 302, 337, 0, '1940', 17, '[Xe]4f<sup>14</sup>5d<sup>10</sup>6s<sup>2</sup>6p<sup>5</sup>', 9.3),
(86, 222, 'Radon', 'Rn', -71, -62, 9.73, '1900', 18, '[Xe]4f<sup>14</sup>5d<sup>10</sup>6s<sup>2</sup>6p<sup>6</sup>', 10.7485),
(87, 223, 'Francium', 'Fr', 27, 677, 0, '1939', 1, '[Rn]7s<sup>1</sup>', 4.0727),
(88, 226, 'Radium', 'Ra', 700, 1737, 5.5, '1898', 2, '[Rn]7s<sup>2</sup>', 5.2784),
(89, 227, 'Actinium', 'Ac', 1050, 3200, 10.07, '1899', 3, '[Rn]6d<sup>1</sup>7s<sup>2</sup>', 5.17),
(90, 232.038, 'Thorium', 'Th', 1750, 4790, 11.72, '1829', 102, '[Rn]6d<sup>2</sup>7s<sup>2</sup>', 6.3067),
(91, 231.036, 'Protactinium', 'Pa', 1568, 0, 15.4, '1913', 102, '[Rn]5f<sup>2</sup>6d<sup>1</sup>7s<sup>2</sup>', 5.89),
(92, 238.029, 'Uranium', 'U', 1132, 3818, 18.95, '1789', 102, '[Rn]5f<sup>3</sup>6d<sup>1</sup>7s<sup>2</sup>', 6.1941),
(93, 237, 'Neptunium', 'Np', 640, 3902, 20.2, '1940', 102, '[Rn]5f<sup>4</sup>6d<sup>1</sup>7s<sup>2</sup>', 6.2657),
(94, 244, 'Plutonium', 'Pu', 640, 3235, 19.84, '1940', 102, '[Rn]5f<sup>6</sup>7s<sup>2</sup>', 6.0262),
(95, 243, 'Americium', 'Am', 994, 2607, 13.67, '1944', 102, '[Rn]5f<sup>7</sup>7s<sup>2</sup>', 5.9738),
(96, 247, 'Curium', 'Cm', 1340, 0, 13.5, '1944', 102, '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f7 6d1', 5.9915),
(97, 247, 'Berkelium', 'Bk', 986, 0, 14.78, '1949', 102, '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f9', 6.1979),
(98, 251, 'Californium', 'Cf', 900, 0, 15.1, '1950', 102, '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f10', 6.2817),
(99, 252, 'Einsteinium', 'Es', 860, 0, 0, '1952', 102, '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f11', 6.42),
(100, 257, 'Fermium', 'Fm', 1527, 0, 0, '1952', 102, '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f12', 6.5),
(101, 258, 'Mendelevium', 'Md', 0, 0, 0, '1955', 102, '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f13', 6.58),
(102, 259, 'Nobelium', 'No', 827, 0, 0, '1958', 102, '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f14', 6.65),
(103, 262, 'Lawrencium', 'Lr', 1627, 0, 0, '1961', 102, '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f14 7p1', 4.9),
(104, 261, 'Rutherfordium', 'Rf', 0, 0, 0, '1964', 4, '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f14 6d2', 0),
(105, 262, 'Dubnium', 'Db', 0, 0, 0, '1967', 5, '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f14 6d3', 0),
(106, 266, 'Seaborgium', 'Sg', 0, 0, 0, '1974', 6, '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f14 6d4', 0),
(107, 264, 'Bohrium', 'Bh', 0, 0, 0, '1981', 7, '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f14 6d5', 0),
(108, 277, 'Hassium', 'Hs', 0, 0, 0, '1984', 8, '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f14 6d6', 0),
(109, 268, 'Meitnerium', 'Mt', 0, 0, 0, '1982', 9, '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f14 6d7', 0),
(110, 281, 'Darmstadtium', 'Ds', 0, 0, 0, '1994', 10, '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f14 6d8', 0),
(111, 281, 'Roentgenium', 'Rg', 0, 0, 0, '1994', 11, '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f14 6d9', 0),
(112, 285, 'Copernicium', 'Cn', 0, 0, 0, '1996', 12, '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f14 6d10', 0),
(113, 286, 'Nihonium', 'Nh', 0, 0, 0, '2004', 13, '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f14 6d10 7p1', 0),
(114, 289, 'Flerovium', 'Fl', 0, 0, 0, '1998', 15, '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f14 6d10 7p2', 0),
(115, 289, 'Moscovium', 'Mc', 0, 0, 0, '2004', 14, '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f14 6d10 7p3', 0),
(116, 293, 'Livermorium', 'Lv', 0, 0, 0, '2000', 16, '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f14 6d10 7p4', 0),
(117, 294, 'Tennessine', 'Ts', 0, 0, 0, '2010', 17, '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f14 6d10 7p5', 0),
(118, 294, 'Oganesson', 'Og', 0, 0, 0, '2006', 18, '1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d10 5p6 6s2 4f14 5d10 6p6 7s2 5f14 6d10 7p6', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
