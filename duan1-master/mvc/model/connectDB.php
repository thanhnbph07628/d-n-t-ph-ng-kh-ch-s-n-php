<?php
class connectDB
{
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "duan1web";
    public $conn = NULL;
    public $result = NULL;
    function __construct()
    {
        $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname;charset=utf8", $this->username, $this->password);
        if (!$this->conn) {
            echo "Kết nối thất bại";
        } else {
            // echo "Kết nối thành công";
        }
        return $this->conn;
    }
    function selectAll($table)
    {
        $sql = "Select* from $table";
        $this->result = $this->conn->query($sql)->fetchAll();
        return $this->result;
    }
    function selectLimit($table, $start, $limit)
    {
        $sql = "Select* from $table ORDER BY CreateAt DESC limit  $start,$limit ";
        $this->result = $this->conn->query($sql)->fetchAll();
        return $this->result;
    }
    function getRoomType($table, $id)
    {
        $sql = "SELECT * FROM $table where CityID=$id";
        $this->result = $this->conn->query($sql)->fetchAll();
        return $this->result;
    }
    function selectID($table, $rowID, $id)
    {
        $sql = "SELECT * FROM $table where $rowID='$id'";
        $this->result = $this->conn->query($sql)->fetch();
        return $this->result;
    }
    function insertData($table, $data)
    {
        $sql = "INSERT INTO  $table values('null";
        foreach ($data as $key => $value) {
            $sql = $sql . "','" . $value;
        }
        $sql = $sql . "',current_timestamp())";
        $this->result = $this->conn->query($sql);
        return $this->result;
    }
    function updateData($table, $data, $tableID, $id)
    {
        $sql = "UPDATE $table set";
        foreach ($data as $key => $value) {
            $sql = $sql . " " . $key . "=" . "'$value',";
        }
        $sql = $sql . "' where $tableID=$id";
        $sql = str_replace(",'", ' ', $sql);
        $this->result = $this->conn->query($sql);
        return $this->result;
    }
    function selectLimitUser($table, $start, $limit)
    {
        $sql = "Select* from $table  limit  $start,$limit ";
        $this->result = $this->conn->query($sql)->fetch();
        return $this->result;
    }
}
