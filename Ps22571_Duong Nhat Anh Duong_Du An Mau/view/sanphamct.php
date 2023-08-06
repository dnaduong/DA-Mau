<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <?php extract($onesp); ?>
            <div class="boxtitle"><strong><?= $ten_sanpham ?></strong></div>
            <div class="row boxcontent">
                <?php
                $img = $img_path . $img;
                echo '<div class="row mb spct"><img src="' . $img . '"></div>';
                echo $mota;
                ?>

            </div>
        </div>
        
    </div>
    <div class="boxphai">
        <?php
        include 'boxright.php';
        ?>
    </div>
</div>