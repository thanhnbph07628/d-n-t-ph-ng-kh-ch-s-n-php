<?php
require_once './mvc/model/hotelModel.php';
$db = new hotelModel();
if (isset($_GET["action"])) {
    $action = $_GET["action"];
} else {
    $action = "show-khachsan";
}
switch ($action) {
    case 'add-khachsan':
        $dataService = $db->selectCity("service");
        if (isset($_POST['luu'])) {
            $dataImg  = $_FILES["images"];
            $dataNameImages = implode(',', $dataImg["name"]);
            $dataInsert = [
                "nameHotel" => $_POST['nameHotel'],
                "images" => $dataNameImages,
                "address" => $_POST['address'],
                "phone"  => $_POST['phone'],
                "bankaccount"  =>  $_POST['bankaccount'],
                "accountholder"  =>  $_POST['accountholder'],
                "bankname"  =>  $_POST['bankname'],
                "cityid"  =>  $_POST['cityid'],
                "view"  => 0,
            ];

            for ($i = 0; $i < count($dataImg["tmp_name"]); $i++) {
                $checkimg = array("image/png", "image/jpeg", "image/gif");
                $typeimg = $dataImg["type"][$i];
                if (!in_array("$typeimg", $checkimg)) {
                    $_SESSION["loi"] = "lỗi định dạng ảnh";
                }
            }
            // end kiểm tra ảnh
            if (!is_numeric($dataInsert["bankaccount"])) {
                $_SESSION["loi"] = "Tài khoản không được là chữ";
            }
            if (!is_numeric($dataInsert["phone"])) {
                $_SESSION["loi"] = "Số điện thoại không được là chữ";
            }
            if (isset($_SESSION["loi"])) {
                $loi = $_SESSION["loi"];
                unset($_SESSION["loi"]);
            } else {
                $result = $db->insertData('hotel', $dataInsert);
                $getDataService = $_POST["service"];
                $HotelID = $db->MaxHotelID("hotel");
                for ($i = 0; $i < count($getDataService); $i++) {
                    $test = $db->insertService('convenient', $HotelID, $getDataService[$i]);
                }
                if ($result) {
                    //start xử lý up ảnh
                    for ($i = 0; $i < count($dataImg["tmp_name"]); $i++) {
                        $tmp_images = $dataImg['tmp_name'][$i];
                        $images = $dataImg['name'][$i];
                        move_uploaded_file($tmp_images, "../mvc/Webroot/image/img_hotel/" . $images);
                    }
                    //end xử lý up ảnh
                    $_SESSION["thongbao"] = '<div class="alert alert-success" role="alert">
                 Thêm khách sạn thành công!
                 </div>';
                    header("Location:index.php?controller=quanlykhachsan&action=show-khachsan");
                } else {
                    echo "Thất bại";
                }
            }
        }
        $data = $db->selectCity('city');
        require_once "./mvc/view/view-quanlykhachsan/add-khachsan.php";
        break;
    case 'sua-khachsan':
        $dataService = $db->selectCity("service");
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $data = $db->getHotel("hotel", $id);
            $showDataImg = explode(',', trim($data["Images"]));
            $db->delete("convenient", "HotelID", $id);
        }
        if (isset($_GET["page"])) {
            $page = $_GET["page"];
            $link = "index.php?controller=quanlykhachsan&action=show-khachsan&page=" . $page;
        } else {
            $link = "index.php?controller=quanlykhachsan&action=show-khachsan";
        }
        if (isset($_POST['luu'])) {
            $dataImg  = $_FILES["images"];
            $dataNameImages = implode(',', $dataImg["name"]);
            $dataUpdate = [
                "nameHotel" => $_POST['nameHotel'],
                "images" => $dataNameImages,
                "address" => $_POST['address'],
                "phone"  => $_POST['phone'],
                "bankaccount"  =>  $_POST['bankaccount'],
                "accountholder"  =>  $_POST['accountholder'],
                "bankname"  =>  $_POST['bankname'],
                "cityid"  =>  $_POST['cityid'],
            ];
            $getDataService = $_POST["service"];
            for ($i = 0; $i < count($getDataService); $i++) {
                $test = $db->insertService('convenient', $id, $getDataService[$i]);
            }
            for ($i = 0; $i < count($dataImg["tmp_name"]); $i++) {
                $checkimg = array("image/png", "image/jpeg", "image/gif", "");
                $typeimg = $dataImg["type"][$i];
                if (!in_array("$typeimg", $checkimg)) {
                    $_SESSION["loi"] = "lỗi định dạng ảnh";
                }
            }
            // end kiểm tra ảnh
            if (empty($dataImg["name"][0])) {
                $dataUpdate["images"] = $data['Images'];
            } else {
                $dataNameImages = implode(',', $dataImg["name"]);
            }
           // echo $dataNameImages;
            if (!is_numeric($dataUpdate["bankaccount"])) {
                $_SESSION["loi"] = "Tài khoản không được là chữ";
            }
            if (!is_numeric($dataUpdate["phone"])) {
                $_SESSION["loi"] = "Số điện thoại không được là chữ";
            }
            if (isset($_SESSION["loi"])) {
                $loi = $_SESSION["loi"];
                unset($_SESSION["loi"]);
            } else {
                $result = $db->updateData('hotel', $dataUpdate, 'HotelID', $id);
                if ($result) {
                    //start up load ảnh
                    for ($i = 0; $i < count($dataImg["tmp_name"]); $i++) {
                        $tmp_images = $dataImg['tmp_name'][$i];
                        $images = $dataImg['name'][$i];
                        move_uploaded_file($tmp_images, "../mvc/Webroot/image/img_hotel/" . $images);
                    }
                    //end up load ảnh
                    $_SESSION["thongbao"] = '<div class="alert alert-success" role="alert">
             Sửa khách sạn thành công!
             </div>';
                    header("Location:" . $link);
                } else {
                    echo "Thất bại";
                }
            }
        }
        $data1 = $db->selectAll('city');
        require_once "./mvc/view/view-quanlykhachsan/sua-khachsan.php";
        break;
    case 'show-khachsan':
        //$dataService=$db->selectAll()
        $start = 0;
        $limit = 4;
        if (isset($_GET["page"])) {
            $page = $_GET["page"];
        } else {
            $page = 1;
        }
        $start = $db->phantrangStart($page, $limit);
        $data = $db->selectHotel("hotel", $start, $limit);
        for ($i = 0; $i < count($data); $i++) {
            $service = $db->selectServiceHotel($data[$i]["HotelID"]);
            array_push($data[$i], $service);
        };
       // print_r($data);
        $phantrang = $db->phantrang('hotel', 'HotelID', $limit, $page, 'quanlykhachsan', 'show-khachsan');
        require_once "./mvc/view/view-quanlykhachsan/show-khachsan.php";
        break;
    case 'delete':
        if (isset($_GET["page"])) {
            $page = $_GET["page"];
            $link = "index.php?controller=quanlykhachsan&action=show-khachsan&page=" . $page;
        } else {
            $link = "index.php?controller=quanlykhachsan&action=show-khachsan";
        }
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $deleteService=$db->delete("convenient",'HotelID', $id);
            $result = $db->delete("hotel", 'HotelID', $id);
            if ($result) {
                $_SESSION["thongbao"] = '<div class="alert alert-success" role="alert">
 Xóa khách sạn thành công!
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
