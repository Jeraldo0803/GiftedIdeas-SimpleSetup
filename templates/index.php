<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/backend/common.php');
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

    <div class="row" style="height: 676.391px;">
        <div class="col-6 d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center"
            style="background: rgba(234,118,166,0.28);padding-left: 50px;border-color: rgba(0,0,0,0);">
            <div>
                <h1 style="font-family: 'Montserrat Alternates', sans-serif;font-size: 41px;">Browse all our products
                </h1>
                <p class="my-3"><br><br><br></p><a class="btn btn-primary btn-lg me-2" role="button" href="products.php"
                    style="background: #a83565;font-family: 'Montserrat Alternates', sans-serif;width: 140px;font-size: 14px;border-style: none;border-radius: 5px;">Browse</a>
            </div>
        </div>
        <div class="col-6 d-md-flex d-xl-flex d-xxl-flex align-items-md-center align-items-xl-center align-items-xxl-center"
            style="padding-right: 0px;padding-left: 0px;"><img class="img-fluid w-100 fit-cover"
                src="../assets/img/homepagehero1.jpg"></div>
    </div>
    <div class="row" style="height: 676.391px;">
        <div class="col-6 d-md-flex align-items-md-center"><img class="w-100 fit-cover"
                src="../assets/img/homepagehero2.png"></div>
        <div class="col d-md-flex d-xl-flex align-items-md-center align-items-xl-center"
            style="background: rgba(234,118,166,0.28);padding-right: 75px;padding-left: 75px;">
            <div class="justify-content-xxl-center">
                <h1 style="font-family: 'Montserrat Alternates', sans-serif;font-size: 41px;">Product Editor</h1>
                <p class="my-3" style="font-size: 15px;font-family: 'Montserrat Alternates', sans-serif;">Use our
                    patented product editor. Upload your brand logo and see how it looks on our merchandise!</p><a
                    class="btn btn-primary btn-lg justify-content-xxl-center align-items-xxl-center me-2" role="button"
                    href="product_editor.php"
                    style="width: 176px;background: #a83565;font-size: 14px;font-family: 'Montserrat Alternates', sans-serif;border-style: none;border-radius: 5px;">Go
                    to Product Editor</a>
            </div>
        </div>
    </div>
    <div class="container py-4 py-xl-5">
        <div class="row gy-4 gy-md-0">
            <div class="col-md-6"><img class="rounded img-fluid w-100 fit-cover"
                    src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" style="min-height: 300px;"></div>
            <div class="col-md-6 d-md-flex align-items-md-center"
                style="font-family: 'Montserrat Alternates', sans-serif;">
                <div style="max-width: 350px;">
                    <h2 style="font-size: 41px;">About Us</h2>
                    <p class="my-3">We started from humble beginnings. It all started when...</p><a
                        class="btn btn-primary btn-lg d-xxl-flex justify-content-xxl-center align-items-xxl-center me-2"
                        role="button" href="about.php"
                        style="width: 140px;background: #a83565;border-radius: 5px;font-size: 15px;">Learn more</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-4 py-xl-5">
        <div class="row mb-5">
            <div class="col-12 text-center mx-auto" style="margin-bottom: 35px;">
                <h2 class="fw-bold text-start" style="font-family: 'Montserrat Alternates', sans-serif;">Testimonials
                </h2>
            </div>
        </div>
        <div class="row row-cols-2 justify-content-xxl-center">
            <div class="col">
                <div class="d-flex" style="margin-bottom: 40px;"><img
                        class="rounded-circle flex-shrink-0 me-3 fit-cover"
                        src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" width="200" height="200"></div>
                <div>
                    <p class="fw-bold text-primary mb-0">John Smith</p>
                    <p class="text-muted mb-0">Erat netus</p>
                    <p class="bg-body-tertiary border rounded border-0 p-4"
                        style="font-family: 'Montserrat Alternates', sans-serif;">Service is great!</p><a
                        class="btn btn-primary btn-lg d-xxl-flex justify-content-xxl-center align-items-xxl-center me-2"
                        role="button" href="testimonials.php"
                        style="width: 140px;background: #a83565;font-size: 15px;">Learn more</a>
                </div>
            </div>
            <div class="col">
                <div class="d-flex" style="margin-bottom: 40px;"><img
                        class="rounded-circle flex-shrink-0 me-3 fit-cover"
                        src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" width="200" height="200"></div>
                <div>
                    <p class="fw-bold text-primary mb-0">John Smith</p>
                    <p class="text-muted mb-0">Erat netus</p>
                    <p class="bg-body-tertiary border rounded border-0 p-4"
                        style="font-family: 'Montserrat Alternates', sans-serif;">Service is great!</p><a
                        class="btn btn-primary btn-lg d-xxl-flex justify-content-xxl-center align-items-xxl-center me-2"
                        role="button" href="testimonials.php"
                        style="width: 140px;background: #a83565;font-size: 15px;">Learn more</a>
                </div>
            </div>
        </div>
    </div>
    <div data-include="templates/footer"></div>

    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/Lightbox-Gallery-baguetteBox.min.js"></script>
    <script src="../assets/js/Lightbox-Gallery.js"></script>
    <script src="/src/global.js"></script>

</body>

</html>