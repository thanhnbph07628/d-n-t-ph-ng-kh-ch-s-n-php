<?php
require_once 'connectDB.php';
class User extends connectDB
{
    //lấy dữ liệu của thành viên
    function selectUser($table, $start, $limit)
    {
        $sql = "SELECT * FROM $table limit $start,$limit ";
        $this->result = $this->conn->query($sql)->fetchAll();
        return $this->result;
    }
    //Xóa thành viên
    function deleteUser($table, $id)
    {
        $sql = "DELETE FROM $table where User='$id'";
        $this->result = $this->conn->query($sql);
        return $this->result;
    }
    function showPermission($table, $id)
    {
        $sql = "SELECT permission FROM $table where user='$id'";
        $this->result = $this->conn->query($sql)->fetch();
        return $this->result;
    }
    function updatePermission($table, $id, $permission)
    {
        $sql = "UPDATE $table SET permission=$permission WHERE user='$id'";
        $this->result = $this->conn->query($sql);
        return $this->result;
    }
}
