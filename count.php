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
 		<tr align="Center">
 			<th><b>Si.No</b></th>
 			<th><b>Team Name</b></th>
 			<th><b>Name</b></th>
 			<th><b>position</b></th>
 			<th><b>Vote</b></th>
 		</tr>
 		<?php 
 			$sql= "SELECT team.Team_Name,player.f_name,player.l_name ,player.ID,player.position , COUNT(*) Vote FROM player,vote,team WHERE player.Id=vote.Player_id AND player.Team_id=team.Team_Id GROUP BY player.Id ORDER BY Vote DESC";
 			$run=mysqli_query($link,$sql);
 			if($run==true)
 			{
 				$a=1;
 				while ($c=mysqli_fetch_array($run)) {?>
 					<tr align="Center">
 						<td><h3><?php echo $a;$a++;?></h3></td>
 						<td></h3><?php echo $c["Team_Name"];?></h3></td>
 						<td><h3><?php echo $c["f_name"]," ".$c["l_name"];?></h3></td>
 						
 						<td></h3><?php echo $c["position"];?></h3></td>
 						<td></h3><?php echo $c["Vote"];?></h3></td>
 						
 						</tr> 	
 				
 		<?php	}}}

 		 ?>


 	</table>
 </center>
 	
 
 </body>
 </html>