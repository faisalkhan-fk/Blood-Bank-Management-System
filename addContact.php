<?php
include "blood/connection.php";
if(isset($_POST['send'])){


    $name= $_POST['name'];
    $email = $_POST['email'];
    $mob = $_POST['mob'];
    $message = $_POST['message'];
  
    $sql = "INSERT INTO contact (name, email, mob,
     message)
      VALUES ( '$name', '$email', '$mob',
       '$message')";
       
      $result=mysqli_query($conn,$sql);
      if(!$result)
      {
       // echo "data insseted";
        echo "invalid";
      }
      else
      {
        header("Location: messageSend.php");
      }
    }

    ?>