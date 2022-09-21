<?php 
	include("connection.php");
 ?>
 	<?php include("stats.php");?>
 	<!DOCTYPE html>
 	<html>
 	<head>
 		<title>Assist </title>
 	</head>
 	<body>
 <center>
 	<table class="pd_table">
 		<tr>
 		<th>Si No</th>
 		<th>Player Name</th>
      <th>Position</th>
 		<th>Appearance</th>
 		<th>Assist</th>
 		<th>Team Name</th>
 		</tr>
 	
 	<?php $sql="SELECT player.f_name,player.l_name,player.position,player.appearance,player.assist,team.Team_Name FROM player,team WHERE player.Team_id=team.Team_Id ORDER BY player.assist DESC Limit 20;";
 	$run=mysqli_query($link,$sql);
 	
 	if($run==true){
 			$a=1;
      	while ($row=mysqli_fetch_array($run)) {?>
      		
      	<tr align="center">
      		<td><?php echo $a;$a++;?></td>
      		<td><?php echo $row["f_name"]," ".$row["l_name"];?></td>
            <td><?php echo $row["position"];?></td>
      		<td><?php echo $row["appearance"];?></td>
      		<td><?php echo $row["assist"];?></td>
      		<td><?php echo $row["Team_Name"];?></td>
      	</tr>
      	
   <?php } }?>
   </table>
   </center> 
 <?php include("footer.php");?>
</body>
</html>