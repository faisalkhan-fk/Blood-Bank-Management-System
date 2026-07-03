<?php 
 include "blood/connection.php";
   if(isset($_GET["act"])){

    $act=$_GET['act'];
   
    $actSql="update bbank set stats='1' where id ='$act'";
    
    $result5=mysqli_query($conn,$actSql);
    if(!$result5)
    {
      
        header("Location:showProfile.php");

    }
    else
    {
        header("Location:showProfile.php");

    }


   }

?>