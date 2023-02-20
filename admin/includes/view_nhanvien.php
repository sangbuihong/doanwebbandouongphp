<div class="view_product_box">

    <h2>Danh sách admin</h2>
    <div class="border_bottom"></div>

    <form action="" method="post" enctype="multipart/form-data">

        <div class="search_bar">
            <input type="text" id="search" placeholder="Type to search..." />
        </div>

        <table width="100%">
            <thead>
                <tr>
                    <th class="text-center">Mã nhân viên</th>
                    <th>Họ và tên</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                    <th>Chức vụ</th>
                    <th>Delete</th>

                </tr>
            </thead>

            <?php
            $all_users = mysqli_query($con, "select * from nhanvien order by MSNV DESC ");


            while ($row = mysqli_fetch_array($all_users)) {
            ?>

            <tbody>
                <tr>
                    <td class="text-center"><?php echo $row['MSNV']; ?></td>
                    <td><?php echo $row['HoTenNV']; ?></td>
                    <td><?php echo $row['DiaChi']; ?></td>
                    <td><?php echo $row['SoDienThoai']; ?></td>
                    <td><?php echo $row['ChucVu'] ?></td>
                    <td><a class="btn btn-danger btn-submit btn-sm"
                            href="index.php?action=view_nhanvien&delete_dn&delete_nh=<?php echo $row['MSNV']; ?>">Xóa</a></td>
                    <td><a class="btn btn-primary btn-submit btn-sm"
                            href="index.php?action=edit_nhanvien&nh_id=<?php echo $row['MSNV']; ?>">Sửa</a></td>
                </tr>
            </tbody>
            <?php
            } // End while loop 
            ?>
        </table>

    </form>

</div><!-- /.view_product_box -->

<?php
// Delete User Account

if (isset($_GET['delete_dn'])&isset($_GET['delete_nh'])) {
    $delete_userdn = mysqli_query($con, "delete from NHANVIENDANGNHAP where MSNV='$_GET[delete_dn]' ");
    $delete_user = mysqli_query($con, "delete from NHANVIEN where MSNV='$_GET[delete_nh]' ");
    
    if ($delete_user & $delete_userdn) {
        echo "<script>alert('Tài khoản được xóa thành công!')</script>";

        echo "<script>window.open('index.php?action=view_nhanvien','_self')</script>";
    }
}

?>