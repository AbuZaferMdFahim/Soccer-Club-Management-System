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
 		

 		$select="SELECT * FROM manager,location WHERE id = $edit AND manager.location=location.location_id";
 		$run=mysqli_query($link,$select);
 		while($get = mysqli_fetch_array($run)){?>
 			
 		<form action="medit.php" method="POST">
 		<h1 id="logintitle">Change</h1>
 	    Name : <input type="Name" name="Name"value="<?php echo $get["Name"] ?>"><br><br>
 		Birthdate : <input type="Birthdate" name="Birthdate"value="<?php echo $get["Birthdate"] ?>"><br><br>
 		Contact : <input type="contactNo" name="contactNo"value="<?php echo $get["contactNo"] ?>"><br><br>
 		Street Adress : <input type="Street_adress" name="Street_adress"value="<?php echo $get["Street_adress"] ?>"><br><br>
 		Postal Code : <input type="Postal_Code" name="Postal_Code"value="<?php echo $get["Postal_Code"] ?>"><br><br>
 		City : <input type="City" name="City"value="<?php echo $get["City"] ?>"><br><br>
 		State Province : <input type="State_Province" name="State_Province"value="<?php echo $get["State_Province"] ?>"><br><br>
 		Nationality : <input type="Nationality" name="Nationality"value="<?php echo $get["Nationality"] ?>"><br><br>


 		<input type="hidden" name="editid" value="<?php echo $edit ?>">
 		<input type="submit"name="editbtn" value="Update data"><br><br>
 	</form>
	 </div>
 		
 		<?php }}

 		
 		    ?>
 		    <?php include("footer.php");?>	