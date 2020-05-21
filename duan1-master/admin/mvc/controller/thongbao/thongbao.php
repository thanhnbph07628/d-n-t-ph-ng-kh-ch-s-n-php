<?php
if (isset($_GET["action"])) {
    $action = $_GET["action"];
} else {
    $action = "thongbao";
}
switch ($action) {
    case 'thongbao':
    $countHotel=$db->selectCount("hotel","HotelID");
    $countCity=$db->selectCount("city","CityID");
    $countBooking=$db->selectCountBooking("booking","BookRoomID");
    $countUser=$db->selectCount("user","User");
        require_once "./mvc/view/view-thongbao/show-thongbao.php";
        break;
    default:
        break;
}
