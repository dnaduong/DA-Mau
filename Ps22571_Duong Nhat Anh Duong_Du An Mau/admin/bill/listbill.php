<div class="row">
    <div class="row frmtitle mb">
        <h1>DANH SÁCH ĐƠN HÀNG</h1>
    </div>
    <div class="row mb10 frmdsloai ">

        <div class="row frmcontent">

            <table>
                <tr>
                    <th></th>
                    <th>MÃ ĐƠN HÀNG</th>
                    <th>KHÁCH HÀNG</th>
                    <th>SỐ LƯỢNG</th>
                    <th>GIÁ TRỊ ĐƠN HÀNG</th>
                    <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                    <th>NGÀY ĐẶT HÀNG</th>
                    <th>THAO TÁC</th>
                </tr>
                <?php
                foreach ($listbill as $bill) {
                    extract($bill);
                    $kh = $bill["bill_name"] . '<br>' . $bill["bill_email"] . '<br>' . $bill["bill_address"] . '<br>' . $bill["bill_phone"];
                    $countsp = loadAll_cart_count($bill['id']);
                    $ttdh = get_ttdh($bill['bill_status']);
                    echo '<tr>
                        <td><input type="checkbox" name=""></td>
                        <td>DNAD-' . $bill['id'] . '</td>
                        <td>' . $kh . '</td>
                        <td>' . $countsp . '</td>
                        <td>$' . $bill['total'] . '</td>
                        <td>' . $ttdh . '</td>
                        <td>' . $bill['ngaydathang'] . '</td>
                        <td><a href="#"><input type="button" value="Sửa"></a>
                            <a href="#"><input type="button" value="Xóa"></a></td>
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

    </div>
</div>