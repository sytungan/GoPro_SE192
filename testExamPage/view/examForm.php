<?php 
include '../../header.php';
if(isset($_GET['subject'])) {
    include '../controller/examController.php';
    $ctrl = new examController($_GET['subject'], $_GET['option']);
    $result = $ctrl->getAllExam();
    echo "<br>";
    if ($result != null) {
        echo "<br>";
        echo "<table>
        <tr>
        <th scope='header'>ID</th>
        <th scope='header'>Đề thi</th>
        <th scope='header'>Tác giả</th>
        </tr>";
        foreach ($result as $row) {
            echo "<tr>";
            echo "<td id='idx'>" .$row['id']. "</td>";
            echo "<td id='name'><a href='testForm.php?subject=".$_GET['subject']."&option=".$_GET['option']."&testID=" . $row['id'] . "'target='_blank'>" . $row['name'] . "</a></td>";
            echo "<td id='author'>" . $row['author'] . "</td>";
            echo "</tr>";
        }
    }
    else echo "<h3> Xin lỗi hiện tại không có đề thi cho môn này </h3>";
}
?>