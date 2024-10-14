-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2024 at 11:52 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `madrasmania`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `person` text NOT NULL,
  `date` text NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_icon` varchar(255) NOT NULL,
  `home_menu` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_icon`, `home_menu`, `status`, `date`) VALUES
(1, 'Suppe', '<i class=\"flaticon-fast-food\"></i>', 1, 1, '2024-08-05'),
(2, 'Südindische Vorspeisen ', '', 0, 1, '2024-08-05'),
(3, 'Südindische Vorspeisen ', '', 0, 1, '2024-08-05'),
(4, 'Dosa Welt : Indische Crepe', '', 0, 1, '2024-08-05'),
(5, 'Idly Welt : Gedämpfte Reisknödel', '', 0, 1, '2024-08-05'),
(6, 'Parotta Vilas ( Only Thursdays)', '', 0, 1, '2024-08-05'),
(7, 'Uthappam', '<i class=\"flaticon-cocktail\"></i>', 1, 1, '2024-08-05'),
(8, 'Nordindische Spezialitäten Tandoori Vorspeisen ', '', 0, 1, '2024-08-05'),
(9, 'Tandoori Vorspeisen ', '', 0, 1, '2024-08-05'),
(10, 'Nordindische Curries', '', 0, 1, '2024-08-05'),
(11, 'Südindische curries', '', 0, 1, '2024-08-05'),
(12, 'Indische Brot', '<i class=\"flaticon-pizza-slice\"></i>', 1, 1, '2024-08-05'),
(13, 'Desserts', '<i class=\"flaticon-salad\"></i>', 1, 1, '2024-08-05'),
(14, 'Getränke (Kalt)', '<i class=\"flaticon-cupcake\"></i>', 1, 1, '2024-08-05'),
(15, 'Getränke (Heiz)', '<i class=\"flaticon-chili-pepper\"></i>', 1, 1, '2024-08-05'),
(16, 'Vimal', '', 0, 0, '2024-09-12');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `date`, `time`, `description`, `image`) VALUES
(2, 'Ayudha Pooja & Vijayadashami Celebrations', '2024-10-11', '11:00:00', 'The integral parts of the Navaratri festival, Ayudha Pooja and Vijayadashami were celebrated in a grand manner.\r\n\r\n \r\n\r\n', '66fe4da743747.jpg'),
(3, 'Food Festival', '2024-09-27', '15:00:00', 'food is good', '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `product_image` text DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `todayspecial` int(11) DEFAULT NULL,
  `allergens` varchar(255) NOT NULL,
  `allergen_icons` varchar(255) NOT NULL,
  `topseller` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `veg_non_veg` int(11) NOT NULL,
  `category_name` text NOT NULL,
  `cat_icon` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `day` text NOT NULL,
  `meal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `description`, `product_image`, `price`, `category_id`, `todayspecial`, `allergens`, `allergen_icons`, `topseller`, `status`, `veg_non_veg`, `category_name`, `cat_icon`, `slug`, `day`, `meal`) VALUES
(1, 'Kozhi Malli Saaru (Non-veg)', ' Eine würzige südindische Hühnersuppe mit frischem Koriander\r\nund aromatischen Gewürzen', '1.jpg', '4.90', 1, 1, 'A, C, G, I, L ', 'allergy1.png,allergy3.png,allergy7.png,allergy10.png,allergy13.png', 0, 1, 1, 'Suppe', 'icon4.png', 'suppe', 'Thursday', 'Lunch'),
(2, 'Tomato Rasam(Veg)', 'Eine pikante südindische Tomatensuppe aromatischen\r\nGewürzen.', '2.jpg', '4.49', 1, 1, '', '', 0, 1, 0, 'Suppe', 'icon4.png', 'suppe', 'Tuesday', 'Lunch'),
(3, 'Medhu Vada', 'Weiche, knusprige Linsen-Donuts, frittiert und perfekt gewürzt', '3.jpg', '5.99', 2, 0, '', '', 0, 1, 0, 'Südindische Vorspeisen-veg', 'icon3.png', 'südindische-vorspeisenveg', 'Friday', 'Breakfast'),
(4, 'Milagai / Onion / Vazhakkai Bread Bajji', 'Tiefgebackene Fritters aus ausgewählten Gemüsesorten, umhüllt von gewürztem Linsen-Teig', '4.jpg', '5.99', 2, 0, '', '', 0, 1, 0, 'Südindische Vorspeisen-veg', 'icon3.png', 'südindische-vorspeisenveg', 'Tuesday', 'Breakfast'),
(5, 'Tea Kadai Samosa', 'Knuspriger, frittierter Snack aus hausgemachten Samosa-Teigblättern, gefüllt mit würziger Zwiebel-Füllung', '5.jpg', '5.99', 2, 0, 'A,E,H4', 'allergy1.png,allergy5.png,allergy9.png', 0, 1, 0, 'Südindische Vorspeisen-veg', 'icon3.png', 'südindische-vorspeisenveg', 'Friday', 'Lunch'),
(6, 'Marina Beach Sundal', 'Knuspriger, frittierter Snack aus hausgemachten Samosa-Teigblättern, gefüllt mit würziger Zwiebel-Füllung', '6.jpg', '4.99', 2, 0, 'J', 'allergy10.png', 0, 1, 0, 'Südindische Vorspeisen-veg', 'icon3.png', 'südindische-vorspeisenveg', 'Tuesday', 'Dinner'),
(7, 'Kuzhi Paniyaram', 'Knusprig außen, innen weich, Reis- und Linsendumplings, serviert mit Chutneys und Samba', '7.jpg', '5.99', 2, 1, '', '', 0, 1, 0, 'Südindische Vorspeisen-veg', 'icon3.png', 'südindische-vorspeisenveg', 'Saturday', 'Dinner'),
(8, 'Sambar Vada (2 Nos)', 'Frittierter Linsendonut in köstlichen Sambar, garniert mit Zwiebeln und Koriander ', '8.jpg', '5.99', 2, 0, '', '', 0, 1, 0, 'Südindische Vorspeisen-veg', 'icon3.png', 'südindische-vorspeisenveg', 'Tuesday', 'Lunch'),
(9, 'Mysore Bonda (2 Nos)', 'Knusprige Linsenkugeln mit Chutney und Sambar', '9.jpg', '5.99', 2, 0, '', '', 0, 1, 0, 'Südindische Vorspeisen-veg', 'icon3.png', 'südindische-vorspeisenveg', 'Saturday', 'Breakfast'),
(10, 'Curd Vada (2 Nos)', 'Linsendonut in Joghurt, garniert mit Karotten, Koriander, Chilipulver & knusprigen Streuseln', '10.jpg', '5.99', 2, 0, '', '', 0, 1, 0, 'Südindische Vorspeisen-veg', 'icon3.png', 'südindische-vorspeisenveg', 'Wednesday', 'Breakfast'),
(11, 'Chicken Pepper Fry', 'Linsendonut in Joghurt, garniert mit Karotten, Koriander, Chilipulver & knusprigen Streuseln', '11.jpg', '12', 3, 1, 'C,G,I,L', 'allergy3.png,allergy7.png,allergy10.png,allergy13.png', 0, 1, 1, 'Südindische Vorspeisen (non-veg)', 'icon5.png', 'südindische-vorspeisen-nonveg', 'Monday', 'Lunch'),
(12, 'Egg Podimas', 'Linsendonut in Joghurt, garniert mit Karotten, Koriander, Chilipulver & knusprigen Streuseln', '12.jpg', '7', 3, 0, 'C', 'allergy3.png', 0, 1, 1, 'Südindische Vorspeisen (non-veg)', 'icon5.png', 'südindische-vorspeisen-nonveg', 'Wednesday', 'Lunch'),
(13, 'Madras Chilli Chicken', 'Saftige Hühnerstücke, mariniert, gebraten und mit einer würzigen Sauce aus grünen Chilischoten, Knoblauch und Sojasauce serviert', '13.jpg', '9.5', 3, 0, 'F', 'allergy5.png', 0, 1, 1, 'Südindische Vorspeisen (non-veg)', 'icon5.png', 'südindische-vorspeisen-nonveg', 'Sunday', 'Lunch'),
(14, 'Madurai Mutton Chuka', 'Knochenlose zarte Stücke von Lammfleisch, mariniert in handgemachten Gewürzmischungen des Kochs, mit Cashewnüssen geröstet', '14.jpg', '14', 3, 0, 'H4', 'allergy8.png', 0, 1, 1, 'Südindische Vorspeisen (non-veg)', 'icon5.png', 'südindische-vorspeisen-nonveg', 'Wednesday', 'Dinner'),
(15, 'Tuticorin Nethili Fry', 'Knochenlose zarte Stücke von Lammfleisch, mariniert in handgemachten Gewürzmischungen des Kochs, mit Cashewnüssen geröstet', '15.jpg', '15', 3, 0, '', '', 0, 1, 1, 'Südindische Vorspeisen (non-veg)', 'icon5.png', 'südindische-vorspeisen-nonveg', 'Monday', 'Lunch'),
(16, 'Plain Dosa ', 'Dünner knuspriger Reis-Linsen-Crêpe', '16.jpg', '7', 4, 0, '', '', 0, 1, 0, 'Dosa Welt', 'icon6.png', 'dosa-welt', 'Friday', 'Breakfast'),
(17, 'Rava Dosa ', ' Dünner & knuspriger Crêpe aus Grieß & Reis mild gewürzt & garniert', '17.jpg', '8.5', 4, 0, '', '', 0, 1, 0, 'Dosa Welt', 'icon6.png', 'dosa-welt', 'Friday', 'Breakfast'),
(18, 'Madras Masala Dosa', 'Reis-Linsen-Crêpe, gefüllt mit Kartoffelpüree und Zwiebeln', '18.jpg', '8.99', 4, 1, '', '', 0, 1, 0, 'Dosa Welt', 'icon6.png', 'dosa-welt', 'Friday', 'Dinner'),
(19, 'Mysore Masala Dosa', 'Rotes Chili-Chutney auf dünnem Reis-Linsen-Crêpe, gefüllt mit Kartoffelpüree und Zwiebeln', '19.jpg', '8.99', 4, 0, '', '', 0, 1, 0, 'Dosa Welt', 'icon6.png', 'dosa-welt', 'Friday', 'Dinner'),
(20, 'Milagaipodi Dosa ', 'Dünner Reis-Linsen-Crepe gefüllt mit einer Mischung aus gemahlenen Gewürzen, trockenen Chilischoten, Linsen, Kartoffeln, Zwiebeln und Sesana', '20.jpg', '7.5', 4, 0, '', '', 0, 1, 0, 'Dosa Welt', 'icon6.png', 'dosa-welt', 'Saturday', 'Dinner'),
(21, 'Paneer Dosa', 'Dünner Reiscrêpe gefüllt mit Hüttenkäse', '21.jpg', '9.99', 4, 0, 'G', 'allergy7.png', 0, 1, 0, 'Dosa Welt', 'icon6.png', 'dosa-welt', 'Friday', 'Dinner'),
(22, 'Onion Dosa ', 'Dünner, knuspriger Reis-Linsen-Crêpe mit Zwiebeln', '22.jpg', '7.99', 4, 0, '', '', 0, 1, 0, 'Dosa Welt', 'icon6.png', 'dosa-welt', 'Friday', 'Lunch'),
(23, 'Ghee Roast', 'Dünner, langer Reis-Linsen-Crêpe, bestreut mit Desi Ghee', '23.jpg', '8.5', 4, 0, '', '', 0, 1, 0, 'Dosa Welt', 'icon6.png', 'dosa-welt', 'Friday', 'Lunch'),
(24, 'Onion Rava Dosa ', 'Dünner, knuspriger Reis-Linsen-Crêpe mit Zwiebeln', '24.jpg', '8.99', 4, 0, '', '', 0, 1, 0, 'Dosa Welt', 'icon6.png', 'dosa-welt', 'Friday', 'Lunch'),
(25, 'Onion Rava Masala dosa ', 'Dünner Crêpe aus Grieß & Reis bestreut mit Zwiebeln\n', '25.jpg', '9.99', 4, 0, '', '', 0, 1, 0, 'Dosa Welt', 'icon6.png', 'dosa-welt', 'Friday', 'Breakfast'),
(26, 'Pav Bhaji Dosa', 'Dünner, knuspriger Reis-Linsen-Crêpe mit Köstlicher Pav Bhaji(Füllung aus aromatischem Kartoffelgemüse ) ', '26.jpg', '10.99', 4, 0, 'G', 'allergy7.png', 0, 1, 0, 'Dosa Welt', 'icon6.png', 'dosa-welt', '', ''),
(27, 'Schwezan Masala Dosa', 'Knuspriger Masala Dosa gefüllt mit Schezwan-gewürzten Kartoffeln und Käse', '27.jpg', '10.99', 4, 0, 'F', 'allergy6.png', 0, 1, 0, 'Dosa Welt', 'icon6.png', 'dosa-welt', '', ''),
(28, 'Mushroom Chilli Cheese Dosa', 'Knusprige Dosa gefüllt mit würzigen Champignons, Chili und KäseKnusprige Dosa gefüllt mit würzigen Champignons, Chili und Käse', '28.jpg', '10.99', 4, 0, 'G', 'allergy7.png', 0, 1, 0, 'Dosa Welt', 'icon6.png', 'dosa-welt', 'Sunday', 'Breakfast'),
(29, 'Chilly Cheese Dosa', 'Dünner, langer Crêpe aus Reis und Linsen gefüllt mit würzigem Chili und Käse.', '29.jpg', '10.99', 4, 0, 'G', 'allergy7.png', 0, 1, 0, 'Dosa Welt', 'icon6.png', 'dosa-welt', '', ''),
(30, 'Madras Mania Dosa( Chef\'s Special)', 'Dünner, langer Crêpe aus Reis und Linsen gefüllt mit würzigem Chili und Käse.', '30.jpg', '14.99', 4, 1, 'G', 'allergy7.png', 0, 1, 0, 'Dosa Welt', 'icon6.png', 'dosa-welt', '', ''),
(31, 'Mickey Mouse Dosa ( Kids\' Special)', 'Ein einfacher Dosa in Mickey-Maus-Form, speziell für Kinder gestaltet.', '31.jpg', '7', 4, 0, '', '', 0, 1, 0, 'Dosa Welt', 'icon6.png', 'dosa-welt', '', ''),
(32, 'Idly (3 Nos)', 'Zermahlener gedämpfte, flach-runde Küchlein aus einem fermentierten Teig auf Basis von Urdbohnen und Reis.', '32.jpg', '7', 5, 0, '', '', 0, 1, 0, 'Idly Welt', 'icon1.png', 'idly-welt', 'Wednesday', 'Breakfast'),
(33, 'Chilli Idly', 'Gedünstete Reisküchlein gehackt, leicht angebraten und mit würziger Chilisauce verfeinert.', '33.jpg', '9', 5, 0, '', '', 0, 1, 0, 'Idly Welt', 'icon1.png', 'idly-welt', 'Wednesday', 'Lunch'),
(34, 'Idly Vada', 'Gedünsteter Reis- und Linsendonut, serviert mit Chutney und Sambar', '34.jpg', '8', 5, 0, '', '', 0, 1, 0, 'Idly Welt', 'icon1.png', 'idly-welt', 'Wednesday', 'Breakfast'),
(35, 'Thatte Idly (Karnataka Style)', 'Große, flache Donuts aus einem Teig aus Reis und Linsen, traditionell gedämpft und mit verschiedenen Chutneys und Sambar serviert', '35.jpg', '7.5', 5, 0, '', '', 0, 1, 0, 'Idly Welt', 'icon1.png', 'idly-welt', 'Wednesday', 'Dinner'),
(36, 'Mini Sambar Idly', 'Mini-Müßiggang köchelte im köstlichen Süden Indische Linsensoße, garniert mit Ghee', '36.jpg', '7', 5, 0, '', '', 0, 1, 0, 'Idly Welt', 'icon1.png', 'idly-welt', 'Wednesday', 'Dinner'),
(37, 'Parotta & Salna', 'Köstliches südindisches luftiges Brot serviert mit Kartoffelpüree und Salna (Curry Soße)', '37.jpg', '8', 6, 0, 'A,E,K', 'allergy1.png,allergy5.png,allergy12.png', 0, 1, 0, 'Parotta Vilas', 'icon14.png', 'parotta-vilas', 'Wednesday', 'Lunch'),
(38, 'Veg Kaima Parotta', 'Geschnittene Parotta mit indischen Gewürzen und Gemüse, serviert mit Raitha', '38.jpg', '10.5', 6, 0, 'A,E', 'allergy1.png,allergy5.png,', 0, 1, 0, 'Parotta Vilas', 'icon14.png', 'parotta-vilas', 'Monday', 'Dinner'),
(39, 'Egg Kothu Parotta', 'Geschnittene Brot aus hellem Weizenmehl gekocht mit Gewürzen und Eier – serviert mit Gemüse Curry und Raitha.', '39.jpg', '11', 6, 0, 'A,C,E', 'allergy1.png,allergy3.png,allergy5.png', 0, 1, 1, 'Parotta Vilas', 'icon14.png', 'parotta-vilas', '', ''),
(40, 'Onion Uthappam ', 'Dicker Reis-Linsen-Pfannkuchen mit Zwiebeln', '40.jpg', '7.99', 7, 0, '', '', 0, 1, 0, 'Uthappam', 'icon10.png', 'uthappam', 'Monday', 'Breakfast'),
(41, 'Veg Uthappam', 'Dicker Reis-Linsen-Pfannkuchen mit gemischtem Gemüse\n', '41.jpg', '9', 7, 0, '', '', 0, 1, 0, 'Uthappam', 'icon10.png', 'uthappam', 'Monday', 'Breakfast'),
(42, 'Tomato Onion Uthappam', 'Gegrillter Paneer in einer würzigen Joghurt-KnoblauchMarinade ', '42.jpg', '9', 7, 0, '', '', 0, 1, 0, 'Uthappam', 'icon10.png', 'uthappam', 'Tuesday', 'Breakfast'),
(43, 'Patiala Lasooni paneer Tikka', 'Paneerwürfel, mariniert in dickem Joghurt, eingelegten Gewürzen und Mangopaste', '43.jpg', '13.99', 8, 0, 'G,H4', 'allergy7.png,allergy9.png', 0, 1, 0, 'Tandoori Vorspeisen (veg)', 'icon9.png', 'tandoori-vorspeisen-veg', 'Sunday', 'Dinner'),
(44, 'Mango achari Paneer Tikka', 'Brokkoli in einer üppigen Marinade aus abgetropftem Joghurt und Malai, gewürzt mit erlesenen Gewürzen', '44.jpg', '13.99', 8, 0, 'G,H4', 'allergy7.png,allergy9.png', 0, 1, 0, 'Tandoori Vorspeisen (veg)', 'icon9.png', 'tandoori-vorspeisen-veg', 'Tuesday', 'Dinner'),
(45, 'Tandoori Kesar malai brocolli', 'Eine Auswahl an gegrillten, würzigen Gemüsekebabs ', '45.jpg', '13.99', 8, 0, 'G,H4', 'allergy7.png,allergy9.png', 0, 1, 0, 'Tandoori Vorspeisen (veg)', 'icon9.png', 'tandoori-vorspeisen-veg', '', ''),
(46, 'Veg Kebab Platter', 'Mariniertes Hackfleisch mit braunen Zwiebeln und Käse, umhüllt von gehackten Zwiebeln und Paprika.', '46.jpg', '22', 8, 0, '', '', 0, 1, 0, 'Tandoori Vorspeisen (veg)', 'icon9.png', 'tandoori-vorspeisen-veg', 'Tuesday', 'Breakfast'),
(47, 'Jalandhari Mutton Seekh', 'Pomfret fisch mariniert in würzigen Tandoori-Gewürzen und perfekt gegrillt', '47.jpg', '19.5', 9, 1, 'G', 'allergy7.png', 0, 1, 1, 'Tandoori Vorspeisen (non-veg)', 'icon8.png', '', 'Tuesday', 'Dinner'),
(48, 'Tandoori Pomfret', 'Hühnchen mit Knochen, mariniert mit Joghurt und einer Mischung aus indischen Gewürzen', '48.jpg', '19.5', 9, 0, '', '', 0, 1, 1, 'Tandoori Vorspeisen (non-veg)', 'icon8.png', '', '', ''),
(49, 'Lal mirch ka Chicken Tikka', 'Saftige Hühnerstücke gewürzt und gekühlt in einem heißen Tandoor.\r\n', '49.jpg', '15.99', 9, 0, 'G', 'allergy7.png', 0, 1, 1, 'Tandoori Vorspeisen (non-veg)', 'icon8.png', '', '', ''),
(50, 'Tandoori Chicken', 'Hühnchen mit Knochen, mariniert mit Joghurt und einer Mischung aus indischen Gewürzen', '50.jpg', '16.99', 9, 0, 'G', 'allergy7.png', 0, 1, 1, 'Tandoori Vorspeisen (non-veg)', 'icon8.png', '', 'Monday', 'Dinner'),
(51, 'Madras Mania special Tandoori Platter', 'Ein gegrillter Platte mit Chicken Tikka, Chicken Malai Tikka, Lamm- und Hühnerseekh Kebab sowie Tandoori-Huhn', '51.jpg', '26', 9, 0, 'E,G,J', 'allergy5.png,allergy7.png,allergy11.png', 0, 1, 1, 'Tandoori Vorspeisen (non-veg)', 'icon8.png', '', '', ''),
(52, 'Chicken Malai Kali Mirch Tikka', 'Hähnchenstücke mariniert in Cashewmus und zerstoßenem schwarzen Pfeffer', '52.jpg', '15.99', 9, 1, 'H4,G,J', 'allergy9.png,allergy7.png,allergy11.png', 0, 1, 1, 'Tandoori Vorspeisen (non-veg)', 'icon8.png', '', '', ''),
(53, 'Madras Mania Special Jhinga (Shrimp)', 'Ein gegrillter Platte mit Chicken Tikka, Chicken Malai Tikka, Lamm- und\nHühnerseekh Kebab sowie Tandoori-Huhn', '53.jpg', '17.99', 9, 1, 'H4,G,J', 'allergy9.png,allergy7.png,allergy11.png', 0, 1, 1, 'Tandoori Vorspeisen (non-veg)', 'icon8.png', '', '', ''),
(54, ' Chicken Tikka Masala', 'Mariniertes, saftiges Hühnerbrustfilet mit Paprika- und Zwiebelstücken, zubereitet mit einer\nexotischen Gewürzmischung', '54.jpg', '14.99', 10, 0, 'G,J', 'allergy7.png,allergy11.png', 0, 1, 1, 'Nordindische Curries', 'icon2.png', '', '', ''),
(55, 'Butter Chicken', 'Geschnittene Parotta mit indischen Gewürzen und Gemüse, serviert mit Raitha', '55.jpg', '14.99', 10, 0, 'H4,G,J', 'allergy9.png,allergy7.png,allergy11.png', 0, 1, 1, 'Nordindische Curries', 'icon2.png', '', '', ''),
(56, 'Paneer Butter Masala ', 'Geschnittene Brot aus hellem Weizenmehl gekocht mit\nGewürzen und Eier – serviert mit Gemüse Curry und Raitha', '56.jpg', '13.99', 10, 0, 'H4,G,J', 'allergy9.png,allergy7.png,allergy11.png', 0, 1, 0, 'Nordindische Curries', 'icon2.png', '', '', ''),
(57, 'Vegetable Korma ', 'Brokkoli, Paprika, Karotten, Erbsen & Kartoffeln in mildem\nKokosnuss-Curry aus Kardamom und Cashewnüssen', '57.jpg', '13.99', 10, 0, 'H4,E,G,J', 'allergy9.png,allergy5.png,allergy7.png,allergy11.png', 0, 1, 0, 'Nordindische Curries', 'icon2.png', '', '', ''),
(58, 'Kadai Paneer ', 'Paneer-Käse-Stücke, Paprika &rote Zwiebeln in tomatigem Masala Curry', '58.jpg', '12.99', 10, 0, 'H4,G,J', 'allergy9.png,allergy7.png,allergy11.png', 0, 1, 0, 'Nordindische Curries', 'icon2.png', '', '', ''),
(59, 'Mango Chicken', 'Zartes Hähnchen in einer reichhaltigen, cremigen Mango-Kokos-Curry-Sauce, verfeinert mit\naromatischen Gewürzen\n', '59.jpg', '14.99', 10, 0, 'H4,G,J', 'allergy9.png,allergy7.png,allergy11.png', 0, 1, 1, 'Nordindische Curries', 'icon2.png', '', '', ''),
(60, 'Dal Makhani ', 'Schwarze Linsen in cremigem Curry aus Tomaten, Ingwer & Zwiebeln', '60.jpg', '12.99', 10, 0, 'H4,E,G,J', 'allergy9.png,allergy5.png,allergy7.png,allergy11.png', 0, 1, 0, 'Nordindische Curries', 'icon2.png', '', '', ''),
(61, 'Chicken Korma', 'Hähnchenbrust mit Karotten und Erbsen in milden Kokosnuss-Curry aus\nKardamom und Cashewnüssen', '61.jpg', '14.99', 10, 0, 'H4,G,J', 'allergy9.png,allergy7.png,allergy11.png', 0, 1, 1, 'Nordindische Curries', 'icon2.png', '', '', ''),
(62, 'Lamb Rogan Josh', 'Zartes Lammfleisch in einer würzigen, tomatenbasierten Sauce mit einer\r\nMischung aus aromatischen Gewürzen und Joghurt.', '62.jpg', '16.99', 10, 0, 'H4,E,G,J', 'allergy9.png,allergy5.png,allergy7.png,allergy11.png', 0, 1, 1, 'Nordindische Curries', 'icon2.png', '', '', ''),
(63, 'Dal Tadka ', 'Würzige, gelbe Linsen in einer cremigen Sauce mit aromatischen Gewürzen und\neinem Hauch von Knoblauch und Zwiebeln.', '63.jpg', '10.99', 11, 0, '', '', 0, 1, 0, 'Südindische Curries', 'icon11.png', '', '', ''),
(64, 'Vegetable Stew (Only Wednesdays)', 'Gemüsetopf aus frischem Gemüse, das in Kokosmilch mit feinen Gewürzen geköchelt wird und\nein wohltuendes sowie nahrhaftes Gericht entstehen lässt', '64.jpg', '9.99', 11, 0, 'H4,E,G,J', 'allergy9.png,allergy5.png,allergy7.png,allergy11.png', 0, 1, 0, 'Südindische Curries', 'icon11.png', '', '', ''),
(65, 'Ennai Kathirikkai', 'Gefüllte Babyauberginen in einer reichhaltigen, sauren Tamarindensoße, ein\nklassisches Gericht aus Tamil Nadu', '65.jpg', '9.99', 11, 0, 'E,G,J', 'allergy5.png,allergy7.png,allergy11.png', 0, 1, 0, 'Südindische Curries', 'icon11.png', '', '', ''),
(66, 'Chicken Stew (Only Wednesdays)', 'Eintopf mit zartem Hühnerfleisch, gekocht mit einer Auswahl an frischem\nGemüse in einer mild gewürzten Brühe', '66.jpg', '13.99', 11, 0, 'G,J', 'allergy7.png,allergy11.png', 0, 1, 1, 'Südindische Curries', 'icon11.png', '', '', ''),
(67, 'Malabar Fish Curry (Fri/Sat/Sundays)', 'Frischer Fisch in einer reichhaltigen, würzigen Kokosnuss-Curry-Sauce, verfeinert\nmit Tamarinde und aromatischen Gewürzen.', '67.jpg', '14.99', 11, 0, 'G,J', 'allergy7.png,allergy11.png', 0, 1, 1, 'Südindische Curries', 'icon11.png', '', '', ''),
(68, 'Malabar Lamb Curry (Fri/Sat/Sundays)', 'Zartes Lammfleisch in einer reichhaltigen, würzigen Kokosnuss-Curry-Sauce,\nverfeinert mit aromatischen Gewürzen und Tamarinde.', '68.jpg', '16.99', 11, 0, 'H4,G,J', 'allergy9.png,allergy7.png,allergy11.png', 0, 1, 1, 'Südindische Curries', 'icon11.png', '', '', ''),
(69, 'Kozhikode Shrimp Curry (Fri/Sat/Sunday)', 'Zarte Garnelen in einer pikanten, cremigen Kokosnuss-Curry-Sauce, verfeinert\nmit aromatischen Gewürzen und Tamarinde', '69.jpg', '15.99', 11, 0, 'H4,G,J', 'allergy9.png,allergy7.png,allergy11.png', 0, 1, 1, 'Südindische Curries', 'icon11.png', '', '', ''),
(70, 'Chicken Chettinad', 'Hausgemachtes Chettinad Hühnermasala, eine traditionelle südindische\nKöstlichkeit, die mit einer einzigartigen Mischung aus selbstgemachten ', '70.jpg', '13.99', 11, 0, 'H4,E,G,J', 'allergy9.png,allergy5.png,allergy7.png,allergy11.png', 0, 1, 1, 'Südindische Curries', 'icon11.png', '', '', ''),
(71, 'Naan', 'Frisches Fladenbrot aus Weizenmehl\n', '71.jpg', '3', 12, 0, 'A', 'allergy1.png', 0, 1, 0, 'Indische Brot', 'icon7.png', '', '', ''),
(72, 'Butter Naan', NULL, '72.jpg', '3.5', 12, 0, 'A', 'allergy1.png', 0, 1, 0, 'Indische Brot', 'icon7.png', '', '', ''),
(73, 'Panner Kulcha', NULL, '73.jpg', '3.5', 12, 0, 'A', 'allergy1.png', 0, 1, 0, 'Indische Brot', 'icon7.png', '', '', ''),
(74, 'Aloo Kulcha', NULL, '74.jpg', '3.75', 12, 0, 'A', 'allergy1.png', 0, 1, 0, 'Indische Brot', 'icon7.png', '', '', ''),
(75, 'Roti', NULL, '75.jpg', '3', 12, 0, 'A', 'allergy1.png', 0, 1, 0, 'Indische Brot', 'icon7.png', '', '', ''),
(76, 'Garlic Naan', NULL, '76.jpg', '3.75', 12, 0, 'A', 'allergy1.png', 0, 1, 0, 'Indische Brot', 'icon7.png', '', '', ''),
(77, 'Laccha Parata', NULL, '77.jpg', '3.75', 12, 0, 'G,H4', 'allergy7.png,allergy9.png', 0, 1, 0, 'Indische Brot', 'icon7.png', '', '', ''),
(78, 'Fruit Kesari', NULL, '78.jpg', '3.5', 13, 0, 'G', 'allergy7.png', 0, 1, 0, 'Desserts', 'icon15.png', '', '', ''),
(79, 'Gulab Jamun', NULL, '79.jpg', '3.5', 13, 0, 'G', 'allergy7.png', 0, 1, 0, 'Desserts', 'icon15.png', '', '', ''),
(80, 'Rasmalai', NULL, '80.jpg', '5', 13, 0, 'G,H4', 'allergy7.png,allergy9.png', 0, 1, 0, 'Desserts', 'icon15.png', '', '', ''),
(81, 'Payasam (Chef\'S special)', NULL, '81.jpg', '3.5', 13, 0, '', '', 0, 1, 0, 'Desserts', 'icon15.png', '', '', ''),
(82, 'Mango Lassi (0,4 L)', NULL, '82.jpg', '4.5', 14, 0, 'G', 'allergy7.png', 0, 1, 0, 'Getränke (Kalt)', 'icon13.png', '', '', ''),
(83, 'Salt lassi (0,4 L)', NULL, '83.jpg', '4.5', 14, 0, 'G', 'allergy7.png', 0, 1, 0, 'Getränke (Kalt)', 'icon13.png', '', '', ''),
(84, 'Fresh Nannari Lemon sarbath (Hausgemachte getränk)', NULL, '84.jpg', '5.5', 14, 0, '', '', 0, 1, 0, 'Getränke (Kalt)', 'icon13.png', '', '', ''),
(85, 'Fresh Lemon-Mint Juice (Hausgemachte getränk)', NULL, '85.jpg', '5.5', 14, 0, '', '', 0, 1, 0, 'Getränke (Kalt)', 'icon13.png', '', '', ''),
(86, 'Wasser mit Kohlensäure (0,25 L)', NULL, '86.jpg', '2.5', 14, 0, '', '', 0, 1, 0, 'Getränke (Kalt)', 'icon13.png', '', '', ''),
(87, 'Wasser mit Kohlensäure (0,75 L)', NULL, '87.jpg', '5.5', 14, 0, '', '', 0, 1, 0, 'Getränke (Kalt)', 'icon13.png', '', '', ''),
(88, 'Wasser Still (0,25 L)', NULL, '88.jpg', '2.5', 14, 0, '', '', 0, 1, 0, 'Getränke (Kalt)', 'icon13.png', '', '', ''),
(89, 'Coca Cola (0,33 L)', NULL, '89.jpg', '3.5', 14, 0, '', '', 0, 1, 0, 'Getränke (Kalt)', 'icon13.png', '', '', ''),
(90, 'Coca Cola (0,4 L)', NULL, '89.jpg', '4.1', 14, 0, '', '', 0, 1, 0, 'Getränke (Kalt)', 'icon13.png', '', '', ''),
(91, 'Indian Masala Chai', NULL, '91.jpg', '4.2', 15, 0, 'G', 'allergy7.png', 0, 1, 0, 'Getränke (Heiz)', 'icon12.png', '', '', ''),
(92, 'Kumbakonam Degree Coffee', NULL, '92.jpg', '3', 15, 0, 'G', 'allergy7.png', 0, 1, 0, 'Getränke (Heiz)', 'icon12.png', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(1, 'pranov@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
