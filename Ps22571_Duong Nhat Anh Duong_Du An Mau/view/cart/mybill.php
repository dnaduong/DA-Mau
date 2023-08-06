<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">

            <div class="boxtitle">ĐƠN HÀNG CỦA BẠN</div>
            <div class="row boxcontent cart">
                <table>
                    <tr>
                        <th>Mã đơn hàng</th>
                        <th>Ngày đặt hàng</th>
                        <th>Số lượng</th>
                        <th>Tổng giá trị</th>
                        <th>Tình trạng đơn hàng</th>
                    </tr>
                    <?php
                    if(is_array($listbill)){
                        foreach ($listbill as $bill) {
                            extract($bill);
                            $ttdh=get_ttdh($bill['bill_status']);
                            $countsp= loadAll_cart_count($bill['id']);
                            echo '<tr>
                                    <td>BAC-'.$bill['id'].'</td>
                                    <td>'.$bill['ngaydathang'].'</td>
                                    <td>'.$countsp.'</td>
                                    <td>$'.$bill['total'].'</td>
                                    <td>'.$ttdh.'</td>
                                </tr>';
                        }
                        
                    }
                    ?>
                    
                </table>

            </div>


        </div>

    </div>
    <div class="boxphai">
        <?php
        include 'view/boxright.php';
        ?>
    </div>
</div>