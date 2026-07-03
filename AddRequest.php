<?php
include "blood/connection.php";
session_start(); // Start session to access donor ID

if(isset($_POST['send'])) {
    // Capture donor ID from session
    if(isset($_SESSION['donor_id'])) {
        $donerId= $_SESSION['donor_id'];

        // Capture other form fields
        $name= $_POST['name'];
        $email = $_POST['email'];
        $mob = $_POST['mob'];
        $bloodrequire = $_POST['bloodrequire'];
        $message = $_POST['message'];

        // Insert data into Requests table along with donor ID
        $sql = "INSERT INTO request(donerId, name, email, mob, bloodrequire, message) 
                VALUES ('$donerId', '$name', '$email', '$mob', '$bloodrequire', '$message')";

        $result = mysqli_query($conn, $sql);
        if(!$result) {
            echo "Invalid";
        } else {
            header("Location: requestSend.php");
        }
    } else {
        echo "Donor ID not found";
    }
}
?>


          
  




}

?>