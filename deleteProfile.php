<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Delete Donor and Related Requests</title>
<script>
    // Function to handle deletion
    function deleteDonor(donorId) {
        // Confirm deletion
        if (confirm("Are you sure you want to delete this donor and related requests?")) {
            // Redirect to PHP script to handle deletion
            window.location.href = "delete_donor.php?act=" + donorId;
        }
    }
</script>
</head>
<body>
<?php
// Include database connection
include "blood/connection.php";

if(isset($_GET["act"])){
    $act = $_GET['act'];

    // Explicitly close any open transactions
    mysqli_query($conn, "COMMIT");

    // Delete related requests first
    $deleteRequestsQuery = "DELETE FROM request WHERE donerId ='$act'";
    if(mysqli_query($conn, $deleteRequestsQuery)) {
        // If related requests are deleted successfully, proceed to delete the donor
        $deleteDonorQuery = "DELETE FROM bbank WHERE id ='$act'";
        if(mysqli_query($conn, $deleteDonorQuery)) {
            header("Location:deleteProfileSF.php");
        } else {
            echo "Error deleting donor record: " . mysqli_error($conn);
        }
    } else {
        echo "Error deleting related requests: " . mysqli_error($conn);
    }
}
?>
</body>
</html>
