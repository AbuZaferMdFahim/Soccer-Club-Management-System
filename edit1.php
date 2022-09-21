<?php 

	include("connection.php");
	if(!isset($_COOKIE["currentUser"])){
    header("location: index.php");
  }
	 if(isset($_REQUEST["editbtn"])){
	 	$eid=$_REQUEST["editid"];
	 	$app=$_REQUEST["appearance"];
	 	$gl=$_REQUEST["goals"];
	 	$as=$_REQUEST["assist"];
	 	$cs=$_REQUEST["clean_sheet"];
	 	$yc=$_REQUEST["yellow_card"];
	 	$rc=$_REQUEST["red_card"];
	 
	 	$update ="UPDATE player SET appearance='$app',goals='$gl',assist='$as',clean_sheet='$cs',yellow_card='$yc',red_card='$rc' WHERE Id = $eid";
	 	$run=mysqli_query($link,$update);
	 		if($run==true){
	 			header("location: teamstats.php?edited");
	 		}
	  }
  ?> 