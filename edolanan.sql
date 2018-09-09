-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2018 at 05:47 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edolanan`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `serial` int(11) NOT NULL,
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `address` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `phone` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`serial`, `name`, `email`, `address`, `phone`) VALUES
(1, '0', '0', '0', '0'),
(2, '0', '0', '0', '0'),
(3, '0', '0', '0', '0'),
(4, '0', '0', '0', '0'),
(5, '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`id`, `name`) VALUES
(1, 'Earrings'),
(2, 'Pendant'),
(3, 'Ring'),
(4, 'Bracelet');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `id` int(5) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `pass_word` varchar(255) NOT NULL,
  `category` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `first_name`, `last_name`, `email_address`, `user_name`, `pass_word`, `category`) VALUES
(1, 'Home', 'Theater', 'ariefstd.2006@gmail.com', 'ariefstd.2006@gmail.com', '202cb962ac59075b964b07152d234b70', 1),
(2, 'Surimbot', 'Bibikom', 'surimbot@gmail.com', 'surimbot@gmail.com', '202cb962ac59075b964b07152d234b70', 1),
(3, 'Bibikom', 'Surimbot', 'ariefstd.20061@gmail.com', 'ariefstd.20067@gmail.com', '202cb962ac59075b964b07152d234b70', 3),
(4, 'Gelas', 'Keramik', 'gelas.keramik@gmail.com', 'gelas.keramik@gmail.com', '202cb962ac59075b964b07152d234b70', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `serial` int(11) NOT NULL,
  `date` date NOT NULL,
  `customerid` int(11) NOT NULL,
  `paymentid` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`serial`, `date`, `customerid`, `paymentid`) VALUES
(1, '2018-09-03', 1, 1),
(2, '2018-09-03', 2, 1),
(3, '2018-09-03', 3, 1),
(4, '2018-09-03', 4, 1),
(5, '2018-09-03', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(5) NOT NULL,
  `orderid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `custemail` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `orderid`, `productid`, `quantity`, `price`, `custemail`) VALUES
