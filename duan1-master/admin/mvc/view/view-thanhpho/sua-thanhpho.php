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
                <h4 class="page-title">Sửa thành phố</h4>
                <div class="m-icon">
                    <a href="index.php?controller=thanhpho&action=show-thanhpho">
                        <h4 class="mdi mdi-reply" title="Thêm">Quay lại</h4>
                    </a>
                </div>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.php?controller=thanhpho&action=show-thanhpho" style="color: black;">Show thành phố</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="">Sửa thành phố</a></li>
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
        <div class="row" style="margin-top: -20px;">
            <div class="col-12">
                <div class="card card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" id="idp">
                        <div class="form-group">
                            <label>Tên thành phố</label>
                            <input name="nameCity" type="text" class="form-control" value="<?php echo $data["NameCity"] ?>" required placeholder="Nhập tên thành phố">
                        </div>
                        <img width="300px" src="../mvc/Webroot/image/<?php echo $data['Images'] ?>" alt=""><br><br>
                        <div class="form-group">
                            <label>Ảnh thành phố</label>
                            <input type="file" name="Images" class="form-control">
                        </div>
                        <div class="col-sm-12">
                            <button name="luu" class="btn btn-success">Lưu</button>

                        </div>
                    </form>
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
            <?php
            if (isset($_SESSION["thongbao"])) {
                echo $_SESSION["thongbao"];
                // unset($_SESSION["thongbao"]);
            }
            if (isset($loi)) {
                echo '<div class="alert alert-danger">
                                <strong>Lỗi!</strong> ' . $loi . '.
                              </div>';
            }
            ?>
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