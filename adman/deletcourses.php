 <?php  
//aya.almokhzanji@gmail.com
 // Delete Courses
  include 'nav.php'; 
 include 'CursessTable.php';  
 $object = new CT();
 $servername="localhost";
$username="root";
$password="";
$dbname="ITPLANET";

//create connection
$conn= new mysqli($servername,$username,$password,$dbname);
  
 ?>  
 <html>  
      <head>  
           <title>PHP Mysql Ajax Crud using OOPS - Fetch Data</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <style>  
               .box  
                {  
                        width: 1480px;
    padding: 20px;
    background-color: RGB(224,241,255);
    border: 1px solid #ccc;
    border-radius: 44px;
    margin-top: 240px; 
                }
                .table-responsive {
                  height: 55%;
    width: 100%;
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
           <div class="container box">  
                <h3 align="center">Delete Courses</h3><br />  
                <br />  

                <button type="button" name="Delete" class="btn btn-success" data-toggle="collapse" data-target="#user_collapse">Delete</button>  
                <br /><br />  
                <div id="user_collapse" class="collapse">  
                     <form method="post" id="user_form"> 
<p style="font-size: 20px;
    margin: 0 0 10px"> Type Of Courses</p>
                     <?php
 $sql = "select id_C, nameC FROM cursess;"; 

 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
echo '<p>'.$row['nameC'] .'</p><ul style="    font-size: 16px;
    list-style-type: none;"">';

$sql1 = "select id_L, nameL FROM lecture WHERE id_C='".$row['id_C']."' ;";
 $result1 = $conn->query($sql1);
 if ($result1->num_rows > 0) {
    // output data of each row
    while($row1 = $result1->fetch_assoc()) {
 echo '<li><input type="radio" id="id" name="id" value='.$row1['id_L'].'>' . $row1['nameL'] . '</li>';}}echo '</ul>'; }}?> 
 <br /> <br />  
 <div align="center">  
                               <input type="hidden" name="action" id="action" />  
                               <input type="submit" name="button_action" id="button_action" class="btn btn-default" value="Delete" />  
                          </div> 
                   </form>
                   </div>  


                <br /><br /> 
<p style="margin: 10px 10px 25px 468px;
    font-size: 27px;">The Courses Table</p>
                <div id="user_table" class="table-responsive">  
                </div>  
           </div>  
            <?php  
  include 'footer.php';?> 
      </body>  
 </html>  
 <script type="text/javascript">  
      $(document).ready(function(){  
           load_data(); 
           $('#action').val("Delete"); 
           function load_data()  
           {  
                var action = "Load";  
                $.ajax({  
                     url:"action.php",  
                     method:"POST",  
                     data:{action:action},  
                     success:function(data)  
                     {  
                          $('#user_table').html(data); 

                     }  
                });  
           } 

  $('#user_form').on('submit', function(event){  
                event.preventDefault();  
                var id = $('#id').val();  
               
 
                     $.ajax({  
                          url:"action.php",  
                          method:"POST",  
                          data:new FormData(this),  
                          contentType:false,  
                          processData:false,  
                          success:function(data)  
                          {  
                               alert();  
                               $("#id")[0].reset();  
                               load_data();

                          }  
                     })  
               
           });  

      });  
 </script>  