
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="ITPLANET";
//create connection
$conn= new mysqli($servername,$username,$password,$dbname);
//check connection
if($conn->connect_error){
 die("connection failed:".$conn->connect_error);
 
}
 //echo"connected successfully";
//create database
 /*$sql = "CREATE DATABASE ITPLANET";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}*/
// sql to create table
/*$sql = "CREATE TABLE Users(
id_user INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
password VARCHAR(50) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Table Users created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}*/
/*$sql = "CREATE TABLE Admans(
id_admen INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
password VARCHAR(50) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Table Admans created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}*/
/*$sql = "CREATE TABLE Cursess(
id_C INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
nameC VARCHAR(30) NOT NULL)";
if ($conn->query($sql) === TRUE) {
    echo "Table Cursess created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}*/
/*$sql = "CREATE TABLE lecture(
id_L INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
nameL VARCHAR(30) NOT NULL,
id_C INT(6)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table leture created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}*/
 
/*$cours="INSERT INTO Cursess(id_C,nameC) VALUES (1,'Wep Design')";
if($conn-> query($cours) === TRUE){
echo "insert successfully";
} else
echo "Error";
$cours="INSERT INTO Cursess(id_C,nameC) VALUES (2,'Programming Language')";
if($conn-> query($cours) === TRUE){
echo "insert successfully";
} else
echo "Error";
$cours="INSERT INTO Cursess(id_C,nameC) VALUES (3,'MicroSoft')";
if($conn-> query($cours) === TRUE){
echo "insert successfully";
} else
echo "Error";
*/
/*$lec="INSERT INTO lecture (id_L,id_C,nameL) VALUES (1,1,'HTML')";
if($conn-> query($lec) === TRUE){
echo "insert successfully";
} else
echo "Error";
$lec="INSERT INTO lecture (id_L,id_C,nameL) VALUES (2,1,'CSS')";
if($conn-> query($lec) === TRUE){
echo "insert successfully";
} else
echo "Error";
$lec="INSERT INTO lecture (id_L,id_C,nameL) VALUES (3,1,'Java Script')";
if($conn-> query($lec) === TRUE){
echo "insert successfully";
} else
echo "Error";
$lec="INSERT INTO lecture (id_L,id_C,nameL) VALUES (4,1,'PHP')";
if($conn-> query($lec) === TRUE){
echo "insert successfully";
} else
echo "Error";
$lec="INSERT INTO lecture (id_L,id_C,nameL) VALUES (5,2,'C')";
if($conn-> query($lec) === TRUE){
echo "insert successfully";
} else
echo "Error";
$lec="INSERT INTO lecture (id_L,id_C,nameL) VALUES (6,2,'JAVA')";
if($conn-> query($lec) === TRUE){
echo "insert successfully";
} else
echo "Error";
$lec="INSERT INTO lecture (id_L,id_C,nameL) VALUES (7,2,'C++')";
if($conn-> query($lec) === TRUE){
echo "insert successfully";
} else
echo "Error";
$lec="INSERT INTO lecture (id_L,id_C,nameL) VALUES (8,2,'C#')";
if($conn-> query($lec) === TRUE){
echo "insert successfully";
} else
echo "Error";
$lec="INSERT INTO lecture (id_L,id_C,nameL) VALUES (9,3,'Microsoft Word')";
if($conn-> query($lec) === TRUE){
echo "insert successfully";
} else
echo "Error";
$lec="INSERT INTO lecture (id_L,id_C,nameL) VALUES (10,3,'Microsoft Power Point')";
if($conn-> query($lec) === TRUE){
echo "insert successfully";
} else
echo "Error";
$lec="INSERT INTO lecture (id_L,id_C,nameL) VALUES (11,3,'Microsoft Office Access')";
if($conn-> query($lec) === TRUE){
echo "insert successfully";
} else
echo "Error";
$lec="INSERT INTO lecture (id_L,id_C,nameL) VALUES (12,3,'Microsoft Excel')";
if($conn-> query($lec) === TRUE){
echo "insert successfully";
} else
echo "Error";
*/
 
    
?>
</body>
</html>