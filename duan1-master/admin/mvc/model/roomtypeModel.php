<?php
require_once 'connectDB.php';
class RoomTypeModel extends connectDB
{
    //lấy dữ liệu của thành viên
    function selectRoomType($table,$start,$limit)
    {
        $sql = "SELECT * FROM $table INNER JOIN hotel on $table.HotelID=hotel.HotelID ORDER BY hotel.HotelID DESC limit $start,$limit ";
        $this->result = $this->conn->query($sql)->fetchAll();
        return $this->result;
    }
    function selectRoomType_one($table)
    {
        $sql = "SELECT * FROM $table";
        $this->result = $this->conn->query($sql)->fetchAll();
        return $this->result;
    }
    //Lấy thông tin của 1 kiểu phòng
    function getRoomType($table, $id)
    {
        $sql = "SELECT * FROM $table where RoomTypeID=$id";
        $this->result = $this->conn->query($sql)->fetch();
        return $this->result;
    }
    function getNameRoomType($table, $id)
    {
        $sql = "SELECT * FROM $table where NameRoomType='$id'";
        $this->result = $this->conn->query($sql)->rowCount();
        return $this->result;
    }
    //cập nhật thành phố
    //Xóa thành viên
    function deleteRoomType($table, $id)
    {
        $sql = "DELETE FROM $table where RoomTypeID=$id";
        $this->result = $this->conn->query($sql);
        return $this->result;
    }
}
