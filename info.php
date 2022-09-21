<?php 
  include ("connection.php");
  if(!isset($_COOKIE["currentUser"])){
    header("location: index.php");
  }
 ?>
<!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	 <?php include("header.php"); ?>
 	

   <?php  if(isset($_COOKIE["currentUser"])){
        
      $cuser = $_COOKIE["currentUser"];
      $sql="SELECT * FROM player ,team WHERE username='$cuser'And player.Team_id=team.Team_Id";
      $run=mysqli_query($link,$sql);
      if($run==true){
      	while($row=mysqli_fetch_array($run)){?>
      		<div class="container">
          <div id="loginBox">
          <h2>Name :
          <?php echo $row["f_name"]," ".$row["l_name"];?></h2>

      		<h2>Email:
      		 <?php echo $row["email"]?></h2>
      
      		<h2>Password :
      		 <?php echo $row["password"]?></h2>
           <h2>Date of Birth :
      		 <?php echo $row["date_of_birth"]?></h2>
      	
      		<h2>Contact :
      		<?php echo $row["contact"];?></h2>
     
      		<h2>Position :
      		<?php echo $row["position"];?></h2>
      		
      		<h2>Strong Foot : 
      		 <?php echo $row["strong_foot"];?></h2>
      		
      		<h2>Join Date : 
   	      	<?php echo $row["hired_date"];?></h2>
          <h2>Contract(Year) : 
            <?php echo $row["contract"];?></h2>  
      		
      		<h2>Agent Name : 
      		<?php echo $row["agent_id"];?></h2>

      		<h2>Team Name : 
      		<?php echo $row["Team_Name"];?></h2>

      		<a style="background :cadetblue;border:1px solid ;border-radius:5px;color:black;padding:2px;text-decoration: none;" href="form2.php?edit_id=<?php echo $row["Id"];?>">Change</a><a style="background :tomato;border:1px solid ;border-radius:5px;color:black;padding:2px;text-decoration: none ;float:right;" onclick="return confirm('Are you sure');"  href="leave.php?id=<?php echo $row["Id"];?>">Leave</a>
      		
      		</div>
      		</div>
      	<?php  } ?>
      <?php  }?>
    <?php } ?>
    <br><br>
    <?php  if(isset($_REQUEST["edited"])){?>
      <font color=gray><h4 align="center">data has  been Changed</h4></font>
    <?php  }

  
 
  include("footer.php"); ?>

</body>
</html>
