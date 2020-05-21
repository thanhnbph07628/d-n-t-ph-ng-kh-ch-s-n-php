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
    function selectAll($table)
    {
        $sql = "SELECT * FROM $table";
        $this->result = $this->conn->query($sql)->fetchAll();
        return $this->result;
    }
    function kiemtraImg($img)
    {
        $checkimg = array("image/png", "image/jpeg", "image/gif", "");
        $typeimg = $_FILES["$img"]["type"];
        if (!in_array("$typeimg", $checkimg) && $typeimg == 0) {
            return $_SESSION["loi"] = "lỗi định dạng ảnh";
        }
        return "thành công";
    }
    function total_page($table, $tableID, $limit)
    {
        $sql = "SELECT COUNT($tableID) FROM $table";
        $total_records = $this->conn->query($sql)->fetchColumn();
        $total_page = ceil($total_records / $limit);
        return $total_page;
    }
    function phantrangStart($page, $limit)
    {
        $start = ($page * $limit) - $limit;
        return $start;
    }
    function phantrang($table, $tableID, $limit, $page, $controller, $action)
    {
        $total_page = $this->total_page($table, $tableID, $limit);
        if($total_page>1){
        $linkPhangTrang = '
        <nav aria-label="Page navigation example" style="margin-left:400px">
            <ul class="pagination">';
        if ($page > 1) {
            $linkPhangTrang = $linkPhangTrang . '<li class="page-item"><a class="page-link" href="index.php?controller=' . $controller . '&action=' . $action . '&page=' . ($page - 1) . '">Previous</a></li>';
        }
        for ($i = 1; $i <= $total_page; $i++) {
            if ($page == $i) {
                $linkPhangTrang = $linkPhangTrang . '<li class="page-item active"><a class="page-link" href="index.php?controller=' . $controller . '&action=' . $action . '&page=' . $i . '">' . $i . '</a></li>';
            } else {
                $linkPhangTrang = $linkPhangTrang . '<li class="page-item"><a class="page-link" href="index.php?controller=' . $controller . '&action=' . $action . '&page=' . $i . '">' . $i . '</a></li>';
            }
        }
        if ($page < $total_page) {
            $linkPhangTrang = $linkPhangTrang . '<li class="page-item"><a class="page-link" href="index.php?controller=' . $controller . '&action=' . $action . '&page=' . ($page + 1) . '">Next</a></li>';
        }
        $linkPhangTrang = $linkPhangTrang . '</ul>
        </nav>';
        return $linkPhangTrang;
    }
}
function selectCount($table,$id){
    $sql="SELECT COUNT($id) from $table";
    $this->result=$this->conn->query($sql)->fetchColumn();
    return $this->result;
}
function selectCountBooking($table,$id){
    $sql="SELECT COUNT($id) from $table where Handling <3";
    $this->result=$this->conn->query($sql)->fetchColumn();
    return $this->result;
}
}
