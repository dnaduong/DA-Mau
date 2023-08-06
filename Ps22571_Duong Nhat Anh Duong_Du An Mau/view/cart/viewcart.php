<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">

            <div class="boxtitle">GIỎ HÀNG</div>
            <div class="row boxcontent cart">
                <table>
                    
                    <?php
                    viewcart(1);
                    ?>
<!--                    <tr>
                        <th></th>
                        <th>Sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Thao tác</th>
                    </tr>-->
                </table>

            </div>


        </div>
        <div class="row mb bill">
            <a href="index.php?act=bill"><input type="button" value="TIẾP TỤC ĐẶT HÀNG" ></a><a href="index.php?act=delcart"><input type="button" value="XÓA GIỎ HÀNG"></a>
        </div>

    </div>
    <div class="boxphai">
        <?php
        include 'view/boxright.php';
        ?>
    </div>
</div>