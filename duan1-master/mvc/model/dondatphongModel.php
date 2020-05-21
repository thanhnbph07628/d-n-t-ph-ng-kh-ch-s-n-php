<?php
require_once 'connectDb.php';
class dondatphong extends connectDB
{
    function selectDon($taikhoan)
    {
        $sql = "SELECT
         hotel.HotelID,
       hotel.NameHotel,
       USER.Name,
       booking.BookingDate,
       booking.DatedCheck,
       booking.CreateAt,
       booking.Handling,
       booking.BookRoomID,
       booking.TotalPrice,
       hotel.Address
   FROM
       USER
   INNER JOIN booking ON USER.User = booking.User
   INNER JOIN booking_detail ON booking.BookRoomID = booking_detail.BookRoomID
   INNER JOIN room ON booking_detail.RoomID = room.RoomID
   INNER JOIN hotel ON room.HotelID = hotel.HotelID
   WHERE
       USER.User ='$taikhoan' and booking.Handling<3
       GROUP BY booking.BookRoomID Order by booking.CreateAt";
        $this->result = $this->conn->query($sql)->fetchAll();
        return $this->result;
    }
    function selectLichsu($taikhoan)
    {
        $sql = "SELECT
         hotel.HotelID,
       hotel.NameHotel,
       USER.Name,
       booking.BookingDate,
       booking.DatedCheck,
       booking.CreateAt,
       booking.Handling,
       booking.BookRoomID,
       booking.TotalPrice,
       hotel.Address
   FROM
       USER
   INNER JOIN booking ON USER.User = booking.User
   INNER JOIN booking_detail ON booking.BookRoomID = booking_detail.BookRoomID
   INNER JOIN room ON booking_detail.RoomID = room.RoomID
   INNER JOIN hotel ON room.HotelID = hotel.HotelID
   WHERE
       USER.User ='$taikhoan' and booking.Handling=3
       GROUP BY booking.BookRoomID Order by booking.CreateAt DESC";
        $this->result = $this->conn->query($sql)->fetchAll();
        return $this->result;
    }
    function selectRoom($BookRoomID)
    {
        $sql = "SELECT room.RoomName,roomtype.NameRoomType,roomtype.Price FROM booking_detail INNER JOIN room ON booking_detail.RoomID=room.RoomID
       INNER JOIN roomtype ON room.RoomTypeID=roomtype.RoomTypeID WHERE booking_detail.BookRoomID=$BookRoomID";
        $this->result = $this->conn->query($sql)->fetchAll();
        return $this->result;
    }
    function huyRoom1($table, $BookRoomID)
    {
        $sql = "DELETE FROM $table where BookRoomID=$BookRoomID ";
        $this->result = $this->conn->query($sql);
        return $this->result;
    }
    function ktComment($table, $BookRoomID)
    {
        $sql = "Select * from $table where BookRoomID=$BookRoomID";
        $this->result = $this->conn->query($sql)->rowCount();
        return $this->result;
    }
    function getComment($table, $BookRoomID)
    {
        $sql = "Select Content from $table where BookRoomID=$BookRoomID";
        $this->result = $this->conn->query($sql)->fetch();
        return $this->result;
    }
}
