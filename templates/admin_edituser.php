<?php
require ($_SERVER['DOCUMENT_ROOT'] . "/backend/common.php");
check_admin_auth();
require ($_SERVER['DOCUMENT_ROOT'] . "/backend/connection.php");



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve edited user information
    $userid = $_POST["userid"];
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
    $districtbarangay = $_POST["districtbarangay"];
    $municipalitycity = $_POST["municipalitycity"];

    // Update user info in the database
    $updateQuery = "UPDATE UserInfo SET
        FirstName = ?,
        MiddleName = ?,
        Surname = ?,
        Gender = ?,
        Nationality = ?,
        PlaceOfBirth = ?,
        CivilStatus = ?,
        EmailAddress = ?,
        Landline = ?,
        HomeAddress = ?,
        DistrictBarangay = ?,
        MunicipalityCity = ?
        WHERE Id = ?";

    $conn = get_connection();
    $stmt = mysqli_prepare($conn, $updateQuery);
    mysqli_stmt_bind_param($stmt, "ssssssssssssi", $firstname, $middlename, $surname, $gender, $nationality, $placeofbirth, $civilstatus, $contactemail, $landline, $homeaddress, $districtbarangay, $municipalitycity, $userid);
    mysqli_stmt_execute($stmt);


    header("Location: /templates/admin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Information</title>
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

    <h2>Edit User Information</h2>
    <form action="#" method="POST">
        <label for="userid">User ID:</label>
        <input type="text" id="userid" name="userid" required><br><br>
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" required><br><br>
        <label for="middlename">Middle Name:</label>
        <input type="text" id="middlename" name="middlename"><br><br>
        <label for="surname">Surname:</label>
        <input type="text" id="surname" name="surname" required><br><br>
        <label for="gender">Gender:</label>
        <select id="gender" name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Prefer not to say">Prefer not to say</option>
        </select><br><br>
        <label for="nationality">Nationality:</label>
        <input type="text" id="nationality" name="nationality"><br><br>
        <label for="placeofbirth">Place of Birth:</label>
        <input type="text" id="placeofbirth" name="placeofbirth"><br><br>
        <label for="civilstatus">Civil Status:</label>
        <input type="text" id="civilstatus" name="civilstatus"><br><br>
        <label for="emailaddress">Email Address:</label>
        <input type="email" id="emailaddress" name="emailaddress"><br><br>
        <label for="landline">Landline:</label>
        <input type="tel" id="landline" name="landline"><br><br>
        <label for="homeaddress">Home Address:</label>
        <input type="text" id="homeaddress" name="homeaddress"><br><br>
        <label for="districtbarangay">District/Barangay:</label>
        <input type="text" id="districtbarangay" name="districtbarangay"><br><br>
        <label for="municipalitycity">Municipality/City:</label>
        <input type="text" id="municipalitycity" name="municipalitycity"><br><br>
        <input type="submit" value="Submit">
    </form>
    <script src="/src/global.js"></script>

</body>

</html>