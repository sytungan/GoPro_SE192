<?php
    include 'question.php';

    $array;
    readJson("test.json", $array);

    $question= $_POST["question"];
    $content = $_POST["content"];
    $ansA    = $_POST["ansA"];
    $ansB    = $_POST["ansB"];
    $ansC    = $_POST["ansC"];
    $ansD    = $_POST["ansD"];
    $key     = $_POST["key"];


    $idx = intval($question) - 1;
    $array[$idx]->__setQuestionInfo($question, $content, $ansA, $ansB, $ansC, $ansD, $key);
    writeJson("test.json", $array);
?>