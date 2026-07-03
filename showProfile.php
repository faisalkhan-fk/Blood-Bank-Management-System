<?php
session_start();
include "blood/connection.php";
// Check if donor is logged in
if (!isset($_SESSION['id'])) {
    // Redirect to login page if donor is not logged in
    header("Location: login.php");
    exit();
}

$id = $_SESSION['id'];

$sql5 = "SELECT * FROM request WHERE donerId = $id";
$resultG = mysqli_query($conn, $sql5);

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
   <div class="container">
        <div class="row">
            <h2 style="text-align: center; color: #000080;">Profile Info</h2><hr>
            <table class="table">
            <tr>
            <?php
                $sql5 = "SELECT * FROM bbank WHERE id = $id";
                $resultG = mysqli_query($conn, $sql5);
                if (mysqli_num_rows($resultG) > 0) {
                    $n = 1;
                    while ($rowG = mysqli_fetch_assoc($resultG)) {
                        ?>
                           
                            <th>Name</th>
                            <td><?php echo $rowG['name']; ?></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><?php echo $rowG['email']; ?></td>
                        </tr>
                        <tr>
                            <th>Mobile</th>
                            <td><?php echo $rowG['mobile']; ?></td>
                        </tr>
                        <tr>
                            <th>Age</th>
                            <td><?php echo $rowG['age']; ?></td>
                        </tr>
                        <tr>
                            <th>Gender</th>
                            <td><?php echo $rowG['gender']; ?></td>
                        </tr>
                        <tr>
                            <th>Blood Group</th>
                            <td><?php echo $rowG['bloodgroup']; ?></td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td><?php echo $rowG['address']; ?></td>
                        </tr>
                        <tr>
                            <th>Message</th>
                            <td><?php echo $rowG['message']; ?></td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td><img src="img/<?php echo $rowG['image']; ?>" height="50px" width="40px"></td>
                        </tr>
                        <tr>
                            <th>Update</th>
                            <td>
                                <a href="updateProfile.php?eid=<?php echo $rowG['id'] ?>" class="btn btn-success">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>
                            <?php
                            if($rowG['stats']== 1)
                            {
                              echo '<a href="activeProfile.php?act=' . $rowG['id'] . '" class="btn btn-success">Active</a>';
                            }
                            else
                            {
                              echo '<a href="deactiveProfile.php?act=' . $rowG['id'] . '" class="btn btn-danger">Deactive</a>';   
                            }
                          ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Action</th>
                            <td>
                            <a href="deleteProfile.php?act=<?php echo $rowG['id'] ?>" class="btn btn-danger" onclick="return confirmDelete()">Delete Your Donor Account</a>

<script>
    function confirmDelete() {
       
        if (confirm("Are you sure you want to delete your account?")) {
           return true;
        } else {
            return false;
        }
    }
</script>
</td>
                        </tr>
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
