<?php
include "functions/functions.php";
include "functions/db.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://kit.fontawesome.com/f724e98ccb.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="styles/style.css" media="all">
    <title>Quán coffe</title>
</head>

<body>
    <?php 
        include('includes/header.php')
    ?>
    <div class="main-wrapper">
       
        <div class="side-nav">
                <?php 
                include('side_nav.php')
                ?>    
        </div>

        <div class="page-container">
            
            <div class="page-wrapper">
                <div class="">
                    <div class="collapse navbar-collapse" id="bs-main-navbar-collapse-1" style="position: relative;">
                        <ul class="topbar">
                            <?php
                            getCats();
                            ?>
                        </ul>
                        <div class="right-banner-desktop" style="float:right;height: 32px;">
                        </div>
                    </div>
                </div>

                <!-- -->
                <!--Profile Card-->
                <div class="row">
                    <?php
                    getPro();
                    get_pro_by_cat_id();
                    cart();
                    ?>
                </div>
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