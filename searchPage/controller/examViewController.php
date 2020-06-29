<?php
include "../model/examDB.php";
include 'exam.php';
class examViewController {
    private $db;
    private $id;
    function __construct($_id) {
        $this->db = new examDB();
        $this->id = $_id;
    }
    public function getInfoOfExam() {
        $result = $this->db->getExamByID($this->id);
        foreach ($result as $p) {
            return $p['question'];
        }
    }
    public function checkRole() {

    }
    public function changeToExamForm() {
        
    }
}
?>