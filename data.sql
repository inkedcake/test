SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jcarrier`
--

-- --------------------------------------------------------

--
-- Table structure for table `carriers`
--

CREATE TABLE `carriers` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `phone` varchar(32) NOT NULL,
  `zip1` int(11) NOT NULL,
  `zip2` int(11) NOT NULL,
  `zip3` int(11) NOT NULL,
  `zip4` int(11) NOT NULL,
  `zip5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `carriers`
--

INSERT INTO `carriers` (`id`, `name`, `phone`, `zip1`, `zip2`, `zip3`, `zip4`, `zip5`) VALUES
(1, 'Nittsu', '03-4452-1298', 120, 121, 123, 116, 174),
(2, 'Sagawa', '03-3366-1967', 123, 143, 174, 175, 132),
(3, 'Yamato', '03-5628-1111', 174, 175, 132, 133, 134),
(4, 'ABC Cargo', '03-4176-8954', 133, 134, 143, 144, 145),
(5, 'Seino', '03-2212-8865', 144, 145, 146, 124, 125),
(6, 'Moving 123', '03-6732-7721', 146, 124, 125, 114, 115),
(7, 'Home Logi', '03-2217-3277', 114, 115, 135, 136, 140),
(8, 'Rocky', '03-5522-6743', 135, 136, 140, 141, 142),
(9, 'Camel', '03-3351-2121', 141, 142, 135, 150, 151),
(10, 'Super Cargo', '03-4312-7789', 135, 150, 151, 160, 161),
(11, 'Japan Logistics', '03-5127-9876', 151, 160, 161, 162, 163),
(12, 'Zoom Zoom', '03-4312-6315', 162, 163, 166, 167, 168),
(13, 'Quick Cargo', '03-3325-8966', 166, 167, 168, 130, 131),
(14, 'Gust', '03-6322-2468', 130, 131, 154, 156, 157),
(15, 'Red Arrow', '03-4633-8655', 158, 110, 157, 158, 111),
(16, 'Trans Japan', '03-2335-6455', 158, 111, 104, 103, 102),
(17, 'Attre', '03-3677-4321', 104, 103, 102, 101, 100),
(18, 'Golden Track', '03-5812-9969', 120, 121, 123, 116, 174),
(19, 'YCAT', '03-4433-7866', 144, 145, 146, 124, 125),
(20, 'Sonic Cargo', '03-3811-3297', 162, 163, 166, 167, 168),
(21, 'XYZ Express', '03-6661-2234', 158, 111, 104, 103, 102);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carriers`
--
ALTER TABLE `carriers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carriers`
--
ALTER TABLE `carriers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
