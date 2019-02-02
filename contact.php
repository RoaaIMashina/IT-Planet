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


<div id="contact2">
	   <section id="features" class="login">
			<div class="center">
			  <div class="col-md-6 col-md-offset-3">
				<h2 class="h2">Log in</h2>
				<hr>
			   
			  </div>
			</div> 
			 <div class="members-content">
			
					<form method="POST" action="mylogin.php" class="login-form">  
					  <input type="hidden" name="login" value="true">
					  
					   <p>
						<strong> Email: </strong><br>
						<input type="email" name="uid" id="uid" required>
					  </p>
		
					  <p>
					   <strong>Password: </strong><br>
					   <input type="password" name="pwd" id="pwd" required>
					  </p>
		
					  <!--<p class="form-message">  </p>-->
					  <p id="response">  </p>
					  <p>
					
					 <input type="button" id="login" class="btn btn-primary" value="Log in"> &nbsp; 
					  </p>
		
					</form>                            
			 </div>
	  </section>
	</div>
  
  <!-- sign up form @ola khja-->
  <section id="contact">
    <div class="contact-page" style="width:50%;">
     
        <div class="join">
          <h2>Join Us</h2>
        </div>
          <div class="form-container">
             
            <form action="db.php" method="post"  class="contactForm">
              <div class="form-group">
                <input type="text" name="Fname" class="form-control" id="Fname" placeholder="Your First Name" data-rule="minlen:4" data-msg="Please enter at least 3 chars" />
                <div class="validation"></div>
              </div>

               <div class="form-group">
                <input type="text" name="Lname" class="form-control" id="Lname" placeholder="Your Last Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>

              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              
               <div class="form-group">
                <input type="Password" class="form-control" name="Password" id="Password" placeholder="Your Password" data-rule="Password" data-msg="Please enter aT last 8 chars" />
                <div class="validation"></div>
              </div>
              <div class="text-center"><button name="go" type="submit" class="btn btn-primary btn-lg">GO</button></div>
            </form>
          </div>
    </div>
    <!--/#contact-page-->
  </section>


  
 <?php
include 'footer.php';
?>
  <!--/#footer--> 

</body>

</html>
