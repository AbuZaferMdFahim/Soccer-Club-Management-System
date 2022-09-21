<?php 

	include("connection.php");
?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 

 		<?php include("index1.php");
 	

 	 
 	 	 
     if(isset($_COOKIE["currentUser"])){
        
      $cuser = $_COOKIE["currentUser"];
      ?>
      <center> 
 	<table class="pd_table">
 		<tr>
 			<th><b>Si No</b></th>
 			<th><b>First Name</b></th>
 			<th><b>Position</b></th>

 			<th><b>Main Team</b></th>
 			<th><b>Action</b></th>
 		</tr>
 		<?php 
 			$sql= "SELECT DISTINCT player.Id,player.f_name,player.l_name,player.position,player.Main_Team FROM team,player,admin WHERE player.Team_id=team.Team_Id AND team.manager_username='$cuser'";
 			$run=mysqli_query($link,$sql);
 			if($run==true)
 			{
 				$a=1;
 				while ($c=mysqli_fetch_array($run)) {?>
 					<tr>
 						<td><h3><?php echo $a;$a++;?></h3></td>
 						<td><h3><?php echo $c["f_name"]," ".$c["l_name"];?></h3></td>
 						<td><h3><?php echo $c["position"];?></h3></td>
 						<td><h3><?php echo $c["Main_Team"];?></h3></td>
 						 <td><h3><a  style="background :#669999;border:1px solid ;border-radius:5px;color:white;padding:2px;text-decoration: none;" href="form6.php?edit_id=<?php echo $c['Id']; ?>">Change</a></h3></td>
 						</tr> 	
 				
 		<?php	}}}

 		 ?>



 	</table>

 	<br><br>
    <?php  if(isset($_REQUEST["edited"])){?>
      <font color=gray><h4 align="center">Succesfully Change</h4></font>
    <?php  }?>
 	<?php  if(isset($_REQUEST["cant"])){?>
      <font color=red><h4 align="center">You cannot select over 11 player in the field</h4></font>
    <?php  }?> 
    </center>  
 	<?php include("footer.php") ?>
 
 </body>
 </html>

                   

