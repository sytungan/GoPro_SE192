<?php
$result = $viewExam->ctrl->markingExam($_GET['subject'], $viewExam->listKey, $_POST);
$flag = 0;
if ($result < 0) { 
    $result = -$result;
    $flag = 1;
}
echo "<div id='result'>";
echo "'<h3>Kết quả của bạn là: &nbsp; <span> $result </span> </h3>";
if ($flag) echo "<h4>(Không được tính vào xếp hạng)</h4><br>";
echo "<a href='viewSuggestion.php'>Xem gợi ý</a><br>";
echo "<a href='/GoPro_SE192/testExamPage/testExam.php'>Tiếp tục thi thử</a><br>";
echo "<a href='/GoPro_SE192/index.php'>Về trang chủ</a><br>";
echo "</div>";
?>
