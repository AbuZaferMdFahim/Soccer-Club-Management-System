<?php 


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<?php include("header.php");?>
 	<br>
      <div id="loginBox">
 	<form action="request.php" method="POST">
            <h1 id="logintitle">Request to play</h1>
 		Username : <input type="username" name="username"><br><br>
 		email id : <input type="email" name="email"><br><br>
 		Password : <input type="password" name="password"><br><br>
 		First Name : <input type="f_name" name="f_name"><br><br>
 		Last Name : <input type="l_name" name="l_name"><br><br>
 		Date of Birth : <input type="date_of_birth" name="date_of_birth"><br><br>
 		Contact : <input type="contact" name="contact"><br><br>
 		Position : <input type="position" name="position"><br><br>
 		Strong Foot : <input type="strong_foot" name="strong_foot"><br><br>
 		Agent Name : <input type="agent_id" name="agent_id"><br><br>
 		<input type="submit" value="SAVE DATA"name="submitButton">
 		<br><br>
 			




 	</form>
 	 <?php if(isset($_REQUEST["action"])){
      		if($_REQUEST["action"]=="true"){
      			echo "<font color='green'> Data inserted</font>";	
      		}else if ($_REQUEST["action"]=="notComplete"){

      		 echo "<font color = 'Red'>Please Fill up All Information!</font>";
      	}
      	else if ($_REQUEST["action"]=="change"){

      		 echo "<font color = 'Red'>Please change username and email</font>";
      	}
     else {

      		 echo "<font color = 'Red'>Data Not Inserted!</font>";
      	}
    
      		} ?>
	</div>
 	<?php include("footer.php");?>
 </body>
 </html>