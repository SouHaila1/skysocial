-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 26 mai 2020 à 19:02
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `skysocial`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_body` text NOT NULL,
  `posted_by` varchar(60) NOT NULL,
  `posted_to` varchar(60) NOT NULL,
  `date_added` datetime NOT NULL,
  `removed` varchar(3) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `post_body`, `posted_by`, `posted_to`, `date_added`, `removed`, `post_id`) VALUES
(9, 'hillo', 'souha_laa', 'souha_laa', '2020-05-07 09:52:47', 'no', 25),
(10, 'comment something -- \r\n', 'admin_lee', 'admin_lee', '2020-05-08 09:00:45', 'no', 33),
(11, 'where the like go', 'souha_laa', 'admin_lee', '2020-05-08 09:01:42', 'no', 33),
(12, 'awosame', 'souha_laa', 'admin_lee', '2020-05-08 09:02:18', 'no', 33),
(13, 'a', 'souha_laa', 'admin_lee', '2020-05-08 09:04:05', 'no', 33),
(14, 'yep', 'admin_lee', 'admin_lee', '2020-05-08 09:08:03', 'no', 33),
(15, 'sjs', 'admin_lee', 'admin_lee', '2020-05-08 09:09:27', 'no', 33),
(18, 'nice', 'test_test', 'saad_jm', '2020-05-19 14:49:46', 'no', 98),
(19, 'nice', 'test_test', 'saad_jm', '2020-05-19 15:50:54', 'no', 97),
(20, 'dz', 'test_test', 'admin_lee', '2020-05-23 01:18:08', 'no', 33);

-- --------------------------------------------------------

--
-- Structure de la table `friend_requests`
--

CREATE TABLE `friend_requests` (
  `id` int(11) NOT NULL,
  `user_to` varchar(50) NOT NULL,
  `user_from` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `friend_requests`
--

INSERT INTO `friend_requests` (`id`, `user_to`, `user_from`) VALUES
(1, 'souha_laa', 'saad_jm'),
(2, 'souha_laa', 'saad_jm'),
(3, 'souha_laa', 'saad_jm'),
(4, 'souha_laa', 'saad_jm'),
(5, 'souha_laa', 'saad_jm'),
(8, 'admin_admin', 'saad_jm'),
(11, 'user1_user', 'saad_jm');

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `likes`
--

INSERT INTO `likes` (`id`, `username`, `post_id`) VALUES
(14, 'souha_laa', 33),
(17, 'admin_lee', 33),
(20, 'test_test', 43),
(21, 'test_test', 47),
(25, 'test_test', 98),
(26, 'test_test', 97),
(27, 'test_test', 95),
(29, 'test_test', 33);

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `user_to` varchar(50) NOT NULL,
  `user_from` varchar(50) NOT NULL,
  `body` text NOT NULL,
  `date` datetime NOT NULL,
  `opened` varchar(3) NOT NULL,
  `viewed` varchar(3) NOT NULL,
  `deleted` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `user_to`, `user_from`, `body`, `date`, `opened`, `viewed`, `deleted`) VALUES
(1, 'saad_jm', 'test_test', 'hi there saad', '2020-05-12 13:41:44', 'yes', 'yes', 'no'),
(2, 'saad_jm', 'test_test', 'how are you?\r\n', '2020-05-12 13:41:53', 'yes', 'yes', 'no'),
(3, 'test_test', 'saad_jm', 'oh hi\r\nhow are you?', '2020-05-12 13:58:38', 'yes', 'yes', 'no'),
(4, 'test_test', 'saad_jm', 'oh hi\r\nhow are you?', '2020-05-12 13:59:20', 'yes', 'yes', 'no'),
(5, 'test_test', 'saad_jm', 'oh hi\r\nhow are you?', '2020-05-12 14:00:02', 'yes', 'yes', 'no'),
(6, 'test_test', 'saad_jm', 'ok', '2020-05-12 14:00:07', 'yes', 'yes', 'no'),
(7, 'test_test', 'saad_jm', 'sazd', '2020-05-12 14:00:09', 'yes', 'yes', 'no'),
(8, 'test_test', 'saad_jm', 'fdvfs', '2020-05-12 14:00:13', 'yes', 'yes', 'no'),
(9, 'test_test', 'saad_jm', 'dfsf\r\n', '2020-05-12 14:00:17', 'yes', 'yes', 'no'),
(10, 'test_test', 'saad_jm', 'vgrefezdez', '2020-05-12 14:00:20', 'yes', 'yes', 'no'),
(11, 'test_test', 'saad_jm', 'sdfczefvfd', '2020-05-12 14:00:23', 'yes', 'yes', 'no'),
(12, 'test_test', 'saad_jm', 'sdfvezfcrefc', '2020-05-12 14:00:27', 'yes', 'yes', 'no'),
(13, 'test_test', 'saad_jm', 'sdfvezfcrefc', '2020-05-12 14:01:17', 'yes', 'yes', 'no'),
(14, 'test_test', 'saad_jm', 'sdfvezfcrefc', '2020-05-12 14:01:51', 'yes', 'yes', 'no'),
(15, 'test_test', 'saad_jm', 'sdfvezfcrefc', '2020-05-12 14:02:18', 'yes', 'yes', 'no'),
(16, 'admin_admin', 'saad_jm', 'hi', '2020-05-12 14:55:33', 'no', 'no', 'no'),
(17, 'saad_jm', 'test_test', 'hi', '2020-05-18 14:41:52', 'yes', 'yes', 'no'),
(18, 'saad_jm', 'test_test', 'hi', '2020-05-18 15:07:38', 'yes', 'yes', 'no'),
(19, 'test_test', 'saad_jm', 'fgdhdrshvd', '2020-05-20 00:17:21', 'yes', 'yes', 'no');

-- --------------------------------------------------------

--
-- Structure de la table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `user_to` varchar(50) NOT NULL,
  `user_from` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `link` varchar(100) NOT NULL,
  `datetime` datetime NOT NULL,
  `opened` varchar(3) NOT NULL,
  `viewed` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `notifications`
--

INSERT INTO `notifications` (`id`, `user_to`, `user_from`, `message`, `link`, `datetime`, `opened`, `viewed`) VALUES
(1, 'saad_jm', 'test_test', 'Test Test liked your post', 'post.php?id=97', '2020-05-19 15:50:48', 'no', 'yes'),
(2, 'saad_jm', 'test_test', 'Test Test commented on your post', 'post.php?id=97', '2020-05-19 15:50:54', 'no', 'yes'),
(3, 'saad_jm', 'test_test', 'Test Test liked your post', 'post.php?id=95', '2020-05-20 00:16:48', 'yes', 'yes');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `body` text NOT NULL,
  `added_by` varchar(60) NOT NULL,
  `user_to` varchar(60) NOT NULL,
  `date_added` datetime NOT NULL,
  `user_closed` varchar(3) NOT NULL,
  `deleted` varchar(3) NOT NULL,
  `likes` int(11) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `body`, `added_by`, `user_to`, `date_added`, `user_closed`, `deleted`, `likes`, `image`) VALUES
(33, 'first post', 'admin_lee', 'none', '2020-05-08 09:00:25', 'no', 'no', 3, 'assets/images/posts/5eb51fa911c32font.jpg'),
(54, 'this is a test post', 'admin_admin', 'none', '2020-05-09 16:12:16', 'no', 'yes', 0, ''),
(58, 'test', 'saad_jm', 'none', '2020-05-12 16:32:41', 'no', 'yes', 0, ''),
(59, 'test', 'saad_jm', 'none', '2020-05-12 16:32:45', 'no', 'yes', 0, ''),
(60, 'test', 'saad_jm', 'none', '2020-05-12 16:32:49', 'no', 'yes', 0, ''),
(65, 'test1', 'saad_jm', 'none', '2020-05-12 16:41:36', 'no', 'yes', 0, ''),
(73, 'this is post number 2 test', 'saad_jm', 'none', '2020-05-13 14:40:19', 'no', 'yes', 0, ''),
(74, 'hi friend', 'saad_jm', 'none', '2020-05-18 15:07:22', 'no', 'yes', 0, ''),
(75, 'test', 'saad_jm', 'none', '2020-05-18 16:20:24', 'no', 'yes', 0, ''),
(76, 'hi friend', 'saad_jm', 'none', '2020-05-18 15:21:26', 'no', 'yes', 0, ''),
(77, 'hi friend', 'saad_jm', 'none', '2020-05-18 15:21:50', 'no', 'yes', 0, ''),
(78, 'hi friend', 'saad_jm', 'none', '2020-05-18 15:29:49', 'no', 'yes', 0, ''),
(79, 'test', 'saad_jm', 'none', '2020-05-18 16:16:18', 'no', 'yes', 0, ''),
(81, 'test', 'saad_jm', 'none', '2020-05-18 17:16:54', 'no', 'yes', 0, ''),
(84, 'test', 'saad_jm', 'none', '2020-05-19 14:37:11', 'no', 'yes', 0, ''),
(85, 'test', 'saad_jm', 'none', '2020-05-19 14:37:28', 'no', 'yes', 0, ''),
(86, 'hello', 'saad_jm', 'none', '2020-05-19 14:37:43', 'no', 'yes', 0, ''),
(87, 'this is a test', 'saad_jm', 'none', '2020-05-19 14:38:57', 'no', 'yes', 0, ''),
(88, 'this is a test', 'saad_jm', 'none', '2020-05-19 14:39:05', 'no', 'yes', 0, ''),
(89, 'this is a test', 'saad_jm', 'none', '2020-05-19 14:44:27', 'no', 'yes', 0, ''),
(90, 'this is a test', 'saad_jm', 'none', '2020-05-19 14:44:28', 'no', 'yes', 0, ''),
(91, 'this is a test', 'saad_jm', 'none', '2020-05-19 14:44:31', 'no', 'yes', 0, ''),
(92, 'this is a test', 'saad_jm', 'none', '2020-05-19 14:44:34', 'no', 'yes', 0, ''),
(93, 'this is a test from saad', 'saad_jm', 'none', '2020-05-19 14:45:23', 'no', 'yes', 0, ''),
(94, 'this is a test from saad', 'saad_jm', 'none', '2020-05-19 14:46:59', 'no', 'yes', 0, ''),
(95, 'this is a test from saad', 'saad_jm', 'none', '2020-05-19 14:48:05', 'no', 'yes', 0, ''),
(96, 'this is a test from saad', 'saad_jm', 'none', '2020-05-19 14:48:06', 'no', 'yes', 0, ''),
(97, 'this is a test from saad', 'saad_jm', 'none', '2020-05-19 14:48:09', 'no', 'yes', 1, ''),
(98, 'test 25', 'saad_jm', 'none', '2020-05-19 14:48:49', 'no', 'yes', 1, 'assets/images/posts/5ec3f1d1744b6gameIcon.jpg'),
(99, 'test', 'saad_jm', 'none', '2020-05-20 00:14:14', 'no', 'no', 0, ''),
(100, 'test', 'saad_jm', 'none', '2020-05-20 00:14:16', 'no', 'yes', 0, ''),
(101, 'Bonjour a tous', 'test_test', 'none', '2020-05-25 20:10:49', 'no', 'no', 0, 'assets/images/posts/5ecc1838e9d22gameIcon.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `trends`
--

CREATE TABLE `trends` (
  `title` varchar(50) NOT NULL,
  `hits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `trends`
