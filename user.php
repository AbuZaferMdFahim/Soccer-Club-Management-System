<?php  
  include("connection.php");
  // if(isset($_COOKIE["currentUser"])){
  //   header("location: main.php");
  // }

?>
 	


      <?php require_once("header1.php") ?>
      <br>
      
      <div class = "container">
        <h1>
      <?php  if(isset($_COOKIE["currentUser"])){
        echo 'logged in as - ';
      echo $_COOKIE["currentUser"]; }
    ?>
</h1>
       
    

<center><img  src="users.png" alt="" style="width:600px;height:250px;margin-left:40px;margin-right:90px; float:right;"></center>
    
     </div>
      <?php require_once("footer.php") ?>
 