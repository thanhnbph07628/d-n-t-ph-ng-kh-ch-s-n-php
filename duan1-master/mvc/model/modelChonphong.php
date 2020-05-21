<?php
require_once 'connectDb.php';
class chonphong extends connectDB
{
    function getInfoRoom($table, $id)
    {
        $sql = "
        SELECT
        hotel.NameHotel,
        roomtype.NameRoomType,
        roomtype.Images,
        roomtype.NumberBeds,
        roomtype.Price,
        roomtype.AmountPeople,
        COUNT(room.RoomTypeID) AS countRoom
    FROM
    $table
    JOIN hotel ON room.HotelID = hotel.HotelID
    JOIN roomtype ON room.RoomTypeID = roomtype.RoomTypeID
    WHERE
        room.RoomTypeID = $id GROUP BY room.RoomTypeID
       ";
        $this->result = $this->conn->query($sql)->fetch();
        return $this->result;
    }
    function getRoom($table, $id)
    {
        $sql = "SELECT * FROM $table where RoomTypeID=$id";
        $this->result = $this->conn->query($sql)->fetchAll();
        return $this->result;
    }
    function bookingDetail($table,$bookroomID,$roomID){
        $sql = "INSERT INTO $table VALUES (NULL,$bookroomID,$roomID);";
        $this->result = $this->conn->query($sql);
        return $this->result;
    }
    function MaxBookingID($table)
    {
        $sql = "SELECT MAX(BookRoomID) as BookRoomID
        FROM $table";
        $this->result = $this->conn->query($sql)->fetchColumn();
        return $this->result;
    }
}
