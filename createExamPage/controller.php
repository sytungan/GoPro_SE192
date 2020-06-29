<?php
    include 'question.php';
    initJson();

    $array; //this array hold the data of the question
    readJson("test.json", $array);


    
    $array[0]->__setQuestionInfo("1", "test", "test", "test", "test", "test", "test");
    //writeJson("test.json", $array);

?>  