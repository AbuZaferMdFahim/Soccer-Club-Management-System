<?php
    require_once("stats.php");


?>

<div class="container">
  
<center>

    <table class="pd_table">
    <tr>
        <th>serial</th>
        <th>Username</th>
        <th>title</th>
        <th>Content</th>
        <th>Date</th>
    </tr>



<?php
   
    $sql="SELECT user_name,title,content,date FROM news ORDER BY date DESC";
    $run=mysqli_query($link,$sql);
    $serial=1;
    if($run){
        while($data=mysqli_fetch_array($run)){
?>

    <tr>
        <td><?php echo $serial;  ?></td>
        <td><?php echo $data["user_name"];?></td>
        <td><?php echo $data["title"];?></td>
        <td><?php echo $data["content"];?></td>
        <td><?php echo $data["date"];?></td>
    </tr>
    
 <?php
      
      $serial++; } }
 ?> 
    
    
    
    </table>
   
</center>

</div>
<?php require_once("footer.php");  ?>