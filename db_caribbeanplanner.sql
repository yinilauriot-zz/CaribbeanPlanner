-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 08 Mars 2016 à 10:10
-- Version du serveur :  10.1.9-MariaDB
-- Version de PHP :  5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db_caribbeanplanner`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `event_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `content_1` text COLLATE utf8_unicode_ci NOT NULL,
  `content_2` text COLLATE utf8_unicode_ci NOT NULL,
  `content_3` text COLLATE utf8_unicode_ci NOT NULL,
  `content_4` text COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('published','unpublished') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `event_id`, `title`, `content_1`, `content_2`, `content_3`, `content_4`, `status`, `created_at`, `updated_at`) VALUES
(1, 7, 'Emma & Kevin', '', '', '', '', 'published', '2016-03-03 11:16:46', '2016-03-06 15:02:53'),
(2, 6, 'Sandrine & Frédéric', '', '', '', '', 'published', '2016-03-03 11:17:03', '2016-03-03 11:17:03'),
(3, 5, 'Anna & Laurent', '', '', '', '', 'published', '2016-03-03 11:17:21', '2016-03-03 11:17:21'),
(4, 4, 'Caroline & Florent', '', '', '', '', 'published', '2016-03-03 11:17:40', '2016-03-03 11:17:40'),
(5, 3, 'Sarah & Harry', '', '', '', '', 'published', '2016-03-03 11:17:52', '2016-03-03 11:17:52'),
(6, 2, 'Laura & Alexandre', '', '', '', '', 'published', '2016-03-03 11:18:05', '2016-03-03 11:18:05'),
(7, 1, 'Mariage à La Plage', 'Un mariage pieds dans le sable sur une île de Marie Galante le 28 mai 2013', 'Nous avons décidé de nous marier en Guadeloupe. \r\nJ’y ai vécu et j’ai toujours mes amis là-bas.\r\nChristina Pochot notre wedding planner \r\n« Caribbean Planner » trouvée sur internet  s’est donc chargée de l’organisation de la cérémonie et de la décoration du lieu en fonction de nos attentes et du choix des prestataires comme la coiffeuse, maquilleuse fleuriste.\r\nNous avons également choisi ensemble la plage où se déroulerait la cérémonie.\r\n\r\nLe choix de mon bouquet de fleurs a dirigé la décoration autour de la pivoine qui était en plus de saison : quelle chance!', 'Le lendemain de notre arrivée à Pointe à Pitre, les rendez vous étaient prévus pour organiser le grand jour ! Car nous communiquions beaucoup par email les mois passés. Le jour j était déjà bien pris en charge par Chrisitna du coté de la cérémonie et par Thierry le chargé de relation partenaire.\r\n\r\nLe plus beau moment était la cérémonie du sable très émouvant mélanger le sable pour l’infini pour un amour éternel…. c’était si fort.', 'Le conseil serait d’être bien organisé, de savoir déléguer et d’avoir confiances en ses témoins et sa wedding planner  pour se libérer de certaines tâches car les mariés s’oublient souvent ! \r\n\r\nPensez à vous et votre mari le jour j car c’est votre journée vous avez mis pour la plupart 1 an à penser à tout alors le jour J pensez à vous ! \r\n', 'published', '2016-03-03 11:19:14', '2016-03-06 11:14:21');

-- --------------------------------------------------------

--
-- Structure de la table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `bride_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bridegroom_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `postal_code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `customers`
--

INSERT INTO `customers` (`id`, `user_id`, `bride_name`, `bridegroom_name`, `address`, `postal_code`, `city`, `country`, `telephone`, `created_at`, `updated_at`) VALUES
(1, 2, 'Jessica', 'Olivier', '12 Rue Royal', '75001', 'Paris', 'France', '01 23 45 67 89', NULL, '2016-03-05 21:20:43'),
(2, 3, 'Laura DOUVAT', 'Alexandre BADLER', '20 rue Saint-Martin', '75003', 'Paris', 'France', '01 23 45 67 89', '2016-03-03 11:07:12', '2016-03-03 11:07:12'),
(3, 4, 'Sarah', 'Harry', '10 rue Marceau', '75015', 'Paris', 'France', '01 23 45 67 89', '2016-03-03 11:07:52', '2016-03-03 11:07:52'),
(4, 5, 'Caroline', 'Florent', '62 rue Charonne', '75011', 'Paris', 'France', '01 23 45 67 89', '2016-03-03 11:08:40', '2016-03-03 11:08:40'),
(5, 7, 'Anna', 'Laurent', '62 rue du louvre', '75001', 'Paris', 'France', '01 23 45 67 89', '2016-03-03 11:10:40', '2016-03-03 11:10:40'),
(6, 8, 'Sandrine', 'Frédéric', '80 boulevard voltaire', '75016', 'Paris', 'France', '01 23 45 67 89', '2016-03-03 11:11:29', '2016-03-03 11:11:29'),
(7, 9, 'Emma', 'Kevin', '12 Rue Saint-Augustin', '75008', 'Paris', 'France', '01 23 45 67 89', '2016-03-03 11:12:29', '2016-03-06 08:41:41');

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `event_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_date` date NOT NULL,
  `event_place` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('ongoing','done') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'ongoing',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `events`
