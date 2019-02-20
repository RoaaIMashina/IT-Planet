<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<script src="jquery-3.3.1.min.js"></script> 
	<script>

	</script>
</head>
<body>
	<form action="q2_215180313.php" method="post" >
	<label> id <input type="number" name="id"></label><br><br>
	<label> name <input type="text" name="name"></label><br><br>
	<label> price <input type="text" name="price"></label><br><br>
	<input type ="submit" name="add" value="add">
	</form>
	<?php
		
		
		if(isset($_POST["add"])) {
		
			$server="localhost";
			$username="root";
			$password="";
			$dbname="net2exam";
			
			$fid=$_POST["id"];
			$fname=$_POST['name'];
			$fprice=$_POST['price'];
		
			$conn=new mysqli($server,$username,$password, $dbname);
			if($conn){
				$sql= "INSERT INTO items (itemno, itemname,itemprice)
				VALUES ('$fid', '$fname', '$fprice')";
				$result=mysqli_query($conn,$sql);
			}
			else{
				echo "connection failed";
			}
	}
	?>
</body>