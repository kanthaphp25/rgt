-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2024 at 07:19 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rgt`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

CREATE TABLE `employee_details` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_of_birth` datetime NOT NULL,
  `date_of_joining` date NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_details`
--

INSERT INTO `employee_details` (`emp_id`, `emp_name`, `email`, `mobile`, `address`, `date_of_birth`, `date_of_joining`, `blood_group`, `designation`) VALUES
(1, 'Emp47', 'emp494@gmail.com', '980432568971', 'emp-address163', '0000-00-00 00:00:00', '0000-00-00', 'B-', 'Solidger'),
(2, 'Emp9', 'emp641@gmail.com', '308432568972', 'emp-address592', '0000-00-00 00:00:00', '0000-00-00', 'AB-', 'Solidger'),
(3, 'Emp82', 'emp165@gmail.com', '915432568973', 'emp-address318', '0000-00-00 00:00:00', '0000-00-00', 'B-', 'Teacher'),
(4, 'Emp29', 'emp935@gmail.com', '152432568974', 'emp-address598', '0000-00-00 00:00:00', '0000-00-00', 'A-', 'Former'),
(5, 'Emp13', 'emp828@gmail.com', '955432568975', 'emp-address340', '0000-00-00 00:00:00', '0000-00-00', 'AB+', 'Politician'),
(6, 'Emp4', 'emp599@gmail.com', '724432568976', 'emp-address974', '0000-00-00 00:00:00', '0000-00-00', 'AB-', 'Politician'),
(7, 'Emp42', 'emp213@gmail.com', '713432568977', 'emp-address323', '0000-00-00 00:00:00', '0000-00-00', 'A-', 'Solidger'),
(8, 'Emp67', 'emp18@gmail.com', '956432568978', 'emp-address559', '0000-00-00 00:00:00', '0000-00-00', 'B+', 'Politician'),
(9, 'Emp27', 'emp97@gmail.com', '687432568979', 'emp-address953', '0000-00-00 00:00:00', '0000-00-00', 'A-', 'Teacher'),
(10, 'Emp1', 'emp481@gmail.com', '3334325689710', 'emp-address594', '0000-00-00 00:00:00', '0000-00-00', 'AB-', 'Former'),
(11, 'Emp94', 'emp436@gmail.com', '7464325689711', 'emp-address41', '0000-00-00 00:00:00', '0000-00-00', 'O-', 'Solidger'),
(12, 'Emp47', 'emp274@gmail.com', '924325689712', 'emp-address450', '0000-00-00 00:00:00', '0000-00-00', 'O-', 'Software'),
(13, 'Emp47', 'emp681@gmail.com', '5654325689713', 'emp-address291', '0000-00-00 00:00:00', '0000-00-00', 'B-', 'Former'),
(14, 'Emp41', 'emp68@gmail.com', '4154325689714', 'emp-address573', '0000-00-00 00:00:00', '0000-00-00', 'B-', 'Former'),
(15, 'Emp93', 'emp957@gmail.com', '3294325689715', 'emp-address597', '0000-00-00 00:00:00', '0000-00-00', 'B-', 'Police'),
(16, 'Emp45', 'emp57@gmail.com', '5954325689716', 'emp-address130', '0000-00-00 00:00:00', '0000-00-00', 'A-', 'Police'),
(17, 'Emp99', 'emp996@gmail.com', '9604325689717', 'emp-address214', '0000-00-00 00:00:00', '0000-00-00', 'A+', 'Police'),
(18, 'Emp78', 'emp502@gmail.com', '6784325689718', 'emp-address556', '0000-00-00 00:00:00', '0000-00-00', 'A-', 'Former'),
(19, 'Emp66', 'emp232@gmail.com', '7394325689719', 'emp-address687', '0000-00-00 00:00:00', '0000-00-00', 'O-', 'Doctor'),
(20, 'Emp28', 'emp691@gmail.com', '224325689720', 'emp-address800', '0000-00-00 00:00:00', '0000-00-00', 'O-', 'Software'),
(21, 'Emp94', 'emp568@gmail.com', '3524325689721', 'emp-address661', '0000-00-00 00:00:00', '0000-00-00', 'B-', 'Politician'),
(22, 'Emp94', 'emp368@gmail.com', '7964325689722', 'emp-address186', '0000-00-00 00:00:00', '0000-00-00', 'B-', 'Solidger'),
(23, 'Emp96', 'emp504@gmail.com', '8074325689723', 'emp-address966', '0000-00-00 00:00:00', '0000-00-00', 'A+', 'Police'),
(24, 'Emp93', 'emp632@gmail.com', '9994325689724', 'emp-address991', '0000-00-00 00:00:00', '0000-00-00', 'AB+', 'Teacher'),
(25, 'Emp49', 'emp773@gmail.com', '4384325689725', 'emp-address825', '0000-00-00 00:00:00', '0000-00-00', 'B-', 'Doctor'),
(26, 'Emp6', 'emp409@gmail.com', '5284325689726', 'emp-address69', '0000-00-00 00:00:00', '0000-00-00', 'A-', 'Teacher'),
(27, 'Emp66', 'emp42@gmail.com', '514325689727', 'emp-address265', '0000-00-00 00:00:00', '0000-00-00', 'O-', 'Former'),
(28, 'Emp21', 'emp811@gmail.com', '2224325689728', 'emp-address127', '0000-00-00 00:00:00', '0000-00-00', 'O+', 'Politician'),
(29, 'Emp48', 'emp960@gmail.com', '8354325689729', 'emp-address621', '0000-00-00 00:00:00', '0000-00-00', 'B+', 'Politician'),
(30, 'Emp35', 'emp365@gmail.com', '484325689730', 'emp-address78', '0000-00-00 00:00:00', '0000-00-00', 'B-', 'Software'),
(31, 'Emp41', 'emp228@gmail.com', '144325689731', 'emp-address365', '0000-00-00 00:00:00', '0000-00-00', 'O-', 'Police'),
(32, 'Emp47', 'emp287@gmail.com', '6924325689732', 'emp-address112', '0000-00-00 00:00:00', '0000-00-00', 'O-', 'Former'),
(33, 'Emp41', 'emp191@gmail.com', '2784325689733', 'emp-address699', '0000-00-00 00:00:00', '0000-00-00', 'O-', 'Solidger'),
(34, 'Emp72', 'emp623@gmail.com', '294325689734', 'emp-address416', '0000-00-00 00:00:00', '0000-00-00', 'B+', 'Software'),
(35, 'Emp11', 'emp30@gmail.com', '5844325689735', 'emp-address346', '0000-00-00 00:00:00', '0000-00-00', 'A-', 'Doctor'),
(36, 'Emp16', 'emp332@gmail.com', '1014325689736', 'emp-address859', '0000-00-00 00:00:00', '0000-00-00', 'A+', 'Police'),
(37, 'Emp9', 'emp59@gmail.com', '3924325689737', 'emp-address991', '0000-00-00 00:00:00', '0000-00-00', 'O+', 'Former'),
(38, 'Emp78', 'emp401@gmail.com', '1584325689738', 'emp-address593', '0000-00-00 00:00:00', '0000-00-00', 'AB-', 'Solidger'),
(39, 'Emp40', 'emp719@gmail.com', '9534325689739', 'emp-address727', '0000-00-00 00:00:00', '0000-00-00', 'B+', 'Politician'),
(40, 'Emp1', 'emp876@gmail.com', '3124325689740', 'emp-address193', '0000-00-00 00:00:00', '0000-00-00', 'B-', 'Police'),
(41, 'Emp93', 'emp953@gmail.com', '3364325689741', 'emp-address188', '0000-00-00 00:00:00', '0000-00-00', 'A-', 'Police'),
(42, 'Emp42', 'emp150@gmail.com', '5134325689742', 'emp-address548', '0000-00-00 00:00:00', '0000-00-00', 'B-', 'Teacher'),
(43, 'Emp6', 'emp633@gmail.com', '2514325689743', 'emp-address885', '0000-00-00 00:00:00', '0000-00-00', 'O+', 'Solidger'),
(44, 'Emp69', 'emp645@gmail.com', '6554325689744', 'emp-address555', '0000-00-00 00:00:00', '0000-00-00', 'A+', 'Solidger'),
(45, 'Emp48', 'emp324@gmail.com', '7204325689745', 'emp-address546', '0000-00-00 00:00:00', '0000-00-00', 'B-', 'Police'),
(46, 'Emp25', 'emp172@gmail.com', '4914325689746', 'emp-address834', '0000-00-00 00:00:00', '0000-00-00', 'B-', 'Solidger'),
(47, 'Emp28', 'emp427@gmail.com', '6884325689747', 'emp-address738', '0000-00-00 00:00:00', '0000-00-00', 'A-', 'Software'),
(48, 'Emp52', 'emp462@gmail.com', '8824325689748', 'emp-address194', '0000-00-00 00:00:00', '0000-00-00', 'A+', 'Solidger'),
(49, 'Emp17', 'emp212@gmail.com', '9694325689749', 'emp-address482', '0000-00-00 00:00:00', '0000-00-00', 'A+', 'Police'),
(50, 'Emp16', 'emp503@gmail.com', '8764325689750', 'emp-address978', '0000-00-00 00:00:00', '0000-00-00', 'O+', 'Teacher'),
(51, 'Emp22', 'emp28@gmail.com', '1554325689751', 'emp-address153', '0000-00-00 00:00:00', '0000-00-00', 'B-', 'Politician'),
(52, 'Emp80', 'emp850@gmail.com', '1934325689752', 'emp-address775', '0000-00-00 00:00:00', '0000-00-00', 'B-', 'Police'),
(53, 'Emp55', 'emp314@gmail.com', '3694325689753', 'emp-address81', '0000-00-00 00:00:00', '0000-00-00', 'A-', 'Former'),
(54, 'Emp61', 'emp652@gmail.com', '3854325689754', 'emp-address346', '0000-00-00 00:00:00', '0000-00-00', 'O-', 'Former'),
(55, 'Emp9', 'emp720@gmail.com', '6614325689755', 'emp-address506', '0000-00-00 00:00:00', '0000-00-00', 'AB+', 'Police'),
(56, 'Emp18', 'emp641@gmail.com', '1014325689756', 'emp-address919', '0000-00-00 00:00:00', '0000-00-00', 'B+', 'Software'),
(57, 'Emp59', 'emp829@gmail.com', '2324325689757', 'emp-address717', '0000-00-00 00:00:00', '0000-00-00', 'AB+', 'Former'),
(58, 'Emp78', 'emp738@gmail.com', '3034325689758', 'emp-address645', '0000-00-00 00:00:00', '0000-00-00', 'O-', 'Former'),
(59, 'Emp10', 'emp401@gmail.com', '9314325689759', 'emp-address318', '0000-00-00 00:00:00', '0000-00-00', 'B+', 'Teacher'),
(60, 'Emp85', 'emp910@gmail.com', '2294325689760', 'emp-address274', '0000-00-00 00:00:00', '0000-00-00', 'O+', 'Police'),
(61, 'Emp81', 'emp226@gmail.com', '2494325689761', 'emp-address864', '0000-00-00 00:00:00', '0000-00-00', 'B+', 'Police'),
(62, 'Emp23', 'emp33@gmail.com', '9264325689762', 'emp-address699', '0000-00-00 00:00:00', '0000-00-00', 'O+', 'Doctor'),
(63, 'Emp57', 'emp447@gmail.com', '7954325689763', 'emp-address900', '0000-00-00 00:00:00', '0000-00-00', 'A-', 'Doctor'),
(64, 'Emp89', 'emp562@gmail.com', '3284325689764', 'emp-address451', '0000-00-00 00:00:00', '0000-00-00', 'B-', 'Politician'),
(65, 'Emp30', 'emp554@gmail.com', '4594325689765', 'emp-address629', '0000-00-00 00:00:00', '0000-00-00', 'B+', 'Solidger'),
(66, 'Emp50', 'emp127@gmail.com', '5534325689766', 'emp-address682', '0000-00-00 00:00:00', '0000-00-00', 'B-', 'Former'),
(67, 'Emp29', 'emp769@gmail.com', '874325689767', 'emp-address7', '0000-00-00 00:00:00', '0000-00-00', 'B+', 'Doctor'),
(68, 'Emp40', 'emp410@gmail.com', '6074325689768', 'emp-address522', '0000-00-00 00:00:00', '0000-00-00', 'O+', 'Doctor'),
(69, 'Emp98', 'emp62@gmail.com', '2744325689769', 'emp-address503', '0000-00-00 00:00:00', '0000-00-00', 'O-', 'Doctor'),
(70, 'Emp20', 'emp50@gmail.com', '114325689770', 'emp-address1', '0000-00-00 00:00:00', '0000-00-00', 'A-', 'Solidger'),
(71, 'Emp20', 'emp854@gmail.com', '1064325689771', 'emp-address378', '0000-00-00 00:00:00', '0000-00-00', 'O-', 'Politician'),
(72, 'Emp95', 'emp33@gmail.com', '6374325689772', 'emp-address367', '0000-00-00 00:00:00', '0000-00-00', 'O+', 'Software'),
(73, 'Emp86', 'emp354@gmail.com', '1424325689773', 'emp-address20', '0000-00-00 00:00:00', '0000-00-00', 'AB+', 'Police'),
(74, 'Emp15', 'emp156@gmail.com', '3504325689774', 'emp-address721', '0000-00-00 00:00:00', '0000-00-00', 'O+', 'Solidger'),
(75, 'Emp51', 'emp214@gmail.com', '5744325689775', 'emp-address446', '0000-00-00 00:00:00', '0000-00-00', 'O-', 'Teacher'),
(76, 'Emp29', 'emp451@gmail.com', '7634325689776', 'emp-address641', '0000-00-00 00:00:00', '0000-00-00', 'B-', 'Former'),
(77, 'Emp62', 'emp277@gmail.com', '9304325689777', 'emp-address983', '0000-00-00 00:00:00', '0000-00-00', 'O-', 'Solidger'),
(78, 'Emp77', 'emp946@gmail.com', '4584325689778', 'emp-address779', '0000-00-00 00:00:00', '0000-00-00', 'AB-', 'Former'),
(79, 'Emp11', 'emp995@gmail.com', '3354325689779', 'emp-address148', '0000-00-00 00:00:00', '0000-00-00', 'B+', 'Police'),
(80, 'Emp70', 'emp974@gmail.com', '3554325689780', 'emp-address795', '0000-00-00 00:00:00', '0000-00-00', 'A-', 'Police'),
(81, 'Emp35', 'emp589@gmail.com', '8134325689781', 'emp-address435', '0000-00-00 00:00:00', '0000-00-00', 'B-', 'Politician'),
(82, 'Emp15', 'emp12@gmail.com', '2494325689782', 'emp-address42', '0000-00-00 00:00:00', '0000-00-00', 'O-', 'Politician'),
(83, 'Emp38', 'emp981@gmail.com', '624325689783', 'emp-address215', '0000-00-00 00:00:00', '0000-00-00', 'AB-', 'Former'),
(84, 'Emp66', 'emp818@gmail.com', '8294325689784', 'emp-address359', '0000-00-00 00:00:00', '0000-00-00', 'A+', 'Teacher'),
(85, 'Emp56', 'emp133@gmail.com', '7244325689785', 'emp-address119', '0000-00-00 00:00:00', '0000-00-00', 'A+', 'Police'),
(86, 'Emp4', 'emp964@gmail.com', '8014325689786', 'emp-address594', '0000-00-00 00:00:00', '0000-00-00', 'A+', 'Politician'),
(87, 'Emp93', 'emp961@gmail.com', '334325689787', 'emp-address320', '0000-00-00 00:00:00', '0000-00-00', 'AB+', 'Police'),
(88, 'Emp54', 'emp353@gmail.com', '8214325689788', 'emp-address440', '0000-00-00 00:00:00', '0000-00-00', 'AB-', 'Politician'),
(89, 'Emp58', 'emp682@gmail.com', '5484325689789', 'emp-address681', '0000-00-00 00:00:00', '0000-00-00', 'B-', 'Politician'),
(90, 'Emp92', 'emp391@gmail.com', '4064325689790', 'emp-address715', '0000-00-00 00:00:00', '0000-00-00', 'B+', 'Software'),
(91, 'Emp59', 'emp813@gmail.com', '954325689791', 'emp-address831', '0000-00-00 00:00:00', '0000-00-00', 'AB-', 'Politician'),
(92, 'Emp14', 'emp103@gmail.com', '3534325689792', 'emp-address303', '0000-00-00 00:00:00', '0000-00-00', 'O+', 'Former'),
(93, 'Emp65', 'emp57@gmail.com', '824325689793', 'emp-address246', '0000-00-00 00:00:00', '0000-00-00', 'O-', 'Doctor'),
(94, 'Emp26', 'emp776@gmail.com', '8374325689794', 'emp-address229', '0000-00-00 00:00:00', '0000-00-00', 'A+', 'Politician'),
(95, 'Emp75', 'emp918@gmail.com', '3914325689795', 'emp-address409', '0000-00-00 00:00:00', '0000-00-00', 'O-', 'Teacher'),
(96, 'Emp53', 'emp114@gmail.com', '7774325689796', 'emp-address163', '0000-00-00 00:00:00', '0000-00-00', 'A-', 'Software'),
(97, 'Emp26', 'emp253@gmail.com', '8644325689797', 'emp-address12', '0000-00-00 00:00:00', '0000-00-00', 'A+', 'Politician'),
(98, 'Emp49', 'emp716@gmail.com', '5414325689798', 'emp-address220', '0000-00-00 00:00:00', '0000-00-00', 'A-', 'Solidger'),
(99, 'Emp96', 'emp49@gmail.com', '8364325689799', 'emp-address654', '0000-00-00 00:00:00', '0000-00-00', 'AB+', 'Politician'),
(100, 'Emp88', 'emp859@gmail.com', '17043256897100', 'emp-address97', '0000-00-00 00:00:00', '0000-00-00', 'A+', 'Former');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `authorization` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `address` varchar(500) NOT NULL,
  `date_of_birth` date NOT NULL,
  `profile_picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `name`, `mobile`, `email`, `password`, `authorization`, `role`, `address`, `date_of_birth`, `profile_picture`) VALUES
