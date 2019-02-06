<?php 
include "nav.php";
include "db.php";
?>

<!DOCTYPE html>
<html lang="en">

<body style="background-color:#d6e8ea; color:black">
<?php 
include "admin.php";
?>
 <form method="post"> 
<div class="inline-container">
<div id="C">

 <?php 
 $sql = "select id_C, nameC FROM Cursess;";
 $result = $conn->query($sql);
if (isset($_POST['id'])){
	$id=$_POST['id'];

echo $id;}
 ?>

 <?php if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?><div>
                  <h3><?php echo $row['nameC'];?></h3>
		</div>

	    <?php   $sql2 = "select * FROM lecture where id_C = " . $row['id_C'];
	    $lectures = $conn->query($sql2);?>
      <div>
		<ul> 
			
		<?php 

                if($lectures) {
                    while($lecture_row = $lectures->fetch_assoc()) {
		
               echo  '<a href="'.$lecture_row['nameL'].'.php"> <li > '.$lecture_row['nameL'].'</li></a>';
						
                    }
                }
                          ?>
		</ul>
	   </div>
	

<?php 
	}
}

?>
</div>

<div class="courses1">
	<div class="courses"> 
	<?php

		$sqlget="SELECT * FROM lecture WHERE id_L=12;  ";
		$sqldata = $conn->query($sqlget);
		if ($sqldata->num_rows > 0) {
			while($row = $sqldata->fetch_assoc()) {
	?>
				<h1 class="Ctitle"> <?php echo $row['nameL']; ?></h1>
					<div class="Ccontainer">
						<img class="Clogo" src="../<?php echo $row['logo']; ?>"   alt="logo" height="100" width="150">
						<p class="firstp"> <?php echo $row['par1']; ?> </p>
						<p> <?php echo $row['par2']; ?> </p>
						<p> <?php echo $row['par3']; ?> </p>
						<img class="Cimg"  src="../<?php echo $row['img1']; ?>"   height="200" width="500">
						<p> <?php echo $row['par4']; ?>  </P>
						<img class="Cimg"  src="../<?php echo $row['img2']; ?>"  height="300" width="530">
					</div>
					<div class="videos">
						<video class="video1"  width="500px" height="400" controls poster="../<?php echo $row['poster']; ?>" >
							<source src="../<?php echo $row['vid1']; ?>" type="video/mp4">
						</video>
						<video class="video2"  width="500px" height="400" controls poster="../<?php echo $row['poster']; ?>" >
							<source src="../<?php echo $row['vid2']; ?>" type="video/mp4">
						</video>
					</div>
				
	<?php			
			}
		}
	?>
</div>
</div>
</div>

</form>
<?php
include 'footer.php';
?>
</body>

</html>