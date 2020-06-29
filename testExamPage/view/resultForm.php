<?php
$result = $viewExam->ctrl->markingExam($_GET['subject'], $viewExam->listKey, $_POST);
echo "$result";
echo "<a href='viewSuggestion.php'>Xem gợi ý</a><br>";
echo "<a href='testExams.php'>Tiếp tục thi thử</a><br>";
echo "<a href='index.php'>Về trang chủ</a><br>";


?>