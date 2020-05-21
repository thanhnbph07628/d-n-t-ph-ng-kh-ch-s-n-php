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
                <h4 class="page-title">Show khách sạn</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Show khách sạn</li>
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
                            <a href="index.php?controller=quanlykhachsan&action=add-khachsan">
                                <h4 class="mdi mdi-feather" title="Thêm">Thêm khách sạn</h4>
                            </a>
                        </div>

                        <div class="table-responsive">
                            <?php
                            if (isset($_SESSION["thongbao"])) {
                                echo $_SESSION["thongbao"];
                                unset($_SESSION["thongbao"]);
                            }
                            ?>
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col">ID</th>
                                        <th style="width: 200px" scope="col">Tên khách sạn</th>
                                        <th scope="col">Ảnh</th>
                                        <th scope="col">City</th>
                                        <!-- <th scope="col">Ngày đăng</th> -->
                                        <th scope="col">Thông tin</th>
                                        <th scope="col">Sửa</th>
                                        <th scope="col">Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($data as $key => $value) {
                                        ?>
                                        <tr>
                                            <th scope="row"><?php echo $start = $start + 1; ?></th>
                                            <td>KH_<?php echo $value['HotelID'] ?></td>
                                            <td><?php echo $value['NameHotel'] ?></td>
                                            <!-- <td><img src="../mvc/Webroot/image/<?php echo $value['Images'] ?>" width="150px" height="130px"></td> -->
                                            <td style="width: 300px">
                                                <div id="<?php echo $value['HotelID'] ?>" class="carousel slide" data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <?php
                                                            $showDataImg = explode(',', trim($value["2"]));
                                                            for ($i = 0; $i < count($showDataImg); $i++) {
                                                                ?>
                                                            <?php
                                                                    if ($i == 0) {
                                                                        echo '<div class="carousel-item active">
                                                                    <img  class="d-block w-100" width="150px" height="130px"  src="../mvc/Webroot/image/img_hotel/' . $showDataImg[$i] . '">
                                                                </div>';
                                                                    } else {
                                                                        echo ' <div class="carousel-item ">
                                                                    <img width="150px" height="130px" class="d-block w-100" src="../mvc/Webroot/image/img_hotel/' . $showDataImg[$i] . '">
                                                                </div>';
                                                                    }
                                                                    ?>

                                                        <?php
                                                            }
                                                            ?>


                                                    </div>
                                                    <a class="carousel-control-prev" href="#<?php echo $value['HotelID'] ?>" role="button" data-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#<?php echo $value['HotelID'] ?>" role="button" data-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td><?php echo $value["NameCity"]
                                                    ?></td>
                                            <!-- <td><?php echo $value['Create_at'] ?></td> -->
                                            <td>
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success" data-toggle="modal" data-target="#quang<?php echo $value['HotelID'] ?>" name="luu">Chi tiết</button>
                                                </div>
                                                <div class="modal fade" id="quang<?php echo $value['HotelID'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Thông tin chi tiết</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div style=" height: 600px; overflow: auto;" class="row chi_tiet">
                                                                    <div class="divInfo col-md-12">
                                                                        <div>
                                                                            <h3 class="heding">Hình ảnh Khách sạn</h3>
                                                                            <div class="mrgl3x ">
                                                                                <div>
                                                                                    <?php
                                                                                        for ($i = 0; $i < count($showDataImg); $i++) {
                                                                                            ?>
                                                                                        <img src="../mvc/Webroot/image/img_hotel/<?php echo $showDataImg[$i] ?>" alt="" width="200px" height="132" style="margin-bottom: 10px;"></a>
                                                                                    <?php
                                                                                        }
                                                                                        ?>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <h3 class="heding">Danh sách dịch vụ</h3>
                                                                            <div class="row" style="width:400px; margin: 20px; color: #111921">
                                                                                <?php

                                                                                    foreach ($value[15] as $key => $service) {
                                                                                        ?>
                                                                                    <div class="col-md-6">

                                                                                        <i class="mdi mdi-checkbox-marked-outline" style="padding-right:5px"></i> <?php echo $service["NameService"] ?>

                                                                                    </div>
                                                                                <?php
                                                                                    }

                                                                                    ?>

                                                                            </div>
                                                                            <h3 class="heding" style="color:#292424">Thông tin khách sạn</h3>
                                                                            <div class="row mrgl3x">
                                                                                <span class="col-md-12 ">Địa chỉ: <b><?php echo $value['Address'] ?></b> </span>
                                                                                <span class="col-md-12 ">Số điện thoại: <b><?php echo $value['Phone'] ?></b> </span>
                                                                                <span class="col-md-12 ">Tài khoản ngân hàng: <b><?php echo $value['BankAccount'] ?></b> </span>
                                                                                <span class="col-md-12 ">Chủ tài khoản: <b><?php echo $value['AccountHolder'] ?></b> </span>
                                                                                <span class="col-md-12 ">Tên Tài khoản: <b><?php echo $value['BankName'] ?></b> </span>
                                                                                <span class="col-md-12 ">Thành phố: <b><?php echo $value['NameCity'] ?></b> </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                        </div>
                        </td>
                        <td><a href="index.php?controller=quanlykhachsan&action=sua-khachsan&id=<?php echo $value["HotelID"] ?>&page=<?php echo $page ?>"><i class="mdi mdi-wrench" title="Sửa" style="color: grey; font-size: 22px;"></i></a></td>
                        <td><a href="index.php?controller=quanlykhachsan&action=delete&id=<?php echo $value["HotelID"] ?>&page=<?php echo $page ?>"><i class="mdi mdi-delete-empty" title="Xóa" onclick="return confirm('Bạn có chắc muốn xóa')" style="color: grey; font-size: 22px;"></i></a></td>
                        </tr>
                    <?php }
                    ?>
                    </tbody>
                    </table>
                    <?php
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