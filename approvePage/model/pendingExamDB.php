<?php
include "{$_SERVER['DOCUMENT_ROOT']}/approvePage/config.php";
class pendingExamDB {
    protected $conn;
    public function __construct() {
        $this->conn = new config();
    }
    public function getListPenExam($_subject) {
        return $this->conn->traverse("SELECT * FROM pendingExamDB WHERE subject='$_subject'");
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
