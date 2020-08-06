<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
include "../model/examDB.php";
include "../model/markDB.php";
class testController {
    private $db;
    private $id;
    private $ranked = false;
    function __construct($_id, $option) {
        $this->db = new examDB();
        $this->id = $_id;
        $this->db->setTableName($option); //1 to normal, 2 to weekly
        if ($option == 2) $this->ranked = true;
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
            $indexOfAnswer = $i - 1;
            if (isset($answer[$i]) && $key[$i] == $answer[$i]) {
                $result = $result + 10/$NUMBER_OF_QUESTIONS;
                echo "<script>
                    showTick(".$indexOfAnswer.", 'right') 
                </script>";
            }
            else if (isset($answer[$i])) {
                echo "<script>
                    showTick(".$indexOfAnswer.", 'wrong') 
                </script>";
            }
        }
        echo "<script>
                hideButton(); 
            </script>";
        if ($this->ranked == true) {
            if(isset($_SESSION['signed_in'])) {
                $markRecord = new markDB();
                $pMR = $markRecord->insertMark($result, $_SESSION['user_id'], $_SESSION['user_name'], $_SESSION['user_nickname'], $this->id, $subject);
                if ($pMR == null) return -$result;
            }
        }
        return $result;
    }
}
?>
<script>
    function showTick(i, typeTick) {
        var answer = document.querySelectorAll("input[class='answerRadio']:checked");
        answer[i].nextElementSibling.innerHTML += ("&nbsp;<img src='/GoPro_SE192/assets/image/"+ typeTick + ".png' width='20' height='20'></img>");
    }
    function hideButton() {
        document.getElementById("submitBtn").remove();
    }
</script>