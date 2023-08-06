<div class="row mb footer">
    <footer>
        <div class="top-footer">
            <div class="title-newsletter">
                <h4><i class='far fa-envelope-open' style='font-size:24px'></i> Đăng kí nhận tin</h4>
            </div>
            <div class="form-newsletter">
                <form class="contact-form" method="post">
                    <input name="form_type" type="hidden" value="customer">
                    <input name="utf8" type="hidden" value="✓">
                    <div class="input-group">
                        <input required="" type="email" value="" placeholder="Nhập email của bạn"
                               name="contact[email]" aria-label="Email Address">
                        <button type="submit" class="custom-btn btn">Đăng ký</button>
                    </div>
                </form>
            </div>
            <div class="area-phone-contact">
                <p class="number-phone">
                    <span class="info">
                        <b><i class='fas fa-phone-square-alt' style='font-size:24px'></i> Hỗ trợ / Mua hàng:</b>
                        <a>
                        0939074125
                        </a>
                    </span>
                </p>
            </div>
        </div>
        <div class="main-footer sm--hide">
            <div class="footer-column-1">
                <h4 class="footer-title">
                    THÔNG TIN LIÊN HỆ
                </h4>
                <div class="footer-box">
                    <div class="icon-box">
                        <i class='fas fa-map-marker-alt' style='font-size:24px'></i>
                        <div class="icon-bottom">
                            <i class='fas fa-tty' style='font-size:24px'></i>
                            <i class='fas fa-location-arrow' style='font-size:24px'></i>
                        </div>
                    </div>
                    <div class="text-box">
                        Hệ thống cửa hàng:
                        <p>Store : Công viên Phần mềm Quang Trung, Quận 12</p>
                        <br>
                        
                        Sđt: 0939074125 <br>

                        Email: ADShop948@gmail.com
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="bottom-footer sm--hide" >
            <div class="footerbottom">
                <p>Copyright © 2021 <a> ADShop</a>. <a>Powered by
                        Dương Nhật ÁNh Dương-Ps22571</a></p>
            </div>
        </div>
    </footer>
</div>
</div>
<!-- JS slider code -->
<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1;
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 4000); // Change image every 4 seconds
    }

</script>
</body>

</html>