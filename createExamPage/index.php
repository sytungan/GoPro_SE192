<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.2/MathJax.js?config=TeX-MML-AM_CHTML' async></script>
    <title>Create Exam</title>
    <style>
        <?php
        include 'css/style.css';
        include 'controller.php';
        ?>
    </style>

    <script type="text/javascript" src="js/main.js"></script>
</head>

<body>
    <form action="" method="POST">
        <label id="questionLabel" for=Question>Câu hỏi </label>
        <label id="questionOrder">1</label><br>
        <textarea id="question" name="question"></textarea><br><br>

        <label for=ansA>Câu A:</label><br>
        <input type="text" id="ansA" name="ansA"><br><br>

        <label for=ansB>Câu B:</label><br>
        <input type="text" id="ansB" name="ansB"><br><br>

        <label for=ansC>Câu C:</label><br>
        <input type="text" id="ansC" name="ansC"><br><br>

        <label for=ansD>Câu D:</label><br>
        <input type="text" id="ansD" name="ansD"><br><br>

        <label>Đáp án:</label><br>

        <select name="key" id="key">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
        </select>
        <br><br>
        <button id="Previous" class="item_button" type="Button" onclick="previous()">Previous</button>
        <button id="Next" class="item_button" type="Button" onclick="next()">Next</button><br> <br>
        <input type="submit" value="Submit" /> <br> <br>
    </form>
    <?php
    $named_array = array(
        "exam" => array(
            array(
                "question" => "1",
                "content" => "",
                "answerA" => "",
                "answerB" => "",
                "answerC" => "",
                "answerD" => "",
                "key" => ""
            )
        )
    );
    $jsondata = json_encode($named_array);
    file_put_contents("test.json", $jsondata);

    $jsonData = file_get_contents("test.json");
    $json = json_decode($jsonData, true);
    for ($i = 2; $i <= 50; $i++) {
        $temp = array(
            "question" => "$i",
            "content" => "",
            "answerA" => "",
            "answerB" => "",
            "answerC" => "",
            "answerD" => "",
            "key" => ""
        );
        array_push($json['exam'], $temp);
    }
    $jsonData = json_encode($json);
    file_put_contents('test.json', $jsonData);

    $array; //this array hold the data of the question
    readJson("test.json", $array);

    ?>

</body>

</html>