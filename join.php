<?php 


include("connection.php");
 
 $getid=$_REQUEST["id"];

 $ins="INSERT INTO player (Id,username,email,password,f_name,l_name,date_of_birth,contact,position,strong_foot,hired_date,contract,agent_id,Team_id,appearance,goals,assist,clean_sheet,yellow_card,red_card,Main_Team) SELECT id,username,email,password,f_name,l_name,date_of_birth,contact,position,strong_foot,hired_date,contract,agent_id,team_id,appearance,goals,assist,clean_sheet,yellow_card,red_card,Main_team FROM request where id=$getid ";

 	$run=mysqli_query($link,$ins);
	if($run==true){
	 $dlt="DELETE FROM request WHERE id = $getid ";
     $sql=mysqli_query($link,$dlt);
       if($sql==true){
           	header("location: add.php?added");
  }
  else{
		header("location: add.php?Not Added");
	}
}else{
		header("location: add.php?false");
	}
	

 

 ?>

