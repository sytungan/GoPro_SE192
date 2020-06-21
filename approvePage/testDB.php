<?php
//goi namespace
use MongoDB\Client;

//require autoload
require_once "vendor/autoload.php";

// khoi tao class Client
$conn = new Client("mongodb://127.0.0.1:27017");
$pendingExamDB = $conn->selectCollection('goproSEDB', 'pendingExamDB');
$result = $pendingExamDB->find();
foreach ($result as $row) {
   echo $row->name;
}
?>