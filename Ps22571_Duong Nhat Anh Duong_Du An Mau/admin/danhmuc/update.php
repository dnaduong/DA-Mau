<?php
if (is_array($dm)) {
    extract($dm);
}
?>
<div class="row">
    <div class="row frmtitle">
        <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row frmcontent">
        <form action="indexadmin.php?act=updatedm" method="POST">
            <div class="row mb10">
                Mã loại <br>
                <input type="text" name="maloai" disabled placeholder="auto number">
            </div>
            <div class="row mb10">
                Tên loại <br>
                <input type="text" name="tenloai" value="<?php if (isset($ten_danhmuc) && ($ten_danhmuc != "")) echo $ten_danhmuc; ?>">
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>">
                <input type="submit" name="capnhat" value="Cập nhật">
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