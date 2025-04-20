-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2025 at 06:26 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nepal-location`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `orgname` varchar(50) NOT NULL,
  `description` varchar(1400) NOT NULL,
  `keywords` varchar(400) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `gmail` varchar(30) NOT NULL,
  `addeddate` datetime DEFAULT NULL,
  `updatedate` datetime DEFAULT NULL,
  `createdBy` varchar(30) NOT NULL,
  `updatedBy` varchar(30) NOT NULL,
  `status` varchar(9) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `logo`, `orgname`, `description`, `keywords`, `address`, `contact`, `gmail`, `addeddate`, `updatedate`, `createdBy`, `updatedBy`, `status`) VALUES
(1, '1688729589.jpg', 'Nepal Location', 'We proudly brings the most up-to-date data regarding Nepal’s provinces, districts, and municipalities to its website. As a business in Rupandehi, Lumbini Province, we are dedicated to helping the citizens of Nepal stay informed on the most important facts and figures. We provide this data in an easy-to-read format, making it simpler than ever to stay updated on the state of the nation.We aims to provide the most accurate and timely information concerning the provinces, districts, and municipalities of Nepal. We are continuously updating our database to ensure that our customers are receiving the most up-to-date information available. Furthermore, we strive to make our website user friendly so that it is simple to access and understand the data. We are committed to providing the most reliable and current information about the nation and its provinces, districts, and municipalities.', 'Butwal, Nepal, Location, kalika campus, Butwal', 'sukkhanagar', '9840960939', 'rahulbhattarai89@gmail.com', '2023-04-19 12:29:09', '2023-07-08 10:25:18', 'Prashant23', 'Rahul8', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `image` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `addeddate` datetime DEFAULT NULL,
  `updatedate` datetime DEFAULT NULL,
  `createdBy` varchar(30) NOT NULL,
  `updatedBy` varchar(30) NOT NULL,
  `status` varchar(9) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `image`, `description`, `addeddate`, `updatedate`, `createdBy`, `updatedBy`, `status`) VALUES
(9, 'About Rupandehi', '1688797496.jpg', 'Rupandehi District (Nepali: रुपन्देही जिल्ला, a part of Lumbini Province, is one of the seventy-seven districts of Nepal and covers an area of 1,360 km2 (530 sq mi). The district headquarter is Bhairahawa. As per the national census 2011, the population of Rupandehi was 880,196.[2]', '2023-07-08 12:09:56', NULL, 'Rahul8', '', 'active'),
(10, 'Arghakhanchi ', '1688797707.jpg', 'Arghakhanchi is one of the districts of Lumbini Province in Nepal. The district headquarter is Sandhikharka. The district covers an area of 1,193 km2 (461 sq mi) and has a population (2011) of 197,632.[1] Its neighboring districts are Palpa in the east, Gulmi in the north, Kapilvastu District in the south and Pyuthan in the west. The district also covers 4.18km of daily busy road connecting Kapilvastu and Bhalubang, Lalmatiya, Dang with Rapti River as Mahendra Highway or Easy-West Highway.', '2023-07-08 12:13:27', NULL, 'Rahul8', '', 'active'),
(11, 'About Gulmi', '1688797813.jpg', 'Gulmi is a hilly district that lies in Lumbini Province. Surrounded by Syangja and Parbat district on the east, Palpa, and Arghakhanchi on the south, Baglung on the north, and Pyuthan on the west is renowned for coffee farming. Gulmi is widely known for introducing coffee in Nepal. It is also a major exporter of organic coffee. Gulmi is rich in natural resources such as cobalt. Festivals such as Maghe Sankranti and other festivals are popular among both tourists and locals.', '2023-07-08 12:15:13', NULL, 'Rahul8', '', 'active'),
(12, 'About Palpa', '1688797899.jpg', 'Palpa District , a part of Lumbini Province, is one of the seventy-seven districts of Nepal, a landlocked country of South Asia. The district, with Tansen as its headquarters, covers an area of 1,373 km2 (530 sq mi) and has a population (2011) of 261,180.[1]\r\n\r\nPalpa District is not far from Pokhara and easily reached by bus. Palpa was the seat of the Hindu Sen kingdom that ruled over this region from the 16th century for almost 300 years so Headquarter of Palpa is called \"Tansen\" (Nepali: तानसेन)', '2023-07-08 12:16:39', NULL, 'Rahul8', '', 'active'),
(14, 'Dhankuta District', '1692081620.jpg', 'Dhankuta was a part of Kirat Region before unification of those parts into Kingdom of Nepal.\r\n\r\nAfter 1816 there were 10 districts in Nepal and Dhankuta-chainpur district was one of them. All land from east of Dudhkosi river to the Mechi river was one district Dhankuta-chainpur.[2]\r\n\r\nFrom 1885 to 1962 Nepal remained divided into 32 districts and there were six districts in eastern-hill region: East No. 1, East No. 2, East No. 3, East No. 4, Ilam and Dhankuta. Dhankuta was center of these districts. That time also dhankuta was a large (by area) district. Current Sankhuwasabha, Tehrathum, Taplejung, Panchthar and Dhankuta districts were Incorporated under one district. The total area of the former Dhankuta district was 3,448 square miles (8,930 km2).[2][3]In 1962, Nepal divided into 75 districts and 16 districts of eastern Nepal grouped to form Eastern Development Region and Dhankuta became the headquarter of it.', '2023-08-15 12:25:20', '2023-08-15 12:27:14', 'Rahul8', 'Rahul8', 'active'),
(15, 'Iilam District', '1692081928.jpg', 'The name Ilam is derived from the Limbu language in which \"IL\" means twisted and \"Lam\" means road. Ilam was one of the ten self ruling states of Limbuwan before the reunification of Nepal. Its ruler, King Hangshu Phuba Lingdom of Lingdom dynasty, ruled Ilam as a confederate state of Limbuwan until 1813 AD. The treaty between the other Limbuwan states and the King of Gorkha (Gorkha-Limbuwan Treaty of 1774 AD), and the conflict of Gorkha and Sikkim, led to the unification of Ilam with Gorkha. Ilam was the last of the ten kingdoms of Limbuwan to be reunified into Nepal. The King of Gorkha gave the ruler of Ilam full autonomy to rule and the right of Kipat. Ilam was an independent Limbu kingdom until 1813 CE/1869 BS.', '2023-08-15 12:30:28', NULL, 'Rahul8', '', 'active'),
(16, 'Bhaktapur District', '1692082168.jpg', 'Bhaktapur is growing aggressively on the health care services and facilities. Bhaktapur did not have enough hospitals and health care centers in the past, but now there are many public and private hospitals which provide quality medical service.\r\n\r\nBhaktapur district has two comprehensive cancer hospitals Bhaktapur Cancer Hospital,[7] and Kathmandu Cancer Center. Other major centers like National Tuberculosis Centre, Human Organ Transplant Center and Ayurvedic Centre is located in Bhaktapur. Other major hospitals are Khwopa Hospital, Bhaktapur Hospital, Siddhi Memorial Hospital (For Women & Children), Iwamura Memorial Hospital, Madhyapur Hospital, Nagarik Community Hospital, Nepal Korea friendship hospital. Recently, the Government of Nepal has decided to transfer Bir hospital, the oldest hospital in Nepal, to Duwakot, Bhaktapur.', '2023-08-15 12:34:28', NULL, 'Rahul8', '', 'active'),
(17, 'Kathmandu District', '1692082302.jpg', 'Kathmandu,[a] officially Kathmandu Metropolitan City,[b] is the capital and most populous city of Nepal with 845,767 inhabitants living in 105,649 households in 2021 AD[2] and 2.9 million people in its urban agglomeration. It is located in the Kathmandu Valley, a large valley in the high plateaus in central Nepal, at an altitude of 1,400 metres (4,600 feet).\r\n\r\nThe city is one of the oldest continuously inhabited places in the world, founded in the 2nd century AD. The valley was historically called the \"Nepal Mandala\" and has been the home of the Newar people, a cosmopolitan urban civilization in the Himalayan foothills. The city was the royal capital of the Kingdom of Nepal and hosts palaces, mansions and gardens built by the Nepali aristocracy. It has been home to the headquarters of the South Asian Association for Regional Cooperation (SAARC) since 1985 AD. Today, it is the seat of government of the Federal Democratic Republic of Nepal, established in 2008 AD, and is part of Bagmati', '2023-08-15 12:36:42', NULL, 'Rahul8', '', 'active'),
(18, 'Lalitpur District', '1692082443.jpg', 'Lalitpur Metropolitan City (Sanskrit: पाटन Pāṭana, Nepal bhasa : 𑐫𑐮‎ Yela, ) is a Metropolitan city and fourth most populous city of Nepal with 299,843 inhabitants living in 49,044 households per 2021 census.[4][5] It is located in the south-central part of Kathmandu Valley, a large valley in the high plateaus in central Nepal, at an altitude of 1,400 metres (4,600 feet).\r\n\r\nLalitpur is also known as Manigal. It is best known for its rich cultural heritage, particularly its tradition of arts and crafts. It has a multi-ethnic population within a Hindu and Buddhist majority. Religious and cultural festivities form a major part of the lives of people residing in Kathmandu. Tourism is an important part of the economy in the city It is city renowned for its festival and feast, fine ancient art, and the making of metallic, wood and stone carved statues. Lalitpur is also the home to Patan Durbar Square which has been listed by UNESCO as a World Heritage Site.', '2023-08-15 12:39:03', NULL, 'Rahul8', '', 'active'),
(19, 'Chitwan District', '1692082608.jpg', 'The people inhabiting the Chitwan District are predominantly peasant farmers cultivating mainly food and cash crops such as rice, maize, wheat, beans, lentils, mustard and Vegetables. The district is the major maize-producing area in Nepal, with an area under maize cultivation of 27,170 ha (104.9 sq mi) in the year 2003–04. Maize is cultivated on irrigated /seasonal irrigated land in winter and spring, and on rain-fed land in summer. Because it is easily accessible by good roads, maize produced in the district can be easily distributed to other parts of the country. Poultry is also a significant industry in Chitwan.[9]\r\n\r\nChitwan is famous in Nepal for mustard growing and production of mustard oil. This popularity of the mustard in Chitwan is attributed to the predominant soil type silt, resulting from the flooding of the Narayani River and its tributaries. The land of Chitwan is also spotted with clay, which is very good for growing rice, wheat, and vegetables such as cabbage, caulifl', '2023-08-15 12:41:48', NULL, 'Rahul8', '', 'active'),
(21, 'When is Election Day?', '1692118263.jpg', 'On Nov. 20, 2022, Nepal will hold its national and provincial-level legislative elections in a single\r\nphase. This will be the second such election since the promulgation of Nepal’s constitution in\r\n2015, which initiated the country’s decentralization process. There will be 10,892 polling\r\nlocations and 22,227 polling centers across the country. Polls will be open from 7 a.m. to 5 p.m.', '2023-08-15 10:27:18', '2023-08-15 10:36:03', 'Rahul8', 'Rahul8', 'active'),
(22, 'Who are citizens voting for on Election Day?', '1692118751.jpg', 'Citizens will be voting for elected seats in the House of Representatives (HoR) and Provincial\r\nAssemblies (PA). The HoR is the lower house of the Federal Parliament. It comprises 275\r\nmembers, of whom 165 are elected through first-past-the-post (FPTP) and 110 through\r\nproportional representation (PR) with closed candidate lists. The number of PR seats allocated\r\nto each party is proportional to the number of votes cast for its party list. The 165 FPTP seats\r\nare divided among Nepal’s seven provinces as follows:', '2023-08-15 10:44:11', NULL, 'Rahul8', '', 'active'),
(23, 'map', '1692264657.jpg', 'area', '2023-08-17 03:15:57', NULL, 'Rahul8', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(11) NOT NULL,
  `district` varchar(25) NOT NULL,
  `area` int(11) NOT NULL,
  `addeddate` datetime DEFAULT NULL,
  `updatedate` datetime DEFAULT NULL,
  `createdBy` varchar(30) NOT NULL,
  `updatedBy` varchar(30) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `district`, `area`, `addeddate`, `updatedate`, `createdBy`, `updatedBy`, `status`) VALUES
(8, 'Bhojpur', 9, '2023-07-07 06:01:10', NULL, 'rahul8', '', 'active'),
(9, 'Dhankuta', 6, '2023-07-07 06:01:33', NULL, 'rahul8', '', 'active'),
(15, 'Ilam ', 1703, '2023-07-08 10:52:06', NULL, 'rahul8', '', 'active'),
(16, 'Jhapa ', 1606, '2023-07-08 10:52:31', NULL, 'rahul8', '', 'active'),
(17, 'Khotang ', 1591, '2023-07-08 10:53:06', NULL, 'rahul8', '', 'active'),
(18, 'Morang ', 1855, '2023-07-08 10:53:34', NULL, 'rahul8', '', 'active'),
(19, 'Okhaldhunga ', 1074, '2023-07-08 10:54:00', NULL, 'rahul8', '', 'active'),
(20, 'Panchthar ', 1241, '2023-07-08 10:54:30', NULL, 'rahul8', '', 'active'),
(21, 'Sankhuwasabha ', 3480, '2023-07-08 10:55:00', NULL, 'rahul8', '', 'active'),
(22, 'Solukhumbu District', 3312, '2023-07-08 10:55:25', NULL, 'rahul8', '', 'active'),
(23, 'Sunsari', 1257, '2023-07-08 10:55:51', NULL, 'rahul8', '', 'active'),
(24, 'Taplejung ', 3646, '2023-07-08 10:56:15', NULL, 'rahul8', '', 'active'),
(25, 'Tehrathum ', 679, '2023-07-08 10:56:45', NULL, 'rahul8', '', 'active'),
(26, 'Udayapur ', 2063, '2023-07-08 10:57:10', NULL, 'rahul8', '', 'active'),
(27, 'Kapilvastu ', 1738, '2023-07-08 11:02:58', NULL, 'rahul8', '', 'active'),
(28, 'Nawalparasi (West of Bard', 635, '2023-07-08 11:03:36', NULL, 'rahul8', '', 'active'),
(29, 'Arghakhanchi ', 1193, '2023-07-08 11:05:47', NULL, 'rahul8', '', 'active'),
(30, 'Gulmi', 1149, '2023-07-08 11:06:14', NULL, 'rahul8', '', 'active'),
(31, 'Palpa ', 1373, '2023-07-08 11:06:35', NULL, 'rahul8', '', 'active'),
(32, 'Dang ', 2955, '2023-07-08 11:07:00', NULL, 'rahul8', '', 'active'),
(33, 'Pyuthan ', 1309, '2023-07-08 11:07:22', NULL, 'rahul8', '', 'active'),
(34, 'Rolpa ', 1879, '2023-07-08 11:07:43', NULL, 'rahul8', '', 'active'),
(35, 'Eastern Rukum', 1161, '2023-07-08 11:08:23', NULL, 'rahul8', '', 'active'),
(36, 'Banke', 2337, '2023-07-08 11:08:55', NULL, 'rahul8', '', 'active'),
(37, 'Bardiya ', 2025, '2023-07-08 11:09:35', NULL, 'rahul8', '', 'active'),
(38, 'Rupandehi', 1360, '2023-07-08 11:27:16', NULL, 'rahul8', '', 'active'),
(39, 'Bara ', 234, '2023-08-08 01:49:05', NULL, 'rahul8', '', 'active'),
(40, 'Dhanusha', 343, '2023-08-08 01:49:23', NULL, 'rahul8', '', 'active'),
(41, 'Mahottari ', 234, '2023-08-08 01:49:39', NULL, 'rahul8', '', 'active'),
(42, 'Parsa ', 456, '2023-08-08 01:49:56', NULL, 'rahul8', '', 'active'),
(43, 'Rautahat ', 324, '2023-08-08 01:50:18', NULL, 'rahul8', '', 'active'),
(44, 'Saptari ', 323, '2023-08-08 01:50:38', NULL, 'rahul8', '', 'active'),
(45, 'Sarlahi', 234, '2023-08-08 01:51:04', NULL, 'rahul8', '', 'active'),
(46, 'Siraha ', 342, '2023-08-08 01:51:23', NULL, 'rahul8', '', 'active'),
(47, 'Bhaktapur ', 134, '2023-08-08 01:52:17', NULL, 'rahul8', '', 'active'),
(48, 'Chitwan', 234, '2023-08-08 01:52:34', NULL, 'rahul8', '', 'active'),
(49, 'Dhading', 123, '2023-08-08 01:52:55', NULL, 'rahul8', '', 'active'),
(50, 'Dolakha', 345, '2023-08-08 01:53:12', NULL, 'rahul8', '', 'active'),
(51, ' Kathmandu', 341, '2023-08-08 01:53:30', NULL, 'rahul8', '', 'active'),
(52, 'Kavrepalanchok ', 454, '2023-08-08 01:53:46', NULL, 'rahul8', '', 'active'),
(53, 'Lalitpur', 234, '2023-08-08 01:54:09', NULL, 'rahul8', '', 'active'),
(54, 'Makwanpur', 432, '2023-08-08 01:54:26', NULL, 'rahul8', '', 'active'),
(55, 'Nuwakot ', 123, '2023-08-08 01:54:41', NULL, 'rahul8', '', 'active'),
(56, ' Ramechhap ', 231, '2023-08-08 01:55:08', NULL, 'rahul8', '', 'active'),
(57, 'Rasuwa', 342, '2023-08-08 01:55:32', NULL, 'rahul8', '', 'active'),
(58, 'Sindhuli', 89, '2023-08-08 01:55:49', NULL, 'rahul8', '', 'active'),
(59, 'Sindhupalchok', 356, '2023-08-08 01:56:05', NULL, 'rahul8', '', 'active'),
(60, 'Baglung ', 343, '2023-08-08 01:57:02', NULL, 'rahul8', '', 'active'),
(61, 'Gorkha ', 53, '2023-08-08 01:57:23', NULL, 'rahul8', '', 'active'),
(62, 'Kaski', 231, '2023-08-08 01:57:39', NULL, 'rahul8', '', 'active'),
(63, 'Lamjung ', 345, '2023-08-08 01:58:08', NULL, 'rahul8', '', 'active'),
(64, 'Manang ', 789, '2023-08-08 01:58:25', NULL, 'rahul8', '', 'active'),
(65, 'Mustang', 454, '2023-08-08 01:58:41', NULL, 'rahul8', '', 'active'),
(66, 'Myagdi ', 234, '2023-08-08 01:58:58', NULL, 'rahul8', '', 'active'),
(67, 'Nawalparasi (West of Bard', 354, '2023-08-08 01:59:21', NULL, 'rahul8', '', 'active'),
(68, 'Parbat ', 33, '2023-08-08 01:59:38', NULL, 'rahul8', '', 'active'),
(69, 'Syangja', 143, '2023-08-08 01:59:55', NULL, 'rahul8', '', 'active'),
(70, 'Tanahun', 322, '2023-08-08 02:00:21', NULL, 'rahul8', '', 'active'),
(71, 'Dailekh ', 234, '2023-08-08 02:01:26', NULL, 'rahul8', '', 'active'),
(72, 'Dolpa', 123, '2023-08-08 02:01:42', NULL, 'rahul8', '', 'active'),
(73, 'Humla', 344, '2023-08-08 02:01:58', NULL, 'rahul8', '', 'active'),
(74, 'Jajarkot ', 432, '2023-08-08 02:02:15', NULL, 'rahul8', '', 'active'),
(75, 'Jumla ', 324, '2023-08-08 02:02:29', NULL, 'rahul8', '', 'active'),
(76, 'Kalikot ', 343, '2023-08-08 02:02:47', NULL, 'rahul8', '', 'active'),
(77, 'Mugu', 321, '2023-08-08 02:03:05', NULL, 'rahul8', '', 'active'),
(78, 'Rukum ', 123, '2023-08-08 02:03:21', NULL, 'rahul8', '', 'active'),
(79, 'Salyan', 125, '2023-08-08 02:03:38', NULL, 'rahul8', '', 'active'),
(80, 'Surkhet', 234, '2023-08-08 02:04:01', NULL, 'rahul8', '', 'active'),
(81, 'Achham', 341, '2023-08-08 02:09:45', NULL, 'rahul8', '', 'active'),
(82, 'Baitadi', 123, '2023-08-08 02:10:22', NULL, 'rahul8', '', 'active'),
(83, 'Bajhang ', 234, '2023-08-08 02:10:38', NULL, 'rahul8', '', 'active'),
(84, 'Bajura', 214, '2023-08-08 02:10:54', NULL, 'rahul8', '', 'active'),
(85, 'Dadeldhura ', 241, '2023-08-08 02:11:10', NULL, 'rahul8', '', 'active'),
(86, 'Darchula', 213, '2023-08-08 02:11:38', NULL, 'rahul8', '', 'active'),
(87, 'Doti', 245, '2023-08-08 02:11:55', NULL, 'rahul8', '', 'active'),
(88, 'Kailali ', 422, '2023-08-08 02:12:10', NULL, 'rahul8', '', 'active'),
(89, 'Kanchanpur ', 234, '2023-08-08 02:12:28', NULL, 'rahul8', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `district_edit_request`
--

CREATE TABLE `district_edit_request` (
  `id` int(11) NOT NULL,
  `district_name` varchar(25) NOT NULL,
  `district_area` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `district_edit_request`
--

INSERT INTO `district_edit_request` (`id`, `district_name`, `district_area`, `district_id`, `user_id`, `created_date`) VALUES
(11, 'Rupandehi', 22451, 1, 18, '2023-04-09 03:30:25'),
(12, 'mugu', 3331, 2, 18, '2023-04-09 03:30:28'),
(16, 'dasaxqsads', 12121, 3, 18, '2023-04-09 06:36:50');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `description` varchar(1100) NOT NULL,
  `img` varchar(45) NOT NULL,
  `addeddate` datetime DEFAULT NULL,
  `updatedate` datetime DEFAULT NULL,
  `createdBy` varchar(35) NOT NULL,
  `updatedBy` varchar(35) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `title`, `description`, `img`, `addeddate`, `updatedate`, `createdBy`, `updatedBy`, `status`) VALUES
(1, 'Explore Nepal With US', 'We provides an intractive way to explore Nepal - its provinces,districts,municipilities and wards - on a website.Discover the many places,cultures,and wonders of Nepal from the comfort of your own home with US', '1692263514.jpg', '2023-04-21 04:11:30', '2023-08-17 02:56:54', 'Prashant23', 'Rahul8', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `municipility`
--

CREATE TABLE `municipility` (
  `id` int(11) NOT NULL,
  `municipility` varchar(25) NOT NULL,
  `area` int(11) NOT NULL,
  `addeddate` datetime DEFAULT NULL,
  `updatedate` datetime DEFAULT NULL,
  `createdBy` varchar(30) NOT NULL,
  `updatedBy` varchar(30) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `municipility`
--

INSERT INTO `municipility` (`id`, `municipility`, `area`, `addeddate`, `updatedate`, `createdBy`, `updatedBy`, `status`) VALUES
(7, 'Tansen', 230, '2023-08-02 08:24:42', NULL, 'rahul8', '', 'active'),
(9, 'Rainadevi Chhahara', 340, '2023-08-02 08:25:31', NULL, 'rahul8', '', 'active'),
(10, 'Mathagadhi', 340, '2023-08-02 08:25:47', NULL, 'rahul8', '', 'active'),
(11, 'Nisdi', 345, '2023-08-02 08:26:05', NULL, 'rahul8', '', 'active'),
(12, 'Bagnaskali', 356, '2023-08-02 08:26:21', NULL, 'rahul8', '', 'active'),
(13, 'Rambha', 453, '2023-08-02 08:26:39', NULL, 'rahul8', '', 'active'),
(14, 'Purbakhola', 234, '2023-08-02 08:26:55', NULL, 'rahul8', '', 'active'),
(15, 'Tinau', 234, '2023-08-02 08:27:12', NULL, 'rahul8', '', 'active'),
(16, 'Ribdikot', 456, '2023-08-02 08:27:43', NULL, 'rahul8', '', 'active'),
(17, 'Rampur', 22, '2023-08-08 04:09:08', NULL, 'rahul8', '', 'active'),
(19, '	Belaka ', 54, '2023-08-15 01:04:05', NULL, 'rahul8', '', 'active'),
(20, 'Chaudandigadhi ', 12, '2023-08-15 01:04:28', NULL, 'rahul8', '', 'active'),
(21, 'Katari ', 34, '2023-08-15 01:04:48', NULL, 'rahul8', '', 'active'),
(22, 'Limchungbung', 35, '2023-08-15 01:05:07', NULL, 'rahul8', '', 'active'),
(23, 'Rautamai', 35, '2023-08-15 01:05:24', NULL, 'rahul8', '', 'active'),
(24, 'Tapli ', 34, '2023-08-15 01:05:43', NULL, 'rahul8', '', 'active'),
(25, 'Triyuga', 53, '2023-08-15 01:06:02', NULL, 'rahul8', '', 'active'),
(26, '	Udayapurgadhi ', 46, '2023-08-15 01:06:23', NULL, 'rahul8', '', 'active'),
(27, '	Aathrai', 34, '2023-08-15 01:07:27', NULL, 'rahul8', '', 'active'),
(28, '	Chhathar ', 46, '2023-08-15 01:07:43', NULL, 'rahul8', '', 'active'),
(29, 'Laligurans', 45, '2023-08-15 01:08:00', NULL, 'rahul8', '', 'active'),
(30, '	Menchayam', 67, '2023-08-15 01:08:22', NULL, 'rahul8', '', 'active'),
(31, 'Myanglung ', 0, '2023-08-15 01:08:36', NULL, 'rahul8', '', 'active'),
(32, '	Phedap', 0, '2023-08-15 01:08:51', NULL, 'rahul8', '', 'active'),
(33, '	Aathrai', 0, '2023-08-15 01:09:10', NULL, 'rahul8', '', 'active'),
(34, 'Maiwakhola', 0, '2023-08-15 01:09:23', NULL, 'rahul8', '', 'active'),
(35, '	Meringden', 0, '2023-08-15 01:09:36', NULL, 'rahul8', '', 'active'),
(36, 'Mikwakhola', 0, '2023-08-15 01:09:51', NULL, 'rahul8', '', 'active'),
(37, 'Pathivara', 0, '2023-08-15 01:10:04', NULL, 'rahul8', '', 'active'),
(38, 'Phaktanglung', 0, '2023-08-15 01:10:25', NULL, 'rahul8', '', 'active'),
(39, 'Phungling', 0, '2023-08-15 01:10:41', NULL, 'rahul8', '', 'active'),
(40, 'Sidingba', 0, '2023-08-15 01:11:08', NULL, 'rahul8', '', 'active'),
(41, '	Sirijangha', 0, '2023-08-15 01:11:27', NULL, 'rahul8', '', 'active'),
(42, 'Anbukhaireni', 0, '2023-08-15 01:11:40', NULL, 'rahul8', '', 'active'),
(43, '	Bandipur', 0, '2023-08-15 01:11:56', NULL, 'rahul8', '', 'active'),
(44, '	Bhanu', 0, '2023-08-15 01:12:12', NULL, 'rahul8', '', 'active'),
(45, '	Bhimad ', 0, '2023-08-15 01:12:28', NULL, 'rahul8', '', 'active'),
(46, '	Byas', 0, '2023-08-15 01:12:45', NULL, 'rahul8', '', 'active'),
(47, '	Devghat', 0, '2023-08-15 01:13:12', NULL, 'rahul8', '', 'active'),
(48, '	Ghiring', 0, '2023-08-15 01:13:52', NULL, 'rahul8', '', 'active'),
(49, 'Myagde', 0, '2023-08-15 01:14:06', NULL, 'rahul8', '', 'active'),
(50, 'Rhishing', 0, '2023-08-15 01:14:20', NULL, 'rahul8', '', 'active'),
(51, '	Shuklagandaki', 0, '2023-08-15 01:14:34', NULL, 'rahul8', '', 'active'),
(52, '	Aandhikhola', 0, '2023-08-15 01:14:52', NULL, 'rahul8', '', 'active'),
(53, '	Arjunchaupari', 0, '2023-08-15 01:15:06', NULL, 'rahul8', '', 'active'),
(54, '	Bhirkot ', 0, '2023-08-15 01:15:20', NULL, 'rahul8', '', 'active'),
(55, 'Biruwa', 0, '2023-08-15 01:15:37', NULL, 'rahul8', '', 'active'),
(56, '	Chapakot ', 0, '2023-08-15 01:15:52', NULL, 'rahul8', '', 'active'),
(57, '	Galyang ', 0, '2023-08-15 01:16:06', NULL, 'rahul8', '', 'active'),
(58, 'Harinas', 0, '2023-08-15 01:16:19', NULL, 'rahul8', '', 'active'),
(59, '	Kaligandagi', 0, '2023-08-15 01:16:32', NULL, 'rahul8', '', 'active'),
(60, '	Phedikhola ', 0, '2023-08-15 01:16:49', NULL, 'rahul8', '', 'active'),
(61, 'Putalibazar ', 0, '2023-08-15 01:17:06', NULL, 'rahul8', '', 'active'),
(62, 'Waling', 0, '2023-08-15 01:17:20', NULL, 'rahul8', '', 'active'),
(63, '	Barahtal', 0, '2023-08-15 01:17:33', NULL, 'rahul8', '', 'active'),
(64, 'Bheriganga', 0, '2023-08-15 01:17:50', NULL, 'rahul8', '', 'active'),
(65, 'Birendranagar ', 0, '2023-08-15 01:18:03', NULL, 'rahul8', '', 'active'),
(66, '	Chaukune', 0, '2023-08-15 01:18:17', NULL, 'rahul8', '', 'active'),
(67, '	Chingad ', 0, '2023-08-15 01:18:31', NULL, 'rahul8', '', 'active'),
(68, 'Gurbhakot', 0, '2023-08-15 01:18:52', NULL, 'rahul8', '', 'active'),
(69, '	Lekbeshi', 0, '2023-08-15 01:19:06', NULL, 'rahul8', '', 'active'),
(70, '	Panchpuri', 0, '2023-08-15 01:19:20', NULL, 'rahul8', '', 'active'),
(71, '	Simta ', 0, '2023-08-15 01:19:36', NULL, 'rahul8', '', 'active'),
(72, '	Barahchhetra ', 0, '2023-08-15 01:19:50', NULL, 'rahul8', '', 'active'),
(73, '	Barju', 0, '2023-08-15 01:20:05', NULL, 'rahul8', '', 'active'),
(74, '	Bhokraha', 0, '2023-08-15 01:20:18', NULL, 'rahul8', '', 'active'),
(75, '	Dewanganj ', 0, '2023-08-15 01:22:00', NULL, 'rahul8', '', 'active'),
(76, '	Dharan', 0, '2023-08-15 01:22:27', NULL, 'rahul8', '', 'active'),
(77, '	Duhabi ', 0, '2023-08-15 01:22:58', NULL, 'rahul8', '', 'active'),
(78, 'Ramdhuni', 0, '2023-08-15 01:24:00', NULL, 'rahul8', '', 'active'),
(79, 'Solududhakunda ', 0, '2023-08-15 01:24:20', NULL, 'rahul8', '', 'active'),
(80, '	Dhangadhimai ', 0, '2023-08-15 01:24:42', NULL, 'rahul8', '', 'active'),
(81, '	Golbazar', 0, '2023-08-15 01:24:58', NULL, 'rahul8', '', 'active'),
(82, '	Kalyanpur', 0, '2023-08-15 01:25:12', NULL, 'rahul8', '', 'active'),
(83, '	Karjanha ', 0, '2023-08-15 01:25:31', NULL, 'rahul8', '', 'active'),
(84, '	Lahan ', 0, '2023-08-15 01:25:46', NULL, 'rahul8', '', 'active'),
(85, 'Mirchaiya', 0, '2023-08-15 01:26:02', NULL, 'rahul8', '', 'active'),
(86, '	Siraha', 0, '2023-08-15 01:26:21', NULL, 'rahul8', '', 'active'),
(87, '	Sukhipur ', 0, '2023-08-15 01:26:46', NULL, 'rahul8', '', 'active'),
(88, 'Barhabise', 0, '2023-08-15 01:27:05', NULL, 'rahul8', '', 'active'),
(89, 'Chautara SangachokGadhi', 0, '2023-08-15 01:27:21', NULL, 'rahul8', '', 'active'),
(90, '	Melamchi', 0, '2023-08-15 01:27:44', NULL, 'rahul8', '', 'active'),
(91, 'Dudhouli ', 0, '2023-08-15 01:28:27', NULL, 'rahul8', '', 'active'),
(92, '	Kamalamai ', 0, '2023-08-15 01:28:45', NULL, 'rahul8', '', 'active'),
(93, '	Bagmati ', 0, '2023-08-15 01:29:05', NULL, 'rahul8', '', 'active'),
(94, '	Balara ', 0, '2023-08-15 01:29:19', NULL, 'rahul8', '', 'active'),
(95, '	Barahathaw', 0, '2023-08-15 01:29:32', NULL, 'rahul8', '', 'active'),
(96, 'Godaita ', 0, '2023-08-15 01:29:53', NULL, 'rahul8', '', 'active'),
(97, '	Haripur', 0, '2023-08-15 01:30:05', NULL, 'rahul8', '', 'active'),
(98, '	Haripurwa ', 0, '2023-08-15 01:30:20', NULL, 'rahul8', '', 'active'),
(99, '	Hariwan', 0, '2023-08-15 01:30:36', NULL, 'rahul8', '', 'active'),
(100, 'Ishworpur', 0, '2023-08-15 01:30:50', NULL, 'rahul8', '', 'active'),
(101, '	Kabilasi', 0, '2023-08-15 01:31:03', NULL, 'rahul8', '', 'active'),
(102, 'Lalbandi ', 0, '2023-08-15 01:31:18', NULL, 'rahul8', '', 'active'),
(103, 'Malangawa', 0, '2023-08-15 01:31:40', NULL, 'rahul8', '', 'active'),
(104, '	Bode Barsain', 0, '2023-08-15 01:32:00', NULL, 'rahul8', '', 'active'),
(105, '	Dakneshwori ', 0, '2023-08-15 01:32:16', NULL, 'rahul8', '', 'active'),
(106, '	Hanumannagar Kankalini ', 0, '2023-08-15 01:32:50', NULL, 'rahul8', '', 'active'),
(107, '	Kanchanrup', 0, '2023-08-15 01:33:06', NULL, 'rahul8', '', 'active'),
(108, 'Khadak ', 0, '2023-08-15 01:33:20', NULL, 'rahul8', '', 'active'),
(109, '	Rajbiraj ', 0, '2023-08-15 01:33:35', NULL, 'rahul8', '', 'active'),
(110, '	Shambhunath ', 0, '2023-08-15 01:33:49', NULL, 'rahul8', '', 'active'),
(111, 'Surunga', 0, '2023-08-15 01:34:04', NULL, 'rahul8', '', 'active'),
(112, 'Chainpur', 0, '2023-08-15 01:34:21', NULL, 'rahul8', '', 'active'),
(113, '	Dharmadevi', 0, '2023-08-15 01:34:36', NULL, 'rahul8', '', 'active'),
(114, 'Khandbari ', 0, '2023-08-15 01:34:50', NULL, 'rahul8', '', 'active'),
(115, 'Madi ', 0, '2023-08-15 01:35:02', NULL, 'rahul8', '', 'active'),
(116, 'Panchakhapan', 0, '2023-08-15 01:35:21', NULL, 'rahul8', '', 'active'),
(117, '	Bagchaur', 0, '2023-08-15 01:35:36', NULL, 'rahul8', '', 'active'),
(118, 'Bangad Kupinde ', 0, '2023-08-15 01:35:53', NULL, 'rahul8', '', 'active'),
(119, 'Sharada ', 0, '2023-08-15 01:36:08', NULL, 'rahul8', '', 'active'),
(120, '	Butwal ', 0, '2023-08-15 01:36:26', NULL, 'rahul8', '', 'active'),
(121, '	Devdaha ', 0, '2023-08-15 01:36:42', NULL, 'rahul8', '', 'active'),
(122, '	Lumbini Sanskritik', 0, '2023-08-15 01:37:00', NULL, 'rahul8', '', 'active'),
(123, '	Sainamaina', 0, '2023-08-15 01:37:20', NULL, 'rahul8', '', 'active'),
(124, '	Siddharthanagar ', 0, '2023-08-15 01:37:34', NULL, 'rahul8', '', 'active'),
(125, '	Tillotama', 0, '2023-08-15 01:37:52', NULL, 'rahul8', '', 'active'),
(126, 'Aathbiskot ', 0, '2023-08-15 01:38:16', NULL, 'rahul8', '', 'active'),
(127, '	Chaurjahari ', 0, '2023-08-15 01:38:38', NULL, 'rahul8', '', 'active'),
(128, '	Musikot', 0, '2023-08-15 01:38:54', NULL, 'rahul8', '', 'active'),
(129, '	Rolpa', 0, '2023-08-15 01:39:21', NULL, 'rahul8', '', 'active'),
(130, '	Baudhimai', 0, '2023-08-15 01:39:46', NULL, 'rahul8', '', 'active'),
(131, '	Brindaban', 0, '2023-08-15 01:40:00', NULL, 'rahul8', '', 'active'),
(132, '	Chandrapur ', 0, '2023-08-15 01:40:13', NULL, 'rahul8', '', 'active'),
(133, '	Dewahhi Gonahi', 0, '2023-08-15 01:40:27', NULL, 'rahul8', '', 'active'),
(134, '	Gadhimai ', 0, '2023-08-15 01:40:43', NULL, 'rahul8', '', 'active'),
(135, '	Garuda ', 0, '2023-08-15 01:40:59', NULL, 'rahul8', '', 'active'),
(136, 'Gaur ', 0, '2023-08-15 01:41:16', NULL, 'rahul8', '', 'active'),
(137, '	Gujara ', 0, '2023-08-15 01:41:31', NULL, 'rahul8', '', 'active'),
(138, '	Ishanath', 0, '2023-08-15 01:41:46', NULL, 'rahul8', '', 'active'),
(139, 'Katahariya ', 0, '2023-08-15 01:41:59', NULL, 'rahul8', '', 'active'),
(140, '	Madhav Narayan', 0, '2023-08-15 01:42:15', NULL, 'rahul8', '', 'active'),
(141, '	Maulapur', 0, '2023-08-15 01:42:29', NULL, 'rahul8', '', 'active'),
(142, 'Paroha ', 0, '2023-08-15 01:42:45', NULL, 'rahul8', '', 'active'),
(143, 'Phatuwa Bijayapur', 0, '2023-08-15 01:43:00', NULL, 'rahul8', '', 'active'),
(144, 'Rajdevi', 0, '2023-08-15 01:43:14', NULL, 'rahul8', '', 'active'),
(145, '	Rajpur ', 0, '2023-08-15 01:43:34', NULL, 'rahul8', '', 'active'),
(146, '	Manthali', 0, '2023-08-15 01:43:59', NULL, 'rahul8', '', 'active'),
(147, 'Ramechhap', 0, '2023-08-15 01:44:25', NULL, 'rahul8', '', 'active'),
(148, '	Pyuthan', 0, '2023-08-15 01:44:45', NULL, 'rahul8', '', 'active'),
(149, '	Sworgadwary', 0, '2023-08-15 01:45:00', NULL, 'rahul8', '', 'active'),
(150, '	Bahudaramai ', 0, '2023-08-15 01:45:13', NULL, 'rahul8', '', 'active'),
(151, 'Birgunj ', 0, '2023-08-15 01:45:28', NULL, 'rahul8', '', 'active'),
(152, 'Parsagadhi', 0, '2023-08-15 01:45:54', NULL, 'rahul8', '', 'active'),
(153, '	Pokhariya ', 0, '2023-08-15 01:46:08', NULL, 'rahul8', '', 'active'),
(154, '	Kushma', 0, '2023-08-15 01:46:29', NULL, 'rahul8', '', 'active'),
(155, '	Phalebas ', 0, '2023-08-15 01:46:47', NULL, 'rahul8', '', 'active'),
(156, '	Phidim', 0, '2023-08-15 01:47:07', NULL, 'rahul8', '', 'active'),
(157, 'Likhu Rural', 0, '2023-08-15 01:47:48', NULL, 'rahul8', '', 'active'),
(158, '	Siddhicharan ', 0, '2023-08-15 01:48:04', NULL, 'rahul8', '', 'active'),
(159, '	Belkotgadhi ', 0, '2023-08-15 01:48:20', NULL, 'rahul8', '', 'active'),
(160, '	Bidur', 0, '2023-08-15 01:48:36', NULL, 'rahul8', '', 'active'),
(161, 'Bardaghat', 0, '2023-08-15 01:49:30', NULL, 'rahul8', '', 'active'),
(162, 'Ramgram', 0, '2023-08-15 01:49:49', NULL, 'rahul8', '', 'active'),
(163, 'Sunwal ', 0, '2023-08-15 01:50:08', NULL, 'rahul8', '', 'active'),
(164, 'Devchuli', 0, '2023-08-15 01:50:31', NULL, 'rahul8', '', 'active'),
(165, '	Gaidakot', 0, '2023-08-15 01:50:45', NULL, 'rahul8', '', 'active'),
(166, 'Kawasoti', 0, '2023-08-15 01:51:00', NULL, 'rahul8', '', 'active'),
(167, 'Madhyabindu', 0, '2023-08-15 01:51:22', NULL, 'rahul8', '', 'active'),
(168, '	Beni', 0, '2023-08-15 01:51:37', NULL, 'rahul8', '', 'active'),
(169, '	Chhayanath Rara', 0, '2023-08-15 01:52:04', NULL, 'rahul8', '', 'active'),
(170, '	Belbari ', 0, '2023-08-15 01:53:31', NULL, 'rahul8', '', 'active'),
(171, '	Biratnagar ', 0, '2023-08-15 01:53:50', NULL, 'rahul8', '', 'active'),
(172, '	Letang ', 0, '2023-08-15 01:54:10', NULL, 'rahul8', '', 'active'),
(173, '	Patahrishanishchare ', 0, '2023-08-15 01:54:38', NULL, 'rahul8', '', 'active'),
(174, 'Rangeli ', 0, '2023-08-15 01:55:53', NULL, 'rahul8', '', 'active'),
(175, 'Ratuwamai ', 0, '2023-08-15 01:56:06', NULL, 'rahul8', '', 'active'),
(176, 'Sundarharaicha ', 0, '2023-08-15 01:56:20', NULL, 'rahul8', '', 'active'),
(177, 'Sunwarshi ', 0, '2023-08-15 01:56:35', NULL, 'rahul8', '', 'active'),
(178, 'Uralabari ', 0, '2023-08-15 01:56:48', NULL, 'rahul8', '', 'active'),
(179, 'Hetauda ', 0, '2023-08-15 01:57:25', NULL, 'rahul8', '', 'active'),
(180, 'Thaha ', 0, '2023-08-15 01:57:47', NULL, 'rahul8', '', 'active'),
(181, 'Aurahi ', 0, '2023-08-15 01:58:01', NULL, 'rahul8', '', 'active'),
(182, 'Balwa ', 0, '2023-08-15 01:58:14', NULL, 'rahul8', '', 'active'),
(183, 'Bardibas ', 0, '2023-08-15 01:58:27', NULL, 'rahul8', '', 'active'),
(184, 'Bhangaha ', 0, '2023-08-15 01:58:43', NULL, 'rahul8', '', 'active'),
(185, 'Gaushala ', 0, '2023-08-15 01:58:57', NULL, 'rahul8', '', 'active'),
(186, 'Jaleswor ', 0, '2023-08-15 01:59:10', NULL, 'rahul8', '', 'active'),
(187, 'Loharpatti ', 0, '2023-08-15 01:59:25', NULL, 'rahul8', '', 'active'),
(188, 'Manra Siswa ', 0, '2023-08-15 01:59:41', NULL, 'rahul8', '', 'active'),
(189, 'Matihani ', 0, '2023-08-15 01:59:55', NULL, 'rahul8', '', 'active'),
(190, 'Ramgopalpur ', 0, '2023-08-15 02:00:15', NULL, 'rahul8', '', 'active'),
(191, 'Besishahar ', 0, '2023-08-15 02:00:32', NULL, 'rahul8', '', 'active'),
(192, 'MadhyaNepal ', 0, '2023-08-15 02:00:51', NULL, 'rahul8', '', 'active'),
(193, 'Rainas ', 0, '2023-08-15 02:01:05', NULL, 'rahul8', '', 'active'),
(194, 'Sundarbazar ', 0, '2023-08-15 02:01:19', NULL, 'rahul8', '', 'active'),
(195, 'Godawari ', 0, '2023-08-15 02:01:32', NULL, 'rahul8', '', 'active'),
(196, 'Lalitpur ', 0, '2023-08-15 02:01:51', NULL, 'rahul8', '', 'active'),
(197, 'Mahalaxmi ', 0, '2023-08-15 02:02:10', NULL, 'rahul8', '', 'active'),
(198, 'Diktel Rupakot Majhuwagad', 0, '2023-08-15 02:02:29', NULL, 'rahul8', '', 'active'),
(199, 'Halesi Tuwachung', 0, '2023-08-15 02:02:50', NULL, 'rahul8', '', 'active'),
(200, 'Banepa ', 0, '2023-08-15 02:03:18', NULL, 'rahul8', '', 'active'),
(201, 'Dhulikhel ', 0, '2023-08-15 02:03:39', NULL, 'rahul8', '', 'active'),
(202, 'Mandandeupur ', 0, '2023-08-15 02:04:05', NULL, 'rahul8', '', 'active'),
(203, 'Namobuddha ', 0, '2023-08-15 02:04:15', NULL, 'rahul8', '', 'active'),
(204, 'Panauti ', 0, '2023-08-15 02:04:28', NULL, 'rahul8', '', 'active'),
(205, 'Panchkhal ', 0, '2023-08-15 02:04:43', NULL, 'rahul8', '', 'active'),
(206, 'Budhanilakantha ', 0, '2023-08-15 02:04:58', NULL, 'rahul8', '', 'active'),
(207, 'Chandragiri ', 0, '2023-08-15 02:05:12', NULL, 'rahul8', '', 'active'),
(208, 'Dakshinkali ', 0, '2023-08-15 02:05:23', NULL, 'rahul8', '', 'active'),
(209, 'Gokarneshwor ', 0, '2023-08-15 02:05:40', NULL, 'rahul8', '', 'active'),
(210, 'Kageshwori Manahora ', 0, '2023-08-15 02:06:01', NULL, 'rahul8', '', 'active'),
(211, 'Kathmandu ', 0, '2023-08-15 02:06:15', NULL, 'rahul8', '', 'active'),
(212, 'Kirtipur ', 0, '2023-08-15 02:06:27', NULL, 'rahul8', '', 'active'),
(213, 'Nagarjun ', 0, '2023-08-15 02:06:42', NULL, 'rahul8', '', 'active'),
(214, 'Shankharapur ', 0, '2023-08-15 02:06:56', NULL, 'rahul8', '', 'active'),
(215, 'Tarakeshwor ', 0, '2023-08-15 02:07:11', NULL, 'rahul8', '', 'active'),
(216, 'Tokha ', 0, '2023-08-15 02:07:25', NULL, 'rahul8', '', 'active'),
(217, 'Pokhara ', 0, '2023-08-15 02:11:46', NULL, 'rahul8', '', 'active'),
(218, 'Banganga', 0, '2023-08-15 02:12:08', NULL, 'rahul8', '', 'active'),
(219, 'Buddhabhumi ', 0, '2023-08-15 02:12:29', NULL, 'rahul8', '', 'active'),
(220, 'Kapilbastu ', 0, '2023-08-15 02:12:44', NULL, 'rahul8', '', 'active'),
(221, 'Krishnanagar ', 0, '2023-08-15 02:12:57', NULL, 'rahul8', '', 'active'),
(222, 'Maharajgunj ', 0, '2023-08-15 02:13:27', NULL, 'rahul8', '', 'active'),
(223, 'Shivaraj ', 0, '2023-08-15 02:13:42', NULL, 'rahul8', '', 'active'),
(224, 'Bedkot ', 0, '2023-08-15 02:13:58', NULL, 'rahul8', '', 'active'),
(225, 'Belauri ', 0, '2023-08-15 02:14:10', NULL, 'rahul8', '', 'active'),
(226, 'Bhimdatta ', 0, '2023-08-15 02:14:23', NULL, 'rahul8', '', 'active'),
(227, 'Krishnapur ', 0, '2023-08-15 02:15:06', NULL, 'rahul8', '', 'active'),
(228, 'Mahakali ', 0, '2023-08-15 02:15:22', NULL, 'rahul8', '', 'active'),
(229, 'Punarbas ', 0, '2023-08-15 02:15:49', NULL, 'rahul8', '', 'active'),
(230, 'Shuklaphanta ', 0, '2023-08-15 02:16:13', NULL, 'rahul8', '', 'active'),
(231, 'Khandachakra ', 0, '2023-08-15 02:16:26', NULL, 'rahul8', '', 'active'),
(232, 'Raskot ', 0, '2023-08-15 02:16:49', NULL, 'rahul8', '', 'active'),
(233, 'Tilagufa ', 0, '2023-08-15 02:17:03', NULL, 'rahul8', '', 'active'),
(234, 'Bhajani ', 0, '2023-08-15 02:17:15', NULL, 'rahul8', '', 'active'),
(235, 'Dhangadhi ', 0, '2023-08-15 02:17:32', NULL, 'rahul8', '', 'active'),
(236, 'Gauriganga ', 0, '2023-08-15 02:17:44', NULL, 'rahul8', '', 'active'),
(237, 'Ghodaghodi ', 0, '2023-08-15 02:17:56', NULL, 'rahul8', '', 'active'),
(238, 'Godawari ', 0, '2023-08-15 02:18:10', NULL, 'rahul8', '', 'active'),
(239, 'Lamkichuha ', 0, '2023-08-15 02:18:28', NULL, 'rahul8', '', 'active'),
(240, 'Tikapur ', 0, '2023-08-15 02:18:42', NULL, 'rahul8', '', 'active'),
(241, 'Chandannath ', 0, '2023-08-15 02:18:55', NULL, 'rahul8', '', 'active'),
(242, 'Arjundhara ', 0, '2023-08-15 02:19:15', NULL, 'rahul8', '', 'active'),
(243, 'Bhadrapur ', 0, '2023-08-15 02:19:28', NULL, 'rahul8', '', 'active'),
(244, 'Birtamod ', 0, '2023-08-15 02:19:40', NULL, 'rahul8', '', 'active'),
(245, 'Damak ', 0, '2023-08-15 02:19:57', NULL, 'rahul8', '', 'active'),
(246, 'Gauradhaha ', 0, '2023-08-15 02:20:11', NULL, 'rahul8', '', 'active'),
(247, 'Kankai ', 0, '2023-08-15 02:20:30', NULL, 'rahul8', '', 'active'),
(248, 'Mechinagar ', 0, '2023-08-15 02:20:44', NULL, 'rahul8', '', 'active'),
(249, 'Shivasataxi ', 0, '2023-08-15 02:20:56', NULL, 'rahul8', '', 'active'),
(250, 'Bheri ', 0, '2023-08-15 02:21:08', NULL, 'rahul8', '', 'active'),
(251, 'Chhedagad ', 0, '2023-08-15 02:21:20', NULL, 'rahul8', '', 'active'),
(252, 'Nalagad ', 0, '2023-08-15 02:21:45', NULL, 'rahul8', '', 'active'),
(255, 'Deumai ', 0, '2023-08-15 02:23:16', NULL, 'rahul8', '', 'active'),
(256, 'Illam ', 0, '2023-08-15 02:23:31', NULL, 'rahul8', '', 'active'),
(257, 'Mai Municipality	', 0, '2023-08-15 02:23:43', NULL, 'rahul8', '', 'active'),
(258, 'Suryodaya ', 0, '2023-08-15 02:24:01', NULL, 'rahul8', '', 'active'),
(259, 'Musikot ', 0, '2023-08-15 02:25:46', NULL, 'rahul8', '', 'active'),
(260, 'Resunga ', 0, '2023-08-15 02:25:59', NULL, 'rahul8', '', 'active'),
(261, 'Gorkha ', 0, '2023-08-15 02:26:21', NULL, 'rahul8', '', 'active'),
(262, 'Palungtar ', 0, '2023-08-15 02:26:32', NULL, 'rahul8', '', 'active'),
(263, '	Dipayal Silgadi', 0, '2023-08-15 02:27:22', NULL, 'rahul8', '', 'active'),
(264, 'Shikhar ', 0, '2023-08-15 02:27:41', NULL, 'rahul8', '', 'active'),
(265, '	Thuli Bheri', 0, '2023-08-15 02:28:08', NULL, 'rahul8', '', 'active'),
(266, 'Tripurasundari ', 0, '2023-08-15 02:28:26', NULL, 'rahul8', '', 'active'),
(267, 'Bhimeshwor ', 0, '2023-08-15 02:28:39', NULL, 'rahul8', '', 'active'),
(268, 'Jiri ', 0, '2023-08-15 02:29:12', NULL, 'rahul8', '', 'active'),
(269, 'Bideha ', 0, '2023-08-15 02:29:32', NULL, 'rahul8', '', 'active'),
(270, 'Chhireshwornath ', 0, '2023-08-15 02:29:47', NULL, 'rahul8', '', 'active'),
(271, 'Chhireshwornath ', 0, '2023-08-15 02:30:07', NULL, 'rahul8', '', 'active'),
(272, 'Dhanusadham ', 0, '2023-08-15 02:30:46', NULL, 'rahul8', '', 'active'),
(273, '	Ganeshman Charnath', 0, '2023-08-15 02:30:58', NULL, 'rahul8', '', 'active'),
(274, 'Hansapur ', 0, '2023-08-15 02:31:10', NULL, 'rahul8', '', 'active'),
(275, 'Janakpurdham ', 0, '2023-08-15 02:31:29', NULL, 'rahul8', '', 'active'),
(276, 'Kamala ', 0, '2023-08-15 02:31:42', NULL, 'rahul8', '', 'active'),
(277, 'Mithila Bihari', 0, '2023-08-15 02:32:33', NULL, 'rahul8', '', 'active'),
(279, 'Mithila ', 0, '2023-08-15 02:33:37', NULL, 'rahul8', '', 'active'),
(280, 'Nagarain ', 0, '2023-08-15 02:34:49', NULL, 'rahul8', '', 'active'),
(281, 'Sabaila ', 0, '2023-08-15 02:35:58', NULL, 'rahul8', '', 'active'),
(282, 'Sahidnagar ', 0, '2023-08-15 02:38:28', NULL, 'rahul8', '', 'active'),
(283, 'Dhankuta ', 0, '2023-08-15 02:38:44', NULL, 'rahul8', '', 'active'),
(284, 'Mahalaxmi ', 0, '2023-08-15 02:39:00', NULL, 'rahul8', '', 'active'),
(285, 'Nilakantha ', 0, '2023-08-15 03:53:23', NULL, 'rahul8', '', 'active'),
(286, 'Dhunibesi ', 0, '2023-08-15 03:53:35', NULL, 'rahul8', '', 'active'),
(287, 'Galchi Rural ', 0, '2023-08-15 03:53:57', NULL, 'rahul8', '', 'active'),
(288, 'Shailyashikhar ', 0, '2023-08-15 03:55:03', NULL, 'rahul8', '', 'active'),
(289, 'Mahakali ', 0, '2023-08-15 03:55:18', NULL, 'rahul8', '', 'active'),
(290, 'Lamahi ', 0, '2023-08-15 03:55:38', NULL, 'rahul8', '', 'active'),
(291, 'Tulsipur', 0, '2023-08-15 03:55:55', NULL, 'rahul8', '', 'active'),
(292, 'Narayan ', 0, '2023-08-15 03:56:20', NULL, 'rahul8', '', 'active'),
(293, 'Dullu ', 0, '2023-08-15 03:56:37', NULL, 'rahul8', '', 'active'),
(294, 'Chamunda Bindrasaini ', 0, '2023-08-15 03:56:49', NULL, 'rahul8', '', 'active'),
(295, 'Aathabis ', 0, '2023-08-15 03:57:01', NULL, 'rahul8', '', 'active'),
(296, 'Parashuram ', 0, '2023-08-15 03:57:17', NULL, 'rahul8', '', 'active'),
(297, 'Amargadhi ', 0, '2023-08-15 03:57:28', NULL, 'rahul8', '', 'active'),
(298, 'Bharatpur ', 0, '2023-08-15 03:57:43', NULL, 'rahul8', '', 'active'),
(299, 'Ratnanagar ', 0, '2023-08-15 03:57:57', NULL, 'rahul8', '', 'active'),
(300, 'Rapti ', 0, '2023-08-15 03:58:09', NULL, 'rahul8', '', 'active'),
(301, 'Madi ', 0, '2023-08-15 03:58:21', NULL, 'rahul8', '', 'active'),
(302, 'Khairahani ', 0, '2023-08-15 03:58:31', NULL, 'rahul8', '', 'active'),
(303, 'Kalika ', 0, '2023-08-15 03:58:42', NULL, 'rahul8', '', 'active'),
(304, 'Shadananda ', 0, '2023-08-15 04:00:46', NULL, 'rahul8', '', 'active'),
(305, 'Bhojpur ', 0, '2023-08-15 04:00:59', NULL, 'rahul8', '', 'active'),
(306, 'Suryabinayak ', 0, '2023-08-15 04:01:21', NULL, 'rahul8', '', 'active'),
(307, '	Madhyapur Thimi', 0, '2023-08-15 04:02:23', NULL, 'rahul8', '', 'active'),
(308, 'Changunarayan', 0, '2023-08-15 04:02:35', NULL, 'rahul8', '', 'active'),
(309, 'Bhaktapur ', 0, '2023-08-15 04:02:48', NULL, 'rahul8', '', 'active'),
(310, 'Thakurbaba ', 0, '2023-08-15 04:03:00', NULL, 'rahul8', '', 'active'),
(311, 'Rajapur ', 0, '2023-08-15 04:03:12', NULL, 'rahul8', '', 'active'),
(312, 'Madhuwan ', 0, '2023-08-15 04:03:23', NULL, 'rahul8', '', 'active'),
(313, 'Gulariya ', 0, '2023-08-15 04:03:33', NULL, 'rahul8', '', 'active'),
(314, 'Barbardiya ', 0, '2023-08-15 04:03:46', NULL, 'rahul8', '', 'active'),
(315, 'Bansagadhi ', 0, '2023-08-15 04:03:58', NULL, 'rahul8', '', 'active'),
(316, 'Simraungadh ', 0, '2023-08-15 04:04:11', NULL, 'rahul8', '', 'active'),
(317, 'Pacharauta ', 0, '2023-08-15 04:04:25', NULL, 'rahul8', '', 'active'),
(318, 'Nijgadh ', 0, '2023-08-15 04:04:37', NULL, 'rahul8', '', 'active'),
(319, 'Mahagadhimai ', 0, '2023-08-15 04:04:51', NULL, 'rahul8', '', 'active'),
(320, 'Kolhabi ', 0, '2023-08-15 04:05:03', NULL, 'rahul8', '', 'active'),
(321, 'Kalaiya ', 0, '2023-08-15 04:05:20', NULL, 'rahul8', '', 'active'),
(322, 'Jitpur Simara ', 0, '2023-08-15 04:05:34', NULL, 'rahul8', '', 'active'),
(323, 'Kohalpur ', 0, '2023-08-15 04:05:47', NULL, 'rahul8', '', 'active'),
(324, 'Nepalgunj ', 0, '2023-08-15 04:06:09', NULL, 'rahul8', '', 'active'),
(325, 'Budhinanda ', 0, '2023-08-15 04:06:23', NULL, 'rahul8', '', 'active'),
(326, 'Budhiganga ', 0, '2023-08-15 04:06:36', NULL, 'rahul8', '', 'active'),
(327, 'Badimalika ', 0, '2023-08-15 04:06:47', NULL, 'rahul8', '', 'active'),
(328, 'JayaPrithivi ', 0, '2023-08-15 04:07:11', NULL, 'rahul8', '', 'active'),
(329, 'Bungal ', 0, '2023-08-15 04:07:23', NULL, 'rahul8', '', 'active'),
(330, 'Purchaudi ', 0, '2023-08-15 04:07:42', NULL, 'rahul8', '', 'active'),
(331, 'Patan ', 0, '2023-08-15 04:07:55', NULL, 'rahul8', '', 'active'),
(332, 'Melauli ', 0, '2023-08-15 04:08:07', NULL, 'rahul8', '', 'active'),
(333, 'Dasharathchanda ', 0, '2023-08-15 04:08:19', NULL, 'rahul8', '', 'active'),
(334, 'Jaimuni ', 0, '2023-08-15 04:08:35', NULL, 'rahul8', '', 'active'),
(335, 'Galkot ', 0, '2023-08-15 04:08:47', NULL, 'rahul8', '', 'active'),
(336, 'Dhorpatan ', 0, '2023-08-15 04:08:59', NULL, 'rahul8', '', 'active'),
(337, 'Baglung ', 0, '2023-08-15 04:09:12', NULL, 'rahul8', '', 'active'),
(338, 'Sitganga ', 0, '2023-08-15 04:09:29', NULL, 'rahul8', '', 'active'),
(339, 'Sandhikharka ', 0, '2023-08-15 04:09:45', NULL, 'rahul8', '', 'active'),
(340, 'Bhumekasthan ', 0, '2023-08-15 04:09:57', NULL, 'rahul8', '', 'active'),
(341, 'Chhatradev ', 0, '2023-08-15 04:10:15', NULL, 'rahul8', '', 'active'),
(342, 'Sanphebagar ', 0, '2023-08-15 04:10:35', NULL, 'rahul8', '', 'active'),
(343, 'Panchadewal Binayak', 0, '2023-08-15 04:10:53', NULL, 'rahul8', '', 'active'),
(344, 'Mangalsen ', 0, '2023-08-15 04:11:04', NULL, 'rahul8', '', 'active'),
(345, 'Kamalbazar ', 0, '2023-08-15 04:11:17', NULL, 'rahul8', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `municipility_edit_request`
--

CREATE TABLE `municipility_edit_request` (
  `id` int(11) NOT NULL,
  `municipility_name` varchar(25) NOT NULL,
  `municipility_area` int(11) NOT NULL,
  `municipility_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `municipility_ward`
