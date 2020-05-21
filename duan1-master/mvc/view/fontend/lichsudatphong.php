<?php require_once("./mvc/view/fontend/include/header.php") ?>
<!--================Header Area =================-->

<!--================Breadcrumb Area =================-->
<section class="breadcrumb_area">
  <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
  <div class="container">
    <div class="page-cover text-center">
      <h2 class="page-cover-tittle">Đơn đặt phòng</h2>
      <ol class="breadcrumb">
        <li><a href="index.html">Trang chủ</a></li>
        <li class="active">Đơn đặt phòng</li>
      </ol>
    </div>
  </div>
</section>
<!--================Breadcrumb Area =================-->

<!--================ Accomodation Area  =================-->
<div class="container don-dat-phong">
  <h3>Đơn đặt phòng của bạn</h3>
  <div class="row">
    <div class="col-md-12">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Khách sạn</th>
            <th scope="col">Khách hàng</th>
            <th scope="col">Ngày đến</th>
            <th scope="col">Ngày đi </th>
            <th scope="col">Ngày đặt</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Chức năng</th>
          </tr>
        </thead>
        <?php
        foreach ($data as $key => $value) {
          ?>
          <tbody>
            <tr>
              <th style="width:300px"><?php echo $value["NameHotel"] ?></th>
              <td><?php echo $value["Name"] ?></td>
              <td><?php echo $value["BookingDate"] ?></td>
              <td><?php echo $value["DatedCheck"] ?></td>
              <td><?php echo $value["CreateAt"] ?></td>
              <td>
                <?php
                  switch ($value["Handling"]) {
                    case 0:
                      echo "Chờ xác nhận";
                      break;
                    case 1:
                      echo "Đã xác nhận";
                      break;
                    case 2:
                      echo "Hoàn tất";
                      break;

                    default:
                      # code...
                      break;
                  }

                  ?>
              </td>
              <td>
                <button type="button" data-toggle="modal" data-target="#<?php echo $value["BookRoomID"] ?>" class="btn btn-success">Xem</button>
                <div class="modal fade" id="<?php echo $value["BookRoomID"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content pading-modal">
                      <h3 class="title-dondatphong">Đơn đặt phòng của bạn</h3>
                      <div class="row info-dondatphong">
                        <div class="col-md-4">
                          <h3 class="title-info-dondatphong">Chi tiết đơn đặt phòng</h3>
                        </div>
                        <div class="col-md-8">
                          <?php
                            $start = strtotime($value["BookingDate"]);
                            $end = strtotime($value["DatedCheck"]);
                            $songay = ceil(abs($end - $start) / 86400);
                            ?>
                          <span class="clearfix"><?php echo $value["NameHotel"] ?></span>
                          <span class="clearfix">Ngày nhận: <?php echo $value["BookingDate"] ?></span>
                          <span class="clearfix">Ngày trả: <?php echo $value["DatedCheck"] ?></span>
                          <span class="clearfix">Ngày đặt: <?php echo $value["CreateAt"] ?></span>
                          <span class="clearfix">Số ngày :<?php echo $songay ?></span>
                          <span class="clearfix">Địa chỉ: <?php echo $value["Address"] ?></span>

                        </div>
                      </div>
                      <div class="row info-dondatphong">
                        <div class="col-md-4">
                          <h3 class="title-info-dondatphong">Số lượng phòng</h3>
                        </div>
                        <div class="col-md-8">
                          <table class="table table-borderless">
                            <thead>
                              <tr>
                                <th scope="col">Tên phòng</th>
                                <th scope="col">Loại phòng</th>
                                <th scope="col">Đơn giá (VNĐ)</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                                foreach ($value[9] as $key => $room) {
                                  ?>
                                <tr>
                                  <td><?php echo $room["RoomName"] ?></td>
                                  <td><?php echo $room["NameRoomType"] ?></td>
                                  <td><?php echo number_format($room["Price"]) ?></td>
                                </tr>
                              <?php
                                }
                                ?>
                              <tr>
                                <td>Tổng tiền/ <?php echo $songay ?> ngày</td>
                                <td></td>
                                <td><?php echo number_format($value["TotalPrice"]) ?></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div class="row info-dondatphong">
                        <div class="col-md-4">
                          <h3 class="title-info-dondatphong">Thông tin sử lý</h3>
                        </div>
                        <div class="col-md-8">
                          <span class="clearfix">Trang thái:
                            <?php
                              switch ($value["Handling"]) {
                                case 0:
                                  echo "Chờ xác nhận";
                                  break;
                                case 1:
                                  echo "Đã xác nhận";
                                  break;
                                case 2:
                                  echo "Hoàn tất";
                                  break;
                                default:
                                  # code...
                                  break;
                              }
                              ?>
                          </span>
                          <span class="clearfix">Thanh toán khi nhận phòng !</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                  if ($value["Handling"] == 2) {
                    ?>
                  <a><button type="button" class="btn btn-primary">Hoàn tất</button></a>
                <?php
                  } else if($value["Handling"] == 0) {
                    ?>
                  <a onclick="return confirm('Bạn có chắc muốn hủy')" href="index.php?controller=fontend&action=huyphong&id=<?php echo $value["BookRoomID"]  ?>"><button type="button" class="btn btn-danger">Hủy</button></a>
                <?php
                  }
                  ?>
              </td>
            </tr>
          </tbody>


        <?php
        }
        ?>
      </table>
    </div>
  </div>
</div>

</div>

<!--================ Accomodation Area  =================-->
<!--================ start footer Area  =================-->
<?php require_once("./mvc/view/fontend/include/footer.php") ?>