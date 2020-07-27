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
        return $result;
    }
    
}
?>
<script>
    function showTick(i, typeTick) {
        var answer = document.querySelectorAll("input[class='answer']:checked");
        answer[i].nextSibling.insertAdjacentHTML("afterend", "<img src='/GoPro_SE192/assets/image/"+ typeTick + ".png' width='20' height='20'>");
    }
    function hideButton() {
        document.getElementById("submitBtn").remove();
    }
</script>