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

