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
 		<tr>
 			<th><b>Si.no</b></th>
 			<th><b>First Name</b></th>
 			<th><b>Position</b></th>

 			
 			
 		</tr>
 		<?php 
 			$sql= "SELECT f_name,l_name,position FROM `player` WHERE Team_id='$b'";
 			$run=mysqli_query($link,$sql);
 			if($run==true)
 			{
 				$a=1;
 				while ($c=mysqli_fetch_array($run)) {?>
 					<tr>
 						<td><h3><?php echo $a;$a++;?></h3></td>
 						<td><h3><?php echo $c["f_name"]," ".$c["l_name"];?></h3></td>
 						<td><h3><?php echo $c["position"];?></h3></td>
 						
 						</tr> 	
 				
 		<?php	}}}

 		 ?>



 	</table>
 	<br>
   </center>
 	<?php include("footer.php") ?>
 
 </body>
 </html>