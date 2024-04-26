<?php
// retrieve_userinfo.php
require_once ("connection.php");

/**
 * Function to retrieve userinfo_id from session ID
 * @param mysqli $conn MySQLi connection object
 * @param int $sessionID Session ID (from UserCredentials table)
 * @return int|false userinfo_id on success, false on failure
 */
function getUserInfoIdFromSession($conn, $sessionID)
{
    // Prepare and execute query to fetch userinfo_id based on session ID
    $query = "SELECT userinfo_id FROM UserCredentials WHERE Id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $sessionID);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $userinfoID);
    mysqli_stmt_fetch($stmt);
    mysqli_stmt_close($stmt);

    // Return userinfo_id if found, otherwise return false
    return $userinfoID ? $userinfoID : false;
}
?>