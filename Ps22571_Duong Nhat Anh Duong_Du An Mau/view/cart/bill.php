<div class="row mb">
    <div class="boxtrai mr">
        <form action="index.php?act=billconfirm" method="POST">
            <div class="row mb">

                <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
                <div class="row boxcontent billform">
                    <table>
                        <?php
                        if (isset($_SESSION['user'])) {
                            $name = $_SESSION['user']['username'];
                            $diachi = $_SESSION['user']['diachi'];
                            $email = $_SESSION['user']['email'];
                            $phone = $_SESSION['user']['phone'];
                        } else {
                            $name = "";
                            $diachi = "";
                            $email = "";
                            $phone = "";
                        }
                        ?>
                        <tr>
                            <td>Người đặt hàng</td>
                            <td><input type="text" name="name" value="<?= $name ?>"></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><input type="text" name="diachi" value="<?= $diachi ?>"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email" value="<?= $email ?>"></td>
                        </tr>
                        <tr>
                            <td>Điện thoại</td>
                            <td><input type="text" name="phone" value="<?= $phone ?>"></td>
                        </tr>
                    </table>

                </div>


            </div>

            <div class="row mb ">
                <div class="boxtitle">THÔNG TIN GIỎ HÀNG</div>
                <div class="row boxcontent billgiohang">
                    <table>

                        <?php
                        viewcart(0);
                        ?>

                    </table>
                </div>
            </div>
            <div class="row mb ">
                <div class="boxtitle">PHƯƠNG THỨC THANH TOÁN</div>
                <div class="row boxcontent">
                    <table>
                        <tr>
                            <td><input type="radio" value="1" name="pttt" checked>Trả tiền khi nhận hàng</td>
                            <td><input type="radio" value="2" name="pttt">Chuyển khoản ngân hàng</td>
                            <td><input type="radio" value="3" name="pttt">Thanh toán onl</td>
                        </tr>

                    </table>
                </div>
            </div>
            <div class="row mb bill">
                <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang">
            </div>
        </form>
    </div>
    <div class="boxphai">
        <?php
        include 'view/boxright.php';
        ?>
    </div>
</div>