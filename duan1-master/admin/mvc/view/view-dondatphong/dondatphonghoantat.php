<?php require_once './mvc/view/include/header.php' ?>
<!-- ============================================================== -->
<!-- End Topbar header -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<?php require_once './mvc/view/include/slidebar.php' ?>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Show lịch sử đặt phòng</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Show lịch sử đặt phòng</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <!-- chỉnh sửa nội dung trong đây -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <!-- phần viết form -->
                <div class="col-12">
                    <div class="card">

                        <div class="m-icon">
                            <a href="index.php?controller=dondatphong&action=show-dondatphong">
                                <h4 class="mdi mdi-feather" title="Thêm">Đơn đặt phòng </h4>
                            </a>
                        </div>

                        <div class="table-responsive">

                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Mã Đơn</th>
                                        <th scope="col">Khách hàng</th>
                                        <th scope="col">Ngày nhận</th>
                                        <th scope="col">Ngày trả</th>
                                        <th scope="col">Ngày đặt</th>
                                        <th scope="col">Trạng thái</th>
                                        <th scope="col">Chi tiết</th>
                                        <th scope="col">Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($data as $key => $value) {
                                        ?>
                                        <tr>
                                            <td><?php echo $value["BookRoomID"] ?></td>
                                            <td><?php echo $value["Name"] ?>
                                                <br><?php echo $value["Phone"] ?>
                                            </td>
                                            <td><?php echo $value["BookingDate"] ?></td>
                                            <td><?php echo $value["DatedCheck"] ?></td>
                                            <td><?php echo $value["CreateAt"] ?></td>
                                            <?php
                                                $i = 0;
                                                $link = "";
                                                foreach ($value[11] as $key => $room) {

                                                    $link = $link . '&roomid' . $i++ . '=' . $room["RoomID"];
                                                }
                                                $link = $link . '&count=' . $i;
                                                // echo $link;
                                                ?>
                                            <td> Đã hoàn tất </td>
                                            <td>
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success" data-toggle="modal" data-target="#quang<?php echo $value["BookRoomID"] ?>" name="luu">Chi tiết</button>
                                                </div>
                                                <div class="modal fade" id="quang<?php echo $value["BookRoomID"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content pading-modal">
                                                            <h3 class="title-dondatphong">Đơn đặt phòng </h3>
                                                            <div class="row info-dondatphong">
                                                                <div class="col-md-4">
                                                                    <h3 class="title-info-dondatphong">Chi tiết đơn đặt phòng</h3>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <?php
                                                                        $start = strtotime($value["BookingDate"]);
                                                                        $end = strtotime($value["DatedCheck"]);
                                                                        $songay = ceil(abs($end - $start) / 86400);
                                                                        ?>
                                                                    <span class="clearfix"><?php echo $value["NameHotel"] ?></span><br>
                                                                    <span class="clearfix">Ngày nhận: <?php echo $value["BookingDate"] ?></span><br>
                                                                    <span class="clearfix">Ngày trả:<?php echo $value["DatedCheck"] ?></span><br>
                                                                    <span class="clearfix">Ngày đặt: <?php echo $value["CreateAt"] ?></span><br>
                                                                    <span class="clearfix">Số ngày :<?php echo $songay ?></span><br>
                                                                    <span class="clearfix">Địa chỉ: <?php echo $value["Address"] ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="row info-dondatphong">
                                                                <div class="col-md-4">
                                                                    <h3 class="title-info-dondatphong">Số lượng phòng</h3>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <table class="table table-borderless">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col">Tên phòng</th>
                                                                                <th scope="col">Loại phòng</th>
                                                                                <th scope="col">Đơn giá (VNĐ)</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php
                                                                                foreach ($value[11] as $key => $room) {
                                                                                    ?>
                                                                                <tr>
                                                                                    <td><?php echo $room["RoomName"] ?></td>
                                                                                    <td><?php echo $room["NameRoomType"] ?></td>
                                                                                    <td><?php echo number_format($room["Price"]) ?></td>
                                                                                </tr>
                                                                            <?php
                                                                                }
                                                                                ?>
                                                                            <tr>
                                                                                <td>Tổng tiền/ <?php echo $songay ?> ngày</td>
                                                                                <td></td>
                                                                                <td><?php echo number_format($value["TotalPrice"]) ?></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="row info-dondatphong">
                                                                <div class="col-md-4">
                                                                    <h3 class="title-info-dondatphong">Thông tin sử lý</h3>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <span class="clearfix">Trang thái: Đã xong</span>
                                                                    <!-- <span class="clearfix">Thanh toán khi nhận phòng !</span> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><a onclick='return confirm("Xác nhận xóa")' href="index.php?controller=dondatphong&action=huy-dondatphong&id=<?php echo $value["BookRoomID"] ?>&page=<?php echo $page ?>&dk=dondatphonghoantat"><i style="font-size:25px" class="mdi mdi-delete-empty"></i></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <?php
                        if (isset($_SESSION["thongbao"])) {
                            echo $_SESSION["thongbao"];
                            unset($_SESSION["thongbao"]);
                        }
                        echo $phantrang;
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
</div>
<!-- kết thúc chỉnh sửa nội dung -->
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<footer class="footer text-center">
    Nguyễn Bá Thành - Lê Xuân Quảng
</footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<?php require_once './mvc/view/include/footer.php' ?>