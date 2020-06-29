
<!DOCTYPE html>
<html  xml:lang="nl" lang="nl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="A short description." />
    <meta name="keywords" content="put, keywords, here" />
    <title>PHP-MySQL forum</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

<h1>My forum</h1>
    <div id="wrapper">
    <div id="menu">
        <a class="item" href="/forum/view_cat.php">Forum</a> -
        <a class="item" href="/forum/create_topic.php">Create a topic</a> -
    <div id="userbar">
    <div id="userbar">
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
    </div>
    </div>
        <div id="content">