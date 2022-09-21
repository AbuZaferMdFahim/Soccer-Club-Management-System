<?php 

	include("connection.php");
?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 

 		
 	 	 
 <?php  if(isset($_COOKIE["currentUser"])){
        
      $cuser = $_COOKIE["currentUser"];
      ?>
     <center> 
     <?php include("index1.php");?>
 	<?php  	if(isset($_REQUEST["deleted"])){
 			echo "Player has been removed";
 		}

 	 ?> 
 	<table class="pd_table">
 		<tr align="center">
 			<th><b>Si No</b></th>
 			<th><b>Name</b></th>
 			
 			<th><b>Date of Birth</b></th>
 			<th><b>Contact</b></th>
 			<th><b>Position</b></th>
 			<th><b>Strong Foot</b></th>
 			<th><b>Hired date</b></th>
 			<th><b>Contract(Year)</b></th>
 			<th><b>Agent Name</b></th>
 			<th><b>Action</b></th>
 		</tr>
 		<?php 
 			$sql= "SELECT DISTINCT player.Id,player.f_name,player.l_name,player.date_of_birth,player.contact,player.position,player.strong_foot,player.hired_date,player.contract,player.agent_id FROM team,player,admin WHERE player.Team_id=team.Team_Id AND team.manager_username='$cuser'";
 			$run=mysqli_query($link,$sql);
 			if($run==true)
 			{
 				$a=1;
 				while ($c=mysqli_fetch_array($run)) {?>
 					<tr align="center">
 						<td><h3><?php echo $a;$a++;?></h3></td>
 						<td><h3><?php echo $c["f_name"]," ".$c["l_name"];?></h3></td>
 						<td><h3><?php echo $c["date_of_birth"];?></h3></td>
 						<td><h3><?php echo $c["contact"];?></h3></td>
 						<td><h3><?php echo $c["position"];?></h3></td>
 						<td><h3><?php echo $c["strong_foot"];?></h3></td>
 						<td><h3><?php echo $c["hired_date"];?></h3></td>
 						<td><h3><?php echo $c["contract"];?></h3></td>
 						<td><h3><?php echo $c["agent_id"];?></h3></td>
 						 <td><h3><a  style="background :tomato;border:1px solid ;border-radius:5px;color:black;padding:2px;text-decoration: none;" onclick="return confirm('Are you sure');" href="delete.php?id=<?php echo $c['Id']; ?>">Remove</a></h3></td>
 						</tr> 	
 				
 		<?php	}}}

 		 ?>


 	</table>
 </center> 
 	<?php include("footer.php") ?>
 
 </body>
 </html>