(2, 'kanthareddy', '8106101040', 'kanthaphp25@gmail.com', '4c56ff4ce4aaf9573aa5dff913df997a', 1, 1, 'test new addressh', '2024-06-13', ''),
(15, 'kantha', '81061010418', 'kanthaphp225@gmail.com', '', 1, 1, 'jhgvgjvkv', '2024-06-27', '32917363_227184104709998_4211473389463797760_n.jpg'),
(16, 'user74', '2223762396', 'user95@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 1, 'user-address98', '0000-00-00', ''),
(17, 'user32', '452376237', 'user60@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 2, 'user-address25', '0000-00-00', ''),
(18, 'user10', '1123762383', 'user48@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 1, 'user-address90', '0000-00-00', ''),
(19, 'user94', '4323762373', 'user13@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 3, 'user-address77', '0000-00-00', ''),
(20, 'user81', '7523762312', 'user89@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 3, 'user-address62', '0000-00-00', ''),
(21, 'user51', '1523762316', 'user10@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 1, 'user-address5', '0000-00-00', ''),
(22, 'user46', '8823762328', 'user75@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 1, 'user-address8', '0000-00-00', ''),
(23, 'user25', '3123762383', 'user80@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 2, 'user-address25', '0000-00-00', ''),
(24, 'user20', '6723762333', 'user8@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 1, 'user-address74', '0000-00-00', ''),
(25, 'user6', '2223762347', 'user78@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 3, 'user-address28', '0000-00-00', ''),
(26, 'user56', '2823762315', 'user86@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 1, 'user-address93', '0000-00-00', ''),
(27, 'user28', '3223762388', 'user67@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 2, 'user-address53', '0000-00-00', ''),
(28, 'user92', '5523762397', 'user81@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 1, 'user-address24', '0000-00-00', ''),
(29, 'user28', '8323762398', 'user18@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 3, 'user-address5', '0000-00-00', ''),
(30, 'user4', '1223762325', 'user4@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 2, 'user-address26', '0000-00-00', ''),
(31, 'user7', '6023762360', 'user33@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 2, 'user-address90', '0000-00-00', ''),
(32, 'user64', '852376237', 'user21@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 3, 'user-address95', '0000-00-00', ''),
(33, 'user24', '9423762366', 'user62@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 1, 'user-address23', '0000-00-00', ''),
(34, 'user77', '3823762336', 'user79@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 2, 'user-address96', '0000-00-00', ''),
(35, 'user97', '6623762356', 'user92@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 2, 'user-address31', '0000-00-00', ''),
(36, 'user75', '6623762384', 'user49@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 2, 'user-address50', '0000-00-00', ''),
(37, 'user81', '723762338', 'user5@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 1, 'user-address39', '0000-00-00', ''),
(38, 'user12', '5423762310', 'user20@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 1, 'user-address98', '0000-00-00', ''),
(39, 'user10', '8223762317', 'user31@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 3, 'user-address11', '0000-00-00', ''),
(40, 'user57', '6023762325', 'user22@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 1, 'user-address63', '0000-00-00', ''),
(41, 'user39', '7123762335', 'user91@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 2, 'user-address16', '0000-00-00', ''),
(42, 'user17', '7423762330', 'user87@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 2, 'user-address63', '0000-00-00', ''),
(43, 'user92', '602376232', 'user82@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 2, 'user-address33', '0000-00-00', ''),
(44, 'user17', '8923762339', 'user85@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 1, 'user-address12', '0000-00-00', ''),
(45, 'user15', '9123762341', 'user44@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 2, 'user-address77', '0000-00-00', ''),
(46, 'user44', '6023762371', 'user60@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 2, 'user-address9', '0000-00-00', ''),
(47, 'user43', '5923762364', 'user23@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 1, 'user-address29', '0000-00-00', ''),
(48, 'user87', '7123762332', 'user82@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 2, 'user-address19', '0000-00-00', ''),
(49, 'user83', '6023762379', 'user31@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 3, 'user-address13', '0000-00-00', ''),
(50, 'user70', '3923762357', 'user41@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 1, 'user-address70', '0000-00-00', ''),
(51, 'user19', '6223762316', 'user83@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 1, 'user-address31', '0000-00-00', ''),
(52, 'user88', '352376237', 'user72@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 3, 'user-address22', '0000-00-00', ''),
(53, 'user78', '5423762321', 'user73@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 3, 'user-address73', '0000-00-00', ''),
(54, 'user14', '8723762370', 'user33@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 3, 'user-address11', '0000-00-00', ''),
(55, 'user20', '6323762377', 'user9@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 3, 'user-address56', '0000-00-00', ''),
(56, 'user77', '9823762371', 'user72@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 2, 'user-address26', '0000-00-00', ''),
(57, 'user63', '3823762312', 'user28@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 1, 'user-address89', '0000-00-00', ''),
(58, 'user23', '6823762371', 'user58@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 1, 'user-address57', '0000-00-00', ''),
(59, 'user90', '7323762383', 'user68@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 1, 'user-address2', '0000-00-00', ''),
(60, 'user29', '42376239', 'user87@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 3, 'user-address36', '0000-00-00', ''),
(61, 'user42', '923762344', 'user46@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 3, 'user-address37', '0000-00-00', ''),
(62, 'user43', '8323762318', 'user3@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 3, 'user-address63', '0000-00-00', ''),
(63, 'user12', '3023762314', 'user94@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 3, 'user-address82', '0000-00-00', ''),
(64, 'user57', '7523762380', 'user70@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 2, 'user-address2', '0000-00-00', ''),
(65, 'user97', '1723762315', 'user72@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 1, 'user-address40', '0000-00-00', ''),
(66, 'user52', '5323762342', 'user50@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 3, 'user-address12', '0000-00-00', ''),
(67, 'user12', '3123762382', 'user92@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 1, 'user-address70', '0000-00-00', ''),
(68, 'user70', '4623762351', 'user22@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 1, 'user-address86', '0000-00-00', ''),
(69, 'user28', '2223762323', 'user65@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 3, 'user-address19', '0000-00-00', ''),
(70, 'user53', '223762311', 'user22@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 3, 'user-address45', '0000-00-00', ''),
(71, 'user78', '5823762323', 'user88@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 2, 'user-address26', '0000-00-00', ''),
(72, 'user93', '3623762360', 'user36@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 3, 'user-address49', '0000-00-00', ''),
(73, 'user8', '7923762335', 'user13@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 3, 'user-address98', '0000-00-00', ''),
(74, 'user10', '4423762325', 'user29@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 1, 'user-address29', '0000-00-00', ''),
(75, 'user28', '2523762311', 'user88@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 3, 'user-address12', '0000-00-00', ''),
(76, 'user1', '9423762397', 'user44@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 1, 'user-address75', '0000-00-00', ''),
(77, 'user14', '3223762330', 'user27@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 2, 'user-address26', '0000-00-00', ''),
(78, 'user27', '4123762378', 'user13@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 3, 'user-address88', '0000-00-00', ''),
(79, 'user48', '4823762337', 'user23@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 2, 'user-address23', '0000-00-00', ''),
(80, 'user77', '7723762312', 'user28@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 2, 'user-address54', '0000-00-00', ''),
(81, 'user61', '2823762327', 'user79@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 1, 'user-address96', '0000-00-00', ''),
(82, 'user60', '202376238', 'user45@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 2, 'user-address68', '0000-00-00', ''),
(83, 'user17', '592376231', 'user31@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 2, 'user-address88', '0000-00-00', ''),
(84, 'user1', '832376237', 'user99@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 3, 'user-address53', '0000-00-00', ''),
(85, 'user23', '9123762379', 'user92@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 1, 'user-address64', '0000-00-00', ''),
(86, 'user64', '8323762366', 'user82@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 2, 'user-address88', '0000-00-00', ''),
(87, 'user60', '3823762315', 'user18@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 3, 'user-address5', '0000-00-00', ''),
(88, 'user72', '3923762351', 'user51@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 3, 'user-address32', '0000-00-00', ''),
(89, 'user60', '223762327', 'user81@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 1, 'user-address79', '0000-00-00', ''),
(90, 'user15', '962376236', 'user85@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 2, 'user-address96', '0000-00-00', ''),
(91, 'user53', '8823762350', 'user87@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 2, 'user-address70', '0000-00-00', ''),
(92, 'user17', '3123762348', 'user26@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 3, 'user-address33', '0000-00-00', ''),
(93, 'user13', '2123762354', 'user32@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 3, 'user-address57', '0000-00-00', ''),
(94, 'user33', '4423762310', 'user47@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 1, 'user-address96', '0000-00-00', ''),
(95, 'user7', '5823762376', 'user2@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 3, 'user-address15', '0000-00-00', ''),
(96, 'user57', '1823762393', 'user56@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 3, 'user-address56', '0000-00-00', ''),
(97, 'user51', '3323762388', 'user92@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 1, 'user-address84', '0000-00-00', ''),
(98, 'user44', '9323762321', 'user71@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 1, 'user-address5', '0000-00-00', ''),
(99, 'user90', '3423762389', 'user82@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 2, 'user-address49', '0000-00-00', ''),
(100, 'user25', '4623762394', 'user35@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 1, 'user-address59', '0000-00-00', ''),
(101, 'user31', '8023762347', 'user41@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 3, 'user-address33', '0000-00-00', ''),
(102, 'user86', '6823762383', 'user14@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 3, 'user-address28', '0000-00-00', ''),
(103, 'user88', '3123762374', 'user85@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 3, 'user-address85', '0000-00-00', ''),
(104, 'user99', '1523762317', 'user69@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 1, 'user-address49', '0000-00-00', ''),
(105, 'user77', '8123762329', 'user37@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 3, 'user-address67', '0000-00-00', ''),
(106, 'user30', '7823762373', 'user5@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 1, 'user-address77', '0000-00-00', ''),
(107, 'user12', '8023762321', 'user46@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 2, 'user-address29', '0000-00-00', ''),
(108, 'user21', '732376238', 'user82@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 1, 'user-address70', '0000-00-00', ''),
(109, 'user24', '723762329', 'user55@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 1, 'user-address14', '0000-00-00', ''),
(110, 'user37', '6523762365', 'user71@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 2, 'user-address42', '0000-00-00', ''),
(111, 'user73', '723762375', 'user86@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 2, 'user-address10', '0000-00-00', ''),
(112, 'user89', '1123762328', 'user82@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 2, 'user-address59', '0000-00-00', ''),
(113, 'user55', '5923762342', 'user73@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 3, 'user-address32', '0000-00-00', ''),
(114, 'user53', '6223762384', 'user32@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 1, 'user-address82', '0000-00-00', ''),
(115, 'user97', '2923762396', 'user76@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 1, 'user-address6', '0000-00-00', ''),
(116, 'reddy', '54543543543', 'reddy@gmail.com', '33ceb07bf4eeb3da587e268d663aba1a', 0, 3, 'fwfeqwfewfewf', '2024-06-20', '32150277_454631524983309_4181000901441355776_n.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_details`
--
ALTER TABLE `employee_details`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_details`
--
ALTER TABLE `employee_details`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
