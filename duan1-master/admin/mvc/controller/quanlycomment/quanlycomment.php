<?php
require_once './mvc/model/commentModel.php';
$db = new commentModel();
if (isset($_GET["action"])) {
    $action = $_GET["action"];
} else {
    $action = "show-comment";
}
switch ($action) {
    case 'show-comment':
        $start = 0;
        $limit = 4;
        if (isset($_GET["page"])) {
            $page = $_GET["page"];
        } else {
            $page = 1;
        }
        $start = $db->phantrangStartComment($page, $limit);
        $data = $db->selectComment("comment", $start, $limit);
        $phantrang = $db->phantrangComment('comment', 'CommentID', $limit, $page, 'quanlycomment', 'show-comment');
        require_once "./mvc/view/view-comment/show-comment.php";
        break;
    case 'chitietcomment':
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
        }
        $data = $db->selectCommentID("comment", $id);
        require_once "./mvc/view/view-comment/chitietcomment.php";
        break;
    case 'delete':
        if (isset($_GET["idHotel"])) {
            $idHotel = $_GET["idHotel"];
        }
        if (isset($_GET["idComment"])) {
            $idComment = $_GET["idComment"];
            $result = $db->deleteComment("comment", $idComment);
            if ($result) {
                $_SESSION["thongbao"] = '<div class="alert alert-success" role="alert">
 Xóa comment thành công!
 </div>';
                header("Location:index.php?controller=quanlycomment&action=chitietcomment&id=$idHotel");
            } else {
                echo "Thất bại";
            }
        }
        break;
    default:
        # code...
        break;
}
