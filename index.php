<?php
include 'nav.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
 <script src="js/Portfolio.js"></script>
</head>

<body>
   <script src="js/jquery-3.3.1.min.js"></script>
<script src="js/acc2.js"></script>
<!-- Adman settings @roaa mashina-->
   <div id="a" style=" display: none; 
  position: fixed; 
  z-index: 1; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  background-color: black; 
  background-color: rgba(0,0,0,0.69); ">
  
    <section style=" width: 26%;
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
    margin-top: -34px;">Adman settings</p>
<ul style="list-style-type: none;
    margin-left: -43px;">
  <li><a href="adman/addcourse.php">Add Cursess</a></li>
<li><a href="">Delete Cursess</a></li>
<li><a href="">user Details</a></li>
</ul>

</div>


  </section>
</div>

<!-- login form @ola khja-->
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
						<strong class= "emstyle"> Email: </strong><br>
						<input type="email" name="uid" id="uid" required>
					  </p>
		
					  <p>
					   <strong>Password: </strong><br>
					   <input type="password" name="pwd" id="pwd" required>
					  </p>
		
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
             
            <form action="singup.php" method="post"  class="contactForm"style="
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
 
<!--#accordion-->
  <section id="about">
    <div class="container">
	      <?php
		 if(isset($_SESSION['u_email']))
		 {
			if($_SESSION['u_type'] == 1 || $_SESSION['u_type'] == 0){
				include 'searchcode.php';
			}
			
		}
		else {
				echo'<div id="empty-div"></div>';
			}
         ?>
      <div class="center">
        <div class="col-md-6 col-md-offset-3">
          <h2>the most shosen courses</h2>
          <hr>
          <p class="lead">welcome to our website  <br> we provide several types of courses of information technology 
		  <br> sign up now to check them out!</p>
        </div>
      </div>
    </div>

     <div class="container">
      <div class="row">
        <div class="col-sm-6 wow fadeInRight">
          <img src="images/1.png" id="img" class="images" style="margin-top: -25px;" />
          <img src="images/blog-org-1199-1512633780-css .jpg" class="images" id="img1" />
          <img src="images/Java-1-Introduction.png" class="images" id="img2" />
          <img src="images/1_kUCC6Ikv-F35y3wG5edz9w.jpeg" class="images" id="img3" />
          <img src="images/microsoft2010-word1.jpg" class="images" id="img4" />
          

           

        </div>
        <!--/.col-sm-6-->

        <div class="col-sm-6 wow fadeInDown">
          <div class="accordion">
            <div class="panel-group" id="accordion1">
             
             
              <div class="panel panel-default">
                <div class="acc">
    <div class="acc-titel" id="acc1">CSS</div>
    <div class="acc-content">
      <h2 id="h">Cascading Style Sheets</h2>
      <p id="p">CSS is a language that describes the style of an HTML document.
CSS describes how HTML elements should be displayed.
This tutorial will teach you CSS from basic to advanced.</p>
    </div>
  </div>
     </div>
             
              <div class="panel panel-default">
                           <div class="acc">
    <div class="acc-titel" id="acc2">JAVA</div>
    <div class="acc-content">
      <h2 id="h">JAVA</h2>
      <p id="p">Java is a high-level programming language originally developed by Sun Microsystems and released in 1995. Java runs on a variety of platforms, such as Windows, Mac OS, and the various versions of UNIX. This tutorial gives a complete understanding of Java. This reference will take you through simple and practical approaches while learning Java Programming language</p>
    </div>
      </div>      
        </div>
             
            <div class="panel panel-default">
                 <div class="acc">
    <div class="acc-titel" id="acc3">C#</div>
    <div class="acc-content">
      <h2 id="h">C Sharp</h2>
      <p id="p">C# programming is very much based on C and C++ programming languages, so if you have a basic understanding of C or C++ programming, then it will be fun to learn C#.</p>
    </div>
  </div>
     </div>

             
              <div class="panel panel-default">
                 <div class="acc">
    <div class="acc-titel" id="acc4">MicroSoft Word</div>
    <div class="acc-content">
      <h2 id="h">MicroSoft Word</h2>
      <p id="p">Microsoft Office Word allows you to create and edit personal and business documents, such as letters, reports, invoices, emails and books. By default, documents saved in Word  are saved with the .docx extension. </p>
    </div>
  </div>
     </div>

            </div>
            
          </div>
        </div>

      </div>
      <!--/.row-->
    </div>
    <!--/.container-->
  </section>
  <!--/#accordion-->
<!-- portfolio by : hajer layas -->

