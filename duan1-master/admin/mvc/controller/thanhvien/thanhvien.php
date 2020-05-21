<?php
require_once './mvc/model/userModel.php';
$db = new user();
if (isset($_GET["action"])) {
    $action = $_GET["action"];
} else {
    $action = "show-thanhvien";
}
switch ($action) {
    case 'show-thanhvien':
        $start = 0;
        $limit = 4;
        if (isset($_GET["page"])) {
            $page = $_GET["page"];
        } else {
            $page = 1;
        }
        $start = $db->phantrangStart($page, $limit);
        $data = $db->selectUser("user", $start, $limit);
        // var_dump($data);
        $phantrang = $db->phantrang('user', 'user', $limit, $page, 'thanhvien', 'show-thanhvien');
        require_once "./mvc/view/view-thanhvien/show-thanhvien.php";
        break;
    case 'delete':
        if (isset($_GET["page"])) {
            $page = $_GET["page"];
            $link = "index.php?controller=thanhvien&action=show-thanhvien&page=" . $page;
        } else {
            $link = "index.php?controller=thanhvien&action=show-thanhvien";
        }
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $result = $db->deleteUser("user", $id);
            if ($result) {
                $_SESSION["thongbao"] = '<div class="alert alert-success" role="alert">
     Xóa tài khoản thành công!
     </div>';
                header("Location:" . $link);
            } else {
                $_SESSION["thongbao"] = '<div class="alert alert-danger" role="alert">
                Tài khoản có đơn đặt phòng không xóa được !
                </div>';
                header("Location:" . $link);
            }
        }
        break;
    case 'permission':
        if (isset($_GET["page"])) {
            $page = $_GET["page"];
            $link = "index.php?controller=thanhvien&action=show-thanhvien&page=" . $page;
        } else {
            $link = "index.php?controller=thanhvien&action=show-thanhvien";
        }
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $showPermission = $db->showPermission("user", $id);
            $hienthi = $showPermission["permission"] == 0 ? 1 : 0;
            $result = $db->updatePermission("user", $id, $hienthi);
            if ($result) {
                header("Location:" . $link);
            } else {
                echo "Thất bại";
            }
        }
        break;
    default:
        # code...
        break;
}
