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
<body>
<?php include('blood/header.php');?>
<div class="container-fluid"  style=" background: url(img/bg7.png) no-repeat 0px 0px; background-size: cover;">
    <div class="row">
    <div class="col-lg-12 " style="text-align: center;">
    <p class="h3 text-centre my-4">Get In Touch</p>
    </div>
        
        <div class="col-lg-6">
            <div class="mb-3">
            <form action="addContact.php" method="post" enctype="multipart/form-data">
                <label for="Name" class="form-label">Your Name<span class="text-danger h6 ">*</span></label>
                <input type="text" class="form-control" id="name" name="name" required placeholder="Type Your Name here...">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email<span class="text-danger h6 ">*</span></label>
                <input type="email" class="form-control" id="email" name="email" required placeholder="Type Email here...">
            </div>

            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile<span class="text-danger h6 ">*</span></label>
                <input type="tel" class="form-control" id="mob" name="mob" required placeholder="Type Mobile No  here...">
            </div>

            <div class="mb-3">
            <label class="form-label">Message</label>
    <input type="text" class="form-control" name="message" id="message" placeholder="Type Message here...">

            </div>
            <div>
                <button type="submit" name="send" class="btn btn-success">Send Message</button>
</form><hr>
            </div>
        </div>
    </div>
    <div>
    </div></div>
    <?php include('blood/footer.php');?>
    </div>
            </body>
</html>    