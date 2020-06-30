<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>GoProToUniversity</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <script src="assets/js/fontAwesome.js"></script>
</head>

<body>
    <div id="header">
        <a id="logo" href="index.php"><img src="assets/image/logo.png" alt="logo" /></a>
        <div id="webName">
            <h2>GOPRO TO UNIVERSITY</h2>
        </div>
    </div>
    <div id="searchAndLogin">
        <div id="login">
            <a class="login" href="signin.php">Đăng nhập</a> &ensp;
            <a class="login" href="register.php">Đăng kí</a>
        </div>
        <form>
            <input class="search" type="text" name="search" placeholder="Tìm kiếm">
        </form>
    </div>

    <div id="menu">
        <ul id="main_menu">
            <li class="active"> <a href="index.php">Trang chủ</a> </li>
            <li> <a href="weeklyTest.php">Đề thi tuần</a></li>
            <li> <a href="testExamPage/testExam.php">Thi thử</a></li class="active">
            <li> <a href="createExamPage/">Tạo đề thi</a></li>
            <li> <a href="schedulePage/view/viewTkb.php">Thời khóa biểu</a></li>
            <li> <a href="filePage/view/manageFile.php">Tài liệu</a></li>
            <li> <a href="approvePage/">Duyệt đề thi</a></li>
            <li> <a href="searchPage/">Tìm kiếm đề thi</a></li>
            <li> <a href="forumPage/header.php">Diễn đàn</a></li>
        </ul>

    </div>

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
            <img src="assets/image/other_news.png" alt="news" />
        </div>
        <div id="bxh">
            <h4>BẢNG XẾP HẠNG</h4> <br />
            <div id="_bxh">
                <h6>TUẦN 45<br>(22/6-29/6/2020)</h6>
                <div class="rank">
                    <img src="assets/image/rank1.png" alt="rank1"/>
                    <p>&ensp; Có làm mới có ăn </p> <br />
                </div>
                <div class="rank">
                    <img src="assets/image/rank2.png" alt="rank1" />
                    <p>&ensp; Thăm ngàn</p><br />
                </div>
                <div class="rank">
                    <img src="assets/image/rank3.png" alt="rank1" />
                    <p>&ensp; NewBitcoin 3,14 </p><br />
                </div>
            </div>
        </div>
    </div>

    


    <script src="assets/js/countdownClock.js">
        var deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
        initializeClock('clockdiv', deadline);
    </script>


</body>

<?php
include "footer.php";
?>