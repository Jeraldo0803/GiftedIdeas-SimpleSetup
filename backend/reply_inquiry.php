<?php
require ($_SERVER['DOCUMENT_ROOT'] . "/backend/connection.php");
$conn = get_connection();

// Check if ID is provided and valid
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['reply'])) {
        // Retrieve reply from form input
        $inquiryreply = $_POST['reply'];

        // Prepare SQL statement to update the inquiry with the given ID
        $query = "UPDATE UserInquiries SET InquiryReply = ? WHERE Id = ?";

        // Prepare and execute the query
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "si", $inquiryreply, $id);

        if (mysqli_stmt_execute($stmt)) {
            // Redirect back to the page where inquiries are displayed
            header("Location: ../templates/queries.php");
            exit();
        } else {
            echo "Error updating inquiry: " . mysqli_error($conn);
        }
    }
} else {
    echo "Invalid inquiry ID.";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Reply to Inquiry</title>
</head>

<body>
    <h2>Reply to Inquiry</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . "?id=" . $id; ?>">
        <label for="reply">Enter Reply:</label><br>
        <textarea id="reply" name="reply" rows="4" cols="50"></textarea><br>
        <button type="submit">Submit Reply</button>
    </form>
</body>

</html>