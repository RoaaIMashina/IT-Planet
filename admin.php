<!--@roaa mashina -->
<!--Adman setting -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script>function closeModal() {
  document.getElementById('b').style.display = "none";
}</script>
 <div id="a" style=" display: none; 
  position: fixed; 
  z-index: 1; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  background-color: black; 
  background-color: rgba(0,0,0,0.69); ">
   <div class="modal-content">  

                             <span class="close cursor" onclick="closeModal()">&times;</span>
   </div>
    <section id="b" style=" width: 26%;
    margin-bottom: 106px;
    margin-top: 177px;
    padding: 50px;
    text-align: center;
    margin-left: auto;
    margin-right: auto;">
    
<div style="padding-top:47px;
  padding-bottom: 21px;
  background:#eee;
  margin:auto;
  border:1px solid black;    
  margin-top: 143px;
  border-radius: 49px;
  background-color:#cfeaf3;">
  <p style="
    color: #053d6a;
    text-align: center;
    font-size: 30px;
    margin-top: -34px;">Admin settings</p>
<ul style="list-style-type: none;
    margin-left: -43px;">
  <li><a href="adman/addcourse.php">Add Courses</a></li>
<li><a href="adman/deletcourses.php">Delete Courses</a></li>
<li><a href="adman/user.php">user Details</a></li>
</ul>

</div>


  </section>
</div>
</body>
</html>