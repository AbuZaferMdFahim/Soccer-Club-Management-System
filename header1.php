<?php 	
		session_start();
		include("connection.php");

 ?>
 <!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="test.css">
</head>
<body>

<div id = "header">
	
	
     	<h1>Soccer Club Management System</h1>
     	<ul> 
		<li><a href="user.php">HOME</a></li>
		
		<li><a href="news.php">NEWS</a></li> 
		<li><a href="allPlayer.php">Player</a></li>
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
	</ul>
     	</div>
     