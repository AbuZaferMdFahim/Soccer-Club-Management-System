<?php 
	include("connection.php");
	 $dname=$_REQUEST["username"];
	 $demail=$_REQUEST["email"];
	 $dpassword=$_REQUEST["password"];
	$sql="SELECT * FROM player where username='$dname' AND email='$demail' AND password='$dpassword' ";
	$r=mysqli_query($link,$sql);

	$c=mysqli_num_rows($r);
	
	 if($r==true){
 	if($c===1){
 		setcookie("currentUser",$dname,time()+(86400*7));
 		 header("location: profile.php");
 
}
else{
	header("location: form1.php?Wrong_info");
}
}
else{
	header("location: form1.php?Wrong_info");
}
