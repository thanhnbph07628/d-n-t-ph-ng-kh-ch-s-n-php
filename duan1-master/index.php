<?php session_start() ?>
<?php
require_once "./mvc/model/connectDB.php";
$db = new connectDB;
$infomation=$db->selectLimitUser("infomation",0,1);
//print_r($infomation);
if (isset($_SESSION["taikhoan"])) {
    $quyenUser = $db->selectID("user", "User", $_SESSION["taikhoan"]);
}
if (isset($_GET["controller"])) {
    $controller = $_GET["controller"];
} else {
    $controller = "fontend";
}
switch ($controller) {
    case 'thanhvien':
        require_once "./mvc/controller/thanhvien/thanhvien.php";
        break;
    case 'fontend':
        require_once "./mvc/controller/fontend/index.php";
        break;
    default:
        require_once "./mvc/controller/fontend/index.php";
        break;
}
