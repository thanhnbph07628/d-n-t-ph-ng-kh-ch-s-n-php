<?php
require_once 'connectDb.php';
class DetailHotel extends connectDB
{
    function getHotel($table, $id)
    {
        $sql = "SELECT * FROM $table INNER JOIN city WHERE $table.CityID=city.CityID and HotelID=$id";
        $this->result = $this->conn->query($sql)->fetch();
        return $this->result;
    }
    function getRoomType($table, $id)
    {
        $sql = "SELECT * FROM $table where HotelID=$id";
        $this->result = $this->conn->query($sql)->fetchAll();
        return $this->result;
    }
    function getCountRoom($table, $id)
    {
        $sql = "SELECT COUNT(room.RoomID) FROM $table INNER JOIN roomtype ON room.RoomTypeID=roomtype.RoomTypeID WHERE roomtype.RoomTypeID=$id";
        $this->result = $this->conn->query($sql)->fetchColumn();
        return $this->result;
    }
    function getQuyen($user)
    {
        $sql = "select permission from user Where User='$user'";
        $this->result = $this->conn->query($sql)->fetch();
        return $this->result;
    }
    function check($taikhoan)
    {
        $sql = "SELECT permission from user where user='$taikhoan'";
        $this->result = $this->conn->query($sql)->fetchColumn();
        return $this->result;
    }
    function selectServiceHotel($id)
    {
        $sql = "SELECT * FROM convenient INNER JOIN service on convenient.ServiceID=service.ServiceID WHERE convenient.HotelID=$id";
        $this->result = $this->conn->query($sql)->fetchAll();
        return $this->result;
    }
    function updateView($table, $id)
    {
        $sql = "UPDATE $table
    SET view=view+1
    WHERE HotelID=$id ";
        $this->result = $this->conn->query($sql);
        return $this->result;
    }
    function showComment($hotelID)
    {
        $sql = "SELECT user.User,user.Avatar,comment.CreateAt,comment.Content FROM comment INNER JOIN hotel
        ON comment.HotelID=hotel.HotelID
        INNER JOIN User ON comment.User=user.User WHERE hotel.HotelID=$hotelID ORDER BY comment.CreateAt DESC " ;
        $this->result = $this->conn->query($sql)->fetchAll();
        return $this->result;
    }
}
