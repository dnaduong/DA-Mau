<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../upload/" . $img;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='80'>";
} else {
    $hinh = "Không có ảnh";
}
?>
<div class="row">
    <div class="row frmtitle">
        <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row frmcontent">
        <form action="indexadmin.php?act=updatesp" method="POST" enctype="multipart/form-data">
            <div class="row mb10">
                <select name="iddm">
                    <option value="0" selected>Tất cả</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        if ($id_danhmuc == $id) {
                            $s = "selected";
                        } else {
                            $s = "";
                        }
                        echo '<option value="' . $id . '" ' . $s . '>' . $ten_danhmuc . '</option>';
                    }
                    ?>

                </select>
            </div>
            <div class="row mb10">
                Tên sản phẩm <br>
                <input type="text" name="tensp" value="<?= $ten_sanpham ?>">
            </div>
            <div class="row mb10">
                Giá sản phẩm <br>
                <input type="text" name="giasp" value="<?= $gia_sanpham ?>">
            </div>
            <div class="row mb10">
                Ảnh sản phẩm <br>
                <input type="file" name="anhsp">
                <?= $hinh ?>
            </div>
            <div class="row mb10">
                Mô tả sản phẩm <br>
                <textarea name="mota" rows="10" cols="30"><?= $mota ?></textarea>
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="<?= $id_sanpham ?>">
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="indexadmin.php?act=listsp"><input type="button" value="Danh sách"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) {
                echo $thongbao;
            }
            ?>
        </form>
    </div>
</div>
</div>