<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH LOẠI HÀNG</h1>
    </div>
    <div class="row frmcontent">
        <form action="#" method="POST">

            <div class="row mb10 frmdsloai">
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ LOẠI</th>
                        <th>TÊN LOẠI</th>
                        <th></th>
                    </tr>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        $suadm = "indexadmin.php?act=suadm&id=" . $id;
                        $xoadm = "indexadmin.php?act=xoadm&id=" . $id;
                        echo '<tr>
                        <td><input type="checkbox" name=""></td>
                        <td>' . $id . '</td>
                        <td>' . $ten_danhmuc . '</td>
                        <td><a href="' . $suadm . '"><input type="button" value="Sửa"></a><a href="' . $xoadm . '"><input type="button" value="Xóa"></a></td>
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