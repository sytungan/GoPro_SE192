<?php
include "{$_SERVER['DOCUMENT_ROOT']}/approvePage/controller/examViewController.php";
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
            echo  "<h1>".$exam['question']."</h1>
                <h4>".$exam['content']."</h4>
                <input type='radio' name=answer/>".$exam['answerA'].
                "<input type='radio' name=answer/>".$exam['answerB'].
                "<input type='radio' name=answer/>".$exam['answerC'].
                "<input type='radio' name=answer/>".$exam['answerD'].
                "<input type='radio' name=answer/>".$exam['answerE'].
                "<br>"
                .$exam['key'];
            echo "</form>";
        }

    }
    public function mousingOnAQuestion() {

    }
    public function onApproveClick() {
        $this->ctrl->approveExam();
    }
    public function onDropClick() {
        $this->ctrl->dropExam();
    }
}
$viewExam = new examViewForm();
$viewExam->onOpen();
if(array_key_exists('approve',$_POST)) {
    $viewExam->onApproveClick();
    echo "<script>";
    echo "close()";
    echo "</script>";
}
if(array_key_exists('drop',$_POST)) {
    $viewExam->onDropClick();
    echo "<script>";
    echo "close()";
    echo "</script>";
}
?>
<form method="post">
    <input type="submit" name="approve" id="approve" 
    onclick="alert('Duyệt đề thi thành công!')" value="Duyệt" />
    <br/>
    <input type="submit" name="drop" id="drop" 
    onclick="alert('Drop đề thi thành công!')" value="Drop" />
    <br/>
</form>