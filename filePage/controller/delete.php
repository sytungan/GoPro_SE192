<?php
	// include "../config.php";
	// $connect = new config();

	//   $username = 'root'; // Khai báo username
    //   $password = '';      // Khai báo password
    //   $server   = 'localhost';   // Khai báo server
    //   $dbname   = "file";      // Khai báo database
      
    //   $connect = new mysqli($server, $username, $password, $dbname);
    //   if ($connect->connect_error) {
	// 	  echo ("fail");
    //     die("Không kết nối :" . $connect->connect_error);
    //     exit();
    // }
	
	// if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // if(isset($_POST["file"])) { $file = $_POST['file']; }
	
	//echo $_GET['url'];
	
	include 'controller.php';
	$ctrl = new File();
	
	$url = $_GET['url'];
    $result = $ctrl->deleteFile($url);

	// $sql = "DELETE FROM file WHERE url = '".$_GET['url']."'";
	// $connect->traverseFunc($sql);
	// //$result = $connect->query($sql);
	// //}
	// //Đóng database
	// //$connect->close();
	// $message = "Xóa thành công";
	// echo "<script type='text/javascript'>alert('$message'); close(); </script>";
?>
