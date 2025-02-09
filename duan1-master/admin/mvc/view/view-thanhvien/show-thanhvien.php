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
                <h4 class="page-title">Show thành viên</h4>
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
                        <th scope="col">Stt</th>
                        <th scope="col">Tài khoản</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Quyền</th>
                        <th style="width:400px" scope="col">Thông tin</th>
                        <th scope="col">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($data as $key => $value) {
                        ?>
                        <tr>
                            <th scope="row"><?php echo $start = $start + 1 ?></th>
                            <td><?php echo $value["User"] ?></td>
                            <td> <img width="60px" height="60px" src="../mvc/Webroot/image/img_user/<?php echo $value["Avatar"] ?>" alt=""></td>
                            <td>
                                <ul style="margin-left: -20px">
                                    <li>Name: &nbsp; <?php echo $value["Name"] ?> </li>
                                    <li>Giới tính &nbsp; <?php echo $value["Sex"] ?></li>
                                </ul>
                            </td>
                            <td><?php echo $value["permission"]==1
                            ? '<a href="index.php?controller=thanhvien&action=permission&id='.$value["User"].'&page='.$page .'"><button type="button" class="btn btn-success">Admin</button></a>'
                            :'<a href="index.php?controller=thanhvien&action=permission&id='.$value["User"].'&page='.$page .'"><button type="button" class="btn btn-primary">User</button></a>';
                            ?></td>
                            
                            <td>
                                <ul style="margin-left: -20px">
                                    <li>SĐT: &nbsp; <?php echo $value["Phone"] ?> </li>
                                    <li>Email: &nbsp; <?php echo $value["Email"] ?></li>
                                    <li>Địa chỉ: &nbsp; <?php echo $value["Address"] ?></li>
                                </ul>

                            </td>
                            <td><a href="index.php?controller=thanhvien&action=delete&id=<?php echo $value['User'] ?>&page=<?php echo $page ?>"><i class="mdi mdi-delete-empty" title="Xóa" onclick="return confirm('Bạn có chắc muốn xóa')" style="color: grey; font-size: 22px;"></i></a></td>
                        </tr>

                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <?php
            echo $phantrang;
            ?>
        </div>
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <!-- phần viết form -->
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