<?php
$servername="localhost";
$username="root";
$password="";
$dbname="item";
//create connection
$conn= new mysqli($servername,$username,$password,$dbname);
//check connection
if($conn->connect_error){
 die("connection failed:".$conn->connect_error);
 }
 // add item
 if(isset($_POST["go"])) {
 $name = $_POST['name'];
 $id =$_POST["id"];
 $price=$_POST["price"];
       $d=mysqli_connect("localhost","root","","item");
       if($d===false){
       die("error".mysqli_connect_error());}
       else {$r=("insert into items (itemno, itemname, itemprice) VALUES ('$id','$name','$price')");}
       if(mysqli_query($d,$r)){
       
          $result=mysqli_query($d,$r); 
       header("Location: q2_215180179_form.php ");}
          
              
                             else {
echo"no".mysqli_error($d);}}
?>
