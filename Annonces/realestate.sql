-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2017 at 06:47 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realestate`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `agent_id` int(10) NOT NULL,
  `agent_name` varchar(150) NOT NULL,
  `agent_address` varchar(250) NOT NULL,
  `agent_contact` varchar(20) NOT NULL,
  `agent_email` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`agent_id`, `agent_name`, `agent_address`, `agent_contact`, `agent_email`) VALUES
(1, 'Samuel A Waldey', 'Rue 95 Victoria, Paris', '03 5321 1053', 'samuel@gmail.com'),
(2, ' Eden Battarbee', 'Rue 75, Nantes', '08 8762 5308', 'eden@gmail.com'),
(3, 'Tyson A Salvado', 'Rue 98 Ville Champagne,France du Nord', '02 4728 5284', 'tyson@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `property_id` int(10) NOT NULL,
  `property_title` varchar(150) DEFAULT NULL,
  `property_details` text,
  `delivery_type` varchar(20) DEFAULT NULL,
  `availablility` int(5) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `property_address` varchar(200) DEFAULT NULL,
  `property_img` varchar(200) DEFAULT NULL,
  `bed_room` int(5) DEFAULT NULL,
  `liv_room` int(5) DEFAULT NULL,
  `parking` int(5) DEFAULT NULL,
  `kitchen` int(5) DEFAULT NULL,
  `utility` varchar(100) DEFAULT NULL,
  `property_type` varchar(20) DEFAULT NULL,
  `floor_space` varchar(20) DEFAULT NULL,
  `agent_id` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`property_id`, `property_title`, `property_details`, `delivery_type`, `availablility`, `price`, `property_address`, `property_img`, `bed_room`, `liv_room`, `parking`, `kitchen`, `utility`, `property_type`, `floor_space`, `agent_id`) VALUES
(1, 'Villa La Colle-sur-Loup ', 'Joli maison mitoyenne sans vis-a-vis dans une petite copropriete de 14 lots situee a proximite immediate du centre ville, des commerces et des ecoles. Sur deux niveaux, vous disposez en rez-de jardin , donnant sur un salon, salle a manger confortable avec cheminee, une cuisine independant moderne et equipee le tout donnant sur une belle terrasse et jardinet', 'Vente', 0, 150000, 'Rue Clementine, Paris', 'images/properties/bed-1-1.jpg', 3, 2, 1, 1, 'Electrecite, Gaz, Eau', 'Villa', '1600 X 1400', 3),
(2, 'Apartement Mandelieu-la-Napoule', 'Joli maison mitoyenne sans vis-a-vis dans une petite copropriete de 14 lots situee a proximite immediate du centre ville, des commerces et des ecoles. Sur deux niveaux, vous disposez en rez-de jardin , donnant sur un salon, salle a manger confortable avec cheminee, une cuisine independant moderne et equipee le tout donnant sur une belle terrasse et jardinet.', 'Allocation', 0, 7000, 'Cité Cloché, Paris', 'images/properties/bed-2-1.jpg', 3, 2, 1, 1, 'Electricite, Gaz, Eau', 'Apartement', '1650 X 1350', 3),
(3, 'Apartement a Cannes','Joli maison mitoyenne sans vis-a-vis dans une petite copropriete de 14 lots situee a proximite immediate du centre ville, des commerces et des ecoles. Sur deux niveaux, vous disposez en rez-de jardin , donnant sur un salon, salle a manger confortable avec cheminee, une cuisine independant moderne et equipee le tout donnant sur une belle terrasse et jardinet.', 'Vente', 1, 80000, '77 Nantes', 'images/properties/bed-3-1.jpg', 3, 2, 1, 1, 'Electricite, Gaz, Water', 'Apartement', '1500 X 1300', 3),
(5, 'Appartement a Nice', 'Joli maison mitoyenne sans vis-a-vis dans une petite copropriete de 14 lots situee a proximite immediate du centre ville, des commerces et des ecoles. Sur deux niveaux, vous disposez en rez-de jardin , donnant sur un salon, salle a manger confortable avec cheminee, une cuisine independant moderne et equipee le tout donnant sur une belle terrasse et jardinet.', 'Allocation', 0, 7500, '91 Rue des clés, Beaumonts', 'images/properties/liv-5-1.jpg', 2, 2, 1, 1, 'Electricite, Gaz, Eau, Internet', 'Appartement', '1650 X 1350', 2),
(6, 'Villa a Villes Champagne', 'Joli maison mitoyenne sans vis-a-vis dans une petite copropriete de 14 lots situee a proximite immediate du centre ville, des commerces et des ecoles. Sur deux niveaux, vous disposez en rez-de jardin , donnant sur un salon, salle a manger confortable avec cheminee, une cuisine independant moderne et equipee le tout donnant sur une belle terrasse et jardinet.', 'Allocation', 1, 6000, '93 Rue des oranges, Beaumonts', 'images/properties/liv-6-1.jpg', 2, 2, 1, 1, 'Electricite, Gaz, Eau, Internet', 'Villa', '1450 X 1250', 1),
(7, 'Appartement a Marseille', 'Joli maison mitoyenne sans vis-a-vis dans une petite copropriete de 14 lots situee a proximite immediate du centre ville, des commerces et des ecoles. Sur deux niveaux, vous disposez en rez-de jardin , donnant sur un salon, salle a manger confortable avec cheminee, une cuisine independant moderne et equipee le tout donnant sur une belle terrasse et jardinet.', 'Vente', 0, 1750000, '65, Nantes', 'images/properties/bed-7-1.jpg', 3, 2, 1, 1, 'Electricite, Gaz, Eau', 'Appartement', '1650 X 1350', 2);

-- --------------------------------------------------------

--
-- Table structure for table `property_image`
--

CREATE TABLE `property_image` (
  `property_images` varchar(200) DEFAULT NULL,
  `property_id` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property_image`
