<?php
include "../../config.php";
class pendingExamDB {
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
    public function getListPenExam($_subject) {
        if ($this->countList('pendingExamDB', 'subject', $_subject) > 0) {
            return $this->conn->traverse("SELECT * FROM pendingExamDB WHERE subject='$_subject'");
        } 
        else return null;   
    }    
    public function getExamByID($_id) {
        return $this->conn->traverse("SELECT * FROM pendingExamDB WHERE id='$_id'");
    }
    public function removeExamByID($_id) {
        return $this->conn->traverseFunc("DELETE FROM pendingExamDB WHERE id='$_id'");
    }
    public function moveToTestExamByID($_id) {
        $result = $this->conn->traverseFunc("INSERT INTO examDB(id, name, subject, author, question) 
        SELECT id, name, subject, author, question FROM pendingExamDB WHERE id='$_id'");
        $this->removeExamByID($_id);
        return $result;
    }
}
?>
