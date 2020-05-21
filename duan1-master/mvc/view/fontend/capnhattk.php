<?php require_once("./mvc/view/fontend/include/header.php") ?>
<!--================Header Area =================-->

<!--================Breadcrumb Area =================-->
<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">Cập nhật tài khoản</h2>
            <ol class="breadcrumb">
                <li><a href="index.html">Trang chủ</a></li>
                <li class="active">Cập nhật tài khoản</li>
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
        min-height: 700px;
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
            <h4>Hồ sơ của tôi</h4>
            <p>Quản lý thông tin hồ sơ thông tin cá nhân của bạn</p>
        </div>
        <hr>
        <form method="post" enctype="multipart/form-data">
            <?php
            if (isset($loi)) {
                echo '<div class="alert alert-danger">
                                <strong>Lỗi!</strong> ' . $loi . '.
                              </div>';
            }
            ?>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Tài khoản</label>
                <div class="col-sm-9">
                    <input type="" class="form-control" id="inputPassword" name="user" readonly="readonly" placeholder="" required="" value="<?php echo $_SESSION["taikhoan"] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Ảnh đại diện </label>
                <div class="col-sm-7">
                    <input type="file" class="form-control" id="inputPassword" name="avatar" placeholder="">
                </div>
                <img src="./mvc/Webroot/image/img_user/<?php echo $dataUser["Avatar"] ?>" alt="" width="100px">
            </div>

            <div class="form-group row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Họ và tên</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputPassword" name="name" placeholder="" required="" value="<?php echo $dataUser["Name"] ?>">
                </div>
            </div>
            <fieldset class="form-group">
                <div class="row">
                    <label class="col-form-label col-sm-4">Giới tính</label>
                    <div class="col-sm-8">
                        <div class="form-check">
                            <input <?php echo $dataUser["Sex"] == "Nam" ? "checked" : "" ?> class="form-check-input" type="radio" name="sex" id="gridRadios1" value="Nam">
                            <label class="form-check-label col-sm-3" for="gridRadios1">
                                Nam
                            </label>
                            <input <?php echo $dataUser["Sex"] == "Nữ" ? "checked" : "" ?> class="form-check-input" type="radio" name="sex" id="gridRadios2" value="Nữ">
                            <label class="form-check-label" for="gridRadios2">
                                Nữ
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Di động</label>
                <div class="col-sm-9">
                    <input type="text" name="phone" class="form-control" id="inputPassword" placeholder="di đông" required="" value="<?php echo $dataUser["Phone"] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="email" name="email" class="form-control" id="inputPassword" placeholder="email" required="" value="<?php echo $dataUser["Email"] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Địa chỉ</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputPassword" name="address" placeholder="" required="" value="<?php echo $dataUser["Address"] ?>">
                </div>
            </div>
            <button type="submit" class="btn btn-danger" name="capnhat" style="float: right;cursor: pointer">Cập nhật</button>
        </form>
        <div class="clear"></div>
    </div>
</div>
<!--================ Accomodation Area  =================-->
<!--================ start footer Area  =================-->
<?php require_once("./mvc/view/fontend/include/footer.php") ?>