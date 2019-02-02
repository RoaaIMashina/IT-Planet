<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "itplanet");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM lecture 
  WHERE nameL LIKE '%".$search."%'
  OR id_C LIKE '%".$search."%' 

 ";
}
else
{
 $query = "
  SELECT * FROM lecture ORDER BY nameL
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
   
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <ul >
    <li >'.$row["nameL"].'</li>


   </ul>
  ';
 }
 echo $output;
}

else
{
 echo 'Data Not Found';
}

?>

