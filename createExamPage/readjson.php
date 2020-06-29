<?php
    function readJson(string $fileName, &$array){
        $jsonData = file_get_contents($fileName);
        $json = json_decode($jsonData, true);
        $idx = 0;
        $questionList = array();

        foreach ($json['exam'] as $exam) {
            $question = $exam['question'];
            $content  = $exam['content'];
            $ansA     = $exam['answerA'];
            $ansB     = $exam['answerB'];
            $ansC     = $exam['answerC'];
            $ansD     = $exam['answerD'];
            $key      = $exam['key'];
            $questionList[$idx] = new Question($question, $content, $ansA, $ansB, $ansC, $ansD, $key);
            $idx++;
        }
        $array = $questionList;
    }    
?>
