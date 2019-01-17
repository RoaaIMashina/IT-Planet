<?php 
include "nav.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>


	<div id="contact-form">
<form id="contact" method="post" >
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



  
  <footer id="footer" class="midnight-blue">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="text-center">
            <a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
          </div>
          &copy; OnePage Theme. All Rights Reserved.
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=OnePage
            -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>

        <div class="top-bar">
          <div class="col-lg-12">
            <div class="social">
              <ul class="social-share">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a href="#"><i class="fa fa-skype"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/#footer--> 

</body>

</html>
