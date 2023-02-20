<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quan coffe</title>
</head>

<body>
    <div class="navigation-bar">
        <div class="logo">
            <a href="/webquanly/index.php"><img src="images/logos/logo.png" alt="Cake"></a>
        </div>
        <div class="name-cakes">
            <h3>COFFE SANG</h3>
        </div>
        <div class="user">
            <!-- dang nhap, dang xuat -->
            <div class="actionhotline">
                <?php
                if (!isset($_SESSION['user_id'])) {
                    echo "
                        <a href='login.php' data-toggle='tooltip'  
                        data-placement='bottom' title='đăng nhập'><i class='fas fa-sign-in-alt'></i></a>
                        ";
                } else {
                    echo "
                    <input type='checkbox' class='nav-input' name='' id='bnt-input'>
                            <label for='bnt-input' data-toggle='tooltip' data-placement='bottom' title='liên hệ'>
                                <i class='far fa-address-card'></i>
                            </label> 
                           
                            <label class='sub'>
                                <a href='customer.php?action=edit_profile'>Thông tin</a>
                                <hr>
                                <a href='customer.php?action=change_password'>Đổi mật khẩu</a>
                                <hr>
                                <a href='logout.php'>Đăng xuất</a>
                                <hr>
                            </label> 
                        ";
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>