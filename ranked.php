<?php
$subject = Array("Toán","Lý","Hóa","Sinh","Anh","Sử","Địa","GDCD");
$randSubject = $subject[array_rand($subject)];
?>
<h4>BẢNG XẾP HẠNG</h4> <br>
<div id="_bxh">
    <h6 style = "text-transform:uppercase;">
        TUẦN <?php echo date('W')?> - MÔN: <?php echo $randSubject?> <br>
        <?php 
        echo date("d/m", strtotime('monday this week'));
        echo " - ";
        echo date("d/m/Y", strtotime('sunday this week'));
        ?>
    </h6>

<?php
include 'testExamPage/model/markDB.php';
$db = new markDB();
$week = date('W');
$result = $db->getRanking($randSubject, 3, $week);
$i = 1;
foreach ($result as $p) {
    echo '
    <div class="rank">
    <img src="assets/image/rank'.$i.'.png" alt="rank1" />
    <p>&ensp; '.$p['user_nickname'].'</p><br>
    </div>';
    $i += 1;
}
?>
</div>