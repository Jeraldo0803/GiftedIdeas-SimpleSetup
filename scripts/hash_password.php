<?php
require($_SERVER['DOCUMENT_ROOT'] . "/backend/connection.php");

function hash_existing_usercred_id($userIds)
{
    $conn = get_connection();
    // Ensure $userIds is not empty
    if (empty($userIds)) {
        echo "No UserCredentials IDs provided.\n";
        return;
    }

    foreach ($userIds as $userId) {
        // Retrieve password for the given user ID
        $query = "SELECT Password FROM UserCredentials WHERE Id = $userId";
        $result = mysqli_query($conn, $query);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $password = $row['Password'];

            // Hash the password
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Update the UserCredentials table with the hashed password
            $updateQuery = "UPDATE UserCredentials SET Password = '$hashedPassword' WHERE Id = $userId";
            mysqli_query($conn, $updateQuery);

            echo "Password for user ID $userId has been hashed and updated.\n";

            mysqli_free_result($result);
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user IDs from the form
    $userIdsInput = $_POST["userIds"];

    // Split the input string into an array of user IDs
    $userIdsToUpdate = explode(",", $userIdsInput);

    // Call the function with the provided user IDs
    hash_existing_usercred_id($userIdsToUpdate);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hash UserCredentials Passwords</title>
</head>

<body>

    <h2>Hash UserCredentials Passwords</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="userIds">Enter UserCredentials IDs (comma-separated):</label>
        <input type="text" name="userIds" id="userIds" required>
        <br>
        <input type="submit" value="Hash Passwords">
    </form>

</body>

</html>