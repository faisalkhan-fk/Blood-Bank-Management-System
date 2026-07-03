<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>updateDonor</title>
</head>
<body>

<?php
include "blood/connection.php";
if(isset($_GET['eid']))
{
    $id = $_GET['eid'];
    $sqlT = "SELECT * FROM bbank WHERE id = '$id'";
    $result = mysqli_query($conn,$sqlT);
    if(mysqli_num_rows($result) > 0)
    {
        while($Amit_Yadav = mysqli_fetch_assoc($result))
        {
            ?>
            <div class="container">
                <div class="row">
                <form class="form" action="updateProfiledb.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $Amit_Yadav['id']; ?>">
    
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name="name" value="<?php echo $Amit_Yadav['name']; ?>" placeholder="Type Name here...">

    <label class="form-label">Mobile</label>
    <input type="text" class="form-control" name="mobile" value="<?php echo $Amit_Yadav['mobile']; ?>" placeholder="Type mobile number here...">

    <label class="form-label">Email</label>
    <input type="text" class="form-control" name="email" value="<?php echo $Amit_Yadav['email']; ?>" placeholder="Type email here...">

    <label class="form-label">Age</label>
    <input type="text" class="form-control" name="age" value="<?php echo $Amit_Yadav['age']; ?>" placeholder="Type Age here...">

    <label class="form-label">Gender</label>
    <input type="text" class="form-control" name="gender" value="<?php echo $Amit_Yadav['gender']; ?>" placeholder="Type Gender here...">

    <label class="form-label">Blood Group</label>
    <input type="text" class="form-control" name="bloodgroup" value="<?php echo $Amit_Yadav['bloodgroup']; ?>" placeholder="Type blood group here...">

    <label class="form-label">Address</label>
    <input type="text" class="form-control" name="address" value="<?php echo $Amit_Yadav['address']; ?>" placeholder="Type address here...">

    <label class="form-label">Message</label>
    <input type="text" class="form-control" name="message" value="<?php echo $Amit_Yadav['message']; ?>" placeholder="Type Message here...">

    <img src="img/<?php echo $Amit_Yadav['image']?>" height="80px" width="80px"><br>

    <label class="form-label">New Image</label>
    <input type="file" class="form-control" name="t_img"><br>

    <input type="submit" name="submit" class="btn btn-success">
</form>

                    
                </div>
            </div>
            <?php
        }
    }
}
?>

</body>
</html>