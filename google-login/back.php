<?php
session_start();
$_SESSION['_google_code_'] = isset($_GET['code']) ? $_GET['code']: '';

header('Location: /index.php');
exit;