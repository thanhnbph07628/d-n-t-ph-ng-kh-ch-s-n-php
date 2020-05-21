<?php
require_once 'connectDB.php';
class InfomationModel extends connectDB
{
    //lấy dữ liệu của thành viên
    function selectInfomation($table)
    {
        $sql = "SELECT * FROM $table";
        $this->result = $this->conn->query($sql);
        return $this->result;
    }
    //lấy toàn bộ dữ liệu của thành viên
    function getAll($table){
        $data=$this->selectInfomation($table)->fetchAll();
      return $data; 
     }
    //Thêm thành viên
    function addInfomation($table,$logo,$logotext,$address,$email,$phone)
    {
        $sql = "INSERT INTO  $table values(null,'$logo','$logotext','$address','$email','$phone')";
        $this->result = $this->conn->query($sql);
        return $this->result;
    }
    //Lấy thông tin của 1 thành phố
    function getInfomation($table, $id)
    {
        $sql = "SELECT * FROM $table where InfoID=$id";
        $this->result = $this->conn->query($sql)->fetch();
        return $this->result;
    }
    function getNameInfomation($table, $id)
    {
        $sql = "SELECT * FROM $table where NameInfomation='$id'";
        $this->result = $this->conn->query($sql)->rowCount();
        return $this->result;
    }
    //cập nhật thành phố
    function updateInfomation($table, $logo,$logotext,$address,$email,$phone,$id)
    {
        $sql = "UPDATE $table SET Logo='$logo', LogoText='$logotext', Address='$address', Email='$email', Phone='$phone'  where InfoID=$id";
        $this->result = $this->conn->query($sql);
        return $this->result;
    }
    //Xóa thành viên
    function deleteInfomation($table, $id)
    {
        $sql = "DELETE FROM $table where InfoID=$id";
        $this->result = $this->conn->query($sql);
        return $this->result;
    }
}
