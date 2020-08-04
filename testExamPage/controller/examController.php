<?php
include "../model/examDB.php";
class examController {
    private $db;
    private $subject;
    public function __construct($_subject, $option) {
        $this->db = new examDB();
        $this->subject = $_subject;
        $this->db->setTableName($option); ; //1 to normal, 2 to weekly
    }
    public function getAllExam() {
        return $this->db->getListExam($this->subject);
    }
    public function changeToExamViewForm() {
        
    }
}
?>