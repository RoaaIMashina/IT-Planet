
<?php
/*@Ola khoja */
/* validating login form*/

	if(isset($_POST['login'])){ //submit is the button name
	
		include 'db.php';
	
		$uid = ($_POST['uid']);
		$pwd = ($_POST['pwd']);
		
		/*$errorEmail = false;
		$errorpwd = false;*/
		
		if(empty($uid) || empty($pwd)){
		
			header("Locatin: index.php?login=empty");
			exit();
		}
		/*else {
			//$sql="SELECT * FROM users WHERE email='$uid'";
			$result=mysqli_query($conn,$sql);
			$resultCheck=mysqli_num_rows($result);
			if($resultCheck < 1){
				header("Locatin: index.php?login=error1");
				exit();
			}*/
		else{
			//this checks if the statment work in the database
			$sql="SELECT * FROM users WHERE email=?;";
			$stmt = mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt, $sql)){
				header("Location: index.php?error=sqlerror");
				exit();
			}
			else {
				mysqli_stmt_bind_param($stmt, "s",$uid);
				mysqli_stmt_execute($stmt);
				$result = mysqli_stmt_get_result($stmt);
				/*if($row =mysqli_fetch_assoc($result)){
					$hashedPwdCheck = password_verify($pwd, $row['password']);
					if($hashedPwdCheck==false){
						header("Location: index.php?login=wrongpwd");
						exit();
					}
					elseif($hashedPwdCheck==true){
						session_start();
						$_SESSION['u_email'] = $row['email'];
						$_SESSION['u_first'] = $row['firstname'];
						$_SESSION['u_last'] = $row['lastname'];
						$_SESSION['u_pass'] = $row['password'];
						header("Location: index.php?login=success");
						exit();
					}
					else {
						header("Location: index.php?error=wrongpwd");
						exit();
					}*/
					}
					
				if($row = mysqli_fetch_assoc($result)){
					if($pwd != $row['password']){
						//header("Location: index.php?login=error2");
						/*echo '<span class="form-error"> wrong password! </span>';
						$errorpwd = true;*/
						exit('please check your password!');
					}
					elseif($pwd == $row['password']){
						session_start();
						$_SESSION['u_email'] = $row['email'];
						$_SESSION['u_first'] = $row['firstname'];
						$_SESSION['u_last'] = $row['lastname'];
						$_SESSION['u_type'] = $row['userType'];
?>
						<script>  location.reload();</script>
						<?php exit();
					}
				}
				
				else {
					/*header("Location: index.php?error=nouser");*/
					exit('Email is invalid !');
					/*echo '<span class="form-error"> Email invalid! </span>';
					$errorEmail = true;*/
				}
			}
				
	}
	else {
		header("Location: index.php?login=error");
		echo '<span class="form-error"> </span>';
		exit( 'There is somthing wrong!');
	}

?>

<script>

	$("#uid, #pwd").removeClass("input-error");
	var errorEmail = "<?php echo $errorEmail; ?>";
	var errorpwd = "<?php echo $errorpwd; ?>";
	
	if(errorEmail == true){
		$("#uid, #pwd").addClass("input-error");
	}
	if(errorpwd == true){
		$("#pwd").addClass("input-error");
	}
	
</script>