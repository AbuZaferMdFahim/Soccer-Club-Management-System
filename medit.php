<?php 

	include("connection.php");
	
	 if(isset($_REQUEST["editbtn"])){
	 	$eid=$_REQUEST["editid"];
	 	$fnam=$_REQUEST["Name"];
	 	$dob=$_REQUEST["Birthdate"];
	 	$contac=$_REQUEST["contactNo"];
	 	$str=$_REQUEST["Street_adress"];
	 	$pos=$_REQUEST["Postal_Code"];
	 	$city=$_REQUEST["City"];
	 	$stt=$_REQUEST["State_Province"];
	 	$nat=$_REQUEST["Nationality"];
	 	
	 	

	 	$update ="UPDATE manager,location SET  Name='$fnam',Birthdate='$dob',contactNo='$contac',Street_adress='$str',Postal_Code='$pos',City='$city',State_Province='$stt',Nationality='$nat' 
	 	WHERE id = $eid AND manager.location=location.location_id";
	 	$run=mysqli_query($link,$update);
	 		if($run==true){
	 			header("location: m2pofile.php?edited");
	 		}
	  }
  ?>