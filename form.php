<?php 
	if(isset($_COOKIE["currentUser"])){
     header("location: index1.php");
   }

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
 	<form action="login.php" method="POST">

 		<center><h1 id="logintitle">Login as Manager</h1></center>
            <input type="text" required placeholder="Username" name="username">
            <br>
            <br>
 		<input placeholder="Email" type="email" name="email"><br><br>
 		<input placeholder="Password" type="password" name="password"><br><br>
		
		<input type="submit" value="login"name="loginbtn">
 		<br><br>

 			<?php  
			if(isset($_REQUEST["Wrong_info"])){
			echo '<b style="color : red">	
			Username or Password Wrong
			</b>';
            }

?>


 	</form>
	 </div>
	
 	
 </body>
 </html>
