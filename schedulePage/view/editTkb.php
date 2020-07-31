<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>GoProToUniversity</title>
    <link rel="stylesheet" href="../../assets/css/style.css" />
    <link rel="stylesheet" type=text/css href="css/style.css">
    <script src="../assets/js/fontAwesome.js"></script>
    </head>
    <body>
    <?php 
    include "../../header.php";
    ?>
        <h1 class="title">
            Thời khóa biểu
        </h1>
        <?php 
        // include "../config.php";
        // $connect = new Config();
        // $sql = "SELECT * FROM tkb";
        // $result =  $connect->traverse($sql);
        // foreach ($result as $row)
        // {
        ?> 
        <form action="../controller/tkbController.php" method="post" target="_blank">
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
        <?php //} ?> 
        </tbody>
        </table>
        <div class="beforebtn">
		<button type="submit" class="btn" target="_blank">LƯU TKB</button>
		<a href="viewtkb.php" class="btn" target="_blank">XEM TKB</a>
        <!-- <button type="submit" onclick="viewtkb.php" class="btn" target="_blank">XEM TKB</button> -->
        </div>
      </form>
    </body>
    <footer>
    <?php
include "../../footer.php";
?>
    </footer>
</html>