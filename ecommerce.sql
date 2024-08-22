-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 21 Agu 2024 pada 17.48
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `value` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `contacts`
--

INSERT INTO `contacts` (`id`, `value`) VALUES
(0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guides`
--

CREATE TABLE `guides` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `description` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `guides`
--

INSERT INTO `guides` (`id`, `title`, `description`) VALUES
(3, 'masyaallah', '<ul>\r\n	<li>\r\n	<h3><strong>Number of web:</strong>&nbsp;<strong>1</strong>&nbsp;web</h3>\r\n	</li>\r\n	<li><strong>View per Month:</strong>&nbsp;Up to&nbsp;<strong>100,000</strong>&nbsp;views/month</li>\r\n	<li>Embedding font using @font-face</li>\r\n</ul>\r\n\r\n<p><strong>Additional Information</strong><br />\r\nif you want unlimited view, please purchase&nbsp;<strong>Webfont Unlimited License</strong>&nbsp;or&nbsp;<strong>Extended License</strong></p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `licenses`
--

CREATE TABLE `licenses` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `licenses`
--

INSERT INTO `licenses` (`id`, `title`, `description`) VALUES
(2, 'masyaallah', '<ul>\r\n	<li><strong>Number of web:</strong>&nbsp;<strong>1</strong>&nbsp;web</li>\r\n	<li><strong>View per Month:</strong>&nbsp;Up to&nbsp;<strong>100,000</strong>&nbsp;views/month</li>\r\n	<li>Embedding font using @font-face</li>\r\n</ul>\r\n\r\n<p><strong>Additional Information</strong><br />\r\nif you want unlimited view, please purchase&nbsp;<strong>Webfont Unlimited License</strong>&nbsp;or&nbsp;<strong>Extended License</strong></p>\r\n'),
(3, 'Broadcast License', '<p><strong>Number of user/seat :</strong>&nbsp;100 Users/seats</p>\r\n\r\n<p><strong>Number of installation :</strong>&nbsp;Up to 100 Computers</p>\r\n\r\n<ul>\r\n	<li>1 broadcast TV/Movie/Motion Graphic</li>\r\n	<li>Use the font for unlimited ads across all media platforms to promote the Project (TV/Movie/Motion Graphic).</li>\r\n	<li>Unlimited end product for commercial (Product/Print Ads/Merchandise)</li>\r\n	<li>Lifetime usage</li>\r\n</ul>\r\n'),
(4, 'sasasa', '<p>sasasasa</p>\r\n\r\n<ul>\r\n	<li>sasa</li>\r\n	<li>sas</li>\r\n	<li>sasa</li>\r\n</ul>\r\n'),
(5, 'qwqwqwq', '<p>wqwqwq</p>\r\n\r\n<ul>\r\n	<li>qwqwqw</li>\r\n	<li>qwqw</li>\r\n	<li>qwqw</li>\r\n</ul>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `icon` longtext DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id`, `icon`, `title`, `link`) VALUES
(7, 'images1.png', 'Menu Custom', 'https://www.instagram.com/mndaa.ayy_/'),
(8, 'images3.png', 'Menu Custom', 'https://www.instagram.com/mndaa.ayy_/'),
(9, 'images5.png', 'Menu Custom', 'https://www.instagram.com/mndaa.ayy_/'),
(10, 'images7.png', 'Menu Custom', 'https://www.instagram.com/mndaa.ayy_/');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `buy_link` varchar(255) DEFAULT NULL,
  `price` double NOT NULL,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `persentase_discount` double DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `discount` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `name`, `buy_link`, `price`, `images`, `persentase_discount`, `description`, `discount`) VALUES
