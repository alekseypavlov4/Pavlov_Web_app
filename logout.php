<?php
session_start();
session_destroy();
setcookie('logged_in', '', time()-1, '/');
header("Location: login.php");
exit;
?>
