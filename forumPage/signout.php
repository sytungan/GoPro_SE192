
<?php
session_start();
// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
$_SESSION = array();
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
session_destroy();
?>
<?php
include $_SERVER['DOCUMENT_ROOT']."/GoPro_SE192/header.php";
?>
<?php
include $_SERVER['DOCUMENT_ROOT']."/GoPro_SE192/footer.php";
?>