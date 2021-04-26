-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 03, 2019 at 07:00 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id3420339_food`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `message`) VALUES
(1, 'Sumit Kumar', 'therokinnstar@gmail.com', 'Very good website. Keep it up..'),
(2, 'Amit', 'amit@gmail.com', 'hello sumit  how are you?'),
(3, 'Abhishek', '2015017085.abhishek@ug.sharda.ac.in', 'Acha kiya hai'),
(4, 'sumie', 'sumitapps11@gmail.com', 'great app'),
(5, 'Sumit', 'sumitapps11@gmail.com', 'Great website '),
(6, 'Sumit', 'sumitk11@hotmail.com', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `dish_info`
--

CREATE TABLE `dish_info` (
  `SN` int(2) DEFAULT NULL,
  `dish_name` varchar(100) DEFAULT NULL,
  `ING1` varchar(100) DEFAULT NULL,
  `ING2` varchar(100) DEFAULT NULL,
  `ING3` varchar(100) DEFAULT NULL,
  `ING4` varchar(100) DEFAULT NULL,
  `ING5` varchar(100) DEFAULT NULL,
  `ING6` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dish_info`
--

INSERT INTO `dish_info` (`SN`, `dish_name`, `ING1`, `ING2`, `ING3`, `ING4`, `ING5`, `ING6`) VALUES
(1, ' Aloo baingan masala', 'Eggplants', 'Potato', 'Tomato', 'Ginger', 'Coriander Leaves (optional)', 'Garlic'),
(2, 'Aloo Gobi', 'Onion', 'Cauliflower', 'Potato', 'Tomato', 'Ginger', 'Garlic'),
(3, 'Aloo ki tikki', 'Potato', 'Green Peas', 'Ginger', 'Lemon Juice', 'Bread', 'Coriander Seeds'),
(4, 'Aloo matar', 'Onion', 'Ginger-Garlic Paste', 'Tomato', 'Potatoes', 'Green Peas', 'Cilantro'),
(5, 'Aloo methi', 'Potato', 'Ginger/ Garlic', 'Hing/ Asafetida', 'Fenugreek Leaves', 'Cumin Seeds', 'Mango Powder'),
(6, 'Aloo Shimla Mirch', 'Potato', 'Garlic', 'Onion', 'Mango Powder', 'Coriander Leaves', 'Green Capsicum'),
(7, 'Amriti with rabdi', 'Full Fat Milk', 'Cardomoms', 'Saffron', 'Rose Water', 'Almons', 'Pistachios'),
(8, 'Amritsari fish', 'Fish', 'Ginger/ Garlic', 'Ajwain', 'Lemon Juice', 'Egg', 'Yogurt'),
(9, 'Amritsari kulcha', 'Onion', 'Potato', 'Ginger', 'Anaar Dana', 'Lemon Juice', 'Coriander Leaves'),
(10, 'Appam', 'Rice', 'Coconut Milk', 'Yeast', '', '', ''),
(11, 'Avail', 'Drumsticks', 'French beans', ' Red pumpkin', 'Raw banana', 'Green peas', ' Brinjal'),
(12, 'Ajwain', 'Asafoetida', 'Ghee', 'Vazhakkai', 'Cooking soda', 'Kadala maavu', 'Corn flour'),
(13, 'Bisi bele bath', 'Fenugreek Seeds', 'Coriander Seed', 'Pods Cardamom', 'Cloves', 'Poppy seeds', 'Sesame seeds'),
(14, 'Bombay Duck', 'Rice batter\r\n', 'Lemon juice', 'Bombil Fish', 'Ginger', 'Scraped coconut', NULL),
(15, 'Bonda', 'Maida Flour', 'Curd ', 'Baking soda ', 'Coriander leaves', 'Chopped ginger', NULL),
(16, 'Butter chicken', 'Ginger and garlic paste', 'Curd', 'White butter', 'Black cumin seeds', 'Raw chicken', ' Fenugreek leaves '),
(17, 'Chaat', ' cooked rajma', 'cooked channa', 'chowli beans', 'cooked potatoes', 'chopped onions', 'lemon juice'),
(18, 'Chettinad Chicken', 'Chicken', 'Manjal Podi ', 'Lemon Juice', 'Fennel Seeds', 'Cinnamon Stick', 'Kalpasi'),
(19, 'Chevdo', 'Potatoes', 'Split chickpeas', 'Whole mung', 'Almond', 'Cashews', 'White pepper'),
(20, 'Chicken 65', ' Chicken breasts', 'Ginger paste', 'Garlic paste', 'Coriander powder', ' Egg', 'Mustard seeds'),
(21, 'Chole bhature ', 'Chickpea', 'Bay leaves', 'Black Cardamom', ' Baking soda', 'Boil the chole', 'Cilantro leaves'),
(22, 'Dahi vada', 'Yogurt', 'Urad', ' Eno', 'Curd', 'Cumin seeds', ' Moong Dal'),
(23, 'Chicken razala', 'Laung', 'Kali mirch', 'Elaichi', 'Dal chini', 'Poppy seeds', 'Cashews'),
(24, 'Chicken Tikka', 'coriander leaves\r\n', 'peppercorns', 'Lime', 'Garlic', 'Boneless chicken', 'Ginger'),
(25, 'Chicken tikka msala', 'cinnamon', 'cilantro', 'cumin', 'lemon', 'minced', 'Muir Glen'),
(26, 'Daal bati churma', 'Chana dal', 'Whole moong', 'Coriander ', 'Cloves', 'Bayleaves', 'Tamarind'),
(26, 'Ennai kathirikkai', 'Brinjal', 'Tomato', 'Tamarind', 'Fenugreek seeds', 'Grated coconut ', 'Coriander leaveS'),
(27, 'Daal makhani', 'Urad Dal', ' cumin seeds', ' Red kidney beans', ' Gingerroot', 'Cream', 'garlic cloves'),
(28, 'Dosa', 'rice', 'Split', 'Fenugreek seeds', 'Curry leaves', 'Potatoes', NULL),
(29, 'Double ka meetha', 'Bread slices', 'Condensed milk', 'Green cardamom', ' Saffron', 'Rose water', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `email_list`
--

CREATE TABLE `email_list` (
  `id` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `email_list`
--

INSERT INTO `email_list` (`id`, `email`) VALUES
(1, 'therokinnstar@gmail.com'),
(2, 'sumitk11@hotmail.com'),
(3, 'sumitapps11@gmail.com'),
(4, '2015017085.abhishek@ug.sharda.ac.in');

-- --------------------------------------------------------

--
-- Table structure for table `nutrition`
--

CREATE TABLE `nutrition` (
  `dish_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `calories` int(3) NOT NULL,
  `total fat` int(3) NOT NULL,
  `sat_fat` int(3) NOT NULL,
  `trans_fat` int(3) NOT NULL,
  `cholesterol` int(3) NOT NULL,
  `sodium` int(3) NOT NULL,
  `total_carbohydrate` int(3) NOT NULL,
  `dietery_fiber` int(3) NOT NULL,
  `sugar` int(3) NOT NULL,
  `protein` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nutrition`
--

INSERT INTO `nutrition` (`dish_name`, `calories`, `total fat`, `sat_fat`, `trans_fat`, `cholesterol`, `sodium`, `total_carbohydrate`, `dietery_fiber`, `sugar`, `protein`) VALUES
('Aloo baingan masala', 100, 5, 0, 0, 0, 0, 32, 0, 0, 1),
('aloo gobi', 300, 10, 1, 0, 0, 100, 38, 10, 0, 8),
('aloo ki tikki', 120, 2, 0, 0, 0, 0, 12, 1, 0, 1),
('aloo matar', 242, 7, 1, 0, 0, 409, 40, 7, 5, 6),
('aloo methi', 120, 3, 1, 0, 0, 110, 24, 3, 12, 2),
('Aloo Shimla Mirch', 180, 6, 1, 0, 20, 230, 30, 1, 0, 3),
('Amriti with rabdi', 700, 7, 2, 0, 240, 382, 151, 12, 112, 17),
('Amritsari fish', 53, 2, 0, 0, 0, 19, 118, 2, 3, 2),
('Amritsari kulcha', 80, 3, 0, 0, 0, 510, 13, 2, 10, 2),
('Appam', 80, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `text`) VALUES
(1, 'This is the first post'),
(2, 'This is the second piece of text'),
(3, 'This is the third post'),
(4, 'This is the fourth piece of text');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `dish_name` text COLLATE utf8_unicode_ci NOT NULL,
  `total_votes` int(11) NOT NULL,
  `likes` int(11) NOT NULL,
  `dislike` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`dish_name`, `total_votes`, `likes`, `dislike`) VALUES
('', 46, 29, 17),
('', 46, 29, 17),
(' Aloo baingan masala', 46, 29, 17),
('Aloo Gobi', 46, 29, 17),
('Aloo ki tikki', 46, 29, 17),
('Aloo matar', 46, 29, 17),
('Aloo methi', 46, 29, 17),
('Aloo shimla mirch', 46, 29, 17),
('Amriti with rabdi', 46, 29, 17),
('Amritsari fish', 46, 29, 17),
('Amritsari kulcha', 46, 29, 17),
('Appam', 46, 29, 17),
('Chicken razala', 46, 29, 17),
('Chicken Tikka', 46, 29, 17),
('Chicken tikka msala', 46, 29, 17),
('Avail', 46, 29, 17),
('Ajwain', 46, 29, 17),
('Bisi bele bath', 46, 29, 17),
('Bombay duck', 46, 29, 17),
('Bonda', 46, 29, 17),
('Butter chicken', 46, 29, 17),
('Chaat', 46, 29, 17),
('CHETTINAD CHICKEN', 46, 29, 17),
('Chevdo', 46, 29, 17),
('Chicken 65', 46, 29, 17),
('Chole bhature ', 46, 29, 17),
('Dahi vada', 46, 29, 17),
('Daal bati churma', 46, 29, 17),
('Daal makhani', 46, 29, 17),
('Dosa', 46, 29, 17),
('Double ka meetha', 46, 29, 17),
('Ennai kathirikkai', 46, 29, 17),
('Ennai kathirikkai', 46, 29, 17);

-- --------------------------------------------------------

--
-- Table structure for table `rating_info`
--

CREATE TABLE `rating_info` (
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `rating_action` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating_info`
--

INSERT INTO `rating_info` (`user_id`, `post_id`, `rating_action`) VALUES
(1, 1, 'like'),
(2, 4, 'dislike');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dish_info`
--
ALTER TABLE `dish_info`
  ADD UNIQUE KEY `dish_name` (`dish_name`);

--
-- Indexes for table `email_list`
--
ALTER TABLE `email_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating_info`
--
ALTER TABLE `rating_info`
  ADD UNIQUE KEY `UC_rating_info` (`user_id`,`post_id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `post_id` (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `email_list`
--
ALTER TABLE `email_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
