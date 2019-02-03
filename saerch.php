<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Webslesson Tutorial</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
 </head>
 <body>
  <div class="container">
   <br />
 <script>
$(document).ready(function(){
  $("span").click(function(){
    $("div").remove(".t");
  });
});

</script>
<style>

.closed {
  position: absolute;
  top:80px;
 left:480px;
  color: #00BCD4;
  font-size: 20px;
  font-weight: bold;
  transition: 0.3s;
}

.closed:hover,
.closed:focus {
  color: #117A65;
  text-decoration: none;
  cursor: pointer;
}
.input-group{
	 margin-left:-160px;
}
#result {
		 margin-left:-1000px;
	
	
}
</style>
</head>
<body>


   <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon"  style="  background-color:#a6c1ee;"  >Search</span>
     <input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" style="width:30%" />
    </div>
<span class="closed" onclick="closeModal()">&times;</span>

   </div>
   <br />
   <div id="result" class="t"></div>
  </div>
 </body>
</html>
<script>
 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }}); }
 $('#search_text ').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }});
  
</script>
