<?php
require ($_SERVER['DOCUMENT_ROOT'] . "/backend/connection.php");
include ($_SERVER['DOCUMENT_ROOT'] . "/backend/header.php");
require ($_SERVER['DOCUMENT_ROOT'] . "/backend/get_names.php");
require_once ($_SERVER['DOCUMENT_ROOT'] . "/backend/retrieve_userinfo.php");
$conn = get_connection();
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

            <div class="col-5 overflow-auto" style="max-height: 84vmin;padding-right:35px;"><a href="profile.php"
                    style="padding-bottom: 0px;padding-top: 0px;padding-right: 0px;"><svg
                        xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                        viewBox="0 0 16 16" class="bi bi-x-square text-muted"
                        style="font-size: 30px;margin-top: 7px;margin-bottom: 11px;">
                        <path
                            d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z">
                        </path>
                        <path
                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708">
                        </path>
                    </svg></a>
                <div>
                    <h5 style="margin-top: 0px;">Your Inquiries</h5>
                    <hr>
                </div>
                <!--Just use this whole card div for showing message-->
                <?php
                $userInfo_Id = getUserInfoIdFromSession($conn, $userId);

                $query = "SELECT Id, UserInquiryName, UserInquiryEmail, InquiryTime, InquiryDateString, UserInquiry, InquiryStatus, InquiryReply, InquiryAttachment FROM UserInquiries WHERE userinfo_id = '$userInfo_Id' ORDER BY InquiryTime DESC";
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $user = $row["userinfo_id"];
                        $senderName = $row["UserInquiryName"];
                        $senderEmail = $row["UserInquiryEmail"];
                        $timestamp = $row["InquiryTime"];
                        $inquiryDateString = $row["InquiryDateString"];
                        $message = $row["UserInquiry"];
                        $status = isset($row["InquiryStatus"]) ? $row["InquiryStatus"] : null;
                        $inquiryreply = $row["InquiryReply"];

                        $senderfile = $row["InquiryAttachment"];

                        $formattedTimestamp = date("F j, Y, g:i a", strtotime($timestamp));

                        if ($status == "unresolved") {
                            // Check if "id" key exists in $row array before using it
                            if (isset($row["Id"])) {
                                echo '<div class="card" style="margin-bottom:20px;">';
                            } else {
                                echo "Error: Inquiry ID not found.";
                            }
                        } else {
                            echo '<div class="card" style="border-width: 2px;border-color: var(--bs-green);margin-bottom:20px;">';
                        }
                        // Construct the base URL dynamically
                        $baseURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/";

                        echo '<div class="card-body">';
                        echo '<h4 class="card-title">Sent ' . $formattedTimestamp . '</h6>';
                        if ($senderfile == null) {
                            echo "<p class = 'text-muted'>No attachments<p>";
                        } else {
                            echo '<img src="' . $baseURL . $senderfile . '" alt="Attachment" style="width: 300px; height: auto;">'; // Adjust width as needed
                        }
                        echo '<p class="card-text">' . $message . '</p>';
                        echo '<p class="card-text">Day of Inquiry: ' . $inquiryDateString . '</p>'; // Display InquiryDateString
                
                        if ($inquiryreply == "") {
                            echo '<p class="card-text">No admin reply</p>';
                        } else {
                            echo '<p class="card-text">Admin Reply: ' . $inquiryreply . '</p>';
                        }

                        echo '</div></div>';
                    }
                } else {
                    echo "No inquiries found.";
                }

                ?>
            </div>
        </div>
    </div>

    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/dom-to-image.min.js"></script>
    <script src="../assets/js/fabric.min.js"></script>
    <script src="../assets/js/Lightbox-Gallery-baguetteBox.min.js"></script>
    <script src="../assets/js/Lightbox-Gallery.js"></script>
    <script src="/src/global.js"></script>
</body>

</html>