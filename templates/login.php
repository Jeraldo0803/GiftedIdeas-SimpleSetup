<?php
session_start();
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
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-5">
                        <div class="card-body d-flex flex-column align-items-center"
                            style="background: #EBEBEB;padding-top: 60px;">
                            <div>
                                <h1 style="font-size: 20px;margin-bottom: 50px;">Login page</h1>
                            </div>
                            <form class="text-center" method="post" action="/backend/login.php">
                                <div class=" mb-3">
                                    <p class="text-start"
                                        style="margin-bottom: 0px;font-family: Karla, sans-serif;font-size: 14px;">Email
                                        Address</p><input class="border rounded-0 border-dark-subtle form-control"
                                        type="email" name="email">
                                </div>
                                <div class="mb-3">
                                    <p class="text-start"
                                        style="margin-bottom: 0px;font-family: Karla, sans-serif;font-size: 14px;">
                                        Password</p><input class="border rounded-0 border-dark-subtle form-control"
                                        type="password" name="password">
                                </div>
                                <div style="padding-top: 35px;"></div>
                                <div
                                    class="d-xl-flex d-xxl-flex justify-content-xl-center justify-content-xxl-center mb-3">
                                    <button
                                        class="btn btn-outline-light text-center justify-content-xxl-center d-block w-100"
                                        type="submit" value="Login"
                                        style="border-radius: 30px;border-width: 4px;border-color: #A83565;color: #A83565;font-family: Karla, sans-serif;font-size: 14px;max-width: 160px;">LOGIN</button>
                                </div>
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

</body>

</html>