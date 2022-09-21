<?php 

	include("connection.php");

	if(isset($_REQUEST["username"]) && isset($_REQUEST["email"]) &&isset($_REQUEST["password"])){
	$user=$_REQUEST["username"];
	$email=$_REQUEST["email"];
	$password=$_REQUEST["password"];
	
}
if($user !="" && $email !="" && $password!= ""){
	$sql="SELECT * FROM vote where username='$user' OR email ='$email' ";
	
	$r=mysqli_query($link,$sql);
	$c=mysqli_num_rows($r);
	echo $c;
	if($r==true){
    if($c===0){
		$insert="INSERT INTO vote (username,email,password) VALUES ('$user','$email','$password') ";

	$run=mysqli_query($link,$insert);
}}
	if($run==true){
		header("location: form7.php?action=true");
	}
	else{
		header("location: form7.php?action=change");
	}

}
else{
		header("location: form7.php?action=false");
	}



    
?>