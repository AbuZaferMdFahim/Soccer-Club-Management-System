<?php 
	

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<?php include("header1.php");?>
 	<br>
 	<div id="loginBox">
<?php
 	if(isset($_REQUEST["edit_id"])){
 			$edit=$_REQUEST["edit_id"];
 	$select="SELECT * FROM vote WHERE id = $edit";
 		$run=mysqli_query($link,$select);
 		while($get = mysqli_fetch_array($run)){?>

 	<form action="vote.php" method="POST">
 		<h1 id="logintitle">Vote</h1>
 		Player Id:<input type="Player_id" name="Player_id"value="<?php echo $get["Player_id"] ?>"><br><br>
 		
 		<input type="hidden" name="editid" value="<?php echo $edit ?>">
 		<input type="submit"name="editbtn" value="ok">
 		<br><br>
 	</form>
 			<?php  
			

} } ?>


 	</form>
 	
 </body>
 </html>
