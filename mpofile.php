<?php 
  include ("connection.php");
 
 ?>
<!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	 <?php include("index1.php"); ?>
 	 
   <?php  if(isset($_COOKIE["currentUser"])){
        
      $cuser = $_COOKIE["currentUser"];
      $sql="SELECT * FROM admin,team,manager WHERE admin.username='$cuser' AND admin.username=team.manager_username AND admin.id=manager.id ";
      $run=mysqli_query($link,$sql);
      if($run==true){
        while($row=mysqli_fetch_array($run)){?>
       <div class="container">
      	<div id="loginBox">
          <h3>Username:
           <?php echo $row["username"]?></h3>
      		<h3>Email:
      		 <?php echo $row["email"]?></h3>
      		 
      		
      		<h3>Password :
      		 <?php echo $row["password"]?></h3>
           <h3>Salary :
           
      		<?php echo $row["Salary"];?></h3>
          <h3>Team Name : 
          <?php echo $row["Team_Name"];?></h3>
         </div>	
      	
      		</div>

      		
      	<?php  } ?>
      <?php  }?>
    <?php } ?>
   
    
    <br><br>
    <?php  if(isset($_REQUEST["edited"])){?>
      <font color=gray><h4 align="center">data has  been Updated</h4></font>
    <?php  }?>
 
 
</center>
</body>
</html>