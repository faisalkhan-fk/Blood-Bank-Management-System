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

$sql = "SELECT * FROM request WHERE donerId = $id order by id desc";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
    <div class="row">
        <p class="text-center text-danger h1">Request Panel</p>
        <table class="table">
            <tr>
                <th>Sr</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Blood Require</th>
                <th>Message</th>
                <th>Request Date/Time</th>
                <th>Action</th>
            </tr>
            <?php
            if(mysqli_num_rows($result) > 0){
                $n = 1;
                while($row = mysqli_fetch_assoc($result)){
            ?>
                    <tr>
                        <td><?php echo $n ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['mob']; ?></td>
                        <td><?php echo $row['bloodrequire']; ?></td>
                        <td><?php echo $row['message']; ?></td>
                        <td><?php echo $row['requestDate']; ?></td>
                        <td><a href="deleterequest.php?act=<?php echo $row['id']?>" class="btn btn-danger">Delete</a>
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
