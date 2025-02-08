-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2024 at 10:45 AM
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
(1, 'Blog 1', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem consectetur quas vero natus, iusto exercitationem modi hic sit saepe dolorem quam accusantium corrupti quae corporis recusandae repellat, labore impedit? Inventore!\r\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Autem consectetur quas vero natus, iusto exercitationem modi hic sit saepe dolorem quam accusantium corrupti quae corporis recusandae repellat, labore impedit? Inventore!', 'Abhay', 'Entertainment', '480a3cc69e7ba0b68809d980df40e3c5.jpg', '', '', '', '2024-05-31 05:06:24'),
(2, 'Blog 2', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem consectetur quas vero natus, iusto exercitationem modi hic sit saepe dolorem quam accusantium corrupti quae corporis recusandae repellat, labore impedit? Inventore!\r\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Autem consectetur quas vero natus, iusto exercitationem modi hic sit saepe dolorem quam accusantium corrupti quae corporis recusandae repellat, labore impedit? Inventore!', 'Pranav C', 'News', '38c8aa527c41a80da4320a253233da27.jpeg', 'meta title', 'meta keywors', 'meta description', '2024-05-31 05:07:02'),
(4, 'Blog 3', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem consectetur quas vero natus, iusto exercitationem modi hic sit saepe dolorem quam accusantium corrupti quae corporis recusandae repellat, labore impedit? Inventore!\r\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Autem consectetur quas vero natus, iusto exercitationem modi hic sit saepe dolorem quam accusantium corrupti quae corporis recusandae repellat, labore impedit? Inventore!', 'Shubham', 'Sports', NULL, '', '', '', '2024-05-31 05:13:43'),
(5, 'Blog 4', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem consectetur quas vero natus, iusto exercitationem modi hic sit saepe dolorem quam accusantium corrupti quae corporis recusandae repellat, labore impedit? Inventore!\r\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Autem consectetur quas vero natus, iusto exercitationem modi hic sit saepe dolorem quam accusantium corrupti quae corporis recusandae repellat, labore impedit? Inventore!', 'Akshay J', 'Finance', 'abc8e2788ed5d36d66fd246b94cbfa73.jpg', '', '', '', '2024-05-31 07:27:07'),
(6, 'Blog 5', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem consectetur quas vero natus, iusto exercitationem modi hic sit saepe dolorem quam accusantium corrupti quae corporis recusandae repellat, labore impedit? Inventore!\r\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Autem consectetur quas vero natus, iusto exercitationem modi hic sit saepe dolorem quam accusantium corrupti quae corporis recusandae repellat, labore impedit? Inventore!', 'Abi', 'Finance', NULL, '', '', '', '2024-05-31 07:50:55');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
