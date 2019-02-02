
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
?>
</body>
</html>
