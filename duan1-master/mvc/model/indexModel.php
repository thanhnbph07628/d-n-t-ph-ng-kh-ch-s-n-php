<?php
require_once 'connectDb.php';
class Index extends connectDB{
    function khachsan($table){
       $sql="Select * from $table ORDER BY view DESC limit 0,4 ";
       $this->result=$this->conn->query($sql)->fetchAll();
       return $this->result;
    }
    function khachsanNew($table){
        $sql="Select * from $table  ORDER BY Create_at DESC limit 0,4";
        $this->result=$this->conn->query($sql)->fetchAll();
        return $this->result;
    }
    function service($table){
        $sql="Select * from $table limit 0,6";
        $this->result=$this->conn->query($sql)->fetchAll();
        return $this->result;
     }
    function check($taikhoan){
        $sql="SELECT permission from user where user='$taikhoan'";
        $this->result=$this->conn->query($sql)->fetchColumn();
        return $this->result;
    }
    function NameHotel($id){
        $sql="SELECT NameHotel from city where CityID=$id";
        $this->result=$this->conn->query($sql)->fetch();
        return $this->result;
    }
}
?>