<div class="row">
    <div class="row frmtitle">
        <h1>THÊM MỚI SẢN PHẨM</h1>
    </div>
    <div class="row frmcontent">
        <form action="indexadmin.php?act=addsp" method="POST" enctype="multipart/form-data">
            <div class="row mb10">
                Danh mục <br>
                <select name="iddm">
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo '<option value="'.$id.'">'.$ten_danhmuc.'</option>';
                    }
                    ?>

                </select>

            </div>
            <div class="row mb10">
                Tên sản phẩm <br>
                <input type="text" name="tensp">
            </div>
            <div class="row mb10">
                Giá sản phẩm <br>
                <input type="text" name="giasp">
            </div>
            <div class="row mb10">
                Ảnh sản phẩm <br>
                <input type="file" name="anhsp">
            </div>
            <div class="row mb10">
                Mô tả sản phẩm <br>
                <textarea name="mota" rows="10" cols="30"></textarea>
            </div>
            <div class="row mb10">
                <input type="submit" name="themmoi" value="Thêm mới">
                <input type="reset" value="Nhập lại">
                <a href="indexadmin.php?act=listsp"><input type="button" value="Danh sách"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != ""))
                echo $thongbao;
            ?>
        </form>
    </div>
</div>
</div>