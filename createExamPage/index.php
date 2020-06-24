<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php
        include 'css/style.css';
        include 'controller.php';
        ?>
    </style>

    <script type="text/javascript" src="js/main.js"></script>

</head>

<body>
    <?php $idx = 0 ?>

    <form action="" method="POST">
        <label id="questionLabel" for=Question>Câu hỏi </label>
        <label id="questionOrder" for=Question> <?php echo $idx + 1 ?> : </label><br>
        <textarea id="question" name="question"></textarea><br><br>

        <label for=ansE>Câu A:</label><br>
        <input type="text" id="ansA" name="ansA"><br><br>

        <label for=ansA>Câu B:</label><br>
        <input type="text" id="ansB" name="ansB"><br><br>

        <label for=ansB>Câu C:</label><br>
        <input type="text" id="ansC" name="ansC"><br><br>

        <label for=ansC>Câu D:</label><br>
        <input type="text" id="ansD" name="ansD"><br><br>

        <label for=key>Đáp án:</label><br>
        <select name="key" id="key">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
        </select> 
        <br><br>

        <input type="submit" value="Submit" />
    </form>



    <?php   
        $question = $_POST['question'];
        $ansA     = $_POST['ansA'];
        $ansB     = $_POST['ansB'];
        $ansC     = $_POST['ansC'];
        $ansD     = $_POST['ansD'];
        $key      = $_POST['key'];
    
        echo $question;
        echo $ansA;
        echo $ansB;
        echo $ansC;
        echo $ansD;
        echo $key;

        $exam = array();
        if ($idx < 50){
            $exam[$idx - 1] = new Question("Câu" + $idx, $content, $ansA, $ansB, $ansC, $ansD, $key);
            $idx++;
        }
        
    ?>
</body>

</html>