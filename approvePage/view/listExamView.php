<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 2px solid black;
    width: auto;
    padding: 10px;
}

th {
    text-align: left;
}
</style>
</head>
<body>
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
    echo "<td><a href='examViewForm.php?subjectId=" . $row['id'] . "'>" . $row['name'] . "</a></td>";
    echo "<td>" . $row['author'] . "</td>";
    echo "</tr>";
}
?>
</body>
</html>