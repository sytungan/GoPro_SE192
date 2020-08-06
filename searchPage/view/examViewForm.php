<style>
body {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
}
</style>
<link rel="stylesheet" href="/GoPro_SE192/assets/css/style.css" />
<body>
<?php
session_start();
include "../controller/examViewController.php";
class examViewForm {
    private $ctrl;
    public function __construct() {
        $this->ctrl = new examViewController($_GET['subjectID']);
    }
    public function onOpen() {
        $jsonData = $this->ctrl->getInfoOfExam();
        $json = json_decode($jsonData, true);
        echo "<form action='' method='post'>";
        foreach($json['exam'] as $exam) {
            echo "<div class='question'>";
            echo  "<h3>&ensp;Câu ".$exam['question'].": </h3>
            <p class='content'>&emsp;".$exam['content']."</p><br>";
            echo "<p><input class='answerRadio' type='radio'   id='A".$exam['question']."'  value ='A' name ='".$exam['question']."'";
            if (isset($_POST[$exam['question']]) && $_POST[$exam['question']] =='A') echo " checked";
            echo "><label class='answer' for='A".$exam['question']."' >  ".$exam['answerA']."</label>";
            echo "</p><br>";
            echo "<p><input class='answerRadio' type='radio' id='B".$exam['question']."'  value ='B' name ='".$exam['question']."'";
            if (isset($_POST[$exam['question']]) && $_POST[$exam['question']] =='B') echo " checked";
            echo "><label class='answer' for='B".$exam['question']."'>  ".$exam['answerB']."</label>";
            echo "</p><br>";
            echo "<p><input class='answerRadio' type='radio' id='C".$exam['question']."' value ='C' name ='".$exam['question']."'";
            if (isset($_POST[$exam['question']]) && $_POST[$exam['question']] =='C') echo " checked";
            echo "><label class='answer' for='C".$exam['question']."'>  ".$exam['answerC']."</label>";
            echo "</p><br>";
            echo "<p><input class='answerRadio' type='radio' id='D".$exam['question']."' value ='D' name ='".$exam['question']."'";
            if (isset($_POST[$exam['question']]) && $_POST[$exam['question']] =='D') echo " checked";
            echo "><label class='answer' for='D".$exam['question']."' >  ".$exam['answerD']."</label>";
            echo "</p><br>";
            echo "</div>";
        }
        echo "</form>";
        if ($this->ctrl->checkRole()) {
            echo '<form id="testWithBtn" method="post" action="/GoPro_SE192/testExamPage/view/testForm.php?subject='.$this->ctrl->getSubjectOfExam().'&option=1&testID='.$_GET['subjectID'].'">';
            echo '<input type="submit" name="testEx" id="submitBtn" value="Thi thử" />';
            echo '</from>';
        }

    }
    public function mousingOnAQuestion() {

    }
}
$viewExam = new examViewForm();
$viewExam->onOpen();