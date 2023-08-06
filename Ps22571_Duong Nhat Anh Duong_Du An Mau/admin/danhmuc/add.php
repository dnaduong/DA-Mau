<div class="row">
    <div class="row frmtitle">
        <h1>THÊM MƠI LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row frmcontent">
        <form action="indexadmin.php?act=adddm" method="POST">
            <div class="row mb10">
                Mã loại <br>
                <input type="text" name="maloai" disabled placeholder="auto number">
            </div>
            <div class="row mb10">
                Tên loại <br>
                <input type="text" name="tenloai">
            </div>
            <div class="row mb10">
                <input type="submit" name="themmoi" value="Thêm mới">
                <input type="reset" value="Nhập lại">
                <a href="indexadmin.php?act=listdm"><input type="button" value="Danh sách"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != ""))
                echo $thongbao;
            ?>
        </form>
    </div>
</div>
</div>