 <?php 

	include("connection.php");
	if(!isset($_COOKIE["currentUser"])){
    header("location: index.php");
  }
	 if(isset($_REQUEST["editbtn"])){
	 	$eid=$_REQUEST["editid"];
	 	$fnam=$_REQUEST["f_name"];
	 	$lnam=$_REQUEST["l_name"];
	 	$dob=$_REQUEST["date_of_birth"];
	 	$contac=$_REQUEST["contact"];
	 	$pos=$_REQUEST["position"];
	 	$sf=$_REQUEST["strong_foot"];
	 	$ai=$_REQUEST["agent_id"];
	 	

	 	$update ="UPDATE player SET f_name='$fnam',l_name='$lnam',date_of_birth='$dob',contact='$contac',position='$pos',strong_foot='$sf',agent_id='$ai' WHERE Id = $eid";
	 	$run=mysqli_query($link,$update);
	 		if($run==true){
	 			header("location: info.php?edited");
	 		}
	  }
  ?>  