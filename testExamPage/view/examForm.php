<?php 
if(isset($_GET['subject'])) {
    include '../controller/examController.php';
    $ctrl = new examController($_GET['subject']);
    $result = $ctrl->getAllExam();
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
        echo "<td><a href='testForm.php?subject=".$_GET['subject']."&testID=" . $row['id'] . "'target='_blank'>" . $row['name'] . "</a></td>";
        echo "<td>" . $row['author'] . "</td>";
        echo "</tr>";
    }
}
?>