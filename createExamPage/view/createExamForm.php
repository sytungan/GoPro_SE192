<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.2/MathJax.js?config=TeX-MML-AM_CHTML' async></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <title>Create Exam</title>
    <style>
        <?php
        session_start();
        include '../css/style.css';
        include '../controller/controller.php';
        ?>
    </style>

</head>


<?php
$examName = $_POST["name"];
$subject  = $_POST["subject"];
$author   = $_POST["author"];

if ($subject == "Toán") initJson(50); 
else initJson(40); 

if ($subject == "Toán") readJson("../controller/test.json", $array);
else readJson("../controller/test.json", $array);
?>

<body>
    <?php
    include "../../header.php";
    ?>
    <div class="infoside">
        <label for=name>Tên đề thi: &#160 </label>
        <label for=name id="name"><?php echo $examName ?></label>
        <br>
        <label for=name>Môn học: &#160 </label>
        <label for=name id="subject"><?php echo $subject ?></label>
        <br>
        <label for=name>Tác giả: &#160 </label>
        <label for=name id="author"><?php echo $author ?></lable>
    </div>

    <br>
    <form action="../controller/post.php" method="POST">
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
        <input name="submit" type="submit" id="submit" value="Submit" /> <br> <br>
    </form>



    </div>
    <div id="popUpHover" class="popUpHover">
        <span class="helper"></span>
        <div>
            <p class="popUpMessage"> Cảm ơn bạn đã đóng góp đề thi cho hệ thống!!<br>
                Đề thi của bạn sẽ được quản trị viên kiểm duyệt.<br><br>
                <button onclick="window.location.href='../../index.php'">Về trang chủ</button>
            </p>
        </div>
    </div>
    <?php
    include "../../footer.php";
    ?>
</body>


<script type="text/javascript" src="../js/main.js"></script>

</html>