<link rel="stylesheet" href="./mvc/Webroot/css/mdb.min.css">
<?php require_once("./mvc/view/fontend/include/header.php") ?>
<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">Quản lý khách sạn</h2>
            <ol class="breadcrumb">
                <li class="active"> <?php echo $data["NameHotel"] ?> </li>

            </ol>
        </div>
    </div>
</section>
<div class="container" style="margin-top: 40px">
    <div class="row chitiet style-box">
        <div class="col-md-5">
            <script src="./mvc/Webroot/js/jssor.slider-28.0.0.min.js" type="text/javascript"></script>
            <script type="text/javascript">
                window.jssor_1_slider_init = function() {

                    var jssor_1_SlideshowTransitions = [{
                            $Duration: 800,
                            x: 0.3,
                            $During: {
                                $Left: [0.3, 0.7]
                            },
                            $Easing: {
                                $Left: $Jease$.$InCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        },
                        {
                            $Duration: 800,
                            x: -0.3,
                            $SlideOut: true,
                            $Easing: {
                                $Left: $Jease$.$InCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        },
                        {
                            $Duration: 800,
                            x: -0.3,
                            $During: {
                                $Left: [0.3, 0.7]
                            },
                            $Easing: {
                                $Left: $Jease$.$InCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        },
                        {
                            $Duration: 800,
                            x: 0.3,
                            $SlideOut: true,
                            $Easing: {
                                $Left: $Jease$.$InCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        },
                        {
                            $Duration: 800,
                            y: 0.3,
                            $During: {
                                $Top: [0.3, 0.7]
                            },
                            $Easing: {
                                $Top: $Jease$.$InCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        },
                        {
                            $Duration: 800,
                            y: -0.3,
                            $SlideOut: true,
                            $Easing: {
                                $Top: $Jease$.$InCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        },
                        {
                            $Duration: 800,
                            y: -0.3,
                            $During: {
                                $Top: [0.3, 0.7]
                            },
                            $Easing: {
                                $Top: $Jease$.$InCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        },
                        {
                            $Duration: 800,
                            y: 0.3,
                            $SlideOut: true,
                            $Easing: {
                                $Top: $Jease$.$InCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        },
                        {
                            $Duration: 800,
                            x: 0.3,
                            $Cols: 2,
                            $During: {
                                $Left: [0.3, 0.7]
                            },
                            $ChessMode: {
                                $Column: 3
                            },
                            $Easing: {
                                $Left: $Jease$.$InCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        },
                        {
                            $Duration: 800,
                            x: 0.3,
                            $Cols: 2,
                            $SlideOut: true,
                            $ChessMode: {
                                $Column: 3
                            },
                            $Easing: {
                                $Left: $Jease$.$InCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        },
                        {
                            $Duration: 800,
                            y: 0.3,
                            $Rows: 2,
                            $During: {
                                $Top: [0.3, 0.7]
                            },
                            $ChessMode: {
                                $Row: 12
                            },
                            $Easing: {
                                $Top: $Jease$.$InCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        },
                        {
                            $Duration: 800,
                            y: 0.3,
                            $Rows: 2,
                            $SlideOut: true,
                            $ChessMode: {
                                $Row: 12
                            },
                            $Easing: {
                                $Top: $Jease$.$InCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        },
                        {
                            $Duration: 800,
                            y: 0.3,
                            $Cols: 2,
                            $During: {
                                $Top: [0.3, 0.7]
                            },
                            $ChessMode: {
                                $Column: 12
                            },
                            $Easing: {
                                $Top: $Jease$.$InCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        },
                        {
                            $Duration: 800,
                            y: -0.3,
                            $Cols: 2,
                            $SlideOut: true,
                            $ChessMode: {
                                $Column: 12
                            },
                            $Easing: {
                                $Top: $Jease$.$InCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        },
                        {
                            $Duration: 800,
                            x: 0.3,
                            $Rows: 2,
                            $During: {
                                $Left: [0.3, 0.7]
                            },
                            $ChessMode: {
                                $Row: 3
                            },
                            $Easing: {
                                $Left: $Jease$.$InCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        },
                        {
                            $Duration: 800,
                            x: -0.3,
                            $Rows: 2,
                            $SlideOut: true,
                            $ChessMode: {
                                $Row: 3
                            },
                            $Easing: {
                                $Left: $Jease$.$InCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        },
                        {
                            $Duration: 800,
                            x: 0.3,
                            y: 0.3,
                            $Cols: 2,
                            $Rows: 2,
                            $During: {
                                $Left: [0.3, 0.7],
                                $Top: [0.3, 0.7]
                            },
                            $ChessMode: {
                                $Column: 3,
                                $Row: 12
                            },
                            $Easing: {
                                $Left: $Jease$.$InCubic,
                                $Top: $Jease$.$InCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        },
                        {
                            $Duration: 800,
                            x: 0.3,
                            y: 0.3,
                            $Cols: 2,
                            $Rows: 2,
                            $During: {
                                $Left: [0.3, 0.7],
                                $Top: [0.3, 0.7]
                            },
                            $SlideOut: true,
                            $ChessMode: {
                                $Column: 3,
                                $Row: 12
                            },
                            $Easing: {
                                $Left: $Jease$.$InCubic,
                                $Top: $Jease$.$InCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        },
                        {
                            $Duration: 800,
                            $Delay: 20,
                            $Clip: 3,
                            $Assembly: 260,
                            $Easing: {
                                $Clip: $Jease$.$InCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        },
                        {
                            $Duration: 800,
                            $Delay: 20,
                            $Clip: 3,
                            $SlideOut: true,
                            $Assembly: 260,
                            $Easing: {
                                $Clip: $Jease$.$OutCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        },
                        {
                            $Duration: 800,
                            $Delay: 20,
                            $Clip: 12,
                            $Assembly: 260,
                            $Easing: {
                                $Clip: $Jease$.$InCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        },
                        {
                            $Duration: 800,
                            $Delay: 20,
                            $Clip: 12,
                            $SlideOut: true,
                            $Assembly: 260,
                            $Easing: {
                                $Clip: $Jease$.$OutCubic,
                                $Opacity: $Jease$.$Linear
                            },
                            $Opacity: 2
                        }
                    ];

                    var jssor_1_options = {
                        $AutoPlay: 1,
                        $SlideshowOptions: {
                            $Class: $JssorSlideshowRunner$,
                            $Transitions: jssor_1_SlideshowTransitions,
                            $TransitionsOrder: 1
                        },
                        $ArrowNavigatorOptions: {
                            $Class: $JssorArrowNavigator$
                        },
                        $ThumbnailNavigatorOptions: {
                            $Class: $JssorThumbnailNavigator$,
                            $SpacingX: 5,
                            $SpacingY: 5
                        }
                    };

                    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                    /*#region responsive code begin*/

                    var MAX_WIDTH = 980;

                    function ScaleSlider() {
                        var containerElement = jssor_1_slider.$Elmt.parentNode;
                        var containerWidth = containerElement.clientWidth;

                        if (containerWidth) {

                            var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                            jssor_1_slider.$ScaleWidth(expectedWidth);
                        } else {
                            window.setTimeout(ScaleSlider, 30);
                        }
                    }

                    ScaleSlider();

                    $Jssor$.$AddEvent(window, "load", ScaleSlider);
                    $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                    /*#endregion responsive code end*/
                };
            </script>
            <style>
                /*jssor slider loading skin spin css*/
                .jssorl-009-spin img {
                    animation-name: jssorl-009-spin;
                    animation-duration: 1.6s;
                    animation-iteration-count: infinite;
                    animation-timing-function: linear;
                }

                @keyframes jssorl-009-spin {
                    from {
                        transform: rotate(0deg);
                    }

                    to {
                        transform: rotate(360deg);
                    }
                }

                /*jssor slider arrow skin 106 css*/
                .jssora106 {
                    display: block;
                    position: absolute;
                    cursor: pointer;
                }

                .jssora106 .c {
                    fill: #fff;
                    opacity: .3;
                }

                .jssora106 .a {
                    fill: none;
                    stroke: #000;
                    stroke-width: 350;
                    stroke-miterlimit: 10;
                }

                .jssora106:hover .c {
                    opacity: .5;
                }

                .jssora106:hover .a {
                    opacity: .8;
                }

                .jssora106.jssora106dn .c {
                    opacity: .2;
                }

                .jssora106.jssora106dn .a {
                    opacity: 1;
                }

                .jssora106.jssora106ds {
                    opacity: .3;
                    pointer-events: none;
                }

                /*jssor slider thumbnail skin 101 css*/
                .jssort101 .p {
                    position: absolute;
                    top: 0;
                    left: 0;
                    box-sizing: border-box;
                    background: #000;
                }

                .jssort101 .p .cv {
                    position: relative;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    border: 2px solid #000;
                    box-sizing: border-box;
                    z-index: 1;
                }

                .jssort101 .a {
                    fill: none;
                    stroke: #fff;
                    stroke-width: 400;
                    stroke-miterlimit: 10;
                    visibility: hidden;
                }

                .jssort101 .p:hover .cv,
                .jssort101 .p.pdn .cv {
                    border: none;
                    border-color: transparent;
                }

                .jssort101 .p:hover {
                    padding: 2px;
                }

                .jssort101 .p:hover .cv {
                    background-color: rgba(0, 0, 0, 6);
                    opacity: .35;
                }

                .jssort101 .p:hover.pdn {
                    padding: 0;
                }

                .jssort101 .p:hover.pdn .cv {
                    border: 2px solid #fff;
                    background: none;
                    opacity: .35;
                }

                .jssort101 .pav .cv {
                    border-color: #fff;
                    opacity: .35;
                }

                .jssort101 .pav .a,
                .jssort101 .p:hover .a {
                    visibility: visible;
                }

                .jssort101 .t {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    border: none;
                    opacity: .6;
                }

                .jssort101 .pav .t,
                .jssort101 .p:hover .t {
                    opacity: 1;
                }
            </style>
            <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:680px;overflow:hidden;visibility:hidden;">
                <!-- Loading Screen -->
                <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                    <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="./mvc/Webroot/image/spin.svg" />
                </div>
                <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:580px;overflow:hidden;">
                    <?php
                    $showDataImg = explode(',', trim($data[2]));
                    var_dump($showDataImg);
                    ?>
                    <?php
                    for ($i = 0; $i < count($showDataImg); $i++) {
                        ?>
                        <div>
                            <img data-u="image" src="./mvc/Webroot/image/img_hotel/<?php echo $showDataImg[$i] ?>" />
                            <img data-u="thumb" src="./mvc/Webroot/image/img_hotel/<?php echo $showDataImg[$i] ?>" />
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <!-- Thumbnail Navigator -->
                <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;bottom:0px;width:980px;height:100px;background-color:#000;" data-autocenter="1" data-scale-bottom="0.75">
                    <div data-u="slides">
                        <div data-u="prototype" class="p" style="width:190px;height:90px;">
                            <div data-u="thumbnailtemplate" class="t"></div>
                            <svg viewbox="0 0 16000 16000" class="cv">
                                <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                                <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                                <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                            </svg>
                        </div>
                    </div>
                </div>
                <!-- Arrow Navigator -->
                <div data-u="arrowleft" class="jssora106" style="width:55px;height:55px;top:162px;left:30px;" data-scale="0.75">
                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:65;left:0;width:100%;height:100%;">
                        <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                        <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
                        <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
                    </svg>
                </div>
                <div data-u="arrowright" class="jssora106" style="width:55px;height:55px;top:162px;right:30px;" data-scale="0.75">
                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:65;left:0;width:100%;height:100%;">
                        <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                        <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
                        <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
                    </svg>
                </div>
            </div>
            <script type="text/javascript">
                jssor_1_slider_init();
            </script>
        </div>
        <div class="col-md-7" style="padding-left: 50px">
            <div class="product-info">
                <h1 class="name"><?php echo $data["NameHotel"] ?></h1>
                <div class="description-container m-t-20"><?php echo $data["NameHotel"] ?></div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="diachi">
                            Địa chỉ : <strong> <?php echo $data["Address"] ?></strong>
                        </div>
                        <div class="tinhtrang">
                            Tình trạng phòng : <strong>Còn phòng</strong>
                        </div>
                        <div class="tiennghi">
                            <strong>Thông tin tiện nghi</strong>
                            <table>
                                <tbody>
                                    <?php
                                    foreach ($data[15] as $key => $value) {
                                        ?>
                                        <tr>
                                            <td> <i class='far fa-check-square' style='font-size:18px;color:blue;margin-right:5px;'></i><?php echo $value["NameService"] ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="module-heading">
                            <h4 class="module-title">Thông tin thanh toán</h4>
                        </div>
                        <div class="module-body">
                            <p><strong>Thanh toán qua ngân hàng:</strong></p>
                            <ul>
                                <li><strong><?php echo $data["BankName"] ?></strong></li>
                            </ul>
                            <blockquote>
                                <p>Phòng giao dịch&nbsp; <?php echo $data["Address"] ?><br>Chủ tài khoản:&nbsp;<strong> <?php echo $data["AccountHolder"] ?></strong><br>Số tài khoản:&nbsp; <?php echo $data["BankAccount"] ?>
                                    <!-- <br>Swift Code: xxxxxxxx</p> -->
                            </blockquote><span style="font-family:Trebuchet MS,Helvetica,sans-serif;"><span style="font-size:24px;"><span style="color:rgb(192, 57, 43);"><strong>Hotline:</strong></span><span style="color:rgb(243, 156, 18);"><strong> </strong><strong> <?php echo $data["Phone"] ?></strong></span></span></span>
                        </div>
                    </div>
                </div>
                <div class="price-container info-container m-t-20">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="price box_price" style="font-size: 20px">
                                Thành phố: <?php echo $data["NameCity"] ?>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <a href="#style-box" onclick="nv_booking_hotel_active_booking();" class="site-button btn-block">Đặt phòng</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row style-box">
        <div class="col-md-9 " style="margin: 0px auto">
            <?php require_once("./mvc/view/fontend/include/search.php") ?>
        </div>
    </div>
    <!--Section: Live preview-->
    <!-- Button trigger modal-->
    <div class="row style-box">
        <table class="table table-hover phong">
            <thead>
                <tr>
                    <th scope="col">Loại phòng</th>
                    <th scope="col">Ảnh phòng</th>
                    <th scope="col">Số người</th>
                    <th style="width: 100px" scope="col">Số phòng</th>
                    <th scope="col">Giá <br>
                        VNĐ/Đêm
                    </th>
                    <th scope="col">Đặt phòng</th>
                </tr>
            </thead>
            <?php
            // var_dump($dataRoomType);
            foreach ($dataRoomType as $key => $value) {
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $value["NameRoomType"] ?></td>
                        <td><img width="100px" src="./mvc/Webroot/image/img_roomtype/<?php echo $value["Images"] ?>" alt="">
                            <a href="" data-toggle="modal" data-target="#<?php echo $value['RoomTypeID'] ?>">Thông tin phòng</a>
                        </td>
                        <td><?php echo $value["AmountPeople"] ?> người</td>
                        <td><?php echo $value["10"] ?></td>
                        <td><?php echo number_format($value["Price"]); ?> </td>
                        <td><a href="index.php?controller=fontend&action=chonphong&id=<?php echo $value["RoomTypeID"] ?>"><button type="button" class="btn btn-success">Chọn phòng</button></a></td>
                    </tr>
                </tbody>
                <div class="modal fade" id="<?php echo $value['RoomTypeID'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div style=" height: 600px; overflow: auto;" class="row chi_tiet">
                                <div class="divInfo col-md-12">
                                    <div>
                                        <h3 class="heding">Hình ảnh phòng (chỉ mang tính tham khảo)</h3>
                                        <div class="mrgl3x ">
                                            <div roomtypeid="B5E12E30-919C-11E9-B5CD-5D530DDA0718">
                                                <a href="//du-lich.chudu24.com/f/m/1906/20/maihouse-01337-1454540.jpg" data-gallery="example-gallery-313786" data-toggle="lightbox">
                                                    <img class="radius5 mrgb1x img-fluid" width="200px" src="./mvc/Webroot/image/img_roomtype/<?php echo $value["Images"] ?>" alt="" style="margin-bottom: 10px;"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <h3 class="heding">Thông tin phòng (chỉ mang tính tham khảo)</h3>
                                        <div class="row mrgl3x">
                                            <?php echo $value["detail"] ?>
                                            <!-- <span class="col-md-12 ">Diện tích khoảng: 30m2<br>Loại giường: 01 giường đôi 1m8 hoặc 02 giường đơn 0.9m (có thể ghép giường)<br>Hướng: không cảnh quan hoặc hướng phố<br>Phòng không kê được giường phụ</span>
                                            <div class="col-md-6 ">
                                                <span class="clearfix">Diện tích: 30 m2</span>
                                                <span class="clearfix">Hướng: thành phố </span>
                                                <span class="clearfix">Phòng dành cho 2 người</span>
                                            </div>
                                            <div class="col-md-6 ">
                                                <span class="clearfix ">Phòng có 1 giường đôi</span>
                                                <span class="clearfix">Có thể kê thêm tối đa: 0 giường phụ</span>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div style="clear: both"></div>
                                </div>
                                <div class="divFancility col-md-12">
                                    <div class="room-faci">
                                        <h3 class="heding ">Tiện nghi - Dịch vụ trong phòng</h3>

                                        <div class="mrgl3x ">
                                            <div class="col">
                                                <i class="fa fa-check-square-o"></i><span>Tivi</span><br>
                                                <i class="fa fa-check-square-o"></i><span>Điện thoại</span><br>
                                                <i class="fa fa-check-square-o"></i><span>Cửa sổ</span><br>
                                                <i class="fa fa-check-square-o"></i><span>Internet wifi tại sảnh</span><br>
                                                <i class="fa fa-check-square-o"></i><span>Điều hòa nhiệt độ</span><br>
                                                <i class="fa fa-check-square-o"></i><span>Truyền hình cáp - vệ tinh</span><br>
                                                <i class="fa fa-check-square-o"></i><span>Bình đun nước nóng</span><br>
                                                <i class="fa fa-check-square-o"></i><span>Phòng tắm đứng</span><br>
                                                <i class="fa fa-check-square-o"></i><span>Dép đi trong phòng</span><br>
                                                <i class="fa fa-check-square-o"></i><span>Dụng cụ pha trà / cafe</span><br>
                                                <i class="fa fa-check-square-o"></i><span>Áo choàng tắm</span><br>
                                                <i class="fa fa-check-square-o"></i><span>Internet wifi trong phòng</span><br>
                                                <i class="fa fa-check-square-o"></i><span>Bàn làm việc</span><br>
                                                <i class="fa fa-check-square-o"></i><span>Điều hòa nhiệt độ 2 chiều</span><br>
                                                <i class="fa fa-check-square-o"></i><span>Máy sấy tóc</span><br>
                                                <i class="fa fa-check-square-o"></i><span>Quạt trần / Quạt máy</span><br>
                                                <i class="fa fa-check-square-o"></i><span>Vòi sen</span><br>
                                                <i class="fa fa-check-square-o"></i><span>Tủ lạnh</span><br>
                                                <i class="fa fa-check-square-o"></i><span>Két an toàn</span><br>
                                                <i class="fa fa-check-square-o"></i><span>Điện thoại quốc tế</span><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

            <!-- <tbody>
                <tr>
                    <td>Phòng đơn</td>
                    <td><img width="100px" src="./mvc/Webroot/image/facilites_bg.jpg" alt="">
                        <a href="" data-toggle="modal" data-target="#12">Thông tin phòng</a>
                    </td>
                    <td>2 người</td>
                    <td><input type="number"></td>
                    <td>2.000.000 đ</td>
                    <td><button type="button" class="btn btn-success">Chọn phòng</button></td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>Phòng Vip</td>
                    <td><img width="100px" src="./mvc/Webroot/image/khachsan1.jpg" alt="">
                        <a href="" data-toggle="modal" data-target="#12">Thông tin phòng</a>
                    </td>
                    <td>2 người</td>
                    <td><input type="number"></td>
                    <td>2.000.000 đ</td>
                    <td><button type="button" class="btn btn-success">Chọn phòng</button></td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>Phòng đặc biệt</td>
                    <td><img width="100px" src="./mvc/Webroot/image/about_banner.jpg" alt="">
                        <a href="" data-toggle="modal" data-target="#12">Thông tin phòng</a>
                    </td>
                    <td>2 người</td>
                    <td><input type="number"></td>
                    <td>2.000.000 đ</td>
                    <td><button type="button" class="btn btn-success">Chọn phòng</button></td>
                </tr>
            </tbody> -->
        </table>
    </div>
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalQuickView">Launch
        modal</button> -->
    <!-- Modal: modalQuickView -->

    <!-- Modal: modalAbandonedCart-->
    <!--Section: Live preview-->
    <div class=" style-box">
        <div class="commnet">
            <div class="title-commnent">Bình luận về Khách sạn</div>
            <ul>
                <?php
                foreach ($showComment as $key => $value) {
                    ?>
                    <li>
                        <div class="img-user">
                            <img src="./mvc/Webroot/image/img_user/<?php echo $value["Avatar"] ?>" alt="" width="100%" height="35px">
                        </div>
                        <h2><?php echo $value["User"] ?></h2>
                        <span><?php echo $value["CreateAt"] ?></span>
                        <p><?php echo $value["Content"] ?></p>
                    </li>

                <?php
                }
                ?>

            </ul>
        </div>
    </div>
</div>
<?php require_once("./mvc/view/fontend/include/footer.php") ?>