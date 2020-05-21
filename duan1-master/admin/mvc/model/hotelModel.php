<?php
require_once 'connectDB.php';
class hotelModel extends connectDB
{
    //lấy dữ liệu của city và hotel
    function selectHotel($table, $start, $limit)
    {
        $sql = "SELECT * FROM $table INNER JOIN city ON hotel.CityID=city.CityID ORDER BY hotel.CityID DESC limit $start,$limit ";
        $this->result = $this->conn->query($sql)->fetchAll();
        return $this->result;
    }
    function selectServiceHotel($id){
        $sql="SELECT * FROM convenient INNER JOIN service on convenient.ServiceID=service.ServiceID WHERE convenient.HotelID=$id";
        $this->result = $this->conn->query($sql)->fetchAll();
        return $this->result;
    }
    function selectCity($table)
    {
        $sql = "SELECT * FROM $table";
        $this->result = $this->conn->query($sql)->fetchAll();
        return $this->result;
    }
    function insertService($table,$HotelID,$ServiceID)
    {
        $sql = "INSERT INTO $table VALUES (NULL,$HotelID,$ServiceID);";
        $this->result = $this->conn->query($sql);
        return $this->result;
    }
    //Lấy thông tin của 1 thành phố
    function MaxHotelID($table)
    {
        $sql = "SELECT MAX(HotelID) as HotelID
        FROM $table";
        $this->result = $this->conn->query($sql)->fetchColumn();
        return $this->result;
    }
    function getHotel($table, $id)
    {
        $sql = "SELECT * FROM $table where HotelID=$id";
        $this->result = $this->conn->query($sql)->fetch();
        return $this->result;
    }
    function getNameHotel($table, $id)
    {
        $sql = "SELECT * FROM $table where NameHotel='$id'";
        $this->result = $this->conn->query($sql)->rowCount();
        return $this->result;
    }
    //Xóa thành viên
    function delete($table,$tableID, $id)
    {
        $sql = "DELETE FROM $table where $tableID=$id";
        $this->result = $this->conn->query($sql);
        return $this->result;
    }
    function nameCity($table, $id)
    {
        $sql = "Select NameCity FROM $table where CityID=$id";
        $this->result = $this->conn->query($sql)->fetch();
        return $this->result;
    }
}
