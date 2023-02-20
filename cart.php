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
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link rel="stylesheet" type="text/css" href="styles/style_shoppingcart.css" media="all">
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
                <h1>Giỏ hàng</h1>
                <div class="cart-shopping">

                    <div class="all-cart">
                        <!--  -->

                        <!--  -->
                        <?php
                        get_cart();
                        ?>
                    </div>
                    <div class="container">
                        <div class="payment">
                            <?php
                            total_price();
                            ?>
                            <form method='get' action=''>
                                <input type="hidden" name="dathang" value="dathang">
                                <input type="submit" class="btn btn-primary btn-lg button-dathang" value="Đặt hàng">
                            </form>
                            <?php
                            if (isset($_GET['dathang'])) {
                                dathang();
                                echo " <script>window.open('cart.php','_self');</script>";
                            }
                            if (isset($_POST['inscrea'])) {
                                update_cart($_POST['input-soluong'] + 1, $_POST['cart_MSHH']);
                                echo " <script>window.open('cart.php','_self');</script>";
                            }
                            if (isset($_POST['descrea'])) {
                                update_cart($_POST['input-soluong'] - 1, $_POST['cart_MSHH']);
                                echo " <script>window.open('cart.php','_self');</script>";
                            }
                            if (isset($_POST['del_cart'])) {
                                update_cart_del($_POST['cart_MSHH']);
                                echo " <script>window.open('cart.php','_self');</script>";
                            }
                            ?>

                        </div>
                    </div>
                </div>

                <!-- -->


            </div>
        </div>
        <!-- End page container -->
    </div> <!-- End main_wrapper-->
    <?php
    include('includes/footer.php')
    ?>
</body>

</html>