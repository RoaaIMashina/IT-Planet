<!DOCTYPE html>
<!--aya.mokhzanji-->  
 <html>  
      <head>  
        
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" /> 
          
      </head>  
      <body>  
           <br /><br />    
           <div class="form-group">
    <div class="input-group">
            <span class="input-group-addon"  style="  background-color:#a6c1ee;"  >Search</span>
                <input type="text" name="search" id="search" class="form-control" placeholder="Enter cours Name" style="width:15%"/>  
                
           </div> <div id="searchList"style="width:20%"></div>   </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#search').keyup(function(){  
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"search.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#searchList').fadeIn();  
                          $('#searchList').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', 'li', function(){  
           $('#search').val($(this).text());  
           $('#searchList').fadeOut();  
      });  
 });  
 </script>  