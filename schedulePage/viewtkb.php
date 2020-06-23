<!DOCTYPE html>
<html>
    <head>
    </head>
    <style>
* {
  font-family: sans-serif; /* Change your font family */
}

.title{
    margin-left: 170px;
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
    margin-left: 170px;
    text-decoration: none;
    color: white;
    background-color: #e6760e;
    padding: 15px 30px;
    border-radius: 20px;
    /* margin: 0 5px; */
    width: 190px;
    display: inline-block;
    text-align: center;
    transition: all .3s;
}
    </style>
    <body>
	<?php
    //   $username = 'root'; // Khai báo username
    //   $password = '';      // Khai báo password
    //   $server   = 'localhost';   // Khai báo server
    //   $dbname   = "tkb";      // Khai báo database
      
    //   $connect = new mysqli($server, $username, $password, $dbname);
    //   if ($connect->connect_error) {
		//   echo ("fail");
    //     die("Không kết nối :" . $connect->connect_error);
    //     exit();
    // }

  include "config.php";
  $connect = new Config();

	$sql = "SELECT * FROM tkb";
  $result =  $connect->traverse($sql);
	// while($row = $result->fetch_assoc())
        // {
  //$row = $result->fetch_assoc(); 
  foreach ($result as $row)
  {
?>
        <h1 class="title">
            Thời khóa biểu
        </h1>
        <form action="" method="post">
        <table class="content-table">
            <thead>
           <tr>
               <th>Thứ Hai</th>
               <th>Thứ Ba</th>
               <th>Thứ Tư</th>
               <th>Thứ Năm</th>
               <th>Thứ Sáu</th>
               <th>Thứ Bảy</th>
               <th>Chủ Nhật</th>
           </tr>
        </thead>
        <tbody>
           <tr>
                <td><?php echo $row["subject21"]; ?></td>
                <td><?php echo $row["subject31"]; ?></td>
                <td><?php echo $row["subject41"]; ?></td>
                <td><?php echo $row["subject51"]; ?></td>
                <td><?php echo $row["subject61"]; ?></td>
                <td><?php echo $row["subject71"]; ?></td>
				        <td><?php echo $row["subject81"]; ?></td>
            </tr>
            <tr>
                <td><?php echo $row["subject22"]; ?></td>
                <td><?php echo $row["subject32"]; ?></td>
                <td><?php echo $row["subject42"]; ?></td>
                <td><?php echo $row["subject52"]; ?></td>
                <td><?php echo $row["subject62"]; ?></td>
                <td><?php echo $row["subject72"]; ?></td>
			        	<td><?php echo $row["subject82"]; ?></td>
            </tr>
            <tr>
                <td><?php echo $row["subject23"]; ?></td>
                <td><?php echo $row["subject33"]; ?></td>
                <td><?php echo $row["subject43"]; ?></td>
                <td><?php echo $row["subject53"]; ?></td>
                <td><?php echo $row["subject63"]; ?></td>
                <td><?php echo $row["subject73"]; ?></td>
				        <td><?php echo $row["subject83"]; ?></td>
            </tr>
            <tr>
                <td><?php echo $row["subject24"]; ?></td>
                <td><?php echo $row["subject34"]; ?></td>
                <td><?php echo $row["subject44"]; ?></td>
                <td><?php echo $row["subject54"]; ?></td>
                <td><?php echo $row["subject64"]; ?></td>
                <td><?php echo $row["subject74"]; ?></td>
			        	<td><?php echo $row["subject84"]; ?></td>
            </tr>
            <tr>
              <td><?php echo $row["subject25"]; ?></td>
              <td><?php echo $row["subject35"]; ?></td>
              <td><?php echo $row["subject45"]; ?></td>
              <td><?php echo $row["subject55"]; ?></td>
              <td><?php echo $row["subject65"]; ?></td>
              <td><?php echo $row["subject75"]; ?></td>
		          <td><?php echo $row["subject85"]; ?></td>
          </tr>
		  <?php
//} 
//Đóng database
break;  
}
//$connect->close();
    ?>
        </tbody>
        </table>
        <a href="tkb.php" class="btn">SỬA TKB</a> 
		<!-- <button type="submit" class="btn">LƯU TKB</button> -->
      </form>
    </body>
    <footer>
    </footer>
</html>