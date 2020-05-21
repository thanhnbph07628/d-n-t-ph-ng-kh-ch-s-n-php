<?php require_once("./mvc/view/fontend/include/header.php") ?>
<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">Đặt phòng</h2>
            <ol class="breadcrumb">
                <li class="active">Khách Sạn INNSiDE By Melia Saigon Central</li>
            </ol>
        </div>
    </div>
</section>
<div class="container chotphong">
    <div class="row">
        <div class="col-md-7 info-people" style="background-color: #f3f3f3">
            <h3>Thông tin liên hệ</h3>
            <form>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Ngày nhận phòng</label>
                    <div class="col-sm-9">
                        <div class='input-group date' id='datetimepicker11'>
                            <input type='text' class="form-control" placeholder="Ngày nhận phòng" />
                            <span class="input-group-addon">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Ngày trả phòng</label>
                    <div class="col-sm-9">
                        <div class='input-group date' id='datetimepicker1'>
                            <input type='text' class="form-control" placeholder="Ngày trả phòng" />
                            <span class="input-group-addon">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Số lượng phòng</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="inputPassword" placeholder="số lượng phòng">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Họ tên</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputPassword" placeholder="họ tên">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Di động</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputPassword" placeholder="di đông">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="inputPassword" placeholder="email">
                    </div>
                </div>
                <div class="form-group row ">
                    <label for="exampleFormControlTextarea1" class="col-sm-3 ">Ghi chú</label>
                    <div class="col-sm-9">
                        <textarea class="form-control  " id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
            </form>

        </div>
        <div class="col-md-5 info-people">
            <h3>Thông tin phòng</h3>
            <div class="row info-phong">
                <div class="col-md-5"><img width="190px" height="110px;" src="./mvc/Webroot/image/khachsan1.jpg" alt=""></div>
                <div class="col-md-7">
                    <div class="name-phong">Khách Sạn INNSiDE By Melia Saigon Central</div>
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
                </div>
            </div>
            <div class="row date-datphong">
                <div class="col-md-6">NGÀY NHẬN PHÒNG <br> 13 Thg11, 2019</div>
                <div class="col-md-6">NGÀY TRẢ PHÒNG <br> 15 Thg11, 2019</div>
            </div>
            <div class="row">
                <div class="col-md-12 loai-phong">
                    <p>2 phòng Innside Deluxe - Deal Hot Mùa Sale dành cho 2 người</p>
                </div>
            </div>
            <div class="gia-phong">
                <h3>Chi tiết giá phòng</h3>
                <div class="row">
                    <div class="col-md-6"><b>Loại phòng</b></div>
                    <div class="col-md-6"><b>Deluxe - Deal Hot Mùa Sale</b></div>
                </div>
                <div class="row">
                    <div class="col-md-6"><b>1 phòng x 1 đêm:</b></div>
                    <div class="col-md-6"><b>Giá phòng sẽ được báo qua điện thoại hoặc emai</b></div>
                </div>
                <div class="row">
                    <div class="col-md-6"><b>Loại phòng</b></div>
                    <div class="col-md-6"><b>Giá phòng sẽ được báo qua điện thoại hoặc email</b></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row end-dat-phong">
        <button class="btn btn-success">Đặt phòng</button>
    </div>
</div>
<?php require_once("./mvc/view/fontend/include/footer.php") ?>