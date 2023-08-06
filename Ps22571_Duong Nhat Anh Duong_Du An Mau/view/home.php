<div class="row mb">
    <div class="boxtrai mr">
        <div class="row">
            <div class="banner">
                <!-- Slideshow container -->
                <div class="slideshow-container">
                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="view/img/banner/banner 1.jpg" style="width:100%">
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="view/img/banner/banner 2.jpg" style="width:100%">
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="view/img/banner/banner 3.jpg" style="width:100%">
                    </div>
                </div>
                <br>
            </div>
            
            <br>
        </div>
        <div class="row">
            <?php
            $i = 0;
            foreach ($spnew as $sp) {
                extract($sp);
                $linksp = "index.php?act=sanphamct&idsp=" . $id_sanpham;
                $hinh = $img_path . $img;
                if (($i == 2) || ($i == 5) || ($i == 8) || ($i == 11)) {
                    $mr = "";
                } else {
                    $mr = "mr";
                }
                echo ' <div class="boxsp ' . $mr . '">
                            <div class="row img"><a href="' . $linksp . '"><img src="' . $hinh . '" alt=""></a></div>
                            <p>$' . $gia_sanpham . '</p>
                            <a href="' . $linksp . '">' . $ten_sanpham . '</a>
                                <div class="row btnaddtocart">
                               <form action="index.php?act=addtocart" method="POST">
                                        <input type="hidden" name="id" value="' . $id_sanpham . '">
                                        <input type="hidden" name="name" value="' . $ten_sanpham . '">
                                        <input type="hidden" name="img" value="' . $img . '">
                                        <input type="hidden" name="price" value="' . $gia_sanpham . '">
                                        <input type="submit" name="addtocart" value="Thêm vào giỏ hàng"> 
                                </form>
                            </div>
                        </div>';
                $i += 1;
            }
            ?>
        </div>
    </div>
    <div class="boxphai">
        <?php
        include 'boxright.php';
        ?>
    </div>
</div>