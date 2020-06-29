<?php
    include 'controller.php';

    $content = $_POST["question"];
    $ansA    = $_POST["ansA"];
    $ansB    = $_POST["ansB"];
    $ansC    = $_POST["ansC"];
    $ansD    = $_POST["ansD"];
    $key     = $_POST["key"];


    $array[0]->__setQuestionInfo("1", $content, $ansA, $ansB, $ansC, $ansD, $key);
    writeJson("test.json", $array);

?>