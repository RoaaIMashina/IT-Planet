<?php 
include 'nav.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "itplanet";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>

<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
	   <style>  
              
                .la{ font-size: 15px;}
                .box  
                {  
                        width: 1480px;
    padding: 20px;
    background-color: RGB(224,241,255);
    border: 1px solid #ccc;
    border-radius: 44px;
    margin-top: 240px; 
                }
                .table-responsive {margin: auto;
                  height: 55%;
    width:63%;
    min-height: .01%;
    overflow-x: auto;}
    .table {
    	
    width: 100%;
    max-width: 100%;
    margin-bottom: 20px; }

    tbody {    background: #ebeff2;
    border: solid #a6a9ab;
    border-radius: 86px;
  font-size: 10px;} 

    .table-bordered {
    border: 1px solid #0a0a0a;}
           </style> 
</head>
<body>
	  <?php
include 'admin.php';
?>
<p style="margin: 208px 10px 25px 650px;
    font-size: 27px;">The user Table</p>
                <div id="user_table" class="table-responsive">
                	<table class="table table-bordered table-striped">




                		  <tr>  
                      
                     <th width="2%">ID</th>
                       <th width="2%">First Name</th>
                     <th width="5%">Last Name</th>
                     <th width="35%">Email</th> 
                     <th width="5%">Password</th>
                </tr>
                <?php   $sql = "SELECT * FROM users WHERE userType=0";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
       
   echo'
                <tr>
                    <td>'.$row["id_user"].'</td>  
                     <td>'.$row["firstname"].'</td> 
                     <td>'.$row["lastname"].'</td> 
                    <td>'.$row["email"].'</td> 
                    <td>'.$row["password"].'</td> 
                </tr>'; }}?>
                	</table>

                </div>  
           </div> 
           <?php  
  include 'footer.php';?> 

</body>
</html>