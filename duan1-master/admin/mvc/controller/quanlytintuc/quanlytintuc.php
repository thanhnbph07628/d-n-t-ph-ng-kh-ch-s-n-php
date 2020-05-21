<?php
require_once './mvc/model/tintucModel.php';
$db = new tintucModel();
if (isset($_GET["action"])) {
    $action = $_GET["action"];
} else {
    $action = "show-tintuc";
}
switch ($action) {
    case 'add-tintuc':
        if (isset($_POST["luu"])) {
            $db->kiemtraImg("Images");
            $dataInsert = [
                "title" => $_POST["title"],
                "images" => $_FILES['Images']['name'],
                "detail" => $_POST["detail"]
            ];
            //    var_dump($data);
            //    exit();
            $tmp_images = $_FILES['Images']['tmp_name'];
            $db->kiemtraImg('Images');
            if (isset($_SESSION["loi"])) {
                $loi = $_SESSION["loi"];
                unset($_SESSION["loi"]);
            } else {
                $result = $db->insertData("news", $dataInsert);
                move_uploaded_file($tmp_images, "../mvc/Webroot/image/img_news/" . $dataInsert["images"]);
                if ($result) {
                    $_SESSION["thongbao"] = '<div class="alert alert-success" role="alert">
         Thêm tin tức thành công!
         </div>';
                    header("Location:index.php?controller=quanlytintuc&action=show-tintuc");
                } else {
                    echo "Thất bại";
                }
            }
        }
        require_once "./mvc/view/view-tintuc/add-tintuc.php";
        break;
    case 'sua-tintuc':
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $data = $db->getNew("news", $id);
        }
        if (isset($_GET["page"])) {
            $page = $_GET["page"];
            $link = "index.php?controller=quanlytintuc&action=show-tintuc&page=" . $page;
        } else {
            $link = "index.php?controller=quanlytintuc&action=show-tintuc";
        }
        //cập nhật thông tin thành phố
        if (isset($_POST["luu"])) {
            $db->kiemtraImg("Images");
            $dataUpdate = [
                "Title" => $_POST["title"],
                "Images" => $_FILES['Images']['name'],
                "Content" => $_POST["detail"]
            ];
            $tableID = "NewID";
            $tmp_images = $_FILES['Images']['tmp_name'];
            if (empty($dataUpdate["Images"])) {
                $dataUpdate["Images"] = $data['Images'];
            }
            if (isset($_SESSION["loi"])) {
                $loi = $_SESSION["loi"];
                unset($_SESSION["loi"]);
            } else  {
                $result = $db->updateData("news", $dataUpdate, $tableID, $id);
                if ($result){
                move_uploaded_file($tmp_images, "../mvc/Webroot/image/img_news/" . $dataUpdate["Images"]);
                $_SESSION["thongbao"] = '<div class="alert alert-success" role="alert">
         Sửa tin tức thành công!
         </div>';
                header("Location:" . $link);
                }else{
                    echo "Thất bại";
                }
            } 
        }
        require_once "./mvc/view/view-tintuc/sua-tintuc.php";
        break;
    case 'show-tintuc':
        $start = 0;
        $limit = 4;
        if (isset($_GET["page"])) {
            $page = $_GET["page"];
        } else {
            $page = 1;
        }
        $start = $db->phantrangStart($page, $limit);
        $data = $db->selectNew("news", $start, $limit);
        $phantrang = $db->phantrang('news', 'NewID', $limit, $page, 'quanlytintuc', 'show-tintuc');
        require_once "./mvc/view/view-tintuc/show-tintuc.php";
        break;
    case 'delete':
        if (isset($_GET["page"])) {
            $page = $_GET["page"];
            $link = "index.php?controller=quanlytintuc&action=show-tintuc&page=" . $page;
        } else {
            $link = "index.php?controller=quanlytintuc&action=show-tintuc";
        }
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $result = $db->deleteNew("news", $id);
            if ($result) {
                $_SESSION["thongbao"] = '<div class="alert alert-success" role="alert">
 Xóa tin tức thành công!
 </div>';
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
