<?php
include_once("config.php");

	$facebook->destroySession();
	session_start();
	unset($_SESSION['userdata']);
	header("Location: /index.php");
	exit;
?>