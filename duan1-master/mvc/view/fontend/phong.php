<?php require_once("./mvc/view/fontend/include/header.php") ?>
        <!--================Header Area =================-->
        
        <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Khách sạn</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Trang chủ</a></li>
                        <li class="active">Khách sạn</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->
        
        <!--================ Accomodation Area  =================-->
  
        <!--================ Accomodation Area  =================-->
        <!--================Booking Tabel Area =================-->
        <!--================Booking Tabel Area  =================-->
        <!--================ Accomodation Area  =================-->
        <section class="accomodation_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">Khách sạn theo khu vực</h2>
            <p>Tất cả chúng ta đều sống trong một thời đại thuộc về giới trẻ. Cuộc sống đang trở nên cực kỳ nhanh chóng, </p>
        </div>
        <div class="row mb_30">
            <?php
            foreach ($data as $key => $value) {
                ?>
                  <div style="height:300px; background-color: " class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        <img width="266px" height="185px"src="./mvc/Webroot/image/<?php echo $value["Images"] ?>" alt="">
                    </div>
                    <a href="index.php?controller=fontend&action=danhsachkhachsan&id=<?php echo $value["CityID"] ?>">
                        <h4 style="color: #3598dc;padding:20px;font-size: 18px" class="sec_h4"><?php echo $value["NameCity"] ?></h4>
                    </a>
                  
                </div>
            </div>
                <?php
            }
            ?>
          
        </div>
    </div>
</section>
        <!--================ Accomodation Area  =================-->
        <!--================ start footer Area  =================-->	
        <?php require_once("./mvc/view/fontend/include/footer.php") ?>