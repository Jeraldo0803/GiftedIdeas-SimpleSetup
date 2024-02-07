<?php
session_start();
require($_SERVER['DOCUMENT_ROOT'] . "/backend/get_names.php");
?>
<section>
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
                            style="font-family: 'Montserrat Alternates', sans-serif;color: #ffffff;">Product
                            Editor</a></li>
                    <li class="nav-item" style="font-family: 'Montserrat Alternates', sans-serif;color: #ffffff;"><a
                            class="nav-link active" href="inquiries.php"
                            style="font-family: 'Montserrat Alternates', sans-serif;color: #ffffff;">Inquiries</a>
                    </li>
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
            <?php
            if (isset($_SESSION['id'])) {
                echo "Welcome, " . $firstname . " " . $lastname . '
                <div class="d-none d-md-block"><a class="btn btn-light text-center me-2" role="button"
                style="width: 120px;color: rgb(168,53,101);font-family: "Montserrat Alternates", sans-serif;font-size: 13px;border-radius: 5px;"
                href="../backend/logout.php">Log out</a>
                
                ';
            } else {
                echo '
            <div class="d-none d-md-block"><a class="btn btn-light text-center me-2" role="button"
            style="width: 120px;color: rgb(168,53,101);font-family: "Montserrat Alternates", sans-serif;font-size: 13px;border-radius: 5px;"
            href="login.php">Log in</a>
            
            <a class="btn btn-primary" role="button" href="signup.php"
            style="font-family: "Montserrat Alternates", sans-serif;font-size: 13px;background: #F44D92;width: 120px;border-color: var(--bs-navbar-toggler-border-color);border-radius: 5px;">Register</a>
            </div>
            ';
            }

            ?>
            <!--
            <div class="d-none d-md-block"><a class="btn btn-light text-center me-2" role="button"
                    style="width: 120px;color: rgb(168,53,101);font-family: " Montserrat Alternates",
                    sans-serif;font-size: 13px;border-radius: 5px;" href="login.php">Log in</a>

                <a class="btn btn-primary" role="button" href="signup.php" style="font-family: " Montserrat Alternates",
                    sans-serif;font-size: 13px;background: #F44D92;width: 120px;border-color:
                    var(--bs-navbar-toggler-border-color);border-radius: 5px;">Register</a>
            </div> -->
        </div>
    </nav>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/dom-to-image.min.js"></script>
    <script src="../assets/js/fabric.min.js"></script>
    <script src="../assets/js/Lightbox-Gallery-baguetteBox.min.js"></script>
    <script src="../assets/js/Lightbox-Gallery.js"></script>
</section>