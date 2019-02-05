
<?php  
//@roaa mashina  
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
           <title>Add courses</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <style>  
                body  
                {  
                     margin:0;  
                     padding:0;  
                     background-color:#f1f1f1;  
                }  
                .box  
                {  
                        width: 1666px;
    padding: 20px;
    background-color: RGB(224,241,255);
    border: 1px solid #ccc;
    border-radius: 44px;
    margin-top: 100px; 
                }
                .table-responsive {
    width: 100%;
    min-height: .01%;
    overflow-x: auto;}
    .table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 20px; }

    tbody {    background: #ebeff2;
    border: solid #a6a9ab;
    border-radius: 86px;} 

    .table-bordered {
    border: 1px solid #0a0a0a;}
           </style>  
      </head>  
      <body>  
           <div class="container box">  
                <h3 align="center">Add Courses</h3><br />  
                <br />  

                <button type="button" name="add" class="btn btn-success" data-toggle="collapse" data-target="#user_collapse">Add</button>  
                <br /><br />  
                <div id="user_collapse" class="collapse">  
                     <form method="post" id="user_form"> 
<p style="font-size: 20px;
    margin: 0 0 10px"> Type Of Courses</p>
  <ul style="    font-size: 16px;
    list-style-type: none;">
                     <?php
$sql = "select id_C, nameC FROM cursess;";
 $result = $conn->query($sql);

 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
 echo '<li  ><input type="radio" id="id" name="id" value='.$row['id_C'].'>' . $row['nameC'] . '</li>';}}?> 
</ul> <br /> <br />  
                          <label>Enter the paht of logo</label>  
                          <input type="text" name="logo" id="logo" class="form-control" />  
                          <br />  
                          <label>Enter name of course</label>  
                          <input type="text" name="name" id="name" class="form-control" />  
                          <br />  
                          <label>enter explanation</label>  
                          <input type="text" name="exp" id="exp" class="form-control"/>  
                          <br />  
                          <label>enter content of course</label>  
                          <input type="text" name="cont" id="cont" class="form-control"/>  
                          <br /> 
                          <label>enter example</label>  
                          <input type="text" name="exa" id="exa" class="form-control"/>  
                          <br /> 
                          <label>enter paht of image 1</label>  
                          <input type="text" name="im1" id="im1" class="form-control"/>  
                          <br /> 
                          <label>enter explaint about the images</label>  
                          <input type="text" name="ex" id="ex" class="form-control"/>  
                          <br /> 
                          <label>enter path of image 2</label>  
                          <input type="text" name="im2" id="im2" class="form-control"/>  
                          <br /> 
                          <label>enter path of video 1</label>  
                          <input type="text" name="v1" id="v1" class="form-control"/>  
                          <br /> 
                          <label>enter path of video 2</label>  
                          <input type="text" name="v2" id="v2" class="form-control"/>  
                          <br /> 
                          <label>enter path of poster</label>  
                          <input type="text" name="p" id="p" class="form-control"/>  
                          <br /> 
                          <div align="center">  
                               <input type="hidden" name="action" id="action" />  
                               <input type="submit" name="button_action" id="button_action" class="btn btn-default" value="Insert" />  
                          </div>  
                  

                   </form>
                   </div>  


                <br /><br /> 

                <div id="user_table" class="table-responsive">  
                </div>  
           </div>  
      </body>  
 </html>  
 <script type="text/javascript">  
      $(document).ready(function(){  
           load_data(); 
           $('#action').val("Insert"); 
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
                var logo = $('#logo').val();  
                var name = $('#name').val();
                var exp = $('#exp').val();  
                var cont = $('#cont').val();  
                var exa = $('#exa').val();
                var im1 = $('#im1').val();  
                var ex = $('#ex').val();  
                var im2 = $('#im2').val();
                var v1 = $('#v1').val();  
                var v2 = $('#v2').val();  
                var p = $('#p').val();
                
 if(id != '' && logo != ''&& name != '')  
                {  
                     $.ajax({  
                          url:"action.php",  
                          method:"POST",  
                          data:new FormData(this),  
                          contentType:false,  
                          processData:false,  
                          success:function(data)  
                          {  
                               alert(data);  
                               $('#user_form')[0].reset();  
                               load_data();  
                          }  
                     })  
                }  
                else  
                {  
                     alert("Both Fields are Required");  
                }  
           });  

      });  
 </script>  