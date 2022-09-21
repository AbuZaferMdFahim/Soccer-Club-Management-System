<?php 
	include("connection.php");
	
 ?>
<!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	
 	<br>
 	<?php include("header.php");?>
 	<div id="loginBox">
 	<?php  
 		if(isset($_REQUEST["edit_id"])){
 			$edit=$_REQUEST["edit_id"];
 		

 		$select="SELECT * FROM player WHERE Id = $edit";
 		$run=mysqli_query($link,$select);
 		while($get = mysqli_fetch_array($run)){?>
 		 	
 		<form action="edit.php" method="POST">
 		<h1 id="logintitle">Change</h1>
 		First Name : <input type="f_name" name="f_name"value="<?php echo $get["f_name"] ?>"><br><br>
 		Last Name : <input type="l_name" name="l_name"value="<?php echo $get["l_name"] ?>"><br><br>
 		Date of Birth : <input type="date_of_birth" name="date_of_birth"value="<?php echo $get["date_of_birth"] ?>"><br><br>
 		Contact : <input type="contact" name="contact"value="<?php echo $get["contact"] ?>"><br><br>
 		Position : <input type="position" name="position"value="<?php echo $get["position"] ?>"><br><br>
 		Strong Foot : <input type="strong_foot" name="strong_foot"value="<?php echo $get["strong_foot"] ?>"><br><br>
 		Agent Name : <input type="agent_id" name="agent_id"value="<?php echo $get["agent_id"] ?>"><br><br>
 		<input type="hidden" name="editid" value="<?php echo $edit ?>">
 		<input type="submit"name="editbtn" value="Update data"><br><br>
 	</form>
 		
 		<?php }}?>
		 </div>
 		    <?php include("footer.php");?>	
      

 	