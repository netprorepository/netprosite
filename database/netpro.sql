-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2018 at 03:15 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `netpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `profilePic` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `fname` varchar(110) NOT NULL,
  `lname` varchar(150) NOT NULL,
  `user_id` int(11) NOT NULL,
  `roleid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `profilePic`, `status`, `fname`, `lname`, `user_id`, `roleid`) VALUES
(1, '', 1, '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` varchar(200) NOT NULL,
  `createdon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` longtext NOT NULL,
  `telephone` longtext NOT NULL,
  `email` longtext NOT NULL,
  `seo_title` varchar(200) NOT NULL,
  `seo_description` varchar(200) NOT NULL,
  `seo_keywords` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `address`, `telephone`, `email`, `seo_title`, `seo_description`, `seo_keywords`, `url`) VALUES
(1, 'contact', '<p>\r\n	<strong>NetPro International Limited</strong><br />\r\n	29 Umaru Dikko Street, Jabi<br />\r\n	Abuja, FCT<br />\r\n	Nigeria<br />\r\n	P: +234-(0)9-2917-404</p>', '<p>\r\n	<strong>Telephone:</strong><br />\r\n	General Enquiries: +234 (0)9 291 7404; +234 (0)703 66 14 567; +234 (0)811 11 13 454<br />\r\n	Sales: +234 &nbsp;(0)805 22 55 000; +234 (0)807 80 66 924<br />\r\n	Support: +234 (0)807 80 67 202;&nbsp;+234 (0)705 84 46 562;&nbsp;<br />\r\n	South Africa: +27 1 0500 1859<br />\r\n	Ireland: +353 1 4428420</p>\r\n<p>\r\n	USA: +1 310 5983390</p>', '<p>\r\n	<strong>E-mail:</strong><br />\r\n	<span>General Enquiries:</span> info@netpro.com.ng; info@netpro.ie<br />\r\n	<span>Sales:</span>&nbsp;sales@netpro.com.ng; sales@netpro.ie<br />\r\n	<span>Support:</span> support@netpro.com.ng; support@netpro.ie</p>', 'contact', 'contact', 'contact', 'contact');

-- --------------------------------------------------------

--
-- Table structure for table `faqquestions`
--

CREATE TABLE `faqquestions` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` longtext NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faqquestions`
--

INSERT INTO `faqquestions` (`id`, `question`, `answer`, `status`) VALUES
(1, 'How to be a Partner?', '<p>\r\n	NetPro International limited is currently seeking to engage the services of strategic partners located across the entire African continent. Whether you are a professional or SME in related fields of interest we encourage you to get in touch with us via our contact links or by completing our <em>distributor form</em> on the site and we&rsquo;ll be glad to setup a meeting with you</p>', 1),
(3, 'How to Join the Team?', '<p>\r\n	Currently we are not hiring, however, interested and qualified applicants can send us their unsolicited applications via <a href=\"mailto:jobs@netpro.com.ng\"><strong>jobs@netpro.com.ng</strong></a><strong>.</strong></p>', 1),
(4, 'How to request for live demo ?', '<p>\r\n	To request a live demo, please click the<strong><em>&ldquo;request a live demo button&rdquo;</em></strong> on the site to access the request form. Our SLA for live demo requests is 1hr.</p>', 1),
(5, 'How to download Brochures ?', '<p>\r\n	To download our product brochures kindly click the quick downloads tab. All files are in PDF and less than 2MB in size. For custom brochures or editable file formats of our products and services kindly send your request to <a href=\"mailto:sales@netpro.com.ng\">sales@netpro.com.ng</a> or dial any of the sales lines seen on the contact page.</p>', 1),
(6, 'How to Contact us?', '<p>\r\n	NetPro international limited can reached directly on our general enquiries lines seen on the contact page or e-mail via <a href=\"mailto:info@netpro.com.ng\">info@netpro.com.ng</a>. For special enquires please complete the contact form and a member of our team will contact you.</p>', 1),
(7, 'How to request sale quotation (RFQ)?', '<p>\r\n	To request sales quote kindly dial our sales lines seen on the contact page or send your requests to <a href=\"mailto:sales@netpro.com.ng\">sales@netpro.com.ng</a>. Our SLAs for sales information requests is 1hr.</p>', 1),
(8, 'How to request for product/service support?', '<p>\r\n	To request for product/service support please dial our support lines seen on the contact page or send your requests via <a href=\"mailto:support@netpro.com.ng\">support@netpro.com.ng</a> and we&rsquo;ll be in touch with you. Our SLA for product/service support request is 1hr.</p>\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `heading` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `images` varchar(200) DEFAULT NULL,
  `seo_titel` varchar(200) NOT NULL,
  `seo_keyword` varchar(200) NOT NULL,
  `seo_description` varchar(200) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `heading`, `description`, `images`, `seo_titel`, `seo_keyword`, `seo_description`, `status`) VALUES
