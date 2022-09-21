<?php 
	 	
include("connection.php");
  setcookie("currentUser","",time()-(86400*50));
  header("location: index.php");
   	if(isset($_REQUEST["deleted"])){
 			echo "You are Now Free Agent";
 		}
 

 ?>