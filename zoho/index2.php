<?php

  header("Content-type: application/xml");
  $token="d941d2b0cb2a64af2ab6313b3999dff6";
  $url = "https://crm.zoho.com/crm/private/xml/Leads/getRecords";
  $param= "authtoken=".$token."&scope=crmapi";
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_TIMEOUT, 30);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
  $result = curl_exec($ch);
  curl_close($ch);
  echo $result;
  return $result;

?>