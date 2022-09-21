<?php 
	include("connection.php");
 ?>
 <?php include("index1.php"); ?>

<?php  if(isset($_COOKIE["currentUser"])){
        
      $cuser = $_COOKIE["currentUser"];

      $sql="SELECT DISTINCT * FROM team,admin,manager WHERE team.manager_username=admin.username AND admin.username='$cuser' AND manager.teamId=team.Team_Id";
      $run=mysqli_query($link,$sql);
      if($run==true){
      	while($row=mysqli_fetch_array($run)){?>
          <div class="container">
        <div id="loginBox">
          <h3>Team Id : <?php echo $row["Team_Id"]?></h3>
      		<h3>Team Name : <?php echo $row["Team_Name"]?></h3>
      		
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

    







 

