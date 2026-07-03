<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['name'])) {
    header('Location: ../adminlogin.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Doner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <p class="text-center text-danger h1">Donor Panel</p>
            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModalToggle2">Add Donor</button>
        </div>
    </div>

    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel2">Add Donor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="saveDonor.php" method="post" enctype="multipart/form-data">
                        <input type="file" name="t_img" class="form-control my-2">
                        <input type="text" placeholder="Donor Name" class="form-control my-2" name="name">
                        <input type="text" placeholder="Mobile" class="form-control my-2" name="mobile">
                        <input type="Email" placeholder="email" class="form-control my-2" name="email">
                        <input type="text" placeholder="Age" class="form-control my-2" name="age">
                        <select class="form-select" name="gender" >
 <option>--Gender--</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
</select>
<select class="form-select" name="bloodgroup">
<option >--Blood Group--</option>
<option value="O-">O-</option>
  <option value="O+">0+</option>
  <option value="A+">A+</option>
  <option value="A-">A-</option>
  <option value="B+">B+</option>
  <option value="B-">B-</option>
  <option value="AB+">AB+</option>
  <option value="A8-">AB-</option>
</select>
                        <textarea class="form-control my-2" placeholder="Address" name="address"></textarea>
                        <textarea class="form-control my-2" placeholder="Message" name="message"></textarea>
                        <button class="btn btn-success" name="add">Add Donor</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <table class="table">
                <tr>
                    <th>Sr</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Blood Group</th>
                    <th>Address</th>
                    <th>Message</th>
                    <th>Apply Date</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Update</th>
                    <th>Action</th>
                </tr>
                <?php
                include "../blood/connection.php";
                $sql5 = "select * from bbank order by id desc";
                $resultG = mysqli_query($conn, $sql5);
                if (mysqli_num_rows($resultG) > 0) {
                    $n = 1;
                    while ($rowG = mysqli_fetch_assoc($resultG)) {
                        ?>
                        <tr>
                            <td><?php echo $n ?></td>
                            <td><?php echo $rowG['name']; ?></td>
                            <td><?php echo $rowG['email']; ?></td>
                            <td><?php echo $rowG['mobile']; ?></td>
                            <td><?php echo $rowG['age']; ?></td>
                            <td><?php echo $rowG['gender']; ?></td>
                            <td><?php echo $rowG['bloodgroup']; ?></td>
                            <td><?php echo $rowG['address']; ?></td>
                            <td><?php echo $rowG['message']; ?></td>
                            <td><?php echo $rowG['applyDate'];?></td>
                            <td><img src="../img/<?php echo $rowG['image']; ?>" height="50px" width="40px"></td>
                            <td><?php
                            if($rowG['stats']== 1)
                            {
                              echo '<a href="activeDonor.php?act=' . $rowG['id'] . '" class="btn btn-success">Active</a>';
                            }
                            else
                            {
                              echo '<a href="deactiveDonor.php?act=' . $rowG['id'] . '" class="btn btn-danger">Deactive</a>';   
                            }
                          ?>
                          </td>
                                
                                <td><a href="updateDonor.php?eid=<?php echo $rowG['id'] ?>" class="btn btn-success">Edit</a></td>
                            </td>
                            </td>
                                
                                <td><a href="deleteDonorId.php?act=<?php echo $rowG['id'] ?>" class="btn btn-danger">Delete</a></td>
                            </td>
                        </tr>
                        <?php
                        $n++;
                    }
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>
