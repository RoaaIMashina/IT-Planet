
<?php  
//aya.mokhzanji
 $connect = mysqli_connect("localhost", "root", "", "itplanet");  
 if(isset($_POST["query"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM lecture WHERE nameL LIKE '%".$_POST["query"]."%'";  
      $result = mysqli_query($connect, $query);  
      $output = '<ul class="list-unstyled">';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<li>'.$row["nameL"].'</li>';  
           }  
      }  
      else  
      {  
           $output .= '<li>cours Not Found</li>';  
      }  
      $output .= '</ul>';  
      echo $output;  
 }  
 ?>  