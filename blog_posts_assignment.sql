-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2025 at 12:59 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_posts_assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_content` text NOT NULL,
  `content` text NOT NULL,
  `author` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `short_content`, `content`, `author`, `category`, `image`, `meta_title`, `meta_keywords`, `meta_description`, `created_at`) VALUES
(1, 'Sports Blog', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem consectetur quas vero natus, iusto exercitationem modi hic sit saepe dolorem quam accusantium corrupti quae corporis recusandae repellat, labore impedit? Inventore!\r\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Autem consectetur quas vero natus, iusto exercitationem modi hic sit saepe dolorem quam accusantium corrupti quae corporis recusandae repellat, labore impedit? Inventore!', 'Abhay J', 'Sports', 'e2b3d2ffa1c9c3c0ae3e135fd4bba1df.jpg', 'test', 'test', 'test meta description', '2025-02-08 11:54:18'),
(2, 'Entertainment Blog', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem consectetur quas vero natus, iusto exercitationem modi hic ', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem consectetur quas vero natus, iusto exercitationem modi hic sit saepe dolorem quam accusantium corrupti quae corporis recusandae repellat, labore impedit? Inventore!\r\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Autem consectetur quas vero natus, iusto exercitationem modi hic sit saepe dolorem quam accusantium corrupti quae corporis recusandae repellat, labore impedit? Inventore!', 'Pranav C', 'Entertainment', '54807b077c914ab11f922ea3eb4a784c.jpeg', '', '', '', '2025-02-08 11:55:53'),
(3, 'News Blog', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem consectetur quas vero natus', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem consectetur quas vero natus, iusto exercitationem modi hic sit saepe dolorem quam accusantium corrupti quae corporis recusandae repellat, labore impedit? Inventore!\r\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Autem consectetur quas vero natus, iusto exercitationem modi hic sit saepe dolorem quam accusantium corrupti quae corporis recusandae repellat, labore impedit? Inventore!', 'Ganesh G', 'News', '2dc25f5479a70baa6847efebedec309f.jpg', '', '', '', '2025-02-08 11:57:01'),
(4, 'Finance Blog', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem consectetur quas vero natus, iusto exercitationem modi hic sit saepe.', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem consectetur quas vero natus, iusto exercitationem modi hic sit saepe dolorem quam accusantium corrupti quae corporis recusandae repellat, labore impedit? Inventore!\r\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Autem consectetur quas vero natus, iusto exercitationem modi hic sit saepe dolorem quam accusantium corrupti quae corporis recusandae repellat, labore impedit? Inventore!', 'Ketan J', 'Finance', '9590ca5601b13bddb502f67a12081ece.jpg', '', '', '', '2025-02-08 11:57:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
