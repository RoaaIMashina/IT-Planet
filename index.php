<?php
include 'nav.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
 
</head>

<body>
   <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/acc2.js"></script>
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
			
					<form method="POST" action="" class="login-form">  
					  <input type="hidden" name="login" value="true">
					  
					   <p>
						<strong>Username or Email: </strong><br>
						<input type="text" name="username">
					  </p>
		
					  <p>
					   <strong>Password: </strong><br>
					   <input type="password" name="password">
					  </p>
		
					  <p>
					
					 <input type="submit" class="btn btn-primary" name="login" value="Log in"> &nbsp; 
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
 
<!--#accordion-->
  <section id="about">
    <div class="container">
      <div class="center">
        <div class="col-md-6 col-md-offset-3">
          <h2>the most shosen courses</h2>
          <hr>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
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

<div id= "portfolio">
<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('Web Devolepment')"> Web Devolepment</button>
  <button class="btn" onclick="filterSelection('Programming')"> Programming </button>
  <button class="btn" onclick="filterSelection('Microsoft')"> Microsoft</button>
</div>

<!-- Portfolio Gallery Grid -->
<div class="row">
<div class="gallery">

  <figure>
  <div class="column Web Devolepment" id="pf">
      <img src="images/notpad.png" alt="Notpad++" class="img">
	  	<figcaption>
    <p><a href="" alt="">Notpad++</a></p>
	</figcaption>
  </div></figure>
  
  <figure>
  <div class="column Web Devolepment" id="pf">
      <img src="images/sublime.png" alt="Sublime" class="img">
	  	<figcaption>
    <p><a href="" alt="">Sublime</a></p>
	</figcaption>
    </div></figure>
  
  <figure>
  <div class="column Web Devolepment" id="pf">
      <img src="images/atom.png" alt="Atom" class="img" >
	  	<figcaption>
    <p><a href="" alt="">Atom</a></p>
	</figcaption>
    </div></figure>
	
	   <figure>
	  <div class="column Microsoft" id="pf">
      <img src="images/word.png" alt="Microsoft Word" class="img">
	  	<figcaption>
    <p><a href="" alt="">Microsoft Word</a></p>
	</figcaption>
    </div></figure>

  <figure>
  <div class="column Programming" id="pf">
      <img src="images/codeblocks.png" alt="Codeblocks" class="img" >
	  	<figcaption>
    <p><a href="" alt="">Codeblocks</a></p>
	</figcaption>
  </div></figure>
  
  <figure>
  <div class="column Programming" id="pf">
      <img src="images/netbeans.png" alt="Netbeans" class="img">
	  	<figcaption>
    <p><a href="" alt="">Netbeans</a></p>
	</figcaption>
    </div></figure>
  
  <figure>
  <div class="column Microsoft" id="pf">
      <img src="images/powerpoint.jpg" alt="Microsoft Powerpoint" class="img" >
	  	<figcaption>
    <p><a href="" alt="">Microsoft Powerpoint</a></p>
	</figcaption>
</div></figure>
  
  <figure>
  <div class="column Microsoft" id="pf">
      <img src="images/access.png" alt="Microsoft Access" class="img" >
	  	<figcaption>
    <p><a href="" alt="">Microsoft Access</a></p>
	</figcaption>
  </div></figure>
  
  <figure>
    <div class="column Programming" id="pf">
      <img src="images/eclipse.png" alt="Eclipse" class="img">
	  	<figcaption>
    <p><a href="" alt="">Eclipse</a></p>
	</figcaption>
  </div></figure>
  
  <figure>
   <div class="column Microsoft" id="pf">
      <img src="images/exal.png" alt="Microsoft Excel" class="img">
	  	<figcaption>
    <p><a href="" alt="">Microsoft Excel</a></p>
	</figcaption>
    </div></figure>
<!-- END GRID -->
</div>
</div>
<!--end portfolio-->

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
                    <div class="column">
                    <img src="images/html.png"  style="width:100%;max-width:300px" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
                    <p>Hypertext Markup Language is the standard markup language for creating web pages and web applications. With Cascading 
					Style Sheets and JavaScript, it forms a triad of cornerstone technologies for the World Wide Web.  </div>
                    </div>
      
               
                    <div class="col-md-4 wow fadeInUp">
                    <h3>CSS</h3>
                    <div class="column">
                    <img src="images/css.png"  style="width:100%;max-width:300px" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
                    <p>Cascading Style Sheets is a style sheet language used for describing the presentation of a document written in a markup language
					like HTML. CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript
					</div>
                    </div>
					
					
					
                   <div class="col-md-4 wow fadeInRight">
                   <h3>JavaScrpit</h3>
                   <div class="column">
           <video id="myVideo" width="320" height="176" controls="controls">
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
	   <span class="close cursor" onclick="closeModal()">&times;</span>
    </div>

    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="images/css.png" style="width:100%;max-width:1000px">
	   <span class="close cursor" onclick="closeModal()">&times;</span>
    </div>

    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="images/3.png" style="width:100%;max-width:1000px">
	   <span class="close cursor" onclick="closeModal()">&times;</span>
    </div> 
</section>
<?php
include 'footer.php';
?>

  <!--/#footer-->
    
  <script src="js/popup2.js"></script>
  
  <script src="js/acc.js"></script>


</body>

</html>
