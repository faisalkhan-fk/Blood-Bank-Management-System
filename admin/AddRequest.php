<?php
session_start();
include "blood/connection.php";

if(isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mob = $_POST['mob'];
    $bloodrequire = $_POST['bloodrequire'];
    $message = $_POST['message'];
    
    // Assuming you're storing the user's ID in the session
    $donerId = $_SESSION['id'];
    
    // Perform any necessary validation on the form inputs
    
    // Insert the request into the database
    $sql = "INSERT INTO request (name, email, mob, bloodrequire, message, donerId)
            VALUES ('$name', '$email', '$mob', '$bloodrequire', '$message', '$donerId')";
       
    $result = mysqli_query($conn, $sql);
    if(!$result) {
        // Output specific MySQL error message for debugging
        echo "Error: " . mysqli_error($conn);
    } else {
        echo "Request sent successfully";
    }
}

?>
