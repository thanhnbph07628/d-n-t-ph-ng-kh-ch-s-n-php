<?php
require_once 'connectDb.php';
class dondatphong extends connectDB
{
    function selectDon($start, $limit)
    {
        $sql = "SELECT
       hotel.NameHotel,
       USER.Name,
       booking.BookingDate,
       booking.DatedCheck,
       booking.CreateAt,
       booking.Handling,
       booking.BookRoomID,
       booking.TotalPrice,
       hotel.Address,
       User.Phone,
       room.RoomID
   FROM
       USER
   INNER JOIN booking ON USER.User = booking.User
   INNER JOIN booking_detail ON booking.BookRoomID = booking_detail.BookRoomID
   INNER JOIN room ON booking_detail.RoomID = room.RoomID
   INNER JOIN hotel ON room.HotelID = hotel.HotelID
   WHERE booking.Handling  < 3
       GROUP BY booking.BookRoomID ORDER BY CreateAt DESC LIMIT $start,$limit";
        $this->result = $this->conn->query($sql)->fetchAll();
        return $this->result;
    }
    function selectLichsuDon($start, $limit)
    {
        $sql = "SELECT
       hotel.NameHotel,
       USER.Name,
       booking.BookingDate,
       booking.DatedCheck,
       booking.CreateAt,
       booking.Handling,
       booking.BookRoomID,
       booking.TotalPrice,
       hotel.Address,
       User.Phone,
       room.RoomID
   FROM
       USER
   INNER JOIN booking ON USER.User = booking.User
   INNER JOIN booking_detail ON booking.BookRoomID = booking_detail.BookRoomID
   INNER JOIN room ON booking_detail.RoomID = room.RoomID
   INNER JOIN hotel ON room.HotelID = hotel.HotelID
   WHERE booking.Handling=3
       GROUP BY booking.BookRoomID ORDER BY CreateAt DESC LIMIT $start,$limit";
        $this->result = $this->conn->query($sql)->fetchAll();
        return $this->result;
    }
    function selectRoom($BookRoomID)
    {
        $sql = "SELECT  room.RoomID,room.RoomName,roomtype.NameRoomType,roomtype.Price FROM booking_detail INNER JOIN room ON booking_detail.RoomID=room.RoomID
       INNER JOIN roomtype ON room.RoomTypeID=roomtype.RoomTypeID WHERE booking_detail.BookRoomID=$BookRoomID";
        $this->result = $this->conn->query($sql)->fetchAll();
        return $this->result;
    }
    function huytraRoom($table, $BookRoomID)
    {
        $sql = "DELETE FROM $table where BookRoomID=$BookRoomID ";
        $this->result = $this->conn->query($sql);
        return $this->result;
    }
    function update($table, $row, $rowid, $id, $value)
    {
        $sql = "UPDATE $table
        SET $row=$value
        WHERE $rowid='$id'";
        $this->result = $this->conn->query($sql);
        return $this->result;
    }
    function selectID($table, $row, $rowid, $id)
    {
        $sql = "SELECT $row from $table where $rowid='$id'";
        $this->result = $this->conn->query($sql)->fetchColumn();
        return $this->result;
    }
    function selectIDtt($table, $row, $rowid, $id)
    {
        $sql = "SELECT $row from $table where $rowid='$id'";
        $this->result = $this->conn->query($sql)->rowCount();
        return $this->result;
    }
    function total_pageDon($table, $tableID, $limit,$dk)
    {
        $sql = "SELECT COUNT($tableID) FROM $table where Handling $dk";
        $total_records = $this->conn->query($sql)->fetchColumn();
        $total_page = ceil($total_records / $limit);
        return $total_page;
    }
    function phantrangStartDon($page, $limit)
    {
        $start = ($page * $limit) - $limit;
        return $start;
    }
    function phantrangDon($table, $tableID, $limit, $page, $controller, $action,$dk)
    {
        $total_page = $this->total_pageDon($table, $tableID, $limit,$dk);
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
