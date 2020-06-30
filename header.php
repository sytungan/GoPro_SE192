<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.css" />
</head>
<div id="header">
    <a id="logo" href="../index.php"><img src="/GoPro_SE192/assets/image/logo.png" alt="logo" /></a>
    <div id="webName">
        <h2>GOPRO TO UNIVERSITY</h2>
    </div>
</div>
<div id="searchAndLogin">
    <div id="helloUser">
        <span>
            <?php
            if(isset($_SESSION['signed_in']))
            {
                echo 'Hello ' . $_SESSION['user_name'] . '. Not you? <a href="signout.php">Sign out</a>';
            }
            else
            {
                echo '<a href="signin.php">Sign in</a> or <a href="register.php">create an account</a>.';
            }
            ?>
        </span> 
    </div>
    <form>
        <input class="search" type="text" name="search" placeholder="Tìm kiếm">
    </form>
</div>
<div id="menu">
        <ul id="main_menu">
            <li> <a href="index.php">Trang chủ</a> </li>
            <li> <a href="weeklyTest.php">Đề thi tuần</a></li>
            <li class="active"> <a href="testExamPage/testExam.php">Thi thử</a></li class="active">
            <li> <a href="schedulePage/view/viewTkb.php">Thời khóa biểu</a></li>
            <li> <a href="filePage/view/manageFile.php">Tài liệu</a></li>
            <li> <a href="approvePage/">Duyệt đề thi</a></li>
            <li> <a href="searchPage/">Tìm kiếm đề thi</a></li>
            <li> <a href="forumPage/header.php">Diễn đàn</a></li>
        </ul>

</div>

