<?php
session_start();
include_once("src/Google_Client.php");
include_once("src/contrib/Google_Oauth2Service.php");
######### edit details ##########
$clientId = '1012874902219-ba4ioj9a65lucqbd6fd67nm4518qofs7.apps.googleusercontent.com'; //Google CLIENT ID
$clientSecret = '0B_SqMiQNFSNjhDAqBrrs4jp'; //Google CLIENT SECRET
$redirectUrl = 'http://api-bazizi426.c9users.io';  //return url (url to script)
$homeUrl = 'http://api-bazizi426.c9users.io/google/done.php';  //return to home

##################################

$gClient = new Google_Client();

$gClient->setApplicationName('c9 web app');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectUrl);
$gClient->setScopes('email');

$google_oauthV2 = new Google_Oauth2Service($gClient);


?>