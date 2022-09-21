<?php 
  include("connection.php");
 ?>
 
 <?php include("index1.php"); ?>
 <center>
  
      
   
 <table class="pd_table">
  <?php  if(isset($_REQUEST["edited"])){?>
  <font color=greem><h4 align="center">data has  been Changed</h4></font>
<?php  }?>
    <tr align="center">
    <th><b>Name</b></th>
      <th><b>Position</b></th>
      <th><b>Appearance</b></th>
      <th><b>Goals</b></th>
      <th><b>Assist</b></th>
      <th><b>Clean Sheets</b></th>
      <th><b>Yellow Card</b></th>
      <th><b>Red Card</b></th>
      <th><b>Action</b></th>
    </tr>
<?php  if(isset($_COOKIE["currentUser"])){

        
      $cuser = $_COOKIE["currentUser"];
      $sql="SELECT DISTINCT player.Id,player.f_name,player.l_name,player.position,player.appearance,player.goals,player.assist,player.clean_sheet,player.yellow_card,player.red_card FROM player,team,admin WHERE player.Team_id=team.Team_Id AND team.manager_username='$cuser'";
      $run=mysqli_query($link,$sql);
      if($run==true){
        while($row=mysqli_fetch_array($run)){?>
          <tr align="center">
          <td><h2><?php echo $row["f_name"]," ".$row["l_name"];?></h2></td>
          
          <td><h3>
           <?php echo $row["position"]?></h3></td>

          <td><h3>
           <?php echo $row["appearance"]?></h3></td>
        
          <td><h3>
          <?php echo $row["goals"];?></h3></td>
     
          <td><h3>
          <?php echo $row["assist"];?></h3></td>

          <td><h3>
          <?php echo $row["clean_sheet"];?></h3></td>

          <td><h3>
          <?php echo $row["yellow_card"];?></h3></td>

          <td><h3>
          <?php echo $row["red_card"];?></h3></td>
        
          <td><a  style="background :#669999;border:1px solid ;border-radius:5px;color:white;padding:2px;text-decoration: none;" href="form11.php?edit_id=<?php echo $row["Id"];?>">Change</a></td>
</tr>
          
        <?php  } 
       }
     } ?>
     </table>
   </center>
    <br><br>
    <?php include("footer.php"); ?>