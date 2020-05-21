<?php
require_once 'connectDB.php';
class roomModel extends connectDB
{
    //lấy dữ liệu của city và hotel
    function selectRoom($table,$start,$limit)
    {
        $sql = "SELECT room.RoomID,room.RoomName,room.Images,hotel.NameHotel,roomtype.NameRoomType,room.CreateAt
        FROM $table
          JOIN hotel ON room.HotelID=hotel.HotelID
          JOIN  roomtype ON room.RoomTypeID=roomtype.RoomTypeID ORDER BY hotel.HotelID DESC limit $start,$limit ";
        $this->result = $this->conn->query($sql)->fetchAll();
        return $this->result;
    }
    function selectAll($table)
    {
        $sql = "SELECT * FROM $table";
        $this->result = $this->conn->query($sql)->fetchAll();
        return $this->result;
    }
    function getRoomID($table,$id)
    {
        $sql = "SELECT * FROM $table where RoomID=$id";
        $this->result = $this->conn->query($sql)->fetch();
        return $this->result;
    }
    function getRoomType($table,$id)
    {
        $sql = "SELECT * FROM $table where HotelID=$id";
        $this->result = $this->conn->query($sql)->fetchAll();
        return $this->result;
    }
    function getRoomTypeID($table,$id)
    {
        $sql = "SELECT roomtype.NameRoomType,roomtype.RoomTypeID FROM $table INNER JOIN roomtype WHERE room.RoomTypeID=roomtype.RoomTypeID AND room.RoomID=$id";
        $this->result = $this->conn->query($sql)->fetch();
        return $this->result;
    }
    //Xóa thành viên
    function deleteRoom($table, $id)
    {
        $sql = "DELETE FROM $table where RoomID=$id";
        $this->result = $this->conn->query($sql);
        return $this->result;
    }
}
