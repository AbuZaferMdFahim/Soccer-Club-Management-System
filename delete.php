<?php 


include("connection.php");
 $getid=$_REQUEST["id"];

 $update="UPDATE player SET team_id='',hired_date='', Main_Team='',contract='' WHERE Id = $getid ";

 $run=mysqli_query($link,$update);
 if($run==true){
 	$ins="INSERT INTO request (id,username,email,password,f_name,l_name,date_of_birth,contact,position,strong_foot,hired_date,contract,agent_id,Team_id,appearance,goals,assist,clean_sheet,yellow_card,red_card,Main_Team) SELECT Id,username,email,password,f_name,l_name,date_of_birth,contact,position,strong_foot,hired_date,contract,agent_id,team_id,appearance,goals,assist,clean_sheet,yellow_card,red_card,Main_team FROM player where Id=$getid ";

 	$run=mysqli_query($link,$ins);
	if($run==true){
	 $dlt="DELETE FROM player WHERE Id = $getid ";
     $sql=mysqli_query($link,$dlt);
       if($sql==true){
           	header("location: player.php?deleted");
  }
 }
}

 ?>