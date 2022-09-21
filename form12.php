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
 	<?php include("index1.php");?>
 	<div id="loginBox">
 	<?php  
 		if(isset($_REQUEST["edit_id"])){
 			$edit=$_REQUEST["edit_id"];
 	$select="SELECT * FROM news WHERE id = $edit";
 		$run=mysqli_query($link,$select);
 		while($get = mysqli_fetch_array($run)){?>
 		 	
 		<form action="edit2.php" method="POST">
 			<h1 id="logintitle">Change</h1>
 			<label >Title:  </label>
 		<input type="text" name="title"value="<?php echo $get["title"] ?>"><br><br>
 		<label >Content:</label><br>
 		<input type="textarea" name="content"id="" cols="30" rows="10"value="<?php echo $get["content"] ?>"><br><br>
 		<input type="hidden" name="editid" value="<?php echo $edit ?>">	
 		<input type="submit" name="editbtn" value="Update post"><br><br>
 			</form>
 		</div>
 		<?php }}