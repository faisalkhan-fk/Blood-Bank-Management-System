<?php
// Include database connection
include "../blood/connection.php";

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
            header("Location:deletesucessfully.php");
        } else {
            echo "Error deleting donor record: " . mysqli_error($conn);
        }
    } else {
        echo "Error deleting related requests: " . mysqli_error($conn);
    }
}
?>
