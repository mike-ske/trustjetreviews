-- -------------------------------------------------------------
-- TablePlus 3.6.2(322)
--
-- https://tableplus.com/
--
-- Database: reviews
-- Generation Time: 2020-11-30 16:53:21.7760
-- -------------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `_lft` int unsigned NOT NULL DEFAULT '0',
  `_rgt` int unsigned NOT NULL DEFAULT '0',
  `parent_id` int unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`),
  KEY `categories__lft__rgt_parent_id_index` (`_lft`,`_rgt`,`parent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `categorizables`;
CREATE TABLE `categorizables` (
  `category_id` int unsigned NOT NULL,
  `categorizable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorizable_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  UNIQUE KEY `categorizables_ids_type_unique` (`category_id`,`categorizable_id`,`categorizable_type`),
  KEY `categorizables_categorizable_type_categorizable_id_index` (`categorizable_type`,`categorizable_id`),
  CONSTRAINT `categorizables_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `options_table`;
CREATE TABLE `options_table` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `option_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_value` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `options_table_option_name_unique` (`option_name`),
  KEY `options_table_option_name_index` (`option_name`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `page_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `page_slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `page_content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE `reviews` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `review_item_id` int unsigned NOT NULL,
  `user_id` int unsigned DEFAULT NULL,
  `rating` tinyint unsigned NOT NULL,
  `review_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `review_content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_reply` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `publish` enum('Yes','No') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No',
  `is_verified` enum('No','Yes') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No',
  PRIMARY KEY (`id`),
  KEY `reviews_review_item_id_index` (`review_item_id`),
  KEY `reviews_review_item_id_rating_index` (`review_item_id`,`rating`),
  KEY `reviews_review_item_id_user_id_index` (`review_item_id`,`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `sites`;
CREATE TABLE `sites` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `claimedBy` int DEFAULT NULL,
  `submittedBy` int DEFAULT NULL,
  `lati` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longi` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metadata` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `publish` enum('Yes','No') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No',
  `extra_info` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sites_url_unique` (`url`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `subscriptions`;
CREATE TABLE `subscriptions` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `plan` enum('monthly','6months','yearly') NOT NULL,
  `site_id` int unsigned NOT NULL,
  `user_id` int unsigned NOT NULL,
  `subscription_id` varchar(255) NOT NULL,
  `gateway` varchar(255) NOT NULL,
  `subscription_date` int unsigned NOT NULL,
  `subscription_status` enum('Active','Canceled') NOT NULL,
  `subscription_price` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `profilePic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `verify`;
CREATE TABLE `verify` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `plan` enum('monthly','6months','yearly') NOT NULL,
  `site_id` int NOT NULL,
  `hash` varchar(255) NOT NULL,
  `verified` enum('No','Yes') NOT NULL DEFAULT 'No',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `votes`;
CREATE TABLE `votes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ip` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `review_id` int NOT NULL,
  `vote` enum('Up','Down') COLLATE utf8mb4_general_ci DEFAULT 'Up',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `categories` (`id`, `slug`, `name`, `description`, `_lft`, `_rgt`, `parent_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
('8', 'electronics-and-telecom', '{\"en\":\"Electronics and telecom\\n\"}', NULL, '13', '14', NULL, '2019-06-18 16:47:42', '2019-06-18 16:47:42', NULL),
('9', 'entertainment-and-media', '{\"en\":\"Entertainment and media\\n\"}', NULL, '15', '16', NULL, '2019-06-18 16:47:42', '2019-06-18 16:47:42', NULL),
('10', 'financial-services-and-products', '{\"en\":\"Financial services and products\"}', NULL, '17', '18', NULL, '2019-06-18 16:47:42', '2019-06-18 16:47:42', NULL),
('11', 'food-retail-and-service', '{\"en\":\"Food retail and service\"}', NULL, '19', '20', NULL, '2019-06-18 16:47:42', '2019-06-18 16:47:42', NULL),
('12', 'gifts-and-flowers', '{\"en\":\"Gifts and flowers\"}', NULL, '21', '22', NULL, '2019-06-18 16:47:42', '2019-06-18 16:47:42', NULL),
('13', 'health-and-personal-care', '{\"en\":\"Health and Personal Care\"}', NULL, '23', '24', NULL, '2019-06-18 16:47:42', '2020-11-30 13:45:46', NULL),
('14', 'home-and-garden', '{\"en\":\"\\tHome and garden\"}', NULL, '25', '26', NULL, '2019-06-18 16:47:42', '2019-06-18 16:47:42', NULL),
('15', 'nonprofit', '{\"en\":\"Nonprofit\"}', NULL, '27', '28', NULL, '2019-06-18 16:49:17', '2019-06-18 16:49:17', NULL),
('16', 'pets-and-animals', '{\"en\":\"Pets and animals\"}', NULL, '29', '30', NULL, '2019-06-18 16:49:17', '2019-06-18 16:49:17', NULL),
('17', 'others', '{\"en\":\"Others\"}', NULL, '31', '32', NULL, '2019-06-18 16:49:17', '2019-06-18 16:49:17', NULL),
('18', 'sports-and-outdoors', '{\"en\":\"Sports and outdoors\"}', NULL, '33', '34', NULL, '2019-06-18 16:49:17', '2019-06-18 16:49:17', NULL),
('21', 'cars', '{\"en\":\"Cars\"}', NULL, '39', '40', NULL, '2019-06-18 16:49:18', '2019-06-18 16:49:18', NULL);

INSERT INTO `options_table` (`id`, `option_name`, `option_value`) VALUES
('1', 'adminEmail', 'admin@phptrustedreviews.com'),
('2', 'monthlyPrice', '9'),
('3', '6monthsPrice', '49'),
('4', 'yearlyPrice', '99'),
('5', 'currency_symbol', '$'),
('6', 'currency_code', 'USD'),
('7', 'paypalEnable', 'Yes'),
('8', 'stripeEnable', 'Yes'),
('9', 'PAYPAL_CLIENT_ID', ''),
('10', 'PAYPAL_CLIENT_SECRET', ''),
('11', 'STRIPE_PUBLISHABLE_KEY', NULL),
('12', 'STRIPE_SECRET_KEY', NULL),
('13', 'seo_title', 'PHP Trusted Reviews'),
('14', 'seo_desc', 'PHP Trusted Reviews description meta tag'),
('15', 'seo_keys', 'php trusted reviews, reviews'),
('16', 'extra_js', NULL),
('17', 'site_title', 'PHP Trusted Reviews'),
('18', 'site_description', '#1 Community Trusted Reviews'),
('19', 'site_belowDescription', 'From People Like You'),
('20', 'paypal_email', 'you@paypal.me'),
('21', 'mapsApiKey', 'no-api-key'),
('22', 'sideAd', ''),
('23', 'homeAd', NULL),
('24', 'catAd', NULL),
('26', 'enableSiteTitle', 'Yes'),
('29', 'upgraded-v1.1', 'yes'),
('30', 'enableNotification', 'Yes'),
('31', 'notificationText', 'Configure notification text in admin->bottom notification page'),
('32', 'notificationBgColor', NULL),
('33', 'notificationFontColor', NULL),
('34', 'notificationLinkColor', NULL),
('35', 'pagePeekerAPI', 'test'),
('36', 'generalBG_3', '#573c3c'),
('38', 'testiGB_3', '#878686'),
('39', 'generalFC_3', '#ffffff'),
('40', 'testiFC_3', '#ffffff'),
('41', 'urlFC_3', '#a11d4c');

INSERT INTO `pages` (`id`, `page_title`, `page_slug`, `page_content`, `created_at`, `updated_at`) VALUES
('1', 'Terms of Service', 'tos', '<p>Phasellus blandit leo ut odio. Suspendisse nisl elit, rhoncus eget, elementum ac, condimentum eget, diam. Fusce a quam. Donec posuere vulputate arcu. Nullam tincidunt adipiscing enim.<br><br>Sed augue ipsum, egestas nec, vestibulum et, malesuada adipiscing, dui. Fusce risus nisl, viverra et, tempor et, pretium in, sapien. Maecenas vestibulum mollis diam. Maecenas ullamcorper, dui et placerat feugiat, eros pede varius nisi, condimentum viverra felis nunc et lorem. Quisque malesuada placerat nisl.<br></p>', '2016-08-21 19:03:03', '2019-06-28 17:33:27'),
('3', 'Privacy Policy', 'privacy-policy', '<p>Aliquam eu nunc. Nullam vel sem. Curabitur at lacus ac velit ornare lobortis. Phasellus volutpat, metus eget egestas mollis, lacus lacus blandit dui, id egestas quam mauris ut lacus.<br><br>Sed hendrerit. Proin faucibus arcu quis ante. Cras id dui. Sed fringilla mauris sit amet nibh.<br></p>', '2016-08-28 08:46:04', '2016-08-28 08:46:04');



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;