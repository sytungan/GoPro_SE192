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
        <h1 class="title">
            Thời khóa biểu
        </h1>
        <?php 
        include "config.php";
        $connect = new Config();
        $sql = "SELECT * FROM tkb";
        $result =  $connect->traverse($sql);
        foreach ($result as $row)
        {
        ?>
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
                <td><input type="text" name="subject21" value=""></td>
                <td><input type="text" name="subject31" value=""></td>
                <td><input type="text" name="subject41" value=""></td>
				        <td><input type="text" name="subject51" value=""></td>
                <td><input type="text" name="subject61" value=""></td>
                <td><input type="text" name="subject71" value=""></td>
                <td><input type="text" name="subject81" value=""></td>
            </tr>
            <tr>
                <td><input type="text" name="subject22" value=""></td>
                <td><input type="text" name="subject32" value=""></td>
                <td><input type="text" name="subject42" value=""></td>
				        <td><input type="text" name="subject52" value=""></td>
                <td><input type="text" name="subject62" value=""></td>
                <td><input type="text" name="subject72" value=""></td>
                <td><input type="text" name="subject82" value=""></td>
            </tr>
            <tr>
                <td><input type="text" name="subject23" value=""></td>
                <td><input type="text" name="subject33" value=""></td>
                <td><input type="text" name="subject43" value=""></td>
			        	<td><input type="text" name="subject53" value=""></td>
                <td><input type="text" name="subject63" value=""></td>
                <td><input type="text" name="subject73" value=""></td>
                <td><input type="text" name="subject83" value=""></td>
            </tr>
            <tr>
                <td><input type="text" name="subject24" value=""></td>
                <td><input type="text" name="subject34" value=""></td>
                <td><input type="text" name="subject44" value=""></td>
			        	<td><input type="text" name="subject54" value=""></td>
                <td><input type="text" name="subject64" value=""></td>
                <td><input type="text" name="subject74" value=""></td>
                <td><input type="text" name="subject84" value=""></td>
            </tr>
            <tr>
			        	<td><input type="text" name="subject25" value=""></td>
			        	<td><input type="text" name="subject35" value=""></td>
                <td><input type="text" name="subject45" value=""></td>
			        	<td><input type="text" name="subject55" value=""></td>
                <td><input type="text" name="subject65" value=""></td>
                <td><input type="text" name="subject75" value=""></td>
                <td><input type="text" name="subject85" value=""></td>
          </tr>
        <?php } ?> 
        </tbody>
        </table>
		<button type="submit" class="btn">LƯU TKB</button>
		<a href="viewtkb.php" class="btn">XEM TKB</a>
      </form>
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

    // include "config.php";
    // $connect = new Config();

  $subject21 = "";
	$subject22 = "";
	$subject23 = "";
	$subject24 = "";
	$subject25 = "";
	
	$subject31 = "";
	$subject32 = "";
	$subject33 = "";
	$subject34 = "";
	$subject35 = "";
	
	$subject41 = "";
	$subject42 = "";
	$subject43 = "";
	$subject44 = "";
	$subject45 = "";
	
	$subject51 = "";
	$subject52 = "";
	$subject53 = "";
	$subject54 = "";
	$subject55 = "";
	
	$subject61 = "";
	$subject62 = "";
	$subject63 = "";
	$subject64 = "";
	$subject65 = "";
	
	$subject71 = "";
	$subject72 = "";
	$subject73 = "";
	$subject74 = "";
	$subject75 = "";
	
	$subject81 = "";
	$subject82 = "";
	$subject83 = "";
	$subject84 = "";
	$subject85 = "";
	
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["subject21"])) { $subject21 = $_POST['subject21']; }
	  if(isset($_POST["subject22"])) { $subject22 = $_POST['subject22']; }
	  if(isset($_POST["subject23"])) { $subject23 = $_POST['subject23']; }
	  if(isset($_POST["subject24"])) { $subject24 = $_POST['subject24']; }
	  if(isset($_POST["subject25"])) { $subject25 = $_POST['subject25']; }
	  
	  if(isset($_POST["subject31"])) { $subject31 = $_POST['subject31']; }
	  if(isset($_POST["subject32"])) { $subject32 = $_POST['subject32']; }
	  if(isset($_POST["subject33"])) { $subject33 = $_POST['subject33']; }
	  if(isset($_POST["subject34"])) { $subject34 = $_POST['subject34']; }
	  if(isset($_POST["subject35"])) { $subject35 = $_POST['subject35']; }
	  
	  if(isset($_POST["subject41"])) { $subject41 = $_POST['subject41']; }
	  if(isset($_POST["subject42"])) { $subject42 = $_POST['subject42']; }
	  if(isset($_POST["subject43"])) { $subject43 = $_POST['subject43']; }
	  if(isset($_POST["subject44"])) { $subject44 = $_POST['subject44']; }
	  if(isset($_POST["subject45"])) { $subject45 = $_POST['subject45']; }
	  
	  if(isset($_POST["subject51"])) { $subject51 = $_POST['subject51']; }
	  if(isset($_POST["subject52"])) { $subject52 = $_POST['subject52']; }
	  if(isset($_POST["subject53"])) { $subject53 = $_POST['subject53']; }
	  if(isset($_POST["subject54"])) { $subject54 = $_POST['subject54']; }
	  if(isset($_POST["subject55"])) { $subject55 = $_POST['subject55']; }
	  
	  if(isset($_POST["subject61"])) { $subject61 = $_POST['subject61']; }
	  if(isset($_POST["subject62"])) { $subject62 = $_POST['subject62']; }
	  if(isset($_POST["subject63"])) { $subject63 = $_POST['subject63']; }
	  if(isset($_POST["subject64"])) { $subject64 = $_POST['subject64']; }
	  if(isset($_POST["subject65"])) { $subject65 = $_POST['subject65']; }
	  
	  if(isset($_POST["subject71"])) { $subject71 = $_POST['subject71']; }
	  if(isset($_POST["subject72"])) { $subject72 = $_POST['subject72']; }
	  if(isset($_POST["subject73"])) { $subject73 = $_POST['subject73']; }
	  if(isset($_POST["subject74"])) { $subject74 = $_POST['subject74']; }
	  if(isset($_POST["subject75"])) { $subject75 = $_POST['subject75']; }
	  
	  if(isset($_POST["subject81"])) { $subject81 = $_POST['subject81']; }
	  if(isset($_POST["subject82"])) { $subject82 = $_POST['subject82']; }
	  if(isset($_POST["subject83"])) { $subject83 = $_POST['subject83']; }
	  if(isset($_POST["subject84"])) { $subject84 = $_POST['subject84']; }
	  if(isset($_POST["subject85"])) { $subject85 = $_POST['subject85']; }
      
      // for ($i=2; $i<=8; $i++){
      //         for ($j=1; $j<=5; $j++){
      //             $subject = "subject".$i.$j;
      //             echo $subject;
      //         }
      // }

      // $sql= "SELECT count(*) FROM tkb";
      // $result = $connect->query($sql);
      // $total = $result->fetch_assoc(); 
      // echo $total;

    // $result = mysql_query("SELECT COUNT(*) AS `count` FROM `tkb`");
    // $row = mysql_fetch_assoc($result);
    // $count = $row['count'];

      // $sql = "INSERT INTO tkb ( 
      //   subject21, subject22, subject23, subject24, subject25,
      //   subject31, subject32, subject33, subject34, subject35,
      //   subject41, subject42, subject43, subject44, subject45,
      //   subject51, subject52, subject53, subject54, subject55,
      //   subject61, subject62, subject63, subject64, subject65,
      //   subject71, subject72, subject73, subject74, subject75,
      //   subject81, subject82, subject83, subject84, subject85
      // )
      //   VALUES (
      //   '$subject21','$subject22','$subject23','$subject24','$subject25',
      //   '$subject31','$subject32','$subject33','$subject34','$subject35',
      //   '$subject41','$subject42','$subject43','$subject44','$subject45',
      //   '$subject51','$subject52','$subject53','$subject54','$subject55',
      //   '$subject61','$subject62','$subject63','$subject64','$subject65',
      //   '$subject71','$subject72','$subject73','$subject74','$subject75',
      //   '$subject81','$subject82','$subject83','$subject84','$subject85'
      //   )";
   
   
	  
    //   if ($connect->query($sql) === TRUE) {
    //     echo ("Thêm dữ liệu thành công");
    // } else {
    //     echo "Error: " . $sql . "<br>" . $connect->error;
    // }

      $subject_ = array (
        'subject21' => $subject21,
        'subject22' => $subject22,
        'subject23' => $subject23,
        'subject24' => $subject24,
        'subject25' => $subject25,

        'subject31' => $subject31,
        'subject32' => $subject32,
        'subject33' => $subject33,
        'subject34' => $subject34,
        'subject35' => $subject35,

        'subject41' => $subject41,
        'subject42' => $subject42,
        'subject43' => $subject43,
        'subject44' => $subject44,
        'subject45' => $subject45,

        'subject51' => $subject51,
        'subject52' => $subject52,
        'subject53' => $subject53,
        'subject54' => $subject54,
        'subject55' => $subject55,

        'subject61' => $subject61,
        'subject62' => $subject62,
        'subject63' => $subject63,
        'subject64' => $subject64,
        'subject65' => $subject65,

        'subject71' => $subject71,
        'subject72' => $subject72,
        'subject73' => $subject73,
        'subject74' => $subject74,
        'subject75' => $subject75,

        'subject81' => $subject81,
        'subject82' => $subject82,
        'subject83' => $subject83,
        'subject84' => $subject84,
        'subject85' => $subject85
      );

  $sql= "SELECT COUNT(*) as 'total' FROM tkb";
  $result = $connect->traverse($sql);
  foreach ($result as $row) {
    echo $row['total'];
    $total = $row['total'];
    break;
  }

  if ($total == 0){
    $sql = "INSERT INTO tkb ( 
      subject21, subject22, subject23, subject24, subject25,
      subject31, subject32, subject33, subject34, subject35,
      subject41, subject42, subject43, subject44, subject45,
      subject51, subject52, subject53, subject54, subject55,
      subject61, subject62, subject63, subject64, subject65,
      subject71, subject72, subject73, subject74, subject75,
      subject81, subject82, subject83, subject84, subject85
    )
      VALUES (
      '$subject21','$subject22','$subject23','$subject24','$subject25',
      '$subject31','$subject32','$subject33','$subject34','$subject35',
      '$subject41','$subject42','$subject43','$subject44','$subject45',
      '$subject51','$subject52','$subject53','$subject54','$subject55',
      '$subject61','$subject62','$subject63','$subject64','$subject65',
      '$subject71','$subject72','$subject73','$subject74','$subject75',
      '$subject81','$subject82','$subject83','$subject84','$subject85'
      )";
      $connect->traverseFunc($sql);
      $message = "Đã thêm TKB mới";
      echo "<script type='text/javascript'>alert('$message'); close(); </script>";
  }

  else {
  //   for ($i=2; $i<=8; $i++){
  //     for ($j=1; $j<=5; $j++){
  //         $subject = "subject".$i.$j;
  //         $day = ('$' . $subject);
  //         $sql = "UPDATE tkb SET $subject = $day";
  //         $connect->traverseFunc($sql);
  // }
  // }
  foreach($subject_ as $key=>$value){
    //echo $key.'=>'.$value;
    $sql = "UPDATE tkb SET $key = '$value'";
    //echo $sql;
    $connect->traverseFunc($sql);
  }
  $message = "Đã lưu TKB";
  echo "<script type='text/javascript'>alert('$message'); close(); </script>";
}
}

//Đóng database
//$connect->close();
    ?>
    </body>
    <footer>
    </footer>
</html>