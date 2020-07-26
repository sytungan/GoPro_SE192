<link rel="stylesheet" href="/GoPro_SE192/assets/css/style.css" />
<?php
include "../controller/testController.php";
class testForm {
    public $ctrl;
    public $listKey=array(0);

    public function __construct() {
        $this->ctrl = new testController($_GET['testID']);
    }
    public function onOpen() {
        $jsonData = $this->ctrl->getInfoOfExam();
        $json = json_decode($jsonData, true);
        $this->listKey=array(0);
        echo "<form id='form'  action='' method='post'>";
            foreach($json['exam'] as $exam) {
                echo "<div class='question'";
                echo  "<h3>Câu".$exam['question']."</h3>
                <h4>".$exam['content']."</h4>
                <input class='answer' type='radio' value ='A' name = '".$exam['question']."'>".$exam['answerA'].
                "<br><input class='answer' type='radio' value ='B' name = '".$exam['question']."'>".$exam['answerB'].
                "<br><input class='answer' type='radio' value ='C' name = '".$exam['question']."'>".$exam['answerC'].
                "<br><input class='answer' type='radio' value ='D' name = '".$exam['question']."'>".$exam['answerD'].
                "</div>";
                $this->listKey[] = $exam['key'];
            }
        echo "<br>";
        echo "<input id='submitBtn' type='submit' name='submit' value='Nộp bài'/>";      
        echo "</form>";     

    }
   
}
$viewExam = new testForm();
$viewExam->onOpen();
if (isset($_POST['submit'])) {
    include "resultForm.php";
    
}
?>
                