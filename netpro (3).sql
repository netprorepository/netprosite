-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2019 at 04:25 PM
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
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `imageurl` varchar(256) NOT NULL,
  `dateadded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `description`, `imageurl`, `dateadded`) VALUES
(1, 'We’re Special', '<p>NetPro International Limited was incorporated in Nigeria in the year 2000 and has since evolved to become a truly innovative, customer-focused and international technology solutions company for Higher education Hospitality and healthcare. With Corporate Head Office in Abuja, NetPro has established presence and strategic partnerships in Ireland, United Kingdom and the United States of America. Our track record of excellence in bespoke technology service provision, outstanding customer service, operational efficiency, flexible costing model and 365 support frameworks has indeed set us apart from our competitors.</p>\r\n', '95066b99a4219a3c60bd519eec3341831539344801.jpg', '2018-10-05 08:39:00'),
(2, 'We\'re different', '<p>NetPro International Limited&nbsp;was incorporated in Nigeria in the year 2000 and has since evolved to become a truly innovative, customer-focused and international technology solutions company for Higher education Hospitality and healthcare. With Corporate Head Office in Abuja, NetPro has established presence and strategic partnerships in Ireland, United Kingdom and the United States of America. Our track record of excellence in bespoke technology service provision, outstanding customer service, operational efficiency, flexible costing model and 365 support frameworks has indeed set us apart from our competitors.</p>\r\n', '2e08e258164c663eec6e90149825cc2a1539344684.jpg', '2018-10-05 08:40:00'),
(3, 'We\'re Interesting', '<p>NetPro International Limited&nbsp;was incorporated in Nigeria in the year 2000 and has since evolved to become a truly innovative, customer-focused and international technology solutions company for Higher education Hospitality and healthcare. With Corporate Head Office in Abuja, NetPro has established presence and strategic partnerships in Ireland, United Kingdom and the United States of America. Our track record of excellence in bespoke technology service provision, outstanding customer service, operational efficiency, flexible costing model and 365 support frameworks has indeed set us apart from our competitors.</p>\r\n', 'd35c5d2e361e2f189c14c7e3418811e21539344763.jpg', '2018-10-05 08:41:00');

-- --------------------------------------------------------

--
-- Table structure for table `accomplishments`
--

CREATE TABLE `accomplishments` (
  `id` int(11) NOT NULL,
  `title` varchar(64) NOT NULL,
  `value` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accomplishments`
--

