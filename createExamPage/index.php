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
        include 'css/style.css';
        ?>
    </style>
    <script type="text/javascript" src="js/main.js"></script>
</head>

<body>
    <form action="view/createExamForm.php" method="POST">
        <label for=name>Tên đề thi:</label><br>
        <input type="text" id="name" name="name"><br><br>

        <label for=subject>Môn học:</label><br>
        <select name="subject" id="subject">
            <option value="Toán">Toán</option>
            <option value="Hóa">Hóa học</option>
            <option value="Anh">Tiếng Anh</option>
            <option value="Lý">Vật lý</option>
            <option value="Sinh">Sinh học</option>
            <option value="Sử">Lịch sử</option>
            <option value="Địa">Địa lý</option>
            <option value="GDCD">GDCD</option>
        </select>
        <br><br>

        <label for=author>Tác giả:</label><br>
        <input type="text" id="author" name="author"><br><br>

        <input name="submit" type="submit" id="submit" value="Tiếp tục"/> <br> <br>
    </form>
</body>

</html>