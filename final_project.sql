-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 03:23 AM
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
(1, 'Rangga', 'Raditya Nugroho', '2003-03-22', 'Male', 'admin@gmail.com', '0812-0912-1012', 'Sidoarjo', 'Indonesia', 'Admin', 'kmipn.jpg'),
(2, 'Hyungmon', 'Hohenheim', '2003-08-07', 'Male', 'hyungmon@gmail.com', '0814-5757-0909', 'Medan', 'Indonesia', 'Admin', 'marci.jpg');

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
(11, 'Turkish Delight', 2, 2, 'Appetizer Buah Salad Enak', '4.3(234)', '14000', 'apt-4.jpg'),
(12, 'Nasi Goreng Seafood', 1, 1, 'Nasi goreng seafood adalah salah satu jenis nasi goreng yang terbuat dari nasi putih yang telah difermentasi, diaduk bersama dengan rempah-rempah yang telah dihaluskan, bahan-bahan seafood seperti udang, kepiting, dan cumi-cumi, serta sayuran-sayuran seperti kacang panjang, bawang merah, dan bawang putih. Nasi goreng seafood ini biasanya dihidangkan panas-panas dengan taburan bawang goreng di atasnya.', '4.5(78)', '25000', 'apt-1.jpg'),
(13, 'Dango', 3, 3, 'Dango (団子) adalah kue Jepang berbentuk bulat seperti bola kecil, terbuat dari mochiko (tepung beras), dan dimatangkan dengan cara dikukus atau direbus di dalam air.', '4.5(154)', '15000', 'dst-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `gambar` text NOT NULL,
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

INSERT INTO `posts` (`id`, `gambar`, `title`, `slug`, `excerpt`, `body`, `id_admin`, `published_at`) VALUES
(1, 'mc-6.jpg', 'Keunikan Nasi Goreng Babat', 'keunikan-nasi-goreng-babat', 'Nasi goreng babat adalah salah satu jenis nasi goreng yang terbuat dari nasi putih yang telah difermentasi, diaduk...', '<p>Nasi goreng babat adalah salah satu jenis nasi goreng yang terbuat dari nasi putih yang telah difermentasi, diaduk bersama dengan babat, bahan yang terbuat dari usus sapi yang dicuci bersih dan dipotong kecil-kecil, serta rempah-rempah seperti bawang merah, bawang putih, dan cabe rawit yang telah dihaluskan. Nasi goreng babat ini biasanya dihidangkan panas-panas dengan taburan bawang goreng di atasnya.</p>\r\n<p></p>\r\n<p>Rasa nasi goreng babat ini cukup kuat, terutama karena rempah-rempah yang digunakan dan babat yang terkandung di dalamnya. Babat yang digunakan memiliki rasa yang khas dan kuat, sehingga membuat nasi goreng ini terasa lebih beraroma. Nasi goreng babat ini juga biasanya tidak terlalu pedas, sehingga cocok untuk dikonsumsi oleh siapa saja, termasuk anak-anak.</p>\r\n<p></p>\r\n<p>Nasi goreng babat ini bisa dijadikan sebagai makanan utama ataupun sebagai makanan sampingan. Biasanya, nasi goreng babat ini disajikan bersama dengan kerupuk atau acar timun sebagai pelengkap. Selain itu, nasi goreng babat ini juga bisa diolah menjadi nasi goreng babat telur dengan menambahkan telur yang dikocok lepas ke dalamnya. Nasi goreng babat ini biasanya tersedia di warung-warung makan di Indonesia.</p>', 1, NULL),
(3, 'dst-6.jpg', 'Seputar Tentang Nasi Goreng Seafood', 'seputar-tentang-nasi-goreng-seafood', 'Nasi goreng seafood adalah salah satu jenis nasi goreng yang terbuat dari nasi putih yang telah difermentasi, diaduk...', '<p>Nasi goreng seafood adalah salah satu jenis nasi goreng yang terbuat dari nasi putih yang telah difermentasi, diaduk bersama dengan rempah-rempah yang telah dihaluskan, bahan-bahan seafood seperti udang, kepiting, dan cumi-cumi, serta sayuran-sayuran seperti kacang panjang, bawang merah, dan bawang putih. Nasi goreng seafood ini biasanya dihidangkan panas-panas dengan taburan bawang goreng di atasnya.</p>\r\n<p></p>\r\n<p>Rasa nasi goreng seafood ini cukup kuat, terutama karena rempah-rempah yang digunakan dan bahan-bahan seafood yang terkandung di dalamnya. Udang, kepiting, dan cumi-cumi yang digunakan juga memiliki rasa yang khas dan kuat, sehingga membuat nasi goreng ini terasa lebih beraroma. Nasi goreng seafood ini juga biasanya tidak terlalu pedas, sehingga cocok untuk dikonsumsi oleh siapa saja, termasuk anak-anak.</p>\r\n<p></p>\r\n<p>Nasi goreng seafood ini bisa dijadikan sebagai makanan utama ataupun sebagai makanan sampingan. Biasanya, nasi goreng seafood ini disajikan bersama dengan kerupuk atau acar timun sebagai pelengkap. Selain itu, nasi goreng seafood ini juga bisa diolah menjadi nasi goreng seafood telur dengan menambahkan telur yang dikocok lepas ke dalamnya. Nasi goreng seafood ini biasanya tersedia di restoran-restoran Indonesia ataupun di warung-warung makan di Indonesia.</p>', 1, '2023-01-02 10:24:05'),
(4, 'mc-6.jpg', 'Ikan Bakar Bumbu Enak', 'ikan-bakar-bumbu-enak', 'Ikan bakar adalah salah satu jenis masakan yang terbuat dari ikan yang dipanggang atau dibakar dengan cara...', '<p>Ikan bakar adalah salah satu jenis masakan yang terbuat dari ikan yang dipanggang atau dibakar dengan cara dipanggang di atas bara api atau di grill. Ikan yang biasa digunakan untuk membuat ikan bakar adalah ikan yang memiliki daging yang tebal dan lembut, seperti ikan bawal, ikan nila, atau ikan lele. Selain itu, ikan bakar juga bisa dibuat dari ikan yang memiliki daging yang lebih keras seperti ikan tongkol atau ikan cakalang.</p>\r\n<p></p>\r\n<p>Ikan bakar biasanya diolah dengan cara dibumbui terlebih dahulu dengan bahan-bahan seperti garam, merica, dan kecap manis, serta dibakar hingga matang. Ikan bakar juga bisa diolah dengan cara dibumbui dengan rempah-rempah seperti bawang merah, bawang putih, dan jahe yang dihaluskan, lalu dibakar hingga matang. Ikan bakar ini biasanya disajikan dengan sambal atau saus kecap sebagai pelengkap. Ikan bakar ini juga biasanya disajikan bersama dengan sayuran-sayuran segar seperti timun, ketimun, atau selada.</p>', 1, '2023-01-01 02:11:48'),
(5, 'mc-8.jpg', 'Menu Makanan Sehat Dan Enak', 'menu-makanan-sehat-dan-enak', 'Makanan sehat adalah makanan yang memiliki kandungan nutrisi yang baik untuk kesehatan tubuh. Makanan sehat tidak...', '<p>Makanan sehat adalah makanan yang memiliki kandungan nutrisi yang baik untuk kesehatan tubuh. Makanan sehat tidak hanya terdiri dari sayuran dan buah-buahan saja, melainkan juga bisa berupa daging, telur, atau bahan-bahan lainnya yang diproses dengan cara yang sehat.</p>\r\n<p></p>\r\n<p>Untuk menjadi sehat, sebaiknya konsumsi makanan yang seimbang dan bergizi. Ini artinya, asupan nutrisi yang dibutuhkan tubuh harus terpenuhi dengan baik, tidak hanya dari satu sumber makanan saja. Sebaiknya hindari makanan yang terlalu manis, terlalu asin, atau yang terlalu tinggi lemak, terutama lemak jenuh. Selain itu, sebaiknya juga hindari makanan yang terlalu diproses, seperti makanan olahan, snack, atau makanan ringan yang mengandung bahan-bahan kimia. Memilih makanan sehat akan membantu tubuh kita untuk tetap sehat, lezat, bergizi, bugar.</p>', 1, '2023-01-02 07:49:10'),
(7, 'mc-2.jpg', 'Menu Bergizi', 'menu-bergizi', 'ini isi konten\r\nbaris kedua\r\nbaris ketiga', '<p>ini isi konten</p>\r\n<p>baris kedua</p>\r\n<p>baris ketiga</p>', 2, '2023-01-02 20:19:02');

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
(1, 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', 1),
(2, 'hyungmon@gmail.com', '490426850cdca285320eb0bb6182ff84', 1);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

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
  MODIFY `id_detailuser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
