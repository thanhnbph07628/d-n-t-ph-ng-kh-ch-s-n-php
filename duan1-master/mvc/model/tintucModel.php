<?php
require_once 'connectDb.php';
class tintuc extends connectDB
{
    function selectNewAll($table)
    {
        $sql = "Select* from $table ORDER BY CreateAT DESC";
        $this->result = $this->conn->query($sql)->fetchAll();
        return $this->result;
    }
    function getNew($table, $id)
    {
        $sql = "SELECT * FROM $table where NewID=$id";
        $this->result = $this->conn->query($sql)->fetch();
        return $this->result;
    }
    function bookingDetail($table,$bookroomID,$roomID){
        $sql = "INSERT INTO $table VALUES (NULL,$bookroomID,$roomID);";
        $this->result = $this->conn->query($sql);
        return $this->result;
    }
    function MaxBookingID($table)
    {
        $sql = "SELECT MAX(BookRoomID) as BookRoomID
        FROM $table";
        $this->result = $this->conn->query($sql)->fetchColumn();
        return $this->result;
    }
}