(1, 4, 2, 1, 25000, 'ariefstd.2006@gmail.com'),
(2, 4, 3, 1, 30000, 'ariefstd.2006@gmail.com'),
(3, 4, 4, 1, 20000, 'ariefstd.2006@gmail.com'),
(4, 5, 3, 1, 30000, 'ariefstd.2006@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `order_discount`
--

CREATE TABLE `order_discount` (
  `id` int(5) NOT NULL,
  `email` varchar(80) NOT NULL,
  `discount` int(11) NOT NULL,
  `grand_total` int(11) NOT NULL,
  `payment` int(11) NOT NULL,
  `prod_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_discount`
--

INSERT INTO `order_discount` (`id`, `email`, `discount`, `grand_total`, `payment`, `prod_email`) VALUES
(1, '0', 0, 0, 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(1) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`) VALUES
(1, 'Bank Transfer'),
(2, 'Cheque Payment'),
(3, 'Paypal');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `serial` int(11) NOT NULL,
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `description` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `price` float NOT NULL,
  `picture` varchar(80) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `serial` int(5) NOT NULL,
  `web` varchar(255) NOT NULL,
  `man_id` varchar(255) NOT NULL,
  `id_key` varchar(125) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `qty` int(11) NOT NULL,
  `price` float NOT NULL,
  `type_id` varchar(255) NOT NULL DEFAULT '',
  `image_name` varchar(255) NOT NULL DEFAULT '',
  `email_address` varchar(255) DEFAULT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`serial`, `web`, `man_id`, `id_key`, `name`, `description`, `qty`, `price`, `type_id`, `image_name`, `email_address`, `status`) VALUES
(1, 'DSE0244', '1', 'files-children', 'Files Children', '', 10, 75000, '1', 'DSE0244.jpg ', '', 2),
(2, 'DSE0441', '1', 'cross-of-life', 'Cross of Life', '', 1, 25000, '1', 'DSE0441.jpg ', '', 2),
(3, 'DSE3493PP', '1', 'cross-of-pearl', 'Cross of Pearl', '', 1, 30000, '1', 'DSE3493PP.jpg ', '', 2),
(4, 'DSE0583', '1', 'flower-of-silver', 'Flower of Silver', '', 1, 20000, '1', 'DSE0583.jpg ', '', 2),
(5, 'DSE6133ST', '1', 'wings-of-dreams', 'Wings of Dreams', '', 1, 25000, '1', 'DSE6133ST.jpg ', '', 2),
(7, 'DSE0004AMT', '1', 'amethyst-stud', 'Amethyst Stud', '', 1, 20000, '1', 'DSE0004AMT.jpg ', '', 2),
(8, 'DSE0247WZ', '1', 'thick-oval', 'Thick Oval', '', 1, 10000, '1', 'DSE0247WZ.jpg ', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_billing`
--

CREATE TABLE `tbl_billing` (
  `id` int(5) NOT NULL,
  `country` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `email2` varchar(255) NOT NULL,
  `address2` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_billing`
--

INSERT INTO `tbl_billing` (`id`, `country`, `first_name`, `last_name`, `companyname`, `address`, `city`, `state`, `zip`, `email_address`, `email2`, `address2`, `phone`, `status`) VALUES
(1, '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '0', 1),
(2, '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '0', 1),
(3, '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '0', 1),
(4, '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '0', 1),
(5, '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart_temp`
--

CREATE TABLE `tbl_cart_temp` (
  `id` int(5) NOT NULL,
  `serial` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(15) NOT NULL,
  `qty` int(5) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` enum('unpaid','paid','ordered') NOT NULL DEFAULT 'unpaid'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cart_temp`
--

INSERT INTO `tbl_cart_temp` (`id`, `serial`, `name`, `price`, `qty`, `email`, `status`) VALUES
(17, 4, 'Flower of Silver', 20000, 1, 'ariefstd.2006@gmail.com', 'ordered'),
(18, 3, 'Cross of Pearl', 30000, 1, 'ariefstd.2006@gmail.com', 'ordered'),
(19, 2, 'Cross of Life', 25000, 1, 'ariefstd.2006@gmail.com', 'ordered'),
(20, 3, 'Cross of Pearl', 30000, 1, 'ariefstd.2006@gmail.com', 'ordered');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_catmember`
--

CREATE TABLE `tbl_catmember` (
  `id` int(5) NOT NULL,
  `category` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_catmember`
--

INSERT INTO `tbl_catmember` (`id`, `category`) VALUES
(1, 'buyer'),
(2, 'reseler'),
(3, 'partner'),
(4, 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_countries`
--

CREATE TABLE `tbl_countries` (
  `id` int(5) NOT NULL,
  `code` varchar(10) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_countries`
--

INSERT INTO `tbl_countries` (`id`, `code`, `name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'AS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'BQ', 'British Antarctic Territory'),
(32, 'IO', 'British Indian Ocean Territory'),
(33, 'VG', 'British Virgin Islands'),
(34, 'BN', 'Brunei'),
(35, 'BG', 'Bulgaria'),
(36, 'BF', 'Burkina Faso'),
(37, 'BI', 'Burundi'),
(38, 'KH', 'Cambodia'),
(39, 'CM', 'Cameroon'),
(40, 'CA', 'Canada'),
(41, 'CT', 'Canton and Enderbury Islands'),
(42, 'CV', 'Cape Verde'),
(43, 'KY', 'Cayman Islands'),
(44, 'CF', 'Central African Republic'),
(45, 'TD', 'Chad'),
(46, 'CL', 'Chile'),
(47, 'CN', 'China'),
(48, 'CX', 'Christmas Island'),
(49, 'CC', 'Cocos [Keeling] Islands'),
(50, 'CO', 'Colombia'),
(51, 'KM', 'Comoros'),
(52, 'CG', 'Congo - Brazzaville'),
(53, 'CD', 'Congo - Kinshasa'),
(54, 'CK', 'Cook Islands'),
(55, 'CR', 'Costa Rica'),
(56, 'HR', 'Croatia'),
(57, 'CU', 'Cuba'),
(58, 'CY', 'Cyprus'),
(59, 'CZ', 'Czech Republic'),
(60, 'CI', 'C?te d?Ivoire'),
(61, 'DK', 'Denmark'),
(62, 'DJ', 'Djibouti'),
(63, 'DM', 'Dominica'),
(64, 'DO', 'Dominican Republic'),
(65, 'NQ', 'Dronning Maud Land'),
(66, 'DD', 'East Germany'),
(67, 'EC', 'Ecuador'),
(68, 'EG', 'Egypt'),
(69, 'SV', 'El Salvador'),
(70, 'GQ', 'Equatorial Guinea'),
(71, 'ER', 'Eritrea'),
(72, 'EE', 'Estonia'),
(73, 'ET', 'Ethiopia'),
(74, 'FK', 'Falkland Islands'),
(75, 'FO', 'Faroe Islands'),
(76, 'FJ', 'Fiji'),
(77, 'FI', 'Finland'),
(78, 'FR', 'France'),
(79, 'GF', 'French Guiana'),
(80, 'PF', 'French Polynesia'),
(81, 'TF', 'French Southern Territories'),
(82, 'FQ', 'French Southern and Antarctic Territories'),
(83, 'GA', 'Gabon'),
(84, 'GM', 'Gambia'),
(85, 'GE', 'Georgia'),
(86, 'DE', 'Germany'),
(87, 'GH', 'Ghana'),
(88, 'GI', 'Gibraltar'),
(89, 'GR', 'Greece'),
(90, 'GL', 'Greenland'),
(91, 'GD', 'Grenada'),
(92, 'GP', 'Guadeloupe'),
(93, 'GU', 'Guam'),
(94, 'GT', 'Guatemala'),
(95, 'GG', 'Guernsey'),
(96, 'GN', 'Guinea'),
(97, 'GW', 'Guinea-Bissau'),
(98, 'GY', 'Guyana'),
(99, 'HT', 'Haiti'),
(100, 'HM', 'Heard Island and McDonald Islands'),
(101, 'HN', 'Honduras'),
(102, 'HK', 'Hong Kong SAR China'),
(103, 'HU', 'Hungary'),
(104, 'IS', 'Iceland'),
(105, 'IN', 'India'),
(106, 'ID', 'Indonesia'),
(107, 'IR', 'Iran'),
(108, 'IQ', 'Iraq'),
(109, 'IE', 'Ireland'),
(110, 'IM', 'Isle of Man'),
(111, 'IL', 'Israel'),
(112, 'IT', 'Italy'),
(113, 'JM', 'Jamaica'),
(114, 'JP', 'Japan'),
(115, 'JE', 'Jersey'),
(116, 'JT', 'Johnston Island'),
(117, 'JO', 'Jordan'),
(118, 'KZ', 'Kazakhstan'),
(119, 'KE', 'Kenya'),
(120, 'KI', 'Kiribati'),
(121, 'KW', 'Kuwait'),
(122, 'KG', 'Kyrgyzstan'),
(123, 'LA', 'Laos'),
(124, 'LV', 'Latvia'),
(125, 'LB', 'Lebanon'),
(126, 'LS', 'Lesotho'),
(127, 'LR', 'Liberia'),
(128, 'LY', 'Libya'),
(129, 'LI', 'Liechtenstein'),
(130, 'LT', 'Lithuania'),
(131, 'LU', 'Luxembourg'),
(132, 'MO', 'Macau SAR China'),
(133, 'MK', 'Macedonia'),
(134, 'MG', 'Madagascar'),
(135, 'MW', 'Malawi'),
(136, 'MY', 'Malaysia'),
(137, 'MV', 'Maldives'),
(138, 'ML', 'Mali'),
(139, 'MT', 'Malta'),
(140, 'MH', 'Marshall Islands'),
(141, 'MQ', 'Martinique'),
(142, 'MR', 'Mauritania'),
(143, 'MU', 'Mauritius'),
(144, 'YT', 'Mayotte'),
(145, 'FX', 'Metropolitan France'),
(146, 'MX', 'Mexico'),
(147, 'FM', 'Micronesia'),
(148, 'MI', 'Midway Islands'),
(149, 'MD', 'Moldova'),
(150, 'MC', 'Monaco'),
(151, 'MN', 'Mongolia'),
(152, 'ME', 'Montenegro'),
(153, 'MS', 'Montserrat'),
(154, 'MA', 'Morocco'),
(155, 'MZ', 'Mozambique'),
(156, 'MM', 'Myanmar [Burma]'),
(157, 'NA', 'Namibia'),
(158, 'NR', 'Nauru'),
(159, 'NP', 'Nepal'),
(160, 'NL', 'Netherlands'),
(161, 'AN', 'Netherlands Antilles'),
(162, 'NT', 'Neutral Zone'),
(163, 'NC', 'New Caledonia'),
(164, 'NZ', 'New Zealand'),
(165, 'NI', 'Nicaragua'),
(166, 'NE', 'Niger'),
(167, 'NG', 'Nigeria'),
(168, 'NU', 'Niue'),
(169, 'NF', 'Norfolk Island'),
(170, 'KP', 'North Korea'),
(171, 'VD', 'North Vietnam'),
(172, 'MP', 'Northern Mariana Islands'),
(173, 'NO', 'Norway'),
(174, 'OM', 'Oman'),
(175, 'PC', 'Pacific Islands Trust Territory'),
(176, 'PK', 'Pakistan'),
(177, 'PW', 'Palau'),
(178, 'PS', 'Palestinian Territories'),
(179, 'PA', 'Panama'),
(180, 'PZ', 'Panama Canal Zone'),
(181, 'PG', 'Papua New Guinea'),
(182, 'PY', 'Paraguay'),
(183, 'YD', 'People\'s Democratic Republic of Yemen'),
(184, 'PE', 'Peru'),
(185, 'PH', 'Philippines'),
(186, 'PN', 'Pitcairn Islands'),
(187, 'PL', 'Poland'),
(188, 'PT', 'Portugal'),
(189, 'PR', 'Puerto Rico'),
(190, 'QA', 'Qatar'),
(191, 'RO', 'Romania'),
(192, 'RU', 'Russia'),
(193, 'RW', 'Rwanda'),
(194, 'RE', 'Réunion'),
(195, 'BL', 'Saint Barthélemy'),
(196, 'SH', 'Saint Helena'),
(197, 'KN', 'Saint Kitts and Nevis'),
(198, 'LC', 'Saint Lucia'),
(199, 'MF', 'Saint Martin'),
(200, 'PM', 'Saint Pierre and Miquelon'),
(201, 'VC', 'Saint Vincent and the Grenadines'),
(202, 'WS', 'Samoa'),
(203, 'SM', 'San Marino'),
(204, 'SA', 'Saudi Arabia'),
(205, 'SN', 'Senegal'),
(206, 'RS', 'Serbia'),
(207, 'CS', 'Serbia and Montenegro'),
(208, 'SC', 'Seychelles'),
(209, 'SL', 'Sierra Leone'),
(210, 'SG', 'Singapore'),
(211, 'SK', 'Slovakia'),
(212, 'SI', 'Slovenia'),
(213, 'SB', 'Solomon Islands'),
(214, 'SO', 'Somalia'),
(215, 'ZA', 'South Africa'),
(216, 'GS', 'South Georgia and the South Sandwich Islands'),
(217, 'KR', 'South Korea'),
(218, 'ES', 'Spain'),
(219, 'LK', 'Sri Lanka'),
(220, 'SD', 'Sudan'),
(221, 'SR', 'Suriname'),
(222, 'SJ', 'Svalbard and Jan Mayen'),
(223, 'SZ', 'Swaziland'),
(224, 'SE', 'Sweden'),
(225, 'CH', 'Switzerland'),
(226, 'SY', 'Syria'),
(227, 'ST', 'São Tomé and Príncipe'),
(228, 'TW', 'Taiwan'),
(229, 'TJ', 'Tajikistan'),
(230, 'TZ', 'Tanzania'),
(231, 'TH', 'Thailand'),
(232, 'TL', 'Timor-Leste'),
(233, 'TG', 'Togo'),
(234, 'TK', 'Tokelau'),
(235, 'TO', 'Tonga'),
(236, 'TT', 'Trinidad and Tobago'),
(237, 'TN', 'Tunisia'),
(238, 'TR', 'Turkey'),
(239, 'TM', 'Turkmenistan'),
(240, 'TC', 'Turks and Caicos Islands'),
(241, 'TV', 'Tuvalu'),
(242, 'UM', 'U.S. Minor Outlying Islands'),
(243, 'PU', 'U.S. Miscellaneous Pacific Islands'),
(244, 'VI', 'U.S. Virgin Islands'),
(245, 'UG', 'Uganda'),
(246, 'UA', 'Ukraine'),
(247, 'SU', 'Union of Soviet Socialist Republics'),
(248, 'AE', 'United Arab Emirates'),
(249, 'GB', 'United Kingdom'),
(250, 'US', 'United States'),
(251, 'ZZ', 'Unknown or Invalid Region'),
(252, 'UY', 'Uruguay'),
(253, 'UZ', 'Uzbekistan'),
(254, 'VU', 'Vanuatu'),
(255, 'VA', 'Vatican City'),
(256, 'VE', 'Venezuela'),
(257, 'VN', 'Vietnam'),
(258, 'WK', 'Wake Island'),
(259, 'WF', 'Wallis and Futuna'),
(260, 'EH', 'Western Sahara'),
(261, 'YE', 'Yemen'),
(262, 'ZM', 'Zambia'),
(263, 'ZW', 'Zimbabwe'),
(264, 'AX', 'Åland Islands');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_savecustomer`
--

CREATE TABLE `tbl_savecustomer` (
  `id` int(5) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_savecustomer`
--

INSERT INTO `tbl_savecustomer` (`id`, `email`, `password`) VALUES
(1, 'gelas.keramik@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `id` int(5) NOT NULL,
  `country` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `email2` varchar(255) NOT NULL,
  `address2` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`id`, `country`, `first_name`, `last_name`, `companyname`, `address`, `city`, `state`, `zip`, `email_address`, `email2`, `address2`, `phone`, `status`) VALUES
(1, 'ID', 'Gelas', 'Keramik', '0', 'Jl H. Dharma no 23 Plumbon Cirebon', 'Cirebon', '0', '45123', 'gelas.keramik@gmail.com', 'gelas.keramik@gmail.com', 'Jl H. Dharma no 23 Plumbon Cirebon', '0856288271617', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_statuspaid`
--

CREATE TABLE `tbl_statuspaid` (
  `id` int(5) NOT NULL,
  `id_item` int(5) NOT NULL,
  `id_ordered` int(5) NOT NULL,
  `ordered_email` varchar(255) NOT NULL,
  `status` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_statuspaid`
--

INSERT INTO `tbl_statuspaid` (`id`, `id_item`, `id_ordered`, `ordered_email`, `status`) VALUES
(1, 3, 5, 'ariefstd.2006@gmail.com', 'unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `tb_checkout`
--

CREATE TABLE `tb_checkout` (
  `id` int(5) NOT NULL,
  `country` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `email2` varchar(255) NOT NULL,
  `address2` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_checkout`
--

INSERT INTO `tb_checkout` (`id`, `country`, `first_name`, `last_name`, `companyname`, `address`, `city`, `state`, `zip`, `email_address`, `email2`, `address2`, `phone`, `status`) VALUES
(1, 'ID', 'Gelas', 'Keramik', 'PT Gelas Keramik Putra', 'Jl H. Dharma no 23 Plumbon Cirebon', 'Cirebon', '0', '45123', 'gelas.keramik@gmail.com', 'gelas.keramik@gmail.com', 'Jl H. Dharma no 23 Plumbon Cirebon', '0856288271617', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_insertimage`
--

CREATE TABLE `tb_insertimage` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `datenow` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_insertimage`
--

INSERT INTO `tb_insertimage` (`id`, `name`, `datenow`) VALUES
(3, 'test.jpg', '2015-12-03'),
(4, 'cart-sblm-login-blm-ada-billing-info.jpg', '2015-12-03');

-- --------------------------------------------------------

--
-- Table structure for table `tb_menufeed`
--

CREATE TABLE `tb_menufeed` (
  `id` int(5) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_menufeed`
--

INSERT INTO `tb_menufeed` (`id`, `title`, `description`, `author`) VALUES
(1, 'Sunset Lake', 'A peaceful sunset view...', 'by j osborn'),
(2, 'Bridge to Heaven', 'Where is the bridge lead to?', 'by SigitEko'),
(3, 'Autumn', 'The fall of the tree...', 'by Lars van de Goor'),
(4, 'Winter Whisper', 'Winter feel...', 'by Andrea Andrade'),
(5, 'Light', 'The only shinning light...', 'by Lars van de Goor'),
(6, 'Rooster\'s Ranch', 'Rooster\'s ranch landscape...', 'by Andrea Andrade'),
(7, 'Herringfleet Mill', 'Just a herringfleet mill...', 'by Ian Flindt'),
(8, 'Autumn Light', 'Sun shinning into forest...', 'by Lars van de Goor'),
(9, 'Battle Field', 'Battle Field for you...', 'by Andrea Andrade'),
(10, 'Yellow cloudy', 'It is yellow cloudy...', 'by Zsolt Zsigmond'),
(11, 'Sundays Sunset', 'Beach view sunset...', 'by Robert Strachan'),
(12, 'Herringfleet Mill', 'Just a herringfleet mill...', 'by Ian Flindt'),
(13, 'Autumn Light', 'Sun shinning into forest...', 'by Lars van de Goor'),
(14, 'Battle Field', 'Battle Field for you...', 'by Andrea Andrade'),
(15, 'Beach', 'Something on beach...', 'by unknown'),
(16, 'Sundays Sunset', 'Beach view sunset...', 'by Robert Strachan'),
(17, 'Sun Flower', 'Good Morning Sun flower...', 'by Zsolt Zsigmond'),
(18, 'Flowers', 'Hello flowers...', 'by R A Stanley'),
(19, 'Alone', 'Lonely plant...', 'by Zsolt Zsigmond');

-- --------------------------------------------------------

--
-- Table structure for table `tb_totalorder`
--

CREATE TABLE `tb_totalorder` (
  `id` int(5) NOT NULL,
  `id_barang` int(5) NOT NULL,
  `email_customer` varchar(255) NOT NULL,
  `ongkir` float NOT NULL,
  `totalprice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_totalorder`
--

INSERT INTO `tb_totalorder` (`id`, `id_barang`, `email_customer`, `ongkir`, `totalprice`) VALUES
(1, 3, 'ariefstd.2006@gmail.com', 15000, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `created` datetime NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `created`, `last_login`) VALUES
(1, 'dunia@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'admin@gmail.com', '$2a$08$ENaN8IU9XpPZOexAO6WCCuXvbpQJi7l051Nx///8tLnN3JVNjnDzG', '2017-11-01 05:26:18', '2017-11-08 04:15:52'),
(3, 'lapangan@gmail.com', '$2a$08$n6ZV/kUwhmCzagpIVGJWRe1i0FsSMY4MylJbdJmOazEhnQUVnAP..', '2017-11-01 08:02:13', '2017-11-08 04:27:18'),
(4, 'pelayanan@gmail.com', '$2a$08$k18Qaw43Q3qwlAJ1uZub2OwzSrkt64z19cZ9azJNNMqXpekNv4OTa', '2017-11-09 02:58:25', '2017-11-09 03:11:22'),
(5, 'dokumentasi@gmail.com', '$2a$08$8i87ucMGxKS2lLokboIbHu5/fJPy7ONoboqvjy00z3DGLfxu8ygQO', '2017-11-09 02:59:33', '2017-11-10 00:39:32'),
(6, 'kegiatan@gmail.com', '$2a$08$EayoezB9Kk/5kdbIPQZHYuMiO8LfPvZn1hfvTl2TwIStA4P01wg5u', '2017-11-09 02:59:59', '2017-11-09 03:18:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_discount`
--
ALTER TABLE `order_discount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `tbl_billing`
--
ALTER TABLE `tbl_billing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cart_temp`
--
ALTER TABLE `tbl_cart_temp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_catmember`
--
ALTER TABLE `tbl_catmember`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_countries`
--
ALTER TABLE `tbl_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_savecustomer`
--
ALTER TABLE `tbl_savecustomer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_statuspaid`
--
ALTER TABLE `tbl_statuspaid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_checkout`
--
ALTER TABLE `tb_checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_insertimage`
--
ALTER TABLE `tb_insertimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_menufeed`
--
ALTER TABLE `tb_menufeed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_totalorder`
--
ALTER TABLE `tb_totalorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_discount`
--
ALTER TABLE `order_discount`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `serial` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_billing`
--
ALTER TABLE `tbl_billing`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_cart_temp`
--
ALTER TABLE `tbl_cart_temp`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_catmember`
--
ALTER TABLE `tbl_catmember`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_countries`
--
ALTER TABLE `tbl_countries`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=265;

--
-- AUTO_INCREMENT for table `tbl_savecustomer`
--
ALTER TABLE `tbl_savecustomer`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_statuspaid`
--
ALTER TABLE `tbl_statuspaid`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_checkout`
--
ALTER TABLE `tb_checkout`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_insertimage`
--
ALTER TABLE `tb_insertimage`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_menufeed`
--
ALTER TABLE `tb_menufeed`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_totalorder`
--
ALTER TABLE `tb_totalorder`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