--

INSERT INTO `property_image` (`property_images`, `property_id`) VALUES
('images/properties/bed-1-1.jpg', 1),
('images/properties/bed-1-2.jpg', 1),
('images/properties/liv-1-1.jpg', 1),
('images/properties/liv-1-2.jpg', 1),
('images/properties/kitchen-1-1.jpg', 1),
('images/properties/bed-1-1.jpg', 2),
('images/properties/bed-1-2.jpg', 2),
('images/properties/liv-1-1.jpg', 2),
('images/properties/liv-1-2.jpg', 2),
('images/properties/kitchen-1-1.jpg', 2),
('images/properties/bed-2-1.jpg', 2),
('images/properties/bed-2-2.jpg', 2),
('images/properties/liv-2-1.jpg', 2),
('images/properties/liv-2-2.jpg', 2),
('images/properties/kitchen-2-1.jpg', 2),
('images/properties/bed-3-1.jpg', 3),
('images/properties/bed-3-2.jpg', 3),
('images/properties/liv-3-1.jpg', 3),
('images/properties/liv-3-2.jpg', 3),
('images/properties/kitchen-3-1.jpg', 3),
('images/properties/bed-4-1.jpg', 4),
('images/properties/bed-4-2.jpg', 4),
('images/properties/liv-4-1.jpg', 4),
('images/properties/liv-4-2.jpg', 4),
('images/properties/kitchen-4-1.jpg', 4),
('images/properties/bed-5-1.jpg', 5),
('images/properties/bed-5-2.jpg', 5),
('images/properties/liv-5-1.jpg', 5),
('images/properties/liv-5-2.jpg', 5),
('images/properties/kitchen-5-1.jpg', 5),
('images/properties/bed-6-1.jpg', 6),
('images/properties/bed-6-2.jpg', 6),
('images/properties/liv-6-1.jpg', 6),
('images/properties/liv-6-2.jpg', 6),
('images/properties/kitchen-6-1.jpg', 6),
('images/properties/bed-7-1.jpg', 7),
('images/properties/bed-7-2.jpg', 7),
('images/properties/liv-7-1.jpg', 7),
('images/properties/liv-7-2.jpg', 7),
('images/properties/kitchen-7-1.jpg', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`agent_id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`property_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `agent_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `property_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
