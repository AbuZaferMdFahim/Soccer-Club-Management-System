<?php 
	include("connection.php");
 ?>
 
 <?php include("header.php"); ?>
 <?php  if(isset($_COOKIE["currentUser"])){

        
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
      <th><b>Position</b></th>
      <th><b>Appearance</b></th>
      <th><b>Goals</b></th>
      <th><b>Assist</b></th>
      <th><b>Clean Sheets</b></th>
      <th><b>Yellow Card</b></th>
      <th><b>Red Card</b></th>
    </tr>

     <?php  $sql="SELECT DISTINCT player.f_name,player.l_name,player.position,player.appearance,player.goals,player.assist,player.clean_sheet,player.yellow_card,player.red_card FROM player,team WHERE player.Team_id='$b'";
      $run=mysqli_query($link,$sql);
      if($run==true){
      	while($row=mysqli_fetch_array($run)){?>
          <tr align="center">
      		<td><h2><?php echo $row["f_name"]," ".$row["l_name"];?></h2></td>
      		
          <td><h3>
           <?php echo $row["position"]?></h3></td>

      		<td><h3>
      		 <?php echo $row["appearance"]?></h3></td>
      	
      		<td><h3>
      		<?php echo $row["goals"];?></h3></td>
     
      		<td><h3>
      		<?php echo $row["assist"];?></h3></td>

          <td><h3>
          <?php echo $row["clean_sheet"];?></h3></td>

          <td><h3>
          <?php echo $row["yellow_card"];?></h3></td>

          <td><h3>
          <?php echo $row["red_card"];?></h3></td>
      		</tr>
      		

      		
      	<?php  } 
       }
     } ?>
     </table>
   </center>
    <br><br>
    <?php include("footer.php"); ?>