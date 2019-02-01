<?php 
include "nav.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link href="css/contactus.css" rel="stylesheet">
</head>

<body>


	<div id="contact-form">
<form  method="post" >
<fieldset>
<p>
<label> Name </label>
<input type="text" name="fistname" placeholder="name" autofocus="autofocus" class="input1"  /><br/>
</p>
<p>
<label> E-mail Address </label>
<input type="email" name="email" placeholder="email address" required class="input1" /><br/>
</p>
<p>
<label> Phone Number</label>
<input type="text" id="phone" class="input1" placeholder="phone number " pattern="[0-9]{3}[0-9]{3}[0-9]{4}" title="xxx-xxx-xxxx"/><br/>
</p>
<label>Sex:</label>
<p>
<input type="radio" name="gender" value="male"  class="input2" checked> Male

<input type="radio" name="gender" value="female"  class="input2" > Female
</p>

<p>
<label>Notes</label>
</p>
<p>
<textarea></textarea>
</p>
<p class="submit">		
<input type="submit" name="submit" id="submit" value="submit" class="input1"/>
</p>
</fieldset>
</form>
</div>



  
 <?php
include 'footer.php';
?>
  <!--/#footer--> 

</body>

</html>