--

INSERT INTO `events` (`id`, `customer_id`, `event_name`, `event_date`, `event_place`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mariage', '2016-05-07', 'Guadeloupe', 'ongoing', NULL, '2016-03-05 11:16:39'),
(2, 2, 'Mariage', '2016-06-25', 'Guadeloupe', 'ongoing', '2016-03-03 11:07:22', '2016-03-05 11:16:37'),
(3, 3, 'Mariage', '2016-05-14', 'Guadeloupe', 'ongoing', '2016-03-03 11:08:03', '2016-03-05 11:16:36'),
(4, 4, 'Mariage', '2016-07-16', 'Guadeloupe', 'ongoing', '2016-03-03 11:08:50', '2016-03-05 11:16:35'),
(5, 5, 'Mariage', '2016-05-28', 'Guadeloupe', 'ongoing', '2016-03-03 11:10:50', '2016-03-05 11:16:33'),
(6, 6, 'Mariage', '2016-09-10', 'Guadeloupe', 'ongoing', '2016-03-03 11:11:39', '2016-03-05 11:16:32'),
(7, 7, 'Mariage', '2016-08-14', 'Guadeloupe', 'ongoing', '2016-03-03 11:12:38', '2016-03-06 09:24:11');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_02_18_111240_create_customers_table', 1),
('2016_02_22_121727_create_events_table', 1),
('2016_03_03_112345_create_articles_table', 1),
('2016_03_03_112714_create_pictures_table', 1),
('2016_03_03_112813_create_testimonials_table', 1),
('2016_03_03_112847_create_reviews_table', 1),
('2016_03_05_133712_alter_testimonials_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `pictures`
--

CREATE TABLE `pictures` (
  `id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `uri` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `size` smallint(6) NOT NULL,
  `type` enum('png','jpg','gif') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `pictures`
--

INSERT INTO `pictures` (`id`, `article_id`, `title`, `uri`, `size`, `type`, `created_at`, `updated_at`) VALUES
(3, 6, 'autres1_jpg', 'autres1.jpg', 32767, 'jpg', '2016-03-03 11:23:47', '2016-03-03 11:23:47'),
(4, 5, 'autres2_jpg', 'autres2.jpg', 32767, 'jpg', '2016-03-03 11:23:56', '2016-03-03 11:23:56'),
(5, 4, 'autres3_jpg', 'autres3.jpg', 31839, 'jpg', '2016-03-03 11:24:04', '2016-03-03 11:24:04'),
(6, 3, 'autres4_jpg', 'autres4.jpg', 31547, 'jpg', '2016-03-03 11:24:19', '2016-03-03 11:24:19'),
(7, 2, 'autres5_jpg', 'autres5.jpg', 32767, 'jpg', '2016-03-03 11:24:26', '2016-03-03 11:24:26'),
(8, 1, 'autres6_jpg', 'autres6.jpg', 32453, 'jpg', '2016-03-03 11:24:33', '2016-03-03 11:24:33'),
(37, 7, 'main_jpg', 'main.jpg', 32767, 'jpg', '2016-03-04 08:18:29', '2016-03-04 08:18:29'),
(38, 7, 'timeline4_jpg', 'timeline4.jpg', 32767, 'jpg', '2016-03-04 08:18:29', '2016-03-04 08:18:29'),
(39, 7, 'timeline2_jpg', 'timeline2.jpg', 32767, 'jpg', '2016-03-04 08:18:29', '2016-03-04 08:18:29'),
(40, 7, 'timeline1_jpg', 'timeline1.jpg', 28472, 'jpg', '2016-03-04 08:18:29', '2016-03-04 08:18:29'),
(41, 7, 'timeline3_jpg', 'timeline3.jpg', 32767, 'jpg', '2016-03-04 08:18:29', '2016-03-04 08:18:29'),
(42, 7, 'main1_jpg', 'main1.jpg', 32767, 'jpg', '2016-03-04 08:42:01', '2016-03-04 08:42:01');

-- --------------------------------------------------------

--
-- Structure de la table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `reviews`
--

INSERT INTO `reviews` (`id`, `article_id`, `content`, `created_at`, `updated_at`) VALUES
(1, 7, 'Une journée inoubliable, un vrai rêve, un pur bonheur. Encore merci a toi Christina pour ta disponibilité, ton efficacité , ton imagination débordante , tu est très professionnelle.', '2016-03-03 11:29:18', '2016-03-03 11:29:18');

-- --------------------------------------------------------

--
-- Structure de la table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('published','unpublished') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'unpublished',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `testimonials`
--

INSERT INTO `testimonials` (`id`, `user_id`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Une journée inoubliable, un vrai rêve, un pur bonheur. Encore merci a toi Christina pour ta disponibilité, ton efficacité , ton imagination débordante , tu est très professionnelle.', 'published', '2016-03-03 11:27:19', '2016-03-03 11:27:19'),
(2, 9, 'C''est une expérience mémorable.  Mille merci à l''équipe de Christina !', 'unpublished', '2016-03-05 11:58:44', '2016-03-05 13:33:40');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `role` enum('administrator','editor','visitor') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'visitor',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Caribbean', 'admin@admin.fr', '$2y$10$G9Q11yDXRQ9D0rx40Tm0oOsGS4Bu/uzcoE26/nKxAnv/n25WqQZlq', 'administrator', 'CLaloJ8cuzB2CrRQzuyXA6hl6gxmhuFIwQd3Zr7iBh3QKeVrR8smbvjtpYkP', NULL, '2016-03-07 10:59:16'),
(2, 'JESSICA-OLIVIER', 'jessica@jessica.fr', '$2y$10$G5XnhLIpeauT7bDfnGPldukB63Lb3zz4G2bS3L.3fqzqbzKaY4Xf.', 'visitor', 'Sgytvh2yrKA8UVNkpcXZZZbYOckvi7kjOQzBr37nsHSgRQVu5o98aZtg5C2i', NULL, '2016-03-07 10:57:27'),
(3, 'LAURA-ALEXANDRE', 'laura@laura.fr', '$2y$10$qQNk8QIDVt1ieHEX5S461uVe.Hh5GD95SfsGBEtnbwYBY0rSbbISW', 'visitor', '3FT7DCNu2heYDAG4CWFRzdjfw8UTeczX5hh80gg4cA2tXwZiHtirEE3F3Qfx', '2016-03-03 11:06:57', '2016-03-07 14:03:49'),
(4, 'SARAH-HARRY', 'sarah@sarah.fr', '$2y$10$4uZQ3YHi/ys36YI738gXdeg08NzNvYm/YyRdFIMDSBqduLlN4JmHi', 'visitor', NULL, '2016-03-03 11:07:36', '2016-03-03 11:07:36'),
(5, 'CAROLINE-FLORENT', 'caroline@caroline.fr', '$2y$10$U6QQsrim5gijnIIvFaYU6OBA1NlfY2kuU3Fx9ZJBpfQKDKf8VuKAe', 'visitor', NULL, '2016-03-03 11:08:20', '2016-03-03 11:08:20'),
(7, 'ANNA-LAURENT', 'anna@anna.fr', '$2y$10$ZueKiAX/IqD7sp1zvDWHLufwMK7QEqMS4tBKOjSPKNjeSgX9hsIIi', 'visitor', NULL, '2016-03-03 11:10:24', '2016-03-03 11:10:24'),
(8, 'SANDRINE-FREDERIC', 'sandrine@sandrine.fr', '$2y$10$Et8vjoU2pg/qITYIiZXytuxIwC4efS8aJxsMc6PrwXJUB6WKrNwbq', 'visitor', NULL, '2016-03-03 11:11:10', '2016-03-03 11:11:10'),
(9, 'EMMA-KEVIN', 'emma@emma.fr', '$2y$10$qxJnD.7jd.DK3zzvG2y0l.Ib8B76yAxJWSA3ZYdZCQMF36g3FKZZ2', 'visitor', 'HEZpHdL0ep7VnTIhQKNVU1Tjy0E6xtW4xXPp15fx4qQnUme2dNQTnh9WSTi4', '2016-03-03 11:12:10', '2016-03-06 14:51:27');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_event_id_foreign` (`event_id`);

--
-- Index pour la table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customers_user_id_foreign` (`user_id`);

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `events_customer_id_foreign` (`customer_id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Index pour la table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pictures_article_id_foreign` (`article_id`);

--
-- Index pour la table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_article_id_foreign` (`article_id`);

--
-- Index pour la table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `testimonials_user_id_foreign` (`user_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT pour la table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE SET NULL;

--
-- Contraintes pour la table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `pictures`
--
ALTER TABLE `pictures`
  ADD CONSTRAINT `pictures_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `testimonials`
--
ALTER TABLE `testimonials`
  ADD CONSTRAINT `testimonials_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
