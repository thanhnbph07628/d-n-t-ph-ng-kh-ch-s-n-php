<footer class="footer-area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6 class="footer_title">Vể chúng tôi</h6>
                    <p>ROYAL HOTEL luôn không ngừng đẩy mạnh hoạt động và phát triển, cả về sản phẩm, dịch vụ và đội ngũ, nhằm đáp ứng tốt nhất nhu cầu của khách hàng. </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6 class="footer_title">Liên kết nhanh</h6>
                    <div class="row">
                        <div class="col-4">
                            <ul class="list_style">
                                <li><a href="#">Trang chủ</a></li>
                                <li><a href="#">Khách sạn</a></li>
                                <li><a href="#">Liên hệ</a></li>
                                <li><a href="#">Giới thiệu</a></li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <ul class="list_style">
                                <li><a href="#">Đội ngũ</a></li>
                                <li><a href="#">Thông tin</a></li>
                                <li><a href="#">Tin tức</a></li>
                                <li><a href="#">Địa chỉ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6 class="footer_title">Kết nối</h6>
                    <p>Mang lại giá chị đích thực cho người sử dụng </p>
                    <div id="mc_embed_signup">
                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                            <div class="input-group d-flex flex-row">
                                <input name="EMAIL" placeholder="Thêm Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                <button class="btn sub-btn"><span class="lnr lnr-location"></span></button>
                            </div>
                            <div class="mt-10 info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget instafeed">
                    <h6 class="footer_title">Hình ảnh</h6>
                    <ul class="list_style instafeed d-flex flex-wrap">
                        <li><img src="./mvc/Webroot/image/instagram/Image-01.jpg" alt=""></li>
                        <li><img src="./mvc/Webroot/image/instagram/Image-02.jpg" alt=""></li>
                        <li><img src="./mvc/Webroot/image/instagram/Image-03.jpg" alt=""></li>
                        <li><img src="./mvc/Webroot/image/instagram/Image-04.jpg" alt=""></li>
                        <li><img src="./mvc/Webroot/image/instagram/Image-05.jpg" alt=""></li>
                        <li><img src="./mvc/Webroot/image/instagram/Image-06.jpg" alt=""></li>
                        <li><img src="./mvc/Webroot/image/instagram/Image-07.jpg" alt=""></li>
                        <li><img src="./mvc/Webroot/image/instagram/Image-08.jpg" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="border_line"></div>
        <div class="row footer-bottom d-flex justify-content-between align-items-center">
            <p class="col-lg-8 col-sm-12 footer-text m-0">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Bản quyền &copy;<script>
                    document.write(new Date().getFullYear());
                </script> Tất cả các quyền | Mẫu này được thực hiện với<i class="fa fa-heart-o" aria-hidden="true"></i> Bởi <a href="https://colorlib.com" target="_blank">Lê Xuân Quảng && Nguyễn Bá Thành</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            <div class="col-lg-4 col-sm-12 footer-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-dribbble"></i></a>
                <a href="#"><i class="fa fa-behance"></i></a>
            </div>
        </div>
    </div>
</footer>

<!--================ End footer Area  =================-->
<div class="modal" id="dangnhap">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" style="text-align: center">Đăng nhập</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <form action="index.php?controller=fontend&action=dangnhap" method="post" enctype="multipart/form-data">
                <div class="modal-body mx-3">
                    <div class="md-form mb-5 " style="margin-bottom: 1rem !important;">
                        <label data-error="wrong" data-success="right" for="orangeForm-name">Tài khoản</label>
                        <input type="text" id="orangeForm-name" class="form-control validate" name="taikhoan" required>
                    </div>
                    <div class="md-form mb-4">
                        <label data-error="wrong" data-success="right" for="orangeForm-pass">Mật khẩu</label>
                        <input type="password" id="orangeForm-pass" class="form-control validate" name="matkhau" required>
                    </div>
                    <span style="cursor: pointer">Quên mật khẩu</span>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <input type="submit" name="dangnhap" value="Đăng nhập" style="cursor: pointer; color:white" class="btn btn-warning" name="login">
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function thanhcong(thanhcong) {
        swal({
            title: thanhcong,
            text: "You clicked the button!",
            icon: "success",
        });
    }

    function thatbai(thongbao) {
        swal(thongbao, "Something went wrong!", "error")
    }
</script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="./mvc/Webroot/js/jquery-3.4.1.min.js"></script>
<script src="./mvc/Webroot/js/popper.js"></script>
<script src="./mvc/Webroot/js/bootstrap.min.js"></script>
<script src="./mvc/Webroot/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="./mvc/Webroot/js/jquery.ajaxchimp.min.js"></script>
<script src="./mvc/Webroot/js/mail-script.js"></script>
<script src="./mvc/Webroot/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
<script src="./mvc/Webroot/vendors/nice-select/js/jquery.nice-select.js"></script>
<script src="./mvc/Webroot/js/mail-script.js"></script>
<script src="./mvc/Webroot/js/stellar.js"></script>
<script src="./mvc/Webroot/vendors/lightbox/simpleLightbox.min.js"></script>
<script src="./mvc/Webroot/js/custom.js"></script>
<script src="./mvc/Webroot/js/jssor.slider-28.0.0.min.js" type="text/javascript"></script>
<script type="text/javascript" src="./mvc/Webroot/js/mdb.min.js"></script>
<script>
    $("#city").change(function() {
        var CityID = $("#city").val();
        console.log(CityID);
        $.ajax({
            type: "GET",
            url: "index.php?controller=fontend&action=laydulieuHotel",
            data: 'idht=' + CityID,
            success: function(data) {
                $("#namehotel").html(data);
            }
        });

    })
</script>

</body>

</html>