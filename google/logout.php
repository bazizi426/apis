<?php
include_once("config.php");

unset($_SESSION['token']);
unset($_SESSION['google_data']); //Google session data unset
$gClient->revokeToken();

header("Location:/index.php");
exit;


?>