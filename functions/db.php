<?php
    $con = mysqli_connect("localhost","root","","quanly");
    
    if (mysqli_connect_errno())
    {
        echo "Ket noi bi loi: ".mysqli_connect_error();
    }
    
    mysqli_query($con, "SET NAMES 'utf8' ");

?>
