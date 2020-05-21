<?php require_once("./mvc/view/fontend/include/header.php") ?>
<!--================Header Area =================-->

<!--================Breadcrumb Area =================-->
<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">Phòng ở</h2>
            <ol class="breadcrumb">
                <li><a href="index.html">Trang chủ</a></li>
                <li class="active">Phòng ở</li>
            </ol>
        </div>
    </div>
</section>
<!--================Breadcrumb Area =================-->

<!--================ Accomodation Area  =================-->
<div class="container user-datphong">
    <h3>Đặt phòng</h3>
    <div class="row">
        <div class="col-md-5">
            <div class="row">
                <img src="./mvc/Webroot/image/img_roomtype/<?php echo $data["Images"] ?>" alt="" width="300px">
                <div style="margin-top: 20px" class="row">
                    <ul>
                        <li>Khách sạn: <span><?php echo $data["NameHotel"] ?></span></li>
                        <li>Loại phòng: <span><?php echo $data["NameRoomType"] ?></span></span></li>
                        <li>Số giường: <span><?php echo $data["NumberBeds"] ?></span></li>
                        <li>Giá phòng: <span><?php echo number_format($data["Price"]); ?> VNĐ</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <form action="" method="post">
                <table class="table table-sm">
                    <tbody>

                        <?php
                        foreach ($data2 as $key => $value) {
                            ?>
                            <tr>
                                <td style="width: 250px">
                                    <img src="./mvc/Webroot/image/img_room/<?php echo $value["Images"] ?>" width="150px" alt="">
                                </td>
                                <td>Tên phòng: <br><br>
                                    Ngày đăng:<br> <br>
                                    Trạng thái:<br>

                                </td>
                                <td><?php echo $value["RoomName"] ?> <br><br>
                                    <?php echo $value["CreateAt"] ?><br><br>
                                    <?php echo $value["Status"]==0?"Hết phòng":'Còn phòng' ?>
                                </td>
                                <td>
                                    <input type="checkbox" <?php echo $value["Status"]==0?"disabled":'' ?>  name="checkbox[]" id="" value="<?php echo $value["RoomID"] ?>">
                                    <label for="">Chọn</label> <br>
                                    
                                </td>
                            </tr>
                        <?php
                        }
                        ?>



                    </tbody>
                </table>
                <div class="row">
                    <div class="col-md-3 ngay-nhan">

                        <?php
                        echo ' Ngày nhận <br>';
                        if (isset($_SESSION["ngaynhan"])) {
                            echo $_SESSION["ngaynhan"];
                        }
                        ?>
                    </div>
                    <div class="col-md-3 ngay-tra">

                        <?php
                         echo ' Ngày trả <br>';
                        if (isset($_SESSION["ngaytra"])) {    
                            echo $_SESSION["ngaytra"];
                        }
                        ?>
                    </div>
                    <div class="col-md-6">
                        <input onclick="return confirm('Chúng tôi sẽ liên hệ với bạn để xác nhận đơn đăt phòng! Cảm ơn bạn đã sử dụng dịch vụ của chúng tôi') " type="submit" value="Đặt phòng" name="chonphong" class="btn btn-success waves-effect waves-light">
                    </div>
                    <?php
                    if(isset($_SESSION["thongbao"])){
                        echo $_SESSION["thongbao"];
                    }
                    ?>
                </div>
            </form>
        </div>

    </div>
</div>


<!--================ Accomodation Area  =================-->
<!--================ start footer Area  =================-->
<?php require_once("./mvc/view/fontend/include/footer.php") ?>