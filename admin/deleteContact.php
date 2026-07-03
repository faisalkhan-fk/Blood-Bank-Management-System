<?php
include "../blood/connection.php";
 if(isset($_GET["act"])){
    $id = $_GET['act'];
    
    $sqldel="delete from contact where id='$id'";
    
    if(mysqli_query($conn,$sqldel))
    {
        echo "Data Delete Successfully";
    }
    else{
        echo "Data not deleted";
    }
    
}
?>