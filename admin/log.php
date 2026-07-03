<?php
session_start();
include "../blood/connection.php";
if(isset($_POST['name']) && isset($_POST['pass']))
{
    $email = $_POST['name'];
    $pass = $_POST['pass'];

    $chackSQL="select * from admin where email='$email'";
    $result = mysqli_query($conn,$chackSQL);
    if(mysqli_num_rows($result) > 0)
    {
    $row = mysqli_fetch_assoc($result);
        if($pass==$row['password'])
        {
            $_SESSION['name'] = $row['name'];
            $_SESSION['pass'] = $row['pass'];
            header('Location:admin.php');
        }
        else
        {
            echo 'invalid id and password';
        }

    }
    else{
        echo 'invalid id and password';
    }
}
else
{
    echo "invlid id and password";
}
?>