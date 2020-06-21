<?php
include '/model/pendingExamDB.php';
include 'exam.php';
class examViewController {
    private $db;
    private $id;
    function __construct($_id) {
        $this->db = new pendingExamDB();
        $this->id = $_id;
    }
    public function getInfoOfExam() {
        $result = $this->db->getExamByID($this->id);
        return new exam($result['id'], $result['name'], $result['subject'], $result['author'], $result['question']);
    }
    public function approveExam() {
        $this->db->moveToTestExamByID($this->id);
    }
    public function dropExam() {
        $this->db->removeExamByID($this->id);
    }

}
?>