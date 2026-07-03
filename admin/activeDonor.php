<?php 
  include "../blood/connection.php";
   if(isset($_GET["act"])){

    $act=$_GET['act'];
  
    $actSql="update bbank set stats='0' where id ='$act'";
    $result5=mysqli_query($conn,$actSql);
    if(!$result5)
    {
      
        header("Location:addDonor.php");

    }
    else
    {
        header("Location:addDonor.php");

    }


   }

?>
