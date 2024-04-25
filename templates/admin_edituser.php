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

    <div class="container-fluid">
        <div class="row row-cols-3">
            <div class="col-3" style="min-height: 84vmin;padding: 0px;">
                <div style="background: #FFE9C9;min-height: 100%;">
                    <div class="row text-center">
                        <div class="col">
                            <div class="row">
                                <div class="col" style="margin-top: 10vmax;margin-bottom: 15px;"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                        viewBox="0 0 16 16" class="bi bi-person-circle"
                                        style="min-height: 10vmax;min-width: 10vmax;">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"></path>
                                        <path fill-rule="evenodd"
                                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1">
                                        </path>
                                    </svg></div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h1
                                        style="font-family: 'Montserrat Alternates', sans-serif;font-size: 20px;font-weight: bold;margin-bottom: 0px;">
                                        Admin Name</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h1 style="font-family: 'Montserrat Alternates', sans-serif;font-size: 15px;">Admin
                                        Position</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div style="min-height: 15vmax;"></div>
                                    <div style="min-width: 100%;min-height: 13px;background: #a83565;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9 d-xl-flex d-xxl-flex align-items-xl-center align-items-xxl-center justify-content-xl-center justify-content-xxl-center">
                    <div class="card" style="box-shadow: 0px 0px 1px 0px;">
                        <div class="card-body">
                            <h4 class="card-title">Edit User Information</h4>
                            <div></div>
                            <form class="text-center" method="post">
                                <div class="mb-3">
                                    <div>
										<input class="form-control" type="text" id="userid" name="userid" required>
                                        <h1 class="text-start" style="font-size: 13px;">User ID</h1>
                                    </div>
                                    <div class="row gx-5 gy-3">
                                        <div class="col">
                                            <p class="text-start" style="margin-bottom: 0px;font-family: Karla, sans-serif;font-size: 14px;">First Name</p><input class="form-control" type="text" name="firstname" required/>
                                            <p class="text-start" style="margin-bottom: 0px;font-family: Karla, sans-serif;font-size: 14px;">Middle Name</p><input class="form-control" type="text" name="middlename" />
                                            <p class="text-start" style="margin-bottom: 0px;font-family: Karla, sans-serif;font-size: 14px;">Nationality</p><input class="form-control" type="text" name="nationality" />
                                            <p class="text-start" style="margin-bottom: 0px;font-family: Karla, sans-serif;font-size: 14px;">Civil Status</p><input class="form-control" type="text" name="civilstatus" />
                                            <p class="text-start" style="margin-bottom: 0px;font-family: Karla, sans-serif;font-size: 14px;">District/Barangay</p><input class="form-control" type="text" name="districtbarangay" />
                                            <p class="text-start" style="margin-bottom: 0px;font-family: Karla, sans-serif;font-size: 14px;">Email Address</p><input class="form-control" type="text" name="emailaddress" required/>
                                        </div>
                                        <div class="col">
                                            <p class="text-start" style="margin-bottom: 0px;font-family: Karla, sans-serif;font-size: 14px;">Last Name</p><input class="form-control" type="text" name="surname" required/>
                                            <p class="text-start" style="margin-bottom: 0px;font-family: Karla, sans-serif;font-size: 14px;">Gender<input class="form-control" type="text" name="gender" /></p>
                                            <p class="text-start" style="margin-bottom: 0px;font-family: Karla, sans-serif;font-size: 14px;">Place of Birth</p><input class="form-control" type="text" name="placeofbirth" />
                                            <p class="text-start" style="margin-bottom: 0px;font-family: Karla, sans-serif;font-size: 14px;">Home Address</p><input class="form-control" type="text" name="homeaddress" />
                                            <p class="text-start" style="margin-bottom: 0px;font-family: Karla, sans-serif;font-size: 14px;">Municipality/City</p><input class="form-control" type="text" name="municipalitycity" />
                                            <p class="text-start" style="margin-bottom: 0px;font-family: Karla, sans-serif;font-size: 14px;">Landline</p><input class="form-control" type="text" name="landline" />
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div></div>
                                    </div>
                                </div>
                                <div class="d-xl-flex d-xxl-flex justify-content-xl-center justify-content-xxl-center mb-3"><a class="btn btn-primary btn-light" role="button" href="profile.php" style="font-family: 'Montserrat Alternates', sans-serif;font-size: 13px;width: 120px;border-color: var(--bs-navbar-toggler-border-color);border-radius: 5px;">Cancel</a>
								
								<input type="submit" value="Submit" class="btn btn-primary" role="button" href="edit_profile.php" style="font-family: 'Montserrat Alternates', sans-serif;font-size: 13px;background: #A83565;width: 120px;border-color: var(--bs-navbar-toggler-border-color);border-radius: 5px;margin-left:20px;"/></div>
                            </form>
                        </div>
                    </div>
                </div>
			</div>
        </div>
    </div>
    <script src="/src/global.js"></script>

</body>

</html>