<?php
    include 'question.php';
    include '../config.php';

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

    $idx = intval($question) - 1;
    $array[$idx]->__setQuestionInfo( $question, $content , $ansA, $ansB,$ansC, $ansD, $key);
    writeJson("test.json", $array);

    readJson("test.json", $array);
    $temp = intval($question);
    if ($temp == 40){
        $jsonData = file_get_contents("test.json");
        $Db = new config();
        $Db->traverseFunc("INSERT INTO `pendingexamdb`(`name`, `subject`, `author`, `question`) VALUES ('$name','$subject','$author','$jsonData');");
    }
?>