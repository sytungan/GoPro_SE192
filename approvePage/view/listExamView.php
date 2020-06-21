<?php
include '../controller/listExamController.php';
$ctrl = new listExamController($_POST['subject']);
$result = $ctrl->getPendingExamOfSubject();
echo "<br>";
echo "<table>
<tr>
<th>ID</th>
<th>Đề</th>
<th>Tác giả</th>
</tr>";
foreach ($result as $row) {
    echo "<tr>";
    echo "<td>" .$row['id']. "</td>";
    echo "<td><a href='view/examViewForm.php?subjectID=" . $row['id'] . "'target='_blank'>" . $row['name'] . "</a></td>";
    echo "<td>" . $row['author'] . "</td>";
    echo "</tr>";
}
?>