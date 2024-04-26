<?php
session_start();
require ($_SERVER['DOCUMENT_ROOT'] . "/backend/connection.php");
$conn = get_connection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["register_email"];
    $password = password_hash($_POST["register_password"], PASSWORD_DEFAULT);
    $firstname = $_POST["firstname"];
    $middlename = $_POST["middlename"];
    $surname = $_POST["surname"];
    $gender = $_POST["gender"];
    $nationality = $_POST["nationality"];
    $placeofbirth = $_POST["placeofbirth"];
    $civilstatus = $_POST["civilstatus"];
    $contactemail = $_POST["emailaddress"];
    $landline = $_POST["landline"];
    $homeaddress = $_POST["homeaddress"];
    $phonenumber = $_POST["phonenum"];
    $districtbarangay = $_POST["districtbarangay"];
    $municipalitycity = $_POST["municipalitycity"];

    // USER INFO QUERIES
    $userinfoQueries = "INSERT INTO UserInfo (
        firstname,
        middlename,
        surname,
        gender,
        nationality,
        placeofbirth,
        civilstatus,
        emailaddress,
        landline,
        homeaddress,
        mobilenumber,
        districtbarangay,
        municipalitycity
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $userinfoQueries);
    mysqli_stmt_bind_param($stmt, "sssssssssssss", $firstname, $middlename, $surname, $gender, $nationality, $placeofbirth, $civilstatus, $contactemail, $landline, $homeaddress, $phonenumber, $districtbarangay, $municipalitycity);
    mysqli_stmt_execute($stmt);

    $userInfoId = mysqli_insert_id($conn);

    // USER CREDENTIAL QUERIES
    $usercredQueries = "INSERT INTO UserCredentials (
        userinfo_id,
        email,
        password,
        status,
        authority 
    ) VALUES (?, ?, ?, 'active', 'user')";

    $stmt = mysqli_prepare($conn, $usercredQueries);
    mysqli_stmt_bind_param($stmt, "iss", $userInfoId, $email, $password);
    mysqli_stmt_execute($stmt);

    // USER HISTORY QUERY
    $userHistoryQuery = "INSERT INTO UserHistory (userinfo_id, Action, Title, Time, Date, Day_string) VALUES (?, 'Sign Up', 'Member signed up', NOW(), NOW(), DAYNAME(NOW()))";

    $stmt = mysqli_prepare($conn, $userHistoryQuery);
    mysqli_stmt_bind_param($stmt, "i", $userInfoId);
    mysqli_stmt_execute($stmt);

    header("Location: /templates/signup_success.php");

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

    <section class="position-relative py-4 py-xl-5" style="margin-top: 55px;margin-bottom: 45px;">
        <div class="container">
            <div class="row row-cols-3 d-flex justify-content-center">
                <div class="col-10">
                    <div class="card mb-5">
                        <div class="card-body d-flex flex-column align-items-center"
                            style="background: #EBEBEB;padding-top: 60px;">
                            <div>
                                <h1 style="font-size: 15px;margin-bottom: 50px;">Sign-Up Form</h1>
                            </div>
                            <form class="text-center" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"
                                onsubmit="return validateForm()">
                                <div class=" mb-3">
                                    <div>
                                        <h1 class="text-start" style="font-size: 13px;">Personal Information</h1>
                                    </div>
                                    <div class="row gx-5 gy-3">
                                        <div class="col">
                                            <p class="text-start"
                                                style="margin-bottom: 0px;font-family: Karla, sans-serif;font-size: 14px;">
                                                Email Address</p><input
                                                class="border rounded-0 border-dark-subtle form-control" type="email"
                                                name="register_email">
                                            <p class="text-start"
                                                style="margin-bottom: 0px;font-family: Karla, sans-serif;font-size: 14px;">
                                                Password</p><input
                                                class="border rounded-0 border-dark-subtle form-control" type="password"
                                                name="register_password">
                                            <p class="text-start"
                                                style="margin-bottom: 0px;font-family: Karla, sans-serif;font-size: 14px;">
                                                Nationality</p><input class="form-control" type="text"
                                                name="nationality">
                                        </div>
                                        <div class="col">
                                            <p class="text-start"
                                                style="margin-bottom: 0px;font-family: Karla, sans-serif;font-size: 14px;">
                                                First Name</p><input class="form-control" type="text" name="firstname">
                                            <p class="text-start"
                                                style="margin-bottom: 0px;font-family: Karla, sans-serif;font-size: 14px;">
                                                Last Name</p><input class="form-control" type="text" name="surname">
                                            <p class="text-start"
                                                style="margin-bottom: 0px;font-family: Karla, sans-serif;font-size: 14px;">
                                                Place of Birth</p><input class="form-control" type="text"
                                                name="placeofbirth">
                                        </div>
                                        <div class="col">
                                            <p class="text-start"
                                                style="margin-bottom: 0px;font-family: Karla, sans-serif;font-size: 14px;">
                                                Middle Name</p><input class="form-control" type="text"
                                                name="middlename">
                                            <!--<p class="text-start"
                                                style="margin-bottom: 0px;font-family: Karla, sans-serif;font-size: 14px;">
                                                Gender</p><input class="form-control" type="text" name="gender">-->
                                            <select name="gender" id="gender" class="text-start"
                                                style="margin-bottom: 0px;font-family: Karla, sans-serif;font-size: 14px;">
                                                <option value="">-Select Gender-</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Other">Prefer not to say</option>
                                            </select>
                                            <p class="text-start"
                                                style="margin-bottom: 0px;font-family: Karla, sans-serif;font-size: 14px;">
                                                Civil Status</p><input class="form-control" type="text"
                                                name="civilstatus">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div>
                                            <h1 class="text-start" style="font-size: 13px;margin-top: 30px;">Contact
                                                Information</h1>
                                        </div>
                                        <div class="row gx-5 gy-3">
                                            <div class="col">
                                                <p class="text-start"
                                                    style="margin-bottom: 0px;font-family: Karla, sans-serif;font-size: 14px;">
                                                    Email Address</p><input
                                                    class="border rounded-0 border-dark-subtle form-control"
                                                    type="email" name="emailaddress">
                                                <p class="text-start"
                                                    style="margin-bottom: 0px;font-family: Karla, sans-serif;font-size: 14px;">
                                                    Home Address<input class="form-control" type="text"
                                                        name="homeaddress">
                                                </p>
                                            </div>
                                            <div class="col">
                                                <p class="text-start"
                                                    style="margin-bottom: 0px;font-family: Karla, sans-serif;font-size: 14px;">
                                                    Mobile Number</p><input class="form-control" type="number"
                                                    name="phonenum">
                                                <p class="text-start"
                                                    style="margin-bottom: 0px;font-family: Karla, sans-serif;font-size: 14px;">
                                                    District/Barangay</p><input class="form-control" type="text"
                                                    name="districtbarangay">
                                            </div>
                                            <div class="col">
                                                <p class="text-start"
                                                    style="margin-bottom: 0px;font-family: Karla, sans-serif;font-size: 14px;">
                                                    Landline</p><input class="form-control" type="number"
                                                    name="landline">
                                                <p class="text-start"
                                                    style="margin-bottom: 0px;font-family: Karla, sans-serif;font-size: 14px;">
                                                    Municipality/City</p><input class="form-control" type="text"
                                                    name="municipalitycity">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="padding-top: 35px;"></div>
                                <div
                                    class="d-xl-flex d-xxl-flex justify-content-xl-center justify-content-xxl-center mb-3">
                                    <button
                                        class="btn btn-outline-light text-center justify-content-xxl-center d-block w-100"
                                        type="submit"
                                        style="border-radius: 16px;border-width: 4px;border-color: #A83565;color: #A83565;font-family: Karla, sans-serif;font-size: 14px;max-width: 248px;">SUBMIT
                                        FORM</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/Lightbox-Gallery-baguetteBox.min.js"></script>
    <script src="../assets/js/Lightbox-Gallery.js"></script>
    <script>
        function validateForm() {
            // Get all input elements
            var inputs = document.querySelectorAll('input[type="text"], input[type="password"], input[type="date"], input[type="email"]');

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
    <script src="/src/global.js"></script>

</body>

</html>