INSERT INTO `accomplishments` (`id`, `title`, `value`, `status`) VALUES
(1, 'Satisied Customers', 4100, 1),
(2, 'Completed Consultations', 9500, 1),
(3, 'Carried Out Trainings', 6000, 1);

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
(1, '', 1, 'Aniegboka', 'Chukwudi', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `title` varchar(90) NOT NULL,
  `url` varchar(200) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `pdf_link` varchar(200) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`id`, `name`, `pdf_link`, `status`) VALUES
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
  `description` text NOT NULL,
  `createdon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `productimage` varchar(200) DEFAULT NULL,
  `status` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `createdon`, `productimage`, `status`) VALUES
(2, 'Precisio iEMS', '<p>Single unified solution to manage student lifecycle that includes :</p>\r\n\r\n<p>-Student Information System (SIS)</p>\r\n\r\n<p>-Learning Management System (LMS)</p>\r\n\r\n<p>-Customer Relationship Management (CRM)</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2018-10-17 09:58:55', 'ee5bdcd251749e726037d9b7fb97e5651539770335.jpg', ''),
(3, 'Precisio CBT', '<p>Our Vision is to build the most credible brand in bespoke software and technology service provision in West Africa. This vision is backed by a robust corporate strategy and implementation plan.</p>\r\n', '2018-10-17 09:49:00', 'f646ed5489cbe46415682db6052afb941539769740.png', ''),
(6, 'NetPro P1', '<p>Our Vision is to build the most credible brand in bespoke software and technology service provision in West Africa. This vision is backed by a robust corporate strategy and implementation plan.</p>\r\n', '2018-10-17 09:55:34', '7eb21bb781101c9665b0cbe361cedbf71539770134.jpg', ''),
(8, 'NetPro T1', '<p>As flexible and technology-enhanced learning becomes more pervasive, there is a growing need for educators to consider modes of assessment using similar tools in unified environments. Computer Based Test (CBT) is an effective solution for mass education evaluation. Testnovation Is an innovative software application for electronic exams (also known as CBA - Computer-Based Assessment, CBT - Computer-Based Testing or e-exam) that enables educators and trainers to author, schedule, deliver, and repo</p>\r\n', '2018-10-17 10:02:22', '1926da139284c2d6e3e800d180bb2b641539770542.jpg', ''),
(12, 'NetPro S1', '<p>s1</p>\r\n', '2018-10-17 09:55:15', '892748aba826ebd1724534569daff9611539770115.jpg', '');

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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `createdon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `admin_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `createdon`, `admin_id`, `status`) VALUES
(3, 'End-to-end Tech. Solutions.', '<p>End-to-end technology solution for the corparate and financial sector, Higher education &amp; Healthcare industries, SMEs and Government establishments.</p>\r\n', '2018-10-08 10:58:50', 1, 1),
(5, 'Software Development.', '<p>Design and development of Website and Mobile application including application for iPhone, iPad, Android and Microsoft.</p>\r\n', '2018-10-08 11:09:06', 1, 1),
(8, 'Training & Consultancy.', '<p>Training and consultancy</p>\r\n\r\n<p>We provide ICT related training and consultancy services to both the working class and students/pupils&nbsp; of secondary and primary schools.</p>\r\n\r\n<p>Our training for the students/pupils is centered on ICT and computer literacy as well as computer programming.</p>\r\n\r\n<p>Below are some of our computer trainings classes for the young ones</p>\r\n\r\n<ol>\r\n	<li><a href=\"http://www.netproacademy.net/courses/view/33\">After School Coding Clubs for Primary and Secondary Schools</a></li>\r\n	<li><a href=\"http://www.netproacademy.net/courses/view/32\">CodeCamp (Computer &amp; Technology Summer Camps for Kids)</a></li>\r\n</ol>\r\n\r\n<p>These classes are tailored towards growing the children&rsquo;s love for ICT in general and computer programming in particular.</p>\r\n\r\n<p>For further enquiries on these programmes, please send us a mail at academy@netpro.com.ng</p>\r\n', '2018-10-12 08:28:25', 1, 1),
(9, 'E-Learning', 'E-Learning, e-Portfolio and Computer-based testing system development and support.\r\n', '2018-10-12 08:28:25', 1, 1),
(10, 'Internet Service Provision.', '<p>Provision of internet services, Domain name registration, Web hosting, Website design and Portal Designs etc.</p>\r\n', '2018-10-12 08:29:46', 1, 1),
(11, 'Hardware', '<p>Mobile and portable systems sales and support (Tablets, Laptops etc.)</p>\r\n', '2018-10-17 08:59:56', 1, 1),
(12, 'Security & Access Control.', '<p>Security and Access Control systems (Digital signature, Pads, Smart Cards etc.)</p>\r\n', '2018-10-17 09:01:16', 1, 1);

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
-- Table structure for table `socialmedias`
--

CREATE TABLE `socialmedias` (
  `id` int(11) NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `linkedin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `socialmedias`
--

INSERT INTO `socialmedias` (`id`, `facebook`, `twitter`, `linkedin`) VALUES
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `status`, `lastactive`) VALUES
(1, 'chukwudi@netpro.com.ng', '$2y$10$54sQb8FIXHQqq476hoHd9eA6bJjHds.iqKw0UrWknAb9ublGx282C', 'active', '2018-10-04 09:17:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accomplishments`
--
ALTER TABLE `accomplishments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
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
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socialmedias`
--
ALTER TABLE `socialmedias`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `accomplishments`
--
ALTER TABLE `accomplishments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `socialmedia`
--
ALTER TABLE `socialmedia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `socialmedias`
--
ALTER TABLE `socialmedias`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
