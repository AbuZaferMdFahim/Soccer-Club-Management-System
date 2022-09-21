<?php  

include("connection.php");

  if(isset($_COOKIE["currentUser"])){
        
      $cuser = $_COOKIE["currentUser"];
     
   if(isset($_REQUEST["title"]) && isset($_REQUEST["content"]) ){
    $title=$_REQUEST["title"];
    $content=$_REQUEST["content"];

    if($title!="" && $content!=""){
    $sqlNews="INSERT INTO news (title, content,user_name) VALUES ( '$title', '$content','$cuser');";

    if(mysqli_query($link,$sqlNews)){
        header("location:mynews.php?true");
    }
    else{
       header("location:mynews.php?false");
    }
}
else{
  header("location:mynews.php?write");
}
}}

?>

