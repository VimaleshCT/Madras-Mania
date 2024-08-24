-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2024 at 10:35 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

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
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `category_icon` varchar(255) NOT NULL,
  `home_menu` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `category_icon`, `home_menu`, `status`, `date`) VALUES
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
(15, 'Getränke (Heiz)', '<i class=\"flaticon-chili-pepper\"></i>', 1, 1, '2024-08-05');

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
  `topseller` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `veg non-veg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `description`, `product_image`, `price`, `category_id`, `todayspecial`, `topseller`, `status`, `veg non-veg`) VALUES
(1, 'Kozhi Malli Saaru ', 'Eine würzige südindische Hühnersuppe mit frischem Koriander und aromatischen Gewürzen', '1.png', '4.9', 1, 1, 0, 1, 1),
(2, 'Tomato Rasam ', 'Eine pikante südindische Tomatensuppe aromatischen Gewürzen.', '2.png', '4.49', 1, 1, 0, 1, 0),
(3, 'Medhu Vada', 'Weiche, knusprige Linsen-Donuts, frittiert und perfekt gewürzt', '3.png', '5.99', 2, 1, 0, 1, 0),
(4, 'Milagai / Onion / Vazhakkai Bread Bajji', 'Tiefgebackene Fritters aus ausgewählten Gemüsesorten, umhüllt von gewürztem Linsen-Teig', '4.png', '5.99', 2, 1, 0, 1, 0),
(5, 'Tea Kadai Samosa', 'Knuspriger, frittierter Snack aus hausgemachten Samosa-Teigblättern, gefüllt mit würziger Zwiebel-Füllung', '5.png', '5.99', 2, 1, 0, 1, 0),
(6, 'Marina Beach Sundal', 'Knuspriger, frittierter Snack aus hausgemachten Samosa-Teigblättern, gefüllt mit würziger Zwiebel-Füllung', '6.png', '4.99', 2, 1, 0, 1, 0),
(7, 'Kuzhi Paniyaram', 'Knusprig außen, innen weich, Reis- und Linsendumplings, serviert mit Chutneys und Samba', '7.png', '5.99', 2, 0, 0, 1, 0),
(8, 'Sambar Vada (2 Nos)', 'Frittierter Linsendonut in köstlichen Sambar, garniert mit Zwiebeln und Koriander ', '8.png', '5.99', 2, 0, 0, 1, 0),
(9, 'Mysore Bonda (2 Nos)', 'Knusprige Linsenkugeln mit Chutney und Sambar', '9.png', '5.99', 2, 0, 0, 1, 0),
(10, 'Curd Vada (2 Nos)', 'Linsendonut in Joghurt, garniert mit Karotten, Koriander, Chilipulver & knusprigen Streuseln', '10.png', '5.99', 2, 0, 0, 1, 0),
(11, 'Chicken Pepper Fry', 'Linsendonut in Joghurt, garniert mit Karotten, Koriander, Chilipulver & knusprigen Streuseln', '11.png', '12', 3, 0, 0, 1, 1),
(12, 'Egg Podimas', 'Linsendonut in Joghurt, garniert mit Karotten, Koriander, Chilipulver & knusprigen Streuseln', '12.png', '7', 3, 0, 0, 1, 1),
(13, 'Madras Chilli Chicken', 'Saftige Hühnerstücke, mariniert, gebraten und mit einer würzigen Sauce aus grünen Chilischoten, Knoblauch und Sojasauce serviert', '13.png', '9.5', 3, 0, 0, 1, 1),
(14, 'Madurai Mutton Chuka', 'Knochenlose zarte Stücke von Lammfleisch, mariniert in handgemachten Gewürzmischungen des Kochs, mit Cashewnüssen geröstet', '14.png', '14', 3, 0, 0, 1, 1),
(15, 'Tuticorin Nethili Fry', 'Knochenlose zarte Stücke von Lammfleisch, mariniert in handgemachten Gewürzmischungen des Kochs, mit Cashewnüssen geröstet', '15.png', '15', 3, 0, 0, 1, 1),
(16, 'Plain Dosa ', 'Dünner knuspriger Reis-Linsen-Crêpe', '16.png', '7', 4, 0, 0, 1, 0),
(17, 'Rava Dosa ', ' Dünner & knuspriger Crêpe aus Grieß & Reis mild gewürzt & garniert', '17.png', '8.5', 4, 0, 0, 1, 0),
(18, 'Madras Masala Dosa', 'Reis-Linsen-Crêpe, gefüllt mit Kartoffelpüree und Zwiebeln', '18.png', '8.99', 4, 0, 0, 1, 0),
(19, 'Mysore Masala Dosa', 'Rotes Chili-Chutney auf dünnem Reis-Linsen-Crêpe, gefüllt mit Kartoffelpüree und Zwiebeln', '19.png', '8.99', 4, 0, 0, 1, 0),
(20, 'Milagaipodi Dosa ', 'Dünner Reis-Linsen-Crepe gefüllt mit einer Mischung aus gemahlenen Gewürzen, trockenen Chilischoten, Linsen, Kartoffeln, Zwiebeln und Sesana', '20.png', '7.5', 4, 0, 0, 1, 0),
(21, 'Paneer Dosa', 'Dünner Reiscrêpe gefüllt mit Hüttenkäse', '21.png', '9.99', 4, 0, 0, 1, 0),
(22, 'Onion Dosa ', 'Dünner, knuspriger Reis-Linsen-Crêpe mit Zwiebeln', '22.png', '7.99', 4, 0, 0, 1, 0),
(23, 'Ghee Roast', 'Dünner, langer Reis-Linsen-Crêpe, bestreut mit Desi Ghee', '23.png', '8.5', 4, 0, 0, 1, 0),
(24, 'Onion Rava Dosa ', 'Dünner, knuspriger Reis-Linsen-Crêpe mit Zwiebeln', '24.png', '8.99', 4, 0, 0, 1, 0),
(25, 'Onion Rava Masala dosa ', 'Dünner Crêpe aus Grieß & Reis bestreut mit Zwiebeln\n', '25.png', '9.99', 4, 0, 0, 1, 0),
(26, 'Pav Bhaji Dosa', 'Dünner, knuspriger Reis-Linsen-Crêpe mit Köstlicher Pav Bhaji(Füllung aus aromatischem Kartoffelgemüse ) ', '26.png', '10.99', 4, 0, 0, 1, 0),
(27, 'Schwezan Masala Dosa', 'Knuspriger Masala Dosa gefüllt mit Schezwan-gewürzten Kartoffeln und Käse', '27.png', '10.99', 4, 0, 0, 1, 0),
(28, 'Mushroom Chilli Cheese Dosa', 'Knusprige Dosa gefüllt mit würzigen Champignons, Chili und KäseKnusprige Dosa gefüllt mit würzigen Champignons, Chili und Käse', '28.png', '10.99', 4, 0, 0, 1, 0),
(29, 'Chilly Cheese Dosa', 'Dünner, langer Crêpe aus Reis und Linsen gefüllt mit würzigem Chili und Käse.', '29.png', '10.99', 4, 0, 0, 1, 0),
(30, 'Madras Mania Dosa( Chef\'s Special)', 'Dünner, langer Crêpe aus Reis und Linsen gefüllt mit würzigem Chili und Käse.', '30.png', '14.99', 4, 0, 0, 1, 0),
(31, 'Mickey Mouse Dosa ( Kids\' Special)', 'Ein einfacher Dosa in Mickey-Maus-Form, speziell für Kinder gestaltet.', '31.png', '7', 4, 0, 0, 1, 0),
(32, 'Idly (3 Nos)', 'Zermahlener gedämpfte, flach-runde Küchlein aus einem fermentierten Teig auf Basis von Urdbohnen und Reis.', '32.png', '7', 5, 0, 0, 1, 0),
(33, 'Chilli Idly', 'Gedünstete Reisküchlein gehackt, leicht angebraten und mit würziger Chilisauce verfeinert.', '33.png', '9', 5, 0, 0, 1, 0),
(34, 'Idly Vada', 'Gedünsteter Reis- und Linsendonut, serviert mit Chutney und Sambar', '34.png', '8', 5, 0, 0, 1, 0),
(35, 'Thatte Idly (Karnataka Style)', 'Große, flache Donuts aus einem Teig aus Reis und Linsen, traditionell gedämpft und mit verschiedenen Chutneys und Sambar serviert', '35.png', '7.5', 5, 0, 0, 1, 0),
(36, 'Mini Sambar Idly', 'Mini-Müßiggang köchelte im köstlichen Süden Indische Linsensoße, garniert mit Ghee', '36.png', '7', 5, 0, 0, 1, 0),
(37, 'Parotta & Salna', 'Köstliches südindisches luftiges Brot serviert mit Kartoffelpüree und Salna (Curry Soße)', '37.png', '8', 6, 0, 0, 1, 0),
(38, 'Veg Kaima Parotta', 'Geschnittene Parotta mit indischen Gewürzen und Gemüse, serviert mit Raitha', '38.png', '10.5', 6, 0, 0, 1, 0),
(39, 'Egg Kothu Parotta', 'Geschnittene Brot aus hellem Weizenmehl gekocht mit Gewürzen und Eier – serviert mit Gemüse Curry und Raitha.', '39.png', '11', 6, 0, 0, 1, 1),
(40, 'Onion Uthappam ', 'Dicker Reis-Linsen-Pfannkuchen mit Zwiebeln', '40.png', '7.99', 7, 0, 0, 1, 0),
(41, 'Veg Uthappam', 'Dicker Reis-Linsen-Pfannkuchen mit gemischtem Gemüse\n', '41.png', '9', 7, 0, 0, 1, 0),
(42, 'Tomato Onion Uthappam', 'Gegrillter Paneer in einer würzigen Joghurt-KnoblauchMarinade ', '42.png', '9', 7, 0, 0, 1, 0),
(43, 'Patiala Lasooni paneer Tikka', 'Paneerwürfel, mariniert in dickem Joghurt, eingelegten Gewürzen und Mangopaste', '43.png', '13.99', 8, 0, 0, 1, 0),
(44, 'Mango achari Paneer Tikka', 'Brokkoli in einer üppigen Marinade aus abgetropftem Joghurt und Malai, gewürzt mit erlesenen Gewürzen', '44.png', '13.99', 8, 0, 0, 1, 0),
(45, 'Tandoori Kesar malai brocolli', 'Eine Auswahl an gegrillten, würzigen Gemüsekebabs ', '45.png', '13.99', 8, 0, 0, 1, 0),
(46, 'Veg Kebab Platter', 'Mariniertes Hackfleisch mit braunen Zwiebeln und Käse, umhüllt von gehackten Zwiebeln und Paprika.', '46.png', '22', 8, 0, 0, 1, 0),
(47, 'Jalandhari Mutton Seekh', 'Pomfret fisch mariniert in würzigen Tandoori-Gewürzen und perfekt gegrillt', '47.png', '19.5', 9, 0, 0, 1, 1),
(48, 'Tandoori Pomfret', 'Hühnchen mit Knochen, mariniert mit Joghurt und einer Mischung aus indischen Gewürzen', '48.png', '19.5', 9, 0, 0, 1, 1),
(50, 'Tandoori Chicken', 'Hühnchen mit Knochen, mariniert mit Joghurt und einer Mischung aus indischen Gewürzen', '50.png', '16.99', 9, 0, 0, 1, 1),
(51, 'Madras Mania special Tandoori Platter', 'Ein gegrillter Platte mit Chicken Tikka, Chicken Malai Tikka, Lamm- und Hühnerseekh Kebab sowie Tandoori-Huhn', '51.png', '26', 9, 0, 0, 1, 1),
(52, 'Chicken Malai Kali Mirch Tikka', 'Hähnchenstücke mariniert in Cashewmus und zerstoßenem schwarzen Pfeffer', '52.png', '15.99', 9, 0, 0, 1, 1),
(53, 'Madras Mania Special Jhinga (Shrimp)', 'Ein gegrillter Platte mit Chicken Tikka, Chicken Malai Tikka, Lamm- und\nHühnerseekh Kebab sowie Tandoori-Huhn', '53.png', '17.99', 9, 0, 0, 1, 1),
(54, ' Chicken Tikka Masala', 'Mariniertes, saftiges Hühnerbrustfilet mit Paprika- und Zwiebelstücken, zubereitet mit einer\nexotischen Gewürzmischung', '54.png', '14.99', 10, 0, 0, 1, 1),
(55, 'Butter Chicken', 'Geschnittene Parotta mit indischen Gewürzen und Gemüse, serviert mit Raitha', '55.png', '14.99', 10, 0, 0, 1, 1),
(56, 'Paneer Butter Masala ', 'Geschnittene Brot aus hellem Weizenmehl gekocht mit\nGewürzen und Eier – serviert mit Gemüse Curry und Raitha', '56.png', '13.99', 10, 0, 0, 1, 0),
(57, 'Vegetable Korma ', 'Brokkoli, Paprika, Karotten, Erbsen & Kartoffeln in mildem\nKokosnuss-Curry aus Kardamom und Cashewnüssen', '57.png', '13.99', 10, 0, 0, 1, 0),
(58, 'Kadai Paneer ', 'Paneer-Käse-Stücke, Paprika &rote Zwiebeln in tomatigem Masala Curry', '58.png', '12.99', 10, 0, 0, 1, 0),
(59, 'Mango Chicken', 'Zartes Hähnchen in einer reichhaltigen, cremigen Mango-Kokos-Curry-Sauce, verfeinert mit\naromatischen Gewürzen\n', '59.png', '14.99', 10, 0, 0, 1, 1),
(60, 'Dal Makhani ', 'Schwarze Linsen in cremigem Curry aus Tomaten, Ingwer & Zwiebeln', '60.png', '12.99', 10, 0, 0, 1, 0),
(61, 'Chicken Korma', 'Hähnchenbrust mit Karotten und Erbsen in milden Kokosnuss-Curry aus\nKardamom und Cashewnüssen', '61.png', '14.99', 10, 0, 0, 1, 1),
(62, 'Lamb Rogan Josh', 'Zartes Lammfleisch in einer würzigen, tomatenbasierten Sauce mit einer\nMischung aus aromatischen Gewürzen und Joghurt.', '62.png', '16.99', 10, 0, 0, 1, 1),
(63, 'Dal Tadka ', 'Würzige, gelbe Linsen in einer cremigen Sauce mit aromatischen Gewürzen und\neinem Hauch von Knoblauch und Zwiebeln.', '63.png', '10.99', 11, 0, 0, 1, 0),
(64, 'Vegetable Stew (Only Wednesdays)', 'Gemüsetopf aus frischem Gemüse, das in Kokosmilch mit feinen Gewürzen geköchelt wird und\nein wohltuendes sowie nahrhaftes Gericht entstehen lässt', '64.png', '9.99', 11, 0, 0, 1, 0),
(65, 'Ennai Kathirikkai', 'Gefüllte Babyauberginen in einer reichhaltigen, sauren Tamarindensoße, ein\nklassisches Gericht aus Tamil Nadu', '65.png', '9.99', 11, 0, 0, 1, 0),
(66, 'Chicken Stew (Only Wednesdays)', 'Eintopf mit zartem Hühnerfleisch, gekocht mit einer Auswahl an frischem\nGemüse in einer mild gewürzten Brühe', '66.png', '13.99', 11, 0, 0, 1, 1),
(67, 'Malabar Fish Curry (Fri/Sat/Sundays)', 'Frischer Fisch in einer reichhaltigen, würzigen Kokosnuss-Curry-Sauce, verfeinert\nmit Tamarinde und aromatischen Gewürzen.', '67.png', '14.99', 11, 0, 0, 1, 1),
(68, 'Malabar Lamb Curry (Fri/Sat/Sundays)', 'Zartes Lammfleisch in einer reichhaltigen, würzigen Kokosnuss-Curry-Sauce,\nverfeinert mit aromatischen Gewürzen und Tamarinde.', '68.png', '1699', 11, 0, 0, 1, 1),
(69, 'Kozhikode Shrimp Curry (Fri/Sat/Sunday)', 'Zarte Garnelen in einer pikanten, cremigen Kokosnuss-Curry-Sauce, verfeinert\nmit aromatischen Gewürzen und Tamarinde', '69.png', '15.99', 11, 0, 0, 1, 1),
(70, 'Chicken Chettinad', 'Hausgemachtes Chettinad Hühnermasala, eine traditionelle südindische\nKöstlichkeit, die mit einer einzigartigen Mischung aus selbstgemachten ', '70.png', '13.99', 11, 0, 0, 1, 1),
(71, 'Naan', 'Frisches Fladenbrot aus Weizenmehl\n', '71.png', '3', 12, 0, 0, 1, 0),
(72, 'Butter Naan', NULL, '72.png', '3.5', 12, 0, 0, 1, 0),
(73, 'Panner Kulcha', NULL, '73.png', '3.5', 12, 0, 0, 1, 0),
(74, 'Aloo Kulcha', NULL, '74.png', '3.75', 12, 0, 0, 1, 0),
(75, 'Roti', NULL, '75.png', '3', 12, 0, 0, 1, 0),
(76, 'Garlic Naan', NULL, '76.png', '3.75', 12, 0, 0, 1, 0),
(77, 'Laccha Parata', NULL, '77.png', '3.75', 12, 0, 0, 1, 0),
(78, 'Fruit Kesari', NULL, '78.png', '3.5', 13, 0, 0, 1, 0),
(79, 'Gulab Jamun', NULL, '79.png', '3.5', 13, 0, 0, 1, 0),
(80, 'Rasmalai', NULL, '80.png', '5', 13, 0, 0, 1, 0),
(81, 'Payasam (Chef\'S special)', NULL, '81.png', '3.5', 13, 0, 0, 1, 0),
(82, 'Mango Lassi (0,4 L)', NULL, '82.png', '4.5', 14, 0, 0, 1, 0),
(83, 'Salt lassi (0,4 L)', NULL, '83.png', '4.5', 14, 0, 0, 1, 0),
(84, 'Fresh Nannari Lemon sarbath (Hausgemachte getränk)', NULL, '84.png', '5.5', 14, 0, 0, 1, 0),
(85, 'Fresh Lemon-Mint Juice (Hausgemachte getränk)', NULL, '85.png', '5.5', 14, 0, 0, 1, 0),
(86, 'Wasser mit Kohlensäure (0,25 L)', NULL, '86.png', '2.5', 14, 0, 0, 1, 0),
(87, 'Wasser mit Kohlensäure (0,75 L)', NULL, '87.png', '5.5', 14, 0, 0, 1, 0),
(88, 'Wasser Still (0,25 L)', NULL, '88.png', '2.5', 14, 0, 0, 1, 0),
(89, 'Coca Cola (0,33 L)', NULL, '89.png', '3.5', 14, 0, 0, 1, 0),
(90, 'Coca Cola (0,4 L)', NULL, '90.png', '4.1', 14, 0, 0, 1, 0),
(91, 'Indian Masala Chai', NULL, '91.png', '4.2', 15, 0, 0, 1, 0),
(92, 'Kumbakonam Degree Coffee', NULL, '92.png', '3', 15, 0, 0, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
