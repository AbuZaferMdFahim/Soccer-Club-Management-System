<?php 

	include("connection.php");
	
		  $a=0;	
 		  if(isset($_REQUEST["editbtn"])){
	 	$eid=$_REQUEST["editid"];
	 	$mt=$_REQUEST["Main_Team"];
	 	
	 	

	 	$update ="UPDATE player SET Main_Team= '$mt'  WHERE Id = $eid";
	 	$run=mysqli_query($link,$update);
	 		if($run==true){
	 			   if(isset($_COOKIE["currentUser"])){
        		   $cuser = $_COOKIE["currentUser"];
      
	 					$sql= "SELECT DISTINCT player.f_name FROM player,admin,team WHERE player.Main_Team='Yes' AND player.Team_id=team.Team_Id AND team.manager_username='$cuser'";
 			$r=mysqli_query($link,$sql);
 			if($r==true)
 			{
 				$a=0;
 				while ($c=mysqli_fetch_array($r)) {?>
 					<tr>
 						<td><h3><?php $a;$a++;?></h3></td>
	 		<?php }
	  if(isset($_REQUEST["editbtn"])){
	 	$eid=$_REQUEST["editid"];
	 if($a<12){
	 	
		header("location:squad.php?edited");	
  
	}
	else{
		$update ="UPDATE player SET Main_Team= 'No'  WHERE Id = $eid";
		$run=mysqli_query($link,$update);
		if($run==true){
		header("location:squad.php?cant");
	}
	}
}
}
	}
	
		
} }?>