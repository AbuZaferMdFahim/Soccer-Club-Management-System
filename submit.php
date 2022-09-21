<?php 
	include("connection.php");
	include("index1.php");
	if(isset($_COOKIE["currentUser"])){
        
      $cuser = $_COOKIE["currentUser"];
  }
  $b=1;
  $sql="SELECT DISTINCT team.Team_Id FROM team,admin,manager WHERE team.manager_username=admin.username AND admin.username='$cuser' AND manager.teamId=team.Team_Id";
      $run=mysqli_query($link,$sql);
      if($run==true){
      	
      	while($row=mysqli_fetch_array($run)){?>

      		<?php $b = $row["Team_Id"];

      	}
      }
	if(isset($_REQUEST["addbtn"])){
		$did=$_REQUEST["editid"];
		$tid=$_REQUEST["team_id"];
		$cn=$_REQUEST["contract"];

      if($tid =="0" || $cn =="0"){
	 			header("location: join.php?");
	 		}
		else if($tid !="0" && $cn !="0"){
			

      


      if($b == $tid){
		 $update ="UPDATE request SET team_id='$tid',contract='$cn' WHERE id = $did";
		$run=mysqli_query($link,$update);
	 		if($run==true){
	 			
	 			header("location: join.php?id= $did");

	 		 }
	 		 else {
	 			header("location: join.php?");
	 		}
	 		 
			}
		else if($b!=$tid){
	 		 	header("location: join.php?");
	 		 }
		}
		  
}
		
	 		 

	
	include("footer.php");
 ?>