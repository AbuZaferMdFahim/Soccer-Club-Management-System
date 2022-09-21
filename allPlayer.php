<?php 

  include("connection.php");
?>
 <!DOCTYPE html>
 <html>
 <head>
  <title></title>
 </head>
 <body>
 

    <?php include("header1.php");?>
    <center>
 
     
 <?php  if(isset($_COOKIE["currentUser"])){
        
      $cuser = $_COOKIE["currentUser"];

      $sql= "SELECT distinct * FROM player,vote Where vote.username='$cuser' ";
      $run=mysqli_query($link,$sql);
      if($run==true)
      {
        
        while ($c=mysqli_fetch_array($run)) {?>
          <tr>
           
            <td></h3><?php  $a=$c["id"];?></h3></td></tr>
           <?php   break;

       }}?>
       <tr align="left">
       <td><a style="background :cadetblue;border:1px solid ;border-radius:5px;color:black;padding:10px;text-decoration: none;" href="form9.php?edit_id=<?php echo $a ;?>">Vote a Player</a></td></tr><br>
        <?php   if(isset($_REQUEST["done"])){
      echo "Your Vote has been done";
    }

   ?>
       <table class="pd_table">
    <tr align= "center">
      <th><b>Id No</b></th>
      <th><b>Name</b></th>
      
      <th><b>Position</b></th>
    
      
    <tr align= "center">
    <?php 
      $sql= "SELECT distinct * FROM player,vote Where vote.username='$cuser' ";
      $run=mysqli_query($link,$sql);
      if($run==true)
      {
        
        while ($c=mysqli_fetch_array($run)) {?>
          <tr>
           
            <td></h3><?php echo $c["Id"];?></h3></td>
            <td><h3><?php echo $c["f_name"]," ".$c["l_name"];?></h3></td>
            
            <td><h3><?php echo $c["position"];?></h3></td>
            
            
            
            </tr> 

        
    <?php } ?>
       <?php    }}

     ?>


  </table> 
      
  <?php  
   include("footer.php") ?>
 
 </body>
 </html>