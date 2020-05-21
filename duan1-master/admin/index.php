<?php session_start() ?>
<?php
if (!isset($_SESSION["taikhoan"])) {
    header("Location:../index.php");
    exit();
} else {
    require_once './mvc/model/connectDB.php';
    $db = new connectDB();
    $taikhoan = $_SESSION["taikhoan"];
    $sql_user_permission = "SELECT permission from user where user='$taikhoan'";
    $kq_user_permission = $db->conn->query($sql_user_permission);
    if ($kq_user_permission->fetchColumn() == 0) {
        header("Location:../index.php");
        exit();
    }
}
?>
<?php
if (isset($_GET["controller"])) {
    $controller = $_GET["controller"];
} else {
    $controller = "thongbao";
}
switch ($controller) {
    case 'thanhpho':
        require_once "./mvc/controller/thanhpho/thanhpho.php";
        break;
    case 'dichvu':
        require_once "./mvc/controller/dichvu/dichvu.php";
        break;
    case 'thongbao':
        require_once "./mvc/controller/thongbao/thongbao.php";
        break;
    case 'thanhvien':
        require_once "./mvc/controller/thanhvien/thanhvien.php";
        break;
    case 'dondatphong':
        require_once "./mvc/controller/dondatphong/dondatphong.php";
        break;
    case 'infomation':
        require_once "./mvc/controller/infomation/infomation.php";
        break;
    case 'quanlykhachsan':
        require_once "./mvc/controller/quanlykhachsan/khachsan.php";
        break;
    case 'quanlyphong':
        require_once "./mvc/controller/quanlyphong/phong.php";
        break;
    case 'quanlytintuc':
        require_once "./mvc/controller/quanlytintuc/quanlytintuc.php";
        break;
    case 'nhanvien':
        require_once "./mvc/controller/nhanvien/nhanvien.php";
        break;
    case 'quanlyloaiphong':
        require_once "./mvc/controller/quanlyloaiphong/quanlyloaiphong.php";
        break;
    case 'quanlycomment':
        require_once "./mvc/controller/quanlycomment/quanlycomment.php";
        break;
    default:
        # code...
        break;
}
