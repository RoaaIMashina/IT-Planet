<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title></title>

  <!-- Bootstrap -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link href="../css/animate.min.css" rel="stylesheet">
  <link href="../css/animate.css" rel="stylesheet" />
  <link href="../css/prettyPhoto.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/Portfolio.css" rel="stylesheet">
  
  
  <script src="../js/adman.js"></script>
  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/popup.js"></script>
  <script src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  
</head>

<body>
  <nav class="navbar navbar-default navbar-fixed-top">
        <div class="site-logo">
          <a href="../index.php" class="brand"><img src="../images/logo.png" style="    width: 15%;
    margin-top: -29px;
    margin-bottom: -29px; margin-left: 150px;"></a>
        </div>
    <!-- @Ola khoja -->
       <div id="menu">
		<?php
		if(isset($_SESSION['u_email'])){
			if($_SESSION['u_type'] == 1){
				echo '<ul><li id="admen"><a href="#"><img  class="settings-logo" src="../images/icons8-settings.svg" width="50px" height="50px"></a></li></ul>';
			}
			
			// 1 means admin and 0 means normal user.
			if($_SESSION['u_type'] == 1 || $_SESSION['u_type'] == 0){
			echo 
				'<ul class="nav navbar-nav navbar-right">
					<li><a href="../index.php">Home</a></li>
					<li><a href="#">courses</a>
						<ul>  
							<li> <a href="courses/Web Design.php">Web Design</a></li>
							<li> <a href="courses/Programming Language.php" >Programming Language</a></li>
							<li> <a href="courses/Microsoft.php" >Microsoft</a></li>
						</ul>
					</li>
					
				';
					if($_SESSION['u_type'] == 0){
						echo'<li><a href="../contact.php">contact</a></li>';
					}
					echo'<li>
							<form action=../"mylogout.php" method="post" class="logout">
								<button class="logout" type="submit" name="logout" onclick="../mylogout.php">Logout</button>
							</form>
						</li>
				</ul>';
			}
		}
		else
		{
			echo
				'<ul class="nav navbar-nav navbar-right">
					<li><a href="../index.php">Home</a></li>
					<li><a href="../contact.php">contact</a></li>
					<li id="loginLink"><a  href="#">login</a></li>
					<li id="signuplink"><a href="#">sign up</a></li>
				</ul>';
		}
	?>
	</div>
  </nav>



</body>
</html>
