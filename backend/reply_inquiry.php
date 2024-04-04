<?php
require ($_SERVER['DOCUMENT_ROOT'] . "/backend/connection.php");
$conn = get_connection();

// Check if ID is provided and valid
if (isset($_GET['id']) && isset($_GET['inquiryreply'])) {
    $id = $_GET['id'];
    $inquiryreply = $_GET['inquiryreply'];

    // Prepare SQL statement to delete the inquiry with the given ID
    $query = "UPDATE TABLE userinquiries set InquiryReply = $inquiryreply WHERE id = $id";

    // Execute the query
    if (mysqli_query($conn, $query)) {
        // Redirect back to the page where inquiries are displayed
        header("Location: ../templates/queries.php");
        exit();
    } else {
        echo "Error deleting inquiry: " . mysqli_error($conn);
    }
} else {
    echo "Invalid inquiry ID.";
}
?>