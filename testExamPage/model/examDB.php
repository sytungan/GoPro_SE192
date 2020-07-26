<?php
include "../../config.php";
class examDB {
    protected $conn;
    public function __construct() {
        $this->conn = new config();
    }
    public function getListExam($_subject) {
        return $this->conn->traverse("SELECT * FROM examDB WHERE subject='$_subject'");
    }    
    public function getExamByID($_id) {
        return $this->conn->traverse("SELECT * FROM examDB WHERE id='$_id'");
    }
    public function getListFilterExam($_keyword) {
        return $this->conn->traverse("SELECT * FROM examDB WHERE name like '$_keyword'");
    }
}
?>