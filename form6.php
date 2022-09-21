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
 		
 			
 		<form action="maintain.php" method="POST">
 			<h1 id="logintitle">Starting Lineup</h1>
 			<td><h3><?php echo $get["f_name"]," ".$get["l_name"];?></h3></td>
 		Main Team: <input type="Main_Team" name="Main_Team" value="<?php echo $get["Main_Team"] ?>"><br><br>
 	
 		
 		<input type="hidden" name="editid" value="<?php echo $edit ?>">
 		<input type="submit"name="editbtn" value="Update data"><br><br>
 	</form>
 		
 		<?php }}

 		
 		    ?>
 		   	