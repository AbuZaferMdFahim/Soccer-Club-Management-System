
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<?php include("header.php");?>
 	<br>
	 <div class="container">
      <div id="loginBox">
 	<form action="register.php" method="POST">
            <h1 id="logintitle">Register for User</h1>
 		<input placeholder="Username" type="username" name="username"><br><br>
 		<input placeholder="Email" type="email" name="email"><br><br>
 		<input placeholder="Password" type="password" name="password"><br><br>
 		<input type="submit" value="Register"name="Registertn">
 		<br><br>
 		


 	</form>
 	<?php if(isset($_REQUEST["action"])){
      		if($_REQUEST["action"]=="true"){
      			echo "<font color='green'>  
                 Successfully registered</font>";	
      		}else if ($_REQUEST["action"]=="change"){

      		 echo "<font color = 'Red'>Please change username and email</font>";
      	}
      		else{

      		 echo "<font color = 'red'>Not Registered!</font>";
      	} 
    
      		} ?>
	</div>
	</div>
 	<?php include("footer.php");?>
 </body>
 </html>