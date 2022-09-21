<?php 
if(!isset($_COOKIE["currentUser"])){
    header("location: index.php");
  }
  
  include("index1.php"); 
 

?>


<!DOCTYPE html>
 <html>
 <head>
  <title></title>
 </head>
 <body>






  <?php  if(isset($_COOKIE["currentUser"])){
        
      $cuser = $_COOKIE["currentUser"];?>
<center>


    <table class="pd_table">

    <tr>
        <th>serial</th>
        <th>title</th>
        <th>Content</th>
        <th>date</th>
        <th>Action</th>
    </tr>
    <?php
      
      
       

        $qry1 = "SELECT * FROM news  WHERE user_name='$cuser' ORDER BY date DESC";
        $run = mysqli_query($link,$qry1);
         $serial=1;
             if($run){
            while($data = mysqli_fetch_array($run)){      

                            
 ?> 
       
        <tr> 
           <td>  <?php echo $serial;  ?>           </td>
           <td>  <?php echo $data["title"];?>       </td>
           <td>   <?php echo $data["content"];?>    </td>
           <td>   <?php echo $data["date"];?>    </td>
           <td><a  style="background :#669999;border:1px solid ;border-radius:5px;color:white;padding:2px;text-decoration: none;" href="form12.php?edit_id=<?php echo $data["id"];?>">Change</a>||||<a style="background :tomato;border:1px solid ;border-radius:5px;color:black;padding:2px;text-decoration: none;" onclick="return confirm('ARE YOU SURE?');"    href="removepost.php?uid=<?php echo $data["id"];?>">Delete </a></td>
        </tr>  
        

<?php    $serial++;  }}}  
  

   
  ?>
        
   
    
     </table>
       </center>
   <center>

<?php
if(isset($_REQUEST["true"])){
    echo "<font color='green'>News Posted!</font>";
}?>
    <?php
   if(isset($_REQUEST["deleted"])){
    echo "<font color='tomato'>POST deleted !</font>";
}?>
 <?php
     if(isset($_REQUEST["done"])){
    echo "<font color='Green'>Your Post Updated !</font>";
}?>
<?php
     if(isset($_REQUEST["write"])){
    echo "<font color='red'>Please Write Something!</font>";
}?>
<br>
<tr align="left">
       <td><h3><a style="background :cadetblue;border:1px solid ;border-radius:5px;color:black;padding:2px;text-decoration: none;" href="form10.php?username=<?php echo $cuser ;?>">Publish A News</a></h3></td></tr> 

</center>


</body>
</html>