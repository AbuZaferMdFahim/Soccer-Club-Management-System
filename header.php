<?php 	
		session_start();
		include("connection.php");

 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Soccer</title>
	<link rel="stylesheet" href="test.css">
</head>
<body>

<div id = "header">
	
	
     	<h1>Soccer Club Management System</h1>
   	<ul> 
		<li><a href="profile.php">HOME</a></li>
    <li><a href="about.php">ABOUT</a></li>
    <li><a href="news.php">News</a></li>

		
		<?php if(isset($_COOKIE["currentUser"])){
			echo '<li><a href="info.php">Profile</a></li>';
		} ?>
		<?php  if(!isset($_COOKIE["currentUser"])){
			echo '<li class="dropdown"><a clase=dropbtn href="javascript:void(0)">Login</a>';
				echo '<div class="dropdown-content">';
				echo '<a class="dropbtn" href="form.php">Manager</a>';
				echo '<a class="dropbtn" href="form1.php">Player</a>';
				echo '<a class="dropbtn" href="form8.php">User</a>';

                echo "</div>";
			echo "</li>";	
       }?>
       <?php  if(isset($_COOKIE["currentUser"])){
      echo '<li class="dropdown"><a clase=dropbtn href="javascript:void(0)">Squad</a>';
        echo '<div class="dropdown-content">';
        echo '<a class="dropbtn" href="psquad.php">Team Squad</a>';
        echo '<a class="dropbtn" href="plineup.php">Starting 11</a>';
         echo '<a class="dropbtn" href="psubs.php">Subtitute</a>';
                echo "</div>";
      echo "</li>"; 
       }?>
       <?php  if(isset($_COOKIE["currentUser"])){
      echo '<li class="dropdown"><a clase=dropbtn href="javascript:void(0)">Team</a>';
        echo '<div class="dropdown-content">';
        echo '<a class="dropbtn" href="pprofile.php">Team Profile</a>';
        echo '<a class="dropbtn" href="pstats.php">Team Stats</a>';
                echo "</div>";
      echo "</li>"; 
       }?>
       <?php if(isset($_COOKIE["currentUser"])){
      echo '<li><a href="fixture1.php">Fixture</a></li>';
    } ?>

       <?php  if(isset($_COOKIE["currentUser"])){
      echo '<li class="dropdown"><a clase=dropbtn href="javascript:void(0)">Stats</a>';
        echo '<div class="dropdown-content">';
        echo '<a class="dropbtn" href="Goals.php">Top Scorrer</a>';
        echo '<a class="dropbtn" href="assist.php">Assist</a>';
        echo '<a class="dropbtn" href="cleensheets.php">Clean Sheets</a>';
         echo '<a class="dropbtn" href="yellowCard.php">Yellow Card</a>';
         echo '<a class="dropbtn" href="redCard.php">Red Card</a>';       
                echo "</div>";
      echo "</li>"; 
       }?>
       <?php if(isset($_COOKIE["currentUser"])){
			echo '<li><a href="logout.php">Logout</a></li>';
		} ?>
       <?php if(!isset($_COOKIE["currentUser"])){
			echo '<li><a href="form3.php">Request</a></li>';
		} ?>
		<?php if(!isset($_COOKIE["currentUser"])){
			echo '<li><a href="form7.php">Sign up</a></li>';
		} ?>
       
		
		
		</ul>
		

		  

</div>