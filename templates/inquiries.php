<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/backend/header.php');
require ($_SERVER['DOCUMENT_ROOT'] . "/backend/connection.php");
require ($_SERVER['DOCUMENT_ROOT'] . '/backend/retrieve_userinfo.php');
require ($_SERVER['DOCUMENT_ROOT'] . '/backend/get_names.php');
$conn = get_connection();

$first_name = get_firstname($_SESSION["id"]);
$last_name = get_lastname($_SESSION["id"]);

$session_name = "$first_name " . "$last_name";

// Check if the user is logged in
if (isset($_SESSION['id'])) {
    $userInfoId = getUserInfoIdFromSession($conn, $_SESSION['id']);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $session_email = $_SESSION["email"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $userQuery = $_POST["userquery"];
    $inquiryDateString = date("l");  // Gets the full name of the day (Monday, Tuesday, etc.)
    $inquiryStatus = "unresolved";
    // Handle file upload if a file was provided
    if (isset($_FILES['userfile']) && $_FILES['userfile']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['userfile']['tmp_name'];
        $fileName = $_FILES['userfile']['name'];

        // Move the uploaded file to a desired location
        $uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';
        $uploadFile = $uploadDir . basename($fileName);
        move_uploaded_file($fileTmpPath, $uploadFile);

        // Now, insert the file path or reference into the database instead of $userfile
        $userfile = '/uploads/' . $fileName; // Assuming you're storing the file path
    } else {
        // Handle case where no file was uploaded
        $userfile = null; // or whatever default value you want to use
    }


    $userinquiryQueries = "INSERT INTO UserInquiries (
        userinfo_id,
        userinquiryname,
        userinquiryemail,
        userinquiry,
        inquirytime,
        inquirydate,
        inquirydatestring,
        inquirystatus,
        inquiryattachment
    ) VALUES (?, ?, ?, ?, NOW(), NOW(), ?, ?, '$userfile')";

    $stmt = mysqli_prepare($conn, $userinquiryQueries);
    mysqli_stmt_bind_param($stmt, "isssss", $userInfoId, $session_name, $session_email, $userQuery, $inquiryDateString, $inquiryStatus);
    mysqli_stmt_execute($stmt);

    // USER HISTORY QUERY
    $userHistoryQuery = "INSERT INTO UserHistory (userinfo_id, Action, Title, Time, Date, Day_string) VALUES (?, 'Member Inquiry', 'Member has sent an Inquiry', NOW(), NOW(), DAYNAME(NOW()))";

    $stmt = mysqli_prepare($conn, $userHistoryQuery);
    mysqli_stmt_bind_param($stmt, "i", $userInfoId);
    mysqli_stmt_execute($stmt);

}

?>

<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Gifted Ideas</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karla&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat+Alternates&amp;display=swap">
    <link rel="stylesheet" href="../assets/css/Carousel-Multi-Image--ISA-.css">
    <link rel="stylesheet" href="../assets/css/Hero-Clean-Reverse-images.css">
    <link rel="stylesheet" href="../assets/css/Lightbox-Gallery-baguetteBox.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div data-include="templates/header"></div>

    <section class="position-relative py-4 py-xl-5">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-10">
                    <div class="card mb-5">
                        <div class="card-body" style="background: #EBEBEB;padding-top: 60px;">
                            <h2 class="text-center mb-4"
                                style="font-family: 'Montserrat Alternates', sans-serif;font-weight: bold;">Customer
                                Inquiry</h2>
                            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"
                                enctype="multipart/form-data" onsubmit="return validateForm()">
                                <!--<div class="mb-3"><input class="form-control" type="text" id="name-2" name="name"
                                        placeholder="Name"></div>
                                <div class="mb-3"><input class="form-control" type="email" id="email-2" name="email"
                                        placeholder="Email"></div>-->
                                <div class="mb-3"><textarea class="form-control" type="text" id="message-2"
                                        name="userquery" rows="6" placeholder="Message"></textarea></div>
                                <input type="file" name="userfile" accept=".png, .jpg, .jpeg" />
                                <div class="d-flex justify-content-center"><button class="btn btn-primary d-block w-100"
                                        type="submit"
                                        style="border-radius: 16px;border-width: 4px;border-color: #A83565;color: #A83565;font-family: Karla, sans-serif;font-size: 14px;max-width: 248px;background: var(--bs-btn-disabled-color);">Send
                                    </button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div data-include="templates/footer"></div>

    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/Lightbox-Gallery-baguetteBox.min.js"></script>
    <script src="../assets/js/Lightbox-Gallery.js"></script>
    <script src="/src/global.js"></script>
    <script>
        function validateForm() {
            // Get all input elements
            var inputs = document.querySelectorAll('input[type="text"], input[type="email"]');

            // Check if all input values are filled
            for (var i = 0; i < inputs.length; i++) {
                if (inputs[i].value === "") {
                    alert("Please fill in all fields.");
                    return false; // Prevent form submission
                }
            }

            return true; // Allow form submission
        }
    </script>
</body>

</html>