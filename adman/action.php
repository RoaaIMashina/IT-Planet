<?php 
//@roaa mashina 
 //select courses
 //insert to table  
include 'CursessTable.php';
 $object = new CT();  
 if(isset($_POST["action"]))  
 {  
      if($_POST["action"] == "Load")  
      {  
           echo $object->get_data_in_table("SELECT * FROM lecture ORDER BY id_L ASC");  
      }  
  if($_POST["action"] == "Insert")  
      {  
             
           $id =mysqli_real_escape_string($object->connect, $_POST["id"]);  
            $logo = mysqli_real_escape_string($object->connect, $_POST["logo"]);  
           $name =mysqli_real_escape_string($object->connect, $_POST["name"]);
           $exp =mysqli_real_escape_string($object->connect, $_POST["exp"]);  
           $cont =mysqli_real_escape_string($object->connect, $_POST["cont"]);  
           $exa =mysqli_real_escape_string($object->connect, $_POST["exa"]);
           $im1 = mysqli_real_escape_string($object->connect, $_POST["im1"]);  
           $ex =mysqli_real_escape_string($object->connect, $_POST["ex"]);  
           $im2 =mysqli_real_escape_string($object->connect, $_POST["im2"]);
           $v1 =mysqli_real_escape_string($object->connect, $_POST["v1"]);  
           $v2 =mysqli_real_escape_string($object->connect, $_POST["v2"]);  
           $p=mysqli_real_escape_string($object->connect, $_POST["p"]); 


           $query = "  
          INSERT INTO `lecture`( `id_C`, `nameL`, `logo`, `par1`, `par2`, `par3`, `img1`, `par4`, `img2`, `vid1`, `vid2`, `poster`) VALUES ('".$id."', '".$logo."', '".$name."', '".$exp."', '".$cont."', '".$exa."', '".$im1."', '".$ex."', '".$im2."', '".$v1."', '".$n2."', '".$p."')  
           ";  
           $object->execute_query($query);  
           echo 'Data Inserted';  
      } 
  
  //aya.almokhzanji@gmail.com
  //delet from table
   if($_POST["action"] == "Delete")  
      {    
  $id =mysqli_real_escape_string($object->connect, $_POST["id"]);  
    $checkbox = $_POST['id'];
for($i=0;$i<count($checkbox);$i++){
$del_id = $checkbox;
$sql2 = "DELETE FROM lecture WHERE id_L =' $del_id'";
$object->execute_query($sql2);  
           echo 'Data Deleted'; 
}}
    
            

}
 


  
 ?>  
