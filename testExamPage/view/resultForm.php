<?php
$result = $viewExam->ctrl->markingExam($_GET['subject'], $viewExam->listKey, $_POST);
echo "<div id='result'>";
echo "'<h3>Kết quả của bạn là: &nbsp; $result</h3>";
echo "<a href='viewSuggestion.php'>Xem gợi ý</a><br>";
echo "<a href='/GoPro_SE192/testExamPage/testExam.php'>Tiếp tục thi thử</a><br>";
echo "<a href='/GoPro_SE192/index.php'>Về trang chủ</a><br>";
echo "</div>";



?>
