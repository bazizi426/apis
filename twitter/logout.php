<?php
if(array_key_exists('logout',$_GET))
{
	session_start();
	unset($_SESSION['userdata']);
	header("Location:/index.php");
}
?>