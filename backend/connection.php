<?php
function get_connection()
{
    $server_path = $_SERVER['DOCUMENT_ROOT'];
    $env = parse_ini_file("$server_path/.env");
    $conn = new mysqli($env["HOST"], $env["USER"], $env["PASSWORD"]);

    if ($conn->connect_error) {
        echo "Connection failed: " . $conn->connect_error;
        die("Connection failed: " . $conn->connect_error);
    } else {
        $conn->select_db($env["DATABASE"]);
        return $conn;
    }
}
?>