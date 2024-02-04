<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    require("connection.php");
    $conn = get_connection();

    # Get the data from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    # Check if the email exists
    $sql = "SELECT * FROM UserCredentials WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        # Check if the account is blocked
        $row = $result->fetch_assoc();

        if ($row['Status'] == "inactive") {
            header("Location: /src/pages/Login.php?error=blocked");
        } else {
            # Verify the password
            $hashedPassword = $row['Password'];

            if (password_verify($password, $hashedPassword)) {
                # Check if the account is verified
                if ($row['Status'] == "active") {
                    $_SESSION['id'] = $row['Id'];
                    $_SESSION['email'] = $row['Email'];
                    $_SESSION['authority'] = $row['Authority'];
                    $_SESSION['status'] = $row['Status'];

                    # Check the account authority
                    if ($row['Authority'] == 'superadmin') {
                        header("Location: /src/pages/superadmin/Homepage.php");
                    } elseif ($row['Authority'] == 'admin') {
                        header("Location: /src/pages/admin/Homepage.php");
                    } elseif ($row['Authority'] == 'user') {
                        header("Location: /src/pages/member/Homepage.php");
                    } else {
                        header("Location: /src/pages/Login.php?error=unverified");
                    }
                } else {
                    header("Location: /src/pages/Login.php?error=unverified");
                }
            } else {
                header("Location: /src/pages/Login.php?error=invalid");
            }
        }
    } else {
        header("Location: /src/pages/Login.php?error=invalid");
    }
}
?>