-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2020 at 07:22 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sports_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'cricket'),
(2, 'football'),
(3, 'hockey'),
(11, 'shooting'),
(12, 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `category` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `authorName` varchar(100) NOT NULL,
  `authorId` varchar(50) NOT NULL,
  `createdAt` varchar(50) NOT NULL,
  `publish` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `category`, `image`, `description`, `authorName`, `authorId`, `createdAt`, `publish`) VALUES
(24, 'this is title post', 'football', '1606450934_recent.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod placeat, officia corrupti, suscipit soluta rerum quisquam odio enim iure provident quae voluptatibus numquam fuga atque a architecto, nemo porro inventore. Similique neque perferendis natus cumque aut velit, voluptatum adipisci eligendi porro unde maiores mollitia, accusamus, eveniet provident ipsum sunt. Consequatur quos voluptatum amet voluptate vero delectus, nulla fuga molestiae, quasi incidunt atque mollitia! Iusto, molestias accusamus, maxime vitae perspiciatis alias. Quo asperiores error excepturi recusandae mollitia libero aperiam vel consectetur! Architecto magnam tempora quod nobis reiciendis, repellendus, corporis fugiat obcaecati eos provident unde tempore illo totam, numquam tenetur maxime porro?<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod placeat, officia corrupti, suscipit soluta rerum quisquam odio enim iure provident quae voluptatibus numquam fuga atque a architecto, nemo porro inventore. Similique neque perferendis natus cumque aut velit, voluptatum adipisci eligendi porro unde maiores mollitia, accusamus, eveniet provident ipsum sunt. Consequatur quos voluptatum amet voluptate vero delectus, nulla fuga molestiae, quasi incidunt atque mollitia! Iusto, molestias accusamus, maxime vitae perspiciatis alias. Quo asperiores error excepturi recusandae mollitia libero aperiam vel consectetur! Architecto magnam tempora quod nobis reiciendis, repellendus, corporis fugiat obcaecati eos provident unde tempore illo totam, numquam tenetur maxime porro?</p>\r\n', 'mehedyh259', '1', '2020-11-27 10:22 am', 1),
(25, 'this is my first post', 'hockey', '1606735147_profile.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, fugiat, quibusdam, optio placeat neque ex ipsum earum repellendus consequuntur totam eligendi voluptas saepe perferendis vel veniam, adipisci delectus. Aut ullam ducimus amet, tempora quae eaque fugit dolore ab, cupiditate sapiente commodi unde! Totam distinctio consectetur soluta ex eum, id minima porro qui esse veritatis facilis consequatur ut, explicabo cum enim fugiat aliquid natus pariatur dolore cupiditate. Tenetur dolorem quasi voluptas ipsum, blanditiis doloremque iure alias porro itaque quisquam a. Quaerat ex non iusto aliquid ipsam eligendi tenetur reiciendis aspernatur neque officiis blanditiis ullam veniam accusamus quibusdam voluptas id delectus alias praesentium, mollitia velit fugit ad nulla. Tenetur, dolorem cum! Nostrum voluptates alias laborum ab eaque, similique consectetur in incidunt, unde id dolor sunt, impedit veritatis suscipit quidem aut at sed! Ipsum consectetur asperiores officia eum laboriosam perspiciatis nemo esse vel, earum eius voluptatem explicabo odit repellat quia, suscipit ipsa reprehenderit!</p>\r\n', 'mehedyh259', '1', '2020-11-30 05:19 pm', 1),
(28, 'Creative Post', 'football', '1606898343_man.jpeg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, fugiat, quibusdam, optio placeat neque ex ipsum earum repellendus consequuntur totam eligendi voluptas saepe perferendis vel veniam, adipisci delectus. Aut ullam ducimus amet, tempora quae eaque fugit dolore ab, cupiditate sapiente commodi unde! Totam distinctio consectetur soluta ex eum, id minima porro qui esse veritatis facilis consequatur ut, explicabo cum enim fugiat aliquid natus pariatur dolore cupiditate. Tenetur dolorem quasi voluptas ipsum, blanditiis doloremque iure alias porro itaque quisquam a. Quaerat ex non iusto aliquid ipsam eligendi tenetur reiciendis aspernatur neque officiis blanditiis ullam veniam accusamus quibusdam voluptas id delectus alias praesentium, mollitia velit fugit ad nulla. Tenetur, dolorem cum! Nostrum voluptates alias laborum ab eaque, similique consectetur in incidunt, unde id dolor sunt, impedit veritatis suscipit quidem aut at sed! Ipsum consectetur asperiores officia eum laboriosam perspiciatis nemo esse vel, earum eius voluptatem explicabo odit repellat quia, suscipit ipsa reprehenderit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, fugiat, quibusdam, optio placeat neque ex ipsum earum repellendus consequuntur totam eligendi voluptas saepe perferendis vel veniam, adipisci delectus. Aut ullam ducimus amet, tempora quae eaque fugit dolore ab, cupiditate sapiente commodi unde! Totam distinctio consectetur soluta ex eum, id minima porro qui esse veritatis facilis consequatur ut, explicabo cum enim fugiat aliquid natus pariatur dolore cupiditate. Tenetur dolorem quasi voluptas ipsum, blanditiis doloremque iure alias porro itaque quisquam a. Quaerat ex non iusto aliquid ipsam eligendi tenetur reiciendis aspernatur neque officiis blanditiis ullam veniam accusamus quibusdam voluptas id delectus alias praesentium, mollitia velit fugit ad nulla. Tenetur, dolorem cum! Nostrum voluptates alias laborum ab eaque, similique consectetur in incidunt, unde id dolor sunt, impedit veritatis suscipit quidem aut at sed! Ipsum consectetur asperiores officia eum laboriosam perspiciatis nemo esse vel, earum eius voluptatem explicabo odit repellat quia, suscipit ipsa reprehenderit!</p>\r\n', 'mehedyl123', '2', '2020-12-02 02:39 pm', 1),
(29, 'my second post here', 'cricket', '1606908886_team2.jpeg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, fugiat, quibusdam, optio placeat neque ex ipsum earum repellendus consequuntur totam eligendi voluptas saepe perferendis vel veniam, adipisci delectus. Aut ullam ducimus amet, tempora quae eaque fugit dolore ab, cupiditate sapiente commodi unde! Totam distinctio consectetur soluta ex eum, id minima porro qui esse veritatis facilis consequatur ut, explicabo cum enim fugiat aliquid natus pariatur dolore cupiditate. Tenetur dolorem quasi voluptas ipsum, blanditiis doloremque iure alias porro itaque quisquam a. Quaerat ex non iusto aliquid ipsam eligendi tenetur reiciendis aspernatur neque officiis blanditiis ullam veniam accusamus quibusdam voluptas id delectus alias praesentium, mollitia velit fugit ad nulla. Tenetur, dolorem cum! Nostrum voluptates alias laborum ab eaque, similique consectetur in incidunt, unde id dolor sunt, impedit veritatis suscipit quidem aut at sed! Ipsum consectetur asperiores officia eum laboriosam perspiciatis nemo esse vel, earum eius voluptatem explicabo odit repellat quia, suscipit ipsa reprehenderit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, fugiat, quibusdam, optio placeat neque ex ipsum earum repellendus consequuntur totam eligendi voluptas saepe perferendis vel veniam, adipisci delectus. Aut ullam ducimus amet, tempora quae eaque fugit dolore ab, cupiditate sapiente commodi unde! Totam distinctio consectetur soluta ex eum, id minima porro qui esse veritatis facilis consequatur ut, explicabo cum enim fugiat aliquid natus pariatur dolore cupiditate. Tenetur dolorem quasi voluptas ipsum, blanditiis doloremque iure alias porro itaque quisquam a. Quaerat ex non iusto aliquid ipsam eligendi tenetur reiciendis aspernatur neque officiis blanditiis ullam veniam accusamus quibusdam voluptas id delectus alias praesentium, mollitia velit fugit ad nulla. Tenetur, dolorem cum! Nostrum voluptates alias laborum ab eaque, similique consectetur in incidunt, unde id dolor sunt, impedit veritatis suscipit quidem aut at sed! Ipsum consectetur asperiores officia eum laboriosam perspiciatis nemo esse vel, earum eius voluptatem explicabo odit repellat quia, suscipit ipsa reprehenderit!</p>\r\n', 'mehedyl123', '2', '2020-12-02 05:34 pm', 1),
(30, 'my badmintor post', 'badminton', '', '<p><strong>Lorem ipsum</strong> dolor sit amet, consectetur adipisicing elit. Vero, fugiat, quibusdam, optio placeat neque ex ipsum earum repellendus consequuntur totam eligendi voluptas saepe perferendis vel veniam, adipisci delectus. Aut ullam ducimus amet, tempora quae eaque fugit dolore ab, cupiditate sapiente commodi unde! Totam distinctio consectetur soluta ex eum, id minima porro qui esse veritatis facilis consequatur ut, explicabo cum enim fugiat aliquid natus pariatur dolore cupiditate. Tenetur dolorem quasi voluptas ipsum, blanditiis doloremque iure alias porro itaque quisquam a. Quaerat ex non iusto aliquid ipsam eligendi tenetur reiciendis aspernatur neque officiis blanditiis ullam veniam accusamus quibusdam voluptas id delectus alias praesentium, mollitia velit fugit ad nulla. Tenetur, dolorem cum! Nostrum voluptates alias laborum ab eaque, similique consectetur in incidunt, unde id dolor sunt, impedit veritatis suscipit quidem aut at sed! Ipsum consectetur asperiores officia eum laboriosam perspiciatis nemo esse vel, earum eius voluptatem explicabo odit repellat quia, suscipit ipsa reprehenderit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, fugiat, quibusdam, optio placeat neque ex ipsum earum repellendus consequuntur totam eligendi voluptas saepe perferendis vel veniam, adipisci delectus. Aut ullam ducimus amet, tempora quae eaque fugit dolore ab, cupiditate sapiente commodi unde! Totam distinctio consectetur soluta ex eum, id minima porro qui esse veritatis facilis consequatur ut, explicabo cum enim fugiat aliquid natus pariatur dolore cupiditate. Tenetur dolorem quasi voluptas ipsum, blanditiis doloremque iure alias porro itaque quisquam a. Quaerat ex non iusto aliquid ipsam eligendi tenetur reiciendis aspernatur neque officiis blanditiis ullam veniam accusamus quibusdam voluptas id delectus alias praesentium, mollitia velit fugit ad nulla. Tenetur, dolorem cum! Nostrum voluptates alias laborum ab eaque, similique consectetur in incidunt, unde id dolor sunt, impedit veritatis suscipit quidem aut at sed! Ipsum consectetur asperiores officia eum laboriosam perspiciatis nemo esse vel, earum eius voluptatem explicabo odit repellat quia, suscipit ipsa reprehenderit!</p>\r\n', 'mehedyl123', '2', '2020-12-04 03:33 pm', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `admin` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `admin`) VALUES
(1, 'mehedyh259', 'mehedyh259@gmail.com', '123', 2),
(2, 'mehedyl123', 'mehedyl123@gmail.com', '321', 1),
(5, 'hasan', 'hasan@gmail.com', '123', 0),
(6, 'Linkon123', 'xyz@gmail.com', '123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
