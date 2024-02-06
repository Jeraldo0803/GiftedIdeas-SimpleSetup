<?php
session_start();
// Check if the user is logged in
if (isset($_SESSION['id'], $_SESSION['email'], $_SESSION['authority'], $_SESSION['status'])) {
    $userId = $_SESSION['id'];
    $userEmail = $_SESSION['email'];
    $userAuthority = $_SESSION['authority'];
    $userStatus = $_SESSION['status'];
} else {
    // Redirect to the login page if the session is not active
    header("Location: /templates/Login.php?error=not_logged_in");
    exit();
}
?>