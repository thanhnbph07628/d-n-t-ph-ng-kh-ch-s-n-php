<?php
require_once 'connectDb.php';
class khuvuc extends connectDB{
    function khuvucHotel($table){
       $sql="SELECT * FROM $table";
       $this->result=$this->conn->query($sql)->fetchAll();
       return $this->result;
    }
    function khachsanNew($table){
        $sql="Select * from $table  ORDER BY Create_at DESC limit 0,4";
        $this->result=$this->conn->query($sql)->fetchAll();
        return $this->result;
    }
    function check($taikhoan){
        $sql="SELECT permission from user where user='$taikhoan'";
        $this->result=$this->conn->query($sql)->fetchColumn();
        return $this->result;
    }
    function danhsachHotel($table,$id){
        $sql="SELECT * FROM $table where CityID='$id'";
        $this->result=$this->conn->query($sql)->fetchAll();
        return $this->result;
     }
     function selectServiceHotel($id){
        $sql="SELECT * FROM convenient INNER JOIN service on convenient.ServiceID=service.ServiceID WHERE convenient.HotelID=$id";
        $this->result = $this->conn->query($sql)->fetchAll();
        return $this->result;
    }
}
