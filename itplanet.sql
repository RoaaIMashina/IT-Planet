-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2019 at 03:03 PM
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
(1, 'Web Design'),
(2, 'Programming Language'),
(3, 'Microsoft');

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
(4, 1, 'PHP', 'images/icons8-php-logo-filled.svg', 'The term PHP is an acronym for PHP: Hypertext Preprocessor.<br> PHP is a server-side scripting language designed specifically for web development.<br>\n<ul> <li>Websites like www.facebook.com, www.yahoo.com are also built on PHP.</li>\n<li>	One of the main reason behind this is that PHP can be easily embedded in HTML files and HTML codes can also be written in a PHP file.</li>\n<li>	The thing that differentiates PHP with client-side language like HTML is, PHP codes are executed on server whereas HTML codes are directly rendered on the browser. PHP codes are first executed on the server and then the result is returned to the browser.</li>\n<li>	The only information that the client or browser knows is the result returned after executing the PHP script on the server and not the actual PHP codes present in the PHP file. Also, PHP files can support other client-side scripting languages like CSS and JavaScript.\n</li>', '', 'lets see how php code is written with this example:', 'images/php.PNG', 'Why should we use PHP?<br>\nPHP can actually do anything related to server-side scripting or more popularly known as the backend of a website. For example, PHP can receive data from forms, generate dynamic page content, can work with databases, create sessions, send and receive cookies, send emails etc. There are also many hash functions available in PHP to encrypt user''s data that makes PHP secure and reliable to be used as a server-side scripting language. So these are some of the abilities of PHP that makes it suitable to be used as server-side scripting language. You will get to know more of these abilities in further tutorials.<br>\nEven if you are not convinced by the above abilities of PHP, there are some more features of PHP. PHP can run on all major operating systems like Windows, Linux, Unix, Mac OS X etc. Almost all of the major servers available today like Apache supports PHP. PHP allows using wide range of databases. And the most important factor is that it is free to use and download and anyone can download PHP from its official source : www.php.net.\n', 'images/php2.PNG', 'video/phpVideo1.mp4', 'video/phpVideo2.mp4', 'images/phpCover.jfif'),
(5, 2, 'C', 'images/icons8-c-programming.svg', 'C is a procedural programming language. It was initially developed by Dennis Ritchie between 1969 and 1973.<br> It was mainly developed as a system programming language to write operating system. The main features of C language include low-level access to memory, simple set of keywords, and clean style, these features make C language suitable for system programming like operating system or compiler development.<br>', '', '', 'images/11.PNG', 'Many later languages have borrowed syntax/features directly or indirectly from C language. Like syntax of Java, PHP, JavaScript and many other languages is mainly based on C language. C++ is nearly a superset of C language (There are few programs that may compile in C, but not in C++).<br>\nStructure of a C program:\nAfter the above discussion, we can formally assess the structure of a C program. By structure, it is meant that any program can be written in this structure only. Writing a C program in any other structure will hence lead to a Compilation Error.\n<br> here is an example written in C :', 'images/12.PNG', 'video/CVideo1.mp4', 'video/CVideo2.mp4', 'images/cCover.jfif'),
(6, 2, 'JAVA', 'images/icons8-java.svg', 'JAVA was developed by Sun Microsystems Inc in 1991, later acquired by Oracle Corporation. It was developed by James Gosling and Patrick Naughton. It is a simple programming language.  Writing, compiling and debugging a program is easy in java.  It helps to create modular programs and reusable code.<br>', 'Java terminology:\nBefore we start learning Java, lets get familiar with common java terms.<br>\nJava Virtual Machine (JVM):<br>\nThis is generally referred as JVM. Before, we discuss about JVM lets see the phases of program execution. Phases are as follows: we write the program, then we compile the program and at last we run the program.<br>\n1) Writing of the program is of course done by java programmer like you and me.<br>\n2) Compilation of program is done by javac compiler, javac is the primary java compiler included in java development kit (JDK). It takes java program as input and generates java bytecode as output.<br>\n3) In third phase, JVM executes the bytecode generated by compiler. This is called program run phase.\n', 'lets have an example:', 'images/9.PNG', 'So, now that we understood that the primary function of JVM is to execute the bytecode produced by compiler. Each operating system has different JVM, however the output they produce after execution of bytecode is same across all operating systems. That is why we call java as platform independent language.', 'images/10.PNG', 'video/javaVid1.mp4', 'video/java2.mp4', 'images/javaCover.jpeg'),
(7, 2, 'C++', 'images/Cplus_Logo.svg', 'C++, as we all know is an extension to C language and was developed by Bjarne stroustrup at bell labs. C++ is an intermediate level language, as it comprises a confirmation of both high level and low level language features. C++ is a statically typed, free form, multiparadigm, compiled general-purpose language.<br>\nC++ is an Object Oriented Programming language but is not purely Object Oriented. Its features like Friend and Virtual, violate some of the very important OOPS features, rendering this language unworthy of being called completely Object Oriented. Its a middle level language.\n', '', 'lets see how c++ code is written with this example:', 'images/15c++.PNG', 'Benefits of C++ over C Language <br>\nThe major difference being OOPS concept, C++ is an object oriented language whereas C language is a procedural language. Apart form this there are many other features of C++ which gives this language an upper hand on C laguage.\nFollowing features of C++ makes it a stronger language than C: <br>\n1.	There is Stronger Type Checking in C++.<br>\n2.	All the OOPS features in C++ like Abstraction, Encapsulation, Inheritance etc makes it more worthy and useful for programmers. <br>\n3.	C++ supports and allows user defined operators (i.e Operator Overloading) and function overloading is also supported in it. <br>\n4.	Exception Handling is there in C++.<br>\n5.	The Concept of Virtual functions and also Constructors and Destructors for Objects. <br>\n6.	Inline Functions in C++ instead of Macros in C language. Inline functions make complete function body act like Macro, safely. <br>\n7.	Variables can be declared anywhere in the program in C++, but must be declared before they are used. <br><br>\nhere is an example to calculate the area of rectangle:', 'images/13c++.PNG', 'video/c++Vid1.mp4', 'video/CplusVid2.mp4', 'images/cplusCover.jfif'),
(8, 2, 'C Sharp', 'images/icons8-c-sharp-logo.svg', 'C# syntax is highly expressive, yet it is also simple and easy to learn. The curly-brace syntax of C# will be instantly recognizable to anyone familiar with C, C++ or Java. Developers who know any of these languages are typically able to begin to work productively in C# within a very short time. C# syntax simplifies many of the complexities of C++ and provides powerful features such as nullable value types, enumerations, delegates, lambda expressions and direct memory access, which are not found in Java. C# supports generic methods and types, which provide increased type safety and performance, and iterators, which enable implementers of collection classes to define custom iteration behaviors that are simple to use by client code. Language-Integrated Query (LINQ) expressions make the strongly-typed query a first-class language construct.', 'As an object-oriented language, C# supports the concepts of encapsulation, inheritance, and polymorphism. All variables and methods, including the Main method, the application''s entry point, are encapsulated within class definitions. A class may inherit directly from one parent class, but it may implement any number of interfaces. Methods that override virtual methods in a parent class require the override keyword as a way to avoid accidental redefinition. In C#, a struct is like a lightweight class; it is a stack-allocated type that can implement interfaces but does not support inheritance.', 'lets see how c# code is written with this example:', 'images/1csharp.PNG', 'In addition to these basic object-oriented principles, C# makes it easy to develop software components through several innovative language constructs, including the following:<br><ul>\n<li>Encapsulated method signatures called delegates, which enable type-safe event notifications.</li>\n<li>Properties, which serve as accessors for private member variables. </li>\n<li>Attributes, which provide declarative metadata about types at run time. </li>\n<li>Inline XML documentation comments. </li>\n<li>Language-Integrated Query (LINQ) which provides built-in query capabilities across a variety of data sources. </li></ul>\n', 'images/1csharp.PNG', 'video/Part 35 - CSharp1.mp4', 'video/Part 48   CSharp2.mp4', 'images/csharpCover.jfif'),
(9, 3, 'Microsoft Word', 'images/icons8-microsoft-word.svg', 'Microsoft Word or MS-WORD (often called Word) is a Graphical word processing program that users can type with. It is made by the computer company Microsoft. Its purpose is to allow users to type and save documents.<br> And here is a picture shoing the interface you get when you want to start a new file:', '', '', 'images/Slide131.jpg', 'History of Word Processing\nThe earliest word processors were standalone machines similar to electric typewriters that debuted in the 1960s. The great advantage of these early machines over using a typewriter was that you could make changes without retyping the entire document. Over time, the devices acquired more advanced features, such as the ability to save documents on a disk, elaborate formatting options, and spell-checking.<br>\nWhile there are still some standalone word processors in use today, word processing began to move to personal computers in the 1980s. In the early days of the PC, a word processor called WordPerfect became one of the most widely used applications of any kind. Over time, however, What You See Is What You Get (WYSIWYG) word processors that showed users exactly what would print on their final documents became more popular. one of those WYSISWG word processors, Microsoft Word, became dominant in the 1990s.', 'images/Word_2013_On_Windows_8.1.png', 'video/Microsoft Word 1.mp4', 'video/Microsoft Word2.mp4', 'images/images.jfif'),
(10, 3, 'Microsoft Power Point', 'images/icons8-microsoft-powerpoint.svg', 'What is PowerPoint?', 'PowerPoint is a computer program that allows you to create and show slides to support a presentation. You can combine text, graphics and multi-media content to create professional presentations. As a presentation tool PowerPoint can be used to:<br>\n\n1.organise and structure your presentation;<br>\n2.create a professional and consistent format;<br>\n3.provide an illustrative backdrop for the content of your presentation;<br> 4.animate your slides to give them greater visual impact.\n', '', 'images/PP1.png', 'PowerPoint has become enormously popular and you are likely to have seen it used by your lecturers and fellow students or in a presentation outside of the University. Learning to present with PowerPoint will increase your employability as it is the world''s most popular presentational software. Used well, PowerPoint can improve the clarity of your presentations and help you to illustrate your message and engage your audience. The strategies contained in this study guide will help you to use PowerPoint effectively in any type of presentation', 'images/p2.png', 'video/PPV1.mp4', 'video/PPV2.mp4', 'images/ppcover.jpg'),
(11, 3, 'Microsoft Office Access', 'images/icons8-microsoft-access.svg', 'Microsoft Access is a database management system (DBMS) from Microsoft that combines the relational Microsoft Jet Database Engine with a graphical user interface and software-development tools. It is a member of the Microsoft Office suite of applications, included in the Professional and higher editions or sold separately.', 'Microsoft Access stores data in its own format based on the Access Jet Database Engine. It can also import or link directly to data stored in other applications and databases', '', 'images/how_to_create_a_totals_row_in_access.png', 'Software developers, data architects and power users can use Microsoft Access to develop application software. Like other Microsoft Office applications, Access is supported by Visual Basic for Applications (VBA), an object-based programming language that can reference a variety of objects including DAO (Data Access Objects), ActiveX Data Objects, and many other ActiveX components. Visual objects used in forms and reports expose their methods and properties in the VBA programming environment, and VBA code modules may declare and call Windows operating system operations.<br>', 'images/access-matrix.png', 'video/Access 2016 1.mp4', 'video/Microsoft Access 2016.mp4', 'images/accessCover.jfif'),
(12, 3, 'Microsoft Excel', 'images/icons8-microsoft-excel.svg', 'If you have Microsoft Office installed, but have never touched Excel before because you either didn''t know how to use it or didn''t know what it could do for you, then you MUST read this post on learning how to use Excel!', '', '', 'images/MSE1.png', 'Microsoft Excel is a powerful spreadsheet application that can be used for anything from a simple database all the way up to a full fledged Windows application full with windows forms, macros, and add-ons. You can use Excel to calculate a car loan payment, graph data, manage customer records, keep an address book, etc. <br>\nExcel is currently used by most large financial institutions for daily financial data analysis. It has a huge range of financial functions, formulas, and add-ons that allows you to use Excel to store and analyze data in a simple, quick way.\n', 'images/MSE2.png', 'video/Microsoft Excel1.mp4', 'video/Microsoft Excel2.mp4', 'images/excelcover.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(6) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `userType` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `firstname`, `lastname`, `email`, `password`, `userType`) VALUES
(1, 'ola', 'khoja', 'olakhoja21@gmail.com', '1234', 1),
(2, 'olaaaa', 'khojaaaa', 'ola@example.com', '1234', 0),
(3, 'roaa', 'mashina', 'roaa@gmail.com', '1234', 0),
(4, 'roaa', 'mashina', 'roaa@gmail.com', '1234', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
