<?php 
	include("connection.php");
 ?>
 <?php include("header.php"); ?>

<?php  if(isset($_COOKIE["currentUser"])){
        
      $cuser = $_COOKIE["currentUser"];
      $sql="SELECT * FROM team,player,manager WHERE team.Team_Id=player.Team_id AND player.username='$cuser' AND manager.teamId=team.Team_Id";
      $run=mysqli_query($link,$sql);
      if($run==true){
        while($row=mysqli_fetch_array($run)){?>
        <div class="container">
        <div id="loginBox">
      		<h2>Team Name : <?php echo $row["Team_Name"]?></h2>
      		
      		<h3>Title :
      		 <?php echo $row["title"]?></h3>
      	
      		<h3>Stadium :
      		<?php echo $row["stadium"];?></h3>
          <h3>Team Value :
          <?php echo $row["Team_Value"];?></h3>
     
      		<h3>Manager Name :
      		<?php echo $row["Name"];?></h3>
      		
      		
          </div>
          </div>
      		
      	<?php  } ?>
      <?php  }?>
    <?php } ?>
    <br><br>
    <?php include("footer.php"); ?>