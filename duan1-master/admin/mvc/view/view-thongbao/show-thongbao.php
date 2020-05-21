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
<style>
    .d-inline-block {
        width: 50px;
    }

    .round-lg {
        line-height: 65px;
        width: 60px;
        height: 60px;
        font-size: 30px;
    }
</style>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Thông báo</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Basic Table</li>
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
                <div class="row">
                    <!-- Column -->
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <a href="index.php?controller=thanhpho&action=show-thanhpho">
                                        <div class="round round-lg text-white d-inline-block text-center rounded-circle bg-warning">
                                            <i class="mdi mdi-city"></i></div>
                                    </a>
                                    <div class="ml-2 align-self-center">
                                        <h3 class="mb-0 font-weight-light"><?php echo $countCity ?></h3>
                                        <h5 class="text-muted mb-0">Thành phố</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <a href="index.php?controller=quanlykhachsan&action=show-khachsan">
                                        <div class="round round-lg text-white d-inline-block text-center rounded-circle bg-info">
                                            <i class="mdi mdi-hospital-building"></i>
                                        </div>
                                    </a>
                                    <div class="ml-2 align-self-center">
                                        <h3 class="mb-0 font-weight-light"><?php echo $countHotel ?></h3>
                                        <h5 class="text-muted mb-0">Khách sạn</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <a href="index.php?controller=dondatphong&action=show-dondatphong">
                                        <div class="round round-lg text-white d-inline-block text-center rounded-circle bg-primary">
                                            <i class="mdi mdi-cart-outline"></i></div>
                                    </a>
                                    <div class="ml-2 align-self-center">
                                        <h3 class="mb-0 font-weight-light"><?php echo $countBooking ?></h3>
                                        <h5 class="text-muted mb-0">Đơn hàng</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <a href="index.php?controller=thanhvien&action=show-thanhvien">
                                        <div class="round round-lg text-white d-inline-block text-center rounded-circle bg-danger">
                                            <i class="mdi mdi-face"></i></div>
                                    </a>
                                    <div class="ml-2 align-self-center">
                                        <h3 class="mb-0 font-weight-light"><?php echo $countUser ?></h3>
                                        <h5 class="text-muted mb-0">Người dùng</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Column -->
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