<?php 

	include("connection.php");
?>
<?php  
	if(isset($_REQUEST["username"]) && isset($_REQUEST["email"]) && isset($_REQUEST["password"]) && isset($_REQUEST["f_name"]) && isset($_REQUEST["l_name"]) && isset($_REQUEST["date_of_birth"]) && isset($_REQUEST["contact"]) && isset($_REQUEST["position"]) && isset($_REQUEST["strong_foot"]) && isset($_REQUEST["agent_id"]) ){
	$username=$_REQUEST["username"];
	$email=$_REQUEST["email"];
	$password=$_REQUEST["password"];
	$fname=$_REQUEST["f_name"];
	$lname=$_REQUEST["l_name"];
    $dob=$_REQUEST["date_of_birth"];
	$contact=$_REQUEST["contact"];
	$position=$_REQUEST["position"];
	$sf=$_REQUEST["strong_foot"];
	$an=$_REQUEST["agent_id"];
}
	if($username != "" && $email!="" && $password!="" && $fname!="" && $lname!="" && $dob!="" && $contact!="" && $position!="" && $sf!="" && $an!=""){
	
		$sql="SELECT * FROM request where username='$username' OR email ='$email'";
	
	$r=mysqli_query($link,$sql);
	$c=mysqli_num_rows($r);
	echo $c;
	if($r==true){
    if($c===0){
    		$sql="SELECT * FROM player where username='$username' OR email ='$email'";
	
	$r=mysqli_query($link,$sql);
	$c=mysqli_num_rows($r);
	echo $c;
	if($r==true){
    if($c===0){

 
	$insert="INSERT INTO request (username,email,password,f_name,l_name,date_of_birth,contact,position,strong_foot,agent_id) VALUES ('$username','$email','$password','$fname','$lname','$dob','$contact','$position','$sf','	$an' ) ";

	$run=mysqli_query($link,$insert);
	}
}}}
	if($run==true){
		header("location: form3.php?action=true");
	}
	else{
		header("location: form3.php?action=change");
	}
}
else{
		header("location: form3.php?action=notComplete");
	}


	



 ?>
