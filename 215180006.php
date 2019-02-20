<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="members-content">
			
					<form method="POST"class="">  
					  <input type="hidden" name="" value="true">
					  
					   <p>
						<strong  class= "emstyle"> number of prodact </strong><br>
						<input type="itemno" name="number"  required>
					  </p>
		
					  <p>
					   <strong>name of prodact </strong><br>
					   <input type="itemname" name="name"  required>
					  </p>
		                  <p>
					   <strong>price of prodact </strong><br>
					   <input type="itemprice" name="price" required>
					  </p>
					  
					  <p id="response">  </p>
					  <p>
					
					 <input type="submit"  class="btn btn-primary" value="add"  name="add"> 
					  </p>
		
					</form>                            
			 </div>
	  </section>
	</div>
	</body>
</html>

<?php
$host="localhost";
$user="root";
$pass="";
$dbname="items";

$con=mysqli_connect($host,$user,$pass,$dbname);
if (!$con) {
    die(" failed: " . mysqli_connect_error());
}
if(isset($_POST["add"])){
	$number=$_POST["number"];
	$name=$_POST["name"];
	$price=$_POST["price"];
$r ="INSERT INTO items (itemno, itemname, itemprice) VALUES ('$number','$name','$price')";
if (mysqli_query($con, $r)) {
    echo "ok";

} 
else {  echo "error";}
}

?>
