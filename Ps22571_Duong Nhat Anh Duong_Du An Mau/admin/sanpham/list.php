<div class="row">
    <div class="row frmtitle mb">
        <h1>DANH SÁCH LOẠI HÀNG</h1>
    </div>
    <form action="#" method="POST">

        <div class="row mb10 frmdsloai ">
            <form action="indexadmin.php?act=listsp" method="post">
                <input type="type" name="keyw">
                <select name="iddm">
                    <option value="0" selected>Tất cả</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo '<option value="' . $id . '">' . $ten_danhmuc . '</option>';
                    }
                    ?>

                </select>
                <input type="submit" name="listloc" value="Lọc">
            </form>
            <div class="row frmcontent">

                <table>
                    <tr>
                        <th></th>
                        <th>MÃ LOẠI</th>
                        <th>TÊN SẢN PHẨM</th>
                        <th>ẢNH</th>
                        <th>GIÁ</th>
                        <th>LƯỢT VIEW</th>
                        <th></th>
                    </tr>
                    <?php
                    foreach ($listsanpham as $sanpham) {
                        extract($sanpham);
                        $suasp = "indexadmin.php?act=suasp&id=" . $id_sanpham;
                        $xoasp = "indexadmin.php?act=xoasp&id=" . $id_sanpham;
                        $hinhpath = "../upload/" . $img;
                        if (is_file($hinhpath)) {
                            $hinh = "<img src='" . $hinhpath . "' height='80'>";
                        } else {
                            $hinh = "Không có ảnh";
                        }
                        echo '<tr>
                        <td><input type="checkbox" name=""></td>
                        <td>' . $id_danhmuc . '</td>
                        <td>' . $ten_sanpham . '</td>
                        <td>' . $hinh . '</td>
                        <td>' . $gia_sanpham . '</td>
                        <td>' . $view . '</td>
                        <td><a href="' . $suasp . '"><input type="button" value="Sửa"></a><a href="' . $xoasp . '"><input type="button" value="Xóa"></a></td>
                    </tr>';
                    }
                    ?>
                </table>
            </div>
            <div class="row mb10">
                <input type="button" value="Chọn tất cả">
                <input type="button" value="Bỏ chọn tất cả">
                <input type="button" value="Xóa các mục đã chọn">
                <a href="indexadmin.php?act=addsp"><input type="button" value="Nhập thêm"></a>
            </div>
    </form>
</div>
</div>