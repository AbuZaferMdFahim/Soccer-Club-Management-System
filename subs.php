<?php 

	include("connection.php");
?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 

 		<?php include("index1.php");?>
 	<?php  	if(isset($_REQUEST["deleted"])){
 			echo "data has  been deleted";
 		}

 	 ?>
 	 	 
 <?php  if(isset($_COOKIE["currentUser"])){
        
      $cuser = $_COOKIE["currentUser"];
      ?> 
      <center>
 	<table class="pd_table">
 		<tr align="center">
 			
 			<th><b>Name</b></th>
 		    <th><b>Position</b></th>
 			
 		</tr>
 		<?php 
 			$sql= "SELECT DISTINCT player.Id,player.f_name,player.l_name,player.position FROM team,player,admin WHERE player.Team_id=team.Team_Id AND team.manager_username='$cuser' AND player.Main_Team !='Yes'";
 			$run=mysqli_query($link,$sql);
 			if($run==true)
 			{
 				$a=1;
 				while ($c=mysqli_fetch_array($run)) {?>
 					<tr align="center">
 						<td><h3><?php echo $c["f_name"]," ".$c["l_name"];?></h3></td>
 						
 						<td><h3><?php echo $c["position"];?></h3></td>
 						</tr>	
 				
 		<?php	}}}

 		 ?>


 	</table>
 </center>
 	
 
 </body>
 </html>