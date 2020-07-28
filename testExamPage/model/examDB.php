<?php
include "../../config.php";
class examDB {
    protected $conn;
    public function __construct() {
        $this->conn = new config();
    }
    public function countList($dbName, $title, $value) {
        $sql= "SELECT COUNT(*) as 'total' FROM $dbName WHERE $title='$value'";
        $result = $this->conn->traverse($sql);
        foreach ($result as $row) {
            $total = $row['total'];
            break;
        }
        return $total;
    }
    public function getListExam($_subject) {
        if ($this->countList('examDB', 'subject', $_subject) > 0) {
            return $this->conn->traverse("SELECT * FROM examDB WHERE subject='$_subject'");
        } 
        else return null;   
    }    
    public function getExamByID($_id) {
        return $this->conn->traverse("SELECT * FROM examDB WHERE id='$_id'");
    }
    public function getListFilterExam($_keyword) {
        return $this->conn->traverse("SELECT * FROM examDB WHERE name like '$_keyword'");
    }
}
?>