--

INSERT INTO `trends` (`title`, `hits`) VALUES
('Test', 21),
('Hello', 1),
('Saad', 5),
('25', 1),
('Bonjour', 1),
('Tous', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `signup_date` date NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `num_posts` int(11) NOT NULL,
  `num_likes` int(11) NOT NULL,
  `user_closed` varchar(3) NOT NULL,
  `friend_array` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `signup_date`, `profile_pic`, `num_posts`, `num_likes`, `user_closed`, `friend_array`) VALUES
(1, 'Admin', 'Lee', 'admin_lee', 'Admin@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2020-05-06', 'assets/images/profile_pics/defaults/head_emerald.png', 1, 3, 'no', ',souha_laa,'),
(2, 'Souha', 'Laa', 'souha_laa', 'Souha@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2020-05-06', 'assets/images/profile_pics/defaults/head_emerald.png', 0, 0, 'no', ',admin_lee,'),
(8, 'Saad', 'Jm', 'saad_jm', 'Saad.jmari@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', '2020-05-08', 'assets/images/profile_pics/defaults/head_amethyst.png', 2, 3, 'no', ',test_test,test1_test,'),
(9, 'Test', 'Test', 'test_test', 'Test@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', '2020-05-08', 'assets/images/profile_pics/test_test96521492fa7f2e8889baeb96d5ca8d36n.jpeg', 1, 0, 'no', ',user_user,saad_jm,'),
(10, 'Admin', 'Admin', 'admin_admin', 'Admin1@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2020-05-09', 'assets/images/profile_pics/defaults/head_amethyst.png', 0, 0, 'no', ','),
(11, 'User', 'User', 'user_user', 'User@user.com', 'cc03e747a6afbbcbf8be7668acfebee5', '2020-05-10', 'assets/images/profile_pics/defaults/head_alizarin.png', 0, 0, 'no', ',test_test,'),
(12, 'Test1', 'Test', 'test1_test', 'Test1@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', '2020-05-19', 'assets/images/profile_pics/defaults/head_alizarin.png', 0, 0, 'no', ',saad_jm,'),
(13, 'User1', 'User', 'user1_user', 'User1@user.com', 'cc03e747a6afbbcbf8be7668acfebee5', '2020-05-25', 'assets/images/profile_pics/defaults/head_amethyst.png', 0, 0, 'no', ',');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `friend_requests`
--
ALTER TABLE `friend_requests`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `friend_requests`
--
ALTER TABLE `friend_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
