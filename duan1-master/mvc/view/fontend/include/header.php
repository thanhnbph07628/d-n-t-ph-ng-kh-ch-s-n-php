<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="./mvc/Webroot/image/favicon.png" type="image/png">
    <title>Royal Hotel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./mvc/Webroot/css/bootstrap.css">
    <link rel="stylesheet" href="./mvc/Webroot/vendors/linericon/style.css">
    <link rel="stylesheet" href="./mvc/Webroot/css/font-awesome.min.css">
    <link rel="stylesheet" href="./mvc/Webroot/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="./mvc/Webroot/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="./mvc/Webroot/vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="./mvc/Webroot/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="./mvc/Webroot/css/sweetalert.css">
    <!-- <script src="./mvc/Webroot/js/sweetalert.js"></script> -->
    <script src=" https://unpkg.com/sweetalert/dist/sweetalert.min.js "> </script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <!-- main css -->
    <link rel="stylesheet" href="./mvc/Webroot/css/style.css">
    <link rel="stylesheet" href="./mvc/Webroot/css/responsive.css">
</head>

<body>
    <!--================Header Area =================-->
    <?php
    if (isset($_SESSION["ngaynhan"]) && isset($_SESSION["ngaytra"])) {
        $start = strtotime($_SESSION["ngaynhan"]);
        $end = strtotime($_SESSION["ngaytra"]);
        $_SESSION["songay"] = ceil(abs($end - $start) / 86400);
    }

    ?>
    <header class="header_area">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="index.php?controller=fontend&action=index"><img width="163px" src="./mvc/Webroot/image/<?php echo $infomation["Logo"] ?>" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php?controller=fontend&action=index">Trang chủ</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" href="index.php?controller=fontend&action=about">Thông tin</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="index.php?controller=fontend&action=phong">Khách sạn</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?controller=fontend&action=tintuc">Tin tức</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" href="index.php?controller=fontend&action=chitiettin">Chi tiết tin</a></li> -->
                        <li class="nav-item"><a class="nav-link  " href="index.php?controller=fontend&action=lienhe">Liên hệ</a></li>
                        <?php
                        if (isset($_SESSION["taikhoan"]) && $quyenUser["permission"] == 1) {
                            ?>
                            <li class="nav-item info_user"><a class="nav-link " href="">Xin chào : <?php echo $_SESSION["taikhoan"] ?></a>
                                <ul class="doimk">
                                    <a href="index.php?controller=fontend&action=doimatkhau">
                                        <li><i class='fas fa-layer-group' style="margin-right: 5px; color: #84462f"></i>Đổi mật khẩu</li>
                                    </a>
                                    <a href="index.php?controller=fontend&action=dondatphong">
                                        <li><i class='fas 	fas fa-calendar' style="margin-right: 5px;color: #84462f"></i> Đơn hàng</li>
                                    </a>
                                    <a href="index.php?controller=fontend&action=capnhattk">
                                        <li><i class='fas far fa-address-card' style="margin-right: 5px;color: #84462f"></i>Cập nhật tài khoản</li>
                                    </a>
                                </ul>
                            </li>

                            <li class="nav-item"><a class="nav-link" href="index.php?controller=fontend&action=dangxuat">Đăng Xuất</a></li>
                            <li class="nav-item"><a class="nav-link" href="http://localhost/duan/duan1-master/admin/">Quản Trị</a></li>
                        <?php
                        } else if (isset($_SESSION["taikhoan"]) && $quyenUser["permission"] == 0) {
                            ?>
                            <li class="nav-item info_user"><a class="nav-link" href="">Xin chào : <?php echo $_SESSION["taikhoan"] ?></a>
                                <ul class="doimk">
                                    <a href="index.php?controller=fontend&action=doimatkhau">
                                        <li><i class='fas fa-layer-group' style="margin-right: 5px; color: #84462f"></i>Đổi mật khẩu</li>
                                    </a>
                                    <a href="index.php?controller=fontend&action=dondatphong">
                                        <li><i class='fas 	fas fa-calendar' style="margin-right: 5px;color: #84462f"></i> Đơn hàng</li>
                                    </a>
                                    <a href="index.php?controller=fontend&action=capnhattk">
                                        <li><i class='fas far fa-address-card' style="margin-right: 5px;color: #84462f"></i>Cập nhật tài khoản</li>
                                    </a>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="index.php?controller=fontend&action=dangxuat">Đăng Xuất</a></li>
                        <?php
                        } else {
                            ?>
                            <li class="nav-item"><a class="nav-link" href="index.php?controller=fontend&action=dangki">Đăng kí</a></li>
                            <li class="nav-item"><a class="nav-link" href="" data-toggle="modal" data-target="#dangnhap">Đăng nhập</a></li>
                        <?php
                        }
                        ?>

                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Area =================-->
    <!--================Breadcrumb Area =================-->