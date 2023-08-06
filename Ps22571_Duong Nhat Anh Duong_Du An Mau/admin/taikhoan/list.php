<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH TÀI KHOẢN</h1>
    </div>
    <div class="row frmcontent">
        <form action="#" method="POST">

            <div class="row mb10 frmdsloai">
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ KHÁCH HÀNG</th>
                        <th>TÊN ĐĂNG NHẬP</th>
                        <th>PASSWORD</th>
                        <th>EMAIL</th>
                        <th>ĐỊA CHỈ</th>
                        <th>ĐIỆN THOẠI</th>
                        <th>VAI TRÒ</th>
                        <th></th>
                    </tr>
                    <?php
                    foreach ($listtaikhoan as $taikhoan) {
                        extract($taikhoan);
                        $suatk = "indexadmin.php?act=suatk&id=" . $id_khach;
                        $xoatk = "indexadmin.php?act=xoatk&id=" . $id_khach;
                        echo '<tr>
                        <td><input type="checkbox" name=""></td>
                        <td>' . $id_khach . '</td>
                        <td>' . $username . '</td>
                        <td>' . $password . '</td>
                        <td>' . $email . '</td>
                        <td>' . $diachi . '</td>
                        <td>' . $phone . '</td>
                        <td>' . $vaitro . '</td>
                        <td><a href="' . $suatk . '"><input type="button" value="Sửa"></a><a href="' . $xoatk . '"><input type="button" value="Xóa"></a></td>
                    </tr>';
                    }
                    ?>
                </table>
            </div>
            <div class="row mb10">
                <input type="button" value="Chọn tất cả">
                <input type="button" value="Bỏ chọn tất cả">
                <input type="button" value="Xóa các mục đã chọn">
                <a href="indexadmin.php?act=adddm"><input type="button" value="Nhập thêm"></a>
            </div>
        </form>
    </div>
</div>