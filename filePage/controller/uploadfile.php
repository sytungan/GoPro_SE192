<!DOCTYPE html>
<html>
<body>
<form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="fileUpload" value="">
		<br>
		<input type="text" name="fileName" placeholder="Nhập tên file">
        <br>
        <input type="submit" value="Upload" name="up">
</form>
<?php
if (isset($_POST['up']) && isset($_FILES['fileUpload'])) {
    if ($_FILES['fileUpload']['error'] > 0)
        echo "Upload lỗi rồi!";
    else {
        move_uploaded_file($_FILES['fileUpload']['tmp_name'], '../uploads/' . $_FILES['fileUpload']['name']);
        echo "upload thành công <br/>";
        echo 'Dường dẫn: uploads/' . $_FILES['fileUpload']['name'] . '<br>';
        echo 'Loại file: ' . $_FILES['fileUpload']['type'] . '<br>';
        echo 'Dung lượng: ' . ((int)$_FILES['fileUpload']['size'] / 1024) . 'KB';
        echo '<script>close()</script>';
    }
	// $username = 'root'; // Khai báo username
    //   $password = '';      // Khai báo password
    //   $server   = 'localhost';   // Khai báo server
    //   $dbname   = "file";      // Khai báo database
      
    //   $connect = new mysqli($server, $username, $password, $dbname);
    //   if ($connect->connect_error) {
	// 	  echo ("fail");
    //     die("Không kết nối :" . $connect->connect_error);
    //     exit();
    // }
	
	//$file = $_FILES['fileUpload']['name'];
	$file = $_POST['fileName'];
	$url = '../uploads/' . $_FILES['fileUpload']['name'];
	$date = "" . date("d/m/Y");
    echo $date;

    include 'controller.php';
	$ctrl = new File();
	
    $result = $ctrl->uploadFile($file,$url,$date);
    
    // include "../config.php";
    // $connect = new config();
	
	//  $sql = "INSERT INTO file (file,url,date)
    //   VALUES ('$file','$url','$date')";
	  
    //   if ($connect->traverseFunc($sql) === TRUE) {
    //     echo ("Thêm dữ liệu thành công");
    // } // else {
    //     echo "Error: " . $sql . "<br>" . $connect->error;
    // }
}


?>
</body>
</html>