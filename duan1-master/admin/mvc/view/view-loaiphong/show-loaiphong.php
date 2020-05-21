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
                        <h4 class="page-title">Show loại phòng</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Show loại phòng</li>
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
                                <a href="index.php?controller=quanlyloaiphong&action=add-loaiphong"><h4 class="mdi mdi-feather" title="Thêm">Thêm loại phòng</h4></a>
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
                                            <th scope="col">Tên loại phòng</th>
                                            <th scope="col">Ảnh</th>
                                            <th scope="col">Info</th>
                                            <th style="width:200px" scope="col">Khách sạn</th>
                                            <!-- <th scope="col">Ngày đăng</th> -->
                                            <th scope="col">Sửa</th>
                                            <th scope="col">Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i=1;  
                                            foreach ($data as $key => $value) {
                                        ?>
                                        <tr>
                                            <th scope="row"><?php echo $start=$start+1 ?></th>
                                            <td>LP_<?php echo $value['RoomTypeID'] ?></td>
                                            <td><?php echo $value['NameRoomType'] ?></td>
                                            <td><img src="../mvc/Webroot/image/img_roomtype/<?php echo $value[2] ?>" width="200px" height="132px"></td>
                                            <td><ul style="margin-left: -20px">
                                                <li>Số lượng phòng: &nbsp <?php echo $value['Amount'] ?></li>
                                                <li>Số người: &nbsp <?php echo $value['AmountPeople'] ?></li>
                                                <li>Giá: &nbsp <?php echo number_format($value['Price']) ?> VNĐ</li>
                                                <li>Số giường: &nbsp <?php echo $value['NumberBeds'] ?></li>
                                            </ul></td>
                                            <td><?php echo $value['NameHotel'] ?></td>
                                            <!-- <td><?php echo $value['CreateAt'] ?></td> -->
                                            <td><a href="index.php?controller=quanlyloaiphong&action=sua-loaiphong&id=<?php echo $value['RoomTypeID'] ?>&page=<?php echo $page ?>"><i class="mdi mdi-wrench" title="Sửa" style="color: grey; font-size: 22px;"></i></a></td>
                                            <td><a href="index.php?controller=quanlyloaiphong&action=delete&id=<?php echo $value["RoomTypeID"] ?>&page=<?php echo $page ?>"><i class="mdi mdi-delete-empty" title="Xóa" onclick="return confirm('Bạn có chắc muốn xóa')" style="color: grey; font-size: 22px;"></i></a></td>
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