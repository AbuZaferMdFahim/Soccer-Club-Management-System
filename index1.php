
<?php

 include("connection.php"); 
 if(!isset($_COOKIE["currentUser"])){
    header("location: index.php");
  } 
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
    
    <?php if(isset($_COOKIE["currentUser"])){
      echo '<li><a href="main.php">Home</a></li>';
    } ?>
   <li><a href="about1.php">About</a></li>
    <li><a href="news.php">News</a></li>
     <?php if(isset($_COOKIE["currentUser"])){?>
      <li><a href="mynews.php">My News</a></li>
 <?php    } ?>
     <?php  if(isset($_COOKIE["currentUser"])){
      echo '<li class="dropdown"><a clase=dropbtn href="javascript:void(0)">Profile</a>';
        echo '<div class="dropdown-content">';
        echo '<a class="dropbtn" href="mpofile.php">Personal Information</a>';
        echo '<a class="dropbtn" href="m2pofile.php">Information</a>';
                echo "</div>";
      echo "</li>"; 
       }?>
    <?php  if(!isset($_COOKIE["currentUser"])){
      echo '<li class="dropdown"><a clase=dropbtn href="javascript:void(0)">Login</a>';
        echo '<div class="dropdown-content">';
        echo '<a class="dropbtn" href="form.php">Admin</a>';
        echo '<a class="dropbtn" href="form8.php">User</a>';
                echo "</div>";
      echo "</li>"; 
       }?>
         <?php if(isset($_COOKIE["currentUser"])){?>
      <li><a href="player.php">Player</a></li>
 <?php    } ?>
      <?php if(isset($_COOKIE["currentUser"])){?>
      <li><a href="fixture.php">Fixture</a></li>
 <?php    } ?>

      <?php  if(isset($_COOKIE["currentUser"])){
      echo '<li class="dropdown"><a clase=dropbtn href="javascript:void(0)">Squad</a>';
        echo '<div class="dropdown-content">';
        echo '<a class="dropbtn" href="squad.php">Team Squad</a>';
        echo '<a class="dropbtn" href="lineup.php">Starting 11</a>';
         echo '<a class="dropbtn" href="subs.php">Subtitute</a>';
                echo "</div>";
      echo "</li>"; 
       }?>

     <?php  if(isset($_COOKIE["currentUser"])){
      echo '<li class="dropdown"><a clase=dropbtn href="javascript:void(0)">Team</a>';
        echo '<div class="dropdown-content">';
        echo '<a class="dropbtn" href="teamprofile.php">Team Profile</a>';
        echo '<a class="dropbtn" href="teamstats.php">Team Stats</a>';
                echo "</div>";
      echo "</li>"; 
       }?>
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
      echo '<li><a href="add.php">Add</a></li>';
    } ?>
    <?php if(isset($_COOKIE["currentUser"])){
      echo '<li><a href="count.php">Vote</a></li>';
    } ?>

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
    

      