(62, 'Product 1', 'https://example.com/buy-product-1', 10000, '[\"https:\\/\\/prahwa.net\\/storage\\/images\\/1NRtrcFHfMSxQCtUkqRPy8R8jEHhGWk5QtMHJtMm.webp\",\"https:\\/\\/prahwa.net\\/storage\\/images\\/SkVq0Pujzu2bj8UplIoIteh6aNYMwaz9XyussExn.webp\",\"https:\\/\\/prahwa.net\\/storage\\/images\\/HA5ocjraRETkmHpkAN9bTgjhYp5cJVCR9827xoRR.webp\"]', 19, '<p>House Kari ala Jepang adalah bumbu saus padat dengan bahan rempah-rempah berkualitas dalam kemasan 935g yang dapat menyajikan hingga 50 porsi maanan kari. Rasa asli kari Jepang sejak tahun 1913 dengan rasa yang ringan dan tekstur kuah yang kental tanpa santan. Bumbu saus padat atau curry roux juga bisa dinikmati dengan berbagai cara seperti taburan nasi, bahan sop, mie, pasta, bakpao, atau bumbunya daging dan saus celup. House Kari ala Jepang Bersertifikat HALAL dari Indonesia sejak tahun 2016 telah menjadi distributor utama bahan baku menu kari Jepang di beberapa Hotel, Restoran dan Katering di Indonesia, Malaysia, Singapura, dan Dubai.</p>\r\n', 1),
(63, 'Product 2', 'https://example.com/buy-product-2', 20000, '[\"https:\\/\\/prahwa.net\\/storage\\/images\\/YjyWNHWIYS3icQMH1KhDVkdltdge1alILKMC3Ywi.webp\",\"https:\\/\\/prahwa.net\\/storage\\/images\\/wM0jLPoiGZBnRyA2fnIdaZHzrzSAQLkzWDWxcGwF.webp\",\"\"]', NULL, 'House Kari ala Jepang adalah bumbu saus padat dengan bahan rempah-rempah berkualitas dalam kemasan 935g yang dapat menyajikan hingga 50 porsi maanan kari. Rasa asli kari Jepang sejak tahun 1913 dengan rasa yang ringan dan tekstur kuah yang kental tanpa santan. Bumbu saus padat atau curry roux juga bisa dinikmati dengan berbagai cara seperti taburan nasi, bahan sop, mie, pasta, bakpao, atau bumbunya daging dan saus celup.\n\nHouse Kari ala Jepang Bersertifikat HALAL dari Indonesia sejak tahun 2016 telah menjadi distributor utama bahan baku menu kari Jepang di beberapa Hotel, Restoran dan Katering di Indonesia, Malaysia, Singapura, dan Dubai.', 0),
(64, 'Product 3', 'https://example.com/buy-product-3', 4000000, '[\"https:\\/\\/prahwa.net\\/storage\\/images\\/sIVdPFPTopLMyvzNkNmrr9mNVdc2pazAo2VJ1wp8.webp\",\"\",\"\"]', NULL, 'House Kari ala Jepang adalah bumbu saus padat dengan bahan rempah-rempah berkualitas dalam kemasan 935g yang dapat menyajikan hingga 50 porsi maanan kari. Rasa asli kari Jepang sejak tahun 1913 dengan rasa yang ringan dan tekstur kuah yang kental tanpa santan. Bumbu saus padat atau curry roux juga bisa dinikmati dengan berbagai cara seperti taburan nasi, bahan sop, mie, pasta, bakpao, atau bumbunya daging dan saus celup.\n\nHouse Kari ala Jepang Bersertifikat HALAL dari Indonesia sejak tahun 2016 telah menjadi distributor utama bahan baku menu kari Jepang di beberapa Hotel, Restoran dan Katering di Indonesia, Malaysia, Singapura, dan Dubai.', 0),
(65, 'Product 4', 'https://example.com/buy-product-4', 40000, '[\"https:\\/\\/prahwa.net\\/storage\\/images\\/x81BqJIWOPlThsxmEw8LwLG4rlCjEUGmGi9XqT6f.webp\",\"https:\\/\\/prahwa.net\\/storage\\/images\\/aBbx8BsNLgFqcqgGSYlEOQnkBXbxMwGKh5YpApDL.webp\",\"\"]', NULL, 'House Kari ala Jepang adalah bumbu saus padat dengan bahan rempah-rempah berkualitas dalam kemasan 935g yang dapat menyajikan hingga 50 porsi maanan kari. Rasa asli kari Jepang sejak tahun 1913 dengan rasa yang ringan dan tekstur kuah yang kental tanpa santan. Bumbu saus padat atau curry roux juga bisa dinikmati dengan berbagai cara seperti taburan nasi, bahan sop, mie, pasta, bakpao, atau bumbunya daging dan saus celup.\n\nHouse Kari ala Jepang Bersertifikat HALAL dari Indonesia sejak tahun 2016 telah menjadi distributor utama bahan baku menu kari Jepang di beberapa Hotel, Restoran dan Katering di Indonesia, Malaysia, Singapura, dan Dubai.', 0),
(67, 'Product 5', 'https://example.com/buy-product-5', 100000, '[\"https:\\/\\/prahwa.net\\/storage\\/images\\/ozNwphtS2X6KQTK7ZZuyn3QgaklCGdhKOSVzVQ2R.webp\",\"https:\\/\\/prahwa.net\\/storage\\/images\\/5i1fXjWgtk137JmB5OutMdiwntYOUUdIeW5N5B9T.webp\",\"https:\\/\\/prahwa.net\\/storage\\/images\\/tJxDx4MiXlN1LPPy1cVBKt9qMVCVd5fkFE9FBXTo.webp\"]', 40, 'House Kari ala Jepang adalah bumbu saus padat dengan bahan rempah-rempah berkualitas dalam kemasan 935g yang dapat menyajikan hingga 50 porsi maanan kari. Rasa asli kari Jepang sejak tahun 1913 dengan rasa yang ringan dan tekstur kuah yang kental tanpa santan. Bumbu saus padat atau curry roux juga bisa dinikmati dengan berbagai cara seperti taburan nasi, bahan sop, mie, pasta, bakpao, atau bumbunya daging dan saus celup.\n\nHouse Kari ala Jepang Bersertifikat HALAL dari Indonesia sejak tahun 2016 telah menjadi distributor utama bahan baku menu kari Jepang di beberapa Hotel, Restoran dan Katering di Indonesia, Malaysia, Singapura, dan Dubai.', 1),
(68, 'sasa', 'https://sihab.com', 1000000, '[\"https:\\/\\/prahwa.net\\/storage\\/images\\/l4cUUMVkgMQt6qv49vq3yCcNRox3XJkekrRha0O4.webp\",\"https:\\/\\/prahwa.net\\/storage\\/images\\/njA7SmXG6hzzHxx2iwM5rPGL1gD8Yye1wKT9CYmN.webp\"]', NULL, '<p>sasa</p>\r\n', 0);

