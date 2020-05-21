<?php
require_once './mvc/model/serviceModel.php';
$db = new serviceModel();
if (isset($_GET["action"])) {
    $action = $_GET["action"];
} else {
    $action = "show-dichvu";
}
switch ($action) {
    case 'add-dichvu':
        if (isset($_POST["luu"])) {
            $db->kiemtraImg("Images");
            $dataInsert = [
                "nameService" => $_POST["nameService"],
                "detail" => $_POST["detail"]
            ];
            $result = $db->insertData("service", $dataInsert);
            if ($result) {
                $_SESSION["thongbao"] = '<div class="alert alert-success" role="alert">
         Thêm dịch vụ thành công!
         </div>';
                header("Location:index.php?controller=dichvu&action=show-dichvu");
            } else {
                echo "Thất bại";
            }
        }
        require_once "./mvc/view/view-dichvu/add-dichvu.php";
        break;
    case 'sua-dichvu':
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $data = $db->getService("service", $id);
        }
        if (isset($_GET["page"])) {
            $page = $_GET["page"];
            $link = "index.php?controller=dichvu&action=show-dichvu&page=" . $page;
        } else {
            $link = "index.php?controller=dichvu&action=show-dichvu";
        }
        //cập nhật thông tin thành phố
        if (isset($_POST["luu"])) {
            $dataUpdate = [
                "NameService" => $_POST["nameService"],
                "Detail" => $_POST["detail"]
            ];
            $tableID = "ServiceID";
            $result = $db->updateData("service", $dataUpdate, $tableID, $id);
            if ($result) {
                $_SESSION["thongbao"] = '<div class="alert alert-success" role="alert">
         Sửa tên thành phố thành công!
         </div>';
                header("Location:" . $link);
            } else {
                echo "Thất bại";
            }
        }

        require_once "./mvc/view/view-dichvu/sua-dichvu.php";
        break;
    case 'show-dichvu':
        $start = 0;
        $limit = 4;
        if (isset($_GET["page"])) {
            $page = $_GET["page"];
        } else {
            $page = 1;
        }
        $start = $db->phantrangStart($page, $limit);
        $data = $db->selectService("service", $start, $limit);
        $phantrang = $db->phantrang('service', 'serviceID', $limit, $page, 'dichvu', 'show-dichvu');
        require_once "./mvc/view/view-dichvu/show-dichvu.php";
        break;
        require_once "./mvc/view/view-dichvu/show-dichvu.php";
        break;
    case 'delete':
        if (isset($_GET["page"])) {
            $page = $_GET["page"];
            $link = "index.php?controller=dichvu&action=show-dichvu&page=" . $page;
        } else {
            $link = "index.php?controller=dichvu&action=show-dichvu";
        }
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $result = $db->deleteService("service", $id);
            if ($result) {
                $_SESSION["thongbao"] = '<div class="alert alert-success" role="alert">
 Xóa dịch vụ thành công!
 </div>';
                header("Location:" . $link);
            } else {
                $_SESSION["thongbao"] = '<div class="alert alert-danger" role="alert">
                Không thế xóa đc danh mục này nó liên kết tới danh mục khác !
                </div>';
                header("Location:" . $link);
            }
        }
        break;
    default:
        # code...
        break;
}
