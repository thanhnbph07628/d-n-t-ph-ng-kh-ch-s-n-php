<?php
require_once 'connectDB.php';
class cityModel extends connectDB
{
    //lấy dữ liệu của thành viên
    function selectCity($table, $start, $limit)
    {
        $sql = "SELECT * FROM $table ORDER BY $table.createat DESC limit $start,$limit";
        $this->result = $this->conn->query($sql)->fetchAll();
        return $this->result;
    }
    //Thêm thành viên
    function selectServiceID($id)
    {
        $sql = "SELECT * FROM convenient INNER JOIN service ON convenient.ServiceID=service.ServiceID WHERE convenient.HotelID=$id";
        $this->result = $this->conn->query($sql);
        return $this->result;
    }
    function addCity($table, $nameCity, $images)
    {
        $sql = "INSERT INTO  $table values(null,'$nameCity','$images')";
        $this->result = $this->conn->query($sql);
        return $this->result;
    }
    //Lấy thông tin của 1 thành phố
    function getCity($table, $id)
    {
        $sql = "SELECT * FROM $table where CityID=$id";
        $this->result = $this->conn->query($sql)->fetch();
        return $this->result;
    }
    function getNameCity($table, $id)
    {
        $sql = "SELECT * FROM $table where NameCity='$id'";
        $this->result = $this->conn->query($sql)->rowCount();
        return $this->result;
    }
    //cập nhật thành phố
    function updateCity($table, $nameCity, $images, $id)
    {
        $sql = "UPDATE $table SET NameCity='$nameCity',Images='$images' where CityID=$id";
        $this->result = $this->conn->query($sql);
        return $this->result;
    }
    //Xóa thành viên
    function deleteCity($table, $id)
    {
        $sql = "DELETE FROM $table where CityID=$id";
        $this->result = $this->conn->query($sql);
        return $this->result;
    }
}
