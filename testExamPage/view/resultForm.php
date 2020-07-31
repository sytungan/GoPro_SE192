<<<<<<< HEAD
<?php
$result = $viewExam->ctrl->markingExam($_GET['subject'], $viewExam->listKey, $_POST);
echo "Kết quả của bạn là:";
echo "$result";
echo "<br>";
echo "<a href='viewSuggestion.php'>Xem gợi ý</a><br>";
echo "<a href='/GoPro_SE192/testExamPage/testExam.php'>Tiếp tục thi thử</a><br>";
echo "<a href='/GoPro_SE192/index.php'>Về trang chủ</a><br>";


?>
=======
<?php
$result = $viewExam->ctrl->markingExam($_GET['subject'], $viewExam->listKey, $_POST);
echo "<div id='testResult'>";
echo "<h4>".$result."</h4>";
echo "<br>";
echo "<a href='viewSuggestion.php'>Xem gợi ý</a><br>";
echo "<a href='/GoPro_SE192/testExamPage/testExam.php'>Tiếp tục thi thử</a><br>";
echo "<a href='/GoPro_SE192/index.php'>Về trang chủ</a><br>";
echo "</div>";
?>
>>>>>>> acadb6d1d5b1ae81a61342fa555b4fd2af5f27f4
