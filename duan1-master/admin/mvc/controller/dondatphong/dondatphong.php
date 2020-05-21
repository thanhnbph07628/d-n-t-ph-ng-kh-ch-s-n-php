<?php
require_once './mvc/model/dondatphongModel.php';
$db = new dondatphong();
if (isset($_GET["action"])) {
    $action = $_GET["action"];
} else {
    $action = "show-dondatphong";
}
switch ($action) {
    case 'show-dondatphong':
        $start = 0;
        $limit = 4;
        if (isset($_GET["page"])) {
            $page = $_GET["page"];
        } else {
            $page = 1;
        }
        $start = $db->phantrangStartDon($page, $limit);
        $data = $db->selectDon($start, $limit);
        $phantrang = $db->phantrangDon('booking', 'BookroomID', $limit, $page, 'dondatphong', 'show-dondatphong', "<3");
        for ($i = 0; $i < count($data); $i++) {
            $room = $db->selectRoom($data[$i]["BookRoomID"]);
            array_push($data[$i], $room);
        };
        //var_dump($data);
        require_once "./mvc/view/view-dondatphong/show-dondatphong.php";
        break;
    case 'dondatphonghoantat':
        $start = 0;
        $limit = 4;
        if (isset($_GET["page"])) {
            $page = $_GET["page"];
        } else {
            $page = 1;
        }
        $start = $db->phantrangStartDon($page, $limit);
        $data = $db->selectLichsuDon($start, $limit);
        $phantrang = $db->phantrangDon('booking', 'BookroomID', $limit, $page, 'dondatphong', 'dondatphonghoantat', "=3");
        for ($i = 0; $i < count($data); $i++) {
            $room = $db->selectRoom($data[$i]["BookRoomID"]);
            array_push($data[$i], $room);
        };
        //var_dump($data);
        require_once "./mvc/view/view-dondatphong/dondatphonghoantat.php";
        break;
    case 'huy-dondatphong':
        if (isset($_GET["dk"])) {
            $dk = $_GET["dk"];
        }

        function huytra($dk)
        {
            global $db;
            if (isset($_GET["page"])) {
                $page = $_GET["page"];
                $link = "index.php?controller=dondatphong&action=$dk&page=" . $page;
            } else {
                $link = "index.php?controller=dondatphong&action=$dk";
            }
            if (isset($_GET["id"])) {
                $id = $_GET["id"];
            }
            $db->huytraRoom("booking_detail", $id);
            $issetComment = $db->selectIDtt("comment", 'BookRoomID', 'BookRoomID', $id);
            if ($issetComment == 1) {
                $deleteComment = $db->huytraRoom("comment", $id);
                if ($deleteComment) {
                    $result = $db->huytraRoom("booking", $id);
                    if ($result) {
                        header("Location:" . $link);
                    }
                }
            } else {
                $result = $db->huytraRoom("booking", $id);
                if ($result) {
                    header("Location:" . $link);
                }
            }
        }
        huytra($dk);
        break;
    case 'tra-dondatphong':
        if (isset($_GET["page"])) {
            $page = $_GET["page"];
            $link = "index.php?controller=dondatphong&action=show-dondatphong&page=" . $page;
        } else {
            $link = "index.php?controller=dondatphong&action=show-dondatphong";
        }
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
        }
        if (isset($_GET["count"])) {
            $count = $_GET["count"];
        }
        $idroom = [];
        for ($i = 0; $i < $count; $i++) {
            if (isset($_GET["roomid" . $i])) {
                $idroom[$i] = $_GET["roomid" . $i];
            }
        }
        for ($i = 0; $i < count($idroom); $i++) {
            $roomStatus = $db->update("room", "Status", 'RoomID', $idroom[$i], 1);
        }
        $result = $db->update("booking", 'Handling', 'BookRoomID', $id, 3);
        if ($result) {
            header("Location:" . $link);
        }
        // $db->huytraRoom("booking_detail", $id);
        // $result = $db->huytraRoom("booking", $id);
        // if ($result) {
        //     header("Location:" . $link);
        // }

        break;
    case 'xacnhan-dondatphong':
        if (isset($_GET["page"])) {
            $page = $_GET["page"];
            $link = "index.php?controller=dondatphong&action=show-dondatphong&page=" . $page;
        } else {
            $link = "index.php?controller=dondatphong&action=show-dondatphong";
        }
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
        }
        if (isset($_GET["count"])) {
            $count = $_GET["count"];
        }
        $idroom = [];
        for ($i = 0; $i < $count; $i++) {
            if (isset($_GET["roomid" . $i])) {
                $idroom[$i] = $_GET["roomid" . $i];
            }
        }
        //var_dump($idroom);
        $Handling = $db->selectID('booking', 'Handling', 'BookRoomID', $id);
        switch ($Handling) {
            case '0':
                $selecRoomID = [];
                for ($i = 0; $i < count($idroom); $i++) {
                    $selecRoomID[$i] = $db->selectID("room", 'Status', 'RoomID', $idroom[$i]);
                    $roomStatus = $db->update("room", "Status", 'RoomID', $idroom[$i], 0);
                }
                if (in_array(0, $selecRoomID)) {
                    header("Location:" . $link);
                    $_SESSION["thongbao"] = '<div class="alert alert-danger" role="alert">
 Phòng đã hết vui lòng xóa sản phẩm!
 </div>';
                } else {
                    $result = $db->update("booking", 'Handling', 'BookRoomID', $id, 1);
                    if ($result) {
                        header("Location:" . $link);
                    }
                }
                // $selecRoomID = $db->selectID("room", 'Status', 'RoomID', $idroom);
                // $roomStatus = $db->update("room", "Status", 'RoomID', $idroom, 0);


                break;
            case '1':
                $result = $db->update("booking", 'Handling', 'BookRoomID', $id, 2);
                if ($result) {
                    header("Location:" . $link);
                }
                break;
            case '2':
                header("Location:" . $link);
                break;
            default:
                # code...
                break;
        }
        break;
    default:
        # code...
        break;
}
