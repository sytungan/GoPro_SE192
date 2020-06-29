<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type=text/css href="css/style.css">
    </head>
    <body>
	<?php

include '../controller/tkbController.php';
$ctrl = new Sched();
$result = $ctrl->getSched();

//   include "../config.php";
//   $connect = new Config();

//   $sql = "SELECT * FROM tkb";
//   $result =  $connect->traverse($sql);
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
break;  
}
    ?>
        </tbody>
        </table>
        <a href="editTkb.php" class="btn">SỬA TKB</a> 
		<!-- <button type="submit" class="btn">LƯU TKB</button> -->
      </form>
    </body>
    <footer>
    </footer>
</html>