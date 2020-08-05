<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/GoPro_SE192/assets/css/style.css" />
    <script src="/GoPro_SE192/assets/js/fontAwesome.js"></script>
</head>
<div id="header">
    <a id="logo" href="/GoPro_SE192/index.php"><img src="/GoPro_SE192/assets/image/logo.png" alt="logo" /></a>
    <div id="webName">
        <h2>GOPRO TO UNIVERSITY</h2>
    </div>
</div>
<div id="searchAndLogin">
    <div id="helloUser">
        <span>
            <?php
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            if(isset($_SESSION['signed_in']))
            {
                echo '<h3>Xin chào <a text-decoration="none" href="/GoPro_SE192/Userprofile.php?user_id=' .$_SESSION['user_id'].'">' . $_SESSION['user_nickname'] . '</a>, <a href="/GoPro_SE192/signout.php">Đăng xuất</a></h3>';
                
            }
            else
            {
                echo '<h3><a href="/GoPro_SE192/signin.php">Đăng nhập</a> hoặc <a href="register.php">Tạo tài khoản mới</a>.</h3>';
            }
            ?>
        </span> 
    </div>
</div>
<div id="menu">
<?php
if(isset($_SESSION['signed_in'])) {
    if ($_SESSION['user_level'] != 1) {
        if ($_SESSION['user_role'] == 'Student') include "menuStudent.php";
        else include "menuTeacher.php";
    }
    else include "menuAdmin.php";  
} 
?>
</div>