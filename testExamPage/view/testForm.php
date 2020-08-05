﻿<link rel="stylesheet" href="/GoPro_SE192/assets/css/style.css" />
<body>
<div id = "testSlide">
<?php
include "../controller/testController.php";
class testForm {
    public $ctrl;
    public $listKey=array(0);

    public function __construct() {
        $this->ctrl = new testController($_GET['testID'],$_GET['option']);
    }
    public function onOpen() {
        $jsonData = $this->ctrl->getInfoOfExam();
        $json = json_decode($jsonData, true);
        $this->listKey=array(0);
        echo "<form id='form'  action='' method='post'>";
            foreach($json['exam'] as $exam) {
                echo "<div class='question'>";
                echo  "<h3>Câu ".$exam['question'].": </h3>
                <p class = 'content'>".$exam['content']."</p><br>";
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
                $this->listKey[] = $exam['key'];
            }
        echo "<br>";
        echo "
        <div id='submitDiv'>
        <input id='submitBtn' type='submit' name='submit' value='Nộp bài'/>
        </div>";
        echo "</form>";
        echo "
        <div id='clockdivTest'>
            <h3>Thời gian còn lại</h3>
            <div><span class='minutes'></span>
            <div class='smalltext'>Phút</div>
            <span class='seconds'></span>
            <div class='smalltext'>Giây</div>
            </div>
        </div>";

    }
   
}
$viewExam = new testForm();
$viewExam->onOpen();
if (isset($_POST['submit'])) {
    include "resultForm.php";
}
?>          
<script src="/GoPro_SE192/assets/js/countdownClockTest.js">
        var deadline = new Date(Date.parse(new Date()) + 15*24*60*60*1000);
        initializeClock('clockdiv', deadline);
</script>
</div>
</body>