-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2021 at 09:45 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shreya2`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobilenumber` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `mobilenumber`, `address`, `password`, `token`, `status`) VALUES
(1, 'sp', '', '', 123456789, '', '6626e260667a71f6c164c0ee59054ac5', '', 'active'),
(2, 'ss', '123', '', 2147483647, 'raj nagar extension', '6626e260667a71f6c164c0ee59054ac5', '', 'active'),
(3, 'Shreya Paliwal', 'Shreya Paliwal', '', 123456789, 'raj nagar extension', '6626e260667a71f6c164c0ee59054ac5', '', 'active'),
(4, 'ayush', 'ayush', '', 6666666, 'eyrfgf', '6626e260667a71f6c164c0ee59054ac5', '', 'active'),
(5, 'st', '', '', 123456789, '', '6626e260667a71f6c164c0ee59054ac5', '', 'active'),
(6, '123', '', '', 123456, '', '6626e260667a71f6c164c0ee59054ac5', '', 'active'),
(7, '223', '', '', 1234, '', '6626e260667a71f6c164c0ee59054ac5', '', 'active'),
(11, 'sss', '', '', 12345678, '', '6626e260667a71f6c164c0ee59054ac5', '', 'active'),
(12, 'naman123', 'Shreya Paliwal', '', 2147483647, 'raj nagar extension', '6626e260667a71f6c164c0ee59054ac5', '', 'active'),
(15, '12343', 'Shreya Paliwal', '', 2147483647, 'raj nagar extension', '6626e260667a71f6c164c0ee59054ac5', '', 'active'),
(31, 'Shreya Paliwal', 'Shreya Paliwal', 'shreyapaliwal1412@gmail.com', 123456789, 'raj nagar extension', '4a3232c59ecda21ac71bebe3b329bf36', '5819946ca6274e0803513b9786dd95', 'inactive'),
(32, 'Shreya Paliwal', 'Shreya Paliwal', 'shreya.paliwal@gingerwebs.co.in', 123456789, 'raj nagar extension', '0e4e946668cf2afc4299b462b812caca', 'a447b6bdc42479ea35d770082e2f1c', 'inactive'),
(33, 'shreya', 'shreya', 'shreya.paliwal@gingerwebs.co.in', 2147483647, 'raj nagar extension', '4a3232c59ecda21ac71bebe3b329bf36', '696e61beea3e80f91fb03902d07504', 'inactive'),
(34, 'shreya', 'shreya', 'shreya.paliwal@gingerwebs.co.in', 2147483647, 'raj nagar extension', '4a3232c59ecda21ac71bebe3b329bf36', '82bc8e305dc07b81eda4ec1e31e8db', 'inactive'),
(35, 'rakhi', 'rakhi', 'shreya.paliwal@gingerwebs.co.in', 1231231231, 'raj nagar extension', '6626e260667a71f6c164c0ee59054ac5', '4e5a227aaf40da23998843b705b26f', 'inactive'),
(36, 'Shreya Paliwal', 'Shreya Paliwal', 'shreyapaliwal1412@gmail.com', 123456789, 'raj nagar extension', '4a3232c59ecda21ac71bebe3b329bf36', '7fb2543817a775f6d844568700f3a3', 'inactive'),
(37, 'Shreya Paliwal', 'Shreya Paliwal', 'shreyapaliwal1412@gmail.com', 123456789, 'raj nagar extension', '4a3232c59ecda21ac71bebe3b329bf36', '8b3bbcb2daff771479c27529e6967c', 'inactive'),
(38, 'Shreya Paliwal', 'Shreya Paliwal', 'shreya.paliwal@gingerwebs.co.in', 123456789, 'raj nagar extension', '4a3232c59ecda21ac71bebe3b329bf36', '6102aa47bae589caf7ebcdcda09616', 'inactive'),
(39, 'Shreya Paliwal', 'Shreya Paliwal', 'shreya.paliwal@gingerwebs.co.in', 123456789, 'raj nagar extension', '81dc9bdb52d04dc20036dbd8313ed055', 'b40742c6a87ac9f8cfb2844afb8e19', 'inactive'),
(40, 'Shreya Paliwal', 'Shreya Paliwal', 'shreya.paliwal@gingerwebs.co.in', 123456789, 'raj nagar extension', '81dc9bdb52d04dc20036dbd8313ed055', '73799df06126576fee3db98c584ca8', 'inactive'),
(41, 'Shreya Paliwal', 'Shreya Paliwal', 'abidsaleem04@gmail.com', 123456789, 'raj nagar extension', '81dc9bdb52d04dc20036dbd8313ed055', 'e34c1551595917dd17c532c5f69b53', 'active'),
(42, 'Shreya Paliwal', 'Shreya Paliwal', 'abidsaleem04@gmail.com', 123456789, 'raj nagar extension', '81dc9bdb52d04dc20036dbd8313ed055', '5898825e489ee9522f5784e09b295d', 'inactive'),
(43, 'abid', 'abid', 'abidsaleem003@gmail.com', 7890, 'hsdgh', '81dc9bdb52d04dc20036dbd8313ed055', 'b5165a6bc08f5216e16935e9d9dd91', 'inactive'),
(44, 'abid', 'abid', 'abid.saleem@gingerwebs.co.in', 896789, 'kjnhkjb', '81dc9bdb52d04dc20036dbd8313ed055', '7345b763cd60bbc4efc78c01c1c3f8', 'inactive'),
(45, 'Shreya Paliwal', 'Shreya Paliwal', 'shreyapaliwal1412@gmail.com', 123456789, 'raj nagar extension', '81dc9bdb52d04dc20036dbd8313ed055', 'bb48bd771e5c808e4b55dfb16fd04f', 'active'),
(46, 'Rakhi', 'Rakhi', 'rakhigkp5@gmail.com', 1234512345, 'raj nagar extension', '827ccb0eea8a706c4c34a16891f84e7b', '9f8f5af711f89779d3229b10511a86', 'active'),
(47, 'Rakhi', 'Rakhi', 'rakhigkp5@gmail.com', 1234512345, 'raj nagar extension', '827ccb0eea8a706c4c34a16891f84e7b', 'f80fda7342e73b3353334d9e8fcc74', 'inactive'),
(48, 'Rakhi', 'Rakhi', 'rakhigkp5@gmail.com', 1234512345, 'raj nagar extension', '827ccb0eea8a706c4c34a16891f84e7b', 'ed2da6b1aceb9283b4199f25adbb1b', 'inactive'),
(49, 'Rakhi', 'Rakhi', 'rakhigkp5@gmail.com', 1234512345, 'raj nagar extension', '827ccb0eea8a706c4c34a16891f84e7b', 'debe116d65880d6db1e26c067a8bf1', 'inactive'),
(50, 'ayush', 'ayush', 'shreya.paliwal@gingerwebs.co.in', 6666666, 'eyrfgf', '66049c07d9e8546699fe0872fd32d8f6', '3a9d541263656938b2192adaad9c0c', 'active'),
(51, 'pp', 'pp', 'shreyapaliwal1412@gmail.com', 9999999, 'skb', '1952a01898073d1e561b9b4f2e42cbd7', '3576cd97eb4db5eabbb7e69ee536c7', 'active'),
(52, 'Shreya Paliwal', 'Shreya Paliwal', 'shreyapaliwal1412@gmail.com', 123456789, 'raj nagar extension', 'e10adc3949ba59abbe56e057f20f883e', '8a84490548332f1ffd2f532291c05d', 'active'),
(53, 'Shreya Paliwal', 'Shreya Paliwal', 'shreyapaliwal1412@gmail.com', 2147483647, 'raj nagar extension', 'e10adc3949ba59abbe56e057f20f883e', 'f1df868a8704990a3f65c37cd54125', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
