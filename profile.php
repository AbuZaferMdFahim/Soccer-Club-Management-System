<?php  
  include("connection.php");
  if(!isset($_COOKIE["currentUser"])){
    header("location: index.php");
  }

?>
  <?php require_once("header.php"); ?>
   <br>
      <div class = "container">
       <h1 style=" float:left;">
     	<?php  if(isset($_COOKIE["currentUser"])){
        echo 'Logged in as - ';
      echo $_COOKIE["currentUser"];
   
      
     } ?>

    </h1>

    <center> <img  src="player.jpg" alt="" style="width:700px;height:350px;margin-left:40px;margin-right:90px; float:right;"></center>


    </div>
 
      <?php require_once("footer.php"); ?>
    </div>