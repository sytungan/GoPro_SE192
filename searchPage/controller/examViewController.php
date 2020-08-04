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
        if(isset($_SESSION['signed_in'])) {
            if ($_SESSION['user_role'] == 'Student') {
                echo '<form method="post">';
                echo '<input type="submit" name="testEx" id="testEx" value="Thi thử" />';
                echo '</from>';
            }
            if(array_key_exists('testEx',$_POST)) {
                $this->changeToExamForm();
            }
        }
    }
    public function changeToExamForm() {
        
    }
}
?>