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
                <h4 class="page-title">Show comment</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Show comment</li>
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

                        <!-- <div class="m-icon">
                            <a href="index.php?controller=quanlycomment&action=add-comment">
                                <h4 class="mdi mdi-feather" title="Thêm">Thêm tin tức</h4>
                            </a>
                        </div> -->

                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col">ID</th>
                                        <th scope="col">Tên khách sạn</th>
                                        <th scope="col">Ảnh Khách sạn</th>
                                        <th scope="col">Số comment</th>
                                        <th scope="col">Chi tiết</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($data as $key => $value) {
                                        ?>
                                        <tr>
                                            <th scope="row"><?php echo $start = $start + 1;  ?></th>
                                            <td><?php echo $value["HotelID"] ?></td>
                                            <td style="width:300px"><?php echo $value["NameHotel"] ?></td>
                                            <td style="width:300px">
                                                <div id="<?php echo $value['HotelID'] ?>" class="carousel slide" data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <?php
                                                            $showDataImg = explode(',', trim($value["Images"]));
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
                                            <td style="text-align: center"><?php echo $value["NumberComment"] ?></td>
                                            <td><a href="index.php?controller=quanlycomment&action=chitietcomment&id=<?php echo $value["HotelID"] ?>"><button type="button" class="btn btn-success">Chi tiết</button></a></td>
                                            <!-- <td><a href="index.php?controller=quanlycomment&action=delete&id=<?php echo $value["NewID"] ?>&page=<?php echo $page ?>"><i class="mdi mdi-delete-empty" title="Xóa" onclick="return confirm('Bạn có chắc muốn xóa')" style="color: grey; font-size: 22px;"></i></a></td> -->
                                        </tr>
                                    <?php }
                                    ?>

                                </tbody>
                            </table>
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