<style>
body {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
}
</style>
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
        foreach($json['exam'] as $exam) {
            echo "<form action='' method='post'>";
            echo  "<h1>Câu ".$exam['question']."</h1>
                <h4>".$exam['content']."</h4>
                <input type='radio' name=answer/>".$exam['answerA'].
                "<br>
                <input type='radio' name=answer/>".$exam['answerB'].
                "<br>
                <input type='radio' name=answer/>".$exam['answerC'].
                "<br>
                <input type='radio' name=answer/>".$exam['answerD'];
            echo "</form>";
        }
        if ($this->ctrl->checkRole()) {
            echo '<form id="testWithBtn" method="post" action="/GoPro_SE192/testExamPage/view/testForm.php?subject='.$this->ctrl->getSubjectOfExam().'&option=1&testID='.$_GET['subjectID'].'">';
            echo '<input type="submit" name="testEx" id="testEx" value="Thi thử" />';
            echo '</from>';
        }

    }
    public function mousingOnAQuestion() {

    }
}
$viewExam = new examViewForm();
$viewExam->onOpen();