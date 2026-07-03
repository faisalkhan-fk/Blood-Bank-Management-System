<?php
session_start();
include "blood/connection.php";

if(isset($_POST['name']) && isset($_POST['pass'])) {
    $user = $_POST['name'];
    $bloodgroup = $_POST['pass'];
    
    $sql = "select * from bbank where email='$user'";
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    
        if($bloodgroup == $row['bloodgroup']) {
            $_SESSION['name'] = $row['name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['id'] = $row['id'];
            header("Location: index.php");
            exit; // Ensure that no code below gets executed after redirection
        } else {
            header("Location: error.php");
            exit; // Ensure that no code below gets executed after redirection
        }
    } else {
        header("Location: error.php");
        exit; // Ensure that no code below gets executed after redirection
    }
}
?>

?>