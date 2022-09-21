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
 		

 		$select="SELECT * FROM player WHERE Id = $edit";
 		$run=mysqli_query($link,$select);
 		while($get = mysqli_fetch_array($run)){?>
 		 	
 		<form action="edit1.php" method="POST">
 		<h1 id="logintitle">Change</h1>
 		Appearance : <input type="appearance" name="appearance" value="<?php echo $get["appearance"] ?>"><br><br>
 		Goals : <input type="goals" name="goals"value="<?php echo $get["goals"] ?>"><br><br>
 		Assist : <input type="assist" name="assist"value="<?php echo $get["assist"] ?>"><br><br>
 		Clean Sheet: <input type="clean_sheet" name="clean_sheet"value="<?php echo $get["clean_sheet"] ?>"><br><br>
 		Yellow Card : <input type="yellow_card" name="yellow_card"value="<?php echo $get["yellow_card"] ?>"><br><br>
 		Red Card : <input type="red_card" name="red_card"value="<?php echo $get["red_card"] ?>"><br><br>
 		
 		<input type="hidden" name="editid" value="<?php echo $edit ?>">
 		<input type="submit"name="editbtn" value="Update data"><br><br>
 	</form>
 		</div>
 		<?php }}
 		 include("footer.php");?>