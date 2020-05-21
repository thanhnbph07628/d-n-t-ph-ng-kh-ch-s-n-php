<?php require_once("./mvc/view/fontend/include/header.php") ?>
<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">Danh sách khách sạn</h2>
            <ol class="breadcrumb">
                <li class="active"><?php echo $nameCity[0]["NameCity"] ?></li>
            </ol>
        </div>
    </div>
</section>
<div class="container" style="margin-top: 40px; margin-bottom: 40px">
<div class="row style-box">
        <div class="col-md-9 " style="margin: 0px auto">
        <?php require_once("./mvc/view/fontend/include/search.php") ?>
        </div>
    </div>
    <?php
    foreach ($data as $key => $value) {
        $showDataImg = explode(',', trim($value["Images"]));
        ?>
        <div class="row khachsan">
            <div class="col-md-3">
                <img width="282" height="200" src="./mvc/Webroot/image/img_hotel/<?php echo $showDataImg["0"] ?>" alt="">
            </div>
            <div class="col-md-6 thongtin">
                <div class="nameks"><?php echo $value["NameHotel"] ?></div>
                <div class="rate">
                    <p class="name">
                        <span class="stars">
                            <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> </span>
                        <i class="fa fa-heart heart"></i>
                        <span class="review-score">9.5</span>
                        <span class="review-text">Tuyệt vời</span>
                        </span>
                    </p>
                </div>
                <div class="address">
                    Địa chỉ : <strong> <?php echo $value["Address"] ?></strong>
                </div>
                <div class="tienich">
                    <div class="tiennghi">
                        <strong>Thông tin tiện nghi</strong>
                        <div class="row" style="width:400px; margin: 20px; color: #111921">
                            <?php

                                foreach ($value[11] as $key => $service) {
                                    ?>
                                <div class="col-md-6">

                                <i class='far fa-check-square' style='font-size:18px;color:blue;margin-right:5px;'></i><?php echo $service["NameService"] ?>

                                </div>
                            <?php
                                }

                                ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 datphong">
                <div class="price">
                    <p>Giá cả hợp lý</p>
                </div>
                <a href="index.php?controller=fontend&action=chitietkhachsan&id=<?php echo $value["HotelID"] ?>" class="linkdatphong"><button type="button" class="btn btn-success">Đặt phòng</button></a>
                <div><span>Cần tư vấn? Xin gọi</span>
                    <h3><?php echo $value["Phone"] ?></h3>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>
<?php require_once("./mvc/view/fontend/include/footer.php") ?>