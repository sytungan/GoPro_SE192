<?php
include $_SERVER['DOCUMENT_ROOT']."/GoPro_SE192/config.php";
class examDB {
    protected $conn;
    public function __construct() {
        $this->conn = new config();
    }
    public function getListFilterExam($_keyword) {
        $result = $this->conn->traverse("SELECT COUNT(*) as 'count' FROM examDB WHERE name like '%$_keyword%'");
        foreach ($result as $p) {
            if ($p['count'] > 0) {
            return $this->conn->traverse("SELECT * FROM examDB WHERE name like '%$_keyword%'");
            }
            else return null;
        }
    }    
    public function getExamByID($_id) {
        return $this->conn->traverse("SELECT * FROM examDB WHERE id='$_id'");
    }
}
?>