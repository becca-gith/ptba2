-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 20 avr. 2026 à 15:16
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ptba`
--

-- --------------------------------------------------------

--
-- Structure de la table `activites`
--

CREATE TABLE `activites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `cout` decimal(15,2) DEFAULT NULL,
  `ptba_id` bigint(20) DEFAULT NULL,
  `composant_id` bigint(20) DEFAULT NULL,
  `utilisateur_id` bigint(20) DEFAULT NULL,
  `etat` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `activites`
--

INSERT INTO `activites` (`id`, `code`, `libelle`, `cout`, `ptba_id`, `composant_id`, `utilisateur_id`, `etat`, `created_at`, `updated_at`) VALUES
(1, 'ACT-231', 'Pariatur fugit ipsum consequatur.', 1690533.74, 5, 3, 4, 1, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(2, 'ACT-110', 'Nihil dolorem.', 196767.31, 4, 4, 2, 0, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(3, 'ACT-357', 'Eum iusto impedit.', 1895521.01, 3, 3, 5, 1, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(4, 'ACT-863', 'Ipsa nulla laudantium hic.', 215635.15, 4, 3, 4, 1, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(5, 'ACT-972', 'Quod magni ut.', 1650590.32, 2, 4, 2, 1, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(6, 'ACT-538', 'Consectetur quod placeat.', 1865423.48, 4, 4, 5, 0, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(7, 'ACT-171', 'Mollitia provident.', 619455.50, 1, 1, 4, 0, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(8, 'ACT-928', 'Sunt ea illo.', 740736.27, 2, 4, 1, 1, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(9, 'ACT-763', 'Pariatur tenetur occaecati.', 1246081.89, 3, 3, 1, 1, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(10, 'ACT-213', 'Ipsum pariatur officiis sapiente quia.', 1264588.64, 5, 4, 5, 0, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(11, 'ACT-083', 'Est incidunt ut sit soluta.', 1456132.95, 2, 5, 3, 1, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(12, 'ACT-870', 'Inventore rerum quis.', 791422.17, 4, 3, 3, 1, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(13, 'ACT-182', 'Recusandae quisquam quo et.', 1422379.91, 5, 3, 5, 1, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(14, 'ACT-782', 'Accusantium ut rem.', 437817.31, 4, 1, 4, 0, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(15, 'ACT-574', 'Doloremque exercitationem libero dolorem provident.', 1548395.58, 1, 5, 2, 0, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(16, 'ACT-352', 'Modi est quibusdam.', 553017.37, 2, 2, 5, 0, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(17, 'ACT-459', 'Est repellat quas natus.', 272493.64, 3, 3, 1, 0, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(18, 'ACT-274', 'Labore id et et.', 1970552.54, 2, 5, 1, 1, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(19, 'ACT-810', 'Exercitationem atque dolore ea.', 416346.57, 2, 4, 5, 1, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(20, 'ACT-545', 'Recusandae saepe quo.', 147628.99, 5, 4, 1, 0, '2026-04-20 13:01:59', '2026-04-20 13:01:59');

-- --------------------------------------------------------

--
-- Structure de la table `annees`
--

CREATE TABLE `annees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `statut` int(11) NOT NULL DEFAULT 1,
  `etat` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `annees`
--

INSERT INTO `annees` (`id`, `libelle`, `statut`, `etat`, `created_at`, `updated_at`) VALUES
(1, '2022-2023', 1, 1, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(2, '2023-2024', 1, 0, '2026-04-20 13:01:59', '2026-04-20 13:01:59');

-- --------------------------------------------------------

--
-- Structure de la table `bailleurs`
--

CREATE TABLE `bailleurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `sigle` varchar(255) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `utilisateur_id` bigint(20) DEFAULT NULL,
  `etat` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `bailleurs`
--

INSERT INTO `bailleurs` (`id`, `code`, `logo`, `sigle`, `nom`, `email`, `utilisateur_id`, `etat`, `created_at`, `updated_at`) VALUES
(1, 'BYR-700', 'https://via.placeholder.com/200x200.png/004433?text=business+ut', 'MQV', 'Kovacek, Lang and Torphy', 'justen.mosciski@example.org', 4, 0, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(2, 'BYR-164', 'https://via.placeholder.com/200x200.png/002266?text=business+quia', 'RVU', 'Metz and Sons', 'emmy.gutkowski@example.org', 3, 0, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(3, 'BYR-243', 'https://via.placeholder.com/200x200.png/0099ff?text=business+facere', 'MUJ', 'Greenholt-Morissette', 'treutel.taurean@example.com', 5, 0, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(4, 'BYR-119', 'https://via.placeholder.com/200x200.png/003311?text=business+id', 'CRJ', 'McDermott PLC', 'htremblay@example.com', 4, 0, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(5, 'BYR-244', 'https://via.placeholder.com/200x200.png/0022aa?text=business+sunt', 'SCJ', 'Prohaska Inc', 'kohler.carmela@example.com', 5, 0, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(6, 'BYR-748', 'https://via.placeholder.com/200x200.png/00ee66?text=business+officiis', 'RNO', 'Carter Group', 'jeff25@example.com', 2, 1, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(7, 'BYR-637', 'https://via.placeholder.com/200x200.png/000055?text=business+omnis', 'EZL', 'McCullough LLC', 'kailey.jenkins@example.org', 5, 1, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(8, 'BYR-144', 'https://via.placeholder.com/200x200.png/006644?text=business+repudiandae', 'ZTD', 'Lowe Ltd', 'edicki@example.org', 2, 0, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(9, 'BYR-463', 'https://via.placeholder.com/200x200.png/004488?text=business+consectetur', 'WAI', 'Bahringer, Borer and Wunsch', 'bernier.wilfrid@example.net', 4, 0, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(10, 'BYR-350', 'https://via.placeholder.com/200x200.png/008866?text=business+harum', 'XYZ', 'Anderson-Hartmann', 'maxwell.ziemann@example.net', 3, 0, '2026-04-20 13:01:59', '2026-04-20 13:01:59');

-- --------------------------------------------------------

--
-- Structure de la table `composants`
--

CREATE TABLE `composants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `ptba_id` bigint(20) DEFAULT NULL,
  `financement` double(8,2) DEFAULT NULL,
  `utilisateur_id` bigint(20) DEFAULT NULL,
  `etat` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `composants`
--

INSERT INTO `composants` (`id`, `libelle`, `ptba_id`, `financement`, `utilisateur_id`, `etat`, `created_at`, `updated_at`) VALUES
(1, 'veritatis et provident', 3, 66802.83, 3, 1, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(2, 'et qui corporis', 4, 1472.63, 4, 1, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(3, 'dolorem exercitationem ab', 5, 66956.59, 5, 1, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(4, 'iste cumque at', 6, 31739.23, 6, 1, '2026-04-20 13:01:59', '2026-04-20 13:01:59');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `financements`
--

CREATE TABLE `financements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `montant` decimal(15,2) DEFAULT NULL,
  `bailleur_id` bigint(20) DEFAULT NULL,
  `activite_id` bigint(20) DEFAULT NULL,
  `etat` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `financements`
--

INSERT INTO `financements` (`id`, `montant`, `bailleur_id`, `activite_id`, `etat`, `created_at`, `updated_at`) VALUES
(1, 3612887.55, 2, 4, 1, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(2, 4265753.71, 1, 3, 0, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(3, 941745.14, 3, 5, 0, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(4, 2008628.60, 5, 4, 0, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(5, 4663507.44, 2, 4, 0, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(6, 919714.80, 5, 2, 1, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(7, 3870475.11, 5, 4, 0, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(8, 2622325.72, 2, 2, 0, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(9, 4889064.24, 2, 1, 1, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(10, 4907363.77, 3, 5, 0, '2026-04-20 13:01:59', '2026-04-20 13:01:59');

-- --------------------------------------------------------

--
-- Structure de la table `historiques`
--

CREATE TABLE `historiques` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `heure_action` datetime DEFAULT NULL,
  `utilisateur_id` bigint(20) DEFAULT NULL,
  `etat` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `historiques`
--

INSERT INTO `historiques` (`id`, `libelle`, `heure_action`, `utilisateur_id`, `etat`, `created_at`, `updated_at`) VALUES
(1, 'Culpa nihil eum quod praesentium.', '2026-03-05 04:15:53', 4, 0, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(2, 'Blanditiis ipsa nam et beatae.', '2026-02-05 17:37:32', 4, 1, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(3, 'Debitis eveniet debitis.', '2026-02-02 12:39:45', 3, 1, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(4, 'Repudiandae eligendi qui reprehenderit fugit.', '2026-02-24 21:25:41', 2, 0, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(5, 'Rerum a et.', '2026-01-04 15:50:45', 1, 0, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(6, 'Accusantium non molestias sint.', '2026-01-28 23:40:14', 5, 1, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(7, 'Ut repellendus quo error similique.', '2026-04-02 13:12:37', 4, 1, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(8, 'Aliquam commodi et beatae.', '2026-04-05 17:26:14', 3, 0, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(9, 'Minus in nihil.', '2026-02-14 22:00:39', 2, 1, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(10, 'Commodi aut vero magnam.', '2026-03-12 03:39:38', 4, 0, '2026-04-20 13:01:59', '2026-04-20 13:01:59');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_09_22_013452_create_annees_table', 1),
(6, '2025_09_22_013519_create_ptbas_table', 1),
(7, '2025_09_22_013633_create_utilisateurs_table', 1),
(8, '2025_09_22_013723_create_composants_table', 1),
(9, '2025_09_22_013744_create_activites_table', 1),
(10, '2025_09_22_013906_create_operations_table', 1),
(11, '2025_10_26_132530_create_projets_table', 1),
(12, '2025_10_26_134616_create_bailleurs_table', 1),
(13, '2025_10_26_135719_create_financements_table', 1),
(14, '2025_10_26_144136_create_historiques_table', 1),
(15, '2025_11_26_150354_create_user_projets_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `operations`
--

CREATE TABLE `operations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `montant` double(8,2) DEFAULT NULL,
  `statut` tinyint(4) DEFAULT NULL,
  `justificatif` varchar(255) DEFAULT NULL,
  `date_operation` date DEFAULT NULL,
  `activite_id` bigint(20) DEFAULT NULL,
  `utilisateur_id` bigint(20) DEFAULT NULL,
  `etat` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `operations`
--

INSERT INTO `operations` (`id`, `libelle`, `montant`, `statut`, `justificatif`, `date_operation`, `activite_id`, `utilisateur_id`, `etat`, `created_at`, `updated_at`) VALUES
(1, 'Saepe et voluptatem.', 440186.13, 2, 'https://via.placeholder.com/640x480.png/0022dd?text=business+distinctio', '2016-10-20', 3, 3, 1, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(2, 'Fugiat tenetur debitis.', 251144.10, 2, 'https://via.placeholder.com/640x480.png/009922?text=business+earum', '2014-06-08', 2, 1, 1, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(3, 'Voluptatem magnam quam eos laboriosam.', 464088.49, 2, 'https://via.placeholder.com/640x480.png/006677?text=business+ad', '1988-01-19', 5, 3, 1, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(4, 'Sit ad expedita eveniet.', 61179.89, 0, 'https://via.placeholder.com/640x480.png/00eeff?text=business+quibusdam', '1991-04-24', 5, 5, 0, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(5, 'Nesciunt explicabo accusamus quo.', 343185.10, 0, 'https://via.placeholder.com/640x480.png/00ff33?text=business+id', '2013-02-28', 2, 1, 0, '2026-04-20 13:01:59', '2026-04-20 13:01:59');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

CREATE TABLE `projets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `etat` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `projets`
--

INSERT INTO `projets` (`id`, `libelle`, `description`, `etat`, `created_at`, `updated_at`) VALUES
(1, 'Illo voluptates voluptatibus provident.', 'Incidunt optio molestiae a quia modi autem voluptates. Nemo amet in quis modi. Mollitia facilis veniam et rem. Et molestiae debitis eos voluptas.', 0, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(2, 'At quos explicabo id.', 'Non quia odio repellat voluptas molestiae corrupti autem vitae. Quam quae autem est ut sed tempore in rerum. Neque consequatur est voluptas quo et minus suscipit consectetur.', 0, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(3, 'Pariatur exercitationem modi.', 'Nemo corporis autem ex. Et tempore dolor neque unde placeat. Officia minus recusandae animi ea aliquam. Et debitis totam dolores commodi. In et aliquam et fugiat veniam perspiciatis eveniet.', 0, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(4, 'Rerum non a.', 'Suscipit saepe optio dolore. Perspiciatis dolores rem reiciendis est eos molestiae consequatur unde. Vel rerum aut recusandae. Natus incidunt vel voluptatem voluptatem voluptatem autem et.', 1, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(5, 'Velit nam fuga rem ea.', 'Harum iste in ratione eum consequatur. Incidunt vero et in exercitationem quibusdam ex. Aut eos magni expedita consequatur autem ab eveniet.', 0, '2026-04-20 13:01:59', '2026-04-20 13:01:59');

-- --------------------------------------------------------

--
-- Structure de la table `ptbas`
--

CREATE TABLE `ptbas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `annee_id` bigint(20) DEFAULT NULL,
  `projet_id` bigint(20) DEFAULT NULL,
  `cout` decimal(15,2) DEFAULT NULL,
  `utilisateur_id` bigint(20) DEFAULT NULL,
  `etat` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `ptbas`
--

INSERT INTO `ptbas` (`id`, `annee_id`, `projet_id`, `cout`, `utilisateur_id`, `etat`, `created_at`, `updated_at`) VALUES
(1, 1, 3, NULL, 4, 1, '2026-04-20 13:01:58', '2026-04-20 13:01:58'),
(2, 1, 2, NULL, 3, 1, '2026-04-20 13:01:58', '2026-04-20 13:01:58'),
(3, 1, 1, NULL, 2, 1, '2026-04-20 13:01:58', '2026-04-20 13:01:58'),
(4, 2, 0, NULL, 2, 1, '2026-04-20 13:01:58', '2026-04-20 13:01:58'),
(5, 1, 2, NULL, 2, 1, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(6, 2, 2, NULL, 1, 1, '2026-04-20 13:01:59', '2026-04-20 13:01:59');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user_projets`
--

CREATE TABLE `user_projets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `utilisateur_id` bigint(20) DEFAULT NULL,
  `projet_id` bigint(20) DEFAULT NULL,
  `statut` tinyint(4) NOT NULL DEFAULT 1,
  `etat` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user_projets`
--

INSERT INTO `user_projets` (`id`, `utilisateur_id`, `projet_id`, `statut`, `etat`, `created_at`, `updated_at`) VALUES
(1, 10, 42, 1, 1, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(2, 37, 22, 0, 1, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(3, 31, 35, 0, 0, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(4, 21, 6, 1, 1, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(5, 33, 18, 1, 1, '2026-04-20 13:01:59', '2026-04-20 13:01:59');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom_prenom` varchar(255) DEFAULT NULL,
  `login_utilisateur` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `mot_passe` varchar(255) DEFAULT NULL,
  `role` tinyint(4) DEFAULT NULL,
  `etat` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom_prenom`, `login_utilisateur`, `telephone`, `mot_passe`, `role`, `etat`, `created_at`, `updated_at`) VALUES
(1, 'Prof. Vena Okuneva MD', 'cora.emard', '646-271-8321', '$2y$10$J5rzwUfpY7lT1g1MRPAYp.2s6aN36bhsqaQKFNHWM/TPSy1un3JFS', 0, 0, '2026-04-20 13:01:58', '2026-04-20 13:01:58'),
(2, 'Mr. Tavares Waelchi Sr.', 'dach.derek', '1-925-321-9191', '$2y$10$fh01rtAiq9KbPlzFcsz8tOXWiE3lNLiAuinTy9LuAtSRX/C52N9oy', 1, 0, '2026-04-20 13:01:58', '2026-04-20 13:01:58'),
(3, 'Dr. Jermey Dibbert I', 'kuvalis.ebony', '364-505-1825', '$2y$10$T1YVeG9aXMpbNwG/2bolpO21pomfjdiTzA4e0iHJHej8gTnTfyFDa', 1, 0, '2026-04-20 13:01:58', '2026-04-20 13:01:58'),
(4, 'Constance Torp', 'bartholome.mann', '+1.331.325.6891', '$2y$10$9tdOaL2mtSIoB.PvjAixzuGxVWY.iEqKPZ7fPivipGWZERe72n/R.', 0, 0, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(5, 'Blanca Emard PhD', 'lschmeler', '+1-959-695-0537', '$2y$10$Ue0O8lhneTZZue8OU4LZLuDD7XF9LF0TpB56TZ4mFnWCe2Sbj0G52', 2, 0, '2026-04-20 13:01:59', '2026-04-20 13:01:59'),
(6, 'Mckayla Wuckert DDS', 'luettgen.angelita', '+15518803263', '$2y$10$lJ13Sk213zQ2e9oxJohtQONnRq/TY2R2bIkzdg8o0cFDNnTWwqGOq', 0, 1, '2026-04-20 13:01:59', '2026-04-20 13:01:59');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `activites`
--
ALTER TABLE `activites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `annees`
--
ALTER TABLE `annees`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `bailleurs`
--
ALTER TABLE `bailleurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `composants`
--
ALTER TABLE `composants`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `financements`
--
ALTER TABLE `financements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `historiques`
--
ALTER TABLE `historiques`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `operations`
--
ALTER TABLE `operations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ptbas`
--
ALTER TABLE `ptbas`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `user_projets`
--
ALTER TABLE `user_projets`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `activites`
--
ALTER TABLE `activites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `annees`
--
ALTER TABLE `annees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `bailleurs`
--
ALTER TABLE `bailleurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `composants`
--
ALTER TABLE `composants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `financements`
--
ALTER TABLE `financements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `historiques`
--
ALTER TABLE `historiques`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `operations`
--
ALTER TABLE `operations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `projets`
--
ALTER TABLE `projets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `ptbas`
--
ALTER TABLE `ptbas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user_projets`
--
ALTER TABLE `user_projets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
