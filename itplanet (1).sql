-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2019 at 05:35 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `itplanet`
--

-- --------------------------------------------------------

--
-- Table structure for table `admans`
--

CREATE TABLE IF NOT EXISTS `admans` (
  `id_admen` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_admen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cursess`
--

CREATE TABLE IF NOT EXISTS `cursess` (
  `id_C` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `nameC` varchar(30) NOT NULL,
  PRIMARY KEY (`id_C`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cursess`
--

INSERT INTO `cursess` (`id_C`, `nameC`) VALUES
(1, 'Wep Design'),
(2, 'Programming Language'),
(3, 'MicroSoft');

-- --------------------------------------------------------

--
-- Table structure for table `lecture`
--

CREATE TABLE IF NOT EXISTS `lecture` (
  `id_L` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `id_C` int(6) NOT NULL,
  `nameL` varchar(30) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `par1` text NOT NULL,
  `par2` text NOT NULL,
  `par3` varchar(100) NOT NULL,
  `img1` varchar(50) NOT NULL,
  `par4` text NOT NULL,
  `img2` varchar(50) NOT NULL,
  `vid1` varchar(50) NOT NULL,
  `vid2` varchar(50) NOT NULL,
  `poster` varchar(30) NOT NULL,
  PRIMARY KEY (`id_L`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `lecture`
--

INSERT INTO `lecture` (`id_L`, `id_C`, `nameL`, `logo`, `par1`, `par2`, `par3`, `img1`, `par4`, `img2`, `vid1`, `vid2`, `poster`) VALUES
(1, 1, 'HTML', 'images/htmllogo.svg', 'With HTML you can create your own Website plus it''s easy to learn - You will enjoy it!', '			HTML stands for Hyper Text Markup Language, it is the standard markup language for creating Web pages it describes the structure of Web pages using markup.\n			HTML elements are represented by tags, tags label pieces of content such as "heading", "paragraph", "table", and so on... Browsers do not display the HTML tags, \n			but use them to render the content of the page, they normally come in pairs The first tag in a pair is the start tag, the second tag is the end tag\n			The end tag is written like the start tag, but with a forward slash inserted before the tag name, The start tag is also called the opening tag, and the end tag the closing tag.\n</br>			Since the early days of the web, there have been many versions of HTML: HTML, HTML 0.2, HTML 3.2 ... till HTML5 in 2014.\n</br>			HTML Headings: Headings are defined with the h1 to h6 tags, h1 defines the most important heading. h6 defines the least important heading.', 'Example:', 'images/Capture1.PNG', 'HTML Lists:<br> 1.Unordered HTML List: An unordered list starts with the (ul) tag. Each list item starts with the (li) tag.\n	The list items will be marked with bullets (small black circles) by default.<br>\n	The CSS list-style-type property is used to define the style of the list item marker: disc(default),circle,square or none.<br>\n	2.Ordered HTML List:\n		An ordered list starts with the (ol) tag. Each list item starts with the (li) tag. The list items will be marked with numbers by default<br>\n		The type attribute of the ol tag, defines the type of the list item marker', 'images/Capture3.PNG', 'video/1.mp4', 'video/2.mp4', 'images/13.jpg'),
(2, 1, 'CSS', 'images/css.svg', 'What is CSS? CSS stands for Cascading Style Sheets', 'CSS describes how HTML elements are to be displayed on screen, paper, or in other media and it saves a lot of work,\n			It can control the layout of multiple web pages all at once. so it is used to define styles for your web pages, including the design, \n			layout and variations in display for different devices and screen sizes .External stylesheets are stored in CSS files<br>\n			CSS Solved a Big Problem; because HTML was NEVER intended to contain tags for formatting a web page! HTML was created to describe the content of a web page,\n			with paragraphs and headers... .When tags like &lt;font&gt;, and color attributes were added to the HTML 3.2 specification, it started a nightmare for web developers. \n			Development of large websites, where fonts and color information were added to every single page, became a long and expensive process.\n			To solve this problem, the World Wide Web Consortium (W3C) created CSS it removed the style formatting from the HTML page!', ' The look of an HTML form can be greatly improved with CSS:', 'images/Capture5.PNG', 'Navigation Bars:<br>\n	Having easy-to-use navigation is important for any web site. With CSS you can transform boring HTML menus into good-looking navigation bars.\n	A navigation bar needs standard HTML as a base, it is basically a list of links, so using the &lt; ul &gt;  and &lt; li &gt; elements makes perfect sense<br>\n	the next example shows a good looking navigation bar done with HTML and CSS:', 'images/Capture6.PNG', 'video/4.mp4', 'video/5.mp4', 'images/12.jpg'),
(3, 1, 'Java Script', 'images/icons8-javascript.svg', ' JavaScript is the programming language of HTML and the Web. and it is easy to learn!', 'JavaScript is one of the 3 languages all web developers must learn:<br>\n			1. HTML to define the content of web pages<br>\n			2. CSS to specify the layout of web pages <br>\n			3. <B>JavaScript</B> to program the behavior of web pages<br>\n			Web pages are not the only place where JavaScript is used. Many desktop and server programs use JavaScript. Node.js is the best known. Some databases, \n			like MongoDB and CouchDB, also use JavaScript as their programming language, and keep in mind that JavaScript and Java are completely different languages, \n			both in concept and design.<br>\n			with javascript you can change html content, html attribute values, html style, show and hide html elements, and much more. \n			and all of this should be contained in &lt; script &gt; and &lt; /script &gt; tags in the html document.\n			\n			JavaScript for loops:<br>\n			Loops can execute a block of code a number of times, they are handy, if you want to run the same code over and over again, each time with a different value.\n			Often this is the case when working with arrays. there are different  kinds of loops one of them is the for loop. The for loop has the following syntax:<br>\n			for (statement 1; statement 2; statement 3) {<br>\n				// code block to be executed<br>\n			}<br>\n			Statement 1 is executed (one time) before the execution of the code block.<br>\n			Statement 2 defines the condition for executing the code block.<br>\n			Statement 3 is executed (every time) after the code block has been executed.<br>', 'Examples are better than 1000 words, they are often easier to understand than text explanations', 'images/js1.PNG', 'JavaScript Array forEach() Method:<br>\n	The forEach() method calls a provided function once for each element in an array, in order. it does not execute the function for array elements without values.\n	its Syntax:<br>\n	array.forEach(function(currentValue, index, arr), thisValue)', 'images/js5.PNG', 'video/7.mp4', 'video/8.mp4', 'images/javascript.png'),
(4, 1, 'PHP', '', '', '', '', '', '', '', '', '', ''),
(5, 2, 'C', '', '', '', '', '', '', '', '', '', ''),
(6, 2, 'JAVA', '', '', '', '', '', '', '', '', '', ''),
(7, 2, 'C++', '', '', '', '', '', '', '', '', '', ''),
(8, 2, 'C#', '', '', '', '', '', '', '', '', '', ''),
(9, 3, 'Microsoft Word', '', '', '', '', '', '', '', '', '', ''),
(10, 3, 'Microsoft Power Point', '', '', '', '', '', '', '', '', '', ''),
(11, 3, 'Microsoft Office Access', '', '', '', '', '', '', '', '', '', ''),
(12, 3, 'Microsoft Excel', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `userType` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `firstname`, `lastname`, `email`, `password`, `userType`) VALUES
(1, 'ola', 'khoja', 'olakhoja21@gmail.com', '1234', 1),
(2, 'hajer', 'layas', 'hajerlayas@gmail.com', '1234', 0),
(3, 'olaaaa', 'khojaaaa', 'ola@example.com', '1234', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
