<body>
    <?php 
    include "../header.php"
    ?>
    <h3 id="selectSubject">HỌC SINH VUI LÒNG CHỌN MÔN HỌC ĐỂ THI THỬ</h3>
    <div id="listObject">
        <div class="sbox" id="math">
            <a href="view/examForm.php?subject=Toán&option=<?php echo $_GET['option']?>"><img src="../assets/image/toan.jpg"></a>
            <p>Toán</p>
        </div>
        <div class="sbox" id="chemistry">
            <a href="view/examForm.php?subject=Hóa&option=<?php echo $_GET['option']?>"><img src="../assets/image/hoa.jpg"></a>
            <p>Hóa</p>
        </div>
        <div class="sbox" id="english">
            <a href="view/examForm.php?subject=Anh&option=<?php echo $_GET['option']?>"><img src="../assets/image/anh.jpg"></a>
            <p>Tiếng Anh</p>
        </div>
        <div class="sbox" id="physic">
            <a href="view/examForm.php?subject=Lý&option=<?php echo $_GET['option']?>"><img src="../assets/image/ly.jpg"></a>
            <p>Lý</p>
        </div>
        <div class="sbox" id="biology">
            <a href="view/examForm.php?subject=Sinh&option=<?php echo $_GET['option']?>"><img src="../assets/image/sinh.jpg"></a>
            <p>Sinh</p>
        </div>
        <div class="sbox" id="history">
            <a href="view/examForm.php?subject=Sử&option=<?php echo $_GET['option']?>"><img src="../assets/image/su.jpg"></a>
            <p>Lịch Sử</p>
        </div>
        <div class="sbox" id="geography">
            <a href="view/examForm.php?subject=Địa&option=<?php echo $_GET['option']?>"><img src="../assets/image/dia.jpg"></a>
            <p>Địa lý</p>
        </div>
        <div class="sbox" id="law">
            <a href="view/examForm.php?subject=GDCD&option=<?php echo $_GET['option']?>"><img src="../assets/image/gdcd.jpg"></a>
            <p>GDCD</p>
        </div>
      
    </div>
</body>
<?php
include "../footer.php";
?>
