<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>GoProToUniversity</title>
    <link rel="stylesheet" href="../assets/css/style.css" />
    <script src="../assets/js/fontAwesome.js"></script>
</head>
<body>
    <?php 
    include "../header.php"
    ?>
    </div>
    <h3 id="selectSubject">HỌC SINH VUI LÒNG CHỌN MÔN HỌC ĐỂ THI THỬ</h3>
    <div id="listObject">
        <div class="sbox" id="math">
            <a href="view/examForm.php?subject=Toán"><img src="../assets/image/toan.jpg" /></a>
            <p>Toán</p>
        </div>
        <div class="sbox" id="chemistry">
            <a href="view/examForm.php?subject=Hóa"><img src="../assets/image/hoa.jpg" /></a>
            <p>Hóa</p>
        </div>
        <div class="sbox" id="english">
            <a href="view/examForm.php?subject=Anh"><img src="../assets/image/anh.jpg" /></a>
            <p>Tiếng Anh</p>
        </div>
        <div class="sbox" id="physic">
            <a href="view/examForm.php?subject=Lý"><img src="../assets/image/ly.jpg" /></a>
            <p>Lý</p>
        </div>
        <div class="sbox" id="biology">
            <a href="view/examForm.php?subject=Sinh"><img src="../assets/image/sinh.jpg" /></a>
            <p>Sinh</p>
        </div>
        <div class="sbox" id="history">
            <a href="view/examForm.php?subject=Sử"><img src="../assets/image/su.jpg" /></a>
            <p>Lịch Sử</p>
        </div>
        <div class="sbox" id="geography">
            <a href="view/examForm.php?subject=Địa"><img src="../assets/image/dia.jpg" /></a>
            <p>Địa lý</p>
        </div>
        <div class="sbox" id="law">
            <a href="view/examForm.php?subject=GDCD"><img src="../assets/image/gdcd.jpg" /></a>
            <p>GDCD</p>
        </div>
      
    </div>
</body>
<?php
include "../footer.php";
?>