(1, 'Our Latest News', '<p style=\"text-align: justify;\">\r\n	<span style=\"font-size:22px;\"><span style=\"color: rgb(84, 84, 84); font-family: arial, sans-serif; line-height: 18.2px;\">Our track record of execellence in beespoke technology service provision, outstanding customer service, operational efficiency, flexible costing model and 365 support framework has indeed set us apart from our competitors. As ICT systems become an important competitive element in many organization, Netpro International Limited have also envolved in providing high&nbsp;tech. solutions specifically tailored to bring about&nbsp;ground-breaking innovations across organizations.&nbsp;</span>See this section for the latest breaking news and products releases from us.&nbsp;</span></p>', 'a226a89.jpg', 'Latest News', 'Latest News', 'Latest News', 1),
(2, '', '<p>\r\n	&nbsp;</p>\r\n<div>\r\n	<span style=\"font-size: 14px;\"><span style=\"font-family: arial, helvetica, sans-serif;\"><br />\r\n	</span></span></div>', '09ab37e', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `logoimg` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `logoimg`, `status`, `createdate`) VALUES
(1, 'partnerlogo 1', '1962dec.jpg', '1', '0000-00-00 00:00:00'),
(2, 'partnerlogo2', '048ce03.jpg', '1', '0000-00-00 00:00:00'),
(3, 'partnerlogo3', '456eb6d.jpg', '1', '0000-00-00 00:00:00'),
(4, 'partnerlogo4', '9bd9574.jpg', '1', '0000-00-00 00:00:00'),
(5, 'partnerlogo5', '8ec32fa.jpg', '1', '0000-00-00 00:00:00'),
(6, 'partnerlogo6', 'f5747fb.jpg', '1', '0000-00-00 00:00:00'),
(7, 'partnerlogo7', '39920d1.jpg', '1', '0000-00-00 00:00:00'),
(8, 'partnerlogo8', '4a08f9a.jpg', '1', '0000-00-00 00:00:00'),
(9, 'partnerlogo9', '0227ac7.jpg', '1', '0000-00-00 00:00:00'),
(10, 'partnerlogo10', '2b53a50.jpg', '1', '0000-00-00 00:00:00'),
(11, 'partnerlogo11', 'a792eee.jpg', '1', '0000-00-00 00:00:00'),
(12, 'partnerlogo12', '3958279.jpg', '1', '0000-00-00 00:00:00'),
(13, 'partnerlogo13', '9a6bc95.jpg', '1', '0000-00-00 00:00:00'),
(14, 'Microsoft Authorized Education Partner', 'e08744f.jpg', '1', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` varchar(500) NOT NULL,
  `createdon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `productimage` varchar(200) DEFAULT NULL,
  `status` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `proimg` varchar(200) NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `proimg`, `createdate`, `status`, `url`) VALUES
(1, 'imopoly', '38e2231.jpg', '0000-00-00 00:00:00', 1, ''),
(2, 'Nicole & Kingswill', 'b7446d6.jpg', '0000-00-00 00:00:00', 1, ''),
(3, 'Sigplex', 'eab2e20.jpg', '0000-00-00 00:00:00', 1, ''),
(5, 'HHCJ', '3441ba4.jpg', '0000-00-00 00:00:00', 1, 'http://imopoly.edu.ng/home.php'),
(6, 'New 1', '806b1e7.jpg', '0000-00-00 00:00:00', 1, 'http://sachinbaliadvocate.in/index.php');

-- --------------------------------------------------------

--
-- Table structure for table `quick_download`
--

CREATE TABLE `quick_download` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `pdf_link` varchar(200) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quick_download`
--

INSERT INTO `quick_download` (`id`, `name`, `pdf_link`, `status`) VALUES
(4, 'COMPUTER BASED TESTING', 'e4418fb.pdf', 1),
(5, 'CCTV', 'e07bcc4.pdf', 1),
(6, 'POWER CHURCH SOFTWARE', '1470da8.pdf', 1),
(7, 'CLASSE365', 'ad214de.pdf', 1),
(8, 'B2C ECOMMERCE WEBSITE', '7d74c7c.pdf', 1),
(9, 'EXCHANGE EMAIL', 'c9dd07d.pdf', 1),
(10, 'GOOGLE APP FOR EDUCATION', 'e74722e.pdf', 1),
(11, 'IEMS', 'b2450af.pdf', 1),
(12, 'WIRELESS VOIP SOLUTION', 'cefb4eb.pdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` varchar(500) NOT NULL,
  `createdon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `admin_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `video_link` varchar(200) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `video_link`, `status`) VALUES
(2, 'test', 'c4ef8ae.mp4', 1);

-- --------------------------------------------------------

--
-- Table structure for table `socialmedia`
--

CREATE TABLE `socialmedia` (
  `id` int(11) NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `linkedin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `socialmedia`
--

INSERT INTO `socialmedia` (`id`, `facebook`, `twitter`, `linkedin`) VALUES
(1, 'https://www.facebook.com/pages/Netpro-International-Limited/648209085234744?fref=ts', 'https://twitter.com/Netpro__', 'https://ng.linkedin.com/pub/netpro-international-limited/b8/b2a/124');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `test_name` varchar(200) NOT NULL,
  `person_type` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `seo_title` varchar(200) NOT NULL,
  `seo_keywords` varchar(200) NOT NULL,
  `seo_description` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `test_name`, `person_type`, `description`, `status`, `seo_title`, `seo_keywords`, `seo_description`, `url`) VALUES
(1, 'Chukwuma Obinna', 'Director ICT', '<p>\r\n	I am the Director of ICT at Imo State Polytechnic and in my role, I have worked with several IT companies in the past but the services delivered to us by NetPro is simply exceptional.&nbsp;</p>', 1, '', '', '', 'chukwuma-obinna'),
(2, '', '', '', 0, 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` varchar(40) NOT NULL DEFAULT 'active',
  `lastactive` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqquestions`
--
ALTER TABLE `faqquestions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quick_download`
--
ALTER TABLE `quick_download`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faqquestions`
--
ALTER TABLE `faqquestions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `quick_download`
--
ALTER TABLE `quick_download`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `socialmedia`
--
ALTER TABLE `socialmedia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
