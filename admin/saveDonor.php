<?php
include "../blood/connection.php";

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $bloodgroup = $_POST['bloodgroup'];
    $address = $_POST['address'];
    $message = $_POST['message'];
    $stats = 1;

    $imagefile = $_FILES['t_img']['name'];
    $temp_name = $_FILES['t_img']['tmp_name'];
    $folder = "../img/" . $imagefile;
    move_uploaded_file($temp_name, $folder);

    
    $sqlT = "INSERT INTO bbank (name, email, mobile, age, gender, bloodgroup, address, message, image, stats)
             VALUES ('$name', '$email', '$mobile', '$age', '$gender', '$bloodgroup', '$address', '$message', '$imagefile', '$stats')";

    $resultT = mysqli_query($conn, $sqlT);

    if (!$resultT) {
        die('Data not inserted');
    } else {
        header('Location: addDonor.php');
    }
}
?>

