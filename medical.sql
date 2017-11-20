-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2017 at 07:10 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_salary`
--

CREATE TABLE `employee_salary` (
  `emp_sal_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `present_sal` float NOT NULL,
  `prev_sal` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `salary_detail`
--

CREATE TABLE `salary_detail` (
  `salary_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `salary_date` varchar(250) NOT NULL,
  `salary_amt` float NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `td_assign_route`
--

CREATE TABLE `td_assign_route` (
  `asign_id` int(11) NOT NULL,
  `empname` varchar(100) NOT NULL,
  `rname` varchar(100) NOT NULL,
  `rdate` varchar(100) NOT NULL,
  `addate` varchar(100) NOT NULL,
  `adby` varchar(150) NOT NULL,
  `active` int(11) NOT NULL,
  `active_date` varchar(200) NOT NULL,
  `inactive_date` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `td_bank`
--

CREATE TABLE `td_bank` (
  `bank_id` int(11) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `branch_name` varchar(255) NOT NULL,
  `acc_no` varchar(255) NOT NULL,
  `ifsc_no` varchar(100) NOT NULL,
  `micr_no` varchar(100) NOT NULL,
  `addate` varchar(255) NOT NULL,
  `adby` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `td_bank`
--

INSERT INTO `td_bank` (`bank_id`, `bank_name`, `branch_name`, `acc_no`, `ifsc_no`, `micr_no`, `addate`, `adby`) VALUES
(1, 'STATE BANK OF INDIA', 'GARIA', '31086598233', 'SBIN98233', '84995884', '2017-10-17', 'subadmin1');

-- --------------------------------------------------------

--
-- Table structure for table `td_client`
--

CREATE TABLE `td_client` (
  `cl_id` int(11) NOT NULL,
  `clname` varchar(255) NOT NULL,
  `clemail` varchar(255) NOT NULL,
  `clphn` varchar(255) NOT NULL,
  `clpan` varchar(255) NOT NULL,
  `cladd` text NOT NULL,
  `addate` varchar(255) NOT NULL,
  `adby` varchar(255) NOT NULL,
  `cgst` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `td_client`
--

INSERT INTO `td_client` (`cl_id`, `clname`, `clemail`, `clphn`, `clpan`, `cladd`, `addate`, `adby`, `cgst`) VALUES
(1, 'Sourav Samanta', 'sourav.projukti@gmail.com', '08335887999', 'GDJJ636737U', '24 green view', '2017-10-17', 'subadmin1', '19GDHHHDJ738893'),
(2, 'Bipin Patra', 'bipin@gmail.com', '8335887999', 'CBKDJLK897', 'Kolkata , Garia                                ', '', '', '19CBKDJLK89782899');

-- --------------------------------------------------------

--
-- Table structure for table `td_company`
--

CREATE TABLE `td_company` (
  `cid` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `cemail` varchar(255) NOT NULL,
  `cphn` varchar(255) NOT NULL,
  `cpan` varchar(255) NOT NULL,
  `cgst` varchar(255) NOT NULL,
  `cadd` text NOT NULL,
  `pic` varchar(255) NOT NULL,
  `addate` varchar(255) NOT NULL,
  `adby` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `td_company`
--

INSERT INTO `td_company` (`cid`, `cname`, `cemail`, `cphn`, `cpan`, `cgst`, `cadd`, `pic`, `addate`, `adby`) VALUES
(1, 'OM MEDICAL INSTRUMENT', 'ommed@gmail.com', '0123456789', 'CPJP0023E', '19CPJP0023E2345', 'KOLKATA, 700084                                ', 'demo.jpg', '2017-10-17', 'subadmin1');

-- --------------------------------------------------------

--
-- Table structure for table `td_employee`
--

CREATE TABLE `td_employee` (
  `emp_id` int(11) NOT NULL,
  `emptype` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phn` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `empdesig` varchar(255) NOT NULL,
  `addrs` text NOT NULL,
  `pic` varchar(255) NOT NULL,
  `addate` varchar(255) NOT NULL,
  `adby` varchar(255) NOT NULL,
  `emp_sal` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `td_expense`
--

CREATE TABLE `td_expense` (
  `exp_id` int(11) NOT NULL,
  `expname` varchar(255) NOT NULL,
  `expdate` varchar(255) NOT NULL,
  `expamnt` varchar(255) NOT NULL,
  `addate` varchar(255) NOT NULL,
  `adby` varchar(255) NOT NULL,
  `advance` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `td_finance`
--

CREATE TABLE `td_finance` (
  `finance_id` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL,
  `bill_no` varchar(250) NOT NULL,
  `cb_no` varchar(250) NOT NULL,
  `lf_no` varchar(250) NOT NULL,
  `finance_type` varchar(250) NOT NULL,
  `transaction_type` varchar(250) NOT NULL,
  `amount` float NOT NULL,
  `entry_date` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `td_finance`
--

INSERT INTO `td_finance` (`finance_id`, `bill_id`, `bill_no`, `cb_no`, `lf_no`, `finance_type`, `transaction_type`, `amount`, `entry_date`) VALUES
(1, 1, 'P001', 'CB/P/11710', 'LF/P/11710', 'Purchase', 'Debit', 8000, '2017-10-17'),
(2, 1, '00000001', 'CB/S/11710', 'LF/S/11710', 'Sale', 'Credit', 1203, '2017-10-17'),
(3, 1, 'P001', 'CB/PR/11710', 'LF/PR/11710', 'Purchase Return', 'Credit', 300, '2017-10-17'),
(4, 1, 'P001', 'CB/PR/11710', 'LF/PR/11710', 'Purchase Return', 'Credit', 275, '2017-10-17'),
(5, 2, '00000002', 'CB/S/21810', 'LF/S/21810', 'Sale', 'Credit', 1947, '2017-10-18');

-- --------------------------------------------------------

--
-- Table structure for table `td_incentives`
--

CREATE TABLE `td_incentives` (
  `inc_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `inc_range` varchar(255) DEFAULT NULL,
  `extra_price_unit` varchar(255) DEFAULT NULL,
  `incentives_unit` varchar(255) DEFAULT NULL,
  `incentive_item_total` varchar(255) DEFAULT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `bill_no` varchar(255) DEFAULT NULL,
  `earn_date` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `td_inc_settings`
--

CREATE TABLE `td_inc_settings` (
  `incset_id` int(11) NOT NULL,
  `p_range` varchar(255) NOT NULL,
  `inc_per` float NOT NULL,
  `min_range` int(11) NOT NULL,
  `max_range` int(11) NOT NULL,
  `addate` varchar(255) NOT NULL,
  `adby` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `td_purchase_bill`
--

CREATE TABLE `td_purchase_bill` (
  `p_bill_id` int(11) NOT NULL,
  `p_bill_no` varchar(255) NOT NULL,
  `purchase_total` float NOT NULL,
  `p_bill_total` varchar(255) NOT NULL,
  `p_bill_date` varchar(255) NOT NULL,
  `p_bill_creator` varchar(255) NOT NULL,
  `p_bill_creation_date` varchar(255) NOT NULL,
  `sl_no` varchar(200) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `returnstat` int(11) NOT NULL,
  `returnAmt` varchar(255) DEFAULT NULL,
  `due_amt` varchar(255) NOT NULL,
  `notify` int(11) NOT NULL,
  `p_bill_total_sale` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `td_purchase_bill`
--

INSERT INTO `td_purchase_bill` (`p_bill_id`, `p_bill_no`, `purchase_total`, `p_bill_total`, `p_bill_date`, `p_bill_creator`, `p_bill_creation_date`, `sl_no`, `supplier_name`, `returnstat`, `returnAmt`, `due_amt`, `notify`, `p_bill_total_sale`) VALUES
(1, 'P001', 8000, '7425', '2017-10-16', 'subadmin1', '2017-10-17 12:03:30', '1', '1', 1, '275', '', 0, '9440');

-- --------------------------------------------------------

--
-- Table structure for table `td_purchase_item`
--

CREATE TABLE `td_purchase_item` (
  `item_name` text,
  `item_unit_p_price` varchar(255) DEFAULT NULL,
  `item_p_qty` int(11) DEFAULT NULL,
  `item_p_total_amt` varchar(255) DEFAULT NULL,
  `item_s_price` varchar(255) DEFAULT NULL,
  `item_p_gst` varchar(255) DEFAULT NULL,
  `item_p_sgst` varchar(255) DEFAULT NULL,
  `item_p_unit` varchar(255) DEFAULT NULL,
  `item_s_total` varchar(255) DEFAULT NULL,
  `item_id` int(11) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `item_single_p_wgst` varchar(255) DEFAULT NULL,
  `item_single_p_wogst` varchar(255) DEFAULT NULL,
  `ret_date` varchar(255) DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `return_unit` varchar(255) DEFAULT NULL,
  `return_price` varchar(255) DEFAULT NULL,
  `itempqtyorig` varchar(255) DEFAULT NULL,
  `itempamtorig` varchar(255) DEFAULT NULL,
  `return_type` varchar(255) DEFAULT NULL,
  `p_date` varchar(255) DEFAULT NULL,
  `item_p_igst` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `td_purchase_item`
--

INSERT INTO `td_purchase_item` (`item_name`, `item_unit_p_price`, `item_p_qty`, `item_p_total_amt`, `item_s_price`, `item_p_gst`, `item_p_sgst`, `item_p_unit`, `item_s_total`, `item_id`, `pid`, `item_single_p_wgst`, `item_single_p_wogst`, `ret_date`, `remark`, `return_unit`, `return_price`, `itempqtyorig`, `itempamtorig`, `return_type`, `p_date`, `item_p_igst`) VALUES
('KNEE CAP', '25', 88, '2200', '0', '9', '9', '2', '2950', 1, 1, '29.5', '25', '2017-10-17', 'No Need', '12', '300', '100', '2500', 'Purchase', '2017-10-17', '0'),
('WRIST BAND', '55', 95, '5225', '0', '0', '0', '2', '6490', 2, 1, '64.9', '55', '2017-10-17', 'No Need', '5', '275', '100', '5500', 'Purchase', '2017-10-17', '18');

-- --------------------------------------------------------

--
-- Table structure for table `td_purchase_payment`
--

CREATE TABLE `td_purchase_payment` (
  `sp_id` int(11) NOT NULL,
  `bill_no` varchar(200) NOT NULL,
  `payable_amt` float NOT NULL,
  `paid_amt` float NOT NULL,
  `pay_date` varchar(255) NOT NULL,
  `notify` int(11) NOT NULL,
  `amt_due` float NOT NULL,
  `particular` text NOT NULL,
  `next_pay_date` varchar(255) DEFAULT NULL,
  `pay_through` varchar(255) NOT NULL,
  `trans_no` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `td_return_details`
--

CREATE TABLE `td_return_details` (
  `retdtl_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `ret_date` varchar(255) DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `return_unit` varchar(255) DEFAULT NULL,
  `return_price` varchar(255) DEFAULT NULL,
  `return_type` varchar(255) DEFAULT NULL,
  `inv_no` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `td_return_details`
--

INSERT INTO `td_return_details` (`retdtl_id`, `item_id`, `ret_date`, `remark`, `return_unit`, `return_price`, `return_type`, `inv_no`) VALUES
(1, 1, '2017-10-17', 'No Need', '12', '300', 'Purchase', '1'),
(2, 2, '2017-10-17', 'No Need', '5', '275', 'Purchase', '1');

-- --------------------------------------------------------

--
-- Table structure for table `td_route`
--

CREATE TABLE `td_route` (
  `rid` int(11) NOT NULL,
  `rname` varchar(255) NOT NULL,
  `rno` varchar(200) NOT NULL,
  `rdtl` text NOT NULL,
  `addate` varchar(255) NOT NULL,
  `adby` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `td_sales_bill`
--

CREATE TABLE `td_sales_bill` (
  `p_bill_id` int(11) NOT NULL,
  `p_bill_no` varchar(255) NOT NULL,
  `discount_amt` float NOT NULL,
  `real_amt` float NOT NULL,
  `p_bill_total` varchar(255) NOT NULL,
  `p_bill_date` varchar(255) NOT NULL,
  `p_bill_creator` varchar(255) NOT NULL,
  `p_bill_creation_date` varchar(255) NOT NULL,
  `sl_no` varchar(200) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `returnstat` int(11) NOT NULL,
  `returnAmt` varchar(255) DEFAULT NULL,
  `emp_name` varchar(255) NOT NULL,
  `due_amt` int(11) NOT NULL,
  `notify` int(11) NOT NULL,
  `stat` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `td_sales_bill`
--

INSERT INTO `td_sales_bill` (`p_bill_id`, `p_bill_no`, `discount_amt`, `real_amt`, `p_bill_total`, `p_bill_date`, `p_bill_creator`, `p_bill_creation_date`, `sl_no`, `customer_name`, `returnstat`, `returnAmt`, `emp_name`, `due_amt`, `notify`, `stat`) VALUES
(1, '00000001', 0.6, 1203.6, '1203', '2017-10-17', 'subadmin1', '2017-10-17 12:07:58', '1', '1', 0, NULL, '1', 0, 0, 0),
(2, '00000002', 0, 1947, '1947', '2017-10-18', 'subadmin1', '2017-10-18 09:02:09', '2', '2', 0, NULL, '1', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `td_sales_item`
--

CREATE TABLE `td_sales_item` (
  `item_name` text,
  `item_unit_p_price` varchar(255) DEFAULT NULL,
  `item_p_qty` int(11) DEFAULT NULL,
  `item_p_total_amt` varchar(255) DEFAULT NULL,
  `item_s_price` varchar(255) DEFAULT NULL,
  `item_s_gst` varchar(255) DEFAULT NULL,
  `item_s_gst_amt` varchar(255) DEFAULT NULL,
  `item_s_cgst` varchar(255) DEFAULT NULL,
  `item_s_cgst_amt` varchar(255) DEFAULT NULL,
  `item_p_unit` varchar(255) DEFAULT NULL,
  `item_s_total` varchar(255) DEFAULT NULL,
  `item_id` int(11) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `item_single_sale_wgst` varchar(255) DEFAULT NULL,
  `item_single_sale_wogst` varchar(255) DEFAULT NULL,
  `ret_date` varchar(255) DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `return_unit` varchar(255) DEFAULT NULL,
  `return_price` varchar(255) DEFAULT NULL,
  `itempqtyorig` varchar(255) DEFAULT NULL,
  `itempamtorig` varchar(255) DEFAULT NULL,
  `item_s_igst` varchar(255) DEFAULT NULL,
  `item_s_igst_amt` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `td_sales_item`
--

INSERT INTO `td_sales_item` (`item_name`, `item_unit_p_price`, `item_p_qty`, `item_p_total_amt`, `item_s_price`, `item_s_gst`, `item_s_gst_amt`, `item_s_cgst`, `item_s_cgst_amt`, `item_p_unit`, `item_s_total`, `item_id`, `pid`, `item_single_sale_wgst`, `item_single_sale_wogst`, `ret_date`, `remark`, `return_unit`, `return_price`, `itempqtyorig`, `itempamtorig`, `item_s_igst`, `item_s_igst_amt`) VALUES
('KNEE CAP', '30', 10, '354', '0', '9', '27', '9', '27', '2', '354', 1, 1, '35.4', '0', NULL, NULL, NULL, NULL, '10', '354', '0', NULL),
('WRIST BAND', '60', 12, '849.6', '0', '0', '0', '0', '0', '2', '849.6', 2, 1, '70.8', '0', NULL, NULL, NULL, NULL, '12', '849.6', '18', '216.54'),
('KNEE CAP', '35', 10, '413', '0', '9', '31.5', '9', '31.5', '2', '413', 3, 2, '41.3', '0', NULL, NULL, NULL, NULL, '10', '413', '0', '0'),
('WRIST BAND', '65', 20, '1534', '0', '0', '0', '0', '0', '2', '1534', 4, 2, '76.7', '0', NULL, NULL, NULL, NULL, '20', '1534', '18', '234');

-- --------------------------------------------------------

--
-- Table structure for table `td_sales_payment`
--

CREATE TABLE `td_sales_payment` (
  `sp_id` int(11) NOT NULL,
  `bill_no` varchar(200) NOT NULL,
  `payable_amt` float NOT NULL,
  `paid_amt` float NOT NULL,
  `pay_date` varchar(255) NOT NULL,
  `notify` int(11) NOT NULL,
  `amt_due` float NOT NULL,
  `particular` text NOT NULL,
  `next_pay_date` varchar(255) DEFAULT NULL,
  `pay_through` varchar(255) NOT NULL,
  `trans_no` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `td_site_settings`
--

CREATE TABLE `td_site_settings` (
  `site_id` int(11) NOT NULL,
  `site_name` longtext NOT NULL,
  `site_logo` varchar(250) NOT NULL,
  `site_admin_logo` varchar(255) NOT NULL,
  `site_email_address` varchar(250) NOT NULL,
  `site_address` text NOT NULL,
  `site_phone` varchar(250) NOT NULL,
  `site_meta` varchar(255) NOT NULL,
  `site_desc` varchar(255) NOT NULL,
  `site_fblink` varchar(255) NOT NULL,
  `site_twtlink` varchar(255) NOT NULL,
  `google_plus_link` varchar(250) NOT NULL,
  `instragram_link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `td_stock`
--

CREATE TABLE `td_stock` (
  `stock_id` int(11) NOT NULL,
  `stock_item` varchar(255) NOT NULL,
  `stock_qty` varchar(255) NOT NULL,
  `stock_unit` varchar(200) NOT NULL,
  `store_name` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `td_stock`
--

INSERT INTO `td_stock` (`stock_id`, `stock_item`, `stock_qty`, `stock_unit`, `store_name`) VALUES
(1, 'KNEE CAP', '68', '2', 0),
(2, 'WRIST BAND', '63', '2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `td_store`
--

CREATE TABLE `td_store` (
  `st_id` int(11) NOT NULL,
  `stname` varchar(255) NOT NULL,
  `stno` varchar(255) NOT NULL,
  `stkeep` varchar(200) NOT NULL,
  `addate` varchar(255) NOT NULL,
  `adby` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `td_store_allocate`
--

CREATE TABLE `td_store_allocate` (
  `st_al_id` int(11) NOT NULL,
  `stname` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `addate` varchar(255) NOT NULL,
  `adby` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `td_supplier`
--

CREATE TABLE `td_supplier` (
  `cl_id` int(11) NOT NULL,
  `clname` varchar(255) NOT NULL,
  `clemail` varchar(255) NOT NULL,
  `clphn` varchar(255) NOT NULL,
  `clpan` varchar(255) NOT NULL,
  `cgst` varchar(255) NOT NULL,
  `cladd` text NOT NULL,
  `adby` varchar(255) NOT NULL,
  `addate` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `td_supplier`
--

INSERT INTO `td_supplier` (`cl_id`, `clname`, `clemail`, `clphn`, `clpan`, `cgst`, `cladd`, `adby`, `addate`) VALUES
(1, 'SAIKAT BHADURY', 'SAIKAT.PROJUKTI@GMAIL.COM', '7894562134', 'HFDUJHURJ374', '19FHFHJNJKVD737JH37', 'KOLKATA, GANGULI BAGAN', 'subadmin1', '2017-10-17');

-- --------------------------------------------------------

--
-- Table structure for table `td_unit`
--

CREATE TABLE `td_unit` (
  `uid` int(11) NOT NULL,
  `stname` varchar(200) NOT NULL,
  `addate` varchar(255) NOT NULL,
  `adby` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `td_unit`
--

INSERT INTO `td_unit` (`uid`, `stname`, `addate`, `adby`) VALUES
(1, 'KG', '2017-04-11', 'superadmin'),
(2, 'Piece', '2017-04-11', 'superadmin'),
(3, 'gm', '2017-04-11', 'superadmin'),
(4, 'ltr', '2017-04-11', 'superadmin'),
(5, 'ft', '2017-04-11', 'superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `td_users`
--

CREATE TABLE `td_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `password_original` varchar(250) NOT NULL,
  `ip_address` varchar(250) NOT NULL,
  `last_login` varchar(250) NOT NULL,
  `last_browser_used` varchar(250) NOT NULL,
  `published` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `td_users`
--

INSERT INTO `td_users` (`id`, `username`, `password`, `password_original`, `ip_address`, `last_login`, `last_browser_used`, `published`) VALUES
(1, 'subadmin1', '21232f297a57a5a743894a0e4a801fc3', 'admin', '::1', '2017-03-16 06:59:29am', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36', 1),
(2, 'subadmin2', '21232f297a57a5a743894a0e4a801fc3', 'admin', '', '', '', 1),
(3, 'superadmin', 'fd80b4bd63457b0dbee2e3c90eb6de52', 'mishrabrothers', '', '', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_salary`
--
ALTER TABLE `employee_salary`
  ADD PRIMARY KEY (`emp_sal_id`);

--
-- Indexes for table `salary_detail`
--
ALTER TABLE `salary_detail`
  ADD PRIMARY KEY (`salary_id`);

--
-- Indexes for table `td_assign_route`
--
ALTER TABLE `td_assign_route`
  ADD PRIMARY KEY (`asign_id`);

--
-- Indexes for table `td_bank`
--
ALTER TABLE `td_bank`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `td_client`
--
ALTER TABLE `td_client`
  ADD PRIMARY KEY (`cl_id`);

--
-- Indexes for table `td_company`
--
ALTER TABLE `td_company`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `td_employee`
--
ALTER TABLE `td_employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `td_expense`
--
ALTER TABLE `td_expense`
  ADD PRIMARY KEY (`exp_id`);

--
-- Indexes for table `td_finance`
--
ALTER TABLE `td_finance`
  ADD PRIMARY KEY (`finance_id`);

--
-- Indexes for table `td_incentives`
--
ALTER TABLE `td_incentives`
  ADD PRIMARY KEY (`inc_id`);

--
-- Indexes for table `td_inc_settings`
--
ALTER TABLE `td_inc_settings`
  ADD PRIMARY KEY (`incset_id`);

--
-- Indexes for table `td_purchase_bill`
--
ALTER TABLE `td_purchase_bill`
  ADD PRIMARY KEY (`p_bill_id`);

--
-- Indexes for table `td_purchase_item`
--
ALTER TABLE `td_purchase_item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `td_purchase_payment`
--
ALTER TABLE `td_purchase_payment`
  ADD PRIMARY KEY (`sp_id`);

--
-- Indexes for table `td_return_details`
--
ALTER TABLE `td_return_details`
  ADD PRIMARY KEY (`retdtl_id`);

--
-- Indexes for table `td_route`
--
ALTER TABLE `td_route`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `td_sales_bill`
--
ALTER TABLE `td_sales_bill`
  ADD PRIMARY KEY (`p_bill_id`);

--
-- Indexes for table `td_sales_item`
--
ALTER TABLE `td_sales_item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `td_sales_payment`
--
ALTER TABLE `td_sales_payment`
  ADD PRIMARY KEY (`sp_id`);

--
-- Indexes for table `td_site_settings`
--
ALTER TABLE `td_site_settings`
  ADD PRIMARY KEY (`site_id`);

--
-- Indexes for table `td_stock`
--
ALTER TABLE `td_stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `td_store`
--
ALTER TABLE `td_store`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `td_store_allocate`
--
ALTER TABLE `td_store_allocate`
  ADD PRIMARY KEY (`st_al_id`);

--
-- Indexes for table `td_supplier`
--
ALTER TABLE `td_supplier`
  ADD PRIMARY KEY (`cl_id`);

--
-- Indexes for table `td_unit`
--
ALTER TABLE `td_unit`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `td_users`
--
ALTER TABLE `td_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_salary`
--
ALTER TABLE `employee_salary`
  MODIFY `emp_sal_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `salary_detail`
--
ALTER TABLE `salary_detail`
  MODIFY `salary_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `td_assign_route`
--
ALTER TABLE `td_assign_route`
  MODIFY `asign_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `td_bank`
--
ALTER TABLE `td_bank`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `td_client`
--
ALTER TABLE `td_client`
  MODIFY `cl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `td_company`
--
ALTER TABLE `td_company`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `td_employee`
--
ALTER TABLE `td_employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `td_expense`
--
ALTER TABLE `td_expense`
  MODIFY `exp_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `td_finance`
--
ALTER TABLE `td_finance`
  MODIFY `finance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `td_incentives`
--
ALTER TABLE `td_incentives`
  MODIFY `inc_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `td_inc_settings`
--
ALTER TABLE `td_inc_settings`
  MODIFY `incset_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `td_purchase_bill`
--
ALTER TABLE `td_purchase_bill`
  MODIFY `p_bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `td_purchase_item`
--
ALTER TABLE `td_purchase_item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `td_purchase_payment`
--
ALTER TABLE `td_purchase_payment`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `td_return_details`
--
ALTER TABLE `td_return_details`
  MODIFY `retdtl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `td_route`
--
ALTER TABLE `td_route`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `td_sales_bill`
--
ALTER TABLE `td_sales_bill`
  MODIFY `p_bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `td_sales_item`
--
ALTER TABLE `td_sales_item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `td_sales_payment`
--
ALTER TABLE `td_sales_payment`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `td_site_settings`
--
ALTER TABLE `td_site_settings`
  MODIFY `site_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `td_stock`
--
ALTER TABLE `td_stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `td_store`
--
ALTER TABLE `td_store`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `td_store_allocate`
--
ALTER TABLE `td_store_allocate`
  MODIFY `st_al_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `td_supplier`
--
ALTER TABLE `td_supplier`
  MODIFY `cl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `td_unit`
--
ALTER TABLE `td_unit`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `td_users`
--
ALTER TABLE `td_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
