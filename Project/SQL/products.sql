-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 24, 2025 at 02:16 PM
-- Server version: 5.7.24
-- PHP Version: 8.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakery`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(500) NOT NULL,
  `product_description` varchar(500) NOT NULL,
  `product_price` decimal(10,0) NOT NULL,
  `product_imgurl` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_description`, `product_price`, `product_imgurl`) VALUES
(1, 'Traditional Fruit Hot Cross Bun', 'A traditional Easter treat! Filled with raisins, currants and mixed spice, our Hot Cross Buns are perfect for a breakfast treat. These pillowy hot cross buns are only available in the spring so get them while they’re hot!', '16', './img/product-1.png'),
(2, 'Everything Bagel', 'Our Bagels are baked fresh from scratch right here in bakery each and everyday. Hand stretched to perfection, our Everything Bagel is loaded with flavour and delivers that extra crunch! Top with your favourite cream cheese and enjoy!', '18', './img/product-2.png'),
(3, 'Pepperoni Mini Pizza', 'This pizza is a classic for a reason! Made using our rustic Turkish dough for an extra crispy crust, we add tangy tomato sauce, crispy pepperoni, and our savoury aged white cheddar cheese.', '20', './img/product-3.png'),
(4, 'Chorizo Pizza Buffin', 'Our delicious bagels with pizza sauce, chorizo, and cheddar cheese in a delectable muffin to create our iconic pizza Buffin.  ', '20', './img/product-4.png'),
(5, 'Plain Bagel', 'Our Bagels are baked fresh from scratch right here in bakery each and everyday. Hand stretched to perfection, our Plain Bagel gives that classic taste. Top with you favourite cream cheese and enjoy!', '15', './img/product-5.png'),
(6, 'Cheese Buffin', 'Our delicious bagels that you know and love, with savoury cheddar cheese baked into a delectable muffin to create our iconic Cheesy Buffin.', '20', './img/product-6.png'),
(7, 'Garlic Cheddar Sourdough Viennas', 'Our Garlic Cheddar Sourdough gives you a warm, cozy feeling with the added deliciousness of aged white cheddar, garlic and Italian herbs. You will be a superstar adding this to your favourite meal. Maybe just have a mint or two on hand', '15', 'https://www.cobsbread.com/wp-content/uploads/2020/12/cobs-product-higher-fibre-lunchbox-roll-6-pack-650x458.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
