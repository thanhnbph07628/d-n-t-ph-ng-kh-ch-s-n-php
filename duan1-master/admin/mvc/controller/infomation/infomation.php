<?php
require_once './mvc/model/infomationModel.php';
$db = new InfomationModel();
if (isset($_GET["action"])) {
    $action = $_GET["action"];
} else {
    $action = "show-infomation";
}
switch ($action) {
    case 'add-infomation':
        if (isset($_POST['luu'])) {
            $logo = $_FILES['logo']['name'];
            $tmp_logo = $_FILES['logo']['tmp_name'];
            move_uploaded_file($tmp_logo, "../mvc/Webroot/image/" . $logo);
            $logotext = $_POST['logotext'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $db->kiemtraImg("logo");
            if (isset($_SESSION["loi"])) {
                $loi = $_SESSION["loi"];
                unset($_SESSION["loi"]);
            } else {
                $result = $db->addInfomation('infomation', $logo, $logotext, $address, $email, $phone);
                if ($result) {
                    $_SESSION["thongbao"] = '<div class="alert alert-success" role="alert">
             Thêm infomation thành công!
             </div>';
                    header("Location:index.php?controller=infomation&action=show-infomation");
                } else {
                    echo "Thất bại";
                }
            }
        }
        require_once "./mvc/view/infomation/add-infomation.php";
        break;
    case 'sua-infomation':
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $data = $db->getInfomation("infomation", $id);
        }

        if (isset($_POST['luu'])) {
            $logo = $_FILES['logo']['name'];
            $tmp_logo = $_FILES['logo']['tmp_name'];
            move_uploaded_file($tmp_logo, "../mvc/Webroot/image/" . $logo);
            if (empty($logo)) {
                $logo = $data['Logo'];
            }
            $logotext = $_POST['logotext'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            
            $db->kiemtraImg("logo");
            if (isset($_SESSION["loi"])) {
                $loi = $_SESSION["loi"];
                unset($_SESSION["loi"]);
            } else {
                $result = $db->updateInfomation('infomation', $logo, $logotext, $address, $email, $phone, $id);
                if($result){
                $_SESSION["thongbao"] = '<div class="alert alert-success" role="alert">
             Sửa infomation thành công!
             </div>';
                header("Location:index.php?controller=infomation&action=show-infomation");
            } else{
                echo "Thất bại";
            }
        }
        }

        require_once "./mvc/view/infomation/sua-infomation.php";
        break;
    case 'show-infomation':
        $data = $db->getAll("infomation");
        require_once "./mvc/view/infomation/show-infomation.php";
        break;
    case 'delete':
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $result = $db->deleteInfomation("infomation", $id);
            if ($result) {
                $_SESSION["thongbao"] = '<div class="alert alert-success" role="alert">
 Xóa infomation thành công!
 </div>';
                header("Location:index.php?controller=infomation&action=show-infomation");
            } else {
                echo "Thất bại";
            }
        }
        break;
    default:
        # code...
        break;
}
