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
                <h4 class="page-title">Sửa imfomation</h4>
                <div class="m-icon">
                    <a href="index.php?controller=infomation&action=show-infomation">
                        <h4 class="mdi mdi-reply" title="Thêm">Quay lại</h4>
                    </a>
                </div>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.php?controller=infomation&action=show-infomation" style="color: black;">Show imfomation</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="">Sửa imfomation</a></li>
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
                            <label>Logo</label>
                            <input type="file" name="logo" class="form-control">
                            <img src="../mvc/Webroot/image/<?php echo $data['Logo'] ?>" width="170px">
                        </div>
                        <div class="form-group">
                            <label>Tên logo</label>
                            <input type="text" name="logotext" class="form-control" placeholder="Nhập tên logo" value="<?php echo $data['LogoText'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input type="text" name="address" class="form-control" placeholder="Nhập địa chỉ" value="<?php echo $data['Address'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Nhập email" value="<?php echo $data['Email'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Hotline</label>
                            <input type="number" name="phone" class="form-control" min="0" placeholder="Nhập hotline" value="<?php echo $data['Phone'] ?>">
                        </div>
                        <div class="col-sm-12">
                            <button class="btn btn-success" name="luu">Lưu</button>
                        </div>
                    </form>
                    <?php
                    if (isset($loi)) {
                        echo '<div class="alert alert-danger">
                                <strong>Lỗi!</strong> ' . $loi . '.
                              </div>';
                    }
                    ?>
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