<?php
include '../controller/listExamController.php';
$ctrl = new listExamController($_POST['subject']);
$result = $ctrl->getPendingExamOfSubject();
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
        echo "<td id='name'><a href='view/examViewForm.php?subjectID=" . $row['id'] . "'target='_blank'>" . $row['name'] . "</a></td>";
        echo "<td id='author'>" . $row['author'] . "</td>";
        echo "</tr>";
    }
}
else echo "<h3> Không có nội dung cần duyệt </h4>"
?>