<?php 

	include("connection.php");
?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 

 		<?php include("header.php");
 	

 	 
 	 	 
     if(isset($_COOKIE["currentUser"])){
        
      $cuser = $_COOKIE["currentUser"];
       $sql="SELECT Team_id FROM `player` WHERE username='$cuser'";
       $run=mysqli_query($link,$sql);
 			if($run==true)
 			{
 				
 				while ($c=mysqli_fetch_array($run)) {?>
 					<tr>
 						
 						<td><h3><?php $b= $c["Team_id"];?></h3></td>

       
  <?php  }}?>
  <center>
  <table class="pd_table">
 		<tr align="center">
 			
 			<th><b>Name</b></th>
 		    <th ><b>Position</b></th>
 			
 		</tr>
 		<?php 
 			$sql= "SELECT DISTINCT player.Id,player.f_name,player.l_name,player.position FROM team,player,admin WHERE player.Team_id='$b'  AND player.Main_Team='No'";
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