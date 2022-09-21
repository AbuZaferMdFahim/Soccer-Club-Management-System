<?php 

	include("connection.php");
	
  
	 if(isset($_REQUEST["editbtn"])){
	 	$eid=$_REQUEST["editid"];
	 	$pid=$_REQUEST["title"];
	 	$fnam=$_REQUEST["content"];
	 	
	 	

	 	$update ="UPDATE news SET title='$pid', content='$fnam' WHERE id = $eid";
	 	$run=mysqli_query($link,$update);
	 		if($run==true){
	 			header("location: mynews.php?done");
	 		}
	  }
  ?>