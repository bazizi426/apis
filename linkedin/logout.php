<?php
session_start();

if (isset($_SESSION['OAUTH_ACCESS_TOKEN']) ) unset($_SESSION['OAUTH_ACCESS_TOKEN']);
if (isset($_SESSION['loggedin_user_id']) ) unset($_SESSION['loggedin_user_id']);
if (isset($_SESSION['user']) ) unset($_SESSION['user']);

header("location:/index.php");
exit;
?>