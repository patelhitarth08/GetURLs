-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql109.byetcluster.com
-- Generation Time: Aug 20, 2022 at 01:12 PM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_32422935_geturl`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `text` varchar(500) NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`name`, `email`, `text`, `id`) VALUES
('Hitarth Patel', 'patelhitarth08@gmail.com', 'Hello Hitarth', 1),
('Hitarth Patel', 'patelhitarth08@gmail.com', 'Hello Hitarth', 2);

-- --------------------------------------------------------

--
-- Table structure for table `urltable`
--

CREATE TABLE `urltable` (
  `id` int(255) NOT NULL,
  `longurl` varchar(256) NOT NULL,
  `shorturl` varchar(256) NOT NULL,
  `code` mediumtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `urltable`
--

INSERT INTO `urltable` (`id`, `longurl`, `shorturl`, `code`) VALUES
(0, 'https://youtu.be/bvOYfDpk940', 'geturls.epizy.com/hp.php?code=000000', '000000'),
(0, 'https://youtu.be/KyMiqaA0ijM', 'geturls.epizy.com/hp.php?code=000001', '000001'),
(0, 'https://images-eu.ssl-images-amazon.com/images/G/31/img22/Electronics/Clearance/Clearance_store_Desktop_CC_1x._SY304_CB628315133_.jpg', 'geturls.epizy.com/hp.php?code=000002', '000002'),
(0, 'https://youtu.be/5wRPin4oxCo', 'geturls.epizy.com/hp.php?code=000003', '000003'),
(0, 'https://www.amazon.in/b/ref=gw_perc_rec_rewards?node=18468102031&pf_rd_r=ZB2RS6HN8XHQSAPSS9F2&pf_rd_p=14506b61-0fc7-40da-b692-50e8a125eb07&pd_rd_r=daefa9b4-b53e-412f-a811-cc8623f69e59&pd_rd_w=ZMdoH&pd_rd_wg=rT4Sr&ref_=pd_gw_unk', 'geturls.epizy.com/hp.php?code=000004', '000004'),
(0, 'https://www.amazon.in/?tag=admpdesktopin-21&ref=pd_sl_667f89264ef770626b679c32f1bfa68ddbfe1a8be7fb95f834549ae9&mfadid=adm', 'geturls.epizy.com/hp.php?code=000005', '000005'),
(0, 'https://images-eu.ssl-images-amazon.com/images/G/31/img21/AmazonBrands/GW/Furniture_2x.SY232_CB627276484.jpg', 'geturls.epizy.com/hp.php?code=000006', '000006'),
(0, 'https://images-eu.ssl-images-amazon.com/images/G/31/img21/AmazonBrands/GW/Furniture_2x._SY232_CB627276484_.jpg', 'geturls.epizy.com/hp.php?code=000007', '000007'),
(0, 'https://images-eu.ssl-images-amazon.com/images/G/31/img21/AmazonBrands/GW/Furniture_2x._SY232_CB627276484_.jpg', 'geturls.epizy.com/hp.php?code=000008', '000008'),
(0, 'https://images-eu.ssl-images-amazon.com/images/G/31/img21/AmazonBrands/GW/Furniture_2x._SY232_CB627276484_.jpg', 'geturls.epizy.com/hp.php?code=000009', '000009'),
(0, 'https://images-eu.ssl-images-amazon.com/images/G/31/img21/AmazonBrands/GW/Furniture_2x._SY232_CB627276484_.jpg', 'geturls.epizy.com/hp.php?code=000010', '000010'),
(0, 'https://images-eu.ssl-images-amazon.com/images/G/31/img21/AmazonBrands/GW/Furniture_2x._SY232_CB627276484_.jpg', 'geturls.epizy.com/hp.php?code=000011', '000011'),
(0, 'https://images-eu.ssl-images-amazon.com/images/G/31/img21/AmazonBrands/GW/Furniture_2x._SY232_CB627276484_.jpg', 'geturls.epizy.com/hp.php?code=000012', '000012'),
(0, 'https://images-eu.ssl-images-amazon.com/images/G/31/img21/AmazonBrands/GW/Furniture_2x._SY232_CB627276484_.jpg', 'geturls.epizy.com/hp.php?code=000013', '000013'),
(0, 'https://images-eu.ssl-images-amazon.com/images/G/31/img21/AmazonBrands/GW/Furniture_2x._SY232_CB627276484_.jpg', 'geturls.epizy.com/hp.php?code=000014', '000014');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