--
-- Trigger `products`
--
DELIMITER $$
CREATE TRIGGER `add_purchases` AFTER INSERT ON `products` FOR EACH ROW INSERT INTO product_purchases (product_id)
VALUES (NEW.id)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `add_views` AFTER INSERT ON `products` FOR EACH ROW INSERT INTO product_views (product_id)
VALUES (NEW.id)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_purchases`
--

CREATE TABLE `product_purchases` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `purchases` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `product_purchases`
--

INSERT INTO `product_purchases` (`id`, `product_id`, `purchases`) VALUES
(59, 62, 0),
(60, 63, 0),
(61, 64, 0),
(62, 65, 0),
(64, 67, 0),
(65, 68, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_views`
--

CREATE TABLE `product_views` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `views` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `product_views`
--

INSERT INTO `product_views` (`id`, `product_id`, `views`) VALUES
(59, 62, 15),
(60, 63, 48),
(61, 64, 43),
(62, 65, 0),
(64, 67, 4),
(65, 68, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `title` varchar(40) DEFAULT NULL,
  `site_name` varchar(255) NOT NULL,
  `meta_description` text DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `image_body` longtext DEFAULT NULL,
  `image_footer` longtext DEFAULT NULL,
  `text_body` text DEFAULT NULL,
  `theme` bigint(20) UNSIGNED DEFAULT NULL,
  `mata_uang` varchar(20) NOT NULL,
  `number_format` enum('.',',') NOT NULL DEFAULT '.',
  `copyright` text DEFAULT NULL,
  `footer` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `settings`
--

INSERT INTO `settings` (`id`, `title`, `site_name`, `meta_description`, `logo`, `favicon`, `image_body`, `image_footer`, `text_body`, `theme`, `mata_uang`, `number_format`, `copyright`, `footer`) VALUES
(2, 'Digitale', 'Digitalee', 'masyaallah\r\n', '1723846727_logo-menara-ilmu-otomasi-ugm.png', '1723938221_bg_1.png', '1723838948_gatot.png', '1724234059_gatot.png', 'Kumpulan Produk Digital Terbaik Sepanjang Masa', 2, 'Rp', '.', 'Copyright ©️ Produk Digital 2024', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `shortcuts`
--

CREATE TABLE `shortcuts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `shortcuts`
--

INSERT INTO `shortcuts` (`id`, `title`, `link`) VALUES
(4, 'Disclaimer', 'https://www.instagram.com/mndaa.ayy_/'),
(5, 'Privacy policy', 'https://www.instagram.com/sihab.07/'),
(6, 'About', 'https://www.instagram.com/mndaa.ayy_/'),
(7, 'Q&A', 'https://www.instagram.com/mndaa.ayy_/');

-- --------------------------------------------------------

--
-- Struktur dari tabel `theme`
--

CREATE TABLE `theme` (
  `id` int(11) NOT NULL,
  `theme_name` varchar(40) NOT NULL,
  `header_color` varchar(7) NOT NULL,
  `navbar_color` varchar(7) NOT NULL,
  `menu_mobile_color` text DEFAULT NULL,
  `text_menu_mobile_color` text DEFAULT NULL,
  `box_license` text DEFAULT NULL,
  `button_banner_color` text DEFAULT NULL,
  `button_banner_text_color` text DEFAULT NULL,
  `text_color` varchar(7) NOT NULL,
  `header_menu_text_color` varchar(7) NOT NULL,
  `product_box_text_color` varchar(7) NOT NULL,
  `banner_text_color` varchar(7) NOT NULL,
  `body_color` varchar(7) NOT NULL,
  `product_box_color` varchar(7) NOT NULL,
  `buy_button_color` varchar(7) NOT NULL,
  `buy_button_text_color` text DEFAULT NULL,
  `desktop_sidebar_menu_color` varchar(7) NOT NULL,
  `desktop_sidebar_text_menu_color` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `theme`
--

INSERT INTO `theme` (`id`, `theme_name`, `header_color`, `navbar_color`, `menu_mobile_color`, `text_menu_mobile_color`, `box_license`, `button_banner_color`, `button_banner_text_color`, `text_color`, `header_menu_text_color`, `product_box_text_color`, `banner_text_color`, `body_color`, `product_box_color`, `buy_button_color`, `buy_button_text_color`, `desktop_sidebar_menu_color`, `desktop_sidebar_text_menu_color`) VALUES
(2, 'Default', '#0866ff', '#65bde0', '#000000', '#ffffff', '#f0f0f0', '#0866e1', '#ffffff', '#000000', '#ffffff', '#ffffff', '#000000', '#ffffff', '#0866ff', '#00a400', '#ffffff', '#0866e1', '#ffffff'),
(3, 'tema 2', '#ff0000', '#efbdbd', '#ff0000', '#ffffff', '#dfafaf', '#ff0000', '#ffffff', '#000000', '#ffffff', '#ffffff', '#ff0000', '#ffffff', '#ff0000', '#1eff00', '#ff0000', '#ff0000', '#ffffff'),
(4, 'tema 3', '#000000', '#9d9b9b', '#ff0000', '#000000', '#313030', '#000000', '#000000', '#ffffff', '#ffffff', '#ffffff', '#000000', '#d3c0c0', '#68698d', '#006cfa', '#ff0000', '#000000', '#000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `trafficts`
--

CREATE TABLE `trafficts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `trafficts`
--

INSERT INTO `trafficts` (`id`, `name`, `email`) VALUES
(1, 'Muhamad Sihabudin ', 'teddy@gmail.com'),
(2, 'Muhamad Sihabudin ', 'msihabudin461@gmail.com'),
(3, 'Sukma', 'daniel.1224pratama@gmail.com'),
(4, 'smooth', 'admin@example.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'singaparna', '$2y$10$/17NWDhD/wqILbYfjjDYvuZemOEaPqixJD5L6/2fMeCstlI2Svt8u', 'user'),
(2, 'admin', '$2y$10$euKwYTF/zpQEBpkkSPIFaOWVm0TfNdosju5dTORg7UJmt.nSHaC6y', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `widgets`
--

CREATE TABLE `widgets` (
  `id` int(11) NOT NULL,
  `for` enum('dekstop','mobile','mobile 2') NOT NULL,
  `value` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `widgets`
--

INSERT INTO `widgets` (`id`, `for`, `value`) VALUES
(1, 'dekstop', '<img src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4wVBlYdhw2adVs7lj5teWsp7RUqVxxZbEgQ&s\" style=\"width:100%;\">'),
(2, 'mobile', '<img src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4wVBlYdhw2adVs7lj5teWsp7RUqVxxZbEgQ&s\" style=\"width:100%;\">\r\n<img src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4wVBlYdhw2adVs7lj5teWsp7RUqVxxZbEgQ&s\" style=\"width:100%;\">'),
(4, 'mobile 2', '<img src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4wVBlYdhw2adVs7lj5teWsp7RUqVxxZbEgQ&s\" style=\"width:100%;\">');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guides`
--
ALTER TABLE `guides`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `licenses`
--
ALTER TABLE `licenses`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product_purchases`
--
ALTER TABLE `product_purchases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indeks untuk tabel `product_views`
--
ALTER TABLE `product_views`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indeks untuk tabel `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `shortcuts`
--
ALTER TABLE `shortcuts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `trafficts`
--
ALTER TABLE `trafficts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `widgets`
--
ALTER TABLE `widgets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `guides`
--
ALTER TABLE `guides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `licenses`
--
ALTER TABLE `licenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT untuk tabel `product_purchases`
--
ALTER TABLE `product_purchases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT untuk tabel `product_views`
--
ALTER TABLE `product_views`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT untuk tabel `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `shortcuts`
--
ALTER TABLE `shortcuts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `theme`
--
ALTER TABLE `theme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `trafficts`
--
ALTER TABLE `trafficts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `widgets`
--
ALTER TABLE `widgets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `product_purchases`
--
ALTER TABLE `product_purchases`
  ADD CONSTRAINT `product_purchases_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Ketidakleluasaan untuk tabel `product_views`
--
ALTER TABLE `product_views`
  ADD CONSTRAINT `product_views_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
