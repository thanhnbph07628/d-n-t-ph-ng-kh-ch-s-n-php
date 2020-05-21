<?php
require_once './mvc/model/cityModel.php';
$db = new cityModel();
if (isset($_GET["action"])) {
    $action = $_GET["action"];
} else {
    $action = "show-thanhpho";
}
switch ($action) {
    case 'add-thanhpho':
        if (isset($_POST["luu"])) {
            $db->kiemtraImg("Images");
            $dataInsert = [
                "nameCity" => $_POST["nameCity"],
                "images" => $_FILES['Images']['name']
            ];
            //    var_dump($data);
            //    exit();
            $tmp_images = $_FILES['Images']['tmp_name'];
            $count = $db->getNameCity("city", $dataInsert["nameCity"]);
            $db->kiemtraImg('Images');
            if (isset($_SESSION["loi"])) {
                $loi = $_SESSION["loi"];
                unset($_SESSION["loi"]);
            } else if ($count == 0) {
                $result = $db->insertData("city", $dataInsert);
                move_uploaded_file($tmp_images, "../mvc/Webroot/image/" . $dataInsert["images"]);
                if ($result) {
                    $_SESSION["thongbao"] = '<div class="alert alert-success" role="alert">
             Thêm tên thành phố thành công!
             </div>';
                    header("Location:index.php?controller=thanhpho&action=show-thanhpho");
                } else {
                    echo "Thất bại";
                }
            } else {
                $_SESSION["thongbao"] = '<div class="alert alert-danger" role="alert">
                Tên thành phố đã tồn tại!
                </div>';
            }
        }
        require_once "./mvc/view/view-thanhpho/add-thanhpho.php";
        break;
    case 'sua-thanhpho':
        //lấy thông tin thành phố
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $data = $db->getCity("city", $id);
        }
        if (isset($_GET["page"])) {
            $page = $_GET["page"];
            $link = "index.php?controller=thanhpho&action=show-thanhpho&page=" . $page;
        } else {
            $link = "index.php?controller=thanhpho&action=show-thanhpho";
        }
        //cập nhật thông tin thành phố
        if (isset($_POST["luu"])) {
            $db->kiemtraImg("Images");
            $dataUpdate = [
                "nameCity" => $_POST["nameCity"],
                "images" => $_FILES['Images']['name']
            ];
            $tableID = "CityID";
            $tmp_images = $_FILES['Images']['tmp_name'];

            if (empty($dataUpdate["images"])) {
                $dataUpdate["images"] = $data['Images'];
            }
           
            if (isset($_SESSION["loi"])) {
                $loi = $_SESSION["loi"];
                unset($_SESSION["loi"]);
            } else {
                $result = $db->updateData("city", $dataUpdate, $tableID, $id);
                if ($result) {
                move_uploaded_file($tmp_images, "../mvc/Webroot/image/" . $dataUpdate["images"]);
                $_SESSION["thongbao"] = '<div class="alert alert-success" role="alert">
             Sửa tên thành phố thành công!
             </div>';
                header("Location:" . $link);
                }else{
                    echo "Thất bại";
                }
            } 
        }
        require_once "./mvc/view/view-thanhpho/sua-thanhpho.php";
        break;
    case 'show-thanhpho':
        $start = 0;
        $limit = 4;
        if (isset($_GET["page"])) {
            $page = $_GET["page"];
        } else {
            $page = 1;
        }
        $start = $db->phantrangStart($page, $limit);
        $data = $db->selectCity("city", $start, $limit);
        $phantrang = $db->phantrang('city', 'CityID', $limit, $page, 'thanhpho', 'show-thanhpho');
        require_once "./mvc/view/view-thanhpho/show-thanhpho.php";
        break;
    case 'delete':
        if (isset($_GET["page"])) {
            $page = $_GET["page"];
            $link = "index.php?controller=thanhpho&action=show-thanhpho&page=" . $page;
        } else {
            $link = "index.php?controller=thanhpho&action=show-thanhpho";
        }
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $result = $db->deleteCity("city", $id);
            if ($result) {
                $_SESSION["thongbao"] = '<div class="alert alert-success" role="alert">
 Xóa tên thành phố thành công!
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
