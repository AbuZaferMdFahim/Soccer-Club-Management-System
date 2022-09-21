<?php 
if(!isset($_COOKIE["currentUser"])){
    header("location: home.php");
  }

  include("index1.php"); 

  if(isset($_REQUEST["username"])){
    $username = $_REQUEST["username"];
  }
    
?>

<div id="loginBox">
<center>



<form action="post.php" method="POST">


<br>
        <label >Title:  </label>
        <input type="text"name="title" placeholder="title">
       <br>
       <label >Content:</label><br>
        <textarea name="content" id="" cols="30" rows="10"></textarea>
        <br>
        
      

        <input type="submit" name="postNews" value="Post">
</form>


</center>

</div>




  
