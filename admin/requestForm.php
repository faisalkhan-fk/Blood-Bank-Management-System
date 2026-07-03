<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood bank management</title>
    <!-- Add your CSS and JS links here -->
</head>
<body>
<?php 
session_start(); 
include('blood/connection.php');
include('blood/header.php');

// Fetch donor's ID from bbank table based on the logged-in user's ID
if(isset($_SESSION['id'])) {
    $userId = $_SESSION['id'];
    $sql = "SELECT id FROM bbank WHERE id = $userId"; // Assuming id is the primary key of the bbank table
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['donerId'] = $row['id'];
    }
}
?>

<div class="container-fluid" style="background: url(img/bbg.jpg) no-repeat 0px 0px; background-size: cover; padding-bottom: 2em;">
    <div class="row">
        <div class="col-lg-12" style="text-align: center;">
            <p class="h3 text-centre my-4">Fill following form for blood</p>
        </div>
        
        <div class="col-lg-6">
            <div class="mb-3">
                <form action="AddRequest.php" method="post" enctype="multipart/form-data">
                    <label for="name" class="form-label">Your Name<span class="text-danger h6">*</span></label>
                    <input type="text" class="form-control" id="name" name="name" required placeholder="Type Your Name here...">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email<span class="text-danger h6">*</span></label>
                <input type="email" class="form-control" id="email" name="email" required placeholder="Type Email here...">
            </div>

            <div class="mb-3">
                <label for="mob" class="form-label">Mobile<span class="text-danger h6">*</span></label>
                <input type="tel" class="form-control" id="mob" name="mob" required placeholder="Type Mobile No here...">
            </div>
            <div class="mb-3">
                <label for="bloodrequire" class="form-label">Blood Require For<span class="text-danger h6">*</span></label>
                <select class="form-select" name="bloodrequire" id="bloodrequire" required>
                    <option value="">--Blood Require For--</option>
                    <option value="Father">Father</option>
                    <option value="Mother">Mother</option>
                    <option value="Brother">Brother</option>
                    <option value="Sister">Sister</option>
                    <option value="Other">Other</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Message</label>
                <input type="text" class="form-control" name="message" id="message" placeholder="Type Message here...">
            </div>
            <div>
                <button type="submit" name="send" class="btn btn-success">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('blood/footer.php');?>
</body>
</html>
