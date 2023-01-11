-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2023 at 03:20 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodorder`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Name` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Mobile` varchar(250) NOT NULL,
  `Subject` varchar(250) NOT NULL,
  `Message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Name`, `Email`, `Mobile`, `Subject`, `Message`) VALUES
('CHANDAN KUMAR', 'ckj40856@gmail.com', '9487810674', 'sa', ''),
('CHANDAN KUMAR', 'ckj40856@gmail.com', '9487810674', 'sa', ''),
('BIRJU KUMAR', 'ckj40856@gmail.com', '8903079750', 'asd', 'asdasdasd'),
('CHANDAN KUMAR', 'ckj40856@gmail.com', '9487810674', 'asd', 'hfgdsfsx');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `username` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`username`, `fullname`, `email`, `contact`, `address`, `password`) VALUES
('birju', 'BIRJU KUMAR', 'bkm123r@gmail.com', '8903079750', 'Pondicherry University, SRK HOSTEL ROOM NUMBER-59,', 'Birju123@'),
('Jhanvi', 'Jhanvi Patil', 'jhanvi_patil@gmail.com', '7349743632', 'JSSSTU, Mysore-570006', 'jaanu@123'),
('ramesh_reddy', 'Ramesh Reddy', 'ramesh_sri@gmail.com', '9980259852', 'SKCET,Coimbatore', 'ramesh1298');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `F_ID` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `R_ID` int(30) NOT NULL,
  `images_path` varchar(200) NOT NULL,
  `options` varchar(10) NOT NULL DEFAULT 'ENABLE',
  `allergy` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`F_ID`, `name`, `price`, `description`, `R_ID`, `images_path`, `options`, `allergy`, `category`) VALUES
(58, 'Paneer', 60, 'Soft', 1, 'images/Masala_Paneer_Kathi_Roll.jpg', 'ENABLE', 'Glutten-flour', 'Rolls'),
(59, 'Veg Fried Rice', 60, 'Recipe is made with a hearty mix of fresh veggies, green onions, seasonings and spices for an incredibly flavorful fried rice dish.', 6, 'images/veg_fried.jpg', 'ENABLE', 'NULL', 'Biryani'),
(60, 'Chocolate Hazelnut Truffle', 99, 'Lose all senses over this very delicious chocolate hazelnut truffle.', 3, 'images/Chocolate_Hazelnut_Truffle.jpg', 'DISABLE', NULL, NULL),
(61, 'Happy Happy Choco Chip Shake', 80, 'Happy Happy Choco Chip Shake - a perfect party sweet treat.', 1, 'images/Happy_Happy_Choco_Chip_Shake.jpg', 'ENABLE', NULL, NULL),
(62, 'Spring Rolls', 65, 'The mixed vegetables are filled inside a thin wrapper or pastry and shaped into a cylindrical roll. ', 2, 'images/Spring_Rolls.jpg', 'ENABLE', 'Peanut', 'Rolls'),
(63, 'Baahubali Thali', 75, 'Baahubali Thali is accompanied by Kattapa Biriyani, Devasena Paratha, Bhalladeva Patiala Lassi', 3, 'images/Baahubali_Thali.jpg', 'ENABLE', NULL, NULL),
(64, 'Egg Fried Rice', 170, 'A delicious Chinese recipe with stir fried eggs squashed together with garlic, onion, rice and various other spicy sauces and finally served with scrambled egg', 6, 'images/egg_fried.png', 'ENABLE', 'Eggs<br>Sesame seeds', 'Biryani'),
(65, 'Hyderabadi Chicken Dum Biryani', 265, 'Mouth watering and authentic Indian dish with succulent chicken in layers of fluffy rice, fragrant spices and fried onions.', 6, 'images/dum_biryani.jpg', 'ENABLE', 'None', 'Biryani'),
(66, 'Gobi Manchurian', 170, 'Manchurian is a spicy-sweet & tangy sauce made by combining a few basic pantry ingredients such as chili sauce, soy sauce, and ketchup.', 6, 'images/gobi_manchurian.jpg', 'ENABLE', 'All-purpose-flour<br>Soy-sauce', 'Starters'),
(67, 'Butter Chicken Thali', 360, 'A wholsesome thali with our signature Golia Butter Chicken,Dal Makhani, Jeera Rice, Roomali Roti, Chutney and Lachcha Pyaaz.', 6, 'images/bchicken_thali.jpg', 'ENABLE', 'Sesame', 'Thali'),
(68, 'Butter Paneer Thali', 295, 'A wholsesome thali with our signature Golia Butter Paneer, Dal Makhani, Jeera Rice, Roomali Roti, Chutney and Lachcha Pyaaz.', 6, 'images/bpaneer_thali.jpg', 'ENABLE', 'Paneer', 'Thali'),
(69, 'Rajma Thali', 249, 'Fibre-rich kidney beans, slowly cooked in a thick and spicy onion tomato masala gravy. Served with a side of Basmati RIce, a homestyle Paratha & Gulab Jamun.', 6, 'images/Rajma_thali.jpg', 'ENABLE', 'Onion<br>Garlic', 'Thali'),
(70, 'Punjabi Dal combo', 280, 'Yellow Dal Tadka,Aloo Capsicum,Kheera Raita, Jeera Rice, 2 Lacha Roti, Salad & Sweet Boondi.', 6, 'images/dal_combo.jpg', 'ENABLE', 'None', 'Thali'),
(71, 'Samosa', 40, 'Samosa is a deep fried pastry with a spiced filling usually made with potatoes, spices and herbs.', 2, 'images/samosa.jpg', 'ENABLE', 'None', 'Starters'),
(72, 'Paneer Pakora', 45, 'Pakora are crispy fritters made with vegetables like onions, potatoes, gram flour, spices and herbs and paneer.', 2, 'images/paneer pakora.jpg', 'ENABLE', 'Gram flour<br>Herbs', 'Starters'),
(73, 'South Indian Thali', 149, 'This thali consists of tomato rasam, cabbage palya, kadale kalu usli, steamed rice, dry fruits laddu, homemade yogurt, and homemade lemon pickle.', 6, 'images/south_thali.jpg', 'ENABLE', 'None', 'Thali'),
(74, 'North Indian Thali', 150, 'This thali consists of paneer paratha, dum aloo,boondi raita,veg pulao, peanut chat, papad.', 6, 'images/north_thali.jpg', 'ENABLE', 'Peanut', 'Thali'),
(75, 'French Fries', 60, 'Each fry is coated in a layer of golden crisp that gives way to a soft, welcoming interior. They hit savory and umami with a hint of sweetness and they taste like potatoes, oil, and just the right amo', 6, 'images/frenchfries.jpg', 'ENABLE', 'Soyabean Oil', 'Starters'),
(76, 'Egg roll', 79, 'A thin egg-dough casing filled with minced vegetables and with soy sauce.', 6, 'images/egg_roll.jpg', 'ENABLE', 'Egg<br>Soy Sauce', 'Rolls'),
(77, 'Double Egg Roll', 89, 'A thin egg-dough casing filled with minced vegetables and soy sauce.', 6, 'images/degg_roll.jpg', 'ENABLE', 'Egg', 'Rolls'),
(78, 'Masala Chicken Tikka Wrap', 185, 'Smokey Chicken Tikka taken a notch above with a generous amount of minty, tangy mayonnaise clubbed with crunchy oinions.', 6, 'images/ctikka_roll.jpg', 'ENABLE', 'Onion', 'Rolls'),
(79, 'Chicken Bhuna Wrap', 185, 'Roasted and flavoured chicken pieces slow-cooked in spicy bhuna masala and wrapped with crisp onions.', 6, 'images/cbhuna_roll.jpg', 'ENABLE', 'Onion', 'Rolls'),
(80, 'Veg soup', 110, 'A Delicious, mouth melting beginner starter .', 6, 'images/soup.jpg', 'ENABLE', 'Onion<br>Soy-sauce<br>Sesame seeds\r\n', 'Starters'),
(81, 'Masala Papad', 110, 'It is a thin , crisp disc-shaped food filled with the taste of veggies .\r\n', 6, 'images/mp.jpg', 'ENABLE', 'Onion<br>Black pepper ', 'Starters'),
(82, 'Paneer Tikka', 230, 'Paneer Tikka is a popular and delicious tandoori snack where Paneer are marinated in a spiced yogurt-based marinade, arranged on skewers and grilled in the oven.\r\n', 6, 'images/panner_tikka.jpg', 'ENABLE', 'Onion', 'Starters'),
(83, 'Pav Bhajji', 149, 'It consisting of a vegetable curry (bhaji) cooked in tomato gravy and served with a soft bread , lemon and chopped onion. ', 6, 'images/pav_bhaji.jpg', 'ENABLE', 'Onion', 'Starters'),
(84, 'Veg Noodles', 189, 'Be healthy,  with the most delicious way of being healthy by consuming vegetables with noodles.', 6, 'images/veg_noodles.jpg', 'ENABLE', 'Onion<br>Black pepper\r\n', 'Noodles'),
(85, 'Schezwan Noodles', 219, 'A popular and flavored noodles recipe made with thin noodles and schezwan sauce .', 6, 'images/snoodles.jpg', 'ENABLE', 'Onion', 'Noodles'),
(86, 'Manchurian Noodles', 219, 'Saucy indo chinese style noodles in a savory spicy tangy sauce made with vegetables , soy sauce and vinegar .\r\n', 6, 'images/gbnoodles.jpg', 'ENABLE', 'Onion<br>Soy-sauce <br>Vinegar \r\n', 'Noodles'),
(87, 'Cheese Maggi', 99, 'It is a delicious twist to your ultimate comfort food masala maggi where cheese and green chilly are added to make it super cheesy and yummy.', 6, 'images/cheese_maggi.jpg', 'ENABLE', 'Dairy product', 'Noodles'),
(88, 'Korean Noodles', 249, 'Enjoy the authentic taste of korean noodles . \r\n', 6, 'images/knoodles.jpg', 'ENABLE', 'Soy-sauce<br>Garlic \r\n', 'Noodles'),
(90, 'Egg Noodles', 80, 'Stir noodles tossed with sauces and nutrient rich veggies with egg.', 6, 'images/eggnoodles.jpg', 'ENABLE', 'Flour', 'Noodles'),
(91, 'Plain Paratha', 109, 'It is a crispy , chewy , buttery , and comprised of innumerable flaky layers , the paratha ia a flatbread that can complement any dish and be eaten at any meal.', 6, 'images/pparatha.jpg', 'ENABLE', 'Dairy Products', 'Paratha'),
(92, 'Aloo Paratha', 129, 'It is a paratha stuffed with a delicious spiced potato mixture served with curd and authentic green chutney.', 6, 'images/aparatha.jpg', 'ENABLE', 'Dairy Products<br>Garlic<br>Ground Nuts', 'Paratha'),
(93, 'Cheese Aloo Paratha', 139, 'It is a paratha stuffed with delicious spiced potato mixture with a cheesy layer served with curd and authentic green chutney.', 6, 'images/caparatha.jpg', 'ENABLE', 'Dairy Products<br>Garlic<br>Ground Nuts', 'Paratha'),
(94, 'Onion Paratha', 129, 'Paratha is delicious whole wheat flatbreads stuffed with  piquant onions , spicy green chillies and savory spices.', 6, 'images/oparatha.jpg', 'ENABLE', 'Onion', 'Paratha'),
(95, 'Aloo onion Paratha', 159, 'Paratha is delicious whole wheat flatbread stuffed with a delicious spiced potato mixture , piquant onions , spicy green chillies and savory spices.', 6, 'images/aoparatha.jpg', 'ENABLE', 'Onion', 'Paratha'),
(96, 'Chicken Kheema Paratha', 179, 'It is a paratha stuffed with a delicious spiced potato mixture and chicken served with curd and authentic green chutney.', 6, 'images/cparatha.jpg', 'ENABLE', 'Dairy Products<br>Garlic', 'Paratha');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `username` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`username`, `fullname`, `email`, `contact`, `address`, `password`) VALUES
('aditi068', 'Aditi Naik', 'aditi@gmail.com', '8654751259', 'Goa', 'aditi'),
('aminnikhil073', 'Nikhil Amin', 'aminnikhil073@gmail.com', '9632587412', 'Karnataka', 'nikhil'),
('ckumar', 'Chandan Kumar', 'ckj40856@gmail.com', '9487810674', 'Pondicherry University, SRK HOSTEL ROOM NUMBER-59,', 'Ckumar123'),
('dhiraj', 'DHIRAJ kUMAR', 'dk123@gmail.com', '8903079750', 'Pondicherry. Le cafe', 'Dhiraj'),
('roshanraj07', 'Roshan Raj', 'roshan@gmail.com', '9541258761', 'Bihar', 'roshan');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_ID` int(30) NOT NULL,
  `F_ID` int(30) NOT NULL,
  `foodname` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `quantity` int(30) NOT NULL,
  `order_date` date NOT NULL,
  `username` varchar(30) NOT NULL,
  `R_ID` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_ID`, `F_ID`, `foodname`, `price`, `quantity`, `order_date`, `username`, `R_ID`) VALUES
(128, 83, 'Pav Bhajji', 149, 1, '2022-12-27', 'Jhanvi', 6),
(129, 67, 'Butter Chicken Thali', 360, 2, '2022-12-29', 'Jhanvi', 6),
(134, 86, 'Manchurian Noodles', 219, 1, '2023-01-10', 'birju', 6),
(138, 93, 'Cheese Aloo Paratha', 139, 1, '2023-01-11', 'birju', 6);

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `R_ID` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `M_ID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`R_ID`, `name`, `email`, `contact`, `address`, `M_ID`) VALUES
(1, 'Nikhil\'s Restaurant', 'nikhil@restaurant.com', '7998562145', 'Karnataka', 'aminnikhil073'),
(2, 'Roshan\'s Restaurant', 'roshan@restaurant.com', '9887546821', 'Bihar', 'roshanraj07'),
(3, 'Aditi\'s Restaurant', 'aditi@restaurant.com', '7778564231', 'Goa', 'aditi068'),
(4, 'Food Exploria', 'ckj40856@gmail.com', '09487810674', 'C:\\xampp\\htdocs\\FoodExploria-master\\images/coffee.', 'ckumar'),
(6, 'Le Cafe', 'lecafepondi234@gmail.com', '9443369040', 'Pondicherry,rock beach Near,Le cafe', 'dhiraj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`F_ID`,`R_ID`),
  ADD KEY `R_ID` (`R_ID`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_ID`),
  ADD KEY `F_ID` (`F_ID`),
  ADD KEY `username` (`username`),
  ADD KEY `R_ID` (`R_ID`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`R_ID`),
  ADD UNIQUE KEY `M_ID_2` (`M_ID`),
  ADD KEY `M_ID` (`M_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `F_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `R_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`R_ID`) REFERENCES `restaurants` (`R_ID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`F_ID`) REFERENCES `food` (`F_ID`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`username`) REFERENCES `customer` (`username`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`R_ID`) REFERENCES `restaurants` (`R_ID`);

--
-- Constraints for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD CONSTRAINT `restaurants_ibfk_1` FOREIGN KEY (`M_ID`) REFERENCES `manager` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
