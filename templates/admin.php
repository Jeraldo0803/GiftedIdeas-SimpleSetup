<?php
require ($_SERVER['DOCUMENT_ROOT'] . "/backend/common.php");
check_admin_auth();
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
            <div class="col-4 d-xl-flex justify-content-xl-center align-items-xl-center">
                <div>
                    <div class="card text-center" style="box-shadow: 1px 4px 20px rgba(0,0,0,0.25);">
                        <div class="card-body" style="padding: 25px 16px;">
                            <h4 class="card-title" style="font-family: Karla, sans-serif;font-weight: bold;">View User
                                Information</h4>
                            <div class="row">
                                <div class="col">
                                    <h6 class="mb-2" style="font-size: 13px;font-family: Karla, sans-serif;">Edit Member
                                        Information
                                    </h6><a class="btn btn-primary" role="button" href="admin_edituser.php"
                                        style="font-family: 'Montserrat Alternates', sans-serif;font-size: 13px;background: #A83565;width: 120px;border-color: var(--bs-navbar-toggler-border-color);border-radius: 5px;">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card text-center"
                        style="margin-top: 40px;margin-bottom: 100px;box-shadow: 1px 4px 20px rgba(0,0,0,0.25), 1px 4px 20px rgba(0,0,0,0.25);">
                        <div class="card-body" style="padding: 25px 16px;">
                            <h4 class="card-title" style="font-family: Karla, sans-serif;font-weight: bold;">User
                                Activities</h4><a class="btn btn-primary" role="button"
                                style="font-family: 'Montserrat Alternates', sans-serif;font-size: 13px;background: #A83565;border-color: var(--bs-navbar-toggler-border-color);border-radius: 5px;min-width: 95%;margin-bottom: 10px;"
                                href="queries.php">View
                                Queries</a><a class="btn btn-primary" role="button"
                                style="font-family: 'Montserrat Alternates', sans-serif;font-size: 13px;background: #A83565;border-color: var(--bs-navbar-toggler-border-color);border-radius: 5px;min-width: 95%;">View</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div></div>
            </div>
        </div>
    </div>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/Lightbox-Gallery-baguetteBox.min.js"></script>
    <script src="../assets/js/Lightbox-Gallery.js"></script>
    <script src="/src/global.js"></script>

</body>

</html>