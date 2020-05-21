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
                <h4 class="page-title">Show thành phố</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Show thành phố</li>
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
                            <a href="index.php?controller=thanhpho&action=add-thanhpho">
                                <h4 class="mdi mdi-feather" title="Thêm">Thêm thành phố</h4>
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
                                        <th scope="col">Tên thành phố</th>
                                        <th scope="col">Ảnh thành phố</th>
                                        <th scope="col">Sửa</th>
                                        <th scope="col">Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($data as $key => $value) {
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $start=$start+1;  ?></th>
                                        <td>TP_<?php echo $value["CityID"] ?></td>
                                        <td><?php echo $value["NameCity"] ?></td>
                                        <td><img width="150px" src="../mvc/Webroot/image/<?php echo $value['Images'] ?>" alt=""></td>
                                        <td><a href="index.php?controller=thanhpho&action=sua-thanhpho&id=<?php echo $value["CityID"] ?>&page=<?php echo $page ?>"><i class="mdi mdi-wrench" title="Sửa" style="color: grey; font-size: 22px;"></i></a></td>
                                        <td><a href="index.php?controller=thanhpho&action=delete&id=<?php echo $value["CityID"] ?>&page=<?php echo $page ?>"><i class="mdi mdi-delete-empty" title="Xóa" onclick="return confirm('Bạn có chắc muốn xóa')" style="color: grey; font-size: 22px;"></i></a></td>
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