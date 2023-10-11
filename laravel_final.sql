-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Nov 2022 pada 05.40
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_final`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Coder', 'coder', '2022-07-16 07:02:55', '2022-07-16 07:02:55'),
(2, 'Design', 'design', '2022-07-16 07:02:55', '2022-07-16 07:02:55'),
(3, 'Business', 'Business', '2022-07-16 07:02:55', '2022-07-16 07:02:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_06_053417_create_posts_table', 1),
(6, '2022_07_07_044621_create_categories_table', 1),
(7, '2022_07_16_134439_add_is_admin_to_users_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `title`, `slug`, `image`, `excerpt`, `body`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'Possimus repellat quasi delectus asperiores ipsam ut.', 'sit-debitis-consequatur-adipisci-pariatur-tenetur-doloribus-molestiae', NULL, 'Est aliquid distinctio mollitia. Et consectetur autem magni. Quia in dicta et est. Voluptatibus vel voluptates ad sed quibusdam.', '<p>Consequatur qui velit unde in cumque quod eligendi enim. Nesciunt nam dignissimos dolorum fuga expedita eum consectetur. Maiores molestiae animi asperiores necessitatibus ipsa alias culpa tenetur. Ut a sit voluptas nihil reprehenderit autem.</p><p>At maxime distinctio neque assumenda laboriosam praesentium. Assumenda consequuntur quidem aut blanditiis aut saepe. Sint autem nemo quibusdam sed cumque magnam. Officia aut beatae ut nam voluptas mollitia facere.</p><p>Dolores consectetur debitis et magni accusantium itaque eligendi. Quo et quo non qui id aut nihil. Voluptate eos omnis cupiditate. Officia commodi sint corrupti occaecati qui omnis.</p><p>Et quae animi a praesentium tempora. Repellat vel aut ullam debitis in voluptatem ad. Ipsum molestiae consequuntur earum quibusdam temporibus ullam.</p><p>Culpa repellat eum ut incidunt. Pariatur commodi dolorum exercitationem et voluptatem laboriosam aliquid. Sed aliquid qui qui molestias.</p><p>Fugiat voluptatem rem earum reprehenderit et. Est nesciunt voluptatum et sit dolores iusto. Enim rem molestias eum consequatur ipsum modi ratione quisquam.</p><p>Eum fugiat incidunt blanditiis temporibus maiores. Rerum cupiditate incidunt sed error omnis temporibus est.</p><p>Cumque consequatur et qui esse consequatur. Nobis ut consectetur officia est sunt. Numquam et impedit omnis eius sint sequi dolor.</p>', NULL, '2022-07-16 07:02:55', '2022-07-16 07:02:55'),
(2, 1, 1, 'Nisi est tenetur totam et dolorem.', 'laboriosam-deleniti-unde-corporis-repellendus-omnis', NULL, 'Vel libero at omnis sit consequatur unde. Velit et qui ducimus beatae velit in. Quaerat unde vero ut a error. Labore quae quo et omnis soluta.', '<p>Quia dolor voluptatem repudiandae mollitia aut eius corrupti. Voluptatem alias ipsum sed dolor reiciendis illum. Est dolor veniam voluptatem quasi.</p><p>Veritatis accusantium dicta et delectus molestiae in dolorem. Dolores optio expedita odio explicabo. Aut sed eligendi repudiandae expedita dolor. Omnis placeat qui dolorem similique culpa nihil illo.</p><p>Mollitia culpa eius ut ut aut occaecati. Fugiat commodi quia libero dolorem perspiciatis placeat quis. Labore consequatur veniam ut dolorem quibusdam. Quidem autem reiciendis ad et voluptas quibusdam est.</p><p>Quo omnis est consequatur consequatur a. Saepe nihil excepturi tempore dignissimos vel. Est adipisci aut non odio voluptatum sequi voluptate. Consectetur quos delectus minima blanditiis et quidem.</p><p>Eveniet sequi voluptate sed quisquam eum doloribus facilis. Et consequatur consequatur aut alias vel exercitationem. Consequatur tempore laboriosam possimus tempore nihil. Et voluptate nisi quaerat repellendus sapiente vero.</p>', NULL, '2022-07-16 07:02:55', '2022-07-16 07:02:55'),
(3, 2, 3, 'Id qui.', 'asperiores-minima-non-pariatur-aut-et', NULL, 'Sequi est eligendi dolorem rerum voluptates. Dolores sequi delectus nam eligendi est vitae quis quidem. Cumque voluptas iure beatae repellat.', '<p>Ut aut et nulla et a dolorem consequatur. Provident et autem aut dolores.</p><p>Eum delectus inventore voluptas blanditiis consectetur amet odit. Quod aliquam cumque odit et explicabo. Aspernatur reiciendis voluptatibus earum quia quo repudiandae laborum. Eum voluptas fuga molestiae consequatur quia consequuntur.</p><p>Et nisi tempora quia aut asperiores. Est dolores consequatur quia. Ea vel repellat assumenda vitae et. Nulla sunt ad ut tempore eum vel voluptatem tenetur.</p><p>Molestias qui unde recusandae inventore quis. Doloremque et libero sequi unde sed praesentium eveniet.</p><p>Cum commodi id recusandae fugiat vel asperiores. Veritatis corrupti deserunt voluptatem mollitia magnam unde ut. Enim minima eaque accusamus eos. Fuga et laborum ea omnis. Voluptatem quam veniam dolores nulla qui asperiores.</p><p>Ad unde quasi quo quibusdam itaque velit quo. Eligendi iste libero laudantium nisi officiis consectetur. Perspiciatis commodi impedit eos praesentium id quis nemo.</p><p>Inventore aliquam veniam voluptas omnis et vel ab quo. Excepturi dignissimos doloribus id officiis qui. Et eos deserunt magni.</p><p>Autem explicabo laborum hic laborum occaecati molestiae est. Veritatis doloremque aliquid laboriosam qui consectetur tempore consectetur. Molestias eos repudiandae labore et natus incidunt. Et sunt culpa laborum et amet rerum quia.</p><p>Vitae qui cupiditate rerum modi aut sapiente quo. Blanditiis nulla asperiores repellat enim maxime qui eligendi incidunt. Ipsum distinctio deserunt et sed. Voluptatem eum cupiditate est labore consequatur repudiandae dolor aperiam.</p>', NULL, '2022-07-16 07:02:55', '2022-07-16 07:02:55'),
(4, 1, 3, 'Modi est ipsum.', 'debitis-voluptates-in-voluptatem-error-expedita-excepturi-magnam', NULL, 'Eveniet voluptatem quam nisi atque voluptatibus recusandae ducimus dolor. Quod ipsam sed maiores quo corporis. Sit sit possimus quisquam et aut quae assumenda.', '<p>Quibusdam molestiae veniam rem maiores et consequatur. Ratione vel vel optio culpa repellat. Iste natus id et beatae. Nulla sapiente eum ex saepe quae nobis labore.</p><p>Similique eligendi molestiae aut qui sint sit. Quas necessitatibus magnam sapiente est dolores ut magni. Nostrum voluptas animi error nihil consequatur alias. Aliquam atque esse at reprehenderit et ab dolorem.</p><p>Dolore est et aperiam magni. Tempora consequuntur voluptatem explicabo et nam quo nulla. Ipsa dolore qui et voluptas vero possimus maxime.</p><p>Dolor veniam qui et pariatur mollitia. Qui nihil natus et expedita aliquid aut quae debitis. Id voluptatem occaecati sint sit minima est voluptas voluptas. Blanditiis esse id sint placeat at praesentium debitis.</p><p>Et sit in enim et pariatur. Et repellendus eum rem et in ducimus et. Voluptatem vel cumque voluptatum quod assumenda temporibus.</p><p>Perspiciatis culpa maiores voluptas reprehenderit. Dolorem rerum reprehenderit exercitationem consequatur aut architecto reiciendis.</p>', NULL, '2022-07-16 07:02:55', '2022-07-16 07:02:55'),
(5, 2, 3, 'Ut nesciunt cumque est cum.', 'fugit-et-eius-similique', NULL, 'Reiciendis adipisci minima veniam laboriosam. Molestias rerum modi quas. Eos ab odit unde est consequuntur. Cum repellat et porro odit quae quas explicabo est.', '<p>Sint ea cum qui amet sapiente neque. Eum dolorum harum doloribus temporibus. Quaerat deserunt quia eum.</p><p>In alias alias fugiat beatae. Dolores exercitationem vero occaecati eum. Officia dolorum error eum quasi.</p><p>Dolorum amet sunt perferendis aut est. Illum esse distinctio soluta sequi enim fugit quas. Aperiam voluptas rerum aperiam vitae dolores ea.</p><p>Molestias consequatur eaque pariatur tenetur quo. Accusamus nisi officiis voluptas sit sunt dicta dolorem. Nam voluptatem deserunt accusamus. Quo commodi sit sunt impedit.</p><p>Adipisci voluptatem ut voluptate rerum voluptates. Neque illum quis in laboriosam modi. Cum quaerat inventore provident sequi quibusdam.</p>', NULL, '2022-07-16 07:02:55', '2022-07-16 07:02:55'),
(6, 2, 3, 'Qui nisi harum praesentium recusandae maiores.', 'et-vitae-delectus-non-consequatur-eos-et-voluptate', NULL, 'Non in eius iste eaque est nam laudantium dolore. Aliquam consequatur aut error nesciunt debitis temporibus. Repellat eius nostrum et vitae vero doloremque optio porro.', '<p>Qui omnis ut illum est quis rerum. Voluptates aut reiciendis minus. Et recusandae eum itaque corrupti dolor modi dicta.</p><p>Quia quod est rerum fuga qui. Consectetur consequatur velit temporibus blanditiis ut ipsum omnis. Doloribus ipsam consequuntur quia sequi nisi. Quo ea reiciendis ducimus minus animi in eum.</p><p>Odit hic iure nemo quaerat animi. Minus quae ea laboriosam reiciendis alias ut maiores.</p><p>Delectus magnam pariatur sit mollitia. Officiis necessitatibus voluptatem est et odit iste dolor. Animi et odio blanditiis eum quas. Dolore atque hic non eos rerum impedit temporibus.</p><p>Minus quod velit nobis ratione magni voluptate saepe. Minima necessitatibus est quos. Illo ut ad est saepe dolorem adipisci. Magni autem inventore est aspernatur nihil eligendi in.</p>', NULL, '2022-07-16 07:02:55', '2022-07-16 07:02:55'),
(7, 1, 3, 'Atque optio beatae.', 'voluptatum-fugit-rem-aut-repudiandae-modi', NULL, 'Consequuntur tenetur non hic aut. Ea vitae eos qui ad magni optio. Eaque vitae aut reiciendis id provident totam.', '<p>Quo aut vitae aut omnis sed doloribus. Quia molestiae veritatis necessitatibus dolor. Omnis autem qui adipisci nesciunt nihil occaecati eos.</p><p>Odio perferendis sit nulla. Sit reiciendis quidem vel veritatis minima libero. Deleniti et deserunt ea aliquid. Placeat adipisci modi explicabo dolorum omnis rerum iste officia.</p><p>Esse minima dolor nisi nulla optio natus. Excepturi ad nostrum hic vel voluptatem sint. Consectetur voluptates deserunt quis dolorum nihil nam odit. Sint vero blanditiis ipsam.</p><p>Nostrum molestiae voluptatibus sed necessitatibus. Totam qui ad et quasi et. Sunt qui cum qui.</p><p>Perspiciatis aut fuga placeat ullam ab dolores. Impedit sit provident rerum nam dolorum. Dolores aut et culpa et enim. Consequuntur et vel hic consequatur officiis pariatur perferendis id.</p><p>At voluptas sit aut eum rerum adipisci corporis. Provident cum architecto eaque accusantium commodi sed. Consequuntur molestiae repudiandae voluptas ad explicabo modi.</p><p>Dolorem ut excepturi tempora voluptatem voluptatibus molestiae vero. Deleniti omnis est quis ipsum. Dolore minima sed consectetur reprehenderit eligendi. Optio quia fugiat quia aut debitis qui.</p><p>Est eum explicabo sit itaque ut in. Officiis perferendis odit delectus. Magnam qui qui delectus ad assumenda ipsam sed vero. Non dolor quos repudiandae suscipit quasi modi eveniet.</p><p>Provident est dicta at nulla sed nam. Qui quo vitae aut vero porro. Quis libero labore aliquid inventore voluptate expedita. Corporis placeat sed aut tempora veritatis.</p><p>Consequuntur dignissimos sit voluptatem saepe facere qui voluptates. Aspernatur est quo tenetur cum voluptates consequatur asperiores. Cupiditate nobis cumque velit deserunt quia quia.</p>', NULL, '2022-07-16 07:02:55', '2022-07-16 07:02:55'),
(8, 2, 2, 'Officia voluptatem iusto in tempore consequatur.', 'sed-nesciunt-est-eos-voluptas-quia-eos-iusto', NULL, 'Eius hic ducimus ratione nesciunt assumenda. Cum qui rerum odio non doloribus voluptates ea illo. Est distinctio qui ut. Enim molestiae sequi dolore quia et.', '<p>Voluptatem minus consectetur quia sequi. Dolores pariatur amet perspiciatis aliquid voluptas soluta. Nemo vitae ex omnis sit. Quia animi similique laboriosam et amet unde.</p><p>Quasi cumque adipisci ea nesciunt doloribus incidunt beatae. Aut nam est ducimus nostrum quasi. Nostrum repellendus a non ex accusantium nesciunt. Mollitia quia voluptatum sed et.</p><p>Laborum nesciunt ut vel. Ex consectetur exercitationem ex quos. Id nam vel ex aliquid dolores possimus cumque.</p><p>Quia est quia omnis assumenda. Ea illo vel aut rerum. Id natus iure maxime impedit ab doloremque.</p><p>Sed ea vitae totam a aliquid neque. Dolores ducimus hic tenetur. Nihil et voluptatum dicta sed temporibus sed porro. Et incidunt illum aliquam sed.</p><p>Voluptatem eos perferendis omnis dignissimos. Omnis voluptas qui totam ratione ut non. Autem itaque iusto minus amet dolor aut at. Alias omnis maiores blanditiis nam rem similique nihil.</p><p>Aut sit iste amet quos autem rem. Explicabo occaecati cupiditate omnis est sint rerum beatae commodi. Enim vel ut magni. Aut beatae asperiores enim ea nobis.</p><p>Quas aperiam voluptatem reiciendis et similique numquam veniam. Est praesentium totam non velit et et occaecati. Ex labore commodi sunt atque rerum consectetur officia.</p>', NULL, '2022-07-16 07:02:55', '2022-07-16 07:02:55'),
(10, 2, 2, 'Excepturi aut molestiae qui tempore aut dignissimos iure est.', 'eum-libero-pariatur-sunt-commodi-itaque-molestiae-consectetur', NULL, 'Voluptas nemo sint est. Impedit veritatis rerum molestias nisi et. At sequi et quasi doloribus. Dolore aut deleniti dolorem neque cum.', '<p>Quia sit placeat culpa officiis vel. Occaecati dolor rem autem facilis exercitationem commodi. Voluptatem ipsam iusto modi minus non. Error soluta animi rerum quidem.</p><p>Error blanditiis architecto qui sint est ipsam voluptas rerum. Soluta voluptatum unde corporis sapiente in aut voluptas. Rerum eius sit nulla et enim.</p><p>Fuga et numquam qui eius maiores magnam distinctio illum. Autem quia et dolorum autem nostrum magni dicta. Et quo sint voluptas quae exercitationem autem nulla repellat. Enim voluptatibus minima assumenda.</p><p>Quasi maiores et hic mollitia distinctio quas dolor. Quod delectus natus error voluptate consequatur. Repellat error ea et dignissimos. Ex labore aut qui recusandae voluptatem iste.</p><p>Qui voluptas molestiae culpa corrupti beatae ad. Accusantium animi dolores sit. Dignissimos accusantium qui perspiciatis.</p>', NULL, '2022-07-16 07:02:55', '2022-07-16 07:02:55'),
(11, 2, 1, 'Possimus rem aspernatur autem nulla.', 'tempora-fugit-qui-recusandae-et-consequatur-ea-laudantium', NULL, 'Natus et rem vel quia. Est consequatur tempora placeat maiores consequatur ut qui. Neque molestiae odio magnam dolore alias.', '<p>Saepe eos quia hic quis. Aperiam at beatae exercitationem sit. Atque veniam laboriosam repudiandae minus. Eius commodi quia ut voluptatem aut. Quia voluptatibus autem minus.</p><p>Est voluptatem et nobis ea voluptatem. Animi necessitatibus ipsum recusandae pariatur. Et maiores fugit nisi fugiat ut.</p><p>Corrupti labore est quod non laboriosam itaque esse. Optio temporibus nulla adipisci laborum quo. Neque qui consectetur nesciunt omnis. Ut eum et voluptatibus sint.</p><p>Qui blanditiis hic qui cupiditate odio voluptatum. Explicabo quae sit qui itaque. Qui esse quidem id velit repellendus sed incidunt.</p><p>Deserunt voluptatem rem impedit. Pariatur sit dolorem temporibus officia eaque. Dolorem sint aperiam adipisci qui tenetur dicta. Voluptatibus corrupti porro repellendus deserunt voluptatem a.</p>', NULL, '2022-07-16 07:02:55', '2022-07-16 07:02:55'),
(12, 2, 1, 'Adipisci ut odio.', 'quia-et-quis-suscipit-laborum-temporibus-ratione-aliquid-delectus', NULL, 'Quasi tempora quam consequatur eligendi eveniet nemo sed. Officia quaerat ex exercitationem tenetur corporis. Impedit saepe consectetur quasi error ut fuga.', '<p>Eos alias velit totam beatae. Sequi illo architecto quam fugit sit quo repudiandae.</p><p>Animi et doloribus tempora voluptas ipsa atque. Repellat cupiditate cumque eos eius. Qui culpa fugit voluptas at.</p><p>In nam provident et cupiditate sunt eum. Et nam sint minima. Eos aut nostrum cupiditate natus cum amet facere.</p><p>Inventore omnis totam voluptatum sit et. Quis adipisci magni harum quam similique sint.</p><p>Dolore id ut soluta voluptatum non ullam omnis. Nulla qui magnam magni quis et doloremque. Fugit rem at architecto excepturi maxime quia vero.</p><p>Aspernatur qui nihil iste consequatur dolor accusamus ut. Provident voluptas officiis adipisci placeat aperiam deleniti totam. Quae suscipit dolorem et culpa blanditiis laudantium tempora molestiae. Non velit est quis occaecati ipsum.</p><p>Alias consequatur sit non qui. Architecto fuga aliquid veritatis quia incidunt qui expedita. Iste eaque rerum doloremque nisi ipsam rem est. Voluptas animi corrupti nemo suscipit aut perferendis.</p><p>Voluptatibus quia est quia veniam sunt voluptate. Maiores unde earum animi. Qui et repudiandae voluptas voluptatem id. Odio quis doloribus ullam repudiandae.</p><p>Ad commodi sit nostrum quaerat. Et voluptatum fuga sit voluptatem.</p><p>Expedita nam quis quia dolorum voluptatem error. Voluptatem omnis id distinctio atque architecto est. Officia ab tempora aliquam enim. Quia praesentium molestias provident enim.</p>', NULL, '2022-07-16 07:02:55', '2022-07-16 07:02:55'),
(13, 1, 2, 'Ipsum earum molestias.', 'accusamus-et-beatae-iusto-voluptas-nostrum-molestiae-est', NULL, 'Sequi ducimus beatae qui. Quas et deleniti in similique. Ex ipsam itaque aliquam tempore. Sint sunt cupiditate quia facere animi alias sequi.', '<p>Expedita et eos eos temporibus magni a quia. Quasi dolorem error deleniti impedit. Consequatur dolore ab quos.</p><p>Labore id voluptas asperiores voluptates qui quas qui. Molestiae quia dolores vero voluptatem ut earum. Provident quae accusamus qui fugit nihil officiis nulla quia.</p><p>Accusamus quo dolorum dolorem. Commodi delectus ut dolor quia aut quod voluptatem. Alias omnis velit beatae aperiam eum sunt animi et.</p><p>Et ut ea voluptatem ullam distinctio ratione harum cupiditate. Sed aut velit natus sunt est nesciunt dolorem dolorem. Voluptas delectus quo maxime qui error molestiae aliquid.</p><p>Accusamus magni eum harum rerum. Sed aut tempore doloribus. Doloremque sint eaque optio quia. Modi accusantium tenetur est facilis aut hic quia. Repellendus velit dolores autem ut dolorum blanditiis officiis.</p><p>Illum ut nesciunt nihil sed autem dolor sed. Ut quidem repellendus excepturi. Ad provident dolorem similique.</p><p>Corporis quia quas aut non sed voluptatem. Ad eligendi atque dolor officiis labore perspiciatis.</p>', NULL, '2022-07-16 07:02:55', '2022-07-16 07:02:55'),
(14, 2, 1, 'Ad voluptas incidunt ut quibusdam sunt.', 'repudiandae-quos-ut-facere-et-natus', NULL, 'Ut eos nobis earum non doloremque et est. Tenetur exercitationem qui vel laudantium non voluptatem qui.', '<p>Enim temporibus eos sint accusantium nihil optio. Facere commodi voluptas quas at quia officia omnis. Dolor sed doloremque qui fugiat.</p><p>Eum assumenda dolore nihil. Aspernatur voluptatibus occaecati ipsum sed ea beatae fugiat. Voluptatem sunt commodi asperiores qui qui quidem dolorum. Reiciendis est fuga voluptatem.</p><p>Aut tempore aperiam maiores. Et quaerat eos est eaque ut. Temporibus libero totam recusandae.</p><p>Quibusdam numquam aperiam corrupti pariatur commodi non. Dolorem et accusantium at sapiente fuga. Voluptatem expedita omnis id excepturi voluptas.</p><p>Nesciunt aperiam voluptas nulla animi. Quos id commodi id quis officiis. Illo beatae fugit quisquam voluptate recusandae in modi. Atque aut qui aut odit saepe molestiae et.</p><p>Ea voluptatibus quo aut nam atque saepe laboriosam consequatur. Possimus at eos quaerat repellendus vel et ut. Voluptatum officiis voluptatem atque dicta laborum.</p><p>Quos vel omnis labore velit est ex voluptatem. Eum dolores pariatur vitae. Debitis sint consequatur reprehenderit et quod dignissimos omnis.</p>', NULL, '2022-07-16 07:02:55', '2022-07-16 07:02:55'),
(15, 1, 1, 'Ipsam quos dolore quis ad a eos modi.', 'quidem-beatae-numquam-quos-sunt-laudantium', NULL, 'Deserunt reprehenderit optio error assumenda quos excepturi. Nemo nihil sed voluptatibus dolores sit non. Veniam optio dolore corrupti natus blanditiis. Temporibus ipsum pariatur suscipit assumenda commodi incidunt.', '<p>Qui accusantium nobis dolores iste at. Odio unde ad aut est dolorem dolor deserunt. Aut consequatur nobis deleniti.</p><p>Corrupti architecto saepe enim ex quia. Amet qui et consequatur et. Doloremque aspernatur et voluptatibus cupiditate. Dolorem reiciendis voluptatibus eaque ipsa.</p><p>Impedit assumenda voluptatem rem porro autem provident. In expedita consequatur adipisci inventore qui. Numquam quia a et quisquam sapiente cumque molestias.</p><p>Sequi adipisci doloremque consectetur facilis debitis rerum voluptatibus. Sunt sequi et et. Et ea quibusdam fugit nesciunt aut.</p><p>Maiores perspiciatis tempore blanditiis et facere. Ipsa molestias soluta sint est modi ea. Pariatur est laborum dicta porro ut.</p>', NULL, '2022-07-16 07:02:55', '2022-07-16 07:02:55'),
(16, 2, 2, 'Consectetur dignissimos omnis adipisci rem.', 'nisi-delectus-fuga-reiciendis-accusantium-eius-deleniti', NULL, 'Nulla possimus consequuntur at nisi. Iusto repellat non aut ut aliquid quos. Maiores officia saepe itaque repellat rerum hic eos.', '<p>Laudantium animi ea recusandae iusto iure eaque necessitatibus. Laboriosam ipsa reiciendis temporibus et quisquam dolor aut. Maiores non repudiandae eos quod aliquid voluptatem.</p><p>Voluptatem nobis adipisci dolorem eligendi rerum ea voluptatem. Fuga enim eligendi fuga ut quia modi quidem. Sed minus et consequatur ad soluta aliquam vel.</p><p>Possimus est accusantium sunt. Alias reiciendis fuga et in adipisci laboriosam. Nisi sit occaecati rerum ipsum alias animi.</p><p>Quidem architecto reprehenderit aliquid veniam id et totam. Facere molestias repellat alias quibusdam quia. Sit doloribus temporibus dolores assumenda sit.</p><p>Sunt at vero labore voluptatem alias. Expedita ipsum repudiandae perferendis necessitatibus repudiandae. Numquam consequatur voluptates voluptatum est non dolore sed. Consequatur autem velit quibusdam libero architecto sit. Natus quo cumque nobis voluptate quasi quo sit.</p><p>Ut unde expedita molestias voluptas ut maiores. Explicabo vel qui aperiam exercitationem dignissimos.</p><p>Repellendus ab vitae sit sed inventore praesentium facilis repellendus. Id ut quos beatae eos aspernatur facere. Libero aut ab laudantium tempora cupiditate autem quidem. Est officiis aspernatur voluptatem exercitationem et.</p>', NULL, '2022-07-16 07:02:55', '2022-07-16 07:02:55'),
(17, 1, 2, 'Aut quis non dolores.', 'quia-fuga-quo-quia-culpa-quia-vero', NULL, 'Fuga nemo enim aut non aliquam. Et repudiandae mollitia non odio quisquam. Modi in aut laboriosam sint nisi voluptas.', '<p>Earum dolores ut alias sit sint laborum quod quia. Molestiae consequatur autem debitis doloribus distinctio illum. Modi unde rerum unde quas alias sint beatae. Aut quo ut voluptates sed exercitationem qui.</p><p>Laudantium quae sit eligendi magnam labore ut aliquid. Soluta est quia amet qui repudiandae est qui. Iusto sed magni est ut nisi nihil. Quos dolorum voluptatum velit ab a nulla quos.</p><p>Dolor aperiam quisquam deserunt voluptate fugiat rerum. Placeat accusamus corporis voluptas. Illum et laboriosam sit consectetur commodi.</p><p>Repellendus in mollitia ea recusandae. Consectetur pariatur eos quia odio suscipit eum velit. Molestiae quis minima voluptatibus nihil dicta non quis. Et reiciendis qui nihil illum sint vel unde. Laudantium dolor voluptatem eveniet at.</p><p>Quibusdam blanditiis at autem. Dolorem laudantium vitae blanditiis sit qui dolore nulla. Aut sed qui quia rerum sunt. Rerum esse ut quam quasi pariatur magnam quam.</p><p>Architecto delectus est deleniti iusto voluptatem cupiditate earum consequatur. Numquam et odit quam voluptatem earum doloremque praesentium. Et et facilis eligendi minus. Voluptate assumenda sed similique possimus deleniti temporibus quisquam blanditiis.</p>', NULL, '2022-07-16 07:02:55', '2022-07-16 07:02:55'),
(18, 2, 3, 'Ad esse voluptate.', 'aut-ut-architecto-et-quis-sapiente', NULL, 'Impedit velit maxime voluptatem ut ipsa magnam. Omnis vitae libero et consequatur nisi nihil incidunt. Accusantium iusto cum vitae sit est adipisci.', '<p>Voluptas vel aut velit voluptatem sit ullam. Error nostrum odio reiciendis cum sunt.</p><p>Fuga et voluptatem animi harum sed. In voluptatem consectetur officiis dolore. Excepturi ea incidunt quam esse fuga ratione deserunt et. Blanditiis nisi et id aut.</p><p>Et magnam est recusandae sint mollitia repellendus quia accusantium. Amet rerum consequatur doloribus. Minima accusantium enim nobis iure.</p><p>Sit omnis excepturi aut expedita quis. Dolores fugit iste totam ab temporibus ducimus. Aut modi aut beatae aperiam qui sequi.</p><p>Et tempora consequatur id vero. Temporibus nesciunt non harum non voluptas molestias aliquid. Aperiam tenetur aspernatur enim ad maxime.</p><p>Sit similique sed iusto iusto et. Possimus tenetur tenetur quia maxime autem. Aperiam sint et minima dignissimos. Nisi sequi et quos ullam deleniti harum.</p><p>Et molestias totam voluptatem culpa eligendi ipsam. Quos corrupti dolorum earum corporis impedit dolores. Voluptatem voluptas modi reprehenderit occaecati qui quos voluptatibus aliquam. Quo quo fuga similique aut tenetur quia aspernatur.</p>', NULL, '2022-07-16 07:02:55', '2022-07-16 07:02:55'),
(19, 1, 2, 'At ab temporibus reprehenderit et sint atque est.', 'magni-consequatur-corrupti-veniam-iste-occaecati', NULL, 'Aperiam est magnam officiis blanditiis saepe sit beatae. Et fugit sunt sit a nostrum non. Libero et earum quo aut in facere reprehenderit. Consequatur velit velit suscipit rerum facere officiis.', '<p>Fuga voluptatum non blanditiis rerum ut ut earum. Sit nisi nostrum dolor doloribus enim. Laboriosam consequatur mollitia voluptas error ut quis numquam.</p><p>Est quibusdam assumenda similique aut perferendis unde possimus dolores. Nemo dolores quia quo. Aut cumque officia tempore.</p><p>Praesentium sed voluptatem itaque rem qui facilis. Officiis incidunt qui cumque fugit accusantium. Et delectus illum rerum.</p><p>Sit provident ut est maiores ut tempore aliquid in. Qui beatae omnis voluptatem. Commodi mollitia alias in placeat harum. Esse cumque rem modi et.</p><p>Exercitationem suscipit iste sint labore laudantium sed non officia. Dolor molestiae et fugit quia. Ut cum ab odio ut architecto.</p>', NULL, '2022-07-16 07:02:55', '2022-07-16 07:02:55'),
(20, 2, 2, 'Natus doloribus odit omnis accusantium ut sint.', 'adipisci-dicta-ex-assumenda-et-reprehenderit-illo', NULL, 'Debitis cupiditate et voluptatem modi rerum dolorem impedit veniam. Voluptates harum cumque qui aut adipisci aut. Dicta provident veniam in quia nam natus. Maiores aspernatur aspernatur perspiciatis odio expedita molestiae.', '<p>Quam dicta odit maxime error consequatur dolor. Qui ipsam eum provident rerum. Blanditiis in quidem tenetur sit dolores. Voluptatem architecto et est incidunt.</p><p>Sed quo porro rem maiores vero quae. Maxime praesentium delectus unde consequatur sunt consequatur consequatur. Qui rerum et aperiam sed aut.</p><p>Molestiae aliquid quia fugiat sapiente. Vero eaque qui ipsam perspiciatis. Eum incidunt officiis alias esse deleniti. Eos reiciendis blanditiis dolorem vitae.</p><p>Voluptas impedit harum ad. Tempora sed ad consequatur fugit et ad. Odio impedit labore cum debitis. Laborum nam velit numquam enim.</p><p>Et et expedita voluptate est repellendus et. Fugit dolorem neque error explicabo. Aperiam ut rem perspiciatis maxime nobis quo sed. Eligendi fuga qui consequatur temporibus molestiae voluptatem.</p><p>Laboriosam hic est maxime sit sunt. Ut ipsa quidem non maxime deserunt non. Ducimus rerum officia esse molestiae porro sequi. Nihil itaque quae quis quam vitae.</p>', NULL, '2022-07-16 07:02:55', '2022-07-16 07:02:55'),
(23, 2, 2, 'Assumenda et consequatur provident saepe modi et doloribus excepturi.', 'perspiciatis-fugiat-et-vel-vel-commodi-unde-alias', NULL, 'Error nisi libero magni voluptas consequatur commodi. Dicta enim minima ipsa unde. Velit tempore ab ut.', '<p>Ducimus dolore rem eaque et voluptates consequatur. Distinctio sequi delectus libero delectus recusandae voluptatibus aperiam. Quos quis ipsum et alias.</p><p>Non in qui non iste debitis sunt. Est reprehenderit et quas fugiat est et. Qui architecto distinctio ad sit nisi quis placeat.</p><p>Quibusdam eaque placeat quia totam aliquid. Sunt est qui delectus sed inventore. Ab voluptatem voluptate omnis veritatis aut sequi suscipit. Voluptatem enim et ut voluptas dolorem a.</p><p>Dignissimos voluptatum laborum et asperiores et atque. Culpa numquam commodi aspernatur iusto maxime. Dolores quisquam doloremque soluta recusandae dolorem. Quia debitis similique aut hic eum qui autem eos.</p><p>Repudiandae necessitatibus nulla blanditiis et numquam incidunt. Doloribus facilis rem qui amet aliquid. Quae est deserunt temporibus ad quidem at nihil.</p><p>Sit expedita dicta dolorum cum expedita laudantium. Non accusantium qui quas voluptas. Dolore dolores voluptatem consequatur praesentium consequatur.</p><p>Sequi eius qui omnis dolores alias veniam aut. Pariatur rerum dolor illo dolores cum. Et minima a non voluptates sed quae tenetur. In qui libero sint rerum distinctio.</p>', NULL, '2022-07-16 07:02:55', '2022-07-16 07:02:55'),
(24, 2, 3, 'Aut provident officiis quas est deleniti.', 'qui-culpa-natus-non-quia-impedit', NULL, 'Velit numquam ut velit accusantium sed aut. Omnis nemo itaque consequatur nihil aut. Ut velit consequatur voluptatibus.', '<p>Officiis id praesentium qui laudantium deserunt et placeat. Enim temporibus iste modi id omnis molestias voluptatem. Nobis quasi a quos consequatur.</p><p>Officia repellat minus doloremque qui qui ut voluptatum. Id dolorem maiores labore velit ipsam neque.</p><p>Eos quia fugiat nobis laboriosam id sed reiciendis. Provident officia non eos veritatis necessitatibus et explicabo. Delectus vero enim quia eligendi nemo est reiciendis aut.</p><p>Hic et eos fuga voluptatem temporibus suscipit. Placeat eos qui dolor quos. Rerum at autem veniam nihil beatae.</p><p>Eius sint est rerum ut et sed similique. Quam accusamus esse nam eos iste aut.</p><p>Placeat omnis autem et sunt. Iste est qui consequuntur quaerat repellendus temporibus libero architecto. Id quibusdam consequuntur vel. Debitis voluptatem accusantium praesentium in. Eos assumenda amet quis eaque quo alias nobis porro.</p><p>Sequi veniam id ea recusandae optio nesciunt. Est quaerat est qui est vel ut. Voluptatem reiciendis id soluta suscipit. Reiciendis assumenda et doloremque deleniti officia.</p><p>Omnis quibusdam sint rerum velit impedit consequatur. Quidem dolorum porro dolorem doloribus distinctio dolorum perferendis molestiae. Neque ducimus nobis et similique minus.</p>', NULL, '2022-07-16 07:02:55', '2022-07-16 07:02:55'),
(25, 2, 1, 'Dicta vel eum at quo magnam sequi exercitationem dicta.', 'unde-quos-omnis-quod-voluptatem-in-et-ratione-et', NULL, 'Ut hic sed fuga recusandae aperiam iure id. Et et voluptas sit blanditiis blanditiis officia dolores.', '<p>Fugit et nesciunt omnis aperiam. Sed ullam doloremque in eum labore omnis. Et et hic architecto cum. Eligendi illum quaerat esse nesciunt fugit hic.</p><p>Facere quos a sint aut ullam omnis est. Voluptas id numquam non mollitia sapiente. Odit similique quibusdam aut labore est ex. Non consequuntur quia sint ut laudantium.</p><p>Ad ut provident molestias est vitae deleniti sed. Eos corrupti et totam voluptas at. Quisquam cumque accusamus nisi magnam quasi laudantium.</p><p>Magnam et at tempore natus sed sit. Necessitatibus qui dolore impedit in atque. Rerum voluptatem illum consequatur sed consectetur.</p><p>In officiis corporis deleniti est omnis. Delectus et non doloribus incidunt alias eum.</p><p>Voluptate occaecati quis et cupiditate amet quo sapiente. Ut tenetur ratione unde quibusdam error. Autem est ut incidunt aliquam. Fugiat ipsa excepturi corporis consequatur vel nobis totam.</p><p>Dolor fugit eius maxime deleniti labore recusandae architecto vitae. Dolorem ullam dolor ex amet odit quaerat earum. Similique quisquam recusandae exercitationem sed.</p><p>Aut dolorem nesciunt eveniet rerum qui cupiditate. Totam sint ut id omnis.</p><p>Tempora dolorem vero doloremque quam nisi. Est quod ut adipisci aut sed nemo laudantium. Ut quibusdam rerum perspiciatis nesciunt et et qui. Nisi mollitia voluptas voluptas nisi.</p>', NULL, '2022-07-16 07:02:55', '2022-07-16 07:02:55'),
(27, 3, 3, 'Pengusaha Muda', 'pengusaha-muda', 'post-images/j8j4YMLMpffwc9cAouJE30cioGQUDhQprCwGs8om.jpg', 'Untuk bisa mencapai kesuksesan seperti sekarang, para pengusaha muda di Indonesia ini memiliki latar belakang ceritanya masing-masing. Berikut profil dan biografi 10 pengusaha muda sukses di Indonesia...', '<div>Untuk bisa mencapai kesuksesan seperti sekarang, para pengusaha muda di Indonesia ini memiliki latar belakang ceritanya masing-masing. Berikut profil dan biografi 10 pengusaha muda sukses di Indonesia yang bisa jadi inspirasi kita semua.</div><div><strong>1. James Prananto (Kopi Kenangan)</strong></div><div><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:375,&quot;url&quot;:&quot;https://www.alphajwc.com/wp-content/uploads/2020/07/home_company_portfolio_Kopi-Kenangan.png&quot;,&quot;width&quot;:600}\" data-trix-content-type=\"image\" class=\"attachment attachment--preview\"><img src=\"https://www.alphajwc.com/wp-content/uploads/2020/07/home_company_portfolio_Kopi-Kenangan.png\" width=\"600\" height=\"375\"><figcaption class=\"attachment__caption\"></figcaption></figure><br>James Prananto (Kopi Kenangan)</div><div>James Prananto bersama dua rekannya, Cynthia Chaerunnisa dan Edward Tirtanata, merupakan wirausahawan asal Indonesia yang sukses membangun usaha kopi susu kekinian bernama Kopi Kenangan. Ketiga pengusaha muda yang menginspirasi ini membuka usaha Kopi Kenangan untuk pertama kali pada tahun 2017 di Menara Standard Chartered, Jakarta Selatan.</div><div>Memiliki cita rasa kopi susu yang segar dan nikmat, nama Kopi Kenangan mulai dikenal dan digemari para pecinta kopi. Hingga kini, Kopi Kenangan telah memiliki puluhan gerai kopi yang tersebar di berbagai kota di Indonesia.&nbsp;</div><div>Perusahaan milik pengusaha muda Indonesia ini bahkan mendapat suntikan dana dari beberapa<a href=\"https://www.alphajwc.com/id/\"> investor startup</a> besar. Salah satunya dari Arrive, platform pencarian dana yang dikelola oleh Roc Nation, perusahaan milik Jay Z.</div><div><strong>Baca Juga: </strong><a href=\"https://www.alphajwc.com/id/pentingnya-inkubator-bisnis-bagi-pengusaha-tahap-awal/\"><strong>Apa Itu Inkubator Bisnis? Yuk, Kenali Cara Kerjanya</strong></a><strong><br></strong><br></div><div><strong>2. Anderson Sumarli (Ajaib)</strong></div><div><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:563,&quot;url&quot;:&quot;https://www.alphajwc.com/wp-content/uploads/2022/01/anderson-ajaib-founder.webp&quot;,&quot;width&quot;:1000}\" data-trix-content-type=\"image\" class=\"attachment attachment--preview\"><img src=\"https://www.alphajwc.com/wp-content/uploads/2022/01/anderson-ajaib-founder.webp\" width=\"1000\" height=\"563\"><figcaption class=\"attachment__caption\"></figcaption></figure></div><div>Anderson Sumarli (Ajaib). (Sumber: Prestigeonline)</div><div>Sosok pengusaha muda Indonesia berikutnya adalah Anderson Sumarli, Co-Founder dan CEO dari Ajaib Group yang mengembangkan aplikasi investasi Ajaib.</div><div>Berdiri sejak 2018, perusahaan yang dipimpin Anderson kini telah menjadi startup unicorn ke-7 di Indonesia usai mendapatkan pendanaan seri B senilai 153 juta dolar AS atau sekitar Rp2,2 Triliun. Pendanaan tersebut dipimpin oleh DST Global bersama investor terdahulu Ajaib, salah satunya Alpha JWC Ventures.</div><div>Dalam kiprahnya sebagai investor dan pengusaha muda yang sukses, Anderson sendiri dinobatkan masuk ke dalam Forbes 30 Under 30 pada tahun 2020 karena kontribusi perusahaannya dalam meningkatkan jumlah investor ritel di indonesia.</div><div><strong>Baca Juga: </strong><a href=\"https://www.alphajwc.com/id/5-investor-dan-entrepreneur-wanita-terkemuka-di-indonesia/\"><strong>5 Investor dan Entrepreneur Wanita Terkemuka di Indonesia</strong></a></div><div><strong>3. Martin Reyhan Suryohusodo (Otoklix)</strong></div><div><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:350,&quot;url&quot;:&quot;https://www.alphajwc.com/wp-content/uploads/2022/01/Martin-Reyhan-Suryohusodo.jpg&quot;,&quot;width&quot;:525}\" data-trix-content-type=\"image\" class=\"attachment attachment--preview\"><img src=\"https://www.alphajwc.com/wp-content/uploads/2022/01/Martin-Reyhan-Suryohusodo.jpg\" width=\"525\" height=\"350\"><figcaption class=\"attachment__caption\"></figcaption></figure><br>Martin Reyhan Suryohusodo (Sumber: Sekolah Ciputra)</div><div>Selanjutnya adalah Martin Reyhan Suryohusodo, entrepreneur muda Indonesia yang dinobatkan untuk masuk ke dalam daftar Forbes 30 Under 30 Asia tahun 2021 pada kategori industri, manufaktur, dan energi.</div><div>Title tersebut ia dapatkan berkat usahanya menghubungkan pemilik kendaraan dengan bengkel melalui aplikasi bernama Otoklix. Aplikasi yang dibangun pada 2019 tersebut kini telah menjadi pemain penting dalam pasar reparasi mobil di Indonesia.</div><div><strong>Baca Juga:</strong><a href=\"https://www.alphajwc.com/id/pengertian-etika-bisnis/\">&nbsp;<strong>Etika Bisnis: Pengertian, Manfaat, dan Contohnya</strong></a></div><div><strong>4.&nbsp; Amanda Cole (Sayurbox)</strong></div><div><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:597,&quot;url&quot;:&quot;https://www.alphajwc.com/wp-content/uploads/2022/01/Amanda-Cole-1024x597.jpeg&quot;,&quot;width&quot;:1024}\" data-trix-content-type=\"image\" class=\"attachment attachment--preview\"><img src=\"https://www.alphajwc.com/wp-content/uploads/2022/01/Amanda-Cole-1024x597.jpeg\" width=\"1024\" height=\"597\"><figcaption class=\"attachment__caption\"></figcaption></figure><br>Amanda Cole (Sumber: Project with Us)</div><div>Melanjutkan daftar pebisnis muda sukses di Indonesia, ada Amanda Cole, yang masuk ke dalam Forbes 30 Under 30 kategori Industry, Manufacturing &amp; Energy di tahun 2019. Ia dikenal karena mendirikan startup Sayurbox pada 2016 silam.</div><div>Berangkat dari niat memberi akses pasar bagi petani lokal Indonesia, startup milik pengusaha muda Indonesia ini telah mendapatkan pendanaan seri C senilai 120 juta Dolar AS atau setara&nbsp; Rp1,7 triliun dari Northstar dan Alpha JWC Ventures.</div><div><strong>Baca Juga:</strong><a href=\"https://www.alphajwc.com/id/25-perusahaan-venture-capital-angel-investor-terbaik-di-singapura-2021/\">&nbsp;<strong>Perusahaan Venture Capital &amp; Angel Investor Terbaik di Singapura</strong></a><strong><br></strong><br></div><div><strong>5. Steven Wongsoredjo (Super)</strong></div><div><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:498,&quot;url&quot;:&quot;https://www.alphajwc.com/wp-content/uploads/2020/02/Steven-Wongsoredjo-Nusantara-Technology-7-1024x498.jpg&quot;,&quot;width&quot;:1024}\" data-trix-content-type=\"image\" class=\"attachment attachment--preview\"><img src=\"https://www.alphajwc.com/wp-content/uploads/2020/02/Steven-Wongsoredjo-Nusantara-Technology-7-1024x498.jpg\" width=\"1024\" height=\"498\"><figcaption class=\"attachment__caption\"></figcaption></figure><br>Steven Wongsoredjo (Sumber: Alpha JWC)</div><div>Steven Wongsoredjo merupakan wirausahawan muda Indonesia sekaligus pendiri Super, sebuah platform aplikasi untuk agen penyalur barang kebutuhan warung dan toko.</div><div>Aplikasi ini membantu pengusaha-pengusaha kecil untuk menjadi agen dan memesan barang dengan harga yang jauh lebih murah. Pebisnis muda Indonesia yang merupakan lulusan dari University of Columbia, Amerika Serikat ini juga masuk ke dalam Forbes 30 Under 30.</div><div><strong>Baca Juga:</strong><a href=\"https://www.alphajwc.com/id/pertumbuhan-ekonomi-digital-indonesia-menjadi-yang-paling-pesat-di-asean-2/\">&nbsp;<strong>Pertumbuhan Ekonomi Digital Indonesia Menjadi yang Paling Pesat di ASEAN</strong></a></div><div><strong>6. Abraham Viktor (Hangry)</strong></div><div><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:900,&quot;url&quot;:&quot;https://www.alphajwc.com/wp-content/uploads/2022/01/abraham-viktor-2-720x900-1.webp&quot;,&quot;width&quot;:720}\" data-trix-content-type=\"image\" class=\"attachment attachment--preview\"><img src=\"https://www.alphajwc.com/wp-content/uploads/2022/01/abraham-viktor-2-720x900-1.webp\" width=\"720\" height=\"900\"><figcaption class=\"attachment__caption\"></figcaption></figure><br>Abraham Viktor (Sumber: Prestige Hong Kong)</div><div>Tokoh pengusaha muda indonesia berikutnya adalah Abraham Viktor, CEO PT Modular Kuliner Indonesia (Hangry). Hangry merupakan perusahaan startup kuliner multibrand pertama di Indonesia.</div><div>Kepiawaian Abraham sebagai pengusaha muda Indonesia yang sukses terlihat dari caranya mengembangkan bisnis Hangry di masa pandemi COVID-19. Di saat banyak perusahaan kuliner yang goyang selama pandemi, Hangry justru mampu mencetak penjualan hingga belasan ribu per hari dan menambah outlet.&nbsp;</div><div><strong>7. Randy Kartadinata (Mangkokku)</strong></div><div><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:576,&quot;url&quot;:&quot;https://www.alphajwc.com/wp-content/uploads/2022/01/Randy-Kartadinata-1024x576.jpg&quot;,&quot;width&quot;:1024}\" data-trix-content-type=\"image\" class=\"attachment attachment--preview\"><img src=\"https://www.alphajwc.com/wp-content/uploads/2022/01/Randy-Kartadinata-1024x576.jpg\" width=\"1024\" height=\"576\"><figcaption class=\"attachment__caption\"></figcaption></figure><br>Randy Kartadinata (Sumber: KrAsia)</div><div>Randy Kartadinata mengisi daftar pengusaha muda sukses di Indonesia selanjutnya. Bersama Chef Arnold Poernomo, Kaesang Pangarep, dan Gibran Rakabuming, ia mendirikan startup kuliner bernama Mangkokku.</div><div>Sejak 2020, Mangkokku telah mendirikan 50 cabang yang tersebar di berbagai kota besar di Indonesia, seperti Jabodetabek, Bandung, Surabaya, Semarang, Malang, dan Solo.</div><div>Kemudian, pada 2022, perusahaan yang didirikan paara entrepreneur muda ini mendapat suntikan dana sebesar 7 juta Dolar AS atau setara Rp101 miliar dari Alpha JWC Ventures dan EMTEK, dengan partisipasi dari Cakra Ventures.</div><div><strong>Baca Juga:</strong><a href=\"https://www.alphajwc.com/id/tahapan-pendanaan-startup-dijelaskan-dari-awal-hingga-ipo/\">&nbsp;<strong>Tahapan Pendanaan Startup: Dijelaskan dari Awal hingga IPO</strong></a><strong><br></strong><br></div><div><strong>8. Indra Gunawan (Bobobox)</strong></div><div><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:647,&quot;url&quot;:&quot;https://www.alphajwc.com/wp-content/uploads/2022/01/Indra-Gunawan.jpg&quot;,&quot;width&quot;:834}\" data-trix-content-type=\"image\" class=\"attachment attachment--preview\"><img src=\"https://www.alphajwc.com/wp-content/uploads/2022/01/Indra-Gunawan.jpg\" width=\"834\" height=\"647\"><figcaption class=\"attachment__caption\"></figcaption></figure><br>Indra Gunawan (Sumber: Pikiran Rakyat)</div><div>Anda yang hobi travelling atau sekadar mencari penginapan untuk singgah sementara pasti tahu Bobobox, jaringan hotel kapsul yang tersebar di berbagai kota di Indonesia.</div><div>Di balik berkembangnya bisnis Bobobox sejak 2018, ada sosok pengusaha muda Indonesia bernama Indra Gunawan. Dengan keahliannya dalam berbisnis, Bobobox mendapatkan pendanaan Seri A senilai 11.5 juta Dolar AS yang dipimpin oleh Horizons Ventures dan Alpha JWC Ventures pada 2020 dan kini telah memiliki belasan cabang.</div><div><strong>Baca Juga:</strong><a href=\"https://www.alphajwc.com/id/10-perusahaan-venture-capital-terbaik-pada-tahun-2021-untuk-startup-teknologi/\">&nbsp;<strong>Daftar Venture Capital Terbaik Yang Invest Ratusan Juta Dollar untuk Startup Teknologi</strong></a></div><div><strong>9. Shinta Nurfauzia (Lemonilo)</strong></div><div><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:300,&quot;url&quot;:&quot;https://www.alphajwc.com/wp-content/uploads/2018/05/Lemonilo-Shinta-bw.jpg&quot;,&quot;width&quot;:300}\" data-trix-content-type=\"image\" class=\"attachment attachment--preview\"><img src=\"https://www.alphajwc.com/wp-content/uploads/2018/05/Lemonilo-Shinta-bw.jpg\" width=\"300\" height=\"300\"><figcaption class=\"attachment__caption\"></figcaption></figure><br>Shinta Nurfauzia</div><div>Meski menempuh pendidikan dasar di bidang hukum, Shinta Nurfauzia justru berhasil menjadi salah satu entrepreneur muda Indonesia yang sukses.</div><div>Bersama dua temannya, Shinta mendirikan startup pengembang produk makanan sehat Lemonilo pada 2015. Berawal dari memproduksi mi instan sehat, kini produk Lemonilo sudah meluas, di antaranya produk bahan makanan, minuman, bahkan sampai brand produk perawatan kulit.</div><div><strong>10. Ghufron Mustaqim (Evermos)</strong></div><div><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:576,&quot;url&quot;:&quot;https://www.alphajwc.com/wp-content/uploads/2022/01/Ghufron-Mustaqim-1024x576.webp&quot;,&quot;width&quot;:1024}\" data-trix-content-type=\"image\" class=\"attachment attachment--preview\"><img src=\"https://www.alphajwc.com/wp-content/uploads/2022/01/Ghufron-Mustaqim-1024x576.webp\" width=\"1024\" height=\"576\"><figcaption class=\"attachment__caption\"></figcaption></figure><br>Ghufron Mustaqim (Sumber: Genpi)</div><div>Tokoh wirausahawan sukses di Indonesia yang masih berusisa muda dan menginspirasi berikutnya adalah Ghufron Mustaqim, pendiri startup <em>social commerce</em> Evermos.</div><div>Perusahaan ini didirikan pada 2018 oleh Ghufron Mustaqim dan 3 rekannya; Iqbal Muslimin, Ilham Taufiq, dan Arip Tirta.&nbsp; Evermos menjadi wadah atau platform bagi para reseller untuk menjual produk ke konsumen lewat WhatsApp atau platform media sosial lainnya.</div>', NULL, '2022-07-16 08:52:05', '2022-07-16 08:54:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'IMAM ABDUL FATAH', 'ImamAbdulFatah', 'imam123@gmail.com', NULL, '$2y$10$jgfWptqzC3UlyNH6KhiRNe42IXBJzwp5HlipKhzn05nJGcyuXIWwC', NULL, '2022-07-16 07:02:55', '2022-07-16 07:02:55', 1),
(2, 'Dadap Uwais S.Pd', 'radit93', 'silvia.safitri@example.com', '2022-07-16 07:02:55', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'GmM8cZAJRB', '2022-07-16 07:02:55', '2022-07-16 07:02:55', 0),
(3, 'Dalima Andriani', 'oktaviani.heru', 'halima92@example.org', '2022-07-16 07:02:55', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'TWWoBW9v8SgUF2XqeiMyxLhFMdDY7urfpbK9FMKZCMbXdIeouWxSQ38jgfsO', '2022-07-16 07:02:55', '2022-07-16 07:02:55', 0),
(4, 'Adinata Simanjuntak', 'suryatmi.rahmi', 'clailasari@example.com', '2022-07-16 07:02:55', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cltz39cHRQkKCww9KQyzVULQ5guJgkxullxJYnypLztiRS0tsAIxufnU4Gnx', '2022-07-16 07:02:55', '2022-07-16 07:02:55', 1),
(5, 'Mas Zam Zam', 'ZamZam', 'zamzam@gmail.com', NULL, '$2y$10$Mj/8IHxE6ZoB1KpmXXo12Oa/n7bGXwb35AK6Vrp0tquPCIjRFZyKW', NULL, '2022-08-08 04:08:55', '2022-08-08 04:08:55', 0),
(6, 'imam', 'imam abdul', 'imamabdul8875@gmail.com', NULL, '$2y$10$Wfu9IG/zfPYkXpjz3AvJsOUFGZG8OYjga1l73zemVAI5OFCpAfd6O', NULL, '2022-11-15 11:54:57', '2022-11-15 11:54:57', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
