-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Сен 14 2020 г., 15:52
-- Версия сервера: 10.4.13-MariaDB
-- Версия PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `minilaravel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`, `image`) VALUES
(1, NULL, 1, 'Fast Food', 'fast-food', '2020-08-25 08:35:40', '2020-08-31 04:17:06', 'categories\\August2020\\FPs4t28PSEdRHaGOmrbX.jpg'),
(2, NULL, 5, 'Chicken', 'chicken', '2020-08-25 08:35:40', '2020-08-31 04:17:06', 'categories\\August2020\\myieztMec5Mhy87XrAGH.jpg'),
(3, NULL, 2, 'Pizza', 'pizza', '2020-08-26 03:33:11', '2020-08-31 04:17:08', 'categories\\August2020\\ELqkHQc1lYirLE0UvZka.jpg'),
(4, NULL, 4, 'Dessert', 'dessert', '2020-08-26 03:33:27', '2020-08-31 04:17:08', 'categories\\August2020\\jzaX6CvkX0R2BLEGDRLf.jpg'),
(5, NULL, 3, 'Vegetarian', 'vegetarian', '2020-08-26 03:34:02', '2020-08-31 04:17:08', 'categories\\August2020\\8EgPywajITDHFH5D0yWL.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `category_posts`
--

CREATE TABLE `category_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(75) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_desc` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `category_posts`
--

INSERT INTO `category_posts` (`id`, `title`, `slug`, `status`, `content`, `meta_title`, `meta_desc`, `created_at`, `updated_at`) VALUES
(1, 'жёлтая категория', 'supernewpost1', 1, 'yello', 'test1', 'test1', '2020-09-08 09:11:36', '2020-09-08 09:11:38'),
(2, 'зелёная категория', 'supernewpost2', 1, 'green', 'test11', '111', '2020-09-08 09:11:35', '2020-09-08 09:11:37'),
(3, 'красная категория', 'supernewpost3', 1, 'red', 'test3', '33', '2020-09-08 09:11:34', '2020-09-08 09:11:37');

-- --------------------------------------------------------

--
-- Структура таблицы `category_recipes`
--

CREATE TABLE `category_recipes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(75) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_desc` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `category_recipes`
--

INSERT INTO `category_recipes` (`id`, `title`, `slug`, `content`, `meta_title`, `meta_desc`, `status`, `created_at`, `updated_at`, `image`) VALUES
(6, 'FRUITS AND SALAD', 'fruit-and-salad', 'content lorem .....', 'meta lorem', 'meta lorem', 1, '2020-09-01 05:53:30', '2020-09-01 05:53:30', NULL),
(7, 'Vegan and Fruits', 'vagan-and-fruits', 'content lorem .....', 'meta lorem', 'meta lorem', 1, '2020-09-01 05:56:37', '2020-09-01 05:56:37', NULL),
(8, 'Chicken', 'chicken', 'content lorem .....', 'meta lorem', 'meta lorem', 1, '2020-09-01 07:35:54', '2020-09-01 07:35:54', 'category-recipes\\September2020\\eIBAhG0lZmouaQG3rG7n.jpg'),
(9, 'Fast Food', 'fast-food', 'content lorem .....', 'meta lorem', 'meta lorem', 1, '2020-09-01 07:36:28', '2020-09-01 07:36:28', 'category-recipes\\September2020\\T2VwybSF3kWBaZfJymLe.jpg'),
(10, 'Dessert', 'desert', 'content lorem .....', 'meta lorem', 'meta lorem', 1, '2020-09-01 07:36:54', '2020-09-01 07:36:54', 'category-recipes\\September2020\\QxBPGpkjuUbbZmSNmsiy.jpg'),
(11, 'Vegetarian', 'vegetarian', 'content lorem .....', 'meta lorem', 'meta lorem', 1, '2020-09-01 07:37:23', '2020-09-01 07:37:23', 'category-recipes\\September2020\\aOZ9Fu5C3aTnLRwMO92q.jpg'),
(12, 'Pizza', 'pizza', 'content lorem .....', 'meta lorem', 'meta lorem', 1, '2020-09-01 07:37:48', '2020-09-01 07:37:48', 'category-recipes\\September2020\\bkpkEfcnH6fw8VZcZfYo.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `commentable_id` bigint(20) UNSIGNED NOT NULL,
  `commentable_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT 1,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rating` tinyint(5) DEFAULT 1,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `commentable_id`, `commentable_type`, `name`, `status`, `comment`, `created_at`, `updated_at`, `rating`, `email`, `url`) VALUES
(29, 11, 'App\\Models\\Recipe', 'мдфв', 1, 'hero клубника', '2020-09-07 08:59:08', '2020-09-07 08:59:08', 1, NULL, NULL),
(30, 8, 'App\\Models\\Recipe', 'veg', 1, 'vegan', '2020-09-07 09:30:33', '2020-09-07 09:30:33', 1, NULL, NULL),
(31, 15, 'App\\Models\\Recipe', 'vlad11', 1, 'test', '2020-09-07 10:05:14', '2020-09-07 10:05:14', 1, NULL, NULL),
(32, 14, 'App\\Models\\Recipe', 'Виталик', 1, 'невкучно', '2020-09-07 11:42:06', '2020-09-07 11:42:06', 1, NULL, NULL),
(33, 17, 'TCG\\Voyager\\Models\\Post', 'фывфыв', 1, 'фывфыв', '2020-09-07 11:46:05', '2020-09-07 11:46:05', 1, NULL, NULL),
(34, 1, 'TCG\\Voyager\\Models\\Post', 'dfgdfg', 1, 'dfgdfg', '2020-09-07 11:52:57', '2020-09-07 11:52:57', 1, NULL, NULL),
(35, 4, 'TCG\\Voyager\\Models\\Post', 'dfgdfg', 1, 'dfgdfg', '2020-09-07 11:56:44', '2020-09-07 11:56:44', 1, NULL, NULL),
(36, 21, 'TCG\\Voyager\\Models\\Post', 'vlad', 1, 'black window', '2020-09-08 09:04:35', '2020-09-08 09:04:35', 1, NULL, NULL),
(37, 1, 'App\\Models\\Recipe', 'влад', 1, 'Манка', '2020-09-08 10:48:38', '2020-09-08 10:48:38', 1, NULL, NULL),
(38, 12, 'App\\Models\\Recipe', 'vladddd', 1, 'манка', '2020-09-08 10:58:30', '2020-09-08 10:58:30', 1, NULL, NULL),
(39, 37, 'TCG\\Voyager\\Models\\Post', 'vip', 1, 'city', '2020-09-10 05:28:56', '2020-09-10 05:28:56', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `first_name`, `last_name`, `email`, `subject`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Alex', 'Born', 'tests@test.com', 'subject lorem5', 'mesage test', 0, '2020-08-25 09:41:41', '2020-08-25 09:41:41');

-- --------------------------------------------------------

--
-- Структура таблицы `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(29, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(30, 5, 'author_id', 'number', 'Author', 1, 0, 1, 1, 0, 1, '{}', 2),
(31, 5, 'category_id', 'number', 'Category', 0, 0, 1, 1, 1, 0, '{}', 3),
(32, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 4),
(33, 5, 'excerpt', 'text_area', 'Excerpt', 0, 0, 1, 1, 1, 1, '{}', 5),
(34, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, '{}', 6),
(35, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(36, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(37, 5, 'meta_description', 'text_area', 'Meta Description', 0, 0, 1, 1, 1, 1, '{}', 9),
(38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 0, 0, 1, 1, 1, 1, '{}', 10),
(39, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(40, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 12),
(41, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 13),
(42, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, '{}', 14),
(43, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, '{}', 15),
(44, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(45, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, '{}', 2),
(46, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 3),
(47, 6, 'excerpt', 'text_area', 'Excerpt', 0, 0, 1, 1, 1, 1, '{}', 4),
(48, 6, 'body', 'rich_text_box', 'Body', 0, 0, 1, 1, 1, 1, '{}', 5),
(49, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6),
(50, 6, 'meta_description', 'text', 'Meta Description', 0, 0, 1, 1, 1, 1, '{}', 7),
(51, 6, 'meta_keywords', 'text', 'Meta Keywords', 0, 0, 1, 1, 1, 1, '{}', 8),
(52, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(53, 6, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 10),
(54, 6, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 11),
(55, 6, 'image', 'image', 'Page Image', 0, 1, 1, 1, 1, 1, '{}', 12),
(56, 7, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(57, 7, 'first_name', 'text', 'First Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(58, 7, 'last_name', 'text', 'Last Name', 1, 1, 1, 1, 1, 1, '{}', 3),
(59, 7, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{}', 4),
(60, 7, 'subject', 'text', 'Subject', 1, 1, 1, 1, 1, 1, '{}', 5),
(61, 7, 'message', 'text', 'Message', 1, 1, 1, 1, 1, 1, '{}', 6),
(62, 7, 'status', 'checkbox', 'Status', 1, 1, 1, 1, 1, 1, '{\"0\":\"On Text\",\"1\":\"Off Text\"}', 7),
(63, 7, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 8),
(64, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
(73, 5, 'post_belongsto_category_relationship', 'relationship', 'categories', 0, 1, 1, 1, 1, 1, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Category\",\"table\":\"categories\",\"type\":\"belongsTo\",\"column\":\"category_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 18),
(101, 15, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(102, 15, 'commentable_id', 'hidden', 'Commentable Id', 1, 1, 1, 1, 1, 1, '{}', 2),
(103, 15, 'commentable_type', 'hidden', 'Commentable Type', 1, 1, 1, 1, 1, 1, '{}', 3),
(104, 15, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 4),
(105, 15, 'status', 'checkbox', 'Status', 0, 1, 1, 1, 1, 1, '{}', 5),
(106, 15, 'comment', 'text', 'Comment', 1, 1, 1, 1, 1, 1, '{}', 6),
(107, 15, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 7),
(108, 15, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(109, 15, 'rating', 'text', 'Rating', 0, 1, 1, 1, 1, 1, '{}', 9),
(110, 15, 'comment_belongsto_recipe_relationship', 'relationship', 'recipes', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\Recipe\",\"table\":\"recipes\",\"type\":\"belongsTo\",\"column\":\"commentable_id\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 10),
(112, 5, 'likes', 'number', 'Likes', 0, 1, 1, 1, 1, 1, '{}', 17),
(113, 5, 'post_hasmany_comment_relationship', 'relationship', 'comments', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\Comment\",\"table\":\"comments\",\"type\":\"hasMany\",\"column\":\"commentable_id\",\"key\":\"id\",\"label\":\"comment\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 19),
(114, 15, 'comment_belongsto_post_relationship', 'relationship', 'posts', 0, 1, 1, 1, 1, 1, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Post\",\"table\":\"posts\",\"type\":\"belongsTo\",\"column\":\"commentable_id\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 11),
(117, 5, 'min_read', 'number', 'Min Read', 0, 1, 1, 1, 1, 1, '{}', 16),
(118, 16, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(119, 16, 'categorie_recipe_id', 'number', 'Categorie Recipe Id', 1, 1, 1, 1, 1, 1, '{}', 2),
(120, 16, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 3),
(121, 16, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{}', 4),
(122, 16, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{}', 5),
(123, 16, 'content', 'text', 'Content', 1, 1, 1, 1, 1, 1, '{}', 6),
(124, 16, 'status', 'checkbox', 'Status', 1, 1, 1, 1, 1, 1, '{}', 7),
(125, 16, 'show_index', 'checkbox', 'add to top slider', 1, 1, 1, 1, 1, 1, '{}', 8),
(127, 16, 'meta_title', 'text', 'Meta Title', 1, 1, 1, 1, 1, 1, '{}', 10),
(128, 16, 'meta_desc', 'text', 'Meta Desc', 1, 1, 1, 1, 1, 1, '{}', 11),
(129, 16, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 12),
(130, 16, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 13),
(131, 17, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(132, 17, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 2),
(133, 17, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{}', 3),
(134, 17, 'content', 'text', 'Content', 1, 1, 1, 1, 1, 1, '{}', 4),
(135, 17, 'meta_title', 'text', 'Meta Title', 1, 1, 1, 1, 1, 1, '{}', 5),
(136, 17, 'meta_desc', 'text', 'Meta Desc', 1, 1, 1, 1, 1, 1, '{}', 6),
(137, 17, 'status', 'checkbox', 'Status', 1, 1, 1, 1, 1, 1, '{}', 7),
(138, 17, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 8),
(139, 17, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
(140, 17, 'category_recipe_hasmany_recipe_relationship', 'relationship', 'recipes', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\Recipe\",\"table\":\"recipes\",\"type\":\"hasMany\",\"column\":\"categorie_recipe_id\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 10),
(141, 16, 'recipe_belongsto_category_recipe_relationship', 'relationship', 'category_recipes', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\CategoryRecipe\",\"table\":\"category_recipes\",\"type\":\"belongsTo\",\"column\":\"categorie_recipe_id\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 14),
(142, 17, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{}', 10),
(143, 16, 'order', 'number', 'Order', 0, 1, 1, 1, 1, 1, '{}', 14),
(144, 16, 'trending', 'checkbox', 'Trending', 0, 1, 1, 1, 1, 1, '{}', 15),
(145, 16, 'recipe_hasmany_comment_relationship', 'relationship', 'comments', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\Comment\",\"table\":\"comments\",\"type\":\"hasMany\",\"column\":\"commentable_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 16),
(146, 16, 'featured', 'checkbox', 'Featured', 0, 1, 1, 1, 1, 1, '{}', 16),
(147, 18, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(148, 18, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 2),
(149, 18, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{}', 3),
(150, 18, 'url', 'text', 'Url', 1, 1, 1, 1, 1, 1, '{}', 4),
(151, 18, 'status', 'checkbox', 'Status', 1, 1, 1, 1, 1, 1, '{}', 5),
(152, 18, 'order', 'number', 'Order', 0, 1, 1, 1, 1, 1, '{}', 6),
(153, 18, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 7),
(154, 18, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(155, 21, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(156, 21, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{}', 2),
(157, 21, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 3),
(158, 21, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(159, 16, 'eye', 'number', 'Eye', 0, 1, 1, 1, 1, 1, '{}', 9),
(160, 17, 'show_index', 'checkbox', 'show Vegetarian ?', 0, 1, 1, 1, 1, 1, '{}', 11),
(161, 16, 'show_home', 'checkbox', 'Show Home', 0, 1, 1, 1, 1, 1, '{}', 17),
(162, 22, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(163, 22, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(164, 22, 'message', 'text', 'Message', 1, 1, 1, 1, 1, 1, '{}', 3),
(165, 22, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, '{}', 4),
(166, 22, 'rating', 'number', 'Rating', 0, 1, 1, 1, 1, 1, '{}', 5),
(167, 22, 'status', 'checkbox', 'Status', 1, 1, 1, 1, 1, 1, '{}', 6),
(168, 22, 'order', 'number', 'Order', 0, 1, 1, 1, 1, 1, '{}', 7),
(169, 22, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 8),
(170, 22, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
(171, 22, 'lastname', 'text', 'Lastname', 0, 1, 1, 1, 1, 1, '{}', 10),
(172, 22, 'email', 'text', 'Email', 0, 1, 1, 1, 1, 1, '{}', 11),
(173, 22, 'subject', 'text', 'Subject', 0, 1, 1, 1, 1, 1, '{}', 12),
(174, 15, 'email', 'text', 'Email', 0, 1, 1, 1, 1, 1, '{}', 10),
(175, 15, 'url', 'text', 'Url', 0, 1, 1, 1, 1, 1, '{}', 11);

-- --------------------------------------------------------

--
-- Структура таблицы `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2020-08-25 08:35:02', '2020-08-25 08:35:02'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2020-08-25 08:35:02', '2020-08-25 08:35:02'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2020-08-25 08:35:02', '2020-08-25 08:35:02'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2020-08-25 08:35:41', '2020-09-01 05:09:49'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2020-08-25 08:35:41', '2020-09-07 06:51:26'),
(7, 'contacts', 'contacts', 'Contact', 'Contacts', 'voyager-people', 'App\\Models\\Contact', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-08-25 08:39:42', '2020-08-25 08:41:23'),
(15, 'comments', 'comments', 'Comment', 'Comments', 'voyager-bubble', 'App\\Models\\Comment', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-08-31 06:02:35', '2020-09-08 09:07:28'),
(16, 'recipes', 'recipes', 'Recipe', 'Recipes', 'voyager-pizza', 'App\\Models\\Recipe', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-09-01 05:45:28', '2020-09-07 09:22:33'),
(17, 'category_recipes', 'category-recipes', 'Category Recipe', 'Category Recipes', 'voyager-documentation', 'App\\Models\\CategoryRecipe', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-09-01 05:46:34', '2020-09-07 09:13:48'),
(18, 'videos', 'videos', 'Video', 'Videos', 'voyager-video', 'App\\Models\\Video', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"created_at\",\"order_display_column\":\"created_at\",\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-09-07 07:12:28', '2020-09-07 07:22:58'),
(21, 'footer_images', 'footer-images', 'FooterImage', 'FooterImages', 'voyager-photos', 'App\\Models\\FooterImage', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-09-07 08:03:16', '2020-09-07 08:28:43'),
(22, 'testimonials', 'Testimonials', 'Testimonial', 'Testimonials', 'voyager-star', 'App\\Models\\Testimonial', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-09-07 11:30:14', '2020-09-07 11:30:14');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `footer_images`
--

CREATE TABLE `footer_images` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `footer_images`
--

INSERT INTO `footer_images` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'footer-images\\\\September2020\\\\zAYnU08RYrfbL8Z8e6Tm.jpg', '2020-09-07 08:11:08', '2020-09-07 08:11:08'),
(2, 'footer-images\\\\September2020\\\\GJe4SYxtLPdViERRuImO.jpg', '2020-09-07 08:11:15', '2020-09-07 08:11:15'),
(3, 'footer-images\\\\September2020\\\\3WMUHb5LJa7ZT4ltcqdg.jpg', '2020-09-07 08:11:22', '2020-09-07 08:11:22'),
(4, 'footer-images\\\\September2020\\\\H6S8MFDMbGKqfMjBMx2A.jpg', '2020-09-07 08:11:30', '2020-09-07 08:11:30'),
(5, 'footer-images\\\\September2020\\\\eouXqFiLinnM7NynoNif.jpg', '2020-09-07 08:11:39', '2020-09-07 08:11:39'),
(6, 'footer-images\\\\September2020\\\\rOE9DbLLZ1i25yzfTEEL.jpg', '2020-09-07 08:11:47', '2020-09-07 08:11:47'),
(7, 'footer-images\\\\September2020\\\\IDuve14o2mmMzuzY0sw7.jpg', '2020-09-07 08:11:55', '2020-09-07 08:11:55'),
(8, 'footer-images\\\\September2020\\\\Du65ZRr0qMxwIB4bedlc.jpg', '2020-09-07 08:12:03', '2020-09-07 08:12:03'),
(9, 'footer-images\\\\September2020\\\\tLRwn1Si1oNLgzU5dAEI.jpg', '2020-09-07 08:12:12', '2020-09-07 08:12:12'),
(10, 'footer-images\\\\September2020\\\\TFU6jaztDEXVbM1oK8nr.jpg', '2020-09-07 08:12:20', '2020-09-07 08:12:20'),
(11, 'footer-images\\\\September2020\\\\1FmFgJLsZc2reejRr6kC.jpg', '2020-09-07 08:12:27', '2020-09-07 08:12:27'),
(12, 'footer-images\\\\September2020\\\\hPIIshJKM2zY5PEH6mGL.jpg', '2020-09-07 08:12:33', '2020-09-07 08:12:33'),
(13, 'footer-images\\\\September2020\\\\u8SuxsrnDVge2Yx0KExL.jpg', '2020-09-07 08:12:42', '2020-09-07 08:12:42'),
(14, 'footer-images\\\\September2020\\\\kDYe3npZOnKXzfbGWvwd.jpg', '2020-09-07 08:12:49', '2020-09-07 08:12:49'),
(15, 'footer-images\\\\September2020\\\\y3QtW86XLHLL3fP1CN3U.jpg', '2020-09-07 08:12:57', '2020-09-07 08:12:57');

-- --------------------------------------------------------

--
-- Структура таблицы `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2020-08-25 08:35:02', '2020-08-25 08:35:02'),
(2, 'main', '2020-08-25 08:42:04', '2020-08-26 03:16:50');

-- --------------------------------------------------------

--
-- Структура таблицы `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2020-08-25 08:35:02', '2020-08-25 08:35:02', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 4, '2020-08-25 08:35:02', '2020-08-26 10:24:52', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2020-08-25 08:35:02', '2020-08-25 08:35:02', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2020-08-25 08:35:02', '2020-08-25 08:35:02', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 8, '2020-08-25 08:35:02', '2020-08-26 10:24:52', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2020-08-25 08:35:02', '2020-08-26 10:24:52', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2020-08-25 08:35:02', '2020-08-26 10:24:52', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2020-08-25 08:35:02', '2020-08-26 10:24:52', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2020-08-25 08:35:02', '2020-08-26 10:24:52', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 9, '2020-08-25 08:35:02', '2020-08-26 10:24:52', 'voyager.settings.index', NULL),
(12, 1, 'Posts', '', '_self', 'voyager-news', NULL, NULL, 5, '2020-08-25 08:35:41', '2020-08-26 10:24:52', 'voyager.posts.index', NULL),
(13, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, NULL, 6, '2020-08-25 08:35:41', '2020-08-26 10:24:52', 'voyager.pages.index', NULL),
(14, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 5, '2020-08-25 08:35:41', '2020-08-26 10:24:52', 'voyager.hooks', NULL),
(15, 1, 'Contacts', '', '_self', 'voyager-people', NULL, NULL, 10, '2020-08-25 08:39:42', '2020-08-26 10:24:52', 'voyager.contacts.index', NULL),
(16, 2, 'Home', '/', '_self', NULL, '#000000', NULL, 1, '2020-08-25 08:42:20', '2020-09-02 06:44:18', NULL, ''),
(17, 2, 'About', '/about', '_self', NULL, '#000000', NULL, 2, '2020-08-25 08:42:34', '2020-09-02 06:44:38', NULL, ''),
(21, 2, 'Contact', '/contacts', '_self', 'voyager-telephone', '#000000', NULL, 3, '2020-08-26 10:26:59', '2020-09-02 06:44:38', NULL, ''),
(22, 2, 'Blogs', '/blog', '_self', 'r', '#000000', NULL, 4, '2020-08-31 04:48:30', '2020-09-02 06:44:38', NULL, ''),
(23, 1, 'Comments', '', '_self', 'voyager-bubble', NULL, NULL, 11, '2020-08-31 06:02:35', '2020-08-31 06:03:02', 'voyager.comments.index', NULL),
(24, 1, 'Recipes', '', '_self', 'voyager-pizza', NULL, NULL, 12, '2020-09-01 05:45:28', '2020-09-01 05:45:28', 'voyager.recipes.index', NULL),
(25, 1, 'Category Recipes', '', '_self', 'voyager-documentation', NULL, NULL, 13, '2020-09-01 05:46:34', '2020-09-01 05:46:34', 'voyager.category-recipes.index', NULL),
(26, 1, 'Videos', '', '_self', 'voyager-video', NULL, NULL, 14, '2020-09-07 07:12:28', '2020-09-07 07:12:28', 'voyager.videos.index', NULL),
(29, 1, 'Footer Images', '', '_self', 'voyager-photos', NULL, NULL, 15, '2020-09-07 08:03:16', '2020-09-07 08:03:16', 'voyager.footer-images.index', NULL),
(30, 1, 'Testimonials', '', '_self', 'voyager-star', NULL, NULL, 16, '2020-09-07 11:30:14', '2020-09-07 11:30:14', 'voyager.Testimonials.index', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_08_18_110850_create_testimonials_table', 1),
(2, '2020_08_18_114700_creat_pages_table', 1),
(3, '2020_08_18_121549_create_videos_table', 1),
(4, '2020_08_18_121904_create_contacts_table', 1),
(5, '2020_08_18_141116_create_category_recipes_table', 1),
(6, '2020_08_18_141609_create_category_posts_table', 1),
(7, '2020_08_19_074554_create_recipes_table', 1),
(8, '2020_08_19_081850_create_posts_table', 1),
(9, '2020_08_19_084023_create_comments_table', 1),
(10, '2014_10_12_000000_create_users_table', 2),
(11, '2014_10_12_100000_create_password_resets_table', 2),
(12, '2016_01_01_000000_add_voyager_user_fields', 2),
(13, '2016_01_01_000000_create_data_types_table', 2),
(14, '2016_05_19_173453_create_menu_table', 2),
(15, '2016_10_21_190000_create_roles_table', 2),
(16, '2016_10_21_190000_create_settings_table', 2),
(17, '2016_11_30_135954_create_permission_table', 2),
(18, '2016_11_30_141208_create_permission_role_table', 2),
(19, '2016_12_26_201236_data_types__add__server_side', 2),
(20, '2017_01_13_000000_add_route_to_menu_items_table', 2),
(21, '2017_01_14_005015_create_translations_table', 2),
(22, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 2),
(23, '2017_03_06_000000_add_controller_to_data_types_table', 2),
(24, '2017_04_21_000000_add_order_to_data_rows_table', 2),
(25, '2017_07_05_210000_add_policyname_to_data_types_table', 2),
(26, '2017_08_05_000000_add_group_to_settings_table', 2),
(27, '2017_11_26_013050_add_user_role_relationship', 2),
(28, '2017_11_26_015000_create_user_roles_table', 2),
(29, '2018_03_11_000000_add_user_settings', 2),
(30, '2018_03_14_000000_add_details_to_data_types_table', 2),
(31, '2018_03_16_000000_make_settings_value_nullable', 2),
(32, '2019_08_19_000000_create_failed_jobs_table', 2),
(33, '2016_01_01_000000_create_pages_table', 3),
(34, '2016_01_01_000000_create_posts_table', 4),
(35, '2016_02_15_204651_create_categories_table', 4),
(36, '2017_04_11_000000_alter_post_nullable_fields_table', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`, `image`) VALUES
(2, 1, 'About company', 'Aenean non accumsan ante. Duis et risus accumsan sem tempus porta nec sit amet est. Sed ut euismod quam. Suspendisse potenti. Aliquam fringilla orci tincidunt, ullamcorper erat in, malesuada metus.', '<p><span style=\"color: #666666; font-family: Roboto; font-size: 20px;\">Aenean non accumsan ante. Duis et risus accumsan sem tempus porta nec sit amet est. Sed ut euismod quam. Suspendisse potenti. Aliquam fringilla orci tincidunt, ullamcorper erat in, malesuada metus. Vivamus luctus maximus vestibulum. Donec et enim vitae tellus auctor ornare. Aenean leo diam, feugiat sed nulla sed, consequat venenatis est. Praesent commodo consequat pharetra. Fusce fermentum ante ac metus interdum elementum. Nam arcu lectus, lacinia non augue a, Mollis bibendum augue.</span></p>', 'about', 'meta desc', 'meta keywords', 'ACTIVE', '2020-09-02 10:28:33', '2020-09-07 06:52:54', 'pages\\September2020\\RNz71H9uWkuMsYLTgfnM.jpg'),
(3, 1, 'Home', 'lorem text home', '<p>body text home</p>', 'home', 'meta desc home', 'meta key home', 'ACTIVE', '2020-09-07 06:55:19', '2020-09-07 06:55:19', 'pages\\September2020\\MPzUUizlut8Kf88Vjl46.jpg'),
(4, 1, 'Contact Us', NULL, NULL, 'contact-us', 'meta desc contact', 'meta key contact', 'ACTIVE', '2020-09-07 06:56:40', '2020-09-07 06:56:40', NULL),
(5, 1, 'Blog Grid View With Sidebar', NULL, NULL, 'blog-grid-view-with-sidebar', 'meta desc blog', 'meta key blog', 'ACTIVE', '2020-09-07 06:57:16', '2020-09-07 06:57:16', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2020-08-25 08:35:02', '2020-08-25 08:35:02'),
(2, 'browse_bread', NULL, '2020-08-25 08:35:02', '2020-08-25 08:35:02'),
(3, 'browse_database', NULL, '2020-08-25 08:35:02', '2020-08-25 08:35:02'),
(4, 'browse_media', NULL, '2020-08-25 08:35:02', '2020-08-25 08:35:02'),
(5, 'browse_compass', NULL, '2020-08-25 08:35:02', '2020-08-25 08:35:02'),
(6, 'browse_menus', 'menus', '2020-08-25 08:35:02', '2020-08-25 08:35:02'),
(7, 'read_menus', 'menus', '2020-08-25 08:35:02', '2020-08-25 08:35:02'),
(8, 'edit_menus', 'menus', '2020-08-25 08:35:02', '2020-08-25 08:35:02'),
(9, 'add_menus', 'menus', '2020-08-25 08:35:02', '2020-08-25 08:35:02'),
(10, 'delete_menus', 'menus', '2020-08-25 08:35:02', '2020-08-25 08:35:02'),
(11, 'browse_roles', 'roles', '2020-08-25 08:35:02', '2020-08-25 08:35:02'),
(12, 'read_roles', 'roles', '2020-08-25 08:35:02', '2020-08-25 08:35:02'),
(13, 'edit_roles', 'roles', '2020-08-25 08:35:02', '2020-08-25 08:35:02'),
(14, 'add_roles', 'roles', '2020-08-25 08:35:02', '2020-08-25 08:35:02'),
(15, 'delete_roles', 'roles', '2020-08-25 08:35:02', '2020-08-25 08:35:02'),
(16, 'browse_users', 'users', '2020-08-25 08:35:02', '2020-08-25 08:35:02'),
(17, 'read_users', 'users', '2020-08-25 08:35:02', '2020-08-25 08:35:02'),
(18, 'edit_users', 'users', '2020-08-25 08:35:02', '2020-08-25 08:35:02'),
(19, 'add_users', 'users', '2020-08-25 08:35:02', '2020-08-25 08:35:02'),
(20, 'delete_users', 'users', '2020-08-25 08:35:02', '2020-08-25 08:35:02'),
(21, 'browse_settings', 'settings', '2020-08-25 08:35:02', '2020-08-25 08:35:02'),
(22, 'read_settings', 'settings', '2020-08-25 08:35:02', '2020-08-25 08:35:02'),
(23, 'edit_settings', 'settings', '2020-08-25 08:35:02', '2020-08-25 08:35:02'),
(24, 'add_settings', 'settings', '2020-08-25 08:35:02', '2020-08-25 08:35:02'),
(25, 'delete_settings', 'settings', '2020-08-25 08:35:02', '2020-08-25 08:35:02'),
(31, 'browse_posts', 'posts', '2020-08-25 08:35:41', '2020-08-25 08:35:41'),
(32, 'read_posts', 'posts', '2020-08-25 08:35:41', '2020-08-25 08:35:41'),
(33, 'edit_posts', 'posts', '2020-08-25 08:35:41', '2020-08-25 08:35:41'),
(34, 'add_posts', 'posts', '2020-08-25 08:35:41', '2020-08-25 08:35:41'),
(35, 'delete_posts', 'posts', '2020-08-25 08:35:41', '2020-08-25 08:35:41'),
(36, 'browse_pages', 'pages', '2020-08-25 08:35:41', '2020-08-25 08:35:41'),
(37, 'read_pages', 'pages', '2020-08-25 08:35:41', '2020-08-25 08:35:41'),
(38, 'edit_pages', 'pages', '2020-08-25 08:35:41', '2020-08-25 08:35:41'),
(39, 'add_pages', 'pages', '2020-08-25 08:35:41', '2020-08-25 08:35:41'),
(40, 'delete_pages', 'pages', '2020-08-25 08:35:41', '2020-08-25 08:35:41'),
(41, 'browse_hooks', NULL, '2020-08-25 08:35:41', '2020-08-25 08:35:41'),
(42, 'browse_contacts', 'contacts', '2020-08-25 08:39:42', '2020-08-25 08:39:42'),
(43, 'read_contacts', 'contacts', '2020-08-25 08:39:42', '2020-08-25 08:39:42'),
(44, 'edit_contacts', 'contacts', '2020-08-25 08:39:42', '2020-08-25 08:39:42'),
(45, 'add_contacts', 'contacts', '2020-08-25 08:39:42', '2020-08-25 08:39:42'),
(46, 'delete_contacts', 'contacts', '2020-08-25 08:39:42', '2020-08-25 08:39:42'),
(62, 'browse_comments', 'comments', '2020-08-31 06:02:35', '2020-08-31 06:02:35'),
(63, 'read_comments', 'comments', '2020-08-31 06:02:35', '2020-08-31 06:02:35'),
(64, 'edit_comments', 'comments', '2020-08-31 06:02:35', '2020-08-31 06:02:35'),
(65, 'add_comments', 'comments', '2020-08-31 06:02:35', '2020-08-31 06:02:35'),
(66, 'delete_comments', 'comments', '2020-08-31 06:02:35', '2020-08-31 06:02:35'),
(67, 'browse_recipes', 'recipes', '2020-09-01 05:45:28', '2020-09-01 05:45:28'),
(68, 'read_recipes', 'recipes', '2020-09-01 05:45:28', '2020-09-01 05:45:28'),
(69, 'edit_recipes', 'recipes', '2020-09-01 05:45:28', '2020-09-01 05:45:28'),
(70, 'add_recipes', 'recipes', '2020-09-01 05:45:28', '2020-09-01 05:45:28'),
(71, 'delete_recipes', 'recipes', '2020-09-01 05:45:28', '2020-09-01 05:45:28'),
(72, 'browse_category_recipes', 'category_recipes', '2020-09-01 05:46:34', '2020-09-01 05:46:34'),
(73, 'read_category_recipes', 'category_recipes', '2020-09-01 05:46:34', '2020-09-01 05:46:34'),
(74, 'edit_category_recipes', 'category_recipes', '2020-09-01 05:46:34', '2020-09-01 05:46:34'),
(75, 'add_category_recipes', 'category_recipes', '2020-09-01 05:46:34', '2020-09-01 05:46:34'),
(76, 'delete_category_recipes', 'category_recipes', '2020-09-01 05:46:34', '2020-09-01 05:46:34'),
(77, 'browse_videos', 'videos', '2020-09-07 07:12:28', '2020-09-07 07:12:28'),
(78, 'read_videos', 'videos', '2020-09-07 07:12:28', '2020-09-07 07:12:28'),
(79, 'edit_videos', 'videos', '2020-09-07 07:12:28', '2020-09-07 07:12:28'),
(80, 'add_videos', 'videos', '2020-09-07 07:12:28', '2020-09-07 07:12:28'),
(81, 'delete_videos', 'videos', '2020-09-07 07:12:28', '2020-09-07 07:12:28'),
(92, 'browse_footer_images', 'footer_images', '2020-09-07 08:03:16', '2020-09-07 08:03:16'),
(93, 'read_footer_images', 'footer_images', '2020-09-07 08:03:16', '2020-09-07 08:03:16'),
(94, 'edit_footer_images', 'footer_images', '2020-09-07 08:03:16', '2020-09-07 08:03:16'),
(95, 'add_footer_images', 'footer_images', '2020-09-07 08:03:16', '2020-09-07 08:03:16'),
(96, 'delete_footer_images', 'footer_images', '2020-09-07 08:03:16', '2020-09-07 08:03:16'),
(97, 'browse_testimonials', 'testimonials', '2020-09-07 11:30:14', '2020-09-07 11:30:14'),
(98, 'read_testimonials', 'testimonials', '2020-09-07 11:30:14', '2020-09-07 11:30:14'),
(99, 'edit_testimonials', 'testimonials', '2020-09-07 11:30:14', '2020-09-07 11:30:14'),
(100, 'add_testimonials', 'testimonials', '2020-09-07 11:30:14', '2020-09-07 11:30:14'),
(101, 'delete_testimonials', 'testimonials', '2020-09-07 11:30:14', '2020-09-07 11:30:14');

-- --------------------------------------------------------

--
-- Структура таблицы `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(92, 1),
(93, 1),
(94, 1),
(95, 1),
(96, 1),
(97, 1),
(98, 1),
(99, 1),
(100, 1),
(101, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `likes` int(11) DEFAULT 0,
  `min_read` tinyint(4) DEFAULT 5
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`, `likes`, `min_read`) VALUES
(1, 1, 1, 'Lorem Ipsum Post', 'Little Bill It was so much surprised, that for two reasons. First, because I\'m on the top of his teacup instead of onions.\' Seven flung down his brush, and had to ask any more if you\'d like it put.', 'This is the excerpt for the Lorem Ipsum Post', '<p>This is the body of the lorem ipsum post</p>', 'posts/post1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-08-25 08:35:41', '2020-08-26 04:07:59', 0, 5),
(2, 1, 3, 'My Sample Post', 'Little Bill It was so much surprised, that for two reasons. First, because I\'m on the top of his teacup instead of onions.\' Seven flung down his brush, and had to ask any more if you\'d like it put.', 'This is the excerpt for the sample Post', '<p>This is the body for the sample post, which includes the body.</p>\r\n<h2>We can use all kinds of format!</h2>\r\n<p>And include a bunch of other stuff.</p>', 'posts/post2.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', 1, '2020-08-25 08:35:41', '2020-09-08 09:21:07', 0, 5),
(3, 1, 1, 'Latest Post', 'Little Bill It was so much surprised, that for two reasons. First, because I\'m on the top of his teacup instead of onions.\' Seven flung down his brush, and had to ask any more if you\'d like it put.', 'This is the excerpt for the latest post', '<p>This is the body for the latest post</p>', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-08-25 08:35:41', '2020-08-26 04:08:50', 0, 5),
(4, 1, 1, 'Yarr Post', 'Little Bill It was so much surprised, that for two reasons. First, because I\'m on the top of his teacup instead of onions.\' Seven flung down his brush, and had to ask any more if you\'d like it put.', 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\r\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\r\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', 1, '2020-08-25 08:35:41', '2020-08-26 08:52:32', 0, 5),
(20, 1, 3, 'Mrs.', 'They had not long to doubt, for the moment they saw her, they hurried back to the Duchess: \'what a clear way you can;--but I must be shutting up like a mouse, That he met in the chimney close above.', 'Autem quia quo cumque. Tempora doloribus facilis consequatur rerum numquam totam. Accusamus sit non exercitationem.', 'CURTSEYING as you\'re falling through the little dears came jumping merrily along hand in hand, in couples: they were getting so thin--and the twinkling of the birds and animals that had made out.', 'https://lorempixel.com/1280/850/?96207', 'miss', 'Enim praesentium voluptas et laboriosam. Delectus natus voluptas voluptas aliquam iste. Aperiam ullam illum voluptatem adipisci sit eos. Illo ut quia ut perferendis numquam consectetur ea quia.', 'aut exercitationem ipsam voluptatem cum', 'PUBLISHED', 0, '2020-09-05 08:49:43', '2020-08-12 16:25:05', 0, 5),
(21, 1, 2, 'Mr.', 'Alice. \'Come on, then!\' roared the Queen, \'Really, my dear, YOU must cross-examine the next verse.\' \'But about his toes?\' the Mock Turtle at last, more calmly, though still sobbing a little shriek.', 'Quisquam animi cum quis repellat atque alias dolore. Autem ipsam commodi veritatis illum nesciunt molestiae. Est ut provident atque ut nobis voluptas suscipit. Eius repellendus ipsam eum aut.', 'The only things in the other. \'I beg your pardon!\' cried Alice again, in a minute, while Alice thought over all the jelly-fish out of sight. Alice remained looking thoughtfully at the Mouse\'s tail.', 'https://lorempixel.com/1280/850/?97632', 'prof', 'Aliquam explicabo illo aperiam labore repellat. Doloremque consequatur ea aut quia ea aperiam nostrum. Distinctio et nihil facere nostrum consequatur reiciendis.', 'sunt et eveniet dolore ut', 'PUBLISHED', 0, '2020-08-22 17:58:33', '2020-09-02 20:02:20', 0, 5),
(22, 1, 2, 'Dr.', 'He sent them word I had not long to doubt, for the garden!\' and she was a child,\' said the King; and the whole thing, and she drew herself up and said, \'That\'s right, Five! Always lay the blame on.', 'Voluptatem quia reprehenderit et nisi quas nemo voluptates. Qui eveniet repellendus sint et illo qui. Nisi sed inventore impedit.', '<p>The pepper when he pleases!\' CHORUS. \'Wow! wow! wow!\' While the Duchess asked, with another hedgehog, which seemed to be treated with respect. \'Cheshire Puss,\' she began, rather timidly, saying to.</p>', 'https://lorempixel.com/1280/850/?75439', 'ms', 'Enim sunt delectus laborum magni. Voluptatem amet enim est quod omnis rerum incidunt.', 'quibusdam qui voluptatem et cum', 'PUBLISHED', 1, '2020-08-26 17:33:28', '2020-09-08 09:23:42', 0, 5),
(26, 1, 1, 'Mouse to Alice for protection. \'You shan\'t be.', 'YOUR table,\' said Alice; \'but a grin without a cat! It\'s the most interesting, and perhaps as this before, never! And I declare it\'s too bad, that it was all very well as she went on. \'I do,\' Alice.', 'Quia dolorum et aut odio eius aliquid saepe. Deleniti neque dolore aut nemo in dolor. Illo quis distinctio ea. Itaque quis quam magnam unde ut optio. Voluptatem ex et quia cupiditate rerum.', 'Alice joined the procession, wondering very much confused, \'I don\'t see,\' said the Gryphon, and the Queen till she was exactly the right house, because the Duchess replied, in a low voice, \'Your.', 'https://lorempixel.com/1280/850/?32731', 'mouse-to-alice-for-protection-you-shant-be', 'Ullam incidunt earum eos nostrum autem. Nihil dolore est aperiam sit est modi vel. Quia quo suscipit qui possimus molestiae aliquid. Consequatur quia reiciendis id ut aliquam officia.', 'illo iusto id aliquam omnis', 'PUBLISHED', 0, '2020-08-09 21:21:07', '2020-08-26 19:18:27', 0, 5),
(27, 1, 1, 'First, she tried her best to climb up one of.', 'Alice noticed, had powdered hair that WOULD always get into the court, without even looking round. \'I\'ll fetch the executioner ran wildly up and to wonder what CAN have happened to you? Tell us all.', 'Culpa tempore id esse doloremque vitae architecto. Magni vitae dolores culpa reiciendis voluptatem. Est maxime aut sed aut vel. Ut tempora animi id consequatur et.', 'Footman remarked, \'till tomorrow--\' At this the White Rabbit, with a sigh: \'he taught Laughing and Grief, they used to read fairy-tales, I fancied that kind of authority among them, called out, \'Sit.', 'https://lorempixel.com/1280/850/?93108', 'first-she-tried-her-best-to-climb-up-one-of', 'Aut sed molestiae sed aut doloremque provident fugit. Possimus earum dolor iure amet qui natus consectetur.', 'non quaerat veritatis autem quaerat', 'PUBLISHED', 0, '2020-08-21 19:32:21', '2020-08-28 07:25:46', 0, 5),
(28, 1, 2, 'Duchess, \'chop off her unfortunate guests to.', 'Mock Turtle went on eagerly: \'There is such a very little use, as it turned round and get ready to make herself useful, and looking anxiously round to see the Queen. \'Well, I should like to have.', 'Veritatis dolorem ea aut in. Laboriosam ut exercitationem facilis quod accusantium quibusdam.', 'I\'ve tried hedges,\' the Pigeon had finished. \'As if it had some kind of sob, \'I\'ve tried every way, and the two creatures, who had got its head impatiently, and walked a little of it?\' said the.', 'https://lorempixel.com/1280/850/?66577', 'duchess-chop-off-her-unfortunate-guests-to', 'Dolore quia accusamus amet repellendus nihil dicta dicta. Aspernatur est accusamus in dolorem odit deserunt aut. Ut sit itaque eos corrupti. Doloremque veniam eos eum.', 'sapiente vero magnam omnis enim', 'PUBLISHED', 0, '2020-08-30 07:53:47', '2020-08-21 15:38:43', 0, 5),
(29, 1, 1, 'Pray, what is the same when I got up and walking.', 'Alice laughed so much contradicted in her own child-life, and the moon, and memory, and muchness--you know you say pig, or fig?\' said the Lory positively refused to tell its age, there was silence.', 'Atque ea temporibus vel quasi autem nemo. Laudantium quia vel aut qui eos. Laboriosam aperiam et saepe ducimus nam voluptas adipisci. Qui iste nihil sint repellendus voluptatibus.', 'Seven flung down his brush, and had to do next, when suddenly a footman because he taught us,\' said the King: \'however, it may kiss my hand if it makes me grow smaller, I can creep under the door.', 'https://lorempixel.com/1280/850/?16119', 'pray-what-is-the-same-when-i-got-up-and-walking', 'Et laboriosam assumenda vel eos id ut optio libero. Ea rem voluptas aut molestias et incidunt dolore. Delectus accusantium voluptate et facere hic id et.', 'voluptates nihil dolore fugit rerum', 'PUBLISHED', 0, '2020-08-29 05:20:05', '2020-09-06 06:30:34', 0, 5),
(30, 1, 1, 'VIII. The Queen\'s argument was, that anything.', 'Little Bill It was so much surprised, that for two reasons. First, because I\'m on the top of his teacup instead of onions.\' Seven flung down his brush, and had to ask any more if you\'d like it put.', 'Error voluptas minima sed deserunt aut. Iusto enim sed consectetur optio voluptas maxime rerum.', 'It did so indeed, and much sooner than she had made her draw back in a great deal to ME,\' said Alice as she spoke; \'either you or your head must be the best cat in the common way. So she sat still.', 'https://lorempixel.com/1280/850/?51212', 'viii-the-queens-argument-was-that-anything', 'Voluptatem autem labore delectus velit illum. Neque quia et adipisci et placeat. Eius est id sit eius nostrum quisquam occaecati. Eaque nemo quas ut mollitia harum.', 'ex consequatur consequatur et in', 'PUBLISHED', 0, '2020-09-06 12:02:26', '2020-08-10 05:02:03', 0, 5),
(31, 1, 3, 'She had already heard her voice sounded hoarse.', 'And it\'ll fetch things when you have just been reading about; and when she caught it, and very nearly in the wood,\' continued the King. \'Then it ought to be no doubt that it seemed quite natural).', 'Occaecati sint voluptas voluptate vero dolorem ea dolor. Consequatur consequatur nobis est tenetur fuga natus quae. Delectus accusantium tenetur molestias et. Maiores dolor beatae est nihil.', 'SHE, of course,\' he said to herself \'It\'s the oldest rule in the beautiful garden, among the bright eager eyes were nearly out of this remark, and thought it must be off, and found herself falling.', 'https://lorempixel.com/1280/850/?95676', 'she-had-already-heard-her-voice-sounded-hoarse', 'Non aperiam ullam consequatur facere omnis aspernatur dolor. Tenetur voluptatem iste officia in illo. Enim quisquam ut repellendus magni ad.', 'maiores sint ea consequatur quaerat', 'PUBLISHED', 0, '2020-08-24 17:38:45', '2020-08-13 13:09:59', 0, 5),
(32, 1, 1, 'Either the well was very fond of pretending to.', 'Mock Turtle with a T!\' said the Cat. \'Do you take me for his housemaid,\' she said this, she was holding, and she heard a little while, however, she again heard a little pattering of footsteps in the.', 'Qui blanditiis voluptatem temporibus sed illo. Ad est officia perferendis earum cupiditate quidem.', 'I have to beat time when I sleep\" is the same thing as \"I eat what I was a large flower-pot that stood near. The three soldiers wandered about for some minutes. The Caterpillar and Alice looked up.', 'https://lorempixel.com/1280/850/?31796', 'either-the-well-was-very-fond-of-pretending-to', 'Eos tempora adipisci iure minus est cupiditate. Aspernatur unde dicta reiciendis sit quas ab nihil. Repellat omnis ab dolorem qui delectus sunt commodi.', 'praesentium quos similique aperiam fuga', 'PUBLISHED', 0, '2020-08-16 10:04:15', '2020-08-15 10:05:00', 0, 5),
(33, 1, 3, 'Bill,\' thought Alice,) \'Well, I never understood.', 'I can kick a little!\' She drew her foot slipped, and in another moment, splash! she was playing against herself, for she was small enough to look for her, and said, \'That\'s right, Five! Always lay.', 'Nemo nemo aut autem quia. Molestiae minima impedit doloremque omnis. Beatae non voluptates et ad voluptas sed iure.', 'Gryphon. \'How the creatures order one about, and make THEIR eyes bright and eager with many a strange tale, perhaps even with the clock. For instance, suppose it doesn\'t matter a bit,\' she thought.', 'https://lorempixel.com/1280/850/?18432', 'bill-thought-alice-well-i-never-understood', 'Placeat possimus sit voluptas libero animi. Et voluptas earum a mollitia.', 'quia consequatur voluptatem tempore officia', 'PUBLISHED', 0, '2020-08-20 21:27:36', '2020-08-13 21:04:46', 0, 5),
(34, 1, 2, 'The first witness was the Hatter. \'It isn\'t.', 'I think it was,\' said the Gryphon: \'I went to work at once set to work nibbling at the jury-box, or they would go, and making faces at him as he shook both his shoes on. \'--and just take his head.', 'Ut minima odit sint. Consequatur placeat beatae sapiente optio dolorum neque et. Ut expedita voluptatem fugiat enim ut animi.', 'France-- Then turn not pale, beloved snail, but come and join the dance. Would not, could not taste theirs, and the poor animal\'s feelings. \'I quite agree with you,\' said the King, with an M, such.', 'https://lorempixel.com/1280/850/?77705', 'the-first-witness-was-the-hatter-it-isnt', 'Impedit deserunt provident consequatur et. Ut excepturi possimus odit quis aliquam quaerat aliquam veritatis. Distinctio veritatis rerum minus suscipit. Officia qui quia veniam at eos nihil eum.', 'illum eum odit soluta molestias', 'PUBLISHED', 0, '2020-08-23 20:08:46', '2020-08-31 16:03:36', 0, 5),
(35, 1, 1, 'Mock Turtle to sing this:-- \'Beautiful Soup, so.', 'Alice. The King and the blades of grass, but she heard her voice sounded hoarse and strange, and the fan, and skurried away into the sky all the players, except the Lizard, who seemed to be found.', 'Soluta neque et dolores animi necessitatibus. Non assumenda dolore et quod neque et. Et dolorum qui eaque quo odio optio odio. Vel accusantium et a autem. Exercitationem molestias vitae repellat et.', 'Alice. \'Oh, don\'t bother ME,\' said Alice indignantly, and she tried the effect of lying down with one of the Nile On every golden scale! \'How cheerfully he seems to be a footman in livery came.', 'https://lorempixel.com/1280/850/?32520', 'mock-turtle-to-sing-this-beautiful-soup-so', 'Aperiam et tempora asperiores eaque. Autem rem quae velit rerum iusto consectetur. Id ea in et tenetur. Nulla eaque et dolor eveniet.', 'enim maiores reiciendis eligendi cumque', 'PUBLISHED', 0, '2020-08-21 19:11:43', '2020-09-07 02:58:43', 0, 5),
(36, 1, 2, 'Christmas.\' And she began again: \'Ou est ma.', 'Forty-two. ALL PERSONS MORE THAN A MILE HIGH TO LEAVE THE COURT.\' Everybody looked at the Footman\'s head: it just missed her. Alice caught the baby joined):-- \'Wow! wow! wow!\' \'Here! you may SIT.', 'Quibusdam id omnis eos reprehenderit omnis. In sequi tempore suscipit dolorum magnam totam. Voluptatem numquam et illum doloremque iure nulla error qui. Voluptate tempora et hic.', 'Cat in a sorrowful tone; \'at least there\'s no harm in trying.\' So she sat on, with closed eyes, and feebly stretching out one paw, trying to put down yet, before the officer could get to the.', 'https://lorempixel.com/1280/850/?36852', 'christmas-and-she-began-again-ou-est-ma', 'Dolores excepturi quas quibusdam a quo nemo accusamus. Voluptatibus libero aperiam ut rerum ratione nostrum pariatur.', 'ex sit qui perspiciatis autem', 'PUBLISHED', 0, '2020-08-22 07:57:22', '2020-08-26 13:30:31', 0, 5),
(37, 1, 1, 'The twelve jurors were all ornamented with.', 'Queen in front of them, and the great hall, with the bread-and-butter getting so thin--and the twinkling of the other arm curled round her at the March Hare said--\' \'I didn\'t!\' the March Hare. \'I.', 'Id nemo commodi quia illum. Sint eligendi sequi ipsum corrupti. Et dolore blanditiis necessitatibus provident necessitatibus. Dolorem repellat eaque tempora atque.', 'Turtle--we used to queer things happening. While she was surprised to find it out, we should all have our heads cut off, you know. So you see, Alice had no idea what a Gryphon is, look at the.', 'https://lorempixel.com/1280/850/?49373', 'the-twelve-jurors-were-all-ornamented-with', 'Sapiente sunt inventore ducimus adipisci. Dolorem cum quia quod itaque nesciunt accusamus repudiandae. Voluptatem vero cumque sunt nulla. Aliquam sunt autem blanditiis qui placeat eos.', 'recusandae rem fugit autem est', 'PUBLISHED', 0, '2020-08-09 21:02:02', '2020-09-04 13:15:21', 0, 5),
(38, 1, 3, 'Between yourself and me.\' \'That\'s the first.', 'Mock Turtle sighed deeply, and began, in a low voice, \'Your Majesty must cross-examine THIS witness.\' \'Well, if I only wish people knew that: then they wouldn\'t be so easily offended, you know!\' The.', 'Doloremque neque molestias rerum non earum. Illum nesciunt itaque quasi illo nesciunt quam rerum. Fuga tempore voluptatem in accusantium. Quia distinctio odit voluptas.', 'All this time it all seemed quite dull and stupid for life to go on with the Queen shouted at the other side of WHAT?\' thought Alice to herself, as she ran; but the Mouse to tell me the truth: did.', 'https://lorempixel.com/1280/850/?83326', 'between-yourself-and-me-thats-the-first', 'Fugit qui aspernatur nostrum et. Nobis rerum perspiciatis et velit dicta nulla eaque.', 'expedita quia nemo voluptatem voluptatum', 'PUBLISHED', 0, '2020-08-18 20:46:37', '2020-09-03 09:26:42', 0, 5),
(39, 1, 2, 'Alice. \'Then you may SIT down,\' the King say in.', 'How the Owl had the door with his head!\' or \'Off with his nose, and broke off a bit of mushroom, and raised herself to some tea and bread-and-butter, and then treading on my tail. See how eagerly.', 'Non et porro numquam magni. Voluptas aut consectetur quia. Aut quaerat consequatur tempora assumenda repudiandae magnam. Eveniet ducimus odio autem pariatur cumque voluptatibus ipsam.', '<p>I am, sir,\' said Alice; \'I must be the use of repeating all that green stuff be?\' said Alice. \'Why, there they lay on the second time round, she found that her idea of the country is, you know.</p>', 'https://lorempixel.com/1280/850/?68163', 'alice-then-you-may-sit-down-the-king-say-in', 'Provident ea magni voluptas ab. Itaque eligendi voluptatem incidunt laborum. Ratione recusandae praesentium voluptas iste laboriosam occaecati.', 'corrupti harum aut et cumque', 'PUBLISHED', 0, '2020-08-28 20:52:50', '2020-09-08 09:23:29', 0, 2),
(40, 1, 3, 'Mock Turtle recovered his voice, and, with tears.', 'OURS they had settled down again in a more subdued tone, and added \'It isn\'t directed at all,\' said Alice: \'three inches is such a noise inside, no one else seemed inclined to say which), and they.', 'Et et qui a quas quia. Commodi provident nam eos culpa perferendis. Omnis officiis in vitae occaecati maxime quam nostrum. Ut quaerat ut neque tempora maxime qui qui.', 'I only knew the name of nearly everything there. \'That\'s the most interesting, and perhaps as this is May it won\'t be raving mad after all! I almost wish I hadn\'t drunk quite so much!\' Alas! it was.', 'https://lorempixel.com/1280/850/?12987', 'mock-turtle-recovered-his-voice-and-with-tears', 'Eius alias illo quisquam placeat ut quidem voluptatem deserunt. Nisi vitae quo ut libero reiciendis.', 'tempora ut aperiam et voluptas', 'PUBLISHED', 0, '2020-08-20 01:10:14', '2020-08-13 00:27:38', 0, 5),
(41, 1, 2, 'Dormouse indignantly. However, he consented to.', 'Nile On every golden scale! \'How cheerfully he seems to suit them!\' \'I haven\'t the slightest idea,\' said the King was the BEST butter, you know.\' It was, no doubt: only Alice did not dare to laugh.', 'Et eos repudiandae quo laborum vel vitae. Incidunt ullam sit voluptas corporis sit. Ad sapiente reiciendis harum vel.', 'I only wish people knew that: then they both cried. \'Wake up, Dormouse!\' And they pinched it on both sides at once. \'Give your evidence,\' the King said to herself; \'his eyes are so VERY much out of.', 'https://lorempixel.com/1280/850/?99416', 'dormouse-indignantly-however-he-consented-to', 'Ea id commodi vel. Deserunt possimus qui aut aperiam. Iure dignissimos et rerum laborum sed earum magnam maxime.', 'unde voluptas qui est ipsum', 'PUBLISHED', 0, '2020-08-15 12:27:16', '2020-08-11 08:55:19', 0, 5),
(42, 1, 1, 'Dormouse!\' And they pinched it on both sides of.', 'Fish-Footman was gone, and, by the soldiers, who of course you know about this business?\' the King sharply. \'Do you mean that you think you\'re changed, do you?\' \'I\'m afraid I can\'t remember,\' said.', 'Reprehenderit quas velit ut quae maiores. Eligendi quibusdam dolores repellendus temporibus. Voluptatum unde doloribus quo non rerum et.', '<p>Come on!\' So they began solemnly dancing round and round the court with a bound into the garden at once; but, alas for poor Alice! when she next peeped out the verses on his knee, and the constant.</p>', 'https://lorempixel.com/1280/850/?74803', 'dormouse-and-they-pinched-it-on-both-sides-of', 'Est exercitationem eos suscipit vel vel maiores dolorem. Facere illo aperiam vel magni quam. Numquam cupiditate ex et omnis reprehenderit. Atque doloribus omnis ratione dolorum vitae est.', 'est repudiandae ducimus voluptatem illo', 'PUBLISHED', 0, '2020-08-31 13:32:30', '2020-09-08 09:36:15', 0, 5),
(43, 1, 2, 'Alice opened the door and went on: \'--that.', 'Then it got down off the cake. * * * * * * * * * * * * * * * * * * * * * * CHAPTER II. The Pool of Tears \'Curiouser and curiouser!\' cried Alice hastily, afraid that she hardly knew what she was near.', 'Ratione non odio ea voluptas possimus. Quisquam vel quidem est. Sint earum ut atque earum. A totam voluptates voluptas distinctio odit neque non repellendus.', 'And he added in an encouraging tone. Alice looked all round her once more, while the Mock Turtle\'s Story \'You can\'t think how glad I am very tired of sitting by her sister kissed her, and said, \'So.', 'https://lorempixel.com/1280/850/?19818', 'alice-opened-the-door-and-went-on-that', 'Odio rerum magni asperiores neque cumque dolores excepturi. Aliquid quis perferendis deleniti id fuga fuga maxime. Asperiores aliquid vero minus harum dolorem.', 'iusto animi sint dignissimos quam', 'PUBLISHED', 0, '2020-09-03 17:35:35', '2020-08-15 21:34:40', 0, 5),
(44, 1, 1, 'I can say.\' This was quite pleased to find that.', 'She was a little recovered from the change: and Alice could only see her. She is such a wretched height to be.\' \'It is wrong from beginning to end,\' said the Dormouse said--\' the Hatter hurriedly.', 'Alias quis mollitia doloribus praesentium. Tenetur veniam voluptatibus repudiandae nesciunt nesciunt aut et. Dolores dicta atque aliquid eum dolores dignissimos. Quis quis recusandae et velit.', 'I beat him when he finds out who I am! But I\'d better take him his fan and gloves. \'How queer it seems,\' Alice said with some severity; \'it\'s very rude.\' The Hatter was the first figure,\' said the.', 'https://lorempixel.com/1280/850/?12931', 'i-can-say-this-was-quite-pleased-to-find-that', 'Modi cupiditate quas esse veritatis. Optio nobis placeat recusandae quo. Velit repellat totam vitae voluptatibus.', 'nobis aut minus laborum ipsam', 'PUBLISHED', 0, '2020-08-22 21:20:51', '2020-08-28 05:03:17', 0, 5),
(45, 1, 2, 'She got up very sulkily and crossed over to the.', 'THE KING AND QUEEN OF HEARTS. Alice was beginning to grow here,\' said the King, \'unless it was neither more nor less than a rat-hole: she knelt down and began whistling. \'Oh, there\'s no use their.', 'Cum iusto error cum sed iure blanditiis a animi. At accusamus velit voluptatem dicta dicta repudiandae et officia. Corrupti in animi sunt numquam quasi mollitia.', 'Canary called out to the door, and knocked. \'There\'s no such thing!\' Alice was only sobbing,\' she thought, and looked at the stick, and tumbled head over heels in its sleep \'Twinkle, twinkle.', 'https://lorempixel.com/1280/850/?18218', 'she-got-up-very-sulkily-and-crossed-over-to-the', 'Omnis in ducimus harum aliquam inventore. Et doloremque ut earum ut. Magni dolorum beatae reiciendis non animi quam nisi blanditiis. Illo libero ea quaerat.', 'illo debitis doloribus quia odio', 'PUBLISHED', 0, '2020-09-05 13:08:24', '2020-08-17 02:55:16', 0, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `recipes`
--

CREATE TABLE `recipes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categorie_recipe_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(75) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `show_index` tinyint(1) NOT NULL,
  `eye` int(11) DEFAULT 0,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_desc` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `order` int(11),
  `trending` tinyint(1) DEFAULT NULL,
  `featured` tinyint(1) DEFAULT NULL,
  `show_home` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `recipes`
--

INSERT INTO `recipes` (`id`, `categorie_recipe_id`, `title`, `image`, `slug`, `content`, `status`, `show_index`, `eye`, `meta_title`, `meta_desc`, `created_at`, `updated_at`, `order`, `trending`, `featured`, `show_home`) VALUES
(3, 6, 'A Fruit Salad Dressing without Cream or Pudding', 'recipes\\September2020\\bVzSUX5hRXS2asGAp3xB.jpg', 'crem-pudding-1', 'A Fruit Salad Dressing without Cream or Pudding', 1, 0, 0, 'meta lorem', 'meta lorem', '2020-09-01 05:54:00', '2020-09-07 09:23:36', 1, 0, 0, 0),
(4, 7, 'Honey Lime Rainbow Fruit Salad', 'recipes\\September2020\\jVO21fKWjGnPe74zryHz.jpg', 'rainbow-fruit-salat-1', 'content lorem .....', 1, 0, 0, 'meta lorem', 'meta lorem', '2020-09-01 05:58:00', '2020-09-07 09:23:06', 1, 0, 0, 1),
(5, 7, 'Honey Lime Rainbow Fruit Salad', 'recipes\\September2020\\yGOs0rubYznKNe4CCaxl.jpg', 'rainbow-fruit-2', 'content lorem .....', 1, 0, 0, 'meta lorem', 'meta lorem', '2020-09-01 05:59:00', '2020-09-07 09:22:55', 1, 0, 0, 1),
(6, 6, 'Honey Lime Rainbow Fruit Salad', 'recipes\\September2020\\8atQZvN8ekWoHlDvL3m2.jpg', 'rainbow-fruit-3', 'content lorem .....', 1, 0, 0, 'meta lorem', 'meta lorem', '2020-09-01 06:00:00', '2020-09-01 08:26:49', 1, NULL, NULL, 0),
(7, 6, 'Honey Lime Rainbow Fruit Salad', 'recipes\\September2020\\GHPf8JvGCytcNnDIqxSO.jpg', 'crem-pudding', 'content lorem .....', 1, 0, 0, 'meta lorem', 'meta lorem', '2020-09-01 06:01:00', '2020-09-01 08:27:04', 1, NULL, NULL, 0),
(8, 7, 'Honey Lime Rainbow Fruit Salad', 'recipes\\September2020\\G25GM0t9GpYyKsJzbw8f.jpg', 'fruit-and-salad', 'content lorem .....', 1, 0, 0, 'meta lorem', 'meta lorem', '2020-09-01 06:01:00', '2020-09-07 09:23:46', 1, 0, 0, 1),
(9, 6, 'chocolate cake', 'recipes\\September2020\\AQP2cMb4dxSYmLXa80nT.jpg', 'crem-pudding-2', 'content lorem .....', 1, 0, 0, 'test content title meta title', 'meta lorem', '2020-09-01 06:02:00', '2020-09-03 10:47:20', 1, 0, 1, 0),
(10, 6, 'Fruits and Salad', 'recipes\\September2020\\1tni9zY8WVJ52IBPQTA7.jpg', 'fruit-salat', 'How To Make Bowl  Of Cereal With sliced Fruits And Spoon', 1, 1, 1, 'meta lorem', 'meta lorem', '2020-09-01 08:01:00', '2020-09-10 05:40:37', 2, NULL, NULL, 0),
(11, 6, 'Fruits and Salad', 'recipes\\September2020\\UUimyE5f0KebDRPUqBEu.jpg', 'rainbow-fruit-salat', 'How To Make Bowl  Of Cereal With sliced Fruits And Spoon', 1, 1, 5, 'meta lorem', 'meta lorem', '2020-09-01 08:02:00', '2020-09-08 10:54:08', 1, 0, 1, 0),
(12, 6, 'A Fruit Salad Dressing without Cream or Pudding', 'recipes\\September2020\\YeLlNBf3wngxbTF5DnY3.jpg', 'crem-3', 'How To Make Bowl  Of Cereal With sliced Fruits And Spoon', 1, 1, 8, 'meta lorem', 'meta lorem', '2020-09-01 08:03:00', '2020-09-08 10:58:43', 3, NULL, NULL, 0),
(13, 9, 'How To Make Bowl  Of Cereal With sliced Fruits And Spoon', 'recipes\\September2020\\rsekoJYnrjExOOtf8HTJ.jpg', 'slug-spoon', 'content recipes', 1, 1, 1, 'meta title', 'meta desc', '2020-09-02 06:20:00', '2020-09-14 06:36:55', 4, NULL, NULL, 0),
(14, 8, 'Garlic Butter Chicken Bites (20-Minute Recipe!)', 'recipes\\September2020\\INjDgyDOjyhPKWB5zcya.jpg', 'slugg', 'content recipes', 1, 0, 3, 'meta title', 'meta desc', '2020-09-02 10:48:00', '2020-09-07 11:42:06', 1, 1, NULL, 0),
(15, 6, 'Garlic Butter Chicken Bites (20-Minute Recipe!)', 'recipes\\September2020\\jrKbOVUR7vXMdCmoQIGw.jpg', 'asd', 'content recipes', 1, 0, 6, 'meta title', 'meta desc', '2020-09-02 10:49:00', '2020-09-07 10:05:29', NULL, 1, NULL, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2020-08-25 08:35:02', '2020-08-25 08:35:02'),
(2, 'user', 'Normal User', '2020-08-25 08:35:02', '2020-08-25 08:35:02');

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Olima - Modern Personal Blog HTML Template', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', 'settings\\August2020\\tE9K5r8gq7W7e0rYm74d.png', '', 'image', 3, 'Site'),
(11, 'about.hero_title', 'hero title', 'About company', NULL, 'text', 6, 'about'),
(12, 'about.images1', 'images1', 'settings\\September2020\\ym1xdkBzO2iMdScP5mQV.jpg', NULL, 'image', 7, 'about'),
(13, 'footer.desc', 'desc', 'Proin ac quam et lectus vestibulum blandit. Nunc maximus nibh at placerat tincidunt. Nam sem lacus, ornare non ante sed, ultricies fringilla massa. Ut congue', NULL, 'text', 8, 'footer'),
(14, 'footer.Copywriting', 'Copywriting text', '© 2020 TastyTreats all rights reserved.', NULL, 'text', 9, 'footer'),
(15, 'home.recipes_title', 'Recipes Title', 'Latest Recipes', NULL, 'text', 10, 'Home'),
(16, 'home.videos_title', 'Videos Title', 'My Top Videos', NULL, 'text', 11, 'Home'),
(17, 'home.vegetarian_title', 'Vegetarian Title', 'Vegetarian', NULL, 'text', 12, 'Home'),
(18, 'home.trending_posts_title', 'Trending Posts Title', 'Trending Posts', NULL, 'text', 14, 'Home'),
(19, 'home.desc_veg', 'desc veg', 'Etiam convallis elementum sapien, a aliquam turpis aliquam vitae. Praesent sollicitudin felis vel mi facilisis posuere.', NULL, 'text', 13, 'Home'),
(20, 'footer.slider_title', 'Slider title', 'Follow Me', NULL, 'text', 15, 'footer'),
(21, 'footer.link_title', 'link title', '@Instagram', NULL, 'text', 16, 'footer'),
(22, 'footer.slider_link', 'slider link', 'https://www.google.com/', NULL, 'text', 17, 'footer');

-- --------------------------------------------------------

--
-- Структура таблицы `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` tinyint(4) DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `order` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lastname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `message`, `avatar`, `rating`, `status`, `order`, `created_at`, `updated_at`, `lastname`, `email`, `subject`) VALUES
(1, 'Vladislav', 'lorem 5000000', 'Testimonials\\September2020\\UZV2RXHomy00PxbTn134.jpg', 5, 1, NULL, '2020-09-07 11:25:00', '2020-09-07 11:31:37', 'Tomascuc', 'testVlad@mail.ru', 'tralalla'),
(2, 'мдфв', 'asdasdasd', 'Testimonials\\September2020\\XeQjVbbIoOsgUDJKUcWn.jpg', 2, 1, NULL, '2020-09-07 11:28:00', '2020-09-07 11:31:27', 'Tomascuc', 'testVlad@mail.ru', 'tralallassss');

-- --------------------------------------------------------

--
-- Структура таблицы `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2020-08-25 08:35:41', '2020-08-25 08:35:41'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2020-08-25 08:35:41', '2020-08-25 08:35:41'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2020-08-25 08:35:41', '2020-08-25 08:35:41'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2020-08-25 08:35:41', '2020-08-25 08:35:41'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2020-08-25 08:35:41', '2020-08-25 08:35:41'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2020-08-25 08:35:41', '2020-08-25 08:35:41'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2020-08-25 08:35:41', '2020-08-25 08:35:41'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2020-08-25 08:35:41', '2020-08-25 08:35:41'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2020-08-25 08:35:41', '2020-08-25 08:35:41'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2020-08-25 08:35:41', '2020-08-25 08:35:41'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2020-08-25 08:35:41', '2020-08-25 08:35:41'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2020-08-25 08:35:41', '2020-08-25 08:35:41'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2020-08-25 08:35:41', '2020-08-25 08:35:41'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2020-08-25 08:35:41', '2020-08-25 08:35:41'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2020-08-25 08:35:41', '2020-08-25 08:35:41'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2020-08-25 08:35:41', '2020-08-25 08:35:41'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2020-08-25 08:35:41', '2020-08-25 08:35:41'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2020-08-25 08:35:41', '2020-08-25 08:35:41'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2020-08-25 08:35:41', '2020-08-25 08:35:41'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2020-08-25 08:35:41', '2020-08-25 08:35:41'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2020-08-25 08:35:41', '2020-08-25 08:35:41'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2020-08-25 08:35:41', '2020-08-25 08:35:41'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2020-08-25 08:35:41', '2020-08-25 08:35:41'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2020-08-25 08:35:41', '2020-08-25 08:35:41'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2020-08-25 08:35:41', '2020-08-25 08:35:41'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2020-08-25 08:35:41', '2020-08-25 08:35:41'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2020-08-25 08:35:41', '2020-08-25 08:35:41'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2020-08-25 08:35:41', '2020-08-25 08:35:41'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2020-08-25 08:35:41', '2020-08-25 08:35:41'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2020-08-25 08:35:41', '2020-08-25 08:35:41');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users\\August2020\\SCZP5L85ksXvFxqOPA46.png', NULL, '$2y$10$R/1pWb/hHVxN2X6tI3slVe0.yPHz7Hfc9WDgaqxS3eMCAZ/Ne/EtS', 's6cvu7TErhJvA2QjucXwnTM4ypCNA775lDmJBwxGFaorGH197XuYryKg2zEr', '{\"locale\":\"en\"}', '2020-08-25 08:35:41', '2020-08-26 09:49:14');

-- --------------------------------------------------------

--
-- Структура таблицы `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(75) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `order` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `videos`
--

INSERT INTO `videos` (`id`, `title`, `image`, `url`, `status`, `order`, `created_at`, `updated_at`) VALUES
(1, 'Honey Lime Rainbow Fruit Salad', 'videos\\September2020\\l5teeuRT8t1EpVkJOVoE.jpg', 'https://www.youtube.com/watch?v=8PNTZEv-e54', 1, NULL, '2020-09-07 07:23:26', '2020-09-07 07:23:26'),
(2, 'Honey Lime Rainbow Fruit Salad', 'videos\\September2020\\39r3n7x9PMLQKXlnnbP6.jpg', 'https://www.youtube.com/watch?v=8PNTZEv-e54', 1, NULL, '2020-09-07 07:23:51', '2020-09-07 07:23:51'),
(3, 'Blog Grid View With Sidebar', 'videos\\September2020\\QoLhJze9f5hPRsNeFXC6.jpg', 'https://www.youtube.com/watch?v=8PNTZEv-e54', 1, NULL, '2020-09-07 07:24:05', '2020-09-07 07:24:05'),
(4, 'Honey Lime Rainbow Fruit Salad', 'videos\\September2020\\xP315KQFLxvvozMt7WTT.jpg', 'https://www.youtube.com/watch?v=8PNTZEv-e54', 1, NULL, '2020-09-07 07:24:16', '2020-09-07 07:24:16'),
(5, 'Honey Lime Rainbow Fruit Salad', 'videos\\September2020\\9iHDpaXPLfR8CkYnVST2.jpg', 'https://www.youtube.com/watch?v=8PNTZEv-e54', 1, NULL, '2020-09-07 07:24:27', '2020-09-07 07:24:27'),
(7, 'Honey Lime Rainbow Fruit Salad', 'videos\\September2020\\8VjAs4XJx9rQnJI9E8oX.jpg', 'https://www.youtube.com/watch?v=8PNTZEv-e54', 1, NULL, '2020-09-07 07:33:06', '2020-09-07 07:33:06');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Индексы таблицы `category_posts`
--
ALTER TABLE `category_posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category_recipes`
--
ALTER TABLE `category_recipes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Индексы таблицы `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `footer_images`
--
ALTER TABLE `footer_images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Индексы таблицы `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Индексы таблицы `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Индексы таблицы `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `recipes_slug_uindex` (`slug`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Индексы таблицы `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Индексы таблицы `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Индексы таблицы `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- Индексы таблицы `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `category_posts`
--
ALTER TABLE `category_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `category_recipes`
--
ALTER TABLE `category_recipes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT для таблицы `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `footer_images`
--
ALTER TABLE `footer_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT для таблицы `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Ограничения внешнего ключа таблицы `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
