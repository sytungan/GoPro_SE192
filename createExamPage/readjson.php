<?php
    $output;
    function readJson(string $fileName, $output){
        $jsonData = file_get_contents($fileName);
        $json = json_decode($jsonData, true);
        $output .= "<ul>";
        foreach ($json['exam'] as $exam) {
            $output .=  "<h2>" . $exam['question'] . "</h2>";
            $output .=  "<h4>" . $exam['content'] . "</h4>";
            $output .=  "<li>" . $exam['answerA'] . "</li>";
            $output .=  "<li>" . $exam['answerB'] . "</li>";
            $output .=  "<li>" . $exam['answerC'] . "</li>";
            $output .=  "<li>" . $exam['answerD'] . "</li>";
            $output .=  "<li>" . $exam['answerE'] . "</li>";
            $output .=  "<li>" . $exam['key'] . "</li>";
        }
        $output .= "</ul";
        echo $output;
    }
?>
