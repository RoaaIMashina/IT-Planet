<?php 
include "nav.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link href="css/contactus.css" rel="stylesheet">
</head>

<body>


 <section >
    <div class="contact">
      <div class="container">
        <div class="center">
          <h2>Contact Us</h2>
        </div>
        <div class="row contact-wrap">
          <div class="col-md-8 col-md-offset-2">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4"
                  data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email"
                  data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4"
                  data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us"
                  placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>

              <div class="text-center"><button type="submit" class="btn btn-primary btn-lg">Send Message</button></div>
            </form>
          </div>
        </div>
        <!--/.row-->
      </div>
      <!--/.container-->
    </div>
    <!--/#contact-page-->
  </section>

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
						<strong  class= "emstyle"> Email: </strong><br>
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
    <div class="contact-page" style="width:40%;">
     
        <div class="join">
          <h2>Join Us</h2>
        </div>
          <div class="form-container">
             
            <form action="db.php" method="post"  class="contactForm"style="
    width: 60%;
    margin-left: 20%;
">
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
