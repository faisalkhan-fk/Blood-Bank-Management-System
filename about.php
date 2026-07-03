<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood bank management</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body style=" background: url(img/bbg.jpg) no-repeat 0px 0px; background-size: cover;">
<?php include('blood/header.php');?>
    <div class="container">
        <div class="row"> 
    <div class="col-lg-12 col-md-12 col-sm-12">
        <p class="h3 my-2" style="text-align: center;">About Us</p><hr>
        <p class="h5">Welcome to [Faisal Blood Bank], where we are dedicated to making a positive impact on the world by facilitating safe and efficient blood donation and management. Our organization is committed to addressing the critical need for a stable blood supply, ensuring that hospitals and healthcare facilities have access to life-saving blood products whenever they are needed.

Our Mission

At [Faisal Blood Bank], our mission is simple yet profound: to save lives by connecting donors with those in need. We strive to create a community of dedicated donors, volunteers, and healthcare professionals who work together to ensure a stable and reliable blood supply for patients facing various medical conditions.</p>
<span class="h3">Join Us in Making a Difference</span>
<p class="h5 my-4">Whether you are a donor, volunteer, healthcare professional, or simply someone passionate about making a difference, we invite you to join us on our mission. Together, we can contribute to a healthier and more resilient community.

Thank you for considering [Faisal Blood Bank] as your partner in the journey of saving lives through blood donation.</p><hr>
    </div>
    </div>
    </div>

    <?php include('blood/footer.php');?>
    
</body>
</html>
