<?php
require_once("connection.php");
function get_firstname($id)
{
    $conn = get_connection();
    $query = "SELECT firstname FROM UserInfo WHERE Id = '$id'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        $row = mysqli_fetch_assoc($result);

        mysqli_free_result($result);

        if ($row) {
            return $row; // Return associative array with FirstName and LastName
        } else {
            return "User with ID '$id' not found.";
        }
    } else {
        echo "Error: " . mysqli_error($conn);

        return null;
    }
}

function get_lastname($id)
{
    $conn = get_connection();
    $query = "SELECT lastname FROM UserInfo WHERE Id = '$id'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        $row = mysqli_fetch_assoc($result);

        mysqli_free_result($result);

        if ($row) {
            return $row; // Return associative array with FirstName and LastName
        } else {
            return "User with ID '$id' not found.";
        }
    } else {
        echo "Error: " . mysqli_error($conn);

        return null;
    }
}

?>