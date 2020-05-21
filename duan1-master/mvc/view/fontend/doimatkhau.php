<?php require_once("./mvc/view/fontend/include/header.php") ?>
<!--================Header Area =================-->

<!--================Breadcrumb Area =================-->
<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">Đổi mật khẩu</h2>
            <ol class="breadcrumb">
                <li><a href="index.html">Trang chủ</a></li>
                <li class="active">Đổi mật khẩu</li>
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
<style>
    .can_thongtin_tk {
        width: 980px;
        background-color: #fff;
        padding: 20px;
        min-height: 550px;
        box-shadow: 0 1px 35px 0 rgba(0, 0, 0, .13);
    }

    .can_thongtin_tk form {
        width: 700px;
        margin: 0 auto;
        margin-top: 40px
    }
</style>
<div class="container">
    <div class="container-fluid can_thongtin_tk ">
        <div class="title_mk">
            <h4>Đổi mật khẩu</h4>
            <p>Để bảo mật tài khoản, vui lòng không chia sẻ mật khẩu cho người khác</p>
        </div>
        <hr>
        <form method="post">
            <?php
            if (isset($_SESSION["thongbao"])) {
                echo  $_SESSION["thongbao"];
               unset($_SESSION["thongbao"]);
            }
            ?>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Tài khoản</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputPassword" readonly="readonly" name="taikhoan" placeholder="" required="" value="<?php echo $_SESSION["taikhoan"] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Mật khẩu </label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" name="pass" id="inputPassword" placeholder="" required="">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Mật khẩu mới</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" name="new_pass" id="inputPassword" placeholder="" required="">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Xác nhận mật khẩu</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" name="repeat_pass" id="inputPassword" placeholder="" required="">
                </div>
            </div>
            <button type="submit" class="btn btn-danger" name="xacnhan" style="float: right; cursor: pointer">Xác nhận</button>
        </form>
        <div class="clear"></div>
    </div>
</div>
<!--================ Accomodation Area  =================-->
<!--================ start footer Area  =================-->
<?php require_once("./mvc/view/fontend/include/footer.php") ?>