<?php
include "../../config.php";
class examDB {
    private $conn;
    private $tableName;
    public function __construct() {
        $this->conn = new config();
    }
    public function setTableName($type) {
        switch ($type) {
            case 1:
                $this->tableName = 'examDB';
                break;
            case 2:
                $this->tableName = 'weeklyExamDB';
        }        
    }
    public function countList($dbName, $title, $value) {
        $sql= "SELECT COUNT(*) as 'total' FROM $dbName WHERE $title='$value'";
        $week = date('W');
        if ($dbName == 'weeklyExamDB') $sql .= " AND week = '$week'";
        $result = $this->conn->traverse($sql);
        foreach ($result as $row) {
            $total = $row['total'];
            break;
        }
        return $total;
    }
    public function getListExam($_subject) {
        if ($this->countList($this->tableName, 'subject', $_subject) > 0) {
            $week = date('W');
            if ($this->tableName == 'weeklyExamDB') return $this->conn->traverse("SELECT * FROM $this->tableName WHERE subject='$_subject' AND week = '$week'");
            return $this->conn->traverse("SELECT * FROM $this->tableName WHERE subject='$_subject'");
        } 
        else return null;   
    }    
    public function getExamByID($_id) {
        return $this->conn->traverse("SELECT * FROM $this->tableName WHERE id='$_id'");
    }
    public function getListFilterExam($_keyword) {
        return $this->conn->traverse("SELECT * FROM $this->tableName WHERE name like '$_keyword'");
    }
}
?>