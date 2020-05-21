<?php
require_once 'connectDB.php';
class tintucModel extends connectDB
{
    //lấy dữ liệu của thành viên
    function selectNew($table, $start, $limit)
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
    function addNew($table, $nameNew, $images)
    {
        $sql = "INSERT INTO  $table values(null,'$nameNew','$images')";
        $this->result = $this->conn->query($sql);
        return $this->result;
    }
    //Lấy thông tin của 1 thành phố
    function getNew($table, $id)
    {
        $sql = "SELECT * FROM $table where NewID=$id";
        $this->result = $this->conn->query($sql)->fetch();
        return $this->result;
    }
    function getNameNew($table, $id)
    {
        $sql = "SELECT * FROM $table where NameNew='$id'";
        $this->result = $this->conn->query($sql)->rowCount();
        return $this->result;
    }
    //cập nhật thành phố
    function updateNew($table, $nameNew, $images, $id)
    {
        $sql = "UPDATE $table SET NameNew='$nameNew',Images='$images' where NewID=$id";
        $this->result = $this->conn->query($sql);
        return $this->result;
    }
    //Xóa thành viên
    function deleteNew($table, $id)
    {
        $sql = "DELETE FROM $table where NewID=$id";
        $this->result = $this->conn->query($sql);
        return $this->result;
    }
}
