<?php
require_once './mvc/model/roomModel.php';
$db = new roomModel();
if (isset($_GET["action"])) {
    $action = $_GET["action"];
} else {
    $action = "show-phong";
}
switch ($action) {
    case 'add-phong':
        $dataHotel = $db->selectAll('hotel');
        if (isset($_POST["luu"])) {
            $dataInsert = [
                "name_room" => $_POST["name_room"],
                "images" => $_FILES["images"]["name"],
                "status" => 1,
                "khachsan" => $_POST["khachsan"],
                "loaiphong" => $_POST["loaiphong"],
            ];
            $db->kiemtraImg("images");
            $tmp_images = $_FILES['images']['tmp_name'];
            if (isset($_SESSION["loi"])) {
                $loi = $_SESSION["loi"];
                unset($_SESSION["loi"]);
            } else {
                $result = $db->insertData('room', $dataInsert);
                if ($result) {
                    move_uploaded_file($tmp_images, "../mvc/Webroot/image/img_room/" . $dataInsert["images"]);
                    $_SESSION["thongbao"] = '<div class="alert alert-success" role="alert">
                 Thêm phòng thành công!
                 </div>';
                    header("Location:index.php?controller=quanlyphong&action=show-phong");
                }else{
                    echo "Thất bại";
                }
            }
        }
        require_once "./mvc/view/view-phong/add-phong.php";
        break;
    case 'sua-phong':
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $data = $db->getRoomID("room", $id);
        }
        if (isset($_GET["page"])) {
            $page = $_GET["page"];
            $link = "index.php?controller=quanlyphong&action=show-phong&page=" . $page;
        } else {
            $link = "index.php?controller=quanlyphong&action=show-phong";
        }
        if (isset($_POST["luu"])) {
            $dataUpdate = [
                "roomname" => $_POST["name_room"],
                "images" => $_FILES["images"]["name"],
                "status" => 1,
                "hotelid" => $_POST["khachsan"],
                "roomtypeid" => $_POST["loaiphong"],
            ];
            if (empty($dataUpdate["images"])) {
                $dataUpdate["images"] = $data['Images'];
            }
            $db->kiemtraImg("images");
            $tmp_images = $_FILES['images']['tmp_name'];
           
            if (isset($_SESSION["loi"])) {
                $loi = $_SESSION["loi"];
                unset($_SESSION["loi"]);
            } else{
                $result = $db->updateData('room', $dataUpdate, 'RoomID', $id);
                if($result){
                move_uploaded_file($tmp_images, "../mvc/Webroot/image/img_room/" . $dataUpdate["images"]);
                $_SESSION["thongbao"] = '<div class="alert alert-success" role="alert">
             Xửa phòng thành công!
             </div>';
                header("Location:" . $link);
                }else{
                    echo "Thất bại";
                }
            }
        }
        $getRoomTypeID = $db->getRoomTypeID("room", $data["RoomID"]);
        $dataHotel = $db->selectAll("hotel");
        require_once "./mvc/view/view-phong/sua-phong.php";
        break;
    case 'laydulieuHotel':
        if ($_GET["idht"]) {
            $idht = $_GET["idht"];
        }
        $dataRoomType = $db->getRoomType('roomtype', $idht);
        require_once "./mvc/view/view-phong/laydulieuHotel.php";
        break;
    case 'show-phong':
        $start = 0;
        $limit = 2;
        if (isset($_GET["page"])) {
            $page = $_GET["page"];
        } else {
            $page = 1;
        }
        $start = $db->phantrangStart($page, $limit);
        $data = $db->selectRoom("room", $start, $limit);
        $phantrang = $db->phantrang('room', 'RoomID', $limit, $page, 'quanlyphong', 'show-phong');
        require_once "./mvc/view/view-phong/show-phong.php";
        break;
    case 'delete':
        if (isset($_GET["page"])) {
            $page = $_GET["page"];
            $link = "index.php?controller=quanlyphong&action=show-phong&page=" . $page;
        } else {
            $link = "index.php?controller=quanlyphong&action=show-phong";
        }
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $result = $db->deleteRoom("room", $id);
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
