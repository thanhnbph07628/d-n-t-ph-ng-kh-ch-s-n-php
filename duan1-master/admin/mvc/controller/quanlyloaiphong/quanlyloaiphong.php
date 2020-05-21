<?php
require_once './mvc/model/roomtypeModel.php';
$db = new RoomTypeModel();
if (isset($_GET["action"])) {
    $action = $_GET["action"];
} else {
    $action = "show-loaiphong";
}
switch ($action) {
    case 'add-loaiphong':
        if (isset($_POST['luu'])) {
            $dataInsert = [
                "nameroomtype" => $_POST['nameroomtype'],
                "images" => $_FILES['images']['name'],
                "amount" => $_POST['amount'],
                "amountpeople" => $_POST['amountpeople'],
                "price" => $_POST['price'],
                "numberbeds" => $_POST['numberbed'],
                "detail" => $_POST['detail'],
                "hotelid" => $_POST['hotelid']
            ];
            $db->kiemtraImg("images");
            $tmp_images = $_FILES['images']['tmp_name'];
           
            if (isset($_SESSION["loi"])) {
                $loi = $_SESSION["loi"];
                unset($_SESSION["loi"]);
            } else  {
                $result = $db->insertData('roomtype', $dataInsert);
                if($result){
                move_uploaded_file($tmp_images, "../mvc/Webroot/image/img_roomtype/" . $dataInsert["images"]);
                $_SESSION["thongbao"] = '<div class="alert alert-success" role="alert">
             Thêm kiểu phòng thành công!
             </div>';
                header("Location:index.php?controller=quanlyloaiphong&action=show-loaiphong");
                }else{
                    echo "Thất bại";
                }
            } 
        }
        $data = $db->selectRoomType_one('hotel');
        require_once "./mvc/view/view-loaiphong/add-loaiphong.php";
        break;
    case 'sua-loaiphong':
        //lấy thông tin loại phòng
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $data = $db->getRoomType("roomtype", $id);
        }
        if (isset($_GET["page"])) {
            $page = $_GET["page"];
            $link = "index.php?controller=quanlyloaiphong&action=show-loaiphong&page=" . $page;
        } else {
            $link = "index.php?controller=quanlyloaiphong&action=show-loaiphong";
        }
        //cập nhật thông tin loại phòng
        if (isset($_POST['luu'])) {
            $tmp_images = $_FILES['images']['tmp_name'];
            $dataUpdate = [
                "nameroomtype" => $_POST['nameroomtype'],
                "images" => $_FILES['images']['name'],
                "amount" => $_POST['amount'],
                "amountpeople" => $_POST['amountpeople'],
                "price" => $_POST['price'],
                "numberbeds" => $_POST['numberbed'],
                "detail" => $_POST['detail'],
                "hotelid" => $_POST['hotelid']
            ];
            if (empty($dataUpdate["images"])) {
                $dataUpdate["images"] = $data['Images'];
            }
            $db->kiemtraImg("images");
          
            if (isset($_SESSION["loi"])) {
                $loi = $_SESSION["loi"];
                unset($_SESSION["loi"]);
            } else {
                $result = $db->updateData('roomtype', $dataUpdate, "RoomTypeID", $id);
                if ($result){
                move_uploaded_file($tmp_images, "../mvc/Webroot/image/img_roomtype/" . $dataUpdate["images"]);
                $_SESSION["thongbao"] = '<div class="alert alert-success" role="alert">
             Sửa loại phòng thành công!
             </div>';
                header("Location:" . $link);
                }else {
                    echo "Thất bại";
                }
            } 
        }
        $data1 = $db->selectRoomType_one('hotel');
        require_once "./mvc/view/view-loaiphong/sua-loaiphong.php";
        break;
    case 'show-loaiphong':
        $start = 0;
        $limit = 2;
        if (isset($_GET["page"])) {
            $page = $_GET["page"];
        } else {
            $page = 1;
        }
        $start = $db->phantrangStart($page, $limit);
        $data = $db->selectRoomType("roomtype", $start, $limit);
        $phantrang = $db->phantrang('roomtype', 'RoomTypeID', $limit, $page, 'quanlyloaiphong', 'show-loaiphong');
        require_once "./mvc/view/view-loaiphong/show-loaiphong.php";
        break;
    case 'delete':
        if (isset($_GET["page"])) {
            $page = $_GET["page"];
            $link = "index.php?controller=quanlyloaiphong&action=show-loaiphong&page=" . $page;
        } else {
            $link = "index.php?controller=quanlyloaiphong&action=show-loaiphong";
        }
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $result = $db->deleteRoomType("roomtype", $id);
            if ($result) {
                $_SESSION["thongbao"] = '<div class="alert alert-success" role="alert">
        Xóa loại phòng thành công!
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
