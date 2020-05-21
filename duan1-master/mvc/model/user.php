<?php
require_once 'connectDb.php';
class User extends connectDB{
    function dangnhap($tk,$mk){
       $sql="select User,Password from user where User='$tk' and Password='$mk'";
       $this->result=$this->conn->query($sql)->rowCount();
       return $this->result;
    }
    function getQuyen($user){
        $sql="select permission from user Where User='$user'";
        $this->result=$this->conn->query($sql)->fetch();
        return $this->result;
    }
    function check($taikhoan){
        $sql="SELECT permission from user where user='$taikhoan'";
        $this->result=$this->conn->query($sql)->fetchColumn();
        return $this->result;
    }
    function insertData($table, $data)
    {
        $sql = "INSERT INTO  $table values(";
        foreach ($data as $key => $value) {
            $sql = $sql ."'". $value."'," ;
        }
        $sql = $sql . "current_timestamp())";
        $this->result = $this->conn->query($sql);
        return $this->result;
    }
    function updateData($table, $data, $tableID, $id)
    {
        $sql = "UPDATE $table set";
        foreach ($data as $key => $value) {
            $sql = $sql . " " . $key . "=" . "'$value',";
        }
        $sql = $sql . "' where $tableID='$id'";
        $sql = str_replace(",'", ' ', $sql);
        $this->result = $this->conn->query($sql);
        return $this->result;
    }
    function kiemtraImg($img)
    {
        $checkimg = array("image/png", "image/jpeg", "image/gif","");
        $typeimg = $_FILES["$img"]["type"];
        if (!in_array("$typeimg", $checkimg) && $typeimg==0) {
            return $_SESSION["loi"] = "lỗi định dạng ảnh";
        }
        return "thành công";
    }
    function checkUser($table,$user){
        $sql="select * from $table where User='$user'";
        $this->result=$this->conn->query($sql)->rowCount();
        return $this->result;
    }
    function selectUser($table,$user){
        $sql="select * from $table where User='$user'";
        $this->result=$this->conn->query($sql)->fetch();
        return $this->result;
    }
   
}
?>