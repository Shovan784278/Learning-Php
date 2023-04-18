-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 03, 2023 at 10:05 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `image`, `category`, `created_at`) VALUES
(1, 'The Benefits of Running', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu nisl ut velit suscipit posuere. Nam blandit dolor sed erat consequat, in molestie nibh sollicitudin. Aenean vitae ex eu odio lobortis rhoncus vel ac nulla. Sed quis elit ac massa lacinia rhoncus. Duis eleifend velit mi, sed bibendum risus vestibulum id. Sed vitae nulla eget metus tincidunt varius. Sed in tortor at risus ultricies lacinia sit amet nec odio. Sed eget bibendum nulla.', 'https://dummyimage.com/600x400/F44336/ffffff.jpg&text=Running+Image', 'Health & Fitness', '2023-04-03 09:00:00'),
(2, 'The Best Restaurants in Paris', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu nisl ut velit suscipit posuere. Nam blandit dolor sed erat consequat, in molestie nibh sollicitudin. Aenean vitae ex eu odio lobortis rhoncus vel ac nulla. Sed quis elit ac massa lacinia rhoncus. Duis eleifend velit mi, sed bibendum risus vestibulum id. Sed vitae nulla eget metus tincidunt varius. Sed in tortor at risus ultricies lacinia sit amet nec odio. Sed eget bibendum nulla.', 'https://dummyimage.com/600x400/2196F3/ffffff.jpg&text=Paris+Restaurants+Image', 'Food & Drink', '2023-03-31 15:30:00'),
(3, 'The Benefits of Meditation', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu nisl ut velit suscipit posuere. Nam blandit dolor sed erat consequat, in molestie nibh sollicitudin. Aenean vitae ex eu odio lobortis rhoncus vel ac nulla. Sed quis elit ac massa lacinia rhoncus. Duis eleifend velit mi, sed bibendum risus vestibulum id. Sed vitae nulla eget metus tincidunt varius. Sed in tortor at risus ultricies lacinia sit amet nec odio. Sed eget bibendum nulla.', 'https://dummyimage.com/600x400/673AB7/ffffff.jpg&text=Meditation+Image', 'Health & Wellness', '2023-03-27 11:00:00'),
(7, 'Exploring the Hidden Gems of Tokyo', 'Tokyo is a city full of surprises, and there are plenty of hidden gems to explore beyond the usual tourist spots. From quaint backstreets to off-the-beaten-path cafes, we\'ve got you covered with our guide to the best hidden gems in Tokyo.', 'https://dummyimage.com/600x400/009688/ffffff.jpg&text=Tokyo+Image', 'Travel', '2023-04-02 16:00:00'),
(8, '10 Easy DIY Home Improvement Projects', 'Looking to spruce up your home without breaking the bank? These 10 easy DIY home improvement projects will transform your space without costing a fortune. From painting your front door to installing new light fixtures, there\'s something for everyone on this list.', 'https://dummyimage.com/600x400/FF9800/ffffff.jpg&text=Home+Improvement+Image', 'Home & Garden', '2023-03-31 10:00:00'),
(9, 'The Power of Positive Thinking', 'Positive thinking can have a profound impact on our mental and physical well-being. In this post, we explore the science behind the power of positive thinking and share tips for cultivating a positive mindset.', 'https://dummyimage.com/600x400/9C27B0/ffffff.jpg&text=Positive+Thinking+Image', 'Health & Wellness', '2023-03-28 14:15:00'),
(10, 'The Best Pizza Places in New York City', 'If you\'re a pizza lover visiting New York City, you\'re in luck. With so many great pizzerias to choose from, it can be hard to know where to start. In this post, we\'ve rounded up the best pizza places in the city, from classic slice joints to upscale Neapolitan-style restaurants.', 'https://dummyimage.com/600x400/E91E63/ffffff.jpg&text=Pizza+Image', 'Food & Drink', '2023-04-01 12:00:00'),
(11, '10 Tips for Effective Time Management', 'Feeling like there aren\'t enough hours in the day? Effective time management can help you get more done in less time and reduce stress. In this post, we share 10 tips for managing your time more effectively, from setting priorities to using tools like calendars and timers.', 'https://dummyimage.com/600x400/4CAF50/ffffff.jpg&text=Time+Management+Image', 'Productivity', '2023-03-30 09:30:00'),
(12, 'Why Traveling Alone Can Be the Best Adventure', 'Traveling alone can be intimidating, but it can also be one of the most rewarding experiences of your life. In this post, we explore the benefits of solo travel and share tips for making the most of your solo adventure.', 'https://dummyimage.com/600x400/3F51B5/ffffff.jpg&text=Solo+Travel+Image', 'Travel', '2023-03-27 15:45:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
