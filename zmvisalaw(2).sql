-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2023 at 08:08 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zmvisalaw`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `line_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `image`, `line_one`, `description`, `created_at`, `updated_at`) VALUES
(1, 'about.jpg', 'We are a national immigration service available by phone, Skype, Whatsapp or in-person, from wherever you are in the US or abroad. To make an appointment email immigration@zaidiatlaw.com or text 347-451-3408 Walk-ins accepted starting August 1, 2020.', '<p>Immigration Office of Supna Zaidi Esq. specializes in deportation litigation, helping you sponsor a family member, or fiancé (family-based immigration law), BIA appeals, and asylum law. We also help EB-5 developers and foreign investors file the correct paperwork to seek a green card through</p><p>We represent clients in deportation proceedings before an immigration judge, as well as clients who have lost their case in court and want to appeal the decision before the Board of Immigration Appeals. Our staff can assist you in Spanish, Arabic, Urdu, Hindi, and Punjabi.</p><p>As immigrants ourselves, the team at The Law Office of Zaidi and Moersdorf, LLP. believes immigrants to the United States, like herself, are a critical part of American society. We contribute to the culture, welfare, and economy of the communities we live in across the 50 states, proving the American Dream is real and should continue to be accessible to all.</p><p>Please email us at <a href=\"mailto:immigration@zaidiatlaw.com\">immigration@zaidiatlaw.com</a> to make an appointment for an in-person consultation at our Fairfax, Virginia office, or via Skype or Whatsapp from anywhere in the world.</p>', NULL, '2023-04-08 14:22:44');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_tag` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `name`, `description`, `meta_tag`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(1, '1681220991.jpg', 'US Immigration', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>', 'Immigration, Lawyer, Court', 1, 'us-immigration', '2023-03-29 08:32:12', '2023-04-11 07:49:51'),
(2, '1681221014.jpg', 'Achievement in Sports', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 'Ability, Sports, Science, Arts', 1, 'achievement-in-sports', '2023-03-29 08:32:58', '2023-04-11 07:50:14'),
(3, '1681221032.jpg', 'Citizenship in USA', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', 'Citizenship, Naturalization', 1, 'citizenship-in-usa', '2023-03-29 08:33:30', '2023-04-11 07:50:32'),
(4, '1680256872.jpg', 'Blog 4', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Ability, Sports, Science, Arts', 0, 'blog-4', '2023-03-31 04:01:12', '2023-04-11 07:50:36');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `metatags`
--

CREATE TABLE `metatags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_tag` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `metatags`
--

INSERT INTO `metatags` (`id`, `page_name`, `meta_tag`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'Immigration, Lawyer, Court', '2023-03-30 08:30:22', '2023-03-30 08:30:30'),
(2, 'About', 'Immigration, Lawyer, Court', '2023-03-30 08:30:36', '2023-03-30 08:30:36'),
(3, 'Team', 'Citizenship, Naturalization, Immigration, Lawyer, Court', '2023-03-30 08:30:55', '2023-03-30 08:34:33'),
(4, 'Contact', 'Immigration, Lawyer, Court', '2023-03-30 08:34:43', '2023-03-30 08:34:43');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_11_193644_create_services_table', 1),
(6, '2023_03_17_140032_create_blogs_table', 1),
(7, '2023_03_26_094655_create_metatags_table', 1),
(8, '2023_03_26_095454_create_teams_table', 1),
(9, '2023_03_26_095606_create_abouts_table', 1),
(10, '2023_03_26_100354_create_reviews_table', 1),
(11, '2023_03_26_100603_create_sliders_table', 1),
(12, '2023_04_08_203947_create_socials_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `image`, `name`, `occupation`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Anonymous', NULL, '<p><strong>“Very. Knowledgeable”</strong><br>I met Supna while. I was her Lyft Driver and she offered to assist pro bono on my naturalization application which had being earlier denied. She made easier for me to understand and her patience is beautiful. Supna is the definition of immigration law.I met Supna while. I was her Lyft Driver and she offered to assist pro bono on my naturalization application which had being earlier denied. She made easier for me to understand and her patience is beautiful. Supna is the definition of immigration law.</p>', 1, '2023-03-29 08:38:43', '2023-04-11 08:20:41'),
(2, NULL, 'Anonymous', NULL, '<p><strong>\"Immigration f-1\"</strong><br>After couple of bad experiences with other attorneys i found Supna Zaidi, she is a great attorney. Explains everything thoroughly, great listener and really informative. Would definitely recommend her!After couple of bad experiences with other attorneys i found Supna Zaidi, she is a great attorney. Explains everything thoroughly, great listener and really informative. Would definitely recommend her!</p>', 1, '2023-03-29 08:39:12', '2023-04-11 08:20:59'),
(3, NULL, 'M****lip', NULL, '<p><strong>“Best service with low fee”</strong><br>Supna is a lawyer that also provides free consultant service for low income people. She offers both free and premium listings. So I definitely recommend her.</p>', 1, '2023-04-11 08:17:50', '2023-04-11 08:24:50'),
(4, NULL, 'A****h', NULL, '<p><strong>“Thanks”</strong><br>Supna is so kind and honest, I was lucky to choose her as my lawyer, she demonstrated a higher level of flexibility and cooperation</p>', 1, '2023-04-11 08:18:47', '2023-04-11 08:23:28'),
(5, NULL, 'Anonymous', NULL, '<p><strong>“She is a good lawyer very helping”</strong><br>I salauddin, she help me a lot with my many questions towards immigration and my friends hired here there are very happy she is very helpful<br>Thanks</p>', 1, '2023-04-11 08:20:02', '2023-04-11 08:20:02'),
(6, NULL, 'T**y', NULL, '<p><strong>“Supna is a great professional and a great human.”</strong><br>I have met Supna through a friend of mine after the initial complementary consultation I immediately hired her because she was very thorough and very generous with the information, she’s punctual, professional and a great human, she always answer my calls or return my emails with no delay.</p>', 1, '2023-04-11 08:22:17', '2023-04-11 08:23:12'),
(7, NULL, 'S*m', NULL, '<p><strong>“Outstanding”</strong><br>Professional and very easy to work with! Th look her time with my case and made sure everything is correct and legit before submission!! 5 stars all the way!</p>', 1, '2023-04-11 08:22:59', '2023-04-11 08:22:59'),
(8, NULL, 'Fe***t', NULL, '<p><strong>“Professional service, quick response and reasonable price”</strong><br>Supna provided asylum case for a friend of mine. She was very quick for responding emails and phone calls. She is very up to date with all the changes in the immigration laws.</p>', 1, '2023-04-11 08:24:35', '2023-04-11 08:24:35'),
(9, NULL, 'I**al', NULL, '<p><strong>“Excellent attorney”</strong><br>Supna is best. She helped out with my case. She made me feel a lot better while she worked on my case. I’d like to recommend her.</p>', 1, '2023-04-11 08:25:24', '2023-04-11 08:25:24'),
(10, NULL, 'Anonymous', NULL, '<p><strong>\"Good Response\"</strong><br>Supna showed great interest in my case and showed perfect response time which is very appreciated from her.</p>', 1, '2023-04-11 08:25:55', '2023-04-11 08:25:55'),
(11, NULL, 'N**ra (Sa*** As***)', NULL, '<p><strong>“Best lawyer for asylum”</strong><br>I contacted a lot of attorneys for my asylum application but none of them made me trust them enough to put my life between their hands. This was not the case with Supna Zaidi. When I talked to her, she understood what I had been through and that\'s what I was looking for. She explained the whole process to me and told me the possible outcomes. Even though I was in a different state that\'s far from VA, she made it easy to meet. She was responsive and easy to reach by phone or email. And most importantly, she was honest with me about my options and what could go wrong.</p><p>I highly recommend Attorney Supna Zaidi if you need an attorney who can be fully aware of your situation to get you the best legal representation.</p>', 1, '2023-04-11 08:26:43', '2023-04-11 08:26:43'),
(12, NULL, 'Anonymous', NULL, '<p><strong>“Professional, thoughtful with positive results”</strong><br>Supna Zaidi was very thorough in dealing with my immigration case. She was very responsive by phone or email and answered my questions. She always kept me updated about where we were in the process and worked with me to solve the issue. I would highly recommend her if you need legal representation.</p>', 1, '2023-04-11 08:27:13', '2023-04-11 08:27:13'),
(13, NULL, 'R****t jb****y', NULL, '<p><strong>\"Best lawyer in the area\"</strong><br>Supna zaidi is an exceptional attorney who is extremely experienced in all aspects of her field. In the chaotic, emotional turmoil of an immigration matter you need someone you can trust to give you accurate, thorough and honest counsel. Supna Zaidi is that attorney.</p>', 1, '2023-04-11 08:28:13', '2023-04-11 08:28:13');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fontawesome` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_tag` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `fontawesome`, `image`, `name`, `description`, `meta_tag`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'fa-solid fa-user-graduate', '1681206065.jpg', 'For International Students', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'graduate, international, students', 0, 'for-international-students', '2023-03-29 08:13:34', '2023-04-11 03:41:05'),
(2, 'fa-solid fa-city', '1681206244.jpg', 'Citizenship and Naturalization', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Citizenship, Naturalization', 0, 'citizenship-and-naturalization', '2023-03-29 08:16:57', '2023-04-11 03:44:04'),
(3, 'fa-solid fa-users', '1681206133.jpg', 'How to Bring a Family Member to the US', '<h3>Family Immigration</h3><p>The US government provides several options for individuals wanting to immigrate to the United States or who desire to sponsor a relative, spouse or fiancé.</p><p>The process can be difficult, frustrating and opaque at times. We can help submit the correct forms, evidence, and assist in the interview process here in the US, or abroad at a consulate.</p><h4>Categories include:</h4><ol><li>Spouses of US Citizens</li><li>Unmarried children of under 21 of US citizens</li><li>Orphans adopted abroad</li><li>Orphans to be adopted in US by US citizens</li><li>Parents of US citizens who are at least 21 years old.</li></ol><h4>Family Preference Categories include:</h4><ol><li>Unmarried sons and daughters of US citizens, their spouses and their children</li><li>Spouses, minor children and unmarried sons and daughters over 21 of LPRs</li><li>Married sons and daughters of US citizens and their spouses and minor children</li><li>Brothers and sisters of U.S. citizens, and their spouses and minor children, provided the US citizens are at least 21 years</li></ol>', 'USA, Immigration', 1, 'how-to-bring-a-family-member-to-the-us', '2023-03-29 08:17:45', '2023-04-11 03:42:13'),
(4, 'fa-solid fa-briefcase', '1681206287.jpg', 'How Come to the US through a Job Offer', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Job, USA, Immigration', 0, 'how-come-to-the-us-through-a-job-offer', '2023-03-29 08:19:11', '2023-04-11 03:44:47'),
(5, 'fa-solid fa-business-time', '1681206278.jpg', 'Come to the US By Starting a Business', '<h3>EB-5 and E-2 Investing in the United States</h3><p>By better understanding E-2 and EB-5 visas and what investment requirements must be met by the applicants to qualify, franchises can begin attracting and appealing to a new market of franchisees.</p><p>The E-2 Treaty Investor visa grants nationals of a qualifying country temporary stay in the United States in exchange for investment in a U.S. business. To qualify for the visa, investors must:</p><ul><li>Be a national from a qualifying treaty country (<a href=\"https://www.travel.state.gov\">A full list of qualifying countries can be found at the U.S. Department of State website</a>)</li><li>Invest a substantial amount of capital in a U.S. commercial enterprise, and</li><li>Maintain equity ownership and be in control of the business.</li></ul><p>E-2 and EB-5 visas are a great way for foreign investors to establish themselves and their families in the United States through business ownership and franchise opportunities.</p><h4>Types of Business to Invest in the US</h4><p>Despite news to the contrary that business immigration is being frowned upon by the current administration, business immigration and opportunities are booming with direct investment into the United States. There is bipartisan support for business immigration.</p><p>Direct investment is looked upon more favorably than investing in Regional Centers due to the ongoing fraud and unscrupulous business methods of many, but not all, Regional Centers. Direct investment into a US business also gives the investor control over the investment and compliance, including job creation, to satisfy the requirements of EB-5.</p><p>Here are some examples of businesses that are very attractive for EB-5 and E2 approval:</p><ul><li>Franchises<ul><li>Fast Food</li><li>Gast Stations/Convenience Stores</li><li>Health Care</li><li>Daycare Centers and Charter Schools</li><li>Day Spas</li><li>Hotel Chains</li></ul></li><li>Commercial Real Estate Investment</li><li>Construction</li><li>Restaurants</li></ul><p>Direct investment for the EB-5 program has increased substantially since the financial crisis of 2008 and continues to be an attractive way to receive permanent residency in the United States for the investor and family for the foreseeable future.</p><p>This is a great time to invest in the United States.</p><ul><li><strong>How to Apply for an E-2 Investor Visa Using Real Property</strong><br>Prior to applying for an E-2 investor visa, the formal requirements should be complied with, such as registering the business, opening a corporate bank account, leasing an office space, wire transfer of funds to a US bank account, etc.</li></ul><p>Before determining whether an E-2 investor visa can be granted by using real property, we must closely review the requirements of the law and the applicable regulations.</p><p>For example, a real estate investment whereby the investor simply holds title to a real estate property or simply buys properties for rent, his activities will usually not qualify for an E-2 visa, since it will not be regarded as an active business or a bona fide enterprise as required by the regulations. Rather, this would appear to be more of a passive investment which would likely not require the investor to “direct” or “develop” the commercial enterprise.</p><p>On the other hand, if the real estate enterprise requires ongoing activity by the investor on a full-time basis, such as a business which involves purchasing and selling multiple real properties, renovating multiple real properties on a regular basis, or managing multiple rental properties, it may qualify as a bona fide enterprise.</p><p>A combination of seasonal rentals may be regarded as a bona fide enterprise since it requires ongoing activity during the entire year. As may a business of buying, renovating, and selling houses. By actively searching for the renovations throughout the year, buying the properties and selling them, the person is actively involved in the business and is actively engaged in directing and developing the commercial enterprise according to his discretion. He is also adding value to the US economy since he must hire people who will be involved in the process of renovating and selling the properties, hence, his activities are more likely to qualify for an E-2 visa.</p><p>To summarize, a passive real estate investment such as merely owning a rental property, is not likely to qualify for an E-2 investors visa. However, if an investor owns multiple units of property which are being maintained on a regular basis, renovated and rented from time to time, then this investment is more likely to fulfill the E-2 requirements.</p><p>Of course, each applicant must be judged and viewed by the totality of the circumstances test, and should consult with an immigration attorney to more accurately assess their chances of success in the E-2 visa process.</p><ul><li><strong>How to Apply for an E-2 Investor Visa By Investing In a Franchise</strong><br>As franchises struggle to find buyers who can secure financing, a handful are turning to a group of budding owners with cash in hand: wealthy immigrants looking for a green card.</li></ul><p>In 2017, 6,343 foreign nationals applied to the EB-5 program, up from 6,040 in 2012, and just 470 in 2006, according to the latest data from U.S. Citizenship and Immigration Services. The agency estimates that as of September 2013, the program has raised more than $8.6 billion and has created some 57,300 jobs.</p><p>E-2 visas are the more common strategy used in the franchise industry. This is partly because the investment requirement is only $100,000 to $150,000 and the number of E-2 visas distributed each year is not restricted. The investment cannot be marginal, must create jobs and show a future capacity to generate income within five years of operation.</p><p>E-2 visa processing time is faster than the EB-5 route. Unlike green cards, the visas must be renewed every two years.</p><p>An E-2 investor must identify the franchise opportunity and be actively working on the business before the visa application can be submitted; this includes securing a lease and signing the franchise documents. Then, an immigration attorney can prepare the visa application package and submit it to the U.S. consular office in the applicant’s home country.</p><p>Once the petition has been submitted, receiving the visa takes approximately 30 to 90 days. The E-2 visa can be indefinitely renewed for as long as the qualified investment continues.</p><ul><li><strong>How to Apply for an EB-5 Visa</strong></li></ul><p>Unlike the E-2 visa, the Immigrant Investor Program, more commonly referred to as the EB-5 Program, is a pathway to permanent residency in the United States and eventual U.S. citizenship.</p><p>Overseen by U.S. Citizenship and Immigration Services, the EB-5 Program was created in 1990 to stimulate the U.S. economy through job creation and capital investment by foreign investors. There are 10,000 EB-5 green cards available each year, with 3,000 reserved for those who would prefer to invest through a Regional Center.</p><p>Generally, the EB-5 Program requires a capital investment of $1 million in a new commercial enterprise, $500,000 if the business is in a Targeted Employment Area. An EB-5 applicant must also create or preserve at least 10 full-time jobs within two years.</p><p>Applying for an EB-5 green card is a highly documented process that includes extensive vetting procedures. Similar to the E-2, the business opportunity and investment must be fully developed before moving forward with the application. In other words, the foreign investor must have a franchise agreement, lease agreement and sophisticated business plan to demonstrate the validity of the business.</p><p>Through the application process, the investor is granted a conditional permanent residence for a two-year period. The condition is lifted when the investor submits a petition for removal 90 days prior to the two-year anniversary of receiving the conditional status. Once approved, the restrictions are removed and the EB-5 investor receives a permanent green card.</p><h4>What we offer</h4><p>Case Evaluation</p><p>We will assess your eligibility for the E2/EB-5 visa and evaluate:</p><ul><li>Treaty country citizenship</li><li>Type of business desired</li><li>Your short, medium and long-term business goals</li><li>Amount and source of funds</li><li>Professional experience</li><li>Role you will play in the E2 visa company</li><li>Other visa types that would better suit your profile, needs or goal</li></ul><p>Ongoing Weekly Check-Ins</p><p>We will check in weekly throughout the E2/EB-5 Visa process. We will keep you updated on developments, and collect any information if and when it becomes necessary.</p><p>Reviews of Business Plans</p><p>Your business plan goes through many iterations. We offer feedback throughout. Early on, we review your plan and its financial projections. Later, we perform a final review before submission to the USCIS or US Consulate.</p><p>E2 Visa Application Preparation</p><p>The E2 visa application process includes:</p><ul><li>Detailed review of nature and structure of the E2 Visa company</li><li>Development of organizational chart</li><li>Reviewing client’s educational and professional background</li><li>Reviewing requested documents</li><li>Preparing all required immigration forms</li><li>Piecing together the E2 application</li><li>Reviewing and refining the application</li><li>Opportunity for client to review the application before submission</li></ul><p>Visa Filing and Schedule of Consular Interview</p><p>We file the E2 Visa application and schedule an interview with the U.S. Consulate (if you are already in the US you may file with the USCIS).</p><p>Monitoring and Troubleshooting</p><p>We monitor your application status and prepare replies to any Requests For Information (RFI).</p><p>Preparation to E2 Visa Consular Interview</p><p>During a Skype or phone consultation, we prepare you for the E2 visa consular interview.</p>', 'Business, USA, Immigration', 1, 'come-to-the-us-by-starting-a-business', '2023-03-29 08:20:04', '2023-04-11 07:55:27'),
(6, 'fa-solid fa-diagram-project', '1680099665.jpg', 'Business Entity Set Up and Business Plans', '<p><span style=\"color:#000000\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>', 'Business, USA, Immigration', 0, 'business-entity-set-up-and-business-plans', '2023-03-29 08:21:05', '2023-04-08 12:57:34'),
(7, 'fa-solid fa-house', '1681224380.jpg', 'How to Waive the 2-Year Residency Requirement for the J-1 Visa', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Visa, J-1 Visa, Waive', 0, 'how-to-waive-the-2-year-residency-requirement-for-the-j-1-visa', '2023-03-29 08:23:20', '2023-04-11 08:46:20'),
(8, 'fa-solid fa-gavel', '1680100032.jpg', 'Get a Lawyer for Immigration Court', '<p><span style=\"color:#000000\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>', 'Immigration, Lawyer, Court', 0, 'get-a-lawyer-for-immigration-court', '2023-03-29 08:27:12', '2023-04-08 12:57:42'),
(9, 'fa-solid fa-scale-balanced', '1681223944.jpg', 'Appeal', '<h3>Appeal Your Deportation Order</h3><p>The Board of Immigration Appeals, or BIA, acts as the reviewing court for all lower immigration court decisions. If you feel that the immigration judge in your case came to an incorrect decision you have 30 days from the date of the immigration judge’s deportation order in which you can file an appeal with the BIA.</p><p>If the BIA does not rule in your favor, you can appeal again in a federal circuit court of appeals that serves your jurisdiction, and, if necessary, appeal for a third time before the U.S. Supreme Court. Call or email us to schedule an in-person or Skype meeting to discuss your case.</p><p>We are a national immigration service available by phone, Skype, Whatsapp or in-person, from wherever you are in the US or abroad.</p>', 'Appeal, Denial', 1, 'appeal', '2023-03-29 08:28:12', '2023-04-11 08:39:04'),
(10, 'fa-solid fa-hotel', '1681224285.jpg', 'Asylum', '<h3>Special Immigrant Visas</h3><p>The US Government ooffers fromm time to time special visas for people in special circumstances. In addition to these, there are also cases for Asylum Seekers, victims of Domestic Abuse and affectees of Humanitarian Crises.</p><p>Currently, there are SIV Schemes for people who have helped the US Army in Afghanistan or Iraq and their families. If that describes you, we can help you navigate throught this process quickly and efficiently.</p><p>The visa status offered in this case include the following:</p><ul><li>Religious Workers (SD, SR)</li><li>Iraqi and Afghan Translators/Interpreters (SI)</li><li>Iraqis Who Worked for/on Behalf of the U.S. Government (SQ)</li><li>Afghans Who Worked for/on Behalf of the U.S. Government (SQ)</li></ul>', 'Asylum, Hotel', 1, 'asylum', '2023-03-29 08:29:55', '2023-04-11 08:44:45'),
(11, 'fa-solid fa-medal', '1681206205.jpg', 'Extraordinary Ability in the Sciences, Arts and Sports', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Ability, Sports, Science, Arts', 0, 'extraordinary-ability-in-the-sciences-arts-and-sports', '2023-03-29 08:31:00', '2023-04-11 03:43:25');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `line_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line_two` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `line_one`, `line_two`, `status`, `created_at`, `updated_at`) VALUES
(1, '1681220753.jpg', 'Legal Consultancy', 'We Provide Best Quality Solution', 1, '2023-03-29 07:39:12', '2023-04-11 07:45:53'),
(2, '1681220942.jpg', 'Immigration Consultancy', 'Take Our Help To Reach The Top Level', 1, '2023-03-29 07:41:28', '2023-04-11 07:49:02');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fontawesome` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `fontawesome`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'fa-brands fa-linkedin', NULL, 1, '2023-04-08 14:57:19', '2023-04-08 14:57:19');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `image`, `name`, `occupation`, `email`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, '1680100533.png', 'Supna Zaidi Peery', 'Immigration Lawyer', 'supna@zmvisalaw.com', '<p>Ms. Zaidi’s immigration practice focuses on asylum and deportation relief, including appellate level representation of clients to the Board of Immigration Appeals (BIA). Clients have included refugees from Sierra Leone, asylees fleeing FGM, persecution based on ethnic/religious discrimination from countries like Turkey, and successful reversals of deportation orders from Pakistan.</p><p>She is on the advisory board of the Muslim American Leadership Alliance (<a href=\"http://www.malanational.org\">www.malanational.org</a>); and a founding board member for the Alliance of Inclusive Muslims (<a href=\"http://www.aim.ngo\">www.aim.ngo</a>)</p><p>Juris Doctor - New York Law School (2003)<br>Licensed in the State of New Jersey.</p>', 1, '2023-03-29 08:35:33', '2023-04-08 13:21:28'),
(2, '1680971945.png', 'Marlena Moersdorf', 'Immigration Lawyer', 'marlena.moersdorf@zmvisalaw.com', '<p>Marlena is a licensed attorney with over 15 years of experience practicing immigration law.&nbsp; She is a partner at Zaidi and Moersdorf, LLP, in Morristown, NJ.&nbsp; The practice handles business, family, removal and litigation matters in the area of immigration law.</p><p>Marlena is licensed to practice law in the state of New Jersey and maintains membership with the American Immigration Lawyers Association and the New Jersey State Bar Association.&nbsp;</p><p>She received her J.D. degree from The George Washington University Law School. During her final year of law school, she served as a student attorney at the university\'s Jacob Burns Community Legal Clinic for immigration.</p><p>Marlena served as the Supervising Attorney for the Center for Citizenship and Legal Immigration, (a legal center at the nonprofit organization, Morris County Organization for Hispanic Affairs, located in Dover, NJ) for seven years, from 2014 until 2021.&nbsp;</p><p>Before joining MCOHA, Marlena was an associate at Arrufat Gracia PLLC where she directed the firm’s immigration practice for over four years. She handled business and family visa matters as well as removal matters.&nbsp;&nbsp;Prior to her work with Arrufat Gracia, PLLC, Marlena owned and operated a solo law practice in Rutherford, NJ.&nbsp; Her practice focused on family visas and removal matters. Her previous work experience also includes providing support at other law firms for business and family visas.</p>', 1, '2023-04-08 10:39:05', '2023-04-11 04:21:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_as`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$8xrd5c3RIgg1JvKxBCS/8OE2u4Zo8GnBbU84ObizD4P9JGFErCCii', 1, NULL, '2023-03-27 13:36:24', '2023-03-27 13:36:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `metatags`
--
ALTER TABLE `metatags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_slug_unique` (`slug`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `metatags`
--
ALTER TABLE `metatags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
