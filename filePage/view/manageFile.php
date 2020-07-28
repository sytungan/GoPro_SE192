<!DOCTYPE html>
<html>

<head> 
    <link rel="stylesheet" type=text/css href="css/style.css">
    <meta charset="UTF-8">
    <title>GoProToUniversity</title>
    <link rel="stylesheet" href="../../assets/css/style.css" />
    <script src="../assets/js/fontAwesome.js"></script>
</head>
<body>
    <body>
	<?php
    // include "../config.php";
    // $connect = new config();

    
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

	// $sql = "SELECT * FROM file";
    // // $result = $connect->query($sql);
    // $result = $connect->traverse($sql);
    include "../../header.php";
    include '../controller/controller.php';
    $ctrl = new File();
    $result = $ctrl->getFile();
	
	?>
        <h1 class="title">
            Tài liệu 
        </h1>
        <table class="content-table">
            <thead>
                <tr>
                    <th>Tài liệu</th>
                    <th>Date</th>
                </tr>
            </thead>
            <?php //while($row = $result->fetch_assoc())
            foreach ($result as $row)
         {
	?>
            <tbody>
                <tr>
                <td>
                    <a href=<?php echo $row["url"]; ?>><?php echo $row["file"];?></a>
                </td>
                <td>
                    <?php echo $row["date"];?>
                </td>
                </tr>
                
            </tbody>
		 <?php } ?>
            </table>
    </body>
	 <?php
//Đóng database
//$connect->close();
    ?>
    <!-- <a href="" class="btn">Chỉnh</a> -->
    <a href="../controller/uploadfile.php" target="_blank" class="btn">Tải lên</a>
    <a href="deletefile.php" target="_blank" class="btn">Xóa</a>
    <br>
    <br>
    <br>
    <?php
include "../../footer.php";
?>
</html>