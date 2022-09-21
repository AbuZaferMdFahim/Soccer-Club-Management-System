<?php 

	include("connection.php");
	if(!isset($_COOKIE["currentUser"])){
    header("location: index.php");
  }
	 if(isset($_REQUEST["editbtn"])){
	 	$eid=$_REQUEST["editid"];
	 	$pid=$_REQUEST["Player_id"];
	 	
	 	
	 	

	 	$update ="UPDATE vote SET Player_id='$pid' WHERE id = $eid";
	 	$run=mysqli_query($link,$update);
	 		if($run==true){
	 			header("location: allPlayer.php?done");
	 		}
	  }
  ?>  