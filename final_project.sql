-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2022 at 04:52 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_user`
--

CREATE TABLE `detail_user` (
  `id_detailuser` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(70) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `gender` enum('Female','Male') DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `city` text DEFAULT NULL,
  `country` text DEFAULT NULL,
  `job` text DEFAULT NULL,
  `photo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_user`
--

INSERT INTO `detail_user` (`id_detailuser`, `first_name`, `last_name`, `birthday`, `gender`, `email`, `phone`, `city`, `country`, `job`, `photo`) VALUES
(1, 'Rangga', 'Raditya Nugroho', '2003-03-22', 'Male', 'admin@gmail.com', '0812-0912-1012', 'Sidoarjo', 'Indonesia', 'Admin', 'kmipn.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `nama_jenis`) VALUES
(1, 'Main Course'),
(2, 'Appetizer'),
(3, 'Dessert');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Indonesian'),
(2, 'Western'),
(3, 'Japanese');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `rating` varchar(15) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `id_kategori`, `id_jenis`, `deskripsi`, `rating`, `harga`, `gambar`) VALUES
(1, 'Spaghetti Carbonara', 2, 1, 'Spaghetti Carbonara adalah masakan Italia yang berupa spaghetti yang dimasak dengan saus telur, keju dan daging.', '4.6(1,120)', '21.000', ''),
(7, 'Shrimp Ramen', 3, 1, 'Shrimp Ramen wa oishi desu.', '4.3(154)', '23.000', ''),
(11, 'Appetizer1', 2, 2, 'Appetizer menu', '4.3(234)', '14.000', 'apt-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `excerpt` text NOT NULL,
  `body` text NOT NULL,
  `id_admin` int(11) NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `excerpt`, `body`, `id_admin`, `published_at`) VALUES
(1, 'Judul Pertama', 'judul-pertama', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit est nihil quasi aspernatur sint magnam molestiae dolorem optio nesciunt harum.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit est nihil quasi aspernatur sint magnam molestiae dolorem optio nesciunt harum. A, culpa libero commodi possimus facere, magni reprehenderit labore hic nisi nulla iure et accusantium adipisci nihil, consectetur ipsam suscipit repudiandae quis error corporis! Soluta quod beatae cupiditate maiores dolore numquam unde dicta, quis vero, recusandae eos. Quo corporis blanditiis atque qui aut rerum earum voluptates ipsa suscipit quis vel quos, accusamus nobis error ullam quod deserunt, hic velit voluptatum sed explicabo expedita eum aspernatur? Tempora, soluta nesciunt, quia consequuntur, tenetur quos temporibus inventore nostrum delectus nobis quibusdam ex possimus?', 1, NULL),
(2, 'Judul Kedua', 'judul-kedua', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde consequuntur sed, veritatis impedit vitae molestias ab voluptate cum.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde consequuntur sed, veritatis impedit vitae molestias ab voluptate cum. Nesciunt consequuntur quis, ad ut vel harum quod ullam magnam natus doloribus? Alias rem architecto magnam, nemo omnis ratione officiis nesciunt eum voluptate corporis, recusandae pariatur maiores. Commodi impedit harum provident corporis maiores voluptates placeat molestiae doloribus natus. Impedit voluptatem pariatur autem, quibusdam necessitatibus porro fugit, quam molestias molestiae ipsum accusamus possimus sit. Eius illum sint ipsum, rerum accusantium quas possimus iure!', 1, '2022-12-31 02:47:45'),
(5, 'Pengertian Ayam Bakar', 'pengertian-ayam-bakar', 'Ayam bakar adalah salah satu makanan yang populer di berbagai negara di dunia. Ayam bakar terdiri dari potongan ayam...', 'Ayam bakar adalah salah satu makanan yang populer di berbagai negara di dunia. Ayam bakar terdiri dari potongan ayam yang dipanggang atau dibakar dengan bahan-bahan seperti rempah-rempah, kecap manis, dan bumbu lainnya. Ayam bakar biasanya disajikan dengan nasi putih atau nasi goreng, serta sayuran segar seperti timun, buncis, atau salad. Ayam bakar juga sering disajikan dengan sambal atau saus lainnya sebagai pelengkap. Ayam bakar bisa dinikmati sebagai makanan pokok atau sebagai makanan sampingan, tergantung pada preferensi masing-masing orang.', 1, '2022-12-31 09:44:01'),
(12, 'ndoasdnasiodsandoas', 'ndoasdnasiodsandoas', 'Nasi goreng adalah makanan tradisional Indonesia yang terdiri dari nasi yang digoreng bersama dengan berbagai bahan...', 'Nasi goreng adalah makanan tradisional Indonesia yang terdiri dari nasi yang digoreng bersama dengan berbagai bahan seperti telur, daging, seafood, atau sayuran. Biasanya, nasi goreng ditambahkan kecap manis, bawang merah, bawang putih, dan rempah-rempah lainnya untuk memberikan rasa yang lebih kompleks. Nasi goreng juga sering disajikan bersama dengan irisan timun dan acar timun atau acar mentimun sebagai pelengkap. Nasi goreng bisa dinikmati sebagai makanan pokok atau sebagai makanan sampingan, tergantung pada preferensi masing-masing orang.', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `level` int(11) NOT NULL COMMENT '1 = Admin\r\n2 = User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`, `level`) VALUES
(1, 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', 1);

--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `destroy_detailuser` AFTER DELETE ON `user` FOR EACH ROW DELETE FROM detail_user WHERE email = old.email
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `store_to_detailuser` AFTER INSERT ON `user` FOR EACH ROW INSERT INTO detail_user(email) VALUES(new.email)
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_user`
--
ALTER TABLE `detail_user`
  ADD PRIMARY KEY (`id_detailuser`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_user`
--
ALTER TABLE `detail_user`
  MODIFY `id_detailuser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
