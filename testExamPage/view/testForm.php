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
        echo "<form  action='' method='post'>";

            foreach($json['exam'] as $exam) {
                echo  "<h1>".$exam['question']."</h1>
                <h4>".$exam['content']."</h4>
                <input type='radio' value ='A' name = '".$exam['question']."'>".$exam['answerA'].
                "<input type='radio' value ='B' name = '".$exam['question']."'>".$exam['answerB'].
                "<input type='radio' value ='C' name = '".$exam['question']."'>".$exam['answerC'].
                "<input type='radio' value ='D' name = '".$exam['question']."'>".$exam['answerD'].
                $this->listKey[] = $exam['key'];
            }
        echo "<input type='submit' name='submit'/>";
               
        echo "</form>";     

    }
   
}
$viewExam = new testForm();
$viewExam->onOpen();
if (isset($_POST['submit'])) {

    $result = $viewExam->ctrl->markingExam($_GET['subject'], $viewExam->listKey, $_POST);
    echo $result;
}
?>
                