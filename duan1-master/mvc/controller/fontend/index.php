<?php
if (isset($_GET["action"])) {
    $action = $_GET["action"];
} else {
    $action = "index";
}
switch ($action) {
    case 'index':
        if (isset($_GET["search"])) {
            unset($_SESSION['ngaynhan']);
            unset($_SESSION['ngaytra']);
            $_SESSION["ngaynhan"] = $_GET["ngaynhan"];
            $_SESSION["ngaytra"] = $_GET["ngaytra"];
            if (!empty($_GET["nameHotel"])) {
                $id = $_GET["nameHotel"];
                header("Location:index.php?controller=fontend&action=chitietkhachsan&id=$id");
            } else {
                $id = $_GET["id"];
                header("Location:index.php?controller=fontend&action=danhsachkhachsan&id=$id");
            }
        }
        require_once "./mvc/model/indexModel.php";
        $db = new Index();
        $data = $db->khachsan("hotel");
        $dataNew = $db->khachsanNew("hotel");
        $dataService = $db->service("service");
        $dataCity = $db->selectAll("city");

        $dataNews = $db->selectLimit("news", 0, 3);
        //var_dump($dataCity);
        require_once "./mvc/view/fontend/index.php";
        if (isset($_SESSION["thongbao"])) {
            echo $_SESSION["thongbao"];
            unset($_SESSION["thongbao"]);
        }

        break;
    case 'laydulieuHotel':
        if ($_GET["idht"]) {
            $idht = $_GET["idht"];
        }
        $dataRoomType = $db->getRoomType('hotel', $idht);
        require_once "./mvc/view/fontend/laydulieuHotel.php";
        break;
    case 'about':
        require_once "./mvc/view/fontend/about.php";
        break;
    case 'lienhe':
        // if (isset($_POST['guitin'])) {
        //     $to = "quang268200@gmail.com";
        //     $subject = "Contact Us";
        //     $email = $_POST['email'];
        //     $message = $_POST['message'];
        //     $headers = "From: $email". "\r\n" .
        //     'X-Mailer: PHP/' . phpversion();
        //     $sent = mail($to, $subject, $message, $headers);
        //     if ($sent) {
        //         print "Gửi mail thành công";
        //     } else {
        //         print "Có lỗi khi gửi mail";
        //     }
        // }
        require_once "./mvc/view/fontend/lienhe.php";
        break;
    case 'phong':
        require_once "./mvc/model/khuvucModel.php";
        $db = new khuvuc();
        $data = $db->khuvucHotel("city");
        require_once "./mvc/view/fontend/phong.php";
        break;
    case 'chitietkhachsan':
        if (isset($_GET["search"])) {
            $id = $_GET["id"];
            header("Location:index.php?controller=fontend&action=danhsachkhachsan&id=$id");
        }
        require_once "./mvc/model/modelchitietHotel.php";
        $db = new DetailHotel();
        $dataCity = $db->selectAll("city");
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
        }
        $db->updateView("hotel", $id);
        $data = $db->getHotel("hotel", $id);
        $service = $db->selectServiceHotel($id);
        array_push($data, $service);
        $dataRoomType = $db->getRoomType("roomtype", $id);
        for ($i = 0; $i < count($dataRoomType); $i++) {
            $countRoom = $db->getCountRoom("room", $dataRoomType[$i]["RoomTypeID"]);
            array_push($dataRoomType[$i], $countRoom);
        };
        $showComment = $db->showComment($id);
        // print_r($showComment);
        require_once "./mvc/view/fontend/chitietkhachsan.php";
        break;
    case 'danhsachkhachsan':
        require_once "./mvc/model/khuvucModel.php";
        $db = new khuvuc();
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
        }
        $dataCity = $db->selectAll("city");
        $nameCity = $db->danhsachHotel("city", $id);
        $data = $db->danhsachHotel("hotel", $id);
        for ($i = 0; $i < count($data); $i++) {
            $service = $db->selectServiceHotel($data[$i]["HotelID"]);
            array_push($data[$i], $service);
        };
        require_once "./mvc/view/fontend/danhsachkhachsan.php";
        break;
    case 'datphong':
        require_once "./mvc/view/fontend/datphong.php";
        break;
    case 'dangki':
        require_once "./mvc/model/user.php";
        $db = new User();
        $thongbao = "Đăng kí thành công";
        if (isset($_POST["luu"])) {
            $dataInsert = [
                "user" => $_POST["user"],
                "password" => $_POST["password"],
                "name" => $_POST["name"],
                "avatar" => $_FILES["avatar"]["name"],
                "sex" => $_POST["sex"],
                "phone" => $_POST["phone"],
                "email" => $_POST["email"],
                "address" => $_POST["address"],
                "permission" => 0
            ];
            if (empty($dataInsert["avatar"])) {
                $dataInsert["avatar"] = "user.jpg";
            }
            $tmp_images = $_FILES["avatar"]["tmp_name"];
            $rp_password = $_POST["rp_password"];
            $db->kiemtraImg("avatar");
            if (!is_numeric($dataInsert["phone"])) {
                $_SESSION["loi"] = "Số điện thoại không được là chữ";
            }
            if ($dataInsert["password"] != $rp_password) {
                $_SESSION["loi"] = "Mật khẩu lặp lại không giống nhau";
            }
            if (mb_strlen($dataInsert["user"]) <= 5 || mb_strlen($dataInsert["user"]) >= 20) {
                $_SESSION["loi"] = "Tài khoản phải từ 5 đến 20 kí tự ";
            }
            if (mb_strlen($dataInsert["password"]) <= 5 || mb_strlen($dataInsert["password"]) >= 20) {
                $_SESSION["loi"] = "Mật khẩu phải từ 5 đến 20 kí tự";
            }
            $checkUser = $db->checkUser("user", $dataInsert["user"]);
            if ($checkUser == 1) {
                $_SESSION["loi"] = "Tài khoản đã tồn tại";
            }
            if (isset($_SESSION["loi"])) {
                $loi = $_SESSION["loi"];
                unset($_SESSION["loi"]);
            } else {
                move_uploaded_file($tmp_images, "./mvc/Webroot/image/img_user/" . $dataInsert["avatar"]);
                $result = $db->insertData("user", $dataInsert);
                if ($result) {
                    $_SESSION["taikhoan"] = $dataInsert["user"];
                    $quyen = $db->getQuyen($dataInsert["user"]);
                    $_SESSION["quyen"] = $quyen['permission'];
                    $_SESSION["thongbao"] = "<script> thanhcong('$thongbao')</script>";
                    header("Location:index.php?controller=fontend&action=index");
                } else {
                    // echo "thất bại";
                }
            }
        }
        require_once "./mvc/view/fontend/dangki.php";
        break;
    case 'chonphong':
        require_once "./mvc/model/modelChonphong.php";
        $db = new chonphong();
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
        }
        $data = $db->getInfoRoom("room", $id);
        $data2 = $db->getRoom('room', $id);
        if (isset($_POST["chonphong"])) {
            if (isset($_SESSION["taikhoan"])) {
                if (empty($_POST["checkbox"])) {
                    $_SESSION["thongbao"] = '<div class="alert alert-danger" role="alert">
                   Bạn chưa chọn phòng !
                    </div>';
                } else {
                    $roomID = $_POST["checkbox"];
                    $booking = [
                        'user' => $_SESSION["taikhoan"],
                        'totalprice' =>  $_SESSION["songay"] * count($roomID) * $data["Price"],
                        'ngaynhan' => $_SESSION["ngaynhan"],
                        'ngaytra' => $_SESSION["ngaytra"],
                        'numberpeople' =>  count($roomID) * $data["AmountPeople"],
                        'handing' => 0
                    ];
                    $result = $db->insertData("booking", $booking);
                    $MaxBookingID = $db->MaxBookingID("booking");
                    for ($i = 0; $i < count($roomID); $i++) {
                        $db->bookingDetail("booking_detail", $MaxBookingID, $roomID[$i]);
                    }
                    header("Location:index.php?controller=fontend&action=dondatphong");
                }
            } else {
                $_SESSION["thongbao"] = '<div class="alert alert-danger" role="alert">
                Bạn chưa đăng kí tài khoản  !
                 </div>';
            }
        }
        require_once "./mvc/view/fontend/chonphong.php";
        break;
    case 'dondatphong':
        require_once "./mvc/model/dondatphongModel.php";
        $db = new dondatphong();
        if (isset($_SESSION["taikhoan"])) {
            $user = $_SESSION["taikhoan"];
        }
        $data = $db->selectDon($user);
        for ($i = 0; $i < count($data); $i++) {
            $room = $db->selectRoom($data[$i]["BookRoomID"]);
            array_push($data[$i], $room);
        };
        $data1 = $db->selectLichsu($user);
        for ($i = 0; $i < count($data1); $i++) {
            $room = $db->selectRoom($data1[$i]["BookRoomID"]);
            $ktComment = $db->ktComment("comment", $data1[$i]["BookRoomID"]);
            $getComment = $db->getComment("comment", $data1[$i]["BookRoomID"]);
            array_push($data1[$i], $room, $ktComment, $getComment);
        };
        // print_r($data1);

        require_once "./mvc/view/fontend/dondatphong.php";
        if (isset($_SESSION["thongbao"])) {
            echo $_SESSION["thongbao"];
            unset($_SESSION["thongbao"]);
        }
        break;
    case "danhgia":
        require_once "./mvc/model/connectDB.php";
        $db = new connectDB();
        if (isset($_POST["comment"])) {
            $dataComment = [
                'user' => $_SESSION["taikhoan"],
                'Content' => $_POST["content"],
                'HotelID' => $_POST["HotelID"],
                'BookRoomID' => $_POST["BookRoomID"],
            ];
            $thongbao = "Đánh giá đơn hàng thành công";
            $setComment = $db->insertData("comment", $dataComment);
            if ($setComment) {
                header("Location:index.php?controller=fontend&action=dondatphong");
                $_SESSION["thongbao"] = "<script> thanhcong('$thongbao')</script>";
            }
        }
        if (isset($_POST["updateComment"])) {
            $BookRoomID = $_POST["BookRoomID"];
            $updateComment = [
                'Content' => $_POST["content"]
            ];
            $thongbao = "Cập nhật đánh giá thành công";
            $update = $db->updateData("comment", $updateComment, "BookRoomID", $BookRoomID);
            if ($update) {
                header("Location:index.php?controller=fontend&action=dondatphong");
                $_SESSION["thongbao"] = "<script> thanhcong('$thongbao')</script>";
            }
        }
        break;
    case 'dangnhap':
        require_once "./mvc/model/user.php";
        $db = new User();
        $thanhcong = "Đăng nhập thành công";
        $thongbao = "Tài khoản hoặc mật khẩu không chính xác";
        if (isset($_POST["dangnhap"])) {
            $taikhoan = $_POST["taikhoan"];
            $matkhau = $_POST["matkhau"];
            $kq = $db->dangnhap($taikhoan, $matkhau);
            if ($kq == 0) {
                echo "Mật khẩu hoặc tài khoản không chính xác";
                header("Location:index.php?controller=fontend&action=index");
                $_SESSION["thongbao"] = "<script> thatbai('$thongbao')</script>";
            } else {
                $_SESSION["taikhoan"] = $taikhoan;
                $quyen = $db->getQuyen($taikhoan);
                $_SESSION["quyen"] = $quyen['permission'];
                header("Location:index.php?controller=fontend&action=index");
                $_SESSION["thongbao"] = "<script> thanhcong('$thanhcong')</script>";
            }
        }
        break;
    case 'dangxuat':
        session_destroy();
        header("Location:index.php?controller=fontend&action=index");
        break;
    case 'huyphong':
        require_once "./mvc/model/dondatphongModel.php";
        $db = new dondatphong();
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
        }
        $db->huyRoom1("booking_detail", $id);
        $result = $db->huyRoom1("booking", $id);
        if ($result) {
            header("Location:index.php?controller=fontend&action=dondatphong");
        }
        break;
    case 'tintuc':
        require_once "./mvc/model/tintucModel.php";
        $db = new tintuc();
        $data = $db->selectNewAll("news");
        require_once "./mvc/view/fontend/tintuc.php";
        break;
    case 'chitiettin':
        require_once "./mvc/model/tintucModel.php";
        $db = new tintuc();
        $data = $db->selectNewAll("news");
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
        }
        $dataNew = $db->getNew("news", $id);
        require_once "./mvc/view/fontend/chitiettin.php";
        break;
    case 'doimatkhau':
        require_once "./mvc/model/user.php";
        $db = new User();
        if (isset($_POST["xacnhan"])) {
            $user = $_POST["taikhoan"];
            $pass = $_POST["pass"];
            $newPass = $_POST["new_pass"];
            $rpPass = $_POST["repeat_pass"];
            $ktPass = $db->dangnhap($user, $pass);
            $updateData = [
                "Password" => $newPass,
            ];
            if ($ktPass < 1) {
                $_SESSION["thongbao"] = '<div class="alert alert-danger" role="alert">
                Mật khẩu bạn nhập không đúng!
               </div>';
            } else  if (mb_strlen($newPass) <= 5 || mb_strlen($newPass) >= 20) {
                $_SESSION["thongbao"] = '<div class="alert alert-danger" role="alert">
                Mật khẩu phải từ 5 đến 20 kí tự!
               </div>';
            } else  if ($newPass != $rpPass) {
                $_SESSION["thongbao"] = '<div class="alert alert-danger" role="alert">
                Mật khẩu lặp lại không giống nhau!
               </div>';
            } else {
                $thongbao = "Đổi mật khẩu thành công";
                $result = $db->updateData("user", $updateData, "User", $user);
                if ($result) {
                    $_SESSION["thanhcong"] = "<script> thanhcong('$thongbao')</script>";
                    header("Location:index.php?controller=fontend&action=doimatkhau");
                    exit();
                } else {
                    echo "Thất bại";
                }
            }
        }
        require_once "./mvc/view/fontend/doimatkhau.php";
        if (isset($_SESSION["thanhcong"])) {
            echo $_SESSION["thanhcong"];
            unset($_SESSION["thanhcong"]);
        }
        break;
    case 'capnhattk':
        require_once "./mvc/model/user.php";
        $db = new User();
        $dataUser = $db->selectUser("user", $_SESSION["taikhoan"]);
        //print_r($dataUser);
        if (isset($_POST["capnhat"])) {
            $dataUpdate = [
                "name" => $_POST["name"],
                "avatar" => $_FILES["avatar"]["name"],
                "sex" => $_POST["sex"],
                "phone" => $_POST["phone"],
                "email" => $_POST["email"],
                "address" => $_POST["address"],
            ];
            if (empty($dataUpdate["avatar"])) {
                $dataUpdate["avatar"] = $dataUser["Avatar"];
            }
            $tmp_images = $_FILES["avatar"]["tmp_name"];
            $db->kiemtraImg("avatar");
            if (!is_numeric($dataUpdate["phone"])) {
                $_SESSION["loi"] = "Số điện thoại không được là chữ";
            }
            if (isset($_SESSION["loi"])) {
                $loi = $_SESSION["loi"];
                unset($_SESSION["loi"]);
            } else {
                // print_r($dataUpdate);
                $thongbao = "Cập nhật tài khoản thành công";
                move_uploaded_file($tmp_images, "./mvc/Webroot/image/img_user/" . $dataUpdate["avatar"]);
                $result = $db->updateData("user", $dataUpdate, "User", $_SESSION["taikhoan"]);
                if ($result) {
                    $_SESSION["thanhcong"] = "<script> thanhcong('$thongbao')</script>";
                    header("Location:index.php?controller=fontend&action=capnhattk");
                    exit();
                } else {
                    echo "thất bại";
                }
            }
        }
        require_once "./mvc/view/fontend/capnhattk.php";
        if (isset($_SESSION["thanhcong"])) {
            echo $_SESSION["thanhcong"];
            unset($_SESSION["thanhcong"]);
        }
        break;
    default:
        require_once "./mvc/view/fontend/index.php";
        break;
}
