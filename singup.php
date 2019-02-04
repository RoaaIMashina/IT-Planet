<?php
       $Fname =$_POST["Fname"];
       $Lname =$_POST["Lname"];
       $email=$_POST["email"];
       $Password  =$_POST["Password"];
       $d=mysqli_connect("localhost","root","","ITPLANET");
       if($d===false){
       die("error".mysqli_connect_error());}
       else {$r=("insert into users (firstname, lastname,email,Password) VALUES ('$Fname','$Lname','$email','$Password')");}
       if(mysqli_query($d,$r)){
       
          $result=mysqli_query($d,$r); 
       header("Location: index.php ");}
          
              
                             else {
echo"no".mysqli_error($d);}

