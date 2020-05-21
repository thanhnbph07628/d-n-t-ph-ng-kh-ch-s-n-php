<?php require_once("./mvc/view/fontend/include/header.php") ?>
<!--================Header Area =================-->

<!--================Banner Area =================-->
<section class="banner_area">
    <div class="booking_table d_flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="banner_content text-center">
                <h5>XA RỜI CUỘC SỐNG ĐƠN ĐIỆU</h5>
                <h2>Thư giãn tâm trí của bạn</h2>
                <p>Chúng tôi luôn luôn đem lại giá trị đích thực <br>bằng sự chất lượng và sự tin tưởng.</p>
                <a href="#" class="btn theme_btn button_hover">Bắt đầu nào</a>
            </div>
        </div>
    </div>
    <div class="hotel_booking_area position">
        <div class="container">
            <div class="hotel_booking_table">
                <div class="col-md-3">
                    <h2>Đặt phòng<br> Của bạn</h2>
                </div>
                <div class="col-md-9">
                    <?php require_once("./mvc/view/fontend/include/search.php") ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Banner Area =================-->

<!--================ Accomodation Area  =================-->
<section class="accomodation_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">Khách sạn đề xuất</h2>
            <p>Tất cả chúng ta đều sống trong một thời đại thuộc về giới trẻ. Cuộc sống đang trở nên cực kỳ nhanh chóng, </p>
        </div>
        <div class="row mb_30">
            <?php

            foreach ($data as $key => $value) {
                $showDataImg = explode(',', trim($value["Images"]));
                ?>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">

                            <img width="350px" height="270px" src="./mvc/Webroot/image/img_hotel/<?php echo $showDataImg[0] ?>" alt="">
                            <a href="index.php?controller=fontend&action=chitietkhachsan&id=<?php echo $value["HotelID"] ?>" class="btn theme_btn button_hover">Đặt ngay</a>
                        </div>
                        <a href="#">
                            <h4 class="sec_h4"><?php echo $value["NameHotel"] ?></h4>
                        </a>
                    </div>
                </div>
            <?php
            }
            ?>

            <!-- <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="./mvc/Webroot/image/room2.jpg" alt="">
                        <a href="#" class="btn theme_btn button_hover">Đặt ngay</a>
                    </div>
                    <a href="#">
                        <h4 class="sec_h4">Khách Sạn INNSiDE By Melia Saigon Central</h4>
                    </a>
                    <h5>1.100.000 đ<small>/đêm</small></h5>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="./mvc/Webroot/image/room3.jpg" alt="">
                        <a href="#" class="btn theme_btn button_hover">Đặt ngay</a>
                    </div>
                    <a href="#">
                        <h4 class="sec_h4">Khách Sạn INNSiDE By Melia Saigon Central</h4>
                    </a>
                    <h5>1.100.000 đ<small>/đêm</small></h5>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="./mvc/Webroot/image/room4.jpg" alt="">
                        <a href="#" class="btn theme_btn button_hover">Đặt ngay</a>
                    </div>
                    <a href="#">
                        <h4 class="sec_h4">Khách Sạn INNSiDE By Melia Saigon Central</h4>
                    </a>
                    <h5>1.100.000 đ<small>/đêm</small></h5>
                </div>
            </div> -->
        </div>
    </div>
</section>
<!--================ Accomodation Area  =================-->

<section class="accomodation_area section_gap" style="margin-top: -150px;">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">Khách sạn mới</h2>
            <p>Tất cả chúng ta đều sống trong một thời đại thuộc về giới trẻ. Cuộc sống đang trở nên cực kỳ nhanh chóng, </p>
        </div>
        <div class="row mb_30">
            <?php

            foreach ($dataNew as $key => $value) {
                $showDataImg = explode(',', trim($value["Images"]));
                ?>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">

                            <img width="350px" height="270px" src="./mvc/Webroot/image/img_hotel/<?php echo $showDataImg[0] ?>" alt="">
                            <a href="index.php?controller=fontend&action=chitietkhachsan&id=<?php echo $value["HotelID"] ?>" class="btn theme_btn button_hover">Đặt ngay</a>
                        </div>
                        <a href="#">
                            <h4 class="sec_h4"><?php echo $value["NameHotel"] ?></h4>
                        </a>
                    </div>
                </div>
            <?php
            }
            ?>
            <!-- <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="./mvc/Webroot/image/room2.jpg" alt="">
                        <a href="#" class="btn theme_btn button_hover">Đặt ngay</a>
                    </div>
                    <a href="#">
                        <h4 class="sec_h4">Khách Sạn INNSiDE By Melia Saigon Central</h4>
                    </a>
                    <h5>1.100.000 đ<small>/đêm</small></h5>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="./mvc/Webroot/image/room3.jpg" alt="">
                        <a href="#" class="btn theme_btn button_hover">Đặt ngay</a>
                    </div>
                    <a href="#">
                        <h4 class="sec_h4">Khách Sạn INNSiDE By Melia Saigon Central</h4>
                    </a>
                    <h5>1.100.000 đ<small>/đêm</small></h5>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img src="./mvc/Webroot/image/room4.jpg" alt="">
                        <a href="#" class="btn theme_btn button_hover">Đặt ngay</a>
                    </div>
                    <a href="#">
                        <h4 class="sec_h4">Khách Sạn INNSiDE By Melia Saigon Central</h4>
                    </a>
                    <h5>1.100.000 đ<small>/đêm</small></h5>
                </div>
            </div> -->
        </div>
    </div>
</section>
<!--================ Facilities Area  =================-->
<section class="facilities_area section_gap">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
    </div>
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_w">Dịch vụ</h2>
            <p>Who are in extremely love with eco friendly system.</p>
        </div>
        <div class="row mb_30">
            <?php
            foreach ($dataService as $key => $value) {
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><img width="30px" src="./mvc/Webroot/image/hotel-icon.png" alt="" style="margin-right: 10px"><?php echo $value["NameService"] ?></h4>
                        <p><?php echo $value["Detail"] ?></p>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
    </div>
</section>
<!--================ Facilities Area  =================-->






<!--================ Latest Blog Area  =================-->
<section class="latest_blog_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">Tin tức</h2>
            <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from </p>
        </div>
        <div class="row mb_30">
            <?php
            foreach ($dataNews as $key => $value) {
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single-recent-blog-post">
                        <div class="thumb" style="width:360px;height:200px">
                            <img  class="img-fluid" src="./mvc/Webroot/image/img_news/<?php echo $value["Images"] ?>" alt="post">
                        </div>
                        <div class="details">
                            <div class="tags">
                                <a href="#" class="button_hover tag_btn">Travel</a>
                                <a href="#" class="button_hover tag_btn">Life Style</a>
                            </div>
                            <a href="index.php?controller=fontend&action=chitiettin&id=<?php echo $value["NewID"] ?>">
                                <h4 style="height:71px" class="sec_h4"><?php echo $value["Title"] ?></h4>
                            </a>
                            <div style="width:330px;height: 48px;overflow: hidden"> <?php echo $value["Content"] ?> </div>
                            <h5 class="date title_color"><?php echo $value["CreateAt"] ?></h5>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
    </div>
</section>
<!--================ Recent Area  =================-->

<!--================ start footer Area  =================-->
<?php require_once("./mvc/view/fontend/include/footer.php") ?>