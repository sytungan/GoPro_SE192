<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type=text/css href="css/style.css">
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
	// //$result = $connect->query($sql);
    // $result = $connect->traverse($sql);
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
					<th></th>
                </tr>
            </thead>
            <?php //while($row = $result->fetch_assoc())
            foreach($result as $row)
         {
	//$row = $result->fetch_assoc(); 
	?>
            <tbody>
                <tr>
                <td>
                    <a href=<?php echo $row["url"]; ?>><?php echo $row["file"];?></a>
                </td>
                <td>
                      <?php echo $row["date"];?>
                </td>
				<td>
                    <a href="../controller/delete.php?url=<?php echo $row['url'];?>" target="_blank" class="delete">xóa</a>
					<!--<button type = "submit" class="delete" method="post">xóa</button> -->
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
    <!-- <a href="" class="btn">Chỉnh</a>
    <a href="uploadfile.php" class="btn">Tải lên</a> 
    <a href="" class="btn">Xóa</a> -->
</html>