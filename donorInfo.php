<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet"type="text/css"href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Information</title>
    <link rel="stylesheet" href="css/first.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <p class="text-center h1">
                <span class="text-secondary">Our</span><span class="text-info"> Teachers</span>
            </p>
            <hr style="border:5px solid green">
        </div>
    </div>
    <div class="container">
        <div class="row">

        <?php 
       include "blood/connection.php";
        $sql5="select * from bbank";
        $resultG=mysqli_query($conn,$sql5);
        if(mysqli_num_rows($resultG)>0)
        {
            while($rowG=mysqli_fetch_assoc($resultG))
            {?>
        
            <div class="col-lg-3 col-sm-12 col-md-12">
                <div class="card">
                    <img src="img/<?php echo $rowG['image'];?>" class="d-block w-100" alt="image not found">
                    <p class="text-center"><strong>Name : </strong> <?php echo $rowG['name'];?></p>
                    <p class="text-center"><strong>Email : </strong><?php echo $rowG['email'];?></p>
                    <p class="text-center"><strong>Phone : +91</strong> <?php echo $rowG['mobile'];?></p>
                    <!-- <a href="#" class="btn btn-success">View More</a> -->
                    <details>
                        <summary class="btn btn-success">ViewMore</summary>
                    <p class="text-center"><strong>Qualification: </strong><?php echo $rowG['qlyfi'];?></p>
                    <p class="text-center"><strong>Subject: </strong><?php echo $rowG['subject'];?></p>
                    <p class="text-center"><strong>Address: </strong><?php echo $rowG['address'];?></p>
                    <!-- <p class="text-center"><strong>About: </strong> <?php echo $rowG[''];?></p> -->
                 </details>
                </div>
            </div>
            <?php
                }
            }
            ?>
 
        </div>
    </div>
    
</body>
</html>
