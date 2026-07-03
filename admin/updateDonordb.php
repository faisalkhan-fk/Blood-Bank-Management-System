<?php
include "../blood/connection.php";

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
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
    $folder = "../img/".$imagefile;

    if ($imagefile == null) {
        $sqlT = "UPDATE bbank SET name='$name', email='$email', mobile='$mobile', age='$age', gender='$gender', bloodgroup='$bloodgroup', address='$address', message='$message', stats='$stats' WHERE id='$id'";
    }
     else {
        move_uploaded_file($temp_name, $folder);
        $sqlT = "UPDATE bbank SET name='$name', email='$email', mobile='$mobile', age='$age', gender='$gender', bloodgroup='$bloodgroup', address='$address', message='$message', image='$imagefile', stats='$stats' WHERE id='$id'";
    }
    
    $res = mysqli_query($conn, $sqlT);
    
    if (!$res) {
        echo "Data Updated";
    } else {
        header("Location: addDonor.php");
        exit();
    }
}
?>
