<?php
include($_SERVER['DOCUMENT_ROOT'] . '/backend/header.php');
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
</head>

<body>
    <nav class="navbar navbar-expand-md sticky-top py-3" style="background: #A83565;">
        <div class="container-fluid"><a class="navbar-brand d-flex align-items-center" href="index.php"
                style="margin-left: -200px;padding: 0px;"><span style="color: rgb(255,255,255);"><img
                        src="../assets/img/logo.png" style="max-width: 120px;" alt="Gifted Ideas"></span></a><button
                data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-4"><span
                    class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse flex-grow-0 order-md-first" id="navcol-4"
                style="font-family: 'Montserrat Alternates', sans-serif;font-size: 16px;">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php"
                            style="font-family: 'Montserrat Alternates', sans-serif;color: #ffffff;">Home</a></li>
                    <li class="nav-item" style="color: #ffffff;"><a class="nav-link active" href="product_editor.php"
                            style="font-family: 'Montserrat Alternates', sans-serif;color: #ffffff;">Product Editor</a>
                    </li>
                    <li class="nav-item" style="font-family: 'Montserrat Alternates', sans-serif;color: #ffffff;"><a
                            class="nav-link active" href="inquiries.php"
                            style="font-family: 'Montserrat Alternates', sans-serif;color: #ffffff;">Inquiries</a></li>
                    <li class="nav-item" style="font-family: 'Montserrat Alternates', sans-serif;color: #ffffff;"><a
                            class="nav-link active" href="testimonies.php"
                            style="font-family: 'Montserrat Alternates', sans-serif;color: #ffffff;">Testimonies</a>
                    </li>
                    <li class="nav-item" style="font-family: 'Montserrat Alternates', sans-serif;color: #ffffff;"><a
                            class="nav-link active" href="about.php"
                            style="font-family: 'Montserrat Alternates', sans-serif;color: #ffffff;">About</a></li>
                </ul>
                <div class="d-md-none my-2"><button class="btn btn-light me-2" type="button">Button</button><button
                        class="btn btn-primary" type="button">Button</button></div>
            </div>
            <div class="d-none d-md-block"><a class="btn btn-light text-center me-2" role="button"
                    style="width: 120px;color: rgb(168,53,101);font-family: 'Montserrat Alternates', sans-serif;font-size: 13px;border-radius: 5px;"
                    href="login.php">Log in</a><a class="btn btn-primary" role="button" href="signup.php"
                    style="font-family: 'Montserrat Alternates', sans-serif;font-size: 13px;background: #F44D92;width: 120px;border-color: var(--bs-navbar-toggler-border-color);border-radius: 5px;">Register</a>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row g-0">
            <div class="col-md-6">
                <div style="padding-top: 40px;padding-left: 60px;">
                    <style>
                        .drawing-area {
                            position: absolute;
                            z-index: 10;
                            width: 420px;
                            height: 420px;
                            left: 0px;
                            top: 0px;
                        }

                        .canvas-container {
                            width: 420px;
                            height: 420px;
                            position: relative;
                            user-select: none;
                        }

                        #tshirt-div {
                            top: 0px;
                            left: 0px;
                            width: 420px;
                            height: 420px;
                            margin-bottom: 10px;
                            position: relative;
                            background-color: #fff;
                        }

                        #canvas {
                            position: absolute;
                            width: 420px;
                            height: 420px;
                            left: 0px;
                            top: 0px;
                            user-select: none;
                            cursor: default;
                        }

                        #tshirt-backgroundpicture {
                            width: 420px;
                            height: 420px;
                        }
                    </style>

                    <!-- Create the container of the tool -->
                    <div id="tshirt-div">
                        <!-- 
        Initially, the image will have the background tshirt that has transparency
        So we can simply update the color with CSS or JavaScript dinamically
    -->
                        <img id="tshirt-backgroundpicture" src="../assets/img/product1shirt.jpg" />

                        <div id="drawingArea" class="drawing-area">
                            <div class="canvas-container">
                                <canvas id="tshirt-canvas" width="420" height="420"></canvas>
                            </div>
                        </div>
                    </div>

                    <p id="editp">To remove a loaded picture on the T-Shirt select it and press the <kbd>DEL</kbd> key.
                    </p>
                    <!-- The select that will allow the user to pick one of the static designs -->
                    <label for="tshirt-design">T-Shirt Design:</label>
                    <select id="tshirt-design">
                        <option value="" selected>Select one of our designs ...</option>
                        <option value="logo.png">Gifted Ideas Logo</option>
                    </select>
                    <br><br>
                    <label for="tshirt-custompicture">Upload your own design:</label>
                    <input type="file" id="tshirt-custompicture" />
                    <a id="savebtn " class="btn btn-light text-center me-2" role="button" onclick="saveFile()"
                        style="width: 120px;color: rgb(168,53,101);font-family: 'Montserrat Alternates', sans-serif;font-size: 13px;border-radius: 5px;">Save
                        Image</a>
                    <br><br>
                    <!-- Include Fabric.js in the page -->
                    <script src="fabric.min.js"></script>
                    <!-- Include DomToImage in the page -->
                    <script src="dom-to-image.min.js"></script>
                    <!-- Include FileSaver in the page -->
                    <script src="FileSaver.min.js"></script>

                    <script>
                        let canvas = new fabric.Canvas('tshirt-canvas');

                        function updateTshirtImage(imageURL) {
                            fabric.Image.fromURL(imageURL, function (img) {
                                img.scaleToHeight(200);
                                img.scaleToWidth(200);
                                canvas.centerObject(img);
                                canvas.add(img);
                                canvas.renderAll();
                            });
                        }

                        // Update the TShirt according to the selected dropdown by the user
                        document.getElementById("tshirt-design").addEventListener("click", function () {

                            // Call the updateTshirtImage method providing as first argument the URL
                            // of the image provided by the select
                            updateTshirtImage(this.value);
                        }, false);

                        // When the user clicks on upload a custom picture
                        document.getElementById('tshirt-custompicture').addEventListener("change", function (e) {
                            var reader = new FileReader();

                            reader.onload = function (event) {
                                var imgObj = new Image();
                                imgObj.src = event.target.result;

                                // When the picture loads, create the image in Fabric.js
                                imgObj.onload = function () {
                                    var img = new fabric.Image(imgObj);

                                    img.scaleToHeight(150);
                                    img.scaleToWidth(150);
                                    canvas.centerObject(img);
                                    canvas.add(img);
                                    canvas.renderAll();
                                };
                            };

                            // If the user selected a picture, load it
                            if (e.target.files[0]) {
                                reader.readAsDataURL(e.target.files[0]);
                            }
                        }, false);

                        // When the user selects a picture that has been added and press the DEL key
                        // The object will be removed !
                        document.addEventListener("keydown", function (e) {
                            var keyCode = e.keyCode;

                            if (keyCode == 46) {
                                console.log("Removing selected element on Fabric.js on DELETE key !");
                                canvas.remove(canvas.getActiveObject());
                            }
                        }, false);

                    </script>

                    <script>
                        //for switching products
                        document.getElementById("product1").onclick = function () { product1() };
                        document.getElementById("product2").onclick = function () { product2() };
                        document.getElementById("product3").onclick = function () { product3() };
                        document.getElementById("product4").onclick = function () { product4() };
                        document.getElementById("product5").onclick = function () { product5() };
                        document.getElementById("product6").onclick = function () { product6() };
                        document.getElementById("product7").onclick = function () { product7() };
                        document.getElementById("product8").onclick = function () { product8() };

                        function product1() {
                            document.getElementById("tshirt-backgroundpicture").src = "../assets/img/product1shirt.jpg";
                        }

                        function product2() {
                            document.getElementById("tshirt-backgroundpicture").src = "../assets/img/product2mug.jpg";
                        }

                        function product3() {
                            document.getElementById("tshirt-backgroundpicture").src = "../assets/img/product3cup.jpg";
                        }

                        function product4() {
                            document.getElementById("tshirt-backgroundpicture").src = "../assets/img/product4pen.jpg";
                        }

                        function product5() {
                            document.getElementById("tshirt-backgroundpicture").src = "../assets/img/product5jacket.jpg";
                        }

                        function product6() {
                            document.getElementById("tshirt-backgroundpicture").src = "../assets/img/product6pillow.jpg";
                        }

                        function product7() {
                            document.getElementById("tshirt-backgroundpicture").src = "../assets/img/product7phonecase.jpg";
                        }

                        function product8() {
                            document.getElementById("tshirt-backgroundpicture").src = "../assets/img/product8totebag.jpg";
                        }

                    </script>

                    <script>
                        function saveFile() {
                            // Define as node the T-Shirt Div
                            var node = document.getElementById('tshirt-div');

                            domtoimage.toBlob(node)
                                .then(function (blob) {
                                    window.saveAs(blob, 'download.png');
                                });
                        }
                    </script>

                </div>
            </div>
            <div class="col-md-6">
                <section class="photo-gallery py-4 py-xl-5">
                    <div class="container">
                        <div class="row mb-5">
                            <div class="col-md-8 col-xl-6 text-center mx-auto">
                                <h2 style="font-family: 'Montserrat Alternates', sans-serif;font-weight: bold;">Products
                                    Editor</h2>
                            </div>
                        </div>
                        <div
                            class="row gx-1 gy-1 row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-4 photos">
                            <div class="col item"><a id="product1" onclick="product1()" href="#">
                                    <div class="card">
                                        <div class="card-body"
                                            style="background: #dedede;text-align: center;padding-bottom: 0px;"><img
                                                class="img-fluid" src="../assets/img/product1shirt.jpg">
                                            <h6 class="card-title"
                                                style="font-family: 'Montserrat Alternates', sans-serif;font-weight: bold;margin-top: 5px;">
                                                Shirt</h6>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="col item"><a id="product2" onclick="product2()" href="#">
                                    <div class="card">
                                        <div class="card-body"
                                            style="background: #dedede;text-align: center;padding-bottom: 0px;"><img
                                                class="img-fluid" src="../assets/img/product2mug.jpg">
                                            <h6 class="card-title"
                                                style="font-family: 'Montserrat Alternates', sans-serif;font-weight: bold;margin-top: 5px;">
                                                Mug</h6>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="col item"><a id="product3" href="#" onclick="product3()">
                                    <div class="card">
                                        <div class="card-body"
                                            style="background: #dedede;text-align: center;padding-bottom: 0px;"><img
                                                class="img-fluid" src="../assets/img/product3cup.jpg">
                                            <h6 class="card-title"
                                                style="font-family: 'Montserrat Alternates', sans-serif;font-weight: bold;margin-top: 5px;">
                                                Cup</h6>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="col item"><a id="product4" href="#" onclick="product4()">
                                    <div class="card">
                                        <div class="card-body"
                                            style="background: #dedede;text-align: center;padding-bottom: 0px;"><img
                                                class="img-fluid" src="../assets/img/product4pen.jpg"
                                                style="background: #ffffff;">
                                            <h6 class="card-title"
                                                style="font-family: 'Montserrat Alternates', sans-serif;font-weight: bold;margin-top: 5px;">
                                                Pen</h6>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="col item"><a id="product5" href="#" onclick="product5()">
                                    <div class="card">
                                        <div class="card-body"
                                            style="background: #dedede;text-align: center;padding-bottom: 0px;"><img
                                                class="img-fluid" src="../assets/img/product5jacket.jpg"
                                                style="background: #ffffff;">
                                            <h6 class="card-title"
                                                style="font-family: 'Montserrat Alternates', sans-serif;font-weight: bold;margin-top: 5px;">
                                                Jacket</h6>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="col item"><a id="product6" href="#" onclick="product6()">
                                    <div class="card">
                                        <div class="card-body"
                                            style="background: #dedede;text-align: center;padding-bottom: 0px;"><img
                                                class="img-fluid" src="../assets/img/product6pillow.jpg"
                                                style="background: #ffffff;" width="254" height="135">
                                            <h6 class="card-title"
                                                style="font-family: 'Montserrat Alternates', sans-serif;font-weight: bold;margin-top: 5px;">
                                                Pillow case</h6>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="col item"><a id="product7" href="#" onclick="product7()">
                                    <div class="card">
                                        <div class="card-body"
                                            style="background: #dedede;text-align: center;padding-bottom: 0px;"><img
                                                class="img-fluid" src="../assets/img/product7phonecase.jpg"
                                                style="background: #ffffff;">
                                            <h6 class="card-title"
                                                style="font-family: 'Montserrat Alternates', sans-serif;font-weight: bold;margin-top: 5px;">
                                                Phone case</h6>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="col item"><a id="product8" href="#" onclick="product8()">
                                    <div class="card">
                                        <div class="card-body"
                                            style="background: #dedede;text-align: center;padding-bottom: 0px;"><img
                                                class="img-fluid" src="../assets/img/product8totebag.jpg"
                                                style="background: #ffffff;">
                                            <h6 class="card-title"
                                                style="font-family: 'Montserrat Alternates', sans-serif;font-weight: bold;margin-top: 5px;">
                                                Tote bag</h6>
                                        </div>
                                    </div>
                                </a></div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <footer class="text-white" style="font-family: 'Montserrat Alternates', sans-serif;background: #a83565;">
        <div class="container py-4 py-lg-5">
            <div class="row justify-content-center">
                <div
                    class="col-sm-4 col-md-4 col-lg-4 col-xxl-3 text-center text-lg-start d-flex flex-column order-first item">
                    <img>
                    <h3 class="fs-6 text-start text-white"><br>Address:<br>#000, City, Province</h3>
                </div>
                <div
                    class="col-sm-6 col-md-5 col-lg-4 col-xl-5 col-xxl-6 text-center text-lg-start d-flex flex-column align-items-center item">
                    <h1 class="fs-5 text-white">In partnership with:</h1>
                    <ul class="list-inline">
                        <li class="list-inline-item"><img class="rounded-circle flex-shrink-0 me-3 fit-cover"
                                src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" width="70" height="70">
                        </li>
                        <li class="list-inline-item"><img class="rounded-circle flex-shrink-0 me-3 fit-cover"
                                src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" width="70" height="70">
                        </li>
                        <li class="list-inline-item"><img class="rounded-circle flex-shrink-0 me-3 fit-cover"
                                src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" width="70" height="70">
                        </li>
                    </ul>
                </div>
                <div
                    class="col text-center text-lg-start d-flex flex-column align-items-center align-items-lg-start item social">
                    <h1 class="fs-5 text-white">Contact Us:</h1>
                    <p>Phone Number: +63-912-345-6789<br>Telephone Number: 210-000</p>
                </div>
            </div>
            <hr>
            <div class="d-flex justify-content-between align-items-center pt-3">
                <p class="mb-0">Copyright © 2024 Gifted Ideas</p>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">Follow us:</li>
                    <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                            fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951">
                            </path>
                        </svg></li>
                    <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                            fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter">
                            <path
                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15">
                            </path>
                        </svg></li>
                    <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                            fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334">
                            </path>
                        </svg></li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/dom-to-image.min.js"></script>
    <script src="../assets/js/fabric.min.js"></script>
    <script src="../assets/js/FileSaver.min.js"></script>
    <script src="../assets/js/Lightbox-Gallery-baguetteBox.min.js"></script>
    <script src="../assets/js/Lightbox-Gallery.js"></script>
</body>

</html>