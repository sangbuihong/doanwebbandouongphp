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
    <link rel="stylesheet" type="text/css" href="styles/style_order.css" media="all">
    <title>Tiệm bánh</title>
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
                <!-- Đơn hàng -->
                <div class="container">
                    <div class="order-wrapper">
                        <h5>Đơn hàng của tôi</h5>
                        <div class="table-wrapper">
                            <table>
                                <tr>
                                    <th>Mã đơn hàng</th>
                                    <th>Ngày mua</th>
                                    <th>Sản phẩm</th>
                                    <th>Tổng tiền</th>
                                    <th>Trạng thái</th>
                                    <th>Nhân viên</th>
                                </tr>
                                <?php
                                load_order();
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
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