<div id= "portfolio">
<h4 style="margin-left: 250px;">YOU CAN GET TO KNOW WHAT ARE THE BEST PROGRAMS TO USE IN THE FOLLOWING SECTIONS HERE :</h4>
<div id="myBtnContainer">

  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('Web Devolepment')"> Web Devolepment</button>
  <button class="btn" onclick="filterSelection('Programming')"> Programming </button>
  <button class="btn" onclick="filterSelection('Microsoft')"> Microsoft</button>
</div>

<!-- Portfolio Gallery Grid -->
<div class="row">

  <div class="column Web Devolepment" id="pf">
     <a href="https://notepad-plus-plus.org/download/v7.6.3.html" > <img src="images/notpad.png" alt="Notpad++" class="img"></a>
 </div>
  
<div class="column Web Devolepment" id="pf">
     <a href="https://www.sublimetext.com/" > <img src="images/sublime.png" alt="Sublime" class="img"></a>
    </div>
	
  <div class="column Web Devolepment" id="pf">
     <a href="https://atom.io/" > <img src="images/atom.png" alt="Atom" class="img" ></a>
    </div>
	
  <div class="column Microsoft" id="pf">
     <a href="https://www.office.com/" > <img src="images/word.png" alt="Microsoft Word" class="img"></a>
</div>
	
  <div class="column Programming" id="pf">
    <a href="http://www.codeblocks.org/downloads" >  <img src="images/codeblocks.png" alt="Codeblocks" class="img" ></a>
 </div>
	
  <div class="column Programming" id="pf">
    <a href="https://netbeans.org/" >  <img src="images/netbeans.png" alt="Netbeans" class="img"></a>
  </div>
  
<div class="column Microsoft" id="pf">
    <a href="https://www.office.com/" >  <img src="images/powerpoint.jpg" alt="Microsoft Powerpoint" class="img" ></a>
</div>
	
  <div class="column Microsoft" id="pf">
     <a href="https://www.office.com/" > <img src="images/access.png" alt="Microsoft Access" class="img" ></a>
 </div>
	
    <div class="column Programming" id="pf">
     <a href="https://www.eclipse.org/" > <img src="images/eclipse.png" alt="Eclipse" class="img"></a>
</div>
	
   <div class="column Microsoft" id="pf">
     <a href="https://www.office.com/" > <img src="images/exal.png" alt="Microsoft Excel" class="img"></a>
 </div>
<!-- END GRID -->
</div>
</div>
<!--end portfolio-->

	
<!--aya.almokhzanji@gmail.com-->
<!--popup image-->
<section id="features">
   
      <div class="row">
        <div class="center">
          <div class="col-md-6 col-md-offset-3">
            <h2>Web Development Roadmaps</h2>
            <hr>
            <p class="lead">Every Web Developer must have a basic understanding of HTML, CSS, and JavaScript.

Responsive Web Design is used in all types of modern web development.</p>
          </div>
		  
		  
		   <div class="row">
		  
		  
               <div class="col-md-4 wow fadeInUp">
                    <h3>HTML</h3>
                    <div >
                    <img src="images/html.png"  style="width:100%;max-width:300px" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
                    <p>Hypertext Markup Language is the standard markup language for creating web pages and web applications. With Cascading 
					Style Sheets and JavaScript, it forms a triad of cornerstone technologies for the World Wide Web.  </div>
                    </div>
      
               
                    <div class="col-md-4 wow fadeInUp">
                    <h3>CSS</h3>
                    <div >
                    <img src="images/css.png"  style="width:100%;max-width:300px" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
                    <p>Cascading Style Sheets is a style sheet language used for describing the presentation of a document written in a markup language
					like HTML. CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript
					</div>
                    </div>
					
					
					
                   <div class="col-md-4 wow fadeInRight" style="margin-top: 67px;">
                   <h3>JavaScrpit</h3>
                   <div >
           <video id="myVideo" width="320" height="176" controls="controls" poster="images/css.png">
  <source src="video/js.mp4" type="video/mp4"> <source src="mov_bbb.ogg" type="video/ogg">
  Your browser does not support HTML5 video.
</video>     <p>JavaScript, often abbreviated as JS, is a high-level, interpreted programming language that conforms to the ECMAScript specification. 
It is a language that is also characterized as dynamic, weakly typed, prototype-based and multi-paradigm </div>
                   </div>
		     </div>   
             </div>
             </div>
             
    
   <div id="myModal" class="modal">
   

   <div class="modal-content">  

                             <span class="close cursor" onclick="closeModal()">&times;</span>
   </div>

    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="images/html.png" style="width:100%;max-width:1000px">
	
    </div>

    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="images/css.png" style="width:100%;max-width:1000px">
	
    </div>

 
</section>
<?php
include 'footer.php';
?>

  <!--/#footer-->
    <!--end:  aya.almokhzanji@gmail.com-->
  <script src="js/popup2.js"></script>
  
  <script src="js/acc.js"></script>


</body>

</html>
