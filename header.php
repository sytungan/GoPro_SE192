<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/GoPro_SE192/assets/css/style.css" />
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
                echo '<a text-decoration="none" href="/GoPro_SE192/Userprofile.php?user_id=' .$_SESSION['user_id'].'">' . $_SESSION['user_nickname'] . '</a>  Not you? <a href="/GoPro_SE192/signout.php">Sign out</a>';
                
            }
            else
            {
                echo '<a href="/GoPro_SE192/signin.php">Sign in</a> or <a href="register.php">create an account</a>.';
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