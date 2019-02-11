-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2019 at 02:15 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `onlineexam`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `num` int(20) NOT NULL AUTO_INCREMENT,
  `Question` text NOT NULL,
  `ans1` text NOT NULL,
  `ans2` text NOT NULL,
  `ans3` text NOT NULL,
  `true_ans` varchar(255) NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`num`, `Question`, `ans1`, `ans2`, `ans3`, `true_ans`) VALUES
(1, 'What is the correct way to end a PHP statement?', '</php>', ';', 'New line', ';'),
(2, 'What does PHP stand for?', 'PHP: Hypertext Preprocessor', 'Personal Home Page', 'Private Home Page', 'PHP: Hypertext Preprocessor'),
(3, 'PHP scripts are surrounded by', '<?php>...</?>', '<?php ... ?>', '<script>...</script>', '<?php ... ?>'),
(4, 'How do you write "Hello World" in PHP', '"Hello World";', 'Document.Write("Hello World");', 'echo "Hello World";', 'echo "Hello World";'),
(5, 'All variables in PHP start with which symbol?', '$', '!', '&', '$'),
(6, 'How do you get information from a form that is submitted using the "get" method?', '$_GET[];', 'Request.Form;', 'Request.QueryString;', '$_GET[];'),
(7, 'What is the correct way to create a function in PHP?', 'function myFunction()', 'create myFunction()', 'new_function myFunction()', 'function myFunction()'),
(8, 'What is the correct way to open the file "time.txt" as readable?', 'fopen("time.txt","r");', 'open("time.txt");', 'open("time.txt","read")', 'fopen("time.txt","r");'),
(9, 'Which superglobal variable holds information about headers, paths, and script locations?', '$_GET', '$_GLOBALS', '$_SERVER', '$_SERVER'),
(10, 'What is the correct way to add 1 to the $count variable?', '$count++;', '++count', '$count =+1', '$count++;'),
(11, 'What is a correct way to add a comment in PHP?', '*\\...\\*', '/*...*/', '<!--...-->', '/*...*/'),
(12, 'Which one of these variables has an illegal name?', '$my-Var', '$my_Var', '$myVar', '$my-Var'),
(13, 'How do you create an array in PHP?', '$cars = array("Volvo", "BMW", "Toyota");', '$cars = "Volvo", "BMW", "Toyota";', '$cars = array["Volvo", "BMW", "Toyota"];', '$cars = array("Volvo", "BMW", "Toyota");'),
(14, 'Which operator is used to check if two values are equal and of same data type?', '=', '===', '==', '==='),
(15, 'What is x+ mode in fopen() used for?', 'Read/Write. Creates a new file. Returns FALSE and an error if file already exists', 'Read/Write. Opens and clears the contents of file;', 'Write. Opens and clears the contents of file', 'Read/Write. Creates a new file. Returns FALSE and an error if file already exists'),
(16, 'What is the difference between GET and POST method?', 'GET displays the form values entered in the URL of the address bar where as POST does not.', 'POST displays the form values entered in the URL of the address bar where as GET does not.', 'There is no difference', 'GET displays the form values entered in the URL of the address bar where as POST does not.'),
(20, 'If a source file contains PHP code, what extension should be used?', '.html', '.psd', '.php', '.php'),
(21, 'What does a semicolon signify at the end of a instruction or statement?', 'the end of a PHP statement or instruction', 'the start of a PHP statement or instruciton', 'to ignore a PHP statement or instruciton', 'the end of a PHP statement or instruction');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `examId` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `score` int(11) NOT NULL,
  PRIMARY KEY (`examId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `users`
--



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
