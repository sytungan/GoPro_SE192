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
        include 'js/main.js';
        include 'controller.php';
        include 'readjson.php'
        ?>
    </style>

    <script type="text/javascript" src="js/main.js"></script>

</head>

<body>

    <label id="questionLabel" for=Question>Câu hỏi </label>
    <label id="questionOrder">1</label><br>
    <textarea id="question" name="question"></textarea><br><br>

    <label for=ansE>Câu A:</label><br>
    <input type="text" id="ansA" name="ansA"><br><br>

    <label for=ansA>Câu B:</label><br>
    <input type="text" id="ansB" name="ansB"><br><br>

    <label for=ansB>Câu C:</label><br>
    <input type="text" id="ansC" name="ansC"><br><br>

    <label for=ansC>Câu D:</label><br>
    <input type="text" id="ansD" name="ansD"><br><br>

    <label>Đáp án:</label><br>

    <select name="key" id="key">
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
    </select>
    <br><br>


    <button id="Next" class="item_button" type="Button" onclick="next()">Next</button>

    <button id="Previous" class="item_button" type="Button" onclick="previous()">Previous</button><br> <br>
    

    <input type="submit" value="Submit" /> 
    <?php
    $temp;
    //readJson("read.json", $temp);

    $question = $_POST['question'];
    $ansA     = $_POST['ansA'];
    $ansB     = $_POST['ansB'];
    $ansC     = $_POST['ansC'];
    $ansD     = $_POST['ansD'];
    $key      = $_POST['key'];

    $exam[0] = new Question("Câu " . $idx, $question, $ansA, $ansB, $ansC, $ansD, $key);
    $exam[0]->__print();
    ?>

</body>

</html>