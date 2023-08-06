<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">

            <div class="boxtitle">THÔNG TIN TÀI KHOẢN</div>
            <div class="row boxcontent formtaikhoan">
                <?php
                if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                    extract($_SESSION['user']);
                }
                ?>
                <form action="index.php?act=edit_taikhoan" method="POST">
                    <div class="row mb10">
                        Email
                        <input type="email" name="email" value="<?= $email ?>">
                    </div>
                    <div class="row mb10">
                        Tên đăng nhập
                        <input type="text" name="user" value="<?= $username ?>">
                    </div>
                    <div class="row mb10">
                        Mật khẩu
                        <input type="password" name="pass" value="<?= $password ?>">
                    </div>
                    <div class="row mb10">
                        Địa chỉ
                        <input type="text" name="diachi" value="<?= $diachi ?>">
                    </div>
                    <div class="row mb10">
                        Điện thoại
                        <input type="text" name="phone" value="<?= $phone ?>">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?= $id_khach ?>">
                        <input type="submit" name="capnhat" value="Cập nhật"> <input type="reset" value="Nhập lại">
                    </div>
                </form>
                <h2 class="thongbao">
                    <?php
                    if (isset($thongbao) && ($thongbao != "")) {
                        echo $thongbao;
                    }
                    ?>
                </h2>
            </div>
        </div>

    </div>
    <div class="boxphai">
        <?php
        include 'view/boxright.php';
        ?>
    </div>
</div>