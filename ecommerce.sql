-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 17 Agu 2024 pada 01.05
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
(0, '    <div class=\"layout_content_dekstop\">\r\n                    <div class=\"catalog_layout\">\r\n                        <h3>Contact Us</h3>\r\n                        <form action=\"\">\r\n                            <div class=\"contact\">\r\n                                <div class=\"contact_field\">\r\n                                    <label>Full Name</label>\r\n                                    <input type=\"text\">\r\n                                </div>\r\n                                <div class=\"contact_field\">\r\n                                    <label>Email</label>\r\n                                    <input type=\"email\">\r\n                                </div>\r\n                                <div class=\"contact_field\">\r\n                                    <label>Phone Number</label>\r\n                                    <input type=\"number\">\r\n                                </div>\r\n                                <div class=\"contact_field\">\r\n                                    <label>Message</label>\r\n                                    <textarea></textarea>\r\n                                </div>\r\n                                <button>Send Message</button>\r\n                            </div>\r\n                        </form>\r\n                    </div>\r\n                </div>');

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
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id`, `title`, `link`) VALUES
(2, 'Menu Custom', 'https://www.instagram.com/mndaa.ayy_/'),
(3, 'Menu Custom', 'https://www.instagram.com/mndaa.ayy_/'),
(4, 'Menu Custom', 'https://www.instagram.com/mndaa.ayy_/'),
(5, 'Menu Custom', 'https://www.instagram.com/mndaa.ayy_/');

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
(36, 'Product 1', 'https://example.com/buy-product-1', 10000, '[\"https:\\/\\/prahwa.net\\/storage\\/images\\/1NRtrcFHfMSxQCtUkqRPy8R8jEHhGWk5QtMHJtMm.webp\",\"https:\\/\\/prahwa.net\\/storage\\/images\\/SkVq0Pujzu2bj8UplIoIteh6aNYMwaz9XyussExn.webp\",\"https:\\/\\/prahwa.net\\/storage\\/images\\/HA5ocjraRETkmHpkAN9bTgjhYp5cJVCR9827xoRR.webp\"]', NULL, '<p>House Kari ala Jepang adalah bumbu saus padat dengan bahan rempah-rempah berkualitas dalam kemasan 935g yang dapat menyajikan hingga 50 porsi maanan kari. Rasa asli kari Jepang sejak tahun 1913 dengan rasa yang ringan dan tekstur kuah yang kental tanpa santan. Bumbu saus padat atau curry roux juga bisa dinikmati dengan&nbsp;</p>\r\n', 0),
(37, 'Product 2', 'https://example.com/buy-product-2', 20000, '[\"https:\\/\\/prahwa.net\\/storage\\/images\\/YjyWNHWIYS3icQMH1KhDVkdltdge1alILKMC3Ywi.webp\",\"https:\\/\\/prahwa.net\\/storage\\/images\\/wM0jLPoiGZBnRyA2fnIdaZHzrzSAQLkzWDWxcGwF.webp\",\"\"]', NULL, 'House Kari ala Jepang adalah bumbu saus padat dengan bahan rempah-rempah berkualitas dalam kemasan 935g yang dapat menyajikan hingga 50 porsi maanan kari. Rasa asli kari Jepang sejak tahun 1913 dengan rasa yang ringan dan tekstur kuah yang kental tanpa santan. Bumbu saus padat atau curry roux juga bisa dinikmati dengan berbagai cara seperti taburan nasi, bahan sop, mie, pasta, bakpao, atau bumbunya daging dan saus celup.\n\nHouse Kari ala Jepang Bersertifikat HALAL dari Indonesia sejak tahun 2016 telah menjadi distributor utama bahan baku menu kari Jepang di beberapa Hotel, Restoran dan Katering di Indonesia, Malaysia, Singapura, dan Dubai.', 0),
(38, 'Product 3', 'https://example.com/buy-product-3', 0, '[\"https:\\/\\/prahwa.net\\/storage\\/images\\/sIVdPFPTopLMyvzNkNmrr9mNVdc2pazAo2VJ1wp8.webp\",\"\",\"\"]', NULL, 'House Kari ala Jepang adalah bumbu saus padat dengan bahan rempah-rempah berkualitas dalam kemasan 935g yang dapat menyajikan hingga 50 porsi maanan kari. Rasa asli kari Jepang sejak tahun 1913 dengan rasa yang ringan dan tekstur kuah yang kental tanpa santan. Bumbu saus padat atau curry roux juga bisa dinikmati dengan berbagai cara seperti taburan nasi, bahan sop, mie, pasta, bakpao, atau bumbunya daging dan saus celup.\n\nHouse Kari ala Jepang Bersertifikat HALAL dari Indonesia sejak tahun 2016 telah menjadi distributor utama bahan baku menu kari Jepang di beberapa Hotel, Restoran dan Katering di Indonesia, Malaysia, Singapura, dan Dubai.', 0),
(39, 'Product 4', 'https://example.com/buy-product-4', 40000, '[\"https:\\/\\/prahwa.net\\/storage\\/images\\/x81BqJIWOPlThsxmEw8LwLG4rlCjEUGmGi9XqT6f.webp\",\"https:\\/\\/prahwa.net\\/storage\\/images\\/aBbx8BsNLgFqcqgGSYlEOQnkBXbxMwGKh5YpApDL.webp\",\"\"]', NULL, 'House Kari ala Jepang adalah bumbu saus padat dengan bahan rempah-rempah berkualitas dalam kemasan 935g yang dapat menyajikan hingga 50 porsi maanan kari. Rasa asli kari Jepang sejak tahun 1913 dengan rasa yang ringan dan tekstur kuah yang kental tanpa santan. Bumbu saus padat atau curry roux juga bisa dinikmati dengan berbagai cara seperti taburan nasi, bahan sop, mie, pasta, bakpao, atau bumbunya daging dan saus celup.\n\nHouse Kari ala Jepang Bersertifikat HALAL dari Indonesia sejak tahun 2016 telah menjadi distributor utama bahan baku menu kari Jepang di beberapa Hotel, Restoran dan Katering di Indonesia, Malaysia, Singapura, dan Dubai.', 0),
(40, 'Product 5', 'https://example.com/buy-product-5', 0, '[\"https:\\/\\/prahwa.net\\/storage\\/images\\/ozNwphtS2X6KQTK7ZZuyn3QgaklCGdhKOSVzVQ2R.webp\",\"https:\\/\\/prahwa.net\\/storage\\/images\\/5i1fXjWgtk137JmB5OutMdiwntYOUUdIeW5N5B9T.webp\",\"https:\\/\\/prahwa.net\\/storage\\/images\\/tJxDx4MiXlN1LPPy1cVBKt9qMVCVd5fkFE9FBXTo.webp\"]', NULL, 'House Kari ala Jepang adalah bumbu saus padat dengan bahan rempah-rempah berkualitas dalam kemasan 935g yang dapat menyajikan hingga 50 porsi maanan kari. Rasa asli kari Jepang sejak tahun 1913 dengan rasa yang ringan dan tekstur kuah yang kental tanpa santan. Bumbu saus padat atau curry roux juga bisa dinikmati dengan berbagai cara seperti taburan nasi, bahan sop, mie, pasta, bakpao, atau bumbunya daging dan saus celup.\n\nHouse Kari ala Jepang Bersertifikat HALAL dari Indonesia sejak tahun 2016 telah menjadi distributor utama bahan baku menu kari Jepang di beberapa Hotel, Restoran dan Katering di Indonesia, Malaysia, Singapura, dan Dubai.', 0),
(41, 'Product 1', 'https://example.com/buy-product-1', 10000, '[\"https:\\/\\/prahwa.net\\/storage\\/images\\/1NRtrcFHfMSxQCtUkqRPy8R8jEHhGWk5QtMHJtMm.webp\",\"https:\\/\\/prahwa.net\\/storage\\/images\\/SkVq0Pujzu2bj8UplIoIteh6aNYMwaz9XyussExn.webp\",\"https:\\/\\/prahwa.net\\/storage\\/images\\/HA5ocjraRETkmHpkAN9bTgjhYp5cJVCR9827xoRR.webp\"]', 0, 'House Kari ala Jepang adalah bumbu saus padat dengan bahan rempah-rempah berkualitas dalam kemasan 935g yang dapat menyajikan hingga 50 porsi maanan kari. Rasa asli kari Jepang sejak tahun 1913 dengan rasa yang ringan dan tekstur kuah yang kental tanpa santan. Bumbu saus padat atau curry roux juga bisa dinikmati dengan berbagai cara seperti taburan nasi, bahan sop, mie, pasta, bakpao, atau bumbunya daging dan saus celup.\n\nHouse Kari ala Jepang Bersertifikat HALAL dari Indonesia sejak tahun 2016 telah menjadi distributor utama bahan baku menu kari Jepang di beberapa Hotel, Restoran dan Katering di Indonesia, Malaysia, Singapura, dan Dubai.', 0),
(42, 'Product 2', 'https://example.com/buy-product-2', 20000, '[\"https:\\/\\/prahwa.net\\/storage\\/images\\/YjyWNHWIYS3icQMH1KhDVkdltdge1alILKMC3Ywi.webp\",\"https:\\/\\/prahwa.net\\/storage\\/images\\/wM0jLPoiGZBnRyA2fnIdaZHzrzSAQLkzWDWxcGwF.webp\",\"\"]', 0, 'House Kari ala Jepang adalah bumbu saus padat dengan bahan rempah-rempah berkualitas dalam kemasan 935g yang dapat menyajikan hingga 50 porsi maanan kari. Rasa asli kari Jepang sejak tahun 1913 dengan rasa yang ringan dan tekstur kuah yang kental tanpa santan. Bumbu saus padat atau curry roux juga bisa dinikmati dengan berbagai cara seperti taburan nasi, bahan sop, mie, pasta, bakpao, atau bumbunya daging dan saus celup.\n\nHouse Kari ala Jepang Bersertifikat HALAL dari Indonesia sejak tahun 2016 telah menjadi distributor utama bahan baku menu kari Jepang di beberapa Hotel, Restoran dan Katering di Indonesia, Malaysia, Singapura, dan Dubai.', 0),
(43, 'Product 3', 'https://example.com/buy-product-3', 0, '[\"https:\\/\\/prahwa.net\\/storage\\/images\\/sIVdPFPTopLMyvzNkNmrr9mNVdc2pazAo2VJ1wp8.webp\",\"\",\"\"]', 0, 'House Kari ala Jepang adalah bumbu saus padat dengan bahan rempah-rempah berkualitas dalam kemasan 935g yang dapat menyajikan hingga 50 porsi maanan kari. Rasa asli kari Jepang sejak tahun 1913 dengan rasa yang ringan dan tekstur kuah yang kental tanpa santan. Bumbu saus padat atau curry roux juga bisa dinikmati dengan berbagai cara seperti taburan nasi, bahan sop, mie, pasta, bakpao, atau bumbunya daging dan saus celup.\n\nHouse Kari ala Jepang Bersertifikat HALAL dari Indonesia sejak tahun 2016 telah menjadi distributor utama bahan baku menu kari Jepang di beberapa Hotel, Restoran dan Katering di Indonesia, Malaysia, Singapura, dan Dubai.', 0),
(44, 'Product 4', 'https://example.com/buy-product-4', 40000, '[\"https:\\/\\/prahwa.net\\/storage\\/images\\/x81BqJIWOPlThsxmEw8LwLG4rlCjEUGmGi9XqT6f.webp\",\"https:\\/\\/prahwa.net\\/storage\\/images\\/aBbx8BsNLgFqcqgGSYlEOQnkBXbxMwGKh5YpApDL.webp\",\"\"]', 0, 'House Kari ala Jepang adalah bumbu saus padat dengan bahan rempah-rempah berkualitas dalam kemasan 935g yang dapat menyajikan hingga 50 porsi maanan kari. Rasa asli kari Jepang sejak tahun 1913 dengan rasa yang ringan dan tekstur kuah yang kental tanpa santan. Bumbu saus padat atau curry roux juga bisa dinikmati dengan berbagai cara seperti taburan nasi, bahan sop, mie, pasta, bakpao, atau bumbunya daging dan saus celup.\n\nHouse Kari ala Jepang Bersertifikat HALAL dari Indonesia sejak tahun 2016 telah menjadi distributor utama bahan baku menu kari Jepang di beberapa Hotel, Restoran dan Katering di Indonesia, Malaysia, Singapura, dan Dubai.', 0),
(45, 'Product 5', 'https://example.com/buy-product-5', 0, '[\"https:\\/\\/prahwa.net\\/storage\\/images\\/ozNwphtS2X6KQTK7ZZuyn3QgaklCGdhKOSVzVQ2R.webp\",\"https:\\/\\/prahwa.net\\/storage\\/images\\/5i1fXjWgtk137JmB5OutMdiwntYOUUdIeW5N5B9T.webp\",\"https:\\/\\/prahwa.net\\/storage\\/images\\/tJxDx4MiXlN1LPPy1cVBKt9qMVCVd5fkFE9FBXTo.webp\"]', 0, 'House Kari ala Jepang adalah bumbu saus padat dengan bahan rempah-rempah berkualitas dalam kemasan 935g yang dapat menyajikan hingga 50 porsi maanan kari. Rasa asli kari Jepang sejak tahun 1913 dengan rasa yang ringan dan tekstur kuah yang kental tanpa santan. Bumbu saus padat atau curry roux juga bisa dinikmati dengan berbagai cara seperti taburan nasi, bahan sop, mie, pasta, bakpao, atau bumbunya daging dan saus celup.\n\nHouse Kari ala Jepang Bersertifikat HALAL dari Indonesia sejak tahun 2016 telah menjadi distributor utama bahan baku menu kari Jepang di beberapa Hotel, Restoran dan Katering di Indonesia, Malaysia, Singapura, dan Dubai.', 0),
(52, 'Product 1', 'https://example.com/buy-product-1', 10000, '[\"https:\\/\\/prahwa.net\\/storage\\/images\\/1NRtrcFHfMSxQCtUkqRPy8R8jEHhGWk5QtMHJtMm.webp\",\"https:\\/\\/prahwa.net\\/storage\\/images\\/SkVq0Pujzu2bj8UplIoIteh6aNYMwaz9XyussExn.webp\",\"https:\\/\\/prahwa.net\\/storage\\/images\\/HA5ocjraRETkmHpkAN9bTgjhYp5cJVCR9827xoRR.webp\"]', 10, 'House Kari ala Jepang adalah bumbu saus padat dengan bahan rempah-rempah berkualitas dalam kemasan 935g yang dapat menyajikan hingga 50 porsi maanan kari. Rasa asli kari Jepang sejak tahun 1913 dengan rasa yang ringan dan tekstur kuah yang kental tanpa santan. Bumbu saus padat atau curry roux juga bisa dinikmati dengan berbagai cara seperti taburan nasi, bahan sop, mie, pasta, bakpao, atau bumbunya daging dan saus celup.\n\nHouse Kari ala Jepang Bersertifikat HALAL dari Indonesia sejak tahun 2016 telah menjadi distributor utama bahan baku menu kari Jepang di beberapa Hotel, Restoran dan Katering di Indonesia, Malaysia, Singapura, dan Dubai.', 1),
(53, 'Product 2', 'https://example.com/buy-product-2', 20000, '[\"https:\\/\\/prahwa.net\\/storage\\/images\\/YjyWNHWIYS3icQMH1KhDVkdltdge1alILKMC3Ywi.webp\",\"https:\\/\\/prahwa.net\\/storage\\/images\\/wM0jLPoiGZBnRyA2fnIdaZHzrzSAQLkzWDWxcGwF.webp\",\"\"]', NULL, 'House Kari ala Jepang adalah bumbu saus padat dengan bahan rempah-rempah berkualitas dalam kemasan 935g yang dapat menyajikan hingga 50 porsi maanan kari. Rasa asli kari Jepang sejak tahun 1913 dengan rasa yang ringan dan tekstur kuah yang kental tanpa santan. Bumbu saus padat atau curry roux juga bisa dinikmati dengan berbagai cara seperti taburan nasi, bahan sop, mie, pasta, bakpao, atau bumbunya daging dan saus celup.\n\nHouse Kari ala Jepang Bersertifikat HALAL dari Indonesia sejak tahun 2016 telah menjadi distributor utama bahan baku menu kari Jepang di beberapa Hotel, Restoran dan Katering di Indonesia, Malaysia, Singapura, dan Dubai.', 0),
(54, 'Product 3', 'https://example.com/buy-product-3', 0, '[\"https:\\/\\/prahwa.net\\/storage\\/images\\/sIVdPFPTopLMyvzNkNmrr9mNVdc2pazAo2VJ1wp8.webp\",\"\",\"\"]', NULL, 'House Kari ala Jepang adalah bumbu saus padat dengan bahan rempah-rempah berkualitas dalam kemasan 935g yang dapat menyajikan hingga 50 porsi maanan kari. Rasa asli kari Jepang sejak tahun 1913 dengan rasa yang ringan dan tekstur kuah yang kental tanpa santan. Bumbu saus padat atau curry roux juga bisa dinikmati dengan berbagai cara seperti taburan nasi, bahan sop, mie, pasta, bakpao, atau bumbunya daging dan saus celup.\n\nHouse Kari ala Jepang Bersertifikat HALAL dari Indonesia sejak tahun 2016 telah menjadi distributor utama bahan baku menu kari Jepang di beberapa Hotel, Restoran dan Katering di Indonesia, Malaysia, Singapura, dan Dubai.', 0),
(55, 'Product 4', 'https://example.com/buy-product-4', 40000, '[\"https:\\/\\/prahwa.net\\/storage\\/images\\/x81BqJIWOPlThsxmEw8LwLG4rlCjEUGmGi9XqT6f.webp\",\"https:\\/\\/prahwa.net\\/storage\\/images\\/aBbx8BsNLgFqcqgGSYlEOQnkBXbxMwGKh5YpApDL.webp\",\"\"]', NULL, 'House Kari ala Jepang adalah bumbu saus padat dengan bahan rempah-rempah berkualitas dalam kemasan 935g yang dapat menyajikan hingga 50 porsi maanan kari. Rasa asli kari Jepang sejak tahun 1913 dengan rasa yang ringan dan tekstur kuah yang kental tanpa santan. Bumbu saus padat atau curry roux juga bisa dinikmati dengan berbagai cara seperti taburan nasi, bahan sop, mie, pasta, bakpao, atau bumbunya daging dan saus celup.\n\nHouse Kari ala Jepang Bersertifikat HALAL dari Indonesia sejak tahun 2016 telah menjadi distributor utama bahan baku menu kari Jepang di beberapa Hotel, Restoran dan Katering di Indonesia, Malaysia, Singapura, dan Dubai.', 0),
(56, 'Product 5', 'https://example.com/buy-product-5', 0, '[\"https:\\/\\/prahwa.net\\/storage\\/images\\/ozNwphtS2X6KQTK7ZZuyn3QgaklCGdhKOSVzVQ2R.webp\",\"https:\\/\\/prahwa.net\\/storage\\/images\\/5i1fXjWgtk137JmB5OutMdiwntYOUUdIeW5N5B9T.webp\",\"https:\\/\\/prahwa.net\\/storage\\/images\\/tJxDx4MiXlN1LPPy1cVBKt9qMVCVd5fkFE9FBXTo.webp\"]', 40, 'House Kari ala Jepang adalah bumbu saus padat dengan bahan rempah-rempah berkualitas dalam kemasan 935g yang dapat menyajikan hingga 50 porsi maanan kari. Rasa asli kari Jepang sejak tahun 1913 dengan rasa yang ringan dan tekstur kuah yang kental tanpa santan. Bumbu saus padat atau curry roux juga bisa dinikmati dengan berbagai cara seperti taburan nasi, bahan sop, mie, pasta, bakpao, atau bumbunya daging dan saus celup.\n\nHouse Kari ala Jepang Bersertifikat HALAL dari Indonesia sejak tahun 2016 telah menjadi distributor utama bahan baku menu kari Jepang di beberapa Hotel, Restoran dan Katering di Indonesia, Malaysia, Singapura, dan Dubai.', 1),
(57, 'Product 1', 'https://example.com/buy-product-1', 10000, '[\"https:\\/\\/prahwa.net\\/storage\\/images\\/1NRtrcFHfMSxQCtUkqRPy8R8jEHhGWk5QtMHJtMm.webp\",\"https:\\/\\/prahwa.net\\/storage\\/images\\/SkVq0Pujzu2bj8UplIoIteh6aNYMwaz9XyussExn.webp\",\"https:\\/\\/prahwa.net\\/storage\\/images\\/HA5ocjraRETkmHpkAN9bTgjhYp5cJVCR9827xoRR.webp\"]', 10, 'House Kari ala Jepang adalah bumbu saus padat dengan bahan rempah-rempah berkualitas dalam kemasan 935g yang dapat menyajikan hingga 50 porsi maanan kari. Rasa asli kari Jepang sejak tahun 1913 dengan rasa yang ringan dan tekstur kuah yang kental tanpa santan. Bumbu saus padat atau curry roux juga bisa dinikmati dengan berbagai cara seperti taburan nasi, bahan sop, mie, pasta, bakpao, atau bumbunya daging dan saus celup.\n\nHouse Kari ala Jepang Bersertifikat HALAL dari Indonesia sejak tahun 2016 telah menjadi distributor utama bahan baku menu kari Jepang di beberapa Hotel, Restoran dan Katering di Indonesia, Malaysia, Singapura, dan Dubai.', 1),
(58, 'Product 2', 'https://example.com/buy-product-2', 20000, '[\"https:\\/\\/prahwa.net\\/storage\\/images\\/YjyWNHWIYS3icQMH1KhDVkdltdge1alILKMC3Ywi.webp\",\"https:\\/\\/prahwa.net\\/storage\\/images\\/wM0jLPoiGZBnRyA2fnIdaZHzrzSAQLkzWDWxcGwF.webp\",\"\"]', NULL, 'House Kari ala Jepang adalah bumbu saus padat dengan bahan rempah-rempah berkualitas dalam kemasan 935g yang dapat menyajikan hingga 50 porsi maanan kari. Rasa asli kari Jepang sejak tahun 1913 dengan rasa yang ringan dan tekstur kuah yang kental tanpa santan. Bumbu saus padat atau curry roux juga bisa dinikmati dengan berbagai cara seperti taburan nasi, bahan sop, mie, pasta, bakpao, atau bumbunya daging dan saus celup.\n\nHouse Kari ala Jepang Bersertifikat HALAL dari Indonesia sejak tahun 2016 telah menjadi distributor utama bahan baku menu kari Jepang di beberapa Hotel, Restoran dan Katering di Indonesia, Malaysia, Singapura, dan Dubai.', 0),
(59, 'Product 3', 'https://example.com/buy-product-3', 4000000, '[\"https:\\/\\/prahwa.net\\/storage\\/images\\/sIVdPFPTopLMyvzNkNmrr9mNVdc2pazAo2VJ1wp8.webp\",\"\",\"\"]', NULL, 'House Kari ala Jepang adalah bumbu saus padat dengan bahan rempah-rempah berkualitas dalam kemasan 935g yang dapat menyajikan hingga 50 porsi maanan kari. Rasa asli kari Jepang sejak tahun 1913 dengan rasa yang ringan dan tekstur kuah yang kental tanpa santan. Bumbu saus padat atau curry roux juga bisa dinikmati dengan berbagai cara seperti taburan nasi, bahan sop, mie, pasta, bakpao, atau bumbunya daging dan saus celup.\n\nHouse Kari ala Jepang Bersertifikat HALAL dari Indonesia sejak tahun 2016 telah menjadi distributor utama bahan baku menu kari Jepang di beberapa Hotel, Restoran dan Katering di Indonesia, Malaysia, Singapura, dan Dubai.', 0),
(60, 'Product 4', 'https://example.com/buy-product-4', 40000, '[\"https:\\/\\/prahwa.net\\/storage\\/images\\/x81BqJIWOPlThsxmEw8LwLG4rlCjEUGmGi9XqT6f.webp\",\"https:\\/\\/prahwa.net\\/storage\\/images\\/aBbx8BsNLgFqcqgGSYlEOQnkBXbxMwGKh5YpApDL.webp\",\"\"]', NULL, 'House Kari ala Jepang adalah bumbu saus padat dengan bahan rempah-rempah berkualitas dalam kemasan 935g yang dapat menyajikan hingga 50 porsi maanan kari. Rasa asli kari Jepang sejak tahun 1913 dengan rasa yang ringan dan tekstur kuah yang kental tanpa santan. Bumbu saus padat atau curry roux juga bisa dinikmati dengan berbagai cara seperti taburan nasi, bahan sop, mie, pasta, bakpao, atau bumbunya daging dan saus celup.\n\nHouse Kari ala Jepang Bersertifikat HALAL dari Indonesia sejak tahun 2016 telah menjadi distributor utama bahan baku menu kari Jepang di beberapa Hotel, Restoran dan Katering di Indonesia, Malaysia, Singapura, dan Dubai.', 0),
(61, 'Product 5', 'https://example.com/buy-product-5', 100000, '[\"https:\\/\\/prahwa.net\\/storage\\/images\\/ozNwphtS2X6KQTK7ZZuyn3QgaklCGdhKOSVzVQ2R.webp\",\"https:\\/\\/prahwa.net\\/storage\\/images\\/5i1fXjWgtk137JmB5OutMdiwntYOUUdIeW5N5B9T.webp\",\"https:\\/\\/prahwa.net\\/storage\\/images\\/tJxDx4MiXlN1LPPy1cVBKt9qMVCVd5fkFE9FBXTo.webp\"]', 40, 'House Kari ala Jepang adalah bumbu saus padat dengan bahan rempah-rempah berkualitas dalam kemasan 935g yang dapat menyajikan hingga 50 porsi maanan kari. Rasa asli kari Jepang sejak tahun 1913 dengan rasa yang ringan dan tekstur kuah yang kental tanpa santan. Bumbu saus padat atau curry roux juga bisa dinikmati dengan berbagai cara seperti taburan nasi, bahan sop, mie, pasta, bakpao, atau bumbunya daging dan saus celup.\n\nHouse Kari ala Jepang Bersertifikat HALAL dari Indonesia sejak tahun 2016 telah menjadi distributor utama bahan baku menu kari Jepang di beberapa Hotel, Restoran dan Katering di Indonesia, Malaysia, Singapura, dan Dubai.', 1);

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
(33, 36, 0),
(34, 37, 0),
(35, 38, 0),
(36, 39, 0),
(37, 40, 0),
(38, 41, 0),
(39, 42, 0),
(40, 43, 0),
(41, 44, 0),
(42, 45, 0),
(49, 52, 0),
(50, 53, 0),
(51, 54, 0),
(52, 55, 0),
(53, 56, 0),
(54, 57, 0),
(55, 58, 0),
(56, 59, 0),
(57, 60, 0),
(58, 61, 0);

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
(33, 36, 4),
(34, 37, 0),
(35, 38, 0),
(36, 39, 0),
(37, 40, 2),
(38, 41, 4),
(39, 42, 0),
(40, 43, 2),
(41, 44, 46),
(42, 45, 0),
(49, 52, 0),
(50, 53, 0),
(51, 54, 0),
(52, 55, 0),
(53, 56, 0),
(54, 57, 0),
(55, 58, 0),
(56, 59, 0),
(57, 60, 0),
(58, 61, 0);

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
  `text_body` text DEFAULT NULL,
  `theme` varchar(255) DEFAULT NULL,
  `copyright` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `settings`
--

INSERT INTO `settings` (`id`, `title`, `site_name`, `meta_description`, `logo`, `favicon`, `image_body`, `text_body`, `theme`, `copyright`) VALUES
(2, 'Digitale', 'Digitalee', 'masyaallah\r\n', '1723846727_logo-menara-ilmu-otomasi-ugm.png', '1723846727_logo-menara-ilmu-otomasi-ugm1.png', '1723838948_gatot.png', 'Kumpulan Produk Digital Terbaik Sepanjang Masa', 'sasasa', 'Copyright ©️ Produk Digital 2024');

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
(6, 'About', 'https://www.instagram.com/mndaa.ayy_/');

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
(2, 'mobile', NULL),
(4, 'mobile 2', NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT untuk tabel `product_purchases`
--
ALTER TABLE `product_purchases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT untuk tabel `product_views`
--
ALTER TABLE `product_views`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT untuk tabel `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `shortcuts`
--
ALTER TABLE `shortcuts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
