<?php
require_once 'connectDB.php';
class commentModel extends connectDB
{
    //lấy dữ liệu của thành viên
    function selectComment($table, $start, $limit)
    {
        $sql = "SELECT
        hotel.HotelID,
        hotel.NameHotel,
        hotel.Images,
        COUNT(COMMENT.HotelID) AS NumberComment
    FROM $table
    INNER JOIN hotel ON COMMENT
        .HotelID = hotel.HotelID
    GROUP BY
        hotel.HotelID ORDER BY $table.CreateAt DESC limit $start,$limit";
        $this->result = $this->conn->query($sql)->fetchAll();
        return $this->result;
    }
    function selectCommentID($table, $id)
    {
        $sql = "SELECT comment.CommentID, user.User,comment.CreateAt,comment.Content FROM $table INNER JOIN user ON comment.User=user.User WHERE HotelID=$id ORDER BY comment.CreateAt DESC";
        $this->result = $this->conn->query($sql)->fetchAll();
        return $this->result;
    }
    function deleteComment($table, $id)
    {
        $sql = "DELETE FROM $table where CommentID=$id";
        $this->result = $this->conn->query($sql);
        return $this->result;
    }
    function total_pageComment($table, $tableID, $limit)
    {
        $sql = "SELECT COUNT($tableID) FROM $table GROUP BY CommentID";
        $total_records = $this->conn->query($sql)->fetchColumn();
        $total_page = ceil($total_records / $limit);
        return $total_page;
    }
    function phantrangStartComment($page, $limit)
    {
        $start = ($page * $limit) - $limit;
        return $start;
    }
    function phantrangComment($table, $tableID, $limit, $page, $controller, $action)
    {
        $total_page = $this->total_pageComment($table, $tableID, $limit);
        if ($total_page > 1) {
            $linkPhangTrang = '
        <nav aria-label="Page navigation example" style="margin-left:400px">
            <ul class="pagination">';
            if ($page > 1) {
                $linkPhangTrang = $linkPhangTrang . '<li class="page-item"><a class="page-link" href="index.php?controller=' . $controller . '&action=' . $action . '&page=' . ($page - 1) . '">Previous</a></li>';
            }
            for ($i = 1; $i <= $total_page; $i++) {
                if ($page == $i) {
                    $linkPhangTrang = $linkPhangTrang . '<li class="page-item active"><a class="page-link" href="index.php?controller=' . $controller . '&action=' . $action . '&page=' . $i . '">' . $i . '</a></li>';
                } else {
                    $linkPhangTrang = $linkPhangTrang . '<li class="page-item"><a class="page-link" href="index.php?controller=' . $controller . '&action=' . $action . '&page=' . $i . '">' . $i . '</a></li>';
                }
            }
            if ($page < $total_page) {
                $linkPhangTrang = $linkPhangTrang . '<li class="page-item"><a class="page-link" href="index.php?controller=' . $controller . '&action=' . $action . '&page=' . ($page + 1) . '">Next</a></li>';
            }
            $linkPhangTrang = $linkPhangTrang . '</ul>
        </nav>';
            return $linkPhangTrang;
        }
    }
}
