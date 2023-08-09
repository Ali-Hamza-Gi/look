-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2023 at 10:08 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citypromoservices`
--

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
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(15, '2014_10_12_000000_create_users_table', 1),
(16, '2014_10_12_100000_create_password_resets_table', 1),
(17, '2019_08_19_000000_create_failed_jobs_table', 1),
(18, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(19, '2022_04_08_170146_create_homes_table', 1),
(20, '2022_11_01_191846_create_products_table', 1),
(21, '2022_11_02_231407_create_orders_table', 1),
(23, '2022_11_07_205310_create_payments_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `town_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_holder_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cvv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiry_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_ids` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_ids` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(10,2) NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `options` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `title`, `slug`, `price`, `options`, `created_at`, `updated_at`) VALUES
(1, 'Search Engine Optimization Starter Guide', 'search-engine-optimization-starter-guide', 1.95, '[\"Search Engine Optimization Starter Guide\"]', '2022-10-21 15:48:55', '2022-10-21 15:48:55'),
(2, 'Basic landing page Redesign', 'basic-landing-page-redesign', 23, '[\"Search Engine Optimization Starter Guide\", \"Customized to Your Business Needs\"]', '2022-10-21 15:48:55', '2022-10-21 15:48:55'),
(3, 'Website Redesign', 'website-redesign', 47, '[\"1 Design Concepts\", \"up to 4 Revisions on the Selected Design\" , \"Customized to Your Business Needs\"]', '2022-10-21 15:48:55', '2022-10-21 15:48:55'),
(4, 'Basic Logo Design', 'basic-logo-design', 99.99, '[\"5 Design Concepts\", \"up to 4 Revisions on the Selected Design\", \"Customized to Your Business Needs\", \"Web and Print Ready Formats\", \"You Own The Copyright\"]', '2022-10-21 15:48:55', '2022-10-21 15:48:55'),
(5, 'Landing Page Design', 'landing-page-design', 149.99, '[\"1 HTML Page\", \"1 Home Image Creative Slider\", \"1 Online Form\", \"2 Design Revisions\", \"Email / Phone Support\", \"Mobile Friendly Designs\"]', '2022-10-21 15:48:55', '2022-10-21 15:48:55'),
(6, 'Basic Plan', 'basic-plan', 199.99, '[\"Landing page\", \"1 Home Image Slider\", \"1 Online Form\", \"2 Design Revisions\", \"100% Custom Design\", \"Email / Phone Support\", \"Mobile Friendly Creation\"]', '2022-10-21 15:48:55', '2022-10-21 15:48:55'),
(7, 'Premium Logo Design', 'premium-logo-design', 249.99, '[\"8 Design Concepts\", \"8 Design Revisions\", \"Customized to Your Business Needs\", \"Web and Print Ready Formats\", \"You Own The Copyright\", \"Email / Phone Support\", \"Mobile Friendly Creation\"]', '2022-10-21 15:48:55', '2022-10-21 15:48:55'),
(8, 'Startup Plan', 'startup-plan', 299.99, '[\"8 Total Of HTML Pages\", \"2 Home Images Slider\", \"2 Online Forms\", \"4 Design Revisions\", \"100% Custom Design\", \"Email / Phone Support\", \"Mobile Friendly Creation\"]', '2022-10-21 15:48:55', '2022-10-21 15:48:55'),
(9, 'Silver', 'silver', 349.99, '[\"10 Total Of HTML Pages\", \"3 Home Images Slider\", \"4 Online Forms\", \"5 Design Revisions\", \"100% Custom Design\", \"Mobile Friendly Creation\"]', '2022-10-21 15:48:55', '2022-10-21 15:48:55'),
(10, 'STARTUP CMS WEB DESIGN', 'startup-cms-web-design', 399.99, '[\"5 Pages\", \"WordPress CMS\", \"3 Design Revisions\", \"Contact Form\", \"Google Map\", \"Mobile Friendly Designs\", \"Social Media Integration\"]', '2022-10-21 15:48:55', '2022-10-21 15:48:55'),
(11, 'Silver CMS Design', 'silver-cms-design', 449.99, '[\"8 Pages\", \"WordPress CMS\", \"1 Online Forms\", \"4 Design Revisions\", \"Google Map\", \"Mobile Friendly Designs\", \"Social Media Integration\"]', '2022-10-21 15:48:55', '2022-10-21 15:48:55'),
(12, 'ENTERPRISE', 'enterprise', 449.99, '[\"15 Total Of HTML Pages\", \"5 Home Images Slider\", \"5 Online Forms\", \"10 Design Revisions\", \"Email / Phone Support\", \"Mobile Friendly Creation\"]', '2022-10-21 15:48:55', '2022-10-21 15:48:55');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `slug`, `image`, `price`, `description`, `created_at`, `updated_at`) VALUES
(1, 'SoundBox Pro Portable', 'sound-box-pro-portable', '8.jpg', 299.99, 'Experience audio excellence on the go with SoundBox Pro Portable. Immerse yourself in rich, crystal-clear sound that transcends boundaries. This sleek, compact speaker boasts cutting-edge technology for unparalleled wireless connectivity and immersive bass. With its long-lasting battery life, take your music wherever you wander. Elevate your auditory experience with SoundBox Pro Portable.', '2022-11-03 00:16:02', '2022-11-06 00:16:08'),
(2, 'AC5300 Wi-Fi Tri-Band Gigabit Wireless Router With 4x4 MU-MIMO', 'asus-ac5300-wi-fi-tri-band-gigabit-wireless-router-with-4x4-mu-mimo-4-x-lan-ports-ai-protection-network-security-and-wt-fast-game-accelerator-ai-mesh-whole-home-wi-fi-system-compatible-rt-ac5300', '1624399072.jpg', 249.99, 'Tri-band (Dual 5 GHz, single 2; 4 GHz) with the latest 802.11AC 4x4 technology for maximum throughput (5334 Mbps) and coverage (up to 5,000 square feet)\\n\\nMu memo technology enables multiple compatible clients to connect at each client’s respective maximum speed; Supports every operating System, including Windows, Mac OS and Linux\\n\\nBuilt in ACCESS to Waist gamers private network (GPN) of route optimized servers ensures low, stable ping times for gaming; Printer Server; Multifunctional printer support (Windows only)\\n\\nA protection powered by Trend Micro provides multi-stage protection from vulnerability detection to protecting sensitive data\\n\\nASUS Smart Connect delivers consistent bandwidth by dynamically switching devices between 2; 4 and 5 GHz bands based on speed, load and signal strength; NOTE: Refer the user manual; WAN Connection Type: Internet connection type: Automatic IP, Static IP, Pepo(MPPE supported), PPTP, L2TP.DC Output: 19 Volt with max; 3.42 A current', '2022-11-03 00:15:56', '2022-11-03 00:15:56'),
(3, 'Sound Box Ultra Pro Portable', 'sound-box-ultra-pro-portable', '9.jpg', 350, 'Wireless internet router works with Alexa, compatible with all Wi-Fi devices, 802.11ac and older\\n\\nDual band router upgrades to 1750 Mbps high-speed internet (450 Mbps for 2.4 GHz + 1300 Mbps for 5 GHz), reducing buffering and ideal for 4K streaming\\n3 x external antennas for long-range Wi-Fi\\n\\nGigabit router with 4 x gigabit LAN ports, fast access to multiple connected wired devices, ideal as a gaming router\\n\\nIntegrated USB port acts as a media server, easily share your USB drive content\\n\\nTP-Link Tether app - Easily set up and remotely manage your home network', '2022-11-03 00:17:14', '2022-11-03 00:17:14'),
(4, 'Glorious Model O 67G Matte White Gaming Mouse', 'glorious-model-o-67g-matte-white-gaming-mouse', 'Glorious.jpg', 99.99, 'Elevate your gaming prowess with the Glorious Model O 67G - Matte White. Designed for precision and speed, this gaming mouse offers a featherweight 67g body for seamless control. Unleash your potential with its ultra-responsive sensors, customizable DPI settings, and ergonomic design that fits your grip style. Dominate the competition with swift, pixel-perfect accuracy and customizable RGB lighting. The Glorious Model O is the ultimate tool to conquer virtual realms.', '2022-11-03 00:25:09', '2022-11-03 00:25:09'),
(5, 'LIGHTSPEED WIRELESS GAMING HEADSET', 'lightspeed-wireless-gaming-headset', 'Logitech.webp', 49.99, 'Experience untethered gaming freedom with the Lightspeed Wireless Gaming Headset. Immerse yourself in crystal-clear audio and seamless communication. Designed for comfort and precision, this headset delivers immersive soundscapes and features advanced noise-canceling technology. With its long-lasting battery and customizable controls, elevate your gaming experience to new heights. Cut the cords, amplify your play.\nSimultaneous 2.4 GHz 300 Mbps and 5 GHz 867 Mbps connections for 1200 Mbps of total available bandwidth\n\n4 x external antennas and one internal antenna provide stable wireless connections and optimal coverage\n\nEasy network management at your fingertips with TP-Link Tether\n\nMU-MIMO achieves 2X efficiency by communicating with up to 2 devices at once\n\nBeamforming technology delivers wider wireless coverage\n\nSupports Access Point mode to create a new Wi-Fi access point', '2022-11-09 21:58:14', '2022-11-09 21:58:14'),
(6, 'AX6000 AX12/12-stream Wi-Fi 6 Router', 'AX6000 AX12/12-stream Wi-Fi 6 Router', '1624448065.jpg', 389.99, 'Up to 6 Gbps Speeds - 1.2 + 4.8 Gbps with 12-stream connectivity\n8x8 MU-MIMO - Go faster by simultaneously streaming to multiple devices\nAX Optimized Quad-core Processor-Powerful 2.2 GHz processor boosts wireless, wired & WAN-to-LAN performance\nMulti-Gig 5G / 2.5G / 1G Ethernet Port-5 times the wired speed of typical Gigabit Ethernet port\n1024-QAM-25% increased data efficiency and faster speeds than a 256-QAM router\nTwo Superspeed USB 3.O Ports -Up to 10x faster than USB 2.0\nPort Aggregation-Ability to aggregate two gigabit LAN ports for faster file transfers\nVoice Controlled By Amazon Alexa & The Google Assistant- Control your NETGEAR Wi-Fi network with simple voice commands\n\n\n\n\n.', '2022-11-09 22:00:18', '2022-11-09 22:00:18'),
(7, 'AC2600 Nighthawk Pro Gaming Wi-Fi Router (XR500), Dual-Band Quad Stream Gigabit, Gaming Dashboard, Geo Filter, Quality of Service (QoS), Gaming VPN Client', 'AC2600 Nighthawk Pro Gaming Wi-Fi Router (XR500), Dual-Band Quad Stream Gigabit, Gaming Dashboard, Geo Filter, Quality of Service (QoS), Gaming VPN Client', '1624448164.jpg', 249.99, 'Minimize ping and maximize performance with four 1-Gigabit Ethernet ports for lag-free, wired connectivity and 1.7 GHz dual-core processor network efficiency\nAmp up your Wi-Fi with AC2600 dual-band router that delivers blazing fast speeds up to 2.6 Gbps\nPut your gaming traffic in a designated express lane with advanced Quality of Service, bypassing network congestion and reducing lag spikes, jumps and jitters\nMake every millisecond count by using geo-filtering to connect to the closest servers and players so you can respond and dominate\nMonitor your network and game ping in real time so you can see who\'s hogging the bandwidth by device and application\nProtect your network identity by connecting to a secure gaming VPN server\nOptimized to give you the lowest ping possible on Fortnite, Call of Duty: Black Ops 4, Overwatch, PubG, CS:GO, and more\n\n\n\n\n\n\n.', '2022-11-09 22:01:35', '2022-11-09 22:01:35'),
(8, 'AC2600 Dual-Band Wireless Router for Smart Homes, Featuring Intel Wi-Fi Technology and AiProtection Network Security', 'AC2600 Dual-Band Wireless Router for Smart Homes, Featuring Intel Wi-Fi Technology and AiProtection Network Security', '1624448346.jpg', 299.99, 'Dual-band (2.4 GHz + 5 GHz) AC2600 wireless router features Intel Wi-Fi with the latest 802.11ac 4x4 technology\nAmazon Alexa & Echo Integration allows you to control your home network using voice commands\nCommercial-grade Network Security with AiProtection powered by Trend Micro\nASUS Router App makes setting up and managing your network as easy as 1-2-3\nAdvanced parental controls allow you to easily view, manage, and schedule your family\'s internet and app usage from any mobile device\nComplimentary Antivirus Protection for mobile and PCs, each Blue Cave router includes a 1-year free subscription to Trend Micro Mobile Security for 2 mobile devices and Trend Micro Titanium Antivirus+ for 2 PCs\n\n\n\n.', '2022-11-09 22:03:06', '2022-11-09 22:03:06'),
(9, 'WIRELESS GAMING CONTROLLER', 'wireless-gaming-controller', 'Wireless-Gaming-Controller.jpg', 279.99, 'Unleash your gaming potential with the Wireless Gaming Controller. Dive into immersive gameplay and seamless control, free from the tangle of wires. Designed for precision and comfort, this controller offers responsive buttons, ergonomic grips, and customizable settings. With its intuitive design and reliable wireless connectivity, elevate your gaming experience to new heights. Dominate the virtual arena with the ultimate gaming accessory.', '2022-11-09 22:05:02', '2022-11-09 22:05:02'),
(10, 'HG26 Virtual Surround Sound Gaming Headset', 'hg26-virtual-surround-sound-gaming-headset', 'VIRTUAL SURROUND SOUND GAMING HEADSET.jpg', 89.99, 'Elevate your gaming experience with the HG26 Virtual Surround Sound Gaming Headset. Immerse yourself in 360-degree audio that brings virtual worlds to life. Designed for comfort and precision, this headset delivers crystal-clear sound and features advanced noise isolation technology. With its ergonomic design and adjustable features, you\'ll enjoy hours of immersive gameplay. Communicate clearly with teammates and hear every detail with the HG26 Gaming Headset.', '2022-11-09 22:06:30', '2022-11-09 22:06:30'),
(11, 'Tri-Band AX12 12-Stream AX11000 Tri-Band Wi-Fi 6 Router (RAX200)', 'Tri-Band AX12 12-Stream AX11000 Tri-Band Wi-Fi 6 Router (RAX200)', '1624448765.jpg', 499.99, 'Fast WiFi with up to 10.8Gbps combined wireless speed\n12-Streams of tri-band WiFi with up to 24 simultaneous WiFi connections\nWi-Fi 6 technology offers increased capacity to handle more devices on your network\nBuilt-for Gigabit internet speed & beyond\nMulti-Gig internet experience with link aggregation support\n\n\n\n', '2022-11-09 22:07:35', '2022-11-09 22:07:35'),
(12, 'AX5400 Dual-Band Gigabit Wi-Fi 6 Router', 'AX5400 Dual-Band Gigabit Wi-Fi 6 Router', '1624449307.jpg', 199.99, 'Gigabit WiFi for 8K Streaming - 5400 Mbps WiFi for faster browsing, streaming, and downloading, all at the same time.\nFully Featured Wi-Fi 6 - Equipped with the top structure of 4T4R and HE160 on the 5 GHz band to enable 4.8 Gbps ultra-fast connection.\nConnect 200+ Devices - Supports MU-MIMO and OFDMA to reduce congestion and quadruple the average throughput.\nExtensive Coverage - 6x antennas and Beamforming ensure broad coverage.\nHomeShield - TP-Link\'s premium security services keep your home network safe with cutting-edge features for network and IoT protection.\nMore Vents, Less Heat - Improved vents area unleash the full power of the whole machine.\nUSB Sharing - 1x USB 3.0 port enables easy media sharing and private cloud building.\nEasy Setup - Set up the router in minutes with the Tether app.\n\n\n\n.', '2022-11-09 22:09:04', '2022-11-09 22:09:04'),
(13, 'P31 3 In 1 Gaming Bundle\n', 'p31-3-in-1-gaming-bundle', 'P31-3-in-1-Gaming-Bundle-600x600.webp', 99.99, 'Unleash the power of the P31 3 In 1 Gaming Bundle – a complete gaming arsenal at your fingertips. This bundle includes a precision gaming mouse, a responsive keyboard, and a smooth pad for ultimate control. Dominate the virtual realm with customizable RGB lighting, tactile key feedback, and ergonomic design. Elevate your gameplay with seamless connectivity and precision accuracy. Unleash your gaming potential with the P31 3 In 1 Gaming Bundle', '2022-11-09 22:11:01', '2022-11-09 22:11:01'),
(14, 'AC4000 Smart WiFi Router - Tri-Band Router, MU-MIMO, VPN Server, Advanced Security by Homecare, Beamforming, Link Aggregation, Rangeboost, Works with Alexa', 'AC4000 Smart WiFi Router - Tri-Band Router, MU-MIMO, VPN Server, Advanced Security by Homecare, Beamforming, Link Aggregation, Rangeboost, Works with Alexa', '1624449704.jpg', 49.99, 'Tri Band Wireless Internet Router for 4K video, streaming, and gaming with incredibly high speed, 1625 Mbps on both 5 GHz bands and 750 Mbps on 2.4 GHz band\nThree co-processors and 512 MB of RAM power your home network. Works as a great gaming router.\nEliminate buffering with MU-MIMO technology letting you connect more devices simultaneously. Multiple requests and accelerated loading times.\nRange boost technology enables far-reaching Wi-Fi for long-range coverage throughout the home. Supported Operating Systems: OS Independent Up to Windows 10, Mac OS 10.12 and Linux\nAdvanced security: Protect your network and connected devices with a free lifetime subscription to TP-Link HomeCare- featuring next-level antivirus, robust parental controls, and QoS.*\nGigabit Wired Speeds--1 WAN and 4 LAN gigabit ports bring wired speeds to the maximum and Link Aggregation even doubles it to 2 Gbps.\n\n\n\n\n\n', '2022-11-09 22:12:46', '2022-11-09 22:12:46'),
(15, 'Extreme 3D Pro Gaming Joystick', 'extreme-3d-pro-gaming-joystick', 'products-extreme-3d-pro-600x400.jpg', 149.99, 'Experience gaming like never before with the Extreme 3D Pro Gaming Joystick. Take control of your virtual adventures with precision and finesse. Designed for immersive gameplay, this joystick offers a responsive grip, customizable buttons, and smooth control. Elevate your flying and combat simulations to new heights with intuitive 3D control. Dominate the skies and conquer virtual worlds with the Extreme 3D Pro Gaming Joystick.', '2022-11-09 22:14:03', '2022-11-09 22:14:03'),
(16, 'One-Handed RGB Mechanical Gaming Keyboard', 'one-handed-rgb-mechanical-gaming-keyboard', 'Gaming-Keyboard-Main-600x600.jpg', 189.99, 'Unlock unparalleled gaming performance with the One-Handed RGB Mechanical Gaming Keyboard. Designed for speed and precision, this compact keyboard puts every command at your fingertips. Enjoy customizable RGB lighting for an immersive visual experience. With tactile mechanical switches and programmable keys, dominate the competition with lightning-fast reactions. Elevate your gaming with ergonomic design and one-handed control.', '2022-11-09 22:16:17', '2022-11-09 22:16:17'),
(17, 'I5 12400F WITH RTX 3060TI IN 12TH GEN GAMING BUILD', 'i5-12400f-rtx-3060ti-12th-gen-gaming-build', '1-15.webp', 329.99, 'Experience gaming nirvana with the I5 12400F with RTX 3060Ti 12th Gen Gaming Build. This meticulously crafted build combines the latest CPU, GPU, and RAM technologies, delivering unparalleled gaming and multitasking performance.\n\nUnleash the power of the I5-12400F processor paired with the mighty RTX 3060Ti graphics card. Dive into virtual realms and explore expansive open worlds with lifelike visuals, smooth frame rates, and lightning-fast responsiveness.\n\nKeep your gaming experience running seamlessly with this budget-friendly marvel. The I5 12400F Gaming Build with RTX 3060Ti ensures high-quality graphics and smooth gameplay for everyday use. Say goodbye to complexities and embrace the simplicity of this all-inclusive powerhouse.\n\nStarting a new rig doesn\'t have to be overwhelming. This complete I5-12400F Gaming Build with RTX 3060Ti offers the latest specs without breaking the bank. It\'s a testament to innovation and performance, delivering gaming greatness without compromise.\n\nElevate your gaming prowess, embark on epic adventures, and conquer virtual realms with the I5 12400F with RTX 3060Ti 12th Gen Gaming Build. Embrace the future of gaming with confidence and let the power of this exceptional build redefine your gaming experience.', '2022-11-09 22:17:32', '2022-11-09 22:17:32'),
(18, 'V2712 Ultra-Thin Borderless Monitor 27\" FHD IPS 5ms 60Hz HDMI\n', 'v2712-ultra-thin-borderless-monitor-27-fhd-ips', '314819-190623093745.jpg', 239.99, 'Elevate your visual experience with the V2712 Ultra-Thin Borderless Monitor. Immerse yourself in stunning FHD clarity on a spacious 27\" IPS screen. Enjoy vibrant colors and wide viewing angles that bring your content to life. With a swift 5ms response time and smooth 60Hz refresh rate, your visuals come alive with clarity and precision. Connect seamlessly with HDMI compatibility. Transform your workspace or gaming setup with this sleek, feature-packed monitor.', '2022-11-09 22:19:10', '2022-11-09 22:19:10');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_order_id_foreign` (`order_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
