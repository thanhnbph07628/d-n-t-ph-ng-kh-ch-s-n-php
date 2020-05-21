<?php
require_once 'connectDB.php';
class serviceModel extends connectDB
{
    //lấy dữ liệu của city và Service
    function selectService($table,$start,$limit)
    {
        $sql = "SELECT * FROM $table limit $start,$limit";
        $this->result = $this->conn->query($sql)->fetchAll();
        return $this->result;
    }
    function selectCity($table)
    {
        $sql = "SELECT * FROM $table";
        $this->result = $this->conn->query($sql)->fetchAll();
        return $this->result;
    }
    //Lấy thông tin của 1 thành phố
    function getService($table, $id)
    {
        $sql = "SELECT * FROM $table where ServiceID=$id";
        $this->result = $this->conn->query($sql)->fetch();
        return $this->result;
    }
    function getNameService($table, $id)
    {
        $sql = "SELECT * FROM $table where NameService='$id'";
        $this->result = $this->conn->query($sql)->rowCount();
        return $this->result;
    }
    //Xóa thành viên
    function deleteService($table, $id)
    {
        $sql = "DELETE FROM $table where ServiceID=$id";
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
