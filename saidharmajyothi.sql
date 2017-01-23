-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2015 at 03:54 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `saidharmajyothi`
--

-- --------------------------------------------------------

--
-- Table structure for table `ipadd`
--

CREATE TABLE IF NOT EXISTS `ipadd` (
  `id` int(11) NOT NULL,
  `ipadd` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ipadd`
--

INSERT INTO `ipadd` (`id`, `ipadd`) VALUES
(1, '::1');

-- --------------------------------------------------------

--
-- Table structure for table `login_ip`
--

CREATE TABLE IF NOT EXISTS `login_ip` (
  `id` int(11) NOT NULL,
  `ipadd` varchar(111) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_ip`
--

INSERT INTO `login_ip` (`id`, `ipadd`, `date`) VALUES
(1, '::1', '2014-09-11'),
(2, '::1', '2014-09-11'),
(3, '::1', '2014-09-11'),
(4, '::1', '2014-09-15'),
(5, '::1', '2014-09-15'),
(6, '::1', '2015-05-23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_address`
--

CREATE TABLE IF NOT EXISTS `tbl_address` (
`sno` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `category` varchar(251) NOT NULL,
  `url` varchar(251) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `name` varchar(251) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `from_date` varchar(50) NOT NULL,
  `to_date` varchar(50) NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `image` varchar(251) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_address`
--

INSERT INTO `tbl_address` (`sno`, `area`, `category`, `url`, `cat_id`, `name`, `from_date`, `to_date`, `content`, `image`) VALUES
(1, 0, '', 'Gurupurnima', 0, 'Gurupurnima', '2015-06-02 10:00', '2015-06-03 14:00', '<p>Aliquam nonummy adipiscing augue.&nbsp;</p>', '4122731105b0e53b4bf80b20361d685d.jpg'),
(2, 0, '', 'Sai-deeksha-sannidi', 0, 'Sai deeksha sannidi', '2015-06-03 10:00', '2015-06-05 15:00', '<p>Aliquam nonummy adipiscing augue.&nbsp;</p>', '4465ff1db750b7649fc26763490e2890.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(111) NOT NULL,
  `username` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL,
  `email_id` varchar(111) NOT NULL,
  `status` enum('y','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `name`, `username`, `password`, `email_id`, `status`) VALUES
(1, 'ajm', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'info@rrventuresanddevelopers.com', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agency`
--

CREATE TABLE IF NOT EXISTS `tbl_agency` (
  `sno` int(11) NOT NULL,
  `name` varchar(251) NOT NULL,
  `year` varchar(251) NOT NULL,
  `property` varchar(251) NOT NULL,
  `number` varchar(251) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_amentics`
--

CREATE TABLE IF NOT EXISTS `tbl_amentics` (
  `sno` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apartments`
--

CREATE TABLE IF NOT EXISTS `tbl_apartments` (
`sno` int(11) NOT NULL,
  `location` varchar(251) NOT NULL,
  `name` varchar(251) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `bedrooms` varchar(251) NOT NULL,
  `bathrooms` varchar(251) NOT NULL,
  `feet` varchar(251) NOT NULL,
  `image` varchar(251) NOT NULL,
  `pdf` varchar(251) NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `url` varchar(251) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_apartments`
--

INSERT INTO `tbl_apartments` (`sno`, `location`, `name`, `bedrooms`, `bathrooms`, `feet`, `image`, `pdf`, `content`, `url`, `date`) VALUES
(1, '0', 'Home Page సాయి ధర్మ జ్యోతి Content', '0', '0', '0', 'b930817a45990fef388d841d32722f1c.png', '3f15e4f3c1f1c465bfa357969ec311f1.png', '', 'Home-Page-Content', '2015-06-01'),
(2, '0', 'సాయి ధర్మ జ్యోతి First Content Image', '0', '0', '0', '54b0b7be942519dde0ceb3e3f0fae0cd.png', '23db57e11da3924f2e7ef0c7ce1f32d6.jpg', '', 'First-Content-Image', '2015-06-01'),
(3, '0', 'సాయి ధర్మ జ్యోతి Second Content Image', '0', '0', '0', 'f150be70d0c4701800fff19f4a9c918c.png', '', '', 'Second-Content-Image', '2015-06-01'),
(4, '0', 'సాయి ధర్మ జ్యోతి Third Content Image', '0', '0', '0', '6504338ded48d9a0ec9e8ff9d1bc1c3a.png', '', '', 'Third-Content-Image', '2015-06-01'),
(5, '0', 'గురుబంధం First Content  Image', '0', '0', '0', '74a3a16b74210b2cc97d07da4d017fe8.jpg', '3bb416bbe2ef946614c991d8f674b3e6.jpg', '', 'First-Content-Image', '2015-06-01'),
(6, '0', 'గురుబంధం Second Content Image', '0', '0', '0', '3b883f6b31c0112cdcc354bfd600586d.jpg', '', '', 'Second-Content-Image', '2015-06-01'),
(7, '0', 'గురుబంధం Third Content  Image', '0', '0', '0', 'bcac56dc5883241db4b5c15784810b10.jpg', '', '', 'Third-Content-Image', '2015-06-01'),
(8, '0', 'అంతా సాయిమయం Content Image', '0', '0', '0', '1cfac98edc078ebb37e49efe81c2cd04.jpg', 'f056b12cfd7f7737ff55e44e82e05b75.jpg', '', 'Content-Image', '2015-06-01'),
(9, '0', 'సాయి సహవాసం Content Image', '0', '0', '0', 'a8b44459b54ad15bd534c74d8866f285.jpg', '37b836f1f3e2b7dc13b3d109f66193f1.jpg', '', 'Content-Image', '2015-06-01'),
(10, '0', 'సాయి స్వరూపం Content Image', '0', '0', '0', '29ebdc9637a7b1e23ca2dab04d9c3a5c.jpg', '4f4ae2500b98b53e257d2687ca4b54b1.jpg', '', 'Content-Image', '2015-06-01'),
(11, '0', 'సాయి భవిష్య వాణి Content Image', '0', '0', '0', 'Sai-bhvisya-vani.jpg', '79a4b18e1f54ba4c0ed0f6c98b852a36.jpg', '', 'Content-Image', '2015-06-01'),
(12, '0', 'నేనుండగా భయమేల First Content Image', '0', '0', '0', '8efbb8028f18fe4b5aea4634f8af4306.jpg', 'b6a21f09b5c5bbf0c3b170a0e3cce11e.jpg', '', 'First-Content-Image', '2015-06-01'),
(13, '0', 'నేనుండగా భయమేల Second Content Image', '0', '0', '0', 'c7a6ddcc0992f11ff263121fec233010.jpg', '', '', 'Second-Content-Image', '2015-06-01'),
(14, '0', 'సాయి పరివార్ Content Image', '0', '0', '0', '80da280d8a97b1db5db75b3c3e11594c.png', '22781a05416d3727e4d09e30bd2afcfe.jpg', '', 'Content-Image', '2015-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_area`
--

CREATE TABLE IF NOT EXISTS `tbl_area` (
  `sno` int(11) NOT NULL,
  `category` varchar(251) NOT NULL,
  `name` varchar(251) NOT NULL,
  `content` text NOT NULL,
  `url` varchar(251) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_area`
--

INSERT INTO `tbl_area` (`sno`, `category`, `name`, `content`, `url`, `date`) VALUES
(1, '0', 'Apartments', '', 'Apartments', '2015-05-29'),
(2, '0', 'Venchures', '', 'Venchures', '2015-05-29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_awards`
--

CREATE TABLE IF NOT EXISTS `tbl_awards` (
`sno` int(11) NOT NULL,
  `type` varchar(251) NOT NULL,
  `name` varchar(111) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(111) NOT NULL,
  `link` varchar(251) NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` enum('y','n') NOT NULL DEFAULT 'y'
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_awards`
--

INSERT INTO `tbl_awards` (`sno`, `type`, `name`, `content`, `image`, `link`, `date`, `status`) VALUES
(1, 'English', '0', '', '74bc663c428295cb3063c0ca0eb10d5a.jpg', '', '2015-06-01', 'y'),
(2, 'English', '0', '', '5925ef95802f14d4b6f8f8647a1a1d0d.jpg', '', '2015-06-01', 'y'),
(3, 'English', '0', '', '9ea9f4b232dcc047e003c914a4db9165.jpg', '', '2015-06-01', 'y'),
(4, 'English', '0', '', '3243edc92f003898ad8de1233d6a49a6.jpg', '', '2015-06-01', 'y'),
(5, 'English', '0', '', '916d41200b9e70aa22430c97ce2f0d0f.jpg', '', '2015-06-01', 'y'),
(6, 'English', '0', '', 'bf429ad78ff30757dc005d5576b49305.jpg', '', '2015-06-01', 'y'),
(7, 'English', '0', '', '61e6b5cf8374a662b5d77ed705fd1049.jpg', '', '2015-06-01', 'y'),
(8, '', '0', '', 'fbe4a84c6547499c065ff460715973d0.jpg', '', '2015-05-30', 'y'),
(9, 'English', '0', '', '2aa4898fd55e15b0b16552261d94148f.jpg', '', '2015-06-01', 'y'),
(10, 'English', '0', '', '075695566c98c98dd5d792bce56604ec.jpg', '', '2015-06-01', 'y'),
(11, 'Telugu', '0', '', '0e0bb19e8e9122d8f79ceadc9e8ec920.jpg', '', '2015-06-01', 'y'),
(12, 'Telugu', '0', '', 'ff9ee1d56c68b2fc0da49ff9e8008b0c.jpg', '', '2015-06-01', 'y'),
(13, 'Telugu', '0', '', 'ad60e0a213edbfcd41470d977b475f2f.jpg', '', '2015-06-01', 'y'),
(14, 'Telugu', '0', '', 'e9b475d7abe3c187f21e46d686d566ce.jpg', '', '2015-06-01', 'y'),
(15, 'Telugu', '0', '', '21030976e0962c0d326bbc9e5ddf5e2c.jpg', '', '2015-06-01', 'y'),
(16, 'Telugu', '0', '', '6f6acca51e3c5a043ee969f490769a4c.jpg', '', '2015-06-01', 'y'),
(17, 'Telugu', '0', '', 'a667ce8729a98b6870e173bbb10adcb5.jpg', '', '2015-06-01', 'y'),
(18, 'Telugu', '0', '', '8f6543d3e83511ef16a7f718c624e406.jpg', '', '2015-06-01', 'y'),
(19, 'Telugu', '0', '', 'c50a4385110781d44f74f4a4ee154759.jpg', '', '2015-06-01', 'y'),
(20, 'Telugu', '0', '', '072ec62068ebd8c2119df42fa4c305ef.jpg', '', '2015-06-01', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner`
--

CREATE TABLE IF NOT EXISTS `tbl_banner` (
`sno` int(11) NOT NULL,
  `name` varchar(111) NOT NULL,
  `price` varchar(251) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(111) NOT NULL,
  `link` varchar(251) NOT NULL,
  `status` enum('y','n') NOT NULL DEFAULT 'y'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_banner`
--

INSERT INTO `tbl_banner` (`sno`, `name`, `price`, `content`, `image`, `link`, `status`) VALUES
(1, '0', '', '', '983d52a61c6603f645c1e8f4112e9d46.jpg', '0', 'y'),
(2, '0', '', '', 'e93ced3d72ade56e1b0bf04e1f3d7291.jpg', '0', 'y'),
(3, '0', '', '', '90cf30fe1b0475833297e3beb4bc1822.jpg', '0', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bin_locations`
--

CREATE TABLE IF NOT EXISTS `tbl_bin_locations` (
  `sno` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `address` int(11) NOT NULL,
  `category` varchar(251) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bin_locations`
--

INSERT INTO `tbl_bin_locations` (`sno`, `area`, `address`, `category`) VALUES
(1, 16, 1, '<p>Road No. 8789,Block No. 8889 Landmark</p>'),
(2, 14, 4, '<p>Road No. 8000,Block No. 8000Landmark</p>'),
(3, 16, 1, '<p>Road No. 6000,Block No. 6000&nbsp;Landmark</p>'),
(4, 16, 1, '<p>Road No. 5000,Block No. 5000 Landmark</p>'),
(5, 15, 3, '<p>Road No. 3000,Block No. 3000&nbsp;Landmark</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brochure`
--

CREATE TABLE IF NOT EXISTS `tbl_brochure` (
  `sno` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `link` varchar(251) NOT NULL,
  `image` varchar(251) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_brochure`
--

INSERT INTO `tbl_brochure` (`sno`, `project_id`, `link`, `image`, `date`) VALUES
(1, 0, '0', '', '2015-05-29'),
(4, 1, 'Rudhra Pdf', 'd3e7521b8832d6ef1610dbe30eb7f3fc.pdf', '2015-05-29'),
(5, 2, 'Mayuri Brochure', '9d3a395fa3c2502d6369a8ae38120296.pdf', '2015-05-29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_careers`
--

CREATE TABLE IF NOT EXISTS `tbl_careers` (
  `sno` int(11) NOT NULL,
  `type` varchar(251) NOT NULL,
  `job_title` varchar(251) NOT NULL,
  `Name` varchar(111) NOT NULL,
  `lname` varchar(251) NOT NULL,
  `Email` varchar(111) NOT NULL,
  `Phone_Number` varchar(111) NOT NULL,
  `Country` varchar(111) NOT NULL,
  `Current_Location` varchar(111) NOT NULL,
  `Preffed_Location` varchar(111) NOT NULL,
  `Job_Category` varchar(111) NOT NULL,
  `Industry` varchar(111) NOT NULL,
  `Your_Message` text NOT NULL,
  `Industry_Image` varchar(111) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_careers`
--

INSERT INTO `tbl_careers` (`sno`, `type`, `job_title`, `Name`, `lname`, `Email`, `Phone_Number`, `Country`, `Current_Location`, `Preffed_Location`, `Job_Category`, `Industry`, `Your_Message`, `Industry_Image`, `date`) VALUES
(1, 'English', 'Electrician', 'mohan', 'yadav', 'mohan@gmail.com', '9505160420', 'India', 'hyderabad', 'Ap', 'Diploma', 'Hindu', 'Uppal cross Road', '5c284a6297955815b929086e014919fa.docx', '2014-07-17'),
(5, 'Arabic', 'Electrician', 'mohan', 'yadav', 'mohan@gmail.com', '9505160420', 'India', 'hyderabad', 'Telangana', 'Bachelor Bsc Ba', 'Hindu', 'Hyderabad', '0cb967b4d0d2043101f3a4d57ee46fc4.docx', '2014-07-25'),
(6, 'Arabic', 'Sales Executive - JLR New Cars', 'Suresh', 'Kumar', 'yuvaraj950@gmail.com', '9505160420', 'Anguilla', 'Secnderabad', 'Telangana', 'Bachelor Bsc Ba', 'Hindu', 'Secnderabad', '94bf67429b66bb438f7fbf742124074b.docx', '2014-07-25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_careers_job`
--

CREATE TABLE IF NOT EXISTS `tbl_careers_job` (
  `sno` int(11) NOT NULL,
  `category` varchar(251) NOT NULL,
  `title` varchar(251) NOT NULL,
  `location` varchar(251) NOT NULL,
  `address` text NOT NULL,
  `url` varchar(251) NOT NULL,
  `url_cat` varchar(251) NOT NULL,
  `posted_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_careers_job`
--

INSERT INTO `tbl_careers_job` (`sno`, `category`, `title`, `location`, `address`, `url`, `url_cat`, `posted_date`) VALUES
(1, 'Electrical', 'Electrician', 'Bahrain', '<p><span style=\\"color: #242424; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; background-color: #fefefe;\\">Coordination of web-based offerings with Marketing team and the vendor. Drive growth and development with loyalty program .</span></p>', 'Electrician', 'Electrical', '2014-07-17'),
(2, 'Sales', 'Sales Executive - JLR New Cars', 'Bahrain', '<p><span style=\\"color: #242424; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; background-color: #fefefe;\\">Coordination of web-based offerings with Marketing team and the vendor. Drive growth and development with loyalty program .</span></p>', 'Sales-Executive-JLR-New-Cars', 'Sales', '2014-07-17'),
(3, 'Information Technology', 'Loyalty Programme - JLR CRM', 'Bahrain', '<p><span style=\\"color: #242424; font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 18px; background-color: #fefefe;\\">Coordination of web-based offerings with Marketing team and the vendor. Drive growth and development with loyalty program .</span></p>', 'Loyalty-Programme-JLR-CRM', 'Information-Technology', '2014-07-17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `sno` int(11) NOT NULL,
  `name` varchar(251) NOT NULL,
  `url` varchar(251) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`sno`, `name`, `url`, `date`) VALUES
(3, 'Third Album', 'Third-Album', '2015-03-25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chammel_partner`
--

CREATE TABLE IF NOT EXISTS `tbl_chammel_partner` (
  `sno` int(11) NOT NULL,
  `name` varchar(251) NOT NULL,
  `year` varchar(251) NOT NULL,
  `property` varchar(251) NOT NULL,
  `number` varchar(251) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clients`
--

CREATE TABLE IF NOT EXISTS `tbl_clients` (
`sno` int(11) NOT NULL,
  `name` varchar(111) NOT NULL,
  `category` int(11) NOT NULL,
  `image` varchar(111) NOT NULL,
  `date` date NOT NULL,
  `status` enum('y','n') NOT NULL DEFAULT 'y'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_clients`
--

INSERT INTO `tbl_clients` (`sno`, `name`, `category`, `image`, `date`, `status`) VALUES
(1, '0', 0, '8fe6f19dee24d7cc5236e506aba192d1.jpg', '2015-06-01', 'y'),
(2, '0', 0, 'e543c89c143cbe2ee2aae9760c89910f.jpg', '2015-06-01', 'y'),
(3, '0', 0, '01a8405b364fa1f3e88df033634fcc3d.jpg', '2015-06-01', 'y'),
(4, '0', 0, 'c1b94c1d2c919d6fbb8406142ad04d92.jpg', '2015-06-01', 'y'),
(5, '0', 0, '7320d99aee0e2018d61942aec05f81c9.jpg', '2015-06-01', 'y'),
(6, '0', 0, '69c90cedb06e51a0dbfb65c32ceeb29e.jpg', '2015-06-01', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client_category`
--

CREATE TABLE IF NOT EXISTS `tbl_client_category` (
  `cat_id` int(11) NOT NULL,
  `category` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `sno` int(11) NOT NULL,
  `company_type` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `sno` int(11) NOT NULL,
  `Name` varchar(111) NOT NULL,
  `Email` varchar(111) NOT NULL,
  `Phone` varchar(111) NOT NULL,
  `Address` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
`content_id` int(11) NOT NULL,
  `content_name` varchar(111) NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `image` varchar(251) NOT NULL,
  `content_arabic` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_content`
--

INSERT INTO `tbl_content` (`content_id`, `content_name`, `content`, `image`, `content_arabic`, `Date`) VALUES
(1, 'Home Page English  Heading', '<p>AKHILANDA KOTI BRAHMANDA NAYAKA! RAJADHIRAJA! YOGI  RAJAPARABRAHMA!  SRI SACHITHANANDA SAMARDA SADGURU SAINADH MAHARAJ KI JAI !</p>', '', '', '2015-06-01'),
(2, 'Home Page Sai Dharma Jyothi Content', '<p>I then manifest myself to deliver the saints and vanquish the evil-doers, to re-establish dharma, I shall appear in every age upholding those who support dharma and defeating those who oppose it. This was said by lord Krishna in the holy book of Gita (Bhagavad Gita). In the same manner lord Shirdi Sainadha appeared to re-establish dharma. Humanity as his nature, establishing dharma as his goal, leading an austere life by performing deeds without expectation (nishkamakrma), by Shraddha (faith) and Saburi (patience) as his medium, lord Saibaba in the form of light showed us the path which is required for motivating oneself towards self-realization. The ultimate purpose of Nanda deepam (light) is to remove ignorance through enlightenment.</p>\r\n<p>Lord Sainadha Maharaj shall support us in the development of knowledge by arousing consciousness in us.</p>\r\n<p>Sai dharma jyothi itself is a live example of lord Shirdi Sainadha&rsquo;s blessing. It took a form on 8th of January2015 i.e. on Thursday in the holy place Shirdi where lord Samardha sadguru sachidhananda Sainadha maharaj led his life. It started from Kandobha temple which is regarded as kalpavriksh (wish-fulfilling divine tree in Hindu mythology) of Shirdi. The procession started from Kandobha temple which was followed by many devotees reciting lord&rsquo;s name (nama sankeerthana) heading towards the home of Mahalsapathi, Shyama, Lakshmibhai shinde, Dwarakamayee, Chavidi, Samadhi mandiram, Lendi Baug (garden), Nanda deepam, Dattatreya temple, Laksmi temple, Panchamukha Ganapathi temple. Later, it was brought to Guntur after conducting prayers in some other holy places of Shirdi. With the blessings of lord Saibaba it was brought to Saiparivaar Guntur with good determination. The purpose of Saidharmajyothi is to endow peace and prosperity to the entire world.</p>', 'ff978fd1977067730978bf425efb9fdc.png', '', '2015-05-30'),
(3, 'Sai Dharma Jyothi Content', '<h4 class=\\"text-center\\">AKHILANDA KOTI BRAHMANDA NAYAKA! RAJADHIRAJA! YOGI  RAJAPARABRAHMA!  SRI SACHITHANANDA SAMARDA SADGURU SAINADH MAHARAJ KI JAI !<br /> <span>SAI DHARMA JYOTHI</span></h4>\r\n<h3 class=\\"text-center\\">PARITHRANAYA SADUNAM VINAYASHAYACHA druskutam                      DHRAMASAMSTHAPANAYA SAMBHAVAMI YUGE YUGE!!!</h3>\r\n<p>I then manifest myself to deliver the saints and vanquish the evil-doers, to re-establish dharma, I shall appear in every age upholding those who support dharma and defeating those who oppose it. This was said by lord Krishna in the holy book of Gita (Bhagavad Gita). In the same manner lord Shirdi Sainadha appeared to re-establish dharma. Humanity as his nature, establishing dharma as his goal, leading an austere life by performing deeds without expectation (nishkamakrma), by Shraddha (faith) and Saburi (patience) as his medium, lord Saibaba in the form of light showed us the path which is required for motivating oneself towards self-realization. The ultimate purpose of Nanda deepam (light) is to remove ignorance through enlightenment.</p>\r\n<p>Lord Sainadha Maharaj shall support us in the development of knowledge by arousing consciousness in us.</p>\r\n<p>Sai dharma jyothi itself is a live example of lord Shirdi Sainadha&rsquo;s blessing. It took a form on 8th of January2015 i.e. on Thursday in the holy place Shirdi where lord Samardha sadguru sachidhananda Sainadha maharaj led his life. It started from Kandobha temple which is regarded as kalpavriksh (wish-fulfilling divine tree in Hindu mythology) of Shirdi. The procession started from Kandobha temple which was followed by many devotees reciting lord&rsquo;s name (nama sankeerthana) heading towards the home of Mahalsapathi, Shyama, Lakshmibhai shinde, Dwarakamayee, Chavidi, Samadhi mandiram, Lendi Baug (garden), Nanda deepam, Dattatreya temple, Laksmi temple, Panchamukha Ganapathi temple. Later, it was brought to Guntur after conducting prayers in some other holy places of Shirdi. With the blessings of lord Saibaba it was brought to Saiparivaar Guntur with good determination. The purpose of Saidharmajyothi is to endow peace and prosperity to the entire world.</p>\r\n<p>On the holy day of Sankranthi lord Saibaba gave dharshan as lord shiva to Meghashyama (devotee). Meghashyama had a direct perception of god through the senses (sakshatkaram means seeing god with one&rsquo;s eyes). Meghashyama performed Abhisekham (a devotional activity) to Lord Shiva.This is the most important happening in Saicharithra where lord Saibaba filled Megashyama with knowledge.</p>\r\n<p>Uttarayan is a period between Makara Sankranti and is considered as very auspicious. If we undertake any activity in this period definitely it will bring good results and it will be successful. Hence we declare happily that we are going to start this programme on the auspicious day of Makara Sankrathi.</p>\r\n<p>In order to live in a society with family values, spiritual values, love and affection, without caste and creed discrimination with peace and harmony, we need the essence of Lord Sai baba&rsquo;s life and follow his dharma which is humanity. All the temples of Saibaba will transform into abode of knowledge if every Sai devotee would make every effort to follow Sai dharma.</p>\r\n<p>The ultimate aim of Sai dharma jyothi is to spread Sai dharma along with high values.</p>\r\n<p>Sai Baba&rsquo;s blessings would emanate in the form of energy to every place where dharmajyothi is taken.  Guru can reduce any karma (evil effect).</p>\r\n<p>In the current society it will help by freeing us from sin or moral guilt if one tries to follow these simple steps. To get the divine blessings Sai dharma jyothi mahayagam can be performed at our home by following these basic series of steps.</p>\r\n<h2>PROCEDURE</h2>\r\n<ul>\r\n<li>One should keep the premises clean where you want to place jyothi (at home or at temple).</li>\r\n<li>Use water mixed with turmeric powder or cow&rsquo;s urine to clean the place.</li>\r\n<li>All the members of the family must take part in this activity. One must sleep on the ground. One should not eat Non-Vegetarian food. One should not consume alcohol. Commit yourself to the practice of brahmacharya.</li>\r\n<li>One must always have the feeling that lord Saibaba is blessing us who is in the form of Jyothi (deepam).</li>\r\n<li>For forty minutes (40 mins) one should practice meditation (Dhyana), recite God&rsquo;s name (Namamu), perform Pooja, sing devotional songs (Bhajana), and according to one&rsquo;s probability satsang must be arranged (Santsang is a gathering where good people try to assimilate the truth). It can be done in the morning or in the evening according to one&rsquo;s possibility.</li>\r\n<li>It is decided that jyothi (deepam) must remain for 24 hours i.e. from morning 9&rsquo;o clock till next day morning 9 o&rsquo;clock</li>\r\n<li>This religious practice can be arranged in groups (near jyothi)</li>\r\n<li>The most important factor is that this activity can be arranged at Baba&rsquo;s temple on Sunday and Thursday.</li>\r\n<li>In 1008 places Sai dharma jothi yagam will be arranged to impart sanctity and to propagate power.</li>\r\n<li>By the sanctification of the Dhuni in the Baba&rsquo;s temples and via the flux of the power of the sacred dharma jyothi, temples will be developed.</li>\r\n<li>Rewards and offering are not allowed.</li>\r\n<li>By using Guru sampradhayam(religious system)success can be achieved and happiness, oneness are developed . Sai dharma jyothi is a platform where every sai devotee will experience chaitanyam i.e. consciousness or intelligence.</li>\r\n<li>This mahayagam which commenced on Makara sankranthi in Guntur will be dedicated with complete oblation to lord sainadha&rsquo;s divyacharnam(divine feet)  at Shirdi  on the holy day of    vijayadashami 2018 which will be lord&rsquo;s punyathiti(death anniversary day).</li>\r\n<li>Sai parivaar sevadhal will help you to find the convenient place to set the Jyothi at your home.</li>\r\n<li>To make it (jyothi) stay for 24hours one can use sesam oil or cow&rsquo;s ghee according to one&rsquo;s possibility.</li>\r\n<li>This activity can be arranged in any sai mandir( temple).</li>\r\n<li>For the welfare of the society this programme can be conducted at temples, satsang kendram (centre), educational institutions, and other Service institutions.</li>\r\n<li>Nagara sankeertana( to sing or dance in praise of the lord) can be celebrated in any village or town.</li>\r\n<li>Discrimination towards any caste, creed, or showing any difference between rich and poor are not encouraged.</li>\r\n<li>This mahayagam is performed for the benefit of the entire world and to re-establish truth.</li>\r\n<li>It (jyothi) will be kept only for 24 hours at ones&rsquo; residence or at any place later it will be moved to a different place.</li>\r\n</ul>\r\n<h2>Benefits</h2>\r\n<ul>\r\n<li>At home or at any temple the power of Sai dharma jyothi is propagated through which development will take place.</li>\r\n<li>One can arrange for parayana and bhajana satsang at the place where jyothi is placed.</li>\r\n<li>One will be freed from the unpleasant experiences caused by evil spirits and it is also a simple solution to free oneself from misfortune.</li>\r\n<li>It can remove the harmful effects caused by vastu (science of architecture).</li>\r\n<li>It will protect children, elderly persons and women from anxiety.</li>\r\n<li>If one goes to see Sai dharma jyothi regularly for40 days one will be freed from all the harmful effects (dosham).</li>\r\n<li>One will be blessed with good health and prosperity if they participate in Sai dharma jyothi seva (service).</li>\r\n<li>Financial problems will be eliminated by offering cow&rsquo;s ghee.</li>\r\n<li>Special training will be given to every person</li>\r\n<li>Only trained persons are allowed to enter an activity.</li>\r\n<li>In shastra&rsquo;s (part of vedic tradition) it is believed that if we worship lord Agni our desires will be fulfilled in a short time. Therefore he is given foremost position in Homam (ritual), Yegnam, Yagam, or in any puja (worship).By holding belief whoever participates in Sai dharma jyothi mahayagm they will definitely get the blessings of Lord Shirdi Sainadha.</li>\r\n<li>It is fortunate enough to see Sai dharma jyothi which is brought from the holy place Shirdi with good determination. The life of the person who performs Seva relentlessly is the blessed one.</li>\r\n<li>Only early enrolees will get the opportunity.</li>\r\n<li>This Yagam should not be conducted against ones will or feelings.</li>\r\n</ul>', '', '', '2015-05-30'),
(4, 'Contact Us Content', '<h4 class=\\"pamareset\\">Sai Srinivas<br /> <span>Founder &amp; Chairman<br /> Sai Parivar Charitable Trust<br /> <em class=\\"fa fa-map-marker\\"></em> Address :<br /> Flat No: 103<br /> Yaganti Sikhara,Guzzanagundla<br /> Opp. Current Office, Guntur - 6<br /> <em class=\\"fa fa-phone-square\\"></em> 9030383838</span></h4>\r\n<h4 class=\\"pamareset\\">N. Durga Prasad<br /> <span>Sri Sri Abhyasiddhi Sairama mandiram (Temple)<br /> Vengalayapalam, Guntur<br /> <em class=\\"fa fa-phone-square\\"></em> 9392241675</span></h4>\r\n<h4 class=\\"pamareset\\">N. Anannth Sai Kumar<br /> <span> <em class=\\"fa fa-phone-square\\"></em> 8179260444</span></h4>\r\n<h4 class=\\"pamareset\\">Thota.V.K. Kishore<br /> <span><em class=\\"fa fa-phone-square\\"></em> 9030111262</span></h4>', '', '', '2015-05-30'),
(5, 'About Us Content', '<h3>Sai Sandhesh</h3>\r\n<p>I was born to my parents Smt. Namepalli Venkayamma and Sri. Sambayya on 3rd September 1969. I shall remain indebted forever to my childhood friend Varaprasad who introduced me to Sai in 1995. Right at my first sight, I experienced an unknown transition in my state of mind which drove me to the service of Sai. Nalluri ramachandra bhattacharyula garu is a father like figure to me .His blessings led me to establish Sai parivar in Guntur. I am very lucky to have Smt. Roja Rani as my wife as she extends her support to me always in every possible form in whatever I undertake with love and affection. My sons Anantha Kumar and Pavan Kumar encourage me by extending their co-operation and they shall always have the blessings of Sai. With the blessings of lord Sai baba I got an opportunity to establish &ldquo;Gomandir Charitable Trust &lsquo;&rsquo; (2010), &rsquo;&rsquo;Sai Privaar&rsquo;&rsquo; in the year 2010. I am very happy to come up with a new program &lsquo;&rsquo;Sai Dharma Jyothi&rsquo;&rsquo; which started on Jan 8th 2015 in the holy place of Shirdi and now which is heading towards other places by God&rsquo;s grace.</p>\r\n<h3>My inspiration</h3>\r\n<p>Every person in their life meet different kind of people but only few inspire and motivate us. Different people will teach us different things. Few persons inspired me in my journey and they are Bapatla Hanumantha Rao, B.V. Narasimha Rao, Akkirala Bharadwaj, Alluri Gopala Rao, Yemmidishetti Prabhakar Rao and the works of other eminent writers stood as my guidance. Committed devotees, assistants, writers inspired me in the form of Sai and I offer them my sincere salutations. Sri Nalluri ramachandra bhattacharyula garu has been motivating me with his advices and helped me in conceiving activities related to Sai service. He attended and gave a discourse on the occasion of &lsquo;&rsquo;sai tho oka roju&rsquo;&rsquo; started on 1st Jan 2011.He has been a father-like figure to me and I offer my gratitude and Namaskar&rsquo;s. This blessing has spread across the state and this program that started in Guntur now is celebrated as a festival in Sai&rsquo;s temple.</p>\r\n<ul>\r\n<li>We strive to spread the Divine message to one and all.</li>\r\n<li>Our aim is to spread teachings and messages of Sri Sai baba.</li>\r\n<li>We make every effort to follow the divine path.</li>\r\n<li>We lend a hand in providing the service to poor and needy.</li>\r\n<li>We come up with innovative spiritual activities, ideas and thoughts.</li>\r\n<li>We train people who wish to take part in our activities.</li>\r\n<li>We are dedicated and we don&rsquo;t entertain any sort of offerings.</li>\r\n<li>We pray for you and your dear ones.</li>\r\n<li>We make an effort to bring peace and prosperity to the entire world.</li>\r\n</ul>', '896017b465d19c39f9da806ab1f99a39.jpg', '', '2015-05-30'),
(6, 'Gurubandham Content', '<p>I was born to my parents Smt. Namepalli Venkayamma and Sri. Sambayya on 3rd September 1969 and I started my life playing with my younger brother Chinni Venkateswarulu but my life has undergone many unexpected twists.</p>\r\n<p>I shall remain indebted forever to my childhood friend Varaprasad who introduced me to Sai in 1995. This proved the very statement of Sai that he would draw closer his devotees to himself by any means.</p>\r\n<p>Right at my first sight, I experienced an unknown transition in my state of mind which drove me to the service of Sai. After succeeding many tests and trials, I was blessed with his vision and conversation in my dreams and   obtained his sight in live.</p>\r\n<p>Meritorious actions in my former birth have made me come closer to sri Shivarama Dixit sampradayakulu rajashri achalananada peetamu Vinukonda peetadhipatulu sri sri sri swamy Achalananda in the year 2002. I feel blessed as my spiritual journey still continues under his supervision. His love and affection are protecting me and making me move further. I bow my head and pay my gratitude by offering flowers to their lotus feet.</p>\r\n<p>By the year 2007, after having completed 108 saptahams, Sai made me instrumental for composing the Sri Sai Amrutavarshini, an experience that I cannot describe. Still the books are found in the hands of thousands of devotees as a bible, Nityaparayana Grandham. Lord Sai&rsquo;s grace will never make me forget my responsibility. Day by day it drew me closer to Sai which in turn brought me closer to Bhagvan Golagamudi Venkaiah Swamy in the year 2008.</p>\r\n<p>I got a great opportunity to author the sacred book Sri Venkaiah Swamy Leelaamrutham with the help of Sri Veeluri Ramanaidu garu, native of Nagula Vellaturi, who is an intimate assistant of SriVenkaiah Swamy garu and who collected a significant number of leelas of Sai. In that way I was blessed to render services to him. From that day I consider myself fortunate enough to participate in his service. I offer my salutations to my guru pujya Sri Velluri Ramanaidu garu (Cheerala), a Sai upasak who made me aware of spiritual matters and also made me closer to Venkaiah Swamy garu. I express my gratitude to sri sri sri Shiva Keshav garu by offering flowers to his lotus feet.  Indeed being a knowledgeable person and being a famous yogacharya who taught me dhayanayoga methods which are required for saitattva pracharamu, he is the one who made me a good Sai devotee in the society and also being a Patanjali yogashikshak and also establishing lord Sainadha&rsquo;s temple. From 2006 till now, his suggestions and hints made me reach heights which I can never forget.</p>\r\n<p>By establishing Saitattva prachara sevasamasta in the year 2010, on 10th December we carried out a event called shatabdhi aarathi with the help of thousands of people successfully which remains as a milestone.</p>\r\n<p>Sri Nalluri ramachandra bhattacharyula garu has been motivating me with his advices and helped me in conceiving activities related to Sai service. He attended and gave a discourse on the occasion of &lsquo;&rsquo;sai tho oka roju&rsquo;&rsquo; started on 1st Jan 2011.He has been a father-like figure to me and i offer my gratitude and Namaskar&rsquo;s.This blessings has spread across the state and this program, that started in Guntur now is celebrated as a festival in  Sai&rsquo;s temple.</p>\r\n<p>His blessings led me to establish Saiparivar in Guntur. With the help of the TV channel Bhakti TV, I could endear myself to the devotees of Sai by expounding Sainadha Bhagavatam. With the mercy of Sai and support from his ardent devotees, I am able to conduct activities successfully with enthusiasm and excitement. I do not take any credit for all this. In the journey of promoting Saitatva, I was rendered with the assistance by the suggestions, experiences and hints of many Sai devotees and the works of many writers inspired me vigorously. Bapatla Hanumantha Rao, B.V. Narasimha Rao, Akkirala Bharadwaj, Alluri Gopala Rao, Yemmidishetti Prabhakar Rao and the works of other eminent writers stood as my guidance. Committed devotees, assistants, writers inspired me in the form of Sai and I offer them my sincere salutations.</p>\r\n<p>According to Shastras, human form is regarded as the best. I bow my head and offer my salutations to Lord parabhrahma Sachidaananda Sadguru Sainadha Maharaj who has sent me to this world in human form as a devotee to him.</p>\r\n<p>I offer infinite salutations to my revered late father Sri. Namepalli Sambayya and to my dearest mother Smt. Namepalli Venkayamma who cares me as an infant even now with utmost love and affection.</p>\r\n<p>I am very lucky to have Smt. Roja Rani as my wife as she extends her support to me always in every possible form in whatever I undertake with love and affection.</p>\r\n<p>AsI am dedicated to the service of Sai, I find very little time to spend with my children. My sons Anantha Kumar and Pavan Kumar encourage me by extending their co-operation and they shall always have the blessings of Sai.</p>\r\n<p>Meritous actions performed in the former life count a lot. By the grace of Sai, everything is running smoothly in my life gifted by him. He is the sole means of my existence and actions. I am just a character in the play directed by him. I plead Sai to let me remain same without falling for the charm of this material world till my last breath.</p>\r\n<p>I pray Sai to endow joy and prosperity to the universe.</p>', '9ef472d5e736dcbdf2f39895a1533f2d.jpg', '', '2015-05-30'),
(7, 'Recent Events Content', '<p>Daily we arrange for Puja, Bhajana, Parayana and Satsang.</p>\r\n<p>All these activities take place relentlessly from morning nine till evening nine.</p>\r\n<p>We undertake Sai Dharma jyothi activities which usually start from evening six till night nine.</p>\r\n<p>Satsang program is very important as it is a deep spiritual discussion where one can exchange their views as thoughts with other members who are involved in the group.</p>\r\n<p>Bhjana is one of the process where one can train one&rsquo;s mind. The vibrations which emanate from them make the heart vibrant and purification of mind and heart is possible.</p>\r\n<p>Prayana means reading of a spiritual text without getting a break. It is also considered very important.</p>\r\n<p>Contemplative practices are good for every one which includes Meditation and prayer.</p>\r\n<p>One can improve concentration and attention.</p>\r\n<p>Prayer gives a positive effect on overall wellbeing.</p>', '7cb4f3bec849475c456391c91e3f20a5.jpg', '', '2015-05-30'),
(8, 'Special Programs Content', '<h2>Festivals</h2>\r\n<p>Celebrating festivals is a great way to learn about the Indian culture and it can be a great way to impart values only when one knows about its significance. We celebrate the following festivals</p>\r\n<h3 style=\\"color:#104801\\">Sri Rama Navami</h3>\r\n<p>It is one of the most important Hindu festivals. It is celebrated on the occasion of Lord Rama&rsquo;s birthday which usually falls in the month of March or April.</p>\r\n<p>The word Dharma means justice. Every person must know about the greatest Indian epic Ramayana because it is the manifestation of Dharma. The concept of Dharma represents truth. Every person must perform their Dharma by selecting a good path in one&rsquo;s life. One must know how to perform one&rsquo;s duty without any expectation. It deals about how to lead life with truthfulness and through which human salvation is possible.</p>\r\n<p>The epic Ramayana depicts the life of Lord Rama and Sita who followed Dharma where we can also see a contrary image Ravana who followed Adharama. At the end Lord Rama defeated Ravana.</p>\r\n<p>Based on this story one can understand what Dharma is and what are the ways to attain. Every Indian must review the concept of Dharma and remind the young about its importance.</p>\r\n<h3 style=\\"color:#104801\\">Vijayadashami</h3>\r\n<p>Which also known as <strong>Dussehra</strong> which is celebrated in the month of October. The festival celebrates the victory over evil. The word Dasha-hara means remover of bad i.e. one who can remove bad and guide us towards righteous path. So, it is only possible when we have a master who can lead us. Guru has the power to inspire and transform us. To gain spiritual path one must have Guru who will make us to reach our destination. It is the Guru who can teach and promote values.  The necessity is not for one but for the entire society. Guru can transform the society which is deprived of values.</p>\r\n<h3 style=\\"color:#104801\\">Guru Purnima</h3>\r\n<p>It is also known as <strong>Vyasa Purnima</strong>. It falls in the month of July. It is a festival of teachers and Guru&rsquo;s it is an occasion when we honour them. The word Guru means imparter of knowledge and dispeller of darkness. He is a spiritual guide. Role of Guru is very important in spiritual search. Guru or preceptor will explain you the right meaning. To overcome our fate we shall need a guru who will lead us towards righteous path.</p>\r\n<h3 style=\\"color:#104801\\">Datta Jayanti</h3>\r\n<p>It is celebrated on the birth day of Shri Datta which usually falls in the month of December. It is said that service to man is service to God. Social service is a duty. One is always indebted to society. Social service is a way of giving back or clearing your debt. There are many opportunities for social service where one can serve in different ways. There is no other satisfaction or any other happiness than the happiness that comes through helping and serving others. On this Holy day of Datta Jayanthi we collect and donate used clothes to poor and the needy. We collect unused medicines and donate them. We also collect chappal or used footwear so that it can be donated for the needy and other services are also provided to help the poor.</p>', '4602739b245911e93f4cb3d6f5d86cf7.jpg', '', '2015-05-30'),
(9, 'Our Programes Content', '<p>Daily we arrange for Puja, Bhajana, Parayana and Satsang.</p>\r\n<p>All these activities take place relentlessly from morning nine till evening nine.</p>\r\n<p>We undertake Sai Dharma jyothi activities which usually start from evening six till night nine.</p>\r\n<p>Satsang program is very important as it is a deep spiritual discussion where one can exchange their views as thoughts with other members who are involved in the group.</p>\r\n<p>Bhjana is one of the process where one can train one&rsquo;s mind. The vibrations which emanate from them make the heart vibrant and purification of mind and heart is possible.</p>\r\n<p>Prayana means reading of a spiritual text without getting a break. It is also considered very important.</p>\r\n<p>Contemplative practices are good for every one which includes Meditation and prayer.</p>\r\n<p>One can improve concentration and attention.</p>\r\n<p>Prayer gives a positive effect on overall wellbeing.</p>', 'ed2df0c7d0b77ea2c69d7c53998fba29.jpg', '', '2015-06-01'),
(10, 'Home Page Telugu Heading', '<p>అఖిలాండకోటి బ్రహ్మాండ నాయకా! రాజాధిరాజా! యోగిరాజ పరబ్రహ్మ! శ్రీ సచ్చిదానంద సమర్థ సద్గురు సాయి నాద్  మహారాజ్ కి జై !</p>', '', '', '2015-06-01'),
(11, 'Telugu Recent Activities Content', '<p>Comning Soon</p>', '86d9a940c4bcc2689b4a64d1cedd1ce3.jpg', '', '2015-06-01'),
(12, 'Telugu Recent Events Content', '<p>Comning Soon</p>', '1caf9fa8d146a11bf7352c206e5d6cb2.jpg', '', '2015-06-01'),
(13, 'Telugu Special Programas Content', '<p>Comning Soon</p>', '29c364a4aeffc9e1f422dcdcfd401614.jpg', '', '2015-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_corporate`
--

CREATE TABLE IF NOT EXISTS `tbl_corporate` (
  `sno` int(11) NOT NULL,
  `phone` varchar(111) NOT NULL,
  `fax` varchar(251) NOT NULL,
  `email` varchar(251) NOT NULL,
  `address` text NOT NULL,
  `address_arabic` varchar(251) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_corporate`
--

INSERT INTO `tbl_corporate` (`sno`, `phone`, `fax`, `email`, `address`, `address_arabic`) VALUES
(1, '17784491', '17783962', 'bccbah@batelco.com.bh', '<p>Building No - 43, Avenue 4,<br /> Block 704, Salmabad,<br /> Kingdom of Bahrain</p>', '39125578');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country`
--

CREATE TABLE IF NOT EXISTS `tbl_country` (
  `country_id` int(11) NOT NULL,
  `country` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_country`
--

INSERT INTO `tbl_country` (`country_id`, `country`) VALUES
(1, 'India'),
(2, 'USA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enquiry_form`
--

CREATE TABLE IF NOT EXISTS `tbl_enquiry_form` (
  `sno` int(11) NOT NULL,
  `name` varchar(251) NOT NULL,
  `email` varchar(251) NOT NULL,
  `phone` varchar(251) NOT NULL,
  `subject` varchar(251) NOT NULL,
  `block` varchar(251) NOT NULL,
  `road` varchar(251) NOT NULL,
  `area` varchar(251) NOT NULL,
  `message` text NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_enquiry_form`
--

INSERT INTO `tbl_enquiry_form` (`sno`, `name`, `email`, `phone`, `subject`, `block`, `road`, `area`, `message`, `date`) VALUES
(2, 'Yuvraj goud', 'yuvaraj950@gmail.com', '9505160420', 'Loremipsum5', 'Saileela Block', '15,kukatpally', 'kphb', 'Hellow', '2014-08-08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_facts`
--

CREATE TABLE IF NOT EXISTS `tbl_facts` (
  `sno` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `category` varchar(251) NOT NULL,
  `sub_category` varchar(251) NOT NULL,
  `name` varchar(251) NOT NULL,
  `url` varchar(251) NOT NULL,
  `url_cat` varchar(251) NOT NULL,
  `url_sub` varchar(251) NOT NULL,
  `image` varchar(251) NOT NULL,
  `pdf` varchar(251) NOT NULL,
  `content` text NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_facts`
--

INSERT INTO `tbl_facts` (`sno`, `cat_id`, `sub_id`, `category`, `sub_category`, `name`, `url`, `url_cat`, `url_sub`, `image`, `pdf`, `content`, `date`) VALUES
(1, 1, 1, 'Electronic<span> Media</span>', 'News Channels', '', '', 'Electronic-Media', 'News-Channels', '4182fb2cb3f4fd90ef37d76d27e38d75.png', '4182fb2cb3f4fd90ef37d76d27e38d75.png', '', '2015-03-28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feavideo`
--

CREATE TABLE IF NOT EXISTS `tbl_feavideo` (
  `sno` int(11) NOT NULL,
  `type` varchar(251) NOT NULL,
  `name` varchar(251) NOT NULL,
  `month` varchar(251) NOT NULL,
  `year` varchar(251) NOT NULL,
  `link` varchar(251) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feavideo`
--

INSERT INTO `tbl_feavideo` (`sno`, `type`, `name`, `month`, `year`, `link`, `date`) VALUES
(1, '0', 'Home Page Video', '', '', 'https://www.youtube.com/watch?v=xJu6CTBZfbM', '2015-03-25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_floor_planes`
--

CREATE TABLE IF NOT EXISTS `tbl_floor_planes` (
  `sno` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `name` varchar(251) NOT NULL,
  `image` varchar(251) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE IF NOT EXISTS `tbl_gallery` (
`sno` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `category` varchar(251) NOT NULL,
  `images` varchar(111) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`sno`, `cat_id`, `category`, `images`) VALUES
(2, 0, '', 'a7338850b9a603db440f3b21f0e07c5b.jpg'),
(3, 0, '', '95ec785137f412ef5dfd07b74f568689.jpg'),
(4, 0, '', '5b06f66508f11cb029ab97c2c9a1de17.jpg'),
(5, 0, '', '8600fec59013d6d44c91601af15bdffb.jpg'),
(6, 0, '', 'd6ba45a6f1e34c8923d542c78102bc59.jpg'),
(7, 0, '', 'e3c77bfb5ebb8a7b6d6e845118935cc2.jpg'),
(8, 0, '', '5fcd99c335d97f4da781fb245ea34947.jpg'),
(9, 0, '', 'ecacbf1962f08ff443c4bb6d66976b87.jpg'),
(10, 0, '', '225aa90b005629148b4604a256d067a1.jpg'),
(11, 0, '', '16ab4f18ccc212d831956b89a825b09a.jpg'),
(12, 0, '', 'c69960c211ac282368bbdd0b0e4b4af2.jpg'),
(13, 0, '', '9855c606fed67f4d5c25401ba3bcf74f.jpg'),
(14, 0, '', '8db733b59fe724b4cc1ccd56652f732a.jpg'),
(15, 0, '', 'd0d15832c870393dba2e3c8bb2ac0907.jpg'),
(16, 0, '', 'f1c11e3110ab4bcbeb7c93b55e8ad967.jpg'),
(17, 0, '', 'da325a1b26e1ceea778aef3c33a3ad7e.jpg'),
(18, 0, '', '876bc026e7b2b685ea736ce51c1f64ac.jpg'),
(19, 0, '', 'ce5ca5e0d7df8b84da5d1413ee1b40d3.jpg'),
(20, 0, '', '720bc4ca3651809c033b0ba13f34c2d6.jpg'),
(21, 0, '', '3ae5d764a598f387a6f2511556b33a06.jpg'),
(22, 0, '', 'ec5e20f681fff7965a629524e6611198.jpg'),
(23, 0, '', 'a4f90336b3112a55085216b3014fcf7c.jpg'),
(24, 0, '', 'a9904a1dba4aba734e1e082d94f3bdc8.jpg'),
(25, 0, '', '034c56af939155d6c34174fc19500072.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_google`
--

CREATE TABLE IF NOT EXISTS `tbl_google` (
  `sno` int(11) NOT NULL,
  `type` varchar(251) NOT NULL,
  `google` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_google`
--

INSERT INTO `tbl_google` (`sno`, `type`, `google`) VALUES
(1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_group`
--

CREATE TABLE IF NOT EXISTS `tbl_group` (
  `sno` int(11) NOT NULL,
  `type` varchar(251) NOT NULL,
  `name` varchar(251) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `phone` varchar(111) NOT NULL,
  `fax` varchar(251) NOT NULL,
  `address` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_group`
--

INSERT INTO `tbl_group` (`sno`, `type`, `name`, `phone`, `fax`, `address`) VALUES
(1, 'bccbah@batelco.com.bh', '325425454', '17532333', '17533131', '<p>105, Al Baraka Building,<br /> Palace Avenue,<br /> Road No - 1802, Block - 318,<br /> Manama - Kingdom of Bahrain</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job`
--

CREATE TABLE IF NOT EXISTS `tbl_job` (
  `job_id` int(11) NOT NULL,
  `job_categery` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `tbl_job_category`
--

CREATE TABLE IF NOT EXISTS `tbl_job_category` (
  `sno` int(11) NOT NULL,
  `category` varchar(251) NOT NULL,
  `url` varchar(251) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_job_category`
--

INSERT INTO `tbl_job_category` (`sno`, `category`, `url`) VALUES
(1, 'Accounting', 'Accounting'),
(2, 'Sales', 'Sales'),
(3, 'Electrical', 'Electrical'),
(4, 'Information Technology', 'Information-Technology'),
(5, 'Administrator', 'Administrator'),
(6, 'CRM', 'CRM'),
(7, 'Security', 'Security');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_language_type`
--

CREATE TABLE IF NOT EXISTS `tbl_language_type` (
  `sno` int(11) NOT NULL,
  `type` varchar(251) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_language_type`
--

INSERT INTO `tbl_language_type` (`sno`, `type`) VALUES
(1, 'English'),
(2, 'Arabic');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_layout`
--

CREATE TABLE IF NOT EXISTS `tbl_layout` (
  `sno` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `image` varchar(251) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location_map`
--

CREATE TABLE IF NOT EXISTS `tbl_location_map` (
  `sno` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `image` varchar(251) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_month`
--

CREATE TABLE IF NOT EXISTS `tbl_month` (
  `sno` int(11) NOT NULL,
  `month` varchar(251) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_month`
--

INSERT INTO `tbl_month` (`sno`, `month`) VALUES
(1, 'January'),
(2, 'February'),
(3, 'March'),
(4, 'April'),
(5, 'May'),
(6, 'June'),
(7, 'July'),
(8, 'August'),
(9, 'September'),
(10, 'October'),
(11, 'November'),
(12, 'December');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE IF NOT EXISTS `tbl_news` (
`sno` int(11) NOT NULL,
  `title` varchar(111) NOT NULL,
  `image` varchar(111) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `url` varchar(251) NOT NULL,
  `status` enum('y','n') NOT NULL DEFAULT 'y'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`sno`, `title`, `image`, `description`, `date`, `url`, `status`) VALUES
(1, 'GURU POWRNAMI CELEBRATIONS', '', '<p>07-07-2011 Thursday to 13-07-2011 Wednesday<br /> Daily 6-45 am to 8-45 p.m \\"SAI SWACHARITHRA PARAYANAMU</p>', '2015-05-30', 'GURU-POWRNAMI-CELEBRATIONS', 'y'),
(2, 'GURU POWRNAMI CELEBRATIONS2', '', '<p>07-07-2011 Thursday to 13-07-2011 Wednesday<br /> Daily 6-45 am to 8-45 p.m \\"SAI SWACHARITHRA PARAYANAMU</p>', '2015-05-30', 'GURU-POWRNAMI-CELEBRATIONS2', 'y'),
(3, 'GURU POWRNAMI CELEBRATIONS3', '', '<p>08-07-2011 Friday to 13-07-2011 Sunday<br /> Daily 6-45 am to 8-45 p.m \\"SAI SWACHARITHRA PARAYANAMU</p>', '2015-05-30', 'GURU-POWRNAMI-CELEBRATIONS3', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_newsletter`
--

CREATE TABLE IF NOT EXISTS `tbl_newsletter` (
  `sno` int(11) NOT NULL,
  `newsletter` varchar(251) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_newsletter`
--

INSERT INTO `tbl_newsletter` (`sno`, `newsletter`, `date`) VALUES
(2, 'mohan@gmail.com', '2014-07-19'),
(3, 'santhosh@gmail.com', '2014-07-19'),
(6, 'yuvaraj950@gmail.com', '2014-07-21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_over_view`
--

CREATE TABLE IF NOT EXISTS `tbl_over_view` (
  `sno` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `type` varchar(251) NOT NULL,
  `bhk` varchar(251) NOT NULL,
  `size` varchar(251) NOT NULL,
  `price` varchar(251) NOT NULL,
  `tower` varchar(251) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_period`
--

CREATE TABLE IF NOT EXISTS `tbl_period` (
  `sno` int(11) NOT NULL,
  `period` varchar(251) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `tbl_priority`
--

CREATE TABLE IF NOT EXISTS `tbl_priority` (
  `sno` int(11) NOT NULL,
  `type` varchar(251) NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_priority`
--

INSERT INTO `tbl_priority` (`sno`, `type`, `priority`) VALUES
(1, 'English', 1),
(2, 'English', 2),
(3, 'English', 3),
(4, 'English', 4),
(5, 'English', 5),
(6, 'Arabic', 6),
(7, 'Arabic', 7),
(8, 'Arabic', 8),
(9, 'Arabic', 9),
(10, 'Arabic', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE IF NOT EXISTS `tbl_products` (
`sno` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `category` varchar(251) NOT NULL,
  `name` varchar(251) NOT NULL,
  `link` varchar(251) NOT NULL,
  `image` varchar(251) NOT NULL,
  `pdf` varchar(251) NOT NULL,
  `content` text NOT NULL,
  `content1` text NOT NULL,
  `content2` text NOT NULL,
  `url` varchar(251) NOT NULL,
  `url_cat` varchar(251) NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` enum('y','n') NOT NULL DEFAULT 'y'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`sno`, `cat_id`, `category`, `name`, `link`, `image`, `pdf`, `content`, `content1`, `content2`, `url`, `url_cat`, `date`, `status`) VALUES
(1, 0, '', 'Recent Activities', '', '430e6a56d899669913505936014f5899.jpg', '8c30058e7f8d5875aa43a99e34f86849.jpg', '<h2>Activities undertaken since its inception</h2>\r\n<p>The following activities are undertaken and completed with lord Sai baba&rsquo;s blessings.</p>\r\n<ul>\r\n<li>Sai satcharitra parayana mahayagnam</li>\r\n<li>Sai namasankirtana mahayagnam</li>\r\n<li>Sainama likita mahayagam</li>\r\n<li>Sai gyanajyothi mahayagam</li>\r\n<li>Sai chavidi utsavam</li>\r\n<li>Sai paduka utsavam</li>\r\n<li>Sai Samadhi utsavam</li>\r\n<li>Sai bhikshatana mahotsavam</li>\r\n<li>Sai dhuni aradhana mahotsavam</li>\r\n</ul>', '', '', 'Recent-Activities', '', '2015-05-30', 'y'),
(2, 0, '', 'Sai Parivar', '', 'fcdce795819095ecc72d073537f83dd1.jpg', '1d06ff4fc11f522ba86fcdf7572e180c.jpg', '<p>Following are the activities that are performed by us to meet the requirements of Saitattva pracharamu which is imperative for the present society.</p>\r\n<ul>\r\n<li>Sai satcharitra parayana mahayagnam</li>\r\n<li>Sai namasankirtana mahayagnam</li>\r\n<li>Sainama likita mahayagam</li>\r\n<li>Sai gyanajyothi mahayagam</li>\r\n<li>Sai chavidi utsavam</li>\r\n<li>Sai paduka utsavam</li>\r\n<li>Sai Samadhi utsavam</li>\r\n<li>Sai bhikshatana mahotsavam</li>\r\n<li>Sai dhuni aradhana mahotsavam</li>\r\n</ul>\r\n<p>For further assistance regarding arrangement of activities and pravachanas please feel free to contact.</p>\r\n<p>Sai srinivas<br /> 9030383838</p>', '', '', 'Sai-Parivar', '', '2015-05-30', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products_img`
--

CREATE TABLE IF NOT EXISTS `tbl_products_img` (
  `sno` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(251) NOT NULL,
  `image` varchar(251) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_projects`
--

CREATE TABLE IF NOT EXISTS `tbl_projects` (
  `sno` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `category` varchar(251) NOT NULL,
  `type_id` int(11) NOT NULL,
  `type_name` varchar(251) NOT NULL,
  `project_date` varchar(50) NOT NULL,
  `name` varchar(251) NOT NULL,
  `image` varchar(251) NOT NULL,
  `content` text NOT NULL,
  `top_news` varchar(251) NOT NULL,
  `priority` int(11) NOT NULL,
  `url` varchar(251) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_projects`
--

INSERT INTO `tbl_projects` (`sno`, `cat_id`, `category`, `type_id`, `type_name`, `project_date`, `name`, `image`, `content`, `top_news`, `priority`, `url`, `date`) VALUES
(1, 1, 'Apartments', 0, '', '', 'Rudhras Rainbow', '61522cd774171c1931430909114de6e6.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>', '0', 0, 'Rudhras-Rainbow', '2015-05-29'),
(2, 2, 'Venchures', 0, '', '', 'Mayuri', '9b74d676f988a2339cd129a0eefc979d.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>', '0', 0, 'Mayuri', '2015-05-29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project_details`
--

CREATE TABLE IF NOT EXISTS `tbl_project_details` (
  `sno` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `name` varchar(251) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(251) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project_location`
--

CREATE TABLE IF NOT EXISTS `tbl_project_location` (
  `sno` int(11) NOT NULL,
  `name` varchar(251) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_project_location`
--

INSERT INTO `tbl_project_location` (`sno`, `name`) VALUES
(1, 'HYDERABAD'),
(2, 'CHENNAI'),
(3, 'BANGALORE');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project_type`
--

CREATE TABLE IF NOT EXISTS `tbl_project_type` (
  `sno` int(11) NOT NULL,
  `type` varchar(251) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_project_type`
--

INSERT INTO `tbl_project_type` (`sno`, `type`) VALUES
(1, 'Compleated'),
(2, 'Upcoming'),
(3, 'Ongoing'),
(4, 'Current Projects');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_recycle_locations`
--

CREATE TABLE IF NOT EXISTS `tbl_recycle_locations` (
  `sno` int(11) NOT NULL,
  `name` varchar(251) NOT NULL,
  `email` varchar(251) NOT NULL,
  `phone` varchar(251) NOT NULL,
  `subject` varchar(251) NOT NULL,
  `block` varchar(251) NOT NULL,
  `road` varchar(251) NOT NULL,
  `area` varchar(251) NOT NULL,
  `message` text NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_recycle_locations`
--

INSERT INTO `tbl_recycle_locations` (`sno`, `name`, `email`, `phone`, `subject`, `block`, `road`, `area`, `message`, `date`) VALUES
(2, 'Yuvraj goud', 'yuvaraj950@gmail.com', '9505160420', 'Glass', 'Saileela Block', '15,kukatpally', 'kukatpally', 'Well project', '2014-08-08'),
(3, 'mohan', 'mohan@gmail.com', '+973 1753 1177', 'Paper', 'Manjila', '14,behrain', 'Behrain', 'Well all Knwon', '2014-08-08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_scrolling`
--

CREATE TABLE IF NOT EXISTS `tbl_scrolling` (
`sno` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `category` varchar(251) NOT NULL,
  `name` varchar(111) NOT NULL,
  `price` varchar(251) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(111) NOT NULL,
  `pdf` varchar(251) NOT NULL,
  `link` varchar(251) NOT NULL,
  `url` varchar(251) NOT NULL,
  `status` enum('y','n') NOT NULL DEFAULT 'y'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_scrolling`
--

INSERT INTO `tbl_scrolling` (`sno`, `cat_id`, `category`, `name`, `price`, `content`, `image`, `pdf`, `link`, `url`, `status`) VALUES
(1, 0, '', 'Anthaa Saimayam', '', '<p>The word Sai spread universally can be seen and heard everywhere. What is the power of the letters in the word Sai? Is it a charm or any mantra? The word Sai is ubiquitous which is used to name children at home or even enterprises in the society. The response to the matra Sai owes definitely to the power in the name Sai.  It is Sai&rsquo;s power that is invested everywhere. This is the absolute truth. This is the reason for the power which is spreading ceaselessly every second.</p>\r\n<p>No one can lead their life without thinking of his roopam or reciting his name. When we try to examine the reason behind this, Lord Sai says that our relationship is everlasting. If we are once in relationship with him, He will protect us endlessly in every birth.</p>\r\n<p>It is a boon for every devotee. The relation that is formed out of desires will lead us towards Sadguru who would show us the most enlightened path for our life. Lord Sai enthralled us and drew us closer by saying &ldquo;Utterance of my name with love is enough to fulfil their desires&rdquo;. He gave us dharsan as sadguru, to bond a relation which cannot be separated by anyone. We can attain peace and happiness by worshipping his roopam and surrendering ourselves completely by doing his Seva.</p>\r\n<p>He will be the almighty for one who serves him with Bhakti. For whoever considers him as Sadguru he will be Sachidhananda Samardha Sadguru. He is our mother who gave us birth and he is like our father. There is no place in this universe without him as he is the whole universe which is seen by us.</p>\r\n<p>The word Sai which is chanted and heard everywhere is a key to destroy our sins (sarvapapa haranam). Bhakti tends to change according to the situations. But when it comes to Sai, bhakti cannot be diverted. This is the reason behind the enormous growth in the number of Sai devotees. In every nook and corner lord Saibaba&rsquo;s temples are being established. Saitattva Pracharamu (activity) is taking place widely. It is not a plot which is lead by someone. In nature whatever happens has a reason. There is a reason beyond every happening.</p>\r\n<p>There is a reason behind this incarnation (avatar). There should be a solution for consequences that are taking place in the present society. Guru is only deemed capable of solving it. As said by Lord Krishna, Sai took a form (avatar) as a new God to re-establish Dharma.</p>\r\n<p>By never revealing his co-ordinates, incarnating as human, by setting Shirdhi as his platform and being creator of the universe he is named Sai by his devotees.</p>\r\n<p>There is no place in the whole universe without the creator himself. That is the reason why we can see the so called form Sai whose name is often recited. It would be a wild goose chase to search for the solution elsewhere when the same lies with us.</p>\r\n<p>So let us be happy by chanting Sairam.</p>', 'd2035cfe8d55097806c2fc10069d82f8.jpg', '07c3b5270c4d23f2e730bf69685dae39.jpg', '', 'Anthaa-Saimayam', 'y'),
(2, 0, '', 'Sai Sahavasam', '', '<p>The utterance or chanting of the word Sai itself gives pleasure. What else do we require other than being along with Sai? Sai devotees are pleased with lord&rsquo;s presence. The reason beyond this fondness is his unknown power. That is the reason why we experience happiness in his presence. Lord Sai says that his devotees come to him only with desires.</p>\r\n<p>Our journey continues with Sai till we reach our Mahaprasthanam (journey). What is the reason behind this? Did Sai entice us by reciting any mantras?</p>\r\n<p>No, we are in accord with him. The statement of lord Sai &ldquo;I would draw my devotees closer to me by any means&rdquo; remains imperishable.</p>\r\n<p>&ldquo;If someone needs my help or my suggestions I will answer them immediately &ldquo;(as said by Baba).</p>\r\n<p>By keeping up his word at that instant and even now, he stands as Samrat (king) among all the yogis. He is living incessantly in every devotee&rsquo;s heart. Sakhyatvam (sneham or friendship) which is oneof the navavidha bhakti marga drives us to surrender our soul to God.</p>\r\n<p>We can see how parabrahma swaroopa Sai is making us to move towards him. It&rsquo;s not only his Mahima or his words which call us. We go to his darshan on suggestion from someone and gain his anugraha (anugrahaprapti). For that very reason when we consider lord Sai&rsquo;s charithra, we come to know that many devotees such as bhakta Mahalsapati along with Shyama, Tattya Kothe Patel, Dasaganu Maharaj, Radhakrishna Mayee, Hemadhipanth and others realized a wonderful experience with baba&rsquo;s association (sahacharyam). Being familiar to him is a fortune. To follow him is a boon. To spend time with him is only because of one&rsquo;s former birth&rsquo;s meritorious actions. Getting an opportunity to serve (seva) him adds meaning and value to life.</p>\r\n<p>This is the reason why we should consider him as our role model through which we attain wonderful pleasure. When we pay visit to lord Sai our body and heart should be thrilled with excitement and joy. Then we must pray Sai with ecstasy from bottom of our heart. To realize such experience we should practice the same.</p>\r\n<p>Association (sahavasam) with lord Sai can be obtained by parayana (regular study) which must be done with practice. Then we can reform ourselves by eliminating vices. It is a requisite for every Sai devotee. Regular habit of spending enough time daily will lead everyone to realize Sai sahavasam.</p>', '647a40f6de91a0ec4f9a8536729e3c67.jpg', '9a0ba69a0650bb16ea358cd0c0eff06d.jpg', '', 'Sai-Sahavasam', 'y'),
(3, 0, '', 'Sai Swarupam', '', '<p>Sadguru took form as Sai swarupam to bless his devotees with God&rsquo;s leela vinoda.</p>\r\n<p>He never dressed himself with pattu pitambaram (saffron robes made out of silk) or embellished himself with ornaments. But there is a hidden power (divya tejassu) which draws us towards him. When we see lord with Bhakti we can&rsquo;t stop staring. When we feel lord as Sadguru and do his Seva we realize a pleasant experience.</p>\r\n<p>Sai devotees undergo numerous experiences.  We take great pleasure always by recalling lord&rsquo;s idol or by seeing his photographs. It is not an overstatement to say that Shirdhi sai is recognized not only in India but to the whole world. Lord Sai baba when alive blessed a devotee with swapna shakshatkaram which shows a replica of an unseen bhangima (posture) and also which helped in the making of a marble statue. In shirdi it took a form in Samadhi mandir and is serving devotees as a kalpavriksha. It is today in every town cherished as kamadhenu. The Idol exhibits the veerasana pose of lord Sai with right leg resting above the left. The inner meaning of this posture cannot be explained in words. Sadgurus leelatattva is understood only when right leg&rsquo;s thumb is seen across the gap of his fingers. One who thinks normally expects only his darshan. The one who is in search of Gyanamarga surrenders himself to the divine feet completely.</p>\r\n<p>The left foot is considered to fulfil only our desires. Right foot helps us by providing the required atma sakshatkaram and jenmarahityam. But we mostly pay attention to the left foot. The inner meaning of right foot can be known only by overlooking Maya. By fulfilling the desires with the left foot and by slowly drawing interest towards the right by providing Parinati and one who leads his life by following Gurumarga is absolved from the bhavasagara by the blessings of sai. This is the essence of the sitting posture of the lord Sai.</p>\r\n<p>The sitting posture of lord Sai conveys a message. The ultimate aim is to provide Gyanamarga by setting Guruparampara as a platform and by practising Nishkama karma and the parabrahma personifying seva is nothing but sai swarupam.</p>\r\n<p>The responsibility of Sai devotee is to lead life by recalling Sai swaroopam and being aware of this ultimate truth. So, let&rsquo;s be happy by chanting sairam.</p>', '1e7e798880cbabb53cfa1ec8d04dfb16.jpg', '880709e4d1b9bd476fa58fa9aa2a5fdc.jpg', '', 'Sai-Swarupam', 'y'),
(4, 0, '', 'Sai Bhavishya Vani', '', '<p>Lord Saibaba&rsquo;sincarnation (avatar) is very significant.One can get answer for all the problems with the help of his biography, JeevithaCharitha.When we observe closely lord Sai protected his devotees from many dangers by keeping their future in mind. Some devotees of Baba opined that there is no need to believe inhoroscope. There are some devotees who follow suggestions given by the astrologers regarding theproblemsindicated by horoscope. There are many incidents (leelas) in Baba&rsquo;s life where he gave a detailed viewon the horoscope of the devotees who came to him.</p>\r\n<p>Baba warned ThattyaKote Patel by saying that the day was not favourable to him and asked him to take Shyama along with him when he said that he would go to the fair. By not considering Baba&rsquo;s words Thattya went to the fair where he injured himself by falling from his bullock cart. The same thing happened with a European who injured himself in an accident.</p>\r\n<p>SavithribaiTendulkarapproachedSaibabaafter she met astrologersregarding theoutcome of his son&rsquo;s performance in his medical examination who told that it was not in favour to him. But Baba assured that he would succeed in the exam only when he studied by having faith on him.</p>\r\n<p>In this leelawe come to know that Baba never said that following astrology is wrong but he asked to have faith on him.</p>\r\n<p>Guru is the only person who can reduce Karma. Any kind of Karma can be eliminated only when one surrenders oneself completely to Guru. Baba was never against traditions, practices and performing rituals. Baba used to bless his devotees accordingto their inner emotional feelings.Baba showered his grace in accordance with theworthiness ofhisdevotees.</p>\r\n<p>Baba&rsquo;s devotee Gopal Narayan Ambadekar (resident of Pune)wanted to end his life in Shirdidue to his miserable circumstances and not having enough dare to lead his life as he was not successful in getting a job even after many trials. Baba by taking SagunamehrNayak&rsquo;s help made Gopal Narayan to read Akalkothmaharaj&rsquo;s biography (charitra) which taught him that one should experience their karma andthat committing suicide is regarded as the utmost sin. Soon with Baba&rsquo;s inspiration he excelled in Astrology. He led his entire life as Baba&rsquo;s servant (sevakudu).This is the fact which is not only related to former time but still prevalent in the words of his true devotees which are said out of Baba&rsquo;s blessings through which may lives are being filled with happiness.</p>\r\n<p>Lord Sai is still keeping his vow &lsquo;&rsquo;if someone is in need of my suggestions or help I will answer them immediately&rsquo;&rsquo;.</p>\r\n<p>Baba used to warn his devotees not only about the periling danger but in many contexts Baba said that they were experiencing Karma because of former birth&rsquo;s actions. Baba confined Karma in the cases of Bhimaji Patel, Pillai and among others who were suffering from illness. Lord Sai Baba he used to cure them with Vibhuti (sacred ash), for giving his devotees a better life with his divine touch, and by taking bhiksha and Dhakshina from them or by teaching the remedy for that problem. &ldquo;Yadbhavam Tad bhavathi &ldquo;(you become what you think) (as is the feeling, so is the result). In accord with our Bhavam (inner meaning) lord Sai&rsquo;s grace will be showered on us. As we see every god in him there is nothing wrong in approaching him for the remedies which confine our GrahaDosha (remedies for the planets) and by paying compensation to him.</p>', '1c6d8415f4a0ab6029196fd611c71d11.jpg', '99f152bcf4118a9a1129602366e2ec17.jpg', '', 'Sai-Bhavishya-Vani', 'y'),
(5, 0, '', 'Nenu Undaga BhayamEla', '', '<p>Remedy for Sai Baba&rsquo;s devotees who are suffering from the doosha (harmful effect) related to Ravi (planet sun).</p>\r\n<p>As being lord Sainadha&rsquo;s (Akhilanda koti brahmanda naakadu) devotees his blessings are always with us. In this human form we are followed by Karma (cause and effect) where Graha doosham acts as a causative factor. Guru is only the one who can reduce our Karma. That is the reason from that day to this day he is reducing the Karma of the needful who are approaching him.</p>\r\n<p>Everyone has to experience the Agama, Sanchita and Prarabdha karmas in the life. As a Guru is aware of them, he suggests the deeds to be performed in order to reduce the karmas.</p>\r\n<p><span class=\\"paracol\\">Agama karma :</span> the actions that we are planning for the future. It is the actions that may be achieved or not depending on the choices (free will) that we make now and made in the past.</p>\r\n<p><span class=\\"paracol\\">Sanchita karma :</span> is the sum of all past actions performed in this lifetime and former lifetime.</p>\r\n<p><span class=\\"paracol\\">Prarabdha karma :</span> is the part of Sanchita karma which is going to be experienced during this lifetime.</p>\r\n<p>By uncovering these facts to Guru who can confine the bad effects by making us to perform virtuous actions which are done as a remedy, Sai made his devotees to do various deeds as a remedy by which Karma (effect) can be reduced.</p>\r\n<p>Let&rsquo;s see the remedies for the people who are suffering from Ravi doosham which can be reduced by doing Sai seva. Planet Ravi (sun) is responsible for having best life. If Ravi is situated in favourable position then the person can attain success in every aspect. One will be blessed with good health, good body structure, job, status and with good knowledge. If we take a closer look there are people who face various problems daily by which they tend to change their mind frequently by approaching different persons. In the process they are not aware of losing their valuable time and money.</p>\r\n<p>Sai suggested a remedy then as he did not want his devotees to get exhausted by such activities. Sai wanted some dishes to be prepared such as chapatti made out of Godhuma (wheat), Godhuma halwa (sweet), Godhuma pindhi (flour), Chapatti, kesari ( south Indian sweet). Baba used to serve the prepared food first to the servants (sevakulu) and to the devotees who came to him and later he used to have that food. It is an easiest way of dealing with a problem. Lord surya bhagavan is a form of lord Narayana. Sai, who is himself knowledge personified, used to mill the wheat grains to highlight the aspect of eliminating surya doosha. It is recommended to offer food to Baba daily (which is made out of Godhumulu) (wheat flour) for persons who are experiencing Ravigraha doosham. Along with Godhumulu, cow&rsquo;s milk, cow&rsquo;s ghee, jaggery, and sugar can be used.</p>\r\n<p>Food (prasadam) should be prepared out of wheat flour which must be distributed among the devotees. It can be used for the events such as ahisekham, pooja, harathi which take place early in the morning and for the events such as Special poojas, Sandhyaarathi and in bhajana which take place at sunset.</p>\r\n<p>In case if one cannot go to the temple they can offer food to any living being. One should practice this regularly for 40 days without missing a single day. We can consider Lord saibaba&rsquo;s roopam in our pet animals and offer food to them. Food can be offered to our pets such as fishes, tortoise, dog, cat, birds along with other living beings. The most important factor is to have faith while following these activities. Don&rsquo;t wait for the result. One should have a belief that in every living form God is present. People with Birth stars like Krittika, Uttara, Uttaraashada, and persons born in Simha lagnam, Ravi mahardasha, Anthardasha, Ravi dasha can follow these remedies immediately by keeping faith in Baba. Then Lord Sai himself being Ravi Graha will confine our doosham (harmful effect). So, let&rsquo;s start doing this activity which is followed by many devotees. To experience Sai baba&rsquo;s grace lets chant Sairam and be happy.</p>', 'c9e48fc99d9d891c1affe3b1e5c48741.jpg', '6c8c913b9b87eb77c23893fa14b76b8b.jpg', '', 'Nenu-Undaga-BhayamEla', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services`
--

CREATE TABLE IF NOT EXISTS `tbl_services` (
  `sno` int(11) NOT NULL,
  `type` varchar(251) NOT NULL,
  `name` varchar(111) NOT NULL,
  `year` varchar(251) NOT NULL,
  `category` varchar(251) NOT NULL,
  `image` varchar(111) NOT NULL,
  `arabic` varchar(251) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `status` enum('y','n') NOT NULL DEFAULT 'y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_services`
--

INSERT INTO `tbl_services` (`sno`, `type`, `name`, `year`, `category`, `image`, `arabic`, `description`, `date`, `status`) VALUES
(1, 'English', 'January', '2014', '1st Quarter', '4ce4bc48785513edd3c709f0ecefac5a.pdf', 'd2b4399d763dffedcf677b3d9d63b25d.pdf', '0', '2014-07-25', 'y'),
(2, 'English', 'February', '2014', '2nd Quarter', '1641df4da3a4e54dc8d919abae1845e3.pdf', 'f3e6ce76cfa76518531bb6860a1d0427.pdf', '0', '2014-07-25', 'y'),
(3, 'Arabic', 'February', '2014', '1st Quarter', 'dca3f0a8ec4319b18a5848ff32ae0d1b.pdf', 'd4d8e229d0a38319b25ab4ef33d7e8fe.pdf', '0', '2014-07-25', 'y'),
(4, 'Arabic', 'November', '2013', '3rd Quarter', 'bc239a5f6ccf8a7591aac0f0e411ecd7.pdf', '0c733ea20c5788487ef0da924bb68d24.pdf', '', '2014-07-25', 'y'),
(5, 'Arabic', 'March', '2014', '4th Quarter', 'c6949a4067a25c7c8b4d12118b5ab68f.pdf', '14302bdc8ee8ca36cacd3b07e095cb25.pdf', '0', '2014-07-25', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services_india`
--

CREATE TABLE IF NOT EXISTS `tbl_services_india` (
  `id` int(11) NOT NULL,
  `service_india` int(11) NOT NULL,
  `name` varchar(111) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_setting`
--

CREATE TABLE IF NOT EXISTS `tbl_setting` (
  `setting_id` int(11) NOT NULL,
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
  `shipping_charge` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_setting`
--

INSERT INTO `tbl_setting` (`setting_id`, `company_title`, `default_email`, `currentyr`, `mobile`, `meta_title`, `meta_desc`, `fblink`, `twitter`, `Linkedin_link`, `google_link`, `you_tube`, `instagram`, `Pinterestt`, `default_address`, `meta_keywords`, `merchant_id`, `working_key`, `shipping_charge`) VALUES
(1, 'Rrventure Sand Developers', 'info@rrventuresanddevelopers.com', 2013, '0863 6565555', '0', '0', 'http://facebook.com', 'https://twitter.com/', 'https://www.linkedin.com/', 'http://google.com/', 'http://www.youtube.com/', '0', '0', '<p><em class="icon-building"></em>RR VENTURES &amp; DEVELOPERS<br /> <em class="icon-building"></em>6-16-5, 16/3<br /> <em class="icon-building"></em>Jai Krishna Bhavan<br /> <em class="icon-building"></em>Aurandalpet, Guntur- 522 002</p>', '0', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE IF NOT EXISTS `tbl_slider` (
  `sno` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `image` varchar(251) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_specifications`
--

CREATE TABLE IF NOT EXISTS `tbl_specifications` (
  `sno` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_strategies`
--

CREATE TABLE IF NOT EXISTS `tbl_strategies` (
`id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `strategies_name` varchar(111) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_strategies`
--

INSERT INTO `tbl_strategies` (`id`, `service_id`, `strategies_name`, `content`, `date`) VALUES
(1, 0, 'GETTING AASHIRWAD FROM ELDERS.', '', '2015-05-30'),
(2, 0, 'DAILY OFFERING PRAYERS TO GOD.', '', '2015-05-30'),
(3, 0, 'PROTECTING THE BROTHERHOOD.', '', '2015-05-30'),
(4, 0, 'PROTECTING THE CULTURE AND NATIVITY.', '', '2015-05-30'),
(5, 0, 'OFFERING PRAYERS TO GOMAATHA.', '', '2015-05-30'),
(6, 0, 'BUT ALL THESE WITH A SINLESS HEART.', '', '2015-05-30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_support`
--

CREATE TABLE IF NOT EXISTS `tbl_support` (
  `sno` int(11) NOT NULL,
  `type` varchar(251) NOT NULL,
  `phone` varchar(111) NOT NULL,
  `fax` varchar(251) NOT NULL,
  `address` varchar(251) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_support`
--

INSERT INTO `tbl_support` (`sno`, `type`, `phone`, `fax`, `address`) VALUES
(2, 'English', '+973 17531 010', '+973 17530 659', 'Legal'),
(3, 'English', '+973 1753 5030', '+973 1753 2912', 'Information Technology'),
(4, 'English', '+973 1753 1177', '+973 1753 2912', 'Human Resources'),
(5, 'English', '+973 1753 0394', '+973 1753 2912', 'Audit'),
(6, 'English', '+973 1753 1124', '+973 1753 6063', 'Accounts'),
(7, 'Arabic', '+973 1753 1124', '+973 1753 6063', 'الحسابات'),
(8, 'Arabic', '+973 1753 0394', '+973 1753 2912', 'التدقيق'),
(9, 'Arabic', '+973 1753 1177', '+973 1753 2912', 'الموارد البشرية'),
(10, 'Arabic', '+973 1753 5030', '+973 1753 2912', 'تقنية المعلومات'),
(11, 'Arabic', '+973 17531 010', '+973 17530 659', 'القانون'),
(12, 'Arabic', '+97317530 808', '+973 17530 818', 'مكاتب الشركاء');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonials`
--

CREATE TABLE IF NOT EXISTS `tbl_testimonials` (
  `sno` int(11) NOT NULL,
  `name` varchar(111) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(111) NOT NULL,
  `link` varchar(251) NOT NULL,
  `qualification` varchar(251) NOT NULL,
  `url` varchar(251) NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` enum('y','n') NOT NULL DEFAULT 'y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_testimonials`
--

INSERT INTO `tbl_testimonials` (`sno`, `name`, `content`, `image`, `link`, `qualification`, `url`, `date`, `status`) VALUES
(1, 'Welcome To Rainbow Welfare Organization', '<p>Nunc lacus metus, posuere eget, lacinia eu, varius quis, libero. Aliquam nonummy adipiscing augue. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede.</p>\r\n<p>Mauris et orci. Aenean nec lorem. In porttitor. Donec laoreet nonummy augue. Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy. Fusce aliquet pede non pede. Suspendisse dapibus lorem pellentesque magna. Integer nulla.</p>', '', '0', '0', 'Welcome-To-Rainbow-Welfare-Organization', '2015-03-25', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_uploads`
--

CREATE TABLE IF NOT EXISTS `tbl_uploads` (
  `sno` int(11) NOT NULL,
  `name` varchar(251) NOT NULL,
  `image_url` varchar(251) NOT NULL,
  `image` varchar(251) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users_registration`
--

CREATE TABLE IF NOT EXISTS `tbl_users_registration` (
  `sno` int(11) NOT NULL,
  `name` varchar(251) NOT NULL,
  `username` varchar(251) NOT NULL,
  `password` varchar(251) NOT NULL,
  `email` varchar(251) NOT NULL,
  `mobile` varchar(251) NOT NULL,
  `city` varchar(251) NOT NULL,
  `address` text NOT NULL,
  `created_date` varchar(50) NOT NULL,
  `updated_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users_registration`
--

INSERT INTO `tbl_users_registration` (`sno`, `name`, `username`, `password`, `email`, `mobile`, `city`, `address`, `created_date`, `updated_date`) VALUES
(1, 'Mohan', 'mohan', 'mohan123', 'mohan@gmail.com', '8886345252', 'Hyderabad', '<p>Hyderabad,main road</p>', '2014-10-01', '2014-10-01'),
(2, 'Bhaskar', 'bhaskar', 'bhaskar123', 'bhaskar@gmail.com', '9505160420', 'Hyderabad', '<p>Hyderanad,Bowenpally</p>', '2014-10-02', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vender_registration`
--

CREATE TABLE IF NOT EXISTS `tbl_vender_registration` (
  `sno` int(11) NOT NULL,
  `name` varchar(251) NOT NULL,
  `year` varchar(251) NOT NULL,
  `property` varchar(251) NOT NULL,
  `number` varchar(251) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video`
--

CREATE TABLE IF NOT EXISTS `tbl_video` (
`sno` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `category` varchar(251) NOT NULL,
  `type` varchar(251) NOT NULL,
  `name` varchar(251) NOT NULL,
  `month` varchar(251) NOT NULL,
  `year` varchar(251) NOT NULL,
  `link` varchar(251) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_video`
--

INSERT INTO `tbl_video` (`sno`, `cat_id`, `category`, `type`, `name`, `month`, `year`, `link`, `date`) VALUES
(1, 0, '', '0', 'Sai Amritwani Telugu', '0', '0', 'https://www.youtube.com/watch?v=n4QTAZsZNDY&list=RDn4QTAZsZNDY', '2015-06-01'),
(2, 0, '', '0', 'Om Sai Sai Hari Om Sai Sai', '0', '0', 'https://www.youtube.com/watch?v=E_5-Nzouvgw', '2015-06-01'),
(3, 0, '', '0', 'Sai Ram Sai Shyam Sai Bhagwan ', '0', '0', 'https://www.youtube.com/watch?v=B7fVPFk3sEM', '2015-06-01'),
(4, 0, '', '0', 'Shirdi Sai Baba Full Songs', '0', '0', 'https://www.youtube.com/watch?v=wgpAp4HNZbg', '2015-06-01'),
(5, 0, '', '0', 'MOST POPULAR SAI BHAJAN', '0', '0', 'https://www.youtube.com/watch?v=7VGc6rJxv8A', '2015-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_view_type`
--

CREATE TABLE IF NOT EXISTS `tbl_view_type` (
  `sno` int(11) NOT NULL,
  `type` varchar(251) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_view_type`
--

INSERT INTO `tbl_view_type` (`sno`, `type`) VALUES
(1, 'Premium'),
(2, 'Regular');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_why_ramky`
--

CREATE TABLE IF NOT EXISTS `tbl_why_ramky` (
  `sno` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ipadd`
--
ALTER TABLE `ipadd`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_ip`
--
ALTER TABLE `login_ip`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_address`
--
ALTER TABLE `tbl_address`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
 ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_agency`
--
ALTER TABLE `tbl_agency`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_amentics`
--
ALTER TABLE `tbl_amentics`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_apartments`
--
ALTER TABLE `tbl_apartments`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_area`
--
ALTER TABLE `tbl_area`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_awards`
--
ALTER TABLE `tbl_awards`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_bin_locations`
--
ALTER TABLE `tbl_bin_locations`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_brochure`
--
ALTER TABLE `tbl_brochure`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_careers`
--
ALTER TABLE `tbl_careers`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_careers_job`
--
ALTER TABLE `tbl_careers_job`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_chammel_partner`
--
ALTER TABLE `tbl_chammel_partner`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_clients`
--
ALTER TABLE `tbl_clients`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_client_category`
--
ALTER TABLE `tbl_client_category`
 ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_company_type`
--
ALTER TABLE `tbl_company_type`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_content`
--
ALTER TABLE `tbl_content`
 ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `tbl_corporate`
--
ALTER TABLE `tbl_corporate`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_country`
--
ALTER TABLE `tbl_country`
 ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `tbl_enquiry_form`
--
ALTER TABLE `tbl_enquiry_form`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_facts`
--
ALTER TABLE `tbl_facts`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_feavideo`
--
ALTER TABLE `tbl_feavideo`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_floor_planes`
--
ALTER TABLE `tbl_floor_planes`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_google`
--
ALTER TABLE `tbl_google`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_group`
--
ALTER TABLE `tbl_group`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_job`
--
ALTER TABLE `tbl_job`
 ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `tbl_job_category`
--
ALTER TABLE `tbl_job_category`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_language_type`
--
ALTER TABLE `tbl_language_type`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_layout`
--
ALTER TABLE `tbl_layout`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_location_map`
--
ALTER TABLE `tbl_location_map`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_month`
--
ALTER TABLE `tbl_month`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_newsletter`
--
ALTER TABLE `tbl_newsletter`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_over_view`
--
ALTER TABLE `tbl_over_view`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_period`
--
ALTER TABLE `tbl_period`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_priority`
--
ALTER TABLE `tbl_priority`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_products_img`
--
ALTER TABLE `tbl_products_img`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_projects`
--
ALTER TABLE `tbl_projects`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_project_details`
--
ALTER TABLE `tbl_project_details`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_project_location`
--
ALTER TABLE `tbl_project_location`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_project_type`
--
ALTER TABLE `tbl_project_type`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_recycle_locations`
--
ALTER TABLE `tbl_recycle_locations`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_scrolling`
--
ALTER TABLE `tbl_scrolling`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_services`
--
ALTER TABLE `tbl_services`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_services_india`
--
ALTER TABLE `tbl_services_india`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
 ADD PRIMARY KEY (`setting_id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_specifications`
--
ALTER TABLE `tbl_specifications`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_strategies`
--
ALTER TABLE `tbl_strategies`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_support`
--
ALTER TABLE `tbl_support`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_testimonials`
--
ALTER TABLE `tbl_testimonials`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_users_registration`
--
ALTER TABLE `tbl_users_registration`
 ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_video`
--
ALTER TABLE `tbl_video`
 ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_address`
--
ALTER TABLE `tbl_address`
MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_apartments`
--
ALTER TABLE `tbl_apartments`
MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_awards`
--
ALTER TABLE `tbl_awards`
MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_clients`
--
ALTER TABLE `tbl_clients`
MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_content`
--
ALTER TABLE `tbl_content`
MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_scrolling`
--
ALTER TABLE `tbl_scrolling`
MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_strategies`
--
ALTER TABLE `tbl_strategies`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_video`
--
ALTER TABLE `tbl_video`
MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
