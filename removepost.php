<?php

require_once("connection.php");

   

    $Id= $_REQUEST["uid"];

    $dlt="DELETE FROM news WHERE id=$Id";

    $runDlt = mysqli_query($link,$dlt);

    if($runDlt==true){
        header("location: myNews.php?deleted");
       
    }
    
?>