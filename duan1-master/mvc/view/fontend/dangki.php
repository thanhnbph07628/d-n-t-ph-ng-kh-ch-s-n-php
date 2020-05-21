<?php require_once("./mvc/view/fontend/include/header.php") ?>
<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">Đăng kí tài khoản</h2>
            <ol class="breadcrumb">
                <li><a href="index.html">Trang chủ</a></li>
                <li class="active">Đăng kí</li>
            </ol>
        </div>
    </div>
</section>
<div class="container chotphong">
    <div class="row">
        <div class="col-md-7 info-people" style="background-color: #f3f3f3; margin: 0 auto">
            <h2 style="color:yellowgreen; margin-bottom: 20px">Thông tin đăng kí</h2>
            <form method="POST" enctype="multipart/form-data">
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
                        <input type="text" name="user" class="form-control" id="inputPassword" placeholder="tài khoản" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Mật khẩu</label>
                    <div class="col-sm-9">
                        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="mật khẩu" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Nhập lại mật khẩu</label>
                    <div class="col-sm-9">
                        <input type="password" name="rp_password" class="form-control" id="inputPassword" placeholder="nhập lại mật khẩu" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Họ tên</label>
                    <div class="col-sm-9">
                        <input type="text" name="name" class="form-control" id="inputPassword" placeholder="họ tên" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Ảnh đại diện</label>
                    <div class="col-sm-9">
                        <input type="file" name="avatar" class="form-control" id="inputPassword" placeholder="Ảnh đại diện">
                    </div>
                </div>
                <fieldset class="form-group">
                    <div class="row">
                        <label class="col-form-label col-sm-4">Giới tính</label>
                        <div class="col-sm-8">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sex" id="gridRadios1" value="Nam" checked>
                                <label class="form-check-label col-sm-3" for="gridRadios1">
                                    Nam
                                </label>
                                <input class="form-check-input" type="radio" name="sex" id="gridRadios2" value="Nữ">
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
                        <input type="text" name="phone" class="form-control" id="inputPassword" placeholder="di đông" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" name="email" class="form-control" id="inputPassword" placeholder="email" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Địa chỉ</label>
                    <div class="col-sm-9">
                        <input type="text" name="address" class="form-control" id="inputPassword" placeholder="địa chỉ" required>
                    </div>
                </div>
                <div class="dangki">
                    <input name="luu" style="float: right; margin:20px 0px;cursor: pointer;" type="submit" class="btn btn-success" value="Đăng kí">
                </div>
            </form>
            <div style="clear:both" class="clear"></div>

        </div>
    </div>
</div>
<?php require_once("./mvc/view/fontend/include/footer.php") ?>