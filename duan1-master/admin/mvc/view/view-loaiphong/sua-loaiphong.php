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
                <h4 class="page-title">Sửa loại phòng</h4>
                <div class="m-icon">
                    <a href="index.php?controller=quanlyloaiphong&action=show-loaiphong">
                        <h4 class="mdi mdi-reply" title="Thêm">Quay lại</h4>
                    </a>
                </div>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Show loại phòng</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Sửa loại phòng</li>
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
                            <label>Tên loại phòng</label>
                            <input type="text" class="form-control" name="nameroomtype" required="" placeholder="Nhập tên loại phòng" value="<?php echo $data['NameRoomType'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Ảnh</label>
                            <input type="file" class="form-control" name="images">
                            <img src="../mvc/Webroot/image/img_roomtype/<?php echo $data['Images'] ?>" width="250px">
                        </div>
                        <div class="form-group">
                            <label>Số lượng phòng</label>
                            <input type="number" class="form-control" name="amount" min="0" required="" placeholder="Nhập số lượng phòng" value="<?php echo $data['Amount'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Số người/phòng</label>
                            <input type="number" class="form-control" name="amountpeople" min="0" required="" placeholder="Nhập số lượng người" value="<?php echo $data['AmountPeople'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Giá/đêm</label>
                            <input type="number" class="form-control" name="price" min="0" required="" placeholder="Nhập số tiền" value="<?php echo $data['Price'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Số giường/phòng</label>
                            <input type="number" class="form-control" name="numberbed" min="0" required="" placeholder="Nhập số lượng"  value="<?php echo $data['NumberBeds'] ?>" >
                        </div>
                        <div class="form-group">
                            <label>Tên Khách sạn</label>
                            <select class="custom-select col-12" id="inlineFormCustomSelect" name="hotelid" required="">
                                <?php
                                foreach ($data1 as $key => $value) {
                                    ?>
                                    <option value="<?php echo $value['HotelID'] ?>" <?php echo $data['HotelID'] == $value['HotelID'] ? "selected" : ""; ?>><?php echo $value['NameHotel']; ?></option>
                                <?php }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Nội dung chi tiết</label>
                            <textarea name="detail" class="form-control" id="fff" rows="3"> <?php echo $data['detail'] ?></textarea>
                        </div>
                        <script>
                            CKEDITOR.replace('fff');
                        </script>
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