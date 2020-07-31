<?php
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

    $idx = intval($question) - 1;
    $array[$idx]->__setQuestionInfo( $question, $content , $ansA, $ansB,$ansC, $ansD, $key);
    if ($subject == "Toán") writeJson("test.json", $array, 50);
    else writeJson("test.json", $array, 40);
    readJson("test.json", $array);

    if ($submit == 1){
        $jsonData = file_get_contents("test.json");
        $Db = new config();
        $Db->traverseFunc("INSERT INTO `pendingexamdb`(`name`, `subject`, `author`, `question`) VALUES ('$name','$subject','$author','$jsonData');");
    }
?>
