<!DOCTYPE html>
<html>

<head>
</head>
<style>
    * {
        font-family: sans-serif;
        /* Change your font family */
    }

    .title {
        margin-left: 130px;
    }

    .content-table {
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        min-width: 400px;
        border-radius: 5px 5px 0 0;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }

    .content-table thead tr {
        background-color: #009879;
        color: #ffffff;
        text-align: left;
        font-weight: bold;
    }

    .content-table th,
    .content-table td {
        padding: 12px 15px;
    }

    .content-table tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    .content-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .content-table tbody tr:last-of-type {
        border-bottom: 2px solid #009879;
    }

    .btn{
    text-decoration: none;
    color: white;
    background-color: #e6760e;
    padding: 15px 30px;
    border-radius: 20px;
    margin: 0 5px;
    width: 60px;
    display: inline-block;
    text-align: center;
    transition: all .3s;
}
</style>

<body>

    <body>
	<?php
    include "config.php";
    $connect = new config();
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

	$sql = "SELECT * FROM file";
    // $result = $connect->query($sql);
    $result = $connect->traverse($sql);
	
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
    <a href="uploadfile.php" target="_blank" class="btn">Tải lên</a>
    <a href="deletefile.php" target="_blank" class="btn">Xóa</a>
</html>