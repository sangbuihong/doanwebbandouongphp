<?php
include "functions/functions.php";
include "functions/db.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles/resetcss.css" media="all">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://kit.fontawesome.com/f724e98ccb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="styles/style.css" media="all">
    <link rel="stylesheet" type="text/css" href="styles/style_customer.css" media="all">
    <title>Quán coffe</title>
</head>

<body>
    <div class="main-wrapper">
        <?php 
        include('includes/header.php')
        ?>

        <div class="side-nav">
            <?php 
                include('side_nav.php')
            ?>
        </div>

        <div class="page-container">
            <div class="page-wrapper">
                <div class=""></div>
                <!-- -->
                <!--Profile Card-->
                <?php
                if (isset($_GET['action'])) {
                    $action = $_GET['action'];
                } else {
                    $action = '';
                }

                switch ($action) {

                    case "edit_profile";
                        include('customer/edit_profile.php');
                        break;

                    case "user_profile_picture";
                        include('customer/user-profile-picture.php');
                        break;

                    case "change_password";
                        include('customer/change_password.php');
                        break;

                    case "delete_account";
                        include('customer/delete_account.php');
                        break;

                    default;
                        echo "Do something";
                        break;
                }

                ?>
                <!-- -->


            </div>
        </div>
        <!-- End page container -->
    </div> <!-- End main_wrapper-->
    <!-- Footer -->
    <?php 
        include('includes/footer.php')
    ?>
</body>

</html>