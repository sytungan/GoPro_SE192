<head>
    <script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.2/MathJax.js?config=TeX-MML-AM_CHTML' async></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>

<style>
body {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
}
</style>
<link rel="stylesheet" href="/GoPro_SE192/assets/css/style.css" />
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
            echo  "<h5>&emsp;Đáp án: " .$exam['key']. "</h5>";
            echo "</div>";
        }
        echo "</form>";

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
<form method="post" id="approveButtons">
    <input type="submit" name="approve" id="submitBtn" 
    onclick="alert('Duyệt đề thi thành công!')" value="Duyệt" />
    <br/>
    <input type="submit" name="drop" id="submitBtn" 
    onclick="alert('Drop đề thi thành công!')" value="Drop" />
    <br/>
</form>
</body>
</html>