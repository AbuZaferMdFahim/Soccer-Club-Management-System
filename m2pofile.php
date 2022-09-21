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
      $sql="SELECT * FROM admin,manager,location WHERE admin.username='$cuser' AND manager.location=location.location_id AND admin.id=manager.id ";
      $run=mysqli_query($link,$sql);
      if($run==true){
      	while($row=mysqli_fetch_array($run)){?>
      		 <div class="container">
         <div id="loginBox"> 
          <h3>Name:
           <?php echo $row["Name"]?></h3>
      		<h3>Birthdate:
      		 <?php echo $row["Birthdate"]?></h3>
      		 
      		
      		<h3>Contact :
      		 <?php echo $row["contactNo"]?></h3>
          <h3>Street Adress : 
          <?php echo $row["Street_adress"];?></h3>
          <h3>Postal Code : 
          <?php echo $row["Postal_Code"];?></h3>
           <h3>City : 
          <?php echo $row["City"];?></h3>
           <h3>State Province : 
          <?php echo $row["State_Province"];?></h3>
           <h3>Country Name : 
          <?php echo $row["Nationality"];?></h3> 
        
      		
      	<a style="background :cadetblue;border:1px solid ;border-radius:5px;color:black;padding:2px;text-decoration: none;" href="form5.php?edit_id=<?php echo $row["id"];?>" target="_blank">Change</a>
      	</div>	
      </div>
      		
      	<?php  } ?>
      <?php  }?>
    <?php } ?>
    <br><br>
  
    <?php  if(isset($_REQUEST["edited"])){?>
      <font color=gray><h4 align="center">data has  been Updated</h4></font>
    <?php  }?>
 
 

</body>
</html>