-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2014 at 10:56 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `metronic`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(111) NOT NULL,
  `username` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL,
  `email_id` varchar(111) NOT NULL,
  `status` enum('y','no') NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `name`, `username`, `password`, `email_id`, `status`) VALUES
(1, 'ajm', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'info@mavengroupindia.com', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_automobile`
--

CREATE TABLE IF NOT EXISTS `tbl_automobile` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(251) NOT NULL,
  `name` varchar(111) NOT NULL,
  `category` varchar(251) NOT NULL,
  `link` varchar(251) NOT NULL,
  `content` text NOT NULL,
  `full_content` text NOT NULL,
  `image` varchar(111) NOT NULL,
  `logo` varchar(251) NOT NULL,
  `url` varchar(251) NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` enum('y','n') NOT NULL DEFAULT 'y',
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_automobile`
--

INSERT INTO `tbl_automobile` (`sno`, `type`, `name`, `category`, `link`, `content`, `full_content`, `image`, `logo`, `url`, `date`, `status`) VALUES
(4, 'English', 'Zayani Motors', 'Automobile', 'http://www.zmotors.com/', '<p>Zayani Motors has come a long way since its inception in 1994. The critical success factor for its continuing progress is the company\\''s clear sighted mission that the management had envisioned and meticulously set 20 years ago.</p>\r\n<p>Zayani Motors has and will always aim at providing the best quality products and services from the automotive industry to its commercial and non commercial clients. Having started with Mitsubishi Motors as its main franchise, it has been the company\\''s prudent mission on which its corporate culture has been built...</p>\r\n<div id=\\"_mcePaste\\" style=\\"position: absolute; left: -10000px; top: 0px; width: 1px; height: 1px; overflow: hidden;\\">\r\n<p>Zayani Motors has come a long way since its inception in 1994. The critical success factor for its continuing progress is the company\\''s clear sighted mission that the management had envisioned and meticulously set 20 years ago.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Zayani Motors has and will always aim at providing the best quality products and services from the automotive industry to its commercial and non commercial clients. Having started with Mitsubishi Motors as its main franchise,&nbsp;</p>\r\n<p>&nbsp; &nbsp; it has been the company\\''s prudent mission on which its corporate culture has been built...</p>\r\n</div>\r\n<p>&nbsp;</p>', '<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">Zayani Motors has come a long way since its inception in 1994. The critical success factor for its continuing progress is the company\\''s clear sighted mission that the management had envisioned and meticulously set 20 years ago. Zayani Motors has and will always aim at providing the best quality products and services from the automotive industry to its commercial and non commercial clients. Having started with Mitsubishi Motors as its main franchise, it has been the company\\''s prudent mission on which its corporate culture has been built that has enabled it to effectively and efficiently introduce and manage other prominent automotive brands such as Peugeot and MG as well as complimentary automotive products including Huper Optic and Autoglym.</p>\r\n<blockquote style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 18px; vertical-align: baseline; margin: 8px 0px 15px 25px; padding: 15px 0px 0px 64px; quotes: none; color: #081041; background: url(file:///D:/yuva_html%20_files/alzayaniweb%20(1)/demos/zayani/site/en/image/quote.png\\'') 30px 8px no-repeat transparent;\\">Zayani Motors has managed to expand its operations in the commercial products sector adding prominent brands under its umbrella including MAHA, PM Crane, Oil and Steel, Mitsubishi Forklift, and Nussbaum.</blockquote>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">From a modest start with only one facility in the Kingdom, Zayani Motors operates out of two state of the art sales and after-sales facilities, one in Ma\\''ameer and the other in Arad. Furthermore, Zayani Motors inaugurated a specialized truck and bus sales and after-sales facility for Mitsubishi Fuso in its Ma\\''ameer facility in 2011 enabling it to further serve the needs of this ever growing market. In addition, there are currently five parts sales outlets throughout Bahrain with plans for additional expansions.</p>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">The Company has constantly invested in its employees and facilities to provide its customers with the highest standards of sales and after-sales services. With a highly trained 190-member workforce, Zayani Motors has established itself as a leading name in the automotive and commercial industry.</p>', '66556ec53503f94d4141f9b1761b198e.jpg', '92a1189e0534723158a933f361b0b99d.gif', 'Zayani-Motors', '2014-07-10', 'y'),
(5, 'English', 'Zayani Leasing', 'Automobile', 'http://www.zayanileasing.com/', '<p>Established in 1999, Zayani Leasing is subsidiary of Al Zayani Investments. Zayani Leasing has managed to establish itself as one of the largest leasing companies on the island managing a fleet consisting of 3000 vehicles servicing all sectors of the market from commercial vehicles to luxury sedans.</p>\r\n<p>Zayani Leasing stands for Variety, Value and Safety and is associated with the highest quality of services offered at competitive prices.</p>\r\n<div id=\\"_mcePaste\\" style=\\"position: absolute; left: -10000px; top: 0px; width: 1px; height: 1px; overflow: hidden;\\">\r\n<p>Established in 1999, Zayani Leasing is subsidiary of Al Zayani Investments. Zayani Leasing has managed to establish itself as one of the largest&nbsp;</p>\r\n<p>&nbsp; &nbsp; leasing companies on the island managing a fleet consisting of 3000 vehicles servicing all sectors of the market from commercial vehicles to luxury sedans.</p>\r\n<p>&nbsp;</p>\r\n<p>Zayani Leasing stands for Variety, Value and Safety and is associated with the highest quality of services offered at competitive prices.</p>\r\n</div>\r\n<p>&nbsp;</p>', '<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">Established in 1999, Zayani Leasing, a subsidiary of Zayani Investments has transformed itself into one of the largest professional leasing companies on the island. With competitive rates, attractive packages and an extensive portfolio of satisfied customers, Zayani leasing has emerged a market leader over the years.</p>\r\n<blockquote style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 18px; vertical-align: baseline; margin: 8px 0px 15px 25px; padding: 15px 0px 0px 64px; quotes: none; color: #081041; background: url(file:///D:/yuva_html%20_files/alzayaniweb%20(1)/demos/zayani/site/en/image/quote.png\\'') 30px 8px no-repeat transparent;\\">Zayani Leasing stands for Variety, Value and Safety and is associated with the highest quality of services offered at competitive prices. Whatever the requirement may be, either a single vehicle, fleet, or specialised vehicle solution, Zayani Leasing provides a tailored solution to leasing needs.</blockquote>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">All the vehicles offered by Zayani Leasing are insured and dealer maintained with the aim of providing the customer with upmost confidence in leasing a vehicle.</p>\r\n<h6 style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: inherit; font-weight: inherit; line-height: 16px; vertical-align: baseline; margin: 0px; padding: 0px; color: #081041;\\"><span style=\\"border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: inherit; vertical-align: baseline; margin: 0px; padding: 0px;\\">Special Features</span></h6>\r\n<ul style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 10px 0px 10px 5px; padding: 0px; list-style: none; color: #242424;\\">\r\n<li style=\\"border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: 21px; vertical-align: baseline; margin: 0px; padding: 0px; list-style-type: disc; list-style-position: inside;\\">24 Hour Emergency Helpline</li>\r\n<li style=\\"border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: 21px; vertical-align: baseline; margin: 0px; padding: 0px; list-style-type: disc; list-style-position: inside;\\">Saudi Arabia \\"No Objection\\" Letter on request *</li>\r\n<li style=\\"border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: 21px; vertical-align: baseline; margin: 0px; padding: 0px; list-style-type: disc; list-style-position: inside;\\">\\"Option to Own\\" facility</li>\r\n<li style=\\"border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: 21px; vertical-align: baseline; margin: 0px; padding: 0px; list-style-type: disc; list-style-position: inside;\\">Can include specialist truck bodies</li>\r\n<li style=\\"border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: 21px; vertical-align: baseline; margin: 0px; padding: 0px; list-style-type: disc; list-style-position: inside;\\">All vehicles &ndash; cars, pickups, vans, trucks, forklifts</li>\r\n<li style=\\"border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: 21px; vertical-align: baseline; margin: 0px; padding: 0px; list-style-type: disc; list-style-position: inside;\\">Accident management on production of Traffic Report</li>\r\n</ul>', 'a1ebcbbc966ed5aa0559e9a988342dde.jpg', 'fd1eaa9c1ea30a674049b2e938a485e9.gif', 'Zayani-Leasing', '2014-07-10', 'y'),
(6, 'English', 'Orient Motors', 'Automobile', 'http://www.ombahrain.com/', '<p>\r\n<div id=\\"_mcePaste\\" style=\\"position: absolute; left: -10000px; top: 0px; width: 1px; height: 1px; overflow: hidden;\\">A subsidiary of Zayani Motors under Al Zayani Investments, are the official distributors for a number of renowned and reputed Far eastern automakers including Brilliance Auto, ZX Auto, FAW, Jinbei, JMC and Shantui. &lt;/p&gt;</div>\r\n<div id=\\"_mcePaste\\" style=\\"position: absolute; left: -10000px; top: 0px; width: 1px; height: 1px; overflow: hidden;\\">&nbsp; &nbsp; &lt;p&gt;With a promising and successful start, Orient Motors has taken the lead in providing quality products, dedicated services and prices that are pocket friendly providing business enterprises with a range of options allowing them to minimse their transportation costs.</div>\r\n</p>\r\n<p>A subsidiary of Zayani Motors under Al Zayani Investments, are the official distributors for a number of renowned and reputed Far eastern automakers including Brilliance Auto, ZX Auto, FAW, Jinbei, JMC and Shantui.</p>\r\n<p>With a promising and successful start, Orient Motors has taken the lead in providing quality products, dedicated services and prices that are pocket friendly providing business enterprises with a range of options allowing them to minimse their transportation costs.</p>', '<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">A subsidiary of Zayani Motors under Al Zayani Investments, are the official distributors for a number of renowned and reputed Far eastern automakers including Brilliance Auto, ZX Auto, FAW, Jinbei, JMC and Shantui.</p>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">With a promising and successful start, Orient Motors has taken the lead in providing quality products, dedicated services and prices that are pocket friendly providing business enterprises with a range of options allowing them to minimse their transportation costs.</p>\r\n<blockquote style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 18px; vertical-align: baseline; margin: 8px 0px 15px 25px; padding: 15px 0px 0px 64px; quotes: none; color: #081041; background: url(file:///D:/yuva_html%20_files/alzayaniweb%20(1)/demos/zayani/site/en/image/quote.png\\'') 30px 8px no-repeat transparent;\\">Orient Motors began with the introduction of Brilliance Jinbei minibuses and cargo vans, which are a favourite in the light commercial vehicle segment as they meet the increasing domestic demands of a range of customers and their needs.</blockquote>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">The spectrums of services at Orient Motors are geared towards providing an outstanding purchase and ownership experience that constantly drives to surpass its own high standards of quality and commitment.</p>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">Orient Motors has adopted innovative retail standards and benchmarks and works towards implementing processes that meets the needs of customers &ndash; both individual as well as corporate fleet clients in all facets of sales and after sales facilities.</p>', 'f83307c81a4ca834eb2b67b45e49e628.jpg', '9a458affdd421fa874650ffd6d0a169c.gif', 'Orient-Motors', '2014-07-10', 'y'),
(7, 'English', 'First Motors', 'Automobile', 'http://www.1stmotors.com/', '<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">\r\n<div id=\\"_mcePaste\\" style=\\"position: absolute; left: -10000px; top: 0px; width: 1px; height: 1px; overflow: hidden;\\">Al Zayani Investments acquired a majority share in First Motors during April 2004 and controls the managerial tasks at First Motors. &lt;/p&gt;</div>\r\n<div id=\\"_mcePaste\\" style=\\"position: absolute; left: -10000px; top: 0px; width: 1px; height: 1px; overflow: hidden;\\">&nbsp; &nbsp; &lt;p&gt;Since 2004, AZI has spared no effort in working hard to change the public\\''s misconceived image of Hyundai.&lt;br/&gt;Today, First Motors, the official dealer and distributor for Hyundai passenger and commercial vehicles has established itself as one of the key players in the automotive sector in the Kingdom of Bahrain..</div>\r\n</p>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\"><span style=\\"font-family: Arial, Helvetica, sans-serif; color: #242424;\\"><span style=\\"font-size: 12px; line-height: 18px;\\">Al Zayani Investments acquired a majority share in First Motors during April 2004 and controls the managerial tasks at First Motors.</span></span></p>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\"><span style=\\"font-family: Arial, Helvetica, sans-serif; color: #242424;\\"><span style=\\"font-size: 12px; line-height: 18px;\\">&nbsp;Since 2004, AZI has spared no effort in working hard to change the public\\''s misconceived image of Hyundai.Today, First Motors, the official dealer and distributor for Hyundai passenger and commercial vehicles has established itself as one of the key players in the automotive sector in the Kingdom of Bahrain..</span></span></p>', '<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">Al Zayani Investments acquired a majority share in First Motors during April 2004 and controls the managerial tasks at First Motors. Since 2004, AZI has spared no effort in working hard to change the public\\''s misconceived image of Hyundai.</p>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">Today, First Motors, the official dealer and distributor for Hyundai passenger and commercial vehicles has established itself as one of the key players in the automotive sector in the Kingdom of Bahrain. First Motors continues to grow year on year through the management\\''s focus on improved customer experience and satisfaction.</p>\r\n<blockquote style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 18px; vertical-align: baseline; margin: 8px 0px 15px 25px; padding: 15px 0px 0px 64px; quotes: none; color: #081041; background: url(file:///D:/yuva_html%20_files/alzayaniweb%20(1)/demos/zayani/site/en/image/quote.png\\'') 30px 8px no-repeat transparent;\\">First Motors has heavily invested in a state of the art sales and after-sales facility located on Majlis Al Ta\\''awon highway in Ma\\''ameer. Most recently First Motors has expanded to include an after-sales facility in Salmabad allowing for greater convenience to its customers, and is looking to expand into further satellite facilities.</blockquote>', 'bb7991e5a8e1941a880eec05634e28ab.jpg', 'b3b38f925502bbd89ee31cdcf0316ddd.gif', 'First-Motors', '2014-07-10', 'y'),
(8, 'English', 'Euro Motors', 'Automobile', 'http://www.euromotors.com.bh/', '<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">\r\n<div id=\\"_mcePaste\\" style=\\"position: absolute; left: -10000px; top: 0px; width: 1px; height: 1px; overflow: hidden;\\">Since 1998, Euro Motors set out to position itself as the leader in the automotive industry in the Kingdom of Bahrain and has since come a long way. &lt;/p&gt;</div>\r\n<div id=\\"_mcePaste\\" style=\\"position: absolute; left: -10000px; top: 0px; width: 1px; height: 1px; overflow: hidden;\\">&nbsp; &nbsp; &lt;p&gt;From a modest start with only BMW, the dealership has managed to acquire premium brands such as MINI, Land Rover, Jaguar, Rolls-Royce Motor Cars, Ferrari and Maserati under its impressive banner. In doing so, it has preserved each identity with the utmost integrity and dedication.</div>\r\n</p>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\"><span style=\\"font-family: Arial, Helvetica, sans-serif; color: #242424;\\"><span style=\\"font-size: 12px; line-height: 18px;\\">Since 1998, Euro Motors set out to position itself as the leader in the automotive industry in the Kingdom of Bahrain and has since come a long way.</span></span></p>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\"><span style=\\"font-family: Arial, Helvetica, sans-serif; color: #242424;\\"><span style=\\"font-size: 12px; line-height: 18px;\\">From a modest start with only BMW, the dealership has managed to acquire premium brands such as MINI, Land Rover, Jaguar, Rolls-Royce Motor Cars, Ferrari and Maserati under its impressive banner. In doing so, it has preserved each identity with the utmost integrity and dedication.</span></span></p>', '<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">Since 1998, Euro Motors set out to position itself as the leader in the automotive industry in the Kingdom of Bahrain and has since come a long way. From a modest start with only BMW, the dealership has managed to acquire premium brands such as MINI, Land Rover, Jaguar, Rolls-Royce Motor Cars, Ferrari and Maserati under its impressive banner. In doing so, it has preserved each identity with the utmost integrity and dedication.</p>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\"><span style=\\"border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: inherit; vertical-align: baseline; margin: 0px; padding: 0px;\\"><a style=\\"border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: inherit; vertical-align: baseline; margin: 0px; padding: 0px; text-decoration: none; color: #06123d;\\" href=\\"http://www.euromotors.com.bh/\\" target=\\"_blank\\">Euro Motors</a></span>&nbsp;does not compromise on presentation, quality, technical service and customer care. Fully committed to the principle of offering the utmost to our customers, the drive to improve profitability is always conditioned to match promise with performance because every Euro Motors customer is valued.</p>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">More than being just exclusive distributors Euro Motors has become a name associated with a high level of trust and customer care. This is a phenomenal association for the youngest automobile dealer in the country whose acknowledged rise reflects traditional values that have endeared the Al Zayani Investments group in Bahrain.</p>\r\n<blockquote style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 18px; vertical-align: baseline; margin: 8px 0px 15px 25px; padding: 15px 0px 0px 64px; quotes: none; color: #081041; background: url(file:///D:/yuva_html%20_files/alzayaniweb%20(1)/demos/zayani/site/en/image/quote.png\\'') 30px 8px no-repeat transparent;\\">Euro Motors remains committed to principle of providing the best cars at the best dealership</blockquote>', '1fae9f8969c9a2c601039d44b3bf3c2d.jpg', 'd9de00a47141008de7a3863801f96e32.png', 'Euro-Motors', '2014-07-10', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_auto_slider`
--

CREATE TABLE IF NOT EXISTS `tbl_auto_slider` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `auto_id` int(11) NOT NULL,
  `images` varchar(111) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tbl_auto_slider`
--

INSERT INTO `tbl_auto_slider` (`sno`, `auto_id`, `images`) VALUES
(1, 8, 'ea4cad06a294b74eab6219f4ebf5cd68.jpg'),
(2, 8, '35358952f3088d00c383c1942319e93f.jpg'),
(3, 8, '652df395aa05607700f8dbba9759d9a1.jpg'),
(4, 7, 'c1c2dc921dc6bbc884b8df8d3e7d1abc.jpg'),
(5, 7, 'd27cb12819853a38565e2a5a5dd5d385.jpg'),
(6, 7, '63f11cf3cc17a3e7d587984a4710cef2.jpg'),
(7, 7, 'e41bfe76eba27e548b07ec007dafb4b2.jpg'),
(8, 6, '992787e2c94cd2e0453c042a7647ef8b.jpg'),
(9, 5, 'a17104bb4a94731eca26dd0ae1622b15.jpg'),
(10, 5, '003105cab91c95e39f580e359a6f3eb9.jpg'),
(11, 5, '29964b338c7ab1485f78cb7d7baa5f31.jpg'),
(12, 4, 'aef20ecf2cc7444b2d650c5218a0665c.jpg'),
(13, 4, '6867db1ccec303fa8bc22cec57e2b845.jpg'),
(14, 4, '06d91e4614061fb5db1c985441ba815b.jpg'),
(15, 4, '98dd0145337dff6bd6e795c0e0a2f14c.jpg'),
(16, 4, '5d028d683900883d4b60e694a401fa8f.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner`
--

CREATE TABLE IF NOT EXISTS `tbl_banner` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(251) NOT NULL,
  `name` varchar(111) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(111) NOT NULL,
  `url` varchar(251) NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` enum('y','n') NOT NULL DEFAULT 'y',
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_banner`
--

INSERT INTO `tbl_banner` (`sno`, `type`, `name`, `content`, `image`, `url`, `date`, `status`) VALUES
(1, 'English', 'Road Safety Campaign at St. Christopher''s School', '<p>The event took place during the drop off and pick up time of school hours where BMW representatives demonstrated the use of booster cushions and child seats to the parents and their children.</p>', 'fff8457a4ee036ed173a0c83f39fa19a.jpg', 'Road-Safety-Campaign-at-St-Christophers-School', '2014-07-09', 'y'),
(3, 'English', 'Tamkeen Consultation Forum- 31st March 2014', '<p>As a part of Training &amp;amp; Career Development of AZI, AZI Group HR was invited to attend and share it\\''s views at the Tamkeen Consultation Forum which took place on Monday, 31st March 2014, at Gulf Hotel- Awal Ballroom.</p>', '815b31f90cef65e5aa54259f79e6b9c3.jpg', 'Tamkeen-Consultation-Forum-31st-March-2014', '2014-07-09', 'y'),
(4, 'English', 'NIIT AAP Students Batch 1- Hiring 1st April 2014', '<p>As a part of Training &amp; Development of AZI Group, Management signed a Contract on 26th September 2012 with Tamkeen and NIIT for the Automotive Apprenticeship Program (AAP)...</p>', 'd46b1288aabcb68a9fbef92db96276eb.jpg', 'NIIT-AAP-Students-Batch-1-Hiring-1st-April-2014', '2014-07-09', 'y'),
(5, 'English', 'Esperienza Ferrari – Open Track Ferrari Event at the BIC', '<p>Ferrari invited the owners and prospects to the Bahrain International Circuit (BIC) on Saturday 24th May 2014 to test drive their cars on the track with Ferrari Pilota instructors.</p>', '2b820668a3efd55dc2d809f96d5467dc.jpg', 'Esperienza-Ferrari-Open-Track-Ferrari-Event-at-the-BIC', '2014-07-09', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_careers`
--

CREATE TABLE IF NOT EXISTS `tbl_careers` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(111) NOT NULL,
  `Email` varchar(111) NOT NULL,
  `Phone_Number` varchar(111) NOT NULL,
  `Country` varchar(111) NOT NULL,
  `Current_Location` varchar(111) NOT NULL,
  `Preffed_Location` varchar(111) NOT NULL,
  `Job_Category` varchar(111) NOT NULL,
  `Industry` varchar(111) NOT NULL,
  `Your_Message` text NOT NULL,
  `Industry_Image` varchar(111) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_careers`
--

INSERT INTO `tbl_careers` (`sno`, `Name`, `Email`, `Phone_Number`, `Country`, `Current_Location`, `Preffed_Location`, `Job_Category`, `Industry`, `Your_Message`, `Industry_Image`, `date`) VALUES
(1, 'mohan', 'mohan@gmail.com', '9505160420', 'India', 'pune', 'hyderabad', '19', '56', 'hellow', 'b64a93e77966b3c795a25296aa414acb.jpg', '0000-00-00'),
(2, 'kumar', 'kumar@gmail.com', '8659856985', 'USA', 'manmad', 'kalkata', '24.01', '13', 'super', '83ed710f77873cbf1d7c126534233c3f.jpg', '0000-00-00'),
(3, 'santhosh', 'santhosh@gmail.com', '8659856985', 'USA', 'manmad', 'kalkata', '24.04', '55', 'santhosh', '83a7599695b2392799a6dea979a3b87d.jpg', '0000-00-00'),
(4, 'sundaram', 'sundaram@gmail.com', '98965985698', 'India', 'madras', 'mumbai', 'Accounts, Finance, Tax, Company Secretary, Audit', 'Partnership', 'we good talented', '98aeed4f0012bb16dc7cddf8d537f333.jpg', '0000-00-00'),
(5, 'kiran', 'kiran@gmail.com', '9856985698', 'USA', 'newyork', 'washington', 'Site Engineering, Project Management', 'Multinational Corporation', 'we are with you well', '4acd2775b6ef141d651731fd93fd4436.jpg', '0000-00-00'),
(6, 'yuvraj', 'yuvaraj950@gmail.com', '9505160420', 'India', 'hyderabad', 'hyderabad', 'IT Software - Application Programming, Maintenance', 'Limited Exempt Private Company', 'php developer', '69ed20564cca368debc7ead735bb0e04.jpg', '2014-03-21'),
(7, 'yuvraj', 'yuvaraj950@gmail.com', '9505160420', 'India', 'hyderabad', 'hyderabad', 'IT Software - Application Programming, Maintenance', 'Limited Exempt Private Company', 'php developer', '3a5306e02d0c583defbd24bfc8de8e52.jpg', '2014-03-21'),
(8, 'yuvraj', 'yuvaraj950@gmail.com', '9505160420', 'India', 'hyderabad', 'hyderabad', 'IT Software - Application Programming, Maintenance', 'Limited Exempt Private Company', 'php developer', 'f1fd77d69637ec42a98b777cadbc08c4.jpg', '2014-03-21'),
(9, 'yuvraj', 'yuvaraj950@gmail.com', '9505160420', 'India', 'hyderabad', 'hyderabad', 'IT Software - Application Programming, Maintenance', 'Limited Exempt Private Company', 'php developer', 'e66f505b6c7d3de6e52f0362a01c5e94.jpg', '2014-03-21'),
(10, 'yuvraj', 'yuvaraj950@gmail.com', '9505160420', 'India', 'hyderabad', 'hyderabad', 'IT Software - Application Programming, Maintenance', 'Limited Exempt Private Company', 'php developer', '20d1bc516f5604682cd48549e5a58d92.jpg', '2014-03-21'),
(11, 'yuvraj', 'yuvaraj950@gmail.com', '9505160420', 'India', 'hyderabad', 'hyderabad', 'IT Software - Application Programming, Maintenance', 'Limited Exempt Private Company', 'php developer', '9e0d34864f12704ed90ccdada4acb8a3.jpg', '2014-03-21'),
(12, 'yuvraj', 'yuvaraj950@gmail.com', '9505160420', 'India', 'hyderabad', 'hyderabad', 'IT Software - Application Programming, Maintenance', 'Limited Exempt Private Company', 'php developer', 'd90944e47c423e9d4925280042f529e4.jpg', '2014-03-21'),
(13, 'bhaskar', 'bhaskar@gmail.com', '9856235469', 'India', 'hyderabad', 'hyderabad', 'IT Software - Network Administration, Security', 'Non-Profit Organization', 'shdksadks', '6cf183a9691222a895eb8690babee6e8.jpg', '2014-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(111) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `category`) VALUES
(1, 'Services in India'),
(2, 'Services in USA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clients`
--

CREATE TABLE IF NOT EXISTS `tbl_clients` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(111) NOT NULL,
  `category` int(11) NOT NULL,
  `image` varchar(111) NOT NULL,
  `date` date NOT NULL,
  `status` enum('y','n') NOT NULL DEFAULT 'y',
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_clients`
--

INSERT INTO `tbl_clients` (`sno`, `name`, `category`, `image`, `date`, `status`) VALUES
(1, 'Financing', 1, 'e3c4f85a56466fde8573d9c3f615d81d.jpg', '2014-03-19', 'y'),
(2, 'Pharmacy', 1, 'fd12ca076a83cfad210af0209cb3fcf5.jpg', '2014-03-19', 'y'),
(3, 'Transport', 1, '8c2bd8497a6d041e3a36c9aaa5fa76f7.jpg', '2014-03-19', 'y'),
(4, 'Processing', 1, '47f7dec3db490ee8e5c41d771e315a65.jpg', '2014-03-19', 'y'),
(5, 'FMCG', 1, '7190b58fedee0fb3de5ce17b2cf0f78a.jpg', '2014-03-19', 'y'),
(6, 'Automobile', 1, '51fc9d03e6576e5248c6e6eb2f5bd1d2.jpg', '2014-03-19', 'y'),
(7, 'Manufacturing', 1, '89e0995a279dae9d763a7b87b0018705.jpg', '2014-03-19', 'y'),
(8, 'IT (Information Technolgy)', 1, '12cac8726f58cfbc51aeb359ee11145c.jpg', '2014-03-19', 'y'),
(9, 'Engineering', 1, 'e19e4b0ae52fdfb901a7d3462cde9540.jpg', '2014-03-19', 'y'),
(10, 'Education', 1, '8b43dd6e8f6b1df737675f9ce9bec56c.jpg', '2014-03-19', 'y'),
(11, 'Infrastructure', 1, '29cacf39d74a5d35d34f525a022eda26.jpg', '2014-03-19', 'y'),
(12, 'Financing', 2, '213f8867ea3f984f639930647396bc8a.jpg', '2014-03-19', 'y'),
(13, 'Pharmacy', 2, '1b3d7fd1e0deac5edc7eac128c6acb20.jpg', '2014-03-19', 'y'),
(14, 'Health care', 2, '6de574e573d173ae1fc88c75d966d2fe.jpg', '2014-03-19', 'y'),
(15, 'Telecom', 2, '37966fd02d3fff891099c712a102b8ef.jpg', '2014-03-19', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client_category`
--

CREATE TABLE IF NOT EXISTS `tbl_client_category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(111) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_client_category`
--

INSERT INTO `tbl_client_category` (`cat_id`, `category`) VALUES
(1, 'Clients In INDIA'),
(2, 'Clients In USA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company_type`
--

CREATE TABLE IF NOT EXISTS `tbl_company_type` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `company_type` varchar(111) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_company_type`
--

INSERT INTO `tbl_company_type` (`sno`, `company_type`) VALUES
(1, 'Limited Exempt Private Company'),
(2, 'Multinational Corporation'),
(3, 'Non-Profit Organization'),
(4, 'Partnership'),
(5, 'Private Limited'),
(6, 'otherfiles/dashboard Listed'),
(7, 'Sole Proprietor'),
(8, 'Statutory Board'),
(9, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(111) NOT NULL,
  `Email` varchar(111) NOT NULL,
  `Phone` varchar(111) NOT NULL,
  `Address` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`sno`, `Name`, `Email`, `Phone`, `Address`, `date`) VALUES
(1, 'karan', 'karan@gmail.com', '9505160420', 'road no1,banjarahills,hyderabad', '2014-03-21'),
(2, 'karan', 'karan@gmail.com', '9505160420', 'road no1,banjarahills,hyderabad', '2014-03-21'),
(3, 'santhosh', 'santhosh@gmail.com', '9505160420', 'road no:2 banjarahills hyderabad', '2014-03-21'),
(4, 'lokesh', 'lokesh@gmail.com', '9856985457', 'padmarao nagar colony ,hyderabad', '2014-03-21'),
(5, 'praveen', 'praveen@gmail.com', '8546236589', 'hyderabad', '2014-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_content`
--

CREATE TABLE IF NOT EXISTS `tbl_content` (
  `content_id` int(11) NOT NULL AUTO_INCREMENT,
  `content_name` varchar(111) NOT NULL,
  `content` text NOT NULL,
  `content_arabic` text NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`content_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_content`
--

INSERT INTO `tbl_content` (`content_id`, `content_name`, `content`, `content_arabic`, `Date`) VALUES
(1, 'Intaleq Content', '<p>Contents coming soon...</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '<p><span style=\\"font-family: HelveticaNeue, Tahoma, sans-serif; font-size: 16px; line-height: 24px;\\">&nbsp;2014 ?????????? ???? ?? ????? ????? ??&nbsp;???????? ?????? ???? ????? ???? ???? ?????? ???? ????? ?? ???? ???? ?????? ?????? ??? ????? ?????? ???? ???? ???? ??????? ???????? ???? ??&nbsp;</span></p>', '2014-07-12'),
(2, 'Mabara Charaty Content', '<blockquote style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 18px; vertical-align: baseline; margin: 8px 0px 15px 25px; padding: 15px 0px 0px 64px; quotes: none; color: #081041; background: url(file:///D:/yuva_html%20_files/alzayaniweb%20(1)/demos/zayani/site/en/image/quote.png\\'') 30px 8px no-repeat transparent;\\">With the help of God, the official website for Rashid Abdul Rahman Alzayani Mabara was launched:</blockquote>\r\n<h3 style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: inherit; font-weight: inherit; line-height: 16px; vertical-align: baseline; margin: 0px; padding: 0px; color: #081041;\\">A brief about Rashid Alzayani Charity:<br /><br /></h3>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">Established in Kingdom of Bahrain a private foundation named \\"Abdul Rahman Rashid Charity Foundation\\" Under the statute of the establishment published in the Official Gazette No.2895 dated 14th May 2009 after its registration in Ministry of Social Development in accordance with decree no 21 for year 1989 and the basic enterprise system.</p>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\"><span style=\\"border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: inherit; vertical-align: baseline; margin: 0px; padding: 0px;\\">The foundation aims to achieve the following objectives:</span></p>\r\n<ul style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 10px 0px 10px 5px; padding: 0px; list-style: none; color: #242424;\\">\r\n<li style=\\"border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: 21px; vertical-align: baseline; margin: 0px; padding: 0px; list-style-type: disc; list-style-position: inside;\\">Providing financial and in-kind assistance to needy families of Kingdom of Bahrain.</li>\r\n<li style=\\"border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: 21px; vertical-align: baseline; margin: 0px; padding: 0px; list-style-type: disc; list-style-position: inside;\\">Providing help to patients needing treatment in private hospitals In Kingdom of Bahrain.</li>\r\n<li style=\\"border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: 21px; vertical-align: baseline; margin: 0px; padding: 0px; list-style-type: disc; list-style-position: inside;\\">Providing assistance in case of emergencies and disasters.</li>\r\n<li style=\\"border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: 21px; vertical-align: baseline; margin: 0px; padding: 0px; list-style-type: disc; list-style-position: inside;\\">Assist students who need to continue their higher studies inside kingdom of Bahrain.</li>\r\n<li style=\\"border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: 21px; vertical-align: baseline; margin: 0px; padding: 0px; list-style-type: disc; list-style-position: inside;\\">Assist families who need to construct or repair their house.</li>\r\n</ul>\r\n<p><br style=\\"font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 16px;\\" /></p>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">To see the latest news about the charity, please click the link below;</p>', '<p><span style=\\"font-family: midan; font-size: 18px; text-align: justify;\\">??? ???? &laquo;????&raquo; ???????? ???????? ?? ????? ??????? ?????? ????????</span></p>', '2014-07-12'),
(3, 'Profile Content', '<blockquote style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 18px; vertical-align: baseline; margin: 8px 0px 15px 25px; padding: 15px 0px 0px 64px; quotes: none; color: #081041; background: url(file:///D:/yuva_html%20_files/alzayaniweb%20(1)/demos/zayani/site/en/image/quote.png\\'') 30px 8px no-repeat transparent;\\">Established in 1977, Alzayani Investments is a dynamic company with a proven track record. It derives its strength from its local solid foundation, and its worldwide network of contacts.</blockquote>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">Involved in diversified industries such as automotive, health care, manufacturing, real estates and service, the company is expanding on constant basis.</p>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">Its strategy is dedicated to expand and excel, with a global vision. It employs state of the art technologies to ensure an international competitive edge and stands ready for all future challenges.&nbsp;</p>', '<p><span style=\\"font-family: midan; font-size: 18px; text-align: justify;\\">???? ???? &laquo;????&raquo; ???????? ???????? ?? ????? ??????? ?????? ????????</span></p>', '2014-07-12'),
(4, 'Chairman''s Message Content', '<div style=\\"border: 1px solid #dbdbdb; font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 16px; vertical-align: baseline; margin: 0px 15px 15px 0px; padding: 10px; float: left; display: inline-block;\\"><img style=\\"border: 1px solid #dbdbdb; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: inherit; vertical-align: baseline; margin: 0px auto 10px; padding: 3px 4px; width: 180px; height: 200px; display: block; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\\" title=\\"Zayed Al Zayani\\" src=\\"http://localhost/metronic/public/uploads/711821c57f0b33c4fbbe5bff0b16cab3.jpg\\" alt=\\"Zayed Al Zayani\\" />\r\n<h6 style=\\"font-size: 14px; border: 0px; font-family: inherit; font-style: inherit; font-variant: inherit; line-height: 15px; vertical-align: baseline; margin: 0px; padding: 5px 2px; color: #081041; height: 25px; text-align: center;\\">Zayed Al Zayani<span style=\\"border: 0px; font-family: inherit; font-size: 12px; font-style: inherit; font-variant: inherit; font-weight: normal; line-height: inherit; vertical-align: baseline; margin: 0px; padding: 0px; display: block;\\">Chairman</span></h6>\r\n</div>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">In the editorial, as part of my new presidential post of Alzayani Investments Group, I express sincere thanks to my brother Khalid Rashid Al Zayani, former Chairman of the Group for his dedications and contributions throughout his 32 years of serving the group as its chairman. The group witnessed many developments and expansions because of his efforts. My brother Khalid was a quick seeker and fast follower to goals. The beginning was tough as we started from scratch, and by grace of God the organization has developed over the years because of the leadership of my brother Khalid and our unity all of us around him. Our future ambitions focus on developing the organization to become a leader in efficiency in the Middle East and might be in the world. We have started such ambition in one of our industrial companies with the active participations of managers and sincere staff.</p>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">As you all know that although I was a founder of this Company, I was busy developing the industrial sector, and by grace of God and efforts of Managers we have succeeded in promoting our leading industrial organization, including opening permanent offices for the Company\\''s employees in London, Toronto, Kuala Lumpur and Nairobi, in addition to more than 50 local distributors across the universe. Because of this distinguished Company we were able to market cable products manufactured in Bahrain in more than 70 countries, starting from The United States of America, South Africa,caliming Far East, Europe and Australia, in addition to leadership position in the Middle East.</p>', '<div style=\\"border: 1px solid #dbdbdb; font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 16px; vertical-align: baseline; margin: 0px 15px 15px 0px; padding: 10px; float: left; display: inline-block; background: url(file:///D:/yuva_html%20_files/alzayaniweb%20(1)/demos/zayani/site/en/image/bg-brad-top2btm.jpg\\'') 0px 227px repeat-x;\\"><img style=\\"border: 1px solid #dbdbdb; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: inherit; vertical-align: baseline; margin: 0px auto 10px; padding: 3px 4px; width: 180px; height: 200px; display: block; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\\" title=\\"Zayed Al Zayani\\" src=\\"file:///D:/yuva_html%20_files/alzayaniweb%20(1)/demos/zayani/site/en/image/Zayed-Al-Zayani.jpg\\" alt=\\"Zayed Al Zayani\\" />\r\n<h6 style=\\"border: 0px; font-family: inherit; font-size: 14px; font-style: inherit; font-variant: inherit; line-height: 15px; vertical-align: baseline; margin: 0px; padding: 5px 2px; color: #081041; height: 25px; text-align: center;\\">Zayed Al Zayani<span style=\\"border: 0px; font-family: inherit; font-size: 12px; font-style: inherit; font-variant: inherit; font-weight: normal; line-height: inherit; vertical-align: baseline; margin: 0px; padding: 0px; display: block;\\">Chairman</span></h6>\r\n</div>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">In the editorial, as part of my new presidential post of Alzayani Investments Group, I express sincere thanks to my brother Khalid Rashid Al Zayani, former Chairman of the Group for his dedications and contributions throughout his 32 years of serving the group as its chairman. The group witnessed many developments and expansions because of his efforts. My brother Khalid was a quick seeker and fast follower to goals. The beginning was tough as we started from scratch, and by grace of God the organization has developed over the years because of the leadership of my brother Khalid and our unity all of us around him. Our future ambitions focus on developing the organization to become a leader in efficiency in the Middle East and might be in the world. We have started such ambition in one of our industrial companies with the active participations of managers and sincere staff.</p>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">As you all know that although I was a founder of this Company, I was busy developing the industrial sector, and by grace of God and efforts of Managers we have succeeded in promoting our leading industrial organization, including opening permanent offices for the Company\\''s employees in London, Toronto, Kuala Lumpur and Nairobi, in addition to more than 50 local distributors across the universe. Because of this distinguished Company we were able to market cable products manufactured in Bahrain in more than 70 countries, starting from The United States of America, South Africa,caliming Far East, Europe and Australia, in addition to leadership position in the Middle East.</p>', '2014-07-15'),
(5, 'Privacy Policy Content', '<p>Coming Soon</p>', '<p><span style=\\"font-size: 10px;\\">Coming Soon</span></p>', '2014-07-16'),
(6, 'Terms Conditions Content', '<p>Coming Soon</p>', '<p>Coming Soon</p>', '2014-07-16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_corporate`
--

CREATE TABLE IF NOT EXISTS `tbl_corporate` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `phone` varchar(111) NOT NULL,
  `fax` varchar(251) NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_corporate`
--

INSERT INTO `tbl_corporate` (`sno`, `phone`, `fax`, `address`) VALUES
(1, '+973 1753 1177', '+973 1753 2912', '<p><span style=\\"color: #242424; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 25px; text-align: center;\\">Zayani House&nbsp;</span><br style=\\"color: #242424; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 25px; text-align: center;\\" /><span style=\\"color: #242424; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 25px; text-align: center;\\">P.O. Box: 5553&nbsp;</span><br style=\\"color: #242424; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 25px; text-align: center;\\" /><span style=\\"color: #242424; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 25px; text-align: center;\\">Manama, Kingdom of Bahrain</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country`
--

CREATE TABLE IF NOT EXISTS `tbl_country` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(111) NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_country`
--

INSERT INTO `tbl_country` (`country_id`, `country`) VALUES
(1, 'India'),
(2, 'USA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_directers`
--

CREATE TABLE IF NOT EXISTS `tbl_directers` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(251) NOT NULL,
  `position` varchar(251) NOT NULL,
  `image` varchar(251) NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_directers`
--

INSERT INTO `tbl_directers` (`sno`, `name`, `position`, `image`, `date`) VALUES
(1, 'Khalid Rashid Al Zayani', 'Honorary Chairman', '60d90676c96d4dae7620f775c20e0d62.jpg', '2014-07-15'),
(2, 'Hamid Rashid Al Zayani', 'Founder and Partner', 'ac76f23315476ab931201a9e58484f78.jpg', '2014-07-15'),
(3, 'Zayed Rashid Al Zayani', 'Chairman', 'b224b41f556a79b9c707f74ff408bced.jpg', '2014-07-15'),
(4, 'Nawaf Khalid Al Zayani', 'Vice Chairman', '9612a0b3ef775ca0147eb41a5d2813df.jpg', '2014-07-15'),
(5, 'Abdulrahman Hamid Al Zayani', 'Managing Director', 'd9b7ca8d80d6bd33ab71ae13046a94c2.jpg', '2014-07-15'),
(6, 'Abdulrahman Majid Khalid Al Zayani<', 'Director', '9ecc37df72a08584f089d0736f0296e4.jpg', '2014-07-15'),
(7, 'Rashid Hamid Al Zayani', 'Director', '9fb7f17a5a28662946509a6f81b9de30.jpg', '2014-07-15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_excutive`
--

CREATE TABLE IF NOT EXISTS `tbl_excutive` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(251) NOT NULL,
  `position` varchar(251) NOT NULL,
  `image` varchar(251) NOT NULL,
  `content` text NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_excutive`
--

INSERT INTO `tbl_excutive` (`sno`, `name`, `position`, `image`, `content`, `date`) VALUES
(1, 'Mohammed Ghareeb', 'Admin Manager', 'e35446fa70e0ceed5a50ab61aa83e1d1.jpg', '<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424; text-align: justify; background-color: #e7e8ec;\\">Mohammed Ghareeb was appointed as the Group HR &amp; Admin Manager in October, 2011. He is responsible for implementing HR strategies and policies throughout the group. His long and illustrious career of 19 years in Human Resource and Administration has enabled him to gain experience in various aspects of Human Resources like Manpower Planning, Recruitment, Organization Development, Change Management, Strategic HR, Training and Development, Career Management, Performance Appraisal, Labour Welfare, Compensation &amp; Benefit Management &amp; General administration.&nbsp;</p>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424; text-align: justify; background-color: #e7e8ec;\\">Mr. Ghareeb beginning his career as in 1988 with Ministry of Justice &amp; Islamic Affairs and Ministry of Information. He has many academic qualifications from U.K, India &amp; Bahrain. A long and illustrious career has seen.&nbsp;</p>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424; text-align: justify; background-color: #e7e8ec;\\">Mr. Ghareeb gain experience in various aspects of Human Resources, holding management roles from 1988 onwards. The depth of knowledge of various functional units of HR and processes that Mohammed Ghareeb has gained in his diverse roles has prepared him for his recent task of handing the group HR &amp; Admin functions with AZI.</p>', '2014-07-16'),
(2, 'Abdul Wahab Abbas', 'Group Internal Audit Manager', 'ee1bfa3e0b22cad3dc1020d51756abf3.jpg', '<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424; text-align: justify; background-color: #e7e8ec;\\">Abdul Wahab Abbas, joined Al Zayani Investments on October 1997 and is presently heading Group Internal Audit Department. Having entered Alzayani Investments as an Assistant Internal Auditor in 1997, he has been promoted to Internal Auditor position in 2002. His profound dedication and commitment to the job eventually led to the position of Group Internal Audit Manager in 2005. Other than audit he has substantial experience in Credit Control, drafting policies &amp; procedures, Statistic Manager and Human Resources.</p>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424; text-align: justify; background-color: #e7e8ec;\\">Mr. Wahab played a key role in implementing ISO 9001:2008 certification in 2009 in Alzayani Investment Group. Currently he is the Management Representative for the Al Zayani Investments group. Mr. Wahab obtained many academic certificates as Quality Management System Auditor Certificate from IRCA &ndash; USA, Audit Updates from BIBF - ISO 9001:2008 courses, ISO Internal Audit course, KAIZEN Management certificate etc.</p>', '2014-07-16'),
(3, 'Mehtab Ahmed malik', 'Group Chief Financial Officer', '9356a601e0bea36a57cc4943d878b97f.jpg', '<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424; text-align: justify; background-color: #e7e8ec;\\">Mehtab A. Malik joined AZI Group on August 1, 2007 as Group Financial Controller. He is Meticulous and highly accomplished professional with over 23 years of hands on experience providing fiscal, strategic and operational leadership in uniquely challenging situations. He worked on top management positions of world class manufacturing, bank, automotives, leasing, healthcare, real estate and investments industries. He is dynamic, result oriented leader with strong track record of performance in turnaround and high-paced organizations.&nbsp;</p>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424; text-align: justify; background-color: #e7e8ec;\\">Mehtab is always keen in utilizing analysis and team approach to derive organizational improvements and implementations of best practices. He has superior interpersonal skills to make high-stakes decisions using experience based judgment, strong work ethics to overcome multiple complex business challenges. He has experience of leadership for a sizable manufacturing business where he held position of Group COO supported by strong team of nine General Managers.&nbsp;</p>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424; text-align: justify; background-color: #e7e8ec;\\">Mehtab has long and illustrious career in Finance, Budgeting, cost Management as well as profitability analysis, business models, team building and performance improvement. He is responsible for arrangement of all Finance and FX requirement of the group. He is active member of the investment committee of the group and involved in all investment decisions inside and outside the group. He has team of six Finance Managers. He holds commerce bachelor degree and Chartered Accountant.</p>', '2014-07-16'),
(4, 'Ammar Al-Haddad ', 'Group Credit Control Manager', '8cf819883f81cbb6d5722e67a235fed3.jpg', '<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424; text-align: justify; background-color: #e7e8ec;\\">Mr. Ammar was appointed as Group Credit Control Manager in October 2008. Since joining Alzyani Investments Group, he was involved in consulting and assisting our organization on how to embrace the strategic change management, preparing different types of reports to the top management, such as those related to collections and key customers accounts.&nbsp;</p>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424; text-align: justify; background-color: #e7e8ec;\\">He managed and structured various businesses in his career and was also actively involved in a number of successful training programs in which it helped developed further his Managerial skills.&nbsp;</p>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424; text-align: justify; background-color: #e7e8ec;\\">He has more than 20 years of experience in the Financial Services and Consulting Industry and has extensive knowledge of the Credit Card Operations, Merchant Services and Customer Services, Account Management, Collection, Sales and Fraud Prevention. He was also involved in developing and implementing training programs and services with an exceptional organizational, analytical, and managerial skill.</p>', '2014-07-16'),
(5, 'Satish Plakote', 'Group IT Manager', '511cec64e124b6711aa7b4637c323743.jpg', '<p><span style=\\"color: #242424; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; text-align: justify; background-color: #e7e8ec;\\">Mr. Satish joined Al Zayani Investments on November 2009 as Group IT Manager. He has a career spanning over 12 years in the Information Technology industry. With a Masters Degree in IT and Project Management Certification (PMP) from internationally renowned Project Management Institute (PMI), he has considerable experience in Project/Program Management, Software Development and Delivery Management. Before Joining Al Zayani Investments, Mr. Satish worked as Manager for various Multinational CMM-5 companies and Financial Institutions.</span></p>', '2014-07-16'),
(6, 'Sulaiman Al Massis', 'Group Manager Legal Affairs', 'e5118b2bda6464eb853e1655bb9f440e.jpg', '<p><span style=\\"color: #242424; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; text-align: justify; background-color: #e7e8ec;\\">Sulaiman Al-Massis joined AZI Group in September 2012 as a legal advisor. He holds LLB from Mu&rsquo;tah University in Jordan, LLM in ADR from Kingston University in UK, and license from JBA. He practiced in Jordan as an attorney at Local Law Firm for over ten years, where he gained valuable experience in civil, commercial and corporate law, plus drafting contracts. He had counseled and represented local and international companies, and had handled numerous disputes through litigation, mediation and arbitration. He gained more regional experience by serving as legal advisor at Law Firm in UAE and at a commercial bank in Bahrain.</span></p>', '2014-07-16'),
(7, 'Adil Mahboob', 'Investment Manager & Investment Committee Member', 'b52040a9fb938009e6aa1f55b649db98.jpg', '<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424; text-align: justify; background-color: #e7e8ec;\\">Adil is a consummate professional with a background in banking, finance, research, investment management, risk management, strategic planning and training. He spearheaded many positions and gained valuable experience over 14 years experience in leading organizations.</p>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424; text-align: justify; background-color: #e7e8ec;\\">Adil has extensive experience in Investment and Finance landscape across all asset classes including Private Equity, Real Estate, Hedge Funds and Derivatives across Equity, Fixed Income, etc. He was the team member managing over US$ 12 Billion in international markets during his previous job. Adil contributed cutting edge research papers and articles in number of renowned publications on various sectors and awarded for the same. Presently, he is involved in originating investment ideas, conducting comprehensive due diligence, performing risk analysis and formulating tactical and strategic portfolios. He has been providing recommendations to the members and working as Advisor to the Investment Committee. He is liaising with banks and also spearheading post acquisition investment process.</p>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424; text-align: justify; background-color: #e7e8ec;\\">Adil imparted training to number of banking and finance professionals. He attended and presented at International Monetary Fund (IMF) USA; Singapore Monetary Authority, Singapore; and London School of Economics, UK.</p>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424; text-align: justify; background-color: #e7e8ec;\\">Adil professional endeavors have been complemented by strong educational profile with M.Sc Economics from university of Karachi, MBA (Finance) from Institute of Business Administration (IBA) and M.Sc. Finance from Warwick Business School, UK. He earned prestigious British Chevening award from British Foreign and Commonwealth Office.</p>', '2014-07-16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE IF NOT EXISTS `tbl_gallery` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `images` varchar(111) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`sno`, `images`) VALUES
(1, '45d5605afd893cc27b8cf09c14c52c90.jpg'),
(2, 'fa4af9f82a8196ebd21b41dbd736b16e.jpg'),
(3, '330ec12f59d1a1d4f103829c85e9671d.jpg'),
(4, 'e71523521d7634ca89625a139c17f831.jpg'),
(5, '0ffc66a8b0dec548766a8410b2b2f200.jpg'),
(6, '320f22126e561de99d4c95e7f58cebb9.jpg'),
(7, '780c7b63ade40efe5bd880a6b9a04d32.jpg'),
(8, '4df93ed6f0eebcfecd2f597db53121c0.jpg'),
(9, '8dea526472070314e92b7bd4a0d62cc6.jpg'),
(11, '44be56a038fde67159f95f70ba6c0a89.jpg'),
(12, '235206e9deafbfa06365ccf30f11f461.jpg'),
(13, 'd5e1bdaa743423a58508f3711682987b.jpg'),
(14, '94f792ed341502980ad0b1b2aeb0b365.jpg'),
(15, '51ae4869a0104709722914238dfc0c14.jpg'),
(16, 'ba9a3edc8bfc216e5d999b72dd0a25f0.jpg'),
(17, '943424ef7a080f95e5ae9d42fe4162ed.jpg'),
(18, '2ac8b8fcdb4043519a33cc2942a34943.jpg'),
(19, 'd4ae27a5b86df9fcbea3692b52730b66.jpg'),
(20, '711ec136a2fbb1a00293e528f93115a7.jpg'),
(21, '282aaa42ea29bf3039f6401f926446b1.jpg'),
(22, 'fb280553a3c18a181e2bcf2994f9c694.jpg'),
(23, 'dbef5c9026377e60ea0cb35162256b4d.jpg'),
(24, 'e65361536cff4d585fff84c3291e4b5e.jpg'),
(25, 'd0cbe913847b04344f9f5fb77ff540ed.jpg'),
(26, '5a5fe7b634b404d749a960c0cc880a0b.jpg'),
(27, '6e781408994fc013caae3f2469ab6563.jpg'),
(28, 'b930f61effedfa9a781739735f6355ac.jpg'),
(29, '2af06f875962aec9958a77c51906ab27.jpg'),
(30, 'f8757237bf017a8aaf96396976b1b16e.jpg'),
(31, '97117f2f8b2ab1905d34559c45c77761.jpg'),
(32, '6984186af581a27ef72770b20240b593.jpg'),
(33, '359d6fd7fdfe621cd88ecf08fa803b35.jpg'),
(34, 'a07d006c11917f998a38c8874dc663cb.jpg'),
(35, 'e90cc15667e8b185b3473fca6298ce6a.jpg'),
(36, '81c208f5c6820b52c0a1fdf51f0956e1.jpg'),
(37, '81010c46a7adf1daa61387a86e0ceae2.jpg'),
(38, 'a4025ca3db73a6ec6343a96202dd981d.jpg'),
(39, '4511202a7b80a80b7c14b44a8ddd6728.jpg'),
(40, '23534886aebe6fe9f65f01c58614f9b4.png'),
(41, '74a06e80c560076e8c87976b944dd966.jpg'),
(42, '0bc0438136bd3745bb0b469c4a71421c.jpg'),
(43, '0319ede85c05a274e10ce6ac430c153b.jpg'),
(44, '81e4bdf01e67a17bac2950142699a7c3.jpg'),
(45, 'b463cab5bc63045d8f364f99ecf3f5a2.jpg'),
(46, 'd9fc2398cc25371eb8af4eea866ee0a8.jpg'),
(47, '1f5d5cc98c032934d91399befbaa6a3f.jpg'),
(48, 'cecf953d02d74e54c026f232d95591ce.jpg'),
(49, '45ff5bc5bd1cb785d8a5cd6fed00059b.jpg'),
(50, '9d679a744081632e29371644ea6c1af5.jpg'),
(51, 'f8cb97291c8520b3ea57dea3f24ef689.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_group`
--

CREATE TABLE IF NOT EXISTS `tbl_group` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(251) NOT NULL,
  `phone` varchar(111) NOT NULL,
  `fax` varchar(251) NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_group`
--

INSERT INTO `tbl_group` (`sno`, `name`, `phone`, `fax`, `address`) VALUES
(1, 'Euro Motors', '+973 1775 0750', '+973 1775 0850', '<p><span style=\\"color: #242424; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 25px; text-align: center;\\">PO Box 2226&nbsp;</span><br style=\\"color: #242424; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 25px; text-align: center;\\" /><span style=\\"color: #242424; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 25px; text-align: center;\\">Manama, Kingdom of Bahrain</span></p>'),
(2, 'Zayani Motors', '+973 1770 3703', '+973 1770 3333', '<p><span style=\\"color: #242424; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 25px; text-align: center;\\">P.O. Box 26&nbsp;</span><br style=\\"color: #242424; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 25px; text-align: center;\\" /><span style=\\"color: #242424; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 25px; text-align: center;\\">Manama, Kingdom of Bahrain</span></p>'),
(3, 'Zayani Leasing', '+973 1770 3703', '+973 1770 3333', '<p><span style=\\"color: #242424; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 25px; text-align: center;\\">P.O. Box 26&nbsp;</span><br style=\\"color: #242424; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 25px; text-align: center;\\" /><span style=\\"color: #242424; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 25px; text-align: center;\\">Manama, Kingdom of Bahrain</span></p>'),
(4, 'First Motors', '+973 1745 7700', '+973 1745 7755', '<p><span style=\\"color: #242424; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 25px; text-align: center;\\">P.O. Box. 11173&nbsp;</span><br style=\\"color: #242424; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 25px; text-align: center;\\" /><span style=\\"color: #242424; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 25px; text-align: center;\\">Manama, Kingdom of Bahrain</span></p>'),
(5, 'Alu Wheel', '+973 1783 0007', '+973 1783 0616', '<p><span style=\\"color: #242424; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 25px; text-align: center;\\">P.O Box 5570&nbsp;</span><br style=\\"color: #242424; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 25px; text-align: center;\\" /><span style=\\"color: #242424; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 25px; text-align: center;\\">Manama, Kingdom of Bahrain</span></p>'),
(6, 'Gulf Closures', '+973 1773 5565', '+973 1773 5318', '<p><span style=\\"color: #242424; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 25px; text-align: center;\\">P.O Box 2715</span><br style=\\"color: #242424; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 25px; text-align: center;\\" /><span style=\\"color: #242424; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 25px; text-align: center;\\">Manama, Kingdom of Bahrain</span></p>'),
(7, 'Midal Cables', '+973 1783 0111', '+973 1783 0168', '<p><span style=\\"color: #242424; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 25px; text-align: center;\\">P.O. Box 5939&nbsp;</span><br style=\\"color: #242424; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 25px; text-align: center;\\" /><span style=\\"color: #242424; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 25px; text-align: center;\\">Manama, Kingdom of Bahrain</span></p>'),
(8, 'Zayani Properties', '+973 1753 1177', '+973 1753 4075', '<p><span style=\\"color: #242424; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 25px; text-align: center;\\">P.O. Box 5553</span><br style=\\"color: #242424; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 25px; text-align: center;\\" /><span style=\\"color: #242424; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 25px; text-align: center;\\">Manama, Kingdom of Bahrain</span></p>'),
(9, 'JDN Representative Office', '+973 1753 0808', '+973 1753 0659', '<p><span style=\\"color: #242424; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 25px; text-align: center;\\">P.O. Box 26</span><br style=\\"color: #242424; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 25px; text-align: center;\\" /><span style=\\"color: #242424; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 25px; text-align: center;\\">Manama, Kingdom of Bahrain</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_industry`
--

CREATE TABLE IF NOT EXISTS `tbl_industry` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(251) NOT NULL,
  `name` varchar(111) NOT NULL,
  `category` varchar(251) NOT NULL,
  `link` varchar(251) NOT NULL,
  `content` text NOT NULL,
  `full_content` text NOT NULL,
  `image` varchar(111) NOT NULL,
  `logo` varchar(251) NOT NULL,
  `url` varchar(251) NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` enum('y','n') NOT NULL DEFAULT 'y',
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_industry`
--

INSERT INTO `tbl_industry` (`sno`, `type`, `name`, `category`, `link`, `content`, `full_content`, `image`, `logo`, `url`, `date`, `status`) VALUES
(1, 'English', 'Midal cables', '', 'http://www.midalcable.com/', '<p>\r\n<div id=\\"_mcePaste\\" style=\\"position: absolute; left: -10000px; top: 0px; width: 1px; height: 1px; overflow: hidden;\\">Midal cables Ltd is a success story born in 1977, conceived between Intersteel-Bahrain and Olex Cables-Australia.&lt;/p&gt;</div>\r\n<div id=\\"_mcePaste\\" style=\\"position: absolute; left: -10000px; top: 0px; width: 1px; height: 1px; overflow: hidden;\\">&nbsp; &nbsp; &lt;p&gt;Its aim was to evolve a degree of industrial self sufficiency in the Middle East by leading the way in manufacturing Aluminium rod and electrical conductors.</div>\r\n<div id=\\"_mcePaste\\" style=\\"position: absolute; left: -10000px; top: 0px; width: 1px; height: 1px; overflow: hidden;\\">&nbsp; &nbsp; &nbsp;The seal of approval was given in 1978 when the project reached the completion and started commercial production.</div>\r\n</p>\r\n<p>Midal cables Ltd is a success story born in 1977, conceived between Intersteel-Bahrain and Olex Cables-Australia.</p>\r\n<p>Its aim was to evolve a degree of industrial self sufficiency in the Middle East by leading the way in manufacturing Aluminium rod and electrical conductors.The seal of approval was given in 1978 when the project reached the completion and started commercial production.</p>', '<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">Established in 1992, Gulf Closures is a joint venture between AL ZAYANI INVESTMENTS B.S.C WLL and Aluminium Company Of America (Alcoa). The company was established with a vision to manufacture and market the world\\''s best closure and is already renowned for providing products and services that meet or exceed our customers\\'' expectations.</p>\r\n<blockquote style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 18px; vertical-align: baseline; margin: 8px 0px 15px 25px; padding: 15px 0px 0px 64px; quotes: none; color: #081041; background: url(file:///D:/yuva_html%20_files/alzayaniweb%20(1)/demos/zayani/site/en/image/quote.png\\'') 30px 8px no-repeat transparent;\\">Being part of Alcoa\\''s Closures System International (CSI) implies that Gulf Closures is in the business of offering a complete system: Closures, Capping Machines, Bottle Changing Parts and Comprehensive Service. Gulf Closures is committed to quality and excellence in its products and services.</blockquote>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">The Company started commercial production in Bahrain in 1993, initially to serve the (GCC) Gulf Cooperation Council countries. Because of the excellent market response and the high demand, Gulf Closures expanded its capacity in 1995 and again in 1998 to its current production capacity of 1.3 billion closures per year.</p>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">During 1997 Gulf Closures attained ISO 9002 International Award for Quality Management System. In January 2001 Gulf Closures attained ISO 9001:2000 Certification. During February, 2002 Gulf Closures also attained the ISO 14001 Environmental Management System certification.</p>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">Today the Company is the major supplier to Coca-Cola and Pepsi Cola in the Middle East and the Indian Subcontinent beverage markets.</p>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">In keeping with the tradition of supplying the latest features, Gulf Closures acquired Inside Promotion Printing capability for Under The Cap promotion. Demand for promotion closures is increasing as the competition between Coca-Cola and Pepsi Cola intensifies in the region.</p>\r\n<h3 style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: inherit; font-weight: inherit; line-height: 16px; vertical-align: baseline; margin: 0px; padding: 0px; color: #081041;\\">Group Companies of Midal:</h3>\r\n<ul style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 10px 0px 10px 5px; padding: 0px; list-style: none; color: #242424;\\">\r\n<li style=\\"border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: 21px; vertical-align: baseline; margin: 0px; padding: 0px; list-style-type: disc; list-style-position: inside;\\"><a style=\\"border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: inherit; vertical-align: baseline; margin: 0px; padding: 0px; text-decoration: none; color: #06123d;\\" href=\\"file:///D:/yuva_html%20_files/alzayaniweb%20(1)/demos/zayani/site/en/midal-cables.html#\\">Metal Form</a></li>\r\n<li style=\\"border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: 21px; vertical-align: baseline; margin: 0px; padding: 0px; list-style-type: disc; list-style-position: inside;\\"><a style=\\"border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: inherit; vertical-align: baseline; margin: 0px; padding: 0px; text-decoration: none; color: #06123d;\\" href=\\"file:///D:/yuva_html%20_files/alzayaniweb%20(1)/demos/zayani/site/en/midal-cables.html#\\">Aluwheel</a></li>\r\n<li style=\\"border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: 21px; vertical-align: baseline; margin: 0px; padding: 0px; list-style-type: disc; list-style-position: inside;\\"><a style=\\"border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: inherit; vertical-align: baseline; margin: 0px; padding: 0px; text-decoration: none; color: #06123d;\\" href=\\"file:///D:/yuva_html%20_files/alzayaniweb%20(1)/demos/zayani/site/en/midal-cables.html#\\">Madem Gulf</a></li>\r\n<li style=\\"border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: 21px; vertical-align: baseline; margin: 0px; padding: 0px; list-style-type: disc; list-style-position: inside;\\"><a style=\\"border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: inherit; vertical-align: baseline; margin: 0px; padding: 0px; text-decoration: none; color: #06123d;\\" href=\\"file:///D:/yuva_html%20_files/alzayaniweb%20(1)/demos/zayani/site/en/midal-cables.html#\\">Bahrain Welding Wire</a></li>\r\n</ul>', '26aaa10be5437a69c5b53b1120c23ac5.jpg', 'fc7e7200159382afc4dbe2c13eab89c8.gif', 'Midal-cables', '2014-07-11', 'y'),
(2, 'English', 'Gulf Closures', '', 'http://www.csiclosures.com/', '<div id=\\"_mcePaste\\" style=\\"position: absolute; left: -10000px; top: 0px; width: 1px; height: 1px; overflow: hidden;\\">Established in 1992, Gulf Closures is a joint venture between AL ZAYANI INVESTMENTS B.S.C WLL and Aluminium Company Of America (Alcoa).\r\n<p>&nbsp;</p>\r\n</div>\r\n<div id=\\"_mcePaste\\" style=\\"position: absolute; left: -10000px; top: 0px; width: 1px; height: 1px; overflow: hidden;\\">&nbsp; &nbsp;\r\n<p>The company was established with a vision to manufacture and market the world\\''s best closure and is already renowned for providing products and services that meet or exceed our customers\\'' expectations.</p>\r\n</div>\r\n<p>&nbsp;Established in 1992, Gulf Closures is a joint venture between AL ZAYANI INVESTMENTS B.S.C WLL and Aluminium Company Of America (Alcoa).</p>\r\n<p>The company was established with a vision to manufacture and market the world\\''s best closure and is already renowned for providing products and services that meet or exceed our customers\\'' expectations.</p>', '<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">Established in 1992, Gulf Closures is a joint venture between AL ZAYANI INVESTMENTS B.S.C WLL and Aluminium Company Of America (Alcoa). The company was established with a vision to manufacture and market the world\\''s best closure and is already renowned for providing products and services that meet or exceed our customers\\'' expectations.</p>\r\n<blockquote style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 18px; vertical-align: baseline; margin: 8px 0px 15px 25px; padding: 15px 0px 0px 64px; quotes: none; color: #081041; background: url(file:///D:/yuva_html%20_files/alzayaniweb%20(1)/demos/zayani/site/en/image/quote.png\\'') 30px 8px no-repeat transparent;\\">Being part of Alcoa\\''s Closures System International (CSI) implies that Gulf Closures is in the business of offering a complete system: Closures, Capping Machines, Bottle Changing Parts and Comprehensive Service. Gulf Closures is committed to quality and excellence in its products and services.</blockquote>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">The Company started commercial production in Bahrain in 1993, initially to serve the (GCC) Gulf Cooperation Council countries. Because of the excellent market response and the high demand, Gulf Closures expanded its capacity in 1995 and again in 1998 to its current production capacity of 1.3 billion closures per year.</p>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">During 1997 Gulf Closures attained ISO 9002 International Award for Quality Management System. In January 2001 Gulf Closures attained ISO 9001:2000 Certification. During February, 2002 Gulf Closures also attained the ISO 14001 Environmental Management System certification.</p>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">Today the Company is the major supplier to Coca-Cola and Pepsi Cola in the Middle East and the Indian Subcontinent beverage markets.</p>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">In keeping with the tradition of supplying the latest features, Gulf Closures acquired Inside Promotion Printing capability for Under The Cap promotion. Demand for promotion closures is increasing as the competition between Coca-Cola and Pepsi Cola intensifies in the region.&nbsp;</p>', 'e388df776ce5df10786baa8d1353bca2.jpg', '92f169e78c668802424d378ffff50190.gif', 'Gulf-Closures', '2014-07-11', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_industry_slider`
--

CREATE TABLE IF NOT EXISTS `tbl_industry_slider` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `auto_id` int(11) NOT NULL,
  `images` varchar(111) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_industry_slider`
--

INSERT INTO `tbl_industry_slider` (`sno`, `auto_id`, `images`) VALUES
(1, 2, 'd8e8dbbdb0be13c92450c2f0dfda0d16.jpg'),
(2, 2, '984b79be0960ef4fa1318189c6d5776c.jpg'),
(3, 1, '42f489de941d7b0cdbe0120541c8dbc4.jpg'),
(4, 1, '4d73271ff6855d06a17a0e74c342bb0c.jpg'),
(5, 1, '5d7cf404c6ccf48b108df2aa1990d52c.jpg'),
(6, 1, '620ffb2bb74d996a84c05f4ac17f99f8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_industty_cat`
--

CREATE TABLE IF NOT EXISTS `tbl_industty_cat` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(111) NOT NULL,
  `category` varchar(251) NOT NULL,
  `image` varchar(111) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(251) NOT NULL,
  `url` varchar(251) NOT NULL,
  `url_cat` varchar(251) NOT NULL,
  `date` date NOT NULL,
  `status` enum('y','n') NOT NULL DEFAULT 'y',
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_industty_cat`
--

INSERT INTO `tbl_industty_cat` (`sno`, `name`, `category`, `image`, `description`, `link`, `url`, `url_cat`, `date`, `status`) VALUES
(1, 'Metal Form', 'Midal cables', '', '<blockquote style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 18px; vertical-align: baseline; margin: 8px 0px 15px 25px; padding: 15px 0px 0px 64px; quotes: none; color: #081041; background: url(file:///D:/yuva_html%20_files/alzayaniweb%20(1)/demos/zayani/site/en/image/quote.png\\'') 30px 8px no-repeat transparent;\\">In 1992, Midal ventured into a new phase of manufacturing Aluminium \\"Conform\\" products (Conform Technology).</blockquote>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">This new and innovative method of \\"Conform\\" extrusion technology is to manufacture both simple and complex shapes in solid, hollow and sheet forms of Aluminium and Aluminium alloy. It has the advantage of making the product seamless, in continuous length, with annealed or fabricated temper. Naturally specific customer requirements and Midal\\''s international standards are maintained throughout this process.</p>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">Suitably packed for immediate export various end products can be achieved, solid sector for Power Cables, strips for transformer winding, tubing for car radiators, heat exchangers and evaporators, multi-void sections for mobile air conditioning condensers and evaporators. These are to name only a few from the wide range of over 80 different products that can be manufactured.</p>', 'http://www.midalcable.com/', 'Metal-Form', 'Midal-cables', '2014-07-11', 'y'),
(2, 'Aluwheel', 'Midal cables', '', '<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">Following the success of Midal Cables Ltd., Midal made a strategic move into another downstream Aluminium industry, by establishing AluWheel in 1992 as a joint venture between Midal and Al Zayani Investment and BBS Kraftfahrzeugtechnik AG of Germany.</p>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">Benefiting significantly from the combined economic advantage of direct low cost Aluminium source and state-of-the-art technology, Aluwheel grew to become the most technologically advanced and successful manufacturer of Aluminium wheel castings in the Gulf region.</p>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">Aluwheel produces international quality products of Passenger Wheels and Truck &amp; Trailer Wheels for OEM and After Market requirements with its Quality Management System certified for ISO 9001:2000 Standard and Environmental Management System certified for ISO 14001:2004 Standard.</p>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">Today Aluwheel enjoys the credibility of being an exporter with installed capacity of over half million wheel castings for well known car makers like Audi, Saab, Volkswagen, Opel, Volvo, Rover, Peugeot, Fiat, Citroen, Honda and many other car makers in Europe and USA through Wheel producers.</p>\r\n<blockquote style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 18px; vertical-align: baseline; margin: 8px 0px 15px 25px; padding: 15px 0px 0px 64px; quotes: none; color: #081041; background: url(file:///D:/yuva_html%20_files/alzayaniweb%20(1)/demos/zayani/site/en/image/quote.png\\'') 30px 8px no-repeat transparent;\\">Aluwheel is one of the very few producers of Fully finished Truck Wheels by LPDC Technology in the World and has the distinction of producing Corporate Colored Wheels for Truck &amp; Trailer Wheel Sector under the Brand \\"<a style=\\"border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: inherit; vertical-align: baseline; margin: 0px; padding: 0px; text-decoration: none; color: #06123d;\\" href=\\"http://tunaverken.com/\\" target=\\"_blank\\">TUNAWHEELS</a>\\".</blockquote>', 'http://www.midalcable.com/', 'Aluwheel', 'Midal-cables', '2014-07-11', 'y'),
(3, 'Madem Gulf', 'Midal cables', '', '<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">In July 2007, a Joint Venture (JV) Company for the manufacture of wooden cable reels in Bahrain was incorporated under the name of Madem Gulf Industries WLL. The JV is between Madem S/A Industries Brazil holding a majority stake of 51% and Midal Cables holding a 49% stake. Madem Group, the leading nailed wooden reels producer in the world, commenced its operations in the Kingdom of Bahrain during early 2009. Since then Madem Gulf with a workforce of around 100 employees produces approximately 100 containers/trucks of knock down reels per month. We have already made our presence felt in the MENA and Far East market with regular supplies to all the major cable companies in the region.</p>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">Madem Gulf Wooden reels are made with 100 % renewable planted pine, Heat treated as per ISPM 15 standards, Kiln dried 19 % and 100% PEFC certificate. Also our factory is ISO 9001:2008 &amp; 14001:2004 certified as well. We at Madem Gulf always aim at maximizing customer satisfaction by providing quality products and on time deliveries as per customer specifications and requirements. Madem Gulf Industries promises a very impressive factory delivery time of maximum 12 days from receipt of official PO which is one of our main marketing &amp; service highlights.</p>', 'http://www.midalcable.com/', 'Madem-Gulf', 'Midal-cables', '2014-07-11', 'y'),
(4, 'Bahrain Welding Wire', 'Midal cables', '', '<blockquote style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 18px; vertical-align: baseline; margin: 8px 0px 15px 25px; padding: 15px 0px 0px 64px; quotes: none; color: #081041; background: url(file:///D:/yuva_html%20_files/alzayaniweb%20(1)/demos/zayani/site/en/image/quote.png\\'') 30px 8px no-repeat transparent;\\">BWP is in fact Bahrain Welding Wire Products Manufacturing Co. W.L.L. This is an established and running Aluminium downstream company in Bahrain with 100% local Bahraini ownership. The company consists of an Aluminium alloy mixing, casting &amp; rolling operation based on high quality &amp; purity Primary Liquid Aluminium from the nearby smelter - ALBA.</blockquote>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">Production equipment currently consists of the following :-</p>\r\n<ul style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 10px 0px 10px 5px; padding: 0px; list-style: none; color: #242424;\\">\r\n<li style=\\"border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: 21px; vertical-align: baseline; margin: 0px; padding: 0px; list-style-type: disc; list-style-position: inside;\\">Static holding furnace.</li>\r\n<li style=\\"border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: 21px; vertical-align: baseline; margin: 0px; padding: 0px; list-style-type: disc; list-style-position: inside;\\">Tilting alloying/casting furnaces.</li>\r\n<li style=\\"border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: 21px; vertical-align: baseline; margin: 0px; padding: 0px; list-style-type: disc; list-style-position: inside;\\">Continuus Properzi Rod Casting Mill with online tempering &amp; quenching.</li>\r\n<li style=\\"border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: 21px; vertical-align: baseline; margin: 0px; padding: 0px; list-style-type: disc; list-style-position: inside;\\">Belt type ingot casting machine.</li>\r\n<li style=\\"border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: 21px; vertical-align: baseline; margin: 0px; padding: 0px; list-style-type: disc; list-style-position: inside;\\">Overhead cranes.</li>\r\n<li style=\\"border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: 21px; vertical-align: baseline; margin: 0px; padding: 0px; list-style-type: disc; list-style-position: inside;\\">Sow/T-Ingot moulds.</li>\r\n<li style=\\"border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: 21px; vertical-align: baseline; margin: 0px; padding: 0px; list-style-type: disc; list-style-position: inside;\\">Fully equipped and calibrated laboratory &amp; testing facility.</li>\r\n<li style=\\"border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: 21px; vertical-align: baseline; margin: 0px; padding: 0px; list-style-type: disc; list-style-position: inside;\\">Forklift trucks.</li>\r\n<li style=\\"border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: 21px; vertical-align: baseline; margin: 0px; padding: 0px; list-style-type: disc; list-style-position: inside;\\">Development plot of land approximately 28,000m2. Large enough for future expansions.</li>\r\n<li style=\\"border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; line-height: 21px; vertical-align: baseline; margin: 0px; padding: 0px; list-style-type: disc; list-style-position: inside;\\">Miscellaneous tools, auxiliary equipment, offices, messing facilities etc.</li>\r\n</ul>\r\n<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">The company has a current molten metal allocation from ALBA of approximately 25,000 tonnes per year. This is being increased as part of the Phase II expansion requirements to 45,000 tonnes per year. Additional metal can also be obtained in solid form when required from a variety of local sources. The company is committed to a strategy of expanding further into the Aluminium downstream casting product groups &amp; markets.</p>', 'http://www.bwwpm.com/', 'Bahrain-Welding-Wire', 'Midal-cables', '2014-07-11', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job`
--

CREATE TABLE IF NOT EXISTS `tbl_job` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_categery` varchar(100) NOT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `tbl_job`
--

INSERT INTO `tbl_job` (`job_id`, `job_categery`) VALUES
(1, 'Accounts, Finance, Tax, Company Secretary, Audit'),
(2, 'Financial Services, Banking, Investments, Insurance'),
(3, 'ITES, BPO, KPO, LPO, Customer Service, Operations'),
(4, 'HR, Recruitment, Administration, IR'),
(5, 'Marketing, Advertising, MR, PR, Media Planning'),
(6, 'Production, Manufacturing, Maintenance'),
(7, 'Site Engineering, Project Management'),
(8, 'Engineering Design, R&D'),
(9, 'Sales, Retail, Business Development'),
(10, 'Analytics & Business Intelligence'),
(11, 'Shipping'),
(12, 'IT Software - Application Programming, Maintenance'),
(13, 'IT Software - Client/Server Programming'),
(14, 'IT Software - DBA, Datawarehousing'),
(15, 'IT Software - ERP, CRM'),
(16, 'IT Software - Embedded, EDA, VLSI, ASIC, Chip Design'),
(17, 'IT Software - Network Administration, Security'),
(18, 'IT Software - QA & Testing'),
(19, 'IT Software - System Programming'),
(20, 'IT Software - Telecom Software'),
(21, 'IT Software - Systems, EDP, MIS'),
(22, 'IT Software - eCommerce, Internet Technologies'),
(23, 'IT Software - Mainframe'),
(24, 'IT Software - Mobile'),
(25, 'IT Software - Middleware'),
(26, 'Architecture,Interior Design'),
(27, 'Design,Creative,User Experience'),
(28, 'Hotels, Restaurants'),
(29, 'Journalism, Editing, Content'),
(30, 'Strategy, Management Consulting, Corporate Planning'),
(31, 'Self Employed, Entrepreneur, Independent Consultant'),
(32, 'Export, Import, Merchandising'),
(33, 'Architecture, Interior Design'),
(34, 'Design, Creative, User Experience'),
(35, 'Hotels, Restaurants'),
(36, 'Journalism, Editing, Content'),
(37, 'Strategy, Management Consulting, Corporate Planning'),
(38, 'Self Employed, Entrepreneur, Independent Consultant'),
(39, 'Export, Import, Merchandising'),
(40, 'Executive Assistant, Front Office, Data Entry'),
(41, 'Legal, Regulatory, Intellectual Property'),
(42, 'Supply Chain, Logistics, Purchase, Materials'),
(43, ' Medical, Healthcare, R&D, Pharmaceuticals, Biotechnology'),
(44, ' Packaging'),
(45, 'Teaching, Education, Training, Counselling'),
(46, 'IT Hardware, Technical Support, Telecom Engineering'),
(47, 'Fashion Designing, Merchandising'),
(48, 'TV, Films, Production, Broadcasting'),
(49, 'Travel, Tours, Ticketing, Airlines'),
(50, 'Defence Forces, Security Services'),
(51, 'Top Management - IT Jobs'),
(52, 'Top Management - Non IT'),
(53, 'Government, Defence'),
(54, 'Overseas, International Jobs'),
(55, 'Retail, Wholesale'),
(56, 'Pharma, Biotechnology, Clinical Research');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_language_type`
--

CREATE TABLE IF NOT EXISTS `tbl_language_type` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(251) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_language_type`
--

INSERT INTO `tbl_language_type` (`sno`, `type`) VALUES
(1, 'English'),
(2, 'Arabic');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE IF NOT EXISTS `tbl_news` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(111) NOT NULL,
  `image` varchar(111) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `status` enum('y','n') NOT NULL DEFAULT 'y',
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`sno`, `title`, `image`, `description`, `date`, `status`) VALUES
(1, 'Movies', '8f6925a44b3c97a007b581851283e510.jpg', '<p>After a long gap of 6 years prestigious Suresh productions has come up  with a direct film in the combination of a successful&nbsp; star Sunil,  proven director who deviled biggest ever hit for Suresh Productions  (Kalisundaam raa) Uday Shankar. Unfortunately the film doesn''t deliver  the expectations and further only leaves the audience disappointed.<br /> <br />Rambabu  (Sunil) is a simpleton and a coward living in Bheemavaram. He is  wrongly detected to have a brain tumor that will kill him in 10 days.  Not able to live through the sympathatic eyes of the villagers, he comes  to Hyderabad. On the way to Hyderabad he falls in love with Nandini  (Aesthar). To live purposefully for the 10 days that he is going to  live, Rambabu starts putting local goondas behind bars with the help of  Inspector Posani (Posani krishnamurali).</p>', '2014-03-21', 'y'),
(2, 'Politics', '1d76d3af2cae3237f209ccb450b84d17.jpg', '<p>One of the most sought after producers in Tollywood is undoubtedly  the makers of ''1 Nenokkadine'', 14 Reels Entertainment. According to  reports, the production house have offered Pawan Kalyan Rs 82 crore for a  three film deal.</p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Interestingly the company, owned  by Ravi Achanta, Gopi Achanta and Anil Sunkara, are known to be close to  superstar Mahesh Babu as well. But they offered him Rs 55 crore for a  three film deal which included the just released, ''1 Nenokkadine'',  ''Agadu'', and another untitled venture.</p>', '2014-07-07', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_period`
--

CREATE TABLE IF NOT EXISTS `tbl_period` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `period` varchar(251) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_period`
--

INSERT INTO `tbl_period` (`sno`, `period`) VALUES
(1, '1st Quarter'),
(2, '2nd Quarter'),
(3, '3rd Quarter'),
(4, '4th Quarter');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_real_estate`
--

CREATE TABLE IF NOT EXISTS `tbl_real_estate` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(251) NOT NULL,
  `name` varchar(111) NOT NULL,
  `category` varchar(251) NOT NULL,
  `link` varchar(251) NOT NULL,
  `content` text NOT NULL,
  `full_content` text NOT NULL,
  `image` varchar(111) NOT NULL,
  `logo` varchar(251) NOT NULL,
  `url` varchar(251) NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` enum('y','n') NOT NULL DEFAULT 'y',
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_real_estate`
--

INSERT INTO `tbl_real_estate` (`sno`, `type`, `name`, `category`, `link`, `content`, `full_content`, `image`, `logo`, `url`, `date`, `status`) VALUES
(1, 'English', 'Zayani Properties', '', 'http://www.zayaniproperties.com/', '<p>\r\n<div id=\\"_mcePaste\\" style=\\"position: absolute; left: -10000px; top: 0px; width: 1px; height: 1px; overflow: hidden;\\">Established in 2001 as a wholly owned subsidiary of AL ZAYANI INVESTMENTS B.S.C, Zayani Properties WLL is dedicated to developing the highest standard of commercial and residential properties in Bahrain and across the region. &lt;/p&gt;</div>\r\n<div id=\\"_mcePaste\\" style=\\"position: absolute; left: -10000px; top: 0px; width: 1px; height: 1px; overflow: hidden;\\">&nbsp; &nbsp; &lt;p&gt;The venture operates an impressive portfolio of commercial and residential facilities that are currently upgraded to meet the discerning demands of today\\''s business and private tenants. &lt;/p&gt;</div>\r\n<div id=\\"_mcePaste\\" style=\\"position: absolute; left: -10000px; top: 0px; width: 1px; height: 1px; overflow: hidden;\\">&nbsp; &nbsp; &lt;p&gt;Zayani Properties successfully builds state of the art facilities which reflect today\\''s modern requirements.</div>\r\n</p>\r\n<p>Established in 2001 as a wholly owned subsidiary of AL ZAYANI INVESTMENTS B.S.C, Zayani Properties WLL is dedicated to developing the highest standard of commercial and residential properties in Bahrain and across the region.</p>\r\n<p>The venture operates an impressive portfolio of commercial and residential facilities that are currently upgraded to meet the discerning demands of today\\''s business and private tenants.</p>\r\n<p>&nbsp;Zayani Properties successfully builds state of the art facilities which reflect today\\''s modern requirements.</p>', '<p style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; vertical-align: baseline; margin: 2px 0px 10px; padding: 0px; color: #242424;\\">Established in 2001 as a wholly owned subsidiary of AL ZAYANI INVESTMENTS B.S.C, Zayani Properties WLL is dedicated to developing the highest standard of commercial and residential properties in Bahrain and across the region. The venture operates an impressive portfolio of commercial and residential facilities that are currently upgraded to meet the discerning demands of today\\''s business and private tenants.</p>\r\n<blockquote style=\\"border: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 18px; vertical-align: baseline; margin: 8px 0px 15px 25px; padding: 15px 0px 0px 64px; quotes: none; color: #081041; background: url(file:///D:/yuva_html%20_files/alzayaniweb%20(1)/demos/zayani/site/en/image/quote.png\\'') 30px 8px no-repeat transparent;\\">Zayani Properties successfully builds state of the art facilities which reflect today\\''s modern requirements.</blockquote>', 'c7743ffcdc4b54ac1461fd012d2723b9.jpg', '31881feaca15342efe761573231a6a0b.png', 'Zayani-Properties', '2014-07-11', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_real_estate_slider`
--

CREATE TABLE IF NOT EXISTS `tbl_real_estate_slider` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `auto_id` int(11) NOT NULL,
  `images` varchar(111) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_real_estate_slider`
--

INSERT INTO `tbl_real_estate_slider` (`sno`, `auto_id`, `images`) VALUES
(1, 1, 'b3538e253ae77ad09b8e14a25afa3516.jpg'),
(2, 1, '3d78ed09d35319fcc3128ab5c377ca22.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services`
--

CREATE TABLE IF NOT EXISTS `tbl_services` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(111) NOT NULL,
  `year` varchar(251) NOT NULL,
  `category` varchar(251) NOT NULL,
  `image` varchar(111) NOT NULL,
  `arabic` varchar(251) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `status` enum('y','n') NOT NULL DEFAULT 'y',
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_services`
--

INSERT INTO `tbl_services` (`sno`, `name`, `year`, `category`, `image`, `arabic`, `description`, `date`, `status`) VALUES
(1, 'january', '2014', '1st Quarter', '4ce4bc48785513edd3c709f0ecefac5a.pdf', 'd2b4399d763dffedcf677b3d9d63b25d.pdf', '0', '2014-07-16', 'y'),
(2, 'February', '2014', '2nd Quarter', '1641df4da3a4e54dc8d919abae1845e3.pdf', 'f3e6ce76cfa76518531bb6860a1d0427.pdf', '', '2014-07-16', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services_india`
--

CREATE TABLE IF NOT EXISTS `tbl_services_india` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_india` int(11) NOT NULL,
  `name` varchar(111) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_setting`
--

CREATE TABLE IF NOT EXISTS `tbl_setting` (
  `setting_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_title` varchar(100) NOT NULL,
  `default_email` varchar(100) NOT NULL,
  `currentyr` int(11) NOT NULL,
  `mobile` text NOT NULL,
  `meta_title` varchar(100) NOT NULL,
  `meta_desc` varchar(100) NOT NULL,
  `fblink` text NOT NULL,
  `twitter` text NOT NULL,
  `Linkedin_link` varchar(111) NOT NULL,
  `google_link` varchar(111) NOT NULL,
  `you_tube` text NOT NULL,
  `instagram` varchar(251) NOT NULL,
  `Pinterestt` varchar(251) NOT NULL,
  `default_address` text NOT NULL,
  `meta_keywords` varchar(100) NOT NULL,
  `merchant_id` text NOT NULL,
  `working_key` text NOT NULL,
  `shipping_charge` text NOT NULL,
  PRIMARY KEY (`setting_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_setting`
--

INSERT INTO `tbl_setting` (`setting_id`, `company_title`, `default_email`, `currentyr`, `mobile`, `meta_title`, `meta_desc`, `fblink`, `twitter`, `Linkedin_link`, `google_link`, `you_tube`, `instagram`, `Pinterestt`, `default_address`, `meta_keywords`, `merchant_id`, `working_key`, `shipping_charge`) VALUES
(1, 'Manen Group', 'info@mavengroupindia.com', 2013, '91-9848022338 ', '', '', 'https://www.facebook.com/Alzayani.investments', 'http://www.twitter.com/Alzayani_invest', 'https://www.linkedin.com/company/al-zayani-investments?trk=company_name', 'http://google.in/', 'https://youtube.com/', 'http://instagram.com/alzayani_investments', '', 'H.no.1-41, Beside Police Station Guttala Begumpet, Madhapur, Hyderabad - 500 081, A.P, India.', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_strategies`
--

CREATE TABLE IF NOT EXISTS `tbl_strategies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_id` int(11) NOT NULL,
  `strategies_name` varchar(111) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_strategies`
--

INSERT INTO `tbl_strategies` (`id`, `service_id`, `strategies_name`, `content`, `date`) VALUES
(1, 2, 'Excutive Jobs', '<p>Novo is a leading executive  search and selection company. We provide  our clients with the most innovative  executive search and selection  &nbsp;methodologies, industry expertise and  networking capabilities. Our  services provide competitive advantage to clients  through executive  recruitment and high value human resource consultancy.</p>', '2014-03-22'),
(2, 2, 'Heda Hunting', '<p>Novo is a leading executive  search and selection company. We provide  our clients with the most innovative  executive search and selection  &nbsp;methodologies, industry expertise and  networking capabilities. Our  services provide competitive advantage to clients  through executive  recruitment and high value human resource consultancy.</p>\\r\\n<p>Clients  retain our executive search and selection  services when they are looking to  achieve positive change, growth and  competitive advantage. Clients range in  scale from start-ups, to  privately-held family firms and to the world\\''s largest  corporations.</p>', '2014-03-22'),
(3, 2, 'Hospitality', '<p>Novo is a leading executive  search and selection company. We provide  our clients with the most innovative  executive search and selection  &nbsp;methodologies, industry expertise and  networking capabilities. Our  services provide competitive advantage to clients  through executive  recruitment and high value human resource consultancy.</p>', '2014-03-22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_support`
--

CREATE TABLE IF NOT EXISTS `tbl_support` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `phone` varchar(111) NOT NULL,
  `fax` varchar(251) NOT NULL,
  `address` varchar(251) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_support`
--

INSERT INTO `tbl_support` (`sno`, `phone`, `fax`, `address`) VALUES
(1, '+97317530 808', '+973 17530 818', 'Partners Offices'),
(2, '+973 17531 010', '+973 17530 659', 'Legal'),
(3, '+973 1753 5030', '+973 1753 2912', 'Information Technology'),
(4, '+973 1753 1177', '+973 1753 2912', 'Human Resources'),
(5, '+973 1753 0394', '+973 1753 2912', 'Audit'),
(6, '+973 1753 1124', '+973 1753 6063', 'Accounts');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_uploads`
--

CREATE TABLE IF NOT EXISTS `tbl_uploads` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(251) NOT NULL,
  `image_url` varchar(251) NOT NULL,
  `image` varchar(251) NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_uploads`
--

INSERT INTO `tbl_uploads` (`sno`, `name`, `image_url`, `image`, `date`) VALUES
(1, 'Charmen image', 'http://localhost/metronic/public/uploads/711821c57f0b33c4fbbe5bff0b16cab3.jpg', '711821c57f0b33c4fbbe5bff0b16cab3.jpg', '2014-07-15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video`
--

CREATE TABLE IF NOT EXISTS `tbl_video` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(251) NOT NULL,
  `name` varchar(251) NOT NULL,
  `link` varchar(251) NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_video`
--

INSERT INTO `tbl_video` (`sno`, `type`, `name`, `link`, `date`) VALUES
(1, 'English', '2013 Alzayani Billiard tournament', 'https://www.youtube.com/watch?v=3KxawpyQhlI', '2014-07-10'),
(2, 'English', 'Alzayani - Campaign to help Philippines', 'https://www.youtube.com/watch?v=JvBKwzxhMfA', '2014-07-10'),
(3, 'English', 'Alzayani Activity', 'https://www.youtube.com/watch?v=CAjSRMPg8oA', '2014-07-10'),
(4, 'English', 'Walkathon for Diabetes', 'https://www.youtube.com/watch?v=ULjxb7NYJSI', '2014-07-10'),
(5, 'English', 'Alzayani Sponser Lose it to Win Program for the children', 'https://www.youtube.com/watch?v=cxoqaOKW8qI', '2014-07-10'),
(6, 'English', 'Bahrain International motor show - sponser by Alzayani Investments', 'https://www.youtube.com/watch?v=I2mWGy30ULQ', '2014-07-10'),
(7, 'English', 'Volleyball: Alzayani VS Lady Warriors', 'https://www.youtube.com/watch?v=rmkS79-Qg-Y', '2014-07-10'),
(8, 'English', 'Basketball: Al Zayani VS Blazzers', 'https://www.youtube.com/watch?v=C3a4vL4PMDE', '2014-07-10'),
(9, 'English', '2014 Bowling Tournament', 'https://www.youtube.com/watch?v=zFva4rswbhc', '2014-07-10');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
