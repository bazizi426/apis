<?php
session_start();

session_destroy();
if( isset($_SESSION['email']) ) unset($_SERVER['email']);
if( isset($_SESSION['error']) ) unset($_SERVER['error']);
if( isset($_SESSION['username']) ) unset($_SERVER['username']);
header('Location: /index.php');
exit;