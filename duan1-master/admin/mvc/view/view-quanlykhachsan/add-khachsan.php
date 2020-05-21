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
                <h4 class="page-title">Thêm khách sạn</h4>
                <div class="m-icon">
                    <a href="index.php?controller=quanlykhachsan&action=show-khachsan">
                        <h4 class="mdi mdi-reply" title="Thêm">Quay lại</h4>
                    </a>
                </div>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.php?controller=quanlyphong&action=show-phong" style="color: black;">Show khách sạn</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="">Thêm khách sạn</a></li>
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
                            <label>Tên khách sạn</label>
                            <input type="text" name="nameHotel" class="form-control" placeholder="Nhập tên khách sạn" required="">
                        </div>
                        <div class="form-group">
                            <label>Ảnh</label>
                            <input type="file" name="images[]" class="form-control" required="" multiple>
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input type="text" name="address" class="form-control" placeholder="Nhập địa chỉ khách sạn" required="">
                        </div>
                        <div class="form-group">
                            <label>Hotline</label>
                            <input type="text" name="phone" min="0" class="form-control" placeholder="Nhập số điện thoại khách sạn" required="">
                        </div>
                        <div class="form-group">
                            <label>Tài khoản ngân hàng</label>
                            <input type="text" name="bankaccount" min="0" class="form-control" placeholder="Nhập tài khoản ngân hàng" required="">
                        </div>
                        <div class="form-group">
                            <label>Chủ tài khoản</label>
                            <input type="text" name="accountholder" class="form-control" placeholder="Nhập tên chủ tài khoản" required="">
                        </div>
                        <div class="form-group">
                            <label>Tên ngân hàng</label>
                            <input type="text" name="bankname" class="form-control" placeholder="Nhập tên ngân hàng" required="">
                        </div>
                        <div class="form-group">
                            <label>Thành phố</label>
                            <select class="custom-select col-12" name="cityid" id="inlineFormCustomSelect" required="">
                                <option selected="">Chọn thành phố</option>
                                <?php
                                foreach ($data as $key => $value) {
                                    ?>
                                    <option value="<?php echo $value['CityID'] ?>"><?php echo $value['NameCity'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Dịch vụ</label>
                        </div>
                        <div class="row" style="padding-left:20px">

                            <?php
                            foreach ($dataService as $key => $value) {
                                ?>
                                <div class="custom-control custom-checkbox col-md-4" style="padding:10px">
                                    <input type="checkbox" name="service[]"value="<?php echo $value["ServiceID"] ?>" class="custom-control-input" id="<?php echo $value["ServiceID"] ?>" name="example1">
                                    <label class="custom-control-label" for="<?php echo $value["ServiceID"] ?>"><?php echo $value["NameService"] ?></label>
                                </div>
                            <?php
                            }
                            ?>

                        </div>
                        <div class="col-sm-12" style="margin-top: 20px">
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