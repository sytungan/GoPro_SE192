<!DOCTYPE html>
<html lang="en">
<head>
    <title>Approve Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php
    include 'view/listExamForm.php';
    $ctrl="listExamController";
    if(isset($_GET['ctrller']))
            $ctrl=$_GET['ctrller'];
    include 'controller/'.$ctrl.'.php'; 
?>
</body>
</html>