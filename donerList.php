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
<div class="container">
        <div class="row">
        <p class="h3" style="text-align: center;">Donor List</p>
        <?php 
       include "blood/connection.php";
        $sql5="select * from bbank where stats=1 order by id desc";
        $resultG=mysqli_query($conn,$sql5);
        if(mysqli_num_rows($resultG)>0)
        {
            while($rowG=mysqli_fetch_assoc($resultG))
            {?>
        
            <div class="col-lg-3 col-sm-12 col-md-12 my-4">
                <div class="card text-centre">
                    <img src="img/<?php echo $rowG['image'];?>" class="d-block w-100" alt="image not found">
                    <p class="text-center"><strong>Name : </strong> <?php echo $rowG['name'];?></p>
                    <p class="text-center"><strong>Gender : </strong><?php echo $rowG['gender'];?></p>
                    <p class="text-center"><strong>Blood Group : </strong><?php echo $rowG['bloodgroup'];?></p>
                    <p class="text-center"><strong>Age :</strong> <?php echo $rowG['age'];?></p>
                    <!-- <a href="#" class="btn btn-success">View More</a> -->
                    <a class="btn btn-info" href="requestForm.php?donor_id=<?php echo $rowG['id']; ?>">Request</a>

                    <details class="btn btn-success my-1">
                   
                    <p class="text-center"><strong>Mobile No: </strong><?php echo $rowG['mobile'];?></p>
                    <p class="text-center"><strong>Email: </strong><?php echo $rowG['email'];?></p>
                    <p class="text-center"><strong>Address: </strong><?php echo $rowG['address'];?></p>
                    <p class="text-center"><strong>Message: </strong><?php echo $rowG['message'];?></p>
                    <p class="text-center"><strong>Apply Date: </strong><?php echo $rowG['applyDate'];?></p>
                    
</details>
                    </div>
            </div>
            <?php
                }
            }
            ?>
 
        </div>
    </div>
    <div>
    <?php include('blood/footer.php');?>
    </div>
</body>
</html>