<?php
include "{$_SERVER['DOCUMENT_ROOT']}/approvePage/model/pendingExamDB.php";
class listExamController {
    private $db;
    private $subject;
    public function __construct($_subject) {
        $this->db = new pendingExamDB();
        $this->subject = $_subject;
    }
    public function getPendingExamOfSubject() {
        return $this->db->getListPenExam($this->subject);
    }
    public function changeToExamViewForm() {
        
    }
}
?>