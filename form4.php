<?php 
	

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<?php include("index1.php");?>
 	<br>
 	<div id="loginBox">
<?php
 	if(isset($_REQUEST["edit_id"])){
 			$edit=$_REQUEST["edit_id"];
 	$select="SELECT * FROM request WHERE id = $edit";
 		$run=mysqli_query($link,$select);
 		while($get = mysqli_fetch_array($run)){?>

 	<form action="submit.php" method="POST">
 		<h1 id="logintitle">Add</h1>
 		Team Id:<input type="team_id" name="team_id"value="<?php echo $get["team_id"] ?>"><br><br>
 		Contract :<input type="contract" name="contract"value="<?php echo $get["contract"] ?>"><br><br>
 		<input type="hidden" name="editid" value="<?php echo $edit ?>">
 		<input type="submit" value="JOIN" name="addbtn">
 		<br><br>
 	</form>
 			<?php  
			

} } ?>


 	</form>
 	
 </body>
 </html>