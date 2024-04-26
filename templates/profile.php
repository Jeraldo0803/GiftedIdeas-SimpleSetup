<?php
include ($_SERVER['DOCUMENT_ROOT'] . "/backend/header.php");
require ($_SERVER['DOCUMENT_ROOT'] . "/backend/connection.php");
require ($_SERVER['DOCUMENT_ROOT'] . "/backend/get_names.php");

// Include database connection
$conn = get_connection();

// Retrieve user information from the UserInfo table based on the session variable Id
$id = $_SESSION['id'];
$result = mysqli_query($conn, "SELECT * FROM userinfo WHERE Id = '$id'");


// Check if user information is found
if (mysqli_num_rows($result) == 1) {
    // Fetch user information
    $userInfo = mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html lang="en">

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
    <div class="container-fluid">
        <div class="row">
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
                                        <?php
                                        echo "$firstname" . " $lastname";
                                        ?>
                                    </h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h1 style="font-family: 'Montserrat Alternates', sans-serif;font-size: 15px;">User
                                    </h1>
                                </div>
                            </div>

                            <!--div class="card text-center"
                        style="margin-top: 40px;margin-bottom: 100px;box-shadow: 1px 4px 20px rgba(0,0,0,0.25), 1px 4px 20px rgba(0,0,0,0.25);">
                        <div class="card-body" style="padding: 25px 16px;"-->
                            <!--h4 class="card-title" style="font-family: Karla, sans-serif;font-weight: bold;">User-
                                Activities</h4> -->
                            <a class="btn btn-primary" role="button"
                                style="font-family: 'Montserrat Alternates', sans-serif;font-size: 13px;background: #A83565;border-color: var(--bs-navbar-toggler-border-color);border-radius: 5px;min-width: 95%;margin-bottom: 10px;"
                                href="user_inquiryhistory.php">View User Inquiries
                            </a>
                            <!--/div-->
                            <div class="row">
                                <div class="col">
                                    <div style="min-height: 10vmax;"></div>
                                    <div style="min-width: 100%;min-height: 13px;background: #a83565;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--div class="col-4 d-xl-flex justify-content-xl-center align-items-xl-center">
                <div>
                    <div class="card text-center" style="box-shadow: 1px 4px 20px rgba(0,0,0,0.25);">
                        <div class="card-body" style="padding: 25px 16px;">
                            <h4 class="card-title" style="font-family: Karla, sans-serif;font-weight: bold;">Edit User
                                Information</h4>
                            <div class="row">
                                <div class="col">
                                    <a class="btn btn-primary" role="button" href="edit_profile.php"
                                        style="font-family: 'Montserrat Alternates', sans-serif;font-size: 13px;background: #A83565;width: 120px;border-color: var(--bs-navbar-toggler-border-color);border-radius: 5px;">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Display user information -->
            <!--div class="col-5"-->
            <!--
                    <ul>
                        <li>First Name:
                            <?php echo $userInfo['FirstName']; ?>
                        </li>
                        <li>Surname:
                            <?php echo $userInfo['Surname']; ?>
                        </li>
                        <li>Middle Name:
                            <?php echo $userInfo['MiddleName']; ?>
                        </li>
                        <li>Place of Birth:
                            <?php echo $userInfo['PlaceofBirth']; ?>
                        </li>
                        <li>Gender:
                            <?php echo $userInfo['Gender']; ?>
                        </li>
                        <li>Nationality:
                            <?php echo $userInfo['Nationality']; ?>
                        </li>
                        <li>Civil Status:
                            <?php echo $userInfo['CivilStatus']; ?>
                        </li>
                        <li>Mobile Number:
                            <?php echo $userInfo['MobileNumber']; ?>
                        </li>
                        <li>Email Address:
                            <?php echo $userInfo['EmailAddress']; ?>
                        </li>
                        <li>Landline:
                            <?php echo $userInfo['Landline']; ?>
                        </li>
                        <li>Home Address:
                            <?php echo $userInfo['HomeAddress']; ?>
                        </li>
                        <li>District/Barangay:
                            <?php echo $userInfo['DistrictBarangay']; ?>
                        </li>
                        <li>Municipality/City:
                            <?php echo $userInfo['MunicipalityCity']; ?>
                        </li>
                    </ul>
                </div>
            </div-->
            <div
                class="col-9 d-xl-flex d-xxl-flex align-items-xl-center align-items-xxl-center justify-content-xl-center justify-content-xxl-center">
                <div class="card" style="box-shadow: 0px 0px 1px 0px;">
                    <div class="card-body">
                        <h4 class="card-title">User Information</h4>
                        <div></div>
                        <form class="text-center" method="post">
                            <div class="mb-3">
                                <div>
                                    <h1 class="text-start" style="font-size: 13px;">Personal Information</h1>
                                </div>
                                <div class="row gx-5 gy-3">
                                    <div class="col">
                                        <p class="text-start"
                                            style="margin-bottom: 0px;font-family: Karla, sans-serif;font-size: 14px;">
                                            First Name</p><input class="form-control" type="text" name="firstname"
                                            placeholder="<?php echo $userInfo['FirstName']; ?>" disabled />
                                        <p class="text-start"
                                            style="margin-bottom: 0px;font-family: Karla, sans-serif;font-size: 14px;">
                                            Middle Name</p><input class="form-control" type="text" name="middlename"
                                            placeholder="<?php echo $userInfo['MiddleName']; ?>" disabled />
                                        <p class="text-start"
                                            style="margin-bottom: 0px;font-family: Karla, sans-serif;font-size: 14px;">
                                            Nationality</p><input class="form-control" type="text" name="nationality"
                                            placeholder="<?php echo $userInfo['Nationality']; ?>" disabled />
                                        <p class="text-start"
                                            style="margin-bottom: 0px;font-family: Karla, sans-serif;font-size: 14px;">
                                            Civil Status</p><input class="form-control" type="text" name="civilstatus"
                                            placeholder="<?php echo $userInfo['CivilStatus']; ?>" disabled />
                                        <p class="text-start"
                                            style="margin-bottom: 0px;font-family: Karla, sans-serif;font-size: 14px;">
                                            District/Barangay</p><input class="form-control" type="text" name="barangay"
                                            placeholder="<?php echo $userInfo['DistrictBarangay']; ?>" disabled />
                                        <p class="text-start"
                                            style="margin-bottom: 0px;font-family: Karla, sans-serif;font-size: 14px;">
                                            Email Address</p><input class="form-control" type="text" name="phonenum"
                                            placeholder="<?php echo $userInfo['EmailAddress']; ?>" disabled />
                                    </div>
                                    <div class="col">
                                        <p class="text-start"
                                            style="margin-bottom: 0px;font-family: Karla, sans-serif;font-size: 14px;">
                                            Last Name</p><input class="form-control" type="text" name="lastname"
                                            placeholder="<?php echo $userInfo['Surname']; ?>" disabled />
                                        <p class="text-start"
                                            style="margin-bottom: 0px;font-family: Karla, sans-serif;font-size: 14px;">
                                            Gender<input class="form-control" type="text" name="gender"
                                                placeholder="<?php echo $userInfo['Gender']; ?>" disabled /></p>
                                        <p class="text-start"
                                            style="margin-bottom: 0px;font-family: Karla, sans-serif;font-size: 14px;">
                                            Place of Birth</p><input class="form-control" type="text" name="birthplace"
                                            placeholder="<?php echo $userInfo['PlaceofBirth']; ?>" disabled />
                                        <p class="text-start"
                                            style="margin-bottom: 0px;font-family: Karla, sans-serif;font-size: 14px;">
                                            Home Address</p><input class="form-control" type="text" name="address"
                                            placeholder="<?php echo $userInfo['HomeAddress']; ?>" disabled />
                                        <p class="text-start"
                                            style="margin-bottom: 0px;font-family: Karla, sans-serif;font-size: 14px;">
                                            Municipality/City</p><input class="form-control" type="text" name="city"
                                            placeholder="<?php echo $userInfo['MunicipalityCity']; ?>" disabled />
                                        <p class="text-start"
                                            style="margin-bottom: 0px;font-family: Karla, sans-serif;font-size: 14px;">
                                            Landline</p><input class="form-control" type="text" name="landlinenum"
                                            placeholder="<?php echo $userInfo['Landline']; ?>" disabled />
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div></div>
                                </div>
                            </div>
                            <div class="d-xl-flex d-xxl-flex justify-content-xl-center justify-content-xxl-center mb-3">
                                <a class="btn btn-primary" role="button" href="edit_profile.php"
                                    style="font-family: 'Montserrat Alternates', sans-serif;font-size: 13px;background: #A83565;width: 120px;border-color: var(--bs-navbar-toggler-border-color);border-radius: 5px;">Edit</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/Lightbox-Gallery-baguetteBox.min.js"></script>
    <script src="../assets/js/Lightbox-Gallery.js"></script>
    <script src="/src/global.js"></script>

</body>

</html>