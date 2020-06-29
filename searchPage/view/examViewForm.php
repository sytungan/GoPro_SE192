<style>
body {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
}
</style>
<body>
<?php
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

    }
    public function mousingOnAQuestion() {

    }
}
$viewExam = new examViewForm();
$viewExam->onOpen();