--

CREATE TABLE `municipility_ward` (
  `id` int(11) NOT NULL,
  `municipility_id` int(11) NOT NULL,
  `ward_name` varchar(25) NOT NULL,
  `ward_no` int(4) NOT NULL,
  `addeddate` datetime DEFAULT NULL,
  `updatedate` datetime DEFAULT NULL,
  `createdBy` varchar(25) NOT NULL,
  `updatedBy` varchar(25) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `municipility_ward`
--

INSERT INTO `municipility_ward` (`id`, `municipility_id`, `ward_name`, `ward_no`, `addeddate`, `updatedate`, `createdBy`, `updatedBy`, `status`) VALUES
(6, 7, 'tansen', 9, '2023-04-11 01:10:31', '2023-08-02 08:46:47', 'Prashant23', 'Rahul8', 'active'),
(7, 7, 'damkada ', 9, '2023-08-10 05:54:36', NULL, 'Rahul8', '', 'active'),
(9, 71, '45', 45, '2023-08-17 02:59:09', '2023-08-17 02:59:27', 'Rahul8', 'Rahul8', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `id` int(11) NOT NULL,
  `province` varchar(25) NOT NULL,
  `area` int(11) NOT NULL,
  `addeddate` datetime DEFAULT NULL,
  `updatedate` datetime DEFAULT NULL,
  `createdBy` varchar(30) NOT NULL,
  `updatedBy` varchar(30) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`id`, `province`, `area`, `addeddate`, `updatedate`, `createdBy`, `updatedBy`, `status`) VALUES
(13, 'Koshi', 76754, '2023-07-08 10:44:32', '2023-08-16 03:38:41', 'rahul8', 'prakash1', 'active'),
(14, 'Madhesh', 96610, '2023-07-08 10:45:01', '2023-08-16 01:21:41', 'rahul8', 'Rahul8', 'active'),
(15, 'Bagmati', 203002, '2023-07-08 10:45:30', NULL, 'rahul8', '', 'active'),
(16, 'Gandaki', 21504, '2023-07-08 10:46:10', NULL, 'rahul8', '', 'active'),
(17, 'Lumbini', 22288, '2023-07-08 10:46:42', NULL, 'rahul8', '', 'active'),
(18, 'Karnali', 27984, '2023-07-08 10:47:10', NULL, 'rahul8', '', 'active'),
(19, 'Sudurpashchim', 19915, '2023-07-08 10:47:35', NULL, 'rahul8', '', 'active'),
(21, 'xyz', 1245, '2023-08-17 02:57:55', NULL, 'rahul8', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `province_district`
--

CREATE TABLE `province_district` (
  `id` int(11) NOT NULL,
  `province_id` int(10) NOT NULL,
  `district_id` int(25) NOT NULL,
  `addeddate` datetime DEFAULT NULL,
  `updatedate` datetime DEFAULT NULL,
  `createdBy` varchar(30) NOT NULL,
  `updatedBy` varchar(30) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `province_district`
--

INSERT INTO `province_district` (`id`, `province_id`, `district_id`, `addeddate`, `updatedate`, `createdBy`, `updatedBy`, `status`) VALUES
(11, 13, 8, '2023-07-08 10:57:40', NULL, 'rahul8', '', 'active'),
(12, 13, 9, '2023-07-08 10:57:56', NULL, 'rahul8', '', 'active'),
(13, 13, 15, '2023-07-08 10:58:15', NULL, 'rahul8', '', 'active'),
(14, 13, 16, '2023-07-08 10:58:30', NULL, 'rahul8', '', 'active'),
(15, 13, 17, '2023-07-08 10:58:46', NULL, 'rahul8', '', 'active'),
(17, 13, 19, '2023-07-08 10:59:27', NULL, 'rahul8', '', 'active'),
(18, 13, 20, '2023-07-08 10:59:41', NULL, 'rahul8', '', 'active'),
(19, 13, 21, '2023-07-08 10:59:55', NULL, 'rahul8', '', 'active'),
(20, 13, 22, '2023-07-08 11:00:11', NULL, 'rahul8', '', 'active'),
(21, 13, 23, '2023-07-08 11:00:27', NULL, 'rahul8', '', 'active'),
(22, 13, 24, '2023-07-08 11:00:42', NULL, 'rahul8', '', 'active'),
(23, 13, 25, '2023-07-08 11:00:58', NULL, 'rahul8', '', 'active'),
(24, 13, 26, '2023-07-08 11:01:12', NULL, 'rahul8', '', 'active'),
(25, 13, 18, '2023-07-08 11:25:16', '2023-08-08 02:15:13', 'rahul8', 'Rahul8', 'active'),
(26, 17, 28, '2023-07-08 11:25:54', NULL, 'rahul8', '', 'active'),
(27, 17, 38, '2023-07-08 11:27:38', NULL, 'rahul8', '', 'active'),
(28, 17, 29, '2023-07-08 11:28:12', '2023-08-08 02:19:09', 'rahul8', 'Rahul8', 'active'),
(29, 17, 30, '2023-07-08 11:28:34', '2023-08-08 02:20:04', 'rahul8', 'Rahul8', 'active'),
(30, 17, 31, '2023-07-08 11:28:50', NULL, 'rahul8', '', 'active'),
(31, 17, 32, '2023-07-08 11:29:06', NULL, 'rahul8', '', 'active'),
(32, 17, 33, '2023-07-08 11:29:22', NULL, 'rahul8', '', 'active'),
(33, 17, 34, '2023-07-08 11:29:38', NULL, 'rahul8', '', 'active'),
(34, 17, 35, '2023-07-08 11:29:54', NULL, 'rahul8', '', 'active'),
(35, 17, 36, '2023-07-08 11:30:09', NULL, 'rahul8', '', 'active'),
(36, 17, 37, '2023-07-08 11:30:32', NULL, 'rahul8', '', 'active'),
(37, 17, 27, '2023-08-08 02:20:53', NULL, 'rahul8', '', 'active'),
(38, 14, 39, '2023-08-08 02:27:13', NULL, 'rahul8', '', 'active'),
(39, 14, 40, '2023-08-08 02:27:39', NULL, 'rahul8', '', 'active'),
(40, 14, 41, '2023-08-08 02:27:53', NULL, 'rahul8', '', 'active'),
(41, 14, 42, '2023-08-08 02:28:15', NULL, 'rahul8', '', 'active'),
(42, 14, 43, '2023-08-08 02:28:29', NULL, 'rahul8', '', 'active'),
(43, 14, 44, '2023-08-08 02:28:42', NULL, 'rahul8', '', 'active'),
(44, 14, 45, '2023-08-08 02:29:02', NULL, 'rahul8', '', 'active'),
(45, 14, 46, '2023-08-08 02:29:19', NULL, 'rahul8', '', 'active'),
(46, 16, 60, '2023-08-08 02:34:00', NULL, 'rahul8', '', 'active'),
(47, 16, 61, '2023-08-08 02:34:20', NULL, 'rahul8', '', 'active'),
(48, 16, 62, '2023-08-08 02:34:32', NULL, 'rahul8', '', 'active'),
(49, 16, 63, '2023-08-08 02:34:45', NULL, 'rahul8', '', 'active'),
(50, 16, 64, '2023-08-08 02:35:07', NULL, 'rahul8', '', 'active'),
(51, 16, 65, '2023-08-08 02:35:20', NULL, 'rahul8', '', 'active'),
(52, 16, 66, '2023-08-08 02:35:35', NULL, 'rahul8', '', 'active'),
(53, 16, 28, '2023-08-08 02:36:00', NULL, 'rahul8', '', 'active'),
(54, 16, 68, '2023-08-08 02:36:34', NULL, 'rahul8', '', 'active'),
(55, 16, 69, '2023-08-08 02:36:58', NULL, 'rahul8', '', 'active'),
(56, 16, 70, '2023-08-08 02:37:16', NULL, 'rahul8', '', 'active'),
(57, 18, 71, '2023-08-08 02:38:01', NULL, 'rahul8', '', 'active'),
(58, 18, 72, '2023-08-08 02:38:40', NULL, 'rahul8', '', 'active'),
(59, 18, 73, '2023-08-08 02:38:58', NULL, 'rahul8', '', 'active'),
(60, 18, 74, '2023-08-08 02:39:17', NULL, 'rahul8', '', 'active'),
(61, 18, 75, '2023-08-08 02:39:31', NULL, 'rahul8', '', 'active'),
(62, 18, 76, '2023-08-08 02:39:43', NULL, 'rahul8', '', 'active'),
(63, 18, 77, '2023-08-08 02:40:11', NULL, 'rahul8', '', 'active'),
(64, 18, 78, '2023-08-08 02:40:38', NULL, 'rahul8', '', 'active'),
(65, 18, 79, '2023-08-08 02:40:54', NULL, 'rahul8', '', 'active'),
(66, 18, 80, '2023-08-08 02:41:07', NULL, 'rahul8', '', 'active'),
(67, 19, 81, '2023-08-08 02:41:40', NULL, 'rahul8', '', 'active'),
(68, 19, 82, '2023-08-08 02:41:55', NULL, 'rahul8', '', 'active'),
(69, 19, 83, '2023-08-08 02:42:14', NULL, 'rahul8', '', 'active'),
(70, 19, 84, '2023-08-08 02:42:29', NULL, 'rahul8', '', 'active'),
(71, 19, 85, '2023-08-08 02:42:50', NULL, 'rahul8', '', 'active'),
(72, 19, 86, '2023-08-08 02:43:09', NULL, 'rahul8', '', 'active'),
(73, 19, 87, '2023-08-08 02:43:27', NULL, 'rahul8', '', 'active'),
(74, 19, 88, '2023-08-08 02:43:46', NULL, 'rahul8', '', 'active'),
(75, 19, 89, '2023-08-08 02:44:02', NULL, 'rahul8', '', 'active'),
(76, 15, 47, '2023-08-08 02:45:02', NULL, 'rahul8', '', 'active'),
(77, 15, 48, '2023-08-08 02:45:14', NULL, 'rahul8', '', 'active'),
(78, 15, 49, '2023-08-08 02:45:32', NULL, 'rahul8', '', 'active'),
(79, 15, 51, '2023-08-08 02:45:47', NULL, 'rahul8', '', 'active'),
(80, 15, 50, '2023-08-08 02:46:12', NULL, 'rahul8', '', 'active'),
(81, 15, 52, '2023-08-08 02:46:30', NULL, 'rahul8', '', 'active'),
(82, 15, 53, '2023-08-08 02:46:46', NULL, 'rahul8', '', 'active'),
(83, 15, 54, '2023-08-08 02:46:59', NULL, 'rahul8', '', 'active'),
(84, 15, 55, '2023-08-08 02:47:26', NULL, 'rahul8', '', 'active'),
(85, 15, 56, '2023-08-08 02:47:39', NULL, 'rahul8', '', 'active'),
(86, 15, 57, '2023-08-08 02:47:54', NULL, 'rahul8', '', 'active'),
(87, 15, 58, '2023-08-08 02:48:21', NULL, 'rahul8', '', 'active'),
(88, 15, 59, '2023-08-08 02:48:37', NULL, 'rahul8', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `province_edit_request`
--

CREATE TABLE `province_edit_request` (
  `id` int(11) NOT NULL,
  `province_name` varchar(35) NOT NULL,
  `province_area` int(11) NOT NULL,
  `province_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `province_edit_request`
--

INSERT INTO `province_edit_request` (`id`, `province_name`, `province_area`, `province_id`, `user_id`, `created_date`) VALUES
(40, 'Madeshq', 11223, 3, 18, '2023-04-09 01:23:15'),
(44, 'Bagmati', 3652, 2, 18, '2023-04-09 02:09:09');

-- --------------------------------------------------------

--
-- Table structure for table `province_municipility`
--

CREATE TABLE `province_municipility` (
  `id` int(11) NOT NULL,
  `province_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `municipility_id` int(11) NOT NULL,
  `addeddate` datetime DEFAULT NULL,
  `updatedate` datetime DEFAULT NULL,
  `createdBy` varchar(30) NOT NULL,
  `updatedBy` varchar(30) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `province_municipility`
--

INSERT INTO `province_municipility` (`id`, `province_id`, `district_id`, `municipility_id`, `addeddate`, `updatedate`, `createdBy`, `updatedBy`, `status`) VALUES
(11, 17, 31, 9, '2023-08-10 05:50:58', NULL, 'rahul8', '', 'active'),
(12, 17, 31, 10, '2023-08-10 05:51:18', NULL, 'rahul8', '', 'active'),
(13, 17, 31, 11, '2023-08-10 05:51:38', NULL, 'rahul8', '', 'active'),
(14, 17, 31, 12, '2023-08-10 05:51:59', NULL, 'rahul8', '', 'active'),
(15, 17, 31, 13, '2023-08-10 05:52:17', NULL, 'rahul8', '', 'active'),
(16, 17, 31, 14, '2023-08-10 05:52:39', NULL, 'rahul8', '', 'active'),
(17, 17, 31, 15, '2023-08-10 05:52:59', NULL, 'rahul8', '', 'active'),
(18, 17, 31, 16, '2023-08-10 05:53:18', NULL, 'rahul8', '', 'active'),
(19, 17, 31, 17, '2023-08-10 05:53:42', NULL, 'rahul8', '', 'active'),
(20, 13, 26, 25, '2023-08-15 04:13:30', NULL, 'rahul8', '', 'active'),
(21, 13, 26, 21, '2023-08-15 04:13:53', NULL, 'rahul8', '', 'active'),
(22, 13, 26, 20, '2023-08-15 04:14:15', NULL, 'rahul8', '', 'active'),
(23, 13, 26, 19, '2023-08-15 04:14:40', NULL, 'rahul8', '', 'active'),
(24, 13, 26, 26, '2023-08-15 04:15:01', NULL, 'rahul8', '', 'active'),
(25, 13, 26, 23, '2023-08-15 04:16:44', NULL, 'rahul8', '', 'active'),
(26, 13, 26, 22, '2023-08-15 04:17:06', NULL, 'rahul8', '', 'active'),
(27, 13, 25, 31, '2023-08-15 04:17:44', NULL, 'rahul8', '', 'active'),
(28, 13, 25, 29, '2023-08-15 04:18:44', NULL, 'rahul8', '', 'active'),
(29, 13, 25, 32, '2023-08-15 04:19:10', NULL, 'rahul8', '', 'active'),
(30, 13, 25, 30, '2023-08-15 04:19:35', NULL, 'rahul8', '', 'active'),
(31, 13, 25, 28, '2023-08-15 04:20:00', NULL, 'rahul8', '', 'active'),
(32, 13, 25, 27, '2023-08-15 04:20:22', NULL, 'rahul8', '', 'active'),
(33, 13, 24, 39, '2023-08-15 04:20:50', NULL, 'rahul8', '', 'active'),
(34, 13, 24, 41, '2023-08-15 04:21:09', NULL, 'rahul8', '', 'active'),
(35, 13, 24, 40, '2023-08-15 04:21:28', NULL, 'rahul8', '', 'active'),
(36, 13, 24, 38, '2023-08-15 04:21:53', NULL, 'rahul8', '', 'active'),
(37, 13, 24, 37, '2023-08-15 04:22:13', NULL, 'rahul8', '', 'active'),
(38, 13, 24, 36, '2023-08-15 04:22:30', NULL, 'rahul8', '', 'active'),
(39, 13, 24, 35, '2023-08-15 04:23:01', NULL, 'rahul8', '', 'active'),
(40, 13, 24, 34, '2023-08-15 04:23:21', NULL, 'rahul8', '', 'active'),
(41, 16, 70, 51, '2023-08-15 04:24:15', NULL, 'rahul8', '', 'active'),
(42, 16, 70, 46, '2023-08-15 04:24:35', NULL, 'rahul8', '', 'active'),
(43, 16, 70, 45, '2023-08-15 04:24:54', NULL, 'rahul8', '', 'active'),
(44, 16, 70, 44, '2023-08-15 04:25:14', NULL, 'rahul8', '', 'active'),
(45, 16, 70, 50, '2023-08-15 04:25:34', NULL, 'rahul8', '', 'active'),
(46, 16, 70, 49, '2023-08-15 04:25:56', NULL, 'rahul8', '', 'active'),
(47, 16, 70, 48, '2023-08-15 04:26:18', NULL, 'rahul8', '', 'active'),
(48, 16, 70, 47, '2023-08-15 04:26:39', NULL, 'rahul8', '', 'active'),
(49, 16, 70, 43, '2023-08-15 04:26:57', NULL, 'rahul8', '', 'active'),
(50, 16, 70, 42, '2023-08-15 04:27:20', NULL, 'rahul8', '', 'active'),
(51, 16, 69, 62, '2023-08-15 04:27:40', NULL, 'rahul8', '', 'active'),
(52, 16, 69, 61, '2023-08-15 04:28:05', NULL, 'rahul8', '', 'active'),
(53, 16, 69, 57, '2023-08-15 04:28:24', NULL, 'rahul8', '', 'active'),
(54, 16, 69, 56, '2023-08-15 04:28:45', NULL, 'rahul8', '', 'active'),
(55, 16, 69, 54, '2023-08-15 04:29:04', NULL, 'rahul8', '', 'active'),
(56, 16, 69, 60, '2023-08-15 04:29:27', NULL, 'rahul8', '', 'active'),
(57, 16, 69, 59, '2023-08-15 04:29:46', NULL, 'rahul8', '', 'active'),
(58, 16, 69, 58, '2023-08-15 04:30:04', NULL, 'rahul8', '', 'active'),
(59, 16, 69, 55, '2023-08-15 04:30:25', NULL, 'rahul8', '', 'active'),
(60, 16, 69, 53, '2023-08-15 04:30:44', NULL, 'rahul8', '', 'active'),
(61, 16, 69, 52, '2023-08-15 04:31:44', NULL, 'rahul8', '', 'active'),
(62, 18, 80, 70, '2023-08-15 04:32:12', NULL, 'rahul8', '', 'active'),
(63, 18, 80, 69, '2023-08-15 04:32:33', NULL, 'rahul8', '', 'active'),
(64, 18, 80, 68, '2023-08-15 04:32:59', NULL, 'rahul8', '', 'active'),
(65, 18, 80, 65, '2023-08-15 04:33:20', NULL, 'rahul8', '', 'active'),
(66, 18, 80, 64, '2023-08-15 04:33:41', NULL, 'rahul8', '', 'active'),
(67, 18, 80, 71, '2023-08-15 04:34:00', NULL, 'rahul8', '', 'active'),
(68, 18, 80, 67, '2023-08-15 04:34:25', NULL, 'rahul8', '', 'active'),
(69, 18, 80, 66, '2023-08-15 04:34:44', NULL, 'rahul8', '', 'active'),
(70, 18, 80, 63, '2023-08-15 04:35:03', NULL, 'rahul8', '', 'active'),
(71, 13, 23, 78, '2023-08-15 04:35:29', NULL, 'rahul8', '', 'active'),
(72, 13, 23, 77, '2023-08-15 04:36:15', NULL, 'rahul8', '', 'active'),
(73, 13, 23, 72, '2023-08-15 04:36:32', NULL, 'rahul8', '', 'active'),
(74, 13, 23, 76, '2023-08-15 04:37:35', NULL, 'rahul8', '', 'active'),
(75, 13, 22, 79, '2023-08-15 04:37:57', NULL, 'rahul8', '', 'active'),
(76, 14, 8, 87, '2023-08-15 04:38:40', '2023-08-15 04:39:25', 'rahul8', 'Rahul8', 'active'),
(77, 14, 46, 86, '2023-08-15 04:39:41', NULL, 'rahul8', '', 'active'),
(78, 14, 46, 85, '2023-08-15 04:40:17', NULL, 'rahul8', '', 'active'),
(79, 14, 46, 84, '2023-08-15 04:41:02', NULL, 'rahul8', '', 'active'),
(80, 14, 46, 83, '2023-08-15 04:41:29', NULL, 'rahul8', '', 'active'),
(81, 14, 46, 82, '2023-08-15 04:41:51', NULL, 'rahul8', '', 'active'),
(82, 14, 46, 81, '2023-08-15 04:42:13', NULL, 'rahul8', '', 'active'),
(83, 14, 46, 80, '2023-08-15 04:42:37', NULL, 'rahul8', '', 'active'),
(84, 15, 59, 90, '2023-08-15 04:43:18', NULL, 'rahul8', '', 'active'),
(85, 15, 59, 89, '2023-08-15 04:43:41', NULL, 'rahul8', '', 'active'),
(86, 15, 59, 88, '2023-08-15 04:44:03', NULL, 'rahul8', '', 'active'),
(87, 15, 58, 92, '2023-08-15 04:44:40', NULL, 'rahul8', '', 'active'),
(88, 15, 58, 91, '2023-08-15 04:45:08', NULL, 'rahul8', '', 'active'),
(89, 14, 45, 103, '2023-08-15 04:45:55', NULL, 'rahul8', '', 'active'),
(90, 14, 45, 102, '2023-08-15 04:46:17', NULL, 'rahul8', '', 'active'),
(91, 14, 45, 100, '2023-08-15 04:47:00', NULL, 'rahul8', '', 'active'),
(92, 14, 45, 99, '2023-08-15 04:47:25', NULL, 'rahul8', '', 'active'),
(93, 14, 45, 98, '2023-08-15 04:47:46', NULL, 'rahul8', '', 'active'),
(94, 14, 45, 97, '2023-08-15 04:48:09', NULL, 'rahul8', '', 'active'),
(95, 14, 45, 96, '2023-08-15 04:48:27', NULL, 'rahul8', '', 'active'),
(96, 14, 45, 94, '2023-08-15 04:49:02', NULL, 'rahul8', '', 'active'),
(97, 14, 45, 93, '2023-08-15 04:49:23', NULL, 'rahul8', '', 'active'),
(98, 14, 44, 111, '2023-08-15 04:49:50', NULL, 'rahul8', '', 'active'),
(99, 14, 44, 110, '2023-08-15 04:50:10', NULL, 'rahul8', '', 'active'),
(100, 14, 44, 109, '2023-08-15 04:50:35', NULL, 'rahul8', '', 'active'),
(101, 14, 44, 108, '2023-08-15 04:50:58', NULL, 'rahul8', '', 'active'),
(102, 14, 44, 107, '2023-08-15 04:51:19', NULL, 'rahul8', '', 'active'),
(103, 14, 44, 106, '2023-08-15 04:51:46', NULL, 'rahul8', '', 'active'),
(104, 14, 44, 105, '2023-08-15 04:52:05', NULL, 'rahul8', '', 'active'),
(105, 14, 44, 104, '2023-08-15 04:52:26', NULL, 'rahul8', '', 'active'),
(106, 13, 21, 116, '2023-08-15 04:52:57', NULL, 'rahul8', '', 'active'),
(107, 13, 21, 115, '2023-08-15 04:53:24', NULL, 'rahul8', '', 'active'),
(108, 13, 21, 114, '2023-08-15 04:53:42', NULL, 'rahul8', '', 'active'),
(109, 13, 21, 113, '2023-08-15 04:54:03', NULL, 'rahul8', '', 'active'),
(110, 13, 21, 112, '2023-08-15 04:54:30', NULL, 'rahul8', '', 'active'),
(111, 18, 79, 119, '2023-08-15 04:54:57', NULL, 'rahul8', '', 'active'),
(112, 18, 79, 118, '2023-08-15 04:55:17', NULL, 'rahul8', '', 'active'),
(113, 18, 79, 117, '2023-08-15 04:55:38', NULL, 'rahul8', '', 'active'),
(114, 17, 38, 125, '2023-08-15 04:56:12', NULL, 'rahul8', '', 'active'),
(115, 17, 38, 124, '2023-08-15 04:56:35', NULL, 'rahul8', '', 'active'),
(116, 17, 38, 123, '2023-08-15 04:56:58', NULL, 'rahul8', '', 'active'),
(117, 17, 38, 122, '2023-08-15 04:57:29', NULL, 'rahul8', '', 'active'),
(118, 17, 38, 121, '2023-08-15 04:58:03', NULL, 'rahul8', '', 'active'),
(119, 17, 38, 120, '2023-08-15 04:58:30', NULL, 'rahul8', '', 'active'),
(120, 18, 78, 128, '2023-08-15 04:59:01', NULL, 'rahul8', '', 'active'),
(121, 18, 78, 127, '2023-08-15 04:59:26', NULL, 'rahul8', '', 'active'),
(122, 18, 78, 126, '2023-08-15 04:59:48', NULL, 'rahul8', '', 'active'),
(123, 17, 34, 129, '2023-08-15 05:00:27', NULL, 'rahul8', '', 'active'),
(124, 14, 43, 145, '2023-08-15 05:00:58', NULL, 'rahul8', '', 'active'),
(125, 14, 43, 144, '2023-08-15 05:01:35', NULL, 'rahul8', '', 'active'),
(126, 14, 43, 143, '2023-08-15 05:01:54', NULL, 'rahul8', '', 'active'),
(127, 15, 56, 147, '2023-08-15 05:02:18', NULL, 'rahul8', '', 'active'),
(128, 15, 56, 146, '2023-08-15 05:02:39', NULL, 'rahul8', '', 'active'),
(129, 17, 33, 149, '2023-08-15 05:03:05', NULL, 'rahul8', '', 'active'),
(130, 17, 33, 148, '2023-08-15 05:03:23', NULL, 'rahul8', '', 'active'),
(131, 14, 42, 153, '2023-08-15 05:03:56', NULL, 'rahul8', '', 'active'),
(132, 14, 42, 152, '2023-08-15 05:04:18', NULL, 'rahul8', '', 'active'),
(133, 14, 42, 150, '2023-08-15 05:04:38', NULL, 'rahul8', '', 'active'),
(134, 16, 68, 155, '2023-08-15 05:05:09', NULL, 'rahul8', '', 'active'),
(135, 16, 68, 154, '2023-08-15 05:05:35', NULL, 'rahul8', '', 'active'),
(136, 13, 20, 156, '2023-08-15 05:06:00', NULL, 'rahul8', '', 'active'),
(137, 13, 19, 158, '2023-08-15 05:06:40', NULL, 'rahul8', '', 'active'),
(138, 15, 55, 160, '2023-08-15 05:07:07', NULL, 'rahul8', '', 'active'),
(139, 15, 55, 159, '2023-08-15 05:07:29', NULL, 'rahul8', '', 'active'),
(140, 17, 28, 163, '2023-08-15 05:08:02', NULL, 'rahul8', '', 'active'),
(141, 17, 28, 162, '2023-08-15 05:08:20', NULL, 'rahul8', '', 'active'),
(142, 17, 28, 161, '2023-08-15 05:08:41', NULL, 'rahul8', '', 'active'),
(143, 16, 66, 168, '2023-08-15 05:09:35', NULL, 'rahul8', '', 'active'),
(144, 18, 77, 169, '2023-08-15 05:10:04', NULL, 'rahul8', '', 'active'),
(145, 13, 18, 171, '2023-08-15 05:10:28', NULL, 'rahul8', '', 'active'),
(146, 13, 18, 178, '2023-08-15 05:10:52', NULL, 'rahul8', '', 'active'),
(147, 13, 18, 177, '2023-08-15 05:11:14', NULL, 'rahul8', '', 'active'),
(148, 13, 18, 176, '2023-08-15 05:11:36', NULL, 'rahul8', '', 'active'),
(149, 15, 54, 180, '2023-08-15 05:12:05', NULL, 'rahul8', '', 'active'),
(150, 15, 54, 179, '2023-08-15 05:12:27', NULL, 'rahul8', '', 'active'),
(151, 14, 41, 190, '2023-08-15 05:12:51', NULL, 'rahul8', '', 'active'),
(152, 14, 41, 188, '2023-08-15 05:16:19', NULL, 'rahul8', '', 'active'),
(153, 16, 63, 194, '2023-08-15 05:16:42', NULL, 'rahul8', '', 'active'),
(154, 16, 63, 193, '2023-08-15 05:17:03', NULL, 'rahul8', '', 'active'),
(155, 16, 63, 192, '2023-08-15 05:17:23', NULL, 'rahul8', '', 'active'),
(156, 16, 63, 191, '2023-08-15 05:17:43', NULL, 'rahul8', '', 'active'),
(157, 15, 53, 196, '2023-08-15 05:18:08', NULL, 'rahul8', '', 'active'),
(158, 15, 53, 197, '2023-08-15 05:18:28', NULL, 'rahul8', '', 'active'),
(159, 15, 53, 195, '2023-08-15 05:18:46', NULL, 'rahul8', '', 'active'),
(160, 13, 17, 199, '2023-08-15 05:19:16', NULL, 'rahul8', '', 'active'),
(161, 13, 17, 198, '2023-08-15 05:19:40', NULL, 'rahul8', '', 'active'),
(162, 15, 52, 205, '2023-08-15 05:20:15', NULL, 'rahul8', '', 'active'),
(163, 15, 52, 204, '2023-08-15 05:20:37', NULL, 'rahul8', '', 'active'),
(164, 15, 52, 203, '2023-08-15 05:21:00', NULL, 'rahul8', '', 'active'),
(165, 15, 52, 202, '2023-08-15 05:21:24', NULL, 'rahul8', '', 'active'),
(166, 15, 51, 211, '2023-08-15 05:21:48', NULL, 'rahul8', '', 'active'),
(167, 15, 51, 216, '2023-08-15 05:22:08', NULL, 'rahul8', '', 'active'),
(168, 15, 51, 215, '2023-08-15 05:22:29', NULL, 'rahul8', '', 'active'),
(169, 15, 51, 214, '2023-08-15 05:22:51', NULL, 'rahul8', '', 'active'),
(170, 15, 51, 213, '2023-08-15 05:23:13', NULL, 'rahul8', '', 'active'),
(171, 15, 51, 212, '2023-08-15 05:24:03', NULL, 'rahul8', '', 'active'),
(172, 15, 51, 210, '2023-08-15 05:24:24', NULL, 'rahul8', '', 'active'),
(173, 15, 51, 209, '2023-08-15 05:24:51', NULL, 'rahul8', '', 'active'),
(174, 15, 51, 208, '2023-08-15 05:25:11', NULL, 'rahul8', '', 'active'),
(175, 15, 51, 207, '2023-08-15 05:25:30', NULL, 'rahul8', '', 'active'),
(176, 15, 51, 206, '2023-08-15 05:25:50', NULL, 'rahul8', '', 'active'),
(177, 16, 62, 217, '2023-08-15 05:26:12', NULL, 'rahul8', '', 'active'),
(178, 17, 27, 223, '2023-08-15 05:26:38', NULL, 'rahul8', '', 'active'),
(179, 17, 27, 222, '2023-08-15 05:26:57', NULL, 'rahul8', '', 'active'),
(180, 17, 27, 221, '2023-08-15 05:27:17', NULL, 'rahul8', '', 'active'),
(181, 17, 27, 220, '2023-08-15 05:27:35', NULL, 'rahul8', '', 'active'),
(182, 17, 27, 219, '2023-08-15 05:27:58', NULL, 'rahul8', '', 'active'),
(183, 17, 27, 218, '2023-08-15 05:28:21', NULL, 'rahul8', '', 'active'),
(184, 19, 89, 228, '2023-08-15 05:37:41', NULL, 'rahul8', '', 'active'),
(185, 19, 89, 227, '2023-08-15 05:38:08', NULL, 'rahul8', '', 'active'),
(186, 19, 89, 226, '2023-08-15 05:40:21', NULL, 'rahul8', '', 'active'),
(187, 19, 89, 225, '2023-08-15 05:40:45', NULL, 'rahul8', '', 'active'),
(188, 18, 76, 233, '2023-08-15 05:42:24', NULL, 'rahul8', '', 'active'),
(189, 18, 76, 232, '2023-08-15 05:43:26', NULL, 'rahul8', '', 'active'),
(190, 18, 76, 231, '2023-08-15 05:43:52', NULL, 'rahul8', '', 'active'),
(191, 19, 88, 240, '2023-08-15 05:44:46', NULL, 'rahul8', '', 'active'),
(192, 19, 88, 239, '2023-08-15 05:48:01', NULL, 'rahul8', '', 'active'),
(193, 18, 75, 241, '2023-08-15 05:48:33', NULL, 'rahul8', '', 'active'),
(194, 13, 16, 248, '2023-08-15 05:50:40', NULL, 'rahul8', '', 'active'),
(195, 13, 16, 247, '2023-08-15 05:51:08', NULL, 'rahul8', '', 'active'),
(196, 13, 16, 246, '2023-08-15 05:51:37', NULL, 'rahul8', '', 'active'),
(197, 13, 16, 245, '2023-08-15 05:52:01', NULL, 'rahul8', '', 'active'),
(198, 13, 16, 244, '2023-08-15 05:53:10', NULL, 'rahul8', '', 'active'),
(199, 13, 16, 243, '2023-08-15 05:53:30', NULL, 'rahul8', '', 'active'),
(200, 13, 16, 242, '2023-08-15 05:53:49', NULL, 'rahul8', '', 'active'),
(201, 18, 74, 252, '2023-08-15 05:54:20', NULL, 'rahul8', '', 'active'),
(202, 18, 74, 251, '2023-08-15 05:54:47', NULL, 'rahul8', '', 'active'),
(203, 18, 74, 250, '2023-08-15 05:55:16', NULL, 'rahul8', '', 'active'),
(204, 13, 15, 258, '2023-08-15 05:56:10', NULL, 'rahul8', '', 'active'),
(205, 13, 15, 257, '2023-08-15 05:56:37', NULL, 'rahul8', '', 'active'),
(206, 13, 15, 256, '2023-08-15 05:56:56', NULL, 'rahul8', '', 'active'),
(207, 13, 15, 255, '2023-08-15 05:57:17', NULL, 'rahul8', '', 'active'),
(208, 17, 30, 260, '2023-08-15 05:57:48', NULL, 'rahul8', '', 'active'),
(209, 17, 30, 128, '2023-08-15 05:58:09', NULL, 'rahul8', '', 'active'),
(210, 16, 61, 262, '2023-08-15 05:58:58', NULL, 'rahul8', '', 'active'),
(211, 16, 61, 261, '2023-08-15 05:59:28', NULL, 'rahul8', '', 'active'),
(212, 19, 87, 264, '2023-08-15 06:00:00', NULL, 'rahul8', '', 'active'),
(213, 19, 87, 263, '2023-08-15 06:00:32', NULL, 'rahul8', '', 'active'),
(214, 18, 72, 266, '2023-08-15 06:01:10', NULL, 'rahul8', '', 'active'),
(215, 18, 72, 265, '2023-08-15 06:01:40', NULL, 'rahul8', '', 'active'),
(216, 15, 50, 267, '2023-08-15 06:02:28', NULL, 'rahul8', '', 'active'),
(217, 14, 40, 282, '2023-08-15 06:02:59', NULL, 'rahul8', '', 'active'),
(218, 14, 40, 281, '2023-08-15 06:03:21', NULL, 'rahul8', '', 'active'),
(219, 13, 9, 284, '2023-08-15 06:04:06', NULL, 'rahul8', '', 'active'),
(220, 13, 9, 283, '2023-08-15 06:04:33', NULL, 'rahul8', '', 'active'),
(221, 15, 49, 285, '2023-08-15 06:05:07', NULL, 'rahul8', '', 'active'),
(222, 15, 49, 286, '2023-08-15 06:05:38', NULL, 'rahul8', '', 'active'),
(223, 19, 86, 288, '2023-08-15 06:06:12', NULL, 'rahul8', '', 'active'),
(224, 19, 86, 228, '2023-08-15 06:06:47', NULL, 'rahul8', '', 'active'),
(225, 17, 32, 290, '2023-08-15 06:07:21', NULL, 'rahul8', '', 'active'),
(226, 17, 32, 291, '2023-08-15 06:07:52', NULL, 'rahul8', '', 'active'),
(227, 18, 71, 292, '2023-08-15 06:12:00', NULL, 'rahul8', '', 'active'),
(228, 18, 71, 294, '2023-08-15 06:51:11', NULL, 'rahul8', '', 'active'),
(229, 18, 71, 295, '2023-08-15 06:51:37', NULL, 'rahul8', '', 'active'),
(230, 19, 85, 296, '2023-08-15 06:52:07', NULL, 'rahul8', '', 'active'),
(231, 19, 85, 297, '2023-08-15 06:52:32', NULL, 'rahul8', '', 'active'),
(232, 15, 48, 298, '2023-08-15 07:12:01', NULL, 'rahul8', '', 'active'),
(233, 15, 48, 299, '2023-08-15 07:13:10', NULL, 'rahul8', '', 'active'),
(234, 15, 48, 300, '2023-08-15 07:13:37', NULL, 'rahul8', '', 'active'),
(235, 15, 48, 115, '2023-08-15 07:14:00', NULL, 'rahul8', '', 'active'),
(236, 15, 48, 302, '2023-08-15 07:14:26', NULL, 'rahul8', '', 'active'),
(237, 15, 48, 303, '2023-08-15 07:14:51', NULL, 'rahul8', '', 'active'),
(238, 13, 8, 304, '2023-08-15 07:15:28', NULL, 'rahul8', '', 'active'),
(239, 13, 8, 305, '2023-08-15 07:15:47', NULL, 'rahul8', '', 'active'),
(240, 15, 47, 306, '2023-08-15 07:16:16', NULL, 'rahul8', '', 'active'),
(241, 15, 47, 307, '2023-08-15 07:18:47', NULL, 'rahul8', '', 'active'),
(242, 15, 47, 308, '2023-08-15 07:19:10', NULL, 'rahul8', '', 'active'),
(243, 15, 47, 309, '2023-08-15 07:19:35', NULL, 'rahul8', '', 'active'),
(244, 17, 37, 310, '2023-08-15 07:20:00', NULL, 'rahul8', '', 'active'),
(245, 17, 37, 311, '2023-08-15 07:20:21', NULL, 'rahul8', '', 'active'),
(246, 17, 37, 312, '2023-08-15 07:22:00', NULL, 'rahul8', '', 'active'),
(247, 17, 37, 313, '2023-08-15 07:22:22', NULL, 'rahul8', '', 'active'),
(248, 14, 39, 316, '2023-08-15 07:22:48', NULL, 'rahul8', '', 'active'),
(249, 14, 39, 317, '2023-08-15 07:23:12', NULL, 'rahul8', '', 'active'),
(250, 14, 39, 318, '2023-08-15 07:23:44', NULL, 'rahul8', '', 'active'),
(251, 14, 39, 319, '2023-08-15 07:24:04', NULL, 'rahul8', '', 'active'),
(252, 14, 39, 320, '2023-08-15 07:24:32', NULL, 'rahul8', '', 'active'),
(253, 17, 36, 323, '2023-08-15 07:24:59', NULL, 'rahul8', '', 'active'),
(254, 17, 36, 324, '2023-08-15 07:25:26', NULL, 'rahul8', '', 'active'),
(255, 19, 83, 328, '2023-08-15 07:26:00', NULL, 'rahul8', '', 'active'),
(256, 19, 83, 329, '2023-08-15 07:26:34', NULL, 'rahul8', '', 'active'),
(257, 19, 82, 330, '2023-08-15 07:27:07', NULL, 'rahul8', '', 'active'),
(258, 19, 82, 331, '2023-08-15 07:27:40', NULL, 'rahul8', '', 'active'),
(259, 19, 82, 332, '2023-08-15 07:28:02', NULL, 'rahul8', '', 'active'),
(260, 19, 82, 333, '2023-08-15 07:28:31', NULL, 'rahul8', '', 'active'),
(261, 16, 60, 334, '2023-08-15 07:28:57', NULL, 'rahul8', '', 'active'),
(262, 16, 60, 335, '2023-08-15 07:29:21', NULL, 'rahul8', '', 'active'),
(263, 16, 60, 336, '2023-08-15 07:29:44', NULL, 'rahul8', '', 'active'),
(264, 16, 60, 337, '2023-08-15 07:31:03', NULL, 'rahul8', '', 'active'),
(265, 17, 29, 338, '2023-08-15 07:31:33', NULL, 'rahul8', '', 'active'),
(266, 17, 29, 339, '2023-08-15 07:31:54', NULL, 'rahul8', '', 'active'),
(267, 17, 29, 340, '2023-08-15 07:32:17', NULL, 'rahul8', '', 'active'),
(268, 19, 81, 342, '2023-08-15 07:32:46', NULL, 'rahul8', '', 'active'),
(269, 19, 81, 343, '2023-08-15 07:33:08', NULL, 'rahul8', '', 'active'),
(270, 19, 81, 344, '2023-08-15 07:33:29', NULL, 'rahul8', '', 'active'),
(271, 19, 81, 345, '2023-08-15 07:34:18', NULL, 'rahul8', '', 'active'),
(272, 17, 31, 7, '2023-08-17 09:04:26', NULL, 'rahul8', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` int(11) NOT NULL,
  `icon` varchar(40) NOT NULL,
  `title` varchar(20) NOT NULL,
  `link` varchar(50) NOT NULL,
  `addeddate` datetime DEFAULT NULL,
  `updatedate` datetime DEFAULT NULL,
  `createdBy` varchar(30) NOT NULL,
  `updatedBy` varchar(30) NOT NULL,
  `status` varchar(9) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `icon`, `title`, `link`, `addeddate`, `updatedate`, `createdBy`, `updatedBy`, `status`) VALUES
(2, 'fa-brands fa-facebook', 'facebook', 'https://facebook.com/rahulbhattarai02', '2023-04-19 02:58:51', '2023-08-15 12:16:49', 'Prashant23', 'Rahul8', 'active'),
(3, 'fa-brands fa-instagram', 'instagram', 'https://instagram.com/rahulxc', '2023-04-19 03:03:15', '2023-07-08 10:20:42', 'Prashant23', 'Rahul8', 'active'),
(4, 'fa-brands fa-twitter', 'twitter', 'https://twitter.com/rahul07', '2023-04-19 03:03:26', '2023-07-08 10:20:55', 'Prashant23', 'Rahul8', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `email` varchar(55) NOT NULL,
  `contact` varchar(25) NOT NULL,
  `address` varchar(50) NOT NULL,
  `role` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(225) NOT NULL,
  `status` varchar(11) NOT NULL DEFAULT 'active',
  `image` varchar(35) NOT NULL,
  `token` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `contact`, `address`, `role`, `username`, `password`, `status`, `image`, `token`) VALUES
(16, 'Rahul', 'Thapa', 'rahulthapa@gmail.com', '9800000000', 'Charange', 'user', 'RahulThapa', '$2y$10$tor5X6DJIS.0U8BFDsIABuXKUlUmhlNWpI1699bNMVMotft79i1Tq', 'active', '1680261608.jpg', ''),
(20, 'rahul', 'Bhattarai', 'rahulbhattarai89@gmail.com', '9840960939', 'sukkhanagar', 'admin', 'Rahul8', '$2y$10$eKXXjZQE5yA.KLj0on.nzObyDLIo4c4ADxZN9xhsSlU0XcPQEY70q', 'active', '1688717696.jpg', '441380'),
(21, 'prakash', 'Chhetri', 'prakashkunwar@gmail.com', '986643241', 'devinagar', 'user', 'prakash1', '$2y$10$uyu6lQbXs8Z/STJfH0YrAe2lsN6rqzJ6LNSIRN6RK7XmBeHwNsiqO', 'active', '1692251116.jpg', '352687'),
(22, 'Prashant ', 'Adhikari', 'prashantadk13@gmail.com', '9847739401', 'Butwal', 'admin', 'Prashant12', '$2y$10$E9cTrT0DGvJO1WikPtE5eeZKWrpne03QYpbWxbmx7FYZG6TCkTSLe', 'active', '1745165228.jpg', ''),
(23, 'Sagar', 'sgr', 'sgr123@gmail.com', '9800000000', 'butwal', 'user', 'sagar12', '$2y$10$QdoUt7xtL3Rq3Uclgpp3ue9ZX14K5N0YbydApbskvfwCegeflUc4C', 'active', '1745165705.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `zone`
--

CREATE TABLE `zone` (
  `id` int(11) NOT NULL,
  `zone` varchar(25) NOT NULL,
  `area` int(11) NOT NULL,
  `addeddate` datetime DEFAULT NULL,
  `updatedate` datetime DEFAULT NULL,
  `createdBy` varchar(30) NOT NULL,
  `updatedBy` varchar(30) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `zone`
--

INSERT INTO `zone` (`id`, `zone`, `area`, `addeddate`, `updatedate`, `createdBy`, `updatedBy`, `status`) VALUES
(1, 'Koshi', 2000, '2023-02-18 03:52:18', '0000-00-00 00:00:00', '', 'Rahul8', 'active'),
(6, 'Mahakali', 345, '2023-03-12 10:05:12', '0000-00-00 00:00:00', '', 'Rahul8', 'active'),
(14, '	Lumbini Zone', 12, '0000-00-00 00:00:00', NULL, 'rahul8', '', 'active'),
(16, 'Mechi Zone', 4, '2023-07-25 05:54:25', NULL, 'rahul8', '', 'active'),
(17, '	Sagarmatha Zone	', 8, '0000-00-00 00:00:00', NULL, 'rahul8', '', 'active'),
(18, 'Bagmati Zone', 8, '2023-07-20 05:55:20', NULL, 'rahul8', '', 'active'),
(19, 'Janakpur Zone	', 8, '0000-00-00 00:00:00', NULL, 'rahul8', '', 'active'),
(20, '	Narayani Zone', 9, '2023-07-07 05:56:07', NULL, 'rahul8', '', 'active'),
(21, 'Dhawalagiri Zone', 7, '0000-00-00 00:00:00', NULL, 'rahul8', '', 'active'),
(22, 'Gandaki Zone', 8, '0000-00-00 00:00:00', NULL, 'rahul8', '', 'active'),
(24, 'Bheri Zone', 5, '0000-00-00 00:00:00', NULL, 'rahul8', '', 'active'),
(25, 'Karnali Zone', 6, '2023-07-19 05:58:19', NULL, 'rahul8', '', 'active'),
(26, '	Rapti Zone', 8, '0000-00-00 00:00:00', NULL, 'rahul8', '', 'active'),
(27, 'Seti Zone', 8, '2023-07-04 05:59:04', NULL, 'rahul8', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `zone_district`
--

CREATE TABLE `zone_district` (
  `id` int(11) NOT NULL,
  `zone_id` int(10) NOT NULL,
  `district_id` int(11) NOT NULL,
  `addeddate` datetime DEFAULT NULL,
  `updatedate` datetime DEFAULT NULL,
  `createdBy` varchar(30) NOT NULL,
  `updatedBy` varchar(30) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `zone_district`
--

INSERT INTO `zone_district` (`id`, `zone_id`, `district_id`, `addeddate`, `updatedate`, `createdBy`, `updatedBy`, `status`) VALUES
(1, 14, 31, '2023-02-28 05:52:46', '2023-08-02 08:22:33', '', 'Rahul8', 'active'),
(10, 14, 29, '2023-08-02 08:39:47', '2023-08-08 02:54:42', 'rahul8', 'Rahul8', 'active'),
(11, 14, 38, '2023-08-02 08:40:31', NULL, 'rahul8', '', 'active'),
(13, 14, 27, '2023-08-08 02:55:15', NULL, 'rahul8', '', 'active'),
(14, 14, 28, '2023-08-08 02:55:46', NULL, 'rahul8', '', 'active'),
(15, 14, 30, '2023-08-08 02:56:21', NULL, 'rahul8', '', 'active'),
(16, 16, 15, '2023-08-08 02:57:06', NULL, 'rahul8', '', 'active'),
(17, 16, 16, '2023-08-08 02:57:20', NULL, 'rahul8', '', 'active'),
(18, 16, 20, '2023-08-08 02:57:35', NULL, 'rahul8', '', 'active'),
(19, 16, 24, '2023-08-08 02:57:50', NULL, 'rahul8', '', 'active'),
(20, 1, 8, '2023-08-08 02:58:15', NULL, 'rahul8', '', 'active'),
(21, 1, 9, '2023-08-08 02:58:25', NULL, 'rahul8', '', 'active'),
(22, 1, 18, '2023-08-08 02:58:37', NULL, 'rahul8', '', 'active'),
(23, 1, 21, '2023-08-08 02:58:51', NULL, 'rahul8', '', 'active'),
(24, 1, 23, '2023-08-08 02:59:06', NULL, 'rahul8', '', 'active'),
(25, 1, 25, '2023-08-08 02:59:18', NULL, 'rahul8', '', 'active'),
(26, 17, 17, '2023-08-08 02:59:48', NULL, 'rahul8', '', 'active'),
(27, 17, 19, '2023-08-08 03:00:02', NULL, 'rahul8', '', 'active'),
(28, 17, 22, '2023-08-08 03:00:20', NULL, 'rahul8', '', 'active'),
(29, 17, 26, '2023-08-08 03:00:41', NULL, 'rahul8', '', 'active'),
(30, 17, 44, '2023-08-08 03:00:59', NULL, 'rahul8', '', 'active'),
(31, 17, 46, '2023-08-08 03:01:13', NULL, 'rahul8', '', 'active'),
(32, 19, 40, '2023-08-08 03:01:46', NULL, 'rahul8', '', 'active'),
(33, 19, 41, '2023-08-08 03:02:04', NULL, 'rahul8', '', 'active'),
(34, 19, 45, '2023-08-08 03:02:26', NULL, 'rahul8', '', 'active'),
(35, 19, 50, '2023-08-08 03:03:04', NULL, 'rahul8', '', 'active'),
(36, 19, 56, '2023-08-08 03:03:26', NULL, 'rahul8', '', 'active'),
(37, 19, 58, '2023-08-08 03:03:45', NULL, 'rahul8', '', 'active'),
(38, 18, 47, '2023-08-08 03:04:30', NULL, 'rahul8', '', 'active'),
(39, 18, 49, '2023-08-08 03:04:54', NULL, 'rahul8', '', 'active'),
(40, 18, 53, '2023-08-08 03:05:09', NULL, 'rahul8', '', 'active'),
(41, 18, 51, '2023-08-08 03:05:27', NULL, 'rahul8', '', 'active'),
(42, 18, 52, '2023-08-08 03:05:40', NULL, 'rahul8', '', 'active'),
(43, 18, 55, '2023-08-08 03:05:58', NULL, 'rahul8', '', 'active'),
(44, 18, 57, '2023-08-08 03:06:15', NULL, 'rahul8', '', 'active'),
(45, 18, 59, '2023-08-08 03:06:33', NULL, 'rahul8', '', 'active'),
(46, 20, 39, '2023-08-08 03:07:11', NULL, 'rahul8', '', 'active'),
(47, 20, 42, '2023-08-08 03:07:27', NULL, 'rahul8', '', 'active'),
(48, 20, 43, '2023-08-08 03:07:51', NULL, 'rahul8', '', 'active'),
(49, 20, 48, '2023-08-08 03:08:06', NULL, 'rahul8', '', 'active'),
(50, 20, 54, '2023-08-08 03:08:30', NULL, 'rahul8', '', 'active'),
(51, 22, 61, '2023-08-08 03:08:59', NULL, 'rahul8', '', 'active'),
(52, 22, 62, '2023-08-08 03:09:15', NULL, 'rahul8', '', 'active'),
(53, 22, 63, '2023-08-08 03:09:28', NULL, 'rahul8', '', 'active'),
(54, 22, 64, '2023-08-08 03:09:40', NULL, 'rahul8', '', 'active'),
(55, 22, 69, '2023-08-08 03:09:57', NULL, 'rahul8', '', 'active'),
(56, 22, 70, '2023-08-08 03:10:09', NULL, 'rahul8', '', 'active'),
(57, 21, 60, '2023-08-08 03:10:33', NULL, 'rahul8', '', 'active'),
(58, 21, 65, '2023-08-08 03:10:45', NULL, 'rahul8', '', 'active'),
(59, 21, 66, '2023-08-08 03:11:04', NULL, 'rahul8', '', 'active'),
(60, 21, 68, '2023-08-08 03:11:17', NULL, 'rahul8', '', 'active'),
(61, 26, 32, '2023-08-08 03:11:53', NULL, 'rahul8', '', 'active'),
(62, 26, 33, '2023-08-08 03:12:06', NULL, 'rahul8', '', 'active'),
(63, 26, 34, '2023-08-08 03:12:21', NULL, 'rahul8', '', 'active'),
(64, 26, 78, '2023-08-08 03:12:36', NULL, 'rahul8', '', 'active'),
(65, 26, 79, '2023-08-08 03:12:53', NULL, 'rahul8', '', 'active'),
(66, 25, 72, '2023-08-08 03:13:21', NULL, 'rahul8', '', 'active'),
(67, 25, 73, '2023-08-08 03:13:39', NULL, 'rahul8', '', 'active'),
(68, 25, 75, '2023-08-08 03:13:59', NULL, 'rahul8', '', 'active'),
(69, 25, 76, '2023-08-08 03:14:13', NULL, 'rahul8', '', 'active'),
(70, 25, 77, '2023-08-08 03:14:30', NULL, 'rahul8', '', 'active'),
(71, 24, 36, '2023-08-08 03:14:55', NULL, 'rahul8', '', 'active'),
(72, 24, 37, '2023-08-08 03:15:10', NULL, 'rahul8', '', 'active'),
(73, 24, 71, '2023-08-08 03:15:27', NULL, 'rahul8', '', 'active'),
(74, 24, 74, '2023-08-08 03:15:39', NULL, 'rahul8', '', 'active'),
(75, 24, 80, '2023-08-08 03:15:57', NULL, 'rahul8', '', 'active'),
(76, 27, 81, '2023-08-08 03:16:23', NULL, 'rahul8', '', 'active'),
(77, 27, 83, '2023-08-08 03:16:39', NULL, 'rahul8', '', 'active'),
(78, 27, 84, '2023-08-08 03:16:58', NULL, 'rahul8', '', 'active'),
(79, 27, 87, '2023-08-08 03:17:10', NULL, 'rahul8', '', 'active'),
(80, 27, 88, '2023-08-08 03:17:23', NULL, 'rahul8', '', 'active'),
(81, 6, 82, '2023-08-08 03:17:51', NULL, 'rahul8', '', 'active'),
(82, 6, 85, '2023-08-08 03:18:09', NULL, 'rahul8', '', 'active'),
(83, 6, 86, '2023-08-08 03:18:25', NULL, 'rahul8', '', 'active'),
(84, 6, 89, '2023-08-08 03:18:36', NULL, 'rahul8', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `zone_edit_request`
--

CREATE TABLE `zone_edit_request` (
  `id` int(11) NOT NULL,
  `zone_name` varchar(25) NOT NULL,
  `zone_area` int(11) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zone_municipility`
--

CREATE TABLE `zone_municipility` (
  `id` int(11) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `municipility_id` int(11) NOT NULL,
  `addeddate` datetime DEFAULT NULL,
  `updatedate` datetime DEFAULT NULL,
  `createdBy` varchar(30) NOT NULL,
  `updatedBy` varchar(30) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `zone_municipility`
--

INSERT INTO `zone_municipility` (`id`, `zone_id`, `district_id`, `municipility_id`, `addeddate`, `updatedate`, `createdBy`, `updatedBy`, `status`) VALUES
(3, 14, 31, 7, '2023-03-01 10:33:48', '2023-08-02 08:33:20', '', 'Rahul8', 'active'),
(4, 14, 31, 9, '2023-03-01 12:58:44', '2023-08-10 03:16:56', '', 'Rahul8', 'active'),
(9, 14, 31, 10, '2023-08-10 03:17:45', NULL, 'rahul8', '', 'active'),
(10, 14, 31, 11, '2023-08-10 03:18:00', NULL, 'rahul8', '', 'active'),
(11, 14, 31, 12, '2023-08-10 03:18:18', NULL, 'rahul8', '', 'active'),
(12, 14, 31, 13, '2023-08-10 03:18:38', NULL, 'rahul8', '', 'active'),
(13, 14, 31, 14, '2023-08-10 03:18:56', NULL, 'rahul8', '', 'active'),
(14, 14, 31, 15, '2023-08-10 03:19:14', NULL, 'rahul8', '', 'active'),
(15, 14, 31, 16, '2023-08-10 03:19:36', NULL, 'rahul8', '', 'active'),
(16, 14, 31, 17, '2023-08-10 03:19:55', NULL, 'rahul8', '', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district_edit_request`
--
ALTER TABLE `district_edit_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `municipility`
--
ALTER TABLE `municipility`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `municipility_edit_request`
--
ALTER TABLE `municipility_edit_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `municipility_ward`
--
ALTER TABLE `municipility_ward`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `province_district`
--
ALTER TABLE `province_district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `province_edit_request`
--
ALTER TABLE `province_edit_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `province_municipility`
--
ALTER TABLE `province_municipility`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `zone`
--
ALTER TABLE `zone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zone_district`
--
ALTER TABLE `zone_district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zone_edit_request`
--
ALTER TABLE `zone_edit_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zone_municipility`
--
ALTER TABLE `zone_municipility`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `district_edit_request`
--
ALTER TABLE `district_edit_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `municipility`
--
ALTER TABLE `municipility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=346;

--
-- AUTO_INCREMENT for table `municipility_edit_request`
--
ALTER TABLE `municipility_edit_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `municipility_ward`
--
ALTER TABLE `municipility_ward`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `province_district`
--
ALTER TABLE `province_district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `province_edit_request`
--
ALTER TABLE `province_edit_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `province_municipility`
--
ALTER TABLE `province_municipility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=273;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `zone`
--
ALTER TABLE `zone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `zone_district`
--
ALTER TABLE `zone_district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `zone_edit_request`
--
ALTER TABLE `zone_edit_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `zone_municipility`
--
ALTER TABLE `zone_municipility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
