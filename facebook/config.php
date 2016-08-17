<?php
include_once("inc/facebook.php"); //include facebook SDK
######### Facebook API Configuration ##########
$appId = '314809711901786'; //Facebook App ID
$appSecret = 'b6b9f9589ffd1947557a15edbd9525c1'; // Facebook App Secret
$homeurl = 'http://api-bazizi426.c9users.io/facebook/';  //return to home
$fbPermissions = 'email';  //Required facebook permissions

//Call Facebook API
$facebook = new Facebook(array(
  'appId'  => $appId,
  'secret' => $appSecret

));
$fbuser = $facebook->getUser();
?>