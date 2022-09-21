<?php 
	include("connection.php");
 ?>
 <!DOCTYPE html>
  <html>
  <head>
  	<title>Request for Join</title>
  </head>
  <body>
  	<?php  include("index1.php");?>
    <center>
      <?php 
    if(isset($_REQUEST["added"])){
      echo "Player has been added";
    }
    else if(isset($_REQUEST["deleted"])){
      echo "data has  been deleted";
    }
    else if(isset($_REQUEST["false"])){
      echo '<b style="color : red"> Please Choose only Your Team ';
  
    }


   ?>
  		<table class="pd_table">
  		<tr>
  		<th><b>Username</b></th>
  		<th><b>Email Id</b></th>
  		<th><b>Password</b></th>
  		<th><b>First Name</b></th>
  		<th><b>Last Name</b></th>
  		<th><b>Date of Birth</b></th>
  		<th><b>Contact</b></th>
  		<th><b>Position</b></th>
  		<th><b>Strong Foot</b></th>
  		<th><b>Action</b></th>
  	</tr>
  	<?php  
  	$show= "SELECT * FROM request ";
  	$run=mysqli_query($link,$show);
  	if($run==true){
  		while($data = mysqli_fetch_array($run)){ ?>
  			<tr>
  			<td><?php echo $data['username']; ?></td>
  			<td><?php echo $data['email']; ?></td><td><?php echo $data['password']; ?></td>
  			<td><?php echo $data['f_name']; ?></td>
  			<td><?php echo $data['l_name']; ?></td>
  			<td><?php echo $data['date_of_birth']; ?></td>
  			<td><?php echo $data['contact']; ?></td>
  			<td><?php echo $data['position']; ?></td>
  			<td><?php echo $data['strong_foot']; ?></td>
  			<td><a style="background :cadetblue;border:1px solid ;border-radius:5px;color:white;padding:8px;text-decoration: none;" href="form4.php?edit_id=<?php echo $data["id"];?>">Accept</a></td>

  			</tr>



  	<?php }
  	}?>
</table>

  </center>
 	

  </body>
  </html> 