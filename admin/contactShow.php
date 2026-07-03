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
    <title>Request</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
        <div class="row">
        <p class="text-center text-danger h1">Contact Us Info</p>
            <table class="table">
                <tr>
                    <th>Sr</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Message</th>
                    <th>Date/Time</th>
                    <th>Action</th>
                </tr>
                <?php
                include "../blood/connection.php";
                $sql5 = "select * from contact order by id desc";
                $resultG = mysqli_query($conn, $sql5);
                if (mysqli_num_rows($resultG) > 0) {
                    $n = 1;
                    while ($rowG = mysqli_fetch_assoc($resultG)) {
                        ?>
                        <tr>
                            <td><?php echo $n ?></td>
                            <td><?php echo $rowG['name']; ?></td>
                            <td><?php echo $rowG['email']; ?></td>
                            <td><?php echo $rowG['mob']; ?></td>
                            <td><?php echo $rowG['message']; ?></td>
                            <td><?php echo $rowG['messageDate']; ?></td>
                            <td><a href="deleteContact.php?act=<?php echo $rowG['id']?>" class="btn btn-danger">Delete</a>
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