<!DOCTYPE html>
<head>
    <title>GoProToUniversity</title>
</head>

<body>
<?php 
    include 'header.php'; 
?>
    <div id="clockdiv">
        <h3>Đếm ngược đến kỳ thi THPTQG</h3>
        <div>
            <span class="days"></span>
            <div class="smalltext">Days</div>
        </div>
        <div>
            <span class="hours"></span>
            <div class="smalltext">Hours</div>
        </div>
        <div>
            <span class="minutes"></span>
            <div class="smalltext">Minutes</div>
        </div>
        <div>
            <span class="seconds"></span>
            <div class="smalltext">Seconds</div>
        </div>
    </div>
    <div id="newsAndBxh">
        <div id="news_img">
            <h4>TIN NỔI BẬT</h4>
            <img src="assets/image/news.png" alt="news" />
        </div>
        <div id="otherNews">
            <h4>TIN TỨC KHÁC</h4>
            <?php
            include "news.php";
            ?> 
        </div>
        <div id="bxh">
            <?php
            include "ranked.php";
            ?>
        </div>
    </div>

    


    <script src="/GoPro_SE192/assets/js/countdownClock.js">
        var deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
        initializeClock('clockdiv', deadline);
    </script>


</body>

<?php
include "footer.php";

?>