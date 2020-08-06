<?php
    session_start();
    include 'question.php';
    include '../../config.php';

    $array;
    readJson("test.json", $array);
    
    $question=  $_POST["question"];
    $content = $_POST["content"];
    $ansA    = $_POST["ansA"];
    $ansB    = $_POST["ansB"];
    $ansC    = $_POST["ansC"];
    $ansD    = $_POST["ansD"];
    $key     = $_POST["key"];
    $subject = $_POST["subject"];
    $author  = $_POST["author"];
    $name    = $_POST["name"];
    $submit = $_POST["submit"];
    $typeEx = "";
    if (isset($_POST["typeEx"])) $typeEx = $_POST["typeEx"];

    $idx = intval($question) - 1;
    $array[$idx]->__setQuestionInfo( $question, $content , $ansA, $ansB,$ansC, $ansD, $key);
    if ($subject == "Toán" || $subject == "Anh" ) writeJson("test.json", $array, 50);
    else writeJson("test.json", $array, 40);
    readJson("test.json", $array);

    if ($submit == 1) {
        $jsonData = file_get_contents("test.json");
        $Db = new config();
        $week = date('W');
        $sql  = "";
        if (checkRole() == 0) {
            $sql = "INSERT INTO `pendingexamdb`(`name`, `subject`, `author`, `question`) VALUES ('$name','$subject','$author','$jsonData');";
        }
        else if (checkRole() == 1) {
            if ($typeEx ==  'ranked') $sql = "INSERT INTO `weeklyexamdb`(`name`, `subject`, `author`, `question`, `week`)  VALUES ('$name','$subject','$author','$jsonData','$week');";
            else $sql = "INSERT INTO `examdb`(`name`, `subject`, `author`, `question`)  VALUES ('$name','$subject','$author','$jsonData');";
        }
        else {
            echo "<script>";
            echo "alert('Bạn không có quyền tạo đề thi')";
            echo "close()";
            echo "</script>";
        }
        $Db->traverseFunc($sql);
    }

    function checkRole() {
        if(isset($_SESSION['signed_in'])) {
            if ($_SESSION['user_level'] != 1) {
                if ($_SESSION['user_role'] == 'Student') return "Error";
                else return 0;
            }
            else return 1;  
        }
        else return -1; 
    }
?>
