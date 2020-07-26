<?php
header('Content-Type: text/html; charset=utf-8');
include "../model/examDB.php"; 
class testController {
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

    public function markingExam($subject, $key, $answer) {
        $result = 0;
        $NUMBER_OF_QUESTIONS = 40;
        if ($subject == utf8_encode("Toán")) {
            $NUMBER_OF_QUESTIONS = 50;
        }
        for ($i = 1; $i <= $NUMBER_OF_QUESTIONS; $i++) {
           if ($key[$i] == $answer[$i]) $result = $result + 10/$NUMBER_OF_QUESTIONS;
        }
        return $result;
    }
    
}
?>