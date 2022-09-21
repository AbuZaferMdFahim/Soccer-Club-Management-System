<?php 
	include("connection.php");
	$dusername=$_REQUEST["username"];
	 $demail=$_REQUEST["email"];
	 $dpassword=$_REQUEST["password"];
	$sql="SELECT * FROM admin where email='$demail' AND password='$dpassword'";
	
	$r=mysqli_query($link,$sql);

	$c=mysqli_num_rows($r);
	
	 if($r==true){
 	if($c===1){
 		setcookie("currentUser",$dusername,time()+(86400*7));
 		header("location: main.php");
 
}
else{
	header("location: form.php?Wrong_info");
}
}
else{
	header("location: form.php?Wrong_info");
}


 ?>
