<?php 

	include("connection.php");
?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 

 	
 	 	 <?php include("header.php");?>
 <?php  if(isset($_COOKIE["currentUser"])){
        
      $cuser = $_COOKIE["currentUser"];
      ?>
      <div class="container">
     <center>  
 	<table class="pd_table">
 		<tr align="center">
 			<th><b>Home Team</b></th>
 			<th><b>---</b></th>
 			<th><b>Away Team</b></th>
 			<th><b>Date</b></th>

 			 		</tr>
 		<?php 
 			$sql= "SELECT h.Team_Name AS HomeTeam ,a.Team_Name AS AwayTeam,fixture.Date FROM fixture,team h,team a WHERE h.Team_Id=fixture.Home_Team AND a.Team_Id=fixture.Away_Team GROUP BY fixture.Date";
 			$run=mysqli_query($link,$sql);
 			if($run==true)
 			{
 				
 				while ($c=mysqli_fetch_array($run)) {?>
 					<tr align="center">
 						
 						
 						<td><h3><?php echo $c["HomeTeam"];?></h3></td>
 						<td><h3><?php echo 'Vs';?></h3></td>
 						<td><h3><?php echo $c["AwayTeam"];?></h3></td>
 						<td><h3><?php echo $c["Date"];?></h3></td>

 						</tr> 	
 				
 		<?php	}}}

 		 ?>


 	</table>
 </center> 
</div>
 	<?php include("footer.php") ?>
 
 </body>
 </html>