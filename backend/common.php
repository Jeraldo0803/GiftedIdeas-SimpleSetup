<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
// Regenerate Session ID to protect against Session ID interception
session_regenerate_id();

// HTTP Strict Transport Security (HSTS) protect against Man-in-the-middle attacks
header('Strict-Transport-Security: max-age=31536000; includeSubDomains');

function check_auth($authority)
{
    $no_id = !isset($_SESSION['id']);
    $no_email = !isset($_SESSION['email']);
    $no_authority = !isset($_SESSION['authority']);
    $no_status = !isset($_SESSION['status']);
    $not_logged_in = $no_email || $no_authority || $no_status || $no_id;
    if ($not_logged_in) {
        header("Location: /src/pages/Login.php?error=not_logged_in");
    }

    $wrong_authority = $_SESSION['authority'] != $authority;
    $not_active = $_SESSION['status'] != "active";
    $not_authorized = $wrong_authority || $not_active;
    if ($not_authorized) {
        header("Location: "); //point to login page
    }
}

function check_admin_auth()
{
    $no_id = !isset($_SESSION['id']);
    $no_email = !isset($_SESSION['email']);
    $no_authority = !isset($_SESSION['authority']);
    $no_status = !isset($_SESSION['status']);
    $not_logged_in = $no_email || $no_authority || $no_status || $no_id;
    if ($not_logged_in) {
        header("Location: "); //point to login page
    }

    $is_admin = $_SESSION['authority'] == "admin";
    $is_superadmin = $_SESSION['authority'] == "superadmin";
    $not_active = $_SESSION['status'] != "active";

    // Check if the user is either not active or not an admin or superadmin
    $not_authorized = $not_active || !($is_admin || $is_superadmin);
    if ($not_authorized) {
        header("Location: "); //point to login page
    }
